<?php

class ISC_GALLERYIMAGEDIR {

	//protected $imageDirectory = 'product_images/uploaded_images';
    public $imageDirectory = 'seightgallery';
	protected $dirObject = null;
	public $start = null;
	public $finish = null;
	public $sortField = 'name';
	public $sortDirection = 'asc';
	protected $dirItems = array();


    public function setImageDirectory($dir) {
        $this->imageDirectory = $dir;
    }
    
	public function __construct($galdir, $galname, $sortDirection='asc', $sortField='name')
	{
        $this->imageDirectory = $galdir . '/' . $galname;
		if($sortDirection == 'desc'){
			$this->sortDirection = 'desc';
		}

		if($sortField == 'size' || $sortField == 'modified'){
			$this->sortField = $sortField;
		}

		$this->dirObject = new DirectoryIterator($this->GetImagePath());
		foreach($this->dirObject as $dirItem) {
			if($this->IsImageFile($dirItem)){
				list($width, $height) = @getimagesize($dirItem->getPathname());
				$width = max((int)$width, 10);
				$height = max((int)$height, 10);
				$origWidth = $width;
				$origHeight = $height;

				if($width > 200){
					$height = (200/$width) * $height;
					$width = 200;
				}

				if($height > 150){
					$width = (150/$height) * $width;
					$height = 150;
				}

				$this->dirItems[] = array(
										'id'=>md5((string)$dirItem->getFilename()),
										'url'=>$this->GetImageDir() . '/' . (string)$dirItem->getFilename(),
                                        'thumburl'=>$this->GetImageDir() . '/thumbs/' . (string)$dirItem->getFilename(),
										'name'=>(string)$dirItem->getFilename(),
										'size'=>(string)filesize($dirItem->getPathname()),
										'modified'=>(string)filemtime($dirItem->getPathname()),
										'height'=>(string)$height,
										'origheight'=>(string)$origHeight,
										'width'=>(string)$width,
										'origwidth'=>(string)$origWidth,
									);
			}
		}
		if($sortField == 'size' || $sortField == 'modified'){
			usort($this->dirItems, array($this, 'isc_imgcmpint'));
		}else{
			usort($this->dirItems, array($this, 'isc_imgcmpstr'));
		}
	}

	public function findFileNameById($id)
	{
		foreach($this->dirItems as $imageInfo) {
			if($imageInfo['id'] == $id) {
				return $imageInfo['name'];
			}
		}
		return false;
	}

	public function GetDisplayName($name)
	{
		if(strlen($name) < 25){
			return $name;
		}

		$first = substr($name, 0, 12);
		$last = substr($name, -12);
		return $first. '...'.$last;
	}

	public function CountDirItems()
	{
		return count($this->dirItems);
	}

	public function GetImageDirFiles()
	{
		if(is_null($this->start) ||is_null($this->finish)){
			return $this->dirItems;
		}

		$returnItems = array();

		for($i=$this->start; $i<$this->finish; ++$i){
			if(isset( $this->dirItems[$i])){
				$returnItems[] = $this->dirItems[$i];
			}
		}

		return $returnItems;
	}

	public function GetImagePath()
	{
		return ISC_BASE_PATH . '/'  . $this->imageDirectory;
	}

	public function GetImageDir()
	{
		return GetConfig('ShopPath') . '/'   . $this->imageDirectory;
	}

	public function IsImageFile($fileName)
	{
		if($fileName->isDir() || $fileName->isDot()){
			return false;
		}

		$validImages = array('png' , 'jpg', 'gif', 'jpeg' ,'tiff', 'bmp');
		foreach($validImages as $image){
			if(strtolower(substr($fileName, $this->neg(strlen($image))-1)) == '.' . $image){
				return true;
			}
		}
		return false;
	}

	public function isc_imgcmpstr($a, $b)
	{
		$return = strnatcmp(isc_strtolower($a[$this->sortField]), isc_strtolower($b[$this->sortField]));
		if($return === -1){
			$return = false;
		}else{
			$return = true;
		}
		if($this->sortDirection == 'desc'){
			return !$return;
		}
		return $return;
	}

	public function isc_imgcmpint($a, $b)
	{
		$return = false;
		if($a[$this->sortField] >= $b[$this->sortField]){
			$return = true;
		}

		if($this->sortDirection == 'desc'){
			return !$return;
		}
		return $return;
	}

	public function neg($num)
	{
		$num = (int)$num;
		return ($num - ($num*2));
	}

}

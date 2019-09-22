<?php

if (!defined('ISC_BASE_PATH')) {
	die();
}

class ISC_ADMIN_REMOTE_GALLERYIMAGEMANAGER extends ISC_ADMIN_REMOTE_BASE
{
	public function __construct()
	{
		$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->LoadLangFile('galleryimagemanager');
		parent::__construct();
	}

	/**
	 * Handle the incoming action and pass it off to the correct method.
	 */
	public function HandleToDo()
	{
		$what = isc_strtolower(@$_REQUEST['w']);
        $galleryname = urldecode($_REQUEST['gal_name']);
		switch ($what) {
			case 'uploadimage':
				$this->UploadImage($galleryname);
				break;
			case 'getimageslist':
				$this->GetImagesList($galleryname);
				break;
			case 'rename':
				$this->RenameImage($galleryname);
				break;
			case 'delete':
				$this->DeleteImage($galleryname);
				break;
		}
	}

	/**
	 * Fetch and return a list of images in a specific folder. Will only include valid images and will recurse in to subfolders.
	 *
	 * @param string The path to fetch images from.
	 * @return array An array of the images that were found.
	 */
	private function FetchImages($galleryName, $path='')
	{
		$images = array();
		//$realPath = ISC_BASE_PATH.'/'.GetConfig('ImageDirectory').'/uploaded_images/'.$path;
        $realPath = ISC_BASE_PATH.'/'.GetConfig('galleryDir').'/'.$galleryName.'/'.$path;
		if(!is_dir($realPath)) {
			return $images;
		}

		$files = scandir($realPath);
		foreach($files as $file) {
			if(substr($file, 0, 1) == '.' || (!is_dir($realPath.'/'.$file) && !$this->IsImageFile($file))) {
				continue;
			}
			else if(is_dir($realPath.'/'.$file)) {
				$images = array_merge($images, $this->FetchImages($galleryName, $path.$file.'/'));
			}
			else {
				$images[] = $path.$file;
			}
		}

		return $images;
	}

	/**
	 * Build and output a list of images in the image uploads directory and format them using Javascript
	 * so that the TinyMCE image manager can display a list of them.
	 */
	private function GetImagesList($galleryName)
	{
		header('Content-type: text/javascript');

		$imageList = $this->FetchImages($galleryName);
		echo 'var tinyMCEImageList = new Array(';
		foreach($imageList as $k => $image) {
			$comma = ',';
			if(!isset($imageList[$k+1])) {
				$comma = '';
			}
			//echo '["'.$image.'","'.GetConfig('AppPath').'/'.GetConfig('ImageDirectory').'/uploaded_images/'.$image.'"]'.$comma."\n";
            echo '["'.$image.'","'.GetConfig('AppPath').'/'.GetConfig('galleryDir').'/'.$galleryName.'/'.$image.'"]'.$comma."\n";
		}
		echo ');';
		exit;
	}

	/**
	 * Upload a new image from the Image Manager or TinyMCE itself. Images are thrown in the uploaded_images
	 * directory. Invalid images (no dimensions available, mismatched type) are not accepted. Will output
	 * a JSON encoded array of details about the image just uploaded.
	 */
	private function UploadImage($galleryName)
	{
		if(empty($_FILES['Filedata'])) {
			exit;
		}

		$_FILES['Filedata']['filesize'] = Store_Number::niceSize($_FILES['Filedata']['size']);
		$_FILES['Filedata']['id'] = substr(md5($_FILES['Filedata']['name']), 0, 10);
		$_FILES['Filedata']['errorfile'] = false;
        $_FILES['Filedata']['imagepath'] = GetConfig('AppPath').'/'.GetConfig('galleryDir').'/'.$galleryName.'/';
		$_FILES['Filedata']['duplicate'] = false;

		if($_FILES['Filedata']['error'] != UPLOAD_ERR_OK) {
			$_FILES['Filedata']['erorrfile'] = 'badupload';
			die(isc_json_encode($_FILES));
		}

		// Sanitise uploaded image file name.
		$tmpName = $_FILES['Filedata']['tmp_name'];
		$original_name = $_FILES['Filedata']['name'];
		$name = slugify(basename($_FILES['Filedata']['name']));
		$info = pathinfo($name);
		if ($info['filename'] == '') {
			$name = uniqid().$name;
		}

        $destination = ISC_BASE_PATH.'/'.GetConfig('galleryDir').'/'.$galleryName.'/'.$name;

		if(!$this->IsImageFile(isc_strtolower($name))) {
			$_FILES['Filedata']['errorfile'] = 'badname';
		}
		else if(file_exists($destination)) {
			$_FILES['Filedata']['duplicate'] = true;
		}
		else if(!@move_uploaded_file($tmpName, $destination)) {
			$_FILES['Filedata']['errorfile'] = 'badupload';
		}
		else if(!$this->IsValidImageFile($destination)) {
			$_FILES['Filedata']['errorfile'] = 'badtype';
			@unlink($destination);
		}

		if (!($_FILES['Filedata']['errorfile'] || $_FILES['Filedata']['duplicate'])) {
			isc_chmod($destination, ISC_WRITEABLE_FILE_PERM);
            
            $thumb_destination = ISC_BASE_PATH.'/'.GetConfig('galleryDir').'/'.$galleryName.'/thumbs/'.$name;
            
            // create thumb images, reduce maxmimum width and height to 200px
            copy($destination, $thumb_destination);           
            list($thumb_imgWidth, $thumb_imgHeight) = @getimagesize($thumb_destination);
            $image_type = @exif_imagetype($thumb_destination);
            switch($image_type) {
                case IMAGETYPE_GIF:
                    $img_type = "gif";
                    break;
                case IMAGETYPE_JPEG:
                    $img_type = "jpeg";
                    break;
                case IMAGETYPE_PNG:
                    $img_type = "png";
                    break;
                default:
                    $img_type = "png";
            }
            
            /*if($thumb_imgWidth > 200 || $thumb_imgHeight > 200) { // resize the image
                if($thumb_imgWidth > $thumb_imgHeight) {
                    $scale = 200/$thumb_imgWidth;
                } else {
                    $scale = 200/$thumb_imgHeight;
                }
                $this->resizeImage($thumb_destination, $thumb_imgWidth, $thumb_imgHeight, $scale, $img_type);
            }*/
            if($thumb_imgHeight > 150) { // resize the image, fix the height to 150px
                $scale = 150/$thumb_imgHeight;
                $this->resizeImage($thumb_destination, $thumb_imgWidth, $thumb_imgHeight, $scale, $img_type);
            }
            // register the count of images
            $this->UpdateImageCount($galleryName, 1);
            
			// Get the image dimensions so we can show a thumbnail
			list($imgWidth, $imgHeight) = @getimagesize($destination);
			if(!$imgWidth || !$imgHeight) {
				$imgWidth = 200;
				$imgHeight = 150;
			}

            $_FILES['Filedata']['thumb'] = $this->GetImageDir($galleryName).'/'.$name;
            $_FILES['Filedata']['origwidth'] = $imgWidth;
            $_FILES['Filedata']['origheight'] = $imgHeight;
            $_FILES['Filedata']['dimensions'] = $imgWidth.' x '.$imgHeight.'px';

            /*if($imgWidth > 200) {
                $imgHeight = (200/$imgWidth) * $imgHeight;
                $imgWidth = 200;
            }*/

            if($imgHeight > 150) {
                $imgWidth = (150/$imgHeight) * $imgWidth;
                $imgHeight = 150;
            }

            $_FILES['Filedata']['width'] = $imgWidth;
            $_FILES['Filedata']['height'] = $imgHeight;
            
			$_FILES['Filedata']['name'] = $name;

			{
				//Adding image to database
				$insert_data = array();
				$galeryId = $GLOBALS['ISC_CLASS_DB']->Query("SELECT galid FROM [|PREFIX|]galleries WHERE galtitle = '$galleryName' LIMIT 1");
				$galeryId = $GLOBALS['ISC_CLASS_DB']->Fetch($galeryId);
				$insert_data['gallery_id'] = $galeryId['galid'];
				$insert_data['image_display_name'] = substr($original_name, 0, strrpos($original_name, '.') );
				$insert_data['image_file_name'] = $name;
				
				$GLOBALS['ISC_CLASS_DB']->InsertQuery( 'galleries_images' , $insert_data);
			}

			unset($_FILES['Filedata']['tmp_name']);
		}
		echo isc_json_encode($_FILES);
        
		exit;
	}

	private function UploadNonFlashFile()
	{
		$array = $_FILES;
		$array['hey'] = 'yo';
		die(isc_json_encode($array));
	}

	/**
	 * Check if a particular image is valid by checking the uploaded MIME type vs the actual
	 * MIME type of the image.
	 *
	 * @param string The path to the image file to check.
	 * @return boolean True if the image is valid, false if not.
	 */
	private function IsValidImageFile($fileName)
	{
		$imageTypes = array();
		$imageTypes[] = IMAGETYPE_GIF;
		$imageTypes[] = IMAGETYPE_JPEG;
		$imageTypes[] = IMAGETYPE_PNG;
		$imageTypes[] = IMAGETYPE_BMP;
		$imageTypes[] = IMAGETYPE_TIFF_II;

		$imageDimensions = @getimagesize($fileName);
		if(!is_array($imageDimensions) || !in_array($imageDimensions[2], $imageTypes, true)) {
			return false;
		}

		return true;
	}

	/**
	 * Check that a particular file name belongs to a list of known extensions
	 * for images.
	 *
	 * @param string The name of the file name.
	 * @return boolean True if the image has a valid file name, false if not.
	 */
	private function IsImageFile($fileName)
	{
		$validImages = array('png', 'jpg', 'gif', 'jpeg', 'tiff', 'bmp', 'jpe');
		foreach($validImages as $image) {
			if(substr($fileName, (int)-(strlen($image)+1)) === '.' . $image){
				return true;
			}
		}
		return false;
	}

	private function GetImagePath($galleryName)
	{
		return ISC_BASE_PATH . '/' . GetConfig('galleryDir') . "/".$galleryName;
	}

	private function GetImageAbsPath($galleryName)
	{
        return GetConfig("AppPath") . '/' . GetConfig('galleryDir') . "/".$galleryName;
	}

	private function GetImageDir($galleryName)
	{
		//return GetConfig("ShopPath") . '/'  . GetConfig('ImageDirectory') . "/uploaded_images";
        return GetConfig("ShopPath") . '/' . GetConfig('galleryDir') . "/".$galleryName;
	}

	private function RenameImage($galleryName)
	{
		// TODO: permission check
		ini_set('track_errors', '1');

		// lets get the extension from the old filename
		$ext = substr(strrchr($_POST['fromName'], "."), 0);
		$_POST['toName'] = slugify($_POST['toName']) . $ext;

		$return = array();
		if(strpos($_POST['toName'], '/') !== false || strpos($_POST['toName'], '\\') !== false ){
			$return['success'] = false;
			$return['message'] = GetLang('imageManagerRenameInvalidFileName');
			die(isc_json_encode($return));
		}

		if(!$this->IsImageFile($_POST['toName'])){
			$return['success'] = false;
			$return['message'] = GetLang('imageManagerRenameInvalidFileName');
			die(isc_json_encode($return));
		}

		if(!file_exists($this->GetImagePath($galleryName) . '/' . $_POST['fromName'])){
			$return['success'] = false;
			$return['message'] = GetLang('imageManagerFileDoesntExistRename');
			die(isc_json_encode($return));
		}

		if(file_exists($this->GetImagePath($galleryName) . '/' . $_POST['toName'])){
			$return['success'] = false;
			$return['message'] = GetLang('imageManagerRenameFileAlreadyExists');
			die(isc_json_encode($return));
		}

		if(!@rename($this->GetImagePath($galleryName) . '/' . $_POST['fromName'], $this->GetImagePath($galleryName) . '/' . $_POST['toName'])){
			if(isset($php_errormsg)){
				$msgBits = explode(':', $php_errormsg);
				if(isset($msgBits[1])){
					$message =  $msgBits[1] . '.';
				}else{
					$message =  $php_errormsg  . '.';
				}
			}else{
				$message = 'Unknown error.';
			}
			$return['success'] = false;
			$return['message'] = $message;
			die(isc_json_encode($return));
		}
        if(!@rename($this->GetImagePath($galleryName) . '/thumbs/' . $_POST['fromName'], $this->GetImagePath($galleryName) . '/thumbs/' . $_POST['toName'])){
            if(isset($php_errormsg)){
                $msgBits = explode(':', $php_errormsg);
                if(isset($msgBits[1])){
                    $message =  $msgBits[1] . '.';
                }else{
                    $message =  $php_errormsg  . '.';
                }
            }else{
                $message = 'Unknown error.';
            }
            $return['success'] = false;
            $return['message'] = $message;
            die(isc_json_encode($return));
        }

		$return['success'] = true;
		$newName = $_POST['toName'];
		$newName = substr($newName, 0, strrpos($newName, "."));
		$return['newname'] = isc_html_escape($newName);
		$return['newrealname'] = isc_html_escape($_POST['toName']);
		$return['newurl'] = $this->GetImageDir($galleryName) . '/' . urlencode($_POST['toName']);
		echo isc_json_encode($return);
	}

	private function DeleteImage($galleryName)
	{
		$successImages = $errorFiles = $return = array();
		ini_set('track_errors', '1');
		// TODO: permission check

		if(!is_array($_POST['deleteimages']) || empty($_POST['deleteimages'])) {
			$return['success'] = false;
			$return['message'] = GetLang('imageManagerNoImagesSelectedDelete');
			die(isc_json_encode($return));
		}

		foreach($_POST['deleteimages'] as $k => $image) {
			if(file_exists($this->GetImagePath($galleryName) . '/' . $image)){
				if(!@unlink($this->GetImagePath($galleryName) . '/' . $image)) {
					if(isset($php_errormsg)){
						$msgBits = explode(':', $php_errormsg);
						if(isset($msgBits[1])){
							$errorFiles =  $msgBits[1] .'.';
						}else{
							$errorFiles =  $php_errormsg  .'.';
						}
					}else{
						$errorFiles[] = GetLang('UnableToDelete') . ' ' . $image;
					}
					unset($php_errormsg);
				}else{
					$successImages[] = $image;
				}
			}
            if(file_exists($this->GetImagePath($galleryName) . '/thumbs/' . $image)){
                if(!@unlink($this->GetImagePath($galleryName) . '/thumbs/' . $image)) {
                    if(isset($php_errormsg)){
                        $msgBits = explode(':', $php_errormsg);
                        if(isset($msgBits[1])){
                            $errorFiles =  $msgBits[1] .'.';
                        }else{
                            $errorFiles =  $php_errormsg  .'.';
                        }
                    }else{
                        $errorFiles[] = GetLang('UnableToDelete') . ' thumbs/' . $image;
                    }
                    unset($php_errormsg);
                }else{
					$GLOBALS['ISC_CLASS_DB']->Query("DELETE FROM [|PREFIX|]galleries_images WHERE image_file_name = '$image' LIMIT 1");
                    $successImages[] = $image;
                }
            }
            // change the count of image
            $this->UpdateImageCount($galleryName, 0);
		}       
        
		if(!empty($errorFiles)){
			$return['success'] = false;
			$return['message'] = GetLang('imageManagerDeleteErrors') . '<ul><li>'.implode('</li><li>', $errorFiles) . '</li></ul>';
			die(isc_json_encode($return));
		}


		$return['success'] = true;
		$return['successimages'] = $successImages;
		if(count($successImages) == 1){
			$return['message'] = GetLang('imageManagerDeleteSuccessSingle');
		}elseif(count($successImages) > 1){
			$return['message'] = sprintf(GetLang('imageManagerDeleteSuccessMulti'), count($successImages));
		}
		echo isc_json_encode($return);
	}
    
    private function UpdateImageCount($galleryName, $incdec) {
        $query = "SELECT galcount FROM [|PREFIX|]galleries ga WHERE galtitle = '" . $galleryName . "'";
        $result = $GLOBALS['ISC_CLASS_DB']->Query($query);
        $row = $GLOBALS["ISC_CLASS_DB"]->Fetch($result);
        $galcount = intval($row['galcount']);
        if($incdec)
            $galcount = $galcount+1;
        else {
            if($galcount)
                $galcount = $galcount-1;
            else
                $galcount = 0;
        }
        $updatedCategory = array(
            "galcount" => $galcount
        );
        $GLOBALS['ISC_CLASS_DB']->UpdateQuery("galleries", $updatedCategory, "galtitle = '" . $galleryName . "'");
    }

    //Image functions
    //You do not need to alter these functions
    function resizeImage($image,$width,$height,$scale, $type) {
        $newImageWidth = ceil($width * $scale);
        $newImageHeight = ceil($height * $scale);
        $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
        $source = call_user_func('imagecreatefrom'.$type, $image);
        //$source = imagecreatefromjpeg($image);
        imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
        call_user_func('image'.$type, $newImage, $image, 90);
        //imagejpeg($newImage,$image,90);
        chmod($image, 0777);
        return $image;
    }
}

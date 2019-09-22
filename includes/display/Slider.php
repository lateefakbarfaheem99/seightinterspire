<?php
class ISC_SLIDER_PANEL extends PANEL
{
	public function SetPanelSettings()
	{
		$GLOBALS['blockHeight']=(GetConfig('blockHeight')!=null)?GetConfig('blockHeight'):'80';
		$GLOBALS['blockWidth']=(GetConfig('blockWidth')!=null)?GetConfig('blockWidth'):'80';
		$GLOBALS['sliderDir']=(GetConfig('sliderDir')!=null)?GetConfig('sliderDir'):'product_images';
        $GLOBALS['sliderskin']=(GetConfig('slider_skin')!=null)?GetConfig('slider_skin'):'light-round-extended';
        $GLOBALS['slidertransition']=(GetConfig('slider_transition')!=null)?GetConfig('slider_transition'):'random';
	
		$GLOBALS['SliderImages']='';

		// directory name
		$dirName =$GLOBALS['sliderDir'];

        $GLOBALS['SliderProperties'] = '';
        $GLOBALS['SliderProperties'] .= 'slideProperties:{';
        
        $filenames = array();
        
		if (is_dir($dirName)) {
			$dir = opendir($dirName);
            $index = 0;
			while ($file = readdir($dir)) {
				if ($file != "." AND $file != ".." && $file != 'Thumbs.db'  AND (stristr($file,'.gif') OR stristr($file,'.jpg') OR stristr($file,'.png') OR stristr($file,'.bmp')))
				{
                    $filenames[] = $file;
                    
                    $index ++;
				}
			}
			closedir($dir);
            sort($filenames, SORT_STRING);
            
            for($index=0; $index <count($filenames); $index++) {
                if($index == 0) {   // My Team Shop
                    $slider_url = $GLOBALS['ISC_CFG']['ShopPath']."/custom-cycling-clothing/Features-%26-Benefits";
                    $title = "Home of the first group ordering portal for cycling clothing, and still the simplest and the best Team Shop in the country.";
                } else if($index == 1) {    // TIFFANY JANE
                    $slider_url = $GLOBALS['ISC_CFG']['ShopPath']."/custom-cycling/Tiffany-Jane";
                    $title = "View the clothing line of GreenEdge's Tiffany Cromwell, and see what drove her to a silver medal at the Australian Champs.";
                } else if($index == 2) {    // GALLERY
                    $slider_url = $GLOBALS['ISC_CFG']['ShopPath']."/custom-cycling-clothing/Gallery";
                    $title = "See the Seight cycling clothing range in action, featuring our amazing designs on our customers and sponsored riders.";
                } else if($index == 3) {    // COMMUNITY
                    $slider_url = $GLOBALS['ISC_CFG']['ShopPath']."/custom-cycling-clothing/Community";
                    $title = "We proudly support community events, and offer fantastic group deals on clothing for pro, corporate and charity rides.";
                } else if($index == 4) {    // GARMENT TECHNOLOGY
                    $slider_url = $GLOBALS['ISC_CFG']['ShopPath']."/custom-cycling-clothing/Garment-Technology";
                    $title = "Learn more about the incredible technology behind some of the worlds most comfortable high performance cycling clothing.";
                }
                $GLOBALS['SliderImages'].='<div class="slider-item"><a href="'.$slider_url.'"><img src="%%GLOBAL_ShopPath%%/'.$dirName.'/'.$filenames[$index].'" alt="" /></a><img class="thumbnail" src="%%GLOBAL_ShopPath%%/'.$dirName.'/thumbnails/'.$filenames[$index].'" alt="" /><div class="caption">'.$title.'</div></div>';
                $GLOBALS['SliderProperties'] .= $index.':{effectType:\''.$GLOBALS['slidertransition'].'\'},';                
            }
		}
        $GLOBALS['SliderProperties'] = substr($GLOBALS['SliderProperties'],0,strlen($GLOBALS['SliderProperties'])-1);
        $GLOBALS['SliderProperties'] .= '}';
	}
}
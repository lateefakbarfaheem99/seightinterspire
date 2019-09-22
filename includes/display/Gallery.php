<?php
class ISC_GALLERY_PANEL extends PANEL{

	public function SetPanelSettings(){

		$GLOBALS['galleryDir']=(GetConfig('galleryDir')!=null)?GetConfig('galleryDir'):'seightgallery';

		// directory name
		$dirName = $GLOBALS['galleryDir'];
        
        if(isset($_GET['gallery_id'])) {
		    //$GLOBALS['GalleryAlbums']='';
            $GLOBALS['EnableGalleryView']=1;
            $GLOBALS['GalleryContent']=$this->GetGalleryImages($dirName, $_GET['gallery_id']);
            //$GLOBALS['AlbumPage']='<div id="pp_back" class="pp_back" style="left: 0px;"><a href="' . $GLOBALS['ShopPath'] . '/custom-cycling-clothing/Gallery">Albums</a></div>';
            //$GLOBALS['AlbumPage']='<div id="pp_back" class="pp_back" style="left: 0px;">Albums</div>';

		}else{
            $GLOBALS['EnableGalleryView']=0;
            $GLOBALS['GalleryContent']='';
            //$GLOBALS['AlbumPage']='';
            $GLOBALS['GalleryThumbContainerH'] = 0;
            $GLOBALS['GalleryThumbContainerW'] = 0;
        }
		$GLOBALS['GalleryAlbums']=$this->ScanDirectory($dirName);
        
		/*if (is_dir($dirName))

		{

			$dir = opendir($dirName);

			while ($file = readdir($dir))

			{
				if(is_dir($dir.'/'.$file)) {
					echo $file;
					$dir2=opendir($dir.'/'.$file);
					$GLOBALS['GalleryAlbums'].='<div class="album">';
					
					while($file2 = readdir($dir2)){

						if ($file2 != "." AND $file2 != ".." AND (stristr($file2,'.gif') OR stristr($file2,'.jpg') OR stristr($file2,'.png') OR stristr($file2,'.bmp')))
						{

							$GLOBALS['GalleryAlbums'].='<div class="content">
														<img src="%%GLOBAL_ShopPath%%/'.$dirName.'/'.$dir2.'/'.$file.'" alt="gallery/album1/1.jpg" />
														<span>The Sixties by Tetsumo</span>
														</div>';
						}


					}
				$GLOBALS['GalleryAlbums'].='</div>';
					
				}

					
			}

			closedir($dir);

		}*/
	}
	
    function GetGalleryImages($Directory, $galleryid) {
        $output='';
        $MyDirectory = opendir($Directory) or die('Erreur');
        $index = 1;

        $query = "SELECT galtitle FROM [|PREFIX|]galleries ga WHERE galid = ".$galleryid;
        $result = $GLOBALS['ISC_CLASS_DB']->Query($query);
        $row = $GLOBALS["ISC_CLASS_DB"]->Fetch($result);
        $galname = $row['galtitle'];

        /*while($Entry = @readdir($MyDirectory)) {
            if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
                $directories[] = $Entry;
            }
        }
        closedir($MyDirectory);*/

        //sort($directories, SORT_STRING);
        
        $this->currentgallerydirname = $galname;
        $output.=$this->ScanImages($Directory.'/'.$galname);
        
        return $output;        
    }
    
    function ScanDirectory($Directory) {
        $output='';
        $MyDirectory = opendir($Directory) or die('Erreur');
        $index = 1;
        $album_cnt_per_line = 5;
        
        $directories = array();

        $query = "SELECT galid, galtitle FROM [|PREFIX|]galleries ga WHERE galcount > 0 order by position asc";
        $result = $GLOBALS['ISC_CLASS_DB']->Query($query);
        while ($row = $GLOBALS["ISC_CLASS_DB"]->Fetch($result)) {
            $gal_info['id'] = $row['galid'];
            $gal_info['name'] = $row['galtitle'];
            $directories[] = $gal_info;
        }
        
	    /*while($Entry = @readdir($MyDirectory)) {
		    if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
                $directories[] = $Entry;
		    }
	    }
        closedir($MyDirectory);*/
        
        //sort($directories, SORT_STRING);
        $output.= '<div id="fp_galleryList" class="fp_galleryList">';

        for($index=1; $index <= count($directories); $index++) {
            $r = $index % $album_cnt_per_line;
            switch($r) {
                case 1:
                    $additional_style = 'album_left';
                    break;
                case 2:
                    $additional_style = 'album_middle';
                    break;
                case 0:
                    $additional_style = 'album_right';
                    break;
            }
            
			$subDirectory 	= $Directory.'/'.$directories[$index-1]['name'];
			$MySubDirectory = opendir($subDirectory) or die('Erreur');
			
            // get thumbnail image of album
			$galeryTitle	=	$directories[$index-1]['name'];
			$galleryQuery	=	$GLOBALS['ISC_CLASS_DB']->Query("SELECT `galid`	FROM	`isc_galleries`	
																				WHERE	`galtitle`	=	'$galeryTitle'	");
			$galleryInfo	=	$GLOBALS['ISC_CLASS_DB']->Fetch($galleryQuery);

			$galleryId		=	$galleryInfo['galid'];



			/* Check if file is present. if not then remove entry from database */
			$database_files_sql		=	"SELECT `image_id`,`image_file_name`	FROM	`[|PREFIX|]galleries_images`	
																				WHERE	`gallery_id`	=	'galleryId'
																				order by `position`	ASC 
										";
	
			$database_files_query	=	$GLOBALS['ISC_CLASS_DB']->Query($database_files_sql);
	
			while($entry	=	$GLOBALS['ISC_CLASS_DB']->Fetch($database_files_query)){	
	
				if(	!file_exists($Directory.'/'.$entry['image_file_name'])	){
					$GLOBALS['ISC_CLASS_DB']->Query("DELETE	FROM	`[|PREFIX|]galleries_images`	
															WHERE	`image_id`	=	'$entry[image_id]'
													");
				}
			}

			$thumbnail_Sql	=	"SELECT	*	FROM	`isc_galleries_images`	
											WHERE	`gallery_id`		=	'$galleryId'
											AND		`use_as_thumbnail`	=	'1'										
								";

//			echo mysql_num_rows(mysql_query($thumbnail_Sql) or die(mysql_error()));
			if($GLOBALS['ISC_CLASS_DB']->CountResult($thumbnail_Sql)	>	0){

				$thumbnail_Query	=	$GLOBALS['ISC_CLASS_DB']->Query($thumbnail_Sql);
				$image				=	$GLOBALS['ISC_CLASS_DB']->Fetch($thumbnail_Query);

            	$thumbnailImage = $subDirectory.'/thumbs/'.$image['image_file_name'];
            	list($width, $height, $type, $attr) = getimagesize($thumbnailImage);

			}else{

				// get first image of each album
	
				while($Entry = @readdir($MySubDirectory)) {
	
					if(!is_dir($subDirectory.'/'.$Entry)&& $Entry != '.' && $Entry != '..' && $Entry != 'Thumbs.db' ) {
	
						$thumbnailImage = $subDirectory.'/thumbs/'.$Entry;
	
						list($width, $height, $type, $attr) = getimagesize($thumbnailImage);
	
						break;
	
					}
	
				}

			}

            if($width>150) {
                $height = intval($height*150/$width);
                $dimension='width="150px" height="'.$height.'px"';
            } else {
                $width = intval($width*150/$height);
                $dimension = 'width="'.$width.'px" height="150px"';
            }
            
            $active = '';
            if(isset($_GET['gallery_id']) && $directories[$index-1]['id'] == $_GET['gallery_id'])
                $active = ' active';
                //$active = 'class="active"';
            
            $output .= '<div class="one_album'.$active.'"><a class="thumb" href = "' . $GLOBALS['ShopPath'] . '/custom-cycling-clothing/Gallery?gallery_id='.$directories[$index-1]['id'].'">
			<img '.$dimension.' src="'.$GLOBALS['ShopPath'].'/'.$thumbnailImage.'" alt="'.$directories[$index-1]['name'].'" /></a><br/>';
            $output .= '<a href = "' . $GLOBALS['ShopPath'] . '/custom-cycling-clothing/Gallery?gallery_id='.$directories[$index-1]['id'].'">' . $directories[$index-1]['name'] . '</a></div>';

            /*if($r == 1) $output.= '<ul id="fp_galleryList" class="fp_galleryList" >';
            $output .= '<li '.$active.'><a class="thumb" href = "' . $GLOBALS['ShopPath'] . '/custom-cycling-clothing/Gallery?gallery_id='.$directories[$index-1]['id'].'"><img '.$dimension.' src="%%GLOBAL_ShopPath%%/'.$thumbnailImage.'" alt="'.$directories[$index-1]['name'].'" /></a><br/>';
            $output .= '<a href = "' . $GLOBALS['ShopPath'] . '/custom-cycling-clothing/Gallery?gallery_id='.$directories[$index-1]['id'].'">' . $directories[$index-1]['name'] . '</a></li>';
            if($r == 0) $output.= '</ul>';*/
        }
        $output.= '</div>';
        //if($r)
        //    $output.= '</ul>';
        return $output;
    }
    
    function ScanImages($Directory) {
		$gallery_id	=	$_REQUEST['gallery_id'];

        $output='';
        $MyDirectory = opendir($Directory) or die('Erreur');


        $c= 0;
        $GLOBALS['GalleryThumbContainerH'] = 0;
        $GLOBALS['GalleryThumbContainerW'] = 0;
        
        $file_names = array();
        $files_info = array();
        
	    while($Entry = @readdir($MyDirectory)) {
		    if(!is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..' && $Entry != 'Thumbs.db' ) {
                $file_names[] = $Entry;
                $imgurl = $Directory.'/thumbs/'.$Entry;
                $file_modified[] = filemtime($imgurl);
                list($width, $height, $type, $attr) = getimagesize($imgurl);
                if($height > $GLOBALS['GalleryThumbContainerH'])
                    $GLOBALS['GalleryThumbContainerH'] = $height;
                $GLOBALS['GalleryThumbContainerW'] += ($width+16);

				/* Check if image is in database, if not then insert in database */
                
				list($img_title, $ext) = explode(".", $Entry);

				$sql	=	"SELECT `image_id`	FROM	`[|PREFIX|]galleries_images`	
												WHERE	`image_file_name`	=	'$Entry'
							";
				if($GLOBALS['ISC_CLASS_DB']->CountResult($sql)	==	0){
				
					$new_file_sql	=	"INSERT INTO	`[|PREFIX|]galleries_images`
												SET		`image_display_name`	=	'$img_title',
														`image_file_name`		=	'$Entry',
														`gallery_id`			=	'$gallery_id'
										";
					$GLOBALS['ISC_CLASS_DB']->Query($new_file_sql);
				}
		    }
	    }
        
        $GLOBALS['GalleryThumbContainerH'] += 40;
        closedir($MyDirectory);
        
		$records_sql	=	"SELECT * FROM	`[|PREFIX|]galleries_images`	WHERE	`gallery_id`	=	'$gallery_id'
																			order by `position`	ASC 
							";
		$records_query	=	$GLOBALS['ISC_CLASS_DB']->Query($records_sql);

		while(	$image	=	$GLOBALS['ISC_CLASS_DB']->Fetch($records_query)	){

            $output.='<div class="content">';

            $output.='<div id="'.$image['image_display_name'].'"><a href="#"><img class="thumb" src="'.$GLOBALS['ShopPath'].'/'.$Directory.'/thumbs/'.$image['image_file_name'].'" alt="'.$GLOBALS['ShopPath'].'/'.$Directory.'/'.$image['image_file_name'].'" /></a></div>';

            $output.='</div>';
        
		}
		
/*		// Sort the data with volume descending, edition ascending
        // Add $data as the last parameter, to sort by the common key
        // sort by uploaded date( = modified date)
        array_multisort($file_modified, SORT_DESC, $file_names);

        // sort by names
        //sort($file_names, SORT_STRING);
        
        for($index=0; $index < count($file_names); $index++) {
            list($img_title, $ext) = explode(".", $file_names[$index]);

            $output.='<div class="content">';
            $output.='<div id="'.$img_title.'"><a href="#"><img class="thumb" src="%%GLOBAL_ShopPath%%/'.$Directory.'/thumbs/'.$file_names[$index].'" alt="%%GLOBAL_ShopPath%%/'.$Directory.'/'.$file_names[$index].'" /></a></div>';
            $output.='</div>';
        }
*/
        return $output;
    }
}

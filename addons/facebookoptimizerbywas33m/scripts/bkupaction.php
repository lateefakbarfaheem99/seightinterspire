<?php

// All ajax calls will be handeled in this block

	if(isset($_REQUEST['Ajax'])){
		
		if($_REQUEST['Ajax']	==	'DelSelected'){

			$Table			=	$_REQUEST['Table'];
			$id				=	$_REQUEST['Id'];

			$GLOBALS['ISC_CLASS_DB']->Query("	DELETE	FROM	`$Table`	WHERE	`id`	=	'$id'	");

		}else
		if($_REQUEST['Ajax']	==	'toggle_visibility'){

			$Table	=	$_REQUEST['Table'];
			
			if(isset($_REQUEST['productId'])){

				$productId		=	$_REQUEST['productId'];
				$visibility		=	$_REQUEST['visibility']	==	1	?	'0'	:	'1'	;

				$update		=	"UPDATE `$Table`	SET	`visibility`	=	'$visibility'	WHERE	`product_id`	=	'$productId'	";

				$GLOBALS['ISC_CLASS_DB']->Query($update);

			}else{
				$Id		=	$_REQUEST['Id'];

				$data_query	=	"	SELECT	*	FROM	`".$Table."`	WHERE	`id`	=	'$Id' LIMIT	1	";
			
				$data_result	=	$GLOBALS['ISC_CLASS_DB']->Query($data_query);
				$data			=	$GLOBALS['ISC_CLASS_DB']->Fetch($data_result);


				if($data['visibility']	==	1)
					$visibility		=	0;
				else
					$visibility		=	1;
			
				$update		=	"UPDATE `".$Table."`	SET	`visibility`	=	'$visibility'	WHERE	`id`	=	'$Id'	";

				$GLOBALS['ISC_CLASS_DB']->Query($update);

			}

			$response	=	$visibility;

			echo '<response_msg>'.$response.'</response_msg>';

		}else
		if($_REQUEST['Ajax']	==	'DragAndDropSorting'){

			$Table	=	$_REQUEST['Table'];

			$updateRecordsArray 	= $_POST['recordsArray'];

			if($Table	==	'isc_galleries_images'){
				$galTitle			=	$_REQUEST['galTitle'];
			}

			$listingCounter 	= 0;

			$resultPrint = '';

			foreach ($updateRecordsArray as $recordIDValue) {

				$listingCounter++;
				$resultPrint .= ' <=Next=> ';
				
				if($Table	==	'isc_galleries_images'){

					$ImgDBId	=	$recordIDValue;

					$Directory	=	"../seightgallery/$galTitle";
					
					$MyDirectory = opendir($Directory) or die('Cannot open');
			
					$imageCounter = 0;
			
					 while (false !== ($Entry = readdir($MyDirectory))){
						
						$imageCounter	++;
						$new_name	=	"";
						$resultPrint .= " $listingCounter => $imageCounter ";
						if(!is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..' && $Entry != 'Thumbs.db' ) {

							list($img_title, $ext) = explode(".", $Entry);
							$currentImageDbId 	= strstr($img_title, '##');
							$currentImageDbId 	= str_replace("##", "", $img_title);
				
							if(strstr($img_title, '+')	!=	false){
								$imageNameWithoutPostition 	= strstr($img_title, '+');
								$imageNameWithoutPostition 	= str_replace("+", "", $imageNameWithoutPostition);

								if($currentImageDbId	==	$ImgDBId)
									$new_name	= "$listingCounter+$imageNameWithoutPostition.$ext";
							
							}else
								if($currentImageDbId	==	$ImgDBId)
									$new_name	= "$listingCounter+$img_title.$ext";

							if($new_name	!=	""){
								rename($Directory.'/'.$Entry, $Directory.'/'.$new_name);
								rename($Directory.'/thumbs/'.$Entry, $Directory.'/thumbs/'.$new_name);
							}
			
						}
			
					}
			
					
				}else{
					$query = "UPDATE `".$Table."` SET `position` = " . $listingCounter . " WHERE `galid` = " . $recordIDValue;
					$GLOBALS['ISC_CLASS_DB']->Query($query);

				}

			}

			$response	=	'Records have been sorted';

			echo "<response_msg>$resultPrint</response_msg>";

		}	

	}else{

	if(	isset($_REQUEST['actionMode'])){

		$table	=	'isc_galleries_images';

		if(isset($_REQUEST['Add'])){
		
			$sample_size	=	$_REQUEST['sample_size'];
			$sample_price	=	$_REQUEST['sample_price'];
			$product_id		=	$_REQUEST['product_id'];

			check_dublicate($table,$sample_size,$product_id);
			
			$sql	=	"INSERT INTO `".$table."`	SET	`sample_price`	=	'$sample_price',
														`sample_size`	=	'$sample_size',
														`product_id`	=	'$product_id'
			
			";

		}else
		if(isset($_REQUEST['Edit'])){
		
			$image_id			=	$_REQUEST['Edit'];
			$image_display_name	=	$_REQUEST['image_display_name'];

			$sql			=	"UPDATE `$table`	SET		`image_display_name`	=	'$image_display_name'
													WHERE	`image_id`				=	'$image_id'
								";

				
		}else
		if(isset($_REQUEST['Del'])){																											
			$id		=	addslashes($_REQUEST['Del']);
			if(isset($_REQUEST['All']))
				$sql	=	"DELETE	FROM	`".$table."` WHERE	`product_id`	=	'$id'	";
			else
				$sql	=	"DELETE	FROM	`".$table."` WHERE	`id`	=	'$id'	";
			
		}

	}

	if(isset($sql))
		$GLOBALS['ISC_CLASS_DB']->Query($sql);

	header('location:'.$_SERVER['HTTP_REFERER']);

}

?>
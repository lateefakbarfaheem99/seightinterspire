<?php

// All ajax calls will be handeled in this block

	if(isset($_REQUEST['Ajax'])){
		
		if($_REQUEST['Ajax']	==	'toggle_thumbnail'){

			$Table	=	$_REQUEST['Table'];
			$galleryId = $_REQUEST['galleryId'];			
			$id		=	$_REQUEST['Id'];

			$GLOBALS['ISC_CLASS_DB']->Query("	UPDATE	`$Table`	SET		`use_as_thumbnail`	=	'1'	
																	WHERE	`image_id`	=	'$id'
																	AND `gallery_id` = '$galleryId'
											");

			$GLOBALS['ISC_CLASS_DB']->Query("	UPDATE	`$Table`	SET		`use_as_thumbnail`	=	'0'	
																	WHERE	`image_id`	!=	'$id'
																	AND `gallery_id` = '$galleryId'
											");

			echo "<response_msg>$Table => $id</response_msg>";
			exit();

		}else
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

			$listingCounter 	= 0;

			foreach ($updateRecordsArray as $recordIDValue) {

				if($Table	==	'isc_galleries_images'){
				
					$query = "UPDATE `$Table` SET `position` = '$listingCounter' WHERE `image_id` = '$recordIDValue' ";
					$GLOBALS['ISC_CLASS_DB']->Query($query);
				
				}else{

					$query = "UPDATE `$Table` SET `position` = '$listingCounter' WHERE `galid` = '$recordIDValue'	";
					$GLOBALS['ISC_CLASS_DB']->Query($query);

				}

				$listingCounter++;
				
			}

			$response	=	'Records have been sorted';

			echo "<response_msg>$response</response_msg>";

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
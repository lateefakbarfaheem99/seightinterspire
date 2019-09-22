<?php

// All ajax calls will be handeled in this block

	if(isset($_REQUEST['Ajax'])){
		
		if($_REQUEST['Ajax']	==	'toggle_thumbnail'){

			$Table	=	$_REQUEST['Table'];
			$galId	=	$_REQUEST['galId'];
			$id		=	$_REQUEST['Id'];

			mysql_query("	UPDATE	`$Table`	SET		`use_as_thumbnail`	=	'1'
																	WHERE	`image_id`			=	'$id'
																	AND		`gallery_id`		=	'$galId'
											") or (die(mysql_error()));

			mysql_query("	UPDATE	`$Table`	SET		`use_as_thumbnail`	=	'0'
																	WHERE	`image_id`			!=	'$id'
																	AND		`gallery_id`		=	'$galId'
											") or (die(mysql_error()));

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
			$Id		=	$_REQUEST['Id'];

			$data_query	=	"	SELECT	*	FROM	`$Table`	WHERE	`item_id`	=	'$Id' LIMIT	1	";
		
			$data_result	=	$GLOBALS['ISC_CLASS_DB']->Query($data_query);
			$data			=	$GLOBALS['ISC_CLASS_DB']->Fetch($data_result);

			if($data['visibility']	==	1)
				$visibility		=	0;
			else
				$visibility		=	1;
		
			$update		=	"UPDATE `".$Table."`	SET		`visibility`	=	'$visibility'	
													WHERE	`item_id`		=	'$Id'
													LIMIT 	1
							";

			$GLOBALS['ISC_CLASS_DB']->Query($update);

			$response	=	$visibility;

			echo '<response_msg>'.$response.'</response_msg>';

		}else
		if($_REQUEST['Ajax']	==	'DragAndDropSorting'){

			$Table	=	$_REQUEST['Table'];

			$updateRecordsArray 	= $_POST['recordsArray'];

			$listingCounter 	= 0;

			foreach ($updateRecordsArray as $recordIDValue) {

				$query = "UPDATE `$Table` SET `position` = '$listingCounter' WHERE `item_id` = '$recordIDValue' ";
				$GLOBALS['ISC_CLASS_DB']->Query($query) or die(mysql_error());

				$listingCounter++;
				
			}

			$response	=	'Records have been sorted';

			echo "<response_msg>$response</response_msg>";

		}	

	}else{

	if(	isset($_REQUEST['actionMode'])){
		// Upload file path
		$upload_files_path	= 	"../facebook_thumbnails/";

		$table	=	'isc_facebook_thumbnails';

		$type		=	$_POST['type'] == 'products' ? "1" : "2";
		$type_id	=	$_POST['type_id'];

		if(isset($_REQUEST['Add'])){
			
			// function to check and upload file
			$upload		=	file_upload('newimage', $upload_files_path );
			
			if(!is_array($upload)){
				$item_thumb = $upload;
			
				$sql	=	"INSERT INTO `".$table."`	SET		`type`			=	'$type',
																`type_id`		=	'$type_id',
																`item_thumb`	=	'$item_thumb',
																`visibility`	=	'1'
							";
			
//				refreshFacebookCache($url);
//				die();
			
			}else{
				$errors	=	'';
				foreach($upload	as $error){
					$errors .= $error.'<br />';
				}

				echo "
					<div id='MainMessage'>
						<div class='MessageBox MessageBoxError'>
							Please <a href='".$_SERVER['HTTP_REFERER']."'>Go back</a> and Correct The Following errors: <br /><br />
							$errors
						</div>
					</div>
				";
				exit();
			}
		}else
		if(isset($_REQUEST['Edit'])){
		
			$image_id			=	$_REQUEST['Edit'];
			$image_display_name	=	$_REQUEST['image_display_name'];

			$sql			=	"UPDATE `$table`	SET		`image_display_name`	=	'$image_display_name'
													WHERE	`image_id`				=	'$image_id'
								";

				
		}else
		if(isset($_REQUEST['Del'])){
																														
			$id			=	addslashes($_REQUEST['Del']);
			$fileSql	=	"SELECT	`item_thumb`	FROM	`$table`	WHERE	`item_id`	=	'$id'	LIMIT	1";	
			$fileData	=	$GLOBALS['ISC_CLASS_DB']->Fetch(	$GLOBALS['ISC_CLASS_DB']->Query($fileSql)	);	
			delete_db_file($upload_files_path.$fileData['item_thumb'],$table,"item_id",$id);
		}

	}

	if(isset($sql))
		$GLOBALS['ISC_CLASS_DB']->Query($sql);

	header('location:'.$_SERVER['HTTP_REFERER']);

}

?>
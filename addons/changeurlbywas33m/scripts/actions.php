<?php

// All ajax calls will be handeled in this block

	if(isset($_REQUEST['Ajax'])){
		
		if($_REQUEST['Ajax']	==	'toggle_visibility'){

			if(empty($_REQUEST['Table']))
				exit();
							
			$Table			=	$_REQUEST['Table'];
			$Type			=	$_REQUEST['Type'];
			$Id				=	$_REQUEST['Id'];
			
			$visibility		=	$_REQUEST['visibility']	==	'1'	?	'0'	:	'1'	;

			if($Type	==	'products')
				$update		=	"UPDATE `".$Table."`	SET	`prodvisible`	=	'$visibility'	WHERE	`productid`	=	'$Id'	";

			else
			if($Type	==	'categories')
				$update		=	"UPDATE `".$Table."`	SET	`catvisible`	=	'$visibility'	WHERE	`categoryid`	=	'$Id'	";
			
			else
				exit();

			$GLOBALS['ISC_CLASS_DB']->Query($update);

			$response	=	$visibility;

			echo '<response_msg>'.$response.'</response_msg>';

		}else
		if($_REQUEST['Ajax']	==	'toggle_prodfeatured'){

			if(empty($_REQUEST['Table']))
				exit();
							
			$Table			=	$_REQUEST['Table'];
			$Id				=	$_REQUEST['Id'];
			
			$featured		=	$_REQUEST['featured']	==	'1'	?	'0'	:	'1'	;

			$update		=	"UPDATE `".$Table."`	SET	`prodfeatured`	=	'$featured'	WHERE	`productid`	=	'$Id'	";

			$GLOBALS['ISC_CLASS_DB']->Query($update);

			$response	=	$featured;

			echo '<response_msg>'.$response.'</response_msg>';

		}else
		if($_REQUEST['Ajax']	==	'DragAndDropSorting'){

			$Table	=	$_REQUEST['Table'];

			$updateRecordsArray 	= $_POST['recordsArray'];

			$listingCounter = 1;

			foreach ($updateRecordsArray as $recordIDValue) {
		
				$query = "UPDATE `".$Table."` SET `position` = " . $listingCounter . " WHERE `id` = " . $recordIDValue;
				$GLOBALS['ISC_CLASS_DB']->Query($query);

				$listingCounter = $listingCounter + 1;

			}

			$response	=	'Records have been sorted';

			echo '<response_msg>'.$response.'</response_msg>';

		}	

	}else{

	if(	isset($_REQUEST['actionMode'])){

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
		
			if(	!isset(	$_REQUEST['Type']	)	)
				exit();

			if(	empty(	$_REQUEST['Type']	)	)
				exit();
	
			$id			=	$_REQUEST['Edit'];
			$type		=	$_REQUEST['Type'];
			$itemLink	=	$_REQUEST['itemLink'];
			
			if($type	==	'products'	){

				$GLOBALS['ISC_CLASS_DB']->Query("UPDATE `[|PREFIX|]products`	SET		`prodlink`		=	'$itemLink'	
																				WHERE	`productid`		=	'$id'	
												");

			}else
			if($type	==	'categories'	){

				$GLOBALS['ISC_CLASS_DB']->Query("UPDATE `[|PREFIX|]categories`	SET		`catlink`		=	'$itemLink'
																				WHERE	`categoryid`	=	'$id'	
												");
			}
			
			echo "<response_msg>Changes have been saved </response_msg>";
			exit();
		
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
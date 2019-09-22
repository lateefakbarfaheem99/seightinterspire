<?php

	include(dirname(__FILE__)."/init.php");

	// this is necessary for the flash uploader as it doesnt send cookies, but we can restore the session
	if (!isset($_COOKIE['STORESUITE_CP_TOKEN']) && isset($_SESSION['STORESUITE_CP_TOKEN'])) {
		$_COOKIE['STORESUITE_CP_TOKEN'] = $_SESSION['STORESUITE_CP_TOKEN'];
	}

	$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->LoadLangFile('products');
	$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->LoadLangFile('categories');
	$GLOBALS['ISC_CLASS_ADMIN_ENGINE']->LoadLangFile('optimizer');


	if(!isset($_REQUEST['customSection']))
		exit();
	
	if(	$_REQUEST['customSection']	==	'categories'	){
		$table		=	'isc_categories';
		$catId		=	$_REQUEST['catId'];
		$visible	=	$_REQUEST['visible'];
		$catQuery	=	$GLOBALS['ISC_CLASS_DB']->Query("SELECT	*	FROM	`$table`	WHERE	`categoryid` 	=	'$catId'	");
		$cat		=	$GLOBALS['ISC_CLASS_DB']->Fetch($catQuery);
		$sql		=	array();
		
		if($_REQUEST['Action']	==	'toggleCategorySitemap'){

			// Toggle sitemap of selected category.		
			$GLOBALS['ISC_CLASS_DB']->Query("UPDATE `$table` SET `catsitemap` = '$visible'	WHERE `categoryid` 	=	'$catId'	");

			// Toggle sitemap of all categories under selected category.
			ToggleSubCatIfAny($table, $catId, $visible);

			// Toggle sitemap of parent category of selected category.
			$GLOBALS['ISC_CLASS_DB']->Query("UPDATE `$table` SET `catsitemap` = '$visible'	WHERE `categoryid` 	=	'$cat[catparentid]'	");
		
			echo "<response_msg>$visible</response_msg>";
		
		}
		
	}

	function ToggleSubCatIfAny($table, $catId, $visible){
		
		// Toggle sitemap of child categories of selected category if any.
		$GLOBALS['ISC_CLASS_DB']->QUERY("UPDATE `$table` SET `catsitemap` = '$visible' WHERE `catparentid`	=	'$catId'	") ;
		
		$ChildCatsQuery	=	$GLOBALS['ISC_CLASS_DB']->QUERY("SELECT	*	FROM	`$table`	
																		WHERE	`catparentid` 	=	'$catId'	");
	
		while($ChildCat	=	$GLOBALS['ISC_CLASS_DB']->Fetch($ChildCatsQuery)){
			ToggleSubCatIfAny($table, $ChildCat['categoryid'], $visible);
		}

	}

	exit();

?>
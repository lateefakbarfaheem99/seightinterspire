<?php
/**
** @author Willem Turkstra (Mashmedia)
**/
require_once(dirname(__FILE__) . '/../../includes/classes/class.addon.php');

class ADDON_CHANGEURLBYWAS33M extends ISC_ADDON
{
	var $addon;
	var $name;
	
	public function __construct()
	{
		// Call the parent constructor (this is required!)
		$this->SetId(strtolower(__CLASS__));
		$this->LoadLanguageFile();

		// Set the display name for this addon
		$this->SetName('ChangeUrlByWas33m');

		// Set the image for this addon
		$this->SetImage('');

		// Set the help text for this addon
		$this->SetHelpText('Change store urls');

		// Register a menu item for this addon under the orders menu
		$this->RegisterMenuItem(array(
			'location'		=> 'mnuTools',
			'icon'			=> 'icon.gif',
			'text'			=> 'Change Url Module',
			'description'	=> GetLang('mmAdditionalSettingsAddonDescription'),
			'id'			=> strtolower(__CLASS__)
		));
		

	// For chamging the product urls.
		//Edit files to put code required to function this plugin correctly.
		$file		=	ISC_BASE_PATH . '/lib/general.php';
		$position	=	'after';
		$findLine	=	'function ProdLink($prod)';
		$addLine	=	"\t\t".'/*Edited by WAS33M*/	$prod = GetClass("ISC_CHANGEURLBYWAS33M")->GetProductUrl($prod); /*Edited*/';
		$this->editFile($file,$position,$findLine,$addLine);

		$file		=	ISC_BASE_PATH . '/includes/classes/class.product.php';
		$position	=	'before';
		// passing variables
		$findLine	=	'Quote(MakeURLNormal($product)';
		$addLine	=	"\t\t\t\t".'/*Edited by WAS33M*/	$product	=	GetClass("ISC_CHANGEURLBYWAS33M")->ChangeProductLinkToName($product);/*Edited*/';
		$this->editFile($file,$position,$findLine,$addLine);


	// For changing the category urls
		//Edit files to put code required to function this plugin correctly.
		$file		=	ISC_BASE_PATH . '/lib/general.php';
		$position	=	'after';
		$findLine	=	'function CatLink($CategoryId';
		$addLine	=	"\t\t".'/*Edited by WAS33M*/	$CategoryName = GetClass("ISC_CHANGEURLBYWAS33M")->GetCategoryUrl($CategoryName); /*Edited*/';
		$this->editFile($file,$position,$findLine,$addLine);

		$file		=	ISC_BASE_PATH . '/includes/classes/class.category.php';
		$position	=	'before';
		// passing variables
		$findLine	=	'$this->SetSort()';
		$addLine	=	"\t\t\t".'/*Edited by WAS33M*/	$path	=	GetClass("ISC_CHANGEURLBYWAS33M")->ChangeCategoryLinkToName($path);/*Edited*/';
		$this->editFile($file,$position,$findLine,$addLine);

		//Create required tables
		$this->createRequiredTables();
		
		 $this->addon = ISC_BASE_PATH . "/addons/changeurlbywas33m/";
		 $this->name = "Change Urls ( Developed By WAS33M ) ";
	}
	
	public function editFile($file, $position, $findLine, $addLine){

		// Let's make sure the file exists and is writable first.
		if (is_writable($file)) {

    		// In our example we're opening $file in append mode.
   			// The file pointer is at the bottom of the file hence
    		// that's where $somecontent will go when we fwrite() it.
    		if (!$handle = fopen($file, 'a')) {
         		echo "Cannot open file ($file)";
         		exit;
    		}

			$data 			=	file($file);
			$linePresent	=	0;

			foreach ($data as $check){
    			if ( strpos($check,$addLine) !==	FALSE){
					$linePresent	=	1;
    			}
			}
			
			if($linePresent	==	0){

				foreach ($data as $k=>$v){
    				if ( strpos($v,$findLine) !==	FALSE){
        				
						if($position	==	'after')
							$data[$k+1]	=	$data[$k+1]."\n$addLine\n";
						else
						if($position	==	'before')
							$data[$k]	=	"\n$addLine\n".$data[$k];
    				}
				}
				file_put_contents($file,$data);
			
			}
			
    	fclose($handle);

		}else{
    		echo "The file $file is not writable";
		}

	}

	public function createRequiredTables(){


		$tables=array();

		// add catlink column to categories table if not exists
		$categoryColumn			=	'catlink';
		$categoryColumnExists	=	false;

    	$ccolumns = $GLOBALS['ISC_CLASS_DB']->Query("show columns from [|PREFIX|]categories");

    	while($c = $GLOBALS['ISC_CLASS_DB']->Fetch($ccolumns)){

    	    if($c['Field'] == $categoryColumn){
				$categoryColumnExists	=	true;
    	        break;
    	    }

    	}      

		// add prodlink column to products table if not exists
		$productColumn			=	'prodlink';
		$productColumnExists	=	false;

    	$pcolumns = $GLOBALS['ISC_CLASS_DB']->Query("show columns from [|PREFIX|]products");

    	while($p = $GLOBALS['ISC_CLASS_DB']->Fetch($pcolumns)){

    	    if($p['Field'] == $productColumn){
				$productColumnExists	=	true;
    	        break;
    	    }

    	}      


		if(!$categoryColumnExists){
			$tables[] = "ALTER TABLE [|PREFIX|]categories ADD `".$categoryColumn."` VARCHAR( 255 ) NOT NULL AFTER `catparentid` ";
			$tables[] = "UPDATE [|PREFIX|]categories SET `".$categoryColumn."` =	`catname` ";
		}
		if(!$productColumnExists){
			$tables[] = "ALTER TABLE [|PREFIX|]products ADD `".$productColumn."` VARCHAR( 255 ) NOT NULL AFTER `productid` ";
			$tables[] = "UPDATE [|PREFIX|]products SET `".$productColumn."` =	`prodname` ";

		}

// Enable this one on the first install of this addon.
		foreach($tables as $table){
//			$GLOBALS['ISC_CLASS_DB']->Query($table);
		}


	}
	
	public function Init(){
		$this->ShowSaveAndCancelButtons(false);
	}
	

	public function EntryPoint(){

		$path = $this->addon;
		$this->name = "addon_changeurlbywas33m";
		$addon_name = $this->name;

		require $this->addon . "/templates/head.html";
		require $this->addon . "/scripts/functions.php";

		$this->startpage();

		if(isset($_REQUEST['actionMode']))
			$this->actionMode();

		else
		if(isset($_REQUEST['editMode']))
			$this->editMode();

		else
			require $this->addon . "templates/add_template.php";
			
	}

	function startpage(){
		require $this->addon . "/templates/template.php";
		require $this->addon . "templates/records_list.php";

	}

	function actionMode(){
		require $this->addon . "/scripts/actions.php";
		
	}

	function editMode(){
		require $this->addon . "templates/edit_template.php";

	}

}

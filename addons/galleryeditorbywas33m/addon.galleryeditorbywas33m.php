<?php
/**
** @author Willem Turkstra (Mashmedia)
**/
require_once(dirname(__FILE__) . '/../../includes/classes/class.addon.php');

class ADDON_GALLERYEDITORBYWAS33M extends ISC_ADDON
{
	var $addon;
	var $name;
	
	public function __construct()
	{
		// Call the parent constructor (this is required!)
		$this->SetId(strtolower(__CLASS__));
		$this->LoadLanguageFile();

		// Set the display name for this addon
		$this->SetName('GalleryEditorByWas33m');

		// Set the image for this addon
		$this->SetImage('');

		// Set the help text for this addon
		$this->SetHelpText('Edit Images and folders in galleries');

		// Register a menu item for this addon under the orders menu
		$this->RegisterMenuItem(array(
			'location'		=> 'mnuTools',
			'icon'			=> 'icon.gif',
			'text'			=> 'Gallery Editor',
			'description'	=> GetLang('mmAdditionalSettingsAddonDescription'),
			'id'			=> strtolower(__CLASS__)
		));
		
		//Create required tables
		$this->createRequiredTables();

		 $this->addon = ISC_BASE_PATH . "/addons/galleryeditorbywas33m/";
		 $this->name = "Gallery Editor";
	}

	public function createRequiredTables(){


		$tables=array();
		$tables[] = "
CREATE TABLE IF NOT EXISTS `isc_galleries_images` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(10) NOT NULL,
  `image_display_name` varchar(255) NOT NULL,
  `image_file_name` varchar(255) NOT NULL,
  `use_as_thumbnail` enum('0','1') NOT NULL DEFAULT '0',
  `position` int(10) NOT NULL,
  PRIMARY KEY (`image_id`),
  UNIQUE KEY `image_display_name` (`image_display_name`),
  UNIQUE KEY `image_file_name` (`image_file_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		";

		// add position column to isc_galleries table if not exists
		$Column			=	'position';
		$ColumnExists	=	false;

    	$columns = $GLOBALS['ISC_CLASS_DB']->Query("show columns from [|PREFIX|]galleries");

    	while($c = $GLOBALS['ISC_CLASS_DB']->Fetch($columns)){

    	    if($c['Field'] == $Column){
				$ColumnExists	=	true;
    	        break;
    	    }

    	}      

		if(!$ColumnExists){
			$tables[] = "ALTER TABLE `[|PREFIX|]galleries` ADD `$Column` INT( 10 ) NOT NULL ";
		}

		foreach($tables as $table){
			$GLOBALS['ISC_CLASS_DB']->Query($table);
		}

	}
	
	public function Init(){
		$this->ShowSaveAndCancelButtons(false);
	}
	

	public function EntryPoint(){

		$path = $this->addon;
		$this->name = "addon_galleryeditorbywas33m";
		$addon_name = $this->name;

		require $this->addon . "/templates/head.html";
		require $this->addon . "/scripts/functions.php";

		$this->startpage();

		if(isset($_REQUEST['actionMode']))
			$this->actionMode();
/*
		else
		if(isset($_REQUEST['editMode']))
			$this->editMode();

		else
			require $this->addon . "templates/add_template.php";
*/			
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

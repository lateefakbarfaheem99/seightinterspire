<?php
/**
** @author Willem Turkstra (Mashmedia)
**/
require_once(dirname(__FILE__) . '/../../includes/classes/class.addon.php');

class ADDON_FACEBOOKOPTIMIZERBYWAS33M extends ISC_ADDON
{
	var $addon;
	var $name;
	
	public function __construct()
	{
		// Call the parent constructor (this is required!)
		$this->SetId(strtolower(__CLASS__));
		$this->LoadLanguageFile();

		// Set the display name for this addon
		$this->SetName('FacebookOptimizerByWas33m');

		// Set the image for this addon
		$this->SetImage('');

		// Set the help text for this addon
		$this->SetHelpText('Upload thumbnails for facebook');

		// Register a menu item for this addon under the orders menu
		$this->RegisterMenuItem(array(
			'location'		=> 'mnuTools',
			'icon'			=> 'icon.gif',
			'text'			=> 'Facebook Optimizer',
			'description'	=> GetLang('mmAdditionalSettingsAddonDescription'),
			'id'			=> strtolower(__CLASS__)
		));
		
		//Create required tables
		$this->createRequiredTables();

		 $this->addon = ISC_BASE_PATH . "/addons/facebookoptimizerbywas33m/";
		 $this->name = "Facebook Optimizer (Developed By WAS33M)";

	}

	public function createRequiredTables(){

		$tables=array();

$tables[]	=	"
CREATE TABLE IF NOT EXISTS `isc_facebook_thumbnails` (
  `item_id` int(10) NOT NULL AUTO_INCREMENT,
  `type` enum('1','2') NOT NULL COMMENT '1 = products, 2 = news',
  `type_id` int(10) NOT NULL,
  `item_thumb` varchar(255) NOT NULL,
  `visibility` enum('0','1') NOT NULL,
  `position` int(10) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;
";
		foreach($tables as $table){
			$GLOBALS['ISC_CLASS_DB']->Query($table);
		}

	}
	
	public function Init(){
		$this->ShowSaveAndCancelButtons(false);
	}
	

	public function EntryPoint(){

		$path = $this->addon;
		$this->name = "addon_facebookoptimizerbywas33m";
		$addon_name = $this->name;

		require $this->addon . "/templates/head.html";
		require $this->addon . "/scripts/functions.php";

		if(isset($_REQUEST['actionMode']))
			$this->actionMode();

		$this->startpage();

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

<?php
class PANEL
{
	/**
	 * @var array Array of settings for this panel instance.
	 */
	protected $settings = array();

	/**
	 * @var array Array of default settings if no custom settings are supplied.
	 */
	protected $defaultSettings = array();

	/**
	 * @var boolean Set to true if this panel's output should be hidden.
	 * @todo On template system conversion, change to protected, fix name and use accessors.
	 */
	public $DontDisplay = false;

	public function __construct(array $settings=array())
	{
		$this->settings = array_merge($this->defaultSettings, $this->settings);
	}

	public function getDontDisplay()
	{
		return $this->DontDisplay;
	}

	/**
	 * Stores the html filename
	 */
	public $_htmlFile;

	public $_tplFile;
	
	public function ParsePanel($TplFile="")
	{
		$htmlPanelData = '';
		$parsedPanelData = '';

		$this->_tplFile = $TplFile;

		// check for file and load the contents
		if (file_exists($this->_htmlFile)) {
			if ($fp = @fopen($this->_htmlFile, 'rb')) {
				while (!feof($fp)) {
					$htmlPanelData .= fgets($fp, 4096);
				}
				@fclose($fp);
			}
		}

		// set the global settings/variables for all panels
		$this->SetGlobalPanelSettings();

		// sets the local panel settings, defined within the extendee
		if (method_exists($this, 'SetPanelSettings')) {
			$this->SetPanelSettings();
		}

		// some panels require the option to return blank
		if (isset($this->DontDisplay) && $this->DontDisplay == true) {
			$parsedPanelData = '';
		} else {
			// parse panel as normal
			$parsedPanelData = $htmlPanelData;
		}

		return $parsedPanelData;
	}


	public function SetHTMLFile($HTMLFile)
	{
		$this->_htmlFile = $HTMLFile;
	}

	public function SetGlobalPanelSettings()
	{
		// make the site's URL global. e.g. use for image path's
	}

}
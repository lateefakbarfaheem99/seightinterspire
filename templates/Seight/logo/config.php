<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class CarAudio_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 2;

	/**
	 * Name of the recommended template to use this logo for.
	*/
	public $FileType = 'gif';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'ICE';
		$this->Text[1] = 'Audio';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'SERPNTBI.TTF', 'ce3779', 45, 0, 0);

		// determine the y position for the text
		$y_pos = 10+((52 - $t_box['height'])/2);

		$top_right = 10;
		if(strlen($this->Text[0]) > 0) {

			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', '999999', 36, 10, $y_pos-2);
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', '999999', 36, 14, $y_pos+2);
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', '999999', 36, 10, $y_pos+2);
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', '999999', 36, 14, $y_pos-2);

			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', 'FFFFFF', 36, 11, $y_pos-1);
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', 'FFFFFF', 36, 13, $y_pos+1);
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', 'FFFFFF', 36, 11, $y_pos+1);
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', 'FFFFFF', 36, 13, $y_pos-1);
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', '8fd7f4', 36, 12, $y_pos);
			$top_right = $text_position['top_right_x'];
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', '999999', 36, $top_right+10, $y_pos-2);
			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', '999999', 36, $top_right+14, $y_pos+2);
			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', '999999', 36, $top_right+10, $y_pos+2);
			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', '999999', 36, $top_right+14, $y_pos-2);

			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', 'FFFFFF', 36, $top_right+11, $y_pos-1);
			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', 'FFFFFF', 36, $top_right+13, $y_pos+1);
			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', 'FFFFFF', 36, $top_right+11, $y_pos+1);
			$text_position = $this->AddText($this->Text[1], 'SERPNTBI.TTF', 'FFFFFF', 36, $top_right+13, $y_pos-1);

			$text_position2 = $this->AddText($this->Text[1], 'SERPNTBI.TTF', '', 36, $top_right+12, $y_pos);
			$top_right = $text_position2['top_right_x'];
		}

		$this->SetImageSize($top_right+20, 55);

		return $this->MakeLogo();
	}
}
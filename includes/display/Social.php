<?php
class ISC_SOCIAL_PANEL extends PANEL
{
	public function SetPanelSettings()
	{
		$GLOBALS['FacebookLink']=(GetConfig('FacebookLink')!=null)?GetConfig('FacebookLink'):'http://www.facebook.com';
		$GLOBALS['TwitterLink']=(GetConfig('TwitterLink')!=null)?GetConfig('TwitterLink'):'http://twitter.com';
		$GLOBALS['RssLink']=(GetConfig('RssLink')!=null)?GetConfig('RssLink'):'/rss';
	}
}
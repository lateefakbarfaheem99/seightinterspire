<?php
CLASS ISC_SIDEMODULECONTACT_PANEL extends PANEL
{
	public function SetPanelSettings()
	{
		 $GLOBALS['SNIPPETS']['ModuleContact']='';
		 $GLOBALS['ContactInfo']=getConfig('ContactInfo');
		
	    $GLOBALS['SNIPPETS']['ModuleContact'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("ModuleContact");
			
	}
}
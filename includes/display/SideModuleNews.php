<?php
CLASS ISC_SIDEMODULENEWS_PANEL extends PANEL
{
	public function SetPanelSettings()
	{
		$GLOBALS['SNIPPETS']['ModuleNews']='';
		$GLOBALS['SideNewsContents']='';
		//get the news headings
				$query = "select newsid, newstitle,newscontent from [|PREFIX|]news where newsvisible='1' order by newsdate desc";
				$query .= $GLOBALS['ISC_CLASS_DB']->AddLimit(0,5);
				$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
								$output='<ul class="side-news">';

					while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
						$NewsTitle= isc_html_escape($row['newstitle']);
						$NewsLink= BlogLink($row['newsid'], $row['newstitle']);
						$output.='<li><a href="'.$NewsLink.'">'.$NewsTitle.'</a></li>';
						
					}
					$output.='</ul>';
			    $GLOBALS['SideNewsContents'].=$output;
	    $GLOBALS['SNIPPETS']['ModuleNews'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("ModuleNews");
		
	}
}
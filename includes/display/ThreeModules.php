<?php

class ISC_THREEMODULES_PANEL extends PANEL

{

	public function SetPanelSettings() {

		$count = 0;

		$GLOBALS['NewsContents']='';

		$GLOBALS['AlternateClass']="Odd";

		$GLOBALS['SNIPPETS']['Module1'] = '';

		$GLOBALS['SNIPPETS']['Module2'] = '';

	    $GLOBALS['SNIPPETS']['Module3'] = '';

		$GLOBALS['ContactInfo'] = getConfig('ContactInfo');



        $GLOBALS['SNIPPETS']['Module1Img'] = $GLOBALS['ISC_CFG']['ShopPath'].'/'.$GLOBALS['ISC_CFG']['Module1Img'];

		//get the news headings

		$query = "select newsid, newstitle,newscontent from [|PREFIX|]news where newsvisible='1' order by newsdate desc";

		$query .= $GLOBALS['ISC_CLASS_DB']->AddLimit(0,8);

		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

		$output='<ul id="news">';

		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {

			$NewsTitle= isc_html_escape($row['newstitle']);
//			$NewsTitle = (strlen($NewsTitle) > 54) ? substr($NewsTitle,0,54).'...' : $NewsTitle;

			$NewsLink= BlogLink($row['newsid'], $row['newstitle']);

			$output.='<li><a href="'.$NewsLink.'">'.$NewsTitle.'</a></li>';

			

		}

		$output.='</ul>';

		$GLOBALS['NewsContents'].=$output;

		

	    $GLOBALS['SNIPPETS']['Module1'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("Module1Item");

	    

		$query = 'SELECT p.*, pi.* FROM [|PREFIX|]products p LEFT JOIN [|PREFIX|]product_images pi 

		ON (p.productid=pi.imageprodid AND pi.imageisthumb=1) WHERE p.prodvisible=1 AND p.prodfeatured=1;';

		/*$this->getProductQuery('p.prodfeatured=1', 'RAND()', getConfig('HomeFeaturedProducts'));*/

		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {

			$this->setProdGlobals($row);

			$GLOBALS['SNIPPETS']['Module2'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("Module2Item");

		}

		

	    $GLOBALS['SNIPPETS']['Module3'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("Module3Item");

	}

	

	public function setProdGlobals($row) {

		$GLOBALS['ProductId'] = (int)$row['productid'];

		$GLOBALS['ProductName'] = isc_html_escape($row['prodname']);

		$GLOBALS['ProductLink'] = ProdLink($row['prodname']);

		$desc = strip_tags($row['proddesc']);

		$GLOBALS['ProductSummary'] = isc_substr($desc, 0, 60) . "...";

        $GLOBALS['ProductThumb'] = ImageThumb(GetConfig('ShopPath')."/".GetConfig('ImageDirectory')."/".$row['imagefilestd'], ProdLink($row['prodname']));

	}

}
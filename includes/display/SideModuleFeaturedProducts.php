<?php
CLASS ISC_SIDEMODULEFEATUREDPRODUCTS_PANEL extends PANEL
{
	public function SetPanelSettings()
	{
		$GLOBALS['SNIPPETS']['ModuleFeaturedProducts']='';
	 
		$query = 'SELECT p.*, pi.* FROM [|PREFIX|]products p LEFT JOIN [|PREFIX|]product_images pi 
		ON (p.productid=pi.imageprodid AND pi.imageisthumb=1) WHERE p.prodvisible=1 AND p.prodfeatured=1;';
		/*$this->getProductQuery('p.prodfeatured=1', 'RAND()', getConfig('HomeFeaturedProducts'));*/
		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
			$this->setProdGlobals($row);
			$GLOBALS['SNIPPETS']['ModuleFeaturedProducts'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("ModuleFeaturedProducts");
		}
			
	}
	public function setProdGlobals($row){
		$GLOBALS['ProductId'] = (int)$row['productid'];
		$GLOBALS['ProductName'] = isc_html_escape($row['prodname']);
		$GLOBALS['ProductLink'] = ProdLink($row['prodname']);
		$desc = strip_tags($row['proddesc']);
		$GLOBALS['ProductSummary'] = isc_substr($desc, 0, 60) . "...";
		$GLOBALS['ProductThumb'] = ImageThumb($row, ProdLink($row['prodname']));


	}
}
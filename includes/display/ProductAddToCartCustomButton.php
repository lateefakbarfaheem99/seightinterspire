<?php

CLASS ISC_PRODUCTADDTOCARTCUSTOMBUTTON_PANEL extends PANEL
{
	/**
	 * Set the display settings for this panel.
	 */
	public function SetPanelSettings()
	{

		$this->productClass = GetClass('ISC_PRODUCT');
		$this->db = $GLOBALS['ISC_CLASS_DB'];

		$productDetails = $this->productClass->GetProduct();

		$productCats	=	explode(',', $productDetails['prodcatids']);
		
		$GLOBALS['ShowCustomeButton']	=	'none';

		foreach($productCats	AS	$index	=> $catId){
		
			$catSql		=	"SELECT *  FROM `[|PREFIX|]categories` WHERE `categoryid` = '$catId' ";
			$catQuery	=	$GLOBALS['ISC_CLASS_DB']->Query($catSql);
			$catInfo	=	$GLOBALS['ISC_CLASS_DB']->Fetch($catQuery);

			if(	$catInfo['catparentid']	==	'13'	){
				$GLOBALS['ShowCustomeButton']	=	'';
			
			}
		
		}
	

		$pageSql	=	"	SELECT *  FROM `[|PREFIX|]pages` WHERE `pageid` = '9'	";
		$pageQuery	=	$GLOBALS['ISC_CLASS_DB']->Query($pageSql);
		$pageInfo	=	$GLOBALS['ISC_CLASS_DB']->Fetch($pageQuery);

		$GLOBALS['CustomButtonLink']	=	PageLink($pageInfo['pageid'], $pageInfo['pagetitle']);
	
		
	}
}

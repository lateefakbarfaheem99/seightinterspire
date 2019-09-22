<?php
class ISC_SIDEPRODUCTRELATED_PANEL extends PRODUCTS_PANEL
{
	public function SetPanelSettings()
	{
		if (!isset($GLOBALS['ISC_CLASS_PRODUCT'])) {
			$GLOBALS['ISC_CLASS_PRODUCT'] = GetClass('ISC_PRODUCT');
		}

		$relatedProducts = $GLOBALS['ISC_CLASS_PRODUCT']->GetRelatedProducts();

        $product_cat_id = $GLOBALS['ISC_CLASS_PRODUCT']->_prodcatid;

		if (!$relatedProducts) {
			$this->DontDisplay = true;
			return;
		}

		$output = "";

		if(!getProductReviewsEnabled()) {
			$GLOBALS['HideProductRating'] = "display: none";
		}

		$query = $this->getProductQuery('p.productid IN ('.$relatedProducts.')', 'prodsortorder ASC');
		$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

		$GLOBALS['AlternateClass'] = '';
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
            if(!isPasswordProtected($row['prodcatids']) && $product_cat_id == $row['prodcatids']) {
			$this->setProductGlobals($row);
			$output .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("SideRelatedProducts");
		}
}

		$GLOBALS['SNIPPETS']['SideProductsRelated'] = $output;

		if(!$output) {
			$this->DontDisplay = true;
		}
	}
}
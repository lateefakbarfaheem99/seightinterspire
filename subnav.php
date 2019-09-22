<?php
include(dirname(__FILE__) . "/init.php");

function getProductsByCategory($catid)
{

	$query = 'SELECT DISTINCT p.productid,p.prodname,p.proddesc    FROM [|PREFIX|]products p,[|PREFIX|]categoryassociations caperm
	WHERE  p.prodvisible=1 AND   caperm.productid = p.productid AND caperm.categoryid='.$catid  ;
	return $query;
}

$query=getProductsByCategory($_GET['id']);
$result = $GLOBALS['ISC_CLASS_DB']->Query($query);
?>
<div class="nav-drop-arrow-l "></div>
	<div class="nav-drop-slide-frame ">
		<div class="nav-drop-slide-container">
<?php 
while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
	    $ProductId= (int)$row['productid'];
		$ProductName= isc_html_escape($row['prodname']);
		$ProductLink= ProdLink($row['prodname']);
		$desc = strip_tags($row['proddesc']);
		//$ProductThumb= ImageThumb($row);
			$query2 = 'SELECT  pi.imagefilethumb FROM [|PREFIX|]product_images pi
				WHERE  pi.imageprodid='.$ProductId;
			$result2 = $GLOBALS['ISC_CLASS_DB']->Query($query2);
			$row2 = $GLOBALS['ISC_CLASS_DB']->Fetch($result2);
		if(!empty($row2['imagefilethumb'])){
			$ProductThumb='<img src="'.$GLOBAL['ISC_CFG']['ShopPath'].'/product_images/'.$row2['imagefilethumb'].'"/>';
		}else{
			$ProductThumb='<img src="'.$GLOBAL['ISC_CFG']['ShopPath'].'/templates/Seight/images/ProductDefault.gif"/>';

		}
	

echo'<div style="clear: none; float: left;" class="slide-container-item">
    		            	
<a class="sub_sub_cat" href="'.$ProductLink.'">
		'.$ProductThumb.'
		<p>'.$ProductName.'</p>
    	<div class="category-hint">
			<p class="viewProducts">View Product &gt;</p>
	    </div>
</a>
</div>';
}	
?>
							
	</div> <!-- .nav-drop-slide-container -->
</div> <!-- .nav-drop-slide-frame -->
                                
<div href="#" class="nav-drop-arrow-r"></div>';

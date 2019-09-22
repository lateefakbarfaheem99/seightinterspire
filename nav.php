<?php
include(dirname(__FILE__) . "/init.php");

function getSubCategoriesQuery($catid)
{

	/*$query = "
			SELECT c.* "."
			FROM [|PREFIX|]categories c
			WHERE c.catvisible=1 AND c.catparentid=".$catid;
*/

	$query = "
			SELECT c.*categoryid,c.catname ,c.catimagefile "."
			FROM [|PREFIX|]categories c
			WHERE c.catvisible=1 AND c.catparentid=".$catid;


	return $query;
}

if($_GET['id']==14){
	$query=getSubCategoriesQuery($_GET['id']);
	$result = $GLOBALS['ISC_CLASS_DB']->Query($query);?>
	<div class="nav-drop-arrow-l "></div>
	<div class="nav-drop-slide-frame ">
		<div class="nav-drop-slide-container">
		<?php
	while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
		$CategoryLink= CatLink($row['categoryid'], $row['catname'], false);
		if(!empty($row['catimagefile'])){
		$CatThumb='<img src="'.$GLOBAL['ISC_CFG']['ShopPath'].'/product_images/'.$row['catimagefile'].'"/>';
		}else{
		$CatThumb='<img src="'.$GLOBAL['ISC_CFG']['ShopPath'].'/templates/Seight/images/ProductDefault.gif"/>';

		}
	echo'<div style="clear: none; float: left;" class="slide-container-item">
	<a class="sub_sub_cat" href="'.$CategoryLink.'">
				'.$CatThumb.'

		<p>'.$row['catname'].'</p>
    	<div class="category-hint">
			<p class="viewProducts">View Category</p>
	    </div>
	</a>
	</div>';
	}?>
	</div> <!-- .nav-drop-slide-container -->
	</div> <!-- .nav-drop-slide-frame -->
                                
	<div href="#" class="nav-drop-arrow-r"></div>';
<?php
}else{
	$query=getSubCategoriesQuery($_GET['id']);
	$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

	while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) {
	 $CategoryLink= CatLink($row['categoryid'], $row['catname'], false);
	
	echo'<li id="subcat-'.$row['categoryid'].'"><a href="'.$CategoryLink.'">'.$row['catname'].'</a></li>';
}
}

?>
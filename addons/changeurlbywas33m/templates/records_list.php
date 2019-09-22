<!--
<input type="button" name="DelSelected" class="DelSelected" value="Delete Selected Records" onclick="return  ckeckboxes()" style="cursor:pointer" />
-->

<?php	if(isset($_REQUEST['open'])){																									?>

	<!--<input type="button" name="UpdateSelected" class="UpdateSelected" value="Update Selected Records" style="cursor:pointer" />-->

<?php	}																																?>		

<fieldset class="records_list">

<?php	

	if(isset($_REQUEST['open'])	&&	$_REQUEST['open']	==	'products'){																		

?>

	  <legend><b> Current Products </b></legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeadTable">
			<tr>
				<td width="28"><input onclick="return checkUncheck(this);" type="checkbox"> </td>
				<td width="35">ID</td>
				<td width="585">Product Name</td>
				<td width="182" >Product Link</td>
				<td width="57" align="center">Visible</td>
				<td width="55" align="center">Featured</td>
				<td width="55" align="center">Update</td>
			</tr>
		</table>
	
	<div id="contentLeft">
		<ul>
	
	<?php
	
			$query 		= "	SELECT * FROM `[|PREFIX|]products`	ORDER BY `prodsortorder` ASC	";
			
			$result 	= 	$GLOBALS['ISC_CLASS_DB']->Query($query);
			
			$TRows		=	$GLOBALS['ISC_CLASS_DB']->CountResult($query);
	
			echo '	<input type="hidden" id="TotalRows" value="'.$TRows.'" />	';
			
			while($item = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
	
				$extra	=	'class="check'.$TRows.'"';
				$TRows--;
	
	?>
	
		<li id="recordsArray_<?php echo $item['productid']; ?>">
	
	<form name="<?php echo $item['productid'];?>" class="update products" method="post" action ="?ToDo=runAddon&addon=<?php echo $this->name; ?>&actionMode">
		<input type="hidden" name="Edit" id="Edit<?php echo $item['productid'];?>" value="<?php echo $item['productid'];?>" />
	
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="GridTable" style="width:100%";>
				<tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
					<td width="25">
						<input type="checkbox" <?php echo $extra; ?> id="check" value="<?php echo $item['productid']; ?>" />
					</td>
					<td width="33">		<?php echo $item['productid'] ?>	</td>
					<td width="365">	<?php echo $item['prodname'] ?>		</td>
					<td width="390"> <?php echo $GLOBALS['ShopPath'].'/'.PRODUCT_LINK_PART ?>/
						<input name="prodlink" type="text" id="prodlink<?php echo $item['productid'];?>" value="<?php echo $item['prodlink'];	?>" />
					</td>
					<td width="57" align="center">
						<a class="visible visible<?php echo $item['productid'] ;?> products" accesskey="<?php echo $item['prodvisible']; ?>" id="<?php echo $item['productid'] ;?>" href="">
	<?php 					print ($item['prodvisible'] == 1)? 	'<img src="images/addons/tick.png">' 
															: 	'<img src="images/addons/cross.png">';	?>
	
						</a>
					</td>
					<td width="50" align="center">
	
						<a class="prodfeatured prodfeatured<?php echo $item['productid'] ;?>" accesskey="<?php echo $item['prodfeatured']; ?>" id="<?php echo $item['productid'] ;?>" href="">
	
	<?php 					print ($item['prodfeatured'] == 1)	? 	'<img src="images/addons/tick.png">' 
																: 	'<img src="images/addons/cross.png">';	?>
	
						</a>
	
					</td>
					<td width="55" align="center">
						<input type="image" src="images/addons/update.png" alt="update" /> 
					</td>
				</tr>
	</table>
	
	</form>
	
	</li>

<!-- End of While loop -->
<?php	}															?>

</ul>
</div>

<?php

	}else
	if(isset($_REQUEST['open'])	&&	$_REQUEST['open']	==	'categories'){	
?>	
	
	  <legend><b> Current Categories </b></legend>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeadTable">
			<tr>
				<td width="28"><input onclick="return checkUncheck(this);" type="checkbox"> </td>
				<td width="35">ID</td>
				<td width="585">Category Name</td>
				<td width="182" >Category Link</td>
				<td width="57" align="center">Visible</td>
				<td width="55" align="center">Update</td>
			</tr>
		</table>
	
	<div id="contentLeft">
		<ul>
	
	<?php
	
			$query = "	SELECT * FROM `[|PREFIX|]categories`	WHERE	`catparentid`	=	'13'	ORDER	BY `catsort` ASC	";
			
			$result 	= 	$GLOBALS['ISC_CLASS_DB']->Query($query);
			
			$TRows		=	$GLOBALS['ISC_CLASS_DB']->CountResult($query);
	
			echo '	<input type="hidden" id="TotalRows" value="'.$TRows.'" />	';
			
			while($item = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
	
				$extra	=	'class="check'.$TRows.'"';
				$TRows--;
	
	?>
	
		<li id="recordsArray_<?php echo $item['categoryid']; ?>">
	
	<form name="<?php echo $item['categoryid'];?>" class="update categories" method="post" action ="?ToDo=runAddon&addon=<?php echo $this->name; ?>&actionMode">
		<input type="hidden" name="Edit" id="Edit<?php echo $item['categoryid'];?>" value="<?php echo $item['categoryid'];?>" />
	
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="GridTable" style="width:100%";>
				<tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
					<td width="25">
						<input type="checkbox" <?php echo $extra; ?> id="check" value="<?php echo $item['categoryid']; ?>" />
					</td>
					<td width="33">		<?php echo $item['categoryid'] ?>	</td>
					<td width="365">	<?php echo $item['catname'] ?>		</td>
					<td width="390"> <?php echo $GLOBALS['ShopPath'].'/'.CAT_LINK_PART ?>/
						<input name="catlink" type="text" id="catlink<?php echo $item['categoryid'];?>" value="<?php echo $item['catlink'];	?>" />
					</td>
					<td width="57" align="center">
						<a class="visible visible<?php echo $item['categoryid'] ;?> categories" accesskey="<?php echo $item['catvisible']; ?>" id="<?php echo $item['categoryid'] ;?>" href="">
	<?php 					print ($item['catvisible'] == 1)? 	'<img src="images/addons/tick.png">' 
															: 	'<img src="images/addons/cross.png">';	?>
	
						</a>
					</td>
					<td width="55" align="center">
						<input type="image" src="images/addons/update.png" alt="update" /> 
					</td>
				</tr>
	</table>
	
	</form>
	
	</li>

<!-- End of While loop -->
<?php	}															?>

</ul>
</div>
	
<?php	
	
	
	}else{																									

		// Products information
		$productsSql			= 	" SELECT * FROM `[|PREFIX|]products`	";
		$productsQuery			= 	$GLOBALS['ISC_CLASS_DB']->Query($productsSql);
		$totalProducts			= 	$GLOBALS['ISC_CLASS_DB']->CountResult($productsQuery);

		$productsVisibleSql		= 	$productsSql." WHERE	`prodvisible`	=	'1'	";
		$productsVisibleQuery	= 	$GLOBALS['ISC_CLASS_DB']->Query($productsVisibleSql);
		$totalVisibleProducts	= 	$GLOBALS['ISC_CLASS_DB']->CountResult($productsVisibleQuery);

		$productsHiddenSql		= 	$productsSql." WHERE	`prodvisible`	=	'0'	";
		$productsHiddenQuery	= 	$GLOBALS['ISC_CLASS_DB']->Query($productsHiddenSql);
		$totalHiddenProducts	= 	$GLOBALS['ISC_CLASS_DB']->CountResult($productsHiddenQuery);

		// Categories information
		$categoriesSql			= 	" SELECT * FROM `[|PREFIX|]categories`	WHERE	`catparentid`	=	'13'	";
		$categoriesQuery		= 	$GLOBALS['ISC_CLASS_DB']->Query($categoriesSql);
		$totalCategories		= 	$GLOBALS['ISC_CLASS_DB']->CountResult($categoriesQuery);

		$categoriesVisibleSql	= 	$categoriesSql." AND	`catvisible`	=	'1'	";
		$categoriesVisibleQuery	= 	$GLOBALS['ISC_CLASS_DB']->Query($categoriesVisibleSql);
		$totalVisibleCategories	= 	$GLOBALS['ISC_CLASS_DB']->CountResult($categoriesVisibleQuery);

		$categoriesHiddenSql	= 	$categoriesSql." AND	`catvisible`	=	'0'	";
		$categoriesHiddenQuery	= 	$GLOBALS['ISC_CLASS_DB']->Query($categoriesHiddenSql);
		$totalHiddenCategories	= 	$GLOBALS['ISC_CLASS_DB']->CountResult($categoriesHiddenQuery);

?>

  <legend><b>	Current Url types	</b></legend>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeadTable">
		<tr>
			<td width="600">Name</td>
			<td width="100" align="center">Visible</td>
			<td width="100" align="center">Hidden</td>
			<td width="100" align="center">Total</td>
			<td width="50" align="center">Details</td>
		</tr>
	</table>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" >
		<tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
			<td width="600">	Products </td>
			<td width="100" align="center"> <?php echo $totalVisibleProducts ?> </td>
			<td width="100" align="center"> <?php echo $totalHiddenProducts ?> </td>
			<td width="100" align="center"> <?php echo $totalProducts ?> </td>
			<td width="50" align="center">
               	<a href="?ToDo=runAddon&addon=<?php echo $this->name; ?>&open=products" >
                   	<img src="images/addons/open.png">
                </a>
            </td>
		</tr>
		<tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
			<td width="600">	Categories								</td>
			<td width="100" align="center">	<?php echo $totalVisibleCategories ?>	</td>
			<td width="100" align="center">	<?php echo $totalHiddenCategories ?>	</td>
			<td width="100" align="center">	<?php echo $totalCategories ?>			</td>
			<td width="50" align="center">
               	<a href="?ToDo=runAddon&addon=<?php echo $this->name; ?>&open=categories" >
                   	<img src="images/addons/open.png">
                </a>
            </td>
		</tr>

</table>

<?php	}																											?>


</fieldset>
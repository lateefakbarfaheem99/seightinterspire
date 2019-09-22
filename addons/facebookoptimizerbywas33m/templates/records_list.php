<!--
<input type="button" name="DelSelected" class="DelSelected" value="Delete Selected Records" onclick="return  ckeckboxes()" style="cursor:pointer" />
-->
<?php	if(isset($_REQUEST['openItem'])){															?>

	Upload new image : 
    <form enctype="multipart/form-data" action="?ToDo=runAddon&addon=<?php echo $this->name; ?>&actionMode" method="post" name="uploadNewimage">
        <input type="hidden" name="Add" value="" />
        <input type="hidden" name="type" value="<?=$_REQUEST['open']?>" />
        <input type="hidden" name="type_id" value="<?=$_REQUEST['openItem']?>" />
        <input type="file" name="newimage" />
        <input type="submit" name="submit" value="Upload" />
    </form>

<fieldset class="records_list">

<?php
		$imagesSql	=	"	SELECT 		`item_id`, `type`, `type_id`, `item_thumb`,`visibility`	
							FROM		`isc_facebook_thumbnails` 
							WHERE		`visibility`	=	'1'
							AND			`type_id`		=	'$_GET[openItem]'
							ORDER BY	`position`	ASC
						";
		$imagesQuery	=	$GLOBALS['ISC_CLASS_DB']->Query($imagesSql);
		$count	=	'1';
?>
<legend><b>	Available Thumbnails </b></legend>
<div id="contentLeft">
	<input type="hidden" name="table_name" id="table_name" value = "isc_facebook_thumbnails" />
    <ul class="thumbnail_items">
<?php
		while($image	=	$GLOBALS['ISC_CLASS_DB']->Fetch($imagesQuery)){								
		
//			if(	($count % 4 ) == 0	)
//				$extra_style = "padding-right: 0px;";
//			else
//				$extra_style = "";
								
			$count++;
?>    
			<li class="item" id="recordsArray_<?php echo $image['item_id']; ?>">
                <div class="image_thumb">
                    <img src="../facebook_thumbnails/<?=$image['item_thumb']?>" />
                </div>
                <div class="image_update">
                    <a class="RemoveImage" href="?ToDo=runAddon&addon=<?=$this->name;?>&actionMode&Del=<?=$image['item_id']?>">
                    	<img src="images/addons/cross.png" title="Remove" />
                    </a>

                   	<a title="Show" class="visible visible<?=$image['item_id'];?>" id="<?=$image['item_id'] ;?>" href="#" >
<?php 					print ($image['visibility'] == 1)? 	'<img src="images/addons/tick.png">'
														: 	'<img src="images/addons/cross.png">';
?>
					</a>

                </div>
			</li>
<?php	}																								?>

	</ul>
</div>

<?php
		
	}else
	if(isset($_REQUEST['open'])	&&	$_REQUEST['open']	==	'products')
	{
		
?>

	<legend><b>	Current Products </b></legend>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeadTable">
		<tr>
			<td width="600">Name</td>
			<td width="200">Total Thumbnails</td>
			<td width="50" align="center">Details</td>
		</tr>
	</table>

<div id="contentLeft">
    <ul>
		
<?php

		/* Check if file is present. if not then remove entry from database */
		$products_query	=	"SELECT * FROM `[|PREFIX|]products`	WHERE	`prodvisible`	=	'1'	
																ORDER BY `prodsortorder`	ASC	
								";

		$products_info	=	$GLOBALS['ISC_CLASS_DB']->Query($products_query);

		while(	$item	=	$GLOBALS['ISC_CLASS_DB']->Fetch($products_info)	){
			
			$thumbnails	=	"SELECT *	FROM `isc_facebook_thumbnails`	WHERE	`type`		=	'1'	
																		AND		`type_id`	=	'$item[productid]'
							";
			$thumbnails	=	$GLOBALS['ISC_CLASS_DB']->CountResult($thumbnails);

?>

            <li>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="GridTable" style="width:100%";>
                    <tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
                        <td width="600"><?=$item['prodname']?></td>
                        <td width="193"><?=$thumbnails?></td>
                        <td width="50" align="center">
                            <a href="?ToDo=runAddon&addon=<?=$this->name;?>&open=products&openItem=<?=$item['productid']?>" >
	                            <img title="Open" src="images/addons/open.png">
                            </a>
                        </td>
                    </tr>
                </table>   
            </li>
        
<?php	}																											?>

</ul>
</div>

<?php	
	}else
	if(isset($_REQUEST['open'])	&&	$_REQUEST['open']	==	'news')
	{


?>

	<legend><b>	Current News Articles </b></legend>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeadTable">
		<tr>
			<td width="600">Name</td>
			<td width="200">Total Thumbnails</td>
			<td width="50" align="center">Details</td>
		</tr>
	</table>

<div id="contentLeft">
    <ul>
		
<?php

		/* Check if file is present. if not then remove entry from database */
		$news_query	=	"SELECT * FROM `[|PREFIX|]news`	WHERE	`newsvisible`	=	'1'	
															ORDER BY `newsdate`	DESC	
								";

		$news_info	=	$GLOBALS['ISC_CLASS_DB']->Query($news_query);
		
		while(	$item	=	$GLOBALS['ISC_CLASS_DB']->Fetch($news_info)	){

			$thumbnails	=	"SELECT *	FROM `isc_facebook_thumbnails`	WHERE	`type`		=	'2'	
																		AND		`type_id`	=	'$item[productid]'
							";
			$thumbnails	=	$GLOBALS['ISC_CLASS_DB']->CountResult($thumbnails);

			
?>

            <li>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="GridTable" style="width:100%";>
                    <tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
                        <td width="600"><?=$item['newstitle']?></td>
                        <td width="193"><?=$thumbnails?></td>
                        <td width="50" align="center">
                            <a href="?ToDo=runAddon&addon=<?=$this->name;?>&open=news&openItem=<?=$item['newsid']?>" >
	                            <img title="Open" src="images/addons/open.png">
                            </a>
                        </td>
                    </tr>
                </table>   
            </li>
        
<?php	}																											?>

</ul>
</div>

<?php	
		
	}else{
?>

  <legend><b>	Available Items </b></legend>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeadTable">
		<tr>
			<td width="680">Type</td>
			<td width="65">Total</td>
			<td width="55" align="center">Details</td>
		</tr>
	</table>

<div id="contentLeft">
    <ul>

<?php

		$products_query	=	"SELECT * FROM `[|PREFIX|]products`	WHERE	`prodvisible`	=	'1'	
																ORDER BY `prodsortorder`	ASC	
								";
		$total_products	= 	$GLOBALS['ISC_CLASS_DB']->CountResult($products_query);

		$news_query		=	"SELECT * FROM `[|PREFIX|]news`	WHERE	`newsvisible`	=	'1'	
															ORDER BY `newsdate`	DESC	
								";
		$total_news 	= 	$GLOBALS['ISC_CLASS_DB']->CountResult($news_query);
		
?>

   	<li>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="GridTable" style="width:100%";>
			<tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
				<td width="610"> Products </td>
				<td width="48"><?=$total_products?></td>
				<td width="50" align="center">
					<a href="?ToDo=runAddon&addon=<?php echo $this->name; ?>&open=products" >
						<img title="Open" src="images/addons/open.png">
					</a>
				</td>
			</tr>
		</table>
	</li>
   	<li>
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="GridTable" style="width:100%";>
			<tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
				<td width="610"> News Articles </td>
				<td width="48"><?=$total_news?></td>
				<td width="50" align="center">
					<a href="?ToDo=runAddon&addon=<?php echo $this->name; ?>&open=news" >
						<img title="Open" src="images/addons/open.png">
					</a>
				</td>
			</tr>
		</table>
	</li>

</ul>
</div>

<?php	}																											?>

</fieldset>
<!--
<input type="button" name="DelSelected" class="DelSelected" value="Delete Selected Records" onclick="return  ckeckboxes()" style="cursor:pointer" />
-->
<input type="button" name="OpenGallery" value="Open Gallery Manager" style="cursor:pointer" onclick="window.open('?ToDo=manageGalleryImages')" />
<?php	if(isset($_REQUEST['open'])){					?>

<input type="button" name="UploadImages" value="Upload More Images" style="cursor:pointer" onclick="window.open('?ToDo=uploadgalleryimages&id=<?=$_REQUEST['open']?>')" />

<?php	}												?>
<fieldset class="records_list">

<?php	

	if(isset($_REQUEST['open'])){
		
?>
	<legend><b>	Current Samples </b></legend>

	<input type="hidden" name="table_name" id="table_name" value="isc_galleries_images" />
	<input type="hidden" name="galleryId" id="galleryId" value="<?=mysql_real_escape_string($_REQUEST['open'])?>" />
    
<div id="contentLeft">
    <ul>

<?php

		$galleryId	=	mysql_real_escape_string($_REQUEST['open']);

		$item		=	array();
		
		$query		=	"SELECT galtitle FROM [|PREFIX|]galleries ga WHERE galid = '$galleryId' ";
		
		$result		=	$GLOBALS['ISC_CLASS_DB']->Query($query);
		
		$row		=	$GLOBALS["ISC_CLASS_DB"]->Fetch($result);
		
		$galname	=	$row['galtitle'];
	
		$Directory	=	"../seightgallery/$galname";
		{
		/*
		
			$MyDirectory = opendir($Directory) or die('Erreur');
	
			$files_info = array();
	
			 while (false !== ($Entry = readdir($MyDirectory))){
	
				if(!is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..' && $Entry != 'Thumbs.db' ) {
	
					list($img_title, $ext) = explode(".", $Entry);
					
					$sql	=	"SELECT `image_id`	FROM	`[|PREFIX|]galleries_images`	
													WHERE	`image_file_name`	=	'$Entry'
								";
					if($GLOBALS['ISC_CLASS_DB']->CountResult($sql)	==	0){
					
						$new_file_sql	=	"INSERT INTO	`[|PREFIX|]galleries_images`
													SET		`image_display_name`	=	'$img_title',
															`image_file_name`		=	'$Entry',
															`gallery_id`			=	'$_REQUEST[open]'
											";
						$GLOBALS['ISC_CLASS_DB']->Query($new_file_sql);
					}
	
				}
	
			}
	
			
	
			closedir($MyDirectory);
			// sort by names
	//		sort($file_names, SORT_STRING);
	
			// Check if file is present. if not then remove entry from database
			$database_files_sql		=	"SELECT `image_id`,`image_file_name`	FROM	`[|PREFIX|]galleries_images`	
																				WHERE	`gallery_id`	=	'$_REQUEST[open]'
																				order by `position`	ASC 
										";
	
			$database_files_query	=	$GLOBALS['ISC_CLASS_DB']->Query($database_files_sql);
	
			while($entry	=	$GLOBALS['ISC_CLASS_DB']->Fetch($database_files_query)){	
	
				if(	!file_exists($Directory.'/'.$entry['image_file_name'])	){
					$GLOBALS['ISC_CLASS_DB']->Query("DELETE	FROM	`[|PREFIX|]galleries_images`	
															WHERE	`image_id`	=	'$entry[image_id]'
													");
				}
			}
	
	*/
	}

		$records_sql	=	"SELECT * FROM	`[|PREFIX|]galleries_images`	WHERE	`gallery_id`	=	'$galleryId'
																			order by `position`	ASC 
							";
		$records_query	=	$GLOBALS['ISC_CLASS_DB']->Query($records_sql);

		while(	$image	=	$GLOBALS['ISC_CLASS_DB']->Fetch($records_query)	){
			$checked	=	$image['use_as_thumbnail'] ? 'checked="checked"' : '';
?>

   	<li id="recordsArray_<?=$image['image_id']?>" class="list_item" >

<form name="<?=$image['image_id']?>" class="update_image_name" method="post" action ="?ToDo=runAddon&addon=<?=$this->name;?>&actionMode">
	
				<div class="image_thumb">
					<img src='<?=$Directory?>/thumbs/<?=$image['image_file_name']?>' alt="NoImage" />
				</div>
				<div class="image_display_name">
					<input id="image_title<?=$image['image_id']?>" type="text" name="image_title" value="<?=$image['image_display_name']?>"  />
				</div>
<!--
				<div class="image_file_name">
					<?=$image['image_file_name']?>														
				</div>
-->
				<div class="image_size"></div>
				<div class="image_update">
					<ul>
						<li class="image_update_button">
							<input type="image" src="images/addons/update.png" alt="update" title="Update This Image Name" />
						</li>
						<li class="gallery_thumbnail">	
							<input type="radio" id="<?=$image['image_id']?>" <?=$checked?> class="gallery_thumbnail_radio" name="use_as_thumbnail" title="Use this Image As gallery thumbnail" />
						</li>
				</div>

</form>

</li>
<?php	}																											?>

</ul>
</div>

<?php	}else{																									?>

  <legend><b>	Current Galleries	</b></legend>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="HeadTable">
		<tr>
			<td width="43">ID</td>
			<td width="599">Gallery Name</td>
			<td width="200">Total Images</td>
			<td width="50" align="center">Details</td>
			<td width="50" align="center">Edit</td>
		</tr>
	</table>
	<input type="hidden" name="table_name" id="table_name" value="isc_galleries" />

<div id="contentLeft">
    <ul>

<?php

		$query		=	"	SELECT g.*, (SELECT COUNT(image_id) FROM [|PREFIX|]galleries_images gi WHERE gi.gallery_id = g.galid) AS total_images	
							FROM `[|PREFIX|]galleries` g
							ORDER BY position ASC
						";

		$result 	= 	$GLOBALS['ISC_CLASS_DB']->Query($query);
		
		$TRows		=	$GLOBALS['ISC_CLASS_DB']->CountResult($query);

		echo '	<input type="hidden" id="TotalRows" value="'.$TRows.'" />	';
		
		while($item = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){

			$extra	=	'class="check'.$TRows.'"';
			$TRows--;

?>

   	<li id="recordsArray_<?php echo $item['galid']; ?>"> 
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="GridTable" style="width:100%";>
			<tr class="GridRow" onmouseout="this.className='GridRow'" onmouseover="this.className='GridRowOver'">
				<td width="40"><?php echo $item['galid'] ?></td>
				<td width="593"><?php echo $item['galtitle'] ?> </td>
				<td width="186"> <?php echo $item['total_images'] ?> </td>
				<td width="50" align="center">
					<a href="?ToDo=runAddon&addon=<?php echo $this->name; ?>&open=<?php echo $item['galid'] ?>" >
						<img title="Open" src="images/addons/open.png">
					</a>
				</td>
				<td width="50" align="center">
					<a href="?ToDo=editGallery&id=<?=$item['galid'] ?>" >
						<img title="Edit Gallery name" src="images/addons/edit.png">
					</a>
				</td>
			</tr>
</table>
</li>
<?php	}																											?>

</ul>
</div>

<?php	}																											?>


</fieldset>
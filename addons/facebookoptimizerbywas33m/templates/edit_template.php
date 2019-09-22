<?php	$current_sample	=	get_current_record('isc_mindviewstudio_sampleorder','id',$_REQUEST['Edit']);										?>

<fieldset>

	<legend><a id="newFlip" href="" ><b>Update Sample Order</b></a></legend>

<div id="newPanel" >
	
<form name="update_sample" method="post" action ="?ToDo=runAddon&addon=<?php echo $this->name; ?>&actionMode">
	<input type="hidden" name="Edit" id="edit" value="<?php echo $current_sample['id'];?>" />
	<table width="348" cellpadding="5">
		
		<tr>
			<td width="114" align="left" valign="top">Choose Product</td>
			<td width="196" align="left" valign="top">

				<select class="autofill-combo" name="product_id" id="product_id">

<?php

					$query = "SELECT * FROM `[|PREFIX|]products`";
					$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

					while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)) 
					{
						$extra = "";
						if($row['productid'] == $current_sample['product_id'])
							$extra = "selected";
							
						print "<option $extra value='{$row['productid']}'>{$row['prodname']}</option>";
					}
?>

				</select>


			</td>
		</tr>
		<tr>
			<td width="114" valign="top">Sample Size *</td>
			<td width="196" valign="top">
            	<input name="sample_size" type="text" id="sample_size" value="<?php echo $current_sample['sample_size'];	?>" />
            </td>
		</tr>
		<tr>
			<td width="114" valign="top">Sample Price *</td>
			<td width="196" valign="top">
            	<input name="sample_price" type="text" id="sample_price" onkeypress="return digitsOnly(event)" value="<?php echo $current_sample['sample_price'];	?>" />
            </td>
		</tr>
		
		<tr>
			<td valign="top">&nbsp;</td>
		  <td valign="top"><input type="submit" value="Update" /></td>
		</tr>
		
	</table>

</form>

<script type='text/javascript'>
// <![CDATA[
var update_sampleValidator = new Validator("update_sample");

update_sampleValidator.EnableMsgsTogether();
update_sampleValidator.addValidation("sample_size","req","Please fill in Block Name");
update_sampleValidator.addValidation("sample_price","req","Please fill in Sample Size");

// ]]>
</script>


</div>

</fieldset>
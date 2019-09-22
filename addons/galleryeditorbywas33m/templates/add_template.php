<fieldset>

	<legend>

    	<a id="newFlip" href="" ><b>Create New Sample Order</b></a>

    </legend>

<div id="newPanel" >
	
<form name="add_sample" id="add_sample" method="post" action ="?ToDo=runAddon&addon=<?php echo $this->name; ?>&actionMode">
	<input type="hidden" name="Add" />
	<table cellpadding="5" width="355">
		
		<tr>
			<td width="127" align="left" valign="top">Choose Product</td>
			<td width="204" align="left" valign="top">

				<select class="autofill-combo" name="product_id" id="product_combo">

<?php

					$query = "SELECT * FROM `[|PREFIX|]products`";
					$result = $GLOBALS['ISC_CLASS_DB']->Query($query);

					while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($result)){
						print "<option value='{$row['productid']}'>{$row['prodname']}</option>";
					}
?>

				</select>


			</td>
		</tr>
		<tr>
			<td valign="top">Enter Sample Size *</td>
			<td valign="top">
            	<input name="sample_size" id="sample_size" type="text" />
			</td>
		</tr>
		<tr>
			<td valign="top">Enter Sample Price *</td>
			<td valign="top">
            	<input name="sample_price" id="sample_price" onkeypress="return digitsOnly(event)" type="text" />
			</td>
		</tr>
		
		<tr>
			<td valign="top">&nbsp;</td>
		  <td valign="top"><input type="submit" value="Submit" /></td>
		</tr>
		
	</table>

</form>

<script type='text/javascript'>
// <![CDATA[
var add_sampleValidator = new Validator("add_sample");

add_sampleValidator.EnableMsgsTogether();
add_sampleValidator.addValidation("sample_size","req","Please fill in Sample Size");
add_sampleValidator.addValidation("sample_price","req","Please fill in Sample Price");
// ]]>
</script>



</div>

</fieldset>
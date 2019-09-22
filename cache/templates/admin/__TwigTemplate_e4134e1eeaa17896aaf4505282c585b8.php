<?php

/* products.variation.combination.tpl */
class __TwigTemplate_e4134e1eeaa17896aaf4505282c585b8 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table class=\"GridPanel SortableGrid\" style=\"width:100%\" id=\"optionGrid\">
\t<tr>
\t\t<td class=\"Heading2 VariationSpanRow\" colspan=\"";
        // line 3
        echo twig_safe_filter((isset($context['ColSpan']) ? $context['ColSpan'] : null));
        echo "\"><span style=\"float: right; margin-right: 5px;\"><label><input type=\"checkbox\" id=\"showFilter\" ";
        echo twig_safe_filter((isset($context['ShowFilterChecked']) ? $context['ShowFilterChecked'] : null));
        echo " /> <span>";
        echo getLang("ShowFilter");
        echo "</span></label></span>";
        echo getLang("FilterAndUpdateHeading");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td colspan=\"";
        // line 6
        echo twig_safe_filter((isset($context['ColSpan']) ? $context['ColSpan'] : null));
        echo "\" class=\"VariationSpanRow\">
\t\t\t<div id=\"filterBlock\" style=\"display: ";
        // line 7
        echo twig_safe_filter((isset($context['ShowVariationFilter']) ? $context['ShowVariationFilter'] : null));
        echo "\">
\t\t\t\t<table style=\"width: 100%;\">
\t\t\t\t\t<tr valign=\"top\">
\t\t\t\t\t\t<td style=\"width:50%;\">
\t\t\t\t\t\t\t<fieldset id=\"filterForm\">
\t\t\t\t\t\t\t\t<legend>";
        // line 12
        echo getLang("SearchFilter");
        echo "</legend>
\t\t\t\t\t\t\t\t<div id=\"optionList\">
\t\t\t\t\t\t\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['FilterOptions']) ? $context['FilterOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t<label>&nbsp;</label>
\t\t\t\t\t\t\t\t\t<input class=\"SubmitButton\" type=\"button\" value=\"";
        // line 16
        echo getLang("ApplyFilter");
        echo "\" id=\"applyFilter\" class=\"Field100\" /> ";
        echo getLang("ResetFilter");
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<fieldset id=\"bulkUpdateForm\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"filterOptions\" value=\"";
        // line 22
        echo twig_safe_filter((isset($context['FilterOptionsQuery']) ? $context['FilterOptionsQuery'] : null));
        echo "\" />

\t\t\t\t\t\t\t\t<legend>";
        // line 24
        echo getLang("BulkUpdate");
        echo "</legend>

\t\t\t\t\t\t\t\t<label>";
        // line 26
        echo getLang("CanBePurchased");
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"updatePurchaseable\">
\t\t\t\t\t\t\t\t\t<option value=\"noupdate\">";
        // line 28
        echo getLang("DoNotUpdate");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"reset\">";
        // line 29
        echo getLang("ResetField");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"yes\">";
        // line 30
        echo getLang("SYes");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"no\">";
        // line 31
        echo getLang("SNo");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t\t<label>";
        // line 35
        echo getLang("VariationPrice");
        echo ":</label>
\t\t\t\t\t\t\t\t<select name=\"updatePriceDiff\" id=\"updatePriceDiff\" onchange=\"if (this.selectedIndex > 1) { \$(this).next('span').show(); \$(this).next('span').find('input').focus(); } else { \$(this).next('span').hide(); }\">
\t\t\t\t\t\t\t\t\t<option value=\"noupdate\">";
        // line 37
        echo getLang("DoNotUpdate");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"reset\">";
        // line 38
        echo getLang("ResetField");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"add\">";
        // line 39
        echo getLang("VariationAdd");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"subtract\">";
        // line 40
        echo getLang("VariationSubtract");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"fixed\">";
        // line 41
        echo getLang("VariationFixed");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span style='display: none'>
\t\t\t\t\t\t\t\t\t";
        // line 44
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input name=\"updatePrice\" id=\"updatePrice\" type='text' class='NumberField'/> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t\t<label>";
        // line 48
        echo getLang("VariationWeight");
        echo ":</label>
\t\t\t\t\t\t\t\t<select name=\"updateWeightDiff\" id=\"updateWeightDiff\" onchange=\"if (this.selectedIndex > 1) { \$(this).next('span').show(); \$(this).next('span').find('input').focus(); } else { \$(this).next('span').hide(); }\">
\t\t\t\t\t\t\t\t\t<option value=\"noupdate\">";
        // line 50
        echo getLang("DoNotUpdate");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"reset\">";
        // line 51
        echo getLang("ResetField");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"add\">";
        // line 52
        echo getLang("VariationAdd");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"subtract\">";
        // line 53
        echo getLang("VariationSubtract");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"fixed\">";
        // line 54
        echo getLang("VariationFixed");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span style='display: none'>
\t\t\t\t\t\t\t\t\t<input name=\"updateWeight\" id=\"updateWeight\" type='text' class='NumberField' /> ";
        // line 57
        echo twig_safe_filter((isset($context['WeightMeasurement']) ? $context['WeightMeasurement'] : null));
        echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t\t<label>";
        // line 61
        echo getLang("Image");
        echo ":</label>
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"updateImage\" id=\"updateImage\" />
\t\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t\t<label>";
        // line 65
        echo getLang("DeleteImages");
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"updateDelImages\" id=\"updateDelImages\" value=\"1\" style=\"width: auto;\" />
\t\t\t\t\t\t\t\t";
        // line 67
        echo getLang("YesDeleteImages");
        echo "\t\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t\t<div class=\"VariationStockColumn\" style=\"display: ";
        // line 70
        echo twig_safe_filter((isset($context['HideInv']) ? $context['HideInv'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 71
        echo getLang("CurrentStockLevel");
        echo ":</label>
\t\t\t\t\t\t\t\t\t<input class=\"NumberField\" name=\"updateStockLevel\" id=\"updateStockLevel\" type=\"text\" />
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"VariationStockColumn\" style=\"display: ";
        // line 76
        echo twig_safe_filter((isset($context['HideInv']) ? $context['HideInv'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 77
        echo getLang("LowStockLevel1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t<input class=\"NumberField\" name=\"updateLowStockLevel\" id=\"updateLowStockLevel\" type=\"text\" />
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<label>&nbsp;</label>
\t\t\t\t\t\t\t\t<input class=\"SubmitButton\" type=\"button\" value=\"";
        // line 83
        echo getLang("ApplyToAll");
        echo "\" id=\"bulkUpdate\" />
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td colspan=\"";
        // line 92
        echo twig_safe_filter((isset($context['ColSpan']) ? $context['ColSpan'] : null));
        echo "\" class=\"VariationSpanRow\">
\t\t\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%;\">
\t\t\t\t<td align=\"right\" class=\"PagingNav\" style=\"padding:6px 0px 6px 0px; width: 100%;\">
\t\t\t\t\t";
        // line 95
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</table>
\t\t</td>
\t</tr>
\t<tr class=\"Heading3\">
\t\t<td><span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 101
        echo getLang("EnableDisableAll");
        echo "', '";
        echo getLang("EnableDisableAllHelp");
        echo "');\"><input type='checkbox' checked='checked' onclick=\"\$('#optionGrid').find('input[type=checkbox]').attr('checked', this.checked)\" /></span></td>
\t\t";
        // line 102
        echo twig_safe_filter((isset($context['HeaderRows']) ? $context['HeaderRows'] : null));
        echo "
\t\t<td>";
        // line 103
        echo getLang("SKU");
        echo "</td>
\t\t<td><span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 104
        echo getLang("VariationPrice");
        echo "', '";
        echo getLang("VariationPriceHelp");
        echo "');\">";
        echo getLang("VariationPrice");
        echo "</span></td>
\t\t<td><span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 105
        echo getLang("VariationWeight");
        echo "', '";
        echo getLang("VariationWeightHelp");
        echo "');\">";
        echo getLang("VariationWeight");
        echo "</span></td>
\t\t<td><span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 106
        echo getLang("Image");
        echo "', '";
        echo getLang("VariationImageHelp");
        echo "');\">";
        echo getLang("Image");
        echo "</span></td>
\t\t<td style=\"display:";
        // line 107
        echo twig_safe_filter((isset($context['HideInv']) ? $context['HideInv'] : null));
        echo "\" class=\"VariationStockColumn\"><span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        echo getLang("StockLevel");
        echo "', '";
        echo getLang("StockLevelHelp");
        echo "');\">";
        echo getLang("StockLevel");
        echo "</span></td>
\t\t<td style=\"display:";
        // line 108
        echo twig_safe_filter((isset($context['HideInv']) ? $context['HideInv'] : null));
        echo "\" class=\"VariationStockColumn\"><span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        echo getLang("LowStockLevel");
        echo "', '";
        echo getLang("LowStockLevelHelp");
        echo "');\">";
        echo getLang("LowStockLevel");
        echo "</span></td>
\t</tr>
\t";
        // line 110
        echo twig_safe_filter((isset($context['VariationRows']) ? $context['VariationRows'] : null));
        echo "
\t<tr>
\t\t<td colspan=\"";
        // line 112
        echo twig_safe_filter((isset($context['ColSpan']) ? $context['ColSpan'] : null));
        echo "\" class=\"VariationSpanRow\">
\t\t\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%;\">
\t\t\t\t<td align=\"right\" class=\"PagingNav\" style=\"padding:6px 0px 6px 0px; width: 100%;\">
\t\t\t\t\t";
        // line 115
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</table>
\t\t</td>
\t</tr>
</table>
<script type=\"text/javascript\">
\t\$(\"#applyFilter\").click(function() {
\t\tvar formData = \$('#filterForm :input').serializeArray();
\t\tvar showInv = '0';
\t\tif (\$('#prodInvTrack_2').attr('checked')) {
\t\t\tshowInv = 1;
\t\t}

\t\t\$(this).parents('.GridContainer').load('remote.php?w=getVariationCombinations&productId=";
        // line 129
        echo twig_safe_filter((isset($context['VProductId']) ? $context['VProductId'] : null));
        echo "&productHash=";
        echo twig_safe_filter((isset($context['VProductHash']) ? $context['VProductHash'] : null));
        echo "&v=";
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "&inv=' + showInv, formData, function() {
\t\t\tBindAjaxGridSorting();
\t\t\tBindGridRowHover();
\t\t});
\t});

\t\$(\"#bulkUpdate\").click(function() {
\t\tvar formData = \$('#bulkUpdateForm :input').serialize();
\t\tvar showInv = '0';
\t\tif (\$('#prodInvTrack_2').attr('checked')) {
\t\t\tshowInv = 1;
\t\t}

\t\t// validate the price
\t\tif (\$(\"#updatePriceDiff\").attr('selectedIndex') > 1) {
\t\t\tif (isNaN(priceFormat(\$(\"#updatePrice\").val())) || \$(\"#updatePrice\").val() == '' || \$(\"#updatePrice\").val() < 0) {
\t\t\t\talert(\"";
        // line 145
        echo getLang("UpdateEnterValidPrice");
        echo "\");
\t\t\t\t\$(\"#updatePrice\").focus();
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\t// validate the weight
\t\tif (\$(\"#updateWeightDiff\").attr('selectedIndex') > 1) {
\t\t\tif (isNaN(\$(\"#updateWeight\").val()) || \$(\"#updateWeight\").val() == '' || \$(\"#updateWeight\").val() < 0) {
\t\t\t\talert(\"";
        // line 154
        echo getLang("UpdateEnterValidWeight");
        echo "\");
\t\t\t\t\$(\"#updateWeight\").focus();
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\t// validate stock levels
\t\tif (showInv) {
\t\t\tif (isNaN(\$(\"#updateStockLevel\").val()) || \$(\"#updateStockLevel\").val() < 0) {
\t\t\t\talert(\"";
        // line 163
        echo getLang("UpdateEnterValidStock");
        echo "\");
\t\t\t\t\$(\"#updateStockLevel\").focus();
\t\t\t\treturn;
\t\t\t}

\t\t\tif (isNaN(\$(\"#updateLowStockLevel\").val()) || \$(\"#updateLowStockLevel\").val() < 0) {
\t\t\t\talert(\"";
        // line 169
        echo getLang("UpdateEnterValidLowStock");
        echo "\");
\t\t\t\t\$(\"#updateLowStockLevel\").focus();
\t\t\t\treturn;
\t\t\t}
\t\t}

\t\t\$('#LoadingIndicator').show();

\t\t\$.ajaxFileUpload({
\t\t\turl: 'remote.php?w=bulkUpdateVariations&productId=";
        // line 178
        echo twig_safe_filter((isset($context['VProductId']) ? $context['VProductId'] : null));
        echo "&productHash=";
        echo twig_safe_filter((isset($context['VProductHash']) ? $context['VProductHash'] : null));
        echo "&v=";
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "&inv=' + showInv + '&' + formData,
\t\t\tsecureuri: false,
\t\t\tfileElementId: 'updateImage',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(data) {
\t\t\t\t\$(\"#bulkUpdate\").parents('.GridContainer').html(data.tableData);

\t\t\t\tBindAjaxGridSorting();
\t\t\t\tBindGridRowHover();
\t\t\t}
\t\t});

\t\t\$('#LoadingIndicator').hide();

\t\treturn;
\t});

\t\$(\"#showFilter\").change(function() {
\t\t\$(\"#filterBlock\").slideToggle('normal');
\t\tSetCookie('showVariationFilter', \$(this).attr('checked'), 365);
\t});

\tfunction resetFilter() {
\t\t\$(\"#optionList select\").each(function() {
\t\t\t\$(this).find('option').removeAttr('selected');
\t\t\t\$(this).find('option:first').attr('selected', 'selected');
\t\t});

\t\t\$(\"#applyFilter\").click();
\t}
</script>
";
    }

}

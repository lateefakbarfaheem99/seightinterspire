<?php

/* products.popupselect.tpl */
class __TwigTemplate_8852ad90bf61ab8c6a6cd8674d13f486 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<style type=\"text/css\">
\t@import url(\"Styles/iselector.css\");
</style>
<script type=\"text/javascript\" src=\"../javascript/iselector.js?";
        // line 4
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">
var current_category = \"0\";

var ProductSelect = {
\tselectedItems: new Array(),
\tselectedItemsCSV: '',
\tselectCallback: null,
\tcloseCallback: null,
\tremoveCallback: null,
\tgetSelectedCallback: null,
\tresultSet: new Array(),

\tOnClick: function(element) {
\t\tif(element.selected == true) {
\t\t\tProductSelect.AddToSelect(element.value, element.firstChild.nodeValue);
\t\t}
\t\telse {
\t\t\tProductSelect.RemoveFromSelect(element.value);
\t\t}
\t},

\tRemoveFromSelect: function(id) {
\t\tif(ProductSelect.removeCallback === null) {
\t\t\talert('Callback not specified');
\t\t\treturn false;
\t\t}

\t\tProductSelect.removeCallback('";
        // line 32
        echo twig_safe_filter((isset($context['ParentProductSelect']) ? $context['ParentProductSelect'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['ParentProductList']) ? $context['ParentProductList'] : null));
        echo "', id);
\t},

\tAddToSelect: function(id, name) {
\t\tif(ProductSelect.selectCallback === null) {
\t\t\talert('Callback not specified');
\t\t\treturn false;
\t\t}

\t\tproduct = ProductSelect.resultSet[id];
\t\tProductSelect.selectCallback('";
        // line 42
        echo twig_safe_filter((isset($context['ParentProductSelect']) ? $context['ParentProductSelect'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['ParentProductList']) ? $context['ParentProductList'] : null));
        echo "', product, ";
        echo twig_safe_filter((isset($context['ProductSelectSingle']) ? $context['ProductSelectSingle'] : null));
        echo ");
\t},

\tButtonClose: function() {
\t\tif(!window.opener) {
\t\t\tself.parent.tb_remove();
\t\t}
\t\telse {
\t\t\twindow.opener.focus();
\t\t\tif(ProductSelect.closeCallback) {
\t\t\t\tProductSelect.closeCallback('";
        // line 52
        echo twig_safe_filter((isset($context['ParentProductSelect']) ? $context['ParentProductSelect'] : null));
        echo "');
\t\t\t}
\t\t\telse if('";
        // line 54
        echo twig_safe_filter((isset($context['FocusOnClose']) ? $context['FocusOnClose'] : null));
        echo "' != '') {
\t\t\t\twindow.opener.document.getElementById('";
        // line 55
        echo twig_safe_filter((isset($context['FocusOnClose']) ? $context['FocusOnClose'] : null));
        echo "').focus();
\t\t\t}
\t\t\twindow.close();
\t\t}
\t},

\tGetSelectedItems: function() {
\t\tProductSelect.selectedItems = new Array();
\t\tProductSelect.selectedItemsCSV = '';

\t\tif(ProductSelect.getSelectedCallback === null) {
\t\t\treturn;
\t\t}

\t\tProductSelect.selectedItemsCSV = ProductSelect.getSelectedCallback('";
        // line 69
        echo twig_safe_filter((isset($context['ParentProductSelect']) ? $context['ParentProductSelect'] : null));
        echo "');
\t\tProductSelect.selectedItems = ProductSelect.selectedItemsCSV.split(',');
\t},

\tLoadLinks: function(id) {
\t\tvar searchParams = '';

\t\tif(\$('#searchQuery').val() != '') {
\t\t\tsearchParams += '&searchQuery='+encodeURIComponent(\$('#searchQuery').val());
\t\t}

\t\tif(id) {
\t\t\tsearchParams += '&'+id;
\t\t}

\t\t\$('#LoadingIndicator').show();
\t\t// Fetch the results
\t\t\$.ajax({
\t\t\turl: 'remote.php?w=popupProductSearch&'+searchParams,
\t\t\tdataType: 'xml',
\t\t\tsuccess: ProductSelect.LinksLoaded,
\t\t\terror: ProductSelect.LinksLoaded
\t\t});
\t},

\tonSelectChange: function()
\t{
\t\tvar element = document.getElementById('prodSelect').options[document.getElementById('prodSelect').selectedIndex];
\t\tProductSelect.OnClick(element);
\t},

\tLinksLoaded: function(xml) {
\t\tvar status = \$('status', xml).text();
\t\tProductSelect.resultSet = new Array();
\t\tif(status == 0) {
\t\t\tvar message = \$('message', xml).text();
\t\t\t\$('#results').html('<div class=\"BigError\">'+message+'</div>');
\t\t}
\t\telse {
\t\t\tvar results = \$('results', xml).text();

\t\t\tif(";
        // line 110
        echo twig_safe_filter((isset($context['ProductSelectSingle']) ? $context['ProductSelectSingle'] : null));
        echo " == 1) {
\t\t\t\t\$('#results').html('<select style=\"width: 100%;\" size=\"11\" name=\"products\" id=\"prodSelect\" onchange=\"ProductSelect.onSelectChange()\"></select>');
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#results').html('<select style=\"width: 100%;height: 166px;\" multiple=\"multiple\" name=\"products\" id=\"prodSelect\" class=\"ISSelectReplacement\"></select>');
\t\t\t}

\t\t\t\$('product', xml).each(function() {
\t\t\t\tproductId = \$('productId', this).text();
\t\t\t\tproductName = \$('productName', this).text();
\t\t\t\tProductSelect.resultSet[productId] = {
\t\t\t\t\tid: productId,
\t\t\t\t\tname: productName,
\t\t\t\t\tprice: \$('productPrice', this).text(),
\t\t\t\t\ttype: \$('productType', this).text(),
\t\t\t\t\tcode: \$('productCode', this).text(),
\t\t\t\t\tisConfigurable: \$('productConfigurable', this).text()
\t\t\t\t};
\t\t\t\t\$('<option>')
\t\t\t\t\t.val(productId)
\t\t\t\t\t.html(productName)
\t\t\t\t\t.click(function() {
\t\t\t\t\t\tProductSelect.OnClick(this);
\t\t\t\t\t})
\t\t\t\t\t.attr('id', 'select_product_'+productId)
\t\t\t\t\t.appendTo('#prodSelect')
\t\t\t\t;
\t\t\t});

\t\t\t// Mark any selected items
\t\t\tProductSelect.GetSelectedItems();
\t\t\tfor(var i=0; i<ProductSelect.selectedItems.length;i++) {
\t\t\t\tif(\$('#select_product_'+ProductSelect.selectedItems[i])) {
\t\t\t\t\t\$('#select_product_'+ProductSelect.selectedItems[i]).attr('selected', true);
\t\t\t\t}
\t\t\t}
\t\t\tif(";
        // line 146
        echo twig_safe_filter((isset($context['ProductSelectSingle']) ? $context['ProductSelectSingle'] : null));
        echo " == 0) {
\t\t\t\tISSelectReplacement.replace_select(g('prodSelect'));
\t\t\t}
\t\t}
\t\t// Hide loading indicator
\t\t\$('#LoadingIndicator').hide();
\t}

};

function doSearch() {
\tProductSelect.LoadLinks(\"category=\" + current_category);
}

\$(document).ready(function() {
\tvar searchTimer = 0;

\t\$(\"#searchQuery\").keyup(function() {
\t\tif (searchTimer) {
\t\t\tclearTimeout(searchTimer);
\t\t}

\t\tvar value = \$.trim(\$(this).val());
\t\tif (value.length < 3) {
\t\t\treturn;
\t\t}

\t\tsearchTimer = setTimeout(\"doSearch()\",700);
\t});
});

";
        // line 177
        echo twig_safe_filter((isset($context['Callbacks']) ? $context['Callbacks'] : null));
        echo "
</script>
<form id=\"ProductSelect\" style=\"margin: 0; padding: 0;\">
\t<table class=\"OuterPanel\" style=\"position: relative;\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 182
        echo getLang("SelectProducts");
        echo "</td>
\t  </tr>
\t  <tr>
\t\t<td class=\"Intro\">
\t\t\t<div id=\"LoadingIndicator\" style=\"display: none; font-size: 11px; padding-bottom:10px; position:absolute; right: 10px; top:15px; \">
\t\t\t\t<img src=\"images/ajax-loader.gif\" align=\"left\" />&nbsp; <div style=\"display:inline; background-color:#FCF5AA; padding:5px\">";
        // line 187
        echo getLang("LoadingPleaseWait");
        echo "</div>
\t\t\t</div>
\t\t\t";
        // line 189
        echo getLang("SelectProductsIntro");
        echo "\t\t</td>
\t  </tr>
\t  <tr>
\t\t<td>
\t\t\t<table class=\"Panel\">
\t\t\t  <tr>
\t\t\t\t<td class=\"Heading2\">&nbsp;&nbsp; ";
        // line 196
        echo getLang("ProductSelectByCategory");
        echo "</td>
\t\t\t  </tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t<ul class='CategorySelect' id='CategorySelect'>
\t\t\t\t\t\t<li onclick='this.className=\"active\"; current_category = 0; if(this.parentNode.previousItem) { this.parentNode.previousItem.className = \"\"; } this.parentNode.previousItem = this; ProductSelect.LoadLinks(\"\");'><img src='images/category.gif' alt='' style='vertical-align: middle' /> ";
        // line 201
        echo getLang("ProductSelectAllCategories");
        echo "</li>
\t\t\t\t\t\t";
        // line 202
        echo twig_safe_filter((isset($context['CategorySelect']) ? $context['CategorySelect'] : null));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class='Heading2'>&nbsp;&nbsp;";
        // line 209
        echo getLang("ProductSelectSearch");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><input type='text' name='searchQuery' id='searchQuery' class='Field250' style='width: 100%' /></td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t<input type='hidden' name='subCats' value='0' />
\t\t\t<div id=\"results\" class=\"ResultList\">
\t\t\t</div>
\t\t\t<div id=\"ButtonRow\" style=\"margin-top: 15px;\">
\t\t\t\t<input type=\"button\" class=\"FormButton Field100\" value=\"";
        // line 220
        echo getLang("SelectAndClose");
        echo "\"  onclick=\"ProductSelect.ButtonClose();\" />
\t\t\t</div>
\t\t</td>
\t</tr>
\t</table>
\t<script type='text/javascript'>g('CategorySelect').previousItem = g('CategorySelect').firstChild; setTimeout(function() { ProductSelect.LoadLinks(); }, 10);</script>
</form>";
    }

}

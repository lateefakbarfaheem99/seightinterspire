<?php

/* products.manage.tpl */
class __TwigTemplate_02c6ca4def8611d1ed9b0b0cf1c38602 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../javascript/jquery/themes/cupertino/ui.all.css\" />
";
        // line 2
        $context['forms'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t";
        // line 8
        echo getLang("View");
        echo ": <a href=\"#\" style=\"color:#005FA3\" id=\"ViewsMenuButton\" class=\"PopDownMenu\">";
        echo twig_safe_filter((isset($context['ViewName']) ? $context['ViewName'] : null));
        echo " <img width=\"8\" height=\"5\" src=\"images/arrow_blue.gif\" border=\"0\" /></a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 13
        echo twig_safe_filter((isset($context['ProductIntro']) ? $context['ProductIntro'] : null));
        echo "</p>
\t\t\t<div id=\"ProductsStatus\">";
        // line 14
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</div>
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\" style=\"padding-top:10px\">
\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 18
        echo getLang("AddProduct");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=addProduct'\" />
\t\t\t\t";
        // line 19
        echo getLang("Or");
        echo "\t\t\t\t<select name=\"bulk\">
\t\t\t\t\t<option value=\"\">";
        // line 21
        echo getLang("ChooseAnAction");
        echo "</option>
\t\t\t\t\t<option value=\"delete\" id=\"IndexDeleteButton\" ";
        // line 22
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo ">";
        echo getLang("DeleteSelected");
        echo "</option>
\t\t\t\t\t<option value=\"edit\" id=\"IndexBulkButton\" style=\"display: ";
        // line 23
        echo twig_safe_filter((isset($context['HideBulkExportButton']) ? $context['HideBulkExportButton'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['DisableBulkEdit']) ? $context['DisableBulkEdit'] : null));
        echo ">";
        echo getLang("BulkEditProducts");
        echo "</option>
\t\t\t\t\t<option value=\"export\" id=\"IndexExportButton\" style=\"display: ";
        // line 24
        echo twig_safe_filter((isset($context['HideExport']) ? $context['HideExport'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['DisableExport']) ? $context['DisableExport'] : null));
        echo ">";
        echo getLang("ExportProducts");
        echo "</option>
\t\t\t\t\t";
        // line 25
        if ((isset($context['ShowListOnEbay']) ? $context['ShowListOnEbay'] : null)) {
            echo "\t\t\t\t\t\t<option value=\"ebay\" id=\"IndexEbayButton\">";
            // line 26
            echo getLang("ListOnEbay");
            echo "\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t";
        // line 28
        if (twig_length_filter($this->env, (isset($context['shoppingComparisonModules']) ? $context['shoppingComparisonModules'] : null))) {
            echo "\t\t\t\t\t<option value=\"shoppingComparison\" ";
            // line 29
            echo twig_safe_filter((isset($context['DisableExport']) ? $context['DisableExport'] : null));
            echo ">";
            echo getLang("ShoppingComparisonBulkSelectTitle");
            echo "</option>
\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t</select>
\t\t\t\t<button type=\"button\" id=\"optionGo\">";
        // line 32
        echo getLang("Go");
        echo "</button>
\t\t\t</td>

\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t<table id=\"Table16\" style=\"display:";
        // line 36
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t<tr>

\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t<form action=\"index.php?ToDo=viewProducts";
        // line 40
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm)\" style=\"margin: 0; padding: 0\">
\t\t\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "hiddenInputs", array((array("ToDo" => "viewProducts")) + ((isset($context['queryParams']) ? $context['queryParams'] : null)), array(0 => "searchQuery"), ), "method"), "1");
        echo "
\t\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 42
        echo twig_safe_filter((isset($context['EscapedQuery']) ? $context['EscapedQuery'] : null));
        echo "\" class=\"Button\" size=\"20\" />&nbsp;
\t\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" style=\"padding-left: 10px; vertical-align: top;\" id=\"SearchButton\" src=\"images/searchicon.gif\" border=\"0\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=searchProducts\">";
        // line 50
        echo getLang("AdvancedSearch");
        echo "</a>
\t\t\t\t\t\t<span style=\"display:";
        // line 51
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\">| <a id=\"SearchClearButton\" href=\"index.php?ToDo=viewProducts\">";
        echo getLang("ClearResults");
        echo "</a></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 64
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmProducts\" id=\"frmProducts\" method=\"post\" action=\"index.php?ToDo=deleteProducts\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 67
        echo twig_safe_filter((isset($context['ProductDataGrid']) ? $context['ProductDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
</div>

<div id=\"ViewsMenu\" class=\"DropShadow DropDownMenu\" style=\"display: none; width:200px\">
\t<ul>
\t\t";
        // line 76
        echo twig_safe_filter((isset($context['CustomSearchOptions']) ? $context['CustomSearchOptions'] : null));
        echo "
\t</ul>
\t<hr />
\t<ul>
\t\t<li><a href=\"index.php?ToDo=createProductView\" style=\"background-image:url('images/view_add.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        // line 80
        echo getLang("CreateANewView");
        echo "</a></li>
\t\t<li style=\"display:";
        // line 81
        echo twig_safe_filter((isset($context['HideDeleteViewLink']) ? $context['HideDeleteViewLink'] : null));
        echo "\"><a onclick=\"\$('#ViewsMenu').hide(); confirm_delete_custom_search('";
        echo twig_safe_filter((isset($context['CustomSearchId']) ? $context['CustomSearchId'] : null));
        echo "')\" href=\"javascript:void(0)\" style=\"background-image:url('images/view_del.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        echo getLang("DeleteThisView");
        echo "</a></li>
\t</ul>
</div>

<div id=\"invDiv\" class=\"StockList\" style=\"display:none\"></div>

<div id=\"shoppingComparisonModal\" title=\"";
        // line 87
        echo getLang("ShoppingComparisonProductModalTitle");
        echo "\" style=\"display: none;\">
\t<form action=\"index.php?ToDo=bulkSaveProductShoppingComparisonFeeds\" method=\"post\">
\t\t<p class=\"description\"></p>

\t\t<div style=\" margin-bottom: 10px;\">
\t\t\t<select name=\"comparisons[]\" class=\"Field250 ISSelectReplacement\" multiple=\"multiple\" style=\"height: 108px;width:350px;\">
\t\t\t\t";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['shoppingComparisonModules']) ? $context['shoppingComparisonModules'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['module']) {
            echo "\t\t\t\t<option value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "method"), "1");
            echo "</option>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 95
        echo "\t\t\t</select>
\t\t\t<div style=\"clear: both;\"></div>
\t\t</div>
\t</form>
</div>

<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/jquery.form.js\"></script>
<script type=\"text/javascript\">

\tvar tok = \"";
        // line 105
        echo twig_safe_filter((isset($context['AuthToken']) ? $context['AuthToken'] : null));
        echo "\";
\tvar inventory_product_id = 0;
\tvar action = \"\";
\tvar total_stock_units = 0;
\t\tvar Interspire_Ebay_ListProductsMachine = null;
\tfunction ExportProducts()
\t{
\t\tdocument.getElementById(\"frmProducts\").action = \"";
        // line 112
        echo twig_safe_filter((isset($context['ExportAction']) ? $context['ExportAction'] : null));
        echo "\";
\t\tdocument.getElementById(\"frmProducts\").submit();
\t}
\t\tvar searchId = ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context['CustomSearchId']) ? $context['CustomSearchId'] : null), "1");
        echo ";
\t\tvar searchQuery = \"";
        // line 116
        echo twig_safe_filter((isset($context['EscapedQuery']) ? $context['EscapedQuery'] : null));
        echo "\";

\tfunction CheckSearchForm()
\t{
\t\tvar query = document.getElementById('searchQuery');

\t\tif (query.value == '') {
\t\t\talert(\"";
        // line 123
        echo getLang("ChooseFilterOrEnterSearchTerm");
        echo "\");
\t\t\treturn false;
\t\t}

\t\treturn true;
\t}

\tfunction ListProductsOnEbay()
\t{
\t\tvar productOptions = {};
\t\tproductOptions.productIds = \$(\"#frmProducts\").serialize();
\t\tproductOptions.searchId = searchId;
\t\tproductOptions.searchQuery = searchQuery;

\t\tInterspire_Ebay_ListProductsMachine.start({productOptions: productOptions});
\t}

\tfunction ConfirmDeleteSelected()
\t{
\t\tvar fp = document.getElementById('frmProducts').elements;
\t\tvar c  = 0;

\t\tfor (i = 0; i < fp.length; i++) {
\t\t\tif(fp[i].type == 'checkbox' && fp[i].checked)
\t\t\t\tc++;
\t\t}

\t\tif (c > 0){
\t\t\tif (confirm(\"";
        // line 151
        echo getLang("ConfirmDeleteProducts");
        echo "\")) {
\t\t\t\tdocument.getElementById('frmProducts').submit();
\t\t\t}
\t\t}
\t\telse {
\t\t\talert(\"";
        // line 156
        echo getLang("ChooseProduct");
        echo "\");
\t\t}
\t}

\tfunction ToggleDeleteBoxes(Status)
\t{
\t\tvar fp = document.getElementById('frmProducts').elements;

\t\tfor (i = 0; i < fp.length; i++) {
\t\t\tfp[i].checked = Status;
\t\t}
\t}

\tfunction ShowStock(id, InventoryType, VariationId)
\t{
\t\tvar tr  = document.getElementById('tr' + id);
\t\tvar trQ = document.getElementById('trQ' + id);
\t\tvar tdQ = document.getElementById('tdQ' + id);
\t\tvar img = document.getElementById('expand' + id);

\t\tif (img.src.indexOf('plus.gif') > -1) {
\t\t\timg.src = 'images/minus.gif';

\t\t\tfor (i = 0; i < tr.childNodes.length; i++) {
\t\t\t\tif (tr.childNodes[i].style != null) {
\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"#dbf3d1\";
\t\t\t\t}
\t\t\t}

\t\t\t\$(trQ).find('.QuickView').load(
\t\t\t\t'remote.php?w=inventoryLevels&p='
\t\t\t\t+ id
\t\t\t\t+ '&i='
\t\t\t\t+ InventoryType
\t\t\t\t+ '&v='
\t\t\t\t+ VariationId
\t\t\t\t+ '&t='
\t\t\t\t+ tok
\t\t\t\t, {
\t\t\t\t\t'cache' : false
\t\t\t\t}
\t\t\t\t, function() {
\t\t\t\t\ttrQ.style.display = '';
\t\t\t\t}
\t\t\t);
\t\t}
\t\telse
\t\t{
\t\t\timg.src = \"images/plus.gif\";

\t\t\tfor (i = 0; i < tr.childNodes.length; i++) {
\t\t\t\tif (tr.childNodes[i].style != null) {
\t\t\t\t\ttr.childNodes[i].style.backgroundColor = '';
\t\t\t\t}
\t\t\t}

\t\t\ttrQ.style.display = 'none';
\t\t}
\t}

\tfunction UpdateStockLevel(ProductId, InventoryType)
\t{
\t\tvar loading = document.getElementById('loading' + ProductId);
\t\tinventory_product_id = ProductId;

\t\t// Update the stock levels via AJAX
\t\tif (InventoryType == 0) {
\t\t\t// Per-product stock levels
\t\t\tvar stock_level = document.getElementById('stock_level_' + ProductId);
\t\t\tvar stock_level_notify = document.getElementById('stock_level_notify_' + ProductId);

\t\t\tif (isNaN(stock_level.value) || stock_level.value == '') {
\t\t\t\talert(\"";
        // line 228
        echo getLang("EnterValidStockLevel");
        echo "\");
\t\t\t\tstock_level.focus();
\t\t\t\tstock_level.select();
\t\t\t}
\t\t\telse if(isNaN(stock_level_notify.value) || stock_level_notify.value == '') {
\t\t\t\talert(\"";
        // line 233
        echo getLang("EnterValidStockLevel");
        echo "\");
\t\t\t\tstock_level_notify.focus();
\t\t\t\tstock_level_notify.select();
\t\t\t}
\t\t\telse {
\t\t\t\t// Update the loading image
\t\t\t\tloading.src = 'images/ajax-loader.gif';

\t\t\t\t// Valid stock level numbers, save them using AJAX
\t\t\t\ttotal_stock_units = stock_level.value;
\t\t\t\taction = 'update_inventory_levels';

\t\t\t\tDoCallback('w=updatePerProductInventoryLevels&p=' + ProductId + '&c=' + stock_level.value + '&l=' + stock_level_notify.value + '&t=' + tok);
\t\t\t}
\t\t}
\t\telse if(InventoryType == 1) {
\t\t\t// Per option stock levels
\t\t\tvar fp = document.getElementById('frmProducts').elements;
\t\t\tvar c = 0;
\t\t\tvar is_error = false;
\t\t\tvar update_data = '';

\t\t\ttotal_stock_units = 0;

\t\t\tfor (i = 0; i < fp.length; i++) {
\t\t\t\tif (fp[i].id.indexOf('stock_level_' + ProductId) > -1 || fp[i].id.indexOf('stock_level_notify_' + ProductId) > -1) {
\t\t\t\t\tif (isNaN(fp[i].value) || fp[i].value == '') {
\t\t\t\t\t\talert(\"";
        // line 260
        echo getLang("EnterValidStockLevel");
        echo "\");
\t\t\t\t\t\tfp[i].focus();
\t\t\t\t\t\tfp[i].select();
\t\t\t\t\t\tis_error = true;

\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\t// It's a valid inventory related value
\t\t\t\t\t\tupdate_data = update_data + fp[i].id + '=' + fp[i].value + '&';

\t\t\t\t\t\t// Add the number of current units in stock so we can update the \"In Stock\" field
\t\t\t\t\t\tif (fp[i].id.indexOf('stock_level_notify') == -1) {
\t\t\t\t\t\t\ttotal_stock_units = total_stock_units + parseInt(fp[i].value);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t// All inventory-related fields are valid, run the AJAX query
\t\t\tif (!is_error) {
\t\t\t\t// Update the loading image
\t\t\t\tloading.src = 'images/ajax-loader.gif';

\t\t\t\t// Valid stock level numbers, save them using AJAX
\t\t\t\taction = 'update_inventory_levels';

\t\t\t\tDoCallback('w=updatePerOptionInventoryLevels&i=' + escape(update_data) + '&t=' + tok);
\t\t\t}
\t\t}
\t}

\tfunction show_inventory_levels(result)
\t{
\t\tvar inventory_info = document.getElementById('StockLevelInfo' + inventory_product_id);
\t\tinventory_info.innerHTML = result;
\t}

\tfunction update_inventory_levels(result)
\t{
\t\t// Update the loading image
\t\tvar loading = document.getElementById('loading' + inventory_product_id);
\t\tvar instock_cell = document.getElementById('InStock' + inventory_product_id);
\t\tloading.src = 'images/ajax-blank.gif';

\t\tif (result == '1') {
\t\t\t//instock_cell.innerHTML = total_stock_units;
\t\t\tdisplay_success('ProductsStatus', \"";
        // line 307
        echo getLang("InventoryLevelsUpdated");
        echo "\".replace('%d', inventory_product_id));
\t\t}
\t\telse {
\t\t\tdisplay_error('ProductsStatus', \"";
        // line 310
        echo getLang("InventoryLevelsUpdateFailed");
        echo "\");
\t\t}
\t}

\tfunction ProcessData(html)
\t{
\t\tret = html;

\t\tif(action == 'get_inventory_levels') {
\t\t\tshow_inventory_levels(ret);
\t\t}
\t\telse if(action == 'update_inventory_levels') {
\t\t\tupdate_inventory_levels(ret);
\t\t}
\t}

\tfunction confirm_delete_custom_search(search_id)
\t{
\t\tif (confirm(\"";
        // line 328
        echo getLang("ConfirmDeleteCustomSearch");
        echo "\")) {
\t\t\tdocument.location.href = 'index.php?ToDo=deleteCustomProductSearch&searchId=' + search_id;
\t\t}
\t}

\tfunction quickToggle(element, what)
\t{
\t\t\$.ajax({
\t\t\turl: element.href + '&ajax=1',
\t\t\tsuccess: function(response) {
\t\t\t\tif(response) {
\t\t\t\t\tif(element.childNodes.length == 1 && element.childNodes[0].tagName == \"IMG\") {
\t\t\t\t\t\tvar image = element.childNodes[0];

\t\t\t\t\t\t// Element was ticked, now should not be
\t\t\t\t\t\tif(image.src.indexOf('tick') != -1) {
\t\t\t\t\t\t\telement.href = element.href.replace(what+'=0', what+'=1');
\t\t\t\t\t\t\timage.src = image.src.replace('tick', 'cross');
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\telement.href = element.href.replace(what+'=1', what+'=0');
\t\t\t\t\t\t\timage.src = image.src.replace('cross', 'tick');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});
\t}

\tfunction BulkEditSelected()
\t{
\t\tvar count = \$('#frmProducts input:checked').length;
\t\tif (count > 0) {
\t\t\tdocument.getElementById('frmProducts').action = 'index.php?ToDo=bulkEditProducts';
\t\t\tdocument.getElementById('frmProducts').submit();
\t\t} else {
\t\t\talert(\"";
        // line 364
        echo getLang("ChooseProductToBulkEdit");
        echo "\");
\t\t}
\t}

\t/**
\t * Returns the checkboxes that are selected for the given products on the page.
\t *
\t * @return jQuery
\t */
\tfunction getSelectedProducts()
\t{
\t\treturn getAllProducts().filter(':checked');
\t}

\t/**
\t * Returns all products checkboxes.
\t *
\t * @return jQuery
\t */
\tfunction getAllProducts()
\t{
\t\treturn \$('#frmProducts .GridRow > td:first-child > :checkbox');
\t}

\t/**
\t * Returns the selected products or all products if no products are selected.
\t *
\t * @return jQuery
\t */
\tfunction getSelectedOrAllProducts()
\t{
\t\tvar products = getSelectedProducts();

\t\tif (!products.length) {
\t\t\tproducts = getAllProducts();
\t\t}

\t\treturn products;
\t}

\t/**
\t * Shows the modal window for bulk editing shopping comparison feeds.
\t *
\t * @return void
\t */
\tfunction toggleShoppingComparisonFeeds()
\t{
\t\tvar comparison = \$('#shoppingComparisonModal');
\t\tvar buttons    = '<button class=\"FormButton\" type=\"button\" onclick=\"jQuery.iModal.close();\" style=\"float: left;\">";
        // line 412
        echo getLang("ShoppingComparisonProductModalCancel");
        echo "</button>';
\t\t\tbuttons   += '<button class=\"FormButton\" type=\"submit\" onclick=\"return toggleShoppingComparisonSubmit();\" style=\"font-weight:bold;\">";
        // line 413
        echo getLang("ShoppingComparisonProductModalSave");
        echo "</button>';

\t\tcomparison.find('.description').html(\"";
        // line 415
        echo getLang("ShoppingComparisonProductModalDescription");
        echo "\".replace(':numberOfProducts', getSelectedOrAllProducts().length));

\t\t\$.iModal({
\t\t\ttitle   : comparison.attr('title'),
\t\t\tdata    : comparison.html(),
\t\t\tbuttons : buttons,
\t\t\twidth\t: 385
\t\t});
\t}

\t/**
\t * Gets called when the modal form is submitted.
\t *
\t * @return false
\t */
\tfunction toggleShoppingComparisonSubmit()
\t{
\t\tvar products = getSelectedProducts();
\t\tvar uncheck  = false;

\t\t// if there are no products selected
\t\tif (!products.length) {
\t\t\tuncheck = true;

\t\t\t// get all checkboxes
\t\t\tproducts = getAllProducts();

\t\t\t// check all because jQuery only serializes checkboxes if they're checked
\t\t\tproducts.attr('checked', 'checked');
\t\t}

\t\t// add in regular fields
\t\tvar fields = \$('.ModalContent form select').add(products);
\t\tvar serial = fields.serialize();

\t\tif (uncheck) {
\t\t\tproducts.removeAttr('checked');
\t\t}

\t\t\$.post('index.php?ToDo=bulkSaveProductShoppingComparisonFeeds', serial, function(result) {
\t\t\tif (result == 1) {
\t\t\t\t\$.iModal.close();

\t\t\t\tdisplay_success('ProductsStatus', \"";
        // line 458
        echo getLang("ShoppingComparisonProductMessageSuccess");
        echo "\".replace(':numberOfProducts', products.length));
\t\t\t}
\t\t\telse {
\t\t\t\tdisplay_error('ProductsStatus', \"";
        // line 461
        echo getLang("ShoppingComparisonProductMessageError");
        echo "\".replace(':numberOfProducts', products.length));
\t\t\t}
\t\t});

\t\treturn false;
\t}

\t\$(document).ready(function() {
\t\t// Hide the product thumbnail row if required
\t\tif (\"";
        // line 470
        echo twig_safe_filter((isset($context['HideThumbnailField']) ? $context['HideThumbnailField'] : null));
        echo "\" == '1') {
\t\t\t\$('td.ImageField').css('display', 'none');
\t\t}

\t\t// when the bulk options are changed, perform an action
\t\t\$('#optionGo').click(function() {
\t\t\tvar sel = \$('select[name=\"bulk\"]');
\t\t\tvar raw = sel.get(0);
\t\t\tvar val = sel.val();

\t\t\tswitch (val) {
\t\t\t\tcase 'delete':
\t\t\t\t\tConfirmDeleteSelected.apply(raw);
\t\t\t\t\tbreak;
\t\t\t\tcase 'edit':
\t\t\t\t\tBulkEditSelected.apply(raw);
\t\t\t\t\tbreak;
\t\t\t\tcase 'export':
\t\t\t\t\tExportProducts.apply(raw);
\t\t\t\t\tbreak;
\t\t\t\tcase 'ebay':
\t\t\t\t\tListProductsOnEbay.apply(raw);
\t\t\t\t\tbreak;
\t\t\t\tcase 'shoppingComparison':
\t\t\t\t\ttoggleShoppingComparisonFeeds.apply(raw);
\t\t\t\t\tbreak;
\t\t\t}

\t\t\t// reset the select box back to default option
\t\t\tsel.val('');
\t\t});
\t});

</script>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/disabled/jquery.disabled.js\"></script>
<script type=\"text/javascript\" src=\"../javascript/fsm.js\"></script>
<script type=\"text/javascript\" src=\"script/ebay.listproducts.js\"></script>
";
    }

}

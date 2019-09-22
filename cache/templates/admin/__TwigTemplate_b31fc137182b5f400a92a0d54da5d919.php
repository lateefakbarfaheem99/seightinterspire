<?php

/* product.bulkedit.form.tpl */
class __TwigTemplate_b31fc137182b5f400a92a0d54da5d919 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=saveBulkEditProducts\" onsubmit=\"return ValidateForm(CheckBulkEditProductForm)\" id=\"frmProduct\" method=\"post\">
<input type=\"hidden\" name=\"product_ids\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['ProductIds']) ? $context['ProductIds'] : null));
        echo "\" />
<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("BulkEditProducts1");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 10
        echo getLang("BulkEditIntro");
        echo "</div>
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p>
\t\t\t\t<input type=\"submit\" value=\"";
        // line 13
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"submit\" value=\"";
        // line 14
        echo getLang("SaveAndContinueEditing");
        echo "\" onclick=\"SaveAndKeepEditing()\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 15
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr class=\"Heading3\">
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t<td style=\"width:20%\"><span class=\"Required\">*</span> ";
        // line 24
        echo getLang("ProductName");
        echo "</td>
\t\t\t\t\t<td style=\"width:80px\"><span class=\"Required\">*</span> ";
        // line 25
        echo getLang("Price");
        echo "</td>
\t\t\t\t\t<td style=\"width:210px\"><span class=\"Required\">*</span> ";
        // line 26
        echo getLang("Categories");
        echo "</td>
\t\t\t\t\t<td style=\"width:80px\">";
        // line 27
        echo getLang("Brand");
        echo "</td>
\t\t\t\t\t<td style=\"width:80px\">";
        // line 28
        echo getLang("Visible");
        echo "</td>
\t\t\t\t\t<td style=\"width:80px\">";
        // line 29
        echo getLang("Featured");
        echo "</td>
\t\t\t\t\t<td style=\"width:80px\">";
        // line 30
        echo getLang("FreeShipping");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"GridRow\">
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t<td><a href=\"#\" onclick=\"ChangeAllPrices(); return false;\">";
        // line 35
        echo getLang("ChangeAll");
        echo "</a></td>
\t\t\t\t\t<td><a href=\"#\" onclick=\"ExpandAllCategories(); return false;\">";
        // line 36
        echo getLang("ExpandAllCategories");
        echo "</a> / <a href=\"#\" onclick=\"CollapseAllCategories(); return false;\">";
        echo getLang("CollapseAllCategories");
        echo "</a></td>
\t\t\t\t\t<td><a href=\"#\" onclick=\"ChangeAllBrands(); return false;\">";
        // line 37
        echo getLang("ChangeAll");
        echo "</a></td>
\t\t\t\t\t<td><input type=\"checkbox\" id=\"change_all_visible\" /></td>
\t\t\t\t\t<td><input type=\"checkbox\" id=\"change_all_featured\" /></td>
\t\t\t\t\t<td><input type=\"checkbox\" id=\"change_all_freeshipping\" /></td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 42
        echo twig_safe_filter((isset($context['ProductList']) ? $context['ProductList'] : null));
        echo "
\t\t\t</table>
\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 47
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 48
        echo getLang("SaveAndContinueEditing");
        echo "\" onclick=\"SaveAndKeepEditing();\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 49
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>

<script type=\"text/javascript\">

\tfunction ExpandAllCategories() {
\t\t\$('#IndexGrid .ExpandCategoryLink').each(function() {
\t\t\tif(!\$(this).hasClass('Expanded')) {
\t\t\t\tExpandCategories(\$(this).attr('id').replace('ExpandCategoryLink-', ''));
\t\t\t}
\t\t});
\t}

\tfunction CollapseAllCategories() {
\t\t\$('#IndexGrid .ExpandCategoryLink').each(function() {
\t\t\tif(\$(this).hasClass('Expanded')) {
\t\t\t\tExpandCategories(\$(this).attr('id').replace('ExpandCategoryLink-', ''));
\t\t\t}
\t\t});
\t}

\tfunction ExpandCategories(ProductId, Img) {
\t\tif(!\$('#ExpandCategoryLink-' + ProductId).hasClass('Expanded')) {
\t\t\t\$('#category_'+ProductId).css('height', '250px');
\t\t\t\$('#catdrop_'+ProductId).attr('src', 'images/collapsearrow.gif');
\t\t\t\$('#ExpandCategoryLink-' + ProductId).addClass('Expanded');
\t\t\treturn;
\t\t}

\t\t\$('#category_'+ProductId).css('height', '23px');
\t\t\$('#catdrop_'+ProductId).attr('src', 'images/droparrow.gif');
\t\t\$('#ExpandCategoryLink-' + ProductId).removeClass('Expanded');
\t}

\tfunction ForceExpandCategories(ProductId, Img) {
\t\t\$('#category_'+ProductId).css('height', '250px');
\t\t\$('#catdrop_'+ProductId).attr('src', 'images/collapsearrow.gif');
\t\t\$('#ExpandCategoryLink-' + ProductId).addClass('Expanded');
\t}

\tfunction ConfirmCancel() {
\t\tif(confirm(\"";
        // line 97
        echo getLang("ConfirmCancelBulkEditProduct");
        echo "\"))
\t\t\tdocument.location.href = \"index.php?ToDo=viewProducts\";
\t}

\tfunction SaveAndKeepEditing() {
\t\tvar f = g('frmProduct');
\t\tvar d = document.createElement('input');
\t\td.type = 'hidden';
\t\td.name = 'keepediting';
\t\td.value = '1';
\t\tf.appendChild(d);
\t}

\tfunction CheckBulkEditProductForm() {
\t\t// Make sure all required fields are completed
\t\tvar f = g(\"frmProduct\").elements;
\t\tfor(i = 0; i < f.length; i++) {
\t\t\tif(f[i].id.indexOf(\"prodname_\") == 0 && f[i].value == \"\") {
\t\t\t\talert(\"";
        // line 115
        echo getLang("BulkEditEnterProductName");
        echo "\");
\t\t\t\tf[i].focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(f[i].id.indexOf(\"prodprice_\") == 0 && (isNaN(priceFormat(f[i].value)) || f[i].value == \"\")) {
\t\t\t\talert(\"";
        // line 121
        echo getLang("BulkEditEnterProductPrice");
        echo "\");
\t\t\t\tf[i].focus();
\t\t\t\tf[i].select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(f[i].id.indexOf(\"category_\") == 0 && f[i].selectedIndex == -1) {
\t\t\t\talert(\"";
        // line 128
        echo getLang("BulkEditNoCats");
        echo "\");
\t\t\t\tcid = f[i].id;
\t\t\t\tcid = cid.replace(\"category_\", \"\");
\t\t\t\tcid = cid.replace(\"_old\", \"\");
\t\t\t\tForceExpandCategories(cid, g(\"catdrop_\"+cid));
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\treturn true;
\t}

\tfunction ChangeAllPrices() {
\t\tvar f = g(\"frmProduct\").elements;
\t\tvar price = prompt(\"";
        // line 142
        echo getLang("BulkEditNewPrice");
        echo ":\");

\t\tif(price != null) {
\t\t\tif(isNaN(priceFormat(price)) || price == \"\") {
\t\t\t\talert(\"";
        // line 146
        echo getLang("BulkEditEnterProductPrice");
        echo "\");
\t\t\t\tChangeAllPrices();
\t\t\t}
\t\t\telse {
\t\t\t\tfor(i = 0; i < f.length; i++) {
\t\t\t\t\tif(f[i].id.indexOf(\"prodprice_\") == 0) {
\t\t\t\t\t\tf[i].value = price;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\tfunction ChangeAllBrands() {
\t\tvar f = g(\"frmProduct\").elements;
\t\tvar brand = prompt(\"";
        // line 161
        echo getLang("BulkEditNewBrand");
        echo ":\");

\t\tif(brand != null) {
\t\t\tfor(i = 0; i < f.length; i++) {
\t\t\t\tif(f[i].id.indexOf(\"prodbrand_\") == 0) {
\t\t\t\t\tf[i].value = brand;
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t\$('#change_all_visible').click(function() {
\t\tvar f = g(\"frmProduct\").elements;
\t\tvar visible = \$(this).attr('checked');

\t\tfor(i = 0; i < f.length; i++) {
\t\t\tif(f[i].id.indexOf(\"prodvisible_\") == 0) {
\t\t\t\tf[i].checked = visible;
\t\t\t}
\t\t}
\t});

\t\$('#change_all_featured').click(function() {
\t\tvar f = g(\"frmProduct\").elements;
\t\tvar featured = \$(this).attr('checked');

\t\tfor(i = 0; i < f.length; i++) {
\t\t\tif(f[i].id.indexOf(\"prodfeatured_\") == 0) {
\t\t\t\tf[i].checked = featured;
\t\t\t}
\t\t}
\t});

\t\$('#change_all_freeshipping').click(function() {
\t\tvar f = g(\"frmProduct\").elements;
\t\tvar freeshipping = \$(this).attr('checked');

\t\tfor(i = 0; i < f.length; i++) {
\t\t\tif(f[i].id.indexOf(\"prodfreeshipping_\") == 0) {
\t\t\t\tf[i].checked = freeshipping;
\t\t\t}
\t\t}
\t});

</script>
";
    }

}

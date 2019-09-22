<?php

/* products.search.tpl */
class __TwigTemplate_5ce963acfb94dc9f96a1053ab5668404 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form enctype=\"multipart/form-data\" action=\"index.php\" id=\"frmSearch\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm)\">
\t<input type=\"hidden\" name=\"ToDo\" value=\"searchProductsRedirect\" />
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 7
        echo getLang("SearchProducts");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("SearchProductsIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 13
        echo getLang("Search");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 20
        echo getLang("AdvancedSearch");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 24
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"searchQuery\" name=\"searchQuery\" class=\"Field250\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 28
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsProductHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 35
        echo getLang("BrandName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"brand\" id=\"brand\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
        // line 39
        echo getLang("AllBrandNames");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 40
        echo twig_safe_filter((isset($context['BrandNameOptions']) ? $context['BrandNameOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 47
        echo getLang("Categories");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select size=\"5\" id=\"category\" name=\"category[]\" class=\"Field250 ISSelectReplacement\" style=\"height:115\" multiple>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
        // line 51
        echo getLang("AllCategories");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 52
        echo twig_safe_filter((isset($context['CategoryOptions']) ? $context['CategoryOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<div style=\"clear: left;\"><label><input type=\"checkbox\" name=\"subCats\" value=\"1\" checked=\"checked\" /> ";
        // line 55
        echo getLang("AutoSearchSubCategories");
        echo "</label></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 67
        echo getLang("SearchByRange");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 71
        echo getLang("PriceRange");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 74
        echo getLang("SearchFrom");
        echo " ";
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo "<input type=\"text\" id=\"priceFrom\" name=\"priceFrom\" class=\"Field50\"> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo " ";
        echo getLang("SearchTo");
        echo "\t\t\t\t\t\t";
        // line 75
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo "<input type=\"text\" id=\"priceTo\" name=\"priceTo\" class=\"Field50\"> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 80
        echo getLang("ProductSoldCount");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 83
        echo getLang("SearchFrom");
        echo " &nbsp;&nbsp;<input type=\"text\" id=\"soldFrom\" name=\"soldFrom\" class=\"Field50\"> ";
        echo getLang("SearchTo");
        echo "\t\t\t\t\t\t&nbsp;&nbsp;<input type=\"text\" id=\"soldTo\" name=\"soldTo\" class=\"Field50\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"display: ";
        // line 87
        echo twig_safe_filter((isset($context['HideInventoryOptions']) ? $context['HideInventoryOptions'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 89
        echo getLang("InventoryLevel");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 92
        echo getLang("SearchFrom");
        echo " &nbsp;&nbsp;<input type=\"text\" id=\"inventoryFrom\" name=\"inventoryFrom\" class=\"Field50\"> ";
        echo getLang("SearchTo");
        echo "\t\t\t\t\t\t&nbsp;&nbsp;<input type=\"text\" id=\"inventoryTo\" name=\"inventoryTo\" class=\"Field50\">
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"inventoryLow\" value=\"1\" /> ";
        // line 95
        echo getLang("SearchLowInventory");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 106
        echo getLang("SearchBySetting");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 110
        echo getLang("ProductVisibility");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"visibility\" id=\"visibility\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 114
        echo getLang("NoPreference");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"1\">";
        // line 115
        echo getLang("VisibleOnly");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 116
        echo getLang("InvisibleOnly");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 122
        echo getLang("FeaturedProduct");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"featured\" id=\"featured\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 126
        echo getLang("NoPreference");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"1\">";
        // line 127
        echo getLang("FeaturedOnly");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 128
        echo getLang("NotFeaturedOnly");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 134
        echo getLang("FreeShipping");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"freeShipping\" id=\"freeShipping\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 138
        echo getLang("NoPreference");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"1\">";
        // line 139
        echo getLang("FreeShippingOnly");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
        // line 140
        echo getLang("NonFreeShippingOnly");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 152
        echo getLang("SortOrder");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 157
        echo getLang("SortOrder");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"sortField\" class=\"Field120\">
\t\t\t\t\t\t\t<option value=\"productid\">";
        // line 161
        echo getLang("ProductID");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"prodcode\">";
        // line 162
        echo getLang("ProductSKU");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"prodcurrentinv\">";
        // line 163
        echo getLang("ProductInStock");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"prodname\">";
        // line 164
        echo getLang("ProductName");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"prodcalculatedprice\">";
        // line 165
        echo getLang("ProductPrice");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"prodvisble\">";
        // line 166
        echo getLang("ProductVisible");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\tin&nbsp;
\t\t\t\t\t\t<select name=\"sortOrder\" class=\"Field110\">
\t\t\t\t\t\t<option value=\"asc\">";
        // line 170
        echo getLang("AscendingOrder");
        echo "</option>
\t\t\t\t\t\t<option value=\"desc\">";
        // line 171
        echo getLang("DescendingOrder");
        echo "</option>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 176
        echo getLang("Search");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t</div>
\t</form>

\t<script type=\"text/javascript\">
\t\tfunction ConfirmCancel() {
\t\t\tif(confirm(\"";
        // line 189
        echo getLang("ConfirmCancelSearch");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewProducts\";
\t\t}

\t\tfunction CheckSearchForm() {
\t\t\tvar priceFrom = document.getElementById(\"priceFrom\");
\t\t\tvar priceTo = document.getElementById(\"priceTo\");
\t\t\tvar inventoryFrom = document.getElementById(\"inventoryFrom\");
\t\t\tvar inventoryTo = document.getElementById(\"inventoryTo\");
\t\t\tvar soldFrom = document.getElementById(\"soldFrom\");
\t\t\tvar soldTo = document.getElementById(\"soldTo\");

\t\t\tif(priceFrom.value != \"\" && isNaN(priceFormat(priceFrom.value))) {
\t\t\t\talert(\"";
        // line 202
        echo getLang("SearchEnterValidPrice");
        echo "\");
\t\t\t\tpriceFrom.focus();
\t\t\t\tpriceFrom.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(priceTo.value != \"\" && isNaN(priceFormat(priceTo.value))) {
\t\t\t\talert(\"";
        // line 209
        echo getLang("SearchEnterValidPrice");
        echo "\");
\t\t\t\tpriceTo.focus();
\t\t\t\tpriceTo.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(inventoryFrom.value != \"\" && isNaN(inventoryFrom.value)) {
\t\t\t\talert(\"";
        // line 216
        echo getLang("SearchEnterValidInventoryLvl");
        echo "\");
\t\t\t\tinventoryFrom.focus();
\t\t\t\tinventoryFrom.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(inventoryTo.value != \"\" && isNaN(inventoryTo.value)) {
\t\t\t\talert(\"";
        // line 223
        echo getLang("SearchEnterValidInventoryLvl");
        echo "\");
\t\t\t\tinventoryTo.focus();
\t\t\t\tinventoryTo.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(soldFrom.value != \"\" && isNaN(soldFrom.value)) {
\t\t\t\talert(\"";
        // line 230
        echo getLang("SearchEnterValidQtySold");
        echo "\");
\t\t\t\tsoldFrom.focus();
\t\t\t\tsoldFrom.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(soldTo.value != \"\" && isNaN(soldTo.value)) {
\t\t\t\talert(\"";
        // line 237
        echo getLang("SearchEnterValidQtySold");
        echo "\");
\t\t\t\tsoldTo.focus();
\t\t\t\tsoldTo.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t</script>
";
    }

}

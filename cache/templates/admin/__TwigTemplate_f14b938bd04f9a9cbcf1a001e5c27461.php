<?php

/* coupon.form.tpl */
class __TwigTemplate_f14b938bd04f9a9cbcf1a001e5c27461 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t";
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "\t";
        // line 2
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 3
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return CheckCouponForm();\" id=\"frmNews\" method=\"post\">
\t<input type=\"hidden\" id=\"couponId\" name=\"couponId\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['CouponId']) ? $context['CouponId'] : null));
        echo "\">
\t<input type=\"hidden\" id=\"couponexpires\" name=\"couponexpires\" value=\"\">
\t<input type=\"hidden\" id=\"couponCode\" name=\"couponcode\" value=\"";
        // line 6
        echo twig_safe_filter((isset($context['CouponCode']) ? $context['CouponCode'] : null));
        echo "\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\" />

\t<div id=\"content\">
\t\t<h1>";
        // line 10
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</h1>

\t\t<p class=\"intro\">
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "
\t\t</p>

\t\t<div id=\"MessageTmpBlock\">
\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</div>

\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t<input type=\"submit\" value=\"";
        // line 21
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" name=\"SaveButton1\" />
\t\t<input type=\"reset\" value=\"";
        // line 22
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" name=\"CancelButton1\" onclick=\"confirmCancel()\" />
\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "

\t<ul id=\"tabnav\">
\t\t<li><a href=\"#\" id=\"tab0\" onclick=\"ShowTab(0)\" class=\"active\">";
        // line 26
        echo getLang("General");
        echo "</a></li>
\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 27
        echo getLang("Advanced");
        echo "</a></li>
\t</ul>

\t<div id=\"div0\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 36
        echo getLang("NewCouponDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 40
        echo getLang("CouponCode");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"couponcode\" name=\"couponcode\" class=\"Field250\" value=\"";
        // line 43
        echo twig_safe_filter((isset($context['CouponCode']) ? $context['CouponCode'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 44
        echo getLang("CouponCode");
        echo "', '";
        echo getLang("CouponCodeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 50
        echo getLang("CouponName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"couponname\" name=\"couponname\" class=\"Field250\" value=\"";
        // line 53
        echo twig_safe_filter((isset($context['CouponName']) ? $context['CouponName'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d6');\" onmouseover=\"ShowHelp('d6', '";
        // line 54
        echo getLang("CouponName");
        echo "', '";
        echo getLang("CouponNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d6\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 60
        echo getLang("DiscountType");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("coupontype", array(2 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DollarOffTotalOrder", array(), "any"), 0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DollarOffEachItem", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PercentageOffEachItem", array(), "any"), 3 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DollarOffShippingTotal", array(), "any"), 4 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FreeShipping", array(), "any")), $this->getAttribute((isset($context['coupon']) ? $context['coupon'] : null), "coupontype", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d7');\" onmouseover=\"ShowHelp('d7', '";
        // line 64
        echo getLang("DiscountType");
        echo "', '";
        echo getLang("DiscountTypeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d7\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"discountAmount\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 70
        echo getLang("DiscountAmount");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"offCurrency\"  style=\"display:none\">";
        // line 73
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo "</span>
\t\t\t\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "input", array("text", "couponamount", (isset($context['DiscountAmount']) ? $context['DiscountAmount'] : null), array("id" => "couponamount", "class" => "Field50"), ), "method"), "1");
        echo "
\t\t\t\t\t\t<span class=\"offCurrency\"  style=\"display:none\">";
        // line 75
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "</span>
\t\t\t\t\t\t<span class=\"offPercentage\" style=\"display:none\">%</span>
\t\t\t\t\t\t<span id=\"discountAmountDesc\" style=\"display:none\"></span>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 78
        echo getLang("DiscountAmount");
        echo "', '";
        echo getLang("DiscountAmountHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 84
        echo getLang("MinimumPurchase");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 87
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input type=\"text\" id=\"couponminpurchase\" name=\"couponminpurchase\" class=\"Field50\" value=\"";
        echo twig_safe_filter((isset($context['MinPurchase']) ? $context['MinPurchase'] : null));
        echo "\"> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 88
        echo getLang("MinimumPurchase");
        echo "', '";
        echo getLang("MinimumPurchaseHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 94
        echo getLang("ExpiryDate");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input class=\"plain\" id=\"dc1\" value=\"";
        // line 97
        echo twig_safe_filter((isset($context['ExpiryDate']) ? $context['ExpiryDate'] : null));
        echo "\" size=\"12\" onfocus=\"this.blur()\" readonly><a href=\"javascript:void(0)\" onclick=\"if(self.gfPop)gfPop.fStartPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/calbtn.gif\" width=\"34\" height=\"22\" border=\"0\" alt=\"\"></a>
\t\t\t\t\t\t&nbsp;<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 98
        echo getLang("ExpiryDate");
        echo "', '";
        echo getLang("ExpiryDateHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 104
        echo getLang("CouponMaxUsesTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"CouponMaxUsesEnabled\" name=\"CouponMaxUsesEnabled\" value=\"1\" ";
        // line 108
        if ((isset($context['CouponMaxUsesEnabled']) ? $context['CouponMaxUsesEnabled'] : null)) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"CouponMaxUsesEnabled\">";
        // line 109
        echo getLang("CouponMaxUses");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"NodeJoin\" id=\"CouponMaxUsesNode\" ";
        // line 110
        if ((isset($context['CouponMaxUsesEnabled']) ? $context['CouponMaxUsesEnabled'] : null) == false) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"couponmaxuses\" name=\"couponmaxuses\" class=\"Field50\" value=\"";
        // line 112
        echo twig_safe_filter((isset($context['MaxUses']) ? $context['MaxUses'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 113
        echo getLang("CouponMaxUses");
        echo "', '";
        echo getLang("CouponMaxUsesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"CouponMaxUsesPerCustomerEnabled\" name=\"CouponMaxUsesPerCustomerEnabled\" value=\"1\" ";
        // line 118
        if ((isset($context['CouponMaxUsesPerCustomerEnabled']) ? $context['CouponMaxUsesPerCustomerEnabled'] : null)) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"CouponMaxUsesPerCustomerEnabled\">";
        // line 119
        echo getLang("CouponMaxUsesPerCustomer");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"NodeJoin\" id=\"CouponMaxUsesPerCustomerNode\" ";
        // line 120
        if ((isset($context['CouponMaxUsesPerCustomerEnabled']) ? $context['CouponMaxUsesPerCustomerEnabled'] : null) == false) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"couponmaxusespercus\" name=\"couponmaxusespercus\" class=\"Field50\" value=\"";
        // line 122
        echo twig_safe_filter((isset($context['MaxUsesPerCus']) ? $context['MaxUsesPerCus'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('CouponMaxUsesPerCustomerHelp');\" onmouseover=\"ShowHelp('CouponMaxUsesPerCustomerHelp', '";
        // line 123
        echo getLang("CouponMaxUsesPerCustomer");
        echo "', '";
        echo getLang("CouponMaxUsesPerCustomerHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"CouponMaxUsesPerCustomerHelp\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 131
        echo getLang("Enabled");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"couponenabled\" name=\"couponenabled\" value=\"ON\" ";
        // line 134
        echo twig_safe_filter((isset($context['Enabled']) ? $context['Enabled'] : null));
        echo "> <label for=\"couponenabled\">";
        echo getLang("YesCouponEnabled");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 140
        echo getLang("CouponAppliesTo");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 144
        echo getLang("AppliesTo");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td style=\"padding-bottom: 3px;\">
\t\t\t\t\t\t<input onclick=\"ToggleUsedFor(0)\" type=\"radio\" id=\"usedforcat\" name=\"usedfor\" value=\"categories\" ";
        // line 147
        echo twig_safe_filter((isset($context['UsedForCat']) ? $context['UsedForCat'] : null));
        echo "> <label for=\"usedforcat\">";
        echo getLang("CouponAppliesToCategories");
        echo "</label><br />
\t\t\t\t\t\t<div id=\"usedforcatdiv\" style=\"padding-left:25px\">
\t\t\t\t\t\t\t<select multiple=\"multiple\" size=\"12\" name=\"catids[]\" id=\"catids\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 150
        echo twig_safe_filter((isset($context['AllCategoriesSelected']) ? $context['AllCategoriesSelected'] : null));
        echo ">";
        echo getLang("AllCategories");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 151
        echo twig_safe_filter((isset($context['CategoryList']) ? $context['CategoryList'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ChooseCategoriesHelp');\" onmouseover=\"ShowHelp('ChooseCategoriesHelp', '";
        // line 153
        echo getLang("ChooseCategories");
        echo "', '";
        echo getLang("ChooseCategoriesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ChooseCategoriesHelp\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"clear: left;\" />
\t\t\t\t\t\t<input onclick=\"ToggleUsedFor(1)\" type=\"radio\" id=\"usedforprod\" name=\"usedfor\" value=\"products\"> <label for=\"usedforprod\">";
        // line 157
        echo getLang("CouponAppliesToProducts");
        echo "</label><br />
\t\t\t\t\t\t<div id=\"usedforproddiv\" style=\"padding-left:25px\">
\t\t\t\t\t\t\t<select size=\"12\" name=\"products\" id=\"ProductSelect\" class=\"Field250\" onchange=\"\$('#ProductRemoveButton').attr('disabled', false);\">
\t\t\t\t\t\t\t\t";
        // line 160
        echo twig_safe_filter((isset($context['SelectedProducts']) ? $context['SelectedProducts'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"Field250\" style=\"text-align: left;\">
\t\t\t\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 164
        echo getLang("CouponRemoveSelected");
        echo "\" id=\"ProductRemoveButton\" disabled=\"disabled\" class=\"FormButton\" style=\"width: 125px;\" onclick=\"removeFromProductSelect('ProductSelect', 'prodids');\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 166
        echo getLang("CouponAddProduct");
        echo "\" class=\"FormButton\" style=\"width: 125px;\" onclick=\"openProductSelect('coupon', 'ProductSelect', 'prodids');\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"prodids\" id=\"prodids\" class=\"Field250\" value=\"";
        // line 167
        echo twig_safe_filter((isset($context['ProductIds']) ? $context['ProductIds'] : null));
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t</div>
\t<div id=\"div1\">
\t\t";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
        echo "

\t\t\t";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LocationRestrictionSettings", array(), "any"), ), "method"), "1");
        echo "
\t\t\t";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LimitByLocation", array(), "any")) . ("?"), "for" => "YesLimitByLocation"), ), "method"), "1");
        // line 183
        echo "

\t\t\t\t";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("name" => "YesLimitByLocation", "id" => "YesLimitByLocation", "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "YesLimitByLocation", array(), "any"), "value" => 1, "checked" => (isset($context['locationRestricted']) ? $context['locationRestricted'] : null), "class" => "CheckboxTogglesOtherElements"), ), "method"), "1");
        // line 192
        echo "
\t\t\t\t";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("LimitByLocation", "LimitByLocation_Help", ), "method"), "1");
        echo "

\t\t\t";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "

\t\t\t";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "ShowIf_YesLimitByLocation_Checked", "hidden" => (!(isset($context['locationRestricted']) ? $context['locationRestricted'] : null))), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => " "), ), "method"), "1");
        // line 201
        echo "

\t\t\t\t\t";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "nodeJoin", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("LocationType", array("country" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LocationTypeCountry", array(), "any")), twig_safe_filter((isset($context['restrictedLocationType']) ? $context['restrictedLocationType'] : null)), array("id" => "LocationTypeCountry"), ), "method"), "1");
        // line 208
        echo "

\t\t\t\t";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "OptionLocationTypeCountry", "hidden" => (isset($context['restrictedLocationType']) ? $context['restrictedLocationType'] : null) != "country"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => " ", "class" => "formRowIndent1"), ), "method"), "1");
        // line 216
        echo "

\t\t\t\t\t\t<div class=\"nodeJoin\">
\t\t\t\t\t\t";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("LocationTypeCountries[]", (isset($context['availableCountries']) ? $context['availableCountries'] : null), (isset($context['locationTypeCountries']) ? $context['locationTypeCountries'] : null), array("id" => "LocationTypeCountries", "class" => "Field300 ISSelectReplacement", "multiple" => "multiple", "size" => 15), ), "method"), "1");
        // line 224
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => " ", "class" => "formRowIndent1"), ), "method"), "1");
        // line 232
        echo "

\t\t\t\t\t";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("LocationType", array("state" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LocationTypeState", array(), "any")), twig_safe_filter((isset($context['restrictedLocationType']) ? $context['restrictedLocationType'] : null)), array("id" => "LocationTypeState"), ), "method"), "1");
        // line 238
        echo "

\t\t\t\t";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "OptionLocationTypeState", "hidden" => (isset($context['restrictedLocationType']) ? $context['restrictedLocationType'] : null) != "state"), ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Countries", array(), "any")) . (":"), "class" => "formRowIndent1"), ), "method"), "1");
        // line 245
        echo "

\t\t\t\t\t\t<div class=\"nodeJoin\">
\t\t\t\t\t\t\t";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("LocationTypeStatesCountries[]", (isset($context['availableCountries']) ? $context['availableCountries'] : null), (isset($context['locationTypeStatesCountries']) ? $context['locationTypeStatesCountries'] : null), array("id" => "LocationTypeStatesCountries", "class" => "Field300 ISSelectReplacement", "multiple" => "multiple", "size" => 10, "onchange" => "updateLocationTypeStatesSelect(this)"), ), "method"), "1");
        // line 254
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "States", array(), "any")) . (":"), "class" => "formRowIndent2"), ), "method"), "1");
        // line 260
        echo "
\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("id" => "LocationTypeStatesSelectHolder", "hidden" => (!(isset($context['locationTypeStatesSelect']) ? $context['locationTypeStatesSelect'] : null))), ), "method"), "1");
        echo "
\t\t\t\t\t\t\t\t<select name=\"LocationTypeStatesSelect[]\" size=\"10\" multiple=\"multiple\" class=\"Field300 ISSelectReplacement\" id=\"LocationTypeStatesSelect\">
\t\t\t\t\t\t\t\t\t";
        // line 265
        echo twig_safe_filter((isset($context['locationTypeStatesSelect']) ? $context['locationTypeStatesSelect'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("id" => "LocationStateSelectNone", "hidden" => (isset($context['locationTypeStatesSelect']) ? $context['locationTypeStatesSelect'] : null)), ), "method"), "1");
        echo "
\t\t\t\t\t\t\t<div id=\"LocationStateSelectNone\" class=\"BlankISSelect Field300\">
\t\t\t\t\t\t\t\t<div>";
        // line 270
        echo getLang("SelectOneOrMoreCountriesFirst");
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => " ", "class" => "formRowIndent1"), ), "method"), "1");
        // line 279
        echo "

\t\t\t\t\t";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("LocationType", array("zip" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LocationTypeZip", array(), "any")), twig_safe_filter((isset($context['restrictedLocationType']) ? $context['restrictedLocationType'] : null)), array("id" => "LocationTypeZip"), ), "method"), "1");
        // line 285
        echo "

\t\t\t\t";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "OptionLocationTypeZip", "hidden" => (isset($context['restrictedLocationType']) ? $context['restrictedLocationType'] : null) != "zip"), ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Country", array(), "any")) . (":"), "class" => "formRowIndent1"), ), "method"), "1");
        // line 292
        echo "

\t\t\t\t\t\t<div class=\"nodeJoin\">
\t\t\t\t\t\t\t";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("LocationTypeZipCountry", (isset($context['availableCountries']) ? $context['availableCountries'] : null), (isset($context['locationTypeZipCountry']) ? $context['locationTypeZipCountry'] : null), array("id" => "LocationTypeZipCountry", "class" => "Field300 ISSelectReplacement"), ), "method"), "1");
        // line 298
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ZipPostCodes", array(), "any")) . (":"), "class" => "formRowIndent2"), ), "method"), "1");
        // line 304
        echo "

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 307
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "textarea", array("LocationTypeZipPostCodes", (isset($context['locationTypeZipPostCodes']) ? $context['locationTypeZipPostCodes'] : null), array("id" => "LocationTypeZipPostCodes", "class" => "Field300", "rows" => "10"), ), "method"), "1");
        // line 311
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 313
        echo getLang("ZipPostCodesPerLine");
        echo "<br />
\t\t\t\t\t\t<a href=\"#\" class=\"LearnMoreAboutEnteringPostCodes\">";
        // line 314
        echo getLang("LearnMoreAboutEnteringPostCodes");
        echo "</a>
\t\t\t\t\t";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 316
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
\t\t\t";
        // line 317
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
\t\t";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "
\t\t";
        // line 319
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
        echo "
\t\t\t";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingMethodRestrictionSettings", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t";
        // line 323
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LimitByShipping", array(), "any")) . ("?"), "for" => "YesLimitByShipping"), ), "method"), "1");
        // line 326
        echo "

\t\t\t\t\t";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("name" => "YesLimitByShipping", "id" => "YesLimitByShipping", "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "YesLimitByShipping", array(), "any"), "value" => 1, "checked" => (isset($context['shippingMethodRestricted']) ? $context['shippingMethodRestricted'] : null), "class" => "CheckboxTogglesOtherElements"), ), "method"), "1");
        // line 335
        echo "
\t\t\t\t\t";
        // line 336
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("LimitByShipping", "LimitByShipping_Help", ), "method"), "1");
        echo "

\t\t\t\t";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 339
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "ShowIf_YesLimitByShipping_Checked", "hidden" => (!(isset($context['shippingMethodRestricted']) ? $context['shippingMethodRestricted'] : null))), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => " "), ), "method"), "1");
        // line 343
        echo "

\t\t\t\t\t\t<div class=\"nodeJoin\">
\t\t\t\t\t\t";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("LocationTypeShipping[]", (isset($context['availableShippers']) ? $context['availableShippers'] : null), (isset($context['selectedShippers']) ? $context['selectedShippers'] : null), array("id" => "LocationTypeShipping", "class" => "Field300 ISSelectReplacement", "multiple" => "multiple", "size" => 15), ), "method"), "1");
        // line 351
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "

\t\t\t\t";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
\t\t\t";
        // line 357
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "

\t\t";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "
\t</div>
\t";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t<input type=\"submit\" value=\"";
        // line 362
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" name=\"SaveButton1\" />
\t\t<input type=\"reset\" value=\"";
        // line 363
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" name=\"CancelButton1\" onclick=\"confirmCancel()\" />
\t";
        // line 364
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "
</div>
</form>

\t<iframe width=132 height=142 name=\"gToday:contrast:agenda.js\" id=\"gToday:contrast:agenda.js\" src=\"calendar/ipopeng.htm\" scrolling=\"no\" frameborder=\"0\" style=\"visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;\"></iframe>
\t<input type=\"text\" id=\"dc2\" name=\"dc2\" style=\"display:none\">
\t<script src=\"script/coupon.form.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\tvar currencyToken = \"";
        // line 372
        echo twig_safe_filter((isset($context['CurrencyToken']) ? $context['CurrencyToken'] : null));
        echo "\";
\t\t";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "jslang", array(array(0 => "ConfirmCancelCoupon", 1 => "EnterCouponCode", 2 => "EnterCouponName", 3 => "ChooseCouponCategory", 4 => "EnterCouponProductId", 5 => "EnterValidAmount", 6 => "EnterValidMinPrice", 7 => "OffEachItem", 8 => "OffTheTotal", 9 => "OffTheShipping", 10 => "AllStatesProvinces", 11 => "EnterLocationOption", 12 => "EnterLocationTypeCountries", 13 => "EnterLocationTypeStatesCountries", 14 => "EnterLocationTypeStatesSelect", 15 => "EnterLocationTypeZipCountry", 16 => "EnterLocationTypeZipPostCodes", 17 => "EnterLocationTypeShipping", 18 => "EnterValidMaxUses", 19 => "EnterValidMaxUsesPerCus"), ), "method"), "1");
        // line 394
        echo "

\t\tfunction ShowTab(T)
\t\t{
\t\t\t\ti = 0;
\t\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\t\ti++;
\t\t\t\t}

\t\t\t\tif (T == 1) {
\t\t\t\t\t\$('#SaveButtons').hide();
\t\t\t\t} else {
\t\t\t\t\t\$('#SaveButtons').show();
\t\t\t\t}

\t\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t\t}
\t\tShowTab(";
        // line 415
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");
\t\t";
        // line 416
        echo twig_safe_filter((isset($context['ToggleUsedFor']) ? $context['ToggleUsedFor'] : null));
        echo "
\t</script>
";
    }

}

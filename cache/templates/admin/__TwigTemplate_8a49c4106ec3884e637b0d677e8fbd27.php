<?php

/* discount.form.tpl */
class __TwigTemplate_8a49c4106ec3884e637b0d677e8fbd27 extends Twig_Template
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
        echo "\" id=\"frmNews\" method=\"post\" onSubmit=\"return CheckDiscountRuleForm()\">
\t<input type=\"hidden\" id=\"discountId\" name=\"discountId\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['DiscountId']) ? $context['DiscountId'] : null));
        echo "\">
\t<div id=\"discountWrapper\">
\t\t<div class=\"BodyContainer\">
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
        echo "
\t\t\t<table class=\"OuterPanel\">
\t\t\t  <tr>
\t\t\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 10
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t<p>";
        // line 14
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t\t<p>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 17
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" name=\"SaveButton1\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 18
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" name=\"CancelButton1\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</p>
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t  <table class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 26
        echo getLang("NewDiscountDetails");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">* </span>";
        // line 30
        echo getLang("DiscountFormRuleName");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"discountname\" name=\"discountname\" class=\"Field250\" value=\"";
        // line 33
        echo twig_safe_filter((isset($context['DiscountName']) ? $context['DiscountName'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<div class=\"aside\" style=\"color:Gray; margin-bottom:10px\">(Such as 'Free shipping on orders over \$200'. This name is for your reference only)</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 40
        echo getLang("DiscountFormEnabled");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"enabled\" id=\"enabled\" value=\"1\" ";
        // line 43
        echo twig_safe_filter((isset($context['DiscountEnabledCheck']) ? $context['DiscountEnabledCheck'] : null));
        echo ">";
        echo getLang("DiscountFormEnabledDescription");
        echo "</input></label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 48
        echo getLang("DiscountFormRuleExpires");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"discountruleexpires\" id=\"discountruleexpires\"  ";
        // line 51
        echo twig_safe_filter((isset($context['DiscountExpiryCheck']) ? $context['DiscountExpiryCheck'] : null));
        echo " onclick=\"if(this.checked) { \$('.DiscountExpiryFields').show(); } else { \$('.DiscountExpiryFields').hide(); }\" value=\"1\" /> ";
        echo getLang("DiscountFormRuleExpiresDescription");
        echo "</label>
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rulexpires\"></div>
\t\t\t\t\t\t\t\t<div style=\"margin-top: 3px; padding-left:20px; ";
        // line 53
        echo twig_safe_filter((isset($context['DiscountExpiryFields']) ? $context['DiscountExpiryFields'] : null));
        echo "\" class=\"DiscountExpiryFields\">
\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle; float:left;\" /><div  style=\"float:left\">
\t\t\t\t\t\t\t\t\t<label><input name=\"discountruleexpiresuses\" id=\"discountruleexpiresuses\"  ";
        // line 55
        echo twig_safe_filter((isset($context['DiscountMaxUsesCheck']) ? $context['DiscountMaxUsesCheck'] : null));
        echo " type=\"checkbox\" onclick=\"\$('#discountruleexpiresusesamount').attr('readonly', !\$('#discountruleexpiresusesamount').attr('readonly'));\"></input> ";
        echo getLang("DiscountFormUsesExpire");
        echo "</label><input name=\"discountruleexpiresusesamount\" id=\"discountruleexpiresusesamount\" class=\"Field50\" ";
        echo twig_safe_filter((isset($context['DiscountMaxUsesDisabled']) ? $context['DiscountMaxUsesDisabled'] : null));
        echo " value=\"";
        echo twig_safe_filter((isset($context['DiscountMaxUses']) ? $context['DiscountMaxUses'] : null));
        echo "\" onclick=\"\$('#discountruleexpiresusesamount').attr('readonly', false);\$('#discountruleexpiresuses').attr('checked', true);\" /> ";
        echo getLang("DiscountFormUses");
        echo "<br />
\t\t\t\t\t\t\t\t\t<label><input id=\"discountruleexpiresdate\" name=\"discountruleexpiresdate\"  ";
        // line 56
        echo twig_safe_filter((isset($context['DiscountExpiryDateCheck']) ? $context['DiscountExpiryDateCheck'] : null));
        echo " type=\"checkbox\"></input> ";
        echo getLang("DiscountFormDateExpire");
        echo "<input name=\"discountruleexpiresdateamount\" id=\"discountruleexpiresdateamount\" class=\"Field70\" ";
        echo twig_safe_filter((isset($context['DiscountExpiryDateDisabled']) ? $context['DiscountExpiryDateDisabled'] : null));
        echo " value=\"";
        echo twig_safe_filter((isset($context['DiscountExpiryDate']) ? $context['DiscountExpiryDate'] : null));
        echo "\" onclick=\"\$('#discountruleexpiresdate').attr('checked', true);if(self.gfPop)gfPop.fStartPop(document.getElementById('discountruleexpiresdateamount'),document.getElementById('dc2'));return false;\" ></input></label><a href=\"javascript:void(0)\" onclick=\"\$('#discountruleexpiresdate').attr('checked', true);if(self.gfPop)gfPop.fStartPop(document.getElementById('discountruleexpiresdateamount'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/dateicon.gif\" border=\"0\" alt=\"\"></a></div>
\t\t<iframe width=132 height=142 name=\"gToday:contrast:agenda.js\" id=\"gToday:contrast:agenda.js\" src=\"calendar/ipopeng.htm\" scrolling=\"no\" frameborder=\"0\" style=\"visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;\"></iframe>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"dc2\" name=\"dc2\" style=\"display:none\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr style=\"padding-bottom:10px;\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">* </span>";
        // line 65
        echo getLang("DiscountFormRuleType");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 68
        echo twig_safe_filter((isset($context['RuleList']) ? $context['RuleList'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "
\t\t\t";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("id" => "FreeShipingDiscountRulesOptionsSection", "hidden" => "1"), ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FreeShipingDiscountRulesOptions", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FreeShippingMessage", array(), "any")) . (":"), "required" => "1"), ), "method"), "1");
        // line 82
        echo "

\t\t\t\t\t\t<div class=\"Field350\">
\t\t\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "textarea", array("FreeShippingMessage", (isset($context['freeShippingMessage']) ? $context['freeShippingMessage'] : null), array("id" => "FreeShippingMessage", "class" => "Field300", "rows" => "5"), ), "method"), "1");
        // line 89
        echo "
\t\t\t\t\t\t\t";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("FreeShippingMessage", "FreeShippingMessage_Help", ), "method"), "1");
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"LearnMoreFreeShippingMessagePlaceHolder\">";
        // line 92
        echo getLang("LearnMoreFreeShippingMessagePlaceHolder");
        echo "</a>
\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MessageLocation", array(), "any")) . (":"), "required" => "1"), ), "method"), "1");
        // line 97
        echo "

\t\t\t\t\t\t";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("name" => "ShowFreeShippingMesgOn[homepage]", "id" => "ShowFreeShippingMesgOnHomePage", "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowFreeShippingMesgOnHomePage", array(), "any"), "value" => "homepage", "checked" => $this->getAttribute((isset($context['freeShippingMessageLocations']) ? $context['freeShippingMessageLocations'] : null), "homepage", array(), "any"), "class" => "ShowFreeShippingMesgOn"), ), "method"), "1");
        // line 106
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("name" => "ShowFreeShippingMesgOn[productpage]", "id" => "ShowFreeShippingMesgOnProductPage", "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowFreeShippingMesgOnProductPage", array(), "any"), "value" => "productpage", "checked" => $this->getAttribute((isset($context['freeShippingMessageLocations']) ? $context['freeShippingMessageLocations'] : null), "productpage", array(), "any"), "class" => "ShowFreeShippingMesgOn"), ), "method"), "1");
        // line 115
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("name" => "ShowFreeShippingMesgOn[cartpage]", "id" => "ShowFreeShippingMesgOnCartPage", "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowFreeShippingMesgOnCartPage", array(), "any"), "value" => "cartpage", "checked" => $this->getAttribute((isset($context['freeShippingMessageLocations']) ? $context['freeShippingMessageLocations'] : null), "cartpage", array(), "any"), "class" => "ShowFreeShippingMesgOn"), ), "method"), "1");
        // line 124
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "checkbox", array(array("name" => "ShowFreeShippingMesgOn[checkoutpage]", "id" => "ShowFreeShippingMesgOnCheckoutPage", "label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowFreeShippingMesgOnCheckoutPage", array(), "any"), "value" => "checkoutpage", "checked" => $this->getAttribute((isset($context['freeShippingMessageLocations']) ? $context['freeShippingMessageLocations'] : null), "checkoutpage", array(), "any"), "class" => "ShowFreeShippingMesgOn"), ), "method"), "1");
        // line 133
        echo "

\t\t\t\t\t";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "method"), "1");
        echo "
\t\t\t\t";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
\t\t\t";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "method"), "1");
        echo "
\t\t\t";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t<input type=\"submit\" value=\"";
        // line 139
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" name=\"SaveButton1\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 140
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" name=\"CancelButton1\" onclick=\"ConfirmCancel()\" />
\t\t\t";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "
\t\t</div>
\t</div>
\t</form>



\t<script type=\"text/javascript\">

\t\tvar previous = ";
        // line 150
        echo twig_safe_filter((isset($context['CurrentRule']) ? $context['CurrentRule'] : null));
        echo ";

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 154
        echo getLang("ConfirmCancelDiscount");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewDiscounts\";
\t\t}

\t\tfunction VendorSupport() {
\t\t\t\talert('";
        // line 159
        echo getLang("DiscountVendorWarning");
        echo "');
\t\t}

\t\tfunction UpdateModule(module, vendor) {

\t\t\tif (";
        // line 164
        echo twig_safe_filter((isset($context['Vendor']) ? $context['Vendor'] : null));
        echo " && !vendor) {
\t\t\t\t\$('#'+module).attr('checked', false);
\t\t\t\t\$('#'+previous).attr('checked', true);
\t\t\t\talert('";
        // line 167
        echo getLang("DiscountVendorWarning");
        echo "');
\t\t\t\treturn;
\t\t\t}

\t\t\tprevious = module;

\t\t\tif(module == '' || module == null) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.ajax({
\t\t\t\t'url': 'remote.php',
\t\t\t\t'method': 'post',
\t\t\t\t'data': {
\t\t\t\t\t'remoteSection': 'discounts',
\t\t\t\t\t'w': 'getRuleModuleProperties',
\t\t\t\t\t'module': module
\t\t\t\t},
\t\t\t\t'success': function(data) {
\t\t\t\t\t\$('.ruleWrapper').hide();
\t\t\t\t\t\$('.ruleSettings').html('');
\t\t\t\t\t\$('#ruleSettings'+module).html(data);
\t\t\t\t\t\$('#ruleWrapper'+module).show();
\t\t\t\t\t\$('.discountFirst').focus();

\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction CheckDiscountRuleForm()
\t\t{
\t\t\tvar discountname = document.getElementById(\"discountname\");
\t\t\tvar discountruleexpires = document.getElementById(\"discountruleexpires\");
\t\t\tvar discountruleexpiresuses = document.getElementById(\"discountruleexpiresuses\");
\t\t\tvar discountruleexpiresusesamount = document.getElementById(\"discountruleexpiresusesamount\");
\t\t\tvar discountruleexpiresdate = document.getElementById(\"discountruleexpiresdate\");
\t\t\tvar discountruleexpiresdateamount = document.getElementById(\"discountruleexpiresdateamount\");
\t\t\tvar enabled = document.getElementById(\"enabled\");

\t\t\tvar type = document.getElementsByName(\"RuleType\");

\t\t\tif(discountname.value == \"\") {
\t\t\t\talert(\"";
        // line 209
        echo getLang("EnterDiscountName");
        echo "\");
\t\t\t\tdiscountname.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (discountruleexpires.checked) {
\t\t\t\tif (discountruleexpiresuses.checked) {
\t\t\t\t\tif (isNaN(discountruleexpiresusesamount.value)) {
\t\t\t\t\t\talert(\"";
        // line 217
        echo getLang("EnterDiscountExpiresUsesAmount");
        echo "\");
\t\t\t\t\t\tdiscountruleexpiresusesamount.focus();
\t\t\t\t\t\tdiscountruleexpiresusesamount.select();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (discountruleexpiresdate.checked) {
\t\t\t\t\tif (discountruleexpiresdateamount.value == '' || new Date(discountruleexpiresdateamount.value) == 'Invalid Date') {
\t\t\t\t\t\talert(\"";
        // line 226
        echo getLang("EnterDiscountExpiresDateAmount");
        echo "\");
\t\t\t\t\t\tdiscountruleexpiresdateamount.focus();
\t\t\t\t\t\tdiscountruleexpiresdateamount.select();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tvar checked = false;
\t\t\tfor (var i = 0; i < type.length; i++) {
\t\t\t\tif (type[i].checked) {

\t\t\t\t\tvar response = this[type[i].id]();

\t\t\t\t\tif (response == true)
\t\t\t\t\t{
\t\t\t\t\t\tchecked = true;
\t\t\t\t\t\tbreak;
\t\t\t\t\t}

\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif (!checked) {
\t\t\t\talert(\"";
        // line 250
        echo getLang("EnterDiscountSelectRule");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (\$(\".discountRadio:checked\").val() == 'rule_buyxgetfreeshipping'
\t\t\t|| \$(\".discountRadio:checked\").val() == 'rule_freeshippingwhenoverx') {
\t\t\t\tif (\$.trim(\$(\"#FreeShippingMessage\").val()) == '') {
\t\t\t\t\talert(\"";
        // line 257
        echo getLang("EnterFreeShippingMessage");
        echo "\");
\t\t\t\t\t\$(\"#FreeShippingMessage\").focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif (\$(\".ShowFreeShippingMesgOn:checked\").length <= 0) {
\t\t\t\t\talert(\"";
        // line 262
        echo getLang("EnterShowFreeShippingMesgOn");
        echo "\");
\t\t\t\t\t\$(\"#ShowFreeShippingMesgOnHomePage\").focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\treturn true;
\t\t}
\t\t\$(document).ready(function() {
\t\t\t\$(\".discountRadio\").live('change', function() {
\t\t\t\tif (\$(this).val() == 'rule_buyxgetfreeshipping'
\t\t\t\t|| \$(this).val() == 'rule_freeshippingwhenoverx') {
\t\t\t\t\t\$(\"#FreeShipingDiscountRulesOptionsSection\").show();
\t\t\t\t} else {
\t\t\t\t\t\$(\"#FreeShipingDiscountRulesOptionsSection\").hide();
\t\t\t\t}
\t\t\t});
\t\t\t\$(\".discountRadio:checked\").trigger(\"change\")

\t\t\t\$('.LearnMoreFreeShippingMessagePlaceHolder').click(function(event){
\t\t\t\tevent.preventDefault();
\t\t\t\tLaunchHelp('907');
\t\t\t});
\t\t});

\t\t";
        // line 286
        echo twig_safe_filter((isset($context['DiscountJavascriptValidation']) ? $context['DiscountJavascriptValidation'] : null));
        echo "
\t</script>
";
    }

}

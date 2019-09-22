<?php

/* shippingzone.method.form.tpl */
class __TwigTemplate_8936c3f135111e9be3d41a049a637fc1 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" method=\"post\" onsubmit=\"return ValidateForm(CheckMethodForm)\">
\t<input type=\"hidden\" name=\"methodId\" id=\"methodId\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['MethodId']) ? $context['MethodId'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"zoneId\" id=\"zoneId\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"currentTab\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" id=\"currentTab\" />
\t<div class=\"BodyContainer\">
\t\t<table class=\"OuterPanel\">
\t\t\t<tr>
\t\t\t\t<td class=\"Heading1\">";
        // line 8
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t<p>";
        // line 13
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t\t<p>
\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 16
        echo getLang("Save");
        echo "\" class=\"FormButton\" />&nbsp;
\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 17
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</p>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 26
        echo getLang("ShippingMethodSettings");
        echo "</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 31
        echo getLang("ShippingMethod");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div>";
        // line 34
        echo twig_safe_filter((isset($context['MethodBasedOn']) ? $context['MethodBasedOn'] : null));
        echo "</div>
\t\t\t\t\t\t\t\t<div style=\"";
        // line 35
        echo twig_safe_filter((isset($context['HideModuleSelect']) ? $context['HideModuleSelect'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<select name=\"methodmodule\" id=\"methodmodule\" class=\"Field200\" size=\"10\" onchange=\"UpdateModule(\$(this).val());\">
\t\t\t\t\t\t\t\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['ShippingProviders']) ? $context['ShippingProviders'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('methodmodule');\" onmouseover=\"ShowHelp('methodmodule', '";
        // line 39
        echo getLang("ShippingMethod");
        echo "', '";
        echo getLang("ShippingMethodHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"methodmodule\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 47
        echo getLang("DisplayName");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" onkeypress=\"updateUsingDefault();\" name=\"methodname\" id=\"methodname\" class=\"Field200\" value=\"";
        // line 50
        echo twig_safe_filter((isset($context['MethodName']) ? $context['MethodName'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('methodnamehelp');\" onmouseover=\"ShowHelp('methodnamehelp', '";
        // line 51
        echo getLang("DisplayName");
        echo "', '";
        echo getLang("ShippingMethodDisplayNameHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"methodnamehelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr id=\"HandlingSettings\" style=\"";
        // line 56
        echo twig_safe_filter((isset($context['HideHandlingFee']) ? $context['HideHandlingFee'] : null));
        echo "\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 58
        echo getLang("HandlingFee");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 61
        echo twig_safe_filter((isset($context['LeftCurrencyToken']) ? $context['LeftCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"methodhandlingfee\" id=\"methodhandlingfee\" class=\"Field50\" value=\"";
        // line 62
        echo twig_safe_filter((isset($context['HandlingFee']) ? $context['HandlingFee'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t";
        // line 63
        echo twig_safe_filter((isset($context['RightCurrencyToken']) ? $context['RightCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 68
        echo getLang("EnableShippingMethod");
        echo "?
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"methodenabled\" id=\"methodenbled\" ";
        // line 71
        echo twig_safe_filter((isset($context['MethodEnabledCheck']) ? $context['MethodEnabledCheck'] : null));
        echo " /> ";
        echo getLang("YesEnableShippingMethod");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('enabledhelp');\" onmouseover=\"ShowHelp('enabledhelp', '";
        // line 72
        echo getLang("EnableShippingMethod");
        echo "?', '";
        echo getLang("EnableShippingMethodHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"enabledhelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<br />
\t\t\t\t\t<table width=\"100%\" class=\"Panel\" id=\"chooseMethodFirst\" style=\"";
        // line 78
        echo twig_safe_filter((isset($context['HideChooseMethod']) ? $context['HideChooseMethod'] : null));
        echo "\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 80
        echo getLang("ShippingSettings");
        echo "</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t<p class=\"MessageBox MessageBoxInfo\">";
        // line 85
        echo getLang("ChooseShippingMethodFirst");
        echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<div id=\"shippingMethodSettings\">
\t\t\t\t\t\t";
        // line 90
        echo twig_safe_filter((isset($context['ShippingModuleProperties']) ? $context['ShippingModuleProperties'] : null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 96
        echo getLang("Save");
        echo "\" class=\"FormButton\" />&nbsp;
\t\t\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 97
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</form>
<script type=\"text/javascript\">
\tvar usingDefault = 1;

\tfunction updateUsingDefault()
\t{
\t\tusingDefault = 0;
\t}

\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 116
        echo getLang("ConfirmCancel");
        echo "')) {
\t\t\twindow.location = 'index.php?ToDo=editShippingZone&zoneId=";
        // line 117
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "&currentTab=1';
\t\t}
\t}

function CheckMethodForm()
{
\tif(!\$('#methodId').val() && !\$('#methodmodule').val()) {
\t\talert('";
        // line 124
        echo getLang("SelectShippingMethod");
        echo "');
\t\t\$('#methodmodule').focus();
\t\treturn false;
\t}

\tif(!\$('#methodname').val()) {
\t\talert('";
        // line 130
        echo getLang("EnterShippingMethodName");
        echo "');
\t\t\$('#methodname').focus();
\t\treturn false;
\t}

\tif(\$('#HandlingSettings').css('display') != 'none') {
\t\tif(isNaN(priceFormat(\$('#methodhandlingfee')))) {
\t\t\talert('";
        // line 137
        echo getLang("EnterValidHandlingFee");
        echo "');
\t\t\t\$('#methodhandlingfee').select();
\t\t\treturn;
\t\t}
\t}

\tif(typeof(ShipperValidation) != 'undefined' && ShipperValidation() == false) {
\t\treturn false;
\t}

\treturn true;
}

";
        // line 150
        echo twig_safe_filter((isset($context['ShippingProviderErrors']) ? $context['ShippingProviderErrors'] : null));
        echo "

function UpdateModule(module) {
\tif(module == '' || module == null) {
\t\t\$('#chooseMethodFirst').show();
\t\t\$('#shippingMethodSettings *').remove();
\t\treturn;
\t}

\t// Is there a reason why this zone cannot be enabled?
\tif(typeof(eval('providerErrors.'+module)) != 'undefined') {
\t\tvar errors = eval('providerErrors.'+module);
\t\talert(errors);
\t\t\$('#methodmodule').val('');
\t\treturn false;
\t}

\t\$.ajax({
\t\turl: 'remote.php',
\t\tmethod: 'post',
\t\tdata: 'w=GetShippingModuleProperties&module='+module,
\t\tsuccess: function(data) {
\t\t\t\$('#shippingMethodSettings').html(data);
\t\t\t\$('#chooseMethodFirst').hide();
\t\t\tISSelectReplacement.on_load();
\t\t\tif(usingDefault == 1) {
\t\t\t\t\$('#methodname').val(\$('#shippingMethodSettings #moduleName').html());
\t\t\t}
\t\t}
\t});
}
</script>";
    }

}

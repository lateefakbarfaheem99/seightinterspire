<?php

/* settings.shipping.manage.tpl */
class __TwigTemplate_a6e3d8bd29187e3fffa53f73a46f0f67 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form action=\"index.php?ToDo=saveUpdatedShippingSettings\" name=\"frmShippingSettings\" id=\"frmShippingSettings\" method=\"post\" onsubmit=\"return ValidateForm(CheckShippingSettingsForm)\">
\t\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ShippingSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 9
        echo getLang("ShippingSettingsIntro");
        echo "</p>
\t\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p class=\"TopButtons\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 12
        echo getLang("Save");
        echo "\" class=\"FormButton SaveButton\" />
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 13
        echo getLang("Cancel");
        echo "\" class=\"FormButton CancelButton\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 20
        echo getLang("StoreLocation");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 21
        echo getLang("ShippingZones");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"";
        // line 27
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" type=\"hidden\">
\t\t\t\t<div id=\"div0\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"storename\">";
        // line 32
        echo getLang("CompanyName");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"companyname\" id=\"companyname\" value=\"";
        // line 35
        echo twig_safe_filter((isset($context['CompanyName']) ? $context['CompanyName'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 36
        echo getLang("CompanyName");
        echo "', '";
        echo getLang("CompanyNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"storename\">";
        // line 42
        echo getLang("CompanyAddress");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"companyaddress\" id=\"companyaddress\" value=\"";
        // line 45
        echo twig_safe_filter((isset($context['CompanyAddress']) ? $context['CompanyAddress'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 46
        echo getLang("CompanyAddress");
        echo "', '";
        echo getLang("CompanyAddressHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"storename\">";
        // line 52
        echo getLang("CompanyCity");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"companycity\" id=\"companycity\" value=\"";
        // line 55
        echo twig_safe_filter((isset($context['CompanyCity']) ? $context['CompanyCity'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 56
        echo getLang("CompanyCity");
        echo "', '";
        echo getLang("CompanyCityHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"storename\">";
        // line 62
        echo getLang("CompanyCountry");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select name=\"companycountry\" id=\"companycountry\" class=\"Field250 \" onchange=\"GetStates(this, 'companystate', 'companystate1')\">
\t\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_safe_filter((isset($context['CountryList']) ? $context['CountryList'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 68
        echo getLang("CompanyCountry");
        echo "', '";
        echo getLang("CompanyCountryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"storename\">";
        // line 74
        echo getLang("CompanyState");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"Field\">
\t\t\t\t\t\t\t\t<div id=\"statemessage\" style=\"color:gray; display:";
        // line 77
        echo twig_safe_filter((isset($context['HideStateNote']) ? $context['HideStateNote'] : null));
        echo "\">-- ";
        echo getLang("ChooseCountryFirst");
        echo " --</div>
\t\t\t\t\t\t\t\t<select style=\"display:";
        // line 78
        echo twig_safe_filter((isset($context['HideStateList']) ? $context['HideStateList'] : null));
        echo "\" name=\"companystate\" id=\"companystate\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t";
        // line 79
        echo twig_safe_filter((isset($context['StateList']) ? $context['StateList'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<input style=\"display:";
        // line 81
        echo twig_safe_filter((isset($context['HideStateBox']) ? $context['HideStateBox'] : null));
        echo "\" type=\"text\" name=\"companystate1\" id=\"companystate1\" class=\"Field250\" value=\"";
        echo twig_safe_filter((isset($context['CompanyState']) ? $context['CompanyState'] : null));
        echo "\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"storename\">";
        // line 86
        echo getLang("CompanyZip");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"companyzip\" id=\"companyzip\" value=\"";
        // line 89
        echo twig_safe_filter((isset($context['CompanyZip']) ? $context['CompanyZip'] : null));
        echo "\" class=\"Field50\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d6');\" onmouseover=\"ShowHelp('d6', '";
        // line 90
        echo getLang("CompanyZip");
        echo "', '";
        echo getLang("CompanyZipHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d6\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain BottomButtons\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input class=\"FormButton SaveButton\" type=\"submit\" value=\"";
        // line 101
        echo getLang("Save");
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 102
        echo getLang("Cancel");
        echo "\" class=\"FormButton CancelButton\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div id=\"div1\">
\t\t\t\t\t";
        // line 108
        echo twig_safe_filter((isset($context['NoZonesMessage']) ? $context['NoZonesMessage'] : null));
        echo "
\t\t\t\t\t<p style=\"padding-bottom: 0; margin-bottom: 10px; margin-top: 10px;\">
\t\t\t\t\t<input type=\"button\" name=\"ZoneAddButton\" value=\"";
        // line 110
        echo getLang("AddShippingZoneButton");
        echo "\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=addShippingZone';\" />
\t\t\t\t\t\t<input type=\"button\" name=\"ZoneDeleteButton\" value=\"";
        // line 111
        echo getLang("DeleteSelected");
        echo "\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected();\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t\t";
        // line 114
        echo twig_safe_filter((isset($context['ZoneDataGrid']) ? $context['ZoneDataGrid'] : null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tvar selDest = null;
\t\tvar otherBox = null;

\t\tfunction ShowTab(T)
\t\t{
\t\t\ti = 0;
\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t\t}

\t\tfunction GetStates(selObj, dest, stateTextBox)
\t\t{
\t\t\tvar country = selObj.options[selObj.selectedIndex].value;
\t\t\tvar statemessage = document.getElementById(\"statemessage\");

\t\t\tselDest = document.getElementById(dest);
\t\t\totherBox = document.getElementById(stateTextBox);
\t\t\tstatemessage.style.display = \"none\";

\t\t\tif(country == \"\")
\t\t\t{
\t\t\t\tResetStates(false);
\t\t\t\tselObj.focus();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t// Get all of the states for this country
\t\t\t\t//dataMode = 1;
\t\t\t\tDoCallback(\"w=countryStates&c=\"+country);
\t\t\t}
\t\t}

\t\tfunction ResetStates(ShowChoose)
\t\t{
\t\t\tselDest.options.length = 0;

\t\t\tif(ShowChoose)
\t\t\t\tselDest.options[selDest.options.length] = new Option(\"";
        // line 169
        echo getLang("ChooseState");
        echo "\", \"\");
\t\t}

\t\tfunction ProcessData(html)
\t\t{
\t\t\tResetStates(true);
\t\t\tstates = html.split(\"~\");
\t\t\tnumStates = 0;

\t\t\tfor(i = 0; i < states.length; i++)
\t\t\t{
\t\t\t\tvals = states[i].split(\"|\");

\t\t\t\tif(states[i].length > 0) {
\t\t\t\t\tselDest.options[selDest.options.length] = new Option(vals[0], vals[1]);
\t\t\t\t\tnumStates++;
\t\t\t\t}
\t\t\t}

\t\t\t// If there are no states then hide the state dropdown list
\t\t\tif(numStates == 0) {
\t\t\t\tselDest.style.display = \"none\";
\t\t\t\totherBox.style.display = \"\";
\t\t\t}
\t\t\telse {
\t\t\t\tselDest.style.display = \"\";
\t\t\t\totherBox.style.display = \"none\";
\t\t\t}
\t\t}

\t\tfunction ConfirmCancel()
\t\t{\t
\t\t\tif(confirm(\"";
        // line 201
        echo getLang("ConfirmCancelShippingSettings");
        echo "\")) {
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewShippingSettings\";
\t\t\t}
\t\t}

\t\tfunction CheckShippingSettingsForm() {
\t\t\tvar companyname = g(\"companyname\");
\t\t\tvar companyaddress = g(\"companyaddress\");
\t\t\tvar companycity = g(\"companycity\");
\t\t\tvar companycountry = g(\"companycountry\");
\t\t\tvar companystate = g(\"companystate\");
\t\t\tvar companystate1 = g(\"companystate1\");
\t\t\tvar companyzip = g(\"companyzip\");

\t\t\tif(companyname.value == \"\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 217
        echo getLang("EnterCompanyName");
        echo "\");
\t\t\t\tcompanyname.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(companyaddress.value == \"\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 224
        echo getLang("EnterCompanyAddress");
        echo "\");
\t\t\t\tcompanyaddress.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(companycity.value == \"\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 231
        echo getLang("EnterCompanyCity");
        echo "\");
\t\t\t\tcompanycity.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(companycountry.selectedIndex == 0) {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 238
        echo getLang("SelectCompanyCountry");
        echo "\");
\t\t\t\tcompanycountry.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif( (companystate.style.display == \"\" && companystate.selectedIndex == 0) || (companystate1.style.display == \"\" && companystate1.value == \"\") || (companystate.style.display == \"none\" && companystate1.style.display == \"none\") ) {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 245
        echo getLang("SelectEnterCompanyState");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(companyzip.value == \"\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 251
        echo getLang("EnterCompanyZip");
        echo "\");
\t\t\t\tcompanyzip.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tif(!\$('.GridContainer input[type=checkbox].check:checked').length) {
\t\t\t\talert('";
        // line 262
        echo getLang("SelectOneMoreZonesDelete");
        echo "');
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(confirm('";
        // line 265
        echo getLang("ConfirmDeleteZones");
        echo "')) {
\t\t\t\t\$('#frmShippingSettings').attr('action', 'index.php?ToDo=deleteShippingZones');
\t\t\t\t\$('#frmShippingSettings').attr('onsubmit', function() { return true});
\t\t\t\t\$('#frmShippingSettings').submit();
\t\t\t}
\t\t\telse {
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tfunction ConfirmDeleteZone() {
\t\t\tif(confirm('";
        // line 276
        echo getLang("ConfirmDeleteZone");
        echo "')) {
\t\t\t\treturn true;
\t\t\t}

\t\t\treturn false;
\t\t}

\t\t// Load the main shipping settings tab by default
\t\tShowTab(";
        // line 284
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");
\t</script>
";
    }

}

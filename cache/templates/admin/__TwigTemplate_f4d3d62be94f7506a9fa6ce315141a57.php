<?php

/* shippingzone.form.tpl */
class __TwigTemplate_f4d3d62be94f7506a9fa6ce315141a57 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo twig_safe_filter((isset($context['VendorIdAdd']) ? $context['VendorIdAdd'] : null));
        echo "\" id=\"frmZone\" method=\"post\" onsubmit=\"return ValidateForm(CheckZoneForm)\">
\t<input type=\"hidden\" name=\"zoneId\" id=\"zoneId\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"currentTab\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" id=\"currentTab\" />
<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 7
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 12
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p class=\"TopButtons\">
\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 15
        echo twig_safe_filter((isset($context['NextButton']) ? $context['NextButton'] : null));
        echo "\" class=\"FormButton NextButton\" />&nbsp;
\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 24
        echo getLang("ZoneSettings");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#\" id=\"tab1\" style=\"";
        // line 25
        echo twig_safe_filter((isset($context['HideShippingMethods']) ? $context['HideShippingMethods'] : null));
        echo "\" onclick=\"ShowTab(1)\">";
        echo getLang("ShippingMethods");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"div0\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 35
        echo getLang("ShippingZoneSettings");
        echo "</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 40
        echo getLang("ShippingZoneName");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"zonename\" id=\"zonename\" class=\"Field200\" value=\"";
        // line 43
        echo twig_safe_filter((isset($context['ZoneName']) ? $context['ZoneName'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('zonenamehelp');\" onmouseover=\"ShowHelp('zonenamehelp', '";
        // line 44
        echo getLang("ShippingZoneName");
        echo "', '";
        echo getLang("ShippingZoneNameHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"zonenamehelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 50
        echo getLang("ShippingZoneType");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div style=\"";
        // line 53
        echo twig_safe_filter((isset($context['HideDefaultZoneType']) ? $context['HideDefaultZoneType'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 54
        echo getLang("ShippingZoneTypeGlobal");
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"ZoneTypeOptions\" style=\"";
        // line 56
        echo twig_safe_filter((isset($context['HideZoneTypeFields']) ? $context['HideZoneTypeFields'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" name=\"zonetype\" id=\"zonetype_country\" onclick=\"ChangeZoneType(this.value)\" value=\"country\" ";
        // line 57
        echo twig_safe_filter((isset($context['TypeCountriesChecked']) ? $context['TypeCountriesChecked'] : null));
        echo " /> ";
        echo getLang("ShippingZoneTypeCountry");
        echo "</label>
\t\t\t\t\t\t\t\t<div id=\"ZoneTypeCountry\" style=\"";
        // line 58
        echo twig_safe_filter((isset($context['HideZoneTypeCountry']) ? $context['HideZoneTypeCountry'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"vertical-align: top;\"><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"zonetype_country_list[]\" id=\"zonetype_country_list\" size=\"15\" multiple=\"multiple\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_safe_filter((isset($context['MultipleCountrySelect']) ? $context['MultipleCountrySelect'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" name=\"zonetype\" id=\"zonetype_state\" onclick=\"ChangeZoneType(this.value)\" value=\"state\" ";
        // line 70
        echo twig_safe_filter((isset($context['TypeStatesChecked']) ? $context['TypeStatesChecked'] : null));
        echo " /> ";
        echo getLang("ShippingZoneTypeState");
        echo "</label>
\t\t\t\t\t\t\t\t<div id=\"ZoneTypeStates\" style=\"";
        // line 71
        echo twig_safe_filter((isset($context['HideZoneTypeStates']) ? $context['HideZoneTypeStates'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td rowspan=\"2\" style=\"vertical-align: top;\"><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"padding-top: 5px; vertical-align: top;\">";
        // line 75
        echo getLang("Countries");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"zonetype_states_country[]\" id=\"StateCountries\" size=\"10\" multiple=\"multiple\" class=\"Field250 ISSelectReplacement\" onchange=\"UpdateZoneStateSelect(this)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        echo twig_safe_filter((isset($context['MultipleCountrySelect']) ? $context['MultipleCountrySelect'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"vertical-align: top;\">";
        // line 83
        echo getLang("States");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"zonetype_states[]\" size=\"10\" multiple=\"multiple\" class=\"Field250 ISSelectReplacement\" id=\"StateSelect\" style=\"";
        // line 85
        echo twig_safe_filter((isset($context['HideStateSelect']) ? $context['HideStateSelect'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 86
        echo twig_safe_filter((isset($context['StateSelect']) ? $context['StateSelect'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"ZoneStateSelectNone\" style=\"font-size: 20px; background: #fff; border: 1px solid #7F9DB9; font-weight: bold; color: #aaa; text-align: center; ";
        // line 88
        echo twig_safe_filter((isset($context['HideStateSelectNone']) ? $context['HideStateSelectNone'] : null));
        echo "\"><div style=\"padding-top: 40px; \">";
        echo getLang("SelectOneOrMoreCountriesFirst");
        echo "</div></div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" name=\"zonetype\" id=\"zonetype_zip\" onclick=\"ChangeZoneType(this.value)\" value=\"zip\" ";
        // line 93
        echo twig_safe_filter((isset($context['TypeZipChecked']) ? $context['TypeZipChecked'] : null));
        echo " /> ";
        echo getLang("ShippingZoneTypeZip");
        echo "</label>
\t\t\t\t\t\t\t\t<div id=\"ZoneTypePostCodes\" style=\"";
        // line 94
        echo twig_safe_filter((isset($context['HideZoneTypePostCodes']) ? $context['HideZoneTypePostCodes'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td rowspan=\"2\" style=\"vertical-align: top;\"><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 98
        echo getLang("Country");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"zonetype_zip_country\" id=\"zonetype_zip_country\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 101
        echo twig_safe_filter((isset($context['SingleCountrySelect']) ? $context['SingleCountrySelect'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td style=\"vertical-align: top;\">";
        // line 106
        echo getLang("ZipPostCodes");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"zonetype_zip_list\" id=\"zonetype_zip_list\" class=\"Field250\" rows=\"10\" cols=\"10\">";
        // line 108
        echo twig_safe_filter((isset($context['ZonePostCodes']) ? $context['ZonePostCodes'] : null));
        echo "</textarea><br />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 109
        echo getLang("ZipPostCodesPerLine");
        echo "<br />
\t\t\t\t\t\t\t\t\t\t\t\t<a href='#' onclick='LaunchHelp(850); return false;' target=\"_blank\">";
        // line 110
        echo getLang("LearnMoreAboutEnteringPostCodes");
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr style=\"";
        // line 118
        echo twig_safe_filter((isset($context['HideZoneEnabled']) ? $context['HideZoneEnabled'] : null));
        echo "\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 120
        echo getLang("EnableShippingZone");
        echo "?
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"zoneenabled\" id=\"zoneenabled\" ";
        // line 123
        echo twig_safe_filter((isset($context['ZoneEnabledCheck']) ? $context['ZoneEnabledCheck'] : null));
        echo " /> ";
        echo getLang("YesEnableShippingZone");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('zoneenabledhelp');\" onmouseover=\"ShowHelp('zoneenabledhelp', '";
        // line 124
        echo getLang("EnableShippingZone");
        echo "?', '";
        echo getLang("EnableShippingZoneHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"zoneenabledhelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<br />
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 132
        echo getLang("FreeShippingAndHandlingSettings");
        echo "</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 137
        echo getLang("EnableFreeShipping");
        echo "?
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"zonefreeshipping\" id=\"zonefreeshipping\" value=\"1\" onclick=\"ToggleFreeShipping(this.checked)\" ";
        // line 140
        echo twig_safe_filter((isset($context['FreeShippingChecked']) ? $context['FreeShippingChecked'] : null));
        echo " /> ";
        echo getLang("YesEnableFreeShipping");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('zonefreehelp');\" onmouseover=\"ShowHelp('zonefreehelp', '";
        // line 141
        echo getLang("EnableFreeShipping");
        echo "', '";
        echo getLang("EnableFreeShippingHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"zonefreehelp\"></div>
\t\t\t\t\t\t\t\t<div id=\"FreeShippingOptions\" style=\"";
        // line 143
        echo twig_safe_filter((isset($context['HideFreeShipping']) ? $context['HideFreeShipping'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 147
        echo getLang("OrderTotalToQualify");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 149
        echo twig_safe_filter((isset($context['LeftCurrencyToken']) ? $context['LeftCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"zonefreeshippingtotal\" id=\"zonefreeshippingtotal\" class=\"Field50\" value=\"";
        // line 150
        echo twig_safe_filter((isset($context['FreeShippingTotal']) ? $context['FreeShippingTotal'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 151
        echo twig_safe_filter((isset($context['RightCurrencyToken']) ? $context['RightCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 161
        echo getLang("HandlingFee");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" name=\"zonehandlingtype\" value=\"none\" onclick=\"ToggleHandlingType(this.value)\" ";
        // line 164
        echo twig_safe_filter((isset($context['HandlingNoneChecked']) ? $context['HandlingNoneChecked'] : null));
        echo " /> ";
        echo getLang("DoNotApplyZoneHandling");
        echo "</label>
\t\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" name=\"zonehandlingtype\" id=\"zonehandlingtype_global\" value=\"global\" onclick=\"ToggleHandlingType(this.value)\" ";
        // line 165
        echo twig_safe_filter((isset($context['HandlingGlobalChecked']) ? $context['HandlingGlobalChecked'] : null));
        echo " /> ";
        echo getLang("ApplyZoneHandling1");
        echo "</label>
\t\t\t\t\t\t\t\t<div id=\"HandlingFeeGlobal\" style=\"";
        // line 166
        echo twig_safe_filter((isset($context['HideHandlingFeeGlobal']) ? $context['HideHandlingFeeGlobal'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 171
        echo getLang("HandlingFee");
        echo ": ";
        echo twig_safe_filter((isset($context['LeftCurrencyToken']) ? $context['LeftCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"zonehandlingfee\" id=\"zonehandlingfee\" class=\"Field50\" value=\"";
        // line 172
        echo twig_safe_filter((isset($context['HandlingFee']) ? $context['HandlingFee'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 173
        echo twig_safe_filter((isset($context['RightCurrencyToken']) ? $context['RightCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" name=\"zonehandlingtype\" value=\"module\" onclick=\"ToggleHandlingType(this.value)\" ";
        // line 178
        echo twig_safe_filter((isset($context['HandlingOptionChecked']) ? $context['HandlingOptionChecked'] : null));
        echo " /> ";
        echo getLang("ApplyZoneHandling2");
        echo "</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr class=\"HandlingHide\" style=\"";
        // line 181
        echo twig_safe_filter((isset($context['HideHandlingSeparate']) ? $context['HideHandlingSeparate'] : null));
        echo "\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;";
        // line 183
        echo getLang("ShowSeparately");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"zonehandlingseparate\" id=\"zonehandlingseparate\" value=\"1\" ";
        // line 186
        echo twig_safe_filter((isset($context['HandlingSeparateChecked']) ? $context['HandlingSeparateChecked'] : null));
        echo " /> <label for=\"zonehandlingseparate\">";
        echo getLang("YesShowSeparately");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d10');\" onmouseover=\"ShowHelp('d10', '";
        // line 187
        echo getLang("ShowSeparately");
        echo "', '";
        echo getLang("ShowSeparatelyHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d10\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t</table>
\t\t\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain BottomButtons\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 197
        echo twig_safe_filter((isset($context['NextButton']) ? $context['NextButton'] : null));
        echo "\" class=\"FormButton NextButton\" />&nbsp;
\t\t\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 198
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<div id=\"div1\" style=\"display: none;\">
\t\t\t\t\t<p class=\"Intro\">
\t\t\t\t\t\t";
        // line 206
        echo getLang("ZoneShippingMethodsIntro");
        echo "\t\t\t\t\t</p>
\t\t\t\t\t";
        // line 208
        echo twig_safe_filter((isset($context['MethodsMessage']) ? $context['MethodsMessage'] : null));
        echo "
\t\t\t\t\t<p class=\"Intro\">
\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 210
        echo getLang("AddAShippingMethodButton");
        echo "\" class=\"SmallButton Field150\" onclick=\"window.location = 'index.php?ToDo=addShippingZoneMethod&amp;zoneId=";
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "';\" />
\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 211
        echo getLang("DeleteSelected");
        echo "\" class=\"SmallButton\" onclick=\"return ConfirmDeleteSelected();\" ";
        echo twig_safe_filter((isset($context['DisableDeleteMethods']) ? $context['DisableDeleteMethods'] : null));
        echo " />
\t\t\t\t\t</p>

\t\t\t\t\t<table width=\"100%\" class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" style=\"";
        // line 214
        echo twig_safe_filter((isset($context['HideShippingMethodsGrid']) ? $context['HideShippingMethodsGrid'] : null));
        echo "\">
\t\t\t\t\t\t<tr class=\"Heading3\">
\t\t\t\t\t\t\t<td style=\"text-align: center; width: 10px;\"><input type=\"checkbox\" onclick=\"\$(this.form).find('input:checkbox').not(':disabled').attr('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"width: 1px;\">&nbsp;</td>
\t\t\t\t\t\t\t<td>";
        // line 219
        echo getLang("Name");
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 220
        echo getLang("ShippingMethod");
        echo "</td>
\t\t\t\t\t\t\t<td style=\"width: 50px; text-align: center;\">";
        // line 221
        echo getLang("Status");
        echo "</td>
\t\t\t\t\t\t\t<td>";
        // line 222
        echo getLang("Action");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 224
        echo twig_safe_filter((isset($context['ShippingZoneMethods']) ? $context['ShippingZoneMethods'] : null));
        echo "
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>
<script type=\"text/javascript\">
\tfunction CheckZoneForm()
\t{
\t\tif(\$('#frmZone').attr('action').indexOf('deleteShippingZoneMethods') != -1) {
\t\t\treturn true;
\t\t}

\t\tif(!\$('#zonename').val()) {
\t\t\talert('";
        // line 240
        echo getLang("EnterShippingZoneName");
        echo "');
\t\t\t\$('#zonename').focus();
\t\t\treturn false;
\t\t}

\t\t// If not editing the default, need to check the zone type
\t\tif(\$('#ZoneTypeOptions').css('display') != 'none') {
\t\t\tif(\$('#zonetype_country').attr('checked') == true) {
\t\t\t\tif(g('zonetype_country_list').selectedIndex == -1) {
\t\t\t\t\talert('";
        // line 249
        echo getLang("SelectOneMoreZoneCountries");
        echo "');
\t\t\t\t\t\$('#zonetype_country_list').focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse if(\$('#zonetype_state').attr('checked') == true) {
\t\t\t\tif(g('StateCountries').selectedIndex == -1 || g('StateSelect').selectedIndex == -1) {
\t\t\t\t\talert('";
        // line 256
        echo getLang("SelectOneMoreZoneStates");
        echo "');
\t\t\t\t\t\$('#StateSelect').focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse if(\$('#zonetype_zip').attr('checked') == true) {
\t\t\t\tif(\$('#zonetype_zip_country').val() < 1) {
\t\t\t\t\talert('";
        // line 263
        echo getLang("SelectZoneZipCountry");
        echo "');
\t\t\t\t\t\$('#zonetype_zip_country').focus();
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(!\$('#zonetype_zip_list').val()) {
\t\t\t\t\talert('";
        // line 269
        echo getLang("EnterOneMoreZoneZipCodes");
        echo "');
\t\t\t\t\t\$('#zonetype_zip_list').focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse {
\t\t\t\talert('";
        // line 275
        echo getLang("SelectZoneType");
        echo "');
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(\$('#zonefreeshipping').attr('checked') == true) {
\t\t\tif(isNaN(priceFormat(\$('#zonefreeshippingtotal').val()))) {
\t\t\t\talert('";
        // line 282
        echo getLang("EnterValidFreeShippingTotal");
        echo "');
\t\t\t\t\$('#zonefreeshippingtotal').select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(\$('#zonehandlingtype_global').attr('checked') == true) {
\t\t\tif(isNaN(priceFormat(\$('#zonehandlingfee')))) {
\t\t\t\talert('";
        // line 290
        echo getLang("EnterValidHandlingFee");
        echo "');
\t\t\t\t\$('#zonehandlingfee').select();
\t\t\t\treturn;
\t\t\t}
\t\t}
\t\treturn true;
\t}

\tfunction UpdateZoneStateSelect()
\t{
\t\tvar options = document.getElementById('StateCountries').options;
\t\tvar selectedCount = 0;
\t\tfor(var i = 0; i < options.length; ++i) {
\t\t\tvar option = options[i];
\t\t\tvar countryId = option.value;
\t\t\tif(option.selected == true) {
\t\t\t\tif(\$('#StateSelect .country'+countryId).length == 0) {
\t\t\t\t\tLoadZoneCountryStates(countryId, option.innerHTML);
\t\t\t\t}
\t\t\t\t++selectedCount;
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#StateSelect .country'+countryId).remove();
\t\t\t\t\$('#StateSelect_old .country'+countryId).remove();
\t\t\t}
\t\t}

\t\tif(selectedCount == 0) {
\t\t\t\$('#ZoneStateSelectNone').css({width: \$('#StateSelect').width(), height: \$('#StateSelect').height()});
\t\t\t\$('#StateSelect').hide();
\t\t\t\$('#ZoneStateSelectNone').show();
\t\t}
\t\telse {
\t\t\t\$('#StateSelect').show();
\t\t\t\$('#ZoneStateSelectNone').hide();
\t\t}
\t}

\tfunction LoadZoneCountryStates(countryId, countryName) {
\t\t// Load this country in
\t\t\$.ajax({
\t\t\turl: 'remote.php?w=countryStates&c='+countryId,
\t\t\tmethod: 'GET',
\t\t\tsuccess: function(response) {
\t\t\t\tvar options = '';
\t\t\t\tif(response != '') {
\t\t\t\t\tstates = response.split(\"~\");
\t\t\t\t\tfor(i = 0; i < states.length; i++) {
\t\t\t\t\t\tvals = states[i].split(\"|\");
\t\t\t\t\t\tif(states[i].length > 0) {
\t\t\t\t\t\t\toptions += '<option value=\"'+countryId+'-'+vals[1]+'\">'+vals[0]+'</option>';
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tvar data = '<option value=\"'+countryId+'-0\">-- ";
        // line 344
        echo getLang("AllStatesProvinces");
        echo " --</option>' + options;
\t\t\t\tif(document.getElementById('StateSelect_old')) {
\t\t\t\t\t\$('#StateSelect').remove();
\t\t\t\t\t\$('#StateSelect_old').attr('id', 'StateSelect');
\t\t\t\t}
\t\t\t\t\$('#StateSelect').append('<optgroup class=\"country'+countryId+'\" label=\"'+countryName+'\">'+data+'</optgroup>');
\t\t\t\t\$('#StateSelect').css({display: 'block'});
\t\t\t\tISSelectReplacement.replace_select(document.getElementById('StateSelect'));
\t\t\t\tISSelectReplacement.scrollToItem('zonetype_states', countryId+'-0', 1);
\t\t\t}
\t\t});
\t}

\tfunction ToggleHandlingType(type)
\t{
\t\tif(type == 'global') {
\t\t\t\$('#HandlingFeeGlobal').show();
\t\t}
\t\telse {
\t\t\t\$('#HandlingFeeGlobal').hide();
\t\t}

\t\tif(type == 'none') {
\t\t\t\$('.HandlingHide').hide();
\t\t}
\t\telse {
\t\t\t\$('.HandlingHide').show();
\t\t}
\t}

\tfunction ToggleFreeShipping(state)
\t{
\t\tif(state) {
\t\t\t\$('#FreeShippingOptions').show();
\t\t}
\t\telse {
\t\t\t\$('#FreeShippingOptions').hide();
\t\t}
\t}

\tfunction ChangeZoneType(type)
\t{
\t\tswitch(type) {
\t\t\tcase \"state\":
\t\t\t\t\$('#ZoneStateSelectNone').css({width: \$('#StateSelect').css('width'), height: \$('#StateSelect').css('height')});
\t\t\t\t\$('#ZoneTypeCountry').hide();
\t\t\t\t\$('#ZoneTypeStates').show();
\t\t\t\t\$('#ZoneTypePostCodes').hide();
\t\t\t\tbreak;
\t\t\tcase \"zip\":
\t\t\t\t\$('#ZoneTypeCountry').hide();
\t\t\t\t\$('#ZoneTypeStates').hide();
\t\t\t\t\$('#ZoneTypePostCodes').show();
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\t\$('#ZoneTypeCountry').show();
\t\t\t\t\$('#ZoneTypeStates').hide();
\t\t\t\t\$('#ZoneTypePostCodes').hide();
\t\t}
\t}

\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 407
        echo getLang("ConfirmCancel");
        echo "')) {
\t\t\tif('";
        // line 408
        echo twig_safe_filter((isset($context['CurrentVendor']) ? $context['CurrentVendor'] : null));
        echo "' != 0) {
\t\t\t\twindow.location = 'index.php?ToDo=editVendor&vendorId=";
        // line 409
        echo twig_safe_filter((isset($context['CurrentVendor']) ? $context['CurrentVendor'] : null));
        echo "&currentTab=1';
\t\t\t}
\t\t\telse {
\t\t\t\twindow.location = 'index.php?ToDo=viewShippingSettings&currentTab=1';
\t\t\t}
\t\t}

\t\treturn false;
\t}

\tfunction ShowTab(T)
\t{
\t\ti = 0;
\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\tdocument.getElementById(\"currentTab\").value = T;
\t}

\tfunction ConfirmDeleteSelected()
\t{
\t\tif(!\$('.GridPanel input[type=checkbox].check:checked').length) {
\t\t\talert('";
        // line 436
        echo getLang("SelectOneMoreShippingMethodsDelete");
        echo "');
\t\t\treturn false;
\t\t}
\t\tif(confirm('";
        // line 439
        echo getLang("ConfirmDeleteShippingMethods");
        echo "')) {
\t\t\t\$('#frmZone').attr('action', 'index.php?ToDo=deleteShippingZoneMethods');
\t\t\t\$('#frmZone').submit();
\t\t}
\t\telse {
\t\t\treturn false;
\t\t}
\t}

\t\$(document).ready(function() {
\t\tif(\$('#currentTab').val()) {
\t\t\tShowTab(\$('#currentTab').val());
\t\t}
\t});
</script>";
    }

}

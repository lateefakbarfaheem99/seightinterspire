<?php

/* settings.addons.manage.tpl */
class __TwigTemplate_fe6e69736f6c2c13f7593381cd726b84 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=saveUpdatedAddonSettings\" name=\"frmAddonSettings\" id=\"frmAddonSettings\" method=\"post\" onsubmit=\"return ValidateForm(CheckAddonSettingsForm)\">
\t\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("AddonSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 10
        echo getLang("AddonSettingsIntro");
        echo "</p>
\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 13
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 14
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 22
        echo getLang("GeneralSettings");
        echo "</a></li>
\t\t\t\t\t<!-- li style=\"display:none\"><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\"></a></li -->
\t\t\t\t\t";
        // line 24
        echo twig_safe_filter((isset($context['AddonTabs']) ? $context['AddonTabs'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"storename\">";
        // line 35
        echo getLang("AddonPackages");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<select size=\"";
        // line 38
        echo twig_safe_filter((isset($context['AddonSelectBoxSize']) ? $context['AddonSelectBoxSize'] : null));
        echo "\" multiple name=\"addonpackages[]\" id=\"addonpackages\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['AddonProviders']) ? $context['AddonProviders'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 41
        echo getLang("AddonPackages");
        echo "', '";
        echo getLang("AddonPackagesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        // line 47
        echo twig_safe_filter((isset($context['AddonDivs']) ? $context['AddonDivs'] : null));
        echo "
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\" id=\"SaveCancelBottom\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"FormButton\" type=\"submit\" value=\"";
        // line 54
        echo getLang("Save");
        echo "\">
\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 55
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tvar hide_buttons_on_tabs = '";
        // line 67
        echo twig_safe_filter((isset($context['TabIdsToHideButtonsFrom']) ? $context['TabIdsToHideButtonsFrom'] : null));
        echo "';

\t\tfunction package_selected(package_id) {
\t\t\tvar ap = document.getElementById(\"addonpackages_old\");

\t\t\tfor(i = 0; i < ap.options.length; i++) {
\t\t\t\tif(ap.options[i].value == package_id && ap.options[i].selected)
\t\t\t\t\treturn true;
\t\t\t}

\t\t\treturn false;
\t\t}

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

\t\t\t// Is this a tab on which we have to hide the save/cancel buttons
\t\t\tif(hide_buttons_on_tabs.indexOf(T + '|') > -1) {
\t\t\t\t\$('#SaveCancelBottom').hide();
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#SaveCancelBottom').show();
\t\t\t}
\t\t}

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 104
        echo getLang("ConfirmCancelAddonsSettings");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewAddonSettings\";
\t\t}

\t\tfunction CheckAddonSettingsForm() {
\t\t\t";
        // line 109
        echo twig_safe_filter((isset($context['AddonJavaScript']) ? $context['AddonJavaScript'] : null));
        echo "
\t\t}

\t\t\$(document).ready(function() {
\t\t\t// Load the main addons settings tab by default
\t\t\tShowTab(";
        // line 114
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");
\t\t});


\t</script>
";
    }

}

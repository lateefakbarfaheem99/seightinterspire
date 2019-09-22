<?php

/* settings.analytics.manage.tpl */
class __TwigTemplate_312d2292b64227cfd401076d5bb3c2fa extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=saveUpdatedAnalyticsSettings\" name=\"frmAnalyticsSettings\" id=\"frmAnalyticsSettings\" method=\"post\" onsubmit=\"return ValidateForm(CheckAnalyticsSettingsForm)\">
\t\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("AnalyticsSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 10
        echo getLang("AnalyticsSettingsIntro");
        echo "\t\t\t\t</p>
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
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 21
        echo getLang("GeneralSettings");
        echo "</a></li>
\t\t\t\t\t<li style=\"display:none\"><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\"></a></li>
\t\t\t\t\t";
        // line 23
        echo twig_safe_filter((isset($context['AnalyticsTabs']) ? $context['AnalyticsTabs'] : null));
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
        // line 34
        echo getLang("AnalyticsMethods");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<select size=\"5\" multiple name=\"analyticsproviders[]\" id=\"analyticsproviders\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        echo twig_safe_filter((isset($context['AnalyticsProviders']) ? $context['AnalyticsProviders'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 40
        echo getLang("AnalyticsMethods");
        echo "', '";
        echo getLang("AnalyticsMethodsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div id=\"div1\" style=\"padding-top: 10px;\">


\t\t\t\t</div>
\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['AnalyticsDivs']) ? $context['AnalyticsDivs'] : null));
        echo "
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"FormButton\" type=\"submit\" value=\"";
        // line 57
        echo getLang("Save");
        echo "\">
\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 58
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

\t\tfunction package_selected(package_id) {
\t\t\tvar ap = document.getElementById(\"analyticsproviders_old\");

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
\t\t}

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 97
        echo getLang("ConfirmCancelAnalyticsSettings");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewAnalyticsSettings\";
\t\t}

\t\tfunction CheckAnalyticsSettingsForm() {
\t\t\t";
        // line 102
        echo twig_safe_filter((isset($context['AnalyticsJavaScript']) ? $context['AnalyticsJavaScript'] : null));
        echo "
\t\t}

\t\t// Load the main analytics settings tab by default
\t\tShowTab(";
        // line 106
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t</script>
";
    }

}

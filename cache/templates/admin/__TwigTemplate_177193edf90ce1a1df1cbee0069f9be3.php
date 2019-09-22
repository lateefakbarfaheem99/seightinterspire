<?php

/* redirects.tpl */
class __TwigTemplate_177193edf90ce1a1df1cbee0069f9be3 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("301Redirects");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 8
        echo getLang("RedirectsIntro");
        echo "</p>
\t\t\t\t<p id=\"TemplateMsgBox\">";
        // line 9
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</p>
\t\t\t\t\t<input type=\"button\" id=\"AddNewRedirectButton\" value=\"";
        // line 10
        echo getLang("AddNewRedirect");
        echo "\" /> <input type=\"button\" id=\"DeleteSelectedRedirects\" value=\"";
        echo getLang("DeleteSelected");
        echo "\" /> <input type=\"button\" id=\"ExportRedirects\" value=\"";
        echo getLang("ExportRedirects");
        echo "\"> <input type=\"button\" id=\"BulkImportRedirects\" value=\"";
        echo getLang("BulkImportRedirects");
        echo "\" /> &nbsp;<a href=\"#\" onclick=\"LaunchHelp(890);\">";
        echo getLang("LearnMoreImportingRedirects");
        echo "</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"div0\" style=\"\">
\t\t\t\t\t<div class=\"MessageBox MessageBoxInfo\" style=\"display: none;\" id=\"NoRedirects\">
\t\t\t\t\t\t";
        // line 17
        echo getLang("NoRedirects");
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<form method=\"post\" action=\"index.php?ToDo=startExport&t=redirects&tempId=4\" id=\"frmRedirects\" onsubmit=\"return false;\">
\t\t\t\t\t\t<div id=\"RedirectsTable\">

\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
<script type=\"text/javascript\" src=\"script/redirects.js?";
        // line 29
        echo twig_safe_filter((isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null));
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/linker.js?";
        // line 30
        echo twig_safe_filter((isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null));
        echo "\"></script>
<script type=\"text/javascript\">
lang.SelectRedirectsToDelete = \"";
        // line 32
        echo getLang("SelectRedirectsToDelete");
        echo "\";
lang.NoBulkImportFile = \"";
        // line 33
        echo getLang("NoBulkImportFile");
        echo "\";
lang.EnterAnOldUrl = \"";
        // line 34
        echo getLang("EnterAnOldUrl");
        echo "\";
lang.ConfirmDeleteSelected = \"";
        // line 35
        echo getLang("ConfirmDeleteSelected");
        echo "\";
lang.ConfirmDeleteRedirect = \"";
        // line 36
        echo getLang("ConfirmDeleteRedirect");
        echo "\";
lang.ClickHereToEnterAURL = \"";
        // line 37
        echo getLang("ClickHereToEnterAURL");
        echo "\";
lang.ChangeLink = \"";
        // line 38
        echo getLang("ChangeLink");
        echo "\";
\$(document).ready(function() {
\tRedirects.LoadTable();
});

</script>
";
    }

}

<?php

/* backups.manage.tpl */
class __TwigTemplate_2ab620b2dbd83426df28cd1e60eb39df extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t<form method=\"post\" action=\"index.php?ToDo=deleteBackups\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ManageLocalBackups");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo getLang("ManageLocalBackupsIntro");
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\" style=\"padding-bottom:10px\">
\t\t\t\t<input type=\"button\" name=\"CreateBackup\" value=\"";
        // line 14
        echo getLang("CreateBackup");
        echo "...\" onclick=\"createBackup()\" class=\"SmallButton\" />
\t\t\t\t &nbsp;
\t\t\t\t<input type=\"submit\" name=\"DeleteSelected\" value=\"";
        // line 16
        echo getLang("DeleteSelected");
        echo "\" onclick=\"return deleteBackups()\" class=\"SmallButton\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 23
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"\$('.DeleteBackup').attr('checked', this.checked);\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td width=\"50%\" nowrap>
\t\t\t\t\t";
        // line 29
        echo getLang("BackupFileName");
        echo "\t\t\t\t</td>
\t\t\t\t<td width=\"10%\" nowrap align=\"right\">
\t\t\t\t\t";
        // line 32
        echo getLang("BackupSize");
        echo "\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 35
        echo getLang("BackupMTime");
        echo "\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 38
        echo getLang("Action");
        echo "\t\t\t\t</td>

\t\t\t</tr>
\t\t\t";
        // line 42
        echo twig_safe_filter((isset($context['BackupGrid']) ? $context['BackupGrid'] : null));
        echo "
\t\t\t</table>
\t\t</td></tr>
\t</table>
\t</form>
\t</div>
\t<script type=\"text/javascript\">
\t\tfunction createBackup() {
\t\t\twindow.location = 'index.php?ToDo=createBackup';
\t\t}

\t\tfunction deleteBackups() {
\t\t\tif(\$(\".DeleteBackup:checked\").length == 0)
\t\t\t{
\t\t\t\talert('";
        // line 56
        echo getLang("NoBackupsSelected");
        echo "');
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Otherwise confirm?
\t\t\tif(confirm('";
        // line 61
        echo getLang("ConfirmDeleteBackups");
        echo "'))
\t\t\t{
\t\t\t\treturn true;
\t\t\t}

\t\t\treturn false;
\t\t}
\t</script>";
    }

}

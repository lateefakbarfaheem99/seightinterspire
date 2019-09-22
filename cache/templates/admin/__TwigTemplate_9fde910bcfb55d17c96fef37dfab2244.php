<?php

/* logs.system.grid.tpl */
class __TwigTemplate_9fde910bcfb55d17c96fef37dfab2244 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form method=\"post\" id=\"LogForm\" action=\"index.php?ToDo=systemLog\" onsubmit=\"return SearchSystemLog(this);\">
\t<input type=\"hidden\" name=\"SortURL\" id=\"SortURL\" value=\"index.php?ToDo=systemLogGrid";
        // line 2
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"CurrentTab\" id=\"CurrentTab1\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" />
\t<table id=\"SystemLogOptions\" class=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Intro\" style=\"padding-top: 10px;\">
\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 7
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo "  />
\t\t\t\t<input type=\"button\" name=\"DeleteAll\" value=\"";
        // line 8
        echo getLang("DeleteAll");
        echo "\" class=\"SmallButton\" onclick=\"ConfirmDeleteAll()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo "  />
\t\t\t</td>
\t\t\t<td align=\"right\" nowrap=\"nowrap\" style=\"padding-top: 10px;\">
\t\t\t\t<select name=\"severity\" id=\"logSeverity\">
\t\t\t\t\t<option value=\"0\">";
        // line 12
        echo getLang("LogAllSeverities");
        echo "</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 13
        echo twig_safe_filter((isset($context['Severity1Selected']) ? $context['Severity1Selected'] : null));
        echo ">";
        echo getLang("LogSeverity1");
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 14
        echo twig_safe_filter((isset($context['Severity2Selected']) ? $context['Severity2Selected'] : null));
        echo ">";
        echo getLang("LogSeverity2");
        echo "</option>
\t\t\t\t\t<option value=\"3\" ";
        // line 15
        echo twig_safe_filter((isset($context['Severity3Selected']) ? $context['Severity3Selected'] : null));
        echo ">";
        echo getLang("LogSeverity3");
        echo "</option>
\t\t\t\t\t<option value=\"4\" ";
        // line 16
        echo twig_safe_filter((isset($context['Severity4Selected']) ? $context['Severity4Selected'] : null));
        echo ">";
        echo getLang("LogSeverity4");
        echo "</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\t<select name=\"logtype\" id=\"logType\">
\t\t\t\t\t<option value=\"\">";
        // line 20
        echo getLang("LogAllTypes");
        echo "</option>
\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['LogSearchTypeSelect']) ? $context['LogSearchTypeSelect'] : null));
        echo "
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\t<input type=\"text\" id=\"logSummary\" class=\"Button\" value=\"";
        // line 24
        echo twig_safe_filter((isset($context['SummaryValue']) ? $context['SummaryValue'] : null));
        echo "\" size=\"20\" />
\t\t\t</td>
\t\t\t<td width=\"1\" style=\"padding-left: 5px;\">
\t\t\t\t<input id=\"SearchButton\" type=\"image\" border=\"0\" style=\"vertical-align: middle;\" src=\"images/searchicon.gif\" name=\"SearchButton\" />
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>&nbsp;</td>
\t\t\t<td align=\"right\">
\t\t\t\t<a href=\"index.php?ToDo=systemLog\" style=\"display: ";
        // line 33
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\" id=\"SearchClearButton\" onclick=\"return ClearSystemResults(this);\">";
        echo getLang("ClearResults");
        echo "</a>
\t\t\t</td>
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t</table>
\t<table class=\"GridPanel SortableGrid\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\" style=\"width:100%;\">
\t\t<tr align=\"right\">
\t\t\t<td colspan=\"8\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t";
        // line 41
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr class=\"Heading3\">
\t\t\t<td align=\"center\" width=\"1\"><input type=\"checkbox\" onclick=\"\$(this).parents('form').find('input[type=checkbox]').attr('checked', this.checked);\"></td>
\t\t\t<td colspan=\"2\">
\t\t\t\t";
        // line 48
        echo getLang("LogSeverity");
        echo " &nbsp;
\t\t\t\t";
        // line 49
        echo twig_safe_filter((isset($context['SortLinksSeverity']) ? $context['SortLinksSeverity'] : null));
        echo "
\t\t\t</td>
\t\t\t<td>&nbsp;</td>
\t\t\t<td>
\t\t\t\t";
        // line 53
        echo getLang("LogType");
        echo " &nbsp;
\t\t\t\t";
        // line 54
        echo twig_safe_filter((isset($context['SortLinksType']) ? $context['SortLinksType'] : null));
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 57
        echo getLang("LogModule");
        echo " &nbsp;
\t\t\t\t";
        // line 58
        echo twig_safe_filter((isset($context['SortLinksModule']) ? $context['SortLinksModule'] : null));
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 61
        echo getLang("LogSummary");
        echo " &nbsp;
\t\t\t\t";
        // line 62
        echo twig_safe_filter((isset($context['SortLinksSummary']) ? $context['SortLinksSummary'] : null));
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 65
        echo getLang("Date");
        echo " &nbsp;
\t\t\t\t";
        // line 66
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 69
        echo twig_safe_filter((isset($context['LogGrid']) ? $context['LogGrid'] : null));
        echo "
\t\t<tr align=\"right\">
\t\t\t<td colspan=\"8\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t";
        // line 72
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t</table>
</form>";
    }

}

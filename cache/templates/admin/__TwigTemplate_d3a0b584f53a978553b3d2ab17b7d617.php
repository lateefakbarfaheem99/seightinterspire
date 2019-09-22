<?php

/* redirects.grid.tpl */
class __TwigTemplate_d3a0b584f53a978553b3d2ab17b7d617 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t<tr align=\"right\">
\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['RedirectPaging']) ? $context['RedirectPaging'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr class=\"Heading3 RedirectsHeadingRow\" id=\"RedirectsHeadingRow\">
\t\t<td align=\"center\"><input type=\"checkbox\" id=\"RedirectsMasterCheckbox\"></td>
\t\t<td>";
        // line 9
        echo twig_safe_filter((isset($context['SortLinksRedirectId']) ? $context['SortLinksRedirectId'] : null));
        echo "</td>
\t\t<td style=\"width:40%;\">
\t\t\t<span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 11
        echo getLang("RedirectOldURL");
        echo "', '";
        echo getLang("RedirectOldURLHelp");
        echo "')\">";
        echo getLang("RedirectOldURL");
        echo "</span>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SortLinksOldUrl']) ? $context['SortLinksOldUrl'] : null));
        echo "

\t\t</td>
\t\t<td style=\"width:80px;\">
\t\t\t<span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 16
        echo getLang("RedirectType");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("RedirectTypeHelp"), "'");
        echo "')\">";
        echo getLang("RedirectType");
        echo "</span>
\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['SortLinksNewUrl']) ? $context['SortLinksNewUrl'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width:35%;\">
\t\t\t";
        // line 20
        echo getLang("RedirectNewURL");
        echo " &nbsp;
\t\t</td>
\t\t<td>
\t\t\t";
        // line 23
        echo getLang("Action");
        echo "\t\t</td>
\t</tr>
\t";
        // line 26
        echo twig_safe_filter((isset($context['RedirectsGrid']) ? $context['RedirectsGrid'] : null));
        echo "
\t<tr align=\"right\">
\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['RedirectPaging']) ? $context['RedirectPaging'] : null));
        echo "
\t\t</td>
\t</tr>
</table>
";
    }

}

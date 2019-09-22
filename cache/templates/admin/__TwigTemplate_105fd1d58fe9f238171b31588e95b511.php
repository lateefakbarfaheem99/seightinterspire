<?php

/* news.manage.grid.tpl */
class __TwigTemplate_105fd1d58fe9f238171b31588e95b511 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%; margin-top:10px\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 11
        echo getLang("NewsTitle");
        echo " &nbsp;
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SortLinksTitle']) ? $context['SortLinksTitle'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 15
        echo getLang("Date");
        echo " &nbsp;
\t\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:70px;\">
\t\t\t\t\t";
        // line 19
        echo getLang("Visible");
        echo " &nbsp;
\t\t\t\t\t";
        // line 20
        echo twig_safe_filter((isset($context['SortLinksVisible']) ? $context['SortLinksVisible'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:100px;\">
\t\t\t\t\t";
        // line 23
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['NewsGrid']) ? $context['NewsGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

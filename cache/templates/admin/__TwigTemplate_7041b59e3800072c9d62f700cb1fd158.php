<?php

/* news.manage.grid.tpl */
class __TwigTemplate_7041b59e3800072c9d62f700cb1fd158 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%; margin-top:10px\">

\t\t\t\t<tr align=\"right\">

\t\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">

\t\t\t\t\t\t";
        // line 7
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "

\t\t\t\t\t</td>

\t\t\t\t</tr>

\t\t\t<tr class=\"Heading3\">

\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>

\t\t\t\t<td>&nbsp;</td>

\t\t\t\t<td>

\t\t\t\t\t";
        // line 21
        echo getLang("NewsTitle");
        echo " &nbsp;

\t\t\t\t\t";
        // line 23
        echo twig_safe_filter((isset($context['SortLinksTitle']) ? $context['SortLinksTitle'] : null));
        echo "

\t\t\t\t</td>

\t\t\t\t<td>
\t\t\t\t\tTotal Thumbnails &nbsp;
\t\t\t\t\t<!--";
        // line 29
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "-->
\t\t\t\t</td>
\t\t\t\t<td>

\t\t\t\t\t";
        // line 33
        echo getLang("Date");
        echo " &nbsp;

\t\t\t\t\t";
        // line 35
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "

\t\t\t\t</td>

\t\t\t\t<td style=\"width:70px;\">

\t\t\t\t\t";
        // line 41
        echo getLang("Visible");
        echo " &nbsp;

\t\t\t\t\t";
        // line 43
        echo twig_safe_filter((isset($context['SortLinksVisible']) ? $context['SortLinksVisible'] : null));
        echo "

\t\t\t\t</td>

\t\t\t\t<td style=\"width:100px;\">

\t\t\t\t\t";
        // line 49
        echo getLang("Action");
        echo "
\t\t\t\t</td>

\t\t\t</tr>

\t\t\t";
        // line 55
        echo twig_safe_filter((isset($context['NewsGrid']) ? $context['NewsGrid'] : null));
        echo "

\t\t\t<tr align=\"right\">

\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">

\t\t\t\t\t";
        // line 61
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "

\t\t\t\t</td>

\t\t\t</tr>

\t\t</table>";
    }

}

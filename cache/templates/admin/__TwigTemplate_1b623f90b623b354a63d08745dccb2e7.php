<?php

/* reviews.manage.grid.tpl */
class __TwigTemplate_1b623f90b623b354a63d08745dccb2e7 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\" style=\"width:18px\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td style=\"width:25%\">
\t\t\t\t\t";
        // line 11
        echo getLang("ReviewTitle");
        echo " &nbsp;
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SortLinksReview']) ? $context['SortLinksReview'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 15
        echo getLang("Product");
        echo " &nbsp;
\t\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>

\t\t\t\t\t";
        // line 20
        echo getLang("Rating");
        echo " &nbsp;
\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['SortLinksRating']) ? $context['SortLinksRating'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 24
        echo getLang("PostedBy");
        echo " &nbsp;
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['SortLinksBy']) ? $context['SortLinksBy'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 28
        echo getLang("Date");
        echo " &nbsp;
\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:70px\">
\t\t\t\t\t";
        // line 32
        echo getLang("Status");
        echo " &nbsp;
\t\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['SortLinksStatus']) ? $context['SortLinksStatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:80px\">
\t\t\t\t\t";
        // line 36
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['ReviewGrid']) ? $context['ReviewGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 42
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<a href=\"?searchQuery=";
        // line 46
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "&amp;page=";
        echo twig_safe_filter((isset($context['Page']) ? $context['Page'] : null));
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" id=\"ReviewSortURL\"></a>";
    }

}

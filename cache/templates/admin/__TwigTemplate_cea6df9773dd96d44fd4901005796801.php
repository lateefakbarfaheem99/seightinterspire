<?php

/* reviews.manage.row.tpl */
class __TwigTemplate_cea6df9773dd96d44fd4901005796801 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t<td align=\"center\" style=\"width:18px\"><input type=\"checkbox\" name=\"reviews[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['ReviewId']) ? $context['ReviewId'] : null));
        echo "\"></td>
\t\t<td align=\"center\" style=\"width:18px;\">
\t\t\t<img src='images/review.gif' width=\"20\" height=\"20\" />
\t\t</td>
\t\t<td class=\"";
        // line 7
        echo twig_safe_filter((isset($context['SortedFieldReviewClass']) ? $context['SortedFieldReviewClass'] : null));
        echo "\">
\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['ReviewTitle']) ? $context['ReviewTitle'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 10
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t\t<a href=\"";
        // line 11
        echo twig_safe_filter((isset($context['ProdLink']) ? $context['ProdLink'] : null));
        echo "\" target=\"_blank\">";
        echo twig_safe_filter((isset($context['ProdName']) ? $context['ProdName'] : null));
        echo "</a>
\t\t</td>
\t\t<td class=\"";
        // line 13
        echo twig_safe_filter((isset($context['SortedFieldRatingClass']) ? $context['SortedFieldRatingClass'] : null));
        echo "\">
\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['Rating']) ? $context['Rating'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 16
        echo twig_safe_filter((isset($context['SortedFieldByClass']) ? $context['SortedFieldByClass'] : null));
        echo "\">
\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['PostedBy']) ? $context['PostedBy'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 19
        echo twig_safe_filter((isset($context['SortedFieldDateClass']) ? $context['SortedFieldDateClass'] : null));
        echo "\">
\t\t\t";
        // line 20
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 22
        echo twig_safe_filter((isset($context['SortedFieldStatusClass']) ? $context['SortedFieldStatusClass'] : null));
        echo "\">
\t\t\t";
        // line 23
        echo twig_safe_filter((isset($context['Status']) ? $context['Status'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['PreviewLink']) ? $context['PreviewLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
\t\t\t";
        // line 27
        echo twig_safe_filter((isset($context['EditLink']) ? $context['EditLink'] : null));
        echo "
\t\t</td>
\t</tr>";
    }

}

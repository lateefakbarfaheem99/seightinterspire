<?php

/* page.manage.row.tpl */
class __TwigTemplate_8a9508c318ba209a5b9c3227456fba5e extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t\t<li id=\"ele-";
        echo twig_safe_filter((isset($context['PageId']) ? $context['PageId'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['SortableClass']) ? $context['SortableClass'] : null));
        echo "\">
\t\t\t\t\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t\t\t\t\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t\t\t\t\t\t<td width=\"1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"page[]\" value=\"";
        // line 5
        echo twig_safe_filter((isset($context['PageId']) ? $context['PageId'] : null));
        echo "\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"150\" style=\"";
        // line 7
        echo twig_safe_filter((isset($context['HideVendorColumn']) ? $context['HideVendorColumn'] : null));
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['VendorName']) ? $context['VendorName'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"";
        // line 10
        echo twig_safe_filter((isset($context['SortableDragClass']) ? $context['SortableDragClass'] : null));
        echo " ";
        echo twig_safe_filter((isset($context['SortedFieldTitleClass']) ? $context['SortedFieldTitleClass'] : null));
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"120\" class=\"HideOnDrag ";
        // line 13
        echo twig_safe_filter((isset($context['SortedFieldTypeClass']) ? $context['SortedFieldTypeClass'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['Type']) ? $context['Type'] : null));
        echo "</td>
\t\t\t\t\t\t\t<td width=\"80\" class=\"HideOnDrag ";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldVisibleClass']) ? $context['SortedFieldVisibleClass'] : null));
        echo "\" align=\"center\">";
        echo twig_safe_filter((isset($context['Visible']) ? $context['Visible'] : null));
        echo "</td>
\t\t\t\t\t\t\t<td width=\"80\" class=\"HideOnDrag\">
\t\t\t\t\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['PreviewPageLink']) ? $context['PreviewPageLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['EditPageLink']) ? $context['EditPageLink'] : null));
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['SubPages']) ? $context['SubPages'] : null));
        echo "
\t\t\t\t</li>";
    }

}

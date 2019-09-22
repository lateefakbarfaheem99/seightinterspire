<?php

/* product.variations.manage.row.tpl */
class __TwigTemplate_bd8bb2ef20dd68132f10f9ab179f9660 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr id=\"tr";
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t<td align=\"center\" style=\"width:25px\">
\t\t<input type=\"checkbox\" name=\"variations[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "\">
\t</td>
\t<td align=\"center\" style=\"width:20px\">
\t\t<img src=\"images/product_variation.gif\" alt=\"product\" height=\"16\" width=\"16\" />
\t</td>
\t<td class=\"";
        // line 8
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Name']) ? $context['Name'] : null));
        echo "
\t</td>
\t<td class=\"";
        // line 11
        echo twig_safe_filter((isset($context['SortedFieldOptionsClass']) ? $context['SortedFieldOptionsClass'] : null));
        echo "\">
\t\t";
        // line 12
        echo twig_safe_filter((isset($context['NumOptions']) ? $context['NumOptions'] : null));
        echo "
\t</td>
\t<td class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldOptionsClass']) ? $context['SortedFieldOptionsClass'] : null));
        echo "\">
\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Edit']) ? $context['Edit'] : null));
        echo "
\t</td>
</tr>";
    }

}

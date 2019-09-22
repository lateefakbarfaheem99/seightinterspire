<?php

/* logs.system.row.tpl */
class __TwigTemplate_2f312ecacf25d4997692d8626d2590b9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<tr id=\"tr";
        echo twig_safe_filter((isset($context['LogId']) ? $context['LogId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t\t\t<td width=\"1\">
\t\t\t\t\t<input type=\"checkbox\" class=\"DeleteCheck\" name=\"delete[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['LogId']) ? $context['LogId'] : null));
        echo "\" />
\t\t\t\t</td>
\t\t\t\t<td width=\"1\">
\t\t\t\t\t<img src=\"images/log_";
        // line 6
        echo twig_safe_filter((isset($context['SeverityClass']) ? $context['SeverityClass'] : null));
        echo ".gif\" alt=\"\" />
\t\t\t\t</td>
\t\t\t\t<td width=\"80\" class=\"";
        // line 8
        echo twig_safe_filter((isset($context['SeverityClass']) ? $context['SeverityClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Severity']) ? $context['Severity'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td align=\"center\" style=\"width:15px\">
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['ExpandLink']) ? $context['ExpandLink'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldTypeClass']) ? $context['SortedFieldTypeClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Type']) ? $context['Type'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 17
        echo twig_safe_filter((isset($context['SortedFieldModuleClass']) ? $context['SortedFieldModuleClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['Module']) ? $context['Module'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 20
        echo twig_safe_filter((isset($context['SortedFieldSummaryClass']) ? $context['SortedFieldSummaryClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['Summary']) ? $context['Summary'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"150\" class=\"";
        // line 23
        echo twig_safe_filter((isset($context['SortedFieldDateClass']) ? $context['SortedFieldDateClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 24
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr id=\"trQ";
        // line 27
        echo twig_safe_filter((isset($context['LogId']) ? $context['LogId'] : null));
        echo "\" style=\"display:none\">
\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t&nbsp;
\t\t\t\t</td>
\t\t\t\t<td colspan=\"4\" id=\"tdQ";
        // line 31
        echo twig_safe_filter((isset($context['LogId']) ? $context['LogId'] : null));
        echo "\" class=\"QuickView\">
\t\t\t\t</td>
\t\t\t\t<td colspan=\"2\">&nbsp;</td>
\t\t\t</tr>";
    }

}

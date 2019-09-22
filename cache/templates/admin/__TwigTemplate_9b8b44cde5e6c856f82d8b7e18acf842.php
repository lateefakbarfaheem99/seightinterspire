<?php

/* Snippets/DashboardPerformanceIndicators.html */
class __TwigTemplate_9b8b44cde5e6c856f82d8b7e18acf842 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table>
\t<thead>
\t\t<tr>
\t\t\t<th class=\"First\">&nbsp;</th>
\t\t\t<th class=\"Second LastPeriodStats\" title=\"";
        // line 5
        echo twig_safe_filter((isset($context['LastPeriodDateRange']) ? $context['LastPeriodDateRange'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['LastPeriodHeader']) ? $context['LastPeriodHeader'] : null));
        echo "</th>
\t\t\t<th title=\"";
        // line 6
        echo twig_safe_filter((isset($context['ThisPeriodDateRange']) ? $context['ThisPeriodDateRange'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['ThisPeriodHeader']) ? $context['ThisPeriodHeader'] : null));
        echo "</th>
\t\t\t<th>% Change</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<th>Revenue:</th>
\t\t\t<td class=\"First LastPeriodStats\">";
        // line 13
        echo twig_safe_filter((isset($context['LastPeriodRevenue']) ? $context['LastPeriodRevenue'] : null));
        echo "</td>
\t\t\t<td>";
        // line 14
        echo twig_safe_filter((isset($context['ThisPeriodRevenue']) ? $context['ThisPeriodRevenue'] : null));
        echo "</td>
\t\t\t<td class=\"PerformanceIndicator";
        // line 15
        echo twig_safe_filter((isset($context['TotalRevenueChangeClass']) ? $context['TotalRevenueChangeClass'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['TotalRevenueChange']) ? $context['TotalRevenueChange'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>New Orders:</th>
\t\t\t<td class=\"First LastPeriodStats\">";
        // line 19
        echo twig_safe_filter((isset($context['LastPeriodNumOrders']) ? $context['LastPeriodNumOrders'] : null));
        echo "</td>
\t\t\t<td>";
        // line 20
        echo twig_safe_filter((isset($context['ThisPeriodNumOrders']) ? $context['ThisPeriodNumOrders'] : null));
        echo "</td>
\t\t\t<td class=\"PerformanceIndicator";
        // line 21
        echo twig_safe_filter((isset($context['NumOrdersChangeClass']) ? $context['NumOrdersChangeClass'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['NumOrdersChange']) ? $context['NumOrdersChange'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr style=\"";
        // line 23
        echo twig_safe_filter((isset($context['HideVisitorStats']) ? $context['HideVisitorStats'] : null));
        echo "\">
\t\t\t<th>Visitors:</th>
\t\t\t<td class=\"First LastPeriodStats\">";
        // line 25
        echo twig_safe_filter((isset($context['LastPeriodNumVisitors']) ? $context['LastPeriodNumVisitors'] : null));
        echo "</td>
\t\t\t<td>";
        // line 26
        echo twig_safe_filter((isset($context['ThisPeriodNumVisitors']) ? $context['ThisPeriodNumVisitors'] : null));
        echo "</td>
\t\t\t<td class=\"PerformanceIndicator";
        // line 27
        echo twig_safe_filter((isset($context['NumVisitorsChangeClass']) ? $context['NumVisitorsChangeClass'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['NumVisitorsChange']) ? $context['NumVisitorsChange'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr style=\"";
        // line 29
        echo twig_safe_filter((isset($context['HideConversionRate']) ? $context['HideConversionRate'] : null));
        echo "\">
\t\t\t<th>Conversion Rate:</th>
\t\t\t<td class=\"First LastPeriodStats\">";
        // line 31
        echo twig_safe_filter((isset($context['LastPeriodConversionRate']) ? $context['LastPeriodConversionRate'] : null));
        echo "%</td>
\t\t\t<td>";
        // line 32
        echo twig_safe_filter((isset($context['ThisPeriodConversionRate']) ? $context['ThisPeriodConversionRate'] : null));
        echo "%</td>
\t\t\t<td class=\"PerformanceIndicator";
        // line 33
        echo twig_safe_filter((isset($context['ConversionChangeClass']) ? $context['ConversionChangeClass'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['ConversionChange']) ? $context['ConversionChange'] : null));
        echo "</td>
\t\t</tr>
\t</tbody>
</table>";
    }

}

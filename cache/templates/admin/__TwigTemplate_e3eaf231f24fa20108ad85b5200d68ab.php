<?php

/* Snippets/DashboardOrderBreakdownGraphRow.html */
class __TwigTemplate_e3eaf231f24fa20108ad85b5200d68ab extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<li style=\"width: ";
        echo twig_safe_filter((isset($context['GraphItemWidth']) ? $context['GraphItemWidth'] : null));
        echo "%\" title=\"";
        echo twig_safe_filter((isset($context['GraphDateTitle']) ? $context['GraphDateTitle'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['GraphRangeLabelClass']) ? $context['GraphRangeLabelClass'] : null));
        echo "\">
\t<div style=\"";
        // line 2
        echo twig_safe_filter((isset($context['HideInsideRangeLabels']) ? $context['HideInsideRangeLabels'] : null));
        echo "\" class=\"InsideRangeLabel\">
\t\t<em>";
        // line 3
        echo twig_safe_filter((isset($context['GraphDataRevenue']) ? $context['GraphDataRevenue'] : null));
        echo " (";
        echo twig_safe_filter((isset($context['GraphDataNumOrders']) ? $context['GraphDataNumOrders'] : null));
        echo ")</em>
\t\t<span>
\t\t\t";
        // line 5
        echo twig_safe_filter((isset($context['GraphDateLabel']) ? $context['GraphDateLabel'] : null));
        echo "
\t\t</span>
\t</div>
\t<div style=\"";
        // line 8
        echo twig_safe_filter((isset($context['HideOutsideRangeLabels']) ? $context['HideOutsideRangeLabels'] : null));
        echo "\" class=\"OutsideRangeLabel\">
\t\t<span>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['GraphDateLabel']) ? $context['GraphDateLabel'] : null));
        echo "
\t\t</span>
\t\t<em>";
        // line 12
        echo twig_safe_filter((isset($context['GraphDataRevenue']) ? $context['GraphDataRevenue'] : null));
        echo " (";
        echo twig_safe_filter((isset($context['GraphDataNumOrders']) ? $context['GraphDataNumOrders'] : null));
        echo ")</em>
\t</div>
</li>";
    }

}

<?php

/* customer.quickorder.tpl */
class __TwigTemplate_c0b983e8f597559db451b860c2b2ab29 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"1\">
\t<tr>
\t\t<td valign=\"top\">
\t\t\t<h5 style=\"margin: 0pt 10pt 5pt 0pt; display: inline;\">";
        // line 4
        echo getLang("OrderNo");
        echo twig_safe_filter((isset($context['OrderPrefix']) ? $context['OrderPrefix'] : null));
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "</h5>";
        echo twig_safe_filter((isset($context['OrderViewLink']) ? $context['OrderViewLink'] : null));
        echo "<br />
\t\t\t<table width=\"95%\" border=\"0\" align=\"right\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"50%\" class=\"text\">";
        // line 7
        echo getLang("OrderStatus");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">";
        // line 8
        echo twig_safe_filter((isset($context['OrderStatus']) ? $context['OrderStatus'] : null));
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\">";
        // line 11
        echo getLang("OrderTotal");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">";
        // line 12
        echo twig_safe_filter((isset($context['OrderTotal']) ? $context['OrderTotal'] : null));
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" valign=\"top\">";
        // line 15
        echo getLang("OrderDate1");
        echo ":</td>
\t\t\t\t\t<td class=\"text\">";
        // line 16
        echo twig_safe_filter((isset($context['OrderDate']) ? $context['OrderDate'] : null));
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
</table>
<br />";
    }

}

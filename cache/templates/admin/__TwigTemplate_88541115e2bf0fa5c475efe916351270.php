<?php

/* shippingzone.form.method.tpl */
class __TwigTemplate_88541115e2bf0fa5c475efe916351270 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow\" onmouseover=\"\$(this).addClass('GridRowOver');\" onmouseout=\"\$(this).removeClass('GridRowOver');\">
\t<td style=\"text-align: center; width: 1px;\"><input type=\"checkbox\" name=\"methods[]\" class=\"check\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['MethodId']) ? $context['MethodId'] : null));
        echo "\" /></td>
\t<td><img src=\"images/shippingmethod.gif\" alt=\"\" /></td>
\t<td>";
        // line 4
        echo twig_safe_filter((isset($context['MethodName']) ? $context['MethodName'] : null));
        echo "</td>
\t<td>";
        // line 5
        echo twig_safe_filter((isset($context['MethodModule']) ? $context['MethodModule'] : null));
        echo "</td>
\t<td style=\"text-align: center;\">";
        // line 6
        echo twig_safe_filter((isset($context['MethodStatus']) ? $context['MethodStatus'] : null));
        echo "</td>
\t<td style=\"width: 200px;\">
\t\t<a href=\"index.php?ToDo=editShippingZoneMethod&amp;methodId=";
        // line 8
        echo twig_safe_filter((isset($context['MethodId']) ? $context['MethodId'] : null));
        echo "\">";
        echo getLang("Edit");
        echo "</a>
\t\t<a href=\"#\" onclick=\"openwin('index.php?ToDo=testShippingProvider&methodId=";
        // line 9
        echo twig_safe_filter((isset($context['MethodId']) ? $context['MethodId'] : null));
        echo "', ";
        echo twig_safe_filter((isset($context['MethodId']) ? $context['MethodId'] : null));
        echo ", 550, ";
        echo twig_safe_filter((isset($context['TestQuoteHeight']) ? $context['TestQuoteHeight'] : null));
        echo "); return false;\" style=\"";
        echo twig_safe_filter((isset($context['HideTestQuoteLink']) ? $context['HideTestQuoteLink'] : null));
        echo "\">";
        echo getLang("GetQuote");
        echo "</a>
\t</td>
</tr>";
    }

}

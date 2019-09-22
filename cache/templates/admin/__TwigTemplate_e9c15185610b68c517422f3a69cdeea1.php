<?php

/* module.propertysheet.tpl */
class __TwigTemplate_e9c15185610b68c517422f3a69cdeea1 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div style=\"padding:0px 0px 5px 10px\" class=\"Text\">";
        echo twig_safe_filter((isset($context['HelpText']) ? $context['HelpText'] : null));
        echo "</div>
<table width=\"100%\" class=\"Panel\">
<tr style=\"";
        // line 3
        echo twig_safe_filter((isset($context['HideHeaderRow']) ? $context['HideHeaderRow'] : null));
        echo "\">
\t<td class=\"Heading2\" colspan=\"2\">";
        // line 4
        echo twig_safe_filter((isset($context['ShipperId']) ? $context['ShipperId'] : null));
        echo " ";
        echo getLang("Settings");
        echo "</td>
</tr>
";
        // line 6
        echo twig_safe_filter((isset($context['Properties']) ? $context['Properties'] : null));
        echo "
</table>

";
    }

}

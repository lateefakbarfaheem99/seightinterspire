<?php

/* shippingzones.manage.grid.tpl */
class __TwigTemplate_1829273c862b340ad52b6c861773c90f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\">
\t<tr style=\"";
        // line 2
        echo twig_safe_filter((isset($context['HidePaging']) ? $context['HidePaging'] : null));
        echo "\">
\t\t<td colspan=\"6\" style=\"text-align: right; padding: 6px 0;\" class=\"PagingNav\">
\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr class=\"Heading3\">
\t\t<td style=\"text-align: center; width: 10px;\"><input type=\"checkbox\" onclick=\"\$(this.form).find('input:checkbox').not(':disabled').attr('checked', this.checked);\" /></td>
\t\t<td style=\"width: 10px;\">&nbsp;</td>
\t\t<td>";
        // line 10
        echo getLang("ZoneName");
        echo "</td>
\t\t<td style=\"width: 120px;\">";
        // line 11
        echo getLang("ZoneType");
        echo "</td>
\t\t<td style=\"width: 50px; text-align: center;\">";
        // line 12
        echo getLang("Status");
        echo "</td>
\t\t<td style=\"width: 220px;\">";
        // line 13
        echo getLang("Action");
        echo "</td>
\t</tr>
\t";
        // line 15
        echo twig_safe_filter((isset($context['ZonesGrid']) ? $context['ZonesGrid'] : null));
        echo "
\t<tr>
\t\t<td colspan=\"6\" style=\"text-align: right; padding: 6px 0;\" class=\"PagingNav\">
\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t</td>
\t</tr>
</table>";
    }

}

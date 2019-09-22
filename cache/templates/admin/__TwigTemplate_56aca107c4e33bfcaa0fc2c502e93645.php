<?php

/* shippingzones.manage.row.tpl */
class __TwigTemplate_56aca107c4e33bfcaa0fc2c502e93645 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"";
        echo twig_safe_filter((isset($context['ZoneClass']) ? $context['ZoneClass'] : null));
        echo "\" onmouseover=\"\$(this).addClass('";
        echo twig_safe_filter((isset($context['ZoneClass']) ? $context['ZoneClass'] : null));
        echo "Over');\" onmouseout=\"\$(this).removeClass('";
        echo twig_safe_filter((isset($context['ZoneClass']) ? $context['ZoneClass'] : null));
        echo "Over');\">
\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"check\" ";
        // line 2
        echo twig_safe_filter((isset($context['ZoneDeleteCheckbox']) ? $context['ZoneDeleteCheckbox'] : null));
        echo " name=\"zones[]\" value=\"";
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "\" /></td>
\t<td><img src=\"images/zone.gif\" alt=\"\" /></td>
\t<td>";
        // line 4
        echo twig_safe_filter((isset($context['ZoneName']) ? $context['ZoneName'] : null));
        echo "</td>
\t<td>";
        // line 5
        echo twig_safe_filter((isset($context['ZoneType']) ? $context['ZoneType'] : null));
        echo "</td>
\t<td style=\"text-align: center;\">";
        // line 6
        echo twig_safe_filter((isset($context['ZoneStatus']) ? $context['ZoneStatus'] : null));
        echo "</td>
\t<td>
\t\t<a href=\"index.php?ToDo=editShippingZone&amp;zoneId=";
        // line 8
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "\">";
        echo getLang("EditSettings");
        echo "</a>
\t\t<a href=\"index.php?ToDo=editShippingZone&amp;zoneId=";
        // line 9
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "&amp;currentTab=1\">";
        echo getLang("EditMethods");
        echo "</a>
\t\t<a href=\"index.php?ToDo=copyShippingZone&amp;zoneId=";
        // line 10
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "\">";
        echo getLang("Copy");
        echo "</a>
\t\t<a href=\"index.php?ToDo=deleteShippingZones&amp;zones[]=";
        // line 11
        echo twig_safe_filter((isset($context['ZoneId']) ? $context['ZoneId'] : null));
        echo "\" onclick=\"return ConfirmDeleteZone();\" style=\"";
        echo twig_safe_filter((isset($context['HideDeleteZone']) ? $context['HideDeleteZone'] : null));
        echo "\">";
        echo getLang("Delete");
        echo "</a>
\t</td>
</tr>";
    }

}

<?php

/* user.manage.grid.tpl */
class __TwigTemplate_9c535c335115bc0443b9948b442faed6 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%; display: ";
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"8\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 11
        echo getLang("UserName1");
        echo " &nbsp;
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SortLinksUser']) ? $context['SortLinksUser'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:30%\">
\t\t\t\t\t";
        // line 15
        echo getLang("Name");
        echo " &nbsp;
\t\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 19
        echo getLang("UserEmail");
        echo " &nbsp;
\t\t\t\t\t";
        // line 20
        echo twig_safe_filter((isset($context['SortLinksEmail']) ? $context['SortLinksEmail'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width: 150px; ";
        // line 22
        echo twig_safe_filter((isset($context['HideVendorColumn']) ? $context['HideVendorColumn'] : null));
        echo "\">
\t\t\t\t\t";
        // line 23
        echo getLang("Vendor");
        echo " &nbsp;
\t\t\t\t\t";
        // line 24
        echo twig_safe_filter((isset($context['SortLinksVendor']) ? $context['SortLinksVendor'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:80px; display: ";
        // line 26
        echo twig_safe_filter((isset($context['StatusField']) ? $context['StatusField'] : null));
        echo "\">
\t\t\t\t\t";
        // line 27
        echo getLang("UserStatus");
        echo " &nbsp;
\t\t\t\t\t";
        // line 28
        echo twig_safe_filter((isset($context['SortLinksStatus']) ? $context['SortLinksStatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:70px\">
\t\t\t\t\t";
        // line 31
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 34
        echo twig_safe_filter((isset($context['UserGrid']) ? $context['UserGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"8\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

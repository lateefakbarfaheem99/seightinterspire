<?php

/* customer.address.manage.grid.tpl */
class __TwigTemplate_8a3c54ebdeed98aabec88527d397ebe6 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr>
\t\t\t\t<td colspan=\"9\">
\t\t\t\t\t<table class=\"LetterSort\" cellspacing=\"2\" cellpadding=\"0\" border=\"0\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
        // line 6
        echo twig_safe_filter((isset($context['LetterSortGrid']) ? $context['LetterSortGrid'] : null));
        echo "
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td>
\t\t\t\t\t<input type=\"checkbox\" onclick=\"toggleAddressBoxes(this.checked);\" />
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 21
        echo getLang("CustomerAddressFullName");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 24
        echo getLang("CustomerAddressPhone");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 27
        echo getLang("CustomerAddressFullAddress");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 30
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['AddressGrid']) ? $context['AddressGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 36
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

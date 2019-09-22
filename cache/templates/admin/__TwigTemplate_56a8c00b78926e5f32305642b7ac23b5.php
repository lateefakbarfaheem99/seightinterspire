<?php

/* customer.address.manage.row.tpl */
class __TwigTemplate_56a8c00b78926e5f32305642b7ac23b5 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\" id=\"CustomerAddress";
        echo twig_safe_filter((isset($context['AddressId']) ? $context['AddressId'] : null));
        echo "\">
\t<td width=\"20\" align=\"center\">
\t\t<input type=\"checkbox\" name=\"addresses[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['AddressId']) ? $context['AddressId'] : null));
        echo "\" /><input type=\"hidden\" name=\"addressDisplayStatus[]\" value=\"display\" />
\t</td>
\t<td style=\"width:15%;\">
\t\t";
        // line 6
        echo twig_safe_filter((isset($context['FullName']) ? $context['FullName'] : null));
        echo "
\t</td>
\t<td style=\"width:10%;\">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Phone']) ? $context['Phone'] : null));
        echo "
\t</td>
\t<td style=\"width:55%;\">
\t\t";
        // line 12
        echo twig_safe_filter((isset($context['StreetAddress']) ? $context['StreetAddress'] : null));
        echo "<br />
\t\t";
        // line 13
        echo twig_safe_filter((isset($context['City']) ? $context['City'] : null));
        echo ", ";
        echo twig_safe_filter((isset($context['State']) ? $context['State'] : null));
        echo " ";
        echo twig_safe_filter((isset($context['PostCode']) ? $context['PostCode'] : null));
        echo "<br />
\t\t";
        // line 14
        echo twig_safe_filter((isset($context['Country']) ? $context['Country'] : null));
        echo " ";
        echo twig_safe_filter((isset($context['CountryImg']) ? $context['CountryImg'] : null));
        echo "
\t</td>
\t<td>
\t\t";
        // line 17
        echo twig_safe_filter((isset($context['EditCustomerLink']) ? $context['EditCustomerLink'] : null));
        echo "
\t\t";
        // line 18
        echo twig_safe_filter((isset($context['DeleteCustomerLink']) ? $context['DeleteCustomerLink'] : null));
        echo "
\t</td>
</tr>";
    }

}

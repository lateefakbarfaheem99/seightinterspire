<?php

/* user.manage.row.tpl */
class __TwigTemplate_f12d0e4d2c070223c19e56d2c7fad92b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t<td align=\"center\" style=\"width:23px\">
\t\t\t<input type=\"checkbox\" name=\"users[]\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['UserId']) ? $context['UserId'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['CheckDisabled']) ? $context['CheckDisabled'] : null));
        echo ">
\t\t</td>
\t\t<td align=\"center\" style=\"width:18px;\">
\t\t\t<img src=\"images/user.gif\" />
\t\t</td>
\t\t<td class=\"";
        // line 9
        echo twig_safe_filter((isset($context['SortedFieldUserClass']) ? $context['SortedFieldUserClass'] : null));
        echo "\">
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Username']) ? $context['Username'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 12
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Name']) ? $context['Name'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 15
        echo twig_safe_filter((isset($context['SortedFieldEmailClass']) ? $context['SortedFieldEmailClass'] : null));
        echo "\">
\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['Email']) ? $context['Email'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width: 150px; ";
        // line 18
        echo twig_safe_filter((isset($context['HideVendorColumn']) ? $context['HideVendorColumn'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['SortedFieldVendorClass']) ? $context['SortedFieldVendorClass'] : null));
        echo "\">
\t\t\t";
        // line 19
        echo twig_safe_filter((isset($context['Vendor']) ? $context['Vendor'] : null));
        echo "
\t\t</td>
\t\t<td align=\"center\" style=\"display: ";
        // line 21
        echo twig_safe_filter((isset($context['StatusField']) ? $context['StatusField'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['SortedFieldStatusClass']) ? $context['SortedFieldStatusClass'] : null));
        echo "\">
\t\t\t";
        // line 22
        echo twig_safe_filter((isset($context['Status']) ? $context['Status'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['EditUserLink']) ? $context['EditUserLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['CopyUserLink']) ? $context['CopyUserLink'] : null));
        echo "
\t\t</td>
\t</tr>
";
    }

}

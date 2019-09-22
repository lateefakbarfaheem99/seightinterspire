<?php

/* customers.manage.row.tpl */
class __TwigTemplate_27a1ee34e741a8faa50f0cef0c0d9682 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<tr id=\"tr";
        // line 2
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t<td align=\"center\" style=\"width:25px\">
\t\t\t<input type=\"checkbox\" name=\"customers[]\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" class=\"exportSelectableItem\" />
\t\t</td>
\t\t<td align=\"center\" style=\"width:15px\">
\t\t\t<a href=\"#\" onclick=\"OrderView('";
        // line 7
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "');\" style=\"display:";
        echo twig_safe_filter((isset($context['HideExpand']) ? $context['HideExpand'] : null));
        echo "\"><img id=\"expand";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" class=\"ExpandLink\"  src=\"images/plus.gif\" align=\"left\" width=\"19\" height=\"16\" title=\"";
        echo getLang("ExpandCustQuickView");
        echo "\" style=\"vertical-align: middle;\" border=\"0\"></a>
\t\t</td>
\t\t<td align=\"center\" style=\"width:18px\">
\t\t\t<img src=\"images/customer.gif\" width=\"16\" height=\"16\">
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
\t\t<td class=\"";
        // line 18
        echo twig_safe_filter((isset($context['SortedFieldPhoneClass']) ? $context['SortedFieldPhoneClass'] : null));
        echo "\">
\t\t\t";
        // line 19
        echo twig_safe_filter((isset($context['Phone']) ? $context['Phone'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 21
        echo twig_safe_filter((isset($context['SortedFieldGroup']) ? $context['SortedFieldGroup'] : null));
        echo "\" style=\"display: ";
        echo twig_safe_filter((isset($context['HideGroup']) ? $context['HideGroup'] : null));
        echo "\">
\t\t\t";
        // line 22
        echo twig_safe_filter((isset($context['Group']) ? $context['Group'] : null));
        echo "
\t\t</td>
\t\t<td nowrap=\"nowrap\" class=\"";
        // line 24
        echo twig_safe_filter((isset($context['SortedFieldStoreCreditClass']) ? $context['SortedFieldStoreCreditClass'] : null));
        echo "\" style=\"display: ";
        echo twig_safe_filter((isset($context['HideStoreCredit']) ? $context['HideStoreCredit'] : null));
        echo "\">
\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['StoreCredit']) ? $context['StoreCredit'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 27
        echo twig_safe_filter((isset($context['SortedFieldDateClass']) ? $context['SortedFieldDateClass'] : null));
        echo "\">
\t\t\t";
        // line 28
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 30
        echo twig_safe_filter((isset($context['SortedFieldNumOrdersClass']) ? $context['SortedFieldNumOrdersClass'] : null));
        echo "\">
\t\t\t";
        // line 31
        echo twig_safe_filter((isset($context['NumOrders']) ? $context['NumOrders'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t";
        // line 34
        echo twig_safe_filter((isset($context['LoginLink']) ? $context['LoginLink'] : null));
        echo "
\t\t\t";
        // line 35
        echo twig_safe_filter((isset($context['ViewNotesLink']) ? $context['ViewNotesLink'] : null));
        echo "
\t\t\t";
        // line 36
        echo twig_safe_filter((isset($context['EditCustomerLink']) ? $context['EditCustomerLink'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr id=\"trQ";
        // line 39
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" style=\"display:none\">
\t\t<td colspan=\"2\"></td>
\t\t<td colspan=\"3\" id=\"tdQ";
        // line 41
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" class=\"QuickView\"></td>
\t\t<td colspan=\"5\"></td>
\t</tr>
";
    }

}

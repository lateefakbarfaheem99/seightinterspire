<?php

/* coupons.manage.row.tpl */
class __TwigTemplate_569ebbf8ddc76873b1cac4ebaf62e7af extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t<td align=\"center\">
\t\t\t<input type=\"checkbox\" name=\"coupon[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CouponId']) ? $context['CouponId'] : null));
        echo "\">
\t\t</td>
\t\t<td align=\"center\" style=\"width:18px;\">
\t\t\t<img src='images/coupon.gif'>
\t\t</td>
\t\t<td class=\"";
        // line 8
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Name']) ? $context['Name'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 11
        echo twig_safe_filter((isset($context['SortedFieldCouponClass']) ? $context['SortedFieldCouponClass'] : null));
        echo "\">
\t\t\t<input type=\"text\" value=\"";
        // line 12
        echo twig_safe_filter((isset($context['Coupon']) ? $context['Coupon'] : null));
        echo "\" class=\"Field100\" />
\t\t</td>
\t\t<td class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldDiscountClass']) ? $context['SortedFieldDiscountClass'] : null));
        echo "\">
\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Discount']) ? $context['Discount'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 17
        echo twig_safe_filter((isset($context['SortedFieldExpiryClass']) ? $context['SortedFieldExpiryClass'] : null));
        echo "\">
\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "
\t\t</td>
\t\t<td class=\"";
        // line 20
        echo twig_safe_filter((isset($context['SortedFieldNumUsesClass']) ? $context['SortedFieldNumUsesClass'] : null));
        echo "\">
\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['NumUses']) ? $context['NumUses'] : null));
        echo "
\t\t</td>
\t\t<td align=\"center\" class=\"";
        // line 23
        echo twig_safe_filter((isset($context['SortedFieldEnabledClass']) ? $context['SortedFieldEnabledClass'] : null));
        echo "\">
\t\t\t";
        // line 24
        echo twig_safe_filter((isset($context['Enabled']) ? $context['Enabled'] : null));
        echo "
\t\t</td>
\t\t<td nowrap=\"nowrap\">
\t\t\t";
        // line 27
        echo twig_safe_filter((isset($context['EditCouponLink']) ? $context['EditCouponLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
\t\t\t<a title='";
        // line 28
        echo getLang("CopyCouponClip");
        echo "' href=\"javascript:CouponClipboard('";
        echo twig_safe_filter((isset($context['Coupon']) ? $context['Coupon'] : null));
        echo "')\">";
        echo getLang("CopyToClipboard");
        echo "</a>
\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['ViewOrdersLink']) ? $context['ViewOrdersLink'] : null));
        echo "
\t\t</td>
\t</tr>";
    }

}

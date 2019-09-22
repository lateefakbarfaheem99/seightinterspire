<?php

/* coupons.manage.grid.tpl */
class __TwigTemplate_1a8b12851fc64c1b90f9c5f173c8e2e9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"10\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\" style=\"width:18px\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 12
        echo getLang("CouponName");
        echo " &nbsp;
\t\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 16
        echo getLang("CouponCode");
        echo " &nbsp;
\t\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['SortLinksCoupon']) ? $context['SortLinksCoupon'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 20
        echo getLang("Discount");
        echo " &nbsp;
\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['SortLinksDiscount']) ? $context['SortLinksDiscount'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t<div style=\"display:none\" id=\"invDiv\" name=\"invDiv\"></div>
\t\t\t\t\t";
        // line 25
        echo getLang("ExpiryDate");
        echo "\t\t\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['SortLinksExpiry']) ? $context['SortLinksExpiry'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 29
        echo getLang("NumUses");
        echo "\t\t\t\t\t";
        // line 30
        echo twig_safe_filter((isset($context['SortLinksNumUses']) ? $context['SortLinksNumUses'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:80px\">
\t\t\t\t\t";
        // line 33
        echo getLang("Enabled");
        echo " &nbsp;
\t\t\t\t\t";
        // line 34
        echo twig_safe_filter((isset($context['SortLinksEnabled']) ? $context['SortLinksEnabled'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:130px\">
\t\t\t\t\t";
        // line 37
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 40
        echo twig_safe_filter((isset($context['CouponGrid']) ? $context['CouponGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"10\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 43
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

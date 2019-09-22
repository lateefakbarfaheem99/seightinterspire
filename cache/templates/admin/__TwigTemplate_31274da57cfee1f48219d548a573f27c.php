<?php

/* giftcertificates.manage.grid.tpl */
class __TwigTemplate_31274da57cfee1f48219d548a573f27c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"\$(this).parents('form').find('input[type=checkbox]').attr('checked', this.checked);\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 12
        echo getLang("GiftCertificateCode");
        echo " &nbsp;
\t\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['SortLinksCode']) ? $context['SortLinksCode'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 16
        echo getLang("GiftCertificatePurchasedBy");
        echo " &nbsp;
\t\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['SortLinksCust']) ? $context['SortLinksCust'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 20
        echo getLang("GiftCertificateAmount");
        echo " &nbsp;
\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['SortLinksCertificateAmount']) ? $context['SortLinksCertificateAmount'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 24
        echo getLang("GiftCertificateBalance");
        echo " &nbsp;
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['SortLinksCertificateBalance']) ? $context['SortLinksCertificateBalance'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 28
        echo getLang("GiftCertificatePurchaseDate");
        echo " &nbsp;
\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['SortLinksPurchaseDate']) ? $context['SortLinksPurchaseDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 32
        echo getLang("Status");
        echo " &nbsp;
\t\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['SortLinksStatus']) ? $context['SortLinksStatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 36
        echo twig_safe_filter((isset($context['GiftCertificatesGrid']) ? $context['GiftCertificatesGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

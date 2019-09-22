<?php

/* orders.manage.grid.tpl */
class __TwigTemplate_3da05be2138dbaa52259ff92804fc61e extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"12\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numOrders']) ? $context['numOrders'] : null), (isset($context['perPage']) ? $context['perPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), (isset($context['pageURL']) ? $context['pageURL'] : null), true, ), "method"), "1");
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 13
        echo getLang("OrderId");
        echo " &nbsp;
\t\t\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['SortLinksId']) ? $context['SortLinksId'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td colspan=\"";
        // line 16
        echo twig_safe_filter((isset($context['CustomerNameSpan']) ? $context['CustomerNameSpan'] : null));
        echo "\">
\t\t\t\t\t";
        // line 17
        echo getLang("Customer");
        echo " &nbsp;
\t\t\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['SortLinksCust']) ? $context['SortLinksCust'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 21
        echo getLang("Date");
        echo " &nbsp;
\t\t\t\t\t";
        // line 22
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 25
        echo getLang("Status");
        echo " &nbsp;
\t\t\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['SortLinksStatus']) ? $context['SortLinksStatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"text-align: center; display: ";
        // line 28
        echo twig_safe_filter((isset($context['HideOrderMessages']) ? $context['HideOrderMessages'] : null));
        echo "\" nowrap>
\t\t\t\t\t";
        // line 29
        echo getLang("NewMessages");
        echo " &nbsp;
\t\t\t\t\t";
        // line 30
        echo twig_safe_filter((isset($context['SortLinksMessage']) ? $context['SortLinksMessage'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:80px; text-align: center;\">
\t\t\t\t\t";
        // line 33
        echo getLang("Total");
        echo " &nbsp;
\t\t\t\t\t";
        // line 34
        echo twig_safe_filter((isset($context['SortLinksTotal']) ? $context['SortLinksTotal'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td style=\"display: ";
        // line 37
        echo twig_safe_filter((isset($context['HideCountry']) ? $context['HideCountry'] : null));
        echo "\">
\t\t\t\t\t&nbsp;
\t\t\t\t</td>
\t\t\t\t<td style=\"width:100px\">
\t\t\t\t\t";
        // line 41
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 44
        echo twig_safe_filter((isset($context['OrderGrid']) ? $context['OrderGrid'] : null));
        echo "
\t\t\t";
        // line 45
        if ((isset($context['viewDeletedOrdersUrl']) ? $context['viewDeletedOrdersUrl'] : null)) {
            echo "\t\t\t\t<tr class=\"GridRow orderGridDeletedNotice\">
\t\t\t\t\t<td colspan=\"12\">
\t\t\t\t\t\t";
            // line 48
            echo getLang("DeletedOrdersMatchedYourSearch", array("viewDeletedOrdersUrl" => (isset($context['viewDeletedOrdersUrl']) ? $context['viewDeletedOrdersUrl'] : null)));
            // line 50
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 53
        echo "\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"12\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numOrders']) ? $context['numOrders'] : null), (isset($context['perPage']) ? $context['perPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), (isset($context['pageURL']) ? $context['pageURL'] : null), true, ), "method"), "1");
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<input type=\"hidden\" id=\"CurrentPage\" name=\"CurrentPage\" value=\"";
        // line 60
        echo twig_safe_filter((isset($context['CurrentPage']) ? $context['CurrentPage'] : null));
        echo "\" />
";
    }

}

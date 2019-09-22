<?php

/* product.manage.row.tpl */
class __TwigTemplate_6ad6eae702cf5f0ef28193a760f565ed extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr id=\"tr";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t<td align=\"center\" style=\"width:25px\">
\t\t<input type=\"checkbox\" name=\"products[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\">
\t</td>
\t<td align=\"center\" style=\"width:15px; display: ";
        // line 5
        echo twig_safe_filter((isset($context['HideInventoryOptions']) ? $context['HideInventoryOptions'] : null));
        echo "\">
\t\t";
        // line 6
        echo twig_safe_filter((isset($context['StockExpand']) ? $context['StockExpand'] : null));
        echo "
\t</td>
\t<td align=\"center\" style=\"width:20px\">
\t\t<img src=\"images/product.gif\" alt=\"product\" height=\"16\" width=\"16\" />
\t</td>
\t<td style=\"width:50px\" nowrap class=\"ImageField\" align=\"center\">
\t\t";
        // line 12
        echo twig_safe_filter((isset($context['ProductImage']) ? $context['ProductImage'] : null));
        echo "
\t</td>
\t<td style=\"width:100px\" class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldCodeClass']) ? $context['SortedFieldCodeClass'] : null));
        echo "\">
\t\t";
        // line 15
        echo twig_safe_filter((isset($context['SKU']) ? $context['SKU'] : null));
        echo "
\t</td>
\t<td id=\"InStock";
        // line 17
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['SortedFieldStockClass']) ? $context['SortedFieldStockClass'] : null));
        echo " ";
        echo twig_safe_filter((isset($context['LowStockStyle']) ? $context['LowStockStyle'] : null));
        echo "\" style=\"display: ";
        echo twig_safe_filter((isset($context['HideInventoryOptions']) ? $context['HideInventoryOptions'] : null));
        echo "\">
\t\t";
        // line 18
        echo twig_safe_filter((isset($context['StockInfo']) ? $context['StockInfo'] : null));
        echo "
\t</td>
\t<td colspan=\"";
        // line 20
        echo twig_safe_filter((isset($context['ProductNameSpan']) ? $context['ProductNameSpan'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['SortedFieldNameClass']) ? $context['SortedFieldNameClass'] : null));
        echo "\">
\t\t";
        // line 21
        echo twig_safe_filter((isset($context['Name']) ? $context['Name'] : null));
        echo "
\t</td>
\t<td style=\"text-align: right;\" class=\"";
        // line 23
        echo twig_safe_filter((isset($context['SortedFieldPriceClass']) ? $context['SortedFieldPriceClass'] : null));
        echo "\">
\t\t";
        // line 24
        echo twig_safe_filter((isset($context['Price']) ? $context['Price'] : null));
        echo "
\t</td>
\t<td style=\"padding-left: 15px;\" class=\"";
        // line 26
        echo twig_safe_filter((isset($context['SortedFieldStatusClass']) ? $context['SortedFieldStatusClass'] : null));
        echo "\">
\t\t";
        // line 27
        echo twig_escape_filter($this->env, (isset($context['Status']) ? $context['Status'] : null), "1");
        echo "
\t</td>
\t<td align=\"center\" class=\"";
        // line 29
        echo twig_safe_filter((isset($context['SortedFieldVisibleClass']) ? $context['SortedFieldVisibleClass'] : null));
        echo "\">
\t\t";
        // line 30
        echo twig_safe_filter((isset($context['Visible']) ? $context['Visible'] : null));
        echo "
\t</td>
\t<td align=\"center\" class=\"";
        // line 32
        echo twig_safe_filter((isset($context['SortedFieldFeaturedClass']) ? $context['SortedFieldFeaturedClass'] : null));
        echo "\">
\t\t";
        // line 33
        echo twig_safe_filter((isset($context['Featured']) ? $context['Featured'] : null));
        echo "
\t</td>
\t<td>
\t\t";
        // line 36
        echo twig_safe_filter((isset($context['EditProductLink']) ? $context['EditProductLink'] : null));
        echo "
\t\t";
        // line 37
        echo twig_safe_filter((isset($context['CopyProductLink']) ? $context['CopyProductLink'] : null));
        echo "
\t</td>
</tr>
<tr id=\"trQ";
        // line 40
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" style=\"display:none\">
\t<td colspan=\"6\">
\t\t&nbsp;
\t</td>
\t<td colspan=\"2\" class=\"ProductQuickView QuickView\" id=\"tdQ";
        // line 44
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\">
\t</td>
\t<td colspan=\"3\">
\t\t&nbsp;
\t</td>
</tr>";
    }

}

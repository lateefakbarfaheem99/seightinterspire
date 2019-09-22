<?php

/* Snippets/BulkEditItem.html */
class __TwigTemplate_349d2254d85ef2f41ca165f2ffb5d3d0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<input type=\"hidden\" name=\"existing_categories_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"existing_categories_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" value=\"";
        echo twig_safe_filter((isset($context['ProductExistingCategories']) ? $context['ProductExistingCategories'] : null));
        echo "\" />
<input type=\"hidden\" name=\"existing_brand_";
        // line 2
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"existing_brand_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" value=\"";
        echo twig_safe_filter((isset($context['ProductExistingBrand']) ? $context['ProductExistingBrand'] : null));
        echo "\" />
<input type=\"hidden\" name=\"existing_brand_id_";
        // line 3
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"existing_brand_id_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" value=\"";
        echo twig_safe_filter((isset($context['ProductExistingBrandId']) ? $context['ProductExistingBrandId'] : null));
        echo "\" />
<tr onmouseout=\"this.className='GridRow'\" onmouseover=\"this.className='GridRowOver'\" class=\"GridRow\" style=\"height:25px\">
\t<td valign=\"top\" align=\"center\" style=\"width: 18px;\"><img width=\"16\" height=\"16\" src=\"images/product.gif\"/></td>
\t<td valign=\"top\"><input type=\"text\" class=\"Field150\" value=\"";
        // line 6
        echo twig_safe_filter((isset($context['ProductName']) ? $context['ProductName'] : null));
        echo "\" name=\"prodname_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"prodname_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" style=\"width:95%\" /></td>
\t<td valign=\"top\">";
        // line 7
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input type=\"text\" class=\"Field50\" value=\"";
        echo twig_safe_filter((isset($context['ProductPrice']) ? $context['ProductPrice'] : null));
        echo "\" name=\"prodprice_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"prodprice_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" /> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "</td>
\t<td valign=\"top\">
\t\t<select size=\"5\" id=\"category_";
        // line 9
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" name=\"category_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "[]\" class=\"Field150 ISSelectReplacement\" multiple=\"multiple\" style=\"width:180px; height:23px\">";
        echo twig_safe_filter((isset($context['ProductCategories']) ? $context['ProductCategories'] : null));
        echo "</select>
\t\t<a title=\"";
        // line 10
        echo getLang("ClickToExpandCategories");
        echo "\" href=\"#\" onclick=\"ExpandCategories(";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "); return false;\" class=\"ExpandCategoryLink\" id=\"ExpandCategoryLink-";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\"><img id=\"catdrop_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" src=\"images/droparrow.gif\" width=\"10\" height=\"5\" style=\"padding-top:8px\" border=\"0\" /></a>
\t</td>
\t<td valign=\"top\"><input type=\"text\" class=\"Field50\" value=\"";
        // line 12
        echo twig_safe_filter((isset($context['ProductBrand']) ? $context['ProductBrand'] : null));
        echo "\" name=\"prodbrand_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"prodbrand_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" /></td>
\t<td valign=\"top\"><input type=\"checkbox\" ";
        // line 13
        echo twig_safe_filter((isset($context['ProductVisible']) ? $context['ProductVisible'] : null));
        echo " value=\"ON\" name=\"prodvisible_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"prodvisible_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" /></td>
\t<td valign=\"top\"><input type=\"checkbox\" ";
        // line 14
        echo twig_safe_filter((isset($context['ProductFeatured']) ? $context['ProductFeatured'] : null));
        echo " value=\"ON\" name=\"prodfeatured_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"prodfeatured_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" /></td>
\t<td valign=\"top\"><input type=\"checkbox\" ";
        // line 15
        echo twig_safe_filter((isset($context['ProductFreeShipping']) ? $context['ProductFreeShipping'] : null));
        echo " value=\"ON\" name=\"prodfreeshipping_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" id=\"prodfreeshipping_";
        echo twig_safe_filter((isset($context['ProductId']) ? $context['ProductId'] : null));
        echo "\" /></td>
</tr>
";
    }

}

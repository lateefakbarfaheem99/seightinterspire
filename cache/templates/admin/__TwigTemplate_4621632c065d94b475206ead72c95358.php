<?php

/* products.manage.grid.tpl */
class __TwigTemplate_4621632c065d94b475206ead72c95358 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr>
\t\t\t\t<td colspan=\"12\">
\t\t\t\t\t<table class=\"LetterSort\" cellspacing=\"2\" cellpadding=\"0\" border=\"0\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['letters']) ? $context['letters'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['displayLetter'] => $context['letter']) {
            echo "\t\t\t\t\t\t\t\t<td width=\"3%\"><a class=\"SortLink ";
            // line 8
            if ((isset($context['letter']) ? $context['letter'] : null) == (isset($context['activeLetter']) ? $context['activeLetter'] : null)) {
                echo "ActiveLetter";
            }
            echo "\" href=\"index.php?ToDo=viewProducts&amp;";
            echo http_build_query(twig_escape_filter($this->env, (isset($context['letterURL']) ? $context['letterURL'] : null), "1"));
            echo "&amp;letter=";
            echo twig_escape_filter($this->env, (isset($context['letter']) ? $context['letter'] : null), "1");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context['displayLetter']) ? $context['displayLetter'] : null), "1");
            echo "</a></td>
\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['displayLetter'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "\t\t\t\t\t\t\t<td width=\"3%\"><a class=\"SortLink\" href=\"index.php?ToDo=viewProducts&amp;";
        // line 10
        echo http_build_query(twig_escape_filter($this->env, (isset($context['letterURL']) ? $context['letterURL'] : null), "1"));
        echo "\">";
        echo getLang("Clear");
        echo "</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"12\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numProducts']) ? $context['numProducts'] : null), (isset($context['perPage']) ? $context['perPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), (isset($context['pageURL']) ? $context['pageURL'] : null), true, ), "method"), "1");
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td style=\"display: ";
        // line 23
        echo twig_safe_filter((isset($context['HideInventoryOptions']) ? $context['HideInventoryOptions'] : null));
        echo "\">
\t\t\t\t\t&nbsp;
\t\t\t\t</td>
\t\t\t\t<td class=\"ImageField\">";
        // line 26
        echo getLang("Image");
        echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 28
        echo getLang("ProductSKU");
        echo " &nbsp;
\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['SortLinksCode']) ? $context['SortLinksCode'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width: 95px; display: ";
        // line 31
        echo twig_safe_filter((isset($context['HideInventoryOptions']) ? $context['HideInventoryOptions'] : null));
        echo "\">
\t\t\t\t\t<span class=\"HelpText\" onmouseout=\"HideQuickHelp(this);\" onmouseover=\"ShowQuickHelp(this, '";
        // line 32
        echo getLang("StockLevel");
        echo "', '";
        echo getLang("StockLevelHelp");
        echo "');\">";
        echo getLang("StockLevel");
        echo "</span> &nbsp;
\t\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['SortLinksStock']) ? $context['SortLinksStock'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td colspan=\"";
        // line 35
        echo twig_safe_filter((isset($context['ProductNameSpan']) ? $context['ProductNameSpan'] : null));
        echo "\">
\t\t\t\t\t";
        // line 36
        echo getLang("ProductName");
        echo " &nbsp;
\t\t\t\t\t";
        // line 37
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"70\" style=\"text-align: right;\">
\t\t\t\t\t";
        // line 40
        echo getLang("ProductPrice");
        echo " &nbsp;
\t\t\t\t\t";
        // line 41
        echo twig_safe_filter((isset($context['SortLinksPrice']) ? $context['SortLinksPrice'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"85\" style=\"text-align: right;\">
\t\t\t\t\t";
        // line 44
        echo getLang("Status");
        echo " &nbsp;
\t\t\t\t\t";
        // line 45
        echo twig_safe_filter((isset($context['SortLinksStatus']) ? $context['SortLinksStatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"70\" nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 48
        echo getLang("ProductVisible");
        echo " &nbsp;
\t\t\t\t\t";
        // line 49
        echo twig_safe_filter((isset($context['SortLinksVisible']) ? $context['SortLinksVisible'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td width=\"80\" nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 52
        echo getLang("ProductFeatured");
        echo " &nbsp;
\t\t\t\t\t";
        // line 53
        echo twig_safe_filter((isset($context['SortLinksFeatured']) ? $context['SortLinksFeatured'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:70px;\">
\t\t\t\t\t";
        // line 56
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['ProductGrid']) ? $context['ProductGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"12\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numProducts']) ? $context['numProducts'] : null), (isset($context['perPage']) ? $context['perPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), (isset($context['pageURL']) ? $context['pageURL'] : null), true, ), "method"), "1");
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

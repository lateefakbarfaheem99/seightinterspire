<?php

/* customers.manage.grid.tpl */
class __TwigTemplate_a4a812f58d70399074e696f66d2921a1 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"11\">
\t\t\t\t\t\t<table class=\"LetterSort\" cellspacing=\"2\" cellpadding=\"0\" border=\"0\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
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
        foreach ($context['_seq'] as $context['_key'] => $context['letter']) {
            echo "\t\t\t\t\t\t\t\t\t<td width=\"3%\"><a class=\"SortLink ";
            // line 8
            if ((isset($context['letter']) ? $context['letter'] : null) == (isset($context['activeLetter']) ? $context['activeLetter'] : null)) {
                echo "ActiveLetter";
            }
            echo "\" href=\"index.php?ToDo=viewCustomers&amp;";
            echo http_build_query(twig_escape_filter($this->env, (isset($context['letterURL']) ? $context['letterURL'] : null), "1"));
            echo "&amp;letter=";
            echo twig_escape_filter($this->env, (isset($context['letter']) ? $context['letter'] : null), "1");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context['letter']) ? $context['letter'] : null), "1");
            echo "</a></td>
\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "\t\t\t\t\t\t\t\t<td width=\"3%\"><a class=\"SortLink\" href=\"index.php?ToDo=viewCustomers&amp;";
        // line 10
        echo http_build_query(twig_escape_filter($this->env, (isset($context['letterURL']) ? $context['letterURL'] : null), "1"));
        echo "\">";
        echo getLang("Clear");
        echo "</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numCustomers']) ? $context['numCustomers'] : null), (isset($context['perPage']) ? $context['perPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), (isset($context['pageURL']) ? $context['pageURL'] : null), true, ), "method"), "1");
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 25
        echo getLang("CustName");
        echo " &nbsp;
\t\t\t\t\t";
        // line 26
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 29
        echo getLang("Email");
        echo " &nbsp;
\t\t\t\t\t";
        // line 30
        echo twig_safe_filter((isset($context['SortLinksEmail']) ? $context['SortLinksEmail'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 33
        echo getLang("Phone");
        echo " &nbsp;
\t\t\t\t\t";
        // line 34
        echo twig_safe_filter((isset($context['SortLinksPhone']) ? $context['SortLinksPhone'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"display: ";
        // line 36
        echo twig_safe_filter((isset($context['HideGroup']) ? $context['HideGroup'] : null));
        echo "\">
\t\t\t\t\t";
        // line 37
        echo getLang("CustomerGroup");
        echo " &nbsp;
\t\t\t\t\t";
        // line 38
        echo twig_safe_filter((isset($context['SortLinksGroup']) ? $context['SortLinksGroup'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"display: ";
        // line 40
        echo twig_safe_filter((isset($context['HideStoreCredit']) ? $context['HideStoreCredit'] : null));
        echo "\">
\t\t\t\t\t";
        // line 41
        echo getLang("StoreCredit");
        echo " &nbsp;
\t\t\t\t\t";
        // line 42
        echo twig_safe_filter((isset($context['SortLinksStoreCredit']) ? $context['SortLinksStoreCredit'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 45
        echo getLang("CustDateCreated");
        echo " &nbsp;
\t\t\t\t\t";
        // line 46
        echo twig_safe_filter((isset($context['SortLinksDate']) ? $context['SortLinksDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 49
        echo getLang("NumOrders");
        echo " &nbsp;
\t\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['SortLinksNumOrders']) ? $context['SortLinksNumOrders'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 53
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 56
        echo twig_safe_filter((isset($context['CustomerGrid']) ? $context['CustomerGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numCustomers']) ? $context['numCustomers'] : null), (isset($context['perPage']) ? $context['perPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), (isset($context['pageURL']) ? $context['pageURL'] : null), true, ), "method"), "1");
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

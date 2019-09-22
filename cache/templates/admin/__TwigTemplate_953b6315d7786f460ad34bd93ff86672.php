<?php

/* quicksearch.tpl */
class __TwigTemplate_953b6315d7786f460ad34bd93ff86672 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("QuickSearch");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"index.php?ToDo=viewOrders&amp;searchId=0&amp;searchQuery=";
        // line 14
        echo twig_escape_filter($this->env, (isset($context['searchQuery']) ? $context['searchQuery'] : null), "1");
        echo "\">";
        echo twig_safe_filter((isset($context['OrdersLink']) ? $context['OrdersLink'] : null));
        echo "</a></li>
\t\t\t\t\t<li><a href=\"index.php?ToDo=viewCustomers&amp;searchId=0&amp;searchQuery=";
        // line 15
        echo twig_escape_filter($this->env, (isset($context['searchQuery']) ? $context['searchQuery'] : null), "1");
        echo "\">";
        echo twig_safe_filter((isset($context['CustomersLink']) ? $context['CustomersLink'] : null));
        echo "</a></li>
\t\t\t\t\t<li><a href=\"index.php?ToDo=viewProducts&amp;searchId=0&amp;searchQuery=";
        // line 16
        echo twig_escape_filter($this->env, (isset($context['searchQuery']) ? $context['searchQuery'] : null), "1");
        echo "\">";
        echo twig_safe_filter((isset($context['ProductsLink']) ? $context['ProductsLink'] : null));
        echo "</a></li>

\t\t\t\t\t";
        // line 18
        if ((isset($context['numDeletedOrders']) ? $context['numDeletedOrders'] : null)) {
            echo "\t\t\t\t\t\t";
            // line 19
            if ((isset($context['numDeletedOrders']) ? $context['numDeletedOrders'] : null) == 1) {
                $context['quickSearchDeletedOrdersLanguage'] = "QuickSearchDeletedOrders1";
            } else {
                $context['quickSearchDeletedOrdersLanguage'] = "QuickSearchDeletedOrdersX";
            }
            echo "\t\t\t\t\t\t<li class=\"quickSearchDeletedOrders\"><a href=\"index.php?ToDo=viewOrders&amp;searchId=0&amp;searchQuery=";
            // line 20
            echo twig_escape_filter($this->env, (isset($context['searchQuery']) ? $context['searchQuery'] : null), "1");
            echo "&amp;searchDeletedOrders=only\">";
            echo getLang((isset($context['quickSearchDeletedOrdersLanguage']) ? $context['quickSearchDeletedOrdersLanguage'] : null), array("numDeletedOrders" => (isset($context['numDeletedOrders']) ? $context['numDeletedOrders'] : null), "searchQuery" => (isset($context['searchQuery']) ? $context['searchQuery'] : null)));
            // line 23
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>
";
    }

}

<?php

/* Snippets/MessageBox.html */
class __TwigTemplate_621af2fd83750670379d487c8a2e7307 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div style=\"display:";
        echo twig_safe_filter((isset($context['HideYellowMessage']) ? $context['HideYellowMessage'] : null));
        echo "; padding:5px; background: url('images/info.gif') 5px 5px #FFF1AC; background-repeat:no-repeat; padding:5px 5px 5px 30px\" onclick=\"this.style.display='none';\">
\t";
        // line 2
        echo twig_safe_filter((isset($context['MsgBox_Message']) ? $context['MsgBox_Message'] : null));
        echo " <span style=\"display:";
        echo twig_safe_filter((isset($context['HideViewAllLink']) ? $context['HideViewAllLink'] : null));
        echo "\"><a href=\"index.php?ToDo=viewOrders\" type=\"submit\">View all orders</a>.</span>
</div>";
    }

}

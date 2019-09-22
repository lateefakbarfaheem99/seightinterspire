<?php

/* customer.quickorderall.tpl */
class __TwigTemplate_e09a17b2d9f6141d0490ee3c5236d847 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<input class=\"Text\" style=\"width:170px\" type=\"button\" value=\"";
        echo getLang("ViewCompleteOrderDetails");
        echo "\" onclick=\"document.location.href='index.php?ToDo=viewOrders&customerId=";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "'\" />";
    }

}

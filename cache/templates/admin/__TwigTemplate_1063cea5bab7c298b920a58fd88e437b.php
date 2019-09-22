<?php

/* Snippets/CustomerRowStoreCredit.html */
class __TwigTemplate_1063cea5bab7c298b920a58fd88e437b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input type=\"text\" name=\"storecredit_";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" id=\"storecredit_";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" value=\"";
        echo twig_safe_filter((isset($context['StoreCreditAmount']) ? $context['StoreCreditAmount'] : null));
        echo "\" onkeypress=\"if(event.keyCode == 13) { updateStoreCredit(";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "); }\" class=\"Field50\" /> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
<input type=\"button\" value=\"";
        // line 2
        echo getLang("Save");
        echo "\" class=\"Field50\" onclick=\"updateStoreCredit(";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo ");\" id=\"save_storecredit_";
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" />";
    }

}

<?php

/* singleline.frontend.html */
class __TwigTemplate_2f0bd51a881b6acc542f055615a2d21f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<input type=\"text\" ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo " value=\"";
        echo twig_safe_filter((isset($context['FormFieldValue']) ? $context['FormFieldValue'] : null));
        echo "\" />";
    }

}

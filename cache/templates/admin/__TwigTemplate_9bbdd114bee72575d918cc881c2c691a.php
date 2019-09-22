<?php

/* singleselect.frontend.html */
class __TwigTemplate_9bbdd114bee72575d918cc881c2c691a extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<select ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo " size=\"1\">
\t";
        // line 2
        echo twig_safe_filter((isset($context['FormFieldOptions']) ? $context['FormFieldOptions'] : null));
        echo "
</select>";
    }

}

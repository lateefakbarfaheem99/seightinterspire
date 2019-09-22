<?php

/* formfield.frontend.admin.html */
class __TwigTemplate_00c0a059b4c0695bb9902726be275925 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"formRow\">
\t<label>
\t\t<span class=\"Required FormFieldRequired\" style=\"visibility: ";
        // line 3
        echo twig_safe_filter((isset($context['FormFieldRequiredVisable']) ? $context['FormFieldRequiredVisable'] : null));
        echo "\">*</span>
\t\t<span class=\"FormFieldLabel\">";
        // line 4
        echo twig_safe_filter((isset($context['FormFieldLabel']) ? $context['FormFieldLabel'] : null));
        echo "</span>
\t</label>
\t<div class=\"value\">
\t\t";
        // line 7
        echo twig_safe_filter((isset($context['FormFieldExtraHidden']) ? $context['FormFieldExtraHidden'] : null));
        echo "
\t\t";
        // line 8
        echo twig_safe_filter((isset($context['FormFieldFieldData']) ? $context['FormFieldFieldData'] : null));
        echo "
\t</div>
</div>";
    }

}

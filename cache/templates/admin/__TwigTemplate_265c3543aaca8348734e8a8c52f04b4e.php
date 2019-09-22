<?php

/* password.frontend.html */
class __TwigTemplate_265c3543aaca8348734e8a8c52f04b4e extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<input type=\"password\" autocomplete=\"off\" ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo " value=\"\" />
<div class=\"LittleNotePassword\" style=\"display: ";
        // line 2
        echo twig_safe_filter((isset($context['FormFieldHidePasswordMsg']) ? $context['FormFieldHidePasswordMsg'] : null));
        echo "\">(";
        echo getLang("CustomFieldsPasswordMsg");
        echo ")</div>
";
    }

}

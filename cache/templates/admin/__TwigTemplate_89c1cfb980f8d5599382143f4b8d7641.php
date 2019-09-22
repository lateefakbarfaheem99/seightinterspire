<?php

/* Snippets/CustomFields.html */
class __TwigTemplate_89c1cfb980f8d5599382143f4b8d7641 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 3
        echo twig_safe_filter((isset($context['CustomFieldLabel']) ? $context['CustomFieldLabel'] : null));
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" id=\"customFieldName[";
        // line 6
        echo twig_safe_filter((isset($context['CustomFieldKey']) ? $context['CustomFieldKey'] : null));
        echo "]\" name=\"customFieldName[";
        echo twig_safe_filter((isset($context['CustomFieldKey']) ? $context['CustomFieldKey'] : null));
        echo "]\" class=\"Field200\" value=\"";
        echo twig_safe_filter((isset($context['CustomFieldName']) ? $context['CustomFieldName'] : null));
        echo "\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"customFieldValue[";
        // line 7
        echo twig_safe_filter((isset($context['CustomFieldKey']) ? $context['CustomFieldKey'] : null));
        echo "]\" name=\"customFieldValue[";
        echo twig_safe_filter((isset($context['CustomFieldKey']) ? $context['CustomFieldKey'] : null));
        echo "]\" class=\"Field200\" value=\"";
        echo twig_safe_filter((isset($context['CustomFieldValue']) ? $context['CustomFieldValue'] : null));
        echo "\">
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"return AddCustomField()\"><img src=\"images/addicon.gif\" alt=\"Add\" border=\"0\" /></a>
\t\t\t\t\t\t\t<a href=\"#\" onclick=\"return DelCustomField(this.parentNode.parentNode)\" style=\"display: ";
        // line 9
        echo twig_safe_filter((isset($context['HideCustomFieldDelete']) ? $context['HideCustomFieldDelete'] : null));
        echo ";\"><img src=\"images/delicon.gif\" alt=\"Del\" border=\"0\" /></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>";
    }

}

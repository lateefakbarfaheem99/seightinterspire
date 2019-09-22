<?php

/* Snippets/ImportMatchOption.html */
class __TwigTemplate_9423c003da13a2406f7d68e28f4e10eb extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\" style=\"width: auto;\">
\t\t\t\t\t\t<span class=\"Required\">";
        // line 3
        echo twig_safe_filter((isset($context['Required']) ? $context['Required'] : null));
        echo "</span>&nbsp;";
        echo twig_safe_filter((isset($context['FieldName']) ? $context['FieldName'] : null));
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td width=\"290\">
\t\t\t\t\t\t<select name=\"";
        // line 6
        echo twig_safe_filter((isset($context['OptionName']) ? $context['OptionName'] : null));
        echo "\" id=\"";
        echo twig_safe_filter((isset($context['FieldId']) ? $context['FieldId'] : null));
        echo "\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"-1\">Ignore</option>
\t\t\t\t\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['OptionList']) ? $context['OptionList'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('";
        // line 10
        echo twig_safe_filter((isset($context['HelpId']) ? $context['HelpId'] : null));
        echo "')\" onmouseover=\"ShowHelp('";
        echo twig_safe_filter((isset($context['HelpId']) ? $context['HelpId'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['FieldNameHelpTitle']) ? $context['FieldNameHelpTitle'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['FieldNameHelp']) ? $context['FieldNameHelp'] : null));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"";
        // line 11
        echo twig_safe_filter((isset($context['HelpId']) ? $context['HelpId'] : null));
        echo "\"></div>
\t\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Extra']) ? $context['Extra'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
";
    }

}

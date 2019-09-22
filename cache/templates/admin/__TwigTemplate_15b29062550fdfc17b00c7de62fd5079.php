<?php

/* Snippets/ImportMatchOptionCategory.html */
class __TwigTemplate_15b29062550fdfc17b00c7de62fd5079 extends Twig_Template
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
\t\t\t\t\t<td width=\"350\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"categoryType\" value=\"single\" onclick=\"\$('#categoryTypeSingle').show(); \$('#categoryTypeMultiple').hide();\" checked=\"checked\" /> ";
        // line 7
        echo getLang("ImportProductCategories1");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('";
        // line 8
        echo twig_safe_filter((isset($context['HelpId']) ? $context['HelpId'] : null));
        echo "')\" onmouseover=\"ShowHelp('";
        echo twig_safe_filter((isset($context['HelpId']) ? $context['HelpId'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['FieldNameHelpTitle']) ? $context['FieldNameHelpTitle'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['FieldNameHelp']) ? $context['FieldNameHelp'] : null));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"";
        // line 9
        echo twig_safe_filter((isset($context['HelpId']) ? $context['HelpId'] : null));
        echo "\"></div>
\t\t\t\t\t\t\t<div id=\"categoryTypeSingle\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t\t<select name=\"";
        // line 12
        echo twig_safe_filter((isset($context['OptionName']) ? $context['OptionName'] : null));
        echo "\" id=\"";
        echo twig_safe_filter((isset($context['FieldId']) ? $context['FieldId'] : null));
        echo "\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t<option value=\"-1\">Ignore</option>
\t\t\t\t\t\t\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['OptionList']) ? $context['OptionList'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t<label><input type=\"radio\" name=\"categoryType\" value=\"multiple\" onclick=\"\$('#categoryTypeSingle').hide(); \$('#categoryTypeMultiple').show();\" /> ";
        // line 19
        echo getLang("ImportProductCategories2");
        echo "</label>
\t\t\t\t\t\t\t<table id=\"categoryTypeMultiple\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"vertical-align: top;\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 28
        echo getLang("ImportCategoriesRoot");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"LinkField[category1]\" id=\"category1\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"-1\">Ignore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo twig_safe_filter((isset($context['OptionList']) ? $context['OptionList'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 37
        echo getLang("ImportCategoriesChild");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"LinkField[category2]\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"-1\">Ignore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 41
        echo twig_safe_filter((isset($context['OptionList']) ? $context['OptionList'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
        // line 46
        echo getLang("ImportCategoriesGrandChild");
        echo ":</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"LinkField[category3]\" class=\"Field250\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"-1\">Ignore</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['OptionList']) ? $context['OptionList'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['Extra']) ? $context['Extra'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
";
    }

}

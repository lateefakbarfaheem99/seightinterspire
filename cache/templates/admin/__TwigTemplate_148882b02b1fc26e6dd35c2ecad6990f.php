<?php

/* Snippets/ProductVariationValue.html */
class __TwigTemplate_148882b02b1fc26e6dd35c2ecad6990f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t\t\t\t\t\t\t<li class=\"VariationValue\">
\t\t\t\t\t\t\t\t\t\t<div class=\"VariationValueDrag\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"variationOptionValueId_";
        // line 3
        echo twig_safe_filter((isset($context['VariationOptionRankId']) ? $context['VariationOptionRankId'] : null));
        echo "_";
        echo twig_safe_filter((isset($context['VariationValueRankId']) ? $context['VariationValueRankId'] : null));
        echo "\" name=\"variationOptionValueId[";
        echo twig_safe_filter((isset($context['VariationOptionRankId']) ? $context['VariationOptionRankId'] : null));
        echo "][";
        echo twig_safe_filter((isset($context['VariationValueRankId']) ? $context['VariationValueRankId'] : null));
        echo "]\" value=\"";
        echo twig_safe_filter((isset($context['VariationValueId']) ? $context['VariationValueId'] : null));
        echo "\" class=\"VariationValueId\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"textbox\" id=\"variationOptionValue_";
        // line 4
        echo twig_safe_filter((isset($context['VariationOptionRankId']) ? $context['VariationOptionRankId'] : null));
        echo "_";
        echo twig_safe_filter((isset($context['VariationValueRankId']) ? $context['VariationValueRankId'] : null));
        echo "\" name=\"variationOptionValue[";
        echo twig_safe_filter((isset($context['VariationOptionRankId']) ? $context['VariationOptionRankId'] : null));
        echo "][";
        echo twig_safe_filter((isset($context['VariationValueRankId']) ? $context['VariationValueRankId'] : null));
        echo "]\" value=\"";
        echo twig_safe_filter((isset($context['VariationValue']) ? $context['VariationValue'] : null));
        echo "\" class=\"VariationValueName\" />
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"AddVariationValue(this);\" class=\"VariationAdd\" title=\"Click here to add a new option\"><img src=\"images/addicon.gif\" alt=\"Add\" border=\"0\" /></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"DelVariationValue(this);\" class=\"VariationDel\" style=\"display: ";
        // line 6
        echo twig_safe_filter((isset($context['HideOptionDelete']) ? $context['HideOptionDelete'] : null));
        echo ";\"><img src=\"images/delicon.gif\" alt=\"Del\" border=\"0\" /></a>
\t\t\t\t\t\t\t\t\t</li>";
    }

}

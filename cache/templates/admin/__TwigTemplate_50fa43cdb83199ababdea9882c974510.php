<?php

/* Snippets/ProductVariationRow.html */
class __TwigTemplate_50fa43cdb83199ababdea9882c974510 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t\t\t\t\t<li class=\"VariationRow\">
\t\t\t\t\t\t\t\t<div class=\"VariationColumn\">
\t\t\t\t\t\t\t\t\t<div class=\"VariationValueDrag\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t<input type=\"textbox\" id=\"variationOptionName_";
        // line 4
        echo twig_safe_filter((isset($context['VariationOptionRankId']) ? $context['VariationOptionRankId'] : null));
        echo "\" name=\"variationOptionName[";
        echo twig_safe_filter((isset($context['VariationOptionRankId']) ? $context['VariationOptionRankId'] : null));
        echo "]\" class=\"VariationOptionName\" value=\"";
        echo twig_safe_filter((isset($context['VariationOptionName']) ? $context['VariationOptionName'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"AddVariationRow(this);\" class=\"VariationRowAdd\" title=\"Click here to add a new attribute\"><img src=\"images/addicon.gif\" alt=\"Add\" border=\"0\" /></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"DelVariationRow(this);\" class=\"VariationRowDel\" style=\"display: ";
        // line 6
        echo twig_safe_filter((isset($context['HideRowDelete']) ? $context['HideRowDelete'] : null));
        echo ";\"><img src=\"images/delicon.gif\" alt=\"Del\" border=\"0\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"VariationValues\">
\t\t\t\t\t\t\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['ProductVariationValue']) ? $context['ProductVariationValue'] : null));
        echo "
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<br class=\"Clear\" />
\t\t\t\t\t\t\t</li>";
    }

}

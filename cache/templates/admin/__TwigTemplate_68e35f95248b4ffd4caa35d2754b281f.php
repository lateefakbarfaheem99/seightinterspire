<?php

/* Snippets/DiscountRules.html */
class __TwigTemplate_68e35f95248b4ffd4caa35d2754b281f extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t\t\t<tr id=\"discountRulesTR_";
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\" class=\"DiscountRulesTR\">
\t\t\t\t\t\t<td class=\"FieldLabel MediumFieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;<span id=\"discountRulesFieldLabel_";
        // line 3
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['DiscountRulesLabel']) ? $context['DiscountRulesLabel'] : null));
        echo "</span>:
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 6
        echo getLang("DiscountRulesBetween");
        echo "\t\t\t\t\t\t\t<input type=\"text\" id=\"discountRulesQuantityMin_";
        // line 7
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\" name=\"discountRulesQuantityMin[";
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "]\" class=\"Field50\" value=\"";
        echo twig_safe_filter((isset($context['DiscountRulesQuantityMin']) ? $context['DiscountRulesQuantityMin'] : null));
        echo "\">
\t\t\t\t\t\t\t";
        // line 8
        echo getLang("LittleAnd");
        echo "\t\t\t\t\t\t\t<input type=\"text\" id=\"discountRulesQuantityMax_";
        // line 9
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\" name=\"discountRulesQuantityMax[";
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "]\" class=\"Field50\" value=\"";
        echo twig_safe_filter((isset($context['DiscountRulesQuantityMax']) ? $context['DiscountRulesQuantityMax'] : null));
        echo "\">
\t\t\t\t\t\t\t";
        // line 10
        echo getLang("DiscountRulesReceive");
        echo "\t\t\t\t\t\t\t<select id=\"discountRulesType_";
        // line 11
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\" name=\"discountRulesType[";
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "]\" class=\"Field120\" onchange=\"ToggleDiscountRateValueType(";
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo ");\">
\t\t\t\t\t\t\t\t<option value=\"price\" ";
        // line 12
        echo twig_safe_filter((isset($context['DiscountRulesTypePriceSelected']) ? $context['DiscountRulesTypePriceSelected'] : null));
        echo ">";
        echo getLang("DiscountRulesTypePrice");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"percent\" ";
        // line 13
        echo twig_safe_filter((isset($context['DiscountRulesTypePercentSelected']) ? $context['DiscountRulesTypePercentSelected'] : null));
        echo ">";
        echo getLang("DiscountRulesTypePercent");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"fixed\" ";
        // line 14
        echo twig_safe_filter((isset($context['DiscountRulesTypeFixedSelected']) ? $context['DiscountRulesTypeFixedSelected'] : null));
        echo ">";
        echo getLang("DiscountRulesTypeFixed");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
        // line 16
        echo getLang("LittleOf");
        echo "\t\t\t\t\t\t\t<span id=\"discountRulesAmountPrefix_";
        // line 17
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['DiscountRulesAmountPrefix']) ? $context['DiscountRulesAmountPrefix'] : null));
        echo "</span>
\t\t\t\t\t\t\t<input type=\"text\" id=\"discountRulesAmount_";
        // line 18
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\" name=\"discountRulesAmount[";
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "]\" class=\"Field50\" value=\"";
        echo twig_safe_filter((isset($context['DiscountRulesAmount']) ? $context['DiscountRulesAmount'] : null));
        echo "\">
\t\t\t\t\t\t\t<span id=\"discountRulesAmountPostfix_";
        // line 19
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['DiscountRulesAmountPostfix']) ? $context['DiscountRulesAmountPostfix'] : null));
        echo "</span>
\t\t\t\t\t\t\t<span id=\"discountRulesLineEnding_";
        // line 20
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['DiscountRulesLineEnding']) ? $context['DiscountRulesLineEnding'] : null));
        echo "</span>
\t\t\t\t\t\t\t<a href=\"#\" id=\"discountRulesAdd_";
        // line 21
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\" onclick=\"AddDiscountRules(this.parentNode.parentNode); return false;\"><img src=\"images/addicon.gif\" alt=\"Add\" border=\"0\" /></a>
\t\t\t\t\t\t\t<a href=\"#\" id=\"discountRulesDel_";
        // line 22
        echo twig_safe_filter((isset($context['DiscountRulesKey']) ? $context['DiscountRulesKey'] : null));
        echo "\" onclick=\"DelDiscountRules(this.parentNode.parentNode); return false;\"><img src=\"images/delicon.gif\" alt=\"Del\" border=\"0\" /></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>";
    }

}

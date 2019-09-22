<?php

/* module.property.tpl */
class __TwigTemplate_c14f92bba1a75fc9d3459a6f6dc6894d extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr style=\"";
        echo twig_safe_filter((isset($context['HideProperty']) ? $context['HideProperty'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['PropertyClass']) ? $context['PropertyClass'] : null));
        echo "\">

\t<td class=\"FieldLabel\" nowrap>
\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Required']) ? $context['Required'] : null));
        echo " <label for=\"StoreName\">";
        echo twig_safe_filter((isset($context['PropertyName']) ? $context['PropertyName'] : null));
        echo "</label>
\t\t<div style=\"";
        // line 5
        echo twig_safe_filter((isset($context['HideSelectAllLinks']) ? $context['HideSelectAllLinks'] : null));
        echo "\">
\t\t\t&nbsp;&nbsp;&nbsp;(<a onclick=\"SelectAll('";
        // line 6
        echo twig_safe_filter((isset($context['FieldId']) ? $context['FieldId'] : null));
        echo "'); return false;\" href=\"#\">";
        echo getLang("SelectAll");
        echo "</a> / <a  onclick=\"UnselectAll('";
        echo twig_safe_filter((isset($context['FieldId']) ? $context['FieldId'] : null));
        echo "'); return false;\" href=\"#\">";
        echo getLang("UnselectAll");
        echo "</a>)
\t</td>
\t<td class=\"";
        // line 8
        echo twig_safe_filter((isset($context['PanelBottom']) ? $context['PanelBottom'] : null));
        echo "\">
\t\t";
        // line 9
        echo twig_safe_filter((isset($context['PropertyBox']) ? $context['PropertyBox'] : null));
        echo "
\t\t";
        // line 10
        echo twig_safe_filter((isset($context['HelpTip']) ? $context['HelpTip'] : null));
        echo "
\t</td>
</tr>

";
    }

}

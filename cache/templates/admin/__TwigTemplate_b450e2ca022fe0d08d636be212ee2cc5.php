<?php

/* export.method.tpl */
class __TwigTemplate_b450e2ca022fe0d08d636be212ee2cc5 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr>
\t<td>
\t\t<label>
\t\t\t<input type=\"radio\" id=\"csv\" name=\"format\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['MethodName']) ? $context['MethodName'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['MethodChecked']) ? $context['MethodChecked'] : null));
        echo "/>
\t\t\t";
        // line 5
        echo twig_safe_filter((isset($context['MethodTitle']) ? $context['MethodTitle'] : null));
        echo "
\t\t</label>
\t</td>
\t<td>
\t\t<img onmouseout=\"HideHelp('d";
        // line 9
        echo twig_safe_filter((isset($context['MethodName']) ? $context['MethodName'] : null));
        echo "');\" onmouseover=\"ShowHelp('d";
        echo twig_safe_filter((isset($context['MethodName']) ? $context['MethodName'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['MethodName']) ? $context['MethodName'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['MethodHelp']) ? $context['MethodHelp'] : null));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t<div style=\"display:none\" id=\"d";
        // line 10
        echo twig_safe_filter((isset($context['MethodName']) ? $context['MethodName'] : null));
        echo "\"></div>
\t</td>
</tr>";
    }

}

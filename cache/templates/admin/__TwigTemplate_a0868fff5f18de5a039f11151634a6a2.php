<?php

/* import.resultspopup.tpl */
class __TwigTemplate_a0868fff5f18de5a039f11151634a6a2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table id=\"OuterPanel\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t<tr>
\t\t<td class=\"Heading1\">
\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Heading']) ? $context['Heading'] : null));
        echo "
\t\t</td>
\t\t<td align=\"right\">
\t\t\t<a href=\"javascript: window.opener.focus(); window.close();\">";
        // line 7
        echo getLang("PopupCloseWindow");
        echo "</a>
\t\t</td>
\t</tr>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\" colspan=\"2\">
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td colspan=\"2\" class=\"Intro\">
\t\t\t<textarea name=\"list\" rows=\"15\" class=\"Field\" style=\"width:100%; height: 300px;\">";
        // line 18
        echo twig_safe_filter((isset($context['Results']) ? $context['Results'] : null));
        echo "</textarea>
\t\t</td>
\t</tr>
</table>";
    }

}

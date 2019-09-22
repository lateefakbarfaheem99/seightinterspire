<?php

/* export.grid.tpl */
class __TwigTemplate_eec75af0a415d9c9c3f50754735e1691 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%; margin-top:10px\">
\t<tr>
\t\t<td colspan=\"";
        // line 3
        echo twig_safe_filter((isset($context['ColSpan']) ? $context['ColSpan'] : null));
        echo "\">
\t\t\t<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 100%;\">
\t\t\t\t<td nowrap=\"nowrap\" style=\"padding-bottom: 10px; padding-left: 10px;\">
\t\t\t\t\t";
        // line 6
        echo twig_safe_filter((isset($context['DataSummary']) ? $context['DataSummary'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td align=\"right\" class=\"PagingNav\" style=\"padding:6px 0px 6px 0px; width: 100%;\">
\t\t\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</table>
\t\t</td>
\t</tr>
\t";
        // line 14
        echo twig_safe_filter((isset($context['GridData']) ? $context['GridData'] : null));
        echo "
</table>";
    }

}

<?php

/* products.variations.manage.grid.tpl */
class __TwigTemplate_880e7201fa4184d416e332eaa8274eb0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%; margin-top:10px\">
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>&nbsp;</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 11
        echo getLang("VariationName");
        echo " &nbsp;
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SortLinksName']) ? $context['SortLinksName'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 15
        echo getLang("NumberOfOptions");
        echo " &nbsp;
\t\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['SortLinksOptions']) ? $context['SortLinksOptions'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t";
        // line 19
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 22
        echo twig_safe_filter((isset($context['VariationsGrid']) ? $context['VariationsGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"11\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

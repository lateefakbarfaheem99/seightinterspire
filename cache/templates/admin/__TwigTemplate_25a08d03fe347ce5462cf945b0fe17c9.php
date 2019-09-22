<?php

/* galleries.manage.grid.tpl */
class __TwigTemplate_25a08d03fe347ce5462cf945b0fe17c9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<table class=\"GridPanel SortableGrid\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%; margin-top:10px\">
\t\t\t\t<tr align=\"right\">
\t\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t\t";
        // line 4
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 10
        echo getLang("GalleryTitle");
        echo " &nbsp;
\t\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['SortLinksTitle']) ? $context['SortLinksTitle'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 14
        echo getLang("ImageCount");
        echo " &nbsp;
\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['SortLinksCount']) ? $context['SortLinksCount'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"width:150px;\">
\t\t\t\t\t";
        // line 18
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['GalleryGrid']) ? $context['GalleryGrid'] : null));
        echo "
\t\t\t<tr align=\"right\">
\t\t\t\t<td colspan=\"9\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t\t";
        // line 24
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>";
    }

}

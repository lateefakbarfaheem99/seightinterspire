<?php

/* galleries.manage.row.tpl */
class __TwigTemplate_fc905056872c8f7bba95e9a6196442dd extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t<td align=\"center\" style=\"width:25px\">
\t\t\t<input type=\"checkbox\" name=\"gallery[]\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['GalleryID']) ? $context['GalleryID'] : null));
        echo "\">
\t\t</td>
\t\t<td width=\"550\" class=\"";
        // line 6
        echo twig_safe_filter((isset($context['SortedFieldTitleClass']) ? $context['SortedFieldTitleClass'] : null));
        echo "\">
\t\t\t";
        // line 7
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width:250px\" class=\"";
        // line 9
        echo twig_safe_filter((isset($context['SortedFieldCountClass']) ? $context['SortedFieldCountClass'] : null));
        echo "\">
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Count']) ? $context['Count'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['EditGalleryLink']) ? $context['EditGalleryLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
            ";
        // line 14
        echo twig_safe_filter((isset($context['UploadGalleryImageLink']) ? $context['UploadGalleryImageLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
            ";
        // line 15
        echo twig_safe_filter((isset($context['PreviewGalleryLink']) ? $context['PreviewGalleryLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
\t\t</td>
\t</tr>";
    }

}

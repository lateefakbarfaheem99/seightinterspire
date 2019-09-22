<?php

/* product.form.images.row.tpl */
class __TwigTemplate_a0357159669083a65678c7ec916cbe33 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"productImagesListItem\">
\t<table cellspacing=\"0\" class=\"GridPanel\">
\t\t<tbody>
\t\t\t<tr class=\"GridRow\" onmouseover=\"\$(this).addClass('GridRowOver').removeClass('GridRow');\" onmouseout=\"\$(this).addClass('GridRow').removeClass('GridRowOver');\">
\t\t\t\t<td class=\"productImageCheck\"><input type=\"checkbox\" /></td>
\t\t\t\t<td class=\"productImageThumbDisplay\" style=\"width:";
        // line 6
        echo twig_safe_filter((isset($context['productImage_thumbnailWidth']) ? $context['productImage_thumbnailWidth'] : null));
        echo "px;\">
\t\t\t\t\t<a style=\"width:";
        // line 7
        echo twig_safe_filter((isset($context['productImage_thumbnailWidth']) ? $context['productImage_thumbnailWidth'] : null));
        echo "px; height:";
        echo twig_safe_filter((isset($context['productImage_thumbnailHeight']) ? $context['productImage_thumbnailHeight'] : null));
        echo "px;\" title=\"";
        echo getLang("ClickToShowFullSizeImage");
        echo "\"></a>
\t\t\t\t</td>
\t\t\t\t<td class=\"productImageDescription\"><textarea rows=\"4\"></textarea><div style=\"display:none;\"><input type=\"button\" class=\"productImageDescriptionSave\" value=\"";
        // line 9
        echo getLang("Save");
        echo "\" /> <input type=\"button\" class=\"productImageDescriptionCancel\" value=\"";
        echo getLang("Cancel");
        echo "\" /></div></td>
\t\t\t\t<td class=\"productImageBaseThumb\"><input type=\"radio\" name=\"productImageBaseThumb\" /></td>
\t\t\t\t<td class=\"productImageAction\">
\t\t\t\t\t<a href=\"#\" class=\"productImageDelete\">";
        // line 12
        echo getLang("Delete");
        echo "</a>
\t\t\t\t\t<a href=\"#\" class=\"productImageEdit\">";
        // line 13
        echo getLang("Edit");
        echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>
";
    }

}

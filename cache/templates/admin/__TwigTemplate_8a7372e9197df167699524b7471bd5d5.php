<?php

/* product.form.downloadrow.tpl */
class __TwigTemplate_8a7372e9197df167699524b7471bd5d5 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t\t\t\t\t\t\t<tr id=\"download_";
        echo twig_safe_filter((isset($context['DownloadId']) ? $context['DownloadId'] : null));
        echo "\" class=\"GridRow DownloadGridRow\" onmouseover=\"if(this.className != 'QuickView') { this.oldClass = this.className; this.className='GridRowOver'; }\" onmouseout=\"if(this.className != 'QuickView') { this.className=this.oldClass }\">
\t\t\t\t\t\t\t\t\t\t<td align=\"center\" style=\"width:25px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/download.gif\" />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"FileName\" style=\"width: 40%\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 6
        echo twig_safe_filter((isset($context['DownloadName']) ? $context['DownloadName'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"FileSize\" style=\"width: 100px;\" align=\"right\" nowrap=\"nowrap\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['DownloadSize']) ? $context['DownloadSize'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td align=\"right\" nowrap=\"nowrap\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['NumDownloads']) ? $context['NumDownloads'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"MaxDownloads\" style=\"width: 150px;\" nowrap=\"nowrap\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['MaxDownloads']) ? $context['MaxDownloads'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"ExpiresAfter\" style=\"width: 150px;\" nowrap=\"nowrap\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['ExpiresAfter']) ? $context['ExpiresAfter'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td style=\"width: 130px;\" nowrap=\"nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?ToDo=downloadProductFile&amp;downloadid=";
        // line 21
        echo twig_safe_filter((isset($context['DownloadId']) ? $context['DownloadId'] : null));
        echo "\" target=\"_blank\">";
        echo getLang("ViewDownload");
        echo "</a>&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"editDownload('";
        // line 22
        echo twig_safe_filter((isset($context['DownloadId']) ? $context['DownloadId'] : null));
        echo "'); return false;\">";
        echo getLang("Edit");
        echo "</a>&nbsp;&nbsp;<a href=\"#\" onclick=\"return deleteDownload('";
        echo twig_safe_filter((isset($context['DownloadId']) ? $context['DownloadId'] : null));
        echo "'); return false;\">";
        echo getLang("Delete");
        echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr id=\"download_edit_";
        // line 25
        echo twig_safe_filter((isset($context['DownloadId']) ? $context['DownloadId'] : null));
        echo "\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"QuickView\" colspan=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t</tr>";
    }

}

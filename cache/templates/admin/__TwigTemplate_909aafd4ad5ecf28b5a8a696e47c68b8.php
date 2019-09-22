<?php

/* Snippets/EmailTemplateDirectory.html */
class __TwigTemplate_909aafd4ad5ecf28b5a8a696e47c68b8 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow ";
        echo twig_safe_filter((isset($context['ParentClass']) ? $context['ParentClass'] : null));
        echo "\" id=\"";
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "\">
\t<td style=\"";
        // line 2
        echo twig_safe_filter((isset($context['NestingIndent']) ? $context['NestingIndent'] : null));
        echo "\">
\t\t<a href=\"#\" style=\"outline: none\" onclick=\"this.blur(); EmailTemplates.ExpandDirectory('";
        // line 3
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['RelativePath']) ? $context['RelativePath'] : null));
        echo "'); return false\">
\t\t\t<img src=\"images/plus.gif\" class=\"ExpandImg\" style=\"vertical-align: bottom\" border=\"0\" alt=\"\" />
\t\t</a>
\t\t<img src=\"images/folder.gif\" style=\"vertical-align: bottom; padding-right: 4px\" alt=\"\" />
\t\t";
        // line 7
        echo twig_safe_filter((isset($context['FileName']) ? $context['FileName'] : null));
        echo "
\t</td>
\t<td>";
        // line 9
        echo twig_safe_filter((isset($context['FileSize']) ? $context['FileSize'] : null));
        echo "</td>
\t<td>";
        // line 10
        echo twig_safe_filter((isset($context['FileDate']) ? $context['FileDate'] : null));
        echo "</td>
\t<td>&nbsp;</td>
</tr>
<tr class=\"GridRow\" id=\"Indicator_";
        // line 13
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "\" style=\"display: none;\">
\t<td style=\"height: 20px; ";
        // line 14
        echo twig_safe_filter((isset($context['NestingIndent']) ? $context['NestingIndent'] : null));
        echo "\" colspan=\"4\">
\t\t<img src=\"images/ajax-loader.gif\" alt=\"\" style=\"padding-left: 25px; vertical-align: bottom; padding-right: 4px;\" />
\t\t";
        // line 16
        echo getLang("LoadingPleaseWait");
        echo "\t</td>
</tr>";
    }

}

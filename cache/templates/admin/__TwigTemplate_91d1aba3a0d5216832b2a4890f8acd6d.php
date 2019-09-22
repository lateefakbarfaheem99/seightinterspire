<?php

/* Snippets/EmailTemplate.html */
class __TwigTemplate_91d1aba3a0d5216832b2a4890f8acd6d extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow ";
        echo twig_safe_filter((isset($context['ParentClass']) ? $context['ParentClass'] : null));
        echo "\">
\t<td style=\"";
        // line 2
        echo twig_safe_filter((isset($context['NestingIndent']) ? $context['NestingIndent'] : null));
        echo "\">
\t\t<img src=\"images/emailtemplate.gif\" style=\"vertical-align: bottom; padding-left: 4px; padding-right: 8px\" />
\t\t";
        // line 4
        echo twig_safe_filter((isset($context['FileName']) ? $context['FileName'] : null));
        echo "
\t</td>
\t<td>";
        // line 6
        echo twig_safe_filter((isset($context['FileSize']) ? $context['FileSize'] : null));
        echo "</td>
\t<td>";
        // line 7
        echo twig_safe_filter((isset($context['FileDate']) ? $context['FileDate'] : null));
        echo "</td>
\t<td><a href=\"#\" onclick=\"edit_template('";
        // line 8
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['RelativePath']) ? $context['RelativePath'] : null));
        echo "'); return false\">";
        echo getLang("Edit");
        echo "</a></td>
</tr>
<tr id=\"edit_";
        // line 10
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "\" style=\"display:none\">
\t<td colspan=\"3\" style=\"";
        // line 11
        echo twig_safe_filter((isset($context['NestingIndent']) ? $context['NestingIndent'] : null));
        echo "\">
\t\t<div id=\"edit_box_";
        // line 12
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "\"></div>
\t\t<div style=\"padding-bottom:10px; padding-left: 10px;\">
\t\t\t<input type=\"button\" value=\"";
        // line 14
        echo getLang("Save");
        echo "\" class=\"FormButton\" onclick=\"save_edit('";
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['RelativePath']) ? $context['RelativePath'] : null));
        echo "')\" /> <input type=\"button\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"edit_hide('";
        echo twig_safe_filter((isset($context['RowId']) ? $context['RowId'] : null));
        echo "');\" />
\t\t</div>
\t</td>
\t<td>&nbsp;</td>
</tr>";
    }

}

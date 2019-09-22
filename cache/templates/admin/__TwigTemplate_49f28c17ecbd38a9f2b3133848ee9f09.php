<?php

/* news.manage.row.tpl */
class __TwigTemplate_49f28c17ecbd38a9f2b3133848ee9f09 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t<td align=\"center\" style=\"width:25px\">
\t\t\t<input type=\"checkbox\" name=\"news[]\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['NewsId']) ? $context['NewsId'] : null));
        echo "\">
\t\t</td>
\t\t<td align=\"center\" style=\"width:18px\">
\t\t\t<div class=\"NewsIcon\"></div>
\t\t</td>
\t\t<td width=\"550\" class=\"";
        // line 9
        echo twig_safe_filter((isset($context['SortedFieldTitleClass']) ? $context['SortedFieldTitleClass'] : null));
        echo "\">
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "
\t\t</td>
\t\t<td style=\"width:250px\" class=\"";
        // line 12
        echo twig_safe_filter((isset($context['SortedFieldDateClass']) ? $context['SortedFieldDateClass'] : null));
        echo "\">
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "
\t\t</td>
\t\t<td align=\"center\" class=\"";
        // line 15
        echo twig_safe_filter((isset($context['SortedFieldVisibleClass']) ? $context['SortedFieldVisibleClass'] : null));
        echo "\">
\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['Visible']) ? $context['Visible'] : null));
        echo "
\t\t</td>
\t\t<td>
\t\t\t";
        // line 19
        echo twig_safe_filter((isset($context['EditNewsLink']) ? $context['EditNewsLink'] : null));
        echo "&nbsp;&nbsp;&nbsp;
\t\t\t<a title='";
        // line 20
        echo getLang("PreviewNewsPost");
        echo "' href=\"javascript:PreviewNews(";
        echo twig_safe_filter((isset($context['NewsId']) ? $context['NewsId'] : null));
        echo ")\">";
        echo getLang("PreviewNews");
        echo "</a>
\t\t</td>
\t</tr>";
    }

}

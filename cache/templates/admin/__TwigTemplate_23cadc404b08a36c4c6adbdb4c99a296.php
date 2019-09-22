<?php

/* redirects.row.tpl */
class __TwigTemplate_23cadc404b08a36c4c6adbdb4c99a296 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr id=\"RedirectRow_";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t<td align=\"center\" style=\"width:25px\">
\t\t<input type=\"checkbox\" name=\"redirects[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" id=\"RedirectCheckbox_";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" class=\"RedirectCheckbox\">
\t</td>
\t<td align=\"center\" style=\"width:20px\">
\t\t<img src=\"images/redirects.png\" alt=\"product\" height=\"16\" width=\"16\" />
\t</td>
\t<td>
\t\t<div style=\"width:100%;\"><input id=\"oldUrl_";
        // line 9
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" name=\"oldUrl[";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "]\" class='RedirectCurrentUrl inPlaceFieldDefault' value=\"";
        echo twig_safe_filter((isset($context['OldURL']) ? $context['OldURL'] : null));
        echo "\" /></div>
\t</td>

\t<td style=\"width:80px;\">
\t\t<select id=\"RedirectType_";
        // line 13
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" class=\"RedirectType\">
\t\t\t<option value=\"auto\" ";
        // line 14
        echo twig_safe_filter((isset($context['RedirectTypeAutoSelected']) ? $context['RedirectTypeAutoSelected'] : null));
        echo ">";
        echo getLang("RedirectTypeAuto");
        echo "</option>
\t\t\t<option value=\"manual\" ";
        // line 15
        echo twig_safe_filter((isset($context['RedirectTypeManualSelected']) ? $context['RedirectTypeManualSelected'] : null));
        echo ">";
        echo getLang("RedirectTypeManual");
        echo "</option>
\t\t</select>
\t</td>
\t<td>
\t\t<div class=\"RedirectAutoURL\" id=\"RedirectAutoURL_";
        // line 19
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" style=\"";
        echo twig_safe_filter((isset($context['RedirectTypeAutoDisplay']) ? $context['RedirectTypeAutoDisplay'] : null));
        echo "\">
\t\t\t<span id=\"RedirectAutoURL_Link_";
        // line 20
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" class=\"RedirectAutoURL_Link\"><a href=\"";
        echo twig_safe_filter((isset($context['NewURL']) ? $context['NewURL'] : null));
        echo "\" target=\"_blank\">";
        echo twig_safe_filter((isset($context['NewURLTitle']) ? $context['NewURLTitle'] : null));
        echo "</a></span>
\t\t\t<a href=\"javascript:void(0);\" class=\"linkerButton\" id=\"linkerButton_";
        // line 21
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['LinkerTitle']) ? $context['LinkerTitle'] : null));
        echo "</a>
\t\t</div>

\t\t<div class=\"RedirectManualURL\" id=\"RedirectManualURL_";
        // line 24
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\"  style=\"width:100%; ";
        echo twig_safe_filter((isset($context['RedirectTypeManualDisplay']) ? $context['RedirectTypeManualDisplay'] : null));
        echo "\"><input id=\"newUrl_";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" name=\"newUrl[";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "]\" class='inPlaceFieldDefault RedirectNewUrl' value=\"";
        echo twig_safe_filter((isset($context['NewURL']) ? $context['NewURL'] : null));
        echo "\" /></div>
\t</td>

\t<td style=\"width:30px;\">
\t\t<div id=\"RedirectActions_";
        // line 28
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" style=\"";
        echo twig_safe_filter((isset($context['RedirectActionsDisplay']) ? $context['RedirectActionsDisplay'] : null));
        echo "\">
\t\t\t<a title='";
        // line 29
        echo getLang("Test");
        echo "' class=\"Action TestLink\" href='";
        echo twig_safe_filter((isset($context['RedirectTestLink']) ? $context['RedirectTestLink'] : null));
        echo "' target=\"_blank\" id=\"TestLink_";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" >";
        echo getLang("Test");
        echo "</a>&nbsp;<a title='";
        echo getLang("Copy");
        echo "' class=\"Action CopyLink\" href='#' id=\"CopyLink_";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" >";
        echo getLang("Copy");
        echo "</a>&nbsp;<a title='";
        echo getLang("Delete");
        echo "' class=\"Action DeleteLink\" href='#' id=\"DeleteLink_";
        echo twig_safe_filter((isset($context['RedirectId']) ? $context['RedirectId'] : null));
        echo "\" >";
        echo getLang("Delete");
        echo "</a>
\t\t</div>
\t</td>
</tr>
";
    }

}

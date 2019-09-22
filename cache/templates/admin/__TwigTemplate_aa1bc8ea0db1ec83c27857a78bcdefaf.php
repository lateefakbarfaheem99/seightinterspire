<?php

/* news.preview.tpl */
class __TwigTemplate_aa1bc8ea0db1ec83c27857a78bcdefaf extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "


\t<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" >


\t<html ";
        // line 7
        if ((isset($context['rtl']) ? $context['rtl'] : null)) {
            echo "dir=\"rtl\"";
        }
        echo " xml:lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\">


\t\t<HEAD>


\t\t\t<TITLE>";
        // line 13
        echo getLang("PreviewNewsPost");
        echo "</TITLE>


\t\t\t<LINK href=\"Styles/windowstyles.css\" type=\"text/css\" rel=\"stylesheet\">


\t\t</HEAD>


\t\t<BODY>


\t\t\t<div class='Bar'>";
        // line 25
        echo getLang("PreviewNewsPost");
        echo "

\t\t\t\t(<A href=\"javascript:window.close()\">";
        // line 28
        echo getLang("CloseWindow");
        echo "</A>)


\t\t\t</div>


\t\t\t<table id=\"Table\" class=\"BodyContainer\">


\t\t\t\t<tr>


\t\t\t\t\t<td class=\"Heading\">


\t\t\t\t\t\t";
        // line 43
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "


\t\t\t\t\t</td>


\t\t\t\t</tr><tr>


\t\t\t\t<tr>


\t\t\t\t\t<td class=\"Small\">


\t\t\t\t\t\t";
        // line 58
        echo getLang("NewsPublished");
        echo " ";
        echo twig_safe_filter((isset($context['NewsDate']) ? $context['NewsDate'] : null));
        echo "


\t\t\t\t\t</td>


\t\t\t\t</tr><tr>


\t\t\t\t\t<td class=\"Text\">


\t\t\t\t\t\t<br />";
        // line 70
        echo twig_safe_filter((isset($context['Content']) ? $context['Content'] : null));
        echo "


\t\t\t\t\t</td>


\t\t\t\t</tr>


\t\t\t</table>


\t\t</BODY>


\t</HTML>";
    }

}

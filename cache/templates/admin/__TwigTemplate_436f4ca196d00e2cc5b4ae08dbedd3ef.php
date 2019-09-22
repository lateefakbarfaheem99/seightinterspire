<?php

/* review.preview.tpl */
class __TwigTemplate_436f4ca196d00e2cc5b4ae08dbedd3ef extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" >
\t<html ";
        // line 3
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
        // line 5
        echo getLang("PreviewReview");
        echo "</TITLE>
\t\t\t<LINK href=\"Styles/windowstyles.css\" type=\"text/css\" rel=\"stylesheet\">
\t\t</HEAD>
\t\t<BODY>
\t\t\t<div class='Bar'>";
        // line 9
        echo getLang("PreviewReview");
        echo "\t\t\t\t(<A href=\"javascript:window.close()\">";
        // line 10
        echo getLang("CloseWindow");
        echo "</A>)
\t\t\t</div>
\t\t\t<table id=\"Table\" class=\"BodyContainer\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading\">
\t\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "
\t\t\t\t\t\t<br />";
        // line 16
        echo twig_safe_filter((isset($context['Rating']) ? $context['Rating'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t\t<hr size=\"1\" noshade>
\t\t\t\t\t\t<strong>";
        // line 22
        echo getLang("Product");
        echo ": ";
        echo twig_safe_filter((isset($context['Product']) ? $context['Product'] : null));
        echo "</strong>
\t\t\t\t\t\t<br /><strong>";
        // line 23
        echo getLang("PostedBy");
        echo ": ";
        echo twig_safe_filter((isset($context['Author']) ? $context['Author'] : null));
        echo "</strong>
\t\t\t\t\t\t<hr size=\"1\" noshade>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['Review']) ? $context['Review'] : null));
        echo "
\t\t\t\t\t\t<br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</BODY>
\t</HTML>";
    }

}

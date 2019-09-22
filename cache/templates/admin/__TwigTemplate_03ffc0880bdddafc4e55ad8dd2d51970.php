<?php

/* pageheader.popup.tpl */
class __TwigTemplate_03ffc0880bdddafc4e55ad8dd2d51970 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
<html ";
        // line 2
        if ((isset($context['rtl']) ? $context['rtl'] : null)) {
            echo "dir=\"rtl\"";
        }
        echo " xml:lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\">
<head>
\t<title>";
        // line 4
        echo getLang("ControlPanel");
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<meta name=\"robots\" content=\"noindex, nofollow\" />
\t<link rel=\"stylesheet\" type=\"text/css\">
\t<style type=\"text/css\">
\t\t@import url(\"Styles/styles.css\");
\t\t@import url(\"Styles/tabmenu.css\");
\t\t@import url(\"Styles/iselector.css\");
\t</style>
\t<!--[if IE]>
\t<style type=\"text/css\">
\t\t@import url(\"Styles/ie.css\");
\t</style>
\t<![endif]-->
\t<script type=\"text/javascript\" src=\"../javascript/jquery.js?";
        // line 18
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/common.js?";
        // line 19
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
</head>

<body class=\"popupBody\">
\t<div class=\"popupContainer\">";
    }

}

<?php

/* pageheader.tpl */
class __TwigTemplate_0853e7bad1bcceb69c809672f3733aa9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
         \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<title>";
        // line 6
        echo getLang("ControlPanel");
        echo "</title>
\t<meta name=\"viewport\" content=\"width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\"/>
\t<style type=\"text/css\" media=\"screen\">@import \"templates/iphone/iui/iui.css\";</style>
\t<script type=\"application/x-javascript\" src=\"templates/iphone/iui/iui.js?";
        // line 9
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"application/x-javascript\" src=\"../javascript/jquery.js?";
        // line 10
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
</head>

<body>
";
    }

}

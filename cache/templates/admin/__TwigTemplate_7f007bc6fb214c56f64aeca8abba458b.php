<?php

/* install.done.tpl */
class __TwigTemplate_7f007bc6fb214c56f64aeca8abba458b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11\">
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
        echo getLang("InstallInterspireShoppingCart");
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<meta name=\"robots\" content=\"noindex, nofollow\" />
\t<style type=\"text/css\">
\t\t@import url(\"Styles/styles.css\");
\t\t@import url('Styles/tabmenu.css');
\t\t@import url(\"Styles/iselector.css\");
\t</style>
\t<!--[if IE]>
\t<style type=\"text/css\">
\t\t@import url(\"Styles/ie.css\");
\t</style>
\t<![endif]-->
\t<style>
\t\th3 { font-size:13px; }
\t</style>
\t<script type=\"text/javascript\" src=\"../javascript/jquery.js?";
        // line 20
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/install.js?";
        // line 21
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
</head>

<body>
\t<div id=\"box\">
\t\t<br /><br /><br /><br />
\t\t<table><tr><td style=\"border:solid 2px #DDD; padding:20px; background-color:#FFF; width:450px\">
\t\t<table>
\t\t  <tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t<img src=\"images/logo.jpg\" />
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td style=\"padding:10px 0px 5px 0px\">
\t\t\t\t";
        // line 36
        echo getLang("InstallationCompleted");
        echo "\t\t\t\t<br /><br />
\t\t\t\t<input type=\"button\" value=\"";
        // line 38
        echo getLang("LoginNow");
        echo "\" onclick=\"document.location.href='./'\" style=\"font-size:11px\" />
\t\t\t</td>
\t\t  </tr>
\t\t</table>
\t\t</td></tr></table>
\t\t<div style=\"padding:10px; margin-bottom:20px; text-align:center\">";
        // line 43
        echo twig_safe_filter((isset($context['Copyright']) ? $context['Copyright'] : null));
        echo "</div>
\t</div>
\t";
        // line 45
        echo twig_safe_filter((isset($context['HiddenImage']) ? $context['HiddenImage'] : null));
        echo "
</body>
</html>";
    }

}

<?php

/* pageheader.tpl */
class __TwigTemplate_2c9db14ca9be9675083e27bc6087195c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
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
        echo twig_safe_filter((isset($context['ControlPanelTitle']) ? $context['ControlPanelTitle'] : null));
        echo "</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<meta name=\"robots\" content=\"noindex, nofollow\" />
\t<style type=\"text/css\">
\t\t@import url(\"Styles/styles.css?";
        // line 8
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\");
\t\t@import url('Styles/new.css?";
        // line 9
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "');
\t\t@import url('Styles/tabmenu.css?";
        // line 10
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "');
\t\t@import url(\"Styles/iselector.css?";
        // line 11
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\");
\t\t@import url('../javascript/jquery/plugins/imodal/imodal.css?";
        // line 12
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "');
\t\t@import url('Styles/iconsearchbox.css?";
        // line 13
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "');
\t\t@import url('Styles/thickbox.css?";
        // line 14
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "');
\t\t";
        // line 15
        echo twig_safe_filter((isset($context['AdditionalStylesheets']) ? $context['AdditionalStylesheets'] : null));
        echo "
\t</style>
\t<link rel=\"SHORTCUT ICON\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context['FaviconPath']) ? $context['FaviconPath'] : null), "1");
        echo "\" />
\t<!--[if IE]>
\t<style type=\"text/css\">
\t\t@import url(\"Styles/ie.css?";
        // line 20
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\");
\t</style>
\t<![endif]-->

\t";
        // line 24
        echo twig_safe_filter((isset($context['RTLStyles']) ? $context['RTLStyles'] : null));
        echo "

\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['headScripts']) ? $context['headScripts'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['script']) {
            echo "\t\t<script type=\"text/javascript\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context['script']) ? $context['script'] : null), "1");
            echo "?";
            echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
            echo "\"></script>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('.GridPanel input:checkbox').shiftcheckbox();
\t\t});
\t\tconfig.ProductName = '";
        // line 34
        echo twig_safe_filter((isset($context['ProductName']) ? $context['ProductName'] : null));
        echo "';
\t\tconfig.ShopPath = '";
        // line 35
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "';
\t\tvar ThousandsToken = '";
        // line 36
        echo twig_escape_filter($this->env, (isset($context['ThousandsToken']) ? $context['ThousandsToken'] : null), "1");
        echo "';
\t\tvar DecimalToken = '";
        // line 37
        echo twig_escape_filter($this->env, (isset($context['DecimalToken']) ? $context['DecimalToken'] : null), "1");
        echo "';
\t\tvar DimensionsThousandsToken = '";
        // line 38
        echo twig_escape_filter($this->env, (isset($context['DimensionsThousandsToken']) ? $context['DimensionsThousandsToken'] : null), "1");
        echo "';
\t\tvar DimensionsDecimalToken = '";
        // line 39
        echo twig_escape_filter($this->env, (isset($context['DimensionsDecimalToken']) ? $context['DimensionsDecimalToken'] : null), "1");
        echo "';
\t\t";
        // line 40
        echo twig_safe_filter((isset($context['DefineLanguageVars']) ? $context['DefineLanguageVars'] : null));
        echo "
\t\tvar url = 'remote.php';
\t</script>
</head>
<body>
\t<div id=\"AjaxLoading\"><img src=\"images/ajax-loader.gif\" />&nbsp; ";
        // line 45
        echo getLang("LoadingPleaseWait");
        echo "</div>
";
        // line 46
        echo twig_safe_filter((isset($context['WarningNotices']) ? $context['WarningNotices'] : null));
        echo "
<div class=\"OuterContainer\">
\t<div class=\"Header\">
\t\t<div class=\"logo\">
\t\t\t<a href=\"index.php\">";
        // line 50
        echo twig_safe_filter((isset($context['AdminLogo']) ? $context['AdminLogo'] : null));
        echo "</a>
\t\t</div>

\t\t<div class=\"textlinks\">
\t\t\t";
        // line 54
        echo twig_safe_filter((isset($context['textLinks']) ? $context['textLinks'] : null));
        echo "
\t\t</div>

\t\t<div class=\"LoggedInAs\">
\t\t\t";
        // line 58
        echo twig_safe_filter((isset($context['CurrentlyLoggedInAs']) ? $context['CurrentlyLoggedInAs'] : null));
        echo ",
\t\t\t<a href=\"index.php?ToDo=logOut\" class=\"Logout\">";
        // line 59
        echo getLang("Logout");
        echo "?</a>
\t\t</div>
\t</div>

\t<div class=\"menuBar\">


\t\t<div class=\"ControlPanelSearchBar\">
\t\t\t<form method=\"post\" action=\"index.php?ToDo=quickSearch\">
\t\t\t\t<input id=\"quicksearch\" onfocus=\"\$(this).addClass('QuickSearchFocused'); if(!\$(this).data('custom')) { \$(this).val(''); }\" onblur=\"if(\$(this).val()) { \$(this).data('custom', 1); return; } \$(this).removeClass('QuickSearchFocused'); if(!\$(this).val()) { \$(this).val('";
        // line 68
        echo getLang("QuickSearchValue");
        echo "'); \$(this).data('custom', 0); }\" name=\"query\" type=\"text\" value=\"";
        echo getLang("QuickSearchValue");
        echo "\" />
\t\t\t</form>
\t\t</div>
\t\t";
        // line 71
        echo twig_safe_filter((isset($context['menuRow']) ? $context['menuRow'] : null));
        echo "
\t</div>

\t<div class=\"ContentContainer\">

\t\t<div id=\"PageBreadcrumb\" class=\"Breadcrumb\"  style=\"";
        // line 76
        echo twig_safe_filter((isset($context['HideBreadcrumb']) ? $context['HideBreadcrumb'] : null));
        echo "\">
\t\t\t<ul>
\t\t\t\t";
        // line 78
        echo twig_safe_filter((isset($context['BreadcrumbTrail']) ? $context['BreadcrumbTrail'] : null));
        echo "
\t\t\t</ul>
\t\t</div>

\t<script type=\"text/javascript\">//<!--
\t\t// not in DOM ready, we want this to happen ASAP so the user doesn't see a colour flicker
\t\t\$('#PageBreadcrumb ul li:last').addClass('Last').prev('li').addClass('SecondLast');
\t//--></script>

\t\t";
        // line 87
        echo twig_safe_filter((isset($context['InfoTip']) ? $context['InfoTip'] : null));
        echo "
";
    }

}

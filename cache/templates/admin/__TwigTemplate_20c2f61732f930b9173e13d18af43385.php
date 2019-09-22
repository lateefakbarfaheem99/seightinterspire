<?php

/* Snippets/EditorTinyMCE.html */
class __TwigTemplate_20c2f61732f930b9173e13d18af43385 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/javascript/tinymce/tiny_mce.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
";
        // line 2
        echo twig_safe_filter((isset($context['EditorTinyMCECommon']) ? $context['EditorTinyMCECommon'] : null));
    }

}

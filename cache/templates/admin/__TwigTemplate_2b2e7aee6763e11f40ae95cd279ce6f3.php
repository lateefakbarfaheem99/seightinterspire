<?php

/* Snippets/MessageBox.html */
class __TwigTemplate_2b2e7aee6763e11f40ae95cd279ce6f3 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"MessageBox MessageBox";
        echo twig_safe_filter((isset($context['MsgBox_Type']) ? $context['MsgBox_Type'] : null));
        echo " ";
        echo twig_escape_filter($this->env, (isset($context['MsgBox_ExtraClasses']) ? $context['MsgBox_ExtraClasses'] : null), "1");
        echo "\">
\t\t";
        // line 2
        echo twig_safe_filter((isset($context['MsgBox_Message']) ? $context['MsgBox_Message'] : null));
        echo "
\t</div>
";
    }

}
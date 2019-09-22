<?php

/* tooltip.tpl */
class __TwigTemplate_f76f30088a56668f26c96631e9989af6 extends Twig_Template
{
    public function display(array $context)
    {
    }

    // line 1
    public function gettooltip($id = null, $title = null, $content = null, $titleReplacements = null, $contentReplacements = null)
    {
        $context = array(
            "id" => $id,
            "title" => $title,
            "content" => $content,
            "titleReplacements" => $titleReplacements,
            "contentReplacements" => $contentReplacements,
        );

        echo "<img
\tonmouseout=\"HideHelp('";
        // line 3
        echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
        echo "');\" 
\tonmouseover=\"ShowHelp('";
        // line 4
        echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
        echo "', '";
        echo getLang((isset($context['title']) ? $context['title'] : null), (isset($context['titleReplacements']) ? $context['titleReplacements'] : null));
        echo "', '";
        echo getLang((isset($context['content']) ? $context['content'] : null), (isset($context['contentReplacements']) ? $context['contentReplacements'] : null));
        echo "')\" 
\tsrc=\"images/help.gif\" 
\twidth=\"24\" 
\theight=\"16\" 
\tborder=\"0\" 
\tstyle=\"margin-top: 5px;\"
/>
<div id=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
        echo "\"></div>
";
    }

}

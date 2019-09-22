<?php

/* Snippets/SubMenuItem.html */
class __TwigTemplate_6da3313e6ccd0b126b844a0cd0a9aeb8 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<li>
\t<a id=\"";
        // line 2
        echo twig_safe_filter((isset($context['SubMenuId']) ? $context['SubMenuId'] : null));
        echo "\" href=\"";
        echo twig_safe_filter((isset($context['SubMenuURL']) ? $context['SubMenuURL'] : null));
        echo "\" class=\"";
        echo twig_safe_filter((isset($context['ExtraClass']) ? $context['ExtraClass'] : null));
        echo "\">
\t\t<span class=\"SubMenuImage ";
        // line 3
        echo twig_safe_filter((isset($context['SubMenuId']) ? $context['SubMenuId'] : null));
        echo "\" ";
        if ($this->getAttribute((isset($context['menuItem']) ? $context['menuItem'] : null), "icon", array(), "any")) {
            echo "style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['menuItem']) ? $context['menuItem'] : null), "icon", array(), "any"), "1");
            echo "')\"";
        }
        echo "></span>
\t\t<span class=\"SubMenuText\">

\t\t\t<strong>";
        // line 6
        echo twig_safe_filter((isset($context['SubMenuName']) ? $context['SubMenuName'] : null));
        echo "</strong>
\t\t\t<span>";
        // line 7
        echo twig_safe_filter((isset($context['SubMenuText']) ? $context['SubMenuText'] : null));
        echo "</span>
\t\t</span>
\t</a>
</li>";
    }

}

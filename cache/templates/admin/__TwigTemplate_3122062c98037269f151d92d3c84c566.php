<?php

/* layout.choosetemplate.row.tpl */
class __TwigTemplate_3122062c98037269f151d92d3c84c566 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"TemplateBox ";
        echo twig_safe_filter((isset($context['TemplateInstalledClass']) ? $context['TemplateInstalledClass'] : null));
        echo " ";
        echo twig_safe_filter((isset($context['CurrentTemplateClass']) ? $context['CurrentTemplateClass'] : null));
        echo " TemplateId_";
        echo twig_safe_filter((isset($context['TemplateId']) ? $context['TemplateId'] : null));
        echo "\">
\t<div class=\"TemplateHeading\">
\t\t\t<span class=\"TemplateName\">";
        // line 3
        echo twig_safe_filter((isset($context['TemplateName']) ? $context['TemplateName'] : null));
        echo "</span> - <span class=\"TemplateColor\">";
        echo twig_safe_filter((isset($context['TemplateColor']) ? $context['TemplateColor'] : null));
        echo "</span>
\t</div>
\t<a href=\"";
        // line 5
        echo twig_safe_filter((isset($context['TemplatePreviewFull']) ? $context['TemplatePreviewFull'] : null));
        echo "\" class=\"TplPreviewImage\" title=\"";
        echo getLang("PreviewLargeImage");
        echo "\">
\t\t<img class=\"TemplatePreviewThumb\" src=\"";
        // line 6
        echo twig_safe_filter((isset($context['TemplatePreviewThumb']) ? $context['TemplatePreviewThumb'] : null));
        echo "\" alt=\"";
        echo twig_safe_filter((isset($context['TemplateName']) ? $context['TemplateName'] : null));
        echo " - ";
        echo twig_safe_filter((isset($context['TemplateColor']) ? $context['TemplateColor'] : null));
        echo "\" />
\t</a>
\t<a href=\"#\" class=\"ActivateLink\" title=\"";
        // line 8
        echo twig_safe_filter((isset($context['TemplateName']) ? $context['TemplateName'] : null));
        echo " - ";
        echo twig_safe_filter((isset($context['TemplateColor']) ? $context['TemplateColor'] : null));
        echo "\">";
        echo getLang("ApplyThisTemplate");
        echo "</a>
</div>";
    }

}

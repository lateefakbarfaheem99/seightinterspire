<?php

/* page.preview.tpl */
class __TwigTemplate_528314901bfb81cf3a95ebfb67eac235 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
\t<title>";
        // line 4
        echo getLang("PreviewPage");
        echo "</title>
\t<link href=\"Styles/windowstyles.css\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        // line 6
        echo twig_safe_filter((isset($context['Stylesheets']) ? $context['Stylesheets'] : null));
        echo "
</head>
<body style=\"background-image: none;\">
\t<div class='Bar' style=\"margin: 0;\">";
        // line 9
        echo getLang("PreviewPage");
        echo "\t\t(<A href=\"javascript:window.close()\">";
        // line 10
        echo getLang("CloseWindow");
        echo "</A>)
\t</div>

\t<div class=\"Content Wide\" style=\"margin: 0; padding-top: 0;\" id=\"LayoutColumn2\">
\t\t<div class=\"Block Moveable\" id=\"PageContent\">
\t\t\t<h2 style=\"margin-top: 0;\">";
        // line 15
        echo twig_safe_filter((isset($context['PageTitle']) ? $context['PageTitle'] : null));
        echo "</h2>
\t\t\t<div class=\"BlockContent\">
\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['PageContent']) ? $context['PageContent'] : null));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html>";
    }

}

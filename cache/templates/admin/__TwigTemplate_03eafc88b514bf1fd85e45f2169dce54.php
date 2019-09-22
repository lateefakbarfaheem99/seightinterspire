<?php

/* robotstxt.tpl */
class __TwigTemplate_03eafc88b514bf1fd85e45f2169dce54 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "<div id=\"content\">
\t<h1>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EditRobotsTxtFile", array(), "any"), "1");
        echo "</h1>
\t<p class=\"intro\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RobotsIntro", array(), "any"), "1");
        echo "</p>
\t";
        // line 5
        echo twig_safe_filter((isset($context['flashMessages']) ? $context['flashMessages'] : null));
        echo "
\t<form action=\"index.php?ToDo=saveRobotsTxt\" method=\"post\" id=\"robotsForm\">
\t\t<p class=\"intro\">
\t\t\t<input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Save", array(), "any"), "1");
        echo "\" class=\"saveButton\" />
\t\t\t<input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RobotsRevertButton", array(), "any"), "1");
        echo "\" id=\"robotstxtRevertButton\" name=\"robotstxtRevertButton\" />
\t\t\t&nbsp;";
        // line 10
        echo getLang("Or");
        echo "&nbsp;<a href=\"#\" id=\"robotstxtCancelLink\">";
        echo getLang("Cancel");
        echo "</a>
\t\t</p>
\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RobotsTxt", array(), "any"), ), "method"), "1");
        echo "
\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
        echo "
\t\t\t<textarea class=\"Field600\" rows=\"20\" name=\"robotstxtFileContent\">";
        // line 15
        echo twig_safe_filter((isset($context['fileContent']) ? $context['fileContent'] : null));
        echo "</textarea>
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t</form>
</div>
<script type=\"text/javascript\" charset=\"utf-8\">
\t\$('#robotstxtRevertButton').bind('click', function () {
\t\tvar r = confirm(\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RobotsRevertPrompt", array(), "any"), "1");
        echo "\");
\t\treturn r;
\t});

\t\$('#robotstxtCancelLink').bind('click', function () {
\t\tvar r = confirm( \"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RobotsCancelPrompt", array(), "any"), "1");
        echo "\");
\t\tif (r == true) {
\t\t\twindow.location = 'index.php?ToDo=ViewEditRobotsTxt';
\t\t}

\t\treturn false;
\t});
</script>
";
    }

}

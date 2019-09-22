<?php

/* settings.shippingmanager.manage.tpl */
class __TwigTemplate_3e0c63d761f844d98f45fe3d2d608910 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
<div id=\"content\">
\t<form action=\"index.php?ToDo=saveShippingManagerSettings\" method=\"post\" id=\"shippingManagerForm\" accept-charset=\"utf-8\">
\t\t<input type=\"hidden\" name=\"currentTab\" id=\"currentTab\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context['currentTab']) ? $context['currentTab'] : null), "1");
        echo "\" />
\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingManagerSettings", array(), "any"), "1");
        echo "</h1>
\t\t<p class=\"intro\">
\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingManagerIntro", array(), "any"), "1");
        echo "
\t\t</p>

\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "

\t\t<p class=\"intro\">
\t\t\t<input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Save", array(), "any"), "1");
        echo "\" />
\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Or", array(), "any"), "1");
        echo " <a href=\"#\" class=\"cancelLink\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Cancel", array(), "any"), "1");
        echo "</a>
\t\t</p>

\t\t<div id=\"tabs\" class=\"tabs\">
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tabs", array((isset($context['tabs']) ? $context['tabs'] : null), ), "method"), "1");
        echo "

\t\t\t<div class=\"tabContent\" id=\"general\">
\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingManagerSettings", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ManageShippingWith", array(), "any"), "required" => true), ), "method"), "1");
        // line 29
        echo "
\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "multiSelect", array("shippingManagers[]", (isset($context['shippingManagers']) ? $context['shippingManagers'] : null), (isset($context['enabledShippingManagers']) ? $context['enabledShippingManagers'] : null), array("id" => "shippingManagers", "class" => "Field300 ISSelectReplacement"), ), "method"), "1");
        // line 33
        echo "
\t\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t</div>

\t\t\t";
        // line 38
        echo twig_safe_filter((isset($context['moduleTabContent']) ? $context['moduleTabContent'] : null));
        echo "
\t\t</div>

\t\t<div class=\"horizontalFormContainer\" style=\"background-color: white;\">
\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t<input type=\"submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Save", array(), "any"), "1");
        echo "\" />
\t\t\t\tor <a href=\"#\" class=\"cancelLink\">";
        // line 44
        echo getLang("Cancel");
        echo "</a>
\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$('#tabs').tabs({
\t\t\t\tselect: function(event, ui){
\t\t\t\t\t\$('#currentTab').val(ui.panel.id);
\t\t\t\t}
\t\t\t});

\t\t\t";
        // line 57
        if ((isset($context['currentTab']) ? $context['currentTab'] : null)) {
            echo "\$('#tabs').tabs('select', '";
            echo $this->getEnvironment()->getExtension('interspire')->jsFilter((isset($context['currentTab']) ? $context['currentTab'] : null));
            echo "');";
        }
        echo "
\t\t\t\$('.cancelLink').click(function() {
\t\t\t\tif(confirm('";
        // line 60
        echo getLang("ConfirmCancel");
        echo "')) {
\t\t\t\t\twindow.location = 'index.php?ToDo=viewShippingManagerSettings';
\t\t\t\t} else {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
</div>";
    }

}

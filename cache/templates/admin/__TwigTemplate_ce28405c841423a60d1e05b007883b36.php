<?php

/* login.form.tpl */
class __TwigTemplate_ce28405c841423a60d1e05b007883b36 extends Twig_Template
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
        echo getLang("ControlPanel");
        echo "</title>
\t<meta name=\"viewport\" content=\"width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;\"/>
\t<style type=\"text/css\" media=\"screen\">@import \"templates/iphone/iui/iui.css\";</style>
\t<script type=\"application/x-javascript\" src=\"templates/iphone/iui/iui.js?";
        // line 7
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 8
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<meta name=\"robots\" content=\"noindex, nofollow\" />
</head>

<body>
    <div class=\"toolbar\">
        <h1 id=\"pageTitle\"></h1>
    </div>
    <div id=\"Login\" title=\"";
        // line 16
        echo getLang("LoginBelow");
        echo "\" class=\"panel\" selected=\"true\">
\t<fieldset>
\t<form action=\"index.php?ToDo=";
        // line 18
        echo twig_safe_filter((isset($context['SubmitAction']) ? $context['SubmitAction'] : null));
        echo "\" class=\"dialog\" onsubmit=\"return CheckLoginForm()\" method=\"post\">
\t    <div class=\"row\">
                <label>";
        // line 20
        echo getLang("Username");
        echo "</label>
                <input type=\"text\" name=\"username\" id=\"username\" value=\"";
        // line 21
        echo twig_safe_filter((isset($context['Username']) ? $context['Username'] : null));
        echo "\"/>
            </div>
            <div class=\"row\">
                <label>";
        // line 24
        echo getLang("Password");
        echo "</label>
                <input type=\"password\" autocomplete=\"off\" name=\"password\" id=\"password\" value=\"";
        // line 25
        echo twig_safe_filter((isset($context['Password']) ? $context['Password'] : null));
        echo "\"/>
            </div>
\t</fieldset>
    \t<input type=\"submit\" value=\"";
        // line 28
        echo getLang("Login");
        echo "\" style=\"margin-top:-10px\" />
\t</form>
    </div>

    <script type=\"text/javascript\">

\tfunction CheckLoginForm() {
\t\tvar u = document.getElementById(\"username\");
\t\tvar p = document.getElementById(\"password\");

\t\tif(u.value == \"\") {
\t\t\talert('";
        // line 39
        echo getLang("NoUsername");
        echo "');
\t\t\tu.focus();
\t\t\treturn false;
\t\t}

\t\tif(p.value == \"\") {
\t\t\talert('";
        // line 45
        echo getLang("NoPassword");
        echo "');
\t\t\tp.focus();
\t\t\treturn false;
\t\t}

\t\t// Everything is OK
\t\treturn true;
\t}

    </script>

</body>
</html>";
    }

}

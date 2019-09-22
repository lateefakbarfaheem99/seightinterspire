<?php

/* login.form.tpl */
class __TwigTemplate_e5bb88088bb68028335a45e69d765022 extends Twig_Template
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
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<meta name=\"robots\" content=\"noindex, nofollow\" />
\t<style type=\"text/css\">
\t\t@import url(\"Styles/styles.css\");
\t\t@import url('Styles/tabmenu.css');
\t\t@import url(\"Styles/iselector.css\");
\t</style>
\t<link rel=\"SHORTCUT ICON\" href=\"favicon.ico\" />
\t<!--[if IE]>
\t<style type=\"text/css\">
\t\t@import url(\"Styles/ie.css\");
\t</style>
\t<![endif]-->
\t<script type=\"text/javascript\" src=\"../javascript/jquery.js?";
        // line 18
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/menudrop.js?";
        // line 19
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/common.js?";
        // line 20
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"../javascript/iselector.js?";
        // line 21
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"../javascript/thickbox.js?";
        // line 22
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"Styles/thickbox.css?";
        // line 23
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" type=\"text/css\" media=\"screen\" />
\t<script type=\"text/javascript\">
\t\tvar url = 'remote.php';
\t</script>
</head>

<body>
\t<form action=\"";
        // line 30
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=";
        echo twig_safe_filter((isset($context['SubmitAction']) ? $context['SubmitAction'] : null));
        echo "\" method=\"post\" name=\"frmLogin\" id=\"frmLogin\">
\t<div id=\"box\">
\t\t<table><tr><td style=\"border:solid 2px #DDD; padding:20px; background-color:#FFF; width:300px\">
\t\t<table>
\t\t  <tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t<a href=\"index.php\">";
        // line 36
        echo twig_safe_filter((isset($context['AdminLogo']) ? $context['AdminLogo'] : null));
        echo "</a>
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td style=\"padding:0 0 0 5px\">";
        // line 40
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td>";
        // line 43
        echo twig_safe_filter((isset($context['FlashMessages']) ? $context['FlashMessages'] : null));
        echo "</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td>
\t\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t  <td nowrap style=\"padding:0px 10px 0px 10px\">";
        // line 49
        echo getLang("UsernameLabel");
        echo "</td>
\t\t\t\t  <td>
\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" class=\"Field150\" value=\"";
        // line 51
        echo twig_safe_filter((isset($context['Username']) ? $context['Username'] : null));
        echo "\">
\t\t\t\t  </td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td nowrap style=\"padding:0px 10px 0px 10px\">";
        // line 55
        echo getLang("PasswordLabel");
        echo "</td>
\t\t\t\t  <td>
\t\t\t\t\t<input type=\"password\" autocomplete=\"off\" name=\"password\" id=\"password\" class=\"Field150\" value=\"";
        // line 57
        echo twig_safe_filter((isset($context['Password']) ? $context['Password'] : null));
        echo "\">
\t\t\t\t  </td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 60
        if ((isset($context['ShowRememberMe']) ? $context['ShowRememberMe'] : null)) {
            echo "\t\t\t\t<tr>
\t\t\t\t  <td nowrap>&nbsp;</td>
\t\t\t\t  <td>&nbsp;<input type=\"checkbox\" name=\"remember\" id=\"remember\" value=\"ON\" style=\"margin-left:-0px\"> <label for=\"remember\">";
            // line 63
            echo getLang("RememberMe");
            echo "</label>
\t\t\t\t  </td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t  <tr>
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t<td>
\t\t\t\t\t  <input type=\"submit\" name=\"SubmitButton\" id=\"LoginSubmitButton\" value=\"";
        // line 70
        echo getLang("Login");
        echo "\" class=\"FormButton\">
\t\t\t\t\t  &nbsp;&nbsp;";
        // line 71
        echo getLang("ForgotPassLink");
        echo "\t\t\t\t\t</td>
\t\t\t\t  </tr>
\t\t\t\t  <tr><td class=\"Gap\"></td></tr>
\t\t\t  </table>
\t\t\t</td>
\t\t  </tr>
\t\t</table>
\t\t</td></tr></table>
\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\t\$('#frmLogin').submit(function() {
\t\t\tvar f = document.frmLogin;

\t\t\tif(f.username.value == '')
\t\t\t{
\t\t\t\talert('";
        // line 90
        echo getLang("NoUsername");
        echo "');
\t\t\t\tf.username.focus();
\t\t\t\tf.username.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(f.password.value == '')
\t\t\t{
\t\t\t\talert('";
        // line 98
        echo getLang("NoPassword");
        echo "');
\t\t\t\tf.password.focus();
\t\t\t\tf.password.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t});

\t\tfunction sizeBox() {
\t\t\tvar w = \$(window).width();
\t\t\tvar h = document.getElementsByTagName('html')[0].clientHeight
\t\t\t\$('#box').css('position', 'absolute');
\t\t\t\$('#box').css('top', h/2-(\$('#box').height()/2)-50);
\t\t\t\$('#box').css('left', w/2-(\$('#box').width()/2));
\t\t}

\t\t\$(document).ready(function() {
\t\t\tsizeBox();
\t\t\t\$('#username').focus();
\t\t});

\t\t\$(window).resize(function() {
\t\t\tsizeBox();
\t\t});

\t</script>

</body>
</html>";
    }

}

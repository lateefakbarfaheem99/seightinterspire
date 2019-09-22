<?php

/* password.form.tpl */
class __TwigTemplate_d13d389d78388aa0972f8dd9f811b3fe extends Twig_Template
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
\t</style>
\t<!--[if IE]>
\t<style type=\"text/css\">
\t\t@import url(\"Styles/ie.css\");
\t</style>
\t<![endif]-->
\t<script type=\"text/javascript\" src=\"../javascript/jquery.js?";
        // line 15
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"script/common.js?";
        // line 16
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
</head>

<body>
\t<form action=\"index.php?ToDo=forgotPass&step=sendEmail\" method=\"post\" name=\"frmForgotPass\" id=\"frmForgotPass\">
\t<div id=\"box\">
\t\t<table><tr><td style=\"border:solid 2px #DDD; padding:20px; background-color:#FFF; width:300px\">
\t\t<table>
\t\t  <tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t<a href=\"index.php\">";
        // line 26
        echo twig_safe_filter((isset($context['AdminLogo']) ? $context['AdminLogo'] : null));
        echo "</a>
\t\t\t</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td style=\"padding:0 0 0 10px\">";
        // line 30
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td>";
        // line 33
        echo twig_safe_filter((isset($context['FlashMessages']) ? $context['FlashMessages'] : null));
        echo "</td>
\t\t  </tr>
\t\t  <tr>
\t\t\t<td>
\t\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t  <td nowrap style=\"padding:0px 10px 0px 10px\">";
        // line 39
        echo getLang("UsernameLabel");
        echo "</td>
\t\t\t\t  <td>
\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" class=\"Field150\" value=\"";
        // line 41
        echo twig_safe_filter((isset($context['Username']) ? $context['Username'] : null));
        echo "\">
\t\t\t\t  </td>
\t\t\t\t</tr>
\t\t\t\t  <tr>
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t<td>
\t\t\t\t\t  <input type=\"submit\" name=\"SubmitButton\" value=\"";
        // line 47
        echo getLang("SendEmail");
        echo "\" class=\"FormButton\">
\t\t\t\t\t</td>
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

\t\t\$('#frmForgotPass').submit(function() {
\t\t\tif(\$('#username').val() == '') {
\t\t\t\talert('";
        // line 63
        echo getLang("NoUsername");
        echo "');
\t\t\t\t\$('#username').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t});

\t\tfunction sizeBox() {
\t\t\tvar w = \$(window).width();
\t\t\tvar h = \$(window).height();
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

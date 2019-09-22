<?php

/* password.reset.tpl */
class __TwigTemplate_d44c742767651668a28457ee1ed91805 extends Twig_Template
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
\t<form action=\"index.php?ToDo=forgotPass&step=reset&t=";
        // line 20
        echo twig_escape_filter($this->env, (isset($context['Token']) ? $context['Token'] : null), "1");
        echo "\" method=\"post\" name=\"frmResetPass\" id=\"frmResetPass\">
\t<div id=\"box\">
\t\t<table><tr><td style=\"border:solid 2px #DDD; padding:20px; background-color:#FFF; width:300px\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td class=\"Heading1\"><a href=\"index.php\">";
        // line 25
        echo twig_safe_filter((isset($context['AdminLogo']) ? $context['AdminLogo'] : null));
        echo "</a></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"padding:0 0 0 10px\">";
        // line 28
        echo getLang("ResetPasswordIntro");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 31
        echo twig_safe_filter((isset($context['FlashMessages']) ? $context['FlashMessages'] : null));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t  <td>
\t\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\">";
        // line 37
        echo getLang("UsernameLabel");
        echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" class=\"Field150\" value=\"";
        // line 39
        echo twig_safe_filter((isset($context['Username']) ? $context['Username'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\">";
        // line 43
        echo getLang("NewPassword");
        echo ":</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"password\" autocomplete=\"off\" name=\"newpassword\" id=\"newpassword\" class=\"Field150\" value=\"\">
\t\t\t\t\t\t<div class=\"PasswordStrengthMeter\" id=\"meterid\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td nowrap style=\"padding:0px 10px 0px 10px\">";
        // line 50
        echo getLang("NewPasswordConfirm");
        echo ":</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"password\" autocomplete=\"off\" name=\"newpassword2\" id=\"newpassword2\" class=\"Field150\" value=\"\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t<td>
\t\t\t\t\t  <input type=\"submit\" name=\"SubmitButton\" value=\"";
        // line 58
        echo getLang("Update");
        echo "\" class=\"FormButton\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t</table>
\t\t\t  </td>
\t\t\t</tr>
\t\t</table>
\t\t</td></tr></table>
\t</div>
\t</form>

\t<script type=\"text/javascript\" src=\"../javascript/passwordmeter.js\"></script>
\t<script type=\"text/javascript\">
\t\tlang.PasswordStrengthMeter_MsgDefault = \"";
        // line 72
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgDefault"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgTooShort = \"";
        // line 73
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgTooShort"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgNoAlphaNum = \"";
        // line 74
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgNoAlphaNum"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgWeak = \"";
        // line 75
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgWeak"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgStrong = \"";
        // line 76
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgStrong"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgVeryStrong = \"";
        // line 77
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgVeryStrong"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_Tip = \"";
        // line 78
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_Tip"), "'");
        echo "\";
\t\tvar passwordMeter = new PasswordStrengthMeter('newpassword', 'meterid', 'tipid', ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context['PCIPasswordMinLen']) ? $context['PCIPasswordMinLen'] : null), "1");
        echo ");

\t\t\$('#frmResetPass').submit(function() {
\t\t\tif(\$('#username').val() == '') {
\t\t\t\talert('";
        // line 83
        echo getLang("NoUsername");
        echo "');
\t\t\t\t\$('#username').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tvar pass1 = \$('#newpassword').val();
\t\t\tvar pass2 = \$('#newpassword2').val();
\t\t\tif(pass1 == '') {
\t\t\t\talert('";
        // line 91
        echo getLang("NoNewPassword");
        echo "');
\t\t\t\t\$('#newpassword').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(pass2 == '') {
\t\t\t\talert('";
        // line 97
        echo getLang("NoNewPassword2");
        echo "');
\t\t\t\t\$('#newpassword2').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (pass1 != pass2) {
\t\t\t\talert('";
        // line 103
        echo getLang("PasswordDontMatch");
        echo "');
\t\t\t\t\$('#newpassword2').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// client side password validation (change password)
\t\t\tvar res = passwordMeter.validate(pass1);
\t\t\tif (res.valid == false) {
\t\t\t\talert(res.msg);
\t\t\t\t\$('#newpassword').focus();
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
\t\t\tpasswordMeter.init();
\t\t});

\t\t\$(window).resize(function() {
\t\t\tsizeBox();
\t\t});

\t</script>

</body>
</html>";
    }

}

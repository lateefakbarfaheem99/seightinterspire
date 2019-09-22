<?php

/* ordermessage.form.tpl */
class __TwigTemplate_d3a75787f50a5d524e00daa2f104db09 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckMessageForm)\" id=\"frmMessage\" method=\"post\">
\t<input type=\"hidden\" name=\"orderId\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "\">
\t<input type=\"hidden\" name=\"messageId\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['MessageId']) ? $context['MessageId'] : null));
        echo "\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 8
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 12
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 14
        echo twig_safe_filter((isset($context['ButtonAction']) ? $context['ButtonAction'] : null));
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 21
        echo getLang("MessageDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 25
        echo twig_safe_filter((isset($context['MessageToFrom']) ? $context['MessageToFrom'] : null));
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"customer\" name=\"customer\" class=\"Field400\" value=\"";
        // line 28
        echo twig_safe_filter((isset($context['MessageTo']) ? $context['MessageTo'] : null));
        echo "\" readonly disabled style=\"background-color:#EBEBE4; border:solid 1px #7F9DB9\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 33
        echo getLang("MessageSubject");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"subject\" name=\"subject\" class=\"Field400\" value=\"";
        // line 36
        echo twig_safe_filter((isset($context['MessageSubject']) ? $context['MessageSubject'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 41
        echo getLang("MessageContent");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea id=\"message\" name=\"message\" class=\"Field400\" rows=\"7\">";
        // line 44
        echo twig_safe_filter((isset($context['MessageContent']) ? $context['MessageContent'] : null));
        echo "</textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 49
        echo twig_safe_filter((isset($context['ButtonAction']) ? $context['ButtonAction'] : null));
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Sep\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>

\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tfunction CheckMessageForm() {
\t\t\tvar subject = document.getElementById(\"subject\");
\t\t\tvar message = document.getElementById(\"message\");

\t\t\tif(subject.value == \"\") {
\t\t\t\talert(\"";
        // line 70
        echo getLang("EnterMessageSubject");
        echo "\");
\t\t\t\tsubject.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(message.value == \"\") {
\t\t\t\talert(\"";
        // line 76
        echo getLang("EnterMessageContent");
        echo "\");
\t\t\t\tmessage.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 86
        echo getLang("ConfirmCancelMessage");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewOrderMessages&orderId=";
        // line 87
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "\";
\t\t}

\t</script>
";
    }

}

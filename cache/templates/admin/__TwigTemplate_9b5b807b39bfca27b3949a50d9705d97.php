<?php

/* galleries.form.tpl */
class __TwigTemplate_9b5b807b39bfca27b3949a50d9705d97 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css\" />
<script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js\"></script>

\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 4
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckGalleryForm)\" id=\"frmGallery\" method=\"post\">
\t<input type=\"hidden\" name=\"galId\" value=\"";
        // line 5
        echo twig_safe_filter((isset($context['GalleryId']) ? $context['GalleryId'] : null));
        echo "\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 9
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 13
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t  \t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 21
        echo getLang("NewGalleryDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 25
        echo getLang("GalleryTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"galtitle\" name=\"galtitle\" class=\"Field400\" value=\"";
        // line 28
        echo twig_safe_filter((isset($context['GalleryTitle']) ? $context['GalleryTitle'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\" colspan=\"2\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 32
        echo getLang("Save");
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

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 50
        echo getLang("ConfirmCancelGallery");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=manageGalleryImages\";
\t\t}

\t\tfunction CheckGalleryForm()
\t\t{
\t\t\tvar title = g(\"galtitle\");

\t\t\tif(title.value == \"\")
\t\t\t{
\t\t\t\talert(\"";
        // line 60
        echo getLang("EnterGalleryTitle");
        echo "\");
\t\t\t\ttitle.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t}
\t</script>
";
    }

}

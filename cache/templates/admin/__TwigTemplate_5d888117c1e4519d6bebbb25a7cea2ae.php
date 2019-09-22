<?php

/* user.manage.tpl */
class __TwigTemplate_5d888117c1e4519d6bebbb25a7cea2ae extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ViewUsers");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo twig_safe_filter((isset($context['UserIntro']) ? $context['UserIntro'] : null));
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['FlashMessages']) ? $context['FlashMessages'] : null));
        echo "
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexCreateButton\" value=\"";
        // line 15
        echo getLang("CreateUser");
        echo "...\" id=\"IndexCreateButton\" class=\"Button\" onclick=\"document.location.href='index.php?ToDo=createUser'\" /> &nbsp;<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t</td>
\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t&nbsp;
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td>
\t\t\t<form name=\"frmUsers\" id=\"frmUsers\" action=\"index.php?ToDo=deleteUsers\" method=\"post\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 28
        echo twig_safe_filter((isset($context['UserDataGrid']) ? $context['UserDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmUsers\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].value != 1)
\t\t\t\t\tfp[i].checked = Status;
\t\t\t}
\t\t}

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmUsers\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0) {
\t\t\t\tif(confirm(\"";
        // line 60
        echo getLang("ConfirmDeleteUsers");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmUsers\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 65
        echo getLang("ChooseUser");
        echo "\");
\t\t\t}
\t\t}

\t</script>


";
    }

}

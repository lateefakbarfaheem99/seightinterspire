<?php

/* ordermessages.manage.tpl */
class __TwigTemplate_ce70ad6c8b34f3680b25c5b563559ddd extends Twig_Template
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
        echo twig_safe_filter((isset($context['ViewOrderMessages']) ? $context['ViewOrderMessages'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo twig_safe_filter((isset($context['MessageIntro']) ? $context['MessageIntro'] : null));
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 14
        echo getLang("CreateMessage");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=createOrderMessage&amp;orderId=";
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "'\" />
\t\t\t\t\t\t&nbsp;<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 15
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t\t\t\t&nbsp;<input type=\"button\" name=\"IndexReturnButton\" value=\"";
        // line 16
        echo getLang("ViewOrders");
        echo "\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=viewOrders'\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<br />
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 24
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmMessages\" id=\"frmMessages\" method=\"post\" action=\"index.php?ToDo=deleteOrderMessages\">
\t\t\t<input type=\"hidden\" name=\"orderId\" value=\"";
        // line 26
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "\">
\t\t\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td width=\"25\" align=\"center\"><input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\"></td>
\t\t\t\t<td width=\"25\">&nbsp;</td>
\t\t\t\t<td width=\"25\">&nbsp;</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 33
        echo getLang("MessageSubject");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 36
        echo getLang("OrderMessage");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 39
        echo getLang("OrderFrom");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 42
        echo getLang("OrderDate");
        echo "\t\t\t\t</td>
\t\t\t\t<td nowrap>
\t\t\t\t\t";
        // line 45
        echo getLang("Status");
        echo "\t\t\t\t</td>
\t\t\t\t<td style=\"width:100px;\">
\t\t\t\t\t";
        // line 48
        echo getLang("Action");
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        // line 51
        echo twig_safe_filter((isset($context['MessageGrid']) ? $context['MessageGrid'] : null));
        echo "
\t\t</table>
\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmMessages\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t\tfp[i].checked = Status;
\t\t}

\t\tfunction ConfirmDeleteSelected() {

\t\t\tvar fp = document.getElementById(\"frmMessages\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0)
\t\t\t{
\t\t\t\tif(confirm(\"";
        // line 81
        echo getLang("ConfirmDeleteMessages");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmMessages\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 86
        echo getLang("ChooseMessages");
        echo "\");
\t\t\t}
\t\t}

\t</script>

";
    }

}

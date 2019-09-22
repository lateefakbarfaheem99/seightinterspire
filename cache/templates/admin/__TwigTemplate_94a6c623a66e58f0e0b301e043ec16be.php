<?php

/* coupons.manage.tpl */
class __TwigTemplate_94a6c623a66e58f0e0b301e043ec16be extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("ViewCoupons");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 8
        echo twig_safe_filter((isset($context['CouponIntro']) ? $context['CouponIntro'] : null));
        echo "</p>
\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 13
        echo getLang("CreateCoupon");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=createCoupon'\" /> &nbsp;<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 20
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmCoupons\" id=\"frmCoupons\" method=\"post\" action=\"index.php?ToDo=deleteCoupons\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 23
        echo twig_safe_filter((isset($context['CouponsDataGrid']) ? $context['CouponsDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmCoupons\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0)
\t\t\t{
\t\t\t\tif(confirm(\"";
        // line 45
        echo getLang("ConfirmDeleteCoupons");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmCoupons\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 50
        echo getLang("ChooseCoupons");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmCoupons\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t\tfp[i].checked = Status;
\t\t}

\t\tfunction CouponClipboard(Data)
\t\t{
\t\t\tif (window.clipboardData)
\t\t\t{
\t\t\t\twindow.clipboardData.setData(\"Text\", Data);
\t\t\t\talert(\"";
        // line 67
        echo getLang("CopiedClipboard");
        echo "\");
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 71
        echo getLang("FeatureOnlyInIE");
        echo "\");
\t\t\t}
\t\t}

\t</script>";
    }

}

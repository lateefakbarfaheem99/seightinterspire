<?php

/* export.step1.tpl */
class __TwigTemplate_1f0d496d3ffc600ae52ac675b69c1b46 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckForm)\" id=\"frmTemplate\" method=\"post\">
";
        // line 2
        echo twig_safe_filter((isset($context['hiddenFields']) ? $context['hiddenFields'] : null));
        echo "
<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 7
        echo twig_safe_filter((isset($context['TemplateTitle']) ? $context['TemplateTitle'] : null));
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo twig_safe_filter((isset($context['ExportIntro']) ? $context['ExportIntro'] : null));
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p style=\"";
        // line 13
        echo twig_safe_filter((isset($context['HideForm']) ? $context['HideForm'] : null));
        echo "\">
\t\t\t\t<input type=\"submit\" value=\"";
        // line 14
        echo getLang("Continue");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 15
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\" style=\"";
        // line 21
        echo twig_safe_filter((isset($context['HideForm']) ? $context['HideForm'] : null));
        echo "\"\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 22
        echo getLang("ExportDetails");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 23
        echo getLang("DataSummary");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<!--Template Details-->
\t\t\t<div id=\"div0\" style=\"padding-top: 10px; ";
        // line 30
        echo twig_safe_filter((isset($context['HideForm']) ? $context['HideForm'] : null));
        echo "\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 33
        echo getLang("ExportFormatTitle");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 37
        echo getLang("TemplateLabel");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 40
        echo twig_safe_filter((isset($context['TemplatesList']) ? $context['TemplatesList'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 45
        echo getLang("ExportFileFormat");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table border=\"0\">
\t\t\t\t\t\t\t\t";
        // line 49
        echo twig_safe_filter((isset($context['Methods']) ? $context['Methods'] : null));
        echo "
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 57
        echo getLang("Continue");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 58
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div1\" style=\"padding-top: 5px; display: none;\">
\t\t\t\t<div class=\"GridContainer\" id=\"GridContainer\">
\t\t\t\t\t";
        // line 67
        echo twig_safe_filter((isset($context['DataGrid']) ? $context['DataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>

<script type=\"text/javascript\">
\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 79
        echo getLang("CancelMessage");
        echo "'))
\t\t{
\t\t\tdocument.location.href='";
        // line 81
        echo twig_safe_filter((isset($context['ViewLink']) ? $context['ViewLink'] : null));
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\treturn false;
\t\t}
\t}

\tfunction CheckForm() {
\t\tif (\$(\"#template\").val() == null) {
\t\t\talert(\"";
        // line 91
        echo getLang("NoTemplateSelected");
        echo "\");

\t\t\treturn false;
\t\t}

\t\tvar formData = \$(\"#frmTemplate\").serialize();

\t\t\$.iModal({
\t\t\ttype: 'ajax',
\t\t\turl: 'index.php?ToDo=";
        // line 100
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "',
\t\t\turlData: formData,
\t\t\twidth: 400,
\t\t\tonBeforeClose: function() {
\t\t\t\tCancelAjaxExport();
\t\t\t}
\t\t});

\t\treturn false;
\t}

\tfunction ShowTab(T) {
\t\ti = 0;
\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\$('#div'+i).hide();
\t\t\t\$('#tab'+i).removeClass('active');
\t\t\t++i;
\t\t}

\t\t\$('#div'+T).show();
\t\t\$('#tab'+T).addClass('active');
\t}
</script>";
    }

}

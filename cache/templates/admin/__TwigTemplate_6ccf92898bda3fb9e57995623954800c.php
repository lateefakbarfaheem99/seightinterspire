<?php

/* import.productvariations.step1.tpl */
class __TwigTemplate_6ccf92898bda3fb9e57995623954800c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=importProductVariations&Step=2\" onsubmit=\"return ValidateForm(CheckImportVariationsForm)\" id=\"frmImport\" method=\"post\">
\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ImportProductVariationsStep1");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 9
        echo getLang("ImportProductVariationsStep1Desc");
        echo "</p>
\t\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 17
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t</div>
\t\t\t\t<br />
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 27
        echo getLang("ImportDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 31
        echo getLang("UpdateExistingVariations");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"UpdateExisting\" value=\"1\" checked=\"checked\"/> ";
        // line 34
        echo getLang("YesUpdateExistingVariations");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('a2');\" onmouseover=\"ShowHelp('a2', '";
        // line 35
        echo getLang("UpdateExistingVariations");
        echo "', '";
        echo getLang("UpdateExistingVariationsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"a2\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 41
        echo getLang("DefaultForEmptyValues");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"DefaultForEmpty\" value=\"1\" /> ";
        // line 44
        echo getLang("YesDefaultForEmptyValues");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('a4');\" onmouseover=\"ShowHelp('a4', '";
        // line 45
        echo getLang("DefaultForEmptyValues");
        echo "', '";
        echo getLang("DefaultForEmptyValuesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"a4\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 51
        echo getLang("CreateAllCombinations");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"CreateAllCombos\" value=\"1\" /> ";
        // line 54
        echo getLang("YesCreateAllCombinations");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('a5');\" onmouseover=\"ShowHelp('a5', '";
        // line 55
        echo getLang("CreateAllCombinations");
        echo "', '";
        echo getLang("CreateAllCombinationsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"a5\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 62
        echo getLang("ImportFileDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 66
        echo getLang("ImportFile");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input id=\"ProductImportUseUpload\" type=\"radio\" name=\"useserver\" value=\"0\" checked=\"checked\" onclick=\"ToggleSource();\" />
\t\t\t\t\t\t\t\t";
        // line 72
        echo getLang("ImportFileUpload");
        echo "\t\t\t\t\t\t\t\t";
        // line 73
        echo getLang("ImportMaxSize", array("maxSize" => (isset($context['ImportMaxSize']) ? $context['ImportMaxSize'] : null)));
        // line 75
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 77
        echo getLang("ImportFileUpload");
        echo "', '";
        echo getLang("ImportFileUploadDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"d1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"ProductImportUploadField\" style=\"margin-left: 25px;\">
\t\t\t\t\t\t\t<input type=\"file\" name=\"importfile\" id=\"ImportFile\" class=\"Field250\" />
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label><input id=\"ProductImportUseServer\" type=\"radio\" name=\"useserver\" value=\"1\" onclick=\"ToggleSource();\" /> ";
        // line 85
        echo getLang("ImportFileServer");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 86
        echo getLang("ImportFileServer");
        echo "', '";
        echo getLang("ImportFileServerDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"d2\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"ProductImportServerField\" style=\"margin-left: 25px; display: none;\">
\t\t\t\t\t\t\t<select name=\"serverfile\" id=\"ServerFile\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 91
        echo getLang("ImportChooseFile");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 92
        echo twig_safe_filter((isset($context['ServerFiles']) ? $context['ServerFiles'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"ProductImportServerNoList\" style=\"margin: 5px 0 0 25px; display: none; font-style: italic;\" class=\"Field250\">
\t\t\t\t\t\t\t";
        // line 96
        echo getLang("FieldNoServerFiles");
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 103
        echo getLang("ImportContainsHeaders");
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"Headers\" value=\"1\" checked=\"checked\"/> ";
        // line 106
        echo getLang("YesImportContainsHeaders");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 107
        echo getLang("ImportContainsHeaders");
        echo "', '";
        echo getLang("ImportContainsHeadersDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 114
        echo getLang("ImportFieldSeparator");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"FieldSeparator\" id=\"FieldSeparator\" class=\"Field250\" value=\"";
        // line 117
        echo twig_safe_filter((isset($context['FieldSeparator']) ? $context['FieldSeparator'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 118
        echo getLang("ImportFieldSeparator");
        echo "', '";
        echo getLang("ImportFieldSeparatorDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 125
        echo getLang("ImportFieldEnclosure");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"FieldEnclosure\" id=\"FieldEnclosure\" class=\"Field250\" value='";
        // line 128
        echo twig_safe_filter((isset($context['FieldEnclosure']) ? $context['FieldEnclosure'] : null));
        echo "' />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 129
        echo getLang("ImportFieldEnclosure");
        echo "', '";
        echo getLang("ImportFieldEnclosureDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 140
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 141
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>
\t</form>

\t<script type=\"text/javascript\">
\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 154
        echo getLang("ConfirmCancelImport");
        echo "'))
\t\t\twindow.location = 'index.php?ToDo=viewProductVariations';
\t}

\tfunction CheckImportVariationsForm()
\t{
\t\tvar f = document.getElementById('ProductImportUseUpload');
\t\tif(f.checked == true)
\t\t{
\t\t\tvar f = document.getElementById('ImportFile');
\t\t\tif(f.value == '')
\t\t\t{
\t\t\t\talert('";
        // line 166
        echo getLang("NoImportFile");
        echo "');
\t\t\t\tf.focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\telse
\t\t{
\t\t\tvar f = document.getElementById('ServerFile');
\t\t\tif(f.value < 1)
\t\t\t{
\t\t\t\talert('";
        // line 176
        echo getLang("NoImportFile");
        echo "');
\t\t\t\tf.focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tvar f = document.getElementById('FieldSeparator');
\t\tif(f.value == '')
\t\t{
\t\t\talert('";
        // line 185
        echo getLang("NoImportFieldSeparator");
        echo "');
\t\t\tf.focus();
\t\t\treturn false;
\t\t}

\t\tvar f = document.getElementById('FieldEnclosure');
\t\tif(f.value == '')
\t\t{
\t\t\talert('";
        // line 193
        echo getLang("NoImportFieldEnclosure");
        echo "');
\t\t\tf.focus();
\t\t\treturn false;
\t\t}
\t\treturn true;
\t}

\tfunction ToggleSource()
\t{
\t\tvar file = document.getElementById('ProductImportUseUpload');
\t\tif(file.checked == true)
\t\t{
\t\t\tdocument.getElementById('ProductImportUploadField').style.display = '';
\t\t\tdocument.getElementById('ProductImportServerField').style.display = 'none';
\t\t\tdocument.getElementById('ProductImportServerNoList').style.display = 'none';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('ProductImportUploadField').style.display = 'none';
\t\t\tif(document.getElementById('ProductImportServerField').getElementsByTagName('SELECT')[0].options.length == 1)
\t\t\t{
\t\t\t\tdocument.getElementById('ProductImportServerNoList').style.display = '';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tdocument.getElementById('ProductImportServerField').style.display = '';
\t\t\t}
\t\t}
\t}
\t</script>";
    }

}

<?php

/* import.products.step1.tpl */
class __TwigTemplate_086d42cf0e2952375b513ed48964234c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=importProducts&Step=2\" onsubmit=\"return ValidateForm(CheckImportProductForm)\" id=\"frmImport\" method=\"post\">
<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ImportProductsStep1");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo getLang("ImportProductsStep1Desc");
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<div>
\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t<input type=\"submit\" value=\"";
        // line 17
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t</div>
\t\t\t<br />
\t\t</td>
\t</tr>

\t<tr>
\t\t<td>
\t\t  <table class=\"Panel\">
\t\t\t<tr>
\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 27
        echo getLang("ImportDetails");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 31
        echo getLang("ImportBulkEditCSV");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<label><input type=\"checkbox\" name=\"BulkEditTemplate\" id=\"BulkEditTemplate\" value=\"1\" /> ";
        // line 34
        echo getLang("ImportBulkEditCSVYes");
        echo "</label>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 39
        echo getLang("ImportProductsCategory");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<div>
\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"AutoCategory\" value=\"1\" onclick=\"ToggleCategory();\" id=\"AutoCategoryCheck\" ";
        // line 43
        echo twig_safe_filter((isset($context['AutoCategoryChecked']) ? $context['AutoCategoryChecked'] : null));
        echo " /> ";
        echo getLang("AutoDetectCategories");
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"ManualCategory\" style=\"display:none; padding-top: 5px; padding-left: 25px;\">
\t\t\t\t\t\t<div style=\"display:";
        // line 46
        echo twig_safe_filter((isset($context['HideCategorySelect']) ? $context['HideCategorySelect'] : null));
        echo "\">
\t\t\t\t\t\t\t<select name=\"CategoryId\" id=\"CategoryId\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 48
        echo getLang("ChooseACategory");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 49
        echo twig_safe_filter((isset($context['CategoryOptions']) ? $context['CategoryOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('a1');\" onmouseover=\"ShowHelp('a1', '";
        // line 51
        echo getLang("ImportProductsCategory");
        echo "', '";
        echo getLang("ImportProductsCategoryDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"a1\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div style=\"display:";
        // line 55
        echo twig_safe_filter((isset($context['HideCategoryTextbox']) ? $context['HideCategoryTextbox'] : null));
        echo "\" id=\"HideCategoryBox\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryName\" id=\"CategoryName\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('b1');\" onmouseover=\"ShowHelp('b1', '";
        // line 57
        echo getLang("ImportProductsCategory");
        echo "', '";
        echo getLang("ImportProductsCategoryCreateDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display: none;\" id=\"b1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 66
        echo getLang("ImportOverride");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<label><input type=\"checkbox\" name=\"OverrideDuplicates\" id=\"Override\" value=\"1\" /> ";
        // line 69
        echo getLang("YesImportOverride");
        echo "</label>
\t\t\t\t\t<img onmouseout=\"HideHelp('a2');\" onmouseover=\"ShowHelp('a2', '";
        // line 70
        echo getLang("ImportOverride");
        echo "', '";
        echo getLang("ImportOverrideDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"a2\"></div>

\t\t\t\t\t<div style=\"display: none\" id=\"HideOverrideOptions\">
\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type=\"checkbox\" name=\"DeleteImages\" value=\"1\" /> ";
        // line 74
        echo getLang("DeleteExistingImages");
        echo "</label>
\t\t\t\t\t<br />
\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type=\"checkbox\" name=\"DeleteDownloads\" value=\"1\" /> ";
        // line 76
        echo getLang("DeleteExistingDownloads");
        echo "</label>
\t\t\t\t\t<div style=\"display: none;\" id=\"b1\"></div>
\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">&nbsp;</span>&nbsp;";
        // line 83
        echo getLang("ImportIgnoreBlanks");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t<label><input type=\"checkbox\" name=\"IgnoreBlankFields\" value=\"1\" checked=\"checked\"/>&nbsp;";
        // line 86
        echo getLang("ImportIgnoreBlankFields");
        echo "<label>
\t\t\t\t\t<img onmouseout=\"HideHelp('IgnoreBlankFieldsHelp');\" onmouseover=\"ShowHelp('IgnoreBlankFieldsHelp', '";
        // line 87
        echo getLang("ImportIgnoreBlankFieldsHelpTitle");
        echo "', '";
        echo getLang("ImportIgnoreBlankFieldsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\"><div id=\"IgnoreBlankFieldsHelp\" style=\"display:none\"></div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t  <table class=\"Panel\">
\t\t\t<tr>
\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 93
        echo getLang("ImportFileDetails");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 97
        echo getLang("ImportFile");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<div>
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input id=\"ProductImportUseUpload\" type=\"radio\" name=\"useserver\" value=\"0\" checked=\"checked\" onclick=\"ToggleSource();\" />
\t\t\t\t\t\t\t";
        // line 103
        echo getLang("ImportFileUpload");
        echo "\t\t\t\t\t\t\t";
        // line 104
        echo getLang("ImportMaxSize", array("maxSize" => (isset($context['ImportMaxSize']) ? $context['ImportMaxSize'] : null)));
        // line 106
        echo "\t\t\t\t\t\t</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 108
        echo getLang("ImportFileUpload");
        echo "', '";
        echo getLang("ImportFileUploadDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display: none;\" id=\"d1\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"ProductImportUploadField\" style=\"margin-left: 25px;\">
\t\t\t\t\t\t<input type=\"file\" name=\"importfile\" id=\"ImportFile\" class=\"Field250\" />
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<label><input id=\"ProductImportUseServer\" type=\"radio\" name=\"useserver\" value=\"1\" onclick=\"ToggleSource();\" /> ";
        // line 116
        echo getLang("ImportFileServer");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 117
        echo getLang("ImportFileServer");
        echo "', '";
        echo getLang("ImportFileServerDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display: none;\" id=\"d2\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"ProductImportServerField\" style=\"margin-left: 25px; display: none;\">
\t\t\t\t\t\t<select name=\"serverfile\" id=\"ServerFile\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 122
        echo getLang("ImportChooseFile");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 123
        echo twig_safe_filter((isset($context['ServerFiles']) ? $context['ServerFiles'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"ProductImportServerNoList\" style=\"margin: 5px 0 0 25px; display: none; font-style: italic;\" class=\"Field250\">
\t\t\t\t\t\t";
        // line 127
        echo getLang("FieldNoServerFiles");
        echo "\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 134
        echo getLang("ImportContainsHeaders");
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<label><input type=\"checkbox\" name=\"Headers\" id=\"Headers\" value=\"1\" /> ";
        // line 137
        echo getLang("YesImportContainsHeaders");
        echo "</label>
\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 138
        echo getLang("ImportContainsHeaders");
        echo "', '";
        echo getLang("ImportContainsHeadersDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 145
        echo getLang("ImportFieldSeparator");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"FieldSeparator\" id=\"FieldSeparator\" class=\"Field250\" value=\"";
        // line 148
        echo twig_safe_filter((isset($context['FieldSeparator']) ? $context['FieldSeparator'] : null));
        echo "\" />
\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 149
        echo getLang("ImportFieldSeparator");
        echo "', '";
        echo getLang("ImportFieldSeparatorDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr class=\"BulkImportRowHide\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 156
        echo getLang("ImportFieldEnclosure");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"text\" name=\"FieldEnclosure\" id=\"FieldEnclosure\" class=\"Field250\" value='";
        // line 159
        echo twig_safe_filter((isset($context['FieldEnclosure']) ? $context['FieldEnclosure'] : null));
        echo "' />
\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 160
        echo getLang("ImportFieldEnclosure");
        echo "', '";
        echo getLang("ImportFieldEnclosureDesc");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t<tr>
\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t&nbsp;
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 171
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 172
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>

<script type=\"text/javascript\">
\tfunction ConfirmCancel()
\t{
\t\tif(confirm('";
        // line 185
        echo getLang("ConfirmCancelImport");
        echo "'))
\t\t\twindow.location = 'index.php?ToDo=manageProducts';
\t}

\tfunction ToggleCategory()
\t{
\t\tvar e = document.getElementById('AutoCategoryCheck');
\t\tif(e.checked == true)
\t\t{
\t\t\tdocument.getElementById('ManualCategory').style.display = 'none';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('ManualCategory').style.display = '';
\t\t}
\t}
\tToggleCategory();

\tfunction CheckImportProductForm()
\t{

\t\tvar f= document.getElementById('AutoCategoryCheck');
\t\tif(f.checked != true)
\t\t{
\t\t\tif(document.getElementById('HideCategoryBox').style.display == \"none\")
\t\t\t{
\t\t\t\tvar f = document.getElementById('CategoryId');
\t\t\t\tif(f.selectedIndex < 1)
\t\t\t\t{
\t\t\t\t\talert('";
        // line 214
        echo getLang("NoSelectedCategoryName");
        echo "');
\t\t\t\t\tf.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tvar f = document.getElementById('CategoryName');
\t\t\t\tif(f.value == '')
\t\t\t\t{
\t\t\t\t\talert('";
        // line 224
        echo getLang("NoCategoryName");
        echo "');
\t\t\t\t\tf.focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tvar f = document.getElementById('ProductImportUseUpload');
\t\tif(f.checked == true)
\t\t{
\t\t\tvar f = document.getElementById('ImportFile');
\t\t\tif(f.value == '')
\t\t\t{
\t\t\t\talert('";
        // line 236
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
        // line 246
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
        // line 255
        echo getLang("NoImportFieldSeparator");
        echo "');
\t\t\tf.focus();
\t\t\treturn false;
\t\t}

\t\tvar f = document.getElementById('FieldEnclosure');
\t\tif(f.value == '')
\t\t{
\t\t\talert('";
        // line 263
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

\t\$(\"#BulkEditTemplate\").change(function() {
\t\tvar disabled = '';
\t\tif (\$(this).attr('checked')) {
\t\t\tdisabled = 'disabled';
\t\t\t\$(\"#AutoCategoryCheck\").attr('checked', true);
\t\t\tToggleCategory();
\t\t}

\t\t\$(\"#Headers\").attr({
\t\t\t'checked': \$(this).attr('checked'),
\t\t\t'disabled': disabled

\t\t});

\t\t\$(\"#Override\").attr({
\t\t\t'checked': \$(this).attr('checked'),
\t\t\t'disabled': disabled
\t\t});

\t\t\$(\"#Override\").change();

\t\t\$(\".BulkImportRowHide\").toggle();
\t});

\t\$(\"#Override\").change(function() {
\t\tif (\$(this).attr('checked')) {
\t\t\t\$(\"#HideOverrideOptions\").show();
\t\t}
\t\telse {
\t\t\t\$(\"#HideOverrideOptions\").hide();
\t\t}
\t});
</script>
";
    }

}

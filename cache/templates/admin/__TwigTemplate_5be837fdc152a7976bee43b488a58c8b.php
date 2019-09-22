<?php

/* products.variation.form.tpl */
class __TwigTemplate_5be837fdc152a7976bee43b488a58c8b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" id=\"frmVariation\" method=\"post\">
<input type=\"hidden\" name=\"variationId\" id=\"productId\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "\">
<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 6
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 10
        echo getLang("ViewVariationsIntro");
        echo "</p>
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<div class=\"MessageBox MessageBoxInfo\" style=\"display: ";
        // line 12
        echo twig_safe_filter((isset($context['HideVariationTestDataWarning']) ? $context['HideVariationTestDataWarning'] : null));
        echo ";\">";
        echo getLang("ProductVariationTestDataWarning");
        echo "</div>
\t\t\t<p>
\t\t\t\t<input type=\"button\" value=\"";
        // line 14
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" onclick=\"SaveVariationForm()\" />
\t\t\t\t<input type=\"button\" value=\"";
        // line 15
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" onclick=\"SaveVariationForm(true)\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 24
        echo getLang("VariationDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 26
        echo twig_safe_filter((isset($context['HideVendorOption']) ? $context['HideVendorOption'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 28
        echo getLang("Vendor");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span style=\"";
        // line 31
        echo twig_safe_filter((isset($context['HideVendorLabel']) ? $context['HideVendorLabel'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['CurrentVendor']) ? $context['CurrentVendor'] : null));
        echo "</span>
\t\t\t\t\t\t<select name=\"vendor\" id=\"vendor\" class=\"Field250\" style=\"";
        // line 32
        echo twig_safe_filter((isset($context['HideVendorSelect']) ? $context['HideVendorSelect'] : null));
        echo "\">
\t\t\t\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['VendorList']) ? $context['VendorList'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img style=\"";
        // line 35
        echo twig_safe_filter((isset($context['HideVendorSelect']) ? $context['HideVendorSelect'] : null));
        echo "\" onmouseout=\"HideHelp('vendorhelp');\" onmouseover=\"ShowHelp('vendorhelp', '";
        echo getLang("Vendor");
        echo "', '";
        echo getLang("VariationVendorHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"vendorhelp\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 41
        echo getLang("VariationName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"vname\" name=\"vname\" class=\"Field250\" value=\"";
        // line 44
        echo twig_safe_filter((isset($context['VariationName']) ? $context['VariationName'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 45
        echo getLang("VariationName");
        echo "', '";
        echo getLang("VariationNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div><br />
\t\t\t\t\t\t<div style=\"color:gray; font-size:8pt; margin-bottom:5px\">";
        // line 47
        echo getLang("VariationNameExample");
        echo "</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 52
        echo getLang("VariationOptions");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<ul id=\"ProductVariationBox\">
\t\t\t\t\t\t\t";
        // line 56
        echo twig_safe_filter((isset($context['Variations']) ? $context['Variations'] : null));
        echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 66
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" onclick=\"SaveVariationForm()\" />
\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 67
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" onclick=\"SaveVariationForm(true);\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 68
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>

<script type=\"text/javascript\">

\tvar variationForm = document.getElementById('frmVariation');
\tvar affectedVariations = [";
        // line 81
        echo twig_safe_filter((isset($context['AffectedVariations']) ? $context['AffectedVariations'] : null));
        echo "];

\tfunction SaveVariationForm(addAnother)
\t{
\t\tif (!CheckVariationForm()) {
\t\t\treturn;
\t\t}

\t\tif (addAnother == true) {
\t\t\tvar f = g('frmVariation');
\t\t\tvar d = document.createElement('input');
\t\t\td.type = 'hidden';
\t\t\td.name = 'addanother';
\t\t\td.value = '1';
\t\t\tf.appendChild(d);
\t\t}

\t\tvariationForm.submit();
\t}

\tfunction ConfirmCancel() {
\t\tif(confirm(\"";
        // line 102
        echo getLang("ConfirmCancelVariation");
        echo "\"))
\t\t\tdocument.location.href = \"index.php?ToDo=viewProductVariations\";
\t}

\tfunction CheckVariationForm() {
\t\tif(\$('#vname').val() == '') {
\t\t\talert('";
        // line 108
        echo getLang("ProductVariationErrorNoVariationName");
        echo "');
\t\t\t\$('#vname').focus();
\t\t\treturn false;
\t\t}

\t\tvar rowCount = 0;
\t\tvar rowPass = true;

\t\t\$(\"#ProductVariationBox .VariationRow\").each(function() {

\t\t\tvar valueCount = 0;
\t\t\tvar valuePass = true;

\t\t\tif (\$(\".VariationOptionName\", this).val() == '') {
\t\t\t\talert(('";
        // line 122
        echo getLang("ProductVariationErrorNoOptionName");
        echo "').replace(/%d/, (rowCount+1)));
\t\t\t\t\$(\".VariationOptionName\").focus();
\t\t\t\trowPass = false;
\t\t\t\treturn false;
\t\t\t}

\t\t\t\$(\".VariationValueName\", this).each(function() {
\t\t\t\tif (\$(this).val() == '') {
\t\t\t\t\talert(('";
        // line 130
        echo getLang("ProductVariationErrorNoOptionValue");
        echo "').replace(/%d/, (rowCount+1)));
\t\t\t\t\t\$(this).focus();
\t\t\t\t\tvaluePass = false;
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif (\$(this).val().search(\"#\") != -1) {
\t\t\t\t\talert(('";
        // line 137
        echo getLang("ProductVariationErrorHash");
        echo "').replace(/%d/, (rowCount+1)));
\t\t\t\t\t\$(this).focus();
\t\t\t\t\tvaluePass = false;
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tvalueCount++;
\t\t\t});

\t\t\tif (!valuePass) {
\t\t\t\trowPass = false;
\t\t\t\treturn false;
\t\t\t}

\t\t\tif (valueCount <= 1) {
\t\t\t\talert(('";
        // line 152
        echo getLang("ProductVariationErrorInvalidOptions");
        echo "').replace(/%d/, (rowCount+1)));
\t\t\t\t\$(\".VariationValueName:first\", this).focus();
\t\t\t\trowPass = false;
\t\t\t\treturn false;
\t\t\t}

\t\t\trowCount++;
\t\t});

\t\tif (!rowPass) {
\t\t\treturn false;
\t\t}

\t\tif (rowCount == 0) {
\t\t\talert('";
        // line 166
        echo getLang("ProductVariationErrorNoData");
        echo "');
\t\t\treturn false;
\t\t}

\t\treturn true;
\t}

\tfunction GetNextColumnID()
\t{
\t\tvar matches, nextId = 0;

\t\t\$(\"#ProductVariationBox .VariationColumn .VariationOptionName\").each(
\t\t\tfunction() {
\t\t\t\tmatches = this.name.match(/variationOptionName\\[([0-9]+)\\]/);
\t\t\t\tif (matches) {
\t\t\t\t\tnextId = Math.max(nextId, matches[1]);
\t\t\t\t}
\t\t\t}
\t\t);

\t\tnextId++;

\t\treturn nextId;
\t}

\tfunction getNextValueID(valueRow)
\t{
\t\tvar matches, parentId, nextId = 0;

\t\t\$(\".VariationValue .VariationValueName\", valueRow).each(
\t\t\tfunction() {
\t\t\t\tmatches = this.name.match(/variationOptionValue\\[([0-9]+)\\]\\[([0-9]+)\\]/);
\t\t\t\tif (matches) {
\t\t\t\t\tparentId = matches[1];
\t\t\t\t\tnextId = Math.max(nextId, matches[2]);
\t\t\t\t}
\t\t\t}
\t\t);

\t\tnextId++;

\t\treturn {\"nextId\": nextId, \"parentId\": parentId};
\t}

\tfunction AddVariationRow(addButton)
\t{
\t\t/**
\t\t * Re-dispaly the delete button
\t\t */
\t\t\$(\"#ProductVariationBox .VariationRowDel\").each(function() { \$(this).show(); });

\t\tvar row = \$(addButton.parentNode.parentNode).clone();
\t\tvar next = GetNextColumnID();

\t\t/**
\t\t * Strip out all the un-needed value boxes and just leave one with no delete button
\t\t */
\t\tvar box = \$(\".VariationValues .VariationValue:first\", row).clone();
\t\t\$(\".VariationDel\", box).each(function() { \$(this).hide(); });
\t\t\$(\".VariationValues\", row).empty();
\t\t\$(\".VariationValues\", row).append(box);

\t\t/**
\t\t * Assign the next id to the column input
\t\t */
\t\t\$(\".VariationColumn .VariationOptionName\", row).attr(\"name\", \"variationOptionName[\" + next + \"]\");
\t\t\$(\".VariationColumn .VariationOptionName\", row).attr(\"id\", \"variationOptionName_\" + next);
\t\t\$(\".VariationColumn .VariationOptionName\", row).val(\"\");

\t\t/**
\t\t * Next assign it to the value input
\t\t */
\t\t\$(\".VariationValues .VariationValue .VariationValueName\", row).attr(\"name\", \"variationOptionValue[\" + next + \"][0]\");
\t\t\$(\".VariationValues .VariationValue .VariationValueName\", row).attr(\"id\", \"variationOptionValue_\" + next + \"_0\");
\t\t\$(\".VariationValues .VariationValue .VariationValueName\", row).val(\"\");
\t\t\$(\".VariationValues .VariationValue .VariationValueId\", row).attr(\"name\", \"variationOptionValueId[\" + next + \"][0]\");
\t\t\$(\".VariationValues .VariationValue .VariationValueId\", row).attr(\"id\", \"variationOptionValueId_\" + next + \"_0\");
\t\t\$(\".VariationValues .VariationValue .VariationValueId\", row).val(\"\");
\t\t\$(\".VariationValuesRank\", row).attr(\"name\", \"variationOptionValuesRank[\" + next + \"]\");
\t\t\$(\".VariationValuesRank\", row).attr(\"id\", \"variationOptionValuesRank_\" + next);

\t\t/**
\t\t * Add the sortable function as it gets removed somehow
\t\t */
\t\tAddSortableToValuesDiv(\$(\".VariationValues\", row));

\t\t/**
\t\t * Now we add it
\t\t */
\t\t\$(addButton.parentNode.parentNode).after(row);
\t\t\$(\".VariationColumn .VariationOptionName\", row).focus();
\t}

\tfunction DelVariationRow(delButton)
\t{
\t\tvar parent = delButton.parentNode.parentNode.parentNode;
\t\tvar child = delButton.parentNode.parentNode;
\t\tvar total = 0;

\t\t/**
\t\t * Only remove if there is more than one (failsafe)
\t\t */
\t\t\$(\".VariationRow\", parent).each(function() { total++; });
\t\tif (total <= 1) {
\t\t\treturn false;
\t\t}

\t\tparent.removeChild(child);

\t\t/**
\t\t * If we are now left with one value for this row then hide the delete button
\t\t */
\t\tif (total == 2) {
\t\t\t\$(\".VariationRow .VariationRowDel\", parent).each(function() { \$(this).hide(); });
\t\t}
\t}

\tfunction AddVariationValue(addButton)
\t{
\t\t/**
\t\t * Re-dispaly the delete button
\t\t */
\t\t\$(\".VariationValue .VariationDel\", addButton.parentNode.parentNode).each(function() { \$(this).show(); });

\t\tvar box = \$(addButton.parentNode).clone();
\t\tvar next = getNextValueID(addButton.parentNode.parentNode);

\t\t/**
\t\t * Assign the next id to the value input
\t\t */
\t\t\$(\".VariationValueName\", box).attr(\"name\", \"variationOptionValue[\" + next.parentId + \"][\" + next.nextId + \"]\");
\t\t\$(\".VariationValueName\", box).attr(\"id\", \"variationOptionValue_\" + next.parentId + \"_\" + next.nextId);
\t\t\$(\".VariationValueId\", box).attr(\"name\", \"variationOptionValueId[\" + next.parentId + \"][\" + next.nextId + \"]\");
\t\t\$(\".VariationValueId\", box).attr(\"id\", \"variationOptionValueId_\" + next.parentId + \"_\" + next.nextId);
\t\t\$(\"input\", box).val(\"\");

\t\t\$(addButton.parentNode).after(box);
\t\t\$(\"#variationOptionValue_\" + next.parentId + \"_\" + next.nextId).focus();
\t}

\tfunction DelVariationValue(delButton)
\t{
\t\tvar parent = delButton.parentNode.parentNode;
\t\tvar child = delButton.parentNode;
\t\tvar total = 0;

\t\t/**
\t\t * Only remove if there is more than one (failsafe)
\t\t */
\t\t\$(\".VariationValue\", parent).each(function() { total++; });
\t\tif (total <= 1) {
\t\t\treturn false;
\t\t}

\t\tparent.removeChild(child);

\t\t/**
\t\t * If we are now left with one value for this row then hide the delete button
\t\t */
\t\tif (total == 2) {
\t\t\t\$(\".VariationValue .VariationDel\", parent).each(function() { \$(this).hide(); });
\t\t}
\t}

\tfunction AddSortableToValuesDiv(div)
\t{
\t\t\$(div).sortable(
\t\t\t{
\t\t\t\t\"container\": \"parent\"
\t\t\t}
\t\t);
\t}

\tfunction AddSortableToContainer()
\t{
\t\t\$(\"#ProductVariationBox\").sortable(
\t\t\t{
\t\t\t\t\"container\": \"parent\"
\t\t\t}
\t\t);
\t}

\t\$(document).ready(
\t\tfunction()
\t\t{
\t\t\t\$(\"#ProductVariationBox .VariationValues\").each(function() { AddSortableToValuesDiv(this); });
\t\t\tAddSortableToContainer();
\t\t}
\t);

</script>
";
    }

}

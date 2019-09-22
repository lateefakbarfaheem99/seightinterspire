<?php

/* discounts.manage.tpl */
class __TwigTemplate_7d9f774a4fdf7959343d6f6c6c17d134 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("ViewDiscounts");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 8
        echo twig_safe_filter((isset($context['DiscountIntro']) ? $context['DiscountIntro'] : null));
        echo "</p>
\t\t\t<div id=\"DiscountStatus\">
\t\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</div>
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 15
        echo getLang("CreateDiscount");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=createDiscount'\" /> &nbsp;<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
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
        // line 22
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmDiscounts\" id=\"frmDiscounts\" method=\"post\" action=\"index.php?ToDo=deleteDiscounts\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['DiscountsDataGrid']) ? $context['DiscountsDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"SeeMoreDiscountBox\" style=\"display: ";
        // line 27
        echo twig_safe_filter((isset($context['HideSeeMoreDiscountBox']) ? $context['HideSeeMoreDiscountBox'] : null));
        echo "\">
\t\t\t\t\t<a href=\"#\" onclick=\"seeMoreDiscountItems(); return false;\">";
        // line 28
        echo twig_safe_filter((isset($context['DiscountShowNextBatchItems']) ? $context['DiscountShowNextBatchItems'] : null));
        echo "</a>
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmDiscounts\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0)
\t\t\t{
\t\t\t\tif(confirm(\"";
        // line 50
        echo getLang("ConfirmDeleteDiscounts");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmDiscounts\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 55
        echo getLang("ChooseDiscounts");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmDiscounts\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t\tfp[i].checked = Status;
\t\t}

\t\tfunction DiscountClipboard(Data)
\t\t{
\t\t\tif (window.clipboardData)
\t\t\t{
\t\t\t\twindow.clipboardData.setData(\"Text\", Data);
\t\t\t\talert(\"";
        // line 72
        echo getLang("CopiedClipboard");
        echo "\");
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 76
        echo getLang("FeatureOnlyInIE");
        echo "\");
\t\t\t}
\t\t}

\t\tvar updatingSortables = false;
\t\tvar updateTimeout = null;

\t\tfunction CreateSortableList() {

\t\t\t\$('#DiscountList').sortable({
\t\t\t\taccept: 'SortableRow',
\t\t\t\tcontainment: '#DiscountList',
\t\t\t\thandler: '.sort-handle',
\t\t\t\topacity: .8,
\t\t\t\tplaceholder: 'SortableRowHelper',
\t\t\t\tforcePlaceholderSize: true,
\t\t\t\titems: 'li',
\t\t\t\ttolerance: 'pointer',
\t\t\t\tupdate: function(event, ui) {
\t\t\t\t\t\$(this).find('.GridRow').removeClass('RowDown');

\t\t\t\t\tvar idx = [];

\t\t\t\t\t\$('input.DiscountsIdx').each(
\t\t\t\t\t\tfunction()
\t\t\t\t\t\t{
\t\t\t\t\t\t\tidx[idx.length] = \$(this).val();
\t\t\t\t\t\t}
\t\t\t\t\t);

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'remote.php',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdataType: 'xml',
\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t'remoteSection': 'discounts',
\t\t\t\t\t\t\t\t'w': 'updateDiscountOrder',
\t\t\t\t\t\t\t\t'sortorder': idx.join(',')
\t\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(response) {

\t\t\t\t\t\t\tvar status = \$('status', response).text();
\t\t\t\t\t\t\tvar message = \$('message', response).text();
\t\t\t\t\t\t\tif(status == 0) {
\t\t\t\t\t\t\t\tdisplay_error('DiscountStatus', message);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tdisplay_success('DiscountStatus', message);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction seeMoreDiscountItems()
\t\t{
\t\t\tvar lastSortOrder = 1;

\t\t\t\$(\".DiscountSortOrder\").each(
\t\t\t\tfunction()
\t\t\t\t{
\t\t\t\t\tif (\$(this).val() > lastSortOrder) {
\t\t\t\t\t\tlastSortOrder = parseInt(\$(this).val());
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);

\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php',
\t\t\t\ttype: 'post',
\t\t\t\tdata: {
\t\t\t\t\t\t'remoteSection': 'discounts',
\t\t\t\t\t\t'w': 'getMoreDiscounts',
\t\t\t\t\t\t'lastSortOrder': lastSortOrder
\t\t\t\t\t},
\t\t\t\tsuccess: seeMoreDiscountItemsCallback
\t\t\t});
\t\t}

\t\tfunction seeMoreDiscountItemsCallback(data)
\t\t{
\t\t\tif (\$(\"items\", data).text() !== '') {
\t\t\t\t\$(\"#DiscountList\").append(\$(\"items\", data).text());
\t\t\t\tCreateSortableList();
\t\t\t}

\t\t\tif (\$(\"more\", data).text() == \"0\") {
\t\t\t\t\$(\"#SeeMoreDiscountBox\").hide();
\t\t\t}
\t\t}

\t\t\$(document).ready(function()
\t\t{
\t\t\tCreateSortableList();
\t\t});

\t</script>";
    }

}

<?php

/* logs.system.tpl */
class __TwigTemplate_46067c7bfd4d8a0b9f7cd4c404db656a extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("StoreLogs");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>
\t\t\t\t";
        // line 9
        echo getLang("StoreLogsIntro");
        echo "\t\t\t</p>
\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\" style=\"display: ";
        // line 16
        echo twig_safe_filter((isset($context['HideTabs']) ? $context['HideTabs'] : null));
        echo "\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\" style=\"display: ";
        // line 17
        echo twig_safe_filter((isset($context['HideSystemLog']) ? $context['HideSystemLog'] : null));
        echo "\">";
        echo getLang("SystemLog");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\" style=\"display: ";
        // line 18
        echo twig_safe_filter((isset($context['HideAdminLog']) ? $context['HideAdminLog'] : null));
        echo "\">";
        echo getLang("AdministratorLog");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<div id=\"div0\" style=\"padding-top: 10px; display: ";
        // line 24
        echo twig_safe_filter((isset($context['HideSystemLog']) ? $context['HideSystemLog'] : null));
        echo "\">
\t\t\t\t<table class=\"IntroTable\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Intro\" style=\"padding-bottom: 10px;\">
\t\t\t\t\t\t\t";
        // line 28
        echo getLang("SystemLogIntro");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<div class=\"GridContainer\" id=\"systemLogGrid\">
\t\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['SystemLog']) ? $context['SystemLog'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"div1\" style=\"padding-top: 10px; display: ";
        // line 37
        echo twig_safe_filter((isset($context['HideAdminLog']) ? $context['HideAdminLog'] : null));
        echo "\">
\t\t\t\t<table class=\"IntroTable\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Intro\" style=\"padding-bottom: 10px;\">
\t\t\t\t\t\t\t";
        // line 41
        echo getLang("AdminLogIntro");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<div class=\"GridContainer\" id=\"administratorLogGrid\">
\t\t\t\t\t";
        // line 46
        echo twig_safe_filter((isset($context['AdministratorLog']) ? $context['AdministratorLog'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t</tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">
\tfunction ShowLogInfo(id)
\t{
\t\tvar tr = document.getElementById(\"tr\"+id);
\t\tvar trQ = document.getElementById(\"trQ\"+id);
\t\tvar tdQ = document.getElementById(\"tdQ\"+id);
\t\tvar img = document.getElementById(\"expand\"+id);

\t\tif(img.src.indexOf(\"plus.gif\") > -1)
\t\t{
\t\t\timg.src = \"images/minus.gif\";

\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t{
\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"#dbf3d1\";
\t\t\t}

\t\t\t\$(trQ).find('.QuickView').load('remote.php?w=logInfoQuickView&logid='+id, {}, function() {
\t\t\t\ttrQ.style.display = \"\";
\t\t\t});
\t\t}
\t\telse
\t\t{
\t\t\timg.src = \"images/plus.gif\";

\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t{
\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"\";
\t\t\t}
\t\t\ttrQ.style.display = \"none\";
\t\t}
\t}

\tfunction ShowTab(T) {

\t\ti = 0;

\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\$('#CurrentTab1').val(T);
\t\t\$('#CurrentTab2').val(T);
\t}

\t\$(document).ready(function() {
\t\tif(\$('#div";
        // line 106
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "').css('display') != \"none\") {
\t\t\tShowTab(";
        // line 107
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");
\t\t}
\t});

\tfunction ConfirmDeleteSelectedAdmin() {
\t\tif(\$('.DeleteCheck:checked').length == 0) {
\t\t\talert('";
        // line 113
        echo getLang("ChooseLogEntry");
        echo "');
\t\t}
\t\telse {
\t\t\tif(confirm('";
        // line 116
        echo getLang("ConfirmDeleteLogEntries");
        echo "')) {
\t\t\t\tg('AdminLogForm').action = g('LogForm').action.replace('systemLog', 'deleteAdminLogs');
\t\t\t\tg('AdminLogForm').method = 'post';
\t\t\t\tg('AdminLogForm').submit();
\t\t\t}
\t\t}
\t}

\tfunction ConfirmDeleteAllAdmin() {
\t\tif(confirm('";
        // line 125
        echo getLang("ConfirmDeleteAllAdminLogEntries");
        echo "')) {
\t\t\tg('AdminLogForm').action = g('AdminLogForm').action.replace('systemLog', 'deleteAllAdminLogs');
\t\t\tg('AdminLogForm').method = 'post';
\t\t\tg('AdminLogForm').submit();
\t\t}
\t}

\tfunction SearchAdminLog(f) {
\t\t\$(f).parents('.GridContainer').load(\$('#AdminSortURL').val()+'&'+\$('#AdminLogForm').serialize(), '', function() {
\t\t\tBindAjaxGridSorting();
\t\t});
\t\treturn false;
\t}

\tfunction ClearAdminResults(f) {
\t\t\$(f).parents('.GridContainer').load(\$('#AdminSortURL').val(), '', function() {
\t\t\tBindAjaxGridSorting();
\t\t});
\t\treturn false;
\t}

\tfunction ConfirmDeleteSelected() {
\t\tif(\$('.DeleteCheck:checked').length == 0) {
\t\t\talert('";
        // line 148
        echo getLang("ChooseLogEntry");
        echo "');
\t\t}
\t\telse {
\t\t\tif(confirm('";
        // line 151
        echo getLang("ConfirmDeleteLogEntries");
        echo "')) {
\t\t\t\tg('LogForm').action = g('LogForm').action.replace('systemLog', 'deleteSystemLogs');
\t\t\t\tg('LogForm').method = 'post';
\t\t\t\tg('LogForm').submit();
\t\t\t}
\t\t}
\t}

\tfunction ConfirmDeleteAll() {
\t\tif(confirm('";
        // line 160
        echo getLang("ConfirmDeleteAllSystemLogEntries");
        echo "')) {
\t\t\tg('LogForm').action = g('LogForm').action.replace('systemLog', 'deleteAllSystemLogs');
\t\t\tg('LogForm').method = 'post';
\t\t\tg('LogForm').submit();
\t\t}
\t}

\tfunction SearchSystemLog(f) {
\t\tsearchURL = '';
\t\tif(\$('#logSeverity').val() > 0) {
\t\t\tsearchURL += '&logseverity='+\$('#logSeverity').val();
\t\t}

\t\tif(\$('#logType').val() != \"\" && \$('#logType').val() != -1) {
\t\t\tsearchURL += '&logtype='+\$('#logType').val();
\t\t}

\t\tif(\$('#logSummary').val() != \"\") {
\t\t\tsearchURL += '&logsummary='+escape(\$('#logSummary').val());
\t\t}

\t\t\$(f).parents('.GridContainer').load(\$('#SortURL').val()+searchURL, '', function() {
\t\t\tBindAjaxGridSorting();
\t\t});
\t\treturn false;
\t}

\tfunction ClearSystemResults(f) {
\t\t\$(f).parents('.GridContainer').load(\$('#SortURL').val(), '', function() {
\t\t\tBindAjaxGridSorting();
\t\t});
\t\treturn false;
\t}

\tfunction ClearAdminSearchResults(f) {
\t\t\$(f).parents('.GridContainer').load(\$('#AdminSortURL').val(), '', function() {
\t\t\tBindAjaxGridSorting();
\t\t});
\t\treturn false;
\t}
\t</script>";
    }

}

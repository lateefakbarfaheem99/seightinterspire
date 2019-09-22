<?php

/* pages.manage.tpl */
class __TwigTemplate_221775038caa61feb459f452d700a8c1 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t\t<script type=\"text/javascript\">
\t\t\tShowLoadingIndicator();
\t\t\twindow.onload = function() {
\t\t\t\tHideLoadingIndicator();
\t\t\t};
\t\t</script>
\t\t<form name=\"frmPages\" id=\"frmPages\" method=\"post\" action=\"index.php?ToDo=deletePages\">
\t\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td class=\"Heading1\">";
        // line 11
        echo getLang("ViewPages");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 15
        echo twig_safe_filter((isset($context['PageIntro']) ? $context['PageIntro'] : null));
        echo "</p>
\t\t\t\t<div id=\"PagesStatus\">";
        // line 16
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</div>
\t\t\t\t<p class=\"Intro\">
\t\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 18
        echo getLang("CreatePage");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=createPage'\" /> &nbsp;
\t\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 19
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t\t</p>
\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"";
        // line 23
        echo twig_safe_filter((isset($context['HideTabs']) ? $context['HideTabs'] : null));
        echo "\">
\t\t\t\t<td>
\t\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 26
        echo getLang("StorePages");
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 27
        echo getLang("VendorPages");
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t<td>
\t\t\t\t<div id=\"div0\" style=\"display: ";
        // line 33
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t\t\t";
        // line 34
        echo twig_safe_filter((isset($context['NoPagesMessage']) ? $context['NoPagesMessage'] : null));
        echo "
\t\t\t\t\t<table class=\"GridPanel SortablePanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; margin-top:10px\">
\t\t\t\t\t\t<tr class=\"Heading3\">
\t\t\t\t\t\t\t<td width=\"1\" style=\"padding-left: 5px;\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 41
        echo getLang("PageTitle");
        echo " &nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"120\">
\t\t\t\t\t\t\t\t";
        // line 44
        echo getLang("PageTypeHeading");
        echo " &nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"80\" align=\"center\">
\t\t\t\t\t\t\t\t";
        // line 47
        echo getLang("Visible");
        echo " &nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"80\">
\t\t\t\t\t\t\t\t";
        // line 50
        echo getLang("Action");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<ul class=\"SortableList\" id=\"PageList\">
\t\t\t\t\t\t";
        // line 55
        echo twig_safe_filter((isset($context['PageGrid']) ? $context['PageGrid'] : null));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div id=\"div1\" style=\"display: none;\">
\t\t\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['NoVendorPagesMessage']) ? $context['NoVendorPagesMessage'] : null));
        echo "
\t\t\t\t\t<table class=\"GridPanel SortablePanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; margin-top:10px\">
\t\t\t\t\t\t<tr class=\"Heading3\">
\t\t\t\t\t\t\t<td width=\"1\" style=\"padding-left: 5px;\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"ToggleDeleteBoxes(this.checked)\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"150\">
\t\t\t\t\t\t\t\t";
        // line 66
        echo getLang("Vendor");
        echo " &nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 69
        echo getLang("PageTitle");
        echo " &nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"120\">
\t\t\t\t\t\t\t\t";
        // line 72
        echo getLang("PageTypeHeading");
        echo " &nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"80\" align=\"center\">
\t\t\t\t\t\t\t\t";
        // line 75
        echo getLang("Visible");
        echo " &nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td width=\"80\">
\t\t\t\t\t\t\t\t";
        // line 78
        echo getLang("Action");
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<ul class=\"SortableList\" id=\"VendorPageList\">
\t\t\t\t\t\t";
        // line 83
        echo twig_safe_filter((isset($context['VendorPagesGrid']) ? $context['VendorPagesGrid'] : null));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</tr>
\t\t\t</td>
\t\t</table>
\t\t<input type=\"hidden\" name=\"currentTab\" id=\"currentTab\" value=\"";
        // line 89
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" />
\t\t\t\t</form>
\t</div>
\t<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/jquery.ui.nestedSortable.js?";
        // line 92
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\">

\t\tfunction CheckSearchForm()
\t\t{
\t\t\tvar filter = document.getElementById(\"filterCategory\");
\t\t\tvar query = document.getElementById(\"searchQuery\");

\t\t\tif(filter.value == \"\" && query.value == \"\")
\t\t\t{
\t\t\t\talert(\"";
        // line 102
        echo getLang("ChooseFilterOrEnterSearchTerm");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmPages\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0)
\t\t\t{
\t\t\t\tif(confirm(\"";
        // line 122
        echo getLang("ConfirmDeletePages");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmPages\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 127
        echo getLang("ChoosePages");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmPages\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t\tfp[i].checked = Status;
\t\t}

\t\tfunction PreviewPage(PageId)
\t\t{
\t\t\tvar l = screen.availWidth / 2 - 300;
\t\t\tvar t = screen.availHeight / 2 - 300;
\t\t\tvar win = window.open('index.php?ToDo=previewPage&pageId='+PageId, 'pagePreview', 'width=600,height=600,left='+l+',top='+t+',scrollbars=1');
\t\t}

\t\tvar updatingSortables = false;
\t\tvar updateTimeout = null;
\t\tfunction CreateSortableList() {
\t\t\t\$('#PageList').nestedSortable({
\t\t\t\tdisableNesting: 'no-nest',
\t\t\t\tforcePlaceholderSize: true,
\t\t\t\thandle: '.sort-handle',
\t\t\t\titems: 'li',
\t\t\t\topacity: .8,
\t\t\t\ttabSize: 20,
\t\t\t\ttolerance: 'pointer',
\t\t\t\ttoleranceElement: '> table',
\t\t\t\tlistClass: 'SortableList',
\t\t\t\tplaceholder: 'SortableRowHelper',
\t\t\t\tupdate: function(event, ui) {
\t\t\t\t\tvar serialized = \$(this).sortable(\"serialize\");
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'remote.php?w=updatePageOrders',
\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\tdataType: 'xml',
\t\t\t\t\t\tdata: serialized,
\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\tvar status = \$('status', response).text();
\t\t\t\t\t\t\tvar message = \$('message', response).text();
\t\t\t\t\t\t\tif(status == 0) {
\t\t\t\t\t\t\t\tdisplay_error('PagesStatus', message);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tdisplay_success('PagesStatus', message);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t}

\t\t\$(document).ready(function()
\t\t{
\t\t\tCreateSortableList();
\t\t});

\t\tfunction ShowTab(T)
\t\t{
\t\t\ti = 0;
\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t\t}
\t</script>
\t";
    }

}

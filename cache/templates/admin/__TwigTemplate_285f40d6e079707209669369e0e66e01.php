<?php

/* reviews.manage.tpl */
class __TwigTemplate_285f40d6e079707209669369e0e66e01 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<script language=JavaScript>

\t\tfunction MassActionReviews(action) {
\t\t\tvar sortURL = g('ReviewSortURL').href;
\t\t\tsortURL = sortURL.substring(sortURL.indexOf('?')+1, sortURL.length);
\t\t\t\$.post('remote.php?'+sortURL+'&w='+action, \$('#frmReviews').serialize(), ReviewsMassActioned);
\t\t}

\t\tfunction ReviewsMassActioned(response) {
\t\t\tvar status = \$('status', response).text();
\t\t\tBindAjaxGridSorting();
\t\t\tvar message = \$('message', response).text();
\t\t\tif(status == 0) {
\t\t\t\tdisplay_error('ReviewsStatus', message);
\t\t\t}
\t\t\telse {
\t\t\t\tdisplay_success('ReviewsStatus', message);
\t\t\t\tvar grid = \$('grid', response).text();
\t\t\t\tif(!grid) {
\t\t\t\t\t\$('#ReviewGridView').hide();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$('.GridContainer').html(grid);
\t\t\t\t}
\t\t\t}
\t\t}
\t</script>

\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 33
        echo getLang("ManageReviews");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 37
        echo twig_safe_filter((isset($context['ReviewIntro']) ? $context['ReviewIntro'] : null));
        echo "</p>
\t\t\t<div id=\"ReviewsStatus\">";
        // line 38
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</div>
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 41
        echo getLang("DeleteReviews1");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " /> &nbsp;<input type=\"button\" name=\"IndexApproveButton\" value=\"";
        echo getLang("ApproveReviews");
        echo "\" id=\"IndexApproveButton\" class=\"SmallButton\" onclick=\"ApproveSelected()\" ";
        echo twig_safe_filter((isset($context['DisableApproved']) ? $context['DisableApproved'] : null));
        echo " /> &nbsp;<input type=\"button\" name=\"IndexDisapproveButton\" value=\"";
        echo getLang("DisapproveReviews");
        echo "\" id=\"IndexDisapproveButton\" class=\"SmallButton\" onclick=\"DisapproveSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDisapproved']) ? $context['DisableDisapproved'] : null));
        echo " />
\t\t\t</td>
\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t<table id=\"Table16\" style=\"display:";
        // line 44
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t<tr>
\t\t\t\t\t<form action=\"index.php?ToDo=viewReviews";
        // line 46
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm)\">
\t\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"viewReviews\">
\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 49
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\" id=\"SearchQuery\" class=\"Button\" size=\"20\" />&nbsp;
\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" id=\"SearchButton\" src=\"images/searchicon.gif\" border=\"0\" />
\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"right\" style=\"padding-right:55pt\">
\t\t\t\t\t\t<a id=\"SearchClearButton\" href=\"index.php?ToDo=viewReviews\">";
        // line 56
        echo getLang("ClearResults");
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 69
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\" id=\"ReviewGridView\">
\t\t\t<form name=\"frmReviews\" id=\"frmReviews\" method=\"post\" action=\"index.php?ToDo=deleteReviews\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 72
        echo twig_safe_filter((isset($context['ReviewDataGrid']) ? $context['ReviewDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction PreviewReview(ReviewId)
\t\t{
\t\t\tvar l = screen.availWidth / 2 - 250;
\t\t\tvar t = screen.availHeight / 2 - 300;
\t\t\tvar win = window.open('index.php?ToDo=previewReview&reviewId='+ReviewId, 'previewReview', 'width=500,height=600,left='+l+',top='+t+',scrollbars=1');
\t\t}

\t\tfunction CheckSearchForm()
\t\t{
\t\t\tvar query = document.getElementById(\"searchQuery\");

\t\t\tif(query.value == \"\") {
\t\t\t\talert(\"";
        // line 93
        echo getLang("EnterSearchTerm");
        echo "\");
\t\t\t\tquery.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmReviews\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++) {
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0) {
\t\t\t\tif(confirm(\"";
        // line 112
        echo getLang("ConfirmDeleteReviews");
        echo "\"))
\t\t\t\t\tMassActionReviews('deleteReviews');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 117
        echo getLang("ChooseReview1");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ApproveSelected()
\t\t{
\t\t\tvar frm = document.getElementById(\"frmReviews\");
\t\t\tvar fp = frm.elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++) {
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0) {
\t\t\t\tMassActionReviews('approveReviews');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 137
        echo getLang("ChooseReview2");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction DisapproveSelected()
\t\t{
\t\t\tvar frm = document.getElementById(\"frmReviews\");
\t\t\tvar fp = frm.elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++) {
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0) {
\t\t\t\tMassActionReviews('disapproveReviews');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 157
        echo getLang("ChooseReview3");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmReviews\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t\tfp[i].checked = Status;
\t\t}

\t</script>
";
    }

}

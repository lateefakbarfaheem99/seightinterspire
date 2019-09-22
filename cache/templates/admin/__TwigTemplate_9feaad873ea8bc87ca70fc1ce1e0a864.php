<?php

/* giftcertificates.manage.tpl */
class __TwigTemplate_9feaad873ea8bc87ca70fc1ce1e0a864 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">

\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t";
        // line 6
        echo getLang("View");
        echo ": <a href=\"#\" style=\"color:#005FA3\" id=\"ViewsMenuButton\" class=\"PopDownMenu\">";
        echo twig_safe_filter((isset($context['ViewName']) ? $context['ViewName'] : null));
        echo " <img width=\"8\" height=\"5\" src=\"images/arrow_blue.gif\" border=\"0\" /></a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("ManageGiftCertificatesIntro");
        echo "</p>
\t\t\t<div id=\"GiftCertificatesStatus\">
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</div>
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 18
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t</td>
\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t<table id=\"Table16\" style=\"display:";
        // line 21
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text\" nowrap align=\"right\">
\t\t\t\t\t\t<form name=\"frmGiftCertificates\" id=\"frmGiftCertificates\" action=\"index.php?";
        // line 24
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"viewGiftCertificates\" />
\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 26
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\" id=\"SearchQuery\" class=\"SearchBox\" style=\"width:150px\" />&nbsp;
\t\t\t\t\t\t<select name=\"certificateStatus\" id=\"certificateStatus\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 28
        echo getLang("AllStatuses");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 29
        echo twig_safe_filter((isset($context['GiftCertificateStatusList']) ? $context['GiftCertificateStatusList'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" style=\"padding-left: 10px; vertical-align: top;\" id=\"SearchButton\" src=\"images/searchicon.gif\" border=\"0\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t<a href=\"index.php?ToDo=searchGiftCertificates\">";
        // line 37
        echo getLang("AdvancedSearch");
        echo "</a>
\t\t\t\t\t\t<span style=\"display:";
        // line 38
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\">| <a id=\"SearchClearButton\" href=\"index.php?ToDo=viewGiftCertificates\">";
        echo getLang("ClearResults");
        echo "</a></span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 48
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmGiftCertificates1\" id=\"frmGiftCertificates1\" method=\"post\" action=\"index.php?ToDo=deleteGiftCertificates\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 51
        echo twig_safe_filter((isset($context['GiftCertificatesDataGrid']) ? $context['GiftCertificatesDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>
\t\t<div id=\"ViewsMenu\" class=\"DropDownMenu DropShadow\" style=\"display: none; width:200px\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['CustomSearchOptions']) ? $context['CustomSearchOptions'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t\t<hr />
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"index.php?ToDo=createGiftCertificateView\" style=\"background-image:url('images/view_add.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        // line 63
        echo getLang("CreateANewView");
        echo "</a></li>
\t\t\t\t\t<li style=\"display:";
        // line 64
        echo twig_safe_filter((isset($context['HideDeleteViewLink']) ? $context['HideDeleteViewLink'] : null));
        echo "\"><a onclick=\"\$('#ViewsMenu').hide(); ConfirmDeleteCustomSearch('";
        echo twig_safe_filter((isset($context['CustomSearchId']) ? $context['CustomSearchId'] : null));
        echo "')\" href=\"javascript:void(0)\" style=\"background-image:url('images/view_del.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        echo getLang("DeleteThisView");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tif(\$('.DeleteCheck:checked').length == 0) {
\t\t\t\talert('";
        // line 76
        echo getLang("ChooseGiftCertificatesToDelete");
        echo "');
\t\t\t}
\t\t\telse {
\t\t\t\tif(confirm('";
        // line 79
        echo getLang("ConfirmDeleteGiftCertificates");
        echo "')) {
\t\t\t\t\t\$('#frmGiftCertificates1').submit();
\t\t\t\t}
\t\t\t}
\t\t}

\t\tfunction UpdateGiftCertificateStatus(giftcertid, statusid, statustext) {
\t\t\t\$('#ajax_status_'+giftcertid).show();
\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php?w=updateGiftCertificateStatus&giftCertificateId='+giftcertid+'&status='+statusid,
\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\$('#ajax_status_'+giftcertid).hide();
\t\t\t\t\tif(response == 0) {
\t\t\t\t\t\talert('";
        // line 92
        echo getLang("FailedUpdateGiftCertificateStatus");
        echo "');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\talert('";
        // line 96
        echo getLang("FailedUpdateGiftCertificateStatus");
        echo "');
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction ConfirmDeleteCustomSearch(id) {
\t\t\tif(confirm('";
        // line 102
        echo getLang("ConfirmDeleteCustomSearch");
        echo "')) {
\t\t\t\tdocument.location.href = \"index.php?ToDo=deleteCustomGiftCertificateSearch&searchId=\"+search_id;
\t\t\t}
\t\t}

\t\tfunction QuickGiftCertificateView(id) {
\t\t\tvar tr = document.getElementById(\"tr\"+id);
\t\t\tvar trQ = document.getElementById(\"trQ\"+id);
\t\t\tvar tdQ = document.getElementById(\"tdQ\"+id);
\t\t\tvar img = document.getElementById(\"expand\"+id);

\t\t\tif(img.src.indexOf(\"plus.gif\") > -1)
\t\t\t{
\t\t\t\timg.src = \"images/minus.gif\";

\t\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t\t{
\t\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"#dbf3d1\";
\t\t\t\t}

\t\t\t\t\$(trQ).find('.QuickView').load('remote.php?w=giftCertificateQuickView&giftCertificateId='+id, {}, function() {
\t\t\t\t\ttrQ.style.display = \"\";
\t\t\t\t});
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\timg.src = \"images/plus.gif\";

\t\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t\t{
\t\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"\";
\t\t\t\t}
\t\t\t\ttrQ.style.display = \"none\";
\t\t\t}
\t\t}
</script>
";
    }

}

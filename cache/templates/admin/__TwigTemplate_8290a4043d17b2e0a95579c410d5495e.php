<?php

/* customers.manage.tpl */
class __TwigTemplate_8290a4043d17b2e0a95579c410d5495e extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['forms'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "
\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t";
        // line 8
        echo getLang("View");
        echo ": <a href=\"#\" style=\"color:#005FA3\" id=\"ViewsMenuButton\" class=\"PopDownMenu\">";
        echo twig_safe_filter((isset($context['ViewName']) ? $context['ViewName'] : null));
        echo " <img width=\"8\" height=\"5\" src=\"images/arrow_blue.gif\" border=\"0\" /></a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 13
        echo twig_safe_filter((isset($context['CustomerIntro']) ? $context['CustomerIntro'] : null));
        echo "</p>
\t\t\t<div id=\"CustomerStatus\">
\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</div>
\t\t\t<div style=\"background-color: rgb(244, 244, 244); display:none\" class=\"MessageBox MessageBoxSuccess\" id=\"CustomerGroupMessage\"></div>
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 21
        echo getLang("AddCustomer");
        echo "...\" id=\"IndexAddButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=addCustomer'\" ";
        echo twig_safe_filter((isset($context['DisableAdd']) ? $context['DisableAdd'] : null));
        echo " />
\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 22
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />

\t\t\t\t";
        // line 24
        if ((isset($context['DisableExport']) ? $context['DisableExport'] : null)) {
            echo "\t\t\t\t\t<input type=\"button\" value=\"";
            // line 25
            echo getLang("ExportCustomers");
            echo "\" disabled=\"disabled\" class=\"SmallButton PopDownMenu\" style=\"width:160px;\" />
\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t<input type=\"button\" value=\"";
            // line 27
            echo getLang("ExportCustomers");
            echo "\" id=\"CustomerExportMenuButton\" class=\"SmallButton PopDownMenu\" style=\"width:160px;\" />
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</td>
\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t<form action=\"index.php\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm)\">
\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "hiddenInputs", array((array("ToDo" => "viewCustomers")) + ((isset($context['searchURL']) ? $context['searchURL'] : null)), array(0 => "searchQuery"), ), "method"), "1");
        echo "
\t\t\t\t\t<table id=\"Table16\" style=\"display:";
        // line 33
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 36
        echo twig_safe_filter((isset($context['EscapedQuery']) ? $context['EscapedQuery'] : null));
        echo "\" id=\"SearchQuery\" class=\"Button\" size=\"20\" />&nbsp;

\t\t\t\t\t\t\t\t<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\t\t\t\t\t\t\t\t\tfunction do_custom_search(search_id) {
\t\t\t\t\t\t\t\t\t\tif(search_id > 0) {
\t\t\t\t\t\t\t\t\t\t\tdocument.location.href = \"index.php?ToDo=customCustomerSearch&searchId=\"+search_id;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\t\t\tdocument.location.href = \"index.php?ToDo=viewProducts\";
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\tfunction confirm_delete_custom_search(search_id) {
\t\t\t\t\t\t\t\t\t\tif(confirm('";
        // line 49
        echo getLang("ConfirmDeleteCustomSearch");
        echo "'))
\t\t\t\t\t\t\t\t\t\t\tdocument.location.href = \"index.php?ToDo=deleteCustomCustomerSearch&searchId=\"+search_id;
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t//]]></script>

\t\t\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" style=\"padding-left: 10px; vertical-align: top;\" id=\"SearchButton\" src=\"images/searchicon.gif\" border=\"0\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td nowrap=\"nowrap\">
\t\t\t\t\t\t\t\t<a href=\"index.php?ToDo=searchCustomers\">";
        // line 59
        echo getLang("AdvancedSearch");
        echo "</a>
\t\t\t\t\t\t\t\t<span style=\"display:";
        // line 60
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\">| <a id=\"SearchClearButton\" href=\"index.php?ToDo=viewCustomers\">";
        echo getLang("ClearResults");
        echo "</a></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 74
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmCustomers\" id=\"frmCustomers\" method=\"post\" action=\"index.php?ToDo=deleteCustomers\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 77
        echo twig_safe_filter((isset($context['CustomerDataGrid']) ? $context['CustomerDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>

\t";
        // line 83
        if ((!(isset($context['DisableExport']) ? $context['DisableExport'] : null))) {
            echo "\t\t";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "dropDownMenu", array(array("id" => "CustomerExportMenu", "groups" => (isset($context['customerExportMenu']) ? $context['customerExportMenu'] : null)), ), "method"), "1");
            // line 87
            echo "
\t";
        }
        // line 88
        echo "
\t<div id=\"ViewsMenu\" class=\"DropShadow DropDownMenu\" style=\"display: none; width:200px\">
\t\t<ul>
\t\t\t";
        // line 92
        echo twig_safe_filter((isset($context['CustomSearchOptions']) ? $context['CustomSearchOptions'] : null));
        echo "
\t\t</ul>
\t\t<hr />
\t\t<ul>
\t\t\t<li><a href=\"index.php?ToDo=createCustomerView\" style=\"background-image:url('images/view_add.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        // line 96
        echo getLang("CreateANewView");
        echo "</a></li>
\t\t\t<li style=\"display:";
        // line 97
        echo twig_safe_filter((isset($context['HideDeleteViewLink']) ? $context['HideDeleteViewLink'] : null));
        echo "\"><a onclick=\"\$('#ViewsMenu').hide(); confirm_delete_custom_search('";
        echo twig_safe_filter((isset($context['CustomSearchId']) ? $context['CustomSearchId'] : null));
        echo "')\" href=\"javascript:void(0)\" style=\"background-image:url('images/view_del.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        echo getLang("DeleteThisView");
        echo "</a></li>
\t\t</ul>
\t</div>

\t</div>

\t<script type=\"text/javascript\" src=\"script/order.js?";
        // line 103
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t<script type=\"text/javascript\">

\t\tvar td = null;
\t\tvar ret = \"\";

\t\tfunction CheckSearchForm() {
\t\t\tvar query = document.getElementById(\"searchQuery\");

\t\t\tif(query.value == \"\")
\t\t\t{
\t\t\t\talert(\"";
        // line 114
        echo getLang("EnterSearchTerm");
        echo "\");
\t\t\t\tquery.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmDeleteSelected() {
\t\t\tvar fp = document.getElementById(\"frmCustomers\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0)
\t\t\t{
\t\t\t\tif(confirm(\"";
        // line 134
        echo getLang("ConfirmDeleteCustomers");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmCustomers\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 139
        echo getLang("ChooseCustomer");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ToggleDeleteBoxes(Status) {
\t\t\tvar fp = document.getElementById(\"frmCustomers\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t\tfp[i].checked = Status;
\t\t}

\t\tfunction confirm_delete_custom_search(search_id) {
\t\t\tif(confirm(\"";
        // line 151
        echo getLang("ConfirmDeleteCustomSearch");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=deleteCustomCustomerSearch&searchId=\"+search_id;
\t\t}

\t\tfunction updateStoreCredit(id) {
\t\t\tvar credit = \$('#storecredit_'+id).val();
\t\t\tvar button = \$('#save_storecredit_'+id);
\t\t\tif(credit != \"\" && isNaN(priceFormat(credit))) {
\t\t\t\talert('";
        // line 159
        echo getLang("SearchEnterValidStoreCredit");
        echo "');
\t\t\t\t\$('#storecredit_'+id).select();
\t\t\t\t\$('#storecredit_'+id).focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\tbutton.val('...');
\t\t\tbutton.attr('disabled', true);
\t\t\tbutton.blur();
\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php?w=updateStoreCredit&customerId='+id+'&credit='+credit,
\t\t\t\tsuccess: function(response) {
\t\t\t\t\tbutton.val('";
        // line 170
        echo getLang("Save");
        echo "');
\t\t\t\t\tbutton.attr('disabled', false);
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\tbutton.val('";
        // line 174
        echo getLang("Save");
        echo "');
\t\t\t\t\tbutton.attr('disabled', false);
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction updateCustomerGroup(customerId, groupId, customerName, groupName) {
\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php?w=updateCustomerGroup&customerId='+customerId+'&groupId='+groupId,
\t\t\t\tsuccess: function(response) {
\t\t\t\t\tif(response == \"1\") {
\t\t\t\t\t\tif(groupId > 0) {
\t\t\t\t\t\t\t\$('#CustomerGroupMessage').text(customerName + ' is now a member of the ' + groupName + ' group.');
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\$('#CustomerGroupMessage').text(customerName + ' is no longer in a customer group.');
\t\t\t\t\t\t}

\t\t\t\t\t\t\$('#CustomerGroupMessage').show('slow');
\t\t\t\t\t\twindow.setTimeout(\"\$('#CustomerGroupMessage').hide('slow');\", 5000);
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\talert('";
        // line 196
        echo getLang("ErrorUpdatingCustomerGroup");
        echo "');
\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\talert('";
        // line 201
        echo getLang("ErrorUpdatingCustomerGroup");
        echo "');
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction viewOrderNotes(orderId)
\t\t{
\t\t\tif (isNaN(orderId)) {
\t\t\t\treturn false;
\t\t\t}

\t\t\t\$.iModal({
\t\t\t\ttype: 'ajax',
\t\t\t\turl: 'remote.php?remoteSection=customers&w=viewOrderNotes&orderId='+orderId,
\t\t\t\twidth: 600
\t\t\t});
\t\t}

\t</script>
<script type=\"text/javascript\" src=\"script/customers.js?";
        // line 220
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\tif (typeof lang == 'undefined') {
\t\tlang = {};
\t}
\tlang.SavingNotes = \"";
        // line 225
        echo getLang("SavingNotes");
        echo "\";
//]]></script>

";
        // line 228
        if ((!(isset($context['DisableExport']) ? $context['DisableExport'] : null))) {
            echo "\t";
            // line 229
            $this->env->loadTemplate("emailintegration.export.javascript.tpl")->display($context);
        }
    }

}

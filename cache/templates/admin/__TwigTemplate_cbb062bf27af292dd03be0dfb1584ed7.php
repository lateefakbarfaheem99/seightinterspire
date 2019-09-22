<?php

/* customer.form.tpl */
class __TwigTemplate_cbb062bf27af292dd03be0dfb1584ed7 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
<script type=\"text/javascript\" src=\"../javascript/formfield.js?";
        // line 4
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<form action=\"index.php?ToDo=";
        // line 5
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(checkAddCustomerForm)\" id=\"frmCustomer\" method=\"post\">
\t<input type=\"hidden\" name=\"customerId\" id=\"customerId\" value=\"";
        // line 6
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"newCustomer\" id=\"newCustomer\" value=\"";
        // line 7
        echo twig_safe_filter((isset($context['NewCustomer']) ? $context['NewCustomer'] : null));
        echo "\" />
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\" />

\t<div id=\"content\">
\t\t<h1>";
        // line 11
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</h1>

\t\t<p class=\"intro\">
\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "
\t\t</p>

\t\t<div id=\"MessageTmpBlock\">
\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</div>

\t\t";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t<input type=\"submit\" value=\"";
        // line 22
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" name=\"SaveButton1\" />
\t\t\t<input type=\"submit\" value=\"";
        // line 23
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" name=\"SaveContinueButton1\"  onclick=\"saveAndAddAnother();\" class=\"FormButton Field150\" />
\t\t\t<input type=\"reset\" value=\"";
        // line 24
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" name=\"CancelButton1\" onclick=\"confirmCancel()\" />
\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "

\t\t<ul id=\"tabnav\">
\t\t\t<li><a href=\"#\" id=\"tab0\" onclick=\"ShowTab(0)\" class=\"active\">";
        // line 28
        echo getLang("CustomerDetails");
        echo "</a></li>
\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 29
        echo getLang("CustomerAddressBook");
        echo "</a></li>
\t\t</ul>

\t\t<div id=\"div0\">
\t\t\t<p class=\"intro\">
\t\t\t\t";
        // line 34
        echo getLang("CustomerDetailsIntro");
        echo "\t\t\t</p>

\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerDetails", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerFirstName", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 43
        echo "
\t\t\t\t\t<input type=\"text\" id=\"custFirstName\" name=\"custFirstName\" class=\"Field300\" value=\"";
        // line 44
        echo twig_safe_filter((isset($context['CustomerFirstName']) ? $context['CustomerFirstName'] : null));
        echo "\" />
\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerLastName", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 50
        echo "
\t\t\t\t\t<input type=\"text\" id=\"custLastName\" name=\"custLastName\" class=\"Field300\" value=\"";
        // line 51
        echo twig_safe_filter((isset($context['CustomerLastName']) ? $context['CustomerLastName'] : null));
        echo "\" />
\t\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerCompany", array(), "any")) . (":")), ), "method"), "1");
        // line 56
        echo "
\t\t\t\t\t<input type=\"text\" id=\"custCompany\" name=\"custCompany\" class=\"Field300\" value=\"";
        // line 57
        echo twig_safe_filter((isset($context['CustomerCompany']) ? $context['CustomerCompany'] : null));
        echo "\" />
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerEmail", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 63
        echo "
\t\t\t\t\t<input type=\"text\" id=\"custEmail\" name=\"custEmail\" class=\"Field300\" value=\"";
        // line 64
        echo twig_safe_filter((isset($context['CustomerEmail']) ? $context['CustomerEmail'] : null));
        echo "\">
\t\t\t\t\t<input type=\"button\" onclick=\"checkEmailUniqueRequest(); return false;\" value=\"";
        // line 65
        echo getLang("CustomerEmailUniqueCheckLink");
        echo "\" class=\"FormButton Field120\"/>
\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerGroup", array(), "any")) . (":")), ), "method"), "1");
        // line 70
        echo "
\t\t\t\t\t<select id=\"custGroupId\" name=\"custGroupId\" class=\"Field300\">
\t\t\t\t\t\t<option value=\"0\">";
        // line 72
        echo getLang("CustomerGroupNotAssoc");
        echo "</option>
\t\t\t\t\t\t";
        // line 73
        echo twig_safe_filter((isset($context['CustomerGroupOptions']) ? $context['CustomerGroupOptions'] : null));
        echo "
\t\t\t\t\t</select>
\t\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerPhone", array(), "any")) . (":")), ), "method"), "1");
        // line 79
        echo "
\t\t\t\t\t<input type=\"text\" id=\"custPhone\" name=\"custPhone\" class=\"Field80\" value=\"";
        // line 80
        echo twig_safe_filter((isset($context['CustomerPhone']) ? $context['CustomerPhone'] : null));
        echo "\" />
\t\t\t\t";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 83
        if ((isset($context['HideStoreCredit']) ? $context['HideStoreCredit'] : null) != "none") {
            echo "\t\t\t\t\t";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerStoreCredit", array(), "any")) . (":")), ), "method"), "1");
            // line 86
            echo "
\t\t\t\t\t\t";
            // line 87
            echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
            echo " <input type=\"text\" id=\"custStoreCredit\" name=\"custStoreCredit\" class=\"Field50\" value=\"";
            echo twig_safe_filter((isset($context['CustomerStoreCredit']) ? $context['CustomerStoreCredit'] : null));
            echo "\"> ";
            echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
            echo "
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dcuststorecredit');\" onmouseover=\"ShowHelp('dcuststorecredit', '";
            // line 88
            echo getLang("CustomerStoreCredit");
            echo "', '";
            echo getLang("CustomerStoreCreditHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"dcuststorecredit\"></div>
\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
            echo "
\t\t\t\t";
        }
        // line 91
        echo "
\t\t\t\t";
        // line 93
        echo twig_safe_filter((isset($context['CustomFields']) ? $context['CustomFields'] : null));
        echo "
\t\t\t";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerPasswordDetails", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ((isset($context['PasswordLabel']) ? $context['PasswordLabel'] : null)) . (":"), "required" => (isset($context['CustomerId']) ? $context['CustomerId'] : null) == 0), ), "method"), "1");
        // line 102
        echo "
\t\t\t\t\t<input type=\"password\" id=\"custPassword\" name=\"custPassword\" class=\"Field250\" value=\"";
        // line 103
        echo twig_safe_filter((isset($context['CustomerPassword']) ? $context['CustomerPassword'] : null));
        echo "\" AUTOCOMPLETE = \"OFF\">
\t\t\t\t\t<img onmouseout=\"HideHelp('dcustpassword');\" onmouseover=\"ShowHelp('dcustpassword', '";
        // line 104
        echo twig_safe_filter((isset($context['PasswordLabel']) ? $context['PasswordLabel'] : null));
        echo "', '";
        echo twig_safe_filter((isset($context['PasswordHelp']) ? $context['PasswordHelp'] : null));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"dcustpassword\"></div>
\t\t\t\t";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerPasswordConfirm", array(), "any")) . (":"), "required" => (isset($context['CustomerId']) ? $context['CustomerId'] : null) == 0), ), "method"), "1");
        // line 111
        echo "
\t\t\t\t\t<input type=\"password\" id=\"custPasswordConfirm\" name=\"custPasswordConfirm\" class=\"Field250\" value=\"";
        // line 112
        echo twig_safe_filter((isset($context['CustomerPasswordConfirm']) ? $context['CustomerPasswordConfirm'] : null));
        echo "\" AUTOCOMPLETE = \"OFF\">
\t\t\t\t\t<img onmouseout=\"HideHelp('dcustpasswordconfirm');\" onmouseover=\"ShowHelp('dcustpasswordconfirm', '";
        // line 113
        echo getLang("CustomerPasswordConfirm");
        echo "', '";
        echo twig_safe_filter((isset($context['PasswordConfirmHelp']) ? $context['PasswordConfirmHelp'] : null));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t<div style=\"display:none\" id=\"dcustpasswordconfirm\"></div>
\t\t\t\t";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t</div>
\t\t<div id=\"div1\">
\t\t\t<div style=\"padding-bottom:5px\">";
        // line 119
        echo getLang("CustomerDetailsIntro");
        echo "</div>
\t\t\t<div class=\"MessageBox MessageBoxInfo\" style=\"display: ";
        // line 120
        echo twig_safe_filter((isset($context['CustomerAddressEmptyShow']) ? $context['CustomerAddressEmptyShow'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['CustomerAddressListWarning']) ? $context['CustomerAddressListWarning'] : null));
        echo "</div>
\t\t\t<p class=\"Intro\" style=\"display: ";
        // line 121
        echo twig_safe_filter((isset($context['HideCustomerAddressButtons']) ? $context['HideCustomerAddressButtons'] : null));
        echo ";\">
\t\t\t\t<input type=\"button\" value=\"";
        // line 122
        echo getLang("CustomerAddShippingAddress");
        echo "\" onclick=\"addShippingAddress();\" class=\"SmallButton Field150\" ";
        echo twig_safe_filter((isset($context['CustomerAddressAddDisabled']) ? $context['CustomerAddressAddDisabled'] : null));
        echo " />
\t\t\t\t<input type=\"button\" value=\"";
        // line 123
        echo getLang("DeleteSelected");
        echo "\" name=\"DeleteAddressesButton\" onclick=\"confirmDeleteAddressBoxes();\" class=\"SmallButton Field150\" ";
        echo twig_safe_filter((isset($context['CustomerAddressDeleteDisabled']) ? $context['CustomerAddressDeleteDisabled'] : null));
        echo " />
\t\t\t</p>
\t\t\t<div class=\"GridContainer\" style=\"display: ";
        // line 125
        echo twig_safe_filter((isset($context['CustomerAddressEmptyHide']) ? $context['CustomerAddressEmptyHide'] : null));
        echo "\">
\t\t\t\t";
        // line 126
        echo twig_safe_filter((isset($context['CustomerShippingAddressGrid']) ? $context['CustomerShippingAddressGrid'] : null));
        echo "
\t\t\t</div><br />
\t\t\t<br />
\t\t</div>

\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\" id=\"SaveButtons\">
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 134
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" name=\"SaveButton2\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 135
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" name=\"SaveContinueButton2\" onclick=\"saveAndAddAnother();\" class=\"FormButton Field150\" />
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 136
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" name=\"CancelButton2\" onclick=\"confirmCancel()\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t</td>
\t</tr>
\t</table>
</div>
</form>

<script type=\"text/javascript\"><!--

\t\$(document).ready(function() {
\t\tShowTab(";
        // line 149
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");
\t});

\tfunction ShowTab(T)
\t{
\t\t\ti = 0;
\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tif (T == 1) {
\t\t\t\t\$('#SaveButtons').hide();
\t\t\t} else {
\t\t\t\t\$('#SaveButtons').show();
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t}

\tfunction getAddressBoxes()
\t{
\t\treturn \$(\"#IndexGrid :checkbox[name='addresses[]']\");
\t}

\tfunction selectedAddressBoxes()
\t{
\t\treturn getAddressBoxes().not(\"[checked=false]\");
\t}

\tfunction toggleAddressBoxes(status)
\t{
\t\tgetAddressBoxes().each(function() { \$(this).attr(\"checked\", status); });
\t}

\tfunction confirmDeleteAddressBoxes(addressId)
\t{
\t\tif ((!isNaN(addressId) && addressId > 0) || selectedAddressBoxes().length > 0) {
\t\t\tif (confirm(\"";
        // line 190
        echo getLang("ConfirmDeleteCustomerAddresses");
        echo "\")) {
\t\t\t\tif (!isNaN(addressId) && addressId > 0) {
\t\t\t\t\tMakeHidden('addresses', addressId, 'frmCustomer');
\t\t\t\t}
\t\t\t\tdocument.getElementById(\"frmCustomer\").action = \"index.php?ToDo=deleteCustomerAddress\";
\t\t\t\tdocument.getElementById(\"frmCustomer\").submit();
\t\t\t}
\t\t} else {
\t\t\talert(\"";
        // line 198
        echo getLang("ChooseCustomerAddress");
        echo "\");
\t\t}
\t}

\tfunction saveAndAddAnother() {
\t\tMakeHidden('addanother', '1', 'frmCustomer');
\t}

\tfunction saveAndAddAddress() {
\t\tShowTab(0);
\t\tif (checkAddCustomerForm()) {
\t\t\tMakeHidden('addaddresses', '1', 'frmCustomer');
\t\t\tdocument.getElementById(\"frmCustomer\").submit();
\t\t}
\t}

\tfunction confirmCancel() {
\t\tif(confirm('";
        // line 215
        echo twig_safe_filter((isset($context['CancelMessage']) ? $context['CancelMessage'] : null));
        echo "')) {
\t\t\tdocument.location.href='index.php?ToDo=viewCustomers';
\t\t} else {
\t\t\treturn false;
\t\t}
\t}

\tfunction checkAddCustomerForm()
\t{
\t\tvar checkFileds = new Array();

\t\tcheckFileds['custFirstName'] = \"";
        // line 226
        echo getLang("CustomerFirstNameRequired");
        echo "\"
\t\tcheckFileds['custLastName'] = \"";
        // line 227
        echo getLang("CustomerLastNameRequired");
        echo "\"
\t\tcheckFileds['custEmail'] = \"";
        // line 228
        echo getLang("CustomerEmailRequired");
        echo "\";

\t\tif (\"";
        // line 230
        echo twig_safe_filter((isset($context['PasswordRequiredCheck']) ? $context['PasswordRequiredCheck'] : null));
        echo "\" == \"1\") {
\t\t\tcheckFileds['custPassword'] = \"";
        // line 231
        echo getLang("CustomerPasswordRequired");
        echo "\";
\t\t}

\t\tfor (var i in checkFileds) {
\t\t\tif (\$('#' + i).val() == '') {
\t\t\t\talert(checkFileds[i]);
\t\t\t\t\$('#' + i).focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(\$('#custEmail').val().indexOf(\"@\") == -1 || \$('#custEmail').val().indexOf(\".\") == -1) {
\t\t\talert(\"";
        // line 243
        echo getLang("CustomerEmailInvalue");
        echo "\");
\t\t\t\$('#custEmail').focus();
\t\t\treturn false;
                }

\t\tif (\$('#custPassword').val() !== \$('#custPasswordConfirm').val()) {
\t\t\talert(\"";
        // line 249
        echo twig_safe_filter((isset($context['PasswordConfirmError']) ? $context['PasswordConfirmError'] : null));
        echo "\");
\t\t\t\$('#custPassword').focus();
\t\t\treturn false;
\t\t}

\t\tif(\$('#custStoreCredit').val() && isNaN(priceFormat(\$('#custStoreCredit').val()))) {
\t\t\talert(\"";
        // line 255
        echo getLang("CustomerStoreCreditError");
        echo "\");
\t\t\t\$('#custStoreCredit').focus().select();
\t\t\treturn false;
\t\t}

\t\t/**
\t\t * Now for the custom fields
\t\t */
\t\tvar formfields = FormField.GetValues(";
        // line 263
        echo twig_safe_filter((isset($context['CustomFieldsAccountFormId']) ? $context['CustomFieldsAccountFormId'] : null));
        echo ");

\t\tfor (var i=0; i<formfields.length; i++) {
\t\t\tvar rtn = FormField.Validate(formfields[i].field);

\t\t\tif (!rtn.status) {
\t\t\t\talert(rtn.msg);
\t\t\t\tFormField.Focus(formfields[i].field);
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\treturn true;
\t}

\tfunction checkEmailUniqueRequest(formCheck)
\t{
\t\tif (formCheck !== 1) {
\t\t\tformCheck = 0;
\t\t}

\t\tvar obj = {};

\t\tobj.type    = 'POST';
\t\tobj.url     = 'remote.php';
\t\tobj.data    = {
\t\t\t\t'w'            : 'checkemailuniqueness',
\t\t\t\t'remoteSection': 'customers',
\t\t\t\t'customerId'   : '";
        // line 291
        echo twig_safe_filter((isset($context['CustomerId']) ? $context['CustomerId'] : null));
        echo "',
\t\t\t\t'email'        : \$('#custEmail').val()
\t\t\t\t};
\t\tobj.success = checkEmailUniqueResponse;

\t\t\$.ajax(obj);
\t}

\tfunction checkEmailUniqueResponse(data)
\t{
\t\tvar message = \$('message', data).text();

\t\t\$('#MessageTmpBlock').hide();
\t\t\$('#MessageTmpBlock').html(message);
\t\t\$('#MessageTmpBlock').show('slow');
\t}

\tfunction addShippingAddress()
\t{
\t\tdocument.getElementById('frmCustomer').action = 'index.php?ToDo=addCustomerAddress';
\t\tdocument.getElementById('frmCustomer').submit();
\t\treturn false;
\t}

\tfunction editShippingAddress(addressId)
\t{
\t\tMakeHidden('addressId', addressId, 'frmCustomer');
\t\tdocument.getElementById('frmCustomer').action = 'index.php?ToDo=editCustomerAddress';
\t\tdocument.getElementById('frmCustomer').submit();
\t\treturn false;
\t}

\t";
        // line 323
        echo twig_safe_filter((isset($context['FormFieldEventData']) ? $context['FormFieldEventData'] : null));
        echo "

//--></script>";
    }

}

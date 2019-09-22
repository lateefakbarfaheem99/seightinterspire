<?php

/* user.form.tpl */
class __TwigTemplate_c81566bc07ce1e42553b5359392c4cf9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 2
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckUserForm)\" id=\"frmUser\" method=\"post\">
\t<input type=\"hidden\" name=\"userId\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['UserId']) ? $context['UserId'] : null));
        echo "\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 7
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("UserIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['FlashMessages']) ? $context['FlashMessages'] : null));
        echo "
\t\t\t<p>
\t\t\t\t<input type=\"submit\" name=\"SaveButton1\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp;
\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t</p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 24
        echo getLang("NewUserDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 28
        echo getLang("Username");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"username\" name=\"username\" class=\"Field250\" autocomplete=\"off\" value=\"";
        // line 31
        echo twig_safe_filter((isset($context['Username']) ? $context['Username'] : null));
        echo "\" ";
        echo twig_safe_filter((isset($context['DisableUser']) ? $context['DisableUser'] : null));
        echo ">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t";
        // line 36
        echo twig_safe_filter((isset($context['PassReq']) ? $context['PassReq'] : null));
        echo "&nbsp;";
        echo getLang("UserPass");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"password\" id=\"userpass\" name=\"userpass\" class=\"Field250\" autocomplete=\"off\" value=\"";
        // line 39
        echo twig_safe_filter((isset($context['UserPass']) ? $context['UserPass'] : null));
        echo "\">
\t\t\t\t\t\t<div class=\"PasswordStrengthMeter\" id=\"PasswordStrengthMeter\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t";
        // line 45
        echo twig_safe_filter((isset($context['PassReq']) ? $context['PassReq'] : null));
        echo "&nbsp;";
        echo getLang("UserPass1");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"password\" id=\"userpass1\" name=\"userpass1\" class=\"Field250\" autocomplete=\"off\" value=\"";
        // line 48
        echo twig_safe_filter((isset($context['UserPass']) ? $context['UserPass'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 53
        echo getLang("UserEmail");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"useremail\" name=\"useremail\" class=\"Field250\" value=\"";
        // line 56
        echo twig_safe_filter((isset($context['UserEmail']) ? $context['UserEmail'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 61
        echo getLang("UserFirstName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"userfirstname\" name=\"userfirstname\" class=\"Field250\" value=\"";
        // line 64
        echo twig_safe_filter((isset($context['UserFirstName']) ? $context['UserFirstName'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 69
        echo getLang("UserLastName");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"userlastname\" name=\"userlastname\" class=\"Field250\" value=\"";
        // line 72
        echo twig_safe_filter((isset($context['UserLastName']) ? $context['UserLastName'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 77
        echo getLang("UserStatus");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"userstatus\" name=\"userstatus\" class=\"Field250\" ";
        // line 80
        echo twig_safe_filter((isset($context['DisableStatus']) ? $context['DisableStatus'] : null));
        echo ">
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 81
        echo twig_safe_filter((isset($context['Active1']) ? $context['Active1'] : null));
        echo ">";
        echo getLang("UserActive");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 82
        echo twig_safe_filter((isset($context['Active0']) ? $context['Active0'] : null));
        echo ">";
        echo getLang("UserInactive");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 84
        echo getLang("UserStatus");
        echo "', '";
        echo getLang("UserStatusHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 88
        echo twig_safe_filter((isset($context['HideVendorOptions']) ? $context['HideVendorOptions'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 90
        echo getLang("Vendor");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div style=\"";
        // line 93
        echo twig_safe_filter((isset($context['HideVendorSelect']) ? $context['HideVendorSelect'] : null));
        echo "\">
\t\t\t\t\t\t\t<select id=\"uservendorid\" name=\"uservendorid\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 95
        echo getLang("UserNoVendor");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 96
        echo twig_safe_filter((isset($context['VendorList']) ? $context['VendorList'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('uservendorhelp');\" onmouseover=\"ShowHelp('uservendorhelp', '";
        // line 98
        echo getLang("Vendor");
        echo "', '";
        echo getLang("VendorHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"uservendorhelp\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"";
        // line 101
        echo twig_safe_filter((isset($context['HideVendorLabel']) ? $context['HideVendorLabel'] : null));
        echo "\">
\t\t\t\t\t\t\t";
        // line 102
        echo twig_safe_filter((isset($context['Vendor']) ? $context['Vendor'] : null));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Sep\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 115
        echo getLang("Permissions");
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t<p class=\"HelpInfo\">
\t\t\t\t\t\t\t";
        // line 122
        echo getLang("PermissionsHelp1");
        echo " <a href=\"javascript:void(0)\" onclick=\"LaunchHelp(686)\">";
        echo getLang("PermissionsHelp2");
        echo "</a>.
\t\t\t\t\t\t</p>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 130
        echo getLang("UserRole");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"userrole\" class=\"Field250\" onchange=\"UpdateRole(this.options[this.selectedIndex].value)\" ";
        // line 133
        echo twig_safe_filter((isset($context['DisablePermissions']) ? $context['DisablePermissions'] : null));
        echo ">
\t\t\t\t\t\t\t";
        // line 134
        echo twig_safe_filter((isset($context['UserRoleOptions']) ? $context['UserRoleOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('userrolehelp');\" onmouseover=\"ShowHelp('userrolehelp', '";
        // line 136
        echo getLang("UserRole");
        echo "', '";
        echo getLang("UserRoleHelp");
        echo "')\" src=\"images/help.gif\" alt=\"\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"userrolehelp\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 140
        echo twig_safe_filter((isset($context['PermissionSelects']) ? $context['PermissionSelects'] : null));
        echo "
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 143
        echo getLang("EnableXMLAPI");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"userapi\" id=\"userapi\" value=\"ON\" ";
        // line 146
        echo twig_safe_filter((isset($context['IsXMLAPI']) ? $context['IsXMLAPI'] : null));
        echo " /> <label for=\"userapi\">";
        echo getLang("YesEnableXMLAPI");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('xmlapi');\" onmouseover=\"ShowHelp('xmlapi', '";
        // line 147
        echo getLang("EnableXMLAPI");
        echo "', '";
        echo getLang("EnableXMLAPIHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"xmlapi\"></div><br />
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\" onclick=\"LaunchHelp(683)\" style=\"color:gray\">";
        // line 149
        echo getLang("WhatIsXMLAPI");
        echo "</a><br/><br />
\t\t\t\t\t\t<table cellspacing=\"0\" cellpadding=\"2\" border=\"0\" class=\"panel\" style=\"display: block;\" id=\"sectionXMLToken\" style=\"display:none\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"90\">
\t\t\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/nodejoin.gif\"/>&nbsp; ";
        // line 153
        echo getLang("XMLPath");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" readonly=\"\" class=\"Field250\" value=\"";
        // line 156
        echo twig_safe_filter((isset($context['XMLPath']) ? $context['XMLPath'] : null));
        echo "\" id=\"xmlpath\" name=\"xmlpath\"/><img onmouseout=\"HideHelp('xmlpathhelp');\" onmouseover=\"ShowHelp('xmlpathhelp', '";
        echo getLang("XMLPath");
        echo "', '";
        echo getLang("XMLPathHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"xmlpathhelp\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"90\">
\t\t\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>&nbsp; ";
        // line 162
        echo getLang("XMLToken");
        echo ":
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" onfocus=\"select(this);\" readonly=\"\" class=\"Field250\" value=\"";
        // line 165
        echo twig_safe_filter((isset($context['XMLToken']) ? $context['XMLToken'] : null));
        echo "\" id=\"xmltoken\" name=\"xmltoken\"/> <img onmouseout=\"HideHelp('xmltokenhelp');\" onmouseover=\"ShowHelp('xmltokenhelp', '";
        echo getLang("XMLToken");
        echo "', '";
        echo getLang("XMLTokenHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"xmltokenhelp\"></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a style=\"color: gray;\" href=\"javascript:void(0)\" id=\"regenlink\">";
        // line 174
        echo getLang("RegenerateToken");
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\">
\t\t\t\t\t\t<input type=\"submit\" name=\"SaveButton2\" value=\"";
        // line 183
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp;
\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton2\" value=\"";
        // line 184
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr><td class=\"Sep\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>

\t</table>

\t</div>
\t</form>

\t<script type=\"text/javascript\" src=\"../javascript/passwordmeter.js\"></script>
\t<script type=\"text/javascript\">
\t\tlang.PasswordStrengthMeter_MsgDefault = \"";
        // line 201
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgDefault"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgTooShort = \"";
        // line 202
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgTooShort"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgNoAlphaNum = \"";
        // line 203
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgNoAlphaNum"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgWeak = \"";
        // line 204
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgWeak"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgStrong = \"";
        // line 205
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgStrong"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_MsgVeryStrong = \"";
        // line 206
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_MsgVeryStrong"), "'");
        echo "\";
\t\tlang.PasswordStrengthMeter_Tip = \"";
        // line 207
        echo Interspire_Template_Extension::jsFilter(getLang("PasswordStrengthMeter_Tip"), "'");
        echo "\";
\t\tvar meter = new PasswordStrengthMeter('userpass', 'PasswordStrengthMeter', 'PasswordStrengthTip', ";
        // line 208
        echo twig_escape_filter($this->env, (isset($context['PCIPasswordMinLen']) ? $context['PCIPasswordMinLen'] : null), "1");
        echo ");

\t\tfunction UpdateRole(role)
\t\t{
\t\t\t// Start our selections
\t\t\tif(role == 'admin') {
\t\t\t\tSetupPermissions('sales', true);
\t\t\t\tSetupPermissions('manager', true);
\t\t\t\tSetupPermissions('admin', true);
\t\t\t}
\t\t\telse if(role == 'manager') {
\t\t\t\tSetupPermissions('sales', true);
\t\t\t\tSetupPermissions('manager', true);
\t\t\t\tSetupPermissions('admin', false);
\t\t\t}
\t\t\telse if(role == 'sales') {
\t\t\t\tSetupPermissions('sales', true);
\t\t\t\tSetupPermissions('manager', false);
\t\t\t\tSetupPermissions('admin', false);
\t\t\t}
\t\t\telse {
\t\t\t\t// Revert all permissions
\t\t\t\tSetupPermissions('sales', false);
\t\t\t\tSetupPermissions('manager', false);
\t\t\t\tSetupPermissions('admin', false);

\t\t\t\t// Now reselect based on the role
\t\t\t\t\$('.permission_select .'+role+'_role input').attr('checked', false);
\t\t\t\t\$('.permission_select .'+role+'_role input').trigger('click');
\t\t\t}
\t\t}

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 242
        echo getLang("ConfirmCancelUser");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewUsers\";
\t\t}

\t\tfunction CheckUserForm()
\t\t{
\t\t\tvar un = document.getElementById(\"username\");
\t\t\tvar up1 = document.getElementById(\"userpass\");
\t\t\tvar up2 = document.getElementById(\"userpass1\");
\t\t\tvar ue = document.getElementById(\"useremail\");

\t\t\tif(un.value == \"\") {
\t\t\t\talert(\"";
        // line 254
        echo getLang("UserEnterUsername");
        echo "\");
\t\t\t\tun.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(\"";
        // line 259
        echo twig_safe_filter((isset($context['Adding']) ? $context['Adding'] : null));
        echo "\" == \"1\") {
\t\t\t\t// client side password validation (create/copy user)
\t\t\t\tvar res = meter.validate(up1.value);
\t\t\t\tif (res.valid == false) {
\t\t\t\t\talert(res.msg);
\t\t\t\t\tup1.focus();
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(up1.value == \"\") {
\t\t\t\t\talert(\"";
        // line 269
        echo getLang("UserEnterPassword");
        echo "\");
\t\t\t\t\tup1.focus();
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(up1.value != up2.value) {
\t\t\t\t\talert(\"";
        // line 275
        echo getLang("UserPasswordsDontMatch");
        echo "\");
\t\t\t\t\tup2.focus();
\t\t\t\t\tup2.select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tif (up1.value != '' || up2.value != '') {
\t\t\t\t\t// client side password validation (edit user)
\t\t\t\t\tvar res = meter.validate(up1.value);
\t\t\t\t\tif (res.valid == false) {
\t\t\t\t\t\talert(res.msg);
\t\t\t\t\t\tup1.focus();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}

\t\t\t\t\tif (up1.value != up2.value) {
\t\t\t\t\t\talert(\"";
        // line 293
        echo getLang("UserPasswordsDontMatch");
        echo "\");
\t\t\t\t\t\tup2.focus();
\t\t\t\t\t\tup2.select();
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif(ue.value.indexOf(\".\") == -1 || ue.value.indexOf(\"@\") == -1) {
\t\t\t\talert(\"";
        // line 302
        echo getLang("UserInvalidEmail");
        echo "\");
\t\t\t\tue.focus();
\t\t\t\tue.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(!HasSelectedPermissions('sales') && !HasSelectedPermissions('manager') && !HasSelectedPermissions('admin')) {
\t\t\t\t\$('#permissions_sales').focus();
\t\t\t\talert(\"";
        // line 310
        echo getLang("UserNoPermissions");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t}

\t\tfunction HasSelectedPermissions(type) {
\t\t\tif(g('permissions_'+type+'_old')) {
\t\t\t\tvar f = \$('#permissions_'+type+'_old').val();
\t\t\t}
\t\t\telse {
\t\t\t\tvar f = \$('#permissions_'+type).val();
\t\t\t}
\t\t\treturn f;
\t\t}

\t\tfunction SetupPermissions(type, status)
\t\t{
\t\t\tif(\$('#permissions_'+type).length != 1) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif(\$('#permissions_'+type+'_old').length == 1) {
\t\t\t\tif(\$('#permissions_'+type+'_old').attr('disabled') == true) {
\t\t\t\t\treturn;
\t\t\t\t}

 \t\t\t\tif (status) {
\t\t\t\t\t\$('#permissions_'+type+' li').not(\".SelectedRow\").trigger('click');
\t\t\t\t} else {
\t\t\t\t\t\$('#permissions_'+type+' .SelectedRow').trigger('click');
\t\t\t\t}
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#permissions_'+type+' option').attr('selected', status);
\t\t\t}
\t\t}

\t\tfunction ToggleAPI(State) {
\t\t\tif(State) {
\t\t\t\t\$('#sectionXMLToken').show();
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#sectionXMLToken').hide();
\t\t\t}
\t\t}

\t\tfunction RegenerateToken() {
\t\t\t\$.get(\"";
        // line 360
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/remote.php?w=generateAPIKey\", null, function(data) { \$('#xmltoken').val(data); } );
\t\t}

\t\t\$(document).ready(function() {
\t\t\tif('";
        // line 364
        echo twig_safe_filter((isset($context['IsXMLAPI']) ? $context['IsXMLAPI'] : null));
        echo "' == 'checked=\"checked\"') {
\t\t\t\tToggleAPI(true);
\t\t\t}
\t\t\telse {
\t\t\t\tToggleAPI(false);
\t\t\t}

\t\t\t// init the password meter
\t\t\tmeter.init();
\t\t});

\t\t\$('#userapi').click(function() {
\t\t\tif(\$('#userapi').attr('checked')) {
\t\t\t\tToggleAPI(true);
\t\t\t\tif(\$('#xmltoken').val() == '') {
\t\t\t\t\tRegenerateToken();
\t\t\t\t}
\t\t\t}
\t\t\telse {
\t\t\t\tToggleAPI(false);
\t\t\t}
\t\t});

\t\t\$('#regenlink').click(function() {
\t\t\tRegenerateToken();
\t\t});

\t</script>
";
    }

}

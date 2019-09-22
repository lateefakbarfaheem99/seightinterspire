<?php

/* ysm.form.tpl */
class __TwigTemplate_c22df0284584b38c090ba3e2e745830b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=runAddon&addon=addon_YSM&func=ExportCSV\" onSubmit=\"return ValidateForm(CheckForm);\" name=\"frmYSM\" method=\"post\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t  <tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("YSMGenerator");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 10
        echo getLang("YSMFormIntro");
        echo "</p>
\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t  </tr>

\t\t  <tr>
\t\t\t    <td>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 18
        echo getLang("Export");
        echo "\" class=\"FormButton\">
\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 19
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"><br /><img src=\"images/blank.gif\" width=\"1\" height=\"10\" /></div>
\t\t\t\t</td>
\t\t\t  </tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t  <table class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 26
        echo getLang("YSMAdFormatOptions");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 30
        echo getLang("YSMCreateAdsFor");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table border=\"0\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t<select size=\"5\" id=\"category\" name=\"category[]\" class=\"Field300 ISSelectReplacement\" multiple=\"multiple\" style=\"height: 140px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" SELECTED>";
        // line 37
        echo getLang("YSMAllProducts");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 38
        echo twig_safe_filter((isset($context['CategoryOptions']) ? $context['CategoryOptions'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"position:relative; top:200px; left:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 43
        echo getLang("YSMExampleAd");
        echo ":<br />
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"border:1px solid rgb(180, 208, 220); width:252px; font-size:14px; font-family:arial; padding:4px 3px 3px 5px; line-height:1.2; margin-top:5px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" style=\"font-size:14px; font-family:arial; color:#0000CC\"><span id=\"ad_title\">iPod Touch 8GB</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"font-size:12px; color:black\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"ad_desc\">Buy the iPod Touch 8GB online from SampleStore. Only ";
        // line 47
        echo twig_safe_filter((isset($context['SamplePrice']) ? $context['SamplePrice'] : null));
        echo ".</span><br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"ad_link\" style=\"color:#008000\">";
        // line 48
        echo twig_safe_filter((isset($context['HTTPHost']) ? $context['HTTPHost'] : null));
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p class=\"InfoTip\" style=\"margin-left:0px; width:260px\"><a href=\"#\" onclick=\"LaunchHelp(708)\">";
        // line 60
        echo getLang("YSMPlaceholdersHelp");
        echo "</a></p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 65
        echo getLang("YSMHeadline");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" name=\"title\" class=\"Field300\" value=\"{PRODNAME}\" maxlength=\"40\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 73
        echo getLang("YSMDesc1");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"desc1\" name=\"desc1\" class=\"Field300\" value=\"Buy the {PRODNAME} online from {STORENAME}. Only {PRODPRICE}.\" maxlength=\"70\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 81
        echo getLang("YSMDesc2");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"desc2\" name=\"desc2\" class=\"Field300\" value=\"{PRODSUMMARY} Buy {PRODNAME} online from {STORENAME}. Only {PRODPRICE}.\" maxlength=\"190\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 89
        echo getLang("YSMDisplayURL");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\thttp:// <input type=\"text\" id=\"displayurl\" name=\"displayurl\" class=\"Field300\" style=\"width:265px\" value=\"";
        // line 92
        echo twig_safe_filter((isset($context['HTTPHost']) ? $context['HTTPHost'] : null));
        echo "\" maxlength=\"35\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 97
        echo getLang("YSMDestinationURL");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\thttp:// <input type=\"text\" id=\"destinationurl\" name=\"destinationurl\" class=\"Field300\" style=\"width:265px\" value=\"{PRODLINK}\" maxlength=\"1024\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 105
        echo getLang("YSMMaxCPC");
        echo ":
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\$ <input type=\"text\" id=\"maxcpc\" name=\"maxcpc\" class=\"Field100\" style=\"width:50px\" value=\"0.1\" maxlength=\"4\">USD
\t\t\t\t\t\t\t\t<img onMouseOut=\"HideHelp('dmaxcpc');\" onMouseOver=\"ShowHelp('dmaxcpc', '";
        // line 109
        echo getLang("YSMMaxCPC");
        echo "', '";
        echo getLang("YSMMaxCPCHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"dmaxcpc\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 115
        echo getLang("YSMContentMatch");
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"contentmatch\" name=\"contentmatch\" value=\"ON\"> <label for=\"contentmatch\">";
        // line 118
        echo getLang("YSMYesContentMatch");
        echo "</label>
\t\t\t\t\t\t\t\t<img onMouseOut=\"HideHelp('dcontentmatch');\" onMouseOver=\"ShowHelp('dcontentmatch', '";
        // line 119
        echo getLang("YSMContentMatch");
        echo "', '";
        echo getLang("YSMContentMatchHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"dcontentmatch\"></div>
\t\t\t\t\t\t\t\t<div style=\"padding-left:25px\"><a style=\"color:gray\" href=\"http://searchmarketing.yahoo.com/srch/contentmatch.php\" target=\"_blank\">";
        // line 121
        echo getLang("YSMLearnContentMatch");
        echo "</a></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t<table class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<br /><input type=\"submit\" name=\"SubmitButton2\" value=\"";
        // line 129
        echo getLang("Export");
        echo "\" class=\"FormButton\">
\t\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton2\" value=\"";
        // line 130
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\t// Details for the example ad
\t\tvar PRODNAME = 'iPod Touch 8GB';
\t\tvar PRODBRAND = 'Apple';
\t\tvar PRODSUMMARY = 'The sleek new iPod from Apple.';
\t\tvar PRODPRICE = '";
        // line 147
        echo twig_safe_filter((isset($context['SamplePrice']) ? $context['SamplePrice'] : null));
        echo "';
\t\tvar PRODSKU = 'SKU12345';
\t\tvar PRODCAT = 'MP3 Players';
\t\tvar STORENAME = 'SampleStore';

\t\tfunction CheckForm() {
\t\t\tif(g('category_old').selectedIndex == -1) {
\t\t\t\talert('";
        // line 154
        echo getLang("YSMChooseCategory");
        echo "');
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(g('title').value == '') {
\t\t\t\talert('";
        // line 159
        echo getLang("YSMEnterTitle");
        echo "');
\t\t\t\tg('title').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(g('desc1').value == '') {
\t\t\t\talert('";
        // line 165
        echo getLang("YSMEnterDesc");
        echo "');
\t\t\t\tg('desc1').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(g('desc2').value == '') {
\t\t\t\talert('";
        // line 171
        echo getLang("YSMEnterDesc");
        echo "');
\t\t\t\tg('desc2').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(g('displayurl').value == '') {
\t\t\t\talert('";
        // line 177
        echo getLang("YSMEnterDisplayURL");
        echo "');
\t\t\t\tg('displayurl').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(g('destinationurl').value == '') {
\t\t\t\talert('";
        // line 183
        echo getLang("YSMEnterDestinationURL");
        echo "');
\t\t\t\tg('destinationurl').focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(isNaN(g('maxcpc').value) || g('maxcpc').value == '') {
\t\t\t\talert('";
        // line 189
        echo getLang("YSMEnterMaxCPC");
        echo "');
\t\t\t\tg('maxcpc').focus();
\t\t\t\tg('maxcpc').select();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm('";
        // line 200
        echo getLang("YSMCancelMessage");
        echo "'))
\t\t\t\tdocument.location.href='index.php?ToDo=';
\t\t\telse
\t\t\t\treturn false;
\t\t}

\t\tfunction YSMReplaceTokens(Val) {
\t\t\tchanged = Val.replace('{PRODNAME}', PRODNAME);
\t\t\tchanged = changed.replace('{PRODBRAND}', PRODBRAND);
\t\t\tchanged = changed.replace('{PRODSUMMARY}', PRODSUMMARY);
\t\t\tchanged = changed.replace('{PRODPRICE}', PRODPRICE);
\t\t\tchanged = changed.replace('{PRODSKU}', PRODSKU);
\t\t\tchanged = changed.replace('{PRODCAT}', PRODCAT);
\t\t\tchanged = changed.replace('{STORENAME}', STORENAME);
\t\t\treturn changed;
\t\t}

\t\t\$('input:text').keyup(function(event) {
\t\t\t// Update the example ad when a key is released in any of the fields
\t\t\t\$('#ad_title').html(YSMReplaceTokens(\$('#title').val()));
\t\t\t\$('#ad_desc').html(YSMReplaceTokens(\$('#desc1').val()));
\t\t\t\$('#ad_link').html(YSMReplaceTokens(\$('#displayurl').val()));
\t\t});

\t</script>
";
    }

}

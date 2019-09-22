<?php

/* settings.giftcertificates.manage.tpl */
class __TwigTemplate_325c20037ec913a5d12ca3b2725c68b2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form action=\"index.php?ToDo=saveUpdatedGiftCertificateSettings\" name=\"frmGiftCertificateSettings\" id=\"frmGiftCertificateSettings\" method=\"post\" onsubmit=\"return ValidateForm(CheckGiftCertificateSettingsForm)\">
\t\t<div class=\"BodyContainer\">
\t\t";
        // line 3
        if ((isset($context['ManageGiftCertificateTemplatesNotice']) ? $context['ManageGiftCertificateTemplatesNotice'] : null)) {
            echo "\t\t<div class=\"MessageBox MessageBoxInfo\" style=\"\">";
            // line 4
            echo twig_safe_filter((isset($context['ManageGiftCertificateTemplatesNotice']) ? $context['ManageGiftCertificateTemplatesNotice'] : null));
            echo "</div>
\t\t";
        }
        // line 5
        echo "\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 8
        echo getLang("GiftCertificateSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 12
        echo getLang("GiftCertificateSettingsIntro");
        echo "</p>
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t<p>
\t\t\t\t<input type=\"submit\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 24
        echo getLang("GiftCertificateSettings");
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t";
        // line 29
        echo getLang("EnableGiftCertificates");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"EnableGiftCertificates\" id=\"EnableGiftCertificates\" value=\"1\" ";
        // line 32
        echo twig_safe_filter((isset($context['IsEnableGiftCertificates']) ? $context['IsEnableGiftCertificates'] : null));
        echo " onclick=\"ToggleGiftCertificatesStatus(this.checked)\" /> ";
        echo getLang("YesEnableGiftCertificates");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('gifts1');\" onmouseover=\"ShowHelp('gifts1', '";
        // line 33
        echo getLang("EnableGiftCertificates");
        echo "', '";
        echo getLang("EnableGiftCertificatesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"gifts1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr class=\"HideOnDisabled\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t";
        // line 40
        echo getLang("GiftCertificateAmounts");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 25px;\">
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"GiftCertificateCustomAmounts\" id=\"GiftCertificateCustomAmountsNo\"  onclick=\"\$('#AmountsSelect').show();  \$('#AmountsRange').hide();\" value=\"0\" ";
        // line 43
        echo twig_safe_filter((isset($context['IsGiftCertificateSelectAmounts']) ? $context['IsGiftCertificateSelectAmounts'] : null));
        echo " /> ";
        echo getLang("GiftCertificateSelectAmounts");
        echo "</label><br />
\t\t\t\t\t\t\t<div id=\"AmountsSelect\" style=\"display: ";
        // line 44
        echo twig_safe_filter((isset($context['HideSelectAmounts']) ? $context['HideSelectAmounts'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: top;\" />
\t\t\t\t\t\t\t\t<textarea name=\"GiftCertificateAmounts\" id=\"GiftCertificateAmounts\" class=\"Field250\" rows=\"6\">";
        // line 46
        echo twig_safe_filter((isset($context['GiftCertificateAmountsArea']) ? $context['GiftCertificateAmountsArea'] : null));
        echo "</textarea>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('gifts2');\" onmouseover=\"ShowHelp('gifts2', '";
        // line 47
        echo getLang("GiftCertificateAmounts");
        echo "', '";
        echo getLang("GiftCertificateAmountsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"vertical-align: top;\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"gifts2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<label><input type=\"radio\" onclick=\"\$('#AmountsSelect').hide(); \$('#AmountsRange').show();\" name=\"GiftCertificateCustomAmounts\" id=\"GiftCertificateCustomAmounts\" value=\"1\" ";
        // line 50
        echo twig_safe_filter((isset($context['IsGiftCertificateCustomAmounts']) ? $context['IsGiftCertificateCustomAmounts'] : null));
        echo " />";
        echo getLang("GiftCertificateCustomAmounts");
        echo "</label>
\t\t\t\t\t\t\t<div id=\"AmountsRange\" style=\"display: ";
        // line 51
        echo twig_safe_filter((isset($context['HideCustomAmounts']) ? $context['HideCustomAmounts'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t\t";
        // line 53
        echo getLang("GiftCertificateMinAmount");
        echo " ";
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input type=\"text\" name=\"GiftCertificateMinimum\" id=\"GiftCertificateMinimum\" value=\"";
        echo twig_safe_filter((isset($context['GiftCertificateMinimum']) ? $context['GiftCertificateMinimum'] : null));
        echo "\" class=\"Field40\" /> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t";
        // line 55
        echo getLang("GiftCertificateMaxAmount");
        echo " ";
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo " <input type=\"text\" name=\"GiftCertificateMaximum\" id=\"GiftCertificateMaximum\" value=\"";
        echo twig_safe_filter((isset($context['GiftCertificateMaximum']) ? $context['GiftCertificateMaximum'] : null));
        echo "\" class=\"Field40\" /> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr class=\"HideOnDisabled\">
\t\t\t\t\t\t<td class=\"FieldLabel PanelBottom\">
\t\t\t\t\t\t\t";
        // line 62
        echo getLang("GiftCertificateExpiry");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 25px;\" class=\"PanelBottom\">
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"EnableGiftCertificateExpiry\" id=\"EnableGiftCertificateExpiry\" value=\"1\" onclick=\"if(this.checked == true) { \$('#EnableExpiryOptions').show(); } else { \$('#EnableExpiryOptions').hide(); }\" ";
        // line 65
        echo twig_safe_filter((isset($context['IsGiftCertificateExpiry']) ? $context['IsGiftCertificateExpiry'] : null));
        echo " /> ";
        echo getLang("YesEnableGiftCertificateExpiry");
        echo "</label>

\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('gifts5');\" onmouseover=\"ShowHelp('gifts5', '";
        // line 67
        echo getLang("GiftCertificateExpiry");
        echo "', '";
        echo getLang("GiftCertificateExpiryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"gifts5\"></div>

\t\t\t\t\t\t\t<div id=\"EnableExpiryOptions\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t\t";
        // line 72
        echo getLang("GiftCertificateExpiryOptions");
        echo "\t\t\t\t\t\t\t\t<input type=\"text\" name=\"GiftCertificateExpiry\" id=\"GiftCertificateExpiry\" value=\"";
        // line 73
        echo twig_safe_filter((isset($context['ExpiresAfter']) ? $context['ExpiresAfter'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t\t<select name=\"GiftCertificateExpiryRange\" id=\"GiftCertificateExpiryRange\">
\t\t\t\t\t\t\t\t\t<option value=\"days\">";
        // line 75
        echo getLang("RangeDays");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"weeks\" ";
        // line 76
        echo twig_safe_filter((isset($context['RangWeeksSelected']) ? $context['RangWeeksSelected'] : null));
        echo ">";
        echo getLang("RangeWeeks");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"months\" ";
        // line 77
        echo twig_safe_filter((isset($context['RangeMonthsSelected']) ? $context['RangeMonthsSelected'] : null));
        echo ">";
        echo getLang("RangeMonths");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"years\" ";
        // line 78
        echo twig_safe_filter((isset($context['RangeYearsSelected']) ? $context['RangeYearsSelected'] : null));
        echo ">";
        echo getLang("RangeYears");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input class=\"FormButton\" type=\"submit\" value=\"";
        // line 92
        echo getLang("Save");
        echo "\">
\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 93
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t</div>
\t</form>

\t<script type=\"text/javascript\">
\t\tfunction ConfirmCancel() {
\t\t\tif(confirm('";
        // line 105
        echo getLang("ConfirmCancelSettings");
        echo "')) {
\t\t\t\tdocument.location.href='index.php?ToDo=viewGiftCertificateSettings';
\t\t\t}
\t\t\telse {
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tfunction CheckGiftCertificateSettingsForm() {
\t\t\tif(\$('enablereturns').get().checked == true && \$('#returnreasons').val() == \"\") {
\t\t\t\talert('";
        // line 115
        echo getLang("EnterReturnReason");
        echo "');
\t\t\t\t\$('#returnreasons').focus();
\t\t\t\t\$('#returnreasons').select();
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ToggleGiftCertificateCustomAmounts(status) {
\t\t\tif(status == true) {
\t\t\t\t\$('#EnableCustomAmountOptions').show();
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#EnableCustomAmountOptions').hide();
\t\t\t}
\t\t}

\t\tfunction ToggleGiftCertificatesStatus(status) {
\t\t\tif(status == true) {
\t\t\t\t\$('.HideOnDisabled').show();
\t\t\t}
\t\t\telse {
\t\t\t\t\$('.HideOnDisabled').hide();
\t\t\t}
\t\t}

\t\tfunction UpdateGiftCertificatePreview(id, name) {
\t\t\tif(g('ThemePreview_'+id)) {
\t\t\t\t\$('#ThemePreview img').hide();
\t\t\t\t\$('#ThemePreview #ThemePreview_'+id).show();
\t\t\t\t\$('#ThemePreview div').html('";
        // line 146
        echo getLang("GiftCertificateViewingPreview");
        echo "'.replace('%s', name));
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#ThemePreview img').hide();
\t\t\t\t\$('#ThemePreview .NoPreview').show();
\t\t\t\t\$('#ThemePreview div').html('');
\t\t\t}
\t\t}

\t\t\$(document).ready(function() {
\t\t\tif (\$('#EnableGiftCertificates').attr('checked') == true) {
\t\t\t\t\$('.HideOnDisabled').show();
\t\t\t} else {
\t\t\t\t\$('.HideOnDisabled').hide();
\t\t\t}

\t\t\tif (\$('#EnableGiftCertificateExpiry').attr('checked') == true) {
\t\t\t\t\$('#EnableExpiryOptions').show();
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#EnableExpiryOptions').hide();
\t\t\t}
\t\t});

\t</script>
";
    }

}

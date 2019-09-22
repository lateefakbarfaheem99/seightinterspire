<?php

/* ajax.export.tpl */
class __TwigTemplate_ebf0bf4c4d2fa0204deabb2fdd7eca25 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"ModalTitle\">
\t";
        // line 2
        echo twig_safe_filter((isset($context['ExportName']) ? $context['ExportName'] : null));
        echo "
</div>
<div class=\"ModalContent\">
\t<div id=\"exportIntro\" style=\"display: ";
        // line 5
        echo twig_safe_filter((isset($context['HideExportIntro']) ? $context['HideExportIntro'] : null));
        echo "\">
\t\t<p>
\t\t\t";
        // line 7
        echo twig_safe_filter((isset($context['ExportIntro']) ? $context['ExportIntro'] : null));
        echo "
\t\t</p>

\t\t<table border=\"0\">
\t\t\t<tr>
\t\t\t\t<td width=\"1\"><img src=\"images/";
        // line 12
        echo twig_safe_filter((isset($context['ExportIcon']) ? $context['ExportIcon'] : null));
        echo "\" height=\"16\" width=\"16\" hspace=\"5\" alt=\"\" /></td>
\t\t\t\t<td><a href=\"#\" onclick=\"StartAjaxExport(); return false;\"  style=\"color:#005FA3; font-weight:bold\">";
        // line 13
        echo twig_safe_filter((isset($context['ExportGenerate']) ? $context['ExportGenerate'] : null));
        echo "</a></td>
\t\t\t</tr>
\t\t</table>

\t\t<div style=\"display: ";
        // line 17
        echo twig_safe_filter((isset($context['DisplayAutoExport']) ? $context['DisplayAutoExport'] : null));
        echo "\">
\t\t\t<p><strong>";
        // line 18
        echo getLang("SchedulingAutomaticUpdates");
        echo "</strong></p>
\t\t\t<p>";
        // line 19
        echo getLang("AutomaticExportIntro");
        echo "</p>
\t\t\t<p>";
        // line 20
        echo getLang("AutomaticExportIntro2");
        echo "</p>
\t\t\t<p style=\"padding-left: 25px\">
\t\t\t\t<input type=\"text\" class=\"Field300\" onclick=\"this.select()\" readonly=\"readonly\" value=\"";
        // line 22
        echo twig_safe_filter((isset($context['ExportUrl']) ? $context['ExportUrl'] : null));
        echo "\" />
\t\t\t</p>
\t\t</div>
\t</div>
\t<div id=\"exportStatus\" style=\"display: none;\">
\t\t<p>
\t\t\t";
        // line 28
        echo twig_safe_filter((isset($context['ExportGeneratingIntro']) ? $context['ExportGeneratingIntro'] : null));
        echo "
\t\t</p>
\t\t<div style=\"border: 1px solid #ccc; width: 300px; padding: 0px; margin: 0 auto; position: relative;\">
\t\t\t<div id=\"ProgressBarPercentage\" style=\"margin: 0; padding: 0; background: url(images/progressbar.gif) no-repeat; height: 20px; width: 0%;\">
\t\t\t\t&nbsp;
\t\t\t</div>
\t\t\t<div style=\"position: absolute; top: 0; left: 0; text-align: center; width: 300px; font-weight: bold;\" id=\"ProgressPercent\">&nbsp;</div>
\t\t</div>
\t\t<div id=\"ProgressBarStatus\" style=\"text-align: center; font-size: 11px; font-family: Tahoma;\">";
        // line 36
        echo twig_safe_filter((isset($context['ExportGenerating']) ? $context['ExportGenerating'] : null));
        echo "</div>
\t</div>
\t<div id=\"exportComplete\" style=\"display: none;\">
\t\t<p>
\t\t\t";
        // line 40
        echo twig_safe_filter((isset($context['ExportGeneratedIntro']) ? $context['ExportGeneratedIntro'] : null));
        echo "
\t\t</p>
\t\t<table border=\"0\">
\t\t\t<tr>
\t\t\t\t<td width=\"1\"><img src=\"images/save.gif\" height=\"16\" width=\"16\" hspace=\"5\" alt=\"\" /></td>
\t\t\t\t<td><a href=\"#\" onclick=\"DownloadAjaxExport(); return false;\"  style=\"color:#005FA3; font-weight:bold\">";
        // line 45
        echo twig_safe_filter((isset($context['ExportDownload']) ? $context['ExportDownload'] : null));
        echo "</a></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div id=\"exportNoProducts\" style=\"display: ";
        // line 49
        echo twig_safe_filter((isset($context['HideNoProducts']) ? $context['HideNoProducts'] : null));
        echo ";\">
\t\t<p>
\t\t\t";
        // line 51
        echo twig_safe_filter((isset($context['ExportIntro']) ? $context['ExportIntro'] : null));
        echo "
\t\t</p>
\t\t<table border=\"0\">
\t\t\t<tr>
\t\t\t\t<td width=\"1\" valign=\"top\"><img src=\"images/error.gif\" height=\"16\" width=\"16\" hspace=\"5\" alt=\"\" /></td>
\t\t\t\t<td style=\"font-weight: bold;\">";
        // line 56
        echo getLang("ExportNoData");
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t\t<br />
\t</div>
</div>
<div class=\"ModalButtonRow\">
\t<input type=\"button\" value=\"";
        // line 63
        echo getLang("Close");
        echo "\" onclick=\"\$.iModal.close()\" class=\"SubmitButton\" />
</div>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/idletimer/cookie.js?";
        // line 65
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">
\tfunction StartAjaxExport() {
\t\t\$('#exportStatus').show();
\t\t\$('#exportIntro').hide();
\t\tif(g('ExportFrame')) {
\t\t\t\$('#ExportFrame').remove();
\t\t}
\t\t\$('#exportStatus').append('<iframe src=\"index.php?ToDo=AjaxExport&exportsess=";
        // line 73
        echo twig_safe_filter((isset($context['ExportSessionId']) ? $context['ExportSessionId'] : null));
        echo "&action=Export\" border=\"0\" frameborder=\"0\" height=\"1\" width=\"1\" id=\"ExportFrame\"></iframe>');
\t}

\tfunction AjaxExportError(msg) {
\t//\ttb_remove();
\t\talert(msg);
\t}

\tfunction UpdateAjaxExportProgress(percentage) {
\t\t\$('#ProgressBarPercentage').css('width', parseInt(percentage) + \"%\");
\t\t\$('#ProgressPercent').html(parseInt(percentage) + \"%\");
\t\t\$.cookie('ISC_IdleTimer_LastEvent', new Date);
\t}

\tfunction AjaxExportComplete() {
\t\t\$('#exportStatus').hide();
\t\t\$('#exportComplete').show();
\t}

\tfunction CancelAjaxExport() {
\t\tif(\$('#exportStatus').css('display') != \"none\") {
\t\t\twindow.location = 'index.php?ToDo=AjaxExport&exportsess=";
        // line 94
        echo twig_safe_filter((isset($context['ExportSessionId']) ? $context['ExportSessionId'] : null));
        echo "&action=CancelExport';
\t\t}
\t}

\tfunction DownloadAjaxExport() {
\t\t\$.iModal.close();
\t\twindow.location = 'index.php?ToDo=AjaxExport&exportsess=";
        // line 100
        echo twig_safe_filter((isset($context['ExportSessionId']) ? $context['ExportSessionId'] : null));
        echo "&action=DownloadExport';
\t}
</script>";
    }

}

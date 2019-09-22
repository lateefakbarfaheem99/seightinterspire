<?php

/* layout.logo.form.tpl */
class __TwigTemplate_ad920cc2c845770d448602b09efc6383 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\">

var TextArray = Array(";
        // line 3
        echo twig_safe_filter((isset($context['TextArray']) ? $context['TextArray'] : null));
        echo ");

function UpdateLogoImage(){

\t\$('body').css({'cursor': 'wait'});
\t\$('input').css({'cursor': 'wait'});
\tvar sendData = {'w': 'updatelogo', 'logo': \$('#SelectedLogo').attr('value')};
\tvar i = 0;
\twhile(document.getElementById(\"ExtraText\" + i) != null){
\t\tsendData['ExtraText' + i] = document.getElementById(\"ExtraText\" + i).value;
\t\ti++;
\t}

\tjQuery.ajax({ url: 'remote.php', type: 'POST', dataType: 'xml',
\t\tdata: sendData,
\t\tsuccess: function(xml) {
\t\t\tdisplay_message('";
        // line 19
        echo getLang("LogoOptionsSaved");
        echo " <a href=\"../\" target=\"_blank\">";
        echo getLang("ViewSite");
        echo "</a>', 'success');
\t\t\t\$('#LogoImage').attr('src', \"../";
        // line 20
        echo twig_safe_filter((isset($context['ImageDirectory']) ? $context['ImageDirectory'] : null));
        echo "/\"+\$('logoImage', xml).text()+\"?\"+get_random());
\t\t\t\$('#CurrentLogo').attr('src', \"../";
        // line 21
        echo twig_safe_filter((isset($context['ImageDirectory']) ? $context['ImageDirectory'] : null));
        echo "/\"+\$('logoImage', xml).text()+\"?\"+get_random());
\t\t\t
\t\t\tif(\$('backgroundImage', xml).text() != '' ) {
\t\t\t\t\$('#PreviewLogoImage').css('backgroundImage', 'url(\"' + \$('backgroundImage', xml).text() + '\")');
\t\t\t\t\$('#CurrentLogo').css('backgroundImage', 'url(\"' + \$('backgroundImage', xml).text() + '\")');
\t\t\t} else {
\t\t\t\t\$('#PreviewLogoImage').css('backgroundImage', 'none');
\t\t\t\t\$('#CurrentLogo').css('backgroundImage', 'none');
\t\t\t}

\t\t\t\$('#ImageTextReplacement').hide();
\t\t\t\$('#LogoImage').show();
\t\t\t\$('body').css({'cursor': 'auto'});
\t\t\t\$('input').css({'cursor': 'auto'});

\t\t}
\t});
}

function UpdateLogoOptionNone(){
\t\$('body').css({'cursor': 'wait'});
\t\$('input').css({'cursor': 'wait'});
\tif(\$('#UseAlternateTitle').attr('checked') == true){
\t\tvar UseAlternateTitle = 'true';
\t}else{
\t\tvar UseAlternateTitle = 'false';
\t}

\tvar sendData = {'w': 'updatelogonone', 'AlternateTitle': \$('#AlternateTitle').val(), 'UseAlternateTitle': UseAlternateTitle};

\tjQuery.ajax({ url: 'remote.php', type: 'POST', dataType: 'xml',
\t\tdata: sendData,
\t\tsuccess: function(xml) {
\t\t\tToggleLogoFields('none');
\t\t\t\$('#CurrentLogo').attr('src', \"images/nologo.gif\");
\t\t\tdisplay_message('";
        // line 56
        echo getLang("LogoOptionsSaved");
        echo " <a href=\"../\" target=\"_blank\">";
        echo getLang("ViewSite");
        echo "</a>', 'success');
\t\t\t\$('body').css({'cursor': 'auto'});
\t\t\t\$('input').css({'cursor': 'auto'});
\t\t}
\t});
}
function ToggleLogoFields(option, initial){
\tif (option == 'create' && !\$('#LogoOptioncreate').attr('disabled')) {
\t\t\$('#LogoUpload').hide();
\t\t\$('#LogoText').hide();
\t\tSelectLogo('[template]', \$('#TemplateLogoFile').val(), \$('#TemplateLogoFileNumFields').val()-1);
\t} else if(option == 'upload') {
\t\t\$('#LogoImageOptions').hide();
\t\t\$('#LogoTextOptions').hide();
\t\t\$('#ButtonTable').hide();
\t\t\$('#LogoTextOptions').hide();
\t\t\$('#LogoUpload').show();
\t\t\$('#LogoText').hide();
\t} else {
\t\t\$('#LogoImageOptions').hide();
\t\t\$('#LogoTextOptions').hide();
\t\t\$('#ButtonTable').hide();
\t\t\$('#LogoTextOptions').hide();
\t\t\$('#LogoUpload').hide();
\t\t\$('#LogoText').show();
\t}
}


function SelectLogo(logoName, logoFileName, numTextFields){
\tif(\"";
        // line 86
        echo twig_safe_filter((isset($context['HideLogoOptionsNoFont']) ? $context['HideLogoOptionsNoFont'] : null));
        echo "\" == \"none\") {
\t\treturn;
\t}
\t\$('#ButtonTable').css('display', '');
\t\$('#SelectedLogo').attr('value', logoName);
\t\$('#LogoTextOptionsDiv').show();
\tvar html = '';
\tvar thisText = '';
\tvar refreshImage = false;
\thtml = '<tr><td colspan=\"2\" class=\"Heading2\">Logo Designer</td></tr><tr><td class=\"FieldLabel\">Selected Logo:</td><td style=\"padding: 5px;\"><img id=\"PreviewLogoImage\" src=\"../cache/logos/'+ logoFileName +'\"></td></tr>';

\tfor(i=0;i<=numTextFields;i++) {
\t\tif(typeof(TextArray[i]) == 'undefined'){
\t\t\tthisText = 'Example' + (i+1);
\t\t}
\t\telse {
\t\t\tthisText = TextArray[i];
\t\t\trefreshImage = true;
\t\t}
\t\thtml += '<tr><td class=\"FieldLabel\">Text '+(i+1)+':</td><td align=\"left\" valign=\"top\"><input type=\"text\" name=\"ExtraText'+i+'\" id=\"ExtraText'+i+'\" class=\"Field300\" value=\"'+thisText+'\"></td></tr>';
\t}

\t\$('#LogoTextOptionsDiv').html('<table class=\"Panel\" style=\"margin: 0; display: ";
        // line 108
        echo twig_safe_filter((isset($context['HideLogoOptions']) ? $context['HideLogoOptions'] : null));
        echo "\" id=\"LogoTextOptions\">'+html+'</table>');

\tif(refreshImage){
\t\tRefreshPreviewImage();
\t}
}

function RefreshPreviewImage(){
\t\$('body').css({'cursor': 'wait'});
\t\$('input').css({'cursor': 'wait'});
\tvar sendData = {'w': 'previewlogo', 'logo': \$('#SelectedLogo').attr('value')};
\tvar i = 0;
\twhile(document.getElementById(\"ExtraText\" + i) != null){
\t\tsendData['ExtraText' + i] = document.getElementById(\"ExtraText\" + i).value;
\t\ti++;
\t}

\tjQuery.ajax({ url: 'remote.php', type: 'POST', dataType: 'xml',
\t\tdata: sendData,
\t\tsuccess: function(xml) {
\t\t\t\$('#PreviewLogoImage').attr('src', \"../cache/logos/\"+\$('logoImage', xml).text());
\t\t\t\$('body').css({'cursor': 'auto'});
\t\t\t\$('input').css({'cursor': 'auto'});

\t\t\tif(\$('backgroundImage', xml).text() != '' ) {
\t\t\t\t\$('#CurrentLogo').css('backgroundImage', 'url(\"' + \$('backgroundImage', xml).text() + '\")');
\t\t\t\t\$('#PreviewLogoImage').css('backgroundImage', 'url(\"' + \$('backgroundImage', xml).text() + '\")');
\t\t\t} else {
\t\t\t\t\$('#PreviewLogoImage').css('backgroundImage', 'none');
\t\t\t\t\$('#CurrentLogo').css('backgroundImage', 'none');
\t\t\t}
\t\t}
\t});
}

function CheckAlternateTitle(showBox){

\tif(showBox){
\t\t\$('#AlternateTitle').attr('disabled', !showBox);
\t\t\$('#AlternateTextArea').show();
\t}else{
\t\t\$('#AlternateTitle').attr('disabled', !showBox);
\t\t\$('#AlternateTextArea').hide();
\t}
}

function ToggleLogoTypeFields(value) {
\t\$('#GenericLogoList').hide();
\t\$('#SelectALogo').hide();
}

\$(document).ready(function() {
\tToggleLogoTypeFields('";
        // line 160
        echo twig_safe_filter((isset($context['LogoTypeSelected']) ? $context['LogoTypeSelected'] : null));
        echo "');
\tToggleLogoFields('";
        // line 161
        echo twig_safe_filter((isset($context['LogoImageSelected']) ? $context['LogoImageSelected'] : null));
        echo "', true);
\t\$('#LogoOption";
        // line 162
        echo twig_safe_filter((isset($context['LogoImageSelected']) ? $context['LogoImageSelected'] : null));
        echo "').attr('checked', 'checked');
\tCheckAlternateTitle(\$('#UseAlternateTitle').attr('checked'));
});

</script>
<input type=\"hidden\" id=\"TemplateLogoFile\" value=\"";
        // line 167
        echo twig_safe_filter((isset($context['TemplateLogoFile']) ? $context['TemplateLogoFile'] : null));
        echo "\" />
<input type=\"hidden\" id=\"TemplateLogoFileNumFields\" value=\"";
        // line 168
        echo twig_safe_filter((isset($context['TemplateLogoFileNumFields']) ? $context['TemplateLogoFileNumFields'] : null));
        echo "\" />

\t\t\t\t\t<p class=\"intro\">";
        // line 170
        echo getLang("LogoIntro");
        echo "</p>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan='2'>";
        // line 173
        echo getLang("LogoSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"left\" class=\"FieldLabel PanelBottom\" valign=\"top\">";
        // line 176
        echo getLang("IWantToLogo");
        echo ":</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<input type=\"radio\" name=\"LogoOption\" value=\"none\" checked=\"\" id=\"LogoOptionnone\" onclick=\"ToggleLogoFields(this.value);\" /> <label for=\"LogoOptionnone\">";
        // line 178
        echo getLang("LogoOptionText");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"radio\" name=\"LogoOption\" value=\"create\" checked=\"\" id=\"LogoOptioncreate\" onclick=\"ToggleLogoFields(this.value);\" ";
        // line 179
        echo twig_safe_filter((isset($context['DisableTemplateOption']) ? $context['DisableTemplateOption'] : null));
        echo " /> <label for=\"LogoOptioncreate\">";
        echo getLang("LogoOptionGenerate");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"radio\" name=\"LogoOption\" value=\"upload\" checked=\"\" id=\"LogoOptionupload\" onclick=\"ToggleLogoFields(this.value);\" /> <label for=\"LogoOptionupload\">";
        // line 180
        echo getLang("LogoOptionUpload");
        echo "</label><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t <br/>
\t\t\t <table class=\"Panel\" style=\"display: ";
        // line 185
        echo twig_safe_filter((isset($context['HideLogoOptions']) ? $context['HideLogoOptions'] : null));
        echo "\" id=\"CurrentSiteLogo\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan='2'>";
        // line 187
        echo getLang("CurrentSiteLogo");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr id=\"CurrentLogoRow\" style=\"display: ";
        // line 189
        echo twig_safe_filter((isset($context['HideCurrentLogo']) ? $context['HideCurrentLogo'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel PanelBottom\" valign=\"top\">
\t\t\t\t\t\t";
        // line 191
        echo getLang("CurrentSiteLogo");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"left\" valign=\"top\" class=\"PanelBottom\" style=\"padding-top: 10px;\">
\t\t\t\t\t\t<img src=\"";
        // line 194
        echo twig_safe_filter((isset($context['CurrentLogo']) ? $context['CurrentLogo'] : null));
        echo "\" id=\"CurrentLogo\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table><br/>

<input type=\"hidden\" name=\"SelectedLogo\" id=\"SelectedLogo\" value=\"none\" />

<div id=\"LogoTextOptionsDiv\" style=\"display: ";
        // line 201
        echo twig_safe_filter((isset($context['HideLogoOptionsNoFont']) ? $context['HideLogoOptionsNoFont'] : null));
        echo "\">
\t<table class=\"Panel\" style=\"margin:0px; display: ";
        // line 202
        echo twig_safe_filter((isset($context['HideLogoOptions']) ? $context['HideLogoOptions'] : null));
        echo "\" id=\"LogoTextOptions\">
\t</table>
</div>

<table class=\"Panel\" style=\"margin:0px; display: none\" id=\"ButtonTable\">
\t\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">&nbsp;</td>
\t\t\t\t\t<td align=\"left\" valign=\"top\" class=\"PanelBottom\">
\t\t\t\t\t<input type=\"button\" value=\"Refresh Preview Image\" class=\"SmallButton\" onclick=\"RefreshPreviewImage();\" />
\t\t\t\t\t<input type=\"button\" value=\"Save Logo Image\" class=\"SmallButton\" onclick=\"UpdateLogoImage();\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>


\t\t\t<form method=\"post\" action=\"index.php?ToDo=TemplateUploadLogo\" enctype=\"multipart/form-data\">
\t\t\t<table class=\"Panel\" style=\"margin:0px; display: ";
        // line 218
        echo twig_safe_filter((isset($context['HideLogoUpload']) ? $context['HideLogoUpload'] : null));
        echo "\" id=\"LogoUpload\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan='2'>";
        // line 220
        echo getLang("LogoUpload");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel PanelBottom\">
\t\t\t\t\t\t";
        // line 224
        echo getLang("SelectLogoUpload");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<input type=\"file\" name=\"LogoFile\" id=\"LogoFile\" class=\"Field\" value=\"\" /> <input type=\"submit\" value=\"Upload Logo Image\" class=\"SmallButton\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</form>
\t\t\t<table class=\"Panel\" style=\"margin:0px; display: ";
        // line 232
        echo twig_safe_filter((isset($context['HideLogoUpload']) ? $context['HideLogoUpload'] : null));
        echo "\" id=\"LogoText\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan='2'>";
        // line 234
        echo getLang("LogoText");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t\t";
        // line 238
        echo getLang("IWantToLogo");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>

\t\t\t\t\t\t<input type=\"radio\" name=\"UseAlternateTitle\" value=\"no\" id=\"UseWebsiteTitle\" onclick=\"CheckAlternateTitle(false);\" ";
        // line 242
        echo twig_safe_filter((isset($context['AlternateNotChecked']) ? $context['AlternateNotChecked'] : null));
        echo "> <label for=\"UseWebsiteTitle\">";
        echo getLang("LogoUseTitle");
        echo "</label><br/>
\t\t\t\t\t\t<input type=\"radio\" name=\"UseAlternateTitle\" value=\"yes\" id=\"UseAlternateTitle\" onclick=\"CheckAlternateTitle(true);\" ";
        // line 243
        echo twig_safe_filter((isset($context['AlternateChecked']) ? $context['AlternateChecked'] : null));
        echo "> <label for=\"UseAlternateTitle\">";
        echo getLang("LogoUseAlternate");
        echo "</label><br/>
\t\t\t\t\t\t<div id=\"AlternateTextArea\" style=\"display: none\"><img src=\"images/nodejoin.gif\" width=\"20\" height=\"20\" align=\"absmiddle\"> <input type=\"text\" name=\"AlternateTitle\" id=\"AlternateTitle\" class=\"Field250\" value=\"";
        // line 244
        echo twig_safe_filter((isset($context['AlternateTitle']) ? $context['AlternateTitle'] : null));
        echo "\"></div>

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel PanelBottom\">
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\" style=\"padding-top: 10px;\">
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 252
        echo getLang("Save");
        echo "\" id=\"LogoUpdateButton\" style=\"width: 80px;\" class=\"SmallButton\" onclick=\"UpdateLogoOptionNone();\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t<br />


";
    }

}

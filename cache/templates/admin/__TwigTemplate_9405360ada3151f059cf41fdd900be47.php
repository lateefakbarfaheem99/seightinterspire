<?php

/* layout.manage.tpl */
class __TwigTemplate_9405360ada3151f059cf41fdd900be47 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
<style type=\"text/css\" media=\"screen\">
\t.mobileTemplateDevices div.value,
\t.tabletTemplateDevices div.value {
\t\tpadding-left: 25px;
\t\tdisplay: block !important;
\t\tbackground: url('images/nodejoin.gif') no-repeat;
\t}
</style>

<script type=\"text/javascript\">

// load language variables for the header image javascript
lang['HeaderImageConfirmDelete']   = \"";
        // line 16
        echo getLang("HeaderImageConfirmDelete");
        echo "\";
lang['LayoutHeaderNoCurrentImage'] = \"";
        // line 17
        echo getLang("LayoutHeaderNoCurrentImage");
        echo "\";
lang['LayoutHeaderImageNoImage']   = \"";
        // line 18
        echo getLang("LayoutHeaderImageNoImage");
        echo "\";

var disableLoadingIndicator;
var CurrentVersion = '";
        // line 21
        echo twig_safe_filter((isset($context['TemplateVersion']) ? $context['TemplateVersion'] : null));
        echo "';

function ShowTab(T){
\ti = 0;
\tif('";
        // line 25
        echo twig_safe_filter((isset($context['HideMessageBox']) ? $context['HideMessageBox'] : null));
        echo "' == 'none'){
\t\t\$('#TemplateMsgBox').hide('normal');
\t}

\twhile(document.getElementById(\"tab\" + i) != null){
\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\ti++;
\t}

\tdocument.getElementById(\"div\" + T).style.display = \"\";
\tdocument.getElementById(\"tab\" + T).className = \"active\";
\tdocument.getElementById(\"currentTab\").value = T;
\tSetCookie('templatesCurrentTab', T, 365);

\t\$(document).trigger('tabSelect' + T);
}

function launchDesignMode()
{
\twindow.open('";
        // line 45
        echo twig_safe_filter((isset($context['ShopPathNormal']) ? $context['ShopPathNormal'] : null));
        echo "/?designModeToken=";
        echo twig_safe_filter((isset($context['DesignModeToken']) ? $context['DesignModeToken'] : null));
        echo "');
}

function get_random()
{
\tvar ranNum= Math.floor(Math.random()*105205);
\treturn ranNum;
}

function ChangeTemplateColor(link, preview, previewFull) {
\t\$(link).parents('div.TemplateBox').find('.previewImage').attr('src', preview);
\t\$(link).parents('div.TemplateBox').find('.previewImage').parents('a').attr('href', previewFull);
}

function DownloadTemplate(id, width, height) {
\ttb_show('', 'index.php?ToDo=templateDownload&template='+id+'&height='+height+'&width='+width);
}


function LaunchEditor(){
\tvar win = window.open(\"designmode.php?ToDo=editFile&File=default.html&f=a\");
\twin.focus();
}

function CheckTemplateVersion(){
\t// do the ajax request
\tdocument.getElementById('TemplateVersionCheck').innerHTML = '<em>Checking Version...</em>';
\tjQuery.ajax({ url: 'remote.php', type: 'POST', dataType: 'xml',
\t\tdata: {'w': 'checktemplateversion'},
\t\tsuccess: function(xml) {
\t\t\tCheckTemplateVersionReturn(xml);
\t\t}
\t});
}

function CheckTemplateVersionReturn(xml){
\tvar  CurrentVersion = '";
        // line 81
        echo twig_safe_filter((isset($context['TemplateVersion']) ? $context['TemplateVersion'] : null));
        echo "';

\tif(\$('status', xml).text() == 1){
\t\tif(\$('version', xml).text() > CurrentVersion){
\t\t\tdocument.getElementById('TemplateVersionCheck').innerHTML = '<img src=\"images/success.gif\" align=\"absmiddle\"> ";
        // line 85
        echo getLang("NewVersionAvailable");
        echo "'.replace('%%VERSION%%', \$('version', xml).text());

\t\t\tif (\$.browser.msie){
\t\t\t\t\$('#TemplateVersionCheck').css(\"background-color\",\"#99FF66\");
\t\t\t} else {
\t\t\t\t\$('#TemplateVersionCheck').show(0);
\t\t\t\t\$('#TemplateVersionCheck').css(\"background-color\",\"#99FF66\");
\t\t\t\t\$('#TemplateVersionCheck').animate({ backgroundColor: '#F9F9F9' }, { queue: true, duration: 1000 });
\t\t\t}

\t\t\tdocument.getElementById('TemplateVersionCheckButton').style.display = \"none\";
\t\t\tdocument.getElementById('DownloadNewVersionButton').style.display = \"\";
\t\t}else{
\t\t\tdocument.getElementById('TemplateVersionCheck').innerHTML = '";
        // line 98
        echo getLang("CurrentTemplateLatest");
        echo "';
\t\t}
\t}else {
\t\tdisplay_error('An Error has Occurred: ' + \$('message', xml).text());
\t}
}

function DownloadNewVersion(){
\tif(confirm('Important Note: By downloading this new template you will completely override your current template files which will *not* be recoverable. If you have made any modifcations to your current template then you should backup your current template before continuing.\\n\\nTo download this template, click \\'OK\\'. To keep the current version, click the \\'Cancel\\' button.')){
\t\tif(\$.browser.msie){
\t\t\ttb_show('', \"index.php?ToDo=templatedownload&template=";
        // line 108
        echo twig_safe_filter((isset($context['CurrentTemplateName']) ? $context['CurrentTemplateName'] : null));
        echo "&color=";
        echo twig_safe_filter((isset($context['CurrentTemplateColor']) ? $context['CurrentTemplateColor'] : null));
        echo "&height=80&width=280&PreviewImage=";
        echo twig_safe_filter((isset($context['CurrentTemplateImage']) ? $context['CurrentTemplateImage'] : null));
        echo "\");
\t\t}else{
\t\t\ttb_show('', \"index.php?ToDo=templatedownload&template=";
        // line 110
        echo twig_safe_filter((isset($context['CurrentTemplateName']) ? $context['CurrentTemplateName'] : null));
        echo "&color=";
        echo twig_safe_filter((isset($context['CurrentTemplateColor']) ? $context['CurrentTemplateColor'] : null));
        echo "&height=58&width=240&PreviewImage=";
        echo twig_safe_filter((isset($context['CurrentTemplateImage']) ? $context['CurrentTemplateImage'] : null));
        echo "\");
\t\t}
\t\tdocument.getElementById('TemplateVersionCheckButton').style.display = \"\";
\t\tdocument.getElementById('DownloadNewVersionButton').style.display = \"none\";
\t}
}

function display_message(text,type){
\tif(type=='error'){
\t\tdisplay_error('TemplateMsgBox', text);
\t} else {
\t\tdisplay_success('TemplateMsgBox', text);
\t}
}


lang.TemplateDownloadColorsConfirm = \"";
        // line 126
        echo getLang("TemplateDownloadColorsConfirm");
        echo "\";
\$(window).resize(function() {
\t// Remove the return statement to have the template list automatically
\t// centered in the middle of the page. Apparently we don't want to do this at the moment.
\treturn;
\ttemplateBoxWidth = \$('.TemplateList .TemplateBox').width() + 20;
\t\$('.TemplateList').css({
\t\twidth: '100%'
\t});
\twidth = \$('.TemplateListContainer').width();
\tnumBoxes = Math.floor(width / templateBoxWidth);
\tvisibleBoxes = \$('.TemplateBox:visible').length;
\tif(visibleBoxes < numBoxes) {
\t\tnumBoxes = visibleBoxes;
\t}
\tleft = (width - (numBoxes * templateBoxWidth)) / 2;
\t\$('.TemplateList').css({
\t\twidth: (templateBoxWidth * numBoxes) + 'px'
\t});
});

\$(document).ready(function() {
\t\$(window).trigger('resize');
\t\$('a.TplPreviewImage').fancybox({
\t\t'zoomSpeedIn': 200,
\t\t'zoomSpeedOut': 200,
\t\t'overlayShow': false,
\t\t'notitle': true
\t});

\t\$('.TemplateBox:not(.TemplateBoxOn)').hover(function() {
\t\t\$(this).addClass('TemplateBoxOver');
\t}, function() {
\t\t\$(this).removeClass('TemplateBoxOver');
\t});

\t\$('.TemplateBox a.ActivateLink').click(function() {
\t\ttemplateBox = \$(this).parents('.TemplateBox');
\t\ttemplateId = templateBox.attr('class').match('TemplateId_([^ \$]+)')[1];
\t\ttemplateName = \$('span.TemplateName', templateBox).html();
\t\ttemplateColor = \$('span.TemplateColor', templateBox).html();
\t\tif(templateBox.hasClass('Installable')) {
\t\t\tif(\$('.TemplateList .TemplateId_'+templateId).length > 1) {
\t\t\t\tcolorSchemes = '';
\t\t\t\t\$('.TemplateList .TemplateId_'+templateId).each(function() {
\t\t\t\t\ttemplateColor = \$('span.TemplateColor', this).html();
\t\t\t\t\tcolorSchemes += '- '+templateColor+\"\\n\";
\t\t\t\t});
\t\t\t\tmessage = lang.TemplateDownloadColorsConfirm;
\t\t\t\tmessage = message.replace(':templateName', templateName);
\t\t\t\tmessage = message.replace(':templateColor', templateColor);
\t\t\t\tmessage = message.replace(':colorList', colorSchemes);
\t\t\t\tif(!confirm(message)) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\ttb_show('', 'index.php?ToDo=templateDownload&template='+templateId+'&height=58&width=300&color='+templateColor);
\t\t}
\t\telse {
\t\t\twindow.location = 'index.php?ToDo=changeTemplate&template='+templateId+'&color='+templateColor;
\t\t}
\t\treturn false;
\t});

\t\$('.ShowTemplateTypes').change(function() {
\t\t\$('.NoTemplateMessage').hide();
\t\tswitch(\$(this).val()) {
\t\t\tcase 'installed':
\t\t\t\t\$('.TemplateBox').show();
\t\t\t\t\$('.TemplateBox.Installable').hide();
\t\t\t\tbreak;
\t\t\tcase 'downloadable':
\t\t\t\t\$('.TemplateBox').hide();
\t\t\t\t\$('.TemplateBox.Installable').show();
\t\t\t\tbreak;
\t\t\tdefault:
\t\t\t\t\$('.TemplateBox').show();
\t\t}
\t\t\$(window).trigger('resize');
\t\tif(\$('.TemplateBox:visible').length == 0) {
\t\t\talert('";
        // line 206
        echo Interspire_Template_Extension::jsFilter(getLang("NoTemplatesAvailableFilter"), "'");
        echo "');
\t\t\t\$('.ShowTemplateTypes').val('all').trigger('change');
\t\t}
\t});

\t// Scroll to the active template
\toffsetTop = \$('.TemplateBoxOn').offset().top;
\tlistTop = \$('.TemplateList').offset().top;
\tscrollTop = offsetTop - listTop - 20;
\tif(scrollTop > 0) {
\t\t\$('.TemplateListContainer').scrollTop(scrollTop);
\t}
});

</script>

<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/ajax.file.upload.js?";
        // line 222
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/fancybox/fancybox.js?";
        // line 223
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<link rel=\"stylesheet\" href=\"../javascript/jquery/plugins/fancybox/fancybox.css?";
        // line 224
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" type=\"text/css\" media=\"screen\">

<script type=\"text/javascript\" src=\"script/layout.js?";
        // line 226
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/layout.headerimage.js?";
        // line 227
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>

\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 232
        echo getLang("ManageTemplates");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 236
        echo twig_safe_filter((isset($context['LayoutIntro']) ? $context['LayoutIntro'] : null));
        echo "</p>
\t\t\t<p id=\"TemplateMsgBox\">";
        // line 237
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</p>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\"><br />
\t\t\t<form action=\"index.php\" method=\"get\">
\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"viewTemplates\">
\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"javascript:ShowTab(0)\" class=\"active\" id=\"tab0\">";
        // line 245
        echo getLang("LayoutTabStoreDesign");
        echo "</a></li>
\t\t\t\t<li><a href=\"javascript:ShowTab(1)\" id=\"tab1\">";
        // line 246
        echo getLang("LayoutTabLogoSettings");
        echo "</a></li>
\t\t\t\t<li><a href=\"javascript:ShowTab(2)\" id=\"tab2\">";
        // line 247
        echo getLang("LayoutTabDesignMode");
        echo "</a></li>
\t\t\t\t<li><a href=\"javascript:ShowTab(6)\" id=\"tab6\">";
        // line 248
        echo getLang("LayoutTabMobile");
        echo "</a></li>
\t\t\t\t<li><a href=\"javascript:ShowTab(3)\" id=\"tab3\">";
        // line 249
        echo getLang("LayoutTabEmails");
        echo "</a></li>
\t\t\t\t";
        // line 250
        if ((isset($context['GiftCertificateThemes']) ? $context['GiftCertificateThemes'] : null)) {
            echo "\t\t\t\t<li><a href=\"javascript:ShowTab(7)\" id=\"tab7\">";
            // line 251
            echo getLang("LayoutTabGiftCertificates");
            echo "</a></li>
\t\t\t\t";
        }
        // line 252
        echo "\t\t\t\t<li><a href=\"javascript:ShowTab(4)\" id=\"tab4\">";
        // line 253
        echo getLang("LayoutTabFavicon");
        echo "</a></li>
\t\t\t\t<li><a href=\"javascript:ShowTab(5)\" id=\"tab5\">";
        // line 254
        echo getLang("LayoutTabHeader");
        echo "</a></li>
\t\t</ul>
\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"";
        // line 256
        echo twig_safe_filter((isset($context['ShowTab']) ? $context['ShowTab'] : null));
        echo "\" type=\"hidden\">
\t\t\t</form>

\t\t</td>
\t\t</tr>

\t</table>
\t<div id=\"div0\">
\t\t<p class=\"intro\">
\t\t\t";
        // line 265
        echo getLang("TemplateChoiceIntro");
        echo "\t\t</p>

\t\t<p class=\"MessageBox MessageBoxInfo\" style=\"";
        // line 268
        echo twig_safe_filter((isset($context['HideSafeModeMessage']) ? $context['HideSafeModeMessage'] : null));
        echo "; margin-top: 10px;\">";
        echo getLang("TemplateDownloadingSafeModeEnabled");
        echo "</p>

\t\t<table class=\"Panel\">
\t\t\t<tr>
\t\t\t  <td class=\"Heading2\" colspan='2'>";
        // line 272
        echo getLang("CurrentTemplate");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td align=\"left\" width=\"200\" style=\"padding:5px 5px 5px 10px;\">
\t\t\t\t\t<a href='";
        // line 276
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/templates/";
        echo twig_safe_filter((isset($context['CurrentTemplateName']) ? $context['CurrentTemplateName'] : null));
        echo "/Previews/";
        echo twig_safe_filter((isset($context['CurrentTemplateImage']) ? $context['CurrentTemplateImage'] : null));
        echo "' class=\"thickbox\"><img src=\"thumb.php?tpl=";
        echo twig_safe_filter((isset($context['CurrentTemplateName']) ? $context['CurrentTemplateName'] : null));
        echo "&color=";
        echo twig_safe_filter((isset($context['CurrentTemplateImage']) ? $context['CurrentTemplateImage'] : null));
        echo "\" border=\"0\" id=\"CurrentTemplateImage\"></a>
\t\t\t\t</td>
\t\t\t\t<td align=\"left\" valign=\"top\"  style=\"padding:5px 5px 5px 10px;\">
\t\t\t\t\t<div class=\"TemplateHeading\" id=\"CurrentTemplateHeading\">";
        // line 279
        echo twig_safe_filter((isset($context['CurrentTemplateNameProper']) ? $context['CurrentTemplateNameProper'] : null));
        echo " (";
        echo twig_safe_filter((isset($context['CurrentTemplateColor']) ? $context['CurrentTemplateColor'] : null));
        echo ") - Version ";
        echo twig_safe_filter((isset($context['TemplateVersion']) ? $context['TemplateVersion'] : null));
        echo "</div>
\t\t\t\t\t<div id=\"TemplateFilesLocated\">";
        // line 280
        echo getLang("TemplateFilesLocated");
        echo twig_safe_filter((isset($context['CurrentTemplateName']) ? $context['CurrentTemplateName'] : null));
        echo "</div><br />

\t\t\t\t\t<input type=\"button\" value=\"";
        // line 282
        echo getLang("BrowseTemplateFiles");
        echo "\" class=\"SmallButton\" class=\"Button\" onclick=\"LaunchEditor();\">\t<input type=\"Button\" class=\"SmallButton\" onclick=\"CheckTemplateVersion();\" value=\"";
        echo getLang("CheckNewVersion");
        echo "\"  id=\"TemplateVersionCheckButton\"> <input type=\"Button\" class=\"SmallButton\" onclick=\"DownloadNewVersion();\" value=\"";
        echo getLang("DownloadNewVersion");
        echo "\"  id=\"DownloadNewVersionButton\" style=\"display:none; font-weight: bold;\"><br /><br />
\t\t\t\t\t<div id=\"TemplateVersionCheck\"></div>
\t\t\t\t</td>
\t\t\t</tr>
\t </table><br />

\t<table class=\"Panel\" style=\"margin:0px;\">
\t\t<tr>
\t\t  <td class=\"Heading2\" colspan='2'>
\t\t\t<span class=\"FloatRight\">
\t\t\t\t<strong>";
        // line 292
        echo getLang("Filter");
        echo "</strong>
\t\t\t\t\t<select name=\"templateType\" class=\"ShowTemplateTypes\">
\t\t\t\t\t<option value=\"all\">";
        // line 294
        echo getLang("ShowAllTemplates");
        echo "</option>
\t\t\t\t\t<option value=\"installed\">";
        // line 295
        echo getLang("ShowInstalledTemplates");
        echo "</option>
\t\t\t\t\t<option value=\"downloadable\">";
        // line 296
        echo getLang("ShowNewTemplates");
        echo "</option>
\t\t\t\t</select>
\t\t\t</span>
\t\t\t";
        // line 299
        echo getLang("ChooseTemplate");
        echo "\t\t  </td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div class=\"TemplateListContainer\">
\t\t\t\t\t<div class=\"TemplateList\">
\t\t\t\t\t\t";
        // line 306
        echo twig_safe_filter((isset($context['TemplateListMap']) ? $context['TemplateListMap'] : null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>

\t\t<div id=\"div1\" style=\"display:none\">
\t\t<!-- Start Logo Editor Tab -->
\t\t\t";
        // line 316
        echo twig_safe_filter((isset($context['LogoTab']) ? $context['LogoTab'] : null));
        echo "
\t\t<!-- End Logo Editor Tab -->
\t\t</div>
\t\t<div id=\"div2\" style=\"display:none\">
\t\t\t<p class=\"intro\">
\t\t\t\t";
        // line 321
        echo getLang("DesignModeIntro");
        echo "\t\t\t</p>
\t\t\t<ul>
\t\t\t\t<li>";
        // line 324
        echo getLang("DesignModeIntro2");
        echo "</li>
\t\t\t\t<li>";
        // line 325
        echo getLang("DesignModeIntro3");
        echo "</li>
\t\t\t\t<li>";
        // line 326
        echo getLang("DesignModeIntro4");
        echo "</li>
\t\t\t\t<!--<li><a href=\"#\" class=\"thickbox\">";
        // line 327
        echo getLang("DesignModeIntro5");
        echo "</a></li>-->
\t\t\t</ul>

\t\t\t<p>
\t\t\t\t<input type=\"button\" onclick=\"launchDesignMode();\" value=\"";
        // line 331
        echo getLang("LaunchDesignMode");
        echo "\" />
\t\t\t</p>
\t\t</div>
\t\t<div id=\"div6\" style=\"display: none\">
\t\t\t<p class=\"intro\">
\t\t\t\t";
        // line 336
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileTemplateIntro", array(), "any"), "1");
        echo "
\t\t\t</p>
\t\t\t<form method=\"post\" action=\"index.php\" id=\"mobileTemplateSettingsForm\" enctype=\"multipart/form-data\">
\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"saveMobileTemplateSettings\" />
\t\t\t\t";
        // line 340
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileTemplateSettings", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EnableMobileTemplate", array(), "any")) . ("?")), ), "method"), "1");
        // line 345
        echo "
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"enableMobileTemplate\" value=\"1\" ";
        // line 347
        if ($this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "enableMobileTemplate", array(), "any")) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "YesEnableMobileTemplate", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t(<a href=\"../templates/__mobile/Previews/default.jpg\" class=\"TplPreviewImage\">";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Preview", array(), "any"), "1");
        echo "</a>)
\t\t\t\t\t\t";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("EnableMobileTemplate", "EnableMobileTemplateHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 352
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EnableOnTheseDevices", array(), "any")) . (":"), "class" => "mobileTemplateDevices enableMobileTemplateToggle"), ), "method"), "1");
        // line 357
        echo "

\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"enableMobileTemplateDevices[]\" value=\"iphone\" ";
        // line 360
        if (twig_in_filter("iphone", $this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "enableMobileTemplateDevices", array(), "any"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileDeviceAppleiPhone", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"enableMobileTemplateDevices[]\" value=\"ipod\" ";
        // line 364
        if (twig_in_filter("ipod", $this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "enableMobileTemplateDevices", array(), "any"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t";
        // line 365
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileDeviceAppleiPodTouch", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"enableMobileTemplateDevices[]\" value=\"ipad\" ";
        // line 368
        if (twig_in_filter("ipad", $this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "enableMobileTemplateDevices", array(), "any"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t";
        // line 369
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileDeviceAppleiPad", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"enableMobileTemplateDevices[]\" value=\"pre\" ";
        // line 372
        if (twig_in_filter("pre", $this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "enableMobileTemplateDevices", array(), "any"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileDevicePalmPre", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"enableMobileTemplateDevices[]\" value=\"android\" ";
        // line 376
        if (twig_in_filter("android", $this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "enableMobileTemplateDevices", array(), "any"))) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t";
        // line 377
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileDeviceAndroid", array(), "any"), "1");
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 379
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 381
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MobileTemplateLogo", array(), "any")) . (":"), "class" => "enableMobileTemplateToggle"), ), "method"), "1");
        // line 384
        echo "
\t\t\t\t\t\t<input type=\"file\" name=\"mobileTemplateLogo\" />
\t\t\t\t\t\t";
        // line 386
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("MobileTemplateLogo", "MobileTemplateLogoHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 387
        if ($this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "mobileTemplateLogo", array(), "any")) {
            echo "\t\t\t\t\t\t\t(<label><input type=\"checkbox\" name=\"deleteMobileTemplateLogo\" /> ";
            // line 388
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Delete", array(), "any"), "1");
            echo " <a href=\"../";
            echo twig_escape_filter($this->env, (isset($context['ImageDirectory']) ? $context['ImageDirectory'] : null), "1");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['mobileSettings']) ? $context['mobileSettings'] : null), "mobileTemplateLogo", array(), "any"), "1");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LowerCurrentLogo", array(), "any"), "1");
            echo "</a>?</label>)
\t\t\t\t\t\t";
        }
        // line 389
        echo "\t\t\t\t\t\t<div class=\"small\">
\t\t\t\t\t\t\t";
        // line 391
        echo getLang("RecommendedLogoDimensions", array("width" => $this->getAttribute((isset($context['phoneLogoDimensions']) ? $context['phoneLogoDimensions'] : null), "width", array(), "any"), "height" => $this->getAttribute((isset($context['phoneLogoDimensions']) ? $context['phoneLogoDimensions'] : null), "height", array(), "any")));
        // line 394
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 396
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t\t\t<input type=\"submit\" class=\"saveButton\" value=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Save", array(), "any"), "1");
        echo "\" />
\t\t\t\t\t\t";
        // line 400
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Or", array(), "any"), "1");
        echo " <a href=\"#\" class=\"cancelLink\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Cancel", array(), "any"), "1");
        echo "</a>
\t\t\t\t\t";
        // line 401
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 402
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t</form>
\t\t</div>
\t\t<div id=\"div3\" style=\"display:none\">
\t\t\t<p class=\"intro\">
\t\t\t\t";
        // line 407
        echo getLang("EmailTemplatesIntro");
        echo "\t\t\t</p>
\t\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t\t<tr class=\"Heading3\">
\t\t\t\t\t<td>";
        // line 411
        echo getLang("ETFileName");
        echo "</td>
\t\t\t\t\t<td>";
        // line 412
        echo getLang("ETFileSize");
        echo "</td>
\t\t\t\t\t<td>";
        // line 413
        echo getLang("ETLastUpdated");
        echo "</td>
\t\t\t\t\t<td>";
        // line 414
        echo getLang("Action");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 416
        echo twig_safe_filter((isset($context['EmailTemplatesGrid']) ? $context['EmailTemplatesGrid'] : null));
        echo "
\t\t\t</table>
\t\t</div>
\t\t<div id=\"div7\" style=\"display: none\">
\t\t\t";
        // line 420
        $this->env->loadTemplate("layout.manage.giftcerts.tpl")->display($context);
        echo "\t\t</div>

\t\t<div id=\"div4\" style=\"display: none;\">
\t\t\t<p class=\"intro\" >
\t\t\t\t";
        // line 425
        echo getLang("FaviconIntro");
        echo "\t\t\t</p>
\t\t\t<form method=\"post\" action=\"index.php?ToDo=TemplateUploadFavicon\" enctype=\"multipart/form-data\" onsubmit=\"return CheckFaviconForm();\">
\t\t\t\t<table class=\"Panel\" style=\"margin:0px;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan='2'>";
        // line 430
        echo getLang("FaviconUpload");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel PanelBottom\">
\t\t\t\t\t\t\t";
        // line 434
        echo getLang("SelectLogoUpload");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<img src=\"";
        // line 437
        echo twig_safe_filter((isset($context['Favicon']) ? $context['Favicon'] : null));
        echo "\" width=\"16\" height=\"16\" />&nbsp;&nbsp;<input type=\"file\" name=\"FaviconFile\" id=\"FaviconFile\" class=\"Field\" value=\"\" /> <input type=\"submit\" value=\"";
        echo getLang("UploadFavicon");
        echo "\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</form>
\t\t</div>

\t\t<div id=\"div5\" style=\"display: none; \">
\t\t\t\t<p class=\"intro\">";
        // line 445
        echo getLang("LayoutHeaderImageIntro");
        echo "</p>

\t\t\t\t<table class=\"Panel\" style=\"margin:0px;\">
\t\t\t\t\t<tr>
\t\t\t\t\t  <td class=\"Heading2\" colspan='2'>";
        // line 449
        echo getLang("LayoutHeaderImageGroupName");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td align=\"left\" width=\"200\" style=\"padding:5px 5px 5px 10px;\" valign=\"top\">
\t\t";
        // line 453
        echo getLang("LayoutHeaderImageCurrentImage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"left\" valign=\"top\"  style=\"padding:5px 5px 5px 10px;\">
\t\t\t\t\t\t\t<div id='currentHeaderImage'></div>
\t\t\t\t\t\t\t<div id=\"DownloadHeaderImages\" style=\"padding-top: 5px;\">
\t\t\t\t\t\t\t";
        // line 458
        echo getLang("LayoutHeaderDownloadIntro");
        echo " <span id=\"BrowserBasedHelpText\"></span>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"HeaderImageCurrentLinkContainer\"><a href=\"#\" id=\"\">";
        // line 460
        echo getLang("LayoutHeaderImageDownloadCurrentBG");
        echo "</a> (<a href=\"#\" id=\"HeaderImageDeleteLink\">";
        echo getLang("LayoutHeaderImageDelete");
        echo "</a>)</li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" id=\"HeaderImageOrigLink\">";
        // line 461
        echo getLang("LayoutHeaderImageDownloadWithoutBG");
        echo "</a></li>
\t\t\t\t\t\t\t\t<li id=\"HeaderImageBlankLinkContainer\"><a href=\"#\" id=\"HeaderImageBlankLink\">";
        // line 462
        echo getLang("LayoutHeaderImageDownloadWithBG");
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr id=\"UploadHeaderImageRow\" style=\"display:\">
\t\t\t\t\t\t<td align=\"left\" width=\"200\" valign=\"top\"  style=\"padding:5px 5px 5px 10px;\">
\t\t\t\t\t\t\t";
        // line 470
        echo getLang("LayoutHeaderImageUploadImage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td align=\"left\" valign=\"top\"  style=\"padding:5px 5px 5px 10px;\" id=\"\">

\t\t\t\t\t\t\t<input type=\"file\" name=\"HeaderImageFile\" id=\"HeaderImageFile\" class=\"Field300\" value=\"\"><br />
\t\t\t\t\t\t\t<br /><input type=\"button\" name=\"SubmitHeaderImageForm\" id=\"SubmitHeaderImageForm\" class=\"Button\" value=\"";
        // line 475
        echo getLang("LayoutHeaderImageUploadButton");
        echo "\" />

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t</div>

\t</div>
\t<div style=\"display: none\" id=\"templateSelectedMessage\"></div>

\t<script type=\"text/javascript\" defer>
\t\tlang.InvalidSettingenableMobileTemplateDevices = \"";
        // line 486
        echo Interspire_Template_Extension::jsFilter(getLang("InvalidSettingenableMobileTemplateDevices"), "'");
        echo "\";
\t\tlang.InvalidSettingEnableTabletTemplateDevices = \"";
        // line 487
        echo Interspire_Template_Extension::jsFilter(getLang("InvalidSettingEnableTabletTemplateDevices"), "'");
        echo "\";
\t\tlang.UploadValidMobileLogo = \"";
        // line 488
        echo Interspire_Template_Extension::jsFilter(getLang("UploadValidMobileLogo"), "'");
        echo "\";
\t\tlang.UploadValidTabletLogo = \"";
        // line 489
        echo Interspire_Template_Extension::jsFilter(getLang("UploadValidTabletLogo"), "'");
        echo "\";

\t\tvar DisplayTab = 0;
\t\tvar ForceTab = '";
        // line 492
        echo twig_safe_filter((isset($context['ForceTab']) ? $context['ForceTab'] : null));
        echo "';

\t\tif(ForceTab.length > 0){
\t\t\tDisplayTab = ForceTab;
\t\t}

\t\tDisplayTab = parseInt(DisplayTab);

\t\tif(DisplayTab > -1){
\t\t\tShowTab(DisplayTab);
\t\t}

\t\tfunction edit_template(trID, tplfile) {
\t\t\t\$('#edit_'+trID).show();

\t\t\t// Load the contents of the file
\t\t\tjQuery.ajax({
\t\t\t\turl: 'remote.php',
\t\t\t\ttype: 'POST',
\t\t\t\tdataType: 'text',
\t\t\t\tdata: {'w': 'getEmailTemplate', 'file': tplfile, 'id': trID},
\t\t\t\tsuccess: function(txt) {
\t\t\t\t\t\$('#edit_box_'+trID).html(txt);
\t\t\t\t\tif(typeof(tinyMCE) != 'undefined') {
\t\t\t\t\t\teval('LoadEditor_wysiwyg_'+trID+'()');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction edit_hide(trID) {
\t\t\tif(confirm(\"";
        // line 523
        echo getLang("ETHideEdit");
        echo "\")) {
\t\t\t\t\$('#edit_'+trID).hide();
\t\t\t}
\t\t}

\t\tfunction save_edit(trID, tplfile) {
\t\t\tif(typeof(tinyMCE) != 'undefined') {
\t\t\t\tvar html = tinyMCE.get('wysiwyg_'+trID).getContent();
\t\t\t}
\t\t\telse {
\t\t\t\tvar html = \$(\"#wysiwyg_\"+trID).val();
\t\t\t}

\t\t\t// Save the contents of the file
\t\t\tjQuery.ajax({
\t\t\t\turl: 'remote.php',
\t\t\t\ttype: 'POST',
\t\t\t\tdataType: 'text',
\t\t\t\tdata: {'w': 'updateEmailTemplate', 'file': tplfile, 'html': html},
\t\t\t\tsuccess: function(status) {
\t\t\t\t\tif(status == \"success\") {
\t\t\t\t\t\tmsg = \"";
        // line 544
        echo getLang("EmailTemplateUpdated");
        echo "\";
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tmsg = \"";
        // line 547
        echo getLang("EmailTemplateUpdateFailed");
        echo "\";
\t\t\t\t\t}
\t\t\t\t\talert(msg);
\t\t\t\t\t\$('#edit_'+trID).hide();
\t\t\t\t}
\t\t\t});
\t\t}

\t\tvar EmailTemplates = {
\t\t\tExpandDirectory: function(row, directory)
\t\t\t{
\t\t\t\t\$('#'+row+' .ExpandImg').blur();
\t\t\t\t// Already expanded
\t\t\t\tif(\$('#'+row).is('.Expanded')) {
\t\t\t\t\t\$('#'+row+' .ExpandImg').attr('src', \$('#'+row+' .ExpandImg').attr('src').replace('minus.gif', 'plus.gif'));
\t\t\t\t\t\$('.Child_'+row).hide();
\t\t\t\t\t\$('#'+row).removeClass('Expanded');
\t\t\t\t\t\$('#Indicator_'+row).hide();
\t\t\t\t\treturn;
\t\t\t\t}

\t\t\t\t// We already have results, so just expand
\t\t\t\tif(\$('.Child_'+row).length > 0) {
\t\t\t\t\t\$('#'+row+' .ExpandImg').attr('src', \$('#'+row+' .ExpandImg').attr('src').replace('plus.gif', 'minus.gif'));
\t\t\t\t\t\$('.Child_'+row).show();
\t\t\t\t\t\$('#'+row).addClass('Expanded');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t\$('#Indicator_'+row).show();
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'remote.php',
\t\t\t\t\tdata: {
\t\t\t\t\t\tw: 'GetEmailTemplateDirectory',
\t\t\t\t\t\tpath: directory,
\t\t\t\t\t\tparent: row
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\$('#'+row+' .ExpandImg').attr('src', \$('#'+row+' .ExpandImg').attr('src').replace('plus.gif', 'minus.gif'));
\t\t\t\t\t\tif(response) {
\t\t\t\t\t\t\t\$('#Indicator_'+row).hide();
\t\t\t\t\t\t\t\$('#'+row).after(response);
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\$('#Indicator_'+row+' td').html('<span style=\"padding-left: 25px;\"> ";
        // line 590
        echo getLang("DirectoryContainsNoFiles");
        echo "</span>');
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#'+row).addClass('Expanded');
\t\t\t\t\t\t\$('.Child_'+row).hover(function() {
\t\t\t\t\t\t\t\$(this).addClass('GridRowOver');
\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\t\$(this).removeClass('GridRowOver');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t}

\t\tfunction CheckFaviconForm()
\t\t{
\t\t\tif (document.getElementById('FaviconFile').value == '') {
\t\t\t\talert('";
        // line 606
        echo getLang("FaviconNoImageSelected");
        echo "');
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}
\t</script>
\t<div style=\"display: none;\">
\t\t";
        // line 614
        echo twig_safe_filter((isset($context['TemporaryEditor']) ? $context['TemporaryEditor'] : null));
        echo "
\t</div>";
    }

}

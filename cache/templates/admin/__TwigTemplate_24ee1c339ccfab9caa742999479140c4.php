<?php

/* imgman.view.tpl */
class __TwigTemplate_24ee1c339ccfab9caa742999479140c4 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<style type=\"text/css\">
.swfupload {
\tposition: absolute;
\tz-index: 1;
\toutline: none;
}
</style>

<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/jquery.htmlEncode.js?";
        // line 9
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/jquery.growinguploader.js?";
        // line 10
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/ajax.file.upload.js?";
        // line 11
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/detect.flash.js?";
        // line 12
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/swfupload.js?";
        // line 13
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/swfupload.handlers.js?";
        // line 14
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/multiuploaddialog.js?";
        // line 15
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">
\t\tvar swfUploadMaxFileSize = '";
        // line 17
        echo twig_safe_filter((isset($context['MaxFileSize']) ? $context['MaxFileSize'] : null));
        echo "';

\t\tfunction randomString(length) {
\t\t\tvar chars = \"0123456789abcdefghiklmnopqrstuvwxyz\";
\t\t\tvar string_length = 8;
\t\t\tvar randomstring = '';
\t\t\tfor (var i=0; i<string_length; i++) {
\t\t\t\tvar rnum = Math.floor(Math.random() * chars.length);
\t\t\t\trandomstring += chars.substring(rnum,rnum+1);
\t\t\t}
\t\t\treturn randomstring;
\t\t}

\t\tvar swfu;
\t\tvar MaxFileSize = '";
        // line 31
        echo twig_safe_filter((isset($context['MaxFileSize']) ? $context['MaxFileSize'] : null));
        echo "';
\t\tvar global_randNum = randomString(10);
\t\tvar requiredFlashMajorVersion = 8;
\t\tvar requiredFlashMinorVersion = 0;
\t\tvar requiredFlashRevision = 0;
\t\tvar TotalItemsToUpload = 0;
\t\tvar UploadErrorFiles = new Array();
\t\tvar UploadDuplicateFiles = new Array();
\t\tvar FileCount = 1;
\t\tvar hasReqestedFlashVersion = false;// DetectFlashVer(requiredFlashMajorVersion, requiredFlashMinorVersion, requiredFlashRevision);

\t\t(function(\$) {
\t\t\t \$.evalJSON = function(src)
\t\t\t// Evals JSON that we know to be safe.
\t\t\t{
\t\t\t\teval('var json = ' + src + ';');
\t\t\t\treturn json;
\t\t\t};

\t\t})(jQuery);

\t\t\$(document).ready(function() {
\t\t\tjQuery.fn.exists = function() {
\t\t\t\treturn ( this.is('*') );
\t\t\t}

\t\t\tif (hasReqestedFlashVersion) {
\t\t\t\tswfu = new SWFUpload({
\t\t\t\t\t// Backend Settings
\t\t\t\t\tupload_url: \"";
        // line 60
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/admin/remote.php?remoteSection=imagemanager&w=uploadimage\",\t// Relative to the SWF file or absolute
\t\t\t\t\t// File Upload Settings
\t\t\t\t\tfile_size_limit : \"2 MB\",\t// 2MB
\t\t\t\t\tfile_types : \"*.jpg;*.gif;*.png;*.tiff,*.bmp,*.jpeg\",
\t\t\t\t\tfile_types_description : \" Images\",
\t\t\t\t\tfile_upload_limit : \"0\",

\t\t\t\t\tpost_params: {\"PHPSESSID\": \"";
        // line 67
        echo twig_safe_filter((isset($context['sessionid']) ? $context['sessionid'] : null));
        echo "\"},

\t\t\t\t\t// Event Handler Settings
\t\t\t\t\tfile_queue_error_handler : fileQueueError,
\t\t\t\t\tfile_dialog_complete_handler : fileDialogComplete,
\t\t\t\t\tupload_progress_handler : uploadProgress,
\t\t\t\t\tupload_error_handler : uploadError,
\t\t\t\t\tupload_success_handler : uploadSuccess,
\t\t\t\t\tupload_complete_handler : uploadComplete,

\t\t\t\t\t// Button Settings
\t\t\t\t\tbutton_placeholder_id : \"spanButtonPlaceholder\",
\t\t\t\t\tbutton_width: 130,
\t\t\t\t\tbutton_height: 22,
\t\t\t\t\tbutton_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
\t\t\t\t\tbutton_cursor: SWFUpload.CURSOR.HAND,

\t\t\t\t\t// Flash Settings
\t\t\t\t\tflash_url : \"images/swfupload.swf\",

\t\t\t\t\tcustom_settings : {
\t\t\t\t\t\tupload_target : \"divFileProgressContainer\"
\t\t\t\t\t},

\t\t\t\t\t// Debug Settings
\t\t\t\t\tdebug: false
\t\t\t\t});
\t\t\t} else { // no flash installed!
\t\t\t\t\$('#btnUpload').click(function () {
\t\t\t\t\tvar dialog = new MultiUploadDialog({
\t\t\t\t\t\taction: 'remote.php?remoteSection=imagemanager&w=uploadimage&unique=' + global_randNum,
\t\t\t\t\t\ttitletext: '";
        // line 98
        echo Interspire_Template_Extension::jsFilter(getLang("UploadingImages"), "'");
        echo "',
\t\t\t\t\t\tintrotext: '";
        // line 99
        echo Interspire_Template_Extension::jsFilter(getLang("noFlashImageUploadIntro"), "'");
        echo "',
\t\t\t\t\t\tsubmittext: '";
        // line 100
        echo Interspire_Template_Extension::jsFilter(getLang("Upload"), "'");
        echo "',
\t\t\t\t\t\tclosetext: '";
        // line 101
        echo Interspire_Template_Extension::jsFilter(getLang("Cancel"), "'");
        echo "',
\t\t\t\t\t\tcleartext: '";
        // line 102
        echo Interspire_Template_Extension::jsFilter(getLang("Remove"), "'");
        echo "',
\t\t\t\t\t\tnoinputsalerttext: '";
        // line 103
        echo Interspire_Template_Extension::jsFilter(getLang("UploadImagesChooseAnImage"), "'");
        echo "'
\t\t\t\t\t});

\t\t\t\t\t\$(dialog).bind('uploadsuccess', function(evt, result){
\t\t\t\t\t\tif (result.Filedata.duplicate) {
\t\t\t\t\t\t\tUploadDuplicateFiles.push(result.Filedata.name);
\t\t\t\t\t\t} else if (result.Filedata.errorfile != '') {
\t\t\t\t\t\t\tUploadErrorFiles.push(result.Filedata.name);
\t\t\t\t\t\t} else if (result.Filedata.error == 0) {
\t\t\t\t\t\t\t// success!
\t\t\t\t\t\t\t//AdminImageManager.AddImage(result.Filedata.name, '../product_images/uploaded_images/' + result.Filedata.name, '../product_images/' + result.Filedata.thumb, result.Filedata.filesize, result.Filedata.width, result.Filedata.height, result.Filedata.dimensions,  result.Filedata.id);
                            AdminImageManager.AddImage(result.Filedata.name, '../uploads/' + result.Filedata.name, result.Filedata.thumb, result.Filedata.filesize, result.Filedata.width, result.Filedata.height, result.Filedata.dimensions,  result.Filedata.id);
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t\t\$(dialog).bind('uploadsfinished', function(evt){
\t\t\t\t\t\tif(UploadErrorFiles.length > 0){
\t\t\t\t\t\t\tvar imageList = '';
\t\t\t\t\t\t\tvar thisImage = '';
\t\t\t\t\t\t\tfor(var i = 0; i < UploadErrorFiles.length; i++){
\t\t\t\t\t\t\t\tthisImage = UploadErrorFiles[i];
\t\t\t\t\t\t\t\timageList += '<li>' + \$('<p>' + thisImage + '</p>').text() + '</li>'; // strips out any html
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(UploadErrorFiles.length == TotalItemsToUpload){
\t\t\t\t\t\t\t\tdisplay_error('MainMessage', '";
        // line 127
        echo getLang("imageManagerFilesNotValidImages");
        echo " <ul>' + imageList + '</ul>');
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tdisplay_error('MainMessage', '";
        // line 129
        echo getLang("imageManagerSomeFilesNotValidImages");
        echo " <ul>' + imageList + '</ul>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}else if(UploadDuplicateFiles.length > 0){
\t\t\t\t\t\t\tvar imageList = '';
\t\t\t\t\t\t\tvar thisImage = '';
\t\t\t\t\t\t\tfor(var i = 0; i < UploadDuplicateFiles.length; i++){
\t\t\t\t\t\t\t\tthisImage = UploadDuplicateFiles[i];
\t\t\t\t\t\t\t\timageList += '<li>' + \$('<p>' + thisImage + '</p>').text() + '</li>'; // strips out any html
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tdisplay_error('MainMessage', '";
        // line 138
        echo getLang("imageManagerDuplicates");
        echo " <ul>' + imageList + '</ul>');
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t// The 4 selected images have been uploaded and are shown below
\t\t\t\t\t\t\t// The selected image has been uploaded and is shown below.
\t\t\t\t\t\t\tif(FileCount == 1){
\t\t\t\t\t\t\t\tdisplay_success('MainMessage', '";
        // line 143
        echo getLang("imageManagerSuccess");
        echo "');
\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\tdisplay_success('MainMessage', '";
        // line 145
        echo getLang("imageManagerMultipleSuccessThe");
        echo " ' + FileCount + ' ";
        echo getLang("imageManagerMultipleSuccess");
        echo "');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});

\t\t\t\t});
\t\t\t}

\t\t\t\$('.DeleteImageCheckbox').live('click', function(){
\t\t\t\tif(\$('.DeleteImageCheckbox:checked').size() < 1) {
\t\t\t\t\t\$('#toggleAllChecks').removeAttr('checked');
\t\t\t\t}
\t\t\t});

\t\t\t\$('#deleteButton').bind('click', function(){
\t\t\t\tif(!\$('#hasImages input:checkbox:checked').exists()){
\t\t\t\t\talert('";
        // line 161
        echo getLang("imageManagerNoImagesSelectedForDelete");
        echo "');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif(confirm('";
        // line 164
        echo getLang("imageManagerConfirmDeleteSelectedImages");
        echo "')) {
\t\t\t\t\tvar sendPOST = '';
\t\t\t\t\t\$('input:checkbox:checked').each(function (){
\t\t\t\t\t\tif(this.value == '%%image_name%%') { return; }
\t\t\t\t\t\tsendPOST += '&deleteimages[]=' + escape(this.value);
\t\t\t\t\t});

\t\t\t\t\t\$.post('remote.php?remoteSection=imagemanager&w=delete', sendPOST,
\t\t\t\t\t\t\tfunction(json){
\t\t\t\t\t\t\t\tvar result = \$.evalJSON(json);
\t\t\t\t\t\t\t\tif(result.success){
\t\t\t\t\t\t\t\t\tfor(var i = 0; i < result.successimages.length; i++) {
\t\t\t\t\t\t\t\t\t\tvar imageName = result.successimages[i];
\t\t\t\t\t\t\t\t\t\timageName = RemoveExtension(imageName);
\t\t\t\t\t\t\t\t\t\t\$('input:checkbox[value=' + imageName + ']').removeAttr('checked');
\t\t\t\t\t\t\t\t\t\t\$('input:text[value=' + imageName + ']').parent().hide('slow');
\t\t\t\t\t\t\t\t\t\t\$('input:text[value=' + imageName + ']').parent().remove();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tdisplay_success('MainMessage', result.message);
\t\t\t\t\t\t\t\t\tAdminImageManager.CheckDelete();
\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\tdisplay_error('MainMessage', result.message);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t});


function RemoveExtension(name){
\tvar pos = name.lastIndexOf(\".\");
\tif (pos >= 0) {
\t\tvar userFriendlyName = name.substr(0, pos);
\t}
\telse {
\t\tvar userFriendlyName = name;
\t}

\treturn userFriendlyName;
}

var OriginalTextValue = '';
var AdminImageManager = {

\tnoflashTotalUploads: 0,
\tpercentIncrementNonFlash: 0,
\ttotalPercentNonFlash: 0,
\ttotalFieldsNonFlash: 0,
\tcurrentFieldNonFlash: 0,

\tGetImageRow: function() {
\t\tvar row = '<div class=\"ManageImageBox\" id=\"%%image_id%%\" >';
\t\trow += '  <input type=\"checkbox\" id=\"deleteimages[]\" value=\"%%image_realname%%\" class=\"DeleteImageCheckbox\" />';
\t\trow += '  <input class=\"TemplateHeading inPlaceImageBoxDefault\" id=\"%%image_id%%_name\" value=\"%%image_name%%\" /><br />';
\t\trow += '  <input type=\"hidden\" id=\"%%image_id%%_realname\" value=\"%%image_realname%%\" />';
\t\trow += '  <div style=\"width: 202px; height: 156px; margin-top: 5px;\">';
\t\trow += '    <a href=\\'%%image_url%%\\' id=\"%%image_id%%_url\" target=\"_blank\">';
\t\trow += '      <img src=\\'%%image_thumburl%%\\' style=\" border: solid 1px #CACACA;\"  id=\"%%image_id%%_image\" width=\"%%image_width%%\" height=\"%%image_height%%\" title=\"";
        // line 221
        echo getLang("imageManagerClickToViewFullSize");
        echo "\" />';
\t\trow += '    </a>';
\t\trow += '  </div>';
\t\trow += '%%image_zoomicon%%';
\t\trow += ' <a href=\\'%%image_url%%\\' id=\"%%image_id%%_urlfull\" target=\"_blank\">%%viewcaption%%</a>';
\t\trow += ' | <a id=\"%%image_id%%_download\" href=\"index.php?ToDo=downloadImage&image=%%image_realname%%\">";
        // line 226
        echo getLang("imageManagerDownload");
        echo "</a> ';
        row += '%%image_edit%%<br />';
\t\trow += '  ";
        // line 228
        echo getLang("imageManagerSize");
        echo ": %%image_size%% <br />';
        row += '%%image_dimensions%%<br />';
\t\trow += '  <input type=\"button\"  class=\"SmallButton\" id=\"%%image_id%%_delete\" value=\"%%delcaption%%\" style=\"width: 150px; margin-top: 4px; margin-bottom: 14px; \" />';
\t\trow += '</div>';

\t\treturn row;
\t},

\tCheckDelete: function() {
\t\tif (!\$('#imagesList .ManageImageBox').exists()) {
\t\t\t\$('#hasImages').hide();
\t\t\t\$('#hasNoImages').show();
\t\t\t\$('#deleteButton').hide();
\t\t} else {
\t\t\t\$('#hasImages').show();
\t\t\t\$('#hasNoImages').hide();
\t\t\t\$('#deleteButton').show();
\t\t}
\t},

\tCheckAllCheckBoxes: function(checkBox){
\t\tif(\$('#toggleAllChecks').attr('checked')){
\t\t\t\$('#imagesList input:checkbox').attr('checked', 'checked');
\t\t}else{
\t\t\t\$('#imagesList input:checkbox').removeAttr('checked');
\t\t}
\t},

\tAddImage: function(name, url, thumburl, size, displaywidth, displayheight, dimensions, id){
\t\t\$('#hasImages').show();
\t\t\$('#hasNoImages').hide();
\t\t\$('#deleteButton').show();
\t\tvar html = AdminImageManager.GetImageRow();

\t\tvar userFriendlyName = RemoveExtension(name);

        if(dimensions == '') {    // this means current file is pdf file.
            html = html.replace(/%%image_edit%%/g, '');
            html = html.replace(/%%image_dimensions%%/g, '');
            html = html.replace(/%%image_zoomicon%%/g, '');
            html = html.replace(/%%viewcaption%%/g, '";
        // line 268
        echo getLang("imageManagerShowFullPDF");
        echo "');
            html = html.replace(/%%delcaption%%/g, '";
        // line 269
        echo getLang("pdfManagerDelete");
        echo "');
        } else {
            html = html.replace(/%%image_edit%%/g, ' | <a href=\"#\" id=\"%%image_id%%_edit\">";
        // line 271
        echo getLang("Edit");
        echo "</a>');    
            html = html.replace(/%%image_dimensions%%/g, '";
        // line 272
        echo getLang("imageManagerDimensions");
        echo ": '+dimensions);
            html = html.replace(/%%image_zoomicon%%/g, ' <a href=\\'%%image_url%%\\' id=\"%%image_id%%_urlzoom\" target=\"_blank\"><img width=\"10\" height=\"11\" border=\"0\" src=\"images/magnify.gif\" /></a>');
            html = html.replace(/%%viewcaption%%/g, '";
        // line 274
        echo getLang("imageManagerShowFullImage");
        echo "');
            html = html.replace(/%%delcaption%%/g, '";
        // line 275
        echo getLang("imageManagerDelete");
        echo "');
        }
        html = html.replace(/%%image_name%%/g, userFriendlyName);
        html = html.replace(/%%image_realname%%/g, name);
\t\thtml = html.replace(/%%image_id%%/g, id);
\t\thtml = html.replace(/%%image_url%%/g, url);
        html = html.replace(/%%image_thumburl%%/g, thumburl);
\t\thtml = html.replace(/%%image_size%%/g, size);
\t\thtml = html.replace(/%%image_width%%/g, displaywidth);
\t\thtml = html.replace(/%%image_height%%/g, displayheight);
        
\t\t\$(html).appendTo('#imagesList');

\t\t\$('#'+id+'_edit').bind('click', function(evt){
\t\t\tevt.preventDefault();
\t\t\tCommon.Picnik.launchEditor('imagemanager', name, function(data){
\t\t\t\t\$('.ManageImageBox#' + id).remove();
\t\t\t\tAdminImageManager.AddImage(data.name, data.url + '?rand=' + Math.random(), data.url + '?rand=' + Math.random(), data.size, data.displaywidth, data.displayheight, data.dimensions, data.id)
\t\t\t});
\t\t});

\t\t\$('#'+id+'_delete').bind('click',
\t\t\tfunction () {
\t\t\t\tvar idBits = this.id.split('_');
\t\t\t\tvar id = idBits[0];

\t\t\t\tif(confirm('";
        // line 301
        echo Interspire_Template_Extension::jsFilter(getLang("imageManagerConfirmDeleteSingleImage"), "'");
        echo " \"' + \$('#'+id+'_name').val() +  '\"";
        echo Interspire_Template_Extension::jsFilter(getLang("imageManagerConfirmDeleteSingleImageSuffix"), "'");
        echo "')) {
\t\t\t\t\tvar sendPOST = '';
\t\t\t\t\tsendPOST = 'deleteimages[]=' + escape(\$('#'+id+'_realname').val());

\t\t\t\t\t\$.post('remote.php?remoteSection=imagemanager&w=delete', sendPOST,
\t\t\t\t\t\t\tfunction(json){
\t\t\t\t\t\t\t\tvar result = \$.evalJSON(json);
\t\t\t\t\t\t\t\tif(result.success){
\t\t\t\t\t\t\t\t\tfor(var i = 0; i < result.successimages.length; i++) {
\t\t\t\t\t\t\t\t\t\tvar imageName = result.successimages[i];
\t\t\t\t\t\t\t\t\t\timageName = RemoveExtension(imageName);
\t\t\t\t\t\t\t\t\t\t\$('input:checkbox[value=' + imageName + ']').removeAttr('checked');
\t\t\t\t\t\t\t\t\t\t\$('input:text[value=' + imageName + ']').parent().hide('slow');
\t\t\t\t\t\t\t\t\t\t\$('input:text[value=' + imageName + ']').parent().remove();
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tdisplay_success('MainMessage', result.message);
\t\t\t\t\t\t\t\t\tAdminImageManager.CheckDelete();
\t\t\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\t\tdisplay_error('MainMessage', result.message);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t);

\t\t\$('#'+id+'_name').bind('mouseover',
\t\t\tfunction () {

\t\t\t\tif(!\$(this).hasClass(\"inPlaceFieldFocus\")) {
\t\t\t\t\t\$(this).addClass(\"inPlaceImageBoxFieldHover\");
\t\t\t\t}
\t\t\t}
\t\t);

\t\t\$('#'+id+'_name').bind('mouseout',
\t\t\tfunction () {
\t\t\t\t\$(this).removeClass(\"inPlaceImageBoxFieldHover\");
\t\t\t}
\t\t);

\t\t\$('#'+id+'_name').bind('keypress', function(e) {
\t\t\tif (e.which == null)
\t\t\t\tvar code = e.keyCode;    // IE
\t\t\telse if (e.which > 0)
\t\t\t\tvar code = e.which;\t  // All others

\t\t\tif (code == 32\t\t\t\t\t\t\t//\tspace
\t\t\t\t|| (48 <= code && code <= 57)\t\t//\tnumbers
\t\t\t\t|| (65 <= code && code <= 90)\t\t//\tlowercase latin letters
\t\t\t\t|| (97 <= code && code <= 122)\t//\tuppercase latin letters
\t\t\t\t|| code == 95\t\t\t\t\t\t//\tunderscore
\t\t\t\t|| code == 13\t\t\t\t\t\t//\tenter
\t\t\t\t|| code == 8\t\t\t\t\t\t\t//  backspace
\t\t\t\t|| (35 <= code && code <= 40 && !e.shiftKey) // home, end, arrows
\t\t\t\t|| code == 46\t\t\t\t\t\t//\tdelete
\t\t\t\t|| code == undefined
\t\t\t\t) {
\t\t\t\t//\tno problem
\t\t\t} else {
\t\t\t\te.preventDefault();
\t\t\t}
\t\t});

\t\t\$('#'+id+'_name').bind('focus',
\t\t\tfunction () {
\t\t\t\t\$('.inPlaceFieldFocus').each(function(){
\t\t\t\t\tcancelEditName(\$(this));
\t\t\t\t\t\$(this).removeClass('inPlaceFieldFocus');
\t\t\t\t});
\t\t\t\t\$(this).removeClass(\"inPlaceImageBoxFieldHover\");
\t\t\t\t\$(this).addClass(\"inPlaceFieldFocus\");
\t\t\t\tOriginalTextValue = this.value;
\t\t\t\tthis.select();
\t\t\t\t\$('<div style=\"background-color: #F9F9F9; width: 205px; position: absolute; padding: 5px; top: 30px; left: 2px;\" id=\"EditNameButtons\"><input type=\"button\" class=\"FormButton\" name=\"saveEdit\" value=\"";
        // line 374
        echo getLang("Save");
        echo "\"  style=\"float: right;\" onclick=\"saveEditName(\$(\\'#' + this.id + '\\'));\" /><input type=\"button\" class=\"FormButton\" name=\"cancelEdit\" value=\"";
        echo getLang("Cancel");
        echo "\" style=\"float: left;\"  onclick=\"cancelEditName(\$(\\'#' + this.id + '\\'));\" /> </div>').insertAfter(this);
\t\t\t}
\t\t);


\t\tif (\$.browser.mozilla) {
\t\t\tvar event = \"keypress\";
\t\t} else {
\t\t\tvar event = \"keydown\";
\t\t}

\t\t\$('#'+id+'_name').bind(event, function(e) {
\t\t\tif (e.keyCode == 13) {
\t\t\t\t\$('#'+id+'_name').blur();
\t\t\t}
\t\t});
\t}
};

function saveEditName(field){
\t\$(field).attr('disabled', true);

\tvar idBits = field.attr('id');
\tidBits = idBits.split('_');
\tvar id = idBits[0];
\t\$('#EditNameButtons').remove();

\tfield.removeClass(\"inPlaceFieldFocus\");
\tvar newVal = \$.trim(field.val());
\tif (newVal == '') {
\t\t// empty name, error
\t\tdisplay_error(\"MainMessage\", '";
        // line 405
        echo getLang("imageManagerRenameInvalidFileName");
        echo " ');
\t\t\$('#'+id+'_name').val(OriginalTextValue);
\t} else if (newVal != OriginalTextValue){
\t\t\$.post('remote.php?remoteSection=imagemanager&w=rename', 'fromName=' + escape(\$('#' + id + '_realname').val()) + '&toName=' + escape(newVal),
\t\t\tfunction(json){
\t\t\t\tvar result = \$.evalJSON(json);
\t\t\t\tif(result.success){
\t\t\t\t\tvar message = '";
        // line 412
        echo getLang("fileRenamedSuccess");
        echo "';
\t\t\t\t\tmessage = message.replace('%from%', OriginalTextValue);
\t\t\t\t\tmessage = message.replace('%to%', result.newname);
\t\t\t\t\tdisplay_success(\"MainMessage\", message);

\t\t\t\t\t\$('#' + id + '_image').attr('src', result.newurl);
\t\t\t\t\t\$('#' + id + '_urlzoom').attr('href', result.newurl);
\t\t\t\t\t\$('#' + id + '_urlfull').attr('href', result.newurl);
\t\t\t\t\t\$('#' + id + '_download').attr('href', result.newurl);
\t\t\t\t\t\$('#' + id + '_realname').val(result.newrealname);
\t\t\t\t\t\$('#'+id+'_name').val(result.newname);
\t\t\t\t}else{
\t\t\t\t\tdisplay_error(\"MainMessage\", '";
        // line 424
        echo getLang("fileRenamedError");
        echo " ' + result.message);
\t\t\t\t\t\$('#'+id+'_name').val(OriginalTextValue);
\t\t\t\t}
\t\t\t});
\t}

\t\$(field).attr('disabled', false);
}


function cancelEditName(field){
\t\$(field).val(OriginalTextValue);
\t\$(field).removeClass(\"inPlaceFieldFocus\");
\t\$('#EditNameButtons').remove();
}

function ChangeImageManagerPaging(object, pagenumber) {
\tpagingId = object.selectedIndex;
\tpagingamount = object[pagingId].value;
\twindow.location = 'index.php?ToDo=manageImages&page=' + pagenumber + '&perpage='+ pagingamount;
}


function ChangeImageManagerSorting(object, pagenumber) {
\tpagingId = object.selectedIndex;
\tvar sortby = object[pagingId].value;
\twindow.location = 'index.php?ToDo=manageImages&page=' + pagenumber + '&sortby='+ sortby;
}

</script>

<div class=\"BodyContainer\">
<table class=\"OuterPanel\" cellpadding=\"0\" cellspacing=\"0\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 458
        echo getLang("ManageImages");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">

\t\t<p>";
        // line 463
        echo getLang("ManageImagesIntro");
        echo "</p>

\t\t<div id=\"MainMessage\">
\t\t\t";
        // line 466
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</div>

\t\t<p>
\t\t\t<span id=\"spanButtonPlaceholder\"></span>
\t\t\t<input id=\"btnUpload\" type=\"button\" class=\"SmallButton\" value=\"";
        // line 471
        echo getLang("imageManagerUploadImages");
        echo "\" style=\"width: 130px;\" />&nbsp;<input id=\"deleteButton\" type=\"button\" value=\"";
        echo getLang("imageManagerDeleteSelected");
        echo "\"  class=\"SmallButton\"  style=\"display: \" /><br /><br />
\t\t</p>
</td>
</tr><tr><td>

<div style=\"display: none\" id=\"ProgressWindow\">
<div id=\"ProgressBarDiv\" style=\"text-align: center;\"><br/><span id=\"ProgressBarText\" class=\"ProgressBarText\">";
        // line 477
        echo getLang("imageManagerUploadInProgress");
        echo "</span><br/><br/><br/>
\t<div style=\"border: 1px solid #ccc; width: 300px; padding: 0px; margin: 0 auto; position: relative;\">
\t\t<div class=\"progressBarPercentage\" style=\"margin: 0; padding: 0; background: url('images/progressbar.gif') no-repeat; height: 20px; width: 0%; \">
\t\t\t&nbsp;
\t\t</div>
\t\t<div style=\"position: absolute; top: 0px; left: 0; text-align: center; width: 300px; font-weight: bold;line-height:1.5;color:#333333;font-family:Tahoma;font-size:11px;\" class=\"progressPercent\">&nbsp;</div>
\t</div>
\t<span id=\"progressBarStatus\" class=\"progressBarStatus\" style=\"text-align: center; font-size: 10px; color: gray; padding-top: 5px;\">&nbsp;</span>
\t<br />
\t<br/>
\t<br/>
</div>

</div><!-- End #ProgressWindow -->

<div id=\"hasImages\" style=\"display: ";
        // line 492
        echo twig_safe_filter((isset($context['hideImages']) ? $context['hideImages'] : null));
        echo ";\">
<div style=\"\">
\t<div style=\"float: right\">";
        // line 494
        echo twig_safe_filter((isset($context['paging']) ? $context['paging'] : null));
        echo "</div>
\t<div style=\"float: right; padding-bottom: 7px;\">
\t\t<select name=\"PerPage\" class=\"Field\" style=\"width: 180px;\" onChange=\"ChangeImageManagerPaging(this, '";
        // line 496
        echo twig_safe_filter((isset($context['PageNumber']) ? $context['PageNumber'] : null));
        echo "');\">
\t\t\t<option value=\"10\" ";
        // line 497
        echo twig_safe_filter((isset($context['PerPage10Selected']) ? $context['PerPage10Selected'] : null));
        echo ">";
        echo getLang("imageManager10PerPage");
        echo "</option>
\t\t\t<option value=\"20\" ";
        // line 498
        echo twig_safe_filter((isset($context['PerPage20Selected']) ? $context['PerPage20Selected'] : null));
        echo ">";
        echo getLang("imageManager20PerPage");
        echo "</option>
\t\t\t<option value=\"50\" ";
        // line 499
        echo twig_safe_filter((isset($context['PerPage50Selected']) ? $context['PerPage50Selected'] : null));
        echo ">";
        echo getLang("imageManager50PerPage");
        echo "</option>
\t\t\t<option value=\"100\" ";
        // line 500
        echo twig_safe_filter((isset($context['PerPage100Selected']) ? $context['PerPage100Selected'] : null));
        echo ">";
        echo getLang("imageManager100PerPage");
        echo "</option>
\t\t\t<option value=\"0\" ";
        // line 501
        echo twig_safe_filter((isset($context['PerPageAllSelected']) ? $context['PerPageAllSelected'] : null));
        echo ">";
        echo getLang("imageManagerShowAllImages");
        echo "</option>
\t\t</select>
\t\t<select name=\"SortBy\" class=\"Field\" style=\"width: 150px;\" onChange=\"ChangeImageManagerSorting(this, '";
        // line 503
        echo twig_safe_filter((isset($context['PageNumber']) ? $context['PageNumber'] : null));
        echo "');\">
\t\t\t<option value=\"name.asc\" ";
        // line 504
        echo twig_safe_filter((isset($context['SortNameAsc']) ? $context['SortNameAsc'] : null));
        echo ">";
        echo getLang("SortNameAsc");
        echo "</option>
\t\t\t<option value=\"name.desc\" ";
        // line 505
        echo twig_safe_filter((isset($context['SortNameDesc']) ? $context['SortNameDesc'] : null));
        echo ">";
        echo getLang("SortNameDesc");
        echo "</option>

\t\t\t<option value=\"modified.asc\" ";
        // line 507
        echo twig_safe_filter((isset($context['SortModifiedAsc']) ? $context['SortModifiedAsc'] : null));
        echo ">";
        echo getLang("SortDateAsc");
        echo "</option>
\t\t\t<option value=\"modified.desc\" ";
        // line 508
        echo twig_safe_filter((isset($context['SortModifiedDesc']) ? $context['SortModifiedDesc'] : null));
        echo ">";
        echo getLang("SortDateDesc");
        echo "</option>

\t\t\t<option value=\"size.asc\" ";
        // line 510
        echo twig_safe_filter((isset($context['SortSizeAsc']) ? $context['SortSizeAsc'] : null));
        echo ">";
        echo getLang("SortFilesizeAsc");
        echo "</option>
\t\t\t<option value=\"size.desc\" ";
        // line 511
        echo twig_safe_filter((isset($context['SortSizeDesc']) ? $context['SortSizeDesc'] : null));
        echo ">";
        echo getLang("SortFilesizeDesc");
        echo "</option>
\t\t</select>
\t</div>
</div>
<div style=\"clear:both;\"></div>
\t<table class=\"Panel\" style=\"margin:0px;\">
\t\t\t<tr>
\t\t\t\t<td class=\"Heading2\" colspan='2'>
\t\t\t\t\t<input type=\"checkbox\" name=\"toggleAllChecks\" id=\"toggleAllChecks\" onclick=\"AdminImageManager.CheckAllCheckBoxes(this);\" style=\"margin: 3px 0 0 0 ; float: left;\" />
\t\t\t\t\t<label for=\"toggleAllChecks\" style=\"display: block; padding-top: 4px; float: left; padding-left: 4px;\">";
        // line 520
        echo twig_safe_filter((isset($context['ImagesTitle']) ? $context['ImagesTitle'] : null));
        echo "</label>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td align=\"right\" style=\" padding-left: 10px;\" colspan='2'>

\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td style=\"padding:5px 5px 5px 10px;\" colspan='2'>



\t<div id=\"imagesList\">
\t\t<script type=\"text/javascript\">
\t\t\t";
        // line 535
        echo twig_safe_filter((isset($context['imagesList']) ? $context['imagesList'] : null));
        echo "
\t\t</script>
\t</div><!-- end #imagesList -->

\t</td>
\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t<td align=\"right\" style=\" padding-left: 10px;\" colspan='2'>
\t\t\t\t\t<select name=\"PerPage\" class=\"Field\" style=\"width: 180px;\" onChange=\"ChangeImageManagerPaging(this, '";
        // line 543
        echo twig_safe_filter((isset($context['PageNumber']) ? $context['PageNumber'] : null));
        echo "');\">
\t\t\t\t\t\t<option value=\"10\" ";
        // line 544
        echo twig_safe_filter((isset($context['PerPage10Selected']) ? $context['PerPage10Selected'] : null));
        echo ">";
        echo getLang("imageManager10PerPage");
        echo "</option>
\t\t\t\t\t\t<option value=\"20\" ";
        // line 545
        echo twig_safe_filter((isset($context['PerPage20Selected']) ? $context['PerPage20Selected'] : null));
        echo ">";
        echo getLang("imageManager20PerPage");
        echo "</option>
\t\t\t\t\t\t<option value=\"50\" ";
        // line 546
        echo twig_safe_filter((isset($context['PerPage50Selected']) ? $context['PerPage50Selected'] : null));
        echo ">";
        echo getLang("imageManager50PerPage");
        echo "</option>
\t\t\t\t\t\t<option value=\"100\" ";
        // line 547
        echo twig_safe_filter((isset($context['PerPage100Selected']) ? $context['PerPage100Selected'] : null));
        echo ">";
        echo getLang("imageManager100PerPage");
        echo "</option>
\t\t\t\t\t\t<option value=\"0\" ";
        // line 548
        echo twig_safe_filter((isset($context['PerPageAllSelected']) ? $context['PerPageAllSelected'] : null));
        echo ">";
        echo getLang("imageManagerShowAllImages");
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t\t<select name=\"SortBy\" class=\"Field\" style=\"width: 150px;\" onChange=\"ChangeImageManagerSorting(this, '";
        // line 550
        echo twig_safe_filter((isset($context['PageNumber']) ? $context['PageNumber'] : null));
        echo "');\">
\t\t\t\t\t\t<option value=\"name.asc\" ";
        // line 551
        echo twig_safe_filter((isset($context['SortNameAsc']) ? $context['SortNameAsc'] : null));
        echo ">";
        echo getLang("SortNameAsc");
        echo "</option>
\t\t\t\t\t\t<option value=\"name.desc\" ";
        // line 552
        echo twig_safe_filter((isset($context['SortNameDesc']) ? $context['SortNameDesc'] : null));
        echo ">";
        echo getLang("SortNameDesc");
        echo "</option>

\t\t\t\t\t\t<option value=\"modified.asc\" ";
        // line 554
        echo twig_safe_filter((isset($context['SortModifiedAsc']) ? $context['SortModifiedAsc'] : null));
        echo ">";
        echo getLang("SortDateAsc");
        echo "</option>
\t\t\t\t\t\t<option value=\"modified.desc\" ";
        // line 555
        echo twig_safe_filter((isset($context['SortModifiedDesc']) ? $context['SortModifiedDesc'] : null));
        echo ">";
        echo getLang("SortDateDesc");
        echo "</option>

\t\t\t\t\t\t<option value=\"size.asc\" ";
        // line 557
        echo twig_safe_filter((isset($context['SortSizeAsc']) ? $context['SortSizeAsc'] : null));
        echo ">";
        echo getLang("SortFilesizeAsc");
        echo "</option>
\t\t\t\t\t\t<option value=\"size.desc\" ";
        // line 558
        echo twig_safe_filter((isset($context['SortSizeDesc']) ? $context['SortSizeDesc'] : null));
        echo ">";
        echo getLang("SortFilesizeDesc");
        echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t </table><br />
\t ";
        // line 563
        echo twig_safe_filter((isset($context['paging']) ? $context['paging'] : null));
        echo "
</div>

<div id=\"hasNoImages\" style=\"display: ";
        // line 566
        echo twig_safe_filter((isset($context['hideHasNoImages']) ? $context['hideHasNoImages'] : null));
        echo "; text-align: center;\">
";
        // line 567
        echo getLang("PromptToCreateImage");
        echo "</div>

</td></tr></table>
</div>

<div style=\"display:none;\" id=\"MultiUploadDialogTemplate\">
\t<div class=\"ModalTitle\">%titletext%</div>
\t<div class=\"ModalContent\">
\t\t<div class=\"MultiUploadDialogContent\">
\t\t\t<div class=\"UploadDialog\">
\t\t\t\t<p>%introtext%</p>
\t\t\t\t<div class=\"GrowingUploader\">
\t\t\t\t\t<input type=\"file\" name=\"Filedata\" width=\"300\" class=\"Button MultiUploadDialogInput\" /> <a href=\"#\">%cleartext%</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ProgressIndicator\" style=\"display:none;\">
\t\t\t\t<p class=\"ProgressMessage\"></p>
\t\t\t\t<div class=\"ProgressBar\">
\t\t\t\t\t<div class=\"ProgressBarColour\">&nbsp;</div>
\t\t\t\t\t<div class=\"ProgressBarText\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<div class=\"MultiUploadDialogButtons\">
\t\t\t<div class=\"FloatLeft\">
\t\t\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"%closetext%\" />
\t\t\t</div>
\t\t\t<input type=\"button\" class=\"Submit FormButton\" value=\"%submittext%\" />
\t\t</div>
\t</div>
</div><!-- end #MultiUploadDialogTemplate -->
";
    }

}

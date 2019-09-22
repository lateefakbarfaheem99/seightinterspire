<?php

/* designmode.edit.tpl */
class __TwigTemplate_9c9f7b9a06c4eda0fe45cc23e5c46bff extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
\t\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html lang=\"en\">
<head>
<title>";
        // line 5
        echo getLang("DesignMode");
        echo "</title>
<style type=\"text/css\">
body {
\tfont-family: Arial;
\tfont-size: 12px;
\tmargin: 0;
\toverflow: hidden;
\tpadding: 0;
}

.EditorHeader {
\tbackground-color: #BFDBFF;
\tcolor: #15428B;
\tfont-weight: bold;
\tpadding: 7px;
}

#Left {
\tfloat: left;
\twidth: 250px;
}

#Sep {
\tbackground: #BFDBFF;
\tcursor: e-resize;
\tfloat: left;
\theight: 100%;
\twidth: 3px;
}

#FileEditor {
\tfloat: left;
}

.ScrollableList {
\theight: 200px;
\toverflow: auto;
}

#EditorLoading {
\tbackground: #fff;
\theight: 100%;
\tleft: 0;
\tposition: absolute;
\ttop: 0;
\twidth: 100%;
\tz-index: 200;
}

#FileEditor textarea {
\tmargin-left: 1px;
\tpadding: 4px;
\tfont-family: monospace;
\tfont-size: 10pt;
\tresize: none;
}

#DesignModeMenu {
\tbackground-image: url('../lib/designmode/images/DesignModeEditBg.gif');
\tbackground-repeat: repeat-x;
\tborder-bottom: solid 1px #6F9DD9;
\tfont-family: Courier New;
\tfont-size: 9pt;
\twidth: 100%;
}

#DesignModeMenu div {
\tfloat: left;
}

.DesignModeButton a {
\tbackground: url('../lib/designmode/images/buttons.png') no-repeat;
\tborder: solid 1px transparent;
\tcolor: #000;
\tcursor: pointer;
\tdisplay: block;
\tfont-size: 11px;
\theight: 22px;
\tline-height: 22px;
\tmargin: 2px;
\tpadding: 0 4px 0 25px;
\ttext-decoration: none;
\tfont-family: Verdana;
\tfont-weight: normal;
}

.DesignModeSaveButton a {
\tbackground-position: 3px -29px;
}

.DesignModeCloseButton a {
\tbackground-position: 3px -125px;
}

.DesignModeCloseUpdateButton a {
\tbackground-position: 3px -61px;
}

.DesignModeRecentFilesButton a {
\tbackground-position: 3px -93px;
}

.DesignModeToggleButton a {
\tbackground-position: 3px -157px;
}

.DesignModeRevertButton {
\tposition: absolute;
\ttop: 0;
\tright: 0;
}

.DesignModeRevertButton a {
\tbackground-position: 3px 3px;
}

.DesignModeButton a:hover {
\tbackground-color: #FFE7A2;
\tborder: solid 1px #FFBD69;
}

.DesignModeRecentFilesButton a:hover {
\tbackground-color: #fff;
\tborder-color: #5296F7;
}

.DesignModeRecentFilesButton a {
\tposition: relative;
\tpadding-right: 15px;
}

.DesignModeRecentFilesButton a span {
\twidth: 16px;
\theight: 16px;
\tbackground: url('../lib/designmode/images/buttons.png') no-repeat 3px -192px;
\tdisplay: block;
\tposition: absolute;
\tright: 0;
\ttop: 6px;
}

.DesignModeButtonEnabled a {
\tbackground-color: #FFE7A2;
\tborder: 1px solid #FFBD69;
}

.ScrollableList div.title {
\tbackground: #FFF;
\tfont-weight: bold;
\tpadding: 5px;
\tpadding-left: 10px;
}

.ScrollableList ul, .ScrollableList li {
\tlist-style: none;
\tmargin: 0;
\tpadding: 0;
}

.ScrollableList a {
\tborder-bottom: 1px solid #fff;
\tborder-top: 1px solid #fff;
\tcolor: #000;
\tdisplay: block;
\tpadding: 3px 0px 3px 20px;
\ttext-decoration: none;
}

.ScrollableList a:hover {
\tbackground: #FFF0BE;
}

.ScrollableList .active a, .ScrollableList .active a:hover {
\tbackground: #EFEFEF;
\tfont-weight: bold;
}

.ScrollableList .ActiveStylesheet {
\tbackground: #E3EFFF;
}

#NoUsedFiles {
\tbackground: #efefef;
\tcolor: #bbb;
\tfont-size: 18px;
\tfont-weight: bold;
\tline-height: 1.5;
\ttext-align: center;
}

#RecentFilesButton {
\tposition: relative;
\tz-index: 9999;
}

.RecentFilesButtonOpen a,.RecentFilesButtonOpen a:hover {
\toutline: none;
\tbackground-color: #FFF;
\tborder: 1px solid #5296f7;
\tborder-bottom: 1px solid #fff;
\tcursor: pointer;
\tposition: absolute;
\tz-index: 20;
}

#RecentFiles, #RecentFiles li {
\tlist-style: none;
\tmargin: 0;
\tpadding: 0;
\tz-index: 1;
}

#RecentFiles {
\tmargin-left: 2px;
\tmargin-top: -2px;
\tbackground: #fff;
\tborder: 1px solid #5296f7;
\tpadding-top: 3px;
}

#RecentFiles li a {
\tborder: 1px solid #fff;
\tcolor: #000;
\tdisplay: block;
\tfont-family: Verdana;
\tfont-size: 11px;
\tmargin: 0 3px;
\tmargin-bottom: 3px;
\tpadding: 3px;
\ttext-decoration: none;
}

#RecentFiles li a:hover {
\tbackground: #c1d2ee;
\tborder: 1px solid #316ac5;
}

#EditorStatus {
\tbackground: #ECFEE0;
\tborder: 1px solid green;
\tcolor: green;
\tfont-weight: bold;
\tmargin: 1px;
\tpadding: 4px;
}

#EditorLoading {
\tbackground: #fff url('../lib/designmode/images/LoadingBig.gif') no-repeat center;
\tz-index: 1000000;
}

#EditorInlineLoading {
\tbackground: #fff url('../lib/designmode/images/LoadingBig.gif') no-repeat center;
\tborder: 1px solid #000;
}

#FileEditorHeader {
\tposition: relative;
}

#RevertBackup, #RevertBackupOver {
\tborder: 1px solid transparent;
\tposition: absolute;
\tright: 0;
\ttop: -1px;
}

#RevertBackupOver {
\tborder: solid 1px #316AC5;
}

.CodeMirror-line-numbers {
\tfont-family: monospace;
\tfont-size: 10pt;
\tbackground: #efefef;
\twidth: 40px;
\ttext-align: right;
\tcolor: #444;
\tmargin-top: 4px;
\tpadding-right: 3px;
\tborder-right: 1px solid #ccc;
}

</style>
<script type=\"text/javascript\">
// Need to strip off in to design mode common file?
var Event = {
\tobserve: function(element, name, observer, useCapture)
\t{
\t\tif(!useCapture) useCapture = false;
\t\tif(element.addEventListener)
\t\t\telement.addEventListener(name, observer, useCapture);
\t\telse
\t\t\telement.attachEvent('on'+name, observer);
\t},

\tstopObserving: function(element, name, observer, useCapture)
\t{
\t\tif(!useCapture) useCapture = false;
\t\tif(element.removeEventListener)
\t\t{
\t\t\telement.removeEventListener(name, observer, useCapture);
\t\t}
\t\telse
\t\t\telement.detachEvent('on'+name, observer);
\t},

\tbutton: function(e)
\t{

\t\tif(!e && window.event) e = window.event;
\t\tif(e.which) return e.which;
\t\telse if(e.button) return e.button;
\t\telse return false;
\t},

\tstop: function(e)
\t{
\t\tif(!e && window.event) e = window.event;
\t\tif(e.preventDefault)
\t\t{
\t\t  e.preventDefault();
\t\t  e.stopPropagation();
\t\t}
\t\telse
\t\t{
\t\t  e.returnValue = false;
\t\t  e.cancelBubble = true;
\t\t}
\t},

\telement: function(e)
\t{
\t\tif(e.target) return e.target;
\t\telse if(e.srcElement) return e.srcElement;
\t\telse return false;
\t}
};

var Cookie = {
\tget: function(name)
\t{
\t\tname = name += \"=\";
\t\tvar cookie_start = document.cookie.indexOf(name);
\t\tif(cookie_start > -1) {
\t\t\tcookie_start = cookie_start+name.length;
\t\t\tcookie_end = document.cookie.indexOf(';', cookie_start);
\t\t\tif(cookie_end == -1) {
\t\t\t\tcookie_end = document.cookie.length;
\t\t\t}
\t\t\treturn unescape(document.cookie.substring(cookie_start, cookie_end));
\t\t}
\t},

\tset: function(name, value, expires)
\t{
\t\tif(!expires) {
\t\t\texpires = \"; expires=Wed, 1 Jan 2020 00:00:00 GMT;\"
\t\t} else {
\t\t\texpire = new Date();
\t\t\texpire.setTime(expire.getTime()+(expires*1000));
\t\t\texpires = \"; expires=\"+expire.toGMTString();
\t\t}
\t\tdocument.cookie = name+\"=\"+escape(value)+expires;
\t},

\tunset: function(name)
\t{
\t\tCookie.set(name, '', -1);
\t}
};

function AjaxRequest(url, options)
{
\tvar request = null;
\tvar complete = false;
\tthis.url = url;

\tif(!options)
\t\toptions = new Object();

\tthis.options = options;

\tif(!this.options.method)
\t\tthis.options.method = \"GET\";
\tif(!this.options.data)
\t\tthis.options.data = '';

\tif(window.XMLHttpRequest)
\t\trequest = new XMLHttpRequest();
\telse if(window.ActiveXObject)
\t\trequest = new ActiveXObject('Microsoft.XMLHTTP');

\tif(!request)
\t\treturn false;


\trequest.open(this.options.method, url, true);
\trequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
\trequest.send(options.data);

\trequest.onreadystatechange = function() {
\t\tif(request.readyState == 4)
\t\t{
\t\t\tcomplete = true;

\t\t\ttry
\t\t\t{
\t\t\t\tvar content_type = request.getResponseHeader('Content-type');
\t\t\t\tif(content_type && content_type.match(/^(text|application)\\/(x-)?(java|ecma)script(;.*)?\$/i))
\t\t\t\t{
\t\t\t\t\teval(request.responseText);
\t\t\t\t}

\t\t\t}
\t\t\tcatch(e)
\t\t\t{
\t\t\t}

\t\t\t// HTTP 200 OK
\t\t\tif(request.status == 200)
\t\t\t{
\t\t\t\tif(options.onComplete)
\t\t\t\t{
\t\t\t\t\toptions.onComplete(request);
\t\t\t\t}
\t\t\t}
\t\t\telse if(options.onError)
\t\t\t{
\t\t\t\toptions.onError(request);
\t\t\t}
\t\t}
\t};
}

</script>

<script src=\"../javascript/codemirror/js/codemirror.js\" type=\"text/javascript\"></script>
<script src=\"../lib/designmode/designmode_editor.js\" type=\"text/javascript\"></script>
<script src=\"../javascript/jquery.js\" type=\"text/javascript\"></script>
</head>
<body>
<div id=\"Editor\">
\t<div id=\"DesignModeMenu\">
\t\t\t<div class=\"DesignModeButton DesignModeSaveButton\">
\t\t\t\t<a href=\"javascript:DesignModeEditor.save();\">";
        // line 450
        echo getLang("Save");
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"DesignModeButton DesignModeCloseButton\">
\t\t\t\t<a href=\"javascript:DesignModeEditor.cancel();\">";
        // line 453
        echo getLang("Close");
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"DesignModeButton DesignModeCloseUpdateButton\">
\t\t\t\t<a href=\"javascript:DesignModeEditor.update();\">";
        // line 456
        echo getLang("CloseAndRefresh");
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"DesignModeButton DesignModeToggleButton\">
\t\t\t\t<a href=\"javascript:DesignModeEditor.toggleEditor();\">";
        // line 459
        echo getLang("ToggleEditor");
        echo "</a>
\t\t\t</div>
\t\t\t<div class=\"DesignModeButton DesignModeRecentFilesButton\">
\t\t\t\t<a href=\"#\">";
        // line 462
        echo getLang("RecentFiles");
        echo "<span></span></a>
\t\t\t</div>
\t\t\t<br style=\"clear: left;\" />
\t</div>

\t<div id=\"Left\">
\t\t<div class=\"EditorHeader\" id=\"FilesUsedHeader\">";
        // line 468
        echo getLang("FilesUsedByTemplate");
        echo ":</div>
\t\t<div class=\"ScrollableList\" id=\"FilesUsed\">
\t\t\t";
        // line 470
        echo twig_safe_filter((isset($context['PanelList']) ? $context['PanelList'] : null));
        echo "

\t\t\t";
        // line 472
        echo twig_safe_filter((isset($context['SnippetsList']) ? $context['SnippetsList'] : null));
        echo "
\t\t</div>

\t\t<div class=\"EditorHeader\" id=\"TemplateListHeader\">";
        // line 475
        echo getLang("OtherTemplateFiles");
        echo "</div>
\t\t<div class=\"ScrollableList\" id=\"TemplateList\">
\t\t\t<div class=\"title\">";
        // line 477
        echo getLang("Stylesheets");
        echo "</div>
\t\t\t<ul>
\t\t\t\t";
        // line 479
        echo twig_safe_filter((isset($context['StyleSheetFileList']) ? $context['StyleSheetFileList'] : null));
        echo "
\t\t\t</ul>

\t\t\t<div class=\"title\">";
        // line 482
        echo getLang("Layouts");
        echo "</div>
\t\t\t<ul>
\t\t\t\t";
        // line 484
        echo twig_safe_filter((isset($context['LayoutFileList']) ? $context['LayoutFileList'] : null));
        echo "
\t\t\t</ul>

\t\t\t<div class=\"title\">";
        // line 487
        echo getLang("Panels");
        echo "</div>
\t\t\t<ul>
\t\t\t\t";
        // line 489
        echo twig_safe_filter((isset($context['PanelFileList']) ? $context['PanelFileList'] : null));
        echo "
\t\t\t</ul>

\t\t\t<div class=\"title\">";
        // line 492
        echo getLang("Snippets");
        echo "</div>
\t\t\t<ul>
\t\t\t\t";
        // line 494
        echo twig_safe_filter((isset($context['SnippetFileList']) ? $context['SnippetFileList'] : null));
        echo "
\t\t\t</ul>

\t\t</div>
\t</div>

\t<div id=\"Sep\">&nbsp;</div>

\t<div id=\"FileEditor\">
\t\t<div class=\"EditorHeader\" id=\"FileEditorHeader\">
\t\t\t<div class=\"DesignModeButton DesignModeRevertButton\">
\t\t\t\t<a href=\"javascript:DesignModeEditor.revert_to_original()\">";
        // line 505
        echo getLang("RevertToOriginal");
        echo "</a>
\t\t\t</div>
\t\t\t<div>";
        // line 507
        echo getLang("ContentsOfFile");
        echo " <span id=\"CurrentFile\"></span></div>
\t\t</div>
\t\t<div id=\"EditorStatus\" class=\"success\" style=\"display: none;\">&nbsp;</div>
\t\t<textarea id=\"editorBox\" name=\"editorBox\" class=\"html autocomplete-off\"></textarea>
\t</div>
<br style=\"clear: both;\" />
</div>

<div id=\"EditorLoading\">
</div>

<div id=\"EditorInlineLoading\" style=\"display: none;\">
&nbsp;
</div>

<script type=\"text/javascript\">
var Lang = {
\tDesignModeConfirmCancel: \"";
        // line 524
        echo getLang("DesignModeConfirmCancel");
        echo "\",
\tDesignModeChangeFile: \"";
        // line 525
        echo getLang("DesignModeChangeFile");
        echo "\",
\tDesignModeLoadUnsaved: \"You have unsaved changes in this file.\\n\\nLoad new file without saving changes?\",
\tContainsNoSnippetsPanels: \"This file does not contain any panels or snippets.\",
\tDesignModeRevert: \"Revert this file to its original content?\\n\\nYou will lose any customisations or unsaved changes.\"
};

";
        // line 531
        echo twig_safe_filter((isset($context['LoadFileJS']) ? $context['LoadFileJS'] : null));
        echo "
";
        // line 532
        echo twig_safe_filter((isset($context['SavedOKAlert']) ? $context['SavedOKAlert'] : null));
        echo "
</script>
</body>
</html>";
    }

}

<?php

/* Snippets/EditorTinyMCECommon.html */
class __TwigTemplate_f856147c47ae0c356024710148b46e94 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<textarea name=\"";
        echo twig_safe_filter((isset($context['WysiwygId']) ? $context['WysiwygId'] : null));
        echo "\" id=\"";
        echo twig_safe_filter((isset($context['WysiwygId']) ? $context['WysiwygId'] : null));
        echo "\" style=\"padding: 0; width: ";
        echo twig_safe_filter((isset($context['WysiwygWidth']) ? $context['WysiwygWidth'] : null));
        echo "; height: ";
        echo twig_safe_filter((isset($context['WysiwygHeight']) ? $context['WysiwygHeight'] : null));
        echo ";\">";
        echo twig_safe_filter((isset($context['WysiwygValue']) ? $context['WysiwygValue'] : null));
        echo "</textarea>
<script type=\"text/javascript\">
function ";
        // line 3
        echo twig_safe_filter((isset($context['LoadFunctionName']) ? $context['LoadFunctionName'] : null));
        echo "()
{
\ttinyMCE.init({
\t\t// General options
\t\t";
        // line 7
        echo twig_safe_filter((isset($context['ValidElements']) ? $context['ValidElements'] : null));
        echo "
\t\tmode : \"exact\",
\t\telements : \"";
        // line 9
        echo twig_safe_filter((isset($context['WysiwygId']) ? $context['WysiwygId'] : null));
        echo "\",
\t\ttheme : \"advanced\",
\t\tskin : \"o2k7\",
\t\tskin_variant : \"silver\",
\t\tplugins : \"safari,pagebreak,style,layer,table,save,interspireimg,linker,advlink,media,searchreplace,print,contextmenu,paste,fullscreen,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,mediaservice\",

\t\t// Theme options
\t\ttheme_advanced_buttons1 : \"undo,redo,|,bold,italic,underline,formatselect,fontselect,fontsizeselect,justifyleft,justifycenter,justifyright,justifyfull,|,fullscreen\",
\t\ttheme_advanced_buttons2 : \"cut,copy,paste,pastetext,pasteword,|,cleanup,|,bullist,numlist,|,outdent,indent,|,link,unlink,anchor,image,media,table,linker,mediaservice,|,forecolor,backcolor,|,pagebreak,|,code\",
\t\ttheme_advanced_buttons3 : \"\",
\t\ttheme_advanced_buttons4 : \"\",
\t\ttheme_advanced_toolbar_location : \"top\",
\t\ttheme_advanced_toolbar_align : \"left\",
\t\ttheme_advanced_statusbar_location : \"bottom\",
\t\ttheme_advanced_resizing : true,
\t\textended_valid_elements : \"iframe[src|width|height|name|align|frameborder|scrollingframeborder]\",
\t\trelative_urls : false,
\t\tremove_script_host : false,
\t\tshop_path: \"";
        // line 27
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "\",
\t\tdocument_base_url : \"";
        // line 28
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "\",
\t\tcontent_css : \"";
        // line 29
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/javascript/tinymce/themes/advanced/skins/o2k7/content.css\",
\t\texternal_link_list_url : \"";
        // line 30
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/admin/remote.php?remoteSection=imagemanager&w=GetImagesList\",
\t\texternal_image_list_url : \"";
        // line 31
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/admin/remote.php?remoteSection=imagemanager&w=GetImagesList\",
\t\ttheme_advanced_resizing_use_cookie: false,

\t\tjquery_include_url: '";
        // line 34
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/javascript/jquery.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "',
\t\tjquery_file_upload_include_url: '";
        // line 35
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/javascript/jquery/plugins/ajax.file.upload.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "',
\t\timage_upload_url: '";
        // line 36
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/admin/remote.php?remoteSection=imagemanager&w=UploadImage',

\t\tpaste_retain_style_properties: 'font-family,font-size,color,background-color'
\t});
}
";
        // line 41
        echo twig_safe_filter((isset($context['LoadFunction']) ? $context['LoadFunction'] : null));
        echo "
</script>
";
    }

}

<?php

/* product.form.images.tpl */
class __TwigTemplate_4a21b7d5edf3ef9f83607c62acb60d9b extends Twig_Template
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

<div style=\"display:none;\" id=\"UseImageFromGallery\">
\t<div class=\"ModalTitle\">";
        // line 39
        echo getLang("UseImageFromGalleryTitle");
        echo "</div>
\t<div class=\"ModalContent\">
\t\t<div class=\"useImageFromGalleryHeaderRow\">
\t\t\t
\t\t\t<input type=\"button\" id=\"ChangeImageSourceButton\" class=\"Button FloatRight\" value=\"";
        // line 43
        echo getLang("Go");
        echo "\" />
\t\t\t<select id=\"ProductImageSource\">
\t\t\t\t<option value=\"products\">";
        // line 45
        echo getLang("ProductImageSourceProducts");
        echo "</option>
\t\t\t\t<option value=\"imagemanager\">";
        // line 46
        echo getLang("ProductImageSourceImageManager");
        echo "</option>
\t\t\t</select>
\t\t\t<input type=\"text\" value=\"";
        // line 48
        echo getLang("Search");
        echo "\" title=\"";
        echo getLang("ProductImagesSearchForImages");
        echo "\" id=\"ProductImagesSearch\" class=\"exampleSearchText\" />
\t\t\t<span id=\"ClearImageSearch\" class=\"FloatRight\"><a href=\"#\" id=\"ClearImageSearchLink\">";
        // line 49
        echo getLang("ClearImageSearch");
        echo "</a></span>
\t\t\t";
        // line 50
        echo getLang("ProductImageUseImageFromGalleryIntro");
        echo "\t\t</div>
\t\t<div id=\"UseImageFromGalleryImageLoading\" class=\"ImageLoading\" style=\"display: none;\">
\t\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"vertical-align: middle;\" class=\"LoadingIndicator\" /> ";
        // line 53
        echo getLang("ProductImageSourceLoading");
        echo "\t\t</div>
\t\t<div id=\"UseImageFromGalleryImagesList\">

\t\t</div>
\t\t<div id=\"ImageGalleryPaging\">

\t\t</div>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<div class=\"FloatLeft\">
\t\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"";
        // line 64
        echo getLang("Close");
        echo "\" onclick=\"\$.modal.close();return false;\" />
\t\t</div>
\t\t<input type=\"button\" class=\"Submit\" value=\"";
        // line 66
        echo getLang("UseSelectedImages");
        echo "\" id=\"UseSelectedImages\" />
\t</div>
</div><!-- end #UseImageFromGallery -->

<div style=\"display:none;\" id=\"UseImageFromGallery\">
\t<div class=\"ModalTitle\">";
        // line 71
        echo getLang("UseImageFromGalleryTitle");
        echo "</div>
\t<div class=\"ModalContent\">
\t\t<div class=\"useImageFromGalleryHeaderRow\">
\t\t\t
\t\t\t<input type=\"button\" id=\"ChangeImageSourceButton\" class=\"Button FloatRight\" value=\"";
        // line 75
        echo getLang("Go");
        echo "\" />
\t\t\t<select id=\"ProductImageSource\">
\t\t\t\t<option value=\"products\">";
        // line 77
        echo getLang("ProductImageSourceProducts");
        echo "</option>
\t\t\t\t<option value=\"imagemanager\">";
        // line 78
        echo getLang("ProductImageSourceImageManager");
        echo "</option>
\t\t\t</select>
\t\t\t<span class=\"ImageGalleryBrowserOr\">";
        // line 80
        echo getLang("Or");
        echo "</span>
\t\t\t<input type=\"text\" value=\"";
        // line 81
        echo getLang("Search");
        echo "\" title=\"";
        echo getLang("ProductImagesSearchForImages");
        echo "\" id=\"ProductImagesSearch\" class=\"exampleSearchText\" />
\t\t\t<span id=\"ClearImageSearch\" class=\"FloatRight\"><a href=\"#\" id=\"ClearImageSearchLink\">";
        // line 82
        echo getLang("ClearImageSearch");
        echo "</a></span>
\t\t</div>
\t\t<div id=\"UseImageFromGalleryImageLoading\" class=\"ImageLoading\" style=\"display: none;\">
\t\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"vertical-align: middle;\" class=\"LoadingIndicator\" /> ";
        // line 85
        echo getLang("ProductImageSourceLoading");
        echo "\t\t</div>
\t\t<div id=\"UseImageFromGalleryImagesList\">

\t\t</div>
\t\t<div id=\"ImageGalleryPaging\">

\t\t</div>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<div class=\"FloatLeft\">
\t\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"";
        // line 96
        echo getLang("Close");
        echo "\" onclick=\"\$.modal.close();return false;\" />
\t\t</div>
\t\t<input type=\"button\" class=\"Submit\" value=\"";
        // line 98
        echo getLang("UseSelectedImages");
        echo "\" id=\"UseSelectedImages\" disabled=\"disabled\" />
\t</div>
</div><!-- end #UseImageFromGallery -->

<div style=\"display: none\" id=\"ProgressWindow\">
\t<div id=\"ProgressBarDiv\" style=\"text-align: center;\">
\t\t<br/>
\t\t<span id=\"ProgressBarText\" class=\"ProgressBarText\">";
        // line 105
        echo getLang("imageManagerUploadInProgress");
        echo "</span><br/>
\t\t<br/>
\t\t<br/>
\t\t<div style=\"border: 1px solid #ccc; width: 300px; padding: 0px; margin: 0 auto; position: relative;\">
\t\t\t<div class=\"progressBarPercentage\" style=\"margin: 0; padding: 0; background: url('images/progressbar.gif') no-repeat; height: 20px; width: 0%;\">
\t\t\t\t&nbsp;
\t\t\t</div>
\t\t\t<div style=\"position: absolute; top: 0px; left: 0; text-align: center; width: 300px; font-weight: bold;line-height:1.5;color:#333333;font-family:Tahoma;font-size:11px;\" class=\"progressPercent\">&nbsp;</div>
\t\t</div>
\t\t<span id=\"progressBarStatus\" class=\"progressBarStatus\" style=\"text-align: center; font-size: 10px; color: gray; padding-top: 5px;\">&nbsp;</span>
\t\t<br/>
\t\t<br/>
\t\t<br/>
\t</div>
</div><!-- End #ProgressWindow -->

<script type=\"text/javascript\" src=\"script/detect.flash.js?";
        // line 121
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/swfupload.js?";
        // line 122
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/swfupload.handlers.js?";
        // line 123
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/product.images.js?";
        // line 124
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">//<![CDATA[

ProductImages.newRowTemplate = ";
        // line 127
        echo twig_safe_filter((isset($context['productImage_newRowTemplate_js']) ? $context['productImage_newRowTemplate_js'] : null));
        echo ";
ProductImages.swfUploadFileTypes = ";
        // line 128
        echo twig_safe_filter((isset($context['productImage_swfUploadFileTypes_js']) ? $context['productImage_swfUploadFileTypes_js'] : null));
        echo ";

\$(function(){
\t// disable sortable refreshing for bulk adding of existing images
\tProductImages.refreshSortableOnNewImage = false;

\t// initialise existing images
\t";
        // line 135
        echo twig_safe_filter((isset($context['productImage_javascriptInitialiseCode']) ? $context['productImage_javascriptInitialiseCode'] : null));
        echo "

\t// after bulk-adding existing images, enable sortable refreshing again and manually trigger a refresh
\tProductImages.refreshSortableOnNewImage = true;
\tProductImages.refreshSortable();
});

//]]></script>

<!-- to be populated by javascript -->
<div id=\"productImagesList\"></div>
";
    }

}

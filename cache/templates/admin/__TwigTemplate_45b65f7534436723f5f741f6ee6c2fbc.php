<?php

/* news.form.tpl */
class __TwigTemplate_45b65f7534436723f5f741f6ee6c2fbc extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css\" />
<script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js\"></script>

\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 4
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onsubmit=\"return ValidateForm(CheckNewsForm)\" id=\"frmNews\" method=\"post\">
\t<input type=\"hidden\" name=\"newsId\" value=\"";
        // line 5
        echo twig_safe_filter((isset($context['NewsId']) ? $context['NewsId'] : null));
        echo "\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 9
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 13
        echo twig_safe_filter((isset($context['Intro']) ? $context['Intro'] : null));
        echo "</p>
\t\t\t";
        // line 14
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t  \t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 22
        echo getLang("NewNewsDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 26
        echo getLang("NewsTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"newstitle\" name=\"newstitle\" class=\"Field400\" value=\"";
        // line 29
        echo twig_safe_filter((isset($context['NewsTitle']) ? $context['NewsTitle'] : null));
        echo "\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
                <tr>
                    <td class=\"FieldLabel\">
                        &nbsp;&nbsp;&nbsp;";
        // line 34
        echo getLang("NewsDate");
        echo ":
                    </td>
                    <td>
                        <input type=\"text\" id=\"newsdate\" name=\"newsdate\" class=\"Field400\" readonly value=\"";
        // line 37
        echo twig_safe_filter((isset($context['NewsDate']) ? $context['NewsDate'] : null));
        echo "\">
                    </td>
                </tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 42
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"newssearchkeywords\" name=\"newssearchkeywords\" class=\"Field400\" value=\"";
        // line 45
        echo twig_safe_filter((isset($context['NewsSearchKeywords']) ? $context['NewsSearchKeywords'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('searchkeywords');\" onmouseover=\"ShowHelp('searchkeywords', '";
        // line 46
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"searchkeywords\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
                <tr>
                    <td class=\"FieldLabel\">
                        &nbsp;&nbsp;&nbsp;";
        // line 52
        echo getLang("NewsShortDescription");
        echo ":
                    </td>
                    <td>
                        <textarea id=\"short_description\" class=\"Field400\" rows=\"4\" name=\"short_description\">";
        // line 55
        echo twig_safe_filter((isset($context['short_description']) ? $context['short_description'] : null));
        echo "</textarea>
                    </td>
                </tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 60
        echo getLang("Visible");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"newsvisible\" name=\"newsvisible\" value=\"1\" ";
        // line 63
        echo twig_safe_filter((isset($context['NewsVisible']) ? $context['NewsVisible'] : null));
        echo "> <label for=\"newsvisible\">";
        echo getLang("YesNewsVisible");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t  \t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>Facebook Optimization</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\tImage(s):
\t\t\t\t\t</td>
\t\t\t\t\t<td valign=\"middle\" class=\"\">
                    \t";
        // line 80
        echo twig_safe_filter((isset($context['currentImages']) ? $context['currentImages'] : null));
        echo "
\t\t\t\t\t\t<input type=\"file\" id=\"newsfbimage[]\" name=\"newsfbimage[]\" class=\"\" >
                      \t<a class=\"addMore\" href=\"#\" ><img src=\"images/addicon.png\" alt=\"More\" title=\"More\" /> </a>

                        <div class=\"extraImages\"></div>

                    </td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 95
        echo getLang("PostContent");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" style=\"padding-top:5px\">
\t\t\t\t\t\t";
        // line 99
        echo twig_safe_filter((isset($context['WYSIWYG']) ? $context['WYSIWYG'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\" colspan=\"2\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 103
        echo getLang("Save");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
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

\t<script type=\"text/javascript\">

\t\t\$(function(){
\t\t\tvar counter = 0;
\t\t\t\$(\".addMore\").live('click', function(){
\t\t\t\t
\t\t\t\t\$(\".extraImages\").append(\"<input class='image\"+counter+\" ' type='file' id='newsfbimage[]' name='newsfbimage[]' > <a class='addMore image\"+counter+\"' href='#' > <img src='images/addicon.png' alt='More' title='More' /> </a> <a href='#' class='removeImage' id='\"+counter+\"'> <img src='images/delicon.png' alt='Remove' title='Remove' /> <br/> </a>\");
\t\t\t\t
\t\t\t\tcounter++;
\t\t\t\t
\t\t\t\treturn false;
\t\t\t
\t\t\t});
\t\t
\t\t\t\$(\".removeImage\").live('click', function(){
\t\t\t\tvar number = \$(this).attr('id');
\t\t\t\t\$('.image'+number).remove();
\t\t\t\t\$(this).remove();\t\t
\t\t\t\treturn false;
\t\t\t})

\t\t});

\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 142
        echo getLang("ConfirmCancelNews");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewNews\";
\t\t}

\t\tfunction CheckNewsForm()
\t\t{
\t\t\tvar title = g(\"newstitle\");

\t\t\tif(g(\"wysiwyg\"))
\t\t\t\tvar wysiwyg = g(\"wysiwyg\"); // Text area
\t\t\telse
\t\t\t\tvar wysiwyg = g(\"wysiwyg_html\"); // DevEdit

\t\t\tif(IsWysiwygEditorEmpty(wysiwyg.value))
\t\t\t{
\t\t\t\talert(\"";
        // line 157
        echo getLang("EnterNewsContent");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(title.value == \"\")
\t\t\t{
\t\t\t\talert(\"";
        // line 163
        echo getLang("EnterNewsTitle");
        echo "\");
\t\t\t\ttitle.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t}

\$(document).ready(function() 
{ 
    // Capture the Date from User Selection
    // http://codeasp.net/assets/demos/blogs/jquery-datepicker-set-date-range-of-start-date-and-end-date.aspx
    var newsdate = \$('#newsdate');

    \$.datepicker.setDefaults({ dateFormat: 'dd-mm-yy', changeMonth: true, changeYear: true, showOtherMonths: true, selectOtherMonths: true });

    newsdate.datepicker();
    
});
\t</script>
";
    }

}

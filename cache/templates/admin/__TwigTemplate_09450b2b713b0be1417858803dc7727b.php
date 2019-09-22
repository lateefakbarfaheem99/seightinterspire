<?php

/* news.manage.tpl */
class __TwigTemplate_09450b2b713b0be1417858803dc7727b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ViewNews");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo twig_safe_filter((isset($context['NewsIntro']) ? $context['NewsIntro'] : null));
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 14
        echo getLang("AddNews");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=addNews'\" /> &nbsp;<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " />
\t\t\t</td>
\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t<table id=\"Table16\" style=\"display:";
        // line 17
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t<tr>
\t\t\t\t\t<form action=\"index.php?ToDo=viewNews";
        // line 19
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm)\">
\t\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"viewNews\">
\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 22
        echo twig_safe_filter((isset($context['Query']) ? $context['Query'] : null));
        echo "\" id=\"SearchQuery\" class=\"Button\" size=\"20\" />&nbsp;
\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" id=\"SearchButton\" style=\"padding-left: 10px; vertical-align: top;\" src=\"images/searchicon.gif\" border=\"0\" />
\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td align=\"right\" style=\"padding-right:55pt\">
\t\t\t\t\t\t<a id=\"SearchClearButton\" href=\"index.php?ToDo=viewNews\">";
        // line 29
        echo getLang("ClearResults");
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 42
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmNews\" id=\"frmNews\" method=\"post\" action=\"index.php?ToDo=deleteNews\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 45
        echo twig_safe_filter((isset($context['NewsDataGrid']) ? $context['NewsDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction CheckSearchForm()
\t\t{
\t\t\tvar query = document.getElementById(\"searchQuery\");

\t\t\tif(query.value == \"\")
\t\t\t{
\t\t\t\talert(\"";
        // line 60
        echo getLang("EnterSearchTerm");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t\tfunction ConfirmDeleteSelected()
\t\t{
\t\t\tvar fp = document.getElementById(\"frmNews\").elements;
\t\t\tvar c = 0;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t{
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tc++;
\t\t\t}

\t\t\tif(c > 0)
\t\t\t{
\t\t\t\tif(confirm(\"";
        // line 80
        echo getLang("ConfirmDeleteNews");
        echo "\"))
\t\t\t\t\tdocument.getElementById(\"frmNews\").submit();
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\talert(\"";
        // line 85
        echo getLang("ChooseNews");
        echo "\");
\t\t\t}
\t\t}

\t\tfunction ToggleDeleteBoxes(Status)
\t\t{
\t\t\tvar fp = document.getElementById(\"frmNews\").elements;

\t\t\tfor(i = 0; i < fp.length; i++)
\t\t\t\tfp[i].checked = Status;
\t\t}

\t\tfunction PreviewNews(NewsId)
\t\t{
\t\t\tvar l = screen.availWidth / 2 - 300;
\t\t\tvar t = screen.availHeight / 2 - 300;
\t\t\tvar win = window.open('index.php?ToDo=prevNews&newsId='+NewsId, 'newsPreview', 'width=600,height=600,left='+l+',top='+t+',scrollbars=1');
\t\t}

\t</script>
";
    }

}

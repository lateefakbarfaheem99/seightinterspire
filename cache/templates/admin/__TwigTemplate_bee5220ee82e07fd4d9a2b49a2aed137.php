<?php

/* page.form.tpl */
class __TwigTemplate_bee5220ee82e07fd4d9a2b49a2aed137 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\" src=\"script/page.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>

\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 3
        echo twig_safe_filter((isset($context['FormAction']) ? $context['FormAction'] : null));
        echo "\" onSubmit=\"return ValidateForm(CheckPageForm);\" id=\"frmNews\" method=\"post\">
\t<input type=\"hidden\" name=\"pageId\" id=\"pageId\" value=\"";
        // line 4
        echo twig_safe_filter((isset($context['PageId']) ? $context['PageId'] : null));
        echo "\">
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 8
        echo twig_safe_filter((isset($context['Title']) ? $context['Title'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 12
        echo getLang("PageIntro");
        echo "</p>
\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td style=\"padding-bottom:8px\">
\t\t\t\t<input type=\"submit\" value=\"";
        // line 18
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"submit\" name=\"addAnother2\" value=\"";
        // line 19
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 20
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel();\" />
\t\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"details\" type=\"hidden\">
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 27
        echo getLang("Details");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 28
        echo getLang("GoogleWebsiteOptimizer");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>
\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">

\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 39
        echo getLang("PageType1");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 43
        echo getLang("PageType");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input onclick=\"SwitchType(0)\" type=\"radio\" id=\"pagetype_0\" name=\"pagetype\" value=\"0\" ";
        // line 46
        echo twig_safe_filter((isset($context['SelType0']) ? $context['SelType0'] : null));
        echo "> <label for=\"pagetype_0\">";
        echo getLang("NormalPage");
        echo "</label><br />
\t\t\t\t\t\t<input onclick=\"SwitchType(1)\" type=\"radio\" id=\"pagetype_1\" name=\"pagetype\" value=\"1\" ";
        // line 47
        echo twig_safe_filter((isset($context['SelType1']) ? $context['SelType1'] : null));
        echo "> <label for=\"pagetype_1\">";
        echo getLang("ExternalLink");
        echo "</label><br />
\t\t\t\t\t\t<input onclick=\"SwitchType(2)\" type=\"radio\" id=\"pagetype_2\" name=\"pagetype\" value=\"2\" ";
        // line 48
        echo twig_safe_filter((isset($context['SelType2']) ? $context['SelType2'] : null));
        echo "> <label for=\"pagetype_2\">";
        echo getLang("RSSPage");
        echo "</label><br />
\t\t\t\t\t\t<input onclick=\"SwitchType(3)\" type=\"radio\" id=\"pagetype_3\" name=\"pagetype\" value=\"3\" ";
        // line 49
        echo twig_safe_filter((isset($context['SelType3']) ? $context['SelType3'] : null));
        echo "> <label for=\"pagetype_3\">";
        echo getLang("ContactPage");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 59
        echo getLang("NewPagesDetails");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 63
        echo getLang("PageTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagetitle\" name=\"pagetitle\" class=\"Field400\" value=\"";
        // line 66
        echo twig_safe_filter((isset($context['PageTitle']) ? $context['PageTitle'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 67
        echo getLang("PageTitle");
        echo "', '";
        echo getLang("PageTitleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 71
        echo twig_safe_filter((isset($context['HideVendorOption']) ? $context['HideVendorOption'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 73
        echo getLang("Vendor");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span style=\"";
        // line 76
        echo twig_safe_filter((isset($context['HideVendorLabel']) ? $context['HideVendorLabel'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['CurrentVendor']) ? $context['CurrentVendor'] : null));
        echo "</span>
\t\t\t\t\t\t<select name=\"vendor\" id=\"vendor\" class=\"Field400\" style=\"";
        // line 77
        echo twig_safe_filter((isset($context['HideVendorSelect']) ? $context['HideVendorSelect'] : null));
        echo "\" onchange=\"ToggleVendor(\$(this).val());\">
\t\t\t\t\t\t\t";
        // line 78
        echo twig_safe_filter((isset($context['VendorList']) ? $context['VendorList'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img style=\"";
        // line 80
        echo twig_safe_filter((isset($context['HideVendorSelect']) ? $context['HideVendorSelect'] : null));
        echo "\" onmouseout=\"HideHelp('vendorhelp');\" onmouseover=\"ShowHelp('vendorhelp', '";
        echo getLang("Vendor");
        echo "', '";
        echo getLang("PageVendorHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"vendorhelp\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfNotPage PageContent\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 86
        echo getLang("PageContent");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 89
        echo twig_safe_filter((isset($context['WYSIWYG']) ? $context['WYSIWYG'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfPage\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 94
        echo getLang("Link");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagelink\" name=\"pagelink\" class=\"Field400\" value=\"";
        // line 97
        echo twig_safe_filter((isset($context['PageLink']) ? $context['PageLink'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d7');\" onmouseover=\"ShowHelp('d7', '";
        // line 98
        echo getLang("Link");
        echo "', '";
        echo getLang("PageLinkHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d7\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfRSS\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 104
        echo getLang("RSSFeed");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagefeed\" name=\"pagefeed\" class=\"Field400\" value=\"";
        // line 107
        echo twig_safe_filter((isset($context['PageFeed']) ? $context['PageFeed'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d8');\" onmouseover=\"ShowHelp('d8', '";
        // line 108
        echo getLang("RSSFeed");
        echo "', '";
        echo getLang("RSSFeedHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d8\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfContact\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 114
        echo getLang("EmailQuestionsTo");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pageemail\" name=\"pageemail\" class=\"Field200\" value=\"";
        // line 117
        echo twig_safe_filter((isset($context['PageEmail']) ? $context['PageEmail'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d10');\" onmouseover=\"ShowHelp('d10', '";
        // line 118
        echo getLang("EmailQuestionsTo");
        echo "', '";
        echo getLang("EmailQuestionsToHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d10\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfContact\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span>&nbsp;";
        // line 124
        echo getLang("ShowTheseFields");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"contactfield1\" name=\"contactfields[]\" value=\"ON\" checked=\"checked\" disabled=\"disabled\"> <label for=\"contactfield1\">";
        // line 127
        echo getLang("ContactEmail");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"checkbox\" id=\"contactfield2\" name=\"contactfields[]\" value=\"ON\" checked=\"checked\" disabled=\"disabled\"> <label for=\"contactfield2\">";
        // line 128
        echo getLang("ContactQuestion");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"checkbox\" id=\"contactfield3\" name=\"contactfields[fullname]\" value=\"fullname\" ";
        // line 129
        echo twig_safe_filter((isset($context['IsContactFullName']) ? $context['IsContactFullName'] : null));
        echo "> <label for=\"contactfield3\">";
        echo getLang("ContactName");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"checkbox\" id=\"contactfield4\" name=\"contactfields[companyname]\" value=\"companyname\" ";
        // line 130
        echo twig_safe_filter((isset($context['IsContactCompanyName']) ? $context['IsContactCompanyName'] : null));
        echo "> <label for=\"contactfield4\">";
        echo getLang("ContactCompanyName");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"checkbox\" id=\"contactfield5\" name=\"contactfields[phone]\" value=\"phone\" ";
        // line 131
        echo twig_safe_filter((isset($context['IsContactPhone']) ? $context['IsContactPhone'] : null));
        echo "> <label for=\"contactfield5\">";
        echo getLang("ContactPhone");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"checkbox\" id=\"contactfield6\" name=\"contactfields[orderno]\" value=\"orderno\" ";
        // line 132
        echo twig_safe_filter((isset($context['IsContactOrderNo']) ? $context['IsContactOrderNo'] : null));
        echo "> <label for=\"contactfield6\">";
        echo getLang("ContactOrderNo");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"checkbox\" id=\"contactfield7\" name=\"contactfields[rma]\" value=\"rma\" ";
        // line 133
        echo twig_safe_filter((isset($context['IsContactRMA']) ? $context['IsContactRMA'] : null));
        echo "> <label for=\"contactfield7\">";
        echo getLang("ContactRMANo");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d9');\" onmouseover=\"ShowHelp('d9', '";
        // line 134
        echo getLang("ShowTheseFields");
        echo "', '";
        echo getLang("ShowTheseFieldsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d9\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 145
        echo getLang("NavigationMenuOptions");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 149
        echo getLang("NavigationMenu");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"pagestatus\" name=\"pagestatus\" value=\"ON\" ";
        // line 152
        echo twig_safe_filter((isset($context['Visible']) ? $context['Visible'] : null));
        echo "> <label for=\"pagestatus\">";
        echo getLang("YesPageVisible");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d6');\" onmouseover=\"ShowHelp('d6', '";
        // line 153
        echo getLang("NavigationMenu");
        echo "', '";
        echo getLang("PageNavigationMenuHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d6\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 159
        echo getLang("ParentPage");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"pageparentid\" name=\"pageparentid\" class=\"Field400\" size=\"5\">
\t\t\t\t\t\t\t<option SELECTED value='0'>-- ";
        // line 163
        echo getLang("NoParentPage");
        echo " --</option>
\t\t\t\t\t\t\t";
        // line 164
        echo twig_safe_filter((isset($context['ParentPageOptions']) ? $context['ParentPageOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 166
        echo getLang("ParentPage");
        echo "', '";
        echo getLang("ParentPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td colspan=\"2\" class=\"Gap\"></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 177
        echo getLang("AdvancedPageOptions");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfLink\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 181
        echo getLang("MetaTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagemetatitle\" name=\"pagemetatitle\" class=\"Field400\" value=\"";
        // line 184
        echo twig_safe_filter((isset($context['PageMetaTitle']) ? $context['PageMetaTitle'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('help_metatitle');\" onmouseover=\"ShowHelp('help_metatitle', '";
        // line 185
        echo getLang("MetaTitle");
        echo "', '";
        echo getLang("MetaTitleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"help_metatitle\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfLink\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 191
        echo getLang("MetaKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagekeywords\" name=\"pagekeywords\" class=\"Field400\" value=\"";
        // line 194
        echo twig_safe_filter((isset($context['PageKeywords']) ? $context['PageKeywords'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 195
        echo getLang("MetaKeywords");
        echo "', '";
        echo getLang("MetaKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfLink\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 201
        echo getLang("MetaDescription");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagedesc\" name=\"pagedesc\" class=\"Field400\" value=\"";
        // line 204
        echo twig_safe_filter((isset($context['PageDesc']) ? $context['PageDesc'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 205
        echo getLang("MetaDescription");
        echo "', '";
        echo getLang("MetaDescriptionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfLink\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 211
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagesearchkeywords\" name=\"pagesearchkeywords\" class=\"Field400\" value=\"";
        // line 214
        echo twig_safe_filter((isset($context['PageSearchKeywords']) ? $context['PageSearchKeywords'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('searchkeywords');\" onmouseover=\"ShowHelp('searchkeywords', '";
        // line 215
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"searchkeywords\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfLink PageContent\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 221
        echo getLang("TemplateLayoutFile");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"pagelayoutfile\" id=\"pagelayoutfile\" class=\"Field400\">
\t\t\t\t\t\t\t";
        // line 225
        echo twig_safe_filter((isset($context['LayoutFiles']) ? $context['LayoutFiles'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('templatelayout');\" onmouseover=\"ShowHelp('templatelayout', '";
        // line 227
        echo getLang("TemplateLayoutFile");
        echo "', '";
        echo getLang("PageTemplateLayoutFileHelp1");
        echo twig_safe_filter((isset($context['template']) ? $context['template'] : null));
        echo getLang("PageTemplateLayoutFileHelp2");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"templatelayout\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr class=\"HideIfLinkVendor\" style=\"";
        // line 231
        echo twig_safe_filter((isset($context['HideVendorSelect']) ? $context['HideVendorSelect'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 233
        echo getLang("DisplayAsHomePage");
        echo "?
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"pageishomepage\" name=\"pageishomepage\" value=\"ON\" ";
        // line 236
        echo twig_safe_filter((isset($context['IsHomePage']) ? $context['IsHomePage'] : null));
        echo "> <label for=\"pageishomepage\">";
        echo getLang("YesDisplayAsHomePage");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d11');\" onmouseover=\"ShowHelp('d11', '";
        // line 237
        echo getLang("DisplayAsHomePage");
        echo "', '";
        echo getLang("DisplayAsHomePageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d11\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 243
        echo getLang("PageCustomersOnly");
        echo "?
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"pagecustomersonly\" name=\"pagecustomersonly\" value=\"1\" ";
        // line 246
        echo twig_safe_filter((isset($context['IsCustomersOnly']) ? $context['IsCustomersOnly'] : null));
        echo "> <label for=\"pagecustomersonly\">";
        echo getLang("YesRestrictToCustomersOnly");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d14');\" onmouseover=\"ShowHelp('d14', '";
        // line 247
        echo getLang("PageCustomersOnly");
        echo "', '";
        echo getLang("PageCustomersOnlyHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d14\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 253
        echo getLang("SortOrder");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"pagesort\" name=\"pagesort\" class=\"Field\" size=\"5\" value=\"";
        // line 256
        echo twig_safe_filter((isset($context['PageSort']) ? $context['PageSort'] : null));
        echo "\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 257
        echo getLang("SortOrder");
        echo "', '";
        echo getLang("SortOrderHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t</div>
\t\t\t <div id=\"div1\" style=\"padding-top: 10px; display:none;\">
\t\t\t\t<p class=\"InfoTip\">";
        // line 264
        echo twig_safe_filter((isset($context['GoogleWebsiteOptimizerIntro']) ? $context['GoogleWebsiteOptimizerIntro'] : null));
        echo "</p>


\t\t\t\t<table width=\"100%\" class=\"Panel\" style=\"";
        // line 267
        echo twig_safe_filter((isset($context['ShowEnableGoogleWebsiteOptimzer']) ? $context['ShowEnableGoogleWebsiteOptimzer'] : null));
        echo "\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 269
        echo getLang("GoogleWebsiteOptimizer");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t";
        // line 273
        echo getLang("EnableGoogleWebsiteOptimizer");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input ";
        // line 276
        echo twig_safe_filter((isset($context['DisableOptimizerCheckbox']) ? $context['DisableOptimizerCheckbox'] : null));
        echo " type=\"checkbox\" name=\"pageEnableOptimizer\" id=\"pageEnableOptimizer\" ";
        echo twig_safe_filter((isset($context['CheckEnableOptimizer']) ? $context['CheckEnableOptimizer'] : null));
        echo " onclick = \"ToggleOptimizerConfigForm(";
        echo twig_safe_filter((isset($context['SkipOptimizerConfirmMsg']) ? $context['SkipOptimizerConfirmMsg'] : null));
        echo ");\" />
\t\t\t\t\t\t\t<label for=\"pageEnableOptimizer\">";
        // line 277
        echo getLang("YesEnableGoogleWebsiteOptimizer");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t";
        // line 281
        echo twig_safe_filter((isset($context['OptimizerConfigForm']) ? $context['OptimizerConfigForm'] : null));
        echo "
\t\t\t</div>

\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 288
        echo getLang("SaveAndExit");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"submit\" name=\"addAnother\" value=\"";
        // line 289
        echo twig_safe_filter((isset($context['SaveAndAddAnother']) ? $context['SaveAndAddAnother'] : null));
        echo "\" class=\"FormButton\" style=\"width:130px\" />
\t\t\t\t\t\t<input type=\"button\" name=\"CancelButton1\" value=\"";
        // line 290
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
\t\tparentOptions = new Array();
\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm(\"";
        // line 308
        echo getLang("ConfirmCancelPage");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewPages\";
\t\t}

\t\tfunction ToggleVendor(vendorId)
\t\t{
\t\t\tif(typeof(parentOptions[vendorId]) != 'undefined') {
\t\t\t\t\$('#pageparentid').find('option:gt(0)').remove();
\t\t\t\t\$('#pageparentid').append(parentOptions[vendorId]);
\t\t\t\treturn;
\t\t\t}
\t\t\t\$('#pageparentid').attr('disabled', true);
\t\t\t\$.ajax({
\t\t\t\turl: 'remote.php?w=getPageParentOptions',
\t\t\t\tdata: {
\t\t\t\t\tpageId: \$('#pageId').val(),
\t\t\t\t\tvendorId: vendorId,
\t\t\t\t\tparentId: \$('#pageparentid').val()
\t\t\t\t},
\t\t\t\tsuccess: function(data) {
\t\t\t\t\tparentOptions[vendorId] = data;
\t\t\t\t\t\$('#pageparentid').attr('disabled', false);
\t\t\t\t\t\$('#pageparentid').find('option:gt(0)').remove();
\t\t\t\t\t\$('#pageparentid').append(parentOptions[vendorId]);
\t\t\t\t}
\t\t\t});
\t\t}

\t\tfunction CheckPageForm()
\t\t{
\t\t\tvar pt0 = g(\"pagetype_0\");
\t\t\tvar pt1 = g(\"pagetype_1\");
\t\t\tvar pt2 = g(\"pagetype_2\");
\t\t\tvar pt3 = g(\"pagetype_3\");
\t\t\tvar pagetitle = g(\"pagetitle\");
\t\t\tvar pagelink = g(\"pagelink\");
\t\t\tvar pagefeed = g(\"pagefeed\");
\t\t\tvar pageemail = g(\"pageemail\");

\t\t\tif(pagetitle.value == \"\") {
\t\t\t\talert(\"";
        // line 348
        echo getLang("EnterPageTitle");
        echo "\");
\t\t\t\tpagetitle.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(pt1.checked) {
\t\t\t\tif(pagelink.value == \"\" || pagelink.value == \"http://\") {
\t\t\t\t\talert(\"";
        // line 355
        echo getLang("EnterPageLink");
        echo "\");
\t\t\t\t\tpagelink.focus();
\t\t\t\t\tpagelink.select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse if(pt2.checked) {
\t\t\t\tif(pagefeed.value == \"\" || pagefeed.value == \"http://\") {
\t\t\t\t\talert(\"";
        // line 363
        echo getLang("EnterPageFeed");
        echo "\");
\t\t\t\t\tpagefeed.focus();
\t\t\t\t\tpagefeed.select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse if(pt3.checked) {
\t\t\t\tif(IsWysiwygEditorEmpty(content.value)) {
\t\t\t\t\talert(\"";
        // line 371
        echo getLang("EnterPageContent");
        echo "\");
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(pageemail.value && pageemail.value.indexOf(\"@\") == -1 || pageemail.value.indexOf(\".\") == -1) {
\t\t\t\t\talert(\"";
        // line 376
        echo getLang("EnterPageEmail");
        echo "\");
\t\t\t\t\tpageemail.focus();
\t\t\t\t\tpageemail.select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\t//validate google optimzer form
\t\t\telse if (\$('#pageEnableOptimizer').attr('checked')) {
\t\t\t\tif(!Optimizer.ValidateConfigForm(ShowTab, 'optimizer')) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\t// Everything is OK
\t\t\treturn true;
\t\t}

\t\tfunction SwitchType(PageType)
\t\t{
\t\t\tif(PageType == 0) { // Content page
\t\t\t\t\$('.HideIfPage').hide();
\t\t\t\t\$('.HideIfNotPage').show();
\t\t\t\t\$('.HideIfLink').show();
\t\t\t\t\$('.HideIfNotLink').show();
\t\t\t\t\$('.HideIfRSS').hide();
\t\t\t\t\$('.HideIfContact').hide();
\t\t\t\t\$('#pagetype_0').attr('checked', 'true');
\t\t\t\tif (!";
        // line 403
        echo twig_safe_filter((isset($context['IsVendor']) ? $context['IsVendor'] : null));
        echo ") {
\t\t\t\t\t\$('.HideIfLinkVendor').show();
\t\t\t\t}
\t\t\t}
\t\t\telse if(PageType == 1) { // Link page
\t\t\t\t\$('.HideIfPage').show();
\t\t\t\t\$('.HideIfNotPage').hide();
\t\t\t\t\$('.HideIfLink').hide();
\t\t\t\t\$('.HideIfNotLink').hide();
\t\t\t\t\$('.HideIfRSS').hide();
\t\t\t\t\$('.HideIfContact').hide();
\t\t\t\t\$('.HideIfLinkVendor').hide();
\t\t\t\t\$('#pagetype_1').attr('checked', 'true');
\t\t\t}
\t\t\telse if(PageType == 2) { // RSS page
\t\t\t\t\$('.HideIfPage').hide();
\t\t\t\t\$('.HideIfNotPage').hide();
\t\t\t\t\$('.HideIfLink').show();
\t\t\t\t\$('.HideIfNotLink').show();
\t\t\t\t\$('.HideIfRSS').show();
\t\t\t\t\$('.HideIfContact').hide();
\t\t\t\tif (!";
        // line 424
        echo twig_safe_filter((isset($context['IsVendor']) ? $context['IsVendor'] : null));
        echo ") {
\t\t\t\t\t\$('.HideIfLinkVendor').show();
\t\t\t\t}
\t\t\t\t\$('#pagetype_2').attr('checked', 'true');
\t\t\t}
\t\t\telse if(PageType == 3) { // Contact page
\t\t\t\t\$('.HideIfPage').hide();
\t\t\t\t\$('.HideIfNotPage').hide();
\t\t\t\t\$('.HideIfLink').show();
\t\t\t\t\$('.HideIfNotLink').show();
\t\t\t\t\$('.HideIfRSS').hide();
\t\t\t\t\$('.HideIfContact').show();
\t\t\t\t\$('.PageContent').show();
\t\t\t\tif (!";
        // line 437
        echo twig_safe_filter((isset($context['IsVendor']) ? $context['IsVendor'] : null));
        echo ") {
\t\t\t\t\t\$('.HideIfLinkVendor').show();
\t\t\t\t}
\t\t\t\t\$('#pagetype_3').attr('checked', 'true');
\t\t\t}
\t\t}

\t\tfunction ShowTab(T) {
\t\t\ti = 0;
\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";

\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t\t}

\t\t\$(document).ready(function() {
\t\t\tShowTab('";
        // line 459
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "');
\t\t\t";
        // line 460
        echo twig_safe_filter((isset($context['SetupType']) ? $context['SetupType'] : null));
        echo "
\t\t});

\t</script>
";
    }

}

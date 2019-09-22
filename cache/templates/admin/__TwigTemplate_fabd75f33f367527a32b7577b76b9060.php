<?php

/* Snippets/ProductFields.html */
class __TwigTemplate_fabd75f33f367527a32b7577b76b9060 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"ConfigField\" id=\"productFieldTR_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\">
\t<td VALIGN=\"TOP\"  class=\"FieldLabel\">
\t\t<span style=\"margin-left:10px;\">
\t\t\t ";
        // line 4
        echo getLang("ConfigurableField");
        echo " #<span class=\"FieldNumber\">";
        echo twig_safe_filter((isset($context['ProductFieldNumber']) ? $context['ProductFieldNumber'] : null));
        echo "</span>:
\t\t</span>
\t</td>
\t<td>
\t\t<select name=\"productFieldType[";
        // line 8
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "]\" class=\"productFieldType Field80\" onchange=\"ToggleFieldFileType(this.value, ";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo ")\">
\t\t\t<option value=\"text\" ";
        // line 9
        echo twig_safe_filter((isset($context['ProductFieldTypeText']) ? $context['ProductFieldTypeText'] : null));
        echo ">";
        echo getLang("ShortText");
        echo "</option>
\t\t\t<option value=\"textarea\" ";
        // line 10
        echo twig_safe_filter((isset($context['ProductFieldTypeTextarea']) ? $context['ProductFieldTypeTextarea'] : null));
        echo ">";
        echo getLang("Textarea");
        echo "</option>
\t\t\t<option value=\"file\" ";
        // line 11
        echo twig_safe_filter((isset($context['ProductFieldTypeFile']) ? $context['ProductFieldTypeFile'] : null));
        echo ">";
        echo getLang("File");
        echo "</option>
\t\t\t<option value=\"checkbox\" ";
        // line 12
        echo twig_safe_filter((isset($context['ProductFieldTypeCheckbox']) ? $context['ProductFieldTypeCheckbox'] : null));
        echo ">";
        echo getLang("Checkbox");
        echo "</option>
\t\t\t<option value=\"select\" ";
        // line 13
        echo twig_safe_filter((isset($context['ProductFieldTypeSelect']) ? $context['ProductFieldTypeSelect'] : null));
        echo ">";
        echo getLang("SelectBox");
        echo "</option>
\t\t</select>
\t</td>
\t<td>
\t\t<input name=\"productFieldName[";
        // line 17
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "]\" value=\"";
        echo twig_safe_filter((isset($context['ProductFieldName']) ? $context['ProductFieldName'] : null));
        echo "\"  class=\"productFieldName Field100 ";
        echo twig_safe_filter((isset($context['FieldNameClass']) ? $context['FieldNameClass'] : null));
        echo "\" onfocus = \"HideFieldHelpText(this);\" onblur = \"ShowFieldHelpText(this, '";
        echo getLang("FieldName");
        echo "');\"/>
\t\t<input name=\"productFieldId[";
        // line 18
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "]\" value=\"";
        echo twig_safe_filter((isset($context['ProductFieldId']) ? $context['ProductFieldId'] : null));
        echo "\"  class=\"productFieldId\" type=\"hidden\" />
\t</td>
\t<td>
\t\t<input class=\"productFieldRequired\" name=\"productFieldRequired[";
        // line 21
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "]\" id=\"productFieldRequired_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\" type=\"checkbox\" style=\"margin-right:15px;\" ";
        echo twig_safe_filter((isset($context['ProductFieldRequired']) ? $context['ProductFieldRequired'] : null));
        echo " /><label for=\"productFieldRequired_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\">";
        echo getLang("Required");
        echo "?</label>
\t</td>
\t<td>
\t\t<div style=\"";
        // line 24
        echo twig_safe_filter((isset($context['HideFieldFileType']) ? $context['HideFieldFileType'] : null));
        echo "\" id=\"FileTypeContainer_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\">
\t\t\t<input name=\"productFieldFileType[";
        // line 25
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "]\" value=\"";
        echo twig_safe_filter((isset($context['ProductFieldFileType']) ? $context['ProductFieldFileType'] : null));
        echo "\" size=\"12\"  class=\"productFieldFileType Field80  ";
        echo twig_safe_filter((isset($context['FileTypeClass']) ? $context['FileTypeClass'] : null));
        echo "\"  onfocus = \"HideFieldHelpText(this);\" onblur = \"ShowFieldHelpText(this, '";
        echo getLang("FieldFileType");
        echo "');\" />
\t\t\t<img onmouseout=\"HideHelp('FileTypeHelp_";
        // line 26
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "');\" onmouseover=\"ShowHelp('FileTypeHelp_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "', '";
        echo getLang("FieldFileType");
        echo "', '";
        echo getLang("FieldFileTypeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t<div style=\"display:none\" id=\"FileTypeHelp_";
        // line 27
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\"></div>

\t\t\t<input name=\"productFieldFileSize[";
        // line 29
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "]\" value=\"";
        echo twig_safe_filter((isset($context['ProductFieldFileSize']) ? $context['ProductFieldFileSize'] : null));
        echo "\" size =\"4\"  class=\"productFieldFileSize Field50  ";
        echo twig_safe_filter((isset($context['FileSizeClass']) ? $context['FileSizeClass'] : null));
        echo "\"  onfocus = \"HideFieldHelpText(this);\"   onblur = \"ShowFieldHelpText(this, '";
        echo getLang("FieldFileSize");
        echo "');\" /> KB
\t\t\t<img onmouseout=\"HideHelp('FileSizeHelp_";
        // line 30
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "');\" onmouseover=\"ShowHelp('FileSizeHelp_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "', '";
        echo getLang("FieldFileSize");
        echo "', '";
        echo getLang("FieldFileSizeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t<div style=\"display:none\" id=\"FileSizeHelp_";
        // line 31
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\"></div>
\t\t</div>
\t\t<div style=\"";
        // line 33
        echo twig_safe_filter((isset($context['HideFieldSelectOptions']) ? $context['HideFieldSelectOptions'] : null));
        echo "\" id=\"SelectOptionsContainer_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\">
\t\t\t<input name=\"productFieldSelectOptions[";
        // line 34
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "]\" value=\"";
        echo twig_escape_filter($this->env, (isset($context['ProductFieldSelectOptions']) ? $context['ProductFieldSelectOptions'] : null), "1");
        echo "\" class=\"productFieldSelectOptions Field150  ";
        echo twig_safe_filter((isset($context['SelectOptionsClass']) ? $context['SelectOptionsClass'] : null));
        echo "\"  onfocus = \"HideFieldHelpText(this);\" onblur = \"ShowFieldHelpText(this, '";
        echo getLang("FieldSelectOptions");
        echo "');\" />
\t\t\t<img onmouseout=\"HideHelp('SelectOptionsHelp_";
        // line 35
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "');\" onmouseover=\"ShowHelp('SelectOptionsHelp_";
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "', '";
        echo getLang("FieldSelectOptions");
        echo "', '";
        echo getLang("FieldSelectOptionsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" style=\"margin-top: 5px;\" />
\t\t\t<div style=\"display:none\" id=\"SelectOptionsHelp_";
        // line 36
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo "\"></div>
\t\t</div>
\t</td>
\t<td align=\"left\"  style=\"width: 50px;\">
\t\t<a href=\"#\" onclick=\"return AddProductField(";
        // line 40
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo ");\"><img src=\"images/addicon.gif\" alt=\"Add\" border=\"0\"  /></a>
\t\t<a href=\"#\" onclick=\"return DelProductField(";
        // line 41
        echo twig_safe_filter((isset($context['ProductFieldKey']) ? $context['ProductFieldKey'] : null));
        echo ");\" style=\"display: ";
        echo twig_safe_filter((isset($context['HideProductFieldDelete']) ? $context['HideProductFieldDelete'] : null));
        echo ";\"><img src=\"images/delicon.gif\" alt=\"Del\" border=\"0\" /></a>
\t</td>
</tr>";
    }

}

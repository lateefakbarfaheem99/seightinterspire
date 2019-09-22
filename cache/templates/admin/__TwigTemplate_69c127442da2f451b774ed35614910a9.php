<?php

/* message.manage.row.tpl */
class __TwigTemplate_69c127442da2f451b774ed35614910a9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "

\t<tr id=\"tr";
        // line 3
        echo twig_safe_filter((isset($context['MessageId']) ? $context['MessageId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">

\t\t<td width=\"25\" align=\"center\"><input type=\"checkbox\" name=\"messages[]\" value=\"";
        // line 5
        echo twig_safe_filter((isset($context['MessageId']) ? $context['MessageId'] : null));
        echo "\"></td>

\t\t<td width=\"25\" align=\"center\">

\t\t\t<img src=\"images/message.gif\">

\t\t</td>

\t\t<td width=\"25\" align=\"center\">

\t\t\t<img src=\"images/messageflag.gif\" style=\"display:";
        // line 15
        echo twig_safe_filter((isset($context['HideFlag']) ? $context['HideFlag'] : null));
        echo "\">&nbsp;

\t\t</td>

\t\t<td>

\t\t\t<div style=\"margin-left:20px\">";
        // line 21
        echo twig_safe_filter((isset($context['Subject']) ? $context['Subject'] : null));
        echo "</div>

\t\t</td>

\t\t<td>

\t\t\t";
        // line 27
        echo twig_safe_filter((isset($context['OrderMessage']) ? $context['OrderMessage'] : null));
        echo "

\t\t</td>

\t\t<td>

\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['OrderFrom']) ? $context['OrderFrom'] : null));
        echo "

\t\t</td>

\t\t<td>

\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['MessageDate']) ? $context['MessageDate'] : null));
        echo "

\t\t</td>

\t\t<td nowrap>

\t\t\t";
        // line 45
        echo twig_safe_filter((isset($context['MessageStatus']) ? $context['MessageStatus'] : null));
        echo "

\t\t</td>

\t\t<td>

\t\t\t<a title=\"";
        // line 51
        echo getLang("EditMessage");
        echo "\" href=\"";
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=editOrderMessage&amp;orderId=";
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "&amp;messageId=";
        echo twig_safe_filter((isset($context['MessageId']) ? $context['MessageId'] : null));
        echo "\">";
        echo getLang("Edit");
        echo "</a>&nbsp;&nbsp;&nbsp;

\t\t\t<a title=\"";
        // line 53
        echo getLang("FlagMessage");
        echo "\" href=\"";
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=flagOrderMessage&amp;flagState=";
        echo twig_safe_filter((isset($context['FlagState']) ? $context['FlagState'] : null));
        echo "&amp;orderId=";
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "&amp;messageId=";
        echo twig_safe_filter((isset($context['MessageId']) ? $context['MessageId'] : null));
        echo "\">";
        echo twig_safe_filter((isset($context['FlagText']) ? $context['FlagText'] : null));
        echo "</a>

\t\t</td>

\t</tr>

";
    }

}

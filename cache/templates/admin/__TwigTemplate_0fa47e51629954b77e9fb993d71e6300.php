<?php

/* order.manage.row.tpl */
class __TwigTemplate_0fa47e51629954b77e9fb993d71e6300 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<li class=\"orderManageRow ";
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "deleted", array(), "any")) {
            echo "orderManageRowDeleted";
        }
        echo "\">
<a href=\"";
        // line 2
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=viewSingleOrder&amp;o=";
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "\" target=\"_self\">
    <span class=\"orderId\">";
        // line 3
        echo getLang("Order");
        echo " #";
        echo twig_safe_filter((isset($context['OrderId']) ? $context['OrderId'] : null));
        echo "</span> <div style=\"display:";
        echo twig_safe_filter((isset($context['HideMessages']) ? $context['HideMessages'] : null));
        echo "\" class=\"newIcon\">";
        echo twig_safe_filter((isset($context['NumMessages']) ? $context['NumMessages'] : null));
        echo "</div>
    <div class=\"orderStatus\" style=\"width:150px; font-size:13px; background-color:";
        // line 4
        echo twig_safe_filter((isset($context['StatusCol']) ? $context['StatusCol'] : null));
        echo "\">
\t    ";
        // line 5
        echo twig_safe_filter((isset($context['OrderStatusText']) ? $context['OrderStatusText'] : null));
        echo "
    </div>
    <div style=\"font-size:11px; color:gray; font-weight:normal\">
\t";
        // line 8
        echo getLang("OrderedOn");
        echo " ";
        echo twig_safe_filter((isset($context['Date']) ? $context['Date'] : null));
        echo "<br />
\t";
        // line 9
        echo getLang("ByWord");
        echo " ";
        echo twig_safe_filter((isset($context['Customer']) ? $context['Customer'] : null));
        echo "<br />
\t";
        // line 10
        echo getLang("TotalIs");
        echo " ";
        echo twig_safe_filter((isset($context['Total']) ? $context['Total'] : null));
        echo "
    </div>
</a>
</li>
";
    }

}

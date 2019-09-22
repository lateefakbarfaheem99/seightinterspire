<?php

/* orders.manage.tpl */
class __TwigTemplate_38bb7cb35555c2d83edbc1b6df9d8b0e extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['forms'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"Styles/orders.css\" media=\"all\" />

\t<div class=\"BodyContainer\">

\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">
\t\t\t\t";
        // line 10
        echo getLang("View");
        echo ": <a href=\"#\" style=\"color:#005FA3\" id=\"ViewsMenuButton\" class=\"PopDownMenu\">";
        echo twig_safe_filter((isset($context['ViewName']) ? $context['ViewName'] : null));
        echo " <img width=\"8\" height=\"5\" src=\"images/arrow_blue.gif\" border=\"0\" /></a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 15
        echo twig_safe_filter((isset($context['OrderIntro']) ? $context['OrderIntro'] : null));
        echo "</p>
\t\t\t<div id=\"OrdersStatus\">
\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</div>
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t";
        // line 22
        echo twig_safe_filter((isset($context['AddOrderButton']) ? $context['AddOrderButton'] : null));
        echo "
\t\t\t\t&nbsp;
\t\t\t\t";
        // line 24
        if ((isset($context['disableOrderExports']) ? $context['disableOrderExports'] : null)) {
            echo "\t\t\t\t\t<input type=\"button\" value=\"";
            // line 25
            echo getLang("ExportTheseOrders");
            echo "\" disabled=\"disabled\" class=\"SmallButton PopDownMenu\" style=\"width:140px;\" /><br />
\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t<input type=\"button\" value=\"";
            // line 27
            echo getLang("ExportTheseOrders");
            echo "\" id=\"OrderExportMenuButton\" class=\"SmallButton PopDownMenu\" style=\"width:140px;\" /><br />
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t<br />
\t\t\t\t<div style=\"display: ";
        // line 30
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t\t\t<select id=\"OrderActionSelect\" name=\"OrderActionSelect\" class=\"Field200\">
\t\t\t\t\t\t";
        // line 32
        echo twig_safe_filter((isset($context['OrderActionOptions']) ? $context['OrderActionOptions'] : null));
        echo "
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"button\" id=\"OrderActionButton\" name=\"OrderActionButton\" value=\"";
        // line 34
        echo getLang("OrderActionButton");
        echo "\" class=\"FormButton\" style=\"width:40px;\" onclick=\"HandleOrderAction()\" />
\t\t\t\t</div>
\t\t\t</td>
\t\t\t<td class=\"SmallSearch\" align=\"right\">
\t\t\t\t<form name=\"frmOrders\" id=\"frmOrders\" action=\"index.php\" method=\"get\">
\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "hiddenInputs", array((array("ToDo" => "viewOrders")) + ((isset($context['searchURL']) ? $context['searchURL'] : null)), array(0 => "searchQuery"), ), "method"), "1");
        echo "
\t\t\t\t\t<table id=\"Table16\" style=\"display:";
        // line 40
        echo twig_safe_filter((isset($context['DisplaySearch']) ? $context['DisplaySearch'] : null));
        echo "\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text\" nowrap align=\"right\">
\t\t\t\t\t\t\t\t<input name=\"searchQuery\" id=\"searchQuery\" type=\"text\" value=\"";
        // line 43
        echo twig_safe_filter((isset($context['QueryEscaped']) ? $context['QueryEscaped'] : null));
        echo "\" id=\"SearchQuery\" class=\"SearchBox\" style=\"width:150px\" />&nbsp;
\t\t\t\t\t\t\t\t<input type=\"image\" name=\"SearchButton\" id=\"SearchButton\" src=\"images/searchicon.gif\" border=\"0\"  style=\"padding-left: 10px; vertical-align: top;\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td nowrap>
\t\t\t\t\t\t\t\t<a href=\"index.php?ToDo=searchOrders\">";
        // line 49
        echo getLang("AdvancedSearch");
        echo "</a>
\t\t\t\t\t\t\t\t<span style=\"display:";
        // line 50
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\">| <a id=\"SearchClearButton\" href=\"index.php?ToDo=viewOrders\">";
        echo getLang("ClearResults");
        echo "</a></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td style=\"display: ";
        // line 61
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmOrders1\" id=\"frmOrders1\" method=\"post\" action=\"index.php?ToDo=deleteOrders\">
\t\t\t\t<div class=\"GridContainer\" id=\"GridContainer\">
\t\t\t\t\t";
        // line 64
        echo twig_safe_filter((isset($context['OrderDataGrid']) ? $context['OrderDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>
\t\t<div id=\"ViewsMenu\" class=\"DropDownMenu DropShadow\" style=\"display: none; width:200px\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 72
        echo twig_safe_filter((isset($context['CustomSearchOptions']) ? $context['CustomSearchOptions'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t\t<hr />
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"index.php?ToDo=createOrderView\" style=\"background-image:url('images/view_add.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        // line 76
        echo getLang("CreateANewView");
        echo "</a></li>
\t\t\t\t\t<li style=\"display:";
        // line 77
        echo twig_safe_filter((isset($context['HideDeleteViewLink']) ? $context['HideDeleteViewLink'] : null));
        echo "\"><a onclick=\"\$('#ViewsMenu').hide(); confirm_delete_custom_search('";
        echo twig_safe_filter((isset($context['CustomSearchId']) ? $context['CustomSearchId'] : null));
        echo "')\" href=\"javascript:void(0)\" style=\"background-image:url('images/view_del.gif'); background-repeat:no-repeat; background-position:5px 5px; padding-left:28px\">";
        echo getLang("DeleteThisView");
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 85
        if ((!(isset($context['disableOrderExports']) ? $context['disableOrderExports'] : null))) {
            echo "\t\t";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "dropDownMenu", array(array("id" => "OrderExportMenu", "groups" => (isset($context['orderExportMenu']) ? $context['orderExportMenu'] : null)), ), "method"), "1");
            // line 89
            echo "
\t";
        }
        // line 90
        echo "
\t<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[

\t\tconfig.DeletedOrdersAction = \"";
        // line 94
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "DeletedOrdersAction", array(), "any"));
        echo "\";

\t\tvar tok = \"";
        // line 96
        echo twig_safe_filter((isset($context['AuthToken']) ? $context['AuthToken'] : null));
        echo "\";

\t\tvar delete_orders_choose_message = \"";
        // line 98
        echo getLang("ChooseOrder");
        echo "\";
\t\tvar print_orders_choose_message = \"";
        // line 99
        echo getLang("ChooseOrderInvoice");
        echo "\";
\t\tvar confirm_delete_orders_message = \"";
        // line 100
        echo getLang("ConfirmDeleteOrders");
        echo "\";
\t\tvar order_status_update_success_message = \"";
        // line 101
        echo getLang("OrderStatusUpdated");
        echo "\";
\t\tvar failed_order_status_update_message = \"";
        // line 102
        echo getLang("OrderStatusUpdateFailed");
        echo "\";
\t\tvar confirm_update_order_status_message = \"";
        // line 103
        echo getLang("ConfirmUpdateOrderStatus");
        echo "\";
\t\tvar trackingno_update_success_message = \"";
        // line 104
        echo getLang("TrackingNoUpdated");
        echo "\";
\t\tvar trackingno_update_failed_message = \"";
        // line 105
        echo getLang("TrackingNoUpdateFailed");
        echo "\";
\t\tvar delete_custom_search_message = \"";
        // line 106
        echo getLang("ConfirmDeleteCustomSearch");
        echo "\";
\t\tvar update_order_status_choose_message = \"";
        // line 107
        echo getLang("ChooseOrderUpdateStatus");
        echo "\";
\t\tvar choose_action_option = \"";
        // line 108
        echo getLang("ChooseActionFirst");
        echo "\";

\t\t";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "jslang", array(array(0 => "ChooseOneMoreItemsToShip", 1 => "ProblemCreatingShipment", 2 => "SavingNotes", 3 => "ConfirmDelayCapture", 4 => "ConfirmRefund", 5 => "ConfirmVoid", 6 => "SelectRefundType", 7 => "EnterRefundAmount", 8 => "InvalidRefundAmountFormat", 9 => "ConfirmSendTrackingNumber", 10 => "TrackingLinkEmailed", 11 => "ShipOrderMultipleAddressInstructions", 12 => "ConfirmDeleteOrders", 13 => "ConfirmRestorableDeleteOrders", 14 => "ChooseOrderUndelete", 15 => "ChooseOrderPurge", 16 => "ConfirmUndeleteOrders", 17 => "OrderDeletedGeneralNotice"), ), "method"), "1");
        // line 129
        echo "

\t\t\$(document).ready(function() {
\t\t\t";
        // line 132
        echo twig_safe_filter((isset($context['SelectOrder']) ? $context['SelectOrder'] : null));
        echo "
\t\t});

\t\t";
        // line 135
        if ((isset($context['disableOrderExports']) ? $context['disableOrderExports'] : null)) {
            echo "\t\tvar ExportAction = \"";
            // line 136
            echo twig_safe_filter((isset($context['ExportAction']) ? $context['ExportAction'] : null));
            echo "\";
\t\t";
        }
        // line 137
        echo "\t//]]></script>
\t<script type=\"text/javascript\" src=\"script/order.js?";
        // line 139
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>

";
        // line 141
        if ((!(isset($context['disableOrderExports']) ? $context['disableOrderExports'] : null))) {
            echo "\t";
            // line 142
            $this->env->loadTemplate("emailintegration.export.javascript.tpl")->display($context);
        }
    }

}

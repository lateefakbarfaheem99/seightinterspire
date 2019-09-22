<?php

/* orders.search.tpl */
class __TwigTemplate_4d72273c9cee595ee6ad2b6b20935cb2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form enctype=\"multipart/form-data\" action=\"index.php\" id=\"frmSearch\" method=\"get\" onsubmit=\"return ValidateForm(CheckSearchForm)\">
\t<input type=\"hidden\" name=\"ToDo\" value=\"searchOrdersRedirect\" />
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t  <tr>
\t\t<td class=\"Heading1\" id=\"tdHeading\">";
        // line 7
        echo getLang("SearchOrders");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("SearchOrdersIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 13
        echo getLang("Search");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\"></p>
\t\t</td>
\t  </tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 20
        echo getLang("AdvancedSearch");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 24
        echo getLang("SearchKeywords");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"searchQuery\" name=\"searchQuery\" class=\"Field250\">
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 28
        echo getLang("SearchKeywords");
        echo "', '";
        echo getLang("SearchKeywordsOrderHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 34
        echo getLang("OrderStatus1");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"orderStatus\" name=\"orderStatus\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 38
        echo getLang("ChooseAnOrderStatus");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['OrderStatusOptions']) ? $context['OrderStatusOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 45
        echo getLang("PaymentMethod");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"paymentMethod\" name=\"paymentMethod\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 49
        echo getLang("ChooseAPaymentMethod");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['OrderPaymentOptions']) ? $context['OrderPaymentOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 54
        if ((isset($context['OrderTypeOptions']) ? $context['OrderTypeOptions'] : null)) {
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
            // line 57
            echo getLang("OrderType");
            echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"ebayOrderId\" name=\"ebayOrderId\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 61
            echo getLang("ChooseAnOrderType");
            echo "</option>
\t\t\t\t\t\t\t";
            // line 62
            echo twig_safe_filter((isset($context['OrderTypeOptions']) ? $context['OrderTypeOptions'] : null));
            echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 69
        echo getLang("ShippingMethod");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"shippingMethod\" name=\"shippingMethod\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 73
        echo getLang("ChooseAShippingMethod");
        echo "</option>
\t\t\t\t\t\t\t";
        // line 74
        echo twig_safe_filter((isset($context['OrderShippingOptions']) ? $context['OrderShippingOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 80
        echo getLang("CouponCode");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"couponCode\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('couponcode');\" onmouseover=\"ShowHelp('couponcode', '";
        // line 84
        echo getLang("CouponCode");
        echo "', '";
        echo getLang("OrderCouponCodeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"couponcode\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 90
        echo getLang("PreOrders");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"preorders[]\" value=\"0\" id=\"preorders_0\" checked=\"checked\" /> <label for=\"preorders_0\">";
        // line 93
        echo getLang("Includeordersthatdonotcontainpreorderproducts");
        echo "</label><br />
\t\t\t\t\t\t<input type=\"checkbox\" name=\"preorders[]\" value=\"1\" id=\"preorders_1\" checked=\"checked\" /> <label for=\"preorders_1\">";
        // line 94
        echo getLang("Includeordersthatcontainpreorderproducts");
        echo "</label><br />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 97
        if ($this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "DeletedOrdersAction", array(), "any") == "delete") {
            echo "\t\t\t\t  <tr>
\t\t\t\t\t  <td class=\"FieldLabel\">
\t\t\t\t\t\t  &nbsp;&nbsp;&nbsp;";
            // line 100
            echo getLang("DeletedOrders");
            echo ":
\t\t\t\t\t  </td>
\t\t\t\t\t  <td>
\t\t\t\t\t\t  <label><input name=\"searchDeletedOrders\" value=\"no\" type=\"radio\" checked=\"checked\" />";
            // line 103
            echo getLang("SearchDeletedOrders_No");
            echo "</label><br />
\t\t\t\t\t\t  <label><input name=\"searchDeletedOrders\" value=\"both\" type=\"radio\" />";
            // line 104
            echo getLang("SearchDeletedOrders_Both");
            echo "</label><br />
\t\t\t\t\t\t  <label><input name=\"searchDeletedOrders\" value=\"only\" type=\"radio\" />";
            // line 105
            echo getLang("SearchDeletedOrders_Only");
            echo "</label>
\t\t\t\t\t  </td>
\t\t\t\t  </tr>
\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 117
        echo getLang("SearchByRange");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 121
        echo getLang("OrderID");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 124
        echo getLang("SearchFrom");
        echo " &nbsp;&nbsp;<input type=\"text\" id=\"orderFrom\" name=\"orderFrom\" class=\"Field50\"> ";
        echo getLang("SearchTo");
        echo "\t\t\t\t\t\t&nbsp;&nbsp;<input type=\"text\" id=\"orderTo\" name=\"orderTo\" class=\"Field50\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 130
        echo getLang("OrderTotal");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 133
        echo getLang("SearchFrom");
        echo " ";
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo "<input type=\"text\" id=\"totalFrom\" name=\"totalFrom\" class=\"Field50\"> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo " ";
        echo getLang("SearchTo");
        echo "\t\t\t\t\t\t";
        // line 134
        echo twig_safe_filter((isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null));
        echo "<input type=\"text\" id=\"totalTo\" name=\"totalTo\" class=\"Field50\"> ";
        echo twig_safe_filter((isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 145
        echo getLang("SearchByDate");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 150
        echo getLang("DateRange");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"dateRange\" id=\"dateRange\" onchange=\"ToggleRange()\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 154
        echo getLang("ChooseOrderDate");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"today\">";
        // line 155
        echo getLang("Today");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"yesterday\">";
        // line 156
        echo getLang("Yesterday");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"day\">";
        // line 157
        echo getLang("Last24Hours");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"week\">";
        // line 158
        echo getLang("Last7Days");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"month\">";
        // line 159
        echo getLang("Last30Days");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"this_month\">";
        // line 160
        echo getLang("ThisMonth");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"this_year\">";
        // line 161
        echo getLang("ThisYear");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custom\">";
        // line 162
        echo getLang("CustomPeriod");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div id=\"dateRangeCustom\" style=\"margin-left: 30px; margin-top: 10px;\">
\t\t\t\t\t\t\t";
        // line 165
        echo getLang("SearchFrom");
        echo " <input class=\"plain\" name=\"fromDate\" id=\"dc1\" size=\"12\" onfocus=\"this.blur()\" readonly><a href=\"javascript:void(0)\" onclick=\"if(self.gfPop)gfPop.fStartPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/calbtn.gif\" width=\"34\" height=\"22\" border=\"0\" alt=\"\"></a>
\t\t\t\t\t\t\t";
        // line 166
        echo getLang("SearchTo");
        echo " <input class=\"plain\" name=\"toDate\" id=\"dc2\" size=\"12\" onfocus=\"this.blur()\" readonly><a href=\"javascript:void(0)\" onclick=\"if(self.gfPop)gfPop.fEndPop(document.getElementById('dc1'),document.getElementById('dc2'));return false;\" HIDEFOCUS><img name=\"popcal\" align=\"absmiddle\" src=\"images/calbtn.gif\" width=\"34\" height=\"22\" border=\"0\" alt=\"\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 172
        echo getLang("SearchByDateType");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label><input name=\"SearchByDate\" value=\"0\" type=\"radio\" checked=\"checked\" />";
        // line 175
        echo getLang("SearchByOrderDate");
        echo "</label><br />
\t\t\t\t\t\t<label><input name=\"SearchByDate\" value=\"1\" type=\"radio\" />";
        // line 176
        echo getLang("SearchByEventDate");
        echo "</label><br />
\t\t\t\t\t\t<label><input name=\"SearchByDate\" value=\"2\" type=\"radio\" />";
        // line 177
        echo getLang("SearchByOrderAndEventDate");
        echo "</label>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=2>";
        // line 188
        echo getLang("SortOrder");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\"></td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 193
        echo getLang("SortOrder");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"sortField\" class=\"Field120\">
\t\t\t\t\t\t\t<option value=\"orderid\">";
        // line 197
        echo getLang("OrderId");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"custname\">";
        // line 198
        echo getLang("Customer");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"orddate\">";
        // line 199
        echo getLang("Date");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ordstats\">";
        // line 200
        echo getLang("Status");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"newmessages\">";
        // line 201
        echo getLang("NewMessages");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"total_inc_tax\">";
        // line 202
        echo getLang("Total");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\tin&nbsp;
\t\t\t\t\t\t<select name=\"sortOrder\" class=\"Field110\">
\t\t\t\t\t\t<option value=\"asc\">";
        // line 206
        echo getLang("AscendingOrder");
        echo "</option>
\t\t\t\t\t\t<option value=\"desc\">";
        // line 207
        echo getLang("DescendingOrder");
        echo "</option>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Gap\">&nbsp;</td>
\t\t\t\t\t<td class=\"Gap\"><input type=\"submit\" name=\"SubmitButton1\" value=\"";
        // line 212
        echo getLang("Search");
        echo "\" class=\"FormButton\">&nbsp; <input type=\"button\" name=\"CancelButton1\" value=\"";
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td class=\"Gap\" colspan=\"2\"></td></tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t</table>
\t<iframe width=132 height=142 name=\"gToday:contrast:agenda.js\" id=\"gToday:contrast:agenda.js\" src=\"calendar/ipopeng.htm\" scrolling=\"no\" frameborder=\"0\" style=\"visibility:visible; z-index:999; position:absolute; left:-500px; top:0px;\"></iframe>
\t</div>
\t</form>

\t<script type=\"text/javascript\">

\t\tfunction ToggleRange()
\t\t{
\t\t\tvar range = document.getElementById('dateRange');
\t\t\tif(range.options[range.selectedIndex].value == \"custom\")
\t\t\t{
\t\t\t\tdocument.getElementById('dateRangeCustom').style.display = '';
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tdocument.getElementById('dateRangeCustom').style.display = 'none';
\t\t\t}
\t\t}

\t\tToggleRange();

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm(\"";
        // line 242
        echo getLang("ConfirmCancelSearch");
        echo "\"))
\t\t\t\tdocument.location.href = \"index.php?ToDo=viewOrders\";
\t\t}

\t\tfunction CheckSearchForm() {
\t\t\tvar orderFrom = document.getElementById(\"orderFrom\");
\t\t\tvar orderTo = document.getElementById(\"orderTo\");
\t\t\tvar totalFrom = document.getElementById(\"totalFrom\");
\t\t\tvar totalTo = document.getElementById(\"totalTo\");
\t\t\tvar fromDate = document.getElementById(\"dc1\");
\t\t\tvar toDate = document.getElementById(\"dc2\");

\t\t\tif(orderFrom.value != \"\" && isNaN(orderFrom.value)) {
\t\t\t\talert(\"";
        // line 255
        echo getLang("SearchEnterValidOrderId");
        echo "\");
\t\t\t\torderFrom.focus();
\t\t\t\torderFrom.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(orderTo.value != \"\" && isNaN(orderTo.value)) {
\t\t\t\talert(\"";
        // line 262
        echo getLang("SearchEnterValidOrderId");
        echo "\");
\t\t\t\torderTo.focus();
\t\t\t\torderTo.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(totalFrom.value != \"\" && isNaN(priceFormat(totalFrom.value))) {
\t\t\t\talert(\"";
        // line 269
        echo getLang("SearchEnterValidTotal");
        echo "\");
\t\t\t\ttotalFrom.focus();
\t\t\t\ttotalFrom.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(totalTo.value != \"\" && isNaN(priceFormat(totalTo.value))) {
\t\t\t\talert(\"";
        // line 276
        echo getLang("SearchEnterValidTotal");
        echo "\");
\t\t\t\ttotalTo.focus();
\t\t\t\ttotalTo.select();
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(fromDate.value != \"\" && fromDate.value == toDate.value) {
\t\t\t\talert(\"";
        // line 283
        echo getLang("SearchChooseDifferentDates");
        echo "\");
\t\t\t\treturn false;
\t\t\t}

\t\t\treturn true;
\t\t}

\t</script>
";
    }

}

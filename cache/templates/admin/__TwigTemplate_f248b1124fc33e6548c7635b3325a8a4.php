<?php

/* stats.overview.tpl */
class __TwigTemplate_f248b1124fc33e6548c7635b3325a8a4 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<form action=\"index.php?ToDo=viewStats\" name=\"frmStats\" id=\"frmStats\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 7
        echo getLang("StoreOverview");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 11
        echo getLang("StoreOverviewIntro");
        echo "</p>
\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 18
        echo getLang("StoreSnapshot");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 19
        echo getLang("Top20Customers");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab2\" onclick=\"ShowTab(2)\">";
        // line 20
        echo getLang("BestSellingProducts");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab3\" onclick=\"ShowTab(3)\">";
        // line 21
        echo getLang("OrderLocations");
        echo "</a></li>
\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<br />
\t\t\t<div id=\"introText\" style=\"padding:0px 0px 5px 10px\" class=\"Text\"></div>
\t\t\t<div style=\"padding:5px 0px 5px 10px\" class=\"Text\">
\t\t\t\t<form name=\"customDateForm\" method=\"post\" action=\"index.php?Page=stats&Action=ProcessCalendar&SubAction=List&NextAction=ViewSummary&list=11\" style=\"margin: 0px;\">
\t\t\t\t\t<table border=0 cellspacing=0 cellpadding=0>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t\t<img src=\"images/dateicon.gif\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"background: #eee;\">Date Range:</td>
\t\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\" width=\"1\">
\t\t\t\t\t\t\t\t<select name=\"Calendar[DateType]\" id=\"Calendar\" class=\"CalendarSelect\" onchange=\"doCustomDate(this, 7)\">
\t\t\t\t\t\t\t\t\t<option value=\"Today\">";
        // line 39
        echo getLang("Today");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"Yesterday\">";
        // line 40
        echo getLang("Yesterday");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"Last24Hours\">";
        // line 41
        echo getLang("Last24Hours");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"Last7Days\">";
        // line 42
        echo getLang("Last7Days");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"Last30Days\">";
        // line 43
        echo getLang("Last30Days");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"ThisMonth\">";
        // line 44
        echo getLang("ThisMonth");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"LastMonth\">";
        // line 45
        echo getLang("LastMonth");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"AllTime\" SELECTED>";
        // line 46
        echo getLang("AllTime");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"Custom\">";
        // line 47
        echo getLang("Custom");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"background: #eee;\">
\t\t\t\t\t\t\t\t<span id=customDate7 style=\"display:none\">&nbsp;
\t\t\t\t\t\t\t\t<select name=\"Calendar[From][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t\t";
        // line 53
        echo twig_safe_filter((isset($context['OverviewFromDays']) ? $context['OverviewFromDays'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<select name=\"Calendar[From][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t\t";
        // line 56
        echo twig_safe_filter((isset($context['OverviewFromMonths']) ? $context['OverviewFromMonths'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<select name=\"Calendar[From][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t\t";
        // line 59
        echo twig_safe_filter((isset($context['OverviewFromYears']) ? $context['OverviewFromYears'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<span class=body>";
        // line 61
        echo getLang("To1");
        echo "</span>
\t\t\t\t\t\t\t\t<select name=\"Calendar[To][Day]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t\t";
        // line 63
        echo twig_safe_filter((isset($context['OverviewToDays']) ? $context['OverviewToDays'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<select name=\"Calendar[To][Mth]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_safe_filter((isset($context['OverviewToMonths']) ? $context['OverviewToMonths'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<select name=\"Calendar[To][Yr]\" class=\"CalendarSelectSmall\" style=\"margin-bottom:3px\">
\t\t\t\t\t\t\t\t\t";
        // line 69
        echo twig_safe_filter((isset($context['OverviewToYears']) ? $context['OverviewToYears'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</span>&nbsp;
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td style=\"background: #eee; padding: 3px 5px;\"><input type=\"submit\" value=\"Go\" class=\"Text\" /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div id=\"div0\" style=\"padding-top:10px\">
\t\t\t\t<table width=\"100%\" border=\"0\" class=\"text\" style=\"padding-left:10px\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td valign=top width=\"250\" nowrap>
\t\t\t\t\t\t\t<div class=\"MidHeading\" style=\"width:100%\"><img src=\"images/order.gif\" align=\"absMiddle\">&nbsp;Order Summary</div>
\t\t\t\t\t\t\t<ul class=\"Text\">
\t\t\t\t\t\t\t\t<li>";
        // line 84
        echo getLang("TotalRevenue");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewOrderTotal']) ? $context['OverviewOrderTotal'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 85
        echo getLang("UniqueVisitors");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewUniqueVisitors']) ? $context['OverviewUniqueVisitors'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 86
        echo getLang("CompletedOrders");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewOrderCount']) ? $context['OverviewOrderCount'] : null));
        echo "</li>
\t\t\t\t\t\t\t\t<li>";
        // line 87
        echo getLang("ConversionRate");
        echo ": ";
        echo twig_safe_filter((isset($context['OverviewConversionRate']) ? $context['OverviewConversionRate'] : null));
        echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td width=\"100%\" align=\"center\">
\t\t\t\t\t\t\t<strong>";
        // line 91
        echo twig_safe_filter((isset($context['ChartTitle']) ? $context['ChartTitle'] : null));
        echo " <span style=\"display:";
        echo twig_safe_filter((isset($context['HideNoAdvancedStatsMessage']) ? $context['HideNoAdvancedStatsMessage'] : null));
        echo "; color:#CACACA\"><br />(";
        echo getLang("NoOrderData2Days");
        echo ")</span></strong>
\t\t\t\t\t\t\t<div id=\"flashcontent\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"includes/amcharts/swfobject.js?";
        // line 95
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\tvar so = new SWFObject(\"";
        // line 98
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/amline/amline.swf\", \"amline\", \"98%\", \"430\", \"8\", \"#FFFFFF\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"path\", \"";
        // line 99
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"wmode\", \"transparent\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"settings_file\", escape(\"";
        // line 101
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/overviewgeneral.xml\"));
\t\t\t\t\t\t\t\t\tso.addVariable(\"data_file\", escape(\"";
        // line 102
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=overviewStatsData&from=";
        echo twig_safe_filter((isset($context['OverviewFromStamp']) ? $context['OverviewFromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['OverviewToStamp']) ? $context['OverviewToStamp'] : null));
        echo "\"));
\t\t\t\t\t\t\t\t\tso.addVariable(\"preloader_color\", \"#000000\");
\t\t\t\t\t\t\t\t\tso.write(\"flashcontent\");
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top:10px; padding-left:10px\">
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" class=\"text\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"40%\" valign=\"top\">
\t\t\t\t\t\t\t";
        // line 115
        echo twig_safe_filter((isset($context['TopCustomersGrid']) ? $context['TopCustomersGrid'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td width=\"60%\" valign=\"top\">

\t\t\t\t\t\t\t<div id=\"flashcontent1\" style=\"width: 100%; border: solid 0px black; display:";
        // line 119
        echo twig_safe_filter((isset($context['HideTop20CustomersChart']) ? $context['HideTop20CustomersChart'] : null));
        echo "\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"includes/amcharts/swfobject.js?";
        // line 122
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\tvar so = new SWFObject(\"";
        // line 125
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/ampie.swf\", \"ampie\", \"100%\", \"400\", \"8\", \"#FFFFFF\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"path\", \"";
        // line 126
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"settings_file\", escape(\"";
        // line 127
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/top20customers.xml\"))
\t\t\t\t\t\t\t\t\tso.addVariable(\"data_file\", escape(\"";
        // line 128
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=overviewStatsTop20CustData&from=";
        echo twig_safe_filter((isset($context['OverviewFromStamp']) ? $context['OverviewFromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['OverviewToStamp']) ? $context['OverviewToStamp'] : null));
        echo "\"));
\t\t\t\t\t\t\t\t\tso.addVariable(\"preloader_color\", \"#999999\");
\t\t\t\t\t\t\t\t\tso.write(\"flashcontent1\");
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div2\" style=\"padding-top:10px; padidng-left:10px\">
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" class=\"text\" style=\"padding-left:10px\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"40%\" valign=\"top\">
\t\t\t\t\t\t\t";
        // line 141
        echo twig_safe_filter((isset($context['TopProductsGrid']) ? $context['TopProductsGrid'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td width=\"60%\" valign=\"top\">

\t\t\t\t\t\t\t<div id=\"flashcontent2\" style=\"width: 100%; border: solid 0px black; display:";
        // line 145
        echo twig_safe_filter((isset($context['HideTop20ProductsChart']) ? $context['HideTop20ProductsChart'] : null));
        echo "\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t//<![CDATA[
\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\tvar so = new SWFObject(\"";
        // line 151
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/ampie.swf\", \"ampie\", \"100%\", \"400\", \"8\", \"#FFFFFF\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"path\", \"";
        // line 152
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/\");
\t\t\t\t\t\t\t\t\tso.addVariable(\"settings_file\", escape(\"";
        // line 153
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/includes/amcharts/top20products.xml\"))
\t\t\t\t\t\t\t\t\tso.addVariable(\"data_file\", escape(\"";
        // line 154
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=overviewStatsTop20Prods&from=";
        echo twig_safe_filter((isset($context['OverviewFromStamp']) ? $context['OverviewFromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['OverviewToStamp']) ? $context['OverviewToStamp'] : null));
        echo "\"));
\t\t\t\t\t\t\t\t\tso.addVariable(\"preloader_color\", \"#999999\");
\t\t\t\t\t\t\t\t\tso.write(\"flashcontent2\");
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t//]]>
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div3\" style=\"padding-top:10px; padding-left:10px\">
\t\t\t\t<iframe id=\"orderMap\" style=\"width:100%; height:600px; border:0px\" frameborder=\"none\"></iframe>
\t\t\t</div>
\t\t\t</form>
\t\t</td>
\t</tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\tfunction ShowTab(T) {

\t\ti = 0;

\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\tdocument.getElementById(\"currentTab\").value = T;

\t\t// What should the intro text be?
\t\tswitch(T) {
\t\t\tcase 0: {
\t\t\t\t\$('#introText').html('";
        // line 193
        echo twig_safe_filter((isset($context['IntroText0']) ? $context['IntroText0'] : null));
        echo "');
\t\t\t\tbreak;

\t\t\t}
\t\t\tcase 1: {
\t\t\t\t\$('#introText').html('";
        // line 198
        echo twig_safe_filter((isset($context['IntroText1']) ? $context['IntroText1'] : null));
        echo "');
\t\t\t\tbreak;

\t\t\t}
\t\t\tcase 2: {
\t\t\t\t\$('#introText').html('";
        // line 203
        echo twig_safe_filter((isset($context['IntroText2']) ? $context['IntroText2'] : null));
        echo "');
\t\t\t\tbreak;

\t\t\t}
\t\t\tcase 3: {
\t\t\t\t\$('#introText').html('";
        // line 208
        echo twig_safe_filter((isset($context['IntroText3']) ? $context['IntroText3'] : null));
        echo "');
\t\t\t\tif(g('orderMap').src == '' && \"";
        // line 209
        echo twig_safe_filter((isset($context['GoogleMapsAPIKey']) ? $context['GoogleMapsAPIKey'] : null));
        echo "\" != \"\") {
\t\t\t\t\tg('orderMap').src = \"index.php?ToDo=overviewStatsOrdLocationChart&from=";
        // line 210
        echo twig_safe_filter((isset($context['FromStamp']) ? $context['FromStamp'] : null));
        echo "&to=";
        echo twig_safe_filter((isset($context['ToStamp']) ? $context['ToStamp'] : null));
        echo "\";
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\t\$(document).ready(function() {

\t\tShowTab(";
        // line 219
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t// Which date range is selected?
\t\tvar current_date = '";
        // line 222
        echo twig_safe_filter((isset($context['CurrentDate']) ? $context['CurrentDate'] : null));
        echo "';
\t\tvar Calendar = g('Calendar');

\t\tfor(i = 0; i < Calendar.options.length; i++) {
\t\t\tif(Calendar.options[i].value == current_date) {
\t\t\t\tCalendar.options[i].selected = true;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Is it custom? If so, show the custom date ranges
\t\tif(current_date == 'Custom') {
\t\t\tdoCustomDate(g('Calendar'), 7);
\t\t}
\t});

\t</script>
";
    }

}

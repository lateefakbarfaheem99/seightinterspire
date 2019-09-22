<?php

/* home.tpl */
class __TwigTemplate_7d6177c1ad4f3f107771086f411d48cf extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
if (typeof lang == 'undefined') { lang = {}; }
lang.ConfirmCancel = \"";
        // line 3
        echo getLang("ConfirmCancel");
        echo "\";
//]]></script>
<div class=\"BodyContainer\" style=\"margin-top: 0;\">
\t<div style=\"";
        // line 6
        echo twig_safe_filter((isset($context['HideGettingStarted']) ? $context['HideGettingStarted'] : null));
        echo "\" class=\"DashboardGettingStarted\">
\t\t";
        // line 7
        echo twig_safe_filter((isset($context['GettingStarted']) ? $context['GettingStarted'] : null));
        echo "
\t</div>
\t<div style=\"";
        // line 9
        echo twig_safe_filter((isset($context['HideOverview']) ? $context['HideOverview'] : null));
        echo "\" class=\"DashboardCommonTasks\">
\t\t<div class=\"Heading1\">";
        // line 10
        echo getLang("Home");
        echo "</div>
\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Messages']) ? $context['Messages'] : null));
        echo "
\t\t<div class=\"DashboardRightColumn\">
\t\t\t<div class=\"DashboardPanel DashboardPanelCurrentNotifications\" style=\"";
        // line 13
        echo twig_safe_filter((isset($context['HideNotificationsList']) ? $context['HideNotificationsList'] : null));
        echo "\">
\t\t\t\t<div class=\"DashboardPanelContent\">
\t\t\t\t\t<h3>";
        // line 15
        echo getLang("PendingItems");
        echo "</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['NotificationsList']) ? $context['NotificationsList'] : null));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"DashboardPanel DashboardPanelPerformanceIndicators\" id=\"DashboardPanelPerformanceIndicators\" style=\"";
        // line 22
        echo twig_safe_filter((isset($context['HideDashboardPerformanceIndcators']) ? $context['HideDashboardPerformanceIndcators'] : null));
        echo "\">
\t\t\t\t<div class=\"DashboardPanelContent\">
\t\t\t\t\t<div class=\"DashboardPillMenu DashboardPerformanceIndicatorsPeriodButton\">
\t\t\t\t\t\t<div class=\"DashboardPillMenuStart\"></div>
\t\t\t\t\t\t<div class=\"DashboardPillMenuEnd\"></div>
\t\t\t\t\t\t<span class=\"Label\">
\t\t\t\t\t\t\t";
        // line 28
        echo getLang("View");
        echo ":
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"Buttons\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"";
        // line 31
        echo twig_safe_filter((isset($context['PerformanceIndicatorsActiveDay']) ? $context['PerformanceIndicatorsActiveDay'] : null));
        echo "\" rel=\"period=day\">";
        echo getLang("Day");
        echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"";
        // line 32
        echo twig_safe_filter((isset($context['PerformanceIndicatorsActiveWeek']) ? $context['PerformanceIndicatorsActiveWeek'] : null));
        echo "\" rel=\"period=week\">";
        echo getLang("Week");
        echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"";
        // line 33
        echo twig_safe_filter((isset($context['PerformanceIndicatorsActiveMonth']) ? $context['PerformanceIndicatorsActiveMonth'] : null));
        echo "\" rel=\"period=month\">";
        echo getLang("Month");
        echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"";
        // line 34
        echo twig_safe_filter((isset($context['PerformanceIndicatorsActiveYear']) ? $context['PerformanceIndicatorsActiveYear'] : null));
        echo " Last\" rel=\"period=year\">";
        echo getLang("Year");
        echo "</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>";
        // line 37
        echo getLang("StoreSnapshot");
        echo "</h3>
\t\t\t\t\t<div id=\"DashboardPerformanceIndicators\">
\t\t\t\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['PerformanceIndicatorsTable']) ? $context['PerformanceIndicatorsTable'] : null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"DashboardPanel DashboardPanelOrderBreakdown\" style=\"";
        // line 44
        echo twig_safe_filter((isset($context['HideDashboardBreakdownGraph']) ? $context['HideDashboardBreakdownGraph'] : null));
        echo "\">
\t\t\t\t<div class=\"DashboardPanelContent\">
\t\t\t\t\t<span class=\"DashboardActionButton DashboardOrderBreakdownAllStatsButton\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewStats\">
\t\t\t\t\t\t\t<span class=\"ButtonArrow\"></span>
\t\t\t\t\t\t\t<span class=\"ButtonText ButtonTextWithArrow\">";
        // line 49
        echo getLang("ViewAllStatistics");
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</span>
\t\t\t\t\t<h3>";
        // line 52
        echo getLang("OrderBreakDown");
        echo " <small>(";
        echo getLang("Last7Days");
        echo ")</small></h3>
\t\t\t\t\t<ul class=\"OrderBreakdownChart\">
\t\t\t\t\t\t";
        // line 54
        echo twig_safe_filter((isset($context['DashboardBreakdownGraph']) ? $context['DashboardBreakdownGraph'] : null));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"OrderBreakdownChartKey\">
\t\t\t\t\t\t<div class=\"First\">";
        // line 57
        echo twig_safe_filter((isset($context['GraphSeriesLabel0']) ? $context['GraphSeriesLabel0'] : null));
        echo "</div>
\t\t\t\t\t\t<div>";
        // line 58
        echo twig_safe_filter((isset($context['GraphSeriesLabel1']) ? $context['GraphSeriesLabel1'] : null));
        echo "</div>
\t\t\t\t\t\t<div>";
        // line 59
        echo twig_safe_filter((isset($context['GraphSeriesLabel2']) ? $context['GraphSeriesLabel2'] : null));
        echo "</div>
\t\t\t\t\t\t<div>";
        // line 60
        echo twig_safe_filter((isset($context['GraphSeriesLabel3']) ? $context['GraphSeriesLabel3'] : null));
        echo "</div>
\t\t\t\t\t\t<div class=\"Last\">";
        // line 61
        echo twig_safe_filter((isset($context['GraphSeriesLabel4']) ? $context['GraphSeriesLabel4'] : null));
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"DashboardPanel DashboardPanelHelpArticles\" style=\"";
        // line 65
        echo twig_safe_filter((isset($context['HidePopularHelpArticles']) ? $context['HidePopularHelpArticles'] : null));
        echo "\">
\t\t\t\t<div class=\"DashboardPanelContent\" style=\"overflow: auto\">
\t\t\t\t\t<form action=\"";
        // line 67
        echo twig_safe_filter((isset($context['SearchKnowledgeBaseUrl']) ? $context['SearchKnowledgeBaseUrl'] : null));
        echo "\" method=\"post\" class=\"DashboardHelpArticlesSearchForm\" style=\"";
        echo twig_safe_filter((isset($context['HideSearchKnowledgeBase']) ? $context['HideSearchKnowledgeBase'] : null));
        echo "\">
\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"DashboardHelpSearchQuery DashboardHelpSearchHasImage\" />
\t\t\t\t\t\t<span class=\"DashboardActionButton\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<span class=\"ButtonText\">";
        // line 71
        echo getLang("Go");
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</form>
\t\t\t\t\t<h3>";
        // line 75
        echo getLang("PopularHelpArticles");
        echo "</h3>
\t\t\t\t\t<div class=\"HelpArticlesList\">
\t\t\t\t\t\t<img src=\"images/ajax-loader.gif\" alt=\"\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"DashboardActionButton DashboardBrowseAllHelpArticlesButton\">
\t\t\t\t\t\t<a href=\"";
        // line 80
        echo twig_safe_filter((isset($context['ViewKnowledgeBaseLink']) ? $context['ViewKnowledgeBaseLink'] : null));
        echo "\">
\t\t\t\t\t\t\t<span class=\"ButtonArrow\"></span>
\t\t\t\t\t\t\t<span class=\"ButtonText ButtonTextWithArrow\">";
        // line 82
        echo getLang("ViewKnowledgeBase");
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"DashboardLeftColumn\">

\t\t\t";
        // line 90
        echo twig_safe_filter((isset($context['TrialExpiryMessage']) ? $context['TrialExpiryMessage'] : null));
        echo "

\t\t\t";
        // line 92
        echo twig_safe_filter((isset($context['VersionCheckMessage']) ? $context['VersionCheckMessage'] : null));
        echo "

\t\t\t<div class=\"DashboardPanel DashboardPanelFeatured DashboardPanelOverview\">
\t\t\t\t<div class=\"DashboardPanelContent\">
\t\t\t\t\t<div class=\"DashboardWhatsNext\">
\t\t\t\t\t\t<a href=\"#\" class=\"ToggleLink GettingStartedToggleLink\" style=\"";
        // line 97
        echo twig_safe_filter((isset($context['HideToggleGettingStartedAtGlance']) ? $context['HideToggleGettingStartedAtGlance'] : null));
        echo "\">";
        echo getLang("SwitchToGettingStarted");
        echo "</a>
\t\t\t\t\t\t<h3>";
        // line 98
        echo getLang("WhatsNext");
        echo "</h3>
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewOrders\" class=\"DashboardWhatsNextLink DashboardWhatsNextManageOrders\" style=\"";
        // line 99
        echo twig_safe_filter((isset($context['HideManageOrdersLink']) ? $context['HideManageOrdersLink'] : null));
        echo "\">
\t\t\t\t\t\t\t<span>";
        // line 100
        echo getLang("NextManageOrders");
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"index.php?ToDo=addProduct\" class=\"DashboardWhatsNextLink DashboardWhatsNextAddAProduct\" style=\"";
        // line 102
        echo twig_safe_filter((isset($context['HideAddProductLink']) ? $context['HideAddProductLink'] : null));
        echo "\">
\t\t\t\t\t\t\t<span>";
        // line 103
        echo getLang("NextAddAProduct");
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<br class=\"ClearLeft\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"DashboardAtAGlance\" style=\"";
        // line 107
        echo twig_safe_filter((isset($context['HideAtAGlance']) ? $context['HideAtAGlance'] : null));
        echo "\">
\t\t\t\t\t\t<h3>";
        // line 108
        echo getLang("YourStoreAtAGlance");
        echo "</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 110
        echo twig_safe_filter((isset($context['AtGlanceItems']) ? $context['AtGlanceItems'] : null));
        echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<br class=\"ClearLeft\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"DashboardPanel DashboardPanelRecentOrders\" style=\"";
        // line 116
        echo twig_safe_filter((isset($context['HideRecentOrders']) ? $context['HideRecentOrders'] : null));
        echo "\">
\t\t\t\t<div class=\"DashboardPanelContent\">
\t\t\t\t\t<span class=\"DashboardActionButton DashboardRecentOrdersAllButton\">
\t\t\t\t\t\t<a href=\"index.php?ToDo=viewOrders\">
\t\t\t\t\t\t\t<span class=\"ButtonArrow\"></span>
\t\t\t\t\t\t\t<span class=\"ButtonText ButtonTextWithArrow\">";
        // line 121
        echo getLang("ViewAllOrders");
        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</span>
\t\t\t\t\t<h3><span id=\"DashboardRecentOrdersTitle\">";
        // line 124
        echo getLang("RecentOrders");
        echo "</span> ";
        echo getLang("LowerOn");
        echo " ";
        echo twig_safe_filter((isset($context['StoreName']) ? $context['StoreName'] : null));
        echo "</h3>
\t\t\t\t\t<div class=\"DashboardFilterOptions\" style=\"margin-top: 18px;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 127
        echo getLang("Show");
        echo ":
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"DashboardRecentOrdersToggle\">
\t\t\t\t\t\t\t<li class=\"";
        // line 130
        echo twig_safe_filter((isset($context['RecentOrdersActiveRecentClass']) ? $context['RecentOrdersActiveRecentClass'] : null));
        echo "\"><a href=\"#\" rel=\"status=recent\">";
        echo getLang("RecentOrders");
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 131
        echo twig_safe_filter((isset($context['RecentOrdersActivePendingClass']) ? $context['RecentOrdersActivePendingClass'] : null));
        echo "\"><a href=\"#\" rel=\"status=pending\">";
        echo getLang("PendingOrders");
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 132
        echo twig_safe_filter((isset($context['RecentOrdersActiveCompletedClass']) ? $context['RecentOrdersActiveCompletedClass'] : null));
        echo "\"><a href=\"#\" rel=\"status=completed\">";
        echo getLang("CompletedOrders");
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"";
        // line 133
        echo twig_safe_filter((isset($context['RecentOrdersActiveRefundedClass']) ? $context['RecentOrdersActiveRefundedClass'] : null));
        echo "\"><a href=\"#\" rel=\"status=refunded\">";
        echo getLang("RefundedOrders");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<br style=\"clear: left;\" />
\t\t\t\t\t</div>
\t\t\t\t\t<ul style=\"clear: left\" class=\"DashboardRecentOrderList\">
\t\t\t\t\t\t";
        // line 138
        echo twig_safe_filter((isset($context['RecentOrdersList']) ? $context['RecentOrdersList'] : null));
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<br class=\"Clear\" />
</div>
";
    }

}

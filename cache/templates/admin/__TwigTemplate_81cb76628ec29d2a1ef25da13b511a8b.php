<?php

/* orders.updatestatus.popup.tpl */
class __TwigTemplate_81cb76628ec29d2a1ef25da13b511a8b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table id=\"OuterPanel\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t<tr>
\t\t<td class=\"Heading1\">
\t\t\t";
        // line 4
        echo getLang("OrderUpdateStatusInProgress");
        echo "\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<div class=\"IntroItem\">
\t\t\t\t<div>
\t\t\t\t\t<div style=\"position: relative;border: 1px solid #ccc; width: 300px; padding: 0px; margin: 0 auto;\">
\t\t\t\t\t\t<div id=\"ProgressBarBar\" style=\"margin: 0; padding: 0; background: url(images/progressbar.gif) no-repeat; height: 20px; width: 0%;\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"position: absolute; top: 2px; left: 0; text-align: center; width: 300px; font-weight: bold;\" id=\"ProgressBarPercentage\">&nbsp;</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"ProgressBarStatus\" style=\"text-align: center;\">&nbsp;</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</td>
\t</tr>
</table>
<script type=\"text/javascript\">

\tvar orderidx = [";
        // line 25
        echo twig_safe_filter((isset($context['JavaScriptOrderIds']) ? $context['JavaScriptOrderIds'] : null));
        echo "];
\tvar currentOrder = 0;
\tvar success = 0;
\tvar failed = 0;

\tfunction requestOrderUpdate()
\t{
\t\t\$.ajax({
\t\t\ttype\t: \"POST\",
\t\t\turl\t: \"remote.php\",
\t\t\tdata\t: \"w=updateMultiOrderStatusRequest&remoteSection=orders&orderId=\" + orderidx[currentOrder] + \"&statusId=";
        // line 35
        echo twig_safe_filter((isset($context['StatusID']) ? $context['StatusID'] : null));
        echo "&success=\" + success + \"&failed=\" + failed,
\t\t\tsuccess\t: handleOrderUpdate
\t\t});

\t\tcurrentOrder += 1;
\t\treturn;
\t}

\tfunction handleOrderUpdate(data)
\t{
\t\tvar status = data.substring(0,1);
\t\tvar report = data.substring(1);

\t\tif (status == '1') {
\t\t\tsuccess++;
\t\t} else {
\t\t\tfailed++;
\t\t}

\t\tvar percentage = new String(Math.round((currentOrder/orderidx.length) * 100));

\t\t\$(\"#ProgressBarStatus\").text(\"";
        // line 56
        echo getLang("OrderUpdateStatusUpdating");
        echo " \" + orderidx.length + \" ";
        echo getLang("Orders");
        echo "\");
\t\t\$(\"#ProgressBarPercentage\").text(percentage + \"%\");
\t\t\$(\"#ProgressBarBar\").css(\"width\", percentage + \"%\");

\t\tif (currentOrder < orderidx.length) {
\t\t\tsetTimeout(\"requestOrderUpdate()\", 100);
\t\t} else {
\t\t\tvar page = window.parent.document.getElementById('CurrentPage').value;
\t\t\tvar url = window.parent.location.href + '&page=' + page + '&ajax=1';

\t\t\t\$.ajax({
\t\t\t\ttype\t: \"GET\",
\t\t\t\turl\t: url,
\t\t\t\tsuccess\t: handleOrderFinish
\t\t\t});

\t\t\twindow.parent.document.getElementById('OrdersStatus').innerHTML = report;
\t\t}
\t}

\tfunction handleOrderFinish(data)
\t{
\t\twindow.parent.document.getElementById('GridContainer').innerHTML = data;
\t\twindow.parent.BindAjaxGridSorting();
\t\twindow.parent.tb_remove();
\t}

\t\$(document).ready(function() {
\t\trequestOrderUpdate();
\t});

</script>";
    }

}

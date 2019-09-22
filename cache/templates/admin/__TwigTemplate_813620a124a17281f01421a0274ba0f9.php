<?php

/* import.importpopup.tpl */
class __TwigTemplate_813620a124a17281f01421a0274ba0f9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<table id=\"OuterPanel\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t<tr>
\t\t<td class=\"Heading1\">
\t\t\t";
        // line 4
        echo getLang("ImportInProgress");
        echo "\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<div class=\"IntroItem\">
\t\t\t\t<div>
\t\t\t\t\t<div style=\"position: relative;border: 1px solid #ccc; width: 300px; padding: 0px; margin: 0 auto;\">
\t\t\t\t\t\t<div id=\"progressBarPercentage\" style=\"margin: 0; padding: 0; background: url(images/progressbar.gif) no-repeat; height: 20px; width: 0%;\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"position: absolute; top: 2px; left: 0; text-align: center; width: 300px; font-weight: bold;\" id=\"progressPercent\">&nbsp;</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"progressBarStatus\" style=\"text-align: center;\">&nbsp;</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"report\">";
        // line 20
        echo twig_safe_filter((isset($context['Report']) ? $context['Report'] : null));
        echo "</div>
\t\t</td>
\t</tr>
</table>
<script type=\"text/javascript\">
\tfunction UpdateImportStatus(status, percentage)
\t{
\t\tvar f = document.getElementById('progressBarPercentage');
\t\tf.style.width = parseInt(percentage) + \"%\";
\t\tvar f = document.getElementById('progressPercent');
\t\tf.innerHTML = parseInt(percentage) + \"%\";
\t\tvar f = document.getElementById('progressBarStatus');
\t\tf.innerHTML = status;
\t}

\tfunction UpdateImportStatusReport(report)
\t{
\t\tdocument.getElementById('report').innerHTML = report;
\t}
</script>
<!-- iframe which does all of the work -->
<iframe src=\"index.php?ToDo=import";
        // line 41
        echo twig_safe_filter((isset($context['Type']) ? $context['Type'] : null));
        echo "&amp;Step=4&amp;ImportSession=";
        echo twig_safe_filter((isset($context['ImportSession']) ? $context['ImportSession'] : null));
        echo "\" width=\"1\" height=\"1\" frameborder=\"0\" border=\"0\"></iframe>";
    }

}

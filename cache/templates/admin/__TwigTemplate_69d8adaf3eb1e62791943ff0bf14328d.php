<?php

/* import.products.step5.tpl */
class __TwigTemplate_69d8adaf3eb1e62791943ff0bf14328d extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("ImportProductsStep5");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\"><p>";
        // line 7
        echo getLang("ImportProductsStep5Desc");
        echo "</p>
\t\t\t";
        // line 8
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['Report']) ? $context['Report'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>
\t<script type=\"text/javascript\">
\t\tfunction ShowReport(reporttype) {
\t\t\tvar link = 'index.php?ToDo=importProducts&Step=ViewReport&ImportSession=";
        // line 19
        echo twig_safe_filter((isset($context['ImportSession']) ? $context['ImportSession'] : null));
        echo "&ReportType='+reporttype;

\t\t\tvar top = screen.height / 2 - (230);
\t\t\tvar left = screen.width / 2 - (250);

\t\t\twindow.open(link,\"reportWin\",\"left=\" + left + \",top=\"+top+\",toolbar=false,status=no,directories=false,menubar=false,scrollbars=false,resizable=false,copyhistory=false,width=500,height=460\");
\t\t}
\t</script>
";
    }

}

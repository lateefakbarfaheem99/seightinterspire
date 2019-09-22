<?php

/* import.products.step3.tpl */
class __TwigTemplate_4db8174b3aa52fc01251f822e20176dc extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("ImportProductsStep3");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 8
        echo getLang("ImportProductsStep3Desc");
        echo "\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input type=\"button\" value=\"";
        // line 14
        echo getLang("StartImport");
        echo "\" id=\"StartImport\" onclick=\"startImport(); return false;\" class=\"FormButton\" />
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>
\t<script type=\"text/javascript\">
\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm('";
        // line 22
        echo getLang("ConfirmCancelImport");
        echo "'))
\t\t\t\twindow.location = 'index.php?ToDo=importProducts';
\t\t}

\t\tfunction startImport()
\t\t{
\t\t\ttb_show('', 'index.php?ToDo=importProducts&Step=ImportFrame&ImportSession=";
        // line 28
        echo twig_safe_filter((isset($context['ImportSession']) ? $context['ImportSession'] : null));
        echo "&keepThis=true&TB_iframe=tue&height=240&width=400&modal=true', '');
\t\t\tdocument.getElementById('StartImport').disabled = true;
\t\t\tdocument.getElementById('StartImport').value = '";
        // line 30
        echo getLang("ImportRunning");
        echo "';
\t\t}
\t</script>";
    }

}

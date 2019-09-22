<?php

/* import.productvariations.step2.tpl */
class __TwigTemplate_32a9e8d2cf079ead9c8025cae28db62b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=importProductVariations&Step=3\" id=\"frmImport\" method=\"post\" onsubmit=\"return ValidateForm(CheckImportProductForm)\">
\t<input type=\"hidden\" name=\"ImportSession\" value=\"";
        // line 2
        echo twig_safe_filter((isset($context['ImportSession']) ? $context['ImportSession'] : null));
        echo "\" />
\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 6
        echo getLang("ImportProductVariationsStep2");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 10
        echo getLang("ImportProductVariationsStep2Desc");
        echo "</p>
\t\t\t\t";
        // line 11
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<div>
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 17
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 18
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t</div>
\t\t\t\t<br />
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td>
\t\t\t  <table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\" colspan=\"2\">";
        // line 28
        echo getLang("ImportLinkFields");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<table width=\"500\">
\t\t\t\t\t\t";
        // line 32
        echo twig_safe_filter((isset($context['ImportFieldList']) ? $context['ImportFieldList'] : null));
        echo "
\t\t\t\t\t</table>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t<tr>
\t\t\t\t<td class=\"Field250\">
\t\t\t\t\t&nbsp;
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 45
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 46
        echo getLang("Next");
        echo " &raquo;\" class=\"FormButton\" />
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t\t<script type=\"text/javascript\">
\t\tfunction ConfirmCancel()
\t\t{
\t\t\tif(confirm('";
        // line 53
        echo getLang("ConfirmCancelImport");
        echo "'))
\t\t\t\twindow.location = 'index.php?ToDo=importProductVariations';
\t\t}

\t\tfunction CheckImportProductForm()
\t\t{
\t\t\tvar f = document.getElementById('Matchprodid');
\t\t\tif(f.selectedIndex <= 0)
\t\t\t{
\t\t\t\talert('";
        // line 62
        echo getLang("NoMatchProductID");
        echo "');
\t\t\t\tf.focus();
\t\t\t\treturn false;
\t\t\t}

\t\t\t// check that either ID, name or code is matched

\t\t\treturn true;
\t\t}
\t\t</script>
\t</div>
</form>
";
    }

}

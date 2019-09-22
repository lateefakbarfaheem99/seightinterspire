<?php

/* products.variations.manage.tpl */
class __TwigTemplate_e8cf02934a4040dcf6b8a5e85d3d287c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t<table id=\"Table13\" cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("ViewProductVariations");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo getLang("ViewVariationsIntro");
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<table id=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td class=\"Intro\" valign=\"top\">
\t\t\t\t\t<input type=\"button\" name=\"IndexAddButton\" value=\"";
        // line 14
        echo getLang("AddProductVariation");
        echo "...\" id=\"IndexCreateButton\" class=\"SmallButton\" onclick=\"document.location.href='index.php?ToDo=addProductVariation'\" style=\"width:160px\" /> &nbsp;
\t\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 15
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelected()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo " /> &nbsp;
\t\t\t\t\t<input type=\"button\" name=\"IndexImportButton\" value=\"";
        // line 16
        echo getLang("ImportProductVariations");
        echo "\" id=\"IndexImportButton\" class=\"SmallButton\" onclick=\"window.location='index.php?ToDo=importProductVariations';\" ";
        echo twig_safe_filter((isset($context['DisableImport']) ? $context['DisableImport'] : null));
        echo " />
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t\t</tr>
\t</table>
\t<table cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t<td style=\"display:";
        // line 25
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t<form name=\"frmVariations\" id=\"frmVariations\" method=\"post\" action=\"index.php?ToDo=deleteProductVariations\">
\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 28
        echo twig_safe_filter((isset($context['VariationDataGrid']) ? $context['VariationDataGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</td></tr>
\t</table>
\t</div>

\t<script type=\"text/javascript\">

\t\tvar variationForm = document.getElementById('frmVariations');

\t\tfunction ConfirmDeleteSelected() {
\t\t\tvar fp = variationForm.elements;
\t\t\tvar selected = [];

\t\t\tfor(i = 0; i < fp.length; i++) {
\t\t\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\t\t\tselected[selected.length] = fp[i].value;
\t\t\t}

\t\t\tif(selected.length == 0) {
\t\t\t\talert(\"";
        // line 49
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseVariations"), "'");
        echo "\");
\t\t\t\treturn;
\t\t\t}

\t\t\tif (!confirm(\"";
        // line 53
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmDeleteVariations"), "'");
        echo "\")) {
\t\t\t\treturn;
\t\t\t}

\t\t\t\$.post('remote.php?remoteSection=product_variations&w=getAffectedVariations&actionType=delete&variationIdx=' + selected.join(), null,
\t\t\t\tfunction(result) {
\t\t\t\t\tif (result == '0') {
\t\t\t\t\t\t// submit immediately if nothing is affected
\t\t\t\t\t\twindow.parent.variationForm.submit();
\t\t\t\t\t} else if (result == '1') {
\t\t\t\t\t\t// display a thickbox with all the affected products in it
\t\t\t\t\t\t// from there they can decide whether to proceed or cancel
\t\t\t\t\t\t\$.iModal({
\t\t\t\t\t\t\ttype: 'ajax',
\t\t\t\t\t\t\turl: 'remote.php?remoteSection=product_variations&w=viewAffectedVariations&actionType=delete&variationIdx=' + selected.join(),
\t\t\t\t\t\t\twidth: 600
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t}

\t\tfunction ToggleDeleteBoxes(Status) {
\t\t\tvar fp = document.getElementById(\"frmVariations\").elements;

\t\t\tfor(i = 0; i < fp.length; i++) {
\t\t\t\tfp[i].checked = Status;
\t\t\t}
\t\t}

\t\t";
        // line 83
        if ((isset($context['updateSessionId']) ? $context['updateSessionId'] : null)) {
            echo "\t\t\t\$.iModal({
\t\t\t\ttype: 'ajax',
\t\t\t\tmethod: 'post',
\t\t\t\turl: 'remote.php',
\t\t\t\turlData: {
\t\t\t\t\tremoteSection: 'product_variations',
\t\t\t\t\tw: 'initRebuildVariations',
\t\t\t\t\tsession: '";
            // line 91
            echo twig_escape_filter($this->env, (isset($context['updateSessionId']) ? $context['updateSessionId'] : null), "1");
            echo "'
\t\t\t\t},
\t\t\t\tclose: false,
\t\t\t\twidth: 400
\t\t\t});
\t\t";
        }
        // line 96
        echo "\t</script>
";
    }

}

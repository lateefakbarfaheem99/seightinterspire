<?php

/* products.variations.ajaxupdate.tpl */
class __TwigTemplate_8a143de929f35596cc8c897e08f1bf27 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"ModalTitle\">
\t";
        // line 2
        echo getLang("UpdateVariationsTitle", array("totalProducts" => (isset($context['totalProducts']) ? $context['totalProducts'] : null)));
        echo "</div>
<div class=\"ModalContent\" style=\"padding:5px;\">
\t<div style=\"padding-bottom: 5px;\">
\t\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "UpdateVariationsIntro", array(), "any"), "1");
        echo "
\t</div>
\t<div id=\"cachingStatus\">
\t\t<div style=\"width: 208px; padding: 0px; margin: 10px auto 10px auto; position: relative; background: url('images/loadingAnimation.gif') no-repeat;\">
\t\t\t<div id=\"ProgressBarPercentage\" style=\"margin: 0; padding: 0; height: 13px; width: 0%; background: url('images/progressbar.gif') no-repeat; background-color: transparent;\">
\t\t\t\t&nbsp;
\t\t\t</div>
\t\t\t<div style=\"position: absolute; top: 0; text-align: center; width: 208px; font-weight: bold;\" id=\"ProgressPercent\">&nbsp;</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">//<![CDATA[
\tvar totalProducts = ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context['totalProducts']) ? $context['totalProducts'] : null), "1");
        echo ";
\tvar currentProgress = 0;

\tfunction UpdateProgress(percentage) {
\t\t\$('#ProgressBarPercentage').css('width', percentage + \"%\");
\t\t\$('#ProgressPercent').html(Math.round(percentage) + \"%\");
\t}
\t\$(document).ready(function() {
\t\tUpdateProgress(0);

\t\tupdateNextProduct();
\t});

\tfunction updateNextProduct() {
\t\t\$.ajax({
\t\t\turl: 'remote.php',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: {
\t\t\t\tremoteSection: 'product_variations',
\t\t\t\tw: 'continueRebuildVariations',
\t\t\t\tsession: '";
        // line 40
        echo twig_escape_filter($this->env, (isset($context['sessionId']) ? $context['sessionId'] : null), "1");
        echo "',
\t\t\t},
\t\t\tsuccess: function(response) {
\t\t\t\tif (response.success) {
\t\t\t\t\tif (response.done) {
\t\t\t\t\t\t\$.iModal.close();
\t\t\t\t\t\treturn;
\t\t\t\t\t}

\t\t\t\t\tcurrentProgress++;

\t\t\t\t\tvar currentPercent = currentProgress / totalProducts * 100;
\t\t\t\t\tUpdateProgress(currentPercent);

\t\t\t\t\tupdateNextProduct();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\talert(response.message);
\t\t\t\t\twindow.parent.location = 'index.php?ToDo=viewProductVariations';
\t\t\t\t}
\t\t\t},
\t\t\terror: function() {
\t\t\t\talert('error in request');
\t\t\t}
\t\t});
\t}
//]]></script>
";
    }

}

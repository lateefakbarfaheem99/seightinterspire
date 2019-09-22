<?php

/* Snippets/GettingStartedModal.html */
class __TwigTemplate_df24dc71d292702ff248dde374c3bb32 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
\t\$.iModal({
\t\ttype: 'inline',
\t\tinline: '#GettingStarted',
\t\twidth: 450
\t});
});
</script>
<div id=\"GettingStarted\" style=\"display: none\">
\t<div class=\"ModalTitle\">
\t\t<img src=\"images/notifications.gif\" style=\"vertical-align: bottom; padding-right: 5px;\" alt=\"\" />
\t\t";
        // line 13
        echo twig_safe_filter((isset($context['GettingStartedTitle']) ? $context['GettingStartedTitle'] : null));
        echo "
\t</div>
\t<div class=\"ModalContent\">
\t\t<p>
\t\t\t";
        // line 17
        echo twig_safe_filter((isset($context['GettingStartedContent']) ? $context['GettingStartedContent'] : null));
        echo "
\t\t</p>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<input type=\"button\" value=\"";
        // line 21
        echo getLang("Cancel");
        echo "\" style=\"";
        echo twig_safe_filter((isset($context['HideGettingStartedCancel']) ? $context['HideGettingStartedCancel'] : null));
        echo "\" onclick=\"window.location='index.php';\" />
\t\t<input type=\"button\" value=\"";
        // line 22
        echo getLang("OKGetStarted");
        echo "\" class=\"Submit\" onclick=\"\$.iModal.close();\" />
\t</div>
</div>
";
    }

}

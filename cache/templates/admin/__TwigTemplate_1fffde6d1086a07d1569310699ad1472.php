<?php

/* addons.manage.tpl */
class __TwigTemplate_1fffde6d1086a07d1569310699ad1472 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
\t<div class=\"BodyContainer\">
\t<table class=\"OuterPanel\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 5
        echo getLang("AddonPackages");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 9
        echo getLang("AddonsIntro");
        echo "</p>
\t\t\t";
        // line 10
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<td>
\t\t\t<table class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t  <td class=\"Heading2\">";
        // line 17
        echo getLang("AddonsYouveDownloaded");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"padding:5px 5px 5px 10px;\">
\t\t\t\t\t\t";
        // line 21
        echo twig_safe_filter((isset($context['ExistingAddons']) ? $context['ExistingAddons'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t </table>
\t\t\t<div style=\"";
        // line 25
        echo twig_safe_filter((isset($context['HideDownloadAddons']) ? $context['HideDownloadAddons'] : null));
        echo "\">
\t\t\t <br />
\t\t\t\t<table class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t  <td class=\"Heading2\">";
        // line 29
        echo getLang("AddonsAvailableForDownload");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"padding:5px 5px 5px 10px;\">
\t\t\t\t\t\t\t";
        // line 33
        echo twig_safe_filter((isset($context['DownloadableAddons']) ? $context['DownloadableAddons'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t </table>
\t\t\t</div>
\t\t</td></tr>
\t</table>
\t</div>
";
    }

}

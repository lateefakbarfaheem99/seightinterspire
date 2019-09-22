<?php

/* Snippets/OptimizerConfigForm.html */
class __TwigTemplate_f093943eccddfb791ba188d2bf567361 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\" src=\"script/optimizer.js?";
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>

<table  id=\"OptimizerConfigForm\" style =\"margin-top:0px; ";
        // line 3
        echo twig_safe_filter((isset($context['HideOptimizerConfigForm']) ? $context['HideOptimizerConfigForm'] : null));
        echo "\" width=\"100%\" class=\"Panel\">
\t<tr>
\t\t<td class=\"FieldLabel\"  style=\"padding-top:12px;\">
\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 6
        echo getLang("TestType");
        echo ":</dt>
\t\t</td>
\t\t<td style=\"padding-top:8px;\">
\t\t\t<img src=\"images/nodejoin.gif\" style=\"float: left;\"/>
\t\t\t<div style='float:left;margin-top:5px;margin-left:7px;'>";
        // line 10
        echo twig_safe_filter((isset($context['OptimizerTestType']) ? $context['OptimizerTestType'] : null));
        echo "</div>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"FieldLabel\" style=\"padding-top: 8px;\">
\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 15
        echo getLang("TestPageUrl");
        echo ":
\t\t</td>
\t\t<td style=\"padding:5px 0 0 27px;\">
\t\t\t<input readonly onclick=\"this.select();\" class=\"Field400\" value=\"";
        // line 18
        echo twig_safe_filter((isset($context['ValidateTestPageUrl']) ? $context['ValidateTestPageUrl'] : null));
        echo "\" />
\t\t\t
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"FieldLabel\" style=\"padding-top:8px;\">
\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 24
        echo getLang("ConversionPageUrl");
        echo ":
\t\t</td>
\t\t<td style=\"padding:5px 0 0 27px;\">
\t\t\t<input readonly class=\"Field400\" onclick=\"this.select();\" value=\"";
        // line 27
        echo twig_safe_filter((isset($context['ValidateConversionPageUrl']) ? $context['ValidateConversionPageUrl'] : null));
        echo "\" />
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"FieldLabel\">
\t\t\t&nbsp;&nbsp;&nbsp;";
        // line 32
        echo getLang("ScriptInstallURL");
        echo ":
\t\t</td>
\t\t<td style=\"padding-left:27px;\">
\t\t\t<input name=\"InstallUrl\" style=\"width:312px;\" value=\"";
        // line 35
        echo twig_safe_filter((isset($context['ScriptInstallURL']) ? $context['ScriptInstallURL'] : null));
        echo "\" />
\t\t\t &nbsp;
\t\t\t<input name=\"SaveManual\" type=\"button\" onclick=\"Optimizer.InstallAutoScripts();\" value=\"";
        // line 37
        echo getLang("InstallScript");
        echo "\">
\t\t\t&nbsp; <img height=\"16\" width=\"24\" border=\"0\" style=\"margin-top: 5px;\" src=\"images/help.gif\" onmouseover=\"ShowHelp('gwo1', '";
        // line 38
        echo getLang("ScriptInstallURL");
        echo "', '";
        echo getLang("InstallUrlHelp");
        echo "')\" onmouseout=\"HideHelp('gwo1');\"/>
\t\t\t<div id=\"gwo1\" style=\"display: none;\"></div>

\t\t\t<div class=\"GrayHelpText\">";
        // line 41
        echo getLang("InstallUrlIntro");
        echo "</div>

\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"FieldLabel\">
\t\t\t<span class='Required'>*</span> ";
        // line 47
        echo getLang("ConversionPage");
        echo ":
\t\t</td>
\t\t<td style=\"padding-left:27px;\">
\t\t\t<select id=\"ConversionPage\" name=\"ConversionPage\" onchange=\"Optimizer.ChangeConversionPage('";
        // line 50
        echo twig_safe_filter((isset($context['ModuleId']) ? $context['ModuleId'] : null));
        echo "');\">
\t\t\t\t<option value=''>";
        // line 51
        echo getLang("ChooseAnOption");
        echo "</option>
\t\t\t\t";
        // line 52
        echo twig_safe_filter((isset($context['ConversionPageOptions']) ? $context['ConversionPageOptions'] : null));
        echo "
\t\t\t</select>
\t\t\t&nbsp; <img height=\"16\" width=\"24\" border=\"0\" style=\"margin-top: 5px;\" src=\"images/help.gif\" onmouseover=\"ShowHelp('gwo2', '";
        // line 54
        echo getLang("ConversionPage");
        echo "', '";
        echo getLang("ConversionPageHelp");
        echo "')\" onmouseout=\"HideHelp('gwo2');\"/>
\t\t\t<div id=\"gwo2\" style=\"display: none;\"></div>

\t\t\t<div id=\"CustomConversionHelp\" style=\"";
        // line 57
        echo twig_safe_filter((isset($context['HideCustomConversionHelp']) ? $context['HideCustomConversionHelp'] : null));
        echo "\">

\t\t\t\t<img class=\"FloatLeft\" alt=\"\" src=\"images/nodejoin.gif\"/>
\t\t\t\t
\t\t\t\t<input name='ConversionPageUrl' id='ConversionPageUrl' class='Field350' value='";
        // line 61
        echo twig_safe_filter((isset($context['ConversionPageURL']) ? $context['ConversionPageURL'] : null));
        echo "' />
\t\t\t\t
\t\t\t\t<img height=\"16\" width=\"24\" border=\"0\" style=\"margin-top: 5px;\" src=\"images/help.gif\" onmouseover=\"ShowHelp('gwo3', '";
        // line 63
        echo getLang("CustomConversionPage");
        echo "', '";
        echo getLang("CustomConversionHelp");
        echo "')\" onmouseout=\"HideHelp('gwo3');\"/>
\t\t\t\t<div id=\"gwo3\" style=\"display: none;\"></div>

\t\t\t</div>
\t\t</td>
\t</tr>
\t
\t<tr>
\t\t<td class=\"FieldLabel\">
\t\t\t<span class='Required'>*</span> ";
        // line 72
        echo getLang("ControlScript");
        echo ":
\t\t</td>
\t\t<td style=\"padding-left:27px;\">
\t\t\t<textarea class=\"Field400\" rows=\"5\" id=\"ControlScript\" name=\"ControlScript\">";
        // line 75
        echo twig_safe_filter((isset($context['ControlScript']) ? $context['ControlScript'] : null));
        echo "</textarea>
\t\t\t<img height=\"16\" width=\"24\" border=\"0\" style=\"margin-top: 5px;\" src=\"images/help.gif\" onmouseover=\"ShowHelp('gwo4', '";
        // line 76
        echo getLang("ControlScript");
        echo "', '";
        echo getLang("ControlScriptHelp");
        echo "')\" onmouseout=\"HideHelp('gwo4');\"/>
\t\t\t<div id=\"gwo4\" style=\"display: none;\"></div>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"FieldLabel\">
\t\t\t<span class='Required'>*</span> ";
        // line 82
        echo getLang("TrackingScript");
        echo ":
\t\t</td>
\t\t<td style=\"padding-left:27px;\">
\t\t\t<textarea class=\"Field400\" rows=\"5\" id=\"TrackingScript\" name=\"TrackingScript\">";
        // line 85
        echo twig_safe_filter((isset($context['TrackingScript']) ? $context['TrackingScript'] : null));
        echo "</textarea>
\t\t\t<img height=\"16\" width=\"24\" border=\"0\" style=\"margin-top: 5px;\" src=\"images/help.gif\" onmouseover=\"ShowHelp('gwo5', '";
        // line 86
        echo getLang("TrackingScript");
        echo "', '";
        echo getLang("TrackingScriptHelp");
        echo "')\" onmouseout=\"HideHelp('gwo5');\"/>
\t\t\t<div id=\"gwo5\" style=\"display: none;\"></div>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"FieldLabel\">
\t\t\t<span class='Required'>*</span> ";
        // line 92
        echo getLang("ConversionScript");
        echo ":
\t\t</td>
\t\t<td style=\"padding-left:27px;\">
\t\t\t<textarea class=\"Field400\" rows=\"5\" id=\"ConversionScript\" name=\"ConversionScript\">";
        // line 95
        echo twig_safe_filter((isset($context['ConversionScript']) ? $context['ConversionScript'] : null));
        echo "</textarea>\t\t\t\t
\t\t\t<img height=\"16\" width=\"24\" border=\"0\" style=\"margin-top: 5px;\" src=\"images/help.gif\" onmouseover=\"ShowHelp('gwo6', '";
        // line 96
        echo getLang("ConversionScript");
        echo "', '";
        echo getLang("ConversionScriptHelp");
        echo "')\" onmouseout=\"HideHelp('gwo6');\"/>
\t\t\t<div id=\"gwo6\" style=\"display: none;\"></div>
\t\t</td>
\t</tr>

</table>

<script type=\"text/javascript\">
lang.ChooseConvertionpage = \"";
        // line 104
        echo getLang("ChooseConvertionpage");
        echo "\";
lang.EnterInstallUrl = \"";
        // line 105
        echo getLang("EnterInstallUrl");
        echo "\";
lang.EnterConversionScript = \"";
        // line 106
        echo getLang("EnterConversionScript");
        echo "\";
lang.EnterControlScript = \"";
        // line 107
        echo getLang("EnterControlScript");
        echo "\";
lang.EnterTrackingScript = \"";
        // line 108
        echo getLang("EnterTrackingScript");
        echo "\";
lang.ProblemDuringRequest = \"";
        // line 109
        echo getLang("ProblemDuringRequest");
        echo "\";
lang.ConfirmEnableProductOptimizer = \"";
        // line 110
        echo getLang("ConfirmEnableProductOptimizer");
        echo "\";
lang.ConfirmEnableCategoryOptimizer = \"";
        // line 111
        echo getLang("ConfirmEnableCategoryOptimizer");
        echo "\";
lang.ConfirmEnablePageOptimizer = \"";
        // line 112
        echo getLang("ConfirmEnablePageOptimizer");
        echo "\";
lang.EnterValidConversionUrl = \"";
        // line 113
        echo getLang("EnterValidConversionUrl");
        echo "\";
</script>";
    }

}

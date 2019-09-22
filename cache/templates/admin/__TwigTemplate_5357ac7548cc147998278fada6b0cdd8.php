<?php

/* sysinfo.tpl */
class __TwigTemplate_5357ac7548cc147998278fada6b0cdd8 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 4
        echo getLang("SystemInfo");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\">
\t\t\t<p>";
        // line 8
        echo getLang("SystemInfoIntro");
        echo "</p>
\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t<tr>
\t\t\t\t<td class=\"Heading2\" colspan=\"2\"><div class=\"FloatRight\"><a href=\"index.php?ToDo=phpSystemInfo\" target=\"_blank\">";
        // line 16
        echo getLang("ViewPHPInfo");
        echo "</a></div>";
        echo getLang("SystemInfo");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 20
        echo getLang("ProductVersion");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 23
        echo twig_safe_filter((isset($context['ProductVersion']) ? $context['ProductVersion'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"display: ";
        // line 26
        echo twig_safe_filter((isset($context['HideEdition']) ? $context['HideEdition'] : null));
        echo "\">
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 28
        echo getLang("ProductEdition");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 31
        echo twig_safe_filter((isset($context['ProductEdition']) ? $context['ProductEdition'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 36
        echo getLang("HostingProvider");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 39
        echo twig_safe_filter((isset($context['HostingProvider']) ? $context['HostingProvider'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 44
        echo getLang("PHPVersion");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 47
        echo twig_safe_filter((isset($context['PHPVersion']) ? $context['PHPVersion'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 52
        echo getLang("MySQLVersion");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 55
        echo twig_safe_filter((isset($context['MySQLVersion']) ? $context['MySQLVersion'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 60
        echo getLang("ServerSoftware");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 63
        echo twig_safe_filter((isset($context['ServerSoftware']) ? $context['ServerSoftware'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 68
        echo getLang("OperatingSystem");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 71
        echo twig_safe_filter((isset($context['OperatingSystem']) ? $context['OperatingSystem'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 76
        echo getLang("GDVersion");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 79
        echo twig_safe_filter((isset($context['GDVersion']) ? $context['GDVersion'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 84
        echo getLang("SafeMode");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 87
        echo twig_safe_filter((isset($context['SafeMode']) ? $context['SafeMode'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 92
        echo getLang("RemoteConnections");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 95
        echo twig_safe_filter((isset($context['RemoteConnections']) ? $context['RemoteConnections'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 100
        echo getLang("MultiByteFunctions");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 103
        echo twig_safe_filter((isset($context['MultiByteFunctions']) ? $context['MultiByteFunctions'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t&nbsp;&nbsp; ";
        // line 108
        echo getLang("PSpellFunctionality");
        echo ":
\t\t\t\t</td>
\t\t\t\t<td style=\"padding: 6px 0\">
\t\t\t\t\t";
        // line 111
        echo twig_safe_filter((isset($context['PSpell']) ? $context['PSpell'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
\t</table>
\t</div>";
    }

}

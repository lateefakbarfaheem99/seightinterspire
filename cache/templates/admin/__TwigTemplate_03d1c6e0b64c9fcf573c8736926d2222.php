<?php

/* Snippets/UserPermissionRow.html */
class __TwigTemplate_03d1c6e0b64c9fcf573c8736926d2222 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"PermissionSelects\">
\t<td class=\"FieldLabel\">
\t\t&nbsp;&nbsp;&nbsp;";
        // line 3
        echo twig_safe_filter((isset($context['GroupTitle']) ? $context['GroupTitle'] : null));
        echo ":
\t\t<br />&nbsp;&nbsp;&nbsp;
\t\t(<a onclick=\"SetupPermissions('";
        // line 5
        echo twig_safe_filter((isset($context['GroupCode']) ? $context['GroupCode'] : null));
        echo "', true); return false;\" href=\"#\">";
        echo getLang("SelectAll");
        echo "</a> / <a onclick=\"SetupPermissions('";
        echo twig_safe_filter((isset($context['GroupCode']) ? $context['GroupCode'] : null));
        echo "', false); return false;\" href=\"#\">";
        echo getLang("UnselectAll");
        echo "</a>)
\t</td>
\t<td>
\t\t<select name=\"permissions[";
        // line 8
        echo twig_safe_filter((isset($context['GroupCode']) ? $context['GroupCode'] : null));
        echo "][]\" id=\"permissions_";
        echo twig_safe_filter((isset($context['GroupCode']) ? $context['GroupCode'] : null));
        echo "\" multiple=\"multiple\" size=\"13\" class=\"Field250 ISSelectReplacement permission_select\" ";
        echo twig_safe_filter((isset($context['DisablePermissions']) ? $context['DisablePermissions'] : null));
        echo ">
\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['GroupPermissions']) ? $context['GroupPermissions'] : null));
        echo "
\t\t</select>
\t</td>
</tr>";
    }

}

<?php

/* settings.tax.zones.grid.tpl */
class __TwigTemplate_62abf6dd07181432bc64dcdefc1a8f4c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numTaxZones']) ? $context['numTaxZones'] : null), (isset($context['taxZonesPerPage']) ? $context['taxZonesPerPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), "index.php?ToDo=manageTaxSettings&page={page}#taxZonesTab", ), "method"), "1");
        echo "
<table class=\"taxZonesGrid gridTable SortableGrid\" cellspacing=\"0\" cellpadding=\"0\">
\t<thead>
\t\t<tr>
\t\t\t<th class=\"check checkAll\"><input type=\"checkbox\" /></th>
\t\t\t<th class=\"icon\">&nbsp;</th>
\t\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ZoneName", array(), "any"), "1");
        echo "</th>
\t\t\t<th>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ZoneType", array(), "any"), "1");
        echo "</th>
\t\t\t<th>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerGroupOrGroups", array(), "any"), "1");
        echo "</th>
\t\t\t<th style=\"width: 100px\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Status", array(), "any"), "1");
        echo "</th>
\t\t\t<th style=\"width: 180px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Action", array(), "any"), "1");
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['taxZones']) ? $context['taxZones'] : null));
        $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
        $length = $countable ? count($context['_seq']) : null;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if ($countable) {
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['taxZone']) {
            echo "\t\t\t<tr class=\"";
            // line 16
            if ($this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "default", array(), "any")) {
                echo "highlight";
            }
            echo "\">
\t\t\t\t<td class=\"check\">
\t\t\t\t\t<input type=\"checkbox\" name=\"taxZone[]\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "id", array(), "any"), "1");
            echo "\" ";
            if ($this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "default", array(), "any")) {
                echo "disabled=\"disabled\"";
            }
            echo " />
\t\t\t\t</td>
\t\t\t\t<td><img src=\"images/zone.gif\" alt=\"\" /></td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "name", array(), "any"), "1");
            echo "
\t\t\t\t\t";
            // line 23
            if ($this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "default", array(), "any")) {
                echo "\t\t\t\t\t\t <strong>(";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EverywhereElse", array(), "any"), "1");
                echo " - <a href=\"#\" class=\"defaultZoneDefinition\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "WhatDoesThisMean", array(), "any"), "1");
                echo "</a>)</strong>
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 28
            if ($this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "default", array(), "any")) {
                echo "\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TaxZoneTypeShortGlobal", array(), "any"), "1");
                echo "
\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t";
                // line 31
                echo getLang(("TaxZoneTypeShort") . (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "type", array(), "any"))));
                echo "\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_iterated'] = false;
            $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "customerGroups", array(), "any"));
            $countable = is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable);
            $length = $countable ? count($context['_seq']) : null;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if ($countable) {
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context['_key'] => $context['groupName']) {
                $context['_iterated'] = true;
                echo "\t\t\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, (isset($context['groupName']) ? $context['groupName'] : null), "1");
                echo "
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if ($countable) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 37
                echo "\t\t\t\t\t\t";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "NA", array(), "any"), "1");
                echo "
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupName'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 42
            if ($this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "default", array(), "any") == false) {
                echo "\t\t\t\t\t\t<a href=\"#toggle";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "id", array(), "any"), "1");
                echo "\" class=\"toggleTaxZoneStatusLink statusToggle";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "enabled", array(), "any"), "1");
                echo "\">
\t\t\t\t\t\t\tToggle
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t&nbsp;
\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"index.php?ToDo=editTaxZone&amp;id=";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "id", array(), "any"), "1");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EditSettings", array(), "any"), "1");
            echo "</a>
\t\t\t\t\t<a href=\"index.php?ToDo=editTaxZone&amp;id=";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "id", array(), "any"), "1");
            echo "#taxRatesTab\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EditRates", array(), "any"), "1");
            echo "</a>
\t\t\t\t\t<a href=\"#copy";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "id", array(), "any"), "1");
            echo "\" class=\"copyTaxZoneLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Copy", array(), "any"), "1");
            echo "</a>
\t\t\t\t\t";
            // line 54
            if ($this->getAttribute((isset($context['taxZone']) ? $context['taxZone'] : null), "default", array(), "any") == false) {
                echo "\t\t\t\t\t\t<a href=\"#\" class=\"deleteTaxZoneLink\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Delete", array(), "any"), "1");
                echo "</a>
\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if ($countable) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxZone'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 59
        echo "\t</tbody>
</table>
";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "paging", array((isset($context['numTaxZones']) ? $context['numTaxZones'] : null), (isset($context['taxZonesPerPage']) ? $context['taxZonesPerPage'] : null), (isset($context['currentPage']) ? $context['currentPage'] : null), "index.php?ToDo=manageTaxSettings&page={page}#taxZonesTab", ), "method"), "1");
    }

}

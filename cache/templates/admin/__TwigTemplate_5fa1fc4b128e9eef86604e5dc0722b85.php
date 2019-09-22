<?php

/* macros/util.tpl */
class __TwigTemplate_5fa1fc4b128e9eef86604e5dc0722b85 extends Twig_Template
{
    public function display(array $context)
    {
        // line 47
        echo "
";
        // line 58
        echo "
";
        // line 66
        echo "
";
        // line 70
        echo "
";
        // line 74
        echo "
";
        // line 78
        echo "
";
        // line 82
        echo "
";
        // line 90
        echo "
";
        // line 94
        echo "
";
        // line 112
        echo "

";
        // line 128
        echo "
";
        // line 159
        echo "
";
        // line 171
        echo "
";
        // line 180
        echo "
";
    }

    // line 1
    public function getpaging($numResults = null, $perPage = null, $currentPage = null, $url = null, $showPerPage = null)
    {
        $context = array(
            "numResults" => $numResults,
            "perPage" => $perPage,
            "currentPage" => $currentPage,
            "url" => $url,
            "showPerPage" => $showPerPage,
        );

        echo "\t";
        // line 2
        if (twig_in_filter("?", (isset($context['url']) ? $context['url'] : null)) == false) {
            $context['url'] = ((isset($context['url']) ? $context['url'] : null)) . ("?");
        }
        echo "\t";
        // line 3
        $context['numPagesFloat'] = ((isset($context['numResults']) ? $context['numResults'] : null)) / ((isset($context['perPage']) ? $context['perPage'] : null));
        echo "\t";
        // line 4
        $context['numPages'] = floor(((isset($context['numResults']) ? $context['numResults'] : null)) / ((isset($context['perPage']) ? $context['perPage'] : null)));
        echo "\t";
        // line 5
        if ((isset($context['numPagesFloat']) ? $context['numPagesFloat'] : null) > (isset($context['numPages']) ? $context['numPages'] : null)) {
            echo "\t\t";
            // line 6
            $context['numPages'] = ((isset($context['numPages']) ? $context['numPages'] : null)) + (1);
            echo "\t";
        }
        // line 7
        echo "\t";
        // line 8
        $context['start'] = ((isset($context['currentPage']) ? $context['currentPage'] : null)) - (4);
        echo "\t";
        // line 9
        $context['end'] = ((isset($context['currentPage']) ? $context['currentPage'] : null)) + (4);
        echo "\t";
        // line 10
        if ((isset($context['start']) ? $context['start'] : null) < 1) {
            $context['start'] = 1;
        }
        echo "\t";
        // line 11
        if ((isset($context['end']) ? $context['end'] : null) > (isset($context['numPages']) ? $context['numPages'] : null)) {
            $context['end'] = (isset($context['numPages']) ? $context['numPages'] : null);
        }
        echo "\t";
        // line 12
        if ((isset($context['numResults']) ? $context['numResults'] : null) > 0) {
            echo "\t\t<p class=\"paging\">
\t\t\t(";
            // line 14
            echo getLang("Pagination", array("page" => (isset($context['currentPage']) ? $context['currentPage'] : null), "num_pages" => (isset($context['numPages']) ? $context['numPages'] : null)));
            // line 17
            echo ")
\t\t\t&nbsp;&nbsp;
\t\t\t";
            // line 19
            if ((isset($context['currentPage']) ? $context['currentPage'] : null) > 1) {
                echo "\t\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context['url']) ? $context['url'] : null), "1");
                echo "&amp;page=1\">&laquo;&laquo;</a> |
\t\t\t\t<a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context['url']) ? $context['url'] : null), "1");
                echo "&amp;page=";
                echo ((isset($context['currentPage']) ? $context['currentPage'] : null)) - (1);
                echo "\">&laquo; ";
                echo getLang("Previous");
                echo "</a> |
\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t&laquo;&laquo; | &laquo; ";
                // line 23
                echo getLang("Previous");
                echo " |
\t\t\t";
            }
            // line 24
            echo "\t\t\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array(twig_range_filter((isset($context['start']) ? $context['start'] : null), (isset($context['end']) ? $context['end'] : null)));
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
            foreach ($context['_seq'] as $context['_key'] => $context['i']) {
                echo "\t\t\t\t";
                // line 26
                if ((isset($context['i']) ? $context['i'] : null) == (isset($context['currentPage']) ? $context['currentPage'] : null)) {
                    echo "<strong>";
                    echo twig_escape_filter($this->env, (isset($context['i']) ? $context['i'] : null), "1");
                    echo "</strong>&nbsp;|&nbsp;
\t\t\t\t";
                } else {
                    // line 27
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context['url']) ? $context['url'] : null), "1");
                    echo "&amp;page=";
                    echo twig_escape_filter($this->env, (isset($context['i']) ? $context['i'] : null), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context['i']) ? $context['i'] : null), "1");
                    echo "</a>&nbsp;|&nbsp;
\t\t\t\t";
                }
                // line 28
                echo "\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 29
            echo "\t\t\t";
            // line 30
            if ((isset($context['currentPage']) ? $context['currentPage'] : null) != (isset($context['numPages']) ? $context['numPages'] : null)) {
                echo "\t\t\t\t<a href=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context['url']) ? $context['url'] : null), "1");
                echo "&amp;page=";
                echo ((isset($context['currentPage']) ? $context['currentPage'] : null)) + (1);
                echo "\">";
                echo getLang("Next");
                echo " &raquo;</a> |
\t\t\t\t<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, (isset($context['url']) ? $context['url'] : null), "1");
                echo "&amp;page=";
                echo twig_escape_filter($this->env, (isset($context['numPages']) ? $context['numPages'] : null), "1");
                echo "\">&raquo;&raquo;</a>
\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t";
                // line 34
                echo getLang("Next");
                echo " &raquo; | &raquo;&raquo;
\t\t\t";
            }
            // line 35
            echo "\t\t\t";
            // line 36
            if ((isset($context['showPerPage']) ? $context['showPerPage'] : null)) {
                echo "\t\t\t\t";
                // line 37
                $context['pages'] = array(0 => 5, 1 => 10, 2 => 20, 3 => 30, 4 => 50, 5 => 100);
                echo "\t\t\t\t&nbsp;
\t\t\t\t<select class=\"PerPage\">
\t\t\t\t";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array((isset($context['pages']) ? $context['pages'] : null));
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
                foreach ($context['_seq'] as $context['_key'] => $context['page']) {
                    echo "\t\t\t\t\t<option ";
                    // line 41
                    if ((isset($context['page']) ? $context['page'] : null) == (isset($context['perPage']) ? $context['perPage'] : null)) {
                        echo "selected=\"selected\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, (isset($context['page']) ? $context['page'] : null), "1");
                    echo "\">";
                    echo getLang("PerPageX", array("count" => (isset($context['page']) ? $context['page'] : null)));
                    echo "</option>
\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 42
                echo "\t\t\t\t</select>
\t\t\t";
            }
            // line 44
            echo "\t\t</p>
\t";
        }
    }

    // line 49
    public function gettooltip($title = null, $content = null, $replacements = null)
    {
        $context = array(
            "title" => $title,
            "content" => $content,
            "replacements" => $replacements,
        );

        echo "\t<div class=\"tooltip\">
\t\t<div class=\"tooltipContent\">
\t\t\t<p class=\"title\">";
        // line 52
        echo getLang((isset($context['title']) ? $context['title'] : null), (isset($context['replacements']) ? $context['replacements'] : null));
        echo "</p>
\t\t\t<p class=\"message\">
\t\t\t\t";
        // line 54
        echo getLang((isset($context['content']) ? $context['content'] : null), (isset($context['replacements']) ? $context['replacements'] : null));
        echo "\t\t\t</p>
\t\t</div>
\t</div>
";
    }

    // line 60
    public function gettabs($tabs = null)
    {
        $context = array(
            "tabs" => $tabs,
        );

        echo "\t<ul class=\"tabnav\">
\t\t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['tabs']) ? $context['tabs'] : null));
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
        foreach ($context['_seq'] as $context['id'] => $context['label']) {
            echo "\t\t\t<li><a href=\"#";
            // line 63
            echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
            echo "\"><span>";
            echo twig_escape_filter($this->env, (isset($context['label']) ? $context['label'] : null), "1");
            echo "</span></a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 64
        echo "\t</ul>
";
    }

    // line 68
    public function getstartDropDownMenu($options = null)
    {
        $context = array(
            "options" => $options,
        );

        echo "\t<div id=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any"), "1");
        echo "\" class=\"DropShadow DropDownMenu\" style=\"display:none; width:";
        echo twig_escape_filter($this->env, twig_default_filter($this->getAttribute((isset($context['options']) ? $context['options'] : null), "width", array(), "any"), "200px"));
        echo ";\">
";
    }

    // line 72
    public function getendDropDownMenu()
    {
        $context = array(
        );

        echo "\t</div>
";
    }

    // line 76
    public function getstartDropDownMenuItemGroup()
    {
        $context = array(
        );

        echo "\t<ul>
";
    }

    // line 80
    public function getendDropDownMenuItemGroup()
    {
        $context = array(
        );

        echo "\t</ul>
";
    }

    // line 84
    public function getdropDownMenuItem($options = null)
    {
        $context = array(
            "options" => $options,
        );

        echo "\t<li ";
        // line 85
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any")) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any"), "1");
            echo "\"";
        }
        echo " ";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "class", array(), "any")) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "class", array(), "any"), "1");
            echo "\"";
        }
        echo " style=\"";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "display", array(), "any")) {
            echo "display:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "display", array(), "any"), "1");
            echo ";";
        }
        echo "\">
\t\t<a href=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_default_filter($this->getAttribute((isset($context['options']) ? $context['options'] : null), "href", array(), "any"), "javascript:;"));
        echo "\" style=\"";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "backgroundImage", array(), "any")) {
            echo "background-image:url('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "backgroundImage", array(), "any"), "1");
            echo "');padding-left:28px;";
        }
        echo "\">
\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "label", array(), "any"), "1");
        echo "
\t\t</a>
\t</li>
";
    }

    // line 92
    public function getdropDownMenuGroupSeparator()
    {
        $context = array(
        );

        echo "\t<hr />
";
    }

    // line 114
    public function getdropDownMenu($options = null)
    {
        $context = array(
            "options" => $options,
        );

        echo "\t";
        // line 115
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "\t";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "startDropDownMenu", array((isset($context['options']) ? $context['options'] : null), ), "method"), "1");
        echo "
\t\t";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['options']) ? $context['options'] : null), "groups", array(), "any"));
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
        foreach ($context['_seq'] as $context['_key'] => $context['group']) {
            echo "\t\t\t";
            // line 118
            if ($this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "index", array(), "any") > 1) {
                echo "\t\t\t\t";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "dropDownMenuGroupSeparator", array(), "method"), "1");
                echo "
\t\t\t";
            }
            // line 120
            echo "\t\t\t";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "startDropDownMenuItemGroup", array(), "method"), "1");
            echo "
\t\t\t\t";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['group']) ? $context['group'] : null));
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
            foreach ($context['_seq'] as $context['_key'] => $context['item']) {
                echo "\t\t\t\t\t";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "dropDownMenuItem", array((isset($context['item']) ? $context['item'] : null), ), "method"), "1");
                echo "
\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 124
            echo "\t\t\t";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "endDropDownMenuItemGroup", array(), "method"), "1");
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 126
        echo "\t";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "endDropDownMenu", array(), "method"), "1");
        echo "
";
    }

    // line 130
    public function getaddress($address = null)
    {
        $context = array(
            "address" => $address,
        );

        echo "\t";
        // line 131
        if (($this->getAttribute((isset($context['address']) ? $context['address'] : null), "firstname", array(), "any")) || ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "lastname", array(), "any"))) {
            echo "\t\t<div>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "firstname", array(), "any"), "1");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "lastname", array(), "any"), "1");
            echo "</div>
\t";
        } else {
            // line 133
            echo "\t\t<div>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "first_name", array(), "any"), "1");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "last_name", array(), "any"), "1");
            echo "</div>
\t";
        }
        // line 135
        echo "
\t<div>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "company", array(), "any"), "1");
        echo "</div>

\t";
        // line 139
        if (($this->getAttribute((isset($context['address']) ? $context['address'] : null), "address1", array(), "any")) || ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "address2", array(), "any"))) {
            echo "\t\t<div>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "address1", array(), "any"), "1");
            echo "</div>
\t\t<div>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "address2", array(), "any"), "1");
            echo "</div>
\t";
        } else {
            // line 142
            echo "\t\t<div>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "address_1", array(), "any"), "1");
            echo "</div>
\t\t<div>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "address_2", array(), "any"), "1");
            echo "</div>
\t";
        }
        // line 145
        echo "
\t<div>
\t\t";
        // line 148
        $context['state'] = twig_default_filter($this->getAttribute((isset($context['address']) ? $context['address'] : null), "state", array(), "any"), $this->getAttribute((isset($context['address']) ? $context['address'] : null), "getStateName", array(), "any"));
        echo "\t\t";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "city", array(), "any"), "1");
        if (($this->getAttribute((isset($context['address']) ? $context['address'] : null), "city", array(), "any")) && (((isset($context['state']) ? $context['state'] : null)) || ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "zip", array(), "any")))) {
            echo ", ";
        }
        echo "\t\t";
        // line 150
        echo twig_escape_filter($this->env, (isset($context['state']) ? $context['state'] : null), "1");
        if (((isset($context['state']) ? $context['state'] : null)) && ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "zip", array(), "any"))) {
            echo ", ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "zip", array(), "any"), "1");
        echo "
\t</div>
\t<div>
\t\t";
        // line 153
        echo twig_default_filter(twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "country", array(), "any"), "1"), twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "getCountryName", array(), "any"), "1"));
        echo "

\t\t";
        // line 155
        if ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "countryFlag", array(), "any")) {
            echo "\t\t\t<img src=\"../lib/flags/";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "countryFlag", array(), "any"), "1");
            echo ".gif\" style=\"vertical-align: middle\" alt=\"\" />
\t\t";
        }
        // line 157
        echo "\t</div>
";
    }

    // line 172
    public function getjslang($list = null)
    {
        $context = array(
            "list" => $list,
        );

        echo "\t";
        // line 173
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['list']) ? $context['list'] : null));
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
        foreach ($context['_seq'] as $context['index'] => $context['lang']) {
            echo "\t\t";
            // line 174
            if (twig_length_filter($this->env, twig_get_array_keys_filter((isset($context['lang']) ? $context['lang'] : null)))) {
                echo "\t\t\tlang[\"";
                // line 175
                echo $this->getEnvironment()->getExtension('interspire')->jsFilter((isset($context['index']) ? $context['index'] : null));
                echo "\"] = \"";
                echo Interspire_Template_Extension::jsFilter(getLang((isset($context['index']) ? $context['index'] : null), (isset($context['lang']) ? $context['lang'] : null)), "'");
                echo "\";
\t\t";
            } else {
                // line 176
                echo "\t\t\tlang[\"";
                // line 177
                echo $this->getEnvironment()->getExtension('interspire')->jsFilter((isset($context['lang']) ? $context['lang'] : null));
                echo "\"] = \"";
                echo Interspire_Template_Extension::jsFilter(getLang((isset($context['lang']) ? $context['lang'] : null)), "'");
                echo "\";
\t\t";
            }
            // line 178
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 182
    public function getenabledSwitch($isEnabled = null)
    {
        $context = array(
            "isEnabled" => $isEnabled,
        );

        echo "\t";
        // line 183
        if ((isset($context['isEnabled']) ? $context['isEnabled'] : null)) {
            echo "\t\t<img border=\"0\" alt=\"";
            // line 184
            echo getLang("Tick");
            echo "\" src=\"images/tick.gif\"/>
\t";
        } else {
            // line 185
            echo "\t\t<img border=\"0\" alt=\"";
            // line 186
            echo getLang("Cross");
            echo "\" src=\"images/cross.gif\"/>
\t";
        }
    }

}

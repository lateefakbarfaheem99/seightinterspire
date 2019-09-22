<?php

/* macros/forms.tpl */
class __TwigTemplate_7adbeacfe851b3791e9d926a9e8d72f0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 7
        echo "
";
        // line 11
        echo "
";
        // line 15
        echo "
";
        // line 19
        echo "
";
        // line 26
        echo "
";
        // line 32
        echo "
";
        // line 36
        echo "
";
        // line 40
        echo "
";
        // line 51
        echo "
";
        // line 55
        echo "
";
        // line 63
        echo "
";
        // line 71
        echo "
";
        // line 77
        echo "
";
        // line 81
        echo "
";
        // line 91
        echo "
";
        // line 95
        echo "
";
        // line 99
        echo "
";
        // line 107
        echo "
";
        // line 115
        echo "
";
        // line 119
        echo "
";
        // line 123
        echo "
";
    }

    // line 1
    public function getstartForm($options = null)
    {
        $context = array(
            "options" => $options,
        );

        echo "\t";
        // line 2
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "type", array(), "any") == "vertical") {
            echo "\t\t<div class=\"verticalFormContainer ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "class", array(), "any"), "1");
            echo "\">
\t";
        } else {
            // line 4
            echo "\t\t<div class=\"horizontalFormContainer ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "class", array(), "any"), "1");
            echo "\">
\t";
        }
    }

    // line 9
    public function getendForm()
    {
        $context = array(
        );

        echo "\t</div>
";
    }

    // line 13
    public function getstartHeading()
    {
        $context = array(
        );

        echo "\t<div class=\"header\">
";
    }

    // line 17
    public function getendHeading()
    {
        $context = array(
        );

        echo "\t</div>
";
    }

    // line 21
    public function getheading($value = null)
    {
        $context = array(
            "value" => $value,
        );

        echo "\t";
        // line 22
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startHeading", array(), "any"), "1");
        echo "
\t\t";
        // line 24
        echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
        echo "
\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endHeading", array(), "any"), "1");
        echo "
";
    }

    // line 28
    public function getintro($value = null)
    {
        $context = array(
            "value" => $value,
        );

        echo "\t<div class=\"intro\">
\t\t";
        // line 30
        echo twig_safe_filter((isset($context['value']) ? $context['value'] : null));
        echo "
\t</div>
";
    }

    // line 34
    public function getstartRowGroup($options = null)
    {
        $context = array(
            "options" => $options,
        );

        echo "\t<div class=\"formGroup ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "class", array(), "any"), "1");
        echo "\" ";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any")) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any"), "1");
            echo "\"";
        }
        echo " style=\"";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "hidden", array(), "any")) {
            echo "display: none;";
        }
        echo "\">
";
    }

    // line 38
    public function getendRowGroup()
    {
        $context = array(
        );

        echo "\t</div>
";
    }

    // line 42
    public function getstartRow($options = null)
    {
        $context = array(
            "options" => $options,
        );

        echo "\t<div class=\"formRow ";
        // line 43
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "label", array(), "any") == false) {
            echo "formRowUnlabeled";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "class", array(), "any"), "1");
        echo " ";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "last", array(), "any")) {
            echo "formRowLast";
        }
        echo "\" style=\"";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "hidden", array(), "any")) {
            echo "display: none;";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any")) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any"), "1");
            echo "\"";
        }
        echo ">
\t\t";
        // line 44
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "label", array(), "any")) {
            echo "\t\t\t<label class=\"label\" ";
            // line 45
            if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "for", array(), "any")) {
                echo "for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "for", array(), "any"), "1");
                echo "\"";
            }
            echo ">
\t\t\t\t<span class=\"Required\" ";
            // line 46
            if ((!$this->getAttribute((isset($context['options']) ? $context['options'] : null), "required", array(), "any"))) {
                echo "style=\"visibility:hidden;\"";
            }
            echo ">*</span>
\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "label", array(), "any"), "1");
            echo "
\t\t\t</label>
\t\t";
        }
        // line 49
        echo "\t\t<div class=\"value\">
";
    }

    // line 53
    public function getnodeJoin()
    {
        $context = array(
        );

        echo "\t<img src=\"images/nodejoin.gif\" width=\"20\" height=\"20\" />
";
    }

    // line 57
    public function getendRow($note = null)
    {
        $context = array(
            "note" => $note,
        );

        echo "\t\t";
        // line 58
        if ((isset($context['note']) ? $context['note'] : null)) {
            echo "\t\t\t<p class=\"note\">";
            // line 59
            echo twig_escape_filter($this->env, (isset($context['note']) ? $context['note'] : null), "1");
            echo "</p>
\t\t";
        }
        // line 60
        echo "\t</div>
</div>
";
    }

    // line 65
    public function getselect($name = null, $options = null, $selected = null, $attributes = null)
    {
        $context = array(
            "name" => $name,
            "options" => $options,
            "selected" => $selected,
            "attributes" => $attributes,
        );

        echo "\t<select name=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
        echo "\" ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['attributes']) ? $context['attributes'] : null));
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
        foreach ($context['_seq'] as $context['name'] => $context['value']) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "\" ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">
\t\t";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['options']) ? $context['options'] : null));
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
        foreach ($context['_seq'] as $context['value'] => $context['label']) {
            echo "\t\t\t<option value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "\" ";
            if (((isset($context['value']) ? $context['value'] : null) == (isset($context['selected']) ? $context['selected'] : null)) || (twig_in_filter((isset($context['value']) ? $context['value'] : null), (isset($context['selected']) ? $context['selected'] : null)))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context['label']) ? $context['label'] : null), "1");
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
        echo "\t</select>
";
    }

    // line 73
    public function getinput($type = null, $name = null, $value = null, $attributes = null)
    {
        $context = array(
            "type" => $type,
            "name" => $name,
            "value" => $value,
            "attributes" => $attributes,
        );

        echo "\t<input name=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context['type']) ? $context['type'] : null), "1");
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
        echo "\"
\t\t";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['attributes']) ? $context['attributes'] : null));
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
        foreach ($context['_seq'] as $context['name'] => $context['value']) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "\" ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\t/>
";
    }

    // line 79
    public function gettextarea($name = null, $contents = null, $attributes = null)
    {
        $context = array(
            "name" => $name,
            "contents" => $contents,
            "attributes" => $attributes,
        );

        echo "\t<textarea name=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
        echo "\" ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['attributes']) ? $context['attributes'] : null));
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
        foreach ($context['_seq'] as $context['name'] => $context['value']) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "\" ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, (isset($context['contents']) ? $context['contents'] : null), "1");
        echo "</textarea>
";
    }

    // line 83
    public function getradioList($name = null, $options = null, $checked = null, $attributes = null)
    {
        $context = array(
            "name" => $name,
            "options" => $options,
            "checked" => $checked,
            "attributes" => $attributes,
        );

        echo "\t";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['options']) ? $context['options'] : null));
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
        foreach ($context['_seq'] as $context['value'] => $context['label']) {
            echo "\t\t<label>\t<input name=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo "\" type=\"radio\" value=\"";
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "\"
\t\t\t\t";
            // line 86
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['attributes']) ? $context['attributes'] : null));
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
            foreach ($context['_seq'] as $context['name'] => $context['value']) {
                echo "\t";
                echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
                echo "\" ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\t\t\t\t";
            // line 87
            if ((isset($context['checked']) ? $context['checked'] : null) == (isset($context['value']) ? $context['value'] : null)) {
                echo "checked=\"checked\"";
            }
            echo "\t\t/>";
            // line 88
            echo twig_escape_filter($this->env, (isset($context['label']) ? $context['label'] : null), "1");
            echo "</label>
\t\t";
            // line 89
            if ($this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "last", array(), "any") == false) {
                echo "<br />";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 93
    public function getstartButtonRow($class = null)
    {
        $context = array(
            "class" => $class,
        );

        echo "\t<p class=\"buttonRow ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context['class']) ? $context['class'] : null), "1");
        echo "\">
";
    }

    // line 97
    public function getendButtonRow()
    {
        $context = array(
        );

        echo "\t</p>
";
    }

    // line 101
    public function getmultiSelect($name = null, $options = null, $selected = null, $attributes = null)
    {
        $context = array(
            "name" => $name,
            "options" => $options,
            "selected" => $selected,
            "attributes" => $attributes,
        );

        echo "\t<select name=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
        echo "\" multiple=\"multiple\" ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['attributes']) ? $context['attributes'] : null));
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
        foreach ($context['_seq'] as $context['name'] => $context['value']) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "\" ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">
\t\t";
        // line 103
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['options']) ? $context['options'] : null));
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
        foreach ($context['_seq'] as $context['value'] => $context['label']) {
            echo "\t\t\t<option value=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "\" ";
            if (twig_in_filter((isset($context['value']) ? $context['value'] : null), (isset($context['selected']) ? $context['selected'] : null))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context['label']) ? $context['label'] : null), "1");
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 105
        echo "\t</select>
";
    }

    // line 109
    public function gethiddenInputs($pairs = null, $exclude = null)
    {
        $context = array(
            "pairs" => $pairs,
            "exclude" => $exclude,
        );

        echo "\t";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['pairs']) ? $context['pairs'] : null));
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
        foreach ($context['_seq'] as $context['key'] => $context['value']) {
            echo "\t\t";
            // line 111
            if ((!twig_in_filter((isset($context['key']) ? $context['key'] : null), (isset($context['exclude']) ? $context['exclude'] : null)))) {
                echo "\t\t\t<input type=\"hidden\" name=\"";
                // line 112
                echo twig_escape_filter($this->env, (isset($context['key']) ? $context['key'] : null), "1");
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
                echo "\" />
\t\t";
            }
            // line 113
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 117
    public function getsaveButton($label = null, $id = null)
    {
        $context = array(
            "label" => $label,
            "id" => $id,
        );

        echo "\t<input type=\"submit\" id=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
        echo "\" class=\"saveButton\" value=\"";
        echo getLang("Save");
        echo "\" />
";
    }

    // line 121
    public function getcancelButton($label = null, $id = null)
    {
        $context = array(
            "label" => $label,
            "id" => $id,
        );

        echo "\t<input type=\"reset\" id=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
        echo "\" class=\"cancelButton\" value=\"";
        echo getLang("Cancel");
        echo "\" />
";
    }

    // line 125
    public function getcheckbox($options = null)
    {
        $context = array(
            "options" => $options,
        );

        echo "\t<label><input type=\"checkbox\" name=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "name", array(), "any"), "1");
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "class", array(), "any"), "1");
        echo "\" ";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any")) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "id", array(), "any"), "1");
            echo "\"";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, twig_default_filter($this->getAttribute((isset($context['options']) ? $context['options'] : null), "value", array(), "any"), 1));
        echo "\" ";
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "checked", array(), "any")) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['options']) ? $context['options'] : null), "label", array(), "any"), "1");
        echo "</label>
";
    }

}

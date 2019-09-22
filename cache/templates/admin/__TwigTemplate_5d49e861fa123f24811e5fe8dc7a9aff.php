<?php

/* order.form.customizeitem.tpl */
class __TwigTemplate_5d49e861fa123f24811e5fe8dc7a9aff extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 3
        $context['self'] = $this->env->loadTemplate("order.form.customizeitem.tpl", true);
        echo "
<div class=\"ModalTitle\">
\t";
        // line 6
        echo getLang("CustomizeItem", array("item" => $this->getAttribute((isset($context['item']) ? $context['item'] : null), "name", array(), "any")));
        // line 8
        echo "</div>
<form id=\"orderCustomizeItemForm\" action=\"#\">
\t<div class=\"ModalContent orderCustomizeItemModal\">
\t\t<div id=\"orderCustomizeItem\">
\t\t\t<input type=\"hidden\" name=\"activeTab\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "activeTab", array(), "any"), "1");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"productId\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "productId", array(), "any"), "1");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"itemId\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "itemId", array(), "any"), "1");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"quoteSession\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "quoteSession", array(), "any"), "1");
        echo "\" />

\t\t\t<input type=\"hidden\" name=\"variationId\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "variationId", array(), "any"), "1");
        echo "\" class=\"CartVariationId\" />
\t\t\t<input type=\"hidden\" name=\"optionRequired\" class=\"ProductVariationRequired\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodoptionsrequired", array(), "any"), "1");
        echo "\" />

\t\t\t<input type=\"hidden\" name=\"isCustomPrice\" value=\"\" />

\t\t\t<ul class=\"tabnav\">
\t\t\t\t<li><a href=\"#basicTab\">";
        // line 24
        echo getLang("BasicDetails");
        echo "</a></li>
\t\t\t\t";
        // line 25
        if ((isset($context['variationOptions']) ? $context['variationOptions'] : null)) {
            echo "\t\t\t\t\t<li><a href=\"#variationTab\">";
            // line 26
            echo getLang("Variation");
            echo "</a></li>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t";
        // line 28
        if ((isset($context['configurableFields']) ? $context['configurableFields'] : null)) {
            echo "\t\t\t\t\t<li><a href=\"#configurableFieldsTab\">";
            // line 29
            echo getLang("ConfigurableFields");
            echo "</a></li>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
        // line 31
        if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodeventdaterequired", array(), "any")) {
            echo "\t\t\t\t\t<li><a href=\"#eventDateTab\">";
            // line 32
            echo getLang("EventDate");
            echo "</a></li>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t";
        // line 34
        if ((isset($context['giftWrappingOptions']) ? $context['giftWrappingOptions'] : null)) {
            echo "\t\t\t\t\t<li><a href=\"#wrappingTab\">";
            // line 35
            echo getLang("GiftWrapping");
            echo "</a></li>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</ul>

\t\t\t<div id=\"basicTab\">
\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "BasicDetails", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Name", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 46
        echo "
\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "name", array(), "any"), "1");
        echo "\" class=\"Field250\" ";
        if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "productId", array(), "any")) {
            echo "disabled=\"disabled\"";
        }
        echo " />
\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 50
        if ((!$this->getAttribute((isset($context['item']) ? $context['item'] : null), "productId", array(), "any"))) {
            echo "\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SKU", array(), "any")) . (":")), ), "method"), "1");
            // line 53
            echo "
\t\t\t\t\t\t\t<input type=\"text\" name=\"sku\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "sku", array(), "any"), "1");
            echo "\" class=\"Field100\" />
\t\t\t\t\t\t";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
            echo "
\t\t\t\t\t";
        }
        // line 56
        echo "
\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ItemPrice", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 61
        echo "
\t\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, (isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null), "1");
        echo "
\t\t\t\t\t\t<input type=\"text\" name=\"price\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "price", array(), "any"), "1");
        echo "\" class=\"VariationProductPrice Field50\" />
\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, (isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null), "1");
        echo "
\t\t\t\t\t";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Quantity", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 70
        echo "
\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any"), "1");
        echo "\" class=\"Field20\" />
\t\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t</div>

\t\t\t";
        // line 76
        if ((isset($context['variationOptions']) ? $context['variationOptions'] : null)) {
            echo "\t\t\t\t<div id=\"variationTab\">
\t\t\t\t\t";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array("Variation", ), "method"), "1");
            echo "

\t\t\t\t\t\t";
            // line 81
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['variationOptions']) ? $context['variationOptions'] : null));
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
            foreach ($context['_seq'] as $context['_key'] => $context['name']) {
                echo "\t\t\t\t\t\t\t";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ((isset($context['name']) ? $context['name'] : null)) . (":"), "required" => $this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodoptionsrequired", array(), "any")), ), "method"), "1");
                // line 85
                echo "
\t\t\t\t\t\t\t\t<select class=\"Field300 VariationSelect\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseAnOption", array(), "any"), "1");
                echo "</option>
\t\t\t\t\t\t\t\t\t";
                // line 88
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['variationValues']) ? $context['variationValues'] : null), (isset($context['name']) ? $context['name'] : null), array(), "array"));
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
                foreach ($context['_seq'] as $context['id'] => $context['value']) {
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    // line 89
                    echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
                    echo "\" ";
                    if ($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "variationOptions", array(), "any"), (isset($context['name']) ? $context['name'] : null), array(), "array") == (isset($context['value']) ? $context['value'] : null)) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['id'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 90
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
                echo "
\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 93
            echo "\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 96
        echo "
\t\t\t";
        // line 98
        if ((isset($context['configurableFields']) ? $context['configurableFields'] : null)) {
            echo "\t\t\t\t<div id=\"configurableFieldsTab\">
\t\t\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ConfigurableFields", array(), "any"), ), "method"), "1");
            echo "

\t\t\t\t\t\t";
            // line 103
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['configurableFields']) ? $context['configurableFields'] : null));
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
            foreach ($context['_seq'] as $context['_key'] => $context['field']) {
                echo "\t\t\t\t\t\t\t";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "name", array(), "any")) . (":"), "required" => $this->getAttribute((isset($context['field']) ? $context['field'] : null), "required", array(), "any"), "class" => "ConfigurableField"), ), "method"), "1");
                // line 108
                echo "
\t\t\t\t\t\t\t\t";
                // line 109
                if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "type", array(), "any") == "textarea") {
                    echo "\t\t\t\t\t\t\t\t\t<textarea cols=\"30\" rows=\"3\" name=\"configurableFields[";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), "1");
                    echo "]\" class=\"Field300 ";
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "required", array(), "any")) {
                        echo "FieldRequired";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"), $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), array(), "array"), "value", array(), "any"), "1");
                    echo "</textarea>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "type", array(), "any") == "file") {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 112
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"), $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), array(), "array"), "value", array(), "any")) {
                        echo "\t\t\t\t\t\t\t\t\t\t<div style=\"padding: 4px 0;\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 114
                        echo getLang("Currently");
                        echo ": <a href=\"#\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"), $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), array(), "array"), "fileOriginalName", array(), "any"), "1");
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 116
                        if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "required", array(), "any") == 0) {
                            echo "\t\t\t\t\t\t\t\t\t\t\t <label>(<input type=\"checkbox\" class=\"RemoveCheckbox\" name=\"removeConfigurableField[";
                            // line 117
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), "1");
                            echo "]\" value=\"1\" />";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Remove", array(), "any"), "1");
                            echo "?)</label>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 118
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"configurableFields[";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), "1");
                    echo "]\" class=\"Field300 ";
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "required", array(), "any")) {
                        echo "FieldRequired";
                    }
                    echo " ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"), $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), array(), "array"), "value", array(), "any")) {
                        echo "HasExistingValue";
                    }
                    echo "\" />
\t\t\t\t\t\t\t\t\t<div style=\"padding: 4px 0\">
\t\t\t\t\t\t\t\t\t\t<em>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 124
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "fileSize", array(), "any") > 0) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 125
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "MaximumSize", array(), "any"), "1");
                        echo ": ";
                        echo Store_Number::niceSize(($this->getAttribute((isset($context['field']) ? $context['field'] : null), "fileSize", array(), "any")) * (1024));
                        echo ".
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 126
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 127
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "fileType", array(), "any")) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 128
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "AllowedTypes", array(), "any"), "1");
                        echo ": <span cass=\"FileTypes\">";
                        echo twig_upper_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "fileType", array(), "any"), "1"));
                        echo "</span>.
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t</em>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "type", array(), "any") == "select") {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t<select name=\"configurableFields[";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), "1");
                    echo "]\" class=\"Field300 ";
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "required", array(), "any")) {
                        echo "FieldRequired";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 134
                    echo getLang("FormFieldSetupChoosePrefixDefault");
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 135
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['field']) ? $context['field'] : null), "selectOptions", array(), "any"));
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
                    foreach ($context['_seq'] as $context['_key'] => $context['option']) {
                        echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 136
                        echo twig_escape_filter($this->env, (isset($context['option']) ? $context['option'] : null), "1");
                        echo "\" ";
                        if ((isset($context['option']) ? $context['option'] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"), $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), array(), "array"), "value", array(), "any")) {
                            echo "selected=\"selected\"";
                        }
                        echo ">";
                        echo twig_escape_filter($this->env, (isset($context['option']) ? $context['option'] : null), "1");
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "type", array(), "any") == "checkbox") {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"configurableFields[";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), "1");
                    echo "]\" value=\"1\" ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"), $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), array(), "array"), "value", array(), "any")) {
                        echo "checked=\"checked\"";
                    }
                    echo " class=\"";
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "required", array(), "any")) {
                        echo "FieldRequired";
                    }
                    echo "\" />
\t\t\t\t\t\t\t\t";
                } else {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"configurableFields[";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), "1");
                    echo "]\" class=\"Field300 ";
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "required", array(), "any")) {
                        echo "FieldRequired";
                    }
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"), $this->getAttribute((isset($context['field']) ? $context['field'] : null), "id", array(), "any"), array(), "array"), "value", array(), "any"), "1");
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t\t\t";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
                echo "
\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 146
            echo "\t\t\t\t\t";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 149
        echo "
\t\t\t";
        // line 151
        if ((isset($context['giftWrappingOptions']) ? $context['giftWrappingOptions'] : null)) {
            echo "\t\t\t\t<div id=\"wrappingTab\">
\t\t\t\t\t<p class=\"intro\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseHowToWrapItems", array(), "any"), "1");
            echo "</p>

\t\t\t\t\t";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "GiftWrapping", array(), "any"), ), "method"), "1");
            echo "

\t\t\t\t\t\t";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "GiftWrappingMethod", array(), "any")) . (":"), "required" => true), ), "method"), "1");
            // line 161
            echo "
\t\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"giftWrappingType\" value=\"none\" ";
            // line 163
            if ($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "wrapping", array(), "any"), "wrapid", array(), "any") == 0) {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo getLang("DoNotApplyGiftWrapping");
            echo "\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"giftWrappingType\" value=\"same\" ";
            // line 167
            if ($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "wrapping", array(), "any"), "wrapid", array(), "any")) {
                echo "checked=\"checked\"";
            }
            echo " />
\t\t\t\t\t\t\t\t";
            // line 168
            if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any") == 1) {
                echo " ";
                echo getLang("GiftWrapThisItem");
                echo "\t\t\t\t\t\t\t\t";
            } else {
                // line 169
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "WrapItemsTheSame", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t";
            // line 173
            if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any") > 1) {
                echo "\t\t\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"giftWrappingType\" value=\"different\" /> ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "WrapItemsDifferently", array(), "any"), "1");
                echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
            }
            // line 177
            echo "\t\t\t\t\t\t";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
            echo "

\t\t\t\t\t\t";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("hidden" => $this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "wrapping", array(), "any"), "wrapid", array(), "any") == 0, "class" => "giftWrappingTypeSame giftWrappingType"), ), "method"), "1");
            // line 183
            echo "
\t\t\t\t\t\t\t";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['self']) ? $context['self'] : null), "drawGiftWrappingOptions", array((isset($context['lang']) ? $context['lang'] : null), (isset($context['giftWrappingOptions']) ? $context['giftWrappingOptions'] : null), $this->getAttribute((isset($context['item']) ? $context['item'] : null), "wrapping", array(), "any"), "all", ), "method"), "1");
            echo "
\t\t\t\t\t\t";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
            echo "
\t\t\t\t\t";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
            echo "

\t\t\t\t\t";
            // line 188
            if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any") > 1) {
                echo "\t\t\t\t\t\t<div class=\"giftWrappingType giftWrappingTypeDifferent\" style=\"display: none\">
\t\t\t\t\t\t\t";
                // line 190
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array(twig_range_filter(1, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any")));
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
                foreach ($context['_seq'] as $context['_key'] => $context['num']) {
                    echo "\t\t\t\t\t\t\t\t";
                    // line 191
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 192
                    ob_start();
                    echo getLang("GiftWrappingForOne", array("item" => $this->getAttribute((isset($context['item']) ? $context['item'] : null), "name", array(), "any")));
                    $context['heading'] = ob_get_clean();
                    echo "\t\t\t\t\t\t\t\t\t";
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array((isset($context['heading']) ? $context['heading'] : null), ), "method"), "1");
                    echo "

\t\t\t\t\t\t\t\t\t";
                    // line 195
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['self']) ? $context['self'] : null), "drawGiftWrappingOptions", array((isset($context['lang']) ? $context['lang'] : null), (isset($context['giftWrappingOptions']) ? $context['giftWrappingOptions'] : null), $this->getAttribute((isset($context['item']) ? $context['item'] : null), "wrapping", array(), "any"), (isset($context['num']) ? $context['num'] : null), ), "method"), "1");
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 196
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 197
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 199
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 201
        echo "
\t\t\t";
        // line 203
        if ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodeventdaterequired", array(), "any")) {
            echo "\t\t\t\t<div id=\"eventDateTab\">
\t\t\t\t\t";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
            echo "
\t\t\t\t\t\t";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "EventDate", array(), "any"), ), "method"), "1");
            echo "

\t\t\t\t\t\t";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodeventdatefieldname", array(), "any")) . (":"), "required" => true), ), "method"), "1");
            // line 211
            echo "
\t\t\t\t\t\t\t<select name=\"eventDate[month]\" class=\"Field50\" id=\"EventDateMonth\">
\t\t\t\t\t\t\t\t<option value=\"-1\">---</option>
\t\t\t\t\t\t\t\t";
            // line 214
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "monthOptions", array(), "any"));
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
            foreach ($context['_seq'] as $context['id'] => $context['month']) {
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 215
                echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
                echo "\" ";
                if ((isset($context['id']) ? $context['id'] : null) == $this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "eventDate", array(), "any"), "month", array(), "any")) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context['month']) ? $context['month'] : null), "1");
                echo "</option>
\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['month'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 216
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"eventDate[day]\" class=\"Field50\" id=\"EventDateDay\">
\t\t\t\t\t\t\t\t<option value=\"-1\">---</option>
\t\t\t\t\t\t\t\t";
            // line 220
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array(twig_range_filter(1, 31));
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
            foreach ($context['_seq'] as $context['_key'] => $context['day']) {
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 221
                echo twig_escape_filter($this->env, (isset($context['day']) ? $context['day'] : null), "1");
                echo "\" ";
                if ((isset($context['day']) ? $context['day'] : null) == $this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "eventDate", array(), "any"), "day", array(), "any")) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context['day']) ? $context['day'] : null), "1");
                echo "</option>
\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 222
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<select name=\"eventDate[year]\" class=\"Field75\" id=\"EventDateYear\">
\t\t\t\t\t\t\t\t<option value=\"-1\">---</option>
\t\t\t\t\t\t\t\t";
            // line 226
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array(twig_range_filter($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "yearFrom", array(), "any"), $this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "yearTo", array(), "any")));
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
            foreach ($context['_seq'] as $context['_key'] => $context['value']) {
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 227
                echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
                echo "\" ";
                if ((isset($context['value']) ? $context['value'] : null) == $this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "eventDate", array(), "any"), "year", array(), "any")) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
                echo "</option>
\t\t\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 228
            echo "\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<div class=\"note\">
\t\t\t\t\t\t\t\t";
            // line 232
            if ($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "limitationType", array(), "any")) {
                echo "\t\t\t\t\t\t\t\t\t";
                // line 233
                echo getLang(("EventDateLimitations") . ($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "limitationType", array(), "any")), array("from" => $this->getEnvironment()->getExtension('interspire')->dateFormat($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "fromStamp", array(), "any")), "to" => $this->getEnvironment()->getExtension('interspire')->dateFormat($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "toStamp", array(), "any"))));
                // line 236
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 237
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
            echo "
\t\t\t\t\t";
            // line 240
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 242
        echo "\t\t</div>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<div class=\"FloatLeft\">
\t\t\t<input class=\"CloseButton\" type=\"button\" value=\"";
        // line 247
        echo getLang("Close");
        echo "\" onclick=\"\$.modal.close();\" />
\t\t</div>
\t\t<input type=\"submit\" class=\"SubmitButton\" value=\"";
        // line 249
        if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "itemId", array(), "any")) {
            echo getLang("UpdateItem");
        } else {
            echo getLang("AddItem");
        }
        echo "\" />
\t</div>
</form>
<script type=\"text/javascript\" charset=\"utf-8\">
\tOrder_Form.customizeItemModalLoaded();
\tvar eventDateData = {
\t\ttype: '";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "limitationType", array(), "any"), "1");
        echo "',
\t\tcompDate: '";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "compDate", array(), "any"), "1");
        echo "',
\t\tcompDateEnd: '";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "compDateEnd", array(), "any"), "1");
        echo "',
\t\tinvalidMessage: '";
        // line 258
        echo Interspire_Template_Extension::jsFilter(getLang("EventDateInvalid", array("name" => $this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodeventdatefieldname", array(), "any"))), "'");
        // line 260
        echo "',
\t\terrorMessage: '";
        // line 261
        echo Interspire_Template_Extension::jsFilter(getLang(("EventDateLimitationsLong") . ($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "limitationType", array(), "any")), array("name" => $this->getAttribute((isset($context['product']) ? $context['product'] : null), "prodeventdatefieldname", array(), "any"), "from" => $this->getEnvironment()->getExtension('interspire')->dateFormat($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "fromStamp", array(), "any")), "to" => $this->getEnvironment()->getExtension('interspire')->dateFormat($this->getAttribute((isset($context['eventDate']) ? $context['eventDate'] : null), "toStamp", array(), "any")))), "'");
        // line 265
        echo "'
\t};
</script>

";
    }

    // line 269
    public function getdrawGiftWrappingOptions($lang = null, $giftWrappingOptions = null, $selectedWrapping = null, $giftWrappingId = null)
    {
        $context = array(
            "lang" => $lang,
            "giftWrappingOptions" => $giftWrappingOptions,
            "selectedWrapping" => $selectedWrapping,
            "giftWrappingId" => $giftWrappingId,
        );

        echo "\t";
        // line 270
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
\t";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "giftWrappingOptionGroup"), ), "method"), "1");
        // line 274
        echo "
\t\t";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "GiftWrapping", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 278
        echo "
\t\t\t<select class=\"Field300 giftWrappingSelect\" name=\"giftWrapping[";
        // line 279
        echo twig_escape_filter($this->env, (isset($context['giftWrappingId']) ? $context['giftWrappingId'] : null), "1");
        echo "]\" id=\"giftWrapping_";
        echo twig_escape_filter($this->env, (isset($context['giftWrappingId']) ? $context['giftWrappingId'] : null), "1");
        echo "\">
\t\t\t\t<option value=\"\">";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseGiftWrappingOption", array(), "any"), "1");
        echo "</option>
\t\t\t\t";
        // line 281
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['giftWrappingOptions']) ? $context['giftWrappingOptions'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['option']) {
            echo "\t\t\t\t\t<option value=\"";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrapid", array(), "any"), "1");
            echo "\" ";
            if ($this->getAttribute((isset($context['selectedWrapping']) ? $context['selectedWrapping'] : null), "wrapid", array(), "any") == $this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrapid", array(), "any")) {
                echo "selected=\"selected\"";
            }
            echo " class=\"";
            if ($this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrappreview", array(), "any")) {
                echo "hasPreview";
            }
            echo " ";
            if ($this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrapallowcomments", array(), "any")) {
                echo "allowComments";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrapname", array(), "any"), "1");
            echo " (";
            echo formatPrice(twig_escape_filter($this->env, $this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrapprice", array(), "any"), "1"));
            echo ")
\t\t\t\t\t</option>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 285
        echo "\t\t\t</select>
\t\t\t<span>
\t\t\t\t&nbsp;
\t\t\t\t";
        // line 289
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['giftWrappingOptions']) ? $context['giftWrappingOptions'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['option']) {
            echo "\t\t\t\t\t";
            // line 290
            if ($this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrappreview", array(), "any")) {
                echo "\t\t\t\t\t\t<a class=\"giftWrappingPreviewLink";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrapid", array(), "any"), "1");
                echo " giftWrappingPreviewLink\" target=\"_blank\" href=\"../";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['option']) ? $context['option'] : null), "wrappreview", array(), "any"), "1");
                echo "\" style=\"display: none\">
\t\t\t\t\t\t\t";
                // line 292
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Preview", array(), "any"), "1");
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 294
            echo "\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 295
        echo "\t\t\t</span>
\t\t";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "GiftMessage", array(), "any")) . (":"), "class" => "giftMessage", "hidden" => $this->getAttribute((isset($context['selectedWrapping']) ? $context['selectedWrapping'] : null), "wrapid", array(), "any") == 0), ), "method"), "1");
        // line 303
        echo "
\t\t\t<textarea class=\"Field300\" rows=\"5\" name=\"giftMessage[";
        // line 304
        echo twig_escape_filter($this->env, (isset($context['giftWrappingId']) ? $context['giftWrappingId'] : null), "1");
        echo "]\" id=\"giftMessage_";
        echo twig_escape_filter($this->env, (isset($context['giftWrappingId']) ? $context['giftWrappingId'] : null), "1");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['selectedWrapping']) ? $context['selectedWrapping'] : null), "wrapmessage", array(), "any"), "1");
        echo "</textarea>
\t\t";
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "
";
    }

}

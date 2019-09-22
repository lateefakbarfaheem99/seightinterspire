<?php

/* macros/orderform.tpl */
class __TwigTemplate_e337e4743e40bcbff383d745199956ef extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "

";
        // line 6
        echo "
";
        // line 11
        echo "
";
        // line 49
        echo "
";
        // line 145
        echo "
";
        // line 159
        echo "
";
    }

    // line 3
    public function getbeginQuoteItemsGrid($quote = null, $config = null, $options = null)
    {
        $context = array(
            "quote" => $quote,
            "config" => $config,
            "options" => $options,
        );

        echo "<div class=\"quoteItemsGrid ";
        // line 4
        if (twig_default_filter($this->getAttribute((isset($context['options']) ? $context['options'] : null), "interactive", array(), "any"), true)) {
            echo "quoteItemsGridInteractive";
        } else {
            echo "quoteItemsGridNonInteractive";
        }
        echo "\">
\t<table class=\"gridTable\">
";
    }

    // line 8
    public function getendQuoteItemsGrid($quote = null, $config = null, $options = null)
    {
        $context = array(
            "quote" => $quote,
            "config" => $config,
            "options" => $options,
        );

        echo "\t</table>
</div>
";
    }

    // line 13
    public function getquoteItemsGrid($quote = null, $config = null, $options = null)
    {
        $context = array(
            "quote" => $quote,
            "config" => $config,
            "options" => $options,
        );

        echo "\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this, "beginQuoteItemsGrid", array((isset($context['quote']) ? $context['quote'] : null), (isset($context['config']) ? $context['config'] : null), (isset($context['options']) ? $context['options'] : null), ), "method"), "1");
        echo "
\t\t";
        // line 15
        if ($this->getAttribute((isset($context['options']) ? $context['options'] : null), "addresses", array(), "any")) {
            $context['addresses'] = $this->getAttribute((isset($context['options']) ? $context['options'] : null), "addresses", array(), "any");
        } else {
            $context['addresses'] = $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "getAllAddresses", array(), "any");
        }
        echo "\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['addresses']) ? $context['addresses'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['address']) {
            echo "\t\t\t";
            // line 17
            if (twig_length_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "items", array(), "any"))) {
                echo "\t\t\t\t<tbody class=\"itemHeading gridTableHead\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan=\"2\">
\t\t\t\t\t\t\t";
                // line 21
                if ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "type", array(), "any") == "billing") {
                    echo "\t\t\t\t\t\t\t\t";
                    // line 22
                    echo getLang("DigitalOrGift");
                    echo "\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "isUnallocated", array(), "any")) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t";
                    // line 24
                    echo getLang("UnallocatedProducts");
                    echo "\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "isComplete", array(), "any")) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t";
                    // line 26
                    echo getLang("ProductsShippedTo", array("address" => $this->getAttribute((isset($context['address']) ? $context['address'] : null), "line", array(), "any")));
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t";
                    // line 30
                    echo getLang("Products");
                    echo "\t\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"quoteItemQuantity\">";
                // line 33
                echo getLang("Quantity");
                echo "</th>
\t\t\t\t\t\t<th class=\"quoteItemPrice\">";
                // line 34
                echo getLang("ItemPrice");
                echo "</th>
\t\t\t\t\t\t<th class=\"quoteItemTotal\">";
                // line 35
                echo getLang("ItemTotal");
                echo "</th>
\t\t\t\t\t\t";
                // line 36
                if (twig_default_filter($this->getAttribute((isset($context['options']) ? $context['options'] : null), "interactive", array(), "any"), true)) {
                    echo "\t\t\t\t\t\t\t<th class=\"quoteItemAction\">";
                    // line 37
                    echo getLang("Action");
                    echo "</th>
\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t\t<tbody class=\"itemRows\">
\t\t\t\t\t";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['address']) ? $context['address'] : null), "items", array(), "any"));
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
                    echo "\t\t\t\t\t\t";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this, "quoteItemGridItem", array((isset($context['item']) ? $context['item'] : null), (isset($context['config']) ? $context['config'] : null), (isset($context['options']) ? $context['options'] : null), ), "method"), "1");
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
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 44
                echo "\t\t\t\t</tbody>
\t\t\t";
            }
            // line 46
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 47
        echo "\t";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this, "endQuoteItemsGrid", array((isset($context['quote']) ? $context['quote'] : null), (isset($context['config']) ? $context['config'] : null), (isset($context['options']) ? $context['options'] : null), ), "method"), "1");
        echo "
";
    }

    // line 51
    public function getquoteItemGridItem($item = null, $config = null, $options = null)
    {
        $context = array(
            "item" => $item,
            "config" => $config,
            "options" => $options,
        );

        // line 52
        $context['interactive'] = twig_default_filter($this->getAttribute((isset($context['options']) ? $context['options'] : null), "interactive", array(), "any"), true);
        echo "<tr class=\"itemRow\" id=\"itemId_";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "id", array(), "any"), "1");
        echo "\">
\t<td class=\"quoteItemImage\">
\t\t";
        // line 55
        if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "thumbnail", array(), "any")) {
            echo "\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "thumbnail", array(), "any"), "1");
            echo "\" alt=\"\" />
\t\t";
        } else {
            // line 57
            echo "\t\t\t&nbsp;
\t\t";
        }
        // line 59
        echo "\t</td>
\t<td>
\t\t<div class=\"quoteItemName\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "name", array(), "any"), "1");
        echo "</div>
\t\t";
        // line 63
        if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "sku", array(), "any")) {
            echo "\t\t\t<div class=\"quoteItemSku\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "sku", array(), "any"), "1");
            echo "</div>
\t\t";
        }
        // line 65
        echo "\t\t<div class=\"quoteItemConfiguration\">
\t\t\t";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['item']) ? $context['item'] : null), "variationOptions", array(), "any"));
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
            echo "\t\t\t\t<div class=\"quoteItemConfigurationRow\">
\t\t\t\t\t<div class=\"name\">";
            // line 69
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo ":</div>
\t\t\t\t\t<div class=\"value\">";
            // line 70
            echo twig_escape_filter($this->env, (isset($context['value']) ? $context['value'] : null), "1");
            echo "</div>
\t\t\t\t</div>
\t\t\t";
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
        // line 72
        echo "\t\t\t";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['item']) ? $context['item'] : null), "configuration", array(), "any"));
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
            echo "\t\t\t\t<div class=\"quoteItemConfigurationRow\">
\t\t\t\t\t";
            // line 75
            if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "value", array(), "any")) {
                echo "\t\t\t\t\t\t<div class=\"name\">";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "name", array(), "any"), "1");
                echo ":</div>
\t\t\t\t\t\t<div class=\"value\">
\t\t\t\t\t\t\t";
                // line 78
                if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "type", array(), "any") == "file") {
                    echo "\t\t\t\t\t\t\t\t";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "fileOriginalName", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "type", array(), "any") == "checkbox") {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t";
                    // line 81
                    if ($this->getAttribute((isset($context['field']) ? $context['field'] : null), "value", array(), "any") == 1) {
                        echo getLang("xYes");
                    } else {
                        echo getLang("xNo");
                    }
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['field']) ? $context['field'] : null), "value", array(), "any"), "1");
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t</div>
\t\t\t";
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
        // line 88
        echo "\t\t\t";
        // line 89
        if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "eventName", array(), "any")) {
            echo "\t\t\t\t<div class=\"quoteItemConfigurationRow\">
\t\t\t\t\t<div class=\"name\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "eventName", array(), "any"), "1");
            echo ":</div>
\t\t\t\t\t<div class=\"value\">";
            // line 92
            echo $this->getEnvironment()->getExtension('interspire')->dateFormat(twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "eventDate", array(true, ), "method"), "1"));
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 94
        echo "\t\t\t";
        // line 95
        if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "giftWrapping", array(), "any")) {
            echo "\t\t\t\t<div class=\"quoteItemConfigurationRow\">
\t\t\t\t\t<div class=\"name\">";
            // line 97
            echo getLang("GiftWrapping");
            echo ":</div>
\t\t\t\t\t<div class=\"value\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "giftWrapping", array(), "any"), "wrapname", array(), "any"), "1");
            echo " (";
            echo formatPrice(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "giftWrapping", array(), "any"), "wrapprice", array(), "any"), "1"));
            echo ")</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 100
            if ($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "giftWrapping", array(), "any"), "wrapmessage", array(), "any")) {
                echo "\t\t\t\t\t<div class=\"quoteItemConfigurationRow\">
\t\t\t\t\t\t<div class=\"name\">";
                // line 102
                echo getLang("GiftMessage");
                echo ":</div>
\t\t\t\t\t\t<div class=\"value\">";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "giftWrapping", array(), "any"), "wrapmessage", array(), "any"), "1");
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 105
            echo "\t\t\t";
        }
        // line 106
        echo "\t\t\t";
        // line 107
        if ($this->getAttribute((isset($context['item']) ? $context['item'] : null), "isPreOrder", array(), "any")) {
            echo "\t\t\t\t<div class=\"quoteItemConfigurationRow\">
\t\t\t\t\t<div class=\"name\">";
            // line 109
            echo getLang("PreOrder");
            echo ":</div>
\t\t\t\t\t<div class=\"value\">";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "getPreOrderMessage", array(), "any"), "1");
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 112
        echo "\t\t</div>
\t</td>
\t<td class=\"quoteItemQuantity\">
\t\t";
        // line 116
        if (((isset($context['interactive']) ? $context['interactive'] : null)) && ((!$this->getAttribute((isset($context['item']) ? $context['item'] : null), "isGiftCertificate", array(), "any")))) {
            echo "\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any"), "1");
            echo "\" class=\"Field50\" id=\"qty\" />
\t\t";
        } else {
            // line 118
            echo "\t\t\t";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "quantity", array(), "any"), "1");
            echo "
\t\t";
        }
        // line 120
        echo "\t</td>
\t<td class=\"quoteItemPrice\">
\t\t";
        // line 123
        if (((isset($context['interactive']) ? $context['interactive'] : null)) && ((!$this->getAttribute((isset($context['item']) ? $context['item'] : null), "isGiftCertificate", array(), "any")))) {
            echo "\t\t\t";
            // line 124
            if ($this->getAttribute((isset($context['config']) ? $context['config'] : null), "CurrencyLocation", array(), "any") == "left") {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['config']) ? $context['config'] : null), "CurrencyToken", array(), "any"), "1");
            }
            echo "\t\t\t<input type=\"text\" name=\"price\" value=\"";
            // line 125
            echo formatPrice(twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "price", array($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "quote", array(), "any"), "doesStoreCartDisplayIncludeTax", array(), "any"), ), "method"), "1"), false, false);
            echo "\" class=\"Field50\" />
\t\t\t";
            // line 126
            if ($this->getAttribute((isset($context['config']) ? $context['config'] : null), "CurrencyLocation", array(), "any") == "right") {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['config']) ? $context['config'] : null), "CurrencyToken", array(), "any"), "1");
            }
            echo "\t\t";
        } else {
            // line 127
            echo "\t\t\t";
            // line 128
            echo formatPrice(twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "price", array($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "quote", array(), "any"), "doesStoreCartDisplayIncludeTax", array(), "any"), ), "method"), "1"));
            echo "
\t\t";
        }
        // line 129
        echo "\t</td>
\t<td class=\"quoteItemTotal\"><span>";
        // line 131
        echo formatPrice(twig_escape_filter($this->env, $this->getAttribute((isset($context['item']) ? $context['item'] : null), "total", array($this->getAttribute($this->getAttribute((isset($context['item']) ? $context['item'] : null), "quote", array(), "any"), "doesStoreCartDisplayIncludeTax", array(), "any"), ), "method"), "1"));
        echo "</span></td>
\t";
        // line 132
        if ((isset($context['interactive']) ? $context['interactive'] : null)) {
            echo "\t\t<td class=\"quoteItemAction\">
\t\t\t";
            // line 134
            if ((!$this->getAttribute((isset($context['item']) ? $context['item'] : null), "isGiftCertificate", array(), "any"))) {
                echo "\t\t\t\t<a href=\"#\" class=\"customizeItemLink\">";
                // line 135
                echo getLang("Customize");
                echo "</a>
\t\t\t\t<a href=\"#\" class=\"copyItemLink\">";
                // line 136
                echo getLang("Copy");
                echo "</a>
\t\t\t";
            } else {
                // line 137
                echo "\t\t\t\t<span class=\"Disabled\">";
                // line 138
                echo getLang("Customize");
                echo "</span>
\t\t\t\t<span class=\"Disabled\">";
                // line 139
                echo getLang("Copy");
                echo "</span>
\t\t\t";
            }
            // line 140
            echo "\t\t\t<a href=\"#\" class=\"deleteItemLink\">";
            // line 141
            echo getLang("Delete");
            echo "</a>
\t\t</td>
\t";
        }
        // line 143
        echo "</tr>
";
    }

    // line 147
    public function getaddressDetails($address = null, $options = null)
    {
        $context = array(
            "address" => $address,
            "options" => $options,
        );

        echo "\t<div class=\"addressDetails\" style=\"";
        // line 148
        if ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "countryFlag", array(), "any")) {
            echo "background-image: url('../lib/flags/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "countryFlag", array(), "any"), "1");
            echo ".gif');";
        }
        echo "\">
\t\t<a href=\"#\" class=\"useExistingAddress\">";
        // line 149
        echo getLang("UseThisAddress");
        echo "</a>
\t\t<strong>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "FirstName", array(), "any"), "1");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "LastName", array(), "any"), "1");
        echo "</strong>
\t\t<div>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "CompanyName", array(), "any"), "1");
        echo "</div>
\t\t<div>";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "AddressLine1", array(), "any"), "1");
        echo "</div>
\t\t<div>";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "AddressLine2", array(), "any"), "1");
        echo "</div>
\t\t<div>
\t\t\t";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "City", array(), "any"), "1");
        if ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "State", array(), "any")) {
            if ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "City", array(), "any")) {
                echo ",";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "State", array(), "any"), "1");
        }
        if ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "Zip", array(), "any")) {
            if (($this->getAttribute((isset($context['address']) ? $context['address'] : null), "City", array(), "any")) || ($this->getAttribute((isset($context['address']) ? $context['address'] : null), "State", array(), "any"))) {
                echo ",";
            }
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "Zip", array(), "any"), "1");
        }
        echo "\t\t</div>
\t\t<div>";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['address']) ? $context['address'] : null), "Country", array(), "any"), "1");
        echo "</div>
\t</div>
";
    }

    // line 161
    public function getpaymentModuleForm($module = null)
    {
        $context = array(
            "module" => $module,
        );

        echo "\t";
        // line 162
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
\t<div id=\"paymentMethodForm_";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
        echo "\" class=\"paymentMethodForm\">
\t\t";
        // line 165
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['module']) ? $context['module'] : null), "formFields", array(), "any"));
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
        foreach ($context['_seq'] as $context['fieldName'] => $context['fieldData']) {
            echo "\t\t\t";
            // line 166
            $context['inputName'] = (((("paymentField[") . ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"))) . ("][")) . ((isset($context['fieldName']) ? $context['fieldName'] : null))) . ("]");
            echo "\t\t\t";
            // line 167
            if ($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "class", array(), "any")) {
                echo "\t\t\t\t";
                // line 168
                $context['fieldClass'] = $this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "class", array(), "any");
                echo "\t\t\t";
            } else {
                // line 169
                echo "\t\t\t\t";
                // line 170
                $context['fieldClass'] = "Field200";
                echo "\t\t\t";
            }
            // line 171
            echo "
\t\t\t";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "title", array(), "any")) . (":"), "required" => $this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "required", array(), "any"), "class" => ("Field_") . ((isset($context['fieldName']) ? $context['fieldName'] : null))), ), "method"), "1");
            echo "
\t\t\t\t";
            // line 174
            if ($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "type", array(), "any") == "text") {
                echo "\t\t\t\t\t";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "input", array("text", (isset($context['inputName']) ? $context['inputName'] : null), $this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "value", array(), "any"), array("class" => (isset($context['fieldClass']) ? $context['fieldClass'] : null)), ), "method"), "1");
                echo "
\t\t\t\t";
            } elseif ($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "type", array(), "any") == "select") {
                // line 176
                echo "\t\t\t\t\t<select name=\"";
                // line 177
                echo twig_escape_filter($this->env, (isset($context['inputName']) ? $context['inputName'] : null), "1");
                echo "\" onchange=\"";
                echo twig_safe_filter($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "onchange", array(), "any"));
                echo ";\" class=\"";
                echo twig_escape_filter($this->env, (isset($context['fieldClass']) ? $context['fieldClass'] : null), "1");
                echo "\">
\t\t\t\t\t\t";
                // line 178
                echo twig_safe_filter($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "options", array(), "any"));
                echo "
\t\t\t\t\t</select>
\t\t\t\t";
            } elseif ($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "type", array(), "any") == "html") {
                // line 180
                echo "\t\t\t\t\t";
                // line 181
                echo twig_safe_filter($this->getAttribute((isset($context['fieldData']) ? $context['fieldData'] : null), "html", array(), "any"));
                echo "
\t\t\t\t";
            }
            // line 182
            echo "\t\t\t";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
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
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['fieldData'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 184
        echo "\t</div>
";
    }

}

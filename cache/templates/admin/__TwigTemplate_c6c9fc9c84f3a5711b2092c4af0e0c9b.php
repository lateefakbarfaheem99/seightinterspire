<?php

/* settings.tax.manage.tpl */
class __TwigTemplate_c6c9fc9c84f3a5711b2092c4af0e0c9b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<link rel=\"stylesheet\" href=\"Styles/tax.settings.css\" type=\"text/css\" charset=\"utf-8\" />
";
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 3
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
<div id=\"content\">
\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TaxSettings", array(), "any"), "1");
        echo "</h1>
\t<p class=\"intro\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TaxSettingsIntro", array(), "any"), "1");
        echo "
\t</p>

\t";
        // line 11
        echo twig_safe_filter((isset($context['flashMessages']) ? $context['flashMessages'] : null));
        echo "

\t";
        // line 13
        if ((isset($context['pendingChangesToApply']) ? $context['pendingChangesToApply'] : null)) {
            echo "\t\t<p class=\"MessageBox MessageBoxInfo\">";
            // line 14
            echo getLang("ApplyPendingTaxChanges");
            echo "</p>
\t";
        }
        // line 15
        echo "
\t<div id=\"taxSettings\">
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tabs", array(array("generalTab" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "General", array(), "any"), "taxClassesTab" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TaxClasses", array(), "any"), "taxZonesTab" => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TaxRatesAndZones", array(), "any")), ), "method"), "1");
        // line 22
        echo "

\t\t<div id=\"generalTab\">
\t\t\t<form action=\"index.php\" method=\"post\" accept-charset=\"utf-8\" id=\"taxSettingsForm\">
\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"saveTaxSettings\" />
\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ConfigureTaxOptions", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TaxLabel", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 33
        echo "
\t\t\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "input", array("text", "taxLabel", $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxLabel", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 36
        echo "
\t\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("TaxLabel", "TaxLabelHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesEnteredWithTax", array(), "any")) . ("?"), "required" => true), ), "method"), "1");
        // line 43
        echo "
\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "radioList", array("taxEnteredWithPrices", array(1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesEnteredWithTaxYes", array(), "any"), 0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesEnteredWithTaxNo", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxEnteredWithPrices", array(), "any"), ), "method"), "1");
        // line 47
        echo "
\t\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("PricesEnteredWithTax", "PricesEnteredWithTaxHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CalculateTaxBasedOn", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 54
        echo "
\t\t\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxCalculationBasedOn", array(0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "BillingAddress", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingAddress", array(), "any"), 2 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "StoreAddress", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxCalculationBasedOn", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 61
        echo "
\t\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("CalculateTaxBasedOn", "CalculateTaxBasedOnHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingTaxClass", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 68
        echo "
\t\t\t\t\t\t";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxShippingTaxClass", (isset($context['taxClasses']) ? $context['taxClasses'] : null), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxShippingTaxClass", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 71
        echo "
\t\t\t\t\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShippingTaxClass", "ShippingTaxClassHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "GiftWrappingTaxClass", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 78
        echo "
\t\t\t\t\t\t";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxGiftWrappingTaxClass", (isset($context['taxClasses']) ? $context['taxClasses'] : null), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxGiftWrappingTaxClass", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 81
        echo "
\t\t\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("GiftWrappingTaxClass", "GiftWrappingTaxClassHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ConfigureTaxDisplaySettings", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowPricesOnProductListings", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 92
        echo "
\t\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxDefaultTaxDisplayCatalog", array(0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeInclusive", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeExclusive", array(), "any"), 2 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeBoth", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxDefaultTaxDisplayCatalog", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 99
        echo "
\t\t\t\t\t\t";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowPricesOnProductListings", "ShowPricesOnProductListingsHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowPricesOnProductDetailPages", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 106
        echo "
\t\t\t\t\t\t";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxDefaultTaxDisplayProducts", array(0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeInclusive", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeExclusive", array(), "any"), 2 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeBoth", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxDefaultTaxDisplayProducts", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 113
        echo "
\t\t\t\t\t\t";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowPricesOnProductDetailPages", "ShowPricesOnProductDetailPagesHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowPricesInCart", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 120
        echo "
\t\t\t\t\t\t";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxDefaultTaxDisplayCart", array(0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeInclusive", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeExclusive", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxDefaultTaxDisplayCart", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 126
        echo "
\t\t\t\t\t\t";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowPricesInCart", "ShowPricesInCartHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowTaxChargesInCart", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 133
        echo "
\t\t\t\t\t\t";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxChargesInCartBreakdown", array(0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowTaxChargesSummarized", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowTaxChargesBrokenDown", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxChargesInCartBreakdown", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 139
        echo "
\t\t\t\t\t\t";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowTaxChargesInCart", "ShowTaxChargesInCartHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowPricesOnOrdersInvoices", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 146
        echo "
\t\t\t\t\t\t";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxDefaultTaxDisplayOrders", array(0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeInclusive", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PricesShouldBeExclusive", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxDefaultTaxDisplayOrders", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 152
        echo "
\t\t\t\t\t\t";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowPricesOnOrdersInvoices", "ShowPricesOnOrdersInvoicesHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowTaxChargesOnOrders", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 159
        echo "
\t\t\t\t\t\t";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxChargesOnOrdersBreakdown", array(0 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowTaxChargesSummarized", array(), "any"), 1 => $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowTaxChargesBrokenDown", array(), "any")), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxChargesOnOrdersBreakdown", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 165
        echo "
\t\t\t\t\t\t";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowTaxChargesOnOrders", "ShowTaxChargesOnOrdersHelp", ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ConfigureDefaultTaxAddress", array(), "any"), "1");
        echo "
\t\t\t\t\t\t";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ConfigureDefaultTaxAddress", "ConfigureDefaultTaxAddressHelp", ), "method"), "1");
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Country", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 179
        echo "
\t\t\t\t\t\t";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxDefaultCountry", (isset($context['countryList']) ? $context['countryList'] : null), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxDefaultCountry", array(), "any"), array("class" => "Field250"), ), "method"), "1");
        // line 182
        echo "
\t\t\t\t\t";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(array("class" => "defaultStateRow", "hidden" => twig_length_filter($this->env, (isset($context['stateList']) ? $context['stateList'] : null)) <= 1), ), "method"), "1");
        // line 188
        echo "
\t\t\t\t\t\t";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "State", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 192
        echo "
\t\t\t\t\t\t\t";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("taxDefaultState", (isset($context['stateList']) ? $context['stateList'] : null), $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxDefaultState", array(), "any"), array("class" => "Field250"), ), "method"), "1");
        // line 195
        echo "
\t\t\t\t\t\t";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ZipCode", array(), "any")) . (":")), ), "method"), "1");
        // line 201
        echo "
\t\t\t\t\t\t";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "input", array("text", "taxDefaultZipCode", $this->getAttribute((isset($context['settings']) ? $context['settings'] : null), "taxDefaultZipCode", array(), "any"), array("class" => "Field50"), ), "method"), "1");
        // line 204
        echo "
\t\t\t\t\t";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t\t\t<input type=\"submit\" class=\"saveButton\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Save", array(), "any"), "1");
        echo "\" />
\t\t\t\t\t\t";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Or", array(), "any"), "1");
        echo "
\t\t\t\t\t\t<a href=\"#\" class=\"cancelLink\">";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Cancel", array(), "any"), "1");
        echo "</a>
\t\t\t\t\t";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t</form>
\t\t</div>

\t\t<div id=\"taxClassesTab\">
\t\t\t<form action=\"index.php\" method=\"post\" accept-charset=\"utf-8\">
\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"saveTaxClasses\" />
\t\t\t\t";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CreateOrModifyTaxClasses", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t\t";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "intro", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CreateOrModifyTaxClassesIntro", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t";
        // line 224
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['taxClasses']) ? $context['taxClasses'] : null));
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
        foreach ($context['_seq'] as $context['id'] => $context['name']) {
            echo "\t\t\t\t\t\t";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
            echo "
\t\t\t\t\t\t\t<input type=\"text\" name=\"taxClass[existing][";
            // line 226
            echo twig_escape_filter($this->env, (isset($context['id']) ? $context['id'] : null), "1");
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
            echo "\" class=\"Field400 taxClassLabel\"
\t\t\t\t\t\t\t\t";
            // line 227
            if ($this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "first", array(), "any")) {
                echo "readonly=\"readonly\"";
            }
            echo " />
\t\t\t\t\t\t\t<a class=\"addButton\">+</a>
\t\t\t\t\t\t\t<a class=\"removeButton\" ";
            // line 229
            if ($this->getAttribute((isset($context['loop']) ? $context['loop'] : null), "first", array(), "any")) {
                echo "style=\"display: none\"";
            }
            echo ">-</a>
\t\t\t\t\t\t";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 231
        echo "
\t\t\t\t\t";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t\t\t<input type=\"submit\" class=\"saveButton\" value=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Save", array(), "any"), "1");
        echo "\" />
\t\t\t\t\t\t";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Or", array(), "any"), "1");
        echo "
\t\t\t\t\t\t<a href=\"#\" class=\"cancelLink\">";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Cancel", array(), "any"), "1");
        echo "</a>
\t\t\t\t\t";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<div id=\"taxZonesTab\">
\t\t\t<form action=\"index.php\" method=\"post\" accept-charset=\"utf-8\">
\t\t\t\t<input type=\"hidden\" name=\"ToDo\" value=\"deleteTaxZones\" />
\t\t\t\t<p class=\"intro\">
\t\t\t\t\t<input type=\"button\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "AddATaxZoneButton", array(), "any"), "1");
        echo "\" class=\"addTaxZoneButton\" />
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DeleteSelected", array(), "any"), "1");
        echo "\" class=\"deleteTaxZonesButton\" />
\t\t\t\t</p>

\t\t\t\t<div class=\"GridContainer\">
\t\t\t\t\t";
        // line 251
        echo twig_safe_filter((isset($context['taxZoneGrid']) ? $context['taxZoneGrid'] : null));
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<script src=\"script/tax.settings.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
\t";
        // line 259
        if ((isset($context['activeTab']) ? $context['activeTab'] : null)) {
            echo "\t\tTax_Settings.activeTab = '";
            // line 260
            echo twig_escape_filter($this->env, (isset($context['activeTab']) ? $context['activeTab'] : null), "1");
            echo "';
\t";
        }
        // line 261
        echo "
\tlang.ConfirmDeleteTaxClass = \"";
        // line 263
        echo getLang("ConfirmDeleteTaxClass");
        echo "\";
\tlang.ConfirmCancel = \"";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ConfirmCancel", array(), "any"), "1");
        echo "\";
\tlang.TaxClassMissingName = \"";
        // line 265
        echo Interspire_Template_Extension::jsFilter(getLang("TaxClassMissingName"), "'");
        echo "\";
\tlang.ConfirmDeleteTaxZones = \"";
        // line 266
        echo getLang("ConfirmDeleteTaxZones");
        echo "\";
\tlang.SelectTaxZonesToDelete = \"";
        // line 267
        echo Interspire_Template_Extension::jsFilter(getLang("SelectTaxZonesToDelete"), "'");
        echo "\";
\tlang.DefaultZoneWhatDoesThisMean = \"";
        // line 268
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "DefaultZoneWhatDoesThisMean", array(), "any"));
        echo "\";
\tlang.InvalidTaxSettingTaxLabel = \"";
        // line 269
        echo Interspire_Template_Extension::jsFilter(getLang("InvalidTaxSettingTaxLabel"), "'");
        echo "\";
\tlang.InvalidTaxSettingTaxDefaultCountry = \"";
        // line 270
        echo Interspire_Template_Extension::jsFilter(getLang("InvalidTaxSettingTaxDefaultCountry"), "'");
        echo "\";
\tlang.InvalidTaxSettingTaxDefaultState = \"";
        // line 271
        echo Interspire_Template_Extension::jsFilter(getLang("InvalidTaxSettingTaxDefaultState"), "'");
        echo "\";
</script>";
    }

}

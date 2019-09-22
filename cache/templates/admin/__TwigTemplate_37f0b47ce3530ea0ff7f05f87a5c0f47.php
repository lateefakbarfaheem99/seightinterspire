<?php

/* order.form.tpl */
class __TwigTemplate_37f0b47ce3530ea0ff7f05f87a5c0f47 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "<link rel=\"stylesheet\" href=\"Styles/order.form.css\" type=\"text/css\" charset=\"utf-8\">
<div id=\"content\">
\t<form action=\"#\" method=\"post\" accept-charset=\"utf-8\" id=\"orderForm\">
\t\t<input type=\"hidden\" name=\"quoteSession\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context['quoteSession']) ? $context['quoteSession'] : null), "1");
        echo "\" id=\"quoteSession\">
\t\t<h1>
\t\t\t";
        // line 8
        if ((isset($context['addingOrder']) ? $context['addingOrder'] : null)) {
            echo "\t\t\t\t";
            // line 9
            echo getLang("AddAnOrder");
            echo "\t\t\t";
        } else {
            // line 10
            echo "\t\t\t\t";
            // line 11
            echo getLang("EditAnOrder");
            echo "\t\t\t";
        }
        // line 12
        echo "\t\t\t<span class=\"orderMachineStateCustomerDetails\" style=\"display: none;\">
\t\t\t\t(";
        // line 14
        echo getLang("StepXofY", array("x" => 1, "y" => 4));
        // line 17
        echo ")
\t\t\t</span>
\t\t\t<span class=\"orderMachineStateItems\" style=\"display: none;\">
\t\t\t\t(";
        // line 20
        echo getLang("StepXofY", array("x" => 2, "y" => 4));
        // line 23
        echo ")
\t\t\t</span>
\t\t\t<span class=\"orderMachineStateShipping\" style=\"display: none;\">
\t\t\t\t(";
        // line 26
        echo getLang("StepXofY", array("x" => 3, "y" => 4));
        // line 29
        echo ")
\t\t\t</span>
\t\t\t<span class=\"orderMachineStateSummary\" style=\"display: none;\">
\t\t\t\t(";
        // line 32
        echo getLang("StepXofY", array("x" => 4, "y" => 4));
        // line 35
        echo ")
\t\t\t</span>
\t\t</h1>
\t\t<p class=\"intro\">
\t\t\t";
        // line 39
        echo getLang("AddOrderIntro");
        echo "\t\t</p>
\t\t";
        // line 41
        echo getFlashMessageBoxes();        echo "
\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t<button class=\"orderMachineBackButton\" disabled=\"disabled\" accesskey=\"b\">&lt; ";
        // line 44
        echo twig_safe_filter($this->getEnvironment()->getExtension('interspire')->accessKeyFilter($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Back", array(), "any"), "b"));
        echo "</button>
\t\t\t<button class=\"orderMachineNextButton\" accesskey=\"n\">";
        // line 45
        echo twig_safe_filter($this->getEnvironment()->getExtension('interspire')->accessKeyFilter($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Next", array(), "any"), "n"));
        echo " &gt;</button>
\t\t\t";
        // line 46
        echo getLang("Or");
        echo "\t\t\t<a href=\"#\" class=\"orderMachineCancelButton\">";
        // line 47
        echo getLang("Cancel");
        echo "</a>
\t\t";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "

\t\t<div class=\"orderMachineStateCustomerDetails\">
\t\t\t<input type=\"hidden\" name=\"customerId\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "customerId", array(), "any"), "1");
        echo "\" id=\"customerId\" />
\t\t\t";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerDetails", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrderFor", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 58
        echo "
\t\t\t\t\t";
        // line 59
        if ($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "customerId", array(), "any")) {
            echo "\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"orderFor\" value=\"dontchange\" checked=\"checked\" /> ";
            // line 61
            echo getLang("KeepExistingCustomerDetails");
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" id=\"existingCustomerId\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "customerId", array(), "any"), "1");
            echo "\" />
\t\t\t\t\t\t</label>
\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t<input type=\"radio\" name=\"orderFor\" value=\"customer\" ";
        // line 66
        if (((isset($context['addingOrder']) ? $context['addingOrder'] : null)) || ((!$this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "customerId", array(), "any")))) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo getLang("SearchMyExistingCustomerList");
        echo "\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"orderForToggle orderForToggleCustomer\">
\t\t\t\t\t\t<input type=\"text\" name=\"orderForSearch\" id=\"orderForSearch\" class=\"Field300\" />
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t<input type=\"radio\" name=\"orderFor\" value=\"new\" ";
        // line 72
        if (((!(isset($context['addingOrder']) ? $context['addingOrder'] : null))) && ((!$this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "customerId", array(), "any")))) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo getLang("ANewCustomerOrInStorePurchase");
        echo "\t\t\t\t\t</label>
\t\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("class" => "orderForToggle orderForToggleNew"), ), "method"), "1");
        // line 79
        echo "
\t\t\t\t";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array(((($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "AccountDetails", array(), "any")) . (" (")) . ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Optional", array(), "any"))) . (")"), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
        echo "
\t\t\t\t\t<p class=\"MessageBox MessageBoxInfo\">
\t\t\t\t\t\t";
        // line 84
        echo getLang("IfDetailsAreNotSpecified");
        echo "\t\t\t\t\t</p>
\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['accountFormFields']) ? $context['accountFormFields'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['formField']) {
            echo "\t\t\t\t\t";
            // line 89
            if ($this->getAttribute($this->getAttribute((isset($context['formField']) ? $context['formField'] : null), "record", array(), "any"), "formfieldprivateid", array(), "any") != "EmailAddress") {
                echo "\t\t\t\t\t\t";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRowGroup", array(), "any"), "1");
                echo "
\t\t\t\t\t";
            }
            // line 91
            echo "
\t\t\t\t\t";
            // line 93
            echo twig_safe_filter($this->getAttribute((isset($context['formField']) ? $context['formField'] : null), "loadForFrontend", array(), "any"));
            echo "

\t\t\t\t\t";
            // line 95
            if ($this->getAttribute($this->getAttribute((isset($context['formField']) ? $context['formField'] : null), "record", array(), "any"), "formfieldprivateid", array(), "any") != "EmailAddress") {
                echo "\t\t\t\t\t\t";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRowGroup", array(), "any"), "1");
                echo "
\t\t\t\t\t";
            }
            // line 97
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formField'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 98
        echo "
\t\t\t\t";
        // line 100
        if ((isset($context['accountCustomerGroups']) ? $context['accountCustomerGroups'] : null)) {
            echo "\t\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CustomerGroup", array(), "any")) . (":")), ), "method"), "1");
            // line 103
            echo "
\t\t\t\t\t\t";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "select", array("accountCustomerGroup", (isset($context['accountCustomerGroups']) ? $context['accountCustomerGroups'] : null), (isset($context['null']) ? $context['null'] : null), array("class" => "Field200"), ), "method"), "1");
            // line 106
            echo "
\t\t\t\t\t";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
            echo "
\t\t\t\t";
        }
        // line 108
        echo "\t\t\t";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "BillingAddress", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t<fieldset class=\"existingAddressList\">
\t\t\t\t\t<legend>";
        // line 115
        echo getLang("UseExistingAddress");
        echo "</legend>
\t\t\t\t\t<ul>
\t\t\t\t\t</ul>
\t\t\t\t</fieldset>
\t\t\t\t";
        // line 119
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['billingFormFields']) ? $context['billingFormFields'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['formField']) {
            echo "\t\t\t\t\t";
            // line 120
            echo twig_safe_filter($this->getAttribute((isset($context['formField']) ? $context['formField'] : null), "loadForFrontend", array(), "any"));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formField'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 121
        echo "
\t\t\t\t";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => " "), ), "method"), "1");
        // line 125
        echo "
\t\t\t\t\t<label>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"saveBillingAddress\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t";
        // line 128
        echo getLang("SaveToCustomersAddressBook");
        echo "\t\t\t\t\t</label>
\t\t\t\t";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t</div>

\t\t<div class=\"orderMachineStateItems\">
\t\t\t";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical"), ), "method"), "1");
        echo "
\t\t\t\t";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array("Search Items", ), "method"), "1");
        echo "

\t\t\t\t";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("last" => true), ), "method"), "1");
        // line 140
        echo "
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"#\" class=\"quoteItemSearchIcon\" />&nbsp;</a>
\t\t\t\t\t\t<div class=\"quoteItemSearch\">
\t\t\t\t\t\t\t<input type=\"text\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a class=\"addVirtualItemLink\" href=\"#\">";
        // line 148
        echo getLang("AddVirtualItemLink");
        echo "</a>
\t\t\t\t\t\t<div class=\"addVirtualItemLinkAfter\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical"), ), "method"), "1");
        echo "
\t\t\t\t";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ItemsInOrder", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
        echo "
\t\t\t\t\t<div ";
        // line 158
        if ($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "items", array(), "any")) {
            echo "style=\"display: none\"";
        }
        echo " class=\"orderNoItemsMessage\">
\t\t\t\t\t\t<p class=\"MessageBox MessageBoxInfo\">
\t\t\t\t\t\t\t";
        // line 160
        echo getLang("ThisOrderIsCurrentlyEmpty");
        echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div ";
        // line 163
        if ($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "items", array(), "any") == false) {
            echo "style=\"display: none\"";
        }
        echo " class=\"orderItemsGrid\">
\t\t\t\t\t\t";
        // line 164
        echo twig_safe_filter((isset($context['itemsTable']) ? $context['itemsTable'] : null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div ";
        // line 166
        if ($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "items", array(), "any") == false) {
            echo "style=\"display: none\"";
        }
        echo " id=\"itemSubtotal\">
\t\t\t\t\t\t";
        // line 167
        echo getLang("SubTotal");
        echo ": <span>";
        echo twig_escape_filter($this->env, (isset($context['subtotal']) ? $context['subtotal'] : null), "1");
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t</div>

\t\t<div class=\"orderMachineStateShipping\">
\t\t\t";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingDestination", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShipItemsTo", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 180
        echo "
\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t<input type=\"radio\" name=\"shipItemsTo\" class=\"showByValue orderFormDisableIfDigital orderFormCheckIfDigital\" value=\"billing\" ";
        // line 182
        if ((isset($context['shipItemsTo']) ? $context['shipItemsTo'] : null) == "billing") {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo getLang("TheBillingAddressAlreadySpecified");
        echo "\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"showByValue_shipItemsTo showByValue_shipItemsTo_billing nodeJoin\" id=\"shipItemsToBillingAddress\">
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t<input type=\"radio\" name=\"shipItemsTo\" class=\"showByValue orderFormDisableIfDigital\" value=\"single\" ";
        // line 187
        if ((isset($context['shipItemsTo']) ? $context['shipItemsTo'] : null) == "single") {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo getLang("ASingleAddress");
        echo "\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t<input type=\"radio\" name=\"shipItemsTo\" class=\"showByValue orderFormDisableIfDigital\" value=\"multiple\" ";
        // line 190
        if ((isset($context['shipItemsTo']) ? $context['shipItemsTo'] : null) == "multiple") {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo getLang("MultipleAddressesSpecifyBelow");
        echo "\t\t\t\t\t</label>
\t\t\t\t";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t<div class=\"orderFormShowIfDigital\" style=\"display:none;\">
\t\t\t\t<div class=\"MessageBox  MessageBoxInfo\">
\t\t\t\t\t";
        // line 197
        echo getLang("DigitalOrderNotice");
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"orderFormHideIfDigital\" style=\"display:none;\">
\t\t\t\t<div class=\"showByValue_shipItemsTo showByValue_shipItemsTo_single\">
\t\t\t\t\t";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t\t";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingAddress", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t\t<fieldset class=\"existingAddressList\">
\t\t\t\t\t\t\t<legend>";
        // line 207
        echo getLang("UseExistingAddress");
        echo "</legend>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t";
        // line 212
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['shippingFormFields']) ? $context['shippingFormFields'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['formField']) {
            echo "\t\t\t\t\t\t\t";
            // line 213
            echo twig_safe_filter($this->getAttribute((isset($context['formField']) ? $context['formField'] : null), "loadForFrontend", array(), "any"));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formField'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 214
        echo "
\t\t\t\t\t\t";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => " "), ), "method"), "1");
        // line 218
        echo "
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"saveShippingAddress\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t";
        // line 221
        echo getLang("SaveToCustomersAddressBook");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 228
        $context['address'] = $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "getShippingAddress", array(), "any");
        echo "
\t\t\t\t<div class=\"showByValue_shipItemsTo showByValue_shipItemsTo_billing showByValue_shipItemsTo_single\">
\t\t\t\t\t";
        // line 231
        $context['shippingMethod'] = $this->getAttribute((isset($context['address']) ? $context['address'] : null), "shippingMethod", array(), "any");
        echo "\t\t\t\t\t";
        // line 232
        if ((isset($context['shippingMethod']) ? $context['shippingMethod'] : null)) {
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"currentShipping[isCustom]\" value=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "isCustom", array(), "any"), "1");
            echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"currentShipping[module]\" value=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "module", array(), "any"), "1");
            echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"currentShipping[description]\" value=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "description", array(), "any"), "1");
            echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"currentShipping[price]\" value=\"";
            // line 236
            echo formatPrice(twig_escape_filter($this->env, $this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "price", array(), "any"), "1"), false, false);
            echo "\" />
\t\t\t\t\t";
        }
        // line 237
        echo "
\t\t\t\t\t";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t\t";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingMethod", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t\t";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ChooseAProvider", array(), "any")) . (":")), ), "method"), "1");
        // line 244
        echo "
\t\t\t\t\t\t\t<select name=\"shippingQuoteList\" ";
        // line 245
        if ((!(isset($context['shippingMethod']) ? $context['shippingMethod'] : null))) {
            echo "style=\"display: none\"";
        }
        echo " class=\"Field300 showByValue shippingQuoteList\" size=\"5\">
\t\t\t\t\t\t\t\t";
        // line 246
        if (((isset($context['shippingMethod']) ? $context['shippingMethod'] : null)) && ($this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "module", array(), "any") != "custom")) {
            echo "\t\t\t\t\t\t\t\t\t<option value=\"builtin:current\" selected=\"selected\">";
            // line 247
            echo getLang("UseCurrentShippingMethod", array("method" => $this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "description", array(), "any"), "price" => formatPrice($this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "price", array(), "any"))));
            // line 250
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 251
        echo "\t\t\t\t\t\t\t\t<option value=\"builtin:none\">";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "xNone", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"builtin:custom\" ";
        // line 253
        if (((isset($context['shippingMethod']) ? $context['shippingMethod'] : null)) && ($this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "module", array(), "any") == "custom")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Custom", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t</select> <a href=\"#\" class=\"fetchShippingQuotesLink\">";
        // line 254
        echo getLang("FetchShippingQuotes");
        echo "</a>
\t\t\t\t\t\t\t<div class=\"nodeJoin customShippingContainer showByValue_shippingQuoteList showByValue_shippingQuoteList_builtincustom\" style=\"display:none;\">
\t\t\t\t\t\t\t\t";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingMethod", array(), "any")) . (":"), "required" => true), ), "method"), "1");
        // line 260
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "input", array("text", "customShippingDescription", $this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "description", array(), "any"), array("class" => "Field300"), ), "method"), "1");
        // line 263
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("label" => ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShippingCost", array(), "any")) . (":"), "last" => true), ), "method"), "1");
        // line 269
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 270
        echo twig_escape_filter($this->env, (isset($context['CurrencyTokenLeft']) ? $context['CurrencyTokenLeft'] : null), "1");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "input", array("text", "customShippingPrice", formatPrice($this->getAttribute((isset($context['shippingMethod']) ? $context['shippingMethod'] : null), "price", array(), "any"), false, false), array("class" => "Field70"), ), "method"), "1");
        // line 272
        echo " ";
        echo twig_escape_filter($this->env, (isset($context['CurrencyTokenRight']) ? $context['CurrencyTokenRight'] : null), "1");
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t\t";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"showByValue_shipItemsTo showByValue_shipItemsTo_multiple\" id=\"multiShippingTable\">
\t\t\t\t\t<!-- Placeholder for content loaded in via ajax -->
\t\t\t\t\t";
        // line 282
        if ((isset($context['multiShippingTable']) ? $context['multiShippingTable'] : null)) {
            echo "\t\t\t\t\t\t";
            // line 283
            echo twig_safe_filter((isset($context['multiShippingTable']) ? $context['multiShippingTable'] : null));
            echo "
\t\t\t\t\t";
        }
        // line 284
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"orderMachineStateSummary orderMachineStateSummaryLoadingIndicator\" style=\"display:none;\">
\t\t\t<div class=\"orderFormColumns\">
\t\t\t\t<div class=\"orderFormRightColumn\">
\t\t\t\t\t";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical", "class" => "greenFormContainer"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FinalizeOrder", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t<label class=\"row\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"emailInvoiceToCustomer\" value=\"1\" ";
        // line 296
        if ((isset($context['addingOrder']) ? $context['addingOrder'] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo getLang("EmailCustomerInvoice");
        echo "?
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<div class=\"billingEmailAddressContainer\">(<span class=\"billingEmailAddress\"></span>)</div>
\t\t\t\t\t\t\t<button class=\"orderMachineSaveButton\" disabled=\"disabled\" accesskey=\"s\">";
        // line 299
        if ((isset($context['payment']) ? $context['payment'] : null)) {
            echo twig_safe_filter($this->getEnvironment()->getExtension('interspire')->accessKeyFilter($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SaveOnly", array(), "any"), "s"));
        } else {
            echo twig_safe_filter($this->getEnvironment()->getExtension('interspire')->accessKeyFilter($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "SaveAndProcessPayment", array(), "any"), "s"));
        }
        echo "</button>
\t\t\t\t\t\t";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical", "class" => "orderSummaryContainer"), ), "method"), "1");
        // line 306
        echo "
\t\t\t\t\t\t";
        // line 307
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrderSummary", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 308
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t<div class=\"orderFormSummaryOrderSummaryContainer\"><!-- placeholder --></div>
\t\t\t\t\t\t";
        // line 310
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical", "class" => "couponGiftCertificateContainer"), ), "method"), "1");
        // line 316
        echo "

\t\t\t\t\t\t";
        // line 318
        if ((isset($context['allowGiftCertificates']) ? $context['allowGiftCertificates'] : null)) {
            echo "\t\t\t\t\t\t\t";
            // line 319
            $context['couponPanelHeading'] = $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CouponOrGiftCertificateQ", array(), "any");
            echo "\t\t\t\t\t\t";
        } else {
            // line 320
            echo "\t\t\t\t\t\t\t";
            // line 321
            $context['couponPanelHeading'] = $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ApplyCouponOnly", array(), "any");
            echo "\t\t\t\t\t\t";
        }
        // line 322
        echo "
\t\t\t\t\t\t";
        // line 324
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array((isset($context['couponPanelHeading']) ? $context['couponPanelHeading'] : null), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 325
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "input", array("text", "couponGiftCertificate", "", array("class" => "Field120"), ), "method"), "1");
        // line 328
        echo "<input type=\"button\" class=\"orderMachineCouponButton\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Apply", array(), "any"), "1");
        echo "\" />
\t\t\t\t\t\t";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 332
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 333
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentDetails", array(), "any"), ), "method"), "1");
        echo "

\t\t\t\t\t\t";
        // line 335
        echo twig_safe_filter((isset($context['paymentForm']) ? $context['paymentForm'] : null));
        echo "
\t\t\t\t\t";
        // line 336
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"orderFormLeftColumn\">
\t\t\t\t\t<div class=\"orderFormSummaryBillingDetailsContainer\"><!-- placeholder --></div>

\t\t\t\t\t<div class=\"orderFormSummaryShippingDetailsContainer\"><!-- placeholder --></div>

\t\t\t\t\t";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "OrderCommentsVisible", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 345
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("last" => true), ), "method"), "1");
        echo "
\t\t\t\t\t\t\t";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "textarea", array("customerMessage", $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "customerMessage", array(), "any"), array("class" => "Field100pct", "rows" => 6), ), "method"), "1");
        // line 349
        echo "
\t\t\t\t\t\t";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "

\t\t\t\t\t";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startForm", array(array("type" => "vertical"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "heading", array($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "StaffNotesNotVisible", array(), "any"), ), "method"), "1");
        echo "
\t\t\t\t\t\t";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(array("last" => true), ), "method"), "1");
        echo "
\t\t\t\t\t\t\t";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "textarea", array("staffNotes", $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "staffNotes", array(), "any"), array("class" => "Field100pct", "rows" => 6), ), "method"), "1");
        // line 359
        echo "
\t\t\t\t\t\t";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
        echo "
\t\t\t\t\t";
        // line 361
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endForm", array(), "any"), "1");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"orderFormColumnsEnd\"></div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startButtonRow", array(), "any"), "1");
        echo "
\t\t\t<button class=\"orderMachineBackButton\" disabled=\"disabled\" accesskey=\"b\">&lt; ";
        // line 368
        echo twig_safe_filter($this->getEnvironment()->getExtension('interspire')->accessKeyFilter($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Back", array(), "any"), "b"));
        echo "</button>
\t\t\t<button class=\"orderMachineNextButton\" accesskey=\"n\">";
        // line 369
        echo twig_safe_filter($this->getEnvironment()->getExtension('interspire')->accessKeyFilter($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Next", array(), "any"), "n"));
        echo " &gt;</button>
\t\t\t";
        // line 370
        echo getLang("Or");
        echo "\t\t\t<a href=\"#\" class=\"orderMachineCancelButton\">";
        // line 371
        echo getLang("Cancel");
        echo "</a>
\t\t";
        // line 372
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endButtonRow", array(), "any"), "1");
        echo "
\t</form>
</div>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/jquery.form.js?";
        // line 375
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/product.functions.js?";
        // line 376
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/autocomplete/jquery.autocomplete.js?";
        // line 377
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" charset=\"utf-8\"></script>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/disabled/jquery.disabled.js?";
        // line 378
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" charset=\"utf-8\"></script>
<script type=\"text/javascript\" src=\"../javascript/formfield.js?";
        // line 379
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" charset=\"utf-8\"></script>
<script type=\"text/javascript\" src=\"../javascript/fsm.js?";
        // line 380
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\" charset=\"utf-8\"></script>
<script src=\"script/order.form.fsm.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script src=\"script/order.form.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">//<![CDATA[
\t";
        // line 384
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "jslang", array(array(0 => "ChooseVariationBeforeAdding", 1 => "EnterProductRequiredFields", 2 => "ChooseValidProductFieldFile", 3 => "AddingProductToOrder", 4 => "UpdatingProductInOrder", 5 => "OrderCustomerSearchNone", 6 => "CustomerPasswordConfirmError", 7 => "CustomerEmailInvalid", 8 => "ConfirmRemoveProductFromOrder", 9 => "InvalidPaymentModule", 10 => "NoShippingMethodsAreAvailable_1", 11 => "NoShippingMethodsAreAvailable_2", 12 => "PleaseAddOneOrMoreItems", 13 => "ConfirmCancelMessage", 14 => "AddEditOrderConfirmPageNavigation", 15 => "ViewOrderHistory", 16 => "TypeACustomerNameEmailEtc", 17 => "PleaseSearchForACustomer", 18 => "UseThisAddress", 19 => "TypeAProductNameSkuEtc", 20 => "ChooseOneItemForShippingDestination", 21 => "AllocateProducts", 22 => "Cancel", 23 => "SaveChanges", 24 => "ConfirmDeleteShippingDestination", 25 => "QuoteItemSearchNone", 26 => "EditDeletedOrderSaveNotice"), ), "method"), "1");
        // line 412
        echo "

\t";
        // line 414
        if ((isset($context['allowGiftCertificates']) ? $context['allowGiftCertificates'] : null)) {
            echo "\t\tlang[\"EnterACoupon\"] = \"";
            // line 415
            echo Interspire_Template_Extension::jsFilter(getLang("PleaseEnterACouponOrGiftCert"), "'");
            echo "\";
\t";
        } else {
            // line 416
            echo "\t\tlang[\"EnterACoupon\"] = \"";
            // line 417
            echo Interspire_Template_Extension::jsFilter(getLang("PleaseEnterACoupon"), "'");
            echo "\";
\t";
        }
        // line 418
        echo "
\t";
        // line 420
        echo twig_safe_filter((isset($context['formFieldJavascript']) ? $context['formFieldJavascript'] : null));
        echo "

\torderCustomFormFieldsAccountFormId = ";
        // line 422
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formFieldTypes']) ? $context['formFieldTypes'] : null), "accountFormFields", array(), "any"), "1");
        echo "
\torderCustomFormFieldsBillingFormId = ";
        // line 423
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formFieldTypes']) ? $context['formFieldTypes'] : null), "billingFormFields", array(), "any"), "1");
        echo ";
\torderCustomFormFieldsShippingFormId = ";
        // line 424
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formFieldTypes']) ? $context['formFieldTypes'] : null), "shippingFormFields", array(), "any"), "1");
        echo ";

\t";
        // line 426
        if ($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "orderId", array(), "any")) {
            echo "\t\tOrder_Form.orderId = ";
            // line 427
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "orderId", array(), "any"), "1");
            echo ";
\t";
        }
        // line 428
        echo "
\t\$(function(){
\t\t";
        // line 431
        if ($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "isDigital", array(), "any")) {
            echo "\t\t\tOrder_Form.setIsDigital(true);
\t\t";
        } else {
            // line 433
            echo "\t\t\tOrder_Form.setIsDigital(false);
\t\t";
        }
        // line 435
        echo "
\t\t";
        // line 437
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "deleted", array(), "any")) {
            echo "\t\t\tOrder_Form.setIsDeleted(true);
\t\t";
        }
        // line 439
        echo "
\t\tOrder_Form.updateBillingEmailAddress(\"";
        // line 441
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute($this->getAttribute((isset($context['quote']) ? $context['quote'] : null), "getBillingAddress", array(), "any"), "getEmail", array(), "any"));
        echo "\");
\t});
//]]></script>
";
    }

}

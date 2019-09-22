<?php

/* order.form.summary.payment.tpl */
class __TwigTemplate_3b1e8eb2cb3cf84f5543301c73c7d584 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['formBuilder'] = $this->env->loadTemplate("macros/forms.tpl", true);
        // line 2
        $context['orderForm'] = $this->env->loadTemplate("macros/orderform.tpl", true);
        echo "
";
        // line 4
        if ((isset($context['payment']) ? $context['payment'] : null)) {
            echo "\t";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
            echo "
\t\t";
            // line 6
            echo getLang("PaymentDetailInfo", array("provider" => $this->getAttribute((isset($context['payment']) ? $context['payment'] : null), "provider", array(), "any")));
            echo "\t";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
            echo "

\t";
            // line 9
            if (($this->getAttribute((isset($context['payment']) ? $context['payment'] : null), "transactionId", array(), "any")) || ($this->getAttribute((isset($context['payment']) ? $context['payment'] : null), "status", array(), "any"))) {
                echo "\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
                echo "
\t\t\t<table cellspacing=\"0\" class=\"orderFormPaymentDetailsTable\">
\t\t\t\t";
                // line 12
                if ($this->getAttribute((isset($context['payment']) ? $context['payment'] : null), "transactionId", array(), "any")) {
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
                    // line 14
                    echo ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TransactionId", array(), "any")) . (":");
                    echo "</th>
\t\t\t\t\t\t<td>";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['payment']) ? $context['payment'] : null), "transactionId", array(), "any"), "1");
                    echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 17
                echo "
\t\t\t\t";
                // line 19
                if ($this->getAttribute((isset($context['payment']) ? $context['payment'] : null), "status", array(), "any")) {
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
                    // line 21
                    echo ($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "PaymentStatus", array(), "any")) . (":");
                    echo "</th>
\t\t\t\t\t\t<td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['payment']) ? $context['payment'] : null), "status", array(), "any"), "1");
                    echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 24
                echo "\t\t\t</table>
\t\t";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
                echo "
\t";
            }
        } else {
            // line 28
            echo "\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "startRow", array(), "any"), "1");
            echo "
\t\t<select name=\"paymentMethod\" id=\"paymentMethod\" class=\"Field200\">
\t\t\t<option value=\"\">-- Select a Payment Method --</option>
\t\t\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['modules']) ? $context['modules'] : null));
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
            foreach ($context['_seq'] as $context['moduleId'] => $context['module']) {
                echo "\t\t\t\t";
                // line 33
                if (((!(isset($context['controlPanelSecure']) ? $context['controlPanelSecure'] : null))) && ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "requiresSSL", array(), "any"))) {
                    echo "\t\t\t\t\t<option value=\"\" disabled=\"disabled\">";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "name", array(), "any"), "1");
                    echo " (requires secure control panel)</option>
\t\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t\t\t<option value=\"";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context['moduleId']) ? $context['moduleId'] : null), "1");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "name", array(), "any"), "1");
                    echo "</option>
\t\t\t\t";
                }
                // line 37
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
            unset($context['_seq'], $context['_iterated'], $context['moduleId'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "\t\t</select>
\t";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['formBuilder']) ? $context['formBuilder'] : null), "endRow", array(), "any"), "1");
            echo "

\t";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['modules']) ? $context['modules'] : null));
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
            foreach ($context['_seq'] as $context['moduleId'] => $context['module']) {
                echo "\t\t";
                // line 43
                if ((((isset($context['controlPanelSecure']) ? $context['controlPanelSecure'] : null)) && ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "requiresSSL", array(), "any"))) || ((!$this->getAttribute((isset($context['module']) ? $context['module'] : null), "requiresSSL", array(), "any")))) {
                    echo "\t\t\t";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['orderForm']) ? $context['orderForm'] : null), "paymentModuleForm", array((isset($context['module']) ? $context['module'] : null), ), "method"), "1");
                    echo "

\t\t\t";
                    // line 46
                    echo twig_safe_filter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "javascript", array(), "any"));
                    echo "
\t\t";
                }
                // line 47
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
            unset($context['_seq'], $context['_iterated'], $context['moduleId'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

}

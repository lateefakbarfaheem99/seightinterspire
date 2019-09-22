<?php

/* order.form.summary.billing.tpl */
class __TwigTemplate_3727c40a6bd57bd76a3fc0d081b38ab3 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['forms'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startForm", array(array("type" => "vertical", "class" => "orderFormSummaryBillingDetails"), ), "method"), "1");
        // line 7
        echo "
\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "heading", array("Customer Billing Details", ), "method"), "1");
        echo "
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "startRow", array(array("type" => "vertical"), ), "method"), "1");
        echo "
\t\t<div class=\"detailsHeading\">";
        // line 10
        echo getLang("BillingTo");
        echo ": <a href=\"#\" class=\"orderFormChangeBillingDetailsLink\">";
        echo getLang("Change");
        echo "</a></div>
\t\t<div class=\"detailsAddress\">
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "address", array((isset($context['address']) ? $context['address'] : null), ), "method"), "1");
        echo "
\t\t</div>
\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endRow", array(), "any"), "1");
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['forms']) ? $context['forms'] : null), "endForm", array(), "any"), "1");
        echo "
";
    }

}

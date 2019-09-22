<?php

/* shipments.print.tpl */
class __TwigTemplate_18afa71583673db3595cb2d2c43dcab0 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html ";
        // line 2
        if ((isset($context['rtl']) ? $context['rtl'] : null)) {
            echo "dir=\"rtl\"";
        }
        echo " xml:lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, (isset($context['language']) ? $context['language'] : null), "1");
        echo "\">
<head>
\t<title></title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "\" />
\t<script type=\"text/javascript\" src=\"../javascript/jquery.js\"></script>
\t<style type=\"text/css\" media=\"screen\">
\t\tbody {
\t\t\tmargin: 0;
\t\t}

\t\t#ShipmentSelect {
\t\t\tbackground: #efefef;
\t\t\tfont-weight: bold;
\t\t\tfont-size: 14px;
\t\t\tposition: fixed;
\t\t\ttop: 0;
\t\t\tleft: 0;
\t\t\twidth: 100%;
\t\t\tborder-bottom: 1px solid #555;
\t\t}

\t\t#PackingSlips {
\t\t\tmargin: 10px;
\t\t}

\t\t#PackingSlips.WithShipmentSelect {
\t\t\tmargin-top: 50px;
\t\t}
\t</style>

\t<style type=\"text/css\" media=\"print\">
\t\t#ShipmentSelect {
\t\t\tdisplay: none;
\t\t}
\t</style>
</head>
<body>
\t";
        // line 39
        echo twig_safe_filter((isset($context['ShipmentSelect']) ? $context['ShipmentSelect'] : null));
        echo "

\t<div id=\"PackingSlips\" class=\"";
        // line 41
        echo twig_safe_filter((isset($context['PackingSlipsClass']) ? $context['PackingSlipsClass'] : null));
        echo "\">
\t\t";
        // line 42
        echo twig_safe_filter((isset($context['PackingSlips']) ? $context['PackingSlips'] : null));
        echo "
\t</div>

<!--\t<script type=\"text/javascript\">window.setTimeout(\"window.print();\", 1000);</script> -->
</body>
</html>";
    }

}

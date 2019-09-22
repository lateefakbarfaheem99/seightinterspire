<?php

/* pagefooter.tpl */
class __TwigTemplate_232200f27f3941e036f8c85edffa7e54 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t";
        echo twig_safe_filter((isset($context['GettingStartedStep']) ? $context['GettingStartedStep'] : null));
        echo "
\t</div>
\t<div class=\"PageFooter\" style=\"text-align: right;\">
\t\t";
        // line 4
        echo twig_safe_filter((isset($context['DebugDetails']) ? $context['DebugDetails'] : null));
        echo "
\t\t";
        // line 5
        echo twig_safe_filter((isset($context['AdminCopyright']) ? $context['AdminCopyright'] : null));
        echo "
\t</div>
</div>

";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['bodyScripts']) ? $context['bodyScripts'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['script']) {
            echo "\t<script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context['script']) ? $context['script'] : null), "1");
            echo "?";
            echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
            echo "\"></script>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "
";
        // line 13
        echo twig_safe_filter((isset($context['taskManagerScript']) ? $context['taskManagerScript'] : null));
        echo "

";
        // line 15
        if ((isset($context['idletime']) ? $context['idletime'] : null)) {
            echo "<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/idletimer/cookie.js?";
            // line 16
            echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
            echo "\"></script>
<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/idletimer/idletimer.js?";
            // line 17
            echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
            echo "\"></script>
<script type=\"text/javascript\">
(function(\$){
\t\$.idleTimer(";
            // line 20
            echo twig_escape_filter($this->env, (isset($context['idletime']) ? $context['idletime'] : null), "1");
            echo ", {});
})(jQuery);
</script>
";
        }
        // line 23
        echo "
</body>
</html>
";
    }

}

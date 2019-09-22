<?php

/* shoppingcomparison.manage.tpl */
class __TwigTemplate_2c4bf25847e767bca9fc8e8e51a1049d extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['tooltip'] = $this->env->loadTemplate("tooltip.tpl", true);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"Styles/shoppingcomparison.css\"/>
<form action=\"index.php?ToDo=saveShoppingComparison\" method=\"post\">
\t<div class=\"BodyContainer\">
\t\t<table class=\"Table13\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading1\">";
        // line 9
        echo getLang("ShoppingComparisonManagePageTitle");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Intro\">
\t\t\t\t\t\t<div>";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "</div>
\t\t\t\t\t\t<p>";
        // line 14
        echo getLang("ShoppingComparisonManagePageDescription");
        echo "</p>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>

\t\t\t\t\t\t<div id=\"tabs\">
\t\t\t\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t\t\t\t<li><a href=\"#sites\">";
        // line 22
        echo getLang("ShoppingComparisonChooseSites");
        echo "</a></li>
\t\t\t\t\t\t\t\t";
        // line 23
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
        foreach ($context['_seq'] as $context['_key'] => $context['module']) {
            echo "\t\t\t\t\t\t\t\t";
            // line 24
            if ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "checkEnabled", array(), "method")) {
                echo "\t\t\t\t\t\t\t\t<li><a href=\"#";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "id", array(), "any"), "1");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "method"), "1");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t";
        // line 30
        echo "
\t\t\t\t\t\t\t<div id=\"sites\">
\t\t\t\t\t\t\t\t<table class=\"Panel\">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"FieldLabel\">";
        // line 35
        echo getLang("ShoppingComparisonSites");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"modules[]\" class=\"Field250 ISSelectReplacement\" multiple=\"multiple\" style=\"height: 108px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 38
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
        foreach ($context['_seq'] as $context['_key'] => $context['module']) {
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
            echo "\"";
            if ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "checkEnabled", array(), "method")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "method"), "1");
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['tooltip']) ? $context['tooltip'] : null), "tooltip", array("shoppingComparisonToolTip", "ShoppingComparisonToolTipTitle", "ShoppingComparisonToolTipContent", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"Gap\" colspan=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td style=\"width: 183px;\"></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"FormButton\" type=\"submit\">";
        // line 55
        echo getLang("Save");
        echo "</button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"FormButton cancel\" type=\"button\">";
        // line 56
        echo getLang("Cancel");
        echo "</button>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 62
        echo "
\t\t\t\t\t\t\t";
        // line 63
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
        foreach ($context['_seq'] as $context['_key'] => $context['module']) {
            echo "\t\t\t\t\t\t\t";
            // line 64
            if ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "checkEnabled", array(), "method")) {
                echo "\t\t\t\t\t\t\t<div class=\"module\" id=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
                echo "\">
\t\t\t\t\t\t\t\t<table class=\"Panel\">
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 70
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getLogos", array(), "method"));
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
                foreach ($context['_seq'] as $context['_key'] => $context['logo']) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['logo']) ? $context['logo'] : null), "url", array(), "any"), "1");
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"ShoppingComparisonLogo\" src=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['logo']) ? $context['logo'] : null), "image", array(), "any"), "1");
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logo'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 74
                echo "
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 81
                echo twig_safe_filter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getHelpText", array(), "method"));
                echo "</p>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 84
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_iterator_to_array($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getMessages", array(), "method"));
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
                foreach ($context['_seq'] as $context['_key'] => $context['message']) {
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"MessageBox MessageBox";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context['message']) ? $context['message'] : null), "type", array(), "any"), "1");
                    echo "\">";
                    echo twig_safe_filter($this->getAttribute((isset($context['message']) ? $context['message'] : null), "content", array(), "any"));
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class='generateFeed smallbutton' value=\"Generate New Export\">Regenerate Feed...</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class='downloadFeed smallbutton' href=\"index.php?ToDo=downloadShoppingComparisonFeed&mid=";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
                echo "\">Download Feed File</button>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 96
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</form>

<div id=\"unmappedCategoriesModal\" style=\"display: none;\">
\t<div class=\"ModalTitle\">Wait! 48 Categories Aren't Mapped Correctly</div>
\t<div class=\"ModalContent\">
\t\t<table class=\"Panel\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td><span class=\"content\">
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"contentTemplate\" style=\"display:none\">

\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<input type=\"button\" class=\"generateFeed\" value=\"Generate Feed File Anyway\"/>
\t\t<input type=\"button\" class=\"close FormButton\" value=\"";
        // line 121
        echo getLang("Close");
        echo "\"/>
\t</div>
</div>

<script type=\"text/javascript\" src=\"script/jobtracker.js?";
        // line 125
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/shoppingcomparison.js?";
        // line 126
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type='text/javascript'>

(function(\$){
\$('document').ready(function(){
\t\$.extend(lang, {
\t\tShoppingComparisonUnmappedCategoriesModalTitle : \"";
        // line 132
        echo Interspire_Template_Extension::jsFilter(getLang("ShoppingComparisonUnmappedCategoriesModalTitle"), "'");
        echo "\",
\t\tShoppingComparisonUnmappedCategoriesModalHelp : \"";
        // line 133
        echo Interspire_Template_Extension::jsFilter(getLang("ShoppingComparisonUnmappedCategoriesModalHelp"), "'");
        echo "\",
\t\tShoppingComparisonFeedBeingGenerated : \"";
        // line 134
        echo Interspire_Template_Extension::jsFilter(getLang("ShoppingComparisonFeedBeingGenerated"), "'");
        echo "\",
\t\tConfirmCancel : \"";
        // line 135
        echo getLang("ConfirmCancel");
        echo "\"
\t});

\t\$.extend(ShoppingComparison, {
\t\tstartJobUrl : 'index.php?ToDo=generateShoppingComparisonFeed&mid=:moduleid',
\t\tstopJobUrl : 'index.php?ToDo=stopShoppingComparisonFeed&mid=:moduleid',
\t\tcategoriesUrl : 'index.php?ToDo=viewCategories'
\t});

\t";
        // line 144
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
        foreach ($context['_seq'] as $context['_key'] => $context['module']) {
            echo "\t\t";
            // line 145
            if ($this->getAttribute((isset($context['module']) ? $context['module'] : null), "checkEnabled", array(), "method")) {
                echo "\t\t\tShoppingComparison.modules['";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
                echo "'] = {
\t\t\t\tname : '";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "method"), "1");
                echo "',
\t\t\t\tjobid : '";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['module']) ? $context['module'] : null), "exportTask", array(), "method"), "getId", array(), "method"), "1");
                echo "',
\t\t\t\tunmappedCategories : ";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "numUnmappedCategories", array(), "method"), "1");
                echo "
\t\t\t};
\t\t";
            }
            // line 151
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 152
        echo "
\tShoppingComparison.init();
});
})(jQuery);
</script>";
    }

}

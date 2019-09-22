<?php

/* category.manage.tpl */
class __TwigTemplate_4aa987f26b864e15427c686f9b3535f9 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<link rel=\"stylesheet\" href=\"Styles/categories.css\" type=\"text/css\" />

<div class=\"BodyContainer\">
<table class=\"OuterPanel\">
<tr>
\t<td class=\"Heading1\">";
        // line 6
        echo getLang("ViewCategories");
        echo "</td>
</tr>
<tr>
\t<td>
\t\t<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>
\t\t\t\t";
        // line 14
        echo getLang("ManageCatIntro");
        echo "\t\t\t\t</p>
\t\t\t\t";
        // line 16
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t<tr><td><div id=\"CategoriesStatus\" style=\"margin-bottom: 10px;\"></div></td></tr>
\t\t<tr>
\t\t\t<td class=\"Intro\" style=\"padding-bottom:10px\">
\t\t\t\t<input type=\"button\" onclick=\"document.location.href='index.php?ToDo=createCategory'\" name=\"createNewCategory\" value=\"";
        // line 22
        echo getLang("CreateCategory");
        echo "...\" class=\"Button\">
\t\t\t\t";
        // line 23
        if (twig_length_filter($this->env, (isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null))) {
            echo "\t\t\t\t&nbsp;
\t\t\t\t";
            // line 25
            echo getLang("Or");
            echo "\t\t\t\t<select name=\"bulk\" ";
            // line 26
            if ((!(isset($context['CategoryList']) ? $context['CategoryList'] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo ">
\t\t\t\t\t<option value=\"\">";
            // line 27
            echo getLang("ChooseAnAction");
            echo "</option>
\t\t\t\t\t<option class=\"delete\" ";
            // line 28
            echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
            echo ">";
            echo getLang("DeleteSelected");
            echo "</option>
\t\t\t\t\t";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_iterator_to_array((isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null));
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
                echo "\t\t\t\t\t<option class=\"mapcategories\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "method"), "1");
                echo "\">";
                echo getLang("BulkUpdateShoppingComparisonCategory", array("name" => $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "any")));
                echo "</option>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 31
            echo "\t\t\t\t</select>
\t\t\t\t<button type=\"button\" id=\"optionGo\" ";
            // line 33
            if ((!(isset($context['CategoryList']) ? $context['CategoryList'] : null))) {
                echo "disabled=\"disabled\"";
            }
            echo ">";
            echo getLang("Go");
            echo "</button>
\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t<input type=\"button\" value=\"";
            // line 35
            echo getLang("DeleteSelected");
            echo "\" id=\"indexDeleteButton\" class=\"SmallButton\" ";
            echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
            echo " />
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</td>
\t\t</tr>
\t\t</table>
\t</td>
</tr>
<tr>
\t<td style=\"padding-top: 10px;\">
\t\t<form method=\"post\" id=\"frmCategories\" onSubmit=\"return false\" action=\"index.php?ToDo=deleteCategory\">
\t\t\t<table class=\"GridPanel SortablePanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%; display: ";
        // line 45
        echo twig_safe_filter((isset($context['DisplayGrid']) ? $context['DisplayGrid'] : null));
        echo "\">
\t\t\t\t<tr class=\"Heading3\">
\t\t\t\t\t<td style=\"padding-left: 5px;\" width=\"1\"><input type=\"checkbox\" id=\"deleteAllToggle\"></td>
\t\t\t\t\t<td class=\"NoWrap\">";
        // line 48
        echo getLang("CategoryName");
        echo "</td>
\t\t\t\t\t<td width=\"80\" class=\"NoWrap\">";
        // line 49
        echo getLang("CategoryProducts");
        echo "</td>
\t\t\t\t\t<td width=\"120\" class=\"NoWrap\">";
        // line 50
        echo getLang("ProductsInSubCategories");
        echo "</td>
\t\t\t\t\t<td width=\"120\">
\t\t\t\t\t\t<span onmouseover=\"ShowQuickHelp(this, '";
        // line 52
        echo getLang("VisibleInMenuList");
        echo "', '";
        echo getLang("CategoryVisibilityHelp");
        echo "');\" onmouseout=\"HideQuickHelp(this);\" class=\"HelpText\"><span class=\"NoWrap\">";
        echo getLang("VisibleInMenuList");
        echo "</span></span>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 54
        if (twig_length_filter($this->env, (isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null))) {
            echo "\t\t\t\t\t<td width=\"120\" class=\"NoWrap\">";
            // line 55
            echo getLang("CategoryMappings");
            echo "</td>
\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t<td width=\"185\" class=\"NoWrap\">
\t\t\t\t\t\t";
        // line 58
        echo getLang("Action");
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
        // line 62
        echo twig_safe_filter((isset($context['CategoryList']) ? $context['CategoryList'] : null));
        echo "
\t\t</form>
\t</td>
</tr>
</table>

";
        // line 68
        $this->env->loadTemplate("category.select.modal.tpl")->display($context);
        echo "
\t<div id=\"reassignModal\" style=\"display: none;\">
\t\t<div class=\"ModalTitle\">";
        // line 71
        echo getLang("ReassignModalTitle");
        echo "</div>
\t\t<div class=\"ModalContent\">
\t\t\t<table class=\"Panel\" width=\"100%\">
\t\t\t\t<tr>
\t\t\t\t\t<td id=\"reassignCategoryModalIntro\">";
        // line 75
        echo getLang("ReassignModalIntro");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"reassignOption\" value=\"reassign\" id=\"reassignOption1\" checked=\"checked\"/>
\t\t\t\t\t\t";
        // line 80
        echo getLang("ReassignModalOption1");
        echo "\t\t\t\t\t\t<select name=\"parentidSelect\" size=\"8\" id=\"parentidSelect\" style=\"width: 98%;margin:5px\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"radio\" name=\"reassignOption\" value=\"delete\" id=\"reassignOption2\" />
\t\t\t\t\t\t";
        // line 87
        echo getLang("ReassignModalOption2");
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"ModalButtonRow\">
\t\t\t<div class=\"FloatLeft\">
\t\t\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"vertical-align: middle; display: none;\" class=\"LoadingIndicator\" />
\t\t\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"";
        // line 95
        echo getLang("Cancel");
        echo "\" id=\"cancelStep1\" />
\t\t\t</div>
\t\t\t<input type=\"button\" class=\"saveButton\" value=\"";
        // line 97
        echo getLang("Continue");
        echo " >>\" id=\"continueStep1\" />
\t\t</div>
\t</div>
\t<div id=\"confirmModal\" style=\"display: none;\">
\t\t<div class=\"ModalTitle\">";
        // line 101
        echo getLang("ConfirmModalTitle");
        echo "</div>
\t\t<div class=\"ModalContent\">
\t\t\t<table class=\"Panel\" width=\"100%\">
\t\t\t\t<tr>
\t\t\t\t\t<td id=\"confirmModalIntro\"></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"ModalButtonRow\">
\t\t\t<div class=\"FloatLeft\">
\t\t\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"vertical-align: middle; display: none;\" class=\"LoadingIndicator\" />
\t\t\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"";
        // line 112
        echo getLang("Cancel");
        echo "\" id=\"cancelStep2\" />
\t\t\t</div>
\t\t\t<input type=\"button\" class=\"saveButton\" value=\"";
        // line 114
        echo getLang("ConfirmModalButton");
        echo "\" id=\"continueStep2\" />
\t\t</div>
\t</div>

</div>
<script type=\"text/javascript\">
\tlang.categoryVisibleConfirmation = \"";
        // line 120
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryVisibleConfirmation"), "'");
        echo "\";
\tlang.categoryInvisibleConfirmation = \"";
        // line 121
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryInvisibleConfirmation"), "'");
        echo "\";
\tlang.visiblityNotChanged = \"";
        // line 122
        echo Interspire_Template_Extension::jsFilter(getLang("ErrCategoryVisibilityNotChanged"), "'");
        echo "\";
\tlang.clickToHideCategory = \"";
        // line 123
        echo Interspire_Template_Extension::jsFilter(getLang("ClickToHideCategory"), "'");
        echo "\";
\tlang.clickToShowCategory = \"";
        // line 124
        echo Interspire_Template_Extension::jsFilter(getLang("ClickToShowCategory"), "'");
        echo "\";
\tlang.chooseCategoryToDelete = \"";
        // line 125
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseCategoryToDelete"), "'");
        echo "\";
\tlang.chooseCategoryToUpdate = \"";
        // line 126
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseCategoryToUpdate"), "'");
        echo "\";
\tlang.confirmDeleteCategories = \"";
        // line 127
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmDeleteCategories"), "'");
        echo "\";
\tlang.reassignModalIntro = \"";
        // line 128
        echo Interspire_Template_Extension::jsFilter(getLang("ReassignModalIntro"), "'");
        echo "\";
\tlang.confirmModalIntro = \"";
        // line 129
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmModalIntro1"), "'");
        echo "\" + \"";
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmModalIntro2"), "'");
        echo "\" + \"";
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmModalIntro3"), "'");
        echo "\";
\tlang.confirmCancel = \"";
        // line 130
        echo getLang("ConfirmCancel");
        echo "\";
\tlang.chooseThisCategory = \"";
        // line 131
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseThisCategory"), "'");
        echo "\";
\tlang.categorySelectModalIntro = \"";
        // line 132
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingModalIntro"), "'");
        echo "\";
\tlang.categorySelectModalTitle = \"";
        // line 133
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingModalTitle"), "'");
        echo "\";
\tlang.categorySelectLeafCategorySelected = \"";
        // line 134
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingLeafCategorySelected"), "'");
        echo "\";
\tlang.categorySelectChooseLeafCategory = \"";
        // line 135
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryMappingChooseLeafCategory"), "'");
        echo "\";
</script>

<script type=\"text/javascript\" src=\"../javascript/jquery/plugins/jquery.ui.nestedSortable.js?";
        // line 138
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/category.manager.js?";
        // line 139
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\" src=\"script/category.selector.js?";
        // line 140
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>

<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
\$(function(){
\tCategoryManager.shoppingComparisonModules = {};

\t";
        // line 146
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null));
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
            echo "\t\tCategoryManager.shoppingComparisonModules[\"";
            // line 147
            echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "any"));
            echo "\"] = {
\t\t\tname: \"";
            // line 148
            echo $this->getEnvironment()->getExtension('interspire')->jsFilter($this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "any"));
            echo "\"
\t\t};
\t";
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
        // line 150
        echo "});
//]]></script>
";
    }

}

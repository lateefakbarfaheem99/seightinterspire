<?php

/* category.grid.tpl */
class __TwigTemplate_3006f95dc131db7c6e2f3a51f3fb9dcb extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<ul class=\"SortableList CategoryList\" ";
        if ((isset($context['isChild']) ? $context['isChild'] : null)) {
            echo "id=\"ChildCats_";
            echo twig_escape_filter($this->env, (isset($context['categoryId']) ? $context['categoryId'] : null), "1");
            echo "\"";
        } else {
            echo "id=\"CategoryList\"";
        }
        echo " ";
        if ((isset($context['isChild']) ? $context['isChild'] : null)) {
            echo "style=\"padding-left: 30px; padding-right: 0px;\"";
        }
        echo ">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['categories']) ? $context['categories'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['category']) {
            echo "\t\t<li id=\"ele-";
            // line 3
            echo twig_safe_filter($this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"));
            echo "\" class=\"SortableRow\">
\t\t\t<table class=\"GridPanel\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width:100%;\">
\t\t\t\t<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t\t\t\t<td width=\"45\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"categories[";
            // line 7
            echo twig_safe_filter($this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"));
            echo "]\" />

\t\t\t\t\t\t<a href=\"#\" style=\"outline: none;";
            // line 9
            if ($this->getAttribute((isset($context['category']) ? $context['category'] : null), "haschildren", array(), "any") == false) {
                echo "display: none;";
            }
            echo "\" id=\"ExpandLink_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
            echo "\" class=\"ExpandLink ExpandCollapseLink\" onclick=\"return false;\">
\t\t\t\t\t\t\t<img src=\"images/plus.gif\" class=\"ExpandImg\" style=\"vertical-align: bottom\" border=\"0\" alt=\"\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"DragMouseDown sort-handle\">";
            // line 13
            echo twig_safe_filter($this->getAttribute((isset($context['category']) ? $context['category'] : null), "catname", array(), "any"));
            echo "</td>
\t\t\t\t\t<td width=\"80\" class=\"HideOnDrag\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "prodcount", array(), "any"), "1");
            echo "</td>
\t\t\t\t\t<td width=\"120\" class=\"HideOnDrag\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "subcatprodcount", array(), "any"), "1");
            echo "</td>
\t\t\t\t\t<td width=\"120\" class=\"HideOnDrag\">
\t\t\t\t\t\t<a id=\"CatSitemap_";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
            echo "\" title=\"";
            echo getLang("ClickToHideCategorySitemap");
            echo "\" href=\"#\" onclick=\"CategoryManager.toggleCategorySitemap(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
            echo ");\"><img border=\"0\" src=\"images/";
            if ($this->getAttribute((isset($context['category']) ? $context['category'] : null), "catsitemap", array(), "any")) {
                echo "tick.gif";
            } else {
                echo "cross.gif";
            }
            echo "\" alt=\"Sitemap\"></a>
\t\t\t\t\t</td>
\t\t\t\t\t<td width=\"120\" class=\"HideOnDrag\">
\t\t\t\t\t\t<a id=\"CatVisible_";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
            echo "\" title=\"";
            echo getLang("ClickToHideCategory");
            echo "\" href=\"#\" onclick=\"CategoryManager.toggleCategoryVisibility(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
            echo ");\"><img border=\"0\" src=\"images/";
            if ($this->getAttribute((isset($context['category']) ? $context['category'] : null), "catvisible", array(), "any")) {
                echo "tick.gif";
            } else {
                echo "cross.gif";
            }
            echo "\" alt=\"Visible\"></a>
\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 22
            if (twig_length_filter($this->env, (isset($context['ShoppingComparisonModules']) ? $context['ShoppingComparisonModules'] : null))) {
                echo "\t\t\t\t\t<td width=\"120px\" class=\"HideOnDrag\">
\t\t\t\t\t\t";
                // line 24
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
                    echo "\t\t\t\t\t\t";
                    // line 25
                    $context['comparisonCategory'] = $this->getAttribute($this->getAttribute((isset($context['category']) ? $context['category'] : null), "cataltcategoriescache", array(), "any"), $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getId", array(), "any"), array(), "array");
                    echo "\t\t\t\t\t\t";
                    // line 26
                    if ($this->getAttribute((isset($context['comparisonCategory']) ? $context['comparisonCategory'] : null), "path", array(), "any")) {
                        echo "\t\t\t\t\t\t<image onmouseover=\"ShowQuickHelp(this, '', '";
                        // line 27
                        echo getLang("ShoppingComparisonCategoryMapped", array("name" => $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "any"), "path" => twig_escape_filter($this->env, $this->getAttribute((isset($context['comparisonCategory']) ? $context['comparisonCategory'] : null), "path", array(), "any"))));
                        echo "');\" onmouseout=\"HideQuickHelp(this);\" class=\"ShoppingComparisonIcon\" src='";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getIcon", array(), "any"), "1");
                        echo "'/>
\t\t\t\t\t\t";
                    } else {
                        // line 28
                        echo "\t\t\t\t\t\t<image onmouseover=\"ShowQuickHelp(this, '', '";
                        // line 29
                        echo getLang("ShoppingComparisonCategoryNotMapped", array("name" => $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getName", array(), "any")));
                        echo "');\" onMouseOut=\"HideQuickHelp(this);\" class=\"ShoppingComparisonIcon Opacity-20\" src='";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['module']) ? $context['module'] : null), "getIcon", array(), "any"), "1");
                        echo "'/>
\t\t\t\t\t\t";
                    }
                    // line 30
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 32
                echo "\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t<td width=\"185\" class=\"HideOnDrag NoWrap\">
\t\t\t\t\t\t<a title=\"";
            // line 36
            echo getLang("ViewCategory");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "link", array(), "any"), "1");
            echo "\" class=\"bodylink\" target=\"_blank\">";
            echo getLang("View");
            echo "</a>

\t\t\t\t\t\t<a title=\"";
            // line 38
            echo getLang("ShowProductsInCategory");
            echo "\" href=\"index.php?ToDo=searchProductsRedirect&amp;searchQuery=&amp;category[]=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
            echo "\">";
            echo getLang("Products");
            echo "</a>

\t\t\t\t\t\t";
            // line 40
            if ((isset($context['hasCreateCatPermission']) ? $context['hasCreateCatPermission'] : null)) {
                echo "\t\t\t\t\t\t\t<a title=\"";
                // line 41
                echo getLang("NewCategory");
                echo "\" href=\"index.php?ToDo=createCategory&amp;parentId=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
                echo "\" class=\"bodylink\">";
                echo getLang("NewSubCategory");
                echo "</a>
\t\t\t\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t\t\t\t<a disabled=\"disabled\" class=\"bodylink\">";
                // line 43
                echo getLang("NewSubCategory");
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 44
            echo "
\t\t\t\t\t\t";
            // line 46
            if ((isset($context['hasEditCatPermission']) ? $context['hasEditCatPermission'] : null)) {
                echo "\t\t\t\t\t\t\t<a title=\"";
                // line 47
                echo getLang("NewCategory");
                echo "\" href=\"index.php?ToDo=editCategory&amp;catId=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['category']) ? $context['category'] : null), "categoryid", array(), "any"), "1");
                echo "\" class=\"bodylink\">";
                echo getLang("Edit");
                echo "</a>
\t\t\t\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t\t\t\t<a disabled=\"disabled\" class=\"bodylink\">";
                // line 49
                echo getLang("Edit");
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "</ul>
";
    }

}

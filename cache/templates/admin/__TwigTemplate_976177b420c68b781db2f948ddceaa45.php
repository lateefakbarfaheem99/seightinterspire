<?php

/* category.select.modal.tpl */
class __TwigTemplate_976177b420c68b781db2f948ddceaa45 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div id=\"categorySelectModal\" style=\"display: none;\">
\t<div class=\"ModalTitle\"></div>
\t<div class=\"ModalContent\">
\t\t<p class=\"intro\"></p>
\t\t<div class=\"message\"></div>
\t\t<div class=\"CategoriesContainer\">
\t\t\t<table>
\t\t\t\t<tr class='CategoriesRow'>
\t\t\t\t\t<td>
\t\t\t\t\t    <div class=\"CategoryBox ISSelect\" style=\"visibility:hidden\">
\t\t\t\t\t        <ul>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<div class=\"FloatLeft\">
\t\t\t<input type=\"button\" class=\"cancel FormButton\" value=\"";
        // line 21
        echo getLang("Cancel");
        echo "\"/>
\t\t</div>
\t\t\t<input type=\"button\" class=\"save\" value=\"";
        // line 23
        echo getLang("ChooseThisCategory");
        echo "\"/>
\t</div>
</div>";
    }

}

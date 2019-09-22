<?php

/* orders.manage.tpl */
class __TwigTemplate_ffc3e35a17abec7fe7bdbfa642b3dc0b extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"toolbar\">
\t<h1 id=\"pageTitle\"><span class=\"ordersViewSelectClick\">";
        // line 2
        echo getLang("Orders");
        echo "</span></h1>
\t<a style=\"position:absolute; left:5px; top:8px; width:59px\" class=\"button\" href=\"";
        // line 3
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=viewOrders\" type=\"submit\">";
        echo getLang("AllOrders");
        echo "</a>
\t<a class=\"button\" href=\"#searchForm\">";
        // line 4
        echo getLang("Search");
        echo "</a>
</div>
<ul selected=\"true\">
\t";
        // line 7
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t";
        // line 8
        echo twig_safe_filter((isset($context['OrderGrid']) ? $context['OrderGrid'] : null));
        echo "
\t<li style=\"text-align:center\">";
        // line 9
        echo twig_safe_filter((isset($context['SmallNav']) ? $context['SmallNav'] : null));
        echo "&nbsp;</li>

\t<select id=\"orderViewList\" class=\"hiddenSelect\">
\t\t<option value=\"0\">";
        // line 12
        echo getLang("AllOrders");
        echo "</option>
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['customSearchList']) ? $context['customSearchList'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['customSearch']) {
            echo "\t\t\t<option value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['customSearch']) ? $context['customSearch'] : null), "searchid", array(), "any"), "1");
            echo "\" ";
            if ((isset($context['CustomSearchId']) ? $context['CustomSearchId'] : null) == $this->getAttribute((isset($context['customSearch']) ? $context['customSearch'] : null), "searchid", array(), "any")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['customSearch']) ? $context['customSearch'] : null), "searchname", array(), "any"), "1");
            echo "</option>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customSearch'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t</select>
</ul>
<form id=\"searchForm\" class=\"dialog\" action=\"index.php?ToDo=searchOrdersRedirect\" method=\"get\" onsubmit=\"alert(5)\">
\t<input type=\"hidden\" name=\"paymentMethod\" value=\"\" />
\t<input type=\"hidden\" name=\"shippingMethod\" value=\"\" />
\t<input type=\"hidden\" name=\"couponCode\" value=\"\" />
\t<input type=\"hidden\" name=\"orderFrom\" value=\"\" />
\t<input type=\"hidden\" name=\"orderTo\" value=\"\" />
\t<input type=\"hidden\" name=\"totalFrom\" value=\"\" />
\t<input type=\"hidden\" name=\"totalTo\" value=\"\" />
\t<input type=\"hidden\" name=\"dateRange\" value=\"\" />
\t<input type=\"hidden\" name=\"fromDate\" value=\"\" />
\t<input type=\"hidden\" name=\"toDate\" value=\"\" />
\t<input type=\"hidden\" name=\"sortField\" value=\"orderid\" />
\t<input type=\"hidden\" name=\"sortOrder\" value=\"asc\" />
\t<fieldset>
\t    <h1>";
        // line 32
        echo getLang("OrderSearch");
        echo "</h1>
\t    <a class=\"button leftButton\" type=\"cancel\">";
        // line 33
        echo getLang("Cancel");
        echo "</a>
\t    <input type=\"text\" id=\"searchQuery\" value=\"";
        // line 34
        echo getLang("SearchOrdersPlaceholder");
        echo "\" onclick=\"if(this.value=='";
        echo getLang("SearchOrdersPlaceholder");
        echo "') { this.value=''; this.style.color='#000'; }\" style=\"color:#CACACA; padding-left:3px; font-size:15px\" />
\t    <select id=\"orderStatus\" style=\"font-size:16px; width:100%\">
\t\t<option value=\"\">";
        // line 36
        echo getLang("AllOrderStatuses");
        echo "</option>
\t\t";
        // line 37
        echo twig_safe_filter((isset($context['OrderStatusOptions']) ? $context['OrderStatusOptions'] : null));
        echo "
\t    </select>
\t    <input type=\"button\" value=\"";
        // line 39
        echo getLang("Search");
        echo "\" onclick=\"searchRedir()\" />
\t</fieldset>
</form>

<script type=\"text/javascript\">

\tfunction searchRedir() {
\t\tvar q = document.getElementById(\"searchQuery\").value;
\t\tvar s = document.getElementById(\"orderStatus\").value;

\t\tif(q == \"";
        // line 49
        echo getLang("SearchOrdersPlaceholder");
        echo "\") {
\t\t\tq = \"\";
\t\t}

\t\tdocument.location.href = \"";
        // line 53
        echo twig_safe_filter((isset($context['ShopPath']) ? $context['ShopPath'] : null));
        echo "/admin/index.php?ToDo=searchOrdersRedirect&SubmitButton1=Search&searchQuery=\"+q+\"&orderStatus=\"+s+\"&paymentMethod=&shippingMethod=&couponCode=&orderFrom=&orderTo=&totalFrom=&totalTo=&dateRange=&fromDate=&toDate=&sortField=orderid&sortOrder=desc\";
\t\treturn false;
\t}

\t\$(function(){
\t\t\$('.ordersViewSelectClick').click(function(event){
\t\t\t\$('#orderViewList').focus();
\t\t});

\t\t\$('#orderViewList').change(function(event){
\t\t\tlocation.href = 'index.php?ToDo=viewOrders&searchId=' + \$(this).val();
\t\t});
\t});

</script>
";
    }

}

<?php

/* orders.notes.popup.tpl */
class __TwigTemplate_35be60138c7b9b4c36acb7e4c3532456 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<div class=\"ModalTitle\">
\t";
        // line 2
        echo getLang("OrderNotesPopupHeading");
        echo "</div>
<div class=\"ModalContent\">
\t<p class=\"MessageBox MessageBoxInfo\">
\t\t";
        // line 6
        echo getLang("OrderNotesPopupIntro");
        echo "\t</p>

\t<form action=\"\" id=\"notesForm\">
\t\t<input type=\"hidden\" id=\"orderId\" name=\"orderId\" value=\"";
        // line 10
        echo twig_safe_filter((isset($context['OrderID']) ? $context['OrderID'] : null));
        echo "\" />

\t\t<table class=\"GridPanel\">
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td>";
        // line 14
        echo getLang("OrderComments");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<textarea id=\"ordcustmessage\" name=\"ordcustmessage\" rows=\"8\" style=\"width:98%;\">";
        // line 18
        echo twig_safe_filter((isset($context['OrderCustomerMessage']) ? $context['OrderCustomerMessage'] : null));
        echo "</textarea>
\t\t\t\t</tr>
\t\t\t</tr>
\t\t\t<tr class=\"Heading3\">
\t\t\t\t<td>";
        // line 22
        echo getLang("StaffNotes");
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<textarea id=\"ordnotes\" name=\"ordnotes\" rows=\"8\" style=\"width:98%;\">";
        // line 26
        echo twig_safe_filter((isset($context['OrderNotes']) ? $context['OrderNotes'] : null));
        echo "</textarea>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</form>
</div>
<div class=\"ModalButtonRow\">
\t<div class=\"FloatLeft\">
\t\t<img src=\"images/loading.gif\" alt=\"\" style=\"vertical-align: middle; display: none;\" class=\"LoadingIndicator\" />
\t\t<input type=\"button\" class=\"CloseButton FormButton\" value=\"";
        // line 35
        echo getLang("Cancel");
        echo "\" onclick=\"\$.modal.close();\" />
\t</div>
\t<input type=\"button\" name=\"SaveNotesButton\" class=\"Submit\" value=\"";
        // line 37
        echo getLang("Save");
        echo "\" onclick=\"";
        if ($this->getAttribute((isset($context['order']) ? $context['order'] : null), "deleted", array(), "any")) {
            echo "Order.showOrderDeletedGeneralNotice();";
        } else {
            echo "Order.SaveNotes('";
            echo twig_safe_filter((isset($context['ThankYouID']) ? $context['ThankYouID'] : null));
            echo "')";
        }
        echo "\" />
</div>

<script type=\"text/javascript\">
\tlang.OrderCommentsDefault = '";
        // line 41
        echo getLang("OrderCommentsDefault");
        echo "';
\tlang.OrderNotesDefault = '";
        // line 42
        echo getLang("OrderNotesDefault");
        echo "';

\tfunction ShowOrderCommentsDefault()
\t\t{
\t\t\t\$('#ordcustmessage')
\t\t\t\t.val(lang.OrderCommentsDefault)
\t\t\t\t.data('usingDefault', 1)
\t\t\t\t.addClass('OrderDefaultField')
\t\t\t\t.attr('name', 'ordcustmessage_default')
\t\t\t;
\t\t}

\t\tfunction ShowOrderNotesDefault()
\t\t{
\t\t\t\$('#ordnotes')
\t\t\t\t.val(lang.OrderNotesDefault)
\t\t\t\t.data('usingDefault', 1)
\t\t\t\t.addClass('OrderDefaultField')
\t\t\t\t.attr('name', 'ordnotes_default')
\t\t\t;
\t\t}

\t\tif(!\$('#ordcustmessage').val()) {
\t\t\tShowOrderCommentsDefault();
\t\t\t\$('#ordcustmessage')
\t\t\t\t.focus(function() {
\t\t\t\t\tif(\$(this).data('usingDefault') != 1) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$(this)
\t\t\t\t\t\t.val('')
\t\t\t\t\t\t.attr('name', 'ordcustmessage')
\t\t\t\t\t\t.removeClass('OrderDefaultField')
\t\t\t\t\t;
\t\t\t\t})
\t\t\t\t.blur(function() {
\t\t\t\t\tif(!\$(this).val()) {
\t\t\t\t\t\tShowOrderCommentsDefault();
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\t\$(this)
\t\t\t\t\t\t\t.data('usingDefault', 0)
\t\t\t\t\t\t;
\t\t\t\t\t}
\t\t\t\t})
\t\t\t;
\t\t}

\t\tif(!\$('#ordnotes').val()) {
\t\t\tShowOrderNotesDefault();
\t\t\t\$('#ordnotes')
\t\t\t\t.focus(function() {
\t\t\t\t\tif(\$(this).data('usingDefault') != 1) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$(this)
\t\t\t\t\t\t.val('')
\t\t\t\t\t\t.attr('name', 'ordnotes')
\t\t\t\t\t\t.removeClass('OrderDefaultField')
\t\t\t\t\t;
\t\t\t\t})
\t\t\t\t.blur(function() {
\t\t\t\t\tif(!\$(this).val()) {
\t\t\t\t\t\tShowOrderNotesDefault();
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\t\$(this)
\t\t\t\t\t\t\t.data('usingDefault', 0)
\t\t\t\t\t\t;
\t\t\t\t\t}
\t\t\t\t})
\t\t\t;
\t\t}
</script>
";
    }

}

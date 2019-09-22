<?php

/* export.grid.row.tpl */
class __TwigTemplate_27e3b5bb7e42064a35f15cfa34921bfd extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<tr class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t";
        // line 2
        echo twig_safe_filter((isset($context['RowData']) ? $context['RowData'] : null));
        echo "
</tr>";
    }

}

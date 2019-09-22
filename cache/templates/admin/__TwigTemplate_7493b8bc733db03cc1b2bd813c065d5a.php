<?php

/* export.grid.row.tpl */
class __TwigTemplate_7493b8bc733db03cc1b2bd813c065d5a extends Twig_Template
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

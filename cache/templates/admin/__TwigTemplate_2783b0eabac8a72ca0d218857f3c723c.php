<?php

/* layout.manage.giftcerts.tpl */
class __TwigTemplate_2783b0eabac8a72ca0d218857f3c723c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "
";
        // line 2
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "<p class=\"intro\">
\t";
        // line 4
        echo getLang("GiftCertificatesIntro");
        echo "</p>
<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"GiftCertificates\" style=\"width:100%;\">
\t";
        // line 7
        echo "
\t<tr class=\"Heading3\">
\t\t<td>Template</td>
\t\t<td>File Size</td>
\t\t<td>Last Updated</td>
\t\t<td>Enabled</td>
\t\t<td>Action</td>
\t</tr>
\t
\t";
        // line 16
        echo "
\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_iterator_to_array((isset($context['GiftCertificateThemes']) ? $context['GiftCertificateThemes'] : null));
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
        foreach ($context['_seq'] as $context['_key'] => $context['theme']) {
            echo "\t<tr class=\"GridRow GiftCertificate\" giftcertificate:id=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['theme']) ? $context['theme'] : null), "id", array(), "any"), "1");
            echo "\">
\t\t<td width=\"60%\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['theme']) ? $context['theme'] : null), "name", array(), "any"), "1");
            echo "</td>
\t\t<td>";
            // line 20
            echo Store_Number::niceSize(twig_escape_filter($this->env, $this->getAttribute((isset($context['theme']) ? $context['theme'] : null), "fileSize", array(), "any"), "1"));
            echo "</td>
\t\t<td>";
            // line 21
            echo $this->getEnvironment()->getExtension('interspire')->dateFormat(twig_escape_filter($this->env, $this->getAttribute((isset($context['theme']) ? $context['theme'] : null), "lastModified", array(), "any"), "1"), "ExtendedDisplayDateFormat");
            echo "</td>
\t\t<td>
\t\t\t<a class=\"toggleEnabledLink\" href=\"#\">
\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "enabledSwitch", array($this->getAttribute((isset($context['theme']) ? $context['theme'] : null), "isEnabled", array(), "any"), ), "method"), "1");
            echo "
\t\t\t</a>
\t\t</td>
\t\t<td style='white-space:nowrap;'>
\t\t\t<a class=\"previewLink\" href='#'>Preview</a>
\t\t\t<a class=\"editLink\" href='#'>Edit</a>
\t\t\t<a class=\"restoreLink\" href='#'>Restore</a>
\t\t</td>
\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "\t
\t";
        // line 35
        echo "
\t<tr class=\"giftCertificateEditForm\" style=\"display:none\">
\t\t<td colspan=\"4\">
\t\t\t<div class=\"editBox\" style=\"margin:10px\"></div>
\t\t\t<div style=\"padding-bottom:10px; padding-left: 10px;\">
\t\t\t\t<input class=\"FormButton saveButton\" type=\"button\" value=\"";
        // line 40
        echo getLang("Save");
        echo "\"/>
\t\t\t\t<input class=\"FormButton previewButton\" type=\"button\" value=\"";
        // line 41
        echo getLang("Preview");
        echo "\"/>
\t\t\t\tor
\t\t\t\t<a class=\"cancelLink\" href=\"#\">";
        // line 43
        echo getLang("Cancel");
        echo "</a>
\t\t\t</div>
\t\t</td>
\t\t<td>&nbsp;</td>
\t</tr>
</table>

";
        // line 50
        echo "
<div id=\"giftCertificatePreviewModal\" style=\"display: none;\">
\t<div class=\"ModalTitle\">";
        // line 52
        echo getLang("GiftCertificatePreview");
        echo "</div>
\t<div class=\"ModalContent\">
\t\t<table class=\"Panel\" width=\"100%\">
\t\t\t<tr>
\t\t\t\t<td><span id=\"giftCertificatePreviewFrame\"></span></td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<div class=\"ModalButtonRow\">
\t\t<input type=\"button\" class=\"closeGiftCertificatePreviewButton FormButton\" value=\"";
        // line 61
        echo getLang("Close");
        echo "\"/>
\t</div>
</div>

<script type=\"text/javascript\" src=\"script/layout.giftcertificates.js?";
        // line 65
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type='text/javascript'>
\$('document').ready(function(){
\tlang.GiftCertificateRestoreConfirmation = '";
        // line 68
        echo Interspire_Template_Extension::jsFilter(getLang("GiftCertificateRestoreConfirmation"), "'");
        echo "';
\t
\tLayout.GiftCertificates.Urls = {
\t\tedit : 'index.php?ToDo=editGiftCertificateTheme',
\t\tsave : 'index.php?ToDo=saveGiftCertificate',
\t\trestore : 'index.php?ToDo=restoreGiftCertificate',
\t\tpreview : 'index.php?ToDo=exampleGiftCertificate',
\t\ttoggleEnabled : 'index.php?ToDo=toggleGiftCertificateEnabled',
\t};
\t
\tLayout.GiftCertificates.init();
});
</script>";
    }

}

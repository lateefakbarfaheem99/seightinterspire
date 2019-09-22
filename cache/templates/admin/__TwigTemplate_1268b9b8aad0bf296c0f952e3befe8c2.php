<?php

/* settings.manage.tpl */
class __TwigTemplate_1268b9b8aad0bf296c0f952e3befe8c2 extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        // line 2
        $context['form'] = $this->env->loadTemplate("macros/forms.tpl", true);
        echo "<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=saveUpdatedSettings\" name=\"frmSettings\" id=\"frmSettings\" method=\"post\">
\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\" />
\t<div class=\"BodyContainer\">
\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 8
        echo getLang("StoreSettings");
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\" style=\"padding-bottom:10px\">
\t\t\t<p>";
        // line 12
        echo getLang("SettingsIntro");
        echo "</p>
\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t<p>
\t\t\t\t<input type=\"submit\" disabled=\"disabled\" value=\"";
        // line 15
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t<input type=\"reset\" value=\"";
        // line 16
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<ul id=\"tabnav\">
\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 23
        echo getLang("WebsiteSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab1\" onclick=\"ShowTab(1)\">";
        // line 24
        echo getLang("LocalizationSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab8\" onclick=\"ShowTab(8)\">";
        // line 25
        echo getLang("ImageSettings");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab2\" onclick=\"ShowTab(2)\">";
        // line 26
        echo getLang("DisplaySettingsTab");
        echo "</a></li>
\t\t\t\t<li style=\"display: ";
        // line 27
        echo twig_safe_filter((isset($context['HideBackupSettings']) ? $context['HideBackupSettings'] : null));
        echo "\"><a href=\"#\" id=\"tab3\" onclick=\"ShowTab(3)\">";
        echo getLang("BackupSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab4\" onclick=\"ShowTab(4)\">";
        // line 28
        echo getLang("SearchSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab5\" onclick=\"ShowTab(5)\" style=\"";
        // line 29
        echo twig_safe_filter((isset($context['HideLoggingSettingsTab']) ? $context['HideLoggingSettingsTab'] : null));
        echo "\" >";
        echo getLang("LoggingSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab6\" onclick=\"ShowTab(6)\" style=\"";
        // line 30
        echo twig_safe_filter((isset($context['HideVendorOptions']) ? $context['HideVendorOptions'] : null));
        echo "\">";
        echo getLang("VendorSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab7\" onclick=\"ShowTab(7)\">";
        // line 31
        echo getLang("MiscellaneousSettingsTab");
        echo "</a></li>
\t\t\t\t<li><a href=\"#\" id=\"tab9\" onclick=\"ShowTab(9)\">";
        // line 32
        echo getLang("SliderSettingsTab");
        echo "</a></li>

\t\t\t</ul>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<!-- Slider Settings -->
            <div id=\"div9\" style=\"padding-top: 10px;\">
                <table width=\"100%\" class=\"Panel\">
                    <tr>
                        <td class=\"Heading2\" colspan=\"2\">";
        // line 43
        echo getLang("SliderSettings");
        echo "</td>
                    </tr>

                    <tr>
                        <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"BlockWidth\">";
        // line 48
        echo getLang("BlockWidth");
        echo ":</label>
                        </td>
                        <td>
                            <input type=\"text\" class=\"Field250\" name=\"blockWidth\" id=\"blockWidth\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context['blockWidth']) ? $context['blockWidth'] : null), "1");
        echo "\" />
                        
                        </td>
                    </tr>
                    <tr>
                        <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"BlockHeight\">";
        // line 57
        echo getLang("BlockHeight");
        echo ":</label>
                        </td>
                        <td>
                            <input type=\"text\" class=\"Field250\" name=\"blockHeight\" id=\"blockHeight\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context['blockHeight']) ? $context['blockHeight'] : null), "1");
        echo "\" />
                        
                        </td>
                    </tr>
                    <tr>
                        <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"slider_skin\">";
        // line 66
        echo getLang("Skin");
        echo ":</label>
                        </td>
                        <td>
                            <select name=\"slider_skin\" id=\"slider_skin\">
                                <option value=\"default\" ";
        // line 70
        echo twig_safe_filter((isset($context['IsEnableSlider_DefaultSkin']) ? $context['IsEnableSlider_DefaultSkin'] : null));
        echo ">";
        echo getLang("SliderSkin_Default");
        echo "</option>
                                <option value=\"curved-rounded-2\" ";
        // line 71
        echo twig_safe_filter((isset($context['IsEnableSlider_CurvedRoundedSkin']) ? $context['IsEnableSlider_CurvedRoundedSkin'] : null));
        echo ">";
        echo getLang("SliderSkin_CurvedRounded");
        echo "</option>
                                <option value=\"curved-square\" ";
        // line 72
        echo twig_safe_filter((isset($context['IsEnableSlider_CurvedSquareSkin']) ? $context['IsEnableSlider_CurvedSquareSkin'] : null));
        echo ">";
        echo getLang("SliderSkin_CurvedSquare");
        echo "</option>
                                <option value=\"light-round-extended\" ";
        // line 73
        echo twig_safe_filter((isset($context['IsEnableSlider_LightRoundExtendedSkin']) ? $context['IsEnableSlider_LightRoundExtendedSkin'] : null));
        echo ">";
        echo getLang("SliderSkin_LightRoundExtended");
        echo "</option>
                                <option value=\"light-square\" ";
        // line 74
        echo twig_safe_filter((isset($context['IsEnableSlider_LightSquareSkin']) ? $context['IsEnableSlider_LightSquareSkin'] : null));
        echo ">";
        echo getLang("SliderSkin_LightSquare");
        echo "</option>
                                <option value=\"minimal-small\" ";
        // line 75
        echo twig_safe_filter((isset($context['IsEnableSlider_MinimalSmallSkin']) ? $context['IsEnableSlider_MinimalSmallSkin'] : null));
        echo ">";
        echo getLang("SliderSkin_MinimalSmall");
        echo "</option>
                                <option value=\"pixel\" ";
        // line 76
        echo twig_safe_filter((isset($context['IsEnableSlider_PixelSkin']) ? $context['IsEnableSlider_PixelSkin'] : null));
        echo ">";
        echo getLang("SliderSkin_Pixel");
        echo "</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"slider_transition\">";
        // line 82
        echo getLang("SliderTransition");
        echo ":</label>
                        </td>
                        <td>
                            <select name=\"slider_transition\" id=\"slider_transition\">
                                <option value=\"random\" ";
        // line 86
        echo twig_safe_filter((isset($context['IsEnableSlider_RandomTransition']) ? $context['IsEnableSlider_RandomTransition'] : null));
        echo ">";
        echo getLang("SliderTransition_Random");
        echo "</option>
                                <option value=\"scale\" ";
        // line 87
        echo twig_safe_filter((isset($context['IsEnableSlider_ScaleTransition']) ? $context['IsEnableSlider_ScaleTransition'] : null));
        echo ">";
        echo getLang("SliderTransition_Scale");
        echo "</option>
                                <option value=\"fade\" ";
        // line 88
        echo twig_safe_filter((isset($context['IsEnableSlider_FadeTransition']) ? $context['IsEnableSlider_FadeTransition'] : null));
        echo ">";
        echo getLang("SliderTransition_Fade");
        echo "</option>
                                <option value=\"slide\" ";
        // line 89
        echo twig_safe_filter((isset($context['IsEnableSlider_SlideTransition']) ? $context['IsEnableSlider_SlideTransition'] : null));
        echo ">";
        echo getLang("SliderTransition_Slide");
        echo "</option>
                                <option value=\"width\" ";
        // line 90
        echo twig_safe_filter((isset($context['IsEnableSlider_WidthTransition']) ? $context['IsEnableSlider_WidthTransition'] : null));
        echo ">";
        echo getLang("SliderTransition_Width");
        echo "</option>
                                <option value=\"height\" ";
        // line 91
        echo twig_safe_filter((isset($context['IsEnableSlider_HeightTransition']) ? $context['IsEnableSlider_HeightTransition'] : null));
        echo ">";
        echo getLang("SliderTransition_Height");
        echo "</option>
                                <option value=\"simpleSlide\" ";
        // line 92
        echo twig_safe_filter((isset($context['IsEnableSlider_SimpleSlideTransition']) ? $context['IsEnableSlider_SimpleSlideTransition'] : null));
        echo ">";
        echo getLang("SliderTransition_SimpleSlide");
        echo "</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"sliderDir\">Image Directory:</label>
                        </td>
                        <td>
                                <input type=\"text\" name=\"sliderDir\" value=\"";
        // line 101
        echo twig_safe_filter((isset($context['sliderDir']) ? $context['sliderDir'] : null));
        echo "\" class=\"Field\">
                        </td>
                        
                    </tr>
                </table>
            </div>
\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 110
        echo getLang("SiteSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"StoreName\">";
        // line 114
        echo getLang("StoreName");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"StoreName\" id=\"StoreName\" value=\"";
        // line 117
        echo twig_safe_filter((isset($context['StoreName']) ? $context['StoreName'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 118
        echo getLang("StoreName");
        echo "', '";
        echo getLang("StoreNameHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"StoreName\">";
        // line 124
        echo getLang("StoreAddress");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea name=\"StoreAddress\" id=\"StoreAddress\" class=\"Field250\" rows=\"4\">";
        // line 127
        echo twig_safe_filter((isset($context['StoreAddress']) ? $context['StoreAddress'] : null));
        echo "</textarea>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d38');\" onmouseover=\"ShowHelp('d38', '";
        // line 128
        echo getLang("StoreAddress");
        echo "', '";
        echo getLang("StoreAddressHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d38\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 134
        echo getLang("DownForMaintenance");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"DownForMaintenance\" id=\"DownForMaintenance\" value=\"ON\" ";
        // line 137
        echo twig_safe_filter((isset($context['IsDownForMaintenance']) ? $context['IsDownForMaintenance'] : null));
        echo " /> <label for=\"DownForMaintenance\">";
        echo getLang("YesDownForMaintenance");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dmaintenance');\" onmouseover=\"ShowHelp('dmaintenance', '";
        // line 138
        echo getLang("DownForMaintenance");
        echo "', '";
        echo getLang("DownForMaintenanceHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"dmaintenance\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr id=\"DownForMaintenanceMessageRow\" style=\"display:none; \">
\t\t\t\t\t<td class=\"FieldLabel\">

\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea name=\"DownForMaintenanceMessage\" id=\"DownForMaintenanceMessage\" class=\"Field250\" rows=\"4\">";
        // line 147
        echo twig_safe_filter((isset($context['DownForMaintenanceMessage']) ? $context['DownForMaintenanceMessage'] : null));
        echo "</textarea>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d38');\" onmouseover=\"ShowHelp('d38', '";
        // line 148
        echo getLang("StoreAddress");
        echo "', '";
        echo getLang("StoreAddressHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d38\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 158
        echo getLang("SiteSecuritySettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 162
        echo getLang("UseSSLDuringCheckout");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label for=\"NoSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"NoSSL\" value=\"0\" ";
        // line 165
        echo twig_safe_filter((isset($context['NoSSLChecked']) ? $context['NoSSLChecked'] : null));
        echo " /> ";
        echo getLang("DontUseSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d37');\" onmouseover=\"ShowHelp('d37', '";
        // line 166
        echo getLang("UseSSLDuringCheckout");
        echo "', '";
        echo getLang("UseSSLDuringCheckoutHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d37\"></div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<label for=\"UseNormalSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"UseNormalSSL\" value=\"1\" ";
        // line 169
        echo twig_safe_filter((isset($context['UseNormalSSLChecked']) ? $context['UseNormalSSLChecked'] : null));
        echo " /> ";
        echo getLang("UseInstalledSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('sslhelp');\" onmouseover=\"ShowHelp('sslhelp', '";
        // line 170
        echo getLang("SSL");
        echo "', '";
        echo getLang("UseInstalledSSLHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"sslhelp\"></div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<label for=\"UseSharedSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"UseSharedSSL\" value=\"2\" ";
        // line 173
        echo twig_safe_filter((isset($context['UseSharedSSLChecked']) ? $context['UseSharedSSLChecked'] : null));
        echo " /> ";
        echo getLang("UseSharedSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('sharedsslhelp');\" onmouseover=\"ShowHelp('sharedsslhelp', '";
        // line 174
        echo getLang("SharedSSL");
        echo "', '";
        echo getLang("UseSharedSSLHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"sharedsslhelp\"></div>
\t\t\t\t\t\t<div class=\"NodeJoin\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" /> <input type=\"text\" class=\"Field250\" id=\"SharedSSLPath\" name=\"SharedSSLPath\" value=\"";
        // line 177
        echo twig_safe_filter((isset($context['SharedSSLPath']) ? $context['SharedSSLPath'] : null));
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br />
\t\t\t\t\t\t<label for=\"UseSubdomainSSL\"><input type=\"radio\" name=\"UseSSL\" id=\"UseSubdomainSSL\" value=\"3\" ";
        // line 180
        echo twig_safe_filter((isset($context['UseSubdomainSSLChecked']) ? $context['UseSubdomainSSLChecked'] : null));
        echo " /> ";
        echo getLang("UseSubdomainSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('subdomainsslhelp');\" onmouseover=\"ShowHelp('subdomainsslhelp', '";
        // line 181
        echo getLang("SubdomainSSL");
        echo "', '";
        echo getLang("UseSubdomainSSLHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"subdomainsslhelp\"></div>
\t\t\t\t\t\t<div class=\"NodeJoin\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" /> <input type=\"text\" class=\"Field250\" id=\"SubdomainSSLPath\" name=\"SubdomainSSLPath\" value=\"";
        // line 184
        echo twig_safe_filter((isset($context['SubdomainSSLPath']) ? $context['SubdomainSSLPath'] : null));
        echo "\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br />
\t\t\t\t\t\t<div style='display:inline; padding-left:20px'><font size=1><a href='javascript:void(0)' onclick='TestSSL()' style='color:gray'>How do I know if my website supports SSL?</a></font></div>
\t\t\t\t\t\t<div style=\"margin-top:3px; padding-left:20px\"><a style=\"color:gray\" href=\"#\" onclick=\"LaunchHelp(715)\">";
        // line 189
        echo getLang("SSLWontLoad");
        echo "</a></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 195
        echo getLang("UseControlPanelSSL");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"ForceControlPanelSSL\" id=\"UseControlPanelSSL\" value=\"ON\" ";
        // line 198
        echo twig_safe_filter((isset($context['IsControlPanelSSLEnabled']) ? $context['IsControlPanelSSLEnabled'] : null));
        echo " /> <label for=\"UseControlPanelSSL\">";
        echo getLang("YesUseControlPanelSSL");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dadminssl');\" onmouseover=\"ShowHelp('dadminssl', '";
        // line 199
        echo getLang("UseControlPanelSSL");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("UseControlPanelSSLHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"dadminssl\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 210
        echo getLang("AdvancedStoreSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 212
        echo twig_safe_filter((isset($context['HideStoreUrlField']) ? $context['HideStoreUrlField'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ShopPath\">";
        // line 214
        echo getLang("ShopPath");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"ShopPath\" id=\"ShopPath\" value=\"";
        // line 217
        echo twig_safe_filter((isset($context['ShopPathNormal']) ? $context['ShopPathNormal'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d2');\" onmouseover=\"ShowHelp('d2', '";
        // line 218
        echo getLang("ShopPath");
        echo "', '";
        echo getLang("ShopPathHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d2\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CharacterSet\">";
        // line 224
        echo getLang("CharacterSet");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"CharacterSet\" name=\"CharacterSet\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"UTF-8\" ";
        // line 228
        echo twig_safe_filter((isset($context['CharacterSet_Selected_utf8']) ? $context['CharacterSet_Selected_utf8'] : null));
        echo ">";
        echo getLang("SettingsCharset_utf8");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ISO-8859-1\" ";
        // line 229
        echo twig_safe_filter((isset($context['CharacterSet_Selected_iso88591']) ? $context['CharacterSet_Selected_iso88591'] : null));
        echo ">";
        echo getLang("SettingsCharset_iso88591");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"ISO-8859-15\" ";
        // line 230
        echo twig_safe_filter((isset($context['CharacterSet_Selected_iso885915']) ? $context['CharacterSet_Selected_iso885915'] : null));
        echo ">";
        echo getLang("SettingsCharset_iso885915");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"cp866\" ";
        // line 231
        echo twig_safe_filter((isset($context['CharacterSet_Selected_cp866']) ? $context['CharacterSet_Selected_cp866'] : null));
        echo ">";
        echo getLang("SettingsCharset_cp866");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"cp1251\" ";
        // line 232
        echo twig_safe_filter((isset($context['CharacterSet_Selected_cp1251']) ? $context['CharacterSet_Selected_cp1251'] : null));
        echo ">";
        echo getLang("SettingsCharset_cp1251");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"cp1252\" ";
        // line 233
        echo twig_safe_filter((isset($context['CharacterSet_Selected_cp1252']) ? $context['CharacterSet_Selected_cp1252'] : null));
        echo ">";
        echo getLang("SettingsCharset_cp1252");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"KOI8-R\" ";
        // line 234
        echo twig_safe_filter((isset($context['CharacterSet_Selected_koi8r']) ? $context['CharacterSet_Selected_koi8r'] : null));
        echo ">";
        echo getLang("SettingsCharset_koi8r");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Shift_JIS\" ";
        // line 235
        echo twig_safe_filter((isset($context['CharacterSet_Selected_shiftjis']) ? $context['CharacterSet_Selected_shiftjis'] : null));
        echo ">";
        echo getLang("SettingsCharset_shiftjis");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"EUC-JP\" ";
        // line 236
        echo twig_safe_filter((isset($context['CharacterSet_Selected_eucjp']) ? $context['CharacterSet_Selected_eucjp'] : null));
        echo ">";
        echo getLang("SettingsCharset_eucjp");
        echo "</option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<img onmouseout=\"HideHelp('d3');\" onmouseover=\"ShowHelp('d3', '";
        // line 239
        echo getLang("CharacterSet");
        echo "', '";
        echo getLang("CharacterSetHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d3\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 243
        echo twig_safe_filter((isset($context['HidePathFields']) ? $context['HidePathFields'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DownloadDirectory\">";
        // line 245
        echo getLang("DownloadDirectory");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DownloadDirectory\" id=\"DownloadDirectory\" value=\"";
        // line 248
        echo twig_safe_filter((isset($context['DownloadDirectory']) ? $context['DownloadDirectory'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d6');\" onmouseover=\"ShowHelp('d6', '";
        // line 249
        echo getLang("DownloadDirectory");
        echo "', '";
        echo getLang("DownloadDirectoryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d6\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 253
        echo twig_safe_filter((isset($context['HidePathFields']) ? $context['HidePathFields'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ImageDirectory\">";
        // line 255
        echo getLang("ImageDirectory");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<input type=\"text\" name=\"ImageDirectory\" id=\"ImageDirectory\" value=\"";
        // line 258
        echo twig_safe_filter((isset($context['ImageDirectory']) ? $context['ImageDirectory'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d7');\" onmouseover=\"ShowHelp('d7', '";
        // line 259
        echo getLang("ImageDirectory");
        echo "', '";
        echo getLang("ImageDirectoryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d7\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"StoreName\">";
        // line 265
        echo getLang("AllowPurchasing");
        echo "?</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"AllowPurchasing\" id=\"AllowPurchasing\" value=\"ON\" ";
        // line 268
        echo twig_safe_filter((isset($context['IsPurchasingEnabled']) ? $context['IsPurchasingEnabled'] : null));
        echo " /> <label for=\"AllowPurchasing\">";
        echo getLang("YesAllowPurchasing");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dpurchasing');\" onmouseover=\"ShowHelp('dpurchasing', '";
        // line 269
        echo getLang("AllowPurchasing");
        echo "', '";
        echo getLang("AllowPurchasingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"dpurchasing\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 278
        echo twig_safe_filter((isset($context['HideLicenseKey']) ? $context['HideLicenseKey'] : null));
        echo "\">
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 279
        echo getLang("LicenseSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 281
        echo twig_safe_filter((isset($context['HideLicenseKey']) ? $context['HideLicenseKey'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"serverStamp\">";
        // line 283
        echo getLang("LicenseKey");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"serverStamp\" id=\"serverStamp\" value=\"cctvvs\" class=\"Field250\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 289
        echo twig_safe_filter((isset($context['HideLicenseKey']) ? $context['HideLicenseKey'] : null));
        echo "\">
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 295
        echo getLang("EmailSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"AdminEmail\">";
        // line 299
        echo getLang("AdminEmail");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"AdminEmail\" id=\"AdminEmail\" value=\"";
        // line 302
        echo twig_safe_filter((isset($context['AdminEmail']) ? $context['AdminEmail'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d8');\" onmouseover=\"ShowHelp('d8', '";
        // line 303
        echo getLang("AdminEmail1");
        echo "', '";
        echo getLang("AdminEmailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d8\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"OrderEmail\">";
        // line 309
        echo getLang("OrderEmail");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"OrderEmail\" id=\"OrderEmail\" value=\"";
        // line 312
        echo twig_safe_filter((isset($context['OrderEmail']) ? $context['OrderEmail'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d9');\" onmouseover=\"ShowHelp('d9', '";
        // line 313
        echo getLang("OrderEmail");
        echo "', '";
        echo getLang("OrderEmailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d9\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"LowInventoryEmails\">";
        // line 319
        echo getLang("LowInventoryEmails");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"LowInventoryEmails\" onclick=\"if(this.checked) { \$('.LowInventoryNotificationToggle').show(); } else { \$('.LowInventoryNotificationToggle').hide(); }\" value=\"1\" ";
        // line 322
        echo twig_safe_filter((isset($context['LowInventoryEmailsEnabledCheck']) ? $context['LowInventoryEmailsEnabledCheck'] : null));
        echo " /> ";
        echo getLang("YesEnableLowInventoryEmails");
        echo "</label>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('lowinventory');\" onmouseover=\"ShowHelp('lowinventory', '";
        // line 323
        echo getLang("LowInventoryEmails");
        echo "', '";
        echo getLang("LowInventoryEmailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"lowinventory\"></div>
\t\t\t\t\t\t<div style=\"margin-top: 3px; display: ";
        // line 325
        echo twig_safe_filter((isset($context['HideLowInventoryNotification']) ? $context['HideLowInventoryNotification'] : null));
        echo "\" class=\"LowInventoryNotificationToggle\">
\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t";
        // line 327
        echo getLang("EmailAddress");
        echo ": <input type=\"text\" name=\"LowInventoryNotificationAddress\" id=\"LowInventoryNotificationAddress\" class=\"Field250\" value=\"";
        echo twig_safe_filter((isset($context['LowInventoryNotificationAddress']) ? $context['LowInventoryNotificationAddress'] : null));
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\" valign=\"top\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"ForwardInvoiceEmails\">";
        // line 333
        echo getLang("ForwardInvoiceEmails");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<label> <input type=\"checkbox\" name=\"ForwardInvoiceEmailsCheck\" onclick=\"if(this.checked) { \$('.ForwardInvoiceEmailsToggle').show(); } else { \$('.ForwardInvoiceEmailsToggle').hide(); }\" value=\"1\" ";
        // line 336
        echo twig_safe_filter((isset($context['ForwardInvoiceEmailsCheck']) ? $context['ForwardInvoiceEmailsCheck'] : null));
        echo " /> ";
        echo getLang("YesEnableForwardInvoiceEmails");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('invoiceemailshelp');\" onmouseover=\"ShowHelp('invoiceemailshelp', '";
        // line 337
        echo getLang("ForwardInvoiceEmails");
        echo "', '";
        echo getLang("ForwardInvoiceEmailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"invoiceemailshelp\"></div>
\t\t\t\t\t\t\t<div style=\"margin-top: 3px; display: ";
        // line 339
        echo twig_safe_filter((isset($context['HideForwardInvoiceEmails']) ? $context['HideForwardInvoiceEmails'] : null));
        echo "\" class=\"ForwardInvoiceEmailsToggle\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" />
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ForwardInvoiceEmails\" id=\"ForwardInvoiceEmails\" class=\"Field250\" value=\"";
        // line 341
        echo twig_safe_filter((isset($context['ForwardInvoiceEmails']) ? $context['ForwardInvoiceEmails'] : null));
        echo "\" /><br />
\t\t\t\t\t\t\t\t<span class=\"Disabled\" style='text-decoration: none; padding-left: 25px;'>";
        // line 342
        echo getLang("ForwardOrderInvoicesDesc");
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 349
        echo getLang("UseSMTPServer");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label for=\"MailUsePHP\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"MailUseSMTP\" id=\"MailUsePHP\" value=\"0\" onclick=\"ToggleMailSettings()\" ";
        // line 353
        echo twig_safe_filter((isset($context['MailUsePHPChecked']) ? $context['MailUsePHPChecked'] : null));
        echo " />
\t\t\t\t\t\t\t\t";
        // line 354
        echo getLang("UseDefaultMailSettings");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ssK6vhkyjO');\" onmouseover=\"ShowHelp('ssK6vhkyjO', '";
        // line 356
        echo getLang("UseDefaultMailSettings");
        echo "', '";
        echo getLang("UseDefaultMailSettingsHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\"><div style=\"display:none\" id=\"ssK6vhkyjO\"></div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<label for=\"MailUseSMTP\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"MailUseSMTP\" id=\"MailUseSMTP\" onclick=\"ToggleMailSettings()\" value=\"1\" ";
        // line 359
        echo twig_safe_filter((isset($context['MailUseSMTPChecked']) ? $context['MailUseSMTPChecked'] : null));
        echo " />
\t\t\t\t\t\t\t\t";
        // line 360
        echo getLang("SpecifyOwnSMTPDetails");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ssv0NUivAU');\" onmouseover=\"ShowHelp('ssv0NUivAU', '";
        // line 362
        echo getLang("SpecifyOwnSMTPDetails");
        echo "', '";
        echo getLang("SpecifyOwnSMTPDetailsHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssv0NUivAU\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 365
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span>
\t\t\t\t\t\t\t";
        // line 368
        echo getLang("SMTPHostname");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/nodejoin.gif\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"MailSMTPServer\" id=\"MailSMTPServer\" value=\"";
        // line 372
        echo twig_safe_filter((isset($context['MailSMTPServer']) ? $context['MailSMTPServer'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ssdR2a1s2Y');\" onmouseover=\"ShowHelp('ssdR2a1s2Y', '";
        echo getLang("SMTPHostname");
        echo "', '";
        echo getLang("SMTPHostnameHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssdR2a1s2Y\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 376
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 379
        echo getLang("SMTPUsername");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"MailSMTPUsername\" id=\"MailSMTPUsername\" value=\"";
        // line 383
        echo twig_safe_filter((isset($context['MailSMTPUsername']) ? $context['MailSMTPUsername'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ssL1nZ3ajD');\" onmouseover=\"ShowHelp('ssL1nZ3ajD', '";
        echo getLang("SMTPUsername");
        echo "', '";
        echo getLang("SMTPUsernameHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssL1nZ3ajD\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 386
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 389
        echo getLang("SMTPPassword");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"password\" autocomplete=\"off\" name=\"MailSMTPPassword\" id=\"MailSMTPPassword\" value=\"";
        // line 393
        echo twig_safe_filter((isset($context['MailSMTPPassword']) ? $context['MailSMTPPassword'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ss7ELh2UVn');\" onmouseover=\"ShowHelp('ss7ELh2UVn', '";
        echo getLang("SMTPPassword");
        echo "', '";
        echo getLang("SMTPPasswordHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ss7ELh2UVn\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 396
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>
\t\t\t\t\t\t\t";
        // line 399
        echo getLang("SMTPPort");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"text\" name=\"MailSMTPPort\" id=\"MailSMTPPort\" value=\"";
        // line 403
        echo twig_safe_filter((isset($context['MailSMTPPort']) ? $context['MailSMTPPort'] : null));
        echo "\" class=\"Field250 smtpSettings\"> <img onmouseout=\"HideHelp('ssKz8SUyDX');\" onmouseover=\"ShowHelp('ssKz8SUyDX', '";
        echo getLang("SMTPPort");
        echo "', '";
        echo getLang("SMTPPortHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"ssKz8SUyDX\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SMTPOptions\" style=\"display: ";
        // line 406
        echo twig_safe_filter((isset($context['HideMailSMTPSettings']) ? $context['HideMailSMTPSettings'] : null));
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<img width=\"20\" height=\"20\" src=\"images/blank.gif\"/>
\t\t\t\t\t\t\t<input type=\"button\" name=\"cmdTestSMTP\" value=\"";
        // line 412
        echo getLang("TestSMTPSettings");
        echo "\" id=\"TestSMTPSettings\" class=\"SmallButton\" onclick=\"startSMTPTest();\" style=\"width: 150px;\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 421
        echo getLang("SearchEngineOptimization");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"MetaDesc\">";
        // line 425
        echo getLang("SearchEngineFriendlyURLs");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"EnableSEOUrls\" id=\"EnableSEOUrls\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 429
        echo twig_safe_filter((isset($context['IsEnableSEOUrlsAuto']) ? $context['IsEnableSEOUrlsAuto'] : null));
        echo ">";
        echo getLang("SearchEngineFriendlyURLsAuto");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 430
        echo twig_safe_filter((isset($context['IsEnableSEOUrlsEnabled']) ? $context['IsEnableSEOUrlsEnabled'] : null));
        echo ">";
        echo getLang("SearchEngineFriendlyURLsEnabled");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 431
        echo twig_safe_filter((isset($context['IsEnableSEOUrlsDisabled']) ? $context['IsEnableSEOUrlsDisabled'] : null));
        echo ">";
        echo getLang("SearchEngineFriendlyURLsDisabled");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('seo1');\" onmouseover=\"ShowHelp('seo1', '";
        // line 433
        echo getLang("SearchEngineFriendlyURLs");
        echo ":', '";
        echo getLang("SearchEngineFriendlyURLsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"seo1\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"redirectWWW\">";
        // line 439
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectWWW", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"RedirectWWW\" id=\"RedirectWWW\" class=\"Field250\">
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 443
        echo twig_safe_filter((isset($context['RedirectToWWWSelected']) ? $context['RedirectToWWWSelected'] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectToWWW", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 444
        echo twig_safe_filter((isset($context['RedirectToNoWWWSelected']) ? $context['RedirectToNoWWWSelected'] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectToNoWWW", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 445
        echo twig_safe_filter((isset($context['RedirectNoPreferenceSelected']) ? $context['RedirectNoPreferenceSelected'] : null));
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "RedirectNoPreference", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("RedirectWWW", "RedirectWWWHelp", ), "method"), "1");
        echo "
\t\t\t\t\t</td>
\t\t\t\t</td>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 452
        echo getLang("HomePagePageTitle");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"HomePagePageTitle\" name=\"HomePagePageTitle\" class=\"Field250\" value=\"";
        // line 455
        echo twig_safe_filter((isset($context['HomePagePageTitle']) ? $context['HomePagePageTitle'] : null));
        echo "\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('pagetitle');\" onmouseover=\"ShowHelp('pagetitle', '";
        // line 456
        echo getLang("HomePagePageTitle");
        echo "', '";
        echo getLang("HomePagePageTitleHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"pagetitle\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"MetaKeywords\">";
        // line 462
        echo getLang("MetaKeywords");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"MetaKeywords\" id=\"MetaKeywords\" value=\"";
        // line 465
        echo twig_safe_filter((isset($context['MetaKeywords']) ? $context['MetaKeywords'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d4');\" onmouseover=\"ShowHelp('d4', '";
        // line 466
        echo getLang("MetaKeywords");
        echo "', '";
        echo getLang("SettingsMetaKeywordsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d4\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span>  <label for=\"MetaDesc\">";
        // line 472
        echo getLang("MetaDescription");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"MetaDesc\" id=\"MetaDesc\" value=\"";
        // line 475
        echo twig_safe_filter((isset($context['MetaDesc']) ? $context['MetaDesc'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d5');\" onmouseover=\"ShowHelp('d5', '";
        // line 476
        echo getLang("MetaDescription");
        echo "', '";
        echo getLang("SettingsMetaDescriptionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d5\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 485
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 486
        echo getLang("DatabaseSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 488
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 490
        echo getLang("DatabaseType");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 493
        echo twig_safe_filter((isset($context['dbType']) ? $context['dbType'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 496
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 498
        echo getLang("DatabaseUser");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 501
        echo twig_safe_filter((isset($context['dbUser']) ? $context['dbUser'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 504
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 506
        echo getLang("DatabasePassword");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 512
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 514
        echo getLang("DatabaseHostname");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 517
        echo twig_safe_filter((isset($context['dbServer']) ? $context['dbServer'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 520
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 522
        echo getLang("DatabaseTablePrefix");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 525
        echo twig_safe_filter((isset($context['tablePrefix']) ? $context['tablePrefix'] : null));
        echo "\" class=\"Field250\" disabled readonly />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr style=\"";
        // line 528
        echo twig_safe_filter((isset($context['HideDatabaseDetails']) ? $context['HideDatabaseDetails'] : null));
        echo "\">
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> ";
        // line 530
        echo getLang("DatabaseVersion");
        echo ":
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t";
        // line 533
        echo twig_safe_filter((isset($context['dbVersion']) ? $context['dbVersion'] : null));
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
                <tr>
                    <td class=\"Heading2\" colspan=\"2\">";
        // line 537
        echo getLang("SocialsSettings");
        echo "</td>
                </tr>
                <tr >
                    <td class=\"FieldLabel\">
                        <label for=\"FacebookLink\">";
        // line 541
        echo getLang("FacebookLink");
        echo ":</label>
                    </td>
                    <td>
                        <input type=\"text\" name=\"FacebookLink\" id=\"FacebookLink\" value=\"";
        // line 544
        echo twig_safe_filter((isset($context['FacebookLink']) ? $context['FacebookLink'] : null));
        echo "\" class=\"Field250\" />
                    </td>
                </tr>
                <tr >
                    <td class=\"FieldLabel\">
                        <label for=\"TwitterLink\">";
        // line 549
        echo getLang("TwitterLink");
        echo ":</label>
                    </td>
                    <td>
                        <input type=\"text\" name=\"TwitterLink\" id=\"TwitterLink\" value=\"";
        // line 552
        echo twig_safe_filter((isset($context['TwitterLink']) ? $context['TwitterLink'] : null));
        echo "\" class=\"Field250\" />
                    </td>
                </tr>
                <tr >
                    <td class=\"FieldLabel\">
                        <label for=\"RssLink\">";
        // line 557
        echo getLang("RssLink");
        echo ":</label>
                    </td>
                    <td>
                        <input type=\"text\" name=\"RssLink\" id=\"RssLink\" value=\"";
        // line 560
        echo twig_safe_filter((isset($context['RssLink']) ? $context['RssLink'] : null));
        echo "\" class=\"Field250\" />
                    </td>
                </tr>
                <tr>
                    <td class=\"Heading2\" colspan=\"2\">";
        // line 564
        echo getLang("ContactInfoSettings");
        echo "</td>
                </tr>
\t\t\t\t<tr >
                    <td class=\"FieldLabel\">
                        <label for=\"ContactInfo\">";
        // line 568
        echo getLang("ContactInfo");
        echo ":</label>
                    </td>
                    <td>
                        <textarea  name=\"ContactInfo\" id=\"ContactInfo\">";
        // line 571
        echo twig_safe_filter((isset($context['ContactInfo']) ? $context['ContactInfo'] : null));
        echo "</textarea>
                    </td>
                </tr>
                <tr>
                    <td class=\"Heading2\" colspan=\"2\">";
        // line 575
        echo getLang("GallerySettings");
        echo "</td>
                </tr>
                
                <tr>
                        <td class=\"FieldLabel\">
                                <label for=\"galleryDir\">Gallery Directory:</label>
                        </td>
                        <td>
                                <input type=\"text\" name=\"galleryDir\" value=\"";
        // line 583
        echo twig_safe_filter((isset($context['galleryDir']) ? $context['galleryDir'] : null));
        echo "\" class=\"Field\">
                        </td>
                        
                </tr>
                <tr>
                    <td class=\"Heading2\" colspan=\"2\">";
        // line 588
        echo getLang("ThreeModulesSettings");
        echo "</td>
                </tr>
                <tr>
                    <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"Module1Img\">";
        // line 592
        echo getLang("Module1Image");
        echo ":</label>
                        </td>
                        <td>
                            <input type=\"text\" id=\"Module1Img\" name=\"Module1Img\" class=\"Field\" value=\"";
        // line 595
        echo twig_safe_filter((isset($context['Module1Img']) ? $context['Module1Img'] : null));
        echo "\" />
                        </td>
                </tr>
                <tr>
                    <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"Module2Img\">";
        // line 600
        echo getLang("Module2Image");
        echo ":</label>
                        </td>
                        <td>
                            <input type=\"text\" id=\"Module2Img\" name=\"Module2Img\" class=\"Field\" value=\"";
        // line 603
        echo twig_safe_filter((isset($context['Module2Img']) ? $context['Module2Img'] : null));
        echo "\" />
                        </td>
                </tr>
                <tr>
                    <td class=\"FieldLabel\">
                            &nbsp;&nbsp; <label for=\"Module3Img\">";
        // line 608
        echo getLang("Module3Image");
        echo ":</label>
                        </td>
                        <td>
                            <input type=\"text\" id=\"Module3Img\" name=\"Module3Img\" class=\"Field\" value=\"";
        // line 611
        echo twig_safe_filter((isset($context['Module3Img']) ? $context['Module3Img'] : null));
        echo "\" />
                        </td>
                </tr>
                
                <!--<tr>
                    <td class=\"heading\" colspan=\"2\">Sitemap Footer Content</td>
                </tr>
                <tr>
                    <td class=\"FieldLabel\">
                        <label for=\"SitemapContent\">Sitemap Content:</label>
                    </td>
                    <td>
                        <textarea name=\"SitemapContent\" id=\"SitemapContent\">";
        // line 623
        echo twig_safe_filter((isset($context['SitemapContent']) ? $context['SitemapContent'] : null));
        echo "</textarea>
                    </td>
                
                </tr>-->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"div1\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 632
        echo getLang("LanguageSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"Lanauge\">";
        // line 636
        echo getLang("Language");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"Language\" id=\"Lanauge\" class=\"Field100\">
\t\t\t\t\t\t\t";
        // line 640
        echo twig_safe_filter((isset($context['LanguageOptions']) ? $context['LanguageOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('lang_setting');\" onmouseover=\"ShowHelp('lang_setting', '";
        // line 642
        echo getLang("Language");
        echo "', '";
        echo getLang("LanguageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"lang_setting\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 652
        echo getLang("PhysicalDimensionSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"WeightMeasurement\">";
        // line 656
        echo getLang("WeightMeasurement");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"WeightMeasurement\" id=\"WeightMeasurement\" class=\"Field100\">
\t\t\t\t\t\t\t<option value=\"LBS\" ";
        // line 660
        echo twig_safe_filter((isset($context['IsPounds']) ? $context['IsPounds'] : null));
        echo ">";
        echo getLang("Pounds");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Ounces\" ";
        // line 661
        echo twig_safe_filter((isset($context['IsOunces']) ? $context['IsOunces'] : null));
        echo ">";
        echo getLang("Ounces");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"KGS\" ";
        // line 662
        echo twig_safe_filter((isset($context['IsKilos']) ? $context['IsKilos'] : null));
        echo ">";
        echo getLang("Kilograms");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Grams\" ";
        // line 663
        echo twig_safe_filter((isset($context['IsGrams']) ? $context['IsGrams'] : null));
        echo ">";
        echo getLang("Grams");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Tonnes\" ";
        // line 664
        echo twig_safe_filter((isset($context['IsTonnes']) ? $context['IsTonnes'] : null));
        echo ">";
        echo getLang("Tonnes");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d17');\" onmouseover=\"ShowHelp('d17', '";
        // line 666
        echo getLang("WeightMeasurement");
        echo "', '";
        echo getLang("WeightMeasurementHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d17\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"LengthMeasurement\">";
        // line 672
        echo getLang("LengthMeasurement");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<select name=\"LengthMeasurement\" id=\"LengthMeasurement\" class=\"Field100\">
\t\t\t\t\t\t\t<option value=\"Inches\" ";
        // line 676
        echo twig_safe_filter((isset($context['IsInches']) ? $context['IsInches'] : null));
        echo ">";
        echo getLang("Inches");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"Centimeters\" ";
        // line 677
        echo twig_safe_filter((isset($context['IsCentimeters']) ? $context['IsCentimeters'] : null));
        echo ">";
        echo getLang("Centimeters");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d18');\" onmouseover=\"ShowHelp('d18', '";
        // line 679
        echo getLang("LengthMeasurement");
        echo "', '";
        echo getLang("LengthMeasurementHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d18\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DimensionsDecimalToken\">";
        // line 685
        echo getLang("DimensionsDecimalToken");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DimensionsDecimalToken\" value=\"";
        // line 688
        echo twig_escape_filter($this->env, (isset($context['DimensionsDecimalToken']) ? $context['DimensionsDecimalToken'] : null), "1");
        echo "\" id=\"DimensionsDecimalToken\" class=\"Field40\" maxlenght=\"1\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('decimaltoken');\" onmouseover=\"ShowHelp('decimaltoken', '";
        // line 689
        echo getLang("DimensionsDecimalToken");
        echo "', '";
        echo getLang("DimensionsDecimalTokenHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display: none;\" id=\"decimaltoken\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DimensionsThousandsToken\">";
        // line 695
        echo getLang("DimensionsThousandsToken");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DimensionsThousandsToken\" value=\"";
        // line 698
        echo twig_escape_filter($this->env, (isset($context['DimensionsThousandsToken']) ? $context['DimensionsThousandsToken'] : null), "1");
        echo "\" id=\"DimensionsThousandsToken\" class=\"Field40\" maxlenght=\"1\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('thousandstoken');\" onmouseover=\"ShowHelp('thousandstoken', '";
        // line 699
        echo getLang("DimensionsThousandsToken");
        echo "', '";
        echo getLang("DimensionsThousandsTokenHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display: none;\" id=\"thousandstoken\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DimensionsDecimalPlaces\">";
        // line 705
        echo getLang("DimensionsDecimalPlaces");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DimensionsDecimalPlaces\" value=\"";
        // line 708
        echo twig_safe_filter((isset($context['DimensionsDecimalPlaces']) ? $context['DimensionsDecimalPlaces'] : null));
        echo "\" id=\"DimensionsDecimalPlaces\" class=\"Field40\" maxlenght=\"1\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('decimalplaces');\" onmouseover=\"ShowHelp('decimalplaces', '";
        // line 709
        echo getLang("DimensionsDecimalPlaces");
        echo "', '";
        echo getLang("DimensionsDecimalPlacesHelp");
        echo "');\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display: none;\" id=\"decimalplaces\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ShippingFactoringDimension\">";
        // line 715
        echo getLang("ShippingFactoringDimension");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"ShippingFactoringDimension\" id=\"ShippingFactoringDimension\" class=\"Field120\">
\t\t\t\t\t\t\t<option value=\"depth\" ";
        // line 719
        echo twig_safe_filter((isset($context['ShippingFactoringDimensionDepthSelected']) ? $context['ShippingFactoringDimensionDepthSelected'] : null));
        echo ">";
        echo getLang("ShippingFactoringDimensionDepth");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"height\" ";
        // line 720
        echo twig_safe_filter((isset($context['ShippingFactoringDimensionHeightSelected']) ? $context['ShippingFactoringDimensionHeightSelected'] : null));
        echo ">";
        echo getLang("ShippingFactoringDimensionHeight");
        echo "</option>
\t\t\t\t\t\t\t<option value=\"width\" ";
        // line 721
        echo twig_safe_filter((isset($context['ShippingFactoringDimensionWidthSelected']) ? $context['ShippingFactoringDimensionWidthSelected'] : null));
        echo ">";
        echo getLang("ShippingFactoringDimensionWidth");
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('dshipfactdimension');\" onmouseover=\"ShowHelp('dshipfactdimension', '";
        // line 723
        echo getLang("ShippingFactoringDimension");
        echo "', '";
        echo getLang("ShippingFactoringDimensionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t<div style=\"display:none\" id=\"dshipfactdimension\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 733
        echo getLang("DateSettings");
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"StoreTimezone\">";
        // line 737
        echo getLang("StoreTimeZone");
        echo ":</label><a name=\"StoreTimezone\" />
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name=\"StoreTimeZone\" id=\"StoreTimeZone\" class=\"Field300\">
\t\t\t\t\t\t\t";
        // line 741
        echo twig_safe_filter((isset($context['TimeZoneOptions']) ? $context['TimeZoneOptions'] : null));
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<img onmouseout=\"HideHelp('tz_h');\" onmouseover=\"ShowHelp('tz_h', '";
        // line 743
        echo getLang("StoreTimeZone");
        echo "', '";
        echo getLang("StoreTimeZoneHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"tz_h\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 749
        echo getLang("EnableDSTCorrection");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label for=\"StoreDSTCorrection\"><input ";
        // line 752
        echo twig_safe_filter((isset($context['IsDSTCorrectionEnabled']) ? $context['IsDSTCorrectionEnabled'] : null));
        echo " type=\"checkbox\" name=\"StoreDSTCorrection\" id=\"StoreDSTCorrection\" value=\"1\" />";
        echo getLang("YesEnableDSTCorrection");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('dst');\" onmouseover=\"ShowHelp('dst', '";
        // line 753
        echo getLang("EnableDSTCorrection");
        echo "?', '";
        echo getLang("EnableDSTCorrectionHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"dst\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DisplayDateFormat\">";
        // line 759
        echo getLang("DisplayDateFormat");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"DisplayDateFormat\" id=\"DisplayDateFormat\" value=\"";
        // line 762
        echo twig_safe_filter((isset($context['DisplayDateFormat']) ? $context['DisplayDateFormat'] : null));
        echo "\" class=\"Field100\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d19');\" onmouseover=\"ShowHelp('d19', '";
        // line 763
        echo getLang("DisplayDateFormat");
        echo "', '";
        echo getLang("DisplayDateFormatHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d19\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ExportDateFormat\">";
        // line 769
        echo getLang("ExportDateFormat");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" name=\"ExportDateFormat\" id=\"ExportDateFormat\" value=\"";
        // line 772
        echo twig_safe_filter((isset($context['ExportDateFormat']) ? $context['ExportDateFormat'] : null));
        echo "\" class=\"Field100\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d20');\" onmouseover=\"ShowHelp('d20', '";
        // line 773
        echo getLang("ExportDateFormat");
        echo "', '";
        echo getLang("ExportDateFormatHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d20\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ExtendedDisplayDateFormat\">";
        // line 779
        echo getLang("ExtendedDisplayDateFormat");
        echo ":</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t<input type=\"text\" name=\"ExtendedDisplayDateFormat\" id=\"ExtendedDisplayDateFormat\" value=\"";
        // line 782
        echo twig_safe_filter((isset($context['ExtendedDisplayDateFormat']) ? $context['ExtendedDisplayDateFormat'] : null));
        echo "\" class=\"Field100\" />
\t\t\t\t\t\t<img onmouseout=\"HideHelp('d21');\" onmouseover=\"ShowHelp('d21', '";
        // line 783
        echo getLang("ExtendedDisplayDateFormat");
        echo "', '";
        echo getLang("ExtendedDisplayDateFormatHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t<div style=\"display:none\" id=\"d21\"></div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div8\" style=\"padding-top: 10px;\">
\t\t\t<input type=\"hidden\" name=\"AutoResizeImages\" id=\"AutoResizeImages\" value=\"no\" />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 794
        echo getLang("ProductThumbnailSizes");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 798
        echo getLang("StorewideThumbnail");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesStorewideThumbnail_width\" id=\"ProductImagesStorewideThumbnail_width\" value=\"";
        // line 801
        echo twig_safe_filter((isset($context['ProductImagesStorewideThumbnail_width']) ? $context['ProductImagesStorewideThumbnail_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesStorewideThumbnail_height\" id=\"ProductImagesStorewideThumbnail_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesStorewideThumbnail_height']) ? $context['ProductImagesStorewideThumbnail_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_storewidethumbnail');\" onmouseover=\"ShowHelp('productimage_storewidethumbnail', '";
        // line 802
        echo getLang("StorewideThumbnail");
        echo "', '";
        echo getLang("StorewideThumbnailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_storewidethumbnail\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 809
        echo getLang("ProductPageImage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesProductPageImage_width\" id=\"ProductImagesProductPageImage_width\" value=\"";
        // line 812
        echo twig_safe_filter((isset($context['ProductImagesProductPageImage_width']) ? $context['ProductImagesProductPageImage_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesProductPageImage_height\" id=\"ProductImagesProductPageImage_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesProductPageImage_height']) ? $context['ProductImagesProductPageImage_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_productpageimage');\" onmouseover=\"ShowHelp('productimage_productpageimage', '";
        // line 813
        echo getLang("ProductPageImage");
        echo "', '";
        echo getLang("ProductPageImageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_productpageimage\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 820
        echo getLang("ProductPageGalleryThumbnail");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesGalleryThumbnail_width\" id=\"ProductImagesGalleryThumbnail_width\" value=\"";
        // line 823
        echo twig_safe_filter((isset($context['ProductImagesGalleryThumbnail_width']) ? $context['ProductImagesGalleryThumbnail_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesGalleryThumbnail_height\" id=\"ProductImagesGalleryThumbnail_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesGalleryThumbnail_height']) ? $context['ProductImagesGalleryThumbnail_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_productpagegallerythumbnail');\" onmouseover=\"ShowHelp('productimage_productpagegallerythumbnail', '";
        // line 824
        echo getLang("ProductPageGalleryThumbnail");
        echo "', '";
        echo getLang("ProductPageGalleryThumbnailHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_productpagegallerythumbnail\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 831
        echo getLang("ProductPageZoomImage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductImagesZoomImage_width\" id=\"ProductImagesZoomImage_width\" value=\"";
        // line 834
        echo twig_safe_filter((isset($context['ProductImagesZoomImage_width']) ? $context['ProductImagesZoomImage_width'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />&nbsp;x&nbsp;&nbsp;<input type=\"text\" name=\"ProductImagesZoomImage_height\" id=\"ProductImagesZoomImage_height\" value=\"";
        echo twig_safe_filter((isset($context['ProductImagesZoomImage_height']) ? $context['ProductImagesZoomImage_height'] : null));
        echo "\" class=\"Field40 SetOriginalImageSizeValue\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_zoomimage');\" onmouseover=\"ShowHelp('productimage_zoomimage', '";
        // line 835
        echo getLang("ProductPageZoomImage");
        echo "', '";
        echo getLang("ProductPageZoomImageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_zoomimage\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 841
        echo getLang("ReprocessImages");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"#\" id=\"ReprocessImages\">";
        // line 844
        echo getLang("ReprocessImagesLink");
        echo "</a>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_reprocessimages');\" onmouseover=\"ShowHelp('productimage_reprocessimages', '";
        // line 845
        echo getLang("ReprocessImages");
        echo "', '";
        echo getLang("ReprocessImagesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_reprocessimages\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 852
        echo getLang("ShowTinyThumbnails");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"ProductImagesTinyThumbnailsEnabled\" id=\"ProductImagesTinyThumbnailsEnabled\" value=\"ON\" ";
        // line 855
        echo twig_safe_filter((isset($context['IsProductImagesTinyThumbnailsEnabled']) ? $context['IsProductImagesTinyThumbnailsEnabled'] : null));
        echo " /> <label for=\"ProductImagesTinyThumbnailsEnabled\">";
        echo getLang("YesShowTinyThumbnails");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_tinythumbnailsenabled');\" onmouseover=\"ShowHelp('productimage_tinythumbnailsenabled', '";
        // line 856
        echo getLang("ShowTinyThumbnails");
        echo "', '";
        echo getLang("ShowTinyThumbnailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_tinythumbnailsenabled\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 863
        echo getLang("EnableImageZoom");
        echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"ProductImagesImageZoomEnabled\" id=\"ProductImagesImageZoomEnabled\" value=\"ON\" ";
        // line 866
        echo twig_safe_filter((isset($context['IsProductImagesImageZoomEnabled']) ? $context['IsProductImagesImageZoomEnabled'] : null));
        echo " /> <label for=\"ProductImagesImageZoomEnabled\">";
        echo getLang("YesEnableImageZoom");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('productimage_enableimagezoom');\" onmouseover=\"ShowHelp('productimage_enableimagezoom', '";
        // line 867
        echo getLang("EnableImageZoom");
        echo "', '";
        echo getLang("EnableImageZoomHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"productimage_enableimagezoom\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ProductImageMode\">";
        // line 874
        echo getLang("ProductImageMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<select name=\"ProductImageMode\" id=\"ProductImageMode\" class=\"Field300\">
\t\t\t\t\t\t\t\t<option value=\"popup\" ";
        // line 878
        echo twig_safe_filter((isset($context['ProductImageModePopup']) ? $context['ProductImageModePopup'] : null));
        echo ">";
        echo getLang("ProductImageModePopup");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"lightbox\" ";
        // line 879
        echo twig_safe_filter((isset($context['ProductImageModeLightbox']) ? $context['ProductImageModeLightbox'] : null));
        echo ">";
        echo getLang("ProductImageModeLightbox");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('imagemodehelp');\" onmouseover=\"ShowHelp('imagemodehelp', '";
        // line 881
        echo getLang("ProductImageMode");
        echo "', '";
        echo getLang("ProductImageModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"imagemodehelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> Default Product Image:
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<label><input type=\"radio\" class=\"DefaultProductImage\" name=\"DefaultProductImage\" value=\"none\" ";
        // line 891
        echo twig_safe_filter((isset($context['DefaultProductImageNoneChecked']) ? $context['DefaultProductImageNoneChecked'] : null));
        echo " /> ";
        echo getLang("DefaultProductImageNone");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('DefaultProductImageHelp');\" onmouseover=\"ShowHelp('DefaultProductImageHelp', '";
        // line 892
        echo getLang("DefaultProductImage");
        echo "', '";
        echo getLang("DefaultProductImageHelp");
        echo "')\" src=\"images/help.gif\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"DefaultProductImageHelp\"></div>
\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" class=\"DefaultProductImage\" name=\"DefaultProductImage\" value=\"template\" ";
        // line 894
        echo twig_safe_filter((isset($context['DefaultProductImageTemplateChecked']) ? $context['DefaultProductImageTemplateChecked'] : null));
        echo " />  ";
        echo getLang("DefaultProductImageTemplate");
        echo " (<a href=\"";
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/templates/";
        echo twig_safe_filter((isset($context['template']) ? $context['template'] : null));
        echo "/images/ProductDefault.gif\" target=\"_blank\">templates/";
        echo twig_safe_filter((isset($context['template']) ? $context['template'] : null));
        echo "/images/ProductDefault.gif</a>)</label>
\t\t\t\t\t\t\t<label style=\"display: block;\"><input type=\"radio\" class=\"DefaultProductImage\" name=\"DefaultProductImage\" value=\"custom\" ";
        // line 895
        echo twig_safe_filter((isset($context['DefaultProductImageCustomChecked']) ? $context['DefaultProductImageCustomChecked'] : null));
        echo " /> ";
        echo getLang("DefaultProductImageCustom");
        echo "</label>
\t\t\t\t\t\t\t<div id=\"DefaultProductImageCustomContainer\" style=\"margin-top: 5px;\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" style=\"vertical-align: top;\" /> <input type=\"file\" name=\"DefaultProductImageCustom\" id=\"DefaultProductImageCustom\" />
\t\t\t\t\t\t\t\t<span style=\"";
        // line 898
        echo twig_safe_filter((isset($context['HideCurrentDefaultProductImage']) ? $context['HideCurrentDefaultProductImage'] : null));
        echo "\" id=\"DefaultProductImageCustomCurrent\">&nbsp;&nbsp;&nbsp; ";
        echo getLang("CurrentDefaultImage");
        echo ": <a href=\"";
        echo twig_safe_filter((isset($context['AppPath']) ? $context['AppPath'] : null));
        echo "/";
        echo twig_safe_filter((isset($context['DefaultProductImage']) ? $context['DefaultProductImage'] : null));
        echo "\" target=\"_blank\">";
        echo twig_safe_filter((isset($context['DefaultProductImage']) ? $context['DefaultProductImage'] : null));
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 904
        echo getLang("CategoryAndBrandImages");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryPerRow\">";
        // line 908
        echo getLang("CatItemPerRow");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryPerRow\" id=\"CategoryPerRow\" value=\"";
        // line 911
        echo twig_safe_filter((isset($context['CategoryPerRow']) ? $context['CategoryPerRow'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_catper');\" onmouseover=\"ShowHelp('d_catper', '";
        // line 912
        echo getLang("CatItemPerRow");
        echo "', '";
        echo getLang("CatItemPerRowHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_catper\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"BrandPerRow\">";
        // line 918
        echo getLang("BrandItemPerRow");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"BrandPerRow\" id=\"BrandPerRow\" value=\"";
        // line 921
        echo twig_safe_filter((isset($context['BrandPerRow']) ? $context['BrandPerRow'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_brandper');\" onmouseover=\"ShowHelp('d_brandper', '";
        // line 922
        echo getLang("BrandItemPerRow");
        echo "', '";
        echo getLang("BrandItemPerRowHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_brandper\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryImageWidth\">";
        // line 928
        echo getLang("CatImageDimSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryImageWidth\" id=\"CategoryImageWidth\" value=\"";
        // line 931
        echo twig_safe_filter((isset($context['CategoryImageWidth']) ? $context['CategoryImageWidth'] : null));
        echo "\" class=\"Field40\" /> x <input type=\"text\" name=\"CategoryImageHeight\" id=\"CategoryImageHeight\" value=\"";
        echo twig_safe_filter((isset($context['CategoryImageHeight']) ? $context['CategoryImageHeight'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_catdim');\" onmouseover=\"ShowHelp('d_catdim', '";
        // line 932
        echo getLang("CatImageDimSetting");
        echo "', '";
        echo getLang("CatImageDimSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_catdim\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"BrandImageWidth\">";
        // line 938
        echo getLang("BrandImageDimSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"BrandImageWidth\" id=\"BrandImageWidth\" value=\"";
        // line 941
        echo twig_safe_filter((isset($context['BrandImageWidth']) ? $context['BrandImageWidth'] : null));
        echo "\" class=\"Field40\" /> x <input type=\"text\" name=\"BrandImageHeight\" id=\"BrandImageHeight\" value=\"";
        echo twig_safe_filter((isset($context['BrandImageHeight']) ? $context['BrandImageHeight'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_branddim');\" onmouseover=\"ShowHelp('d_branddim', '";
        // line 942
        echo getLang("BrandImageDimSetting");
        echo "', '";
        echo getLang("BrandImageDimSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_branddim\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CategoryDefaultImage\">";
        // line 948
        echo getLang("CatImageDefaultSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"file\" id=\"CategoryDefaultImage\" name=\"CategoryDefaultImage\" class=\"Field\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_catdimg');\" onmouseover=\"ShowHelp('d_catdimg', '";
        // line 952
        echo getLang("CatImageDefaultSetting");
        echo "', '";
        echo getLang("CatImageDefaultSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_catdimg\"></div>";
        // line 953
        echo twig_safe_filter((isset($context['CatImageDefaultSettingMessage']) ? $context['CatImageDefaultSettingMessage'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BrandDefaultImage\">";
        // line 958
        echo getLang("BrandImageDefaultSetting");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"file\" id=\"BrandDefaultImage\" name=\"BrandDefaultImage\" class=\"Field\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d_brandimg');\" onmouseover=\"ShowHelp('d_brandimg', '";
        // line 962
        echo getLang("BrandImageDefaultSetting");
        echo "', '";
        echo getLang("BrandImageDefaultSettingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d_brandimg\"></div>";
        // line 963
        echo twig_safe_filter((isset($context['BrandImageDefaultSettingMessage']) ? $context['BrandImageDefaultSettingMessage'] : null));
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div2\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 973
        echo getLang("DisplaySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"HomeFeaturedProducts\">";
        // line 977
        echo getLang("HomeFeaturedProducts");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HomeFeaturedProducts\" id=\"HomeFeaturedProducts\" value=\"";
        // line 980
        echo twig_safe_filter((isset($context['HomeFeaturedProducts']) ? $context['HomeFeaturedProducts'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d23');\" onmouseover=\"ShowHelp('d23', '";
        // line 981
        echo getLang("HomeFeaturedProducts");
        echo "', '";
        echo getLang("HomeFeaturedProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d23\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"HomeNewProducts\">";
        // line 987
        echo getLang("HomeNewProducts");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HomeNewProducts\" id=\"HomeNewProducts\" value=\"";
        // line 990
        echo twig_safe_filter((isset($context['HomeNewProducts']) ? $context['HomeNewProducts'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d25');\" onmouseover=\"ShowHelp('d25', '";
        // line 991
        echo getLang("HomeNewProducts");
        echo "', '";
        echo getLang("HomeNewProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d25\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"HomeBlogPosts\">";
        // line 997
        echo getLang("HomeBlogPosts");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HomeBlogPosts\" id=\"HomeBlogPosts\" value=\"";
        // line 1000
        echo twig_safe_filter((isset($context['HomeBlogPosts']) ? $context['HomeBlogPosts'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d27');\" onmouseover=\"ShowHelp('d27', '";
        // line 1001
        echo getLang("HomeBlogPosts");
        echo "', '";
        echo getLang("HomeBlogPostsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d27\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryProductsPerPage\">";
        // line 1007
        echo getLang("CategoryProductsPerPage");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryProductsPerPage\" id=\"CategoryProductsPerPage\" value=\"";
        // line 1010
        echo twig_safe_filter((isset($context['CategoryProductsPerPage']) ? $context['CategoryProductsPerPage'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d28');\" onmouseover=\"ShowHelp('d28', '";
        // line 1011
        echo getLang("CategoryProductsPerPage");
        echo "', '";
        echo getLang("CategoryProductsPerPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d28\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr style=\"";
        // line 1015
        echo twig_escape_filter($this->env, (isset($context['HideIfReviewsDisabled']) ? $context['HideIfReviewsDisabled'] : null), "1");
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"ProductReviewsPerPage\">";
        // line 1017
        echo getLang("ProductReviewsPerPage");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"ProductReviewsPerPage\" id=\"ProductReviewsPerPage\" value=\"";
        // line 1020
        echo twig_safe_filter((isset($context['ProductReviewsPerPage']) ? $context['ProductReviewsPerPage'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d30');\" onmouseover=\"ShowHelp('d30', '";
        // line 1021
        echo getLang("ProductReviewsPerPage");
        echo "', '";
        echo getLang("ProductReviewsPerPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d30\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"TagCartQuantityBoxes\">";
        // line 1027
        echo getLang("CartQuantityBoxes");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"TagCartQuantityBoxes\" id=\"TagCartQuantityBoxes\" class=\"Field200\">
\t\t\t\t\t\t\t\t<option value=\"dropdown\"  ";
        // line 1031
        echo twig_safe_filter((isset($context['IsDropdown']) ? $context['IsDropdown'] : null));
        echo ">";
        echo getLang("DropdownList");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"textbox\"  ";
        // line 1032
        echo twig_safe_filter((isset($context['IsTextbox']) ? $context['IsTextbox'] : null));
        echo ">";
        echo getLang("TextBox");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d32');\" onmouseover=\"ShowHelp('d32', '";
        // line 1034
        echo getLang("CartQuantityBoxes");
        echo "', '";
        echo getLang("CartQuantityBoxesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d32\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"FastCartAction\">";
        // line 1040
        echo getLang("FastCartLabel");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"FastCartAction\" id=\"FastCartAction\" class=\"Field200\">
\t\t\t\t\t\t\t\t<option value=\"popup\" ";
        // line 1044
        echo twig_safe_filter((isset($context['IsShowPopWindow']) ? $context['IsShowPopWindow'] : null));
        echo ">";
        echo getLang("FastCartOption1ShowPopWindow");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"cart\" ";
        // line 1045
        echo twig_safe_filter((isset($context['IsShowCartPage']) ? $context['IsShowCartPage'] : null));
        echo ">";
        echo getLang("FastCartOption2ShowCartPage");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('FastCartHelp');\" onmouseover=\"ShowHelp('FastCartHelp', '";
        // line 1047
        echo Interspire_Template_Extension::jsFilter(getLang("FastCartLabel"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("FastCartHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"FastCartHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ProductBreadcrumbs\">";
        // line 1053
        echo getLang("ProductBreadcrumbs");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
        // line 1056
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['form']) ? $context['form'] : null), "select", array("ProductBreadcrumbs", (isset($context['ProductBreadcrumbOptions']) ? $context['ProductBreadcrumbOptions'] : null), (isset($context['ProductBreadcrumbs']) ? $context['ProductBreadcrumbs'] : null), array(), ), "method"), "1");
        echo "
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ProductBreadcrumbsHelp');\" onmouseover=\"ShowHelp('ProductBreadcrumbsHelp', '";
        // line 1057
        echo getLang("ProductBreadcrumbs");
        echo "', '";
        echo getLang("ProductBreadcrumbsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ProductBreadcrumbsHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowAddToCartQtyBox\">";
        // line 1063
        echo getLang("ShowAddToCartQtyBox");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowAddToCartQtyBox\" id=\"ShowAddToCartQtyBox\" value=\"ON\" ";
        // line 1066
        echo twig_safe_filter((isset($context['IsShownAddToCartQtyBox']) ? $context['IsShownAddToCartQtyBox'] : null));
        echo " /> <label for=\"ShowAddToCartQtyBox\">";
        echo getLang("YesShowAddToCartQtyBox");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d31');\" onmouseover=\"ShowHelp('d31', '";
        // line 1067
        echo getLang("ShowAddToCartQtyBox");
        echo "', '";
        echo getLang("ShowAddToCartQtyBoxHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d31\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"TagCloudsEnabled\">";
        // line 1074
        echo getLang("TagCloudsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"TagCloudsEnabled\" id=\"TagCloudsEnabled\" value=\"ON\" ";
        // line 1077
        echo twig_safe_filter((isset($context['IsTagCloudsEnabled']) ? $context['IsTagCloudsEnabled'] : null));
        echo " /> <label for=\"TagCloudsEnabled\">";
        echo getLang("YesTagCloudsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d31');\" onmouseover=\"ShowHelp('d31', '";
        // line 1078
        echo getLang("TagCloudsEnabled");
        echo "', '";
        echo getLang("TagCloudsEnabledHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d31\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CaptchaEnabled\">";
        // line 1084
        echo getLang("CaptchaEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"CaptchaEnabled\" id=\"CaptchaEnabled\" value=\"ON\" ";
        // line 1087
        echo twig_safe_filter((isset($context['IsCaptchaEnabled']) ? $context['IsCaptchaEnabled'] : null));
        echo " /> <label for=\"CaptchaEnabled\">";
        echo getLang("YesCaptchaEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d32');\" onmouseover=\"ShowHelp('d32', '";
        // line 1088
        echo getLang("CaptchaEnabled");
        echo "', '";
        echo getLang("CaptchaEnabledHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d32\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchSuggest\">";
        // line 1094
        echo getLang("EnableSearchSuggest");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"SearchSuggest\" id=\"SearchSuggest\" value=\"ON\" ";
        // line 1097
        echo twig_safe_filter((isset($context['IsSearchSuggest']) ? $context['IsSearchSuggest'] : null));
        echo " /> <label for=\"SearchSuggest\">";
        echo getLang("YesSearchSuggest");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d35');\" onmouseover=\"ShowHelp('d35', '";
        // line 1098
        echo getLang("SearchSuggest");
        echo "', '";
        echo getLang("SearchSuggestHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d35\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowThumbsInCart\">";
        // line 1104
        echo getLang("ShowThumbsInCart");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowThumbsInCart\" id=\"ShowThumbsInCart\" value=\"ON\" ";
        // line 1107
        echo twig_safe_filter((isset($context['IsShowThumbsInCart']) ? $context['IsShowThumbsInCart'] : null));
        echo " /> <label for=\"ShowThumbsInCart\">";
        echo getLang("YesShowThumbsInCart");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d33');\" onmouseover=\"ShowHelp('d33', '";
        // line 1108
        echo getLang("ShowThumbsInCart");
        echo "', '";
        echo getLang("ShowThumbsInCartHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d33\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1114
        echo getLang("ShowCartSuggestions");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowCartSuggestions\" id=\"ShowCartSuggestions\" value=\"ON\" ";
        // line 1117
        echo twig_safe_filter((isset($context['IsShowCartSuggestions']) ? $context['IsShowCartSuggestions'] : null));
        echo " /> <label for=\"ShowCartSuggestions\">";
        echo getLang("YesShowCartSuggestions");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d34');\" onmouseover=\"ShowHelp('d34', '";
        // line 1118
        echo getLang("ShowCartSuggestions");
        echo "', '";
        echo getLang("ShowCartSuggestionsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d34\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr style=\"";
        // line 1122
        echo twig_escape_filter($this->env, (isset($context['HideIfReviewsDisabled']) ? $context['HideIfReviewsDisabled'] : null), "1");
        echo "\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"AutoApproveReviews\">";
        // line 1124
        echo getLang("AutoApproveReviews");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"AutoApproveReviews\" id=\"AutoApproveReviews\" value=\"ON\" ";
        // line 1127
        echo twig_safe_filter((isset($context['IsAutoApproveReviews']) ? $context['IsAutoApproveReviews'] : null));
        echo " /> <label for=\"AutoApproveReviews\">";
        echo getLang("YesAutoApproveReviews");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('AutoApproveRevHelp');\" onmouseover=\"ShowHelp('AutoApproveRevHelp', '";
        // line 1128
        echo getLang("AutoApproveReviews");
        echo "', '";
        echo getLang("AutoApproveReviewsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"AutoApproveRevHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableCustomersAlsoViewed\">";
        // line 1134
        echo getLang("EnableCustomersAlsoViewed");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableCustomersAlsoViewed\" id=\"EnableCustomersAlsoViewed\" value=\"ON\" ";
        // line 1137
        echo twig_safe_filter((isset($context['IsCustomersAlsoViewedEnabled']) ? $context['IsCustomersAlsoViewedEnabled'] : null));
        echo " onclick=\"if(this.checked) { \$('.HideIfCustomersAlsoViewedDisabled').show(); } else { \$('.HideIfCustomersAlsoViewedDisabled').hide(); }\" /> <label for=\"EnableCustomersAlsoViewed\">";
        echo getLang("YesEnableCustomersAlsoViewed");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('EnableCustomersAlsoViewedHelp');\" onmouseover=\"ShowHelp('EnableCustomersAlsoViewedHelp', '";
        // line 1138
        echo Interspire_Template_Extension::jsFilter(getLang("EnableCustomersAlsoViewed"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("EnableCustomersAlsoViewedHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"EnableCustomersAlsoViewedHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"HideIfCustomersAlsoViewedDisabled\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CustomersAlsoViewedCount\">";
        // line 1144
        echo getLang("CustomersAlsoViewedCount");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CustomersAlsoViewedCount\" id=\"CustomersAlsoViewedCount\" value=\"";
        // line 1147
        echo twig_escape_filter($this->env, (isset($context['CustomersAlsoViewedCount']) ? $context['CustomersAlsoViewedCount'] : null), "1");
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('CustomersAlsoViewedCountHelp');\" onmouseover=\"ShowHelp('CustomersAlsoViewedCountHelp', '";
        // line 1148
        echo Interspire_Template_Extension::jsFilter(getLang("CustomersAlsoViewedCount"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("CustomersAlsoViewedCountHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"CustomersAlsoViewedCountHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"QuickSearch\">";
        // line 1154
        echo getLang("EnableQuickSearch");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"QuickSearch\" id=\"QuickSearch\" value=\"ON\" ";
        // line 1157
        echo twig_safe_filter((isset($context['IsQuickSearch']) ? $context['IsQuickSearch'] : null));
        echo " /> <label for=\"QuickSearch\">";
        echo getLang("YesQuickSearch");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d43');\" onmouseover=\"ShowHelp('d43', '";
        // line 1158
        echo getLang("EnableQuickSearch");
        echo "', '";
        echo getLang("QuickSearchHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d43\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowInventory\">";
        // line 1164
        echo getLang("ShowInventory");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowInventory\" id=\"ShowInventory\" value=\"ON\" ";
        // line 1167
        echo twig_safe_filter((isset($context['IsShowInventory']) ? $context['IsShowInventory'] : null));
        echo " onclick=\"if(this.checked) { \$('.HideIfShowInventoryDisabled').show(); } else { \$('.HideIfShowInventoryDisabled').hide(); }\" /> <label for=\"ShowInventory\">";
        echo getLang("YesShowInventory");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ShowInvHelp');\" onmouseover=\"ShowHelp('ShowInvHelp', '";
        // line 1168
        echo getLang("ShowInventory");
        echo "', '";
        echo getLang("ShowInventoryHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ShowInvHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"HideIfShowInventoryDisabled\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowPreOrderInventory\">";
        // line 1174
        echo getLang("ShowPreOrderInventory");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowPreOrderInventory\" id=\"ShowPreOrderInventory\" value=\"ON\" ";
        // line 1177
        echo twig_safe_filter((isset($context['IsShowPreOrderInventory']) ? $context['IsShowPreOrderInventory'] : null));
        echo " /> <label for=\"ShowPreOrderInventory\">";
        echo getLang("YesShowPreOrderInventory");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ShowPreOrderInventoryHelp');\" onmouseover=\"ShowHelp('ShowPreOrderInventoryHelp', '";
        // line 1178
        echo Interspire_Template_Extension::jsFilter(getLang("ShowPreOrderInventory"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("ShowPreOrderInventoryHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ShowPreOrderInventoryHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1184
        echo getLang("EnableWishlist");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableWishlist\" id=\"EnableWishlist\" value=\"ON\" ";
        // line 1187
        echo twig_safe_filter((isset($context['IsWishlistEnabled']) ? $context['IsWishlistEnabled'] : null));
        echo " /> <label for=\"EnableWishlist\">";
        echo getLang("YesEnableWishlist");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ShowWishlistHelp');\" onmouseover=\"ShowHelp('ShowWishlistHelp', '";
        // line 1188
        echo getLang("EnableWishlist");
        echo "?', '";
        echo getLang("EnableWishlistHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ShowWishlistHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableProductComparisons\">";
        // line 1194
        echo getLang("EnableProductComparisons");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableProductComparisons\" id=\"EnableProductComparisons\" value=\"1\" ";
        // line 1197
        echo twig_safe_filter((isset($context['IsEnableProductComparisons']) ? $context['IsEnableProductComparisons'] : null));
        echo " /> <label for=\"EnableProductComparisons\">";
        echo getLang("YesEnableProductComparisons");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('EnableProductComparisonsHelp');\" onmouseover=\"ShowHelp('EnableProductComparisonsHelp', '";
        // line 1198
        echo getLang("EnableProductComparisons");
        echo "', '";
        echo getLang("EnableProductComparisonsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"EnableProductComparisonsHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableAccountCreation\">";
        // line 1204
        echo getLang("EnableAccountCreation");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableAccountCreation\" id=\"EnableAccountCreation\" value=\"ON\" ";
        // line 1207
        echo twig_safe_filter((isset($context['IsEnableAccountCreation']) ? $context['IsEnableAccountCreation'] : null));
        echo " /> <label for=\"EnableAccountCreation\">";
        echo getLang("YesEnableAccountCreation");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('AccountCreationHelp');\" onmouseover=\"ShowHelp('AccountCreationHelp', '";
        // line 1208
        echo getLang("EnableAccountCreation");
        echo "?', '";
        echo getLang("EnableAccountCreationHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"AccountCreationHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BulkDiscountEnabled\">";
        // line 1214
        echo getLang("BulkDiscountEnabled");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BulkDiscountEnabled\" id=\"BulkDiscountEnabled\" value=\"ON\" ";
        // line 1217
        echo twig_safe_filter((isset($context['IsBulkDiscountEnabled']) ? $context['IsBulkDiscountEnabled'] : null));
        echo " /> <label for=\"BulkDiscountEnabled\">";
        echo getLang("YesBulkDiscountEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('bulkdiscountenabled');\" onmouseover=\"ShowHelp('bulkdiscountenabled', '";
        // line 1218
        echo getLang("BulkDiscountEnabled");
        echo "', '";
        echo getLang("BulkDiscountEnabledHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"bulkdiscountenabled\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"EnableProductTabs\">";
        // line 1224
        echo getLang("EnableProductTabs");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableProductTabs\" id=\"EnableProductTabs\" value=\"ON\" ";
        // line 1227
        echo twig_safe_filter((isset($context['IsProductTabsEnabled']) ? $context['IsProductTabsEnabled'] : null));
        echo " /> <label for=\"EnableProductTabs\">";
        echo getLang("YesEnableProductTabs");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('EnableProductTabsHelp');\" onmouseover=\"ShowHelp('EnableProductTabsHelp', '";
        // line 1228
        echo getLang("EnableProductTabs");
        echo "', '";
        echo getLang("EnableProductTabsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"EnableProductTabsHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1233
        echo getLang("ControlPanelDisplaySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1237
        echo getLang("UseWYSIWYGEditor");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"UseWYSIWYG\" id=\"UseWYSIWYG\" value=\"ON\" ";
        // line 1240
        echo twig_safe_filter((isset($context['IsWYSIWYGEnabled']) ? $context['IsWYSIWYGEnabled'] : null));
        echo " /> <label for=\"UseWYSIWYG\">";
        echo getLang("YesEnableWYSIWYGEditor");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d39');\" onmouseover=\"ShowHelp('d39', '";
        // line 1241
        echo getLang("UseWYSIWYGEditor");
        echo "', '";
        echo getLang("UseWYSIWYGEditorHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d39\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1247
        echo getLang("ShowProductThumbnails");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowThumbsInControlPanel\" id=\"ShowThumbsInControlPanel\" value=\"ON\" ";
        // line 1250
        echo twig_safe_filter((isset($context['IsProductThumbnailsEnabled']) ? $context['IsProductThumbnailsEnabled'] : null));
        echo " /> <label for=\"ShowThumbsInControlPanel\">";
        echo getLang("YesShowProductThumbnails");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d42');\" onmouseover=\"ShowHelp('d42', '";
        // line 1251
        echo getLang("ShowProductThumbnails");
        echo "', '";
        echo getLang("ShowProductThumbnailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d42\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1259
        echo getLang("CategorySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryListMode\">";
        // line 1263
        echo getLang("CategoryListMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"CategoryListingMode\" value=\"single\" ";
        // line 1266
        echo twig_safe_filter((isset($context['CategoryListModeSingle']) ? $context['CategoryListModeSingle'] : null));
        echo " /> ";
        echo getLang("CategoryListModeSingle");
        echo "</label> <img onmouseout=\"HideHelp('categorylistmodehelp');\" onmouseover=\"ShowHelp('categorylistmodehelp', '";
        echo getLang("CategoryListMode");
        echo "', '";
        echo getLang("CategoryListModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"categorylistmodehelp\"></div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"CategoryListingMode\" value=\"emptychildren\" ";
        // line 1269
        echo twig_safe_filter((isset($context['CategoryListModeEmptyChildren']) ? $context['CategoryListModeEmptyChildren'] : null));
        echo " /> ";
        echo getLang("CategoryListModeEmptyChildren");
        echo "</label><br />
\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"CategoryListingMode\" value=\"children\" ";
        // line 1270
        echo twig_safe_filter((isset($context['CategoryListModeChildren']) ? $context['CategoryListModeChildren'] : null));
        echo " /> ";
        echo getLang("CategoryListModeChildren");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CategoryDisplayMode\">";
        // line 1275
        echo getLang("CategoryDisplayMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"CategoryDisplayMode\" id=\"CategoryDisplayMode\" class=\"Field200\">
\t\t\t\t\t\t\t\t<option value=\"grid\" ";
        // line 1279
        echo twig_safe_filter((isset($context['CategoryDisplayModeGrid']) ? $context['CategoryDisplayModeGrid'] : null));
        echo ">";
        echo getLang("CategoryDisplayModeGrid");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"list\" ";
        // line 1280
        echo twig_safe_filter((isset($context['CategoryDisplayModeList']) ? $context['CategoryDisplayModeList'] : null));
        echo ">";
        echo getLang("CategoryDisplayModeList");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"CategoryListStyle\">";
        // line 1286
        echo getLang("CategoryListStyle");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"CategoryListStyle\" id=\"CategoryListStyle\" class=\"Field200 showByValue\">
\t\t\t\t\t\t\t\t<option value=\"flyout\" ";
        // line 1290
        if ((isset($context['CategoryListStyle']) ? $context['CategoryListStyle'] : null) == "flyout") {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo getLang("CategoryListStyleFlyout");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"static\" ";
        // line 1291
        if ((isset($context['CategoryListStyle']) ? $context['CategoryListStyle'] : null) == "static") {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo getLang("CategoryListStyleStatic");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('CategoryListStyleHelp');\" onmouseover=\"ShowHelp('CategoryListStyleHelp', '";
        // line 1293
        echo Interspire_Template_Extension::jsFilter(getLang("CategoryListStyle"), "'");
        echo "', '";
        echo $this->getEnvironment()->getExtension('interspire')->jsFilter(nl2br($this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "CategoryListStyleHelp", array(), "any")));
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"CategoryListStyleHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"showByValue_CategoryListStyle showByValue_CategoryListStyle_flyout\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"categoryFlyoutDropShadow\">";
        // line 1299
        echo getLang("categoryFlyoutDropShadow");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"categoryFlyoutDropShadow\" id=\"categoryFlyoutDropShadow\" value=\"1\" ";
        // line 1302
        if ($this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "categoryFlyoutDropShadow", array(), "any")) {
            echo "checked=\"checked\"";
        }
        echo " /> <label for=\"categoryFlyoutDropShadow\">";
        echo getLang("YescategoryFlyoutDropShadow");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('categoryFlyoutDropShadowHelp');\" onmouseover=\"ShowHelp('categoryFlyoutDropShadowHelp', '";
        // line 1303
        echo getLang("categoryFlyoutDropShadow");
        echo "', '";
        echo getLang("categoryFlyoutDropShadowHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"categoryFlyoutDropShadowHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"CategoryListDepth\">";
        // line 1309
        echo getLang("CategoryListDepth");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"CategoryListDepth\" id=\"CategoryListDepth\" value=\"";
        // line 1312
        echo twig_safe_filter((isset($context['CategoryListDepth']) ? $context['CategoryListDepth'] : null));
        echo "\" class=\"Field40\" /> <label for=\"CategoryListDepth\">";
        echo getLang("CategoryListDepthUnit");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('CategoryListDepthHelp');\" onmouseover=\"ShowHelp('CategoryListDepthHelp', '";
        // line 1313
        echo getLang("CategoryListDepth");
        echo "', '";
        echo getLang("CategoryListDepthHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"CategoryListDepthHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"showByValue_CategoryListStyle showByValue_CategoryListStyle_flyout\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"categoryFlyoutMouseOutDelay\">";
        // line 1319
        echo getLang("categoryFlyoutMouseOutDelay");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"categoryFlyoutMouseOutDelay\" id=\"categoryFlyoutMouseOutDelay\" value=\"";
        // line 1322
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "categoryFlyoutMouseOutDelay", array(), "any"), "1");
        echo "\" class=\"Field40\" /> <label for=\"categoryFlyoutMouseOutDelay\">";
        echo getLang("categoryFlyoutMouseOutDelayUnit");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('categoryFlyoutMouseOutDelayHelp');\" onmouseover=\"ShowHelp('categoryFlyoutMouseOutDelayHelp', '";
        // line 1323
        echo getLang("categoryFlyoutMouseOutDelay");
        echo "', '";
        echo getLang("categoryFlyoutMouseOutDelayHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"categoryFlyoutMouseOutDelayHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1331
        echo getLang("ProductSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1335
        echo getLang("ShowProductPrice");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductPrice\" id=\"ShowProductPrice\" value=\"ON\" ";
        // line 1338
        echo twig_safe_filter((isset($context['IsProductPriceShown']) ? $context['IsProductPriceShown'] : null));
        echo " /> <label for=\"ShowProductPrice\">";
        echo getLang("YesShowProductPrice");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1343
        echo getLang("ShowProductSKU");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductSKU\" id=\"ShowProductSKU\" value=\"ON\" ";
        // line 1346
        echo twig_safe_filter((isset($context['IsProductSKUShown']) ? $context['IsProductSKUShown'] : null));
        echo " /> <label for=\"ShowProductSKU\">";
        echo getLang("YesShowProductSKU");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1351
        echo getLang("ShowProductWeight");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductWeight\" id=\"ShowProductWeight\" value=\"ON\" ";
        // line 1354
        echo twig_safe_filter((isset($context['IsProductWeightShown']) ? $context['IsProductWeightShown'] : null));
        echo " /> <label for=\"ShowProductWeight\">";
        echo getLang("YesShowProductWeight");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1359
        echo getLang("ShowProductBrand");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductBrand\" id=\"ShowProductBrand\" value=\"ON\" ";
        // line 1362
        echo twig_safe_filter((isset($context['IsProductBrandShown']) ? $context['IsProductBrandShown'] : null));
        echo " /> <label for=\"ShowProductBrand\">";
        echo getLang("YesShowProductBrand");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowCartSuggestions\">";
        // line 1367
        echo getLang("ShowProductShipping");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductShipping\" id=\"ShowProductShipping\" value=\"ON\" ";
        // line 1370
        echo twig_safe_filter((isset($context['IsProductShippingShown']) ? $context['IsProductShippingShown'] : null));
        echo " /> <label for=\"ShowProductShipping\">";
        echo getLang("YesShowProductShipping");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowProductRating\">";
        // line 1375
        echo getLang("ShowProductRating");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowProductRating\" id=\"ShowProductRating\" value=\"ON\" ";
        // line 1378
        echo twig_safe_filter((isset($context['IsProductRatingShown']) ? $context['IsProductRatingShown'] : null));
        echo " /> <label for=\"ShowProductRating\">";
        echo getLang("YesShowProductRating");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowAddToCartLink\">";
        // line 1383
        echo getLang("ShowAddToCartLink");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowAddToCartLink\" id=\"ShowAddToCartLink\" value=\"ON\" ";
        // line 1386
        echo twig_safe_filter((isset($context['IsAddToCartLinkShown']) ? $context['IsAddToCartLinkShown'] : null));
        echo " /> <label for=\"ShowAddToCartLink\">";
        echo getLang("YesShowAddToCartLink");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 1391
        echo getLang("TagCloudFontSize");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>";
        // line 1394
        echo getLang("From");
        echo " <input type=\"text\" name=\"TagCloudMinSize\" id=\"TagCloudMinSize\" value=\"";
        echo twig_safe_filter((isset($context['TagCloudMinSize']) ? $context['TagCloudMinSize'] : null));
        echo "\" class=\"Field50\" />%</label>
\t\t\t\t\t\t\t<label>";
        // line 1395
        echo getLang("SearchTo");
        echo " <input type=\"text\" name=\"TagCloudMaxSize\" id=\"TagCloudMaxSize\" value=\"";
        echo twig_safe_filter((isset($context['TagCloudMaxSize']) ? $context['TagCloudMaxSize'] : null));
        echo "\" class=\"Field50\" />%</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('tagsizehelp');\" onmouseover=\"ShowHelp('tagsizehelp', '";
        // line 1396
        echo getLang("TagCloudFontSize");
        echo "', '";
        echo getLang("TagCloudFontSizeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"tagsizehelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> ";
        // line 1402
        echo getLang("DefaultPreOrderMessage");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"DefaultPreOrderMessage\" id=\"DefaultPreOrderMessage\" value=\"";
        // line 1405
        echo twig_safe_filter((isset($context['DefaultPreOrderMessage']) ? $context['DefaultPreOrderMessage'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('DefaultPreOrderMessageHelp');\" onmouseover=\"ShowHelp('DefaultPreOrderMessageHelp', '";
        // line 1406
        echo Interspire_Template_Extension::jsFilter(getLang("DefaultPreOrderMessage"), "'");
        echo "', '";
        echo Interspire_Template_Extension::jsFilter(getLang("DefaultPreOrderMessageHelp"), "'");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"DefaultPreOrderMessageHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1414
        echo getLang("SocialSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"ShowAddThisLink\">";
        // line 1418
        echo getLang("ShowAddThisLink");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"ShowAddThisLink\" id=\"ShowAddThisLink\" value=\"1\" ";
        // line 1421
        echo twig_safe_filter((isset($context['IsAddThisLinkShown']) ? $context['IsAddThisLinkShown'] : null));
        echo " /> <label for=\"ShowAddThisLink\">";
        echo getLang("YesShowAddThisLink");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('daddthis');\" onmouseover=\"ShowHelp('daddthis', '";
        // line 1422
        echo getLang("ShowAddThisLink");
        echo "', '";
        echo getLang("ShowAddThisLinkHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"daddthis\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"FacebookLikeButtonEnabled\">";
        // line 1428
        echo getLang("ShowFacebookLikeButton");
        echo "?</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonEnabled\"><input type=\"checkbox\" name=\"FacebookLikeButtonEnabled\" id=\"FacebookLikeButtonEnabled\" value=\"1\" ";
        // line 1431
        if ((isset($context['FacebookLikeButtonEnabled']) ? $context['FacebookLikeButtonEnabled'] : null)) {
            echo "checked=\"checked\"";
        }
        echo " />";
        echo getLang("YesShowFacebookLikeButton");
        echo "</label>
\t\t\t\t\t\t\t";
        // line 1432
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ShowFacebookLikeButton", "ShowFacebookLikeButtonHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t<div class=\"NodeJoin\" id=\"facebookLikeOptions\" ";
        // line 1433
        if ((isset($context['FacebookLikeButtonEnabled']) ? $context['FacebookLikeButtonEnabled'] : null) == false) {
            echo "style=\"display: none;\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonStyle\">";
        // line 1437
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "LayoutStyle", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"FacebookLikeButtonStyle\" id=\"FacebookLikeButtonStyle\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"standard\" ";
        // line 1439
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonStylestandard']) ? $context['FacebookLikeButtonStylestandard'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "StyleStandard", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"countonly\" ";
        // line 1440
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonStylecountonly']) ? $context['FacebookLikeButtonStylecountonly'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "StyleCountOnly", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonPosition\">";
        // line 1445
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ButtonPosition", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"FacebookLikeButtonPosition\" id=\"FacebookLikeButtonPosition\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"above\" ";
        // line 1447
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonPositionabove']) ? $context['FacebookLikeButtonPositionabove'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Above", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"below\" ";
        // line 1448
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonPositionbelow']) ? $context['FacebookLikeButtonPositionbelow'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Below", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t";
        // line 1450
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("ButtonPosition", "ButtonPositionHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonVerb\">";
        // line 1454
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "TextToDisplay", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"FacebookLikeButtonVerb\" id=\"FacebookLikeButtonVerb\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"like\" ";
        // line 1456
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonVerblike']) ? $context['FacebookLikeButtonVerblike'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Like", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"recommend\" ";
        // line 1457
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonVerbrecommend']) ? $context['FacebookLikeButtonVerbrecommend'] : null), "1");
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "Recommend", array(), "any"), "1");
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonShowFaces\">";
        // line 1462
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "ShowFaces", array(), "any"), "1");
        echo "?</label>
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"FacebookLikeButtonShowFaces\" id=\"FacebookLikeButtonShowFaces\" value=\"1\" ";
        // line 1464
        if ((isset($context['FacebookLikeButtonShowFacesEnabled']) ? $context['FacebookLikeButtonShowFacesEnabled'] : null)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1465
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "YesShowFaces", array(), "any"), "1");
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" style=\"vertical-align: middle;\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<label for=\"FacebookLikeButtonAdminIds\"><span class=\"Required\">*</span> ";
        // line 1470
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['lang']) ? $context['lang'] : null), "FacebookAdminIds", array(), "any"), "1");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"FacebookLikeButtonAdminIds\" id=\"FacebookLikeButtonAdminIds\" value=\"";
        // line 1471
        echo twig_escape_filter($this->env, (isset($context['FacebookLikeButtonAdminIds']) ? $context['FacebookLikeButtonAdminIds'] : null), "1");
        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
        // line 1472
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("FacebookAdminIds", "FacebookAdminIdsHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t\t\t\t<div style=\"padding-left:114px\" class=\"FieldHelp\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1474
        echo getLang("FacebookAdminIdsLearnMore");
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br class=\"Clear\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1486
        echo getLang("RSSSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSNewProducts\">";
        // line 1490
        echo getLang("RSSNewProductsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSNewProducts\" id=\"RSSNewProducts\" value=\"ON\" ";
        // line 1493
        echo twig_safe_filter((isset($context['IsRSSNewProductsEnabled']) ? $context['IsRSSNewProductsEnabled'] : null));
        echo " /> <label for=\"RSSNewProducts\">";
        echo getLang("YesRSSNewProductsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss1');\" onmouseover=\"ShowHelp('rss1', '";
        // line 1494
        echo getLang("RSSNewProductsEnabled");
        echo "', '";
        echo getLang("RSSNewProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSPopularProducts\">";
        // line 1501
        echo getLang("RSSPopularProductsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSPopularProducts\" id=\"RSSPopularProducts\" value=\"ON\" ";
        // line 1504
        echo twig_safe_filter((isset($context['IsRSSPopularProductsEnabled']) ? $context['IsRSSPopularProductsEnabled'] : null));
        echo " /> <label for=\"RSSPopularProducts\">";
        echo getLang("YesRSSPopularProductsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss2');\" onmouseover=\"ShowHelp('rss2', '";
        // line 1505
        echo getLang("RSSPopularProductsEnabled");
        echo "', '";
        echo getLang("RSSPopularProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSFeaturedProducts\">";
        // line 1512
        echo getLang("RSSFeaturedProductsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSFeaturedProducts\" id=\"RSSFeaturedProducts\" value=\"ON\" ";
        // line 1515
        echo twig_safe_filter((isset($context['IsRSSFeaturedProductsEnabled']) ? $context['IsRSSFeaturedProductsEnabled'] : null));
        echo " /> <label for=\"RSSFeaturedProducts\">";
        echo getLang("YesRSSFeaturedProductsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rssfp');\" onmouseover=\"ShowHelp('rssfp', '";
        // line 1516
        echo getLang("RSSFeaturedProductsEnabled");
        echo "', '";
        echo getLang("RSSFeaturedProductsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rssfp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSCategories\">";
        // line 1523
        echo getLang("RSSCategoriesEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSCategories\" id=\"RSSCategories\" value=\"ON\" ";
        // line 1526
        echo twig_safe_filter((isset($context['IsRSSCategoriesEnabled']) ? $context['IsRSSCategoriesEnabled'] : null));
        echo " /> <label for=\"RSSCategories\">";
        echo getLang("YesRSSCategoriesEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss3');\" onmouseover=\"ShowHelp('rss3', '";
        // line 1527
        echo getLang("RSSCategoriesEnabled");
        echo "', '";
        echo getLang("RSSCategoriesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss3\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSProductSearches\">";
        // line 1534
        echo getLang("RSSProductSearchesEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSProductSearches\" id=\"RSSProductSearches\" value=\"ON\" ";
        // line 1537
        echo twig_safe_filter((isset($context['IsRSSProductSearchesEnabled']) ? $context['IsRSSProductSearchesEnabled'] : null));
        echo " /> <label for=\"RSSProductSearches\">";
        echo getLang("YesRSSProductSearchesEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss4');\" onmouseover=\"ShowHelp('rss4', '";
        // line 1538
        echo getLang("RSSProductSearchesEnabled");
        echo "', '";
        echo getLang("RSSProductSearchesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss4\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSLatestBlogEntries\">";
        // line 1545
        echo getLang("RSSLatestBlogEntriesEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSLatestBlogEntries\" id=\"RSSLatestBlogEntries\" value=\"ON\" ";
        // line 1548
        echo twig_safe_filter((isset($context['IsRSSLatestBlogEntriesEnabled']) ? $context['IsRSSLatestBlogEntriesEnabled'] : null));
        echo " /> <label for=\"RSSLatestBlogEntries\">";
        echo getLang("YesRSSLatestBlogEntriesEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss5');\" onmouseover=\"ShowHelp('rss5', '";
        // line 1549
        echo getLang("RSSLatestBlogEntriesEnabled");
        echo "', '";
        echo getLang("RSSLatestBlogEntriesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss5\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"RSSSyndicationIcons\">";
        // line 1556
        echo getLang("RSSSyndicationIconsEnabled");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"RSSSyndicationIcons\" id=\"RSSSyndicationIcons\" value=\"ON\" ";
        // line 1559
        echo twig_safe_filter((isset($context['IsRSSSyndicationIconsEnabled']) ? $context['IsRSSSyndicationIconsEnabled'] : null));
        echo " /> <label for=\"RSSSyndicationIcons\">";
        echo getLang("YesRSSSyndicationIconsEnabled");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss6');\" onmouseover=\"ShowHelp('rss6', '";
        // line 1560
        echo getLang("RSSSyndicationIconsEnabled");
        echo "', '";
        echo getLang("RSSSyndicationIconsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss6\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"RSSItemsLimit\">";
        // line 1567
        echo getLang("RSSItemsLimit");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"RSSItemsLimit\" id=\"RSSItemsLimit\" value=\"";
        // line 1570
        echo twig_safe_filter((isset($context['RSSItemsLimit']) ? $context['RSSItemsLimit'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss7');\" onmouseover=\"ShowHelp('rss7', '";
        // line 1571
        echo getLang("RSSItemsLimit");
        echo "', '";
        echo getLang("RSSItemsLimitHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss7\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"RSSCacheTime\">";
        // line 1578
        echo getLang("RSSCacheTime");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"RSSCacheTime\" id=\"RSSCacheTime\" value=\"";
        // line 1581
        echo twig_safe_filter((isset($context['RSSCacheTime']) ? $context['RSSCacheTime'] : null));
        echo "\" class=\"Field40\" />";
        echo getLang("RSSMinutes");
        echo "\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('rss8');\" onmouseover=\"ShowHelp('rss8', '";
        // line 1582
        echo getLang("RSSCacheTime");
        echo "', '";
        echo getLang("RSSCacheTimeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"rss8\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div3\" style=\"padding-top: 10px;  display: ";
        // line 1590
        echo twig_safe_filter((isset($context['HideBackupSettings']) ? $context['HideBackupSettings'] : null));
        echo "\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1593
        echo getLang("BackupSettings");
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsLocal\">";
        // line 1598
        echo getLang("EnableLocalBackups");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BackupsLocal\" id=\"BackupsLocal\" onclick=\"ToggleLocalBackups();\" value=\"ON\" ";
        // line 1601
        echo twig_safe_filter((isset($context['IsBackupsLocalEnabled']) ? $context['IsBackupsLocalEnabled'] : null));
        echo " /> <label for=\"BackupsLocal\">";
        echo getLang("YesEnableLocalBackups");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups1');\" onmouseover=\"ShowHelp('backups1', '";
        // line 1602
        echo getLang("EnableLocalBackups");
        echo "', '";
        echo getLang("EnableLocalBackupsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr id=\"BackupsRemoteFTPContainer\" style=\"display: %%FTPBackupsHide%%\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsRemoteFTP\">";
        // line 1609
        echo getLang("EnableRemoteFTPBackups");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BackupsRemoteFTP\" id=\"BackupsRemoteFTP\" onclick=\"ToggleFTPBackups();\" value=\"ON\" ";
        // line 1612
        echo twig_safe_filter((isset($context['IsBackupsRemoteFTPEnabled']) ? $context['IsBackupsRemoteFTPEnabled'] : null));
        echo " /> <label for=\"BackupsRemoteFTP\">";
        echo getLang("YesEnableRemoteFTPBackups");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups2');\" onmouseover=\"ShowHelp('backups2', '";
        // line 1613
        echo getLang("EnableRemoteFTPBackups");
        echo "', '";
        echo getLang("EnableRemoteFTPBackupsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr id=\"BackupsRemoteFTPSettings\" style=\"display: none;\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1619
        echo getLang("FTPServerDetails");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><span class=\"Required\">*</span> ";
        // line 1624
        echo getLang("FTPHostName");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"BackupsRemoteFTPHost\" id=\"BackupsRemoteFTPHost\" value=\"";
        // line 1626
        echo twig_safe_filter((isset($context['BackupsRemoteFTPHost']) ? $context['BackupsRemoteFTPHost'] : null));
        echo "\" class=\"Field150\" />
\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups3');\" onmouseover=\"ShowHelp('backups3', '";
        // line 1627
        echo getLang("FTPServerDetails");
        echo "', '";
        echo getLang("FTPServerDetailsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups3\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><span class=\"Required\">*</span> ";
        // line 1632
        echo getLang("FTPUsername");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"BackupsRemoteFTPUser\" id=\"BackupsRemoteFTPUser\" value=\"";
        // line 1633
        echo twig_safe_filter((isset($context['BackupsRemoteFTPUser']) ? $context['BackupsRemoteFTPUser'] : null));
        echo "\" class=\"Field150\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><span class=\"Required\">*</span> ";
        // line 1636
        echo getLang("FTPPassword");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"password\" autocomplete=\"off\" name=\"BackupsRemoteFTPPass\" id=\"BackupsRemoteFTPPass\" value=\"";
        // line 1637
        echo twig_safe_filter((isset($context['BackupsRemoteFTPPass']) ? $context['BackupsRemoteFTPPass'] : null));
        echo "\" class=\"Field150\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>&nbsp;&nbsp; ";
        // line 1640
        echo getLang("FTPPath");
        echo ":</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"BackupsRemoteFTPPath\" id=\"BackupsRemoteFTPPath\" value=\"";
        // line 1641
        echo twig_safe_filter((isset($context['BackupsRemoteFTPPath']) ? $context['BackupsRemoteFTPPath'] : null));
        echo "\" class=\"Field150\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t<td><input type=\"button\" value=\"";
        // line 1645
        echo getLang("TestFTPSettings");
        echo "\" class=\"SmallButton\" onclick=\"DoTestFTPSettings()\" id=\"TestFTPSettings\" /> &nbsp;&nbsp;<img src=\"images/ajax-loader.gif\" style=\"vertical-align: middle; display: none;\" id=\"TestFTPSettingsLoading\" alt=\"\" />
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"2\" class=\"EmptyRow\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1656
        echo getLang("AutomaticBackups");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsAutomatic\">";
        // line 1660
        echo getLang("EnableAutomaticBackups");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"BackupsAutomatic\" id=\"BackupsAutomatic\" onclick=\"ToggleAutomaticBackups();\" value=\"ON\" ";
        // line 1663
        echo twig_safe_filter((isset($context['IsBackupsAutomaticEnabled']) ? $context['IsBackupsAutomaticEnabled'] : null));
        echo " /> <label for=\"BackupsAutomatic\">";
        echo getLang("YesEnableAutomaticBackups");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups4');\" onmouseover=\"ShowHelp('backups4', '";
        // line 1664
        echo getLang("EnableAutomaticBackups");
        echo "', '";
        echo getLang("EnableAutomaticBackupsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups4\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"BackupsAutomaticContainer\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsAutomaticPath\">";
        // line 1670
        echo getLang("BackupCronPath");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" class=\"Field250\" name=\"BackupsAutomaticPath\" id=\"BackupsAutomaticPath\" value=\"";
        // line 1673
        echo twig_safe_filter((isset($context['BackupsAutomaticPath']) ? $context['BackupsAutomaticPath'] : null));
        echo "\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups6');\" onmouseover=\"ShowHelp('backups6', '";
        // line 1674
        echo getLang("BackupCronPath");
        echo "', '";
        echo getLang("BackupCronPathHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups6\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"BackupsAutomaticContainer\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsAutomaticMethod\">";
        // line 1680
        echo getLang("AutomaticBackupMethod");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"BackupsAutomaticMethod\" id=\"BackupsAutomaticMethod\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"local\" ";
        // line 1684
        echo twig_safe_filter((isset($context['IsBackupsAutomaticMethodLocal']) ? $context['IsBackupsAutomaticMethodLocal'] : null));
        echo " id=\"BackupsAutomaticLocal\">";
        echo getLang("AutomaticBackupLocal");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ftp\" ";
        // line 1685
        echo twig_safe_filter((isset($context['IsBackupsAutomaticMethodFTP']) ? $context['IsBackupsAutomaticMethodFTP'] : null));
        echo " id=\"BackupsAutomaticFTP\">";
        echo getLang("AutomaticBackupRemoteFTP");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('backups5');\" onmouseover=\"ShowHelp('backups5', '";
        // line 1687
        echo getLang("AutomaticBackupMethod");
        echo "', '";
        echo getLang("AutomaticBackupMethodHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"backups5\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"BackupsAutomaticContainer\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1693
        echo getLang("BackupSettings");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"BackupsAutomaticDatabase\" id=\"BackupsAutomaticDatabase\" value=\"ON\" ";
        // line 1696
        echo twig_safe_filter((isset($context['IsBackupsAutomaticDatabaseEnabled']) ? $context['IsBackupsAutomaticDatabaseEnabled'] : null));
        echo " /> ";
        echo getLang("SettingsBackupDatabase");
        echo "</label><br />
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"BackupsAutomaticImages\" id=\"BackupsAutomaticImages\" value=\"ON\" ";
        // line 1697
        echo twig_safe_filter((isset($context['IsBackupsAutomaticImagesEnabled']) ? $context['IsBackupsAutomaticImagesEnabled'] : null));
        echo " /> ";
        echo getLang("SettingsBackupProductImages");
        echo "</label><br />
\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"BackupsAutomaticDownloads\" id=\"BackupsAutomaticDownloads\" value=\"ON\" ";
        // line 1698
        echo twig_safe_filter((isset($context['IsBackupsAutomaticDownloadsEnabled']) ? $context['IsBackupsAutomaticDownloadsEnabled'] : null));
        echo " /> ";
        echo getLang("SettingsBackupDigitalProducts");
        echo "</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div4\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1707
        echo getLang("SearchSettings");
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchOptimisation\">";
        // line 1712
        echo getLang("SearchOptimisation");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchOptimisation\" id=\"SearchOptimisation\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1716
        echo twig_safe_filter((isset($context['SearchOptimisationOptions']) ? $context['SearchOptimisationOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search8');\" onmouseover=\"ShowHelp('search8', '";
        // line 1718
        echo getLang("SearchOptimisation");
        echo "', '";
        echo getLang("SearchOptimisationHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search8\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchDefaultProductSort\">";
        // line 1724
        echo getLang("SearchDefaultProductSort");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchDefaultProductSort\" id=\"SearchDefaultProductSort\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1728
        echo twig_safe_filter((isset($context['SearchDefaultProductSortOptions']) ? $context['SearchDefaultProductSortOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search1');\" onmouseover=\"ShowHelp('search1', '";
        // line 1730
        echo getLang("SearchDefaultProductSort");
        echo "', '";
        echo getLang("SearchDefaultProductSortHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchDefaultContentSort\">";
        // line 1736
        echo getLang("SearchDefaultContentSort");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchDefaultContentSort\" id=\"SearchDefaultContentSort\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1740
        echo twig_safe_filter((isset($context['SearchDefaultContentSortOptions']) ? $context['SearchDefaultContentSortOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search2');\" onmouseover=\"ShowHelp('search2', '";
        // line 1742
        echo getLang("SearchDefaultContentSort");
        echo "', '";
        echo getLang("SearchDefaultContentSortHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchProductDisplayMode\">";
        // line 1748
        echo getLang("SearchProductDisplayMode");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"SearchProductDisplayMode\" id=\"SearchProductDisplayMode\" class=\"Field200\">
\t\t\t\t\t\t\t\t";
        // line 1752
        echo twig_safe_filter((isset($context['SearchProductDisplayModeOptions']) ? $context['SearchProductDisplayModeOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search6');\" onmouseover=\"ShowHelp('search6', '";
        // line 1754
        echo getLang("SearchProductDisplayMode");
        echo "', '";
        echo getLang("SearchProductDisplayModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search6\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SearchResultsPerPage\">";
        // line 1760
        echo getLang("SearchResultsPerPage");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"SearchResultsPerPage\" id=\"SearchResultsPerPage\" value=\"";
        // line 1763
        echo twig_safe_filter((isset($context['SearchResultsPerPage']) ? $context['SearchResultsPerPage'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('search7');\" onmouseover=\"ShowHelp('search7', '";
        // line 1764
        echo getLang("SearchResultsPerPage");
        echo "', '";
        echo getLang("SearchResultsPerPageHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"search7\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div5\" style=\"padding-top: 10px; ";
        // line 1771
        echo twig_safe_filter((isset($context['HideLoggingSettingsTab']) ? $context['HideLoggingSettingsTab'] : null));
        echo "\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1774
        echo getLang("SystemLogging");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1778
        echo getLang("EnableSystemLogging");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"EnableSystemLogging\"><input ";
        // line 1781
        echo twig_safe_filter((isset($context['IsSystemLoggingEnabled']) ? $context['IsSystemLoggingEnabled'] : null));
        echo " type=\"checkbox\" name=\"SystemLogging\" id=\"EnableSystemLogging\" value=\"ON\" onclick=\"ToggleSystemLogging()\" />";
        echo getLang("YesEnableSystemLogging");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging1');\" onmouseover=\"ShowHelp('logging1', '";
        // line 1782
        echo getLang("EnableSystemLogging");
        echo "?', '";
        echo getLang("EnableSystemLoggingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SystemLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1788
        echo getLang("ActionsToLog");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 28px\">
\t\t\t\t\t\t\t<select name=\"SystemLogTypes[]\" id=\"SystemLogTypes\" multiple=\"multiple\" size=\"10\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t<option value=\"general\" ";
        // line 1792
        echo twig_safe_filter((isset($context['IsGeneralLoggingEnabled']) ? $context['IsGeneralLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogGeneral");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"payment\" ";
        // line 1793
        echo twig_safe_filter((isset($context['IsPaymentLoggingEnabled']) ? $context['IsPaymentLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogPayment");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"shipping\" ";
        // line 1794
        echo twig_safe_filter((isset($context['IsShippingLoggingEnabled']) ? $context['IsShippingLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogShipping");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"notification\" ";
        // line 1795
        echo twig_safe_filter((isset($context['IsNotificationLoggingEnabled']) ? $context['IsNotificationLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogNotification");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"sql\" ";
        // line 1796
        echo twig_safe_filter((isset($context['IsSQLLoggingEnabled']) ? $context['IsSQLLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogSQL");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"php\" ";
        // line 1797
        echo twig_safe_filter((isset($context['IsPHPLoggingEnabled']) ? $context['IsPHPLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogPHP");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"accounting\" ";
        // line 1798
        echo twig_safe_filter((isset($context['IsAccountingLoggingEnabled']) ? $context['IsAccountingLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogAccounting");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"emailintegration\" ";
        // line 1799
        echo twig_safe_filter((isset($context['IsEmailIntegrationLoggingEnabled']) ? $context['IsEmailIntegrationLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogEmailIntegration");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"ebay\" ";
        // line 1800
        echo twig_safe_filter((isset($context['IsEbayLoggingEnabled']) ? $context['IsEbayLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogEbay");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"shoppingcomparison\" ";
        // line 1801
        echo twig_safe_filter((isset($context['IsShoppingComparisonLoggingEnabled']) ? $context['IsShoppingComparisonLoggingEnabled'] : null));
        echo ">";
        echo getLang("ActionsToLogShoppingComparison");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SystemLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1807
        echo getLang("TypesOfMessages");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 28px\">
\t\t\t\t\t\t\t<select name=\"SystemLogSeverity[]\" id=\"SystemLogSeverity\" multiple=\"multiple\" size=\"7\" class=\"Field250 ISSelectReplacement\">
\t\t\t\t\t\t\t\t<option value=\"errors\" ";
        // line 1811
        echo twig_safe_filter((isset($context['IsLoggingSeverityErrors']) ? $context['IsLoggingSeverityErrors'] : null));
        echo ">";
        echo getLang("TypesOfMessagesErrors");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"warnings\" ";
        // line 1812
        echo twig_safe_filter((isset($context['IsLoggingSeverityWarnings']) ? $context['IsLoggingSeverityWarnings'] : null));
        echo ">";
        echo getLang("TypesOfMessagesWarnings");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"success\" ";
        // line 1813
        echo twig_safe_filter((isset($context['IsLoggingSeveritySuccesses']) ? $context['IsLoggingSeveritySuccesses'] : null));
        echo ">";
        echo getLang("TypesOfMessagesSuccesses");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"notices\" ";
        // line 1814
        echo twig_safe_filter((isset($context['IsLoggingSeverityNotices']) ? $context['IsLoggingSeverityNotices'] : null));
        echo ">";
        echo getLang("TypesOfMessagesNotices");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"debug\" ";
        // line 1815
        echo twig_safe_filter((isset($context['IsLoggingSeverityDebug']) ? $context['IsLoggingSeverityDebug'] : null));
        echo ">";
        echo getLang("TypesOfMessagesDebug");
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"SystemLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"SystemLogMaxLength\">";
        // line 1821
        echo getLang("RestrictLogTo");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding-left: 28px\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"SystemLogMaxLength\" id=\"SystemLogMaxLength\" value=\"";
        // line 1824
        echo twig_safe_filter((isset($context['SystemLogMaxLength']) ? $context['SystemLogMaxLength'] : null));
        echo "\" class=\"Field40\" /> ";
        echo getLang("MostRecentEntries");
        echo "\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging2');\" onmouseover=\"ShowHelp('logging2', '";
        // line 1825
        echo getLang("RestrictLogTo");
        echo "', '";
        echo getLang("RestrictLogToHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1831
        echo getLang("HidePHPErrors");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"HidePHPErrors\"><input ";
        // line 1834
        echo twig_safe_filter((isset($context['IsHidePHPErrorsEnabled']) ? $context['IsHidePHPErrorsEnabled'] : null));
        echo " type=\"checkbox\" name=\"HidePHPErrors\" id=\"HidePHPErrors\" value=\"1\" />";
        echo getLang("YesHidePHPErrors");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging22');\" onmouseover=\"ShowHelp('logging22', '";
        // line 1835
        echo getLang("HidePHPErrors");
        echo "?', '";
        echo getLang("HidePHPErrorsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging22\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1841
        echo getLang("EnableDebugMode");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"DebugMode\"><input ";
        // line 1844
        echo twig_safe_filter((isset($context['IsDebugModeEnabled']) ? $context['IsDebugModeEnabled'] : null));
        echo " type=\"checkbox\" name=\"DebugMode\" id=\"DebugMode\" value=\"1\" />";
        echo getLang("YesEnableDebugMode");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging23');\" onmouseover=\"ShowHelp('logging23', '";
        // line 1845
        echo getLang("EnableDebugMode");
        echo "?', '";
        echo getLang("EnableDebugModeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging23\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table width=\"100%\" class=\"Panel\" style=\"display: ";
        // line 1851
        echo twig_safe_filter((isset($context['HideStaffLogs']) ? $context['HideStaffLogs'] : null));
        echo "\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1853
        echo getLang("AdministratorLogging");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1857
        echo getLang("EnableAdministratorLogging");
        echo "?
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label style=\"padding-left: 4px;\" for=\"EnableAdministratorLogging\"><input ";
        // line 1860
        echo twig_safe_filter((isset($context['IsAdministratorLoggingEnabled']) ? $context['IsAdministratorLoggingEnabled'] : null));
        echo " type=\"checkbox\" name=\"AdministratorLogging\" id=\"EnableAdministratorLogging\" value=\"ON\" onclick=\"ToggleAdministratorLogging()\" /> ";
        echo getLang("YesEnableAdministratorLogging");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('logging3');\" onmouseover=\"ShowHelp('logging3', '";
        // line 1861
        echo getLang("EnableAdministratorLogging");
        echo "?', '";
        echo getLang("EnableAdministratorLoggingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"logging3\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"AdministratorLoggingToggle\">
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"AdministratorLogMaxLength\">";
        // line 1867
        echo getLang("RestrictLogTo");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span style=\"padding-left: 28px;\"><input type=\"text\" name=\"AdministratorLogMaxLength\" id=\"AdministratorLogMaxLength\" value=\"";
        // line 1870
        echo twig_safe_filter((isset($context['AdministratorLogMaxLength']) ? $context['AdministratorLogMaxLength'] : null));
        echo "\" class=\"Field40\" /> ";
        echo getLang("MostRecentEntries");
        echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('RestrictLogHelp');\" onmouseover=\"ShowHelp('RestrictLogHelp', '";
        // line 1872
        echo getLang("RestrictLogTo");
        echo "', '";
        echo getLang("RestrictLogToHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"RestrictLogHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>

\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div6\" style=\"padding-top: 10px; display: none\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1883
        echo getLang("VendorSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1887
        echo getLang("VendorLogoUploading");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"VendorLogoUploading\" id=\"VendorLogoUploading\" value=\"1\" ";
        // line 1891
        echo twig_safe_filter((isset($context['VendorLogoUploadingChecked']) ? $context['VendorLogoUploadingChecked'] : null));
        echo " onclick=\"\$(this).parent().siblings('.CheckToggle').toggle();\" /> ";
        echo getLang("YesAllowVendorLogoUploading");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('VendorLogoUploadingHelp');\" onmouseover=\"ShowHelp('VendorLogoUploadingHelp', '";
        // line 1893
        echo getLang("VendorLogoUploading");
        echo "', '";
        echo getLang("VendorLogoUploadingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"VendorLogoUploadingHelp\"></div>
\t\t\t\t\t\t\t<div style=\"";
        // line 1895
        echo twig_safe_filter((isset($context['HideVendorLogoUploading']) ? $context['HideVendorLogoUploading'] : null));
        echo "\" class=\"CheckToggle\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" />
\t\t\t\t\t\t\t\t";
        // line 1897
        echo getLang("MaximumImageDimensions");
        echo ":
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorLogoSizeW\" id=\"VendorLogoSizeW\" value=\"";
        // line 1898
        echo twig_safe_filter((isset($context['VendorLogoSizeW']) ? $context['VendorLogoSizeW'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t\tx
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorLogoSizeH\" id=\"VendorLogoSizeH\" value=\"";
        // line 1900
        echo twig_safe_filter((isset($context['VendorLogoSizeH']) ? $context['VendorLogoSizeH'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\" style=\"vertical-align: top\">
\t\t\t\t\t\t\t&nbsp;&nbsp; ";
        // line 1906
        echo getLang("VendorPhotoUploading");
        echo ":
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"VendorPhotoUploading\" id=\"VendorPhotoUploading\" value=\"1\" ";
        // line 1910
        echo twig_safe_filter((isset($context['VendorPhotoUploadingChecked']) ? $context['VendorPhotoUploadingChecked'] : null));
        echo " onclick=\"\$(this).parent().siblings('.CheckToggle').toggle();\" /> ";
        echo getLang("YesAllowVendorPhotoUploading");
        echo "\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('VendorPhotoUploadingHelp');\" onmouseover=\"ShowHelp('VendorPhotoUploadingHelp', '";
        // line 1912
        echo getLang("VendorPhotoUploading");
        echo "', '";
        echo getLang("VendorPhotoUploadingHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"VendorPhotoUploadingHelp\"></div>
\t\t\t\t\t\t\t<div style=\"";
        // line 1914
        echo twig_safe_filter((isset($context['HideVendorPhotoUploading']) ? $context['HideVendorPhotoUploading'] : null));
        echo "\" class=\"CheckToggle\">
\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" />
\t\t\t\t\t\t\t\t";
        // line 1916
        echo getLang("MaximumImageDimensions");
        echo ":
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorPhotoSizeW\" id=\"VendorPhotoSizeW\" value=\"";
        // line 1917
        echo twig_safe_filter((isset($context['VendorPhotoSizeW']) ? $context['VendorPhotoSizeW'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t\tx
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"VendorPhotoSizeH\" id=\"VendorPhotoSizeH\" value=\"";
        // line 1919
        echo twig_safe_filter((isset($context['VendorPhotoSizeH']) ? $context['VendorPhotoSizeH'] : null));
        echo "\" class=\"Field40\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div id=\"div7\" style=\"padding-top: 10px;\">
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1929
        echo getLang("CustomerGroupsSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"GuestCustomerGroup\">";
        // line 1933
        echo getLang("GuestCustomerGroup");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"GuestCustomerGroup\" id=\"GuestCustomerGroup\" size=\"5\" class=\"Field250\">
\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1937
        echo getLang("GuestCustomerGroupNone");
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 1938
        echo twig_safe_filter((isset($context['CustomerGroupOptions']) ? $context['CustomerGroupOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('GuestCustomerGroupHelp');\" onmouseover=\"ShowHelp('GuestCustomerGroupHelp', '";
        // line 1940
        echo getLang("GuestCustomerGroup");
        echo "', '";
        echo getLang("GuestCustomerGroupHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"GuestCustomerGroupHelp\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1948
        echo getLang("GoogleMapsSettings");
        echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;&nbsp; <label for=\"BackupsLocal\">";
        // line 1953
        echo getLang("GoogleMapsAPIKey");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"GoogleMapsAPIKey\" id=\"GoogleMapsAPIKey\" value=\"";
        // line 1956
        echo twig_safe_filter((isset($context['GoogleMapsAPIKey']) ? $context['GoogleMapsAPIKey'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('gmapapikey');\" onmouseover=\"ShowHelp('gmapapikey', '";
        // line 1957
        echo getLang("GoogleMapsAPIKey");
        echo "', '";
        echo getLang("GoogleMapsAPIKeyHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"gmapapikey\"></div>
\t\t\t\t\t\t\t<div style=\"padding-top:2px\">
\t\t\t\t\t\t\t\t<a href=\"http://www.google.com/apis/maps/signup.html\" target=\"_blank\" style=\"color:gray\">";
        // line 1960
        echo getLang("GoogleMapsAPILinkText");
        echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\" style=\"";
        // line 1966
        echo twig_safe_filter((isset($context['HideProxyFields']) ? $context['HideProxyFields'] : null));
        echo "\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 1968
        echo getLang("HTTPProxySettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"HTTPProxyServer\">";
        // line 1972
        echo getLang("HTTPProxyServer");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HTTPProxyServer\" id=\"HTTPProxyServer\" value=\"";
        // line 1975
        echo twig_safe_filter((isset($context['HTTPProxyServer']) ? $context['HTTPProxyServer'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hp1');\" onmouseover=\"ShowHelp('hp1', '";
        // line 1976
        echo getLang("HTTPProxyServer");
        echo "', '";
        echo getLang("HTTPProxyServerHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hp1\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"HTTPProxyPort\">";
        // line 1982
        echo getLang("HTTPProxyPort");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"text\" name=\"HTTPProxyPort\" id=\"HTTPProxyPort\" value=\"";
        // line 1985
        echo twig_safe_filter((isset($context['HTTPProxyPort']) ? $context['HTTPProxyPort'] : null));
        echo "\" class=\"Field250\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hp2');\" onmouseover=\"ShowHelp('hp2', '";
        // line 1986
        echo getLang("HTTPProxyPort");
        echo "', '";
        echo getLang("HTTPProxyPortHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hp2\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"HTTPSSLVerifyPeer\">";
        // line 1992
        echo getLang("HTTPSSLVerifyPeer");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t<input ";
        // line 1995
        echo twig_safe_filter((isset($context['IsHTTPSSLVerifyPeerEnabled']) ? $context['IsHTTPSSLVerifyPeerEnabled'] : null));
        echo " type=\"checkbox\" name=\"HTTPSSLVerifyPeer\" id=\"HTTPSSLVerifyPeer\" value=\"ON\" /> <label for=\"HTTPSSLVerifyPeer\">";
        echo getLang("YesHTTPSSLVerifyPeer");
        echo "</label>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hp3');\" onmouseover=\"ShowHelp('hp3', '";
        // line 1996
        echo getLang("HTTPSSLVerifyPeer");
        echo "', '";
        echo getLang("HTTPSSLVerifyPeerHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hp3\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 2004
        echo getLang("OrderSettings");
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 2006
        if ((!$this->getAttribute((isset($context['ISC_CFG']) ? $context['ISC_CFG'] : null), "HideDeletedOrdersActionSetting", array(), "any"))) {
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<span class=\"Required\">*</span> <label for=\"DeletedOrdersAction\">";
            // line 2009
            echo getLang("DeletedOrders");
            echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"DeletedOrdersAction\" value=\"delete\" ";
            // line 2012
            if ((isset($context['DeletedOrdersAction']) ? $context['DeletedOrdersAction'] : null) == "delete") {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo getLang("DeletedOrdersAction_Delete");
            echo "</label> <img onmouseout=\"HideHelp('DeletedOrdersActionHelp');\" onmouseover=\"ShowHelp('DeletedOrdersActionHelp', '";
            echo Interspire_Template_Extension::jsFilter(getLang("DeletedOrders"), "'");
            echo "', '";
            echo Interspire_Template_Extension::jsFilter(getLang("DeletedOrdersActionHelp"), "'");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" /><div style=\"display:none\" id=\"DeletedOrdersActionHelp\"></div><br />
\t\t\t\t\t\t\t\t<label><input type=\"radio\" name=\"DeletedOrdersAction\" value=\"purge\" ";
            // line 2013
            if ((isset($context['DeletedOrdersAction']) ? $context['DeletedOrdersAction'] : null) == "purge") {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo getLang("DeletedOrdersAction_Purge");
            echo "</label><br />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 2016
        echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"StartingOrderNumber\">";
        // line 2019
        echo getLang("StartingOrderNumber");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"StartingOrderNumber\" name=\"StartingOrderNumber\" value=\"";
        // line 2022
        echo twig_safe_filter((isset($context['StartingOrderNumber']) ? $context['StartingOrderNumber'] : null));
        echo "\" type=\"text\" class=\"Field70\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hStartingOrderNumber');\" onmouseover=\"ShowHelp('hStartingOrderNumber', '";
        // line 2023
        echo getLang("StartingOrderNumber");
        echo "', '";
        echo getLang("StartingOrderNumberHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hStartingOrderNumber\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<span class=\"Required\">&nbsp;</span> <label for=\"AbandonOrderLifetime\">";
        // line 2029
        echo getLang("AbandonOrderLifetime");
        echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<select name=\"AbandonOrderLifetime\" id=\"AbandonOrderLifetime\" class=\"Field70\">
\t\t\t\t\t\t\t\t";
        // line 2033
        echo twig_safe_filter((isset($context['AbandonOrderLifetimeOptions']) ? $context['AbandonOrderLifetimeOptions'] : null));
        echo "
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hAbandonOrder');\" onmouseover=\"ShowHelp('hAbandonOrder', '";
        // line 2035
        echo getLang("AbandonOrderLifetime");
        echo "', '";
        echo getLang("AbandonOrderLifetimeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hAbandonOrder\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t";
        // line 2040
        if ((isset($context['ShowPCISettings']) ? $context['ShowPCISettings'] : null)) {
            echo "\t\t\t\t<br />
\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
            // line 2044
            echo getLang("PCISettingsPanel");
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCIPasswordMinLen\">";
            // line 2048
            echo getLang("PCIPasswordMinLen");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCIPasswordMinLen\" name=\"PCIPasswordMinLen\" value=\"";
            // line 2051
            echo twig_safe_filter((isset($context['PCIPasswordMinLen']) ? $context['PCIPasswordMinLen'] : null));
            echo "\" type=\"text\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCIPasswordMinLen');\" onmouseover=\"ShowHelp('hPCIPasswordMinLen', '";
            // line 2052
            echo getLang("PCIPasswordMinLen");
            echo "', '";
            echo getLang("PCIPasswordMinLenHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCIPasswordMinLen\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCIPasswordHistoryCount\">";
            // line 2058
            echo getLang("PCIPasswordHistoryCount");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCIPasswordHistoryCount\" name=\"PCIPasswordHistoryCount\" value=\"";
            // line 2061
            echo twig_safe_filter((isset($context['PCIPasswordHistoryCount']) ? $context['PCIPasswordHistoryCount'] : null));
            echo "\" type=\"text\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCIPasswordHistoryCount');\" onmouseover=\"ShowHelp('hPCIPasswordHistoryCount', '";
            // line 2062
            echo getLang("PCIPasswordHistoryCount");
            echo "', '";
            echo getLang("PCIPasswordHistoryCountHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCIPasswordHistoryCount\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCIPasswordExpiryTimeDay\">";
            // line 2068
            echo getLang("PCIPasswordExpiryTimeDay");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCIPasswordExpiryTimeDay\" name=\"PCIPasswordExpiryTimeDay\" value=\"";
            // line 2071
            echo twig_safe_filter((isset($context['PCIPasswordExpiryTimeDay']) ? $context['PCIPasswordExpiryTimeDay'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> days
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCIPasswordExpiryTimeDay');\" onmouseover=\"ShowHelp('hPCIPasswordExpiryTimeDay', '";
            // line 2072
            echo getLang("PCIPasswordExpiryTimeDay");
            echo "', '";
            echo getLang("PCIPasswordExpiryTimeDayHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCIPasswordExpiryTimeDay\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginAttemptCount\">";
            // line 2078
            echo getLang("PCILoginAttemptCount");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginAttemptCount\" name=\"PCILoginAttemptCount\" value=\"";
            // line 2081
            echo twig_safe_filter((isset($context['PCILoginAttemptCount']) ? $context['PCILoginAttemptCount'] : null));
            echo "\" type=\"text\" class=\"Field40\" />
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCILoginAttemptCount');\" onmouseover=\"ShowHelp('hPCILoginAttemptCount', '";
            // line 2082
            echo getLang("PCILoginAttemptCount");
            echo "', '";
            echo getLang("PCILoginAttemptCountHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCILoginAttemptCount\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginLockoutTimeMin\">";
            // line 2088
            echo getLang("PCILoginLockoutTimeMin");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginLockoutTimeMin\" name=\"PCILoginLockoutTimeMin\" value=\"";
            // line 2091
            echo twig_safe_filter((isset($context['PCILoginLockoutTimeMin']) ? $context['PCILoginLockoutTimeMin'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> minutes
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginIdleTimeMin\">";
            // line 2096
            echo getLang("PCILoginIdleTimeMin");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginIdleTimeMin\" name=\"PCILoginIdleTimeMin\" value=\"";
            // line 2099
            echo twig_safe_filter((isset($context['PCILoginIdleTimeMin']) ? $context['PCILoginIdleTimeMin'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> minutes
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCILoginIdleTimeMin');\" onmouseover=\"ShowHelp('hPCILoginIdleTimeMin', '";
            // line 2100
            echo getLang("PCILoginIdleTimeMin");
            echo "', '";
            echo getLang("PCILoginIdleTimeMinHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCILoginIdleTimeMin\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t<label for=\"PCILoginInactiveTimeDay\">";
            // line 2106
            echo getLang("PCILoginInactiveTimeDay");
            echo ":</label>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input id=\"PCILoginInactiveTimeDay\" name=\"PCILoginInactiveTimeDay\" value=\"";
            // line 2109
            echo twig_safe_filter((isset($context['PCILoginInactiveTimeDay']) ? $context['PCILoginInactiveTimeDay'] : null));
            echo "\" type=\"text\" class=\"Field40\" /> days
\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('hPCILoginInactiveTimeDay');\" onmouseover=\"ShowHelp('hPCILoginInactiveTimeDay', '";
            // line 2110
            echo getLang("PCILoginInactiveTimeDay");
            echo "', '";
            echo getLang("PCILoginInactiveTimeDayHelp");
            echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t<div style=\"display:none\" id=\"hPCILoginInactiveTimeDay\"></div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 2115
        echo "\t\t\t</div>

\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\">
\t\t\t\t<tr>
\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"submit\" disabled=\"disabled\" value=\"";
        // line 2124
        echo getLang("Save");
        echo "\" class=\"FormButton\" />
\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 2125
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>

\t</tr>
\t</table>
\t</div>
\t</form>
\t<div id=\"stmpTestModal\" style=\"display: none;\">
\t\t<div class=\"ModalTitle\">";
        // line 2135
        echo getLang("TestSMTPSettings");
        echo "</div>
\t\t<div class=\"ModalContent\" style=\"padding:5px;\">
\t\t\t<div>
\t\t\t\t<div style=\"width: 208px; padding: 0px; margin: 10px auto 10px auto; position: relative; background: url('images/loadingAnimation.gif') no-repeat;\">
\t\t\t\t\t<div id=\"ProgressBarPercentage\" style=\"margin: 0; padding: 0; height: 13px; width: 0%; background: url('images/progressbar.gif') no-repeat; background-color: transparent;\">
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div style=\"text-align: center; height: 20px;\" id=\"ProgressNote\">";
        // line 2144
        echo getLang("TestSMTPSettingsNote");
        echo "</div>
\t\t</div>
\t</div>
<script type=\"text/javascript\" src=\"script/product.images.reprocess.js?";
        // line 2147
        echo twig_escape_filter($this->env, (isset($context['JSCacheToken']) ? $context['JSCacheToken'] : null), "1");
        echo "\"></script>
<script type=\"text/javascript\">

\tProcessProductImages.lang['ModalTitle'] = '";
        // line 2150
        echo getLang("ProcessImagesModalTitle");
        echo "';
\tProcessProductImages.lang['ProcessProgress'] = '";
        // line 2151
        echo getLang("ProcessImagesProgress");
        echo "';
\tProcessProductImages.lang['ProcessFinished'] = '";
        // line 2152
        echo getLang("ProcessImagesFinished");
        echo "';

\tlang['ProductImagesStorewideThumbnailWidthInvalidValue']\t= '";
        // line 2154
        echo getLang("ProductImagesStorewideThumbnailWidthInvalidValue");
        echo "';
\tlang['ProductImagesStorewideThumbnailHeightInvalidValue'] = '";
        // line 2155
        echo getLang("ProductImagesStorewideThumbnailHeightInvalidValue");
        echo "';
\tlang['ProductImagesProductPageImageWidthInvalidValue']\t= '";
        // line 2156
        echo getLang("ProductImagesProductPageImageWidthInvalidValue");
        echo "';
\tlang['ProductImagesProductPageImageHeightInvalidValue']\t= '";
        // line 2157
        echo getLang("ProductImagesProductPageImageHeightInvalidValue");
        echo "';
\tlang['ProductImagesGalleryThumbnailWidthInvalidValue']\t= '";
        // line 2158
        echo getLang("ProductImagesGalleryThumbnailWidthInvalidValue");
        echo "';
\tlang['ProductImagesGalleryThumbnailHeightInvalidValue']\t= '";
        // line 2159
        echo getLang("ProductImagesGalleryThumbnailHeightInvalidValue");
        echo "';
\tlang['ProductImagesZoomImageWidthInvalidValue']\t= '";
        // line 2160
        echo getLang("ProductImagesZoomImageWidthInvalidValue");
        echo "';
\tlang['ProductImagesZoomImageHeightInvalidValue']\t= '";
        // line 2161
        echo getLang("ProductImagesZoomImageHeightInvalidValue");
        echo "';

\t\$(document).ready(function() {
\t\t\$('#ReprocessImages').bind('click', ProcessProductImages.launch);
\t});

\tfunction ShowTab(T) {
\t\ti = 0;
\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\ti++;
\t\t}

\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\tdocument.getElementById(\"tab\" + T).className = \"active\";

\t\tdocument.getElementById(\"currentTab\").value = T;
\t}

\tfunction ToggleDefaultProductImage()
\t{
\t\tif(\$('.DefaultProductImage:checked').val() == 'custom') {
\t\t\t\$('#DefaultProductImageCustomContainer').show();
\t\t}
\t\telse {
\t\t\t\$('#DefaultProductImageCustomContainer').hide();
\t\t}
\t}

\tfunction ToggleSystemLogging() {
\t\tvar siblings = \$('.SystemLoggingToggle');
\t\tif(g('EnableSystemLogging').checked) {
\t\t\tsiblings.show();
\t\t}
\t\telse {
\t\t\tsiblings.hide();
\t\t}
\t}
\tToggleSystemLogging();

\tfunction ToggleAdministratorLogging() {
\t\tvar siblings = \$('.AdministratorLoggingToggle');
\t\tif(g('EnableAdministratorLogging').checked) {
\t\t\tsiblings.show();
\t\t}
\t\telse {
\t\t\tsiblings.hide();
\t\t}
\t}
\tToggleAdministratorLogging();

\tfunction ConfirmCancel()
\t{
\t\tif(confirm(\"";
        // line 2215
        echo getLang("ConfirmCancelSettings");
        echo "\"))
\t\t\tdocument.location.href = \"index.php?ToDo=viewSettings\";
\t}

\t\$('#frmSettings').submit(function() {
\t\tvar StoreName = g(\"StoreName\");
\t\tvar StoreAddress = g(\"StoreAddress\");
\t\tvar SSL = g(\"SSL\");
\t\tvar SharedSSL = g(\"UseSharedSSL\");
\t\tvar SharedSSLPath = g(\"SharedSSLPath\");
\t\tvar SubdomainSSL = g(\"UseSubdomainSSL\");
\t\tvar SubdomainSSLPath = g(\"SubdomainSSLPath\");
\t\tvar ShopPath = g(\"ShopPath\");
\t\tvar CharacterSet = g(\"CharacterSet\");
\t\tvar MetaKeywords = g(\"MetaKeywords\");
\t\tvar MetaDesc = g(\"MetaDesc\");
\t\tvar DownloadDirectory = g(\"DownloadDirectory\");
\t\tvar ImageDirectory = g(\"ImageDirectory\");
\t\tvar serverStamp = g(\"serverStamp\");
\t\tvar AdminEmail = g(\"AdminEmail\");
\t\tvar OrderEmail = g(\"OrderEmail\");
\t\tvar DefaultTaxRate = g(\"DefaultTaxRate\");
\t\tvar WeightMeasurement = g(\"WeightMeasurement\");
\t\tvar LengthMeasurement = g(\"LengthMeasurement\");
\t\tvar DisplayDateFormat = g(\"DisplayDateFormat\");
\t\tvar ExportDateFormat = g(\"ExportDateFormat\");
\t\tvar ExtendedDisplayDateFormat = g(\"ExtendedDisplayDateFormat\");
\t\tvar CategoryPerRow = g(\"CategoryPerRow\");
\t\tvar CategoryImageWidth = g(\"CategoryImageWidth\");
\t\tvar CategoryImageHeight = g(\"CategoryImageHeight\");
\t\tvar CategoryDefaultImage = g(\"CategoryDefaultImage\");
\t\tvar BrandPerRow = g(\"BrandPerRow\");
\t\tvar BrandImageWidth = g(\"BrandImageWidth\");
\t\tvar BrandImageHeight = g(\"BrandImageHeight\");
\t\tvar BrandDefaultImage = g(\"BrandDefaultImage\");
\t\tvar HomeFeaturedProducts = g(\"HomeFeaturedProducts\");
\t\tvar HomeNewProducts = g(\"HomeNewProducts\");
\t\tvar HomeBlogPosts = g(\"HomeBlogPosts\");
\t\tvar CategoryProductsPerPage = g(\"CategoryProductsPerPage\");
\t\tvar CategoryListDepth = g(\"CategoryListDepth\");
\t\tvar ProductReviewsPerPage = g(\"ProductReviewsPerPage\");
\t\tvar TagCartQuantityBoxes = g(\"TagCartQuantityBoxes\");
\t\tvar TagCloudsEnabled = g(\"TagCloudsEnabled\");
\t\tvar ShowAddToCartQtyBox = g(\"ShowAddToCartQtyBox\");
\t\tvar CaptchaEnabled = g(\"CaptchaEnabled\");
\t\tvar ShowThumbsInCart = g(\"ShowThumbsInCart\");
\t\tvar ShowCartSuggestions = g(\"ShowCartSuggestions\");
\t\tvar AutoApproveReviews = g(\"AutoApproveReviews\");
\t\tvar RSSItemsLimit = g(\"RSSItemsLimit\");
\t\tvar RSSCacheTime = g(\"RSSCacheTime\");
\t\tvar HighestOrderNumber = parseInt('";
        // line 2265
        echo twig_safe_filter((isset($context['HighestOrderNumber']) ? $context['HighestOrderNumber'] : null));
        echo "');

\t\tif(StoreName.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2269
        echo getLang("EnterStoreName");
        echo "\");
\t\t\tStoreName.focus();
\t\t\treturn false;
\t\t}

\t\tif(StoreAddress.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2276
        echo getLang("EnterStoreAddress");
        echo "\");
\t\t\tStoreAddress.focus();
\t\t\treturn false;
\t\t}

\t\tif (SharedSSL.checked) {
\t\t\tif (SharedSSLPath.value == \"\" | SharedSSLPath.value == \"http://\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 2284
        echo getLang("EnterSharedSSL");
        echo "\");
\t\t\t\tSharedSSLPath.focus();
\t\t\t\tSharedSSLPath.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\telse if (SubdomainSSL.checked) {
\t\t\tif (SubdomainSSLPath.value == \"\" | SubdomainSSLPath.value == \"http://\") {
\t\t\t\tShowTab(0);
\t\t\t\talert(\"";
        // line 2293
        echo getLang("EnterSubdomainSSL");
        echo "\");
\t\t\t\tSubdomainSSLPath.focus();
\t\t\t\tSubdomainSSLPath.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(!\$(\"#NoSSL\").is(':checked') && \$('#UseControlPanelSSL').is(':checked')) {
\t\t\tif(!checkSSLWorks()) {
\t\t\t\tif(!confirm('";
        // line 2302
        echo getLang("SSLNotWorking");
        echo "')) {
\t\t\t\t\tShowTab(0);
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif(ShopPath.value == \"\" || ShopPath.value == \"http://\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2311
        echo getLang("EnterShopPath");
        echo "\");
\t\t\tShopPath.focus();
\t\t\tShopPath.select();
\t\t\treturn false;
\t\t}

\t\tif('";
        // line 2317
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "' != \$('#CharacterSet').val()) {
\t\t\tvar confirmMsg = '";
        // line 2318
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmChangeCharacterSet"), "'");
        echo "';

\t\t\tif('";
        // line 2320
        echo twig_escape_filter($this->env, (isset($context['CharacterSet']) ? $context['CharacterSet'] : null), "1");
        echo "' == 'UTF-8') {
\t\t\t\tconfirmMsg = '";
        // line 2321
        echo Interspire_Template_Extension::jsFilter(getLang("ConfirmChangeCharacterSetUTF8"), "'");
        echo "';
\t\t\t}

\t\t\tif(!confirm(confirmMsg)) {
\t\t\t\tShowTab(0);
\t\t\t\t\$('#CharacterSet').focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(\$('#StartingOrderNumber').val() <= HighestOrderNumber) {
\t\t\tShowTab(7);
\t\t\tvar tooLowLang = '";
        // line 2333
        echo getLang("StartingOrderNumberTooLow");
        echo "';
\t\t\ttooLowLang = tooLowLang.replace(':currentHighest', HighestOrderNumber);
\t\t\ttooLowLang = tooLowLang.replace(':lowestPossible', (HighestOrderNumber+1));
\t\t\talert(tooLowLang);
\t\t\t\$('#StartingOrderNumber').focus();
\t\t\treturn false;
\t\t}

\t\tif(DownloadDirectory.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2343
        echo getLang("EnterDownloadDirectory");
        echo "\");
\t\t\tDownloadDirectory.focus();
\t\t\treturn false;
\t\t}

\t\tif(ImageDirectory.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2350
        echo getLang("EnterImageDirectory");
        echo "\");
\t\t\tImageDirectory.focus();
\t\t\treturn false;
\t\t}

\t\tif(serverStamp.value == \"\") {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2357
        echo getLang("EnterLicenseKey");
        echo "\");
\t\t\tserverStamp.focus();
\t\t\treturn false;
\t\t}

\t\tif(AdminEmail.value.indexOf(\"@\") == -1 || AdminEmail.value.indexOf(\".\") == -1) {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2364
        echo getLang("EnterValidAdminEmail");
        echo "\");
\t\t\tAdminEmail.focus();
\t\t\tAdminEmail.select();
\t\t\treturn false;
\t\t}

\t\tif (!ValidateSMTPSettings()) {
\t\t\treturn false;
\t\t} else {
\t\t\tif (smtpChecked == false) {
\t\t\t\tTestSMTPMailSettings(function() {
\t\t\t\t\t// submit again if test is successful
\t\t\t\t\t\$('#frmSettings').submit();
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(OrderEmail.value.indexOf(\"@\") == -1 || OrderEmail.value.indexOf(\".\") == -1) {
\t\t\tShowTab(0);
\t\t\talert(\"";
        // line 2384
        echo getLang("EnterValidOrderEmail");
        echo "\");
\t\t\tOrderEmail.focus();
\t\t\tOrderEmail.select();
\t\t\treturn false;
\t\t}

\t\tif(!\$('#DimensionsDecimalToken').val()) {
\t\t\talert('";
        // line 2391
        echo getLang("EnterDecimalToken");
        echo "');
\t\t\t\$('#DimensionsDecimalToken').focus();
\t\t\t\$('#DimensionsDecimalToken').select();
\t\t\treturn false;
\t\t}

\t\tif(!\$('#DimensionsThousandsToken').val()) {
\t\t\talert('";
        // line 2398
        echo getLang("EnterThousandsToken");
        echo "');
\t\t\t\$('#DimensionsThousandsToken').focus();
\t\t\t\$('#DimensionsThousandsToken').select();
\t\t\treturn false;
\t\t}

\t\tif(!\$('#DimensionsDecimalPlaces').val() || isNaN(\$('#DimensionsDecimalPlaces').val())) {
\t\t\talert('";
        // line 2405
        echo getLang("EnterDecimalPlaces");
        echo "');
\t\t\t\$('#DimensionsDecimalPlaces').focus();
\t\t\t\$('#DimensionsDecimalPlaces').select();
\t\t\treturn false;
\t\t}

\t\tif(DisplayDateFormat.value == \"\") {
\t\t\tShowTab(1);
\t\t\talert(\"";
        // line 2413
        echo getLang("EnterDisplayDateFormat");
        echo "\");
\t\t\tDisplayDateFormat.focus();
\t\t\treturn false;
\t\t}

\t\tif(ExportDateFormat.value == \"\") {
\t\t\tShowTab(1);
\t\t\talert(\"";
        // line 2420
        echo getLang("EnterExportDateFormat");
        echo "\");
\t\t\tExportDateFormat.focus();
\t\t\treturn false;
\t\t}

\t\tif(ExtendedDisplayDateFormat.value == \"\") {
\t\t\tShowTab(1);
\t\t\talert(\"";
        // line 2427
        echo getLang("EnterExtendedDisplayDateFormat");
        echo "\");
\t\t\tExtendedDisplayDateFormat.focus();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(HomeFeaturedProducts.value) || HomeFeaturedProducts.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2434
        echo getLang("EnterHomeFeaturedProducts");
        echo "\");
\t\t\tHomeFeaturedProducts.focus();
\t\t\tHomeFeaturedProducts.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(HomeNewProducts.value) || HomeNewProducts.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2442
        echo getLang("EnterHomeNewProducts");
        echo "\");
\t\t\tHomeNewProducts.focus();
\t\t\tHomeNewProducts.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(HomeBlogPosts.value) || HomeBlogPosts.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2450
        echo getLang("EnterHomeBlogPosts");
        echo "\");
\t\t\tHomeBlogPosts.focus();
\t\t\tHomeBlogPosts.select();
\t\t\treturn false;
\t\t}

\t\tif(\$('.DefaultProductImage:checked').val() == 'custom') {
\t\t\tif((\$('#DefaultProductImageCustomCurrent').css('display') == 'none' || \$('#DefaultProductImageCustom').val()) && !IsValidImageExtension(\$('#DefaultProductImageCustom').val())) {
\t\t\t\tShowTab(2);
\t\t\t\talert('";
        // line 2459
        echo getLang("ChooseDefaultProductImageUpload");
        echo "');
\t\t\t\t\$('#DefaultProductImageCustom').focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(isNaN(CategoryProductsPerPage.value) || CategoryProductsPerPage.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2467
        echo getLang("EnterCategoryProductsPerPage");
        echo "\");
\t\t\tCategoryProductsPerPage.focus();
\t\t\tCategoryProductsPerPage.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryListDepth.value) || CategoryListDepth.value == \"\" || CategoryListDepth.value<=0) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2475
        echo getLang("EnterCategoryListDepth");
        echo "\");
\t\t\tCategoryListDepth.focus();
\t\t\tCategoryListDepth.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(ProductReviewsPerPage.value) || ProductReviewsPerPage.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2483
        echo getLang("EnterProductReviewsPerPage");
        echo "\");
\t\t\tProductReviewsPerPage.focus();
\t\t\tProductReviewsPerPage.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryPerRow.value) || CategoryPerRow.value == \"\" || CategoryPerRow.value <= 0) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2491
        echo getLang("EnterCategoryPerRow");
        echo "\");
\t\t\tCategoryPerRow.focus();
\t\t\tCategoryPerRow.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(BrandPerRow.value) || BrandPerRow.value == \"\" || BrandPerRow.value <= 0) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2499
        echo getLang("EnterBrandPerRow");
        echo "\");
\t\t\tBrandPerRow.focus();
\t\t\tBrandPerRow.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryImageWidth.value) || CategoryImageWidth.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2507
        echo getLang("EnterCategoryImageWidth");
        echo "\");
\t\t\tCategoryImageWidth.focus();
\t\t\tCategoryImageWidth.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(CategoryImageHeight.value) || CategoryImageHeight.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2515
        echo getLang("EnterCategoryImageHeight");
        echo "\");
\t\t\tCategoryImageHeight.focus();
\t\t\tCategoryImageHeight.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(BrandImageWidth.value) || BrandImageWidth.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2523
        echo getLang("EnterBrandImageWidth");
        echo "\");
\t\t\tBrandImageWidth.focus();
\t\t\tBrandImageWidth.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(BrandImageHeight.value) || BrandImageHeight.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2531
        echo getLang("EnterBrandImageHeight");
        echo "\");
\t\t\tBrandImageHeight.focus();
\t\t\tBrandImageHeight.select();
\t\t\treturn false;
\t\t}

\t\tif(CategoryDefaultImage.value != \"\") {
\t\t\t// Make sure it has a valid extension
\t\t\timg = CategoryDefaultImage.value.split(\".\");
\t\t\text = img[img.length-1].toLowerCase();

\t\t\tif(ext != \"jpg\" && ext != \"png\" && ext != \"gif\") {
\t\t\t\tShowTab(2);
\t\t\t\talert(\"";
        // line 2544
        echo getLang("ChooseValidImage");
        echo "\");
\t\t\t\tCategoryDefaultImage.focus();
\t\t\t\tCategoryDefaultImage.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif(BrandDefaultImage.value != \"\") {
\t\t\t// Make sure it has a valid extension
\t\t\timg = BrandDefaultImage.value.split(\".\");
\t\t\text = img[img.length-1].toLowerCase();

\t\t\tif(ext != \"jpg\" && ext != \"png\" && ext != \"gif\") {
\t\t\t\tShowTab(2);
\t\t\t\talert(\"";
        // line 2558
        echo getLang("ChooseValidImage");
        echo "\");
\t\t\t\tBrandDefaultImage.focus();
\t\t\t\tBrandDefaultImage.select();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tif (\$('#FacebookLikeButtonEnabled').attr('checked') && !\$('#FacebookLikeButtonAdminIds').val()) {
\t\t\t// no admin id entered for facebook
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2568
        echo Interspire_Template_Extension::jsFilter(getLang("FacebookAdminIdsRequired"), "'");
        echo "\");
\t\t\t\$('#FacebookLikeButtonAdminIds').focus();
\t\t\treturn false;
\t\t}

\t\t// check image sizes
\t\tvar imageSizeChanges = false;
\t\tvar imageValueProblem  = false;

\t\t\$('.SetOriginalImageSizeValue').each(function() {
\t\t\tif(isNaN(\$(this).val()) || \$(this).val() == '') {

\t\t\t\timageValueProblem = true;

\t\t\t\tvar LanguageVariableKey = \$(this).attr('id') + 'InvalidValue';
\t\t\t\tLanguageVariableKey = LanguageVariableKey.replace('_height', 'Height');
\t\t\t\tLanguageVariableKey = LanguageVariableKey.replace('_width', 'Width');

\t\t\t\tvar alertMsg = lang[LanguageVariableKey];

\t\t\t\tif(\$(this).val().indexOf('%') != -1 || \$(this).val().indexOf('px') != -1) {
\t\t\t\t\talertMsg += '";
        // line 2589
        echo getLang("EnterNumberForImageSizesMeasurements");
        echo "';
\t\t\t\t}

\t\t\t\tShowTab(8);
\t\t\t\talert(alertMsg);

\t\t\t\t\$(this).focus();
\t\t\t\t\$(this).select();

\t\t\t\treturn false;
\t\t\t}
\t\t});

\t\tif(imageValueProblem) {
\t\t\treturn false;
\t\t}

\t\t\$('.SetOriginalImageSizeValue').each(function() {
\t\t\tif(\$(this).val() != \$.data(this, \"origValue\")) {
\t\t\t\timageSizeChanges = true;
\t\t\t\treturn;
\t\t\t}
\t\t});

\t\tif(imageSizeChanges){
\t\t\tif(confirm('";
        // line 2614
        echo getLang("ShouldImagesBeResized");
        echo "')) {
\t\t\t\t\$('#AutoResizeImages').val('yes');
\t\t\t}
\t\t}

\t\tif(isNaN(\$('#TagCloudMinSize').val()) || \$('#TagCloudMinSize').val() == '') {
\t\t\tShowTab(2);
\t\t\talert('";
        // line 2621
        echo getLang("EnterTagCloudMinSize");
        echo "');
\t\t\t\$('#TagCloudMinSize').focus();
\t\t\t\$('#TagCloudMinSize').select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(\$('#TagCloudMaxSize').val()) || \$('#TagCloudMaxSize').val() == '') {
\t\t\tShowTab(2);
\t\t\talert('";
        // line 2629
        echo getLang("EnterTagCloudMaxSize");
        echo "');
\t\t\t\$('#TagCloudMaxSize').focus();
\t\t\t\$('#TagCloudMaxSize').select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(RSSItemsLimit.value) || RSSItemsLimit.value == \"\") {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2637
        echo getLang("EnterRSSItemsLimit");
        echo "\");
\t\t\tRSSItemsLimit.focus();
\t\t\tRSSItemsLimit.select();
\t\t\treturn false;
\t\t}

\t\tif(isNaN(RSSCacheTime.value)) {
\t\t\tShowTab(2);
\t\t\talert(\"";
        // line 2645
        echo getLang("EnterValidRSSCacheTime");
        echo "\");
\t\t\tRSSCacheTime.focus();
\t\t\tRSSCacheTime.select();
\t\t\treturn false;
\t\t}

\t\tif(ValidateFTPSettings() == false)
\t\t{
\t\t\treturn false;
\t\t}

\t\tif(\$(\"#BackupsAutomatic:checked\").val() && !\$(\"#BackupsAutomaticDatabase:checked\").val() && !\$(\"#BackupsAutomaticImages:checked\").val() && !\$(\"#BackupsAutomaticDownloads:checked\").val()) {
\t\t\talert(\"";
        // line 2657
        echo getLang("AtLeastOnAutomaticBackup");
        echo "\");
\t\t\treturn false;
\t\t}

\t\tif(!\$(\"#SearchResultsPerPage\").val() || isNaN(\$(\"#SearchResultsPerPage\").val())) {
\t\t\tShowTab(4);
\t\t\talert(\"";
        // line 2663
        echo getLang("EnterSearchResultsPerPage");
        echo "\");
\t\t\t\$(\"#SearchResultsPerPage\").focus();
\t\t\t\$(\"#SearchResultsPerPage\").select();
\t\t\treturn false;
\t\t}

\t\tif(\$('#tab5').css('display') != 'none') {
\t\t\tif(g('EnableSystemLogging').checked == true) {
\t\t\t\tvar f = g('SystemLogTypes');
\t\t\t\tif(f.selectedIndex == -1) {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2674
        echo getLang("SelectOneMoreLoggingTypes");
        echo "');
\t\t\t\t\tg('SystemLogTypes').focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar f = g('SystemLogSeverity');
\t\t\t\tif(f.selectedIndex == -1) {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2681
        echo getLang("SelectOneMoreLoggingSeverities");
        echo "');
\t\t\t\t\tg('SystemLogSeverity').focus();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(isNaN(g('SystemLogMaxLength').value) && g('SystemLogMaxLength').value != '') {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2687
        echo getLang("EnterValidSystemLogLength");
        echo "');
\t\t\t\t\tg('SystemLogMaxLength').focus();
\t\t\t\t\tg('SystemLogMaxLength').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(g('EnableAdministratorLogging').checked == true) {
\t\t\t\tif(isNaN(g('AdministratorLogMaxLength').value) && g('AdministratorLogMaxLength').value != '') {
\t\t\t\t\tShowTab(5);
\t\t\t\t\talert('";
        // line 2697
        echo getLang("EnterValidAdministratorLogLength");
        echo "');
\t\t\t\t\tg('AdministratorLogMaxLength').focus();
\t\t\t\t\tg('AdministratorLogMaxLength').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}
\t\tif(\$('#tab6').css('display') != 'none') {
\t\t\tif(\$('#VendorLogoUploading:checked').val()) {
\t\t\t\tif(isNaN(\$('#VendorLogoSizeW').val()) && \$('#VendorLogoSizeW').val() != '') {
\t\t\t\t\talert('";
        // line 2707
        echo getLang("EnterVendorLogoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorLogoSizeW').focus();
\t\t\t\t\t\$('#VendorLogoSizeW').select();
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(isNaN(\$('#VendorLogoSizeH').val()) && \$('#VendorLogoSizeH').val() != '') {
\t\t\t\t\talert('";
        // line 2715
        echo getLang("EnterVendorLogoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorLogoSizeH').focus();
\t\t\t\t\t\$('#VendorLogoSizeH').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(\$('#VendorPhotoUploading:checked').val()) {
\t\t\t\tif(isNaN(\$('#VendorPhotoSizeW').val()) && \$('#VendorPhotoSizeW').val() != '') {
\t\t\t\t\talert('";
        // line 2725
        echo getLang("EnterVendorPhotoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorPhotoSizeW').focus();
\t\t\t\t\t\$('#VendorPhotoSizeW').select();
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\tif(isNaN(\$('#VendorPhotoSizeH').val()) && \$('#VendorPhotoSizeH').val() != '') {
\t\t\t\t\talert('";
        // line 2733
        echo getLang("EnterVendorPhotoSizeDimensions");
        echo "');
\t\t\t\t\tShowTab(6);
\t\t\t\t\t\$('#VendorPhotoSizeH').focus();
\t\t\t\t\t\$('#VendorPhotoSizeH').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\treturn true;
\t});

\tfunction TestSSL() {
\t\t// See if the site is capable of handling HTTPS requests
\t\tvar https_url = \"";
        // line 2747
        echo twig_safe_filter((isset($context['HTTPSUrl']) ? $context['HTTPSUrl'] : null));
        echo "\";

\t\talert(\"";
        // line 2749
        echo getLang("TestSSLText");
        echo "\");
\t\twindow.open(https_url);
\t}

\tfunction ToggleLocalBackups()
\t{
\t\tif(\$('#BackupsLocal:checked').val()) {
\t\t\t\$('#BackupsAutomaticLocal').attr('disabled', false);
\t\t\tCheckAutomaticBackups();
\t\t}
\t\telse {
\t\t\t\$('#BackupsAutomaticLocal').attr('disabled', true);
\t\t\tCheckAutomaticBackups();
\t\t}
\t}

\tfunction CheckAutomaticBackups()
\t{
\t\tif(!\$('#BackupsLocal:checked').val() && (!\$('#BackupsRemoteFTPContainer:visible') || !\$('#BackupsRemoteFTP:checked').val())) {
\t\t\t\$('#BackupsAutomatic').attr('disabled', true);
\t\t\t\$('#BackupsAutomatic').attr('checked', false);
\t\t\t\$('.BackupsAutomaticContainer').hide();
\t\t}
\t\telse {
\t\t\t\$('#BackupsAutomatic').attr('disabled', false);
\t\t\tToggleAutomaticBackups();
\t\t}
\t}

\tfunction ToggleFTPBackups()
\t{
\t\tif(\$('#BackupsRemoteFTPContainer:visible')) {
\t\t\tif(\$('#BackupsRemoteFTP:checked').val()) {
\t\t\t\t\$('#BackupsRemoteFTPSettings').show();
\t\t\t\t\$('#BackupsAutomaticFTP').attr('disabled', false);
\t\t\t}
\t\t\telse {
\t\t\t\t\$('#BackupsRemoteFTPSettings').hide();
\t\t\t\t\$('#BackupsAutomaticFTP').attr('disabled', true);
\t\t\t\t\$('#BackupsAutomaticMethod').get()[0].selectedIndex = 0;
\t\t\t}
\t\t}
\t\telse {
\t\t\t\$('#BackupsAutomaticFTP').attr('disabled', true);
\t\t\t\$('#BackupsAutomaticMethod').get()[0].selectedIndex = 0;
\t\t}
\t\tCheckAutomaticBackups();
\t}

\tfunction ToggleAutomaticBackups()
\t{
\t\tif(\$('#BackupsAutomatic:checked').val()) {
\t\t\t\$('.BackupsAutomaticContainer').show();
\t\t} else {
\t\t\t\$('.BackupsAutomaticContainer').hide();
\t\t}
\t}

\tToggleLocalBackups();
\tToggleAutomaticBackups();
\tToggleFTPBackups();

\tfunction DoTestFTPSettings() {
\t\tresult = ValidateFTPSettings();
\t\tif(result == false) return false;

\t\tvar host = \$('#BackupsRemoteFTPHost').val();
\t\tvar user = \$('#BackupsRemoteFTPUser').val();
\t\tvar pass = \$('#BackupsRemoteFTPPass').val();
\t\tvar path = \$('#BackupsRemoteFTPPath').val();

\t\t\$('#TestFTPSettings').attr('disabled', true);
\t\t\$('#TestFTPSettings').val('";
        // line 2821
        echo getLang("TestingFTPSettings");
        echo "');
\t\t\$('#TestFTPSettingsLoading').show();

\t\tjQuery.ajax({
\t\t\ttype: 'POST',
\t\t\turl: 'remote.php?w=TestFTPSettings',
\t\t\tdata: 'host='+host+'&user='+user+'&pass='+pass+'&path='+path,
\t\t\tdataType: 'script',
\t\t\tsuccess: function() {
\t\t\t\t\$('#TestFTPSettings').attr('disabled', false);
\t\t\t\t\$('#TestFTPSettings').val('";
        // line 2831
        echo getLang("TestFTPSettings");
        echo "');
\t\t\t\t\$('#TestFTPSettingsLoading').hide();
\t\t\t}
\t\t});
\t}

\tfunction ValidateFTPSettings()
\t{
\t\tif(\$('#BackupsRemoteFTPContainer:visible') && \$('#BackupsRemoteFTP:checked').val()) {
\t\t\tif(\$('#BackupsRemoteFTPHost').val() == '') {
\t\t\t\tShowTab(3);
\t\t\t\talert('";
        // line 2842
        echo getLang("EnterFTPHostname");
        echo "');
\t\t\t\t\$('#BackupsRemoteFTPHost').focus();
\t\t\t\t\$('#BackupsRemoteFTPHost').select();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(\$('#BackupsRemoteFTPUser').val() == '') {
\t\t\t\tShowTab(3);
\t\t\t\talert('";
        // line 2849
        echo getLang("EnterFTPUsername");
        echo "');
\t\t\t\t\$('#BackupsRemoteFTPUser').focus();
\t\t\t\t\$('#BackupsRemoteFTPUser').select();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(\$('#BackupsRemoteFTPPass').val() == '') {
\t\t\t\tShowTab(3);
\t\t\t\talert('";
        // line 2856
        echo getLang("EnterFTPPassword");
        echo "');
\t\t\t\t\$('#BackupsRemoteFTPPass').focus();
\t\t\t\t\$('#BackupsRemoteFTPPass').select();
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\treturn true;
\t}

\tfunction ToggleMailSettings() {
\t\tif(\$('#MailUseSMTP').attr('checked') == true) {
\t\t\t\$('.SMTPOptions').show();
\t\t}
\t\telse {
\t\t\t\$('.SMTPOptions').hide();
\t\t}
\t}

\tvar smtpChecked = true;
\tvar disableLoadingIndicator;

\tfunction startSMTPTest() {
\t\tif(!ValidateSMTPSettings()) {
\t\t\treturn;
\t\t}

\t\tTestSMTPMailSettings();
\t}

\tfunction TestSMTPMailSettings(callback) {
\t\t\$('#TestSMTPSettings').attr('disabled', true);
\t\t\$('#TestSMTPSettings').val('";
        // line 2887
        echo getLang("TestingSMTPSettings");
        echo "');

\t\tvar email = \$('#AdminEmail').val();
\t\tvar host = \$('#MailSMTPServer').val();
\t\tvar user = \$('#MailSMTPUsername').val();
\t\tvar pass = \$('#MailSMTPPassword').val();
\t\tvar port = \$('#MailSMTPPort').val();

\t\tdisableLoadingIndicator = true;
\t\t\$.iModal({
\t\t\ttype: 'inline',
\t\t\tinline: '#stmpTestModal',
\t\t\twidth: 400,
\t\t\tclose: false
\t\t});

\t\tjQuery.ajax({
\t\t\ttype: 'POST',
\t\t\turl: 'remote.php?w=TestSMTPSettings',
\t\t\tdata: 'AdminEmail='+escape(email)+'&MailSMTPServer='+escape(host)+'&MailSMTPUsername='+escape(user)+'&MailSMTPPassword='+escape(pass)+'&MailSMTPPort='+escape(port),
\t\t\tdataType: 'xml',
\t\t\tsuccess: function(xml) {
\t\t\t\t\$.iModal.close();

\t\t\t\t\$('#TestSMTPSettings').attr('disabled', false);
\t\t\t\t\$('#TestSMTPSettings').val('";
        // line 2912
        echo getLang("TestSMTPSettings");
        echo "');
\t\t\t\tvar message = \$('message', xml).text();
\t\t\t\tmessage = message.replace('\\\\n', '\\n');
\t\t\t\tmessage = message.replace('\\\\n', '\\n');
\t\t\t\tif(\$('status', xml).text() == 1) {
\t\t\t\t\tsmtpChecked = true;
\t\t\t\t\tif (callback) {
\t\t\t\t\t\tcallback.call(this);
\t\t\t\t\t} else {
\t\t\t\t\t\talert(message);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t// test failed
\t\t\t\t\tsmtpChecked = false;
\t\t\t\t\tShowTab(0);
\t\t\t\t\t\$('#MailSMTPServer').focus();
\t\t\t\t\talert(message);
\t\t\t\t}

\t\t\t\tdisableLoadingIndicator = false;
\t\t\t}
\t\t});
\t}

\tfunction ValidateSMTPSettings() {
\t\tif(\$('#MailUseSMTP').attr('checked') == true) {
\t\t\tif(!\$('#MailSMTPServer').val()) {
\t\t\t\talert('";
        // line 2940
        echo getLang("EnterSMTPServer");
        echo "');
\t\t\t\t\$('#MailSMTPServer').focus();
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\treturn true;
\t}

\tvar sslChecked = false;
\tvar sslWorks = false;

\tfunction checkSSLWorks() {
\t\tif(sslChecked) {
\t\t\treturn sslWorks;
\t\t}
\t\tsslChecked = true;
\t\tvar imageLocation = document.location.toString();
\t\timageLocation = imageLocation.replace('http:', 'https:').replace(/index.php(.*)/g, '') + 'images/1x1.gif';

\t\t\$('<img />').load(function () {
\t\t\tsslWorks = true;
\t\t}).error(function () {
\t\t\tsslWorks = false;
\t\t}).attr('src', imageLocation);

\t\treturn sslWorks;
\t}

\t\$('#UseControlPanelSSL').bind('click', function () {
\t\tif(\$(this).is(':checked')) {
\t\t\tcheckSSLWorks();
\t\t}
\t});

\t\$(document).ready(function() {
\t\tShowTab(";
        // line 2976
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t\$('input[type=submit]').attr('disabled', '');

\t\tif (\$('#EnableCustomersAlsoViewed:checked').val()) {
\t\t\t\$('.HideIfCustomersAlsoViewedDisabled').show();
\t\t} else {
\t\t\t\$('.HideIfCustomersAlsoViewedDisabled').hide();
\t\t}

\t\tif(\$('#ShowInventory:checked').val()) {
\t\t\t\$('.HideIfShowInventoryDisabled').show();
\t\t}
\t\telse {
\t\t\t\$('.HideIfShowInventoryDisabled').hide();
\t\t}

\t\tToggleDefaultProductImage();
\t\t\$('.DefaultProductImage[type=radio]').click(ToggleDefaultProductImage);

\t\t\$('.SetOriginalImageSizeValue').each(function() {
\t\t\t\$.data(this, \"origValue\", \$(this).val());
\t\t});

\t\t\$(\"input:radio[name='UseSSL']\").click(function() {
\t\t\t\$(\"input:radio[name='UseSSL']\").each(function() {
\t\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').show();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').hide();
\t\t\t\t}
\t\t\t});

\t\t\tif(\$(\"#NoSSL\").is(':checked')) {
\t\t\t\t\$('#UseControlPanelSSL').attr('disabled', 'disabled').removeAttr('checked');
\t\t\t} else {
\t\t\t\t\$('#UseControlPanelSSL').removeAttr('disabled');
\t\t\t}
\t\t});

\t\t\$(\"input:radio[name='UseSSL']:checked\").trigger('click');

\t\tif('";
        // line 3019
        echo twig_safe_filter((isset($context['RunImageResize']) ? $context['RunImageResize'] : null));
        echo "' == '1') {
\t\t\tProcessProductImages.launch();
\t\t}

\t\tif(\$('#DownForMaintenance').is(':checked')) {
\t\t\t\$('#DownForMaintenanceMessageRow').css('display', '');
\t\t}

\t\t\$('#DownForMaintenance').bind('click', function () {
\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\$('#DownForMaintenanceMessageRow').css('display', '');
\t\t\t} else {
\t\t\t\t\$('#DownForMaintenanceMessageRow').css('display', 'none');
\t\t\t}
\t\t});

\t\t\$(\"#FacebookLikeButtonEnabled\").change(function() {
\t\t\tif(\$(this).is(':checked')) {
\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').show();
\t\t\t}
\t\t\telse {
\t\t\t\t\$(this).parent('label').nextAll('.NodeJoin:first').hide();
\t\t\t}
\t\t});

\t\t// if any SMTP options has changed, force a test before save
\t\t\$(\".SMTPOptions input:text\").each(function() {
\t\t\t\$(this).bind('change', function() {
\t\t\t\tsmtpChecked = false;
\t\t\t});
\t\t});

\t\t";
        // line 3051
        if ((!$this->getAttribute((isset($context['TPL_CFG']) ? $context['TPL_CFG'] : null), "EnableFlyoutMenuSupport", array(), "any"))) {
            echo "\t\t\t// prevent selection of flyout style if not supported by current temlpate
\t\t\t\$('#CategoryListStyle').change(function(event){
\t\t\t\tif (\$(this).val() == 'flyout') {
\t\t\t\t\talert(\"";
            // line 3055
            echo Interspire_Template_Extension::jsFilter(getLang("CategoryListStyleFlyoutNotSupported"), "'");
            echo "\");
\t\t\t\t\t\$(this).val('static');
\t\t\t\t}
\t\t\t});
\t\t";
        }
        // line 3059
        echo "\t});
</script>
";
    }

}

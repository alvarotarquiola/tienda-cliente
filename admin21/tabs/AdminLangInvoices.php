<?php
//header('Content-Type: text/html; charset=iso-8859-1');
/**
  * Image resize tab for admin panel, AdminImageResize.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */
//error_reporting(E_ALL);
include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

//include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/reader.php');
//include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/funciones.php');

class AdminLangInvoices extends AdminTab
{
	public function display()
    {
        global $currentIndex, $cookie;
        
        $languages = Language::getLanguages();
        $lang_invoice = Configuration::get('PS_LANG_INVOICE');
        $lang_shop = Configuration::get('PS_LANG_SHOP');
        $mensage = $this->l('The language was changed successfully.');
        
        echo '<script type="text/javascript">
            jQuery(function(){
                
                jQuery(".tap-shop-menu a").click(function(){
                    var ele = jQuery(this);
                    var id = ele.data("type");
                    jQuery(".tap-shop-menu a").removeClass("active");
                    ele.addClass("active");
                    jQuery(".options-tap .tab-active").addClass("hide_tag");
                    jQuery(".options-tap").find(".tab-active").removeClass("tab-active");
                    jQuery("#"+id).removeClass("hide_tag");
                    jQuery("#"+id).addClass("tab-active");
                    
                    return false;
                });

                jQuery(".form-select-shop").change(function(){
                    var ele = jQuery(this);
                    var id_lang = ele.attr("value");
                    var type = ele.data("type");
                    console.log("entras");
                    
                    $.post("ajax.php", {lang_id: id_lang, type: type, lang_change: "lang-change"}, function(res){
                        $("#message-"+type).css("display", "block");
                    });
                });
            });
        </script>';
        
        echo '
            <div id="language-shop-config" class="content-tab-shop">
                <div class="tap-shop-menu">
                    <a href="#" class="active" data-type="ivoice-delivery">'.$this->l('Idioma Factura y Albaranes').'</a>
                    <a href="#" class="" data-type="me-shop">'.$this->l('Idioma Tienda').'</a>
                </div>
                <div id="tap-options-shop" class="options-tap">
                    <div id="ivoice-delivery" class="tab-active">
                        <h2 class="sub_title_tab">'.$this->l('Idioma Factura y Albaranes').'</h2>
                        <div id="message-lang-invoice" class="message_result" style="display:none;"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The language was changed successfully.').'</div>
                        <div class="warning warn" style="width: 600px;"><h3>'.$this->l('Choose the languaje for the generation of invoices and delivery slips.').'</h3>
                        <h3>'.$this->l('If you change your languaje, change the languaje in all existing invoices and delevery slips.').'</h3></div>
                        <div class="width2" style="width: 612px;">
                            <div class="row-form">
                                <label class="form-label left">'.$this->l('Language').': </label>
                                <div class="margin-form">
                                    <select name="lang_invoice_select" id="lang_invoice_select" data-type="lang-invoice" class="form-select-shop"> 
                                        <option>'.$this->l('Select language').'</option>';
                                    foreach($languages as $language)
                                        echo '<option value="'.$language['id_lang'].'" '.($lang_invoice == $language['id_lang'] ? "selected='selected'" : "").'>'.$language['name'].'</option>';
                    echo '          </select>
                                    <!--<p class="clear">'.$this->l('The invoice will be shown in the selected language').'</p>-->
                    		    </div>    
                            </div>
                        </div>
                    </div>
                    <div id="me-shop" class="hide_tag">
                        <h2 class="sub_title_tab">'.$this->l('Idioma de su Tienda').'</h2>
                        <div id="message-lang-shop" class="message_result" style="display:none;"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The language was changed successfully.').'</div>
                        <div class="width2" style="width: 612px;">
                            <div class="row-form">
                                <label class="form-label left">'.$this->l('Language').': </label>
                                <div class="margin-form">
                                    <select name="lang_shop_select" id="lang_shop_select" data-type="lang-shop" class="form-select-shop"> 
                                        <option>'.$this->l('Select language').'</option>';
                                    foreach($languages as $language)
                                        echo '<option value="'.$language['id_lang'].'" '.($lang_shop == $language['id_lang'] ? "selected='selected'" : "").'>'.$language['name'].'</option>';
                    echo '          </select>
                    		    </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';

	}
	
	public function postProcess()
	{
		global $currentIndex, $cookie;

	
	}

	public function displayForm($isMainTab = true)
	{
		global $currentIndex, $cookie;
	}
    
    public function changeLangForm()
    {
        $id_lang = $_POST["id_lang"];
        $lang = Language::getLanguage($id_lang);
        
        print_r($lang);
    }
    
    
}

?>

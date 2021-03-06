<?php

define('PS_ADMIN_DIR', getcwd());
include(PS_ADMIN_DIR.'/../config/config.inc.php');
/* Getting cookie or logout */
require_once(dirname(__FILE__).'/init.php');

if (isset($_GET['ajaxProductManufacturers']))
{
	$currentIndex = 'index.php?tab=AdminCatalog';
	$manufacturers = Manufacturer::getManufacturers();
	if ($manufacturers)
	{
		$jsonArray = array();
		foreach ($manufacturers AS $manufacturer)
			$jsonArray[] = '{optionValue: '.$manufacturer['id_manufacturer'].', optionDisplay: \''.addslashes($manufacturer['name']).'\'}';
		die('['.implode(',', $jsonArray).']');
	}
}

if (isset($_GET['ajaxProductSuppliers']))
{
	$currentIndex = 'index.php?tab=AdminCatalog';
	$suppliers = Supplier::getSuppliers();
	if ($suppliers)
	{
		$jsonArray = array();
		foreach ($suppliers AS $supplier)
			$jsonArray[] = '{optionValue: '.$supplier['id_supplier'].', optionDisplay: \''.addslashes($supplier['name']).'\'}';
		die('['.implode(',', $jsonArray).']');
	}
}

if (isset($_GET['ajaxProductAccessories']))
{
	$currentIndex = 'index.php?tab=AdminCatalog';
	$jsonArray = array();
	
	$products = Db::getInstance()->ExecuteS('
	SELECT p.`id_product`, pl.`name`
	FROM `'._DB_PREFIX_.'product` p
	NATURAL LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
	WHERE pl.`id_lang` = '.intval(Tools::getValue('id_lang')).'
	AND p.`id_product` != '.intval(Tools::getValue('id_product')).'
	AND p.`id_product` NOT IN (
		SELECT a.`id_product_2`
		FROM `'._DB_PREFIX_.'accessory` a
		WHERE a.`id_product_1` = '.intval(Tools::getValue('id_product')).')
	ORDER BY pl.`name`');
	
	foreach ($products AS $accessory)
		$jsonArray[] = '{value: \''.intval($accessory['id_product']).'-'.addslashes($accessory['name']).'\', text:\''.intval($accessory['id_product']).' - '.addslashes($accessory['name']).'\'}';
	die('['.implode(',', $jsonArray).']');
}

if (isset($_GET['ajaxDiscountCustomers']))
{
	$currentIndex = 'index.php?tab=AdminDiscounts';
	$jsonArray = array();
	$filter = Tools::getValue('filter');
	
	$customers = Db::getInstance()->ExecuteS('
	SELECT `id_customer`, `email`, CONCAT(`lastname`, \' \', `firstname`) as name
	FROM `'._DB_PREFIX_.'customer`
	WHERE email LIKE "%'.pSQL($filter).'%"
	'.(intval($filter) ? 'OR id_customer = '.intval($filter) : '').'
	OR CONCAT(`firstname`, \' \', `lastname`) LIKE "%'.pSQL($filter).'%"
	OR CONCAT(`lastname`, \' \', `firstname`) LIKE "%'.pSQL($filter).'%"
	ORDER BY CONCAT(`lastname`, \' \', `firstname`) ASC
	LIMIT 50');
	
	foreach ($customers AS $customer)
		$jsonArray[] = '{value:'.intval($customer['id_customer']).', text:\''.addslashes($customer['name']).' ('.addslashes($customer['email']).')\'}';
	die('['.implode(',', $jsonArray).']');
}

if (Tools::getValue('page') == 'prestastore')
	readfile('http://www.prestastore.com/adminmodules.php?lang='.Language::getIsoById($cookie->id_lang));
if (Tools::getValue('page') == 'themes')
	readfile('http://www.prestastore.com/adminthemes.php?lang='.Language::getIsoById($cookie->id_lang));

if ($step = intval(Tools::getValue('ajaxProductTab')))
{
	require_once(dirname(__FILE__).'/tabs/AdminCatalog.php');
	$catalog = new AdminCatalog();
	$admin = new AdminProducts();
	
	$languages = Language::getLanguages();
	$defaultLanguage = intval(Configuration::get('PS_LANG_DEFAULT'));
	$product = new Product(intval(Tools::getValue('id_product')));
	if (!Validate::isLoadedObject($product))
		die (Tools::displayError('product cannot be loaded'));
	
	$switchArray = array(3 => 'displayFormAttributes', 4 => 'displayFormFeatures', 5 => 'displayFormCustomization', 6 => 'displayFormQuantityDiscount');
	$currentIndex = 'index.php?tab=AdminCatalog';
	if (key_exists($step, $switchArray))
		$admin->{$switchArray[$step]}($product, $languages, $defaultLanguage);
}

if (isset($_GET['getAvailableFields']) and isset($_GET['entity']))
{
	$currentIndex = 'index.php?tab=AdminImport';
	$jsonArray = array();
	require_once(dirname(__FILE__).'/tabs/AdminImport.php');
	$import = new AdminImport();

	$languages = Language::getLanguages();
	$defaultLanguage = intval(Configuration::get('PS_LANG_DEFAULT'));
	$fields = $import->getAvailableFields(true);
	foreach ($fields AS $field)
		$jsonArray[] = '{field: \''.addslashes($field).'\'}';
	die('['.implode(',', $jsonArray).']');
}

if (array_key_exists('ajaxModulesPositions', $_POST))
{				
		$id_module = intval(Tools::getValue('id_module'));
		$id_hook = intval(Tools::getValue('id_hook'));
		$way = intval(Tools::getValue('way'));	
		$positions = Tools::getValue(strval($id_hook));
		$position = (is_array($positions)) ? array_search($id_hook.'_'.$id_module, $positions) : null;
		$module = Module::getInstanceById($id_module);
		if (Validate::isLoadedObject($module))
			if ($module->updatePosition($id_hook, $way, $position))
				die(true);
			else
				die('{\'hasError\' : true, errors : \'Can not update module position\'}');	
		else
			die('{\'hasError\' : true, errors : \'This module can not be loaded\'}');
}

if (array_key_exists('ajaxProductsPositions', $_POST))
{
	$way = intval(Tools::getValue('way'));
	$id_product = intval(Tools::getValue('id_product'));
	$id_category = intval(Tools::getValue('id_category'));
	$positions = Tools::getValue(strval($id_category));

	if (is_array($positions))
		foreach ($positions AS $key => $value)
		{
			$pos = explode('_', $value);
			if ((isset($pos[1]) AND isset($pos[2])) AND ($pos[1] == $id_category AND $pos[2] == $id_product))
			{
				$position = $key;
				break;
			}
		}
	
	$product = new Product($id_product);
	if (Validate::isLoadedObject($product))
	{
		if (isset($position) && $product->updatePosition($way, $position))
			die(true);
		else
			die('{\'hasError\' : true, errors : \'Can not update product position\'}');
	}
	else
		die('{\'hasError\' : true, errors : \'This product can not be loaded\'}');
}

if (isset($_GET['ajaxProductPackItems']))
{
	$jsonArray = array();
	$products = Db::getInstance()->ExecuteS('
	SELECT p.`id_product`, pl.`name`
	FROM `'._DB_PREFIX_.'product` p
	NATURAL LEFT JOIN `'._DB_PREFIX_.'product_lang` pl
	WHERE pl.`id_lang` = '.intval(Tools::getValue('id_lang')).'
	AND p.`id_product` NOT IN (SELECT DISTINCT id_product_pack FROM `'._DB_PREFIX_.'pack`)
	AND p.`id_product` != '.intval(Tools::getValue('id_product')));
	
	foreach ($products AS $packItem)
		$jsonArray[] = '{value: \''.intval($packItem['id_product']).'-'.addslashes($packItem['name']).'\', text:\''.intval($packItem['id_product']).' - '.addslashes($packItem['name']).'\'}';
	die('['.implode(',', $jsonArray).']');
}

if (isset($_GET['ajaxStates']) AND isset($_GET['id_country']))
{
	$states = Db::getInstance()->ExecuteS('
	SELECT s.id_state, s.name
	FROM '._DB_PREFIX_.'state s
	LEFT JOIN '._DB_PREFIX_.'country c ON (s.`id_country` = c.`id_country`)
	WHERE s.id_country = '.intval(Tools::getValue('id_country')).' AND s.active = 1 AND c.`contains_states` = 1');
	
	$list = '<option value="0">-----------</option>'."\n";
	foreach ($states AS $state)
		$list .= '<option value="'.intval($state['id_state']).'"'.((isset($_GET['id_state']) AND $_GET['id_state'] == $state['id_state']) ? ' selected="selected"' : '').'>'.$state['name'].'</option>'."\n";
		
	die($list);
}

if (Tools::getValue('form_language_id'))
{
	if (!($cookie->employee_form_lang = intval(Tools::getValue('form_language_id'))))
		die ('Error while updating cookie.');
	die ('Form language updated.');
}

if(isset($_POST['id_lang']) AND isset($_POST['change_formulario']))
{
    $id_lang = $_POST['id_lang'];
    $lang = Language::getLanguage($id_lang);

    //Configuration::updateValue("PS_LANG_DEFAULT", $id_lang);
    
    $cookie->id_lang_2 = $id_lang;
    $cookie->employee_form_lang = $cookie->id_lang_2;
}

if(isset($_POST['language_id']))
{
    $id_lang = $_POST['language_id'];
    $cookie->id_lang_2 = $id_lang;
    $cookie->employee_form_lang = $id_lang;
}

if(isset($_POST['id_lang']) AND isset($_POST['form_login_lang']))
{
    $id_lang = $_POST['id_lang'];
    Configuration::updateValue("PS_FORM_LANG_LOGIN", $id_lang);
}

/*if(isset($_POST['id_lang']) AND isset($_POST['change_lang_back_office']))
{
    $id_lang = $_POST['id_lang'];
    $cookie->id_lang_2 = $id_lang;
}*/

if(isset($_POST['eliminarAccesorio']))
{
    Accessory::deleteAccessory($_POST['id_prod'], $_POST['id_prod2']);
}

if(isset($_POST['id_product_2']) && isset($_POST['id_product_2']))
{
    Accessory::addAccessory($_POST['id_product_1'], $_POST['id_product_2']);
}

if(isset($_POST['id_attachment_lang']))
{
    $id_attachment_lang = $_POST['id_attachment_lang'];
    $attLang = explode("_", $id_attachment_lang);
    
    ImageAttachments::deleteAttachmentLanguaje($attLang[0], $attLang[1]);
}

if(isset($_POST['id_object']) && isset($_POST['lang_id']))
{
    $id_object = $_POST['id_object'];
    $id_lang = $_POST['lang_id'];
    
    //$cookie->id_lang_2 = $id_lang;
    //$cookie->employee_form_lang = $id_lang;
    
    $attach1 = Attachment::getAttachments($id_lang, $id_object, true);
    
    $list = '';
    foreach ($attach1 as $attach)
        if($attach['id_attachment'] != "" || $attach['id_attachment'] != 0)
            $list .= '<option value="'.intval($attach['id_attachment']).'_'.intval($attach['id_lang']).'">'.$attach['name'].'</option>'."\n";
    
    die($list);
}

if(isset($_GET['category_object']))
{
    $array = $cookie->category_object;
    var_dump($array);
    //$array = urldecode($array);
    $array = unserialize($array);
}

if(isset($_POST['lang_id']) && isset($_POST['lang_change']))
{
    $id_lang = $_POST['lang_id'];
		$type = $_POST['type'];

		if(isset($id_lang) && $id_lang != "")
    {
				if($type == "lang-invoice"){
						Configuration::updateValue("PS_LANG_INVOICE", $id_lang);
						$cookie->id_lang_factura = $id_lang;
						echo "entras";
						exit();
				}elseif($type == "lang-shop"){
						Configuration::updateValue("PS_LANG_SHOP", $id_lang);
				}
				$res = "success";
    }else{
        $res = "error";
    }
    echo $res;
}

if(isset($_POST['backup_restore']) && isset($_POST['backup_restore']))
{
    if(isset($_POST['backup_restore']) && $_POST['backup_restore'] != "")
    {
        $backuprestore = $_POST['backup_restore'];
        $PS_BACKUP_RESTORE = $_POST['PS_BACKUP_RESTORE'];
        $name = "PS_BACKUP_RESTORE";
        Configuration::updateValue($name, $PS_BACKUP_RESTORE);
        
        echo "success";   
    }else
        echo "error";
}

if(isset($_POST['type']) && $_POST['type'] != "")
{
    $type = $_POST['type'];
    $quantity = $_POST["cant"];
    $id_product = $_POST["id_product"];

    if($type != ""){
        $res = Product::quantityAddUpdate($id_product, $type, $quantity);
        $json = json_encode($res);
        echo $json;
    }
}

if(isset($_GET['upload']) && $_GET['upload'] != "")
{
    $id_product = $_GET['id'];
    $file = $_FILES["file"];
    $iso = $_GET['iso'];
    
    if(isset($file['name']) && $file['name'] != "")
    {
        $refe = explode(".",$file['name']);
        $refe = $refe[0];
        $isoLang = substr($refe, 0, 2);
        $refe = substr($refe, 3); 
        $aux_ref = $refe;
                
        $res = ImageAttachments::uploadFileAttachment($file, $id_product, $isoLang, $aux_ref); 
    }else{
        $res = "error";
    }
    //$json = json_encode($res);
    echo $res;
}

if(isset($_POST['store_remote']) && $_POST['store_remote'] != "")
{
    $name_store = $_POST['name_store_remote'];

    if(isset($name_store) && $name_store != "")
    {
        Configuration::updateValue("PS_STORE_REMOTE", $name_store);
        $res = "success";
    }else{
        $res = "error";
    }
    echo $res;
}

if(isset($_POST["control_stock"]) && $_POST["control_stock"] != "")
{
    $control_stock = $_POST['control_stock'];
    $PS_CONTROL_STOCK = $_POST['PS_CONTROL_STOCK'];
    if(isset($control_stock) && $control_stock == "controlstock")
    {
        Configuration::updateValue("PS_CONTROL_STOCK", $PS_CONTROL_STOCK);
        $res = "success";
    }else{
        $res = "error";
    }
    echo $res;
}


?>

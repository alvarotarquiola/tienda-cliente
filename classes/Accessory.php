<?php

/**
  * Alias class, Accessory.php
  * @Accessory classes
  *
  * @author Alex Aguilar
  * @copyright Alex Aguilar
  */

class Accessory extends ObjectModel
{
    public static function getAccessoryById($accessoryId)
	{
		return Db::getInstance()->getRow('SELECT `id_product`, `name` FROM `'._DB_PREFIX_.'product_lang` WHERE `id_product` = '.intval($accessoryId));
	}
    
    static public function getAccessoriesProduct($id_lang, $id_product)
	{   
        return Db::getInstance()->ExecuteS('
		SELECT p.`id_product`, p.`reference`, pl.`name`
		FROM `'._DB_PREFIX_.'accessory`
		LEFT JOIN `'._DB_PREFIX_.'product` p ON (p.`id_product`= `id_product_2`)
		LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` AND pl.`id_lang` = '.intval($id_lang).')
		WHERE `id_product_1` = '.intval($id_product));
        
	}
    
    static public function deleteAccessory($idprod, $idprod2)
    {
        return Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'accessory` WHERE `id_product_1` = "'.intval($idprod).'" and `id_product_2` = "'.intval($idprod2).'"');
    }
    
    static function addAccessory($idprod, $idprod2)
    {
        $field['id_product_1'] = $idprod;
        $field['id_product_2'] = $idprod2;
        Db::getInstance()->AutoExecute(_DB_PREFIX_.'accessory', $field, 'INSERT');
    }
}

?>
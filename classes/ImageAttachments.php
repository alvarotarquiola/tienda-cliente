<?php

/**
 * @author Alex Aguilar
 * @copyright 2012
 */

class ImageAttachments extends ObjectModel
{
    static public function buscareferencia($ref)
    {
        /*return Db::getInstance()->getRow('
		SELECT * FROM `'._DB_PREFIX_.'image` 
		WHERE `id_product` = '.intval($id_product).'
		AND `cover`= 1');*/
        
        $result = Db::getInstance()->ExecuteS('
		SELECT `id_product`
		FROM `'._DB_PREFIX_.'product`
		WHERE `reference` = \''.$ref.'\'');
        
        return $result;
    }
    
    static public function getImageProducto($idProducto, $nombre)
    {   
        $result = Db::getInstance()->ExecuteS('
		SELECT *
		FROM `'._DB_PREFIX_.'image`
		WHERE `id_product` = "'.intval($idProducto).'" and `name_image` = "'.$nombre.'"');
        
        return $result;
    }
    
    static public function verificarImage($idProducto, $nombre)
    {
        $res = false;
        $imagePoducto = ImageAttachments::getImageProducto($idProducto, $nombre);
        
        if($imagePoducto[0]["id_image"] != "")
            $res = true;
        
        return $res;
    }
    
    static public function getProductosLang($idproduct)
    {   
        $result = Db::getInstance()->ExecuteS('
		SELECT *
		FROM `'._DB_PREFIX_.'product_lang` p
		WHERE p.`id_product` = "'.intval($idproduct).'"');
        
        return $result;
    }
    
    static public function sacatamanos()
    {
        $result = Db::getInstance()->ExecuteS('
		SELECT *
		FROM `'._DB_PREFIX_.'image_type`
		WHERE `products` = \'1\'');
        
        return $result;
    }
    
    static public function getAllAttachment()
    {
        $result = Db::getInstance()->ExecuteS('
		SELECT *
		FROM `'._DB_PREFIX_.'attachment`
        ');
        
        return $result;
    }
    
    //static public function getAttachmentLangName($idattachment, $idlang, $nombre)
    static public function getAttachmentLangName($idattachment, $idlang)
    {
        /*WHERE `reference_lang` = "'.$nombre.'"*/
        $result = Db::getInstance()->ExecuteS('
		SELECT *
		FROM `'._DB_PREFIX_.'attachment_lang` 
        WHERE `id_attachment` = "'.$idattachment.'" and `id_lang` = "'.$idlang.'"
        ');
        
        return $result;
    }
    
    static public function getAttachmentReference($reference)
    {
        $result = Db::getInstance()->ExecuteS('
		SELECT *
		FROM `'._DB_PREFIX_.'attachment`
		WHERE `reference` = "'.$reference.'"');
        
        return $result;
    }
    
    static public function existeAttachment($reference)
    {
        $res = false;
        $attachment = ImageAttachments::getAttachmentReference($reference);
        
        if($attachment[0]["id_attachment"] != ""){
            $res = true;
        }
        return $res;
    }
    
    //static public function existeAttachmentLang($nombre)
    static public function existeAttachmentLang($idattachment, $idlang)
    {
        $res = false;
        $attachmentLang = ImageAttachments::getAttachmentLangName($idattachment, $idlang);
    
        if($attachmentLang[0]["id_attachment"] != "" && $attachmentLang[0]["id_lang"] != ""){
            $res = true;
        }
        return $res;
    }
    
    static public function existeProductAttachment($idproducto, $idattachment)
    {
        $res = false;
        $result = Db::getInstance()->ExecuteS('
		SELECT *
		FROM `'._DB_PREFIX_.'product_attachment`
		WHERE `id_product` = "'.$idproducto.'" and `id_attachment` = "'.$idattachment.'"');
        
        $attachmentLang = ImageAttachments::getAttachmentLangName($nombre);
        
        if($result[0]["id_product"] == $idproducto && $result[0]["id_attachment"] == $idattachment){
            $res = true;
        }
        return $res;
    }
    
    static public function getAttachmentLanguaje($id_attachment, $id_lang)
    {
        $query = Db::getInstance()->getRow('
        SELECT *
		FROM `'._DB_PREFIX_.'attachment_lang`
		WHERE `id_attachment` = "'.$id_attachment.'" and `id_lang` = "'.$id_lang.'"
        ');
        
        return $query;
    }
    
    static public function getAttachmentLangs($id_attachment)
    {
        $query = Db::getInstance()->ExecuteS('
        SELECT *
		FROM `'._DB_PREFIX_.'attachment_lang`
		WHERE `id_attachment` = "'.$id_attachment.'"
        ');
        
        return $query;
    }
    
    static public function deleteAttachmentLanguaje($id_attachment, $id_lang)
    {
        $attachmentLang = ImageAttachments::getAttachmentLangName($id_attachment, $id_lang);
        
        Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'attachment_lang` WHERE `id_attachment` = '.intval($id_attachment).' and `id_lang` = '.intval($id_lang));
        
        $attachmentLangs = ImageAttachments::getAttachmentLangs($id_attachment);
        
        if(count($attachmentLangs) == 0){
            Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'product_attachment` WHERE `id_attachment` = '.intval($id_attachment));
            Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'attachment` WHERE `id_attachment` = '.intval($id_attachment));
        }
        
        $deletefile = ImageAttachments::deleteFileAttachment($attachmentLang[0]["name_file"]);
    }
    
    static public function deleteFileAttachment($filename)
    {
        $dirdestino = _PS_ROOT_DIR_."/download";
        
        if(file_exists($dirdestino."/".$filename))
            @unlink($dirdestino."/".$filename);
    }
    
    static public function updateAttachment($id_attachement, $id_lang, $field)
    {
        Db::getInstance()->AutoExecute(_DB_PREFIX_.'attachment_lang', $field, 'UPDATE', '`id_attachment` = '.intval($id_attachement).' AND `id_lang` = '.intval($id_lang));   
    }
    
    static public function getImagesProduct($id_product)
    {
        $result = Db::getInstance()->ExecuteS('
		SELECT `id_image`
		FROM `'._DB_PREFIX_.'image`
		WHERE `id_product` = '.intval($id_product));
        
        return $result;
    }
    
    static public function deleteImages()
	{
        $products = ExportReports::getAllProducts();
        
        foreach($products as $product){
            $prod = ExportReports::getProduct($product['id_product']);
            $result = ImageAttachments::getImagesProduct($product['id_product']);
            foreach($result as $row)
    			if (!deleteImage(intval($product['id_product']), $row['id_image']) OR !Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'image_lang` WHERE `id_image` = '.intval($row['id_image'])))
    				return false;
            Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'image` WHERE `id_product` = '.intval($product['id_product']));    
        }
	}
    
    static public function getAttachmentsProduct($id_product)
    {    
        $result = Db::getInstance()->ExecuteS('
		SELECT `id_attachment`
		FROM `'._DB_PREFIX_.'product_attachment`
		WHERE `id_product` = '.intval($id_product));
        
        return $result;
    }
    
    static public function deleteAttachments()
    {
        $products = ExportReports::getAllProducts();
        $attachments = ImageAttachments::getAllAttachment();
        $dir = _PS_DOWNLOAD_DIR_;
        
        foreach($products as $product){
            $result = ImageAttachments::getAttachmentsProduct($product['id_product']);
            foreach($result as $row)
                Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'product_attachment` WHERE `id_attachment` = '.intval($row['id_attachment']));
        }
        
        foreach($attachments as $attachment){
            $langs_attach = ImageAttachments::getAttachmentLangs($attachment['id_attachment']);
            foreach($langs_attach as $lang){
                if(file_exists($dir.$lang['name_file']))
                    @unlink($dir.$lang['name_file']);
                Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'attachment_lang` WHERE `id_attachment` = '.intval($lang['id_attachment']).' and `id_lang` = '.intval($lang['id_lang']));
            }
            Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'attachment` WHERE `id_attachment` = '.intval($attachment['id_attachment']));
            Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'product_attachment` WHERE `id_attachment` = '.intval($attachment['id_attachment']));
        }
    }
    
    static public function uploadFileAttachment($file, $id_product, $isoLang, $ref)
    {
        $dirorigen = _PS_ROOT_DIR_."/files";
        ImageAttachments::createFolder();
        
        $ext = strtolower(end(explode('.', $file["name"])));
        $name = substr(sha1(microtime()),0,15);
        $filename = $name.".".$ext;
        
        move_uploaded_file($file["tmp_name"], $dirorigen."/tmp/" . $filename);
        
        $archivo = $dirorigen."/tmp/" . $filename;
        
  		$mime = "application/".$ext;
        
    	$existeAttachment = ImageAttachments::existeAttachment($ref);
        
        if($existeAttachment){
            $attachmentReference = ImageAttachments::getAttachmentReference($ref);
            $idattachment = $attachmentReference[0]['id_attachment'];
        }else{
            //$idattachment = $this->ingresarDatos($datos,_DB_PREFIX_."attachment");
            $datas = array('file' => '', 'reference' => $ref, 'mime' => $mime);
            $idattachment = ImageAttachments::addAttachment($datas, 1);
        }
        
        $id_lang = Language::getIdByIso($isoLang);
        $existe = ImageAttachments::existeAttachmentLang($idattachment, $id_lang);

        if(!$existe){
            
            $id_lang = Language::getIdByIso($isoLang);
            $prod = ExportReports::getProductLang($id_product,$id_lang);
            $aux_name = ($prod["name"] != "") ? $prod["name"] : "no name";
            $name_file = $filename;
            $reference_lang = $file["name"];
        	$description = $mime." ".$name;
            //$this->ingresarDatos($datos2,_DB_PREFIX_."attachment_lang");
            
            $datas2 = array('id_attachment' => $idattachment, 'id_lang' => $id_lang, 'name' => $aux_name, 'reference_lang' => $reference_lang, 'name_file' => $name_file, 'description' => $description);
            $idattachmentlang = ImageAttachments::addAttachment($datas2, 2);
            
            $dirdestino = _PS_ROOT_DIR_."/download";
        	$nuevonombre = $dirdestino."/".$filename;
            copy($archivo, $nuevonombre);
        }else{
            $attachment = ImageAttachments::getAttachmentLanguaje($idattachment, $id_lang);
            $dirdestino = _PS_ROOT_DIR_."/download";
            $prod = ExportReports::getProductLang($id_product,$id_lang);
            $aux_name = ($prod["name"] != "") ? $prod["name"] : "no name";
            $name_file = $filename;
            $datos2["name"] = $aux_name;
            $datos2["name_file"] = $name_file;
            $datos2["description"]= $mime." ".$name;
            ImageAttachments::updateAttachment($idattachment, $id_lang, $datos2);
            $nuevonombre = $dirdestino."/".$filename;
            copy($archivo, $nuevonombre);
        }
            	
        $existePA = ImageAttachments::existeProductAttachment($id_product, $idattachment);
        
        if(!$existePA){
            $datas3 = array('id_product' => $id_product, 'id_attachment' => $idattachment);
            ImageAttachments::addAttachment($datas3, 3);  
        }
        
        //$datas_return = array("id_attachment" => $idattachment, "id_lang" => $id_lang, "name_file" => $filename);
        
        if(file_exists($dirorigen."/tmp/".$filename))
            @unlink($dirorigen."/tmp/".$filename);

        return $idattachment."_".$id_lang."_".$aux_name;
    }
    
    static public function addAttachment($datas, $type)
    {
        if($type == 1)
        {
            $result = Db::getInstance()->autoExecute(_DB_PREFIX_.'attachment', $datas, 'INSERT');
            $id_value = Db::getInstance()->Insert_ID();
            return $id_value;
        }elseif($type == 2){
            $result = Db::getInstance()->autoExecute(_DB_PREFIX_.'attachment_lang', $datas, 'INSERT');
            $id_value = Db::getInstance()->Insert_ID();
            return $id_value;
        }elseif($type == 3){
            $result = Db::getInstance()->autoExecute(_DB_PREFIX_.'product_attachment', $datas, 'INSERT');
            $id_value = Db::getInstance()->Insert_ID();
            return $id_value;
        }
    }
    
    static public function createFolder()
    {
        $dirorigen = _PS_ROOT_DIR_."/files";
        
        if(!file_exists($dirorigen."/tmp"))
            mkdir($dirorigen."/tmp", 0777);
        chmod($dirorigen."/tmp", 0777);
    }
    
    static public function sizeFile($peso , $decimales = 2 ) 
    {
        $clase = array(" Bytes", " KB", " MB", " GB", " TB"); 
        return round($peso/pow(1024,($i = floor(log($peso, 1024)))),$decimales ).$clase[$i];
    }
    
    static public function verifyZiseFile($name)
    {
        $dir = _PS_ROOT_DIR_."/files";
        $img = $dir."/".$name;
        
        $peso = filesize($img);
        $sizefile =ImageAttachments::sizeFile($peso);
        $peso_array = explode(" ",$sizefile);

        return $peso_array;
    }
    
}

?>
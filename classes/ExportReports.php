<?php

/**
 * @author Alex Aguilar
 * @copyright 2012
 */

class ExportReports extends ObjectModel{
    
    
    /*================================================================
        Metodos para sacar reportes para excel de las categorias 
    =================================================================*/
    
    static public function getByCategory($id_category)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'category`
            WHERE `id_category` = "'.$id_category.'"
        ');
        
        return $query;
    }
    
    static public function getCategoria($id_category)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'category`
            WHERE `id_category` = "'.$id_category.'"
        ');
        
        return $query;
    }
    
    static public function getAllCategories()
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'category`
            ORDER BY id_category ASC
        ');
        
        return $query;
    }
    
    static public function getCategoryLang($id_category)
    {
        $id_lang = Language::getIdByIso("es");
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'category_lang`
            WHERE `id_category` = "'.$id_category.'" and `id_lang` = "'.$id_lang.'"
        ');
        return $query;
    }
    
    static public function getCategoriesLang($id_category, $tipo)
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'category_lang`
            WHERE `id_category` = "'.$id_category.'"
            ORDER BY `id_lang` ASC
        ');
        
        $cates = $query;
        if($tipo == 1){
            $name = array();
            $des = array();
            foreach($cates as $cat){
                //$iso_lang = Language::getIsoById($cat["id_lang"]);
                $iso_lang = Language::getIsoLangById($cat["id_lang"]);
                //$name[$iso_lang] = $cat["name"];
                $name[$iso_lang] = $cat["name_2"];
                $des[$iso_lang] = $cat["description"];
            }
            $ordenar = ExportReports::ordenarArray($name);
            $ordenar2 = ExportReports::ordenarArray($des);
            
            /*echo "<pre>";
            print_r($ordenar);
            echo "</pre>";*/
            
            return array($ordenar, $ordenar2);
        }elseif($tipo == 2){
            $name = array();
            foreach($cates as $cat){
                //$iso_lang = Language::getIsoById($cat["id_lang"]);
                //$iso_lang = Language::getIdByIsoLang($cat["id_lang"]);
                $iso_lang = Language::getIsoLangById($cat["id_lang"]);
                //$name[$iso_lang] = $cat["name"];
                $name[$iso_lang] = $cat["name_2"];
            }
            $ordenar = ExportReports::ordenarArray($name);
            /*echo "<pre>";
            print_r($ordenar);
            echo "</pre>";*/
            return $ordenar;    
        }                
    }
    
    static public function ordenarArray($array)
    {
        $aux_array = array();
        /*$aux_array[0] = $array["es"];
        $aux_array[1] = $array["fr"];
        $aux_array[2] = $array["de"];
        $aux_array[3] = $array["pt"];
        $aux_array[4] = $array["en"];*/
        
        $aux_array[0] = $array["lang-1"];
        $aux_array[1] = $array["lang-2"];
        $aux_array[2] = $array["lang-3"];
        $aux_array[3] = $array["lang-4"];
        $aux_array[4] = $array["lang-5"];
        
        return $aux_array;
    }
    static public function getIdsCategoria($id_category, $id_parent, $level_depth)
    {
        $ids = array();
        if($level_depth == 1){
            $ids[0] = $id_category;
        }elseif($level_depth == 2){
            //echo "sdfsd";
            $ids[0] = $id_parent;
            $ids[1] = $id_category;
        }elseif($level_depth == 3){
            $aux_cate = ExportReports::getByCategory($id_parent);
            $ids[0] = $aux_cate["id_parent"];
            $ids[1] = $id_parent;
            $ids[2] = $id_category;
        }
        return $ids;
    }
    
    static public function nameEmpty()
    {
        $name = array("","","","","");
        return $name;
    }

    static public function getCategories()
    {
        $allCategories = ExportReports::getAllCategories();
        $categories = array();

        foreach($allCategories as $categoria):
        
            $valid_array = array();
            if($categoria["id_category"] != 1):
                $ids_cate = ExportReports::getIdsCategoria($categoria['id_category'], $categoria['id_parent'], $categoria['level_depth']);
                if(count($ids_cate) == 1){
                    $cates_lang = ExportReports::getCategoriesLang($ids_cate[0], 1);
                    $cates_lang2 = ExportReports::nameEmpty();
                    $cates_lang3 = ExportReports::nameEmpty();
                    $cat_ref = $categoria["reference_category"];
                    $order_1 = !empty($categoria["position_category"])?$categoria["position_category"]:"";
                    $valid_array = array_merge(array($cat_ref),array($order_1),$cates_lang[0], array(""), $cates_lang2, array(""), $cates_lang3, $cates_lang[1], array($categoria["active"]));
                }elseif(count($ids_cate) == 2){
                    $cates_lang = ExportReports::getCategoriesLang($ids_cate[0],2);
                    $cates_lang2 = ExportReports::getCategoriesLang($ids_cate[1],1);
                    $cates_lang3 = ExportReports::nameEmpty();
                    $cat_ref = $categoria["reference_category"];
                    $order_2 = !empty($categoria["position_category"])?$categoria["position_category"]:"";
                    $valid_array = array_merge(array($cat_ref),array(""),$cates_lang, array($order_2), $cates_lang2[0], array(""),$cates_lang3, $cates_lang2[1], array($categoria["active"]));   
                }elseif(count($ids_cate) == 3){
                    $cates_lang = ExportReports::getCategoriesLang($ids_cate[0],2);
                    $cates_lang2 = ExportReports::getCategoriesLang($ids_cate[1],2);
                    $cates_lang3 = ExportReports::getCategoriesLang($ids_cate[2],1);
                    $cat_ref = $categoria["reference_category"];
                    $order_3 = !empty($categoria["position_category"])?$categoria["position_category"]:"";
                    $valid_array = array_merge(array($cat_ref),array(""),$cates_lang, array(""),$cates_lang2, array($order_3),$cates_lang3[0], $cates_lang3[1], array($categoria["active"]));
                }
                $categories[] = $valid_array;
            endif; 
        endforeach;
        
        return $categories;
    }
    
    
    /*Fin metodos para los reportes categorias*/
    
    /*================================================================
        Metodos para sacar reportes para excel de los fabricantes 
    =================================================================*/
       
    static public function getManufacturer($id_manufacturer)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'manufacturer`
            WHERE `id_manufacturer` = "'.$id_manufacturer.'"
        ');
        
        return $query;
    }
    
    static public function getAllManufacturers()
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'manufacturer`
            ORDER BY `id_manufacturer` ASC
        ');
        
        return $query;
    }
    
    static public function getManufacturersLang($id_manufacturer)
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'manufacturer_lang`
            WHERE `id_manufacturer` = "'.$id_manufacturer.'"
            ORDER BY `id_lang` ASC
        ');
        
        $manufacturers = $query;
        $des = array();
        $des_short = array();
        foreach($manufacturers as $manufacturer){
            //$iso_lang = Language::getIsoById($manufacturer["id_lang"]);
            $iso_lang = Language::getIsoLangById($manufacturer["id_lang"]);
            $des[$iso_lang] = $manufacturer["description"];
            $des_short[$iso_lang] = $manufacturer["short_description"];
        }
        $ordenar = ExportReports::ordenarArray($des);
        $ordenar2 = ExportReports::ordenarArray($des_short);
        return array($ordenar2, $ordenar);
    }
    
    static public function getManufacturers()
    {
        $manufacturers = ExportReports::getAllManufacturers();
        $aux_manufacturer = array();
        foreach($manufacturers as $manufacturer):
        
            $manufacturer_lang = ExportReports::getManufacturersLang($manufacturer["id_manufacturer"]);
            $aux_array = array_merge(array($manufacturer["name"]), $manufacturer_lang[0], $manufacturer_lang[1]);
            $aux_manufacturer[] = $aux_array;
            
        endforeach;
        
        return $aux_manufacturer;
    }
    
    /*Fin metodos para los reportes fabricantes*/
    
    /*================================================================
        Metodos para sacar reportes para excel de los productos 
    =================================================================*/    
    static public function getProduct($id_product)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'product`
            WHERE `id_product` = "'.$id_product.'"
        ');
        return $query;
    }
    
    static public function getCategoryProduct($id_category, $id_product)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'category_product`
            WHERE `id_category` = "'.$id_category.'" and `id_product` = "'.$id_product.'"
        ');
        return $query;
    }
    
    static public function getTax($id_tax)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'tax`
            WHERE `id_tax` = "'.$id_tax.'"
        ');
        return $query;
    }
    
    static public function getSupplier($id_supplier)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'supplier`
            WHERE `id_supplier` = "'.$id_supplier.'"
        ');
        return $query;
    }
    
    static public function getAllProducts()
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'product`
            ORDER BY `id_product` ASC
        ');
        return $query;
    }
    
    static public function getProductLang($id_product, $id_lang)
    {
        $query = Db::getInstance()->getRow('
            SELECT *
            FROM `'._DB_PREFIX_.'product_lang`
            WHERE `id_product` = "'.$id_product.'" and `id_lang` = "'.$id_lang.'"
        ');
        return $query;
    }
    
    static public function getProductsLang($id_product)
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'product_lang`
            WHERE `id_product` = "'.$id_product.'"
            ORDER BY `id_lang` ASC
        ');
        
        $products = $query;
        $name = array();
        $des_short = array();
        $des = array();
        $disAhora = array();
        $disDespues = array();
        
        foreach($products as $prod):
            //$iso_lang = Language::getIsoById($prod["id_lang"]);
            $iso_lang = Language::getIsoLangById($prod["id_lang"]);
            $name[$iso_lang] = $prod["name"];
            $des[$iso_lang] = $prod["description"];
            $des_short[$iso_lang] = $prod["description_short"];
            $disAhora[$iso_lang] = $prod["available_now"];
            $disDespues[$iso_lang] = $prod["available_later"];
        endforeach;
        $ordenar = ExportReports::ordenarArray($name);
        $ordenar2 = ExportReports::ordenarArray($des);
        $ordenar3 = ExportReports::ordenarArray($des_short);
        $ordenar4 = ExportReports::ordenarArray($disAhora);
        $ordenar5 = ExportReports::ordenarArray($disDespues);
        
        return array($ordenar,$ordenar2,$ordenar3,$ordenar4,$ordenar5);
    }
    
    static public function getProducts()
    {
        $products = ExportReports::getAllProducts();
        $aux_products = array();
        foreach($products as $product):
            $categoryProduct = ExportReports::getCategoryProduct($product["id_category_default"], $product["id_product"]);
            $categories = ExportReports::getNamesCategories($product["id_category_default"]);
            $products_lang = ExportReports::getProductsLang($product["id_product"]);
            $iva = ExportReports::getTax($product["id_tax"]);
            $supplier = ExportReports::getSupplier($product["id_supplier"]);
            $manufacturer = ExportReports::getManufacturer($product["id_manufacturer"]);
            $datas = array($product["reference"],$product["active"],$product["price"],$iva["rate"]);
            $aux_fecha1= date("Y-d-m",strtotime($product["reduction_from"]));
            $aux_fecha2= date("Y-d-m",strtotime($product["reduction_to"]));
            $fecha1 = ($aux_fecha1 != '0000-00-00' && $aux_fecha1 != '1970-01-01')?$aux_fecha1:"";
            $fecha2 = ($aux_fecha2 != '0000-00-00' && $aux_fecha2 != '1970-01-01')?$aux_fecha2:"";
            //$datas2 = array($supplier["name"], $product["supplier_reference"], $manufacturer["name"],$product["weight"],$product["ecotax"],$product["on_sale"],"",$product["reduction_percent"],$product["reduction_from"],$product["reduction_to"],$product["quantity"]);
            $datas2 = array($supplier["name"], $product["supplier_reference"], $manufacturer["name"],$product["weight"],$product["ecotax"],$product["on_sale"],"",$product["reduction_percent"],$fecha1,$fecha2,$product["quantity"]);
            //$aux_des = ExportReports::formatDescription($products_lang[1]);
            $position = ($categoryProduct["position"] != 0)?$categoryProduct["position"]:"";
            $aux_array = array_merge(array($position), $products_lang[0], $categories, $datas, $products_lang[2], $products_lang[1], $datas2, $products_lang[3], $products_lang[4]);
            //$aux_array = array_merge(array($categoryProduct["position"]), $products_lang[0], $categories, $datas, $products_lang[2], $aux_des, $datas2, $products_lang[3], $products_lang[4], array("","","","",""));
            $aux_products[] = $aux_array;
        endforeach;
        
        return $aux_products;
    }
    
    static public function formatDescription($descriptions)
    {
        $aux = array();
        
        foreach($descriptions as $des):
            $aux_des = explode("</p>", $des);
            $cadena = "";
            for($i = 0; $i < count($aux_des)-1; $i++):
                $rest = substr($aux_des[$i], -5);
                $rest = substr($aux_des[$i], 3);
                $cadena = $cadena.$rest."\n";
            endfor;
            $aux[] = $cadena;
        endforeach;
        
        return $aux;
    }
    
    static public function getNamesCategories($id_category)
    {
        $category = ExportReports::getByCategory($id_category);
        $ids = ExportReports::getIdsCategoria($category["id_category"], $category["id_parent"], $category["level_depth"]);
        
        $names = array();
        for($i = 0; $i < 3; $i++):
            $auxCatLang = ExportReports::getCategoryLang($ids[$i]);
            //$names[] = $auxCatLang["name"];
            $names[] = $auxCatLang["name_2"];
        endfor;
        
        return $names;
    }
    
    /*Fin metodos para los reportes productos*/
    
    /*================================================================
        Metodos para sacar reportes para excel de los accesorios 
    =================================================================*/ 
    static public function getAllAccesories()
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'accessory`
            ORDER BY `id_product` ASC
        ');
        return $query;
    }
    
    static public function getProductAccessories($id_product)
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'accessory`
            WHERE `id_product_1` = "'.$id_product.'"
        ');
        return $query;
    }
    
    static public function getAccesoriesProduct($id_product)
    {
        //ORDER BY `id_product` ASC
        $accessories = ExportReports::getProductAccessories($id_product);
        $refere_array = array();
        $id_lang = Language::getIdByIso("es");
        foreach($accessories as $value):
            $prod = ExportReports::getProduct($value["id_product_1"]);
            $prodLang = ExportReports::getProductLang($value["id_product_1"], $id_lang);
            $name = $prodLang["name"];
            $ref = $prod["reference"];
            $prod2 = ExportReports::getProduct($value["id_product_2"]);
            $refere_array[] = $prod2["reference"];
        endforeach;
        
        $auxRef = implode(",",$refere_array);
        $aux_array = array($name, $ref, $auxRef);
        
        return $aux_array;
    }
    
    static public function getAccesories()
    {
        $productos = ExportReports::getAllProducts();
        $aux_accessory = array();
        $id_lang = Language::getIdByIso("es");
        foreach($productos as $producto):
            $cantidad = ExportReports::getProductAccessories($producto["id_product"]);
            if(count($cantidad) > 0){
                $accessories = ExportReports::getAccesoriesProduct($producto["id_product"]);
                $aux_accessory[] = $accessories; 
            }else{
                $auxProd = ExportReports::getProductLang($producto["id_product"], $id_lang);
                $aux_accessory[] = array($auxProd["name"], $producto["reference"],"");
            }
        endforeach;
        return $aux_accessory;
    }
    
    /*Fin metodos para los reportes accesorios*/
    
    /*================================================================
        Metodos para sacar reportes para excel de los clientes 
    =================================================================*/
    static public function getAllCustomers()
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'customer`
            WHERE `deleted` = "'.$res.'"
            ORDER BY `id_customer` ASC
        ');
        return $query;
    }
    
    static public function getAddressCustomers($id_customer)
    {
        $query = Db::getInstance()->ExecuteS('
            SELECT *
            FROM `'._DB_PREFIX_.'address`
            WHERE `id_customer` = "'.$id_customer.'" and `deleted` = "'.$res.'"
            ORDER BY `id_address` ASC
        ');
        return $query;
    }
    
    static public function getCustomers()
    {
        $custumers = ExportReports::getAllCustomers();
        $aux_custumer = array();
        foreach($custumers as $custumer):
            
            $address = ExportReports::getAddressCustomers($custumer["id_customer"]);
            if(count($address) > 0){
                $iso = Country::getIsoById($address[0]["id_country"]);
                $id_lang = Language::getIdByIso($iso);
                $addressName = Country::getNameById($id_lang, $address[0]["id_country"]);
                $stateName = State::getNameById($address[0]["id_state"]);
                //$aux_custumer[] = array($custumer["firstname"], $custumer["lastname"],$custumer["email"],$address[0]["firstname"],$address[0]["lastname"],$address[0]["address1"],$address[0]["postcode"],$address[0]["city"],$addressName,$address[0]["alias"]); phone_mobile   
                $aux_custumer[] = array($address[0]["alias"],$address[0]["company"],$address[0]["firstname"], $address[0]["lastname"],$address[0]["address1"],$address[0]["address2"],$address[0]["postcode"],$address[0]["city"],$addressName,$address[0]["phone"],$address[0]["phone_mobile"],$custumer["email"],$custumer["dni"],$stateName,$address[0]["other"]);
            }else{
                $aux_custumer[] = array($custumer["firstname"], $custumer["lastname"],$custumer["email"],"","","","","","","");
            }
        endforeach;
        return $aux_custumer;
    }
    
    /*===========================================================================*/
    /* Metodos para exportar categorias ordenadas
    /*===========================================================================*/
    
    
}

?>
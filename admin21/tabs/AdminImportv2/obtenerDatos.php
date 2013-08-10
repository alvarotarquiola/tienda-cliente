<?php

//class ObtenerDatos{WHERE UPPER(c2.name)='".$txt."' and c1.id_parent = '".$id_parent."'

    function buscaCategoriaPadre($txt){
    	if($txt!=""){
        	$txt = addslashes(strtoupper($txt));
	
        	$query = "SELECT * 
        			FROM  `"._DB_PREFIX_."category` AS c1
        			LEFT JOIN  
        			`"._DB_PREFIX_."category_lang` AS c2 
        			ON c1.id_category = c2.id_category
        			WHERE UPPER(c2.name_3)='".$txt."'
        			";
                    		
        	$resu = sacandosql($query);
        	
        	if($resu[0]["id_category"]!=""){

        	}
            $salida = $resu[0]["id_category"];
    	}else{	
    		$salida = buscacathome();
    	}
    	return $salida;
    	
    }
    
    function buscarCategoryReference($reference)
    {
        $query = "SELECT * 
        		FROM  `"._DB_PREFIX_."category`
        		WHERE reference_category = '".$reference."'
        		";
                		
        $resu = sacandosql($query);
        
        return $resu[0];
    }
    
    function buscarPadre($txt)
    {    
        $id_parent = buscacathome();
    	//$categoriasLang = getCategoriesLangName($txt);
        $categoriasLang = getCategoriesLangName2($txt);
        
        foreach($categoriasLang as $categoria):
            $cate = getByIdCategory($categoria["id_category"]);
            if($cate["id_parent"] == $id_parent):
                $id_categoria = $cate["id_category"];
            endif;
        endforeach;
    	
        return $id_categoria;
    }
    
    function buscarCategoriaPadre($nombres)
    {
        if(count($nombres) == 2){
            $idCatePadre = buscarPadre($nombres[0]);
            $subCategorias = getSubCategorias($idCatePadre);
            $i = 0;
            foreach($subCategorias as $sub){
                $subCate = getByIdCategory($sub["id_category"]);
                $catLangs = getCategoriesLang($sub["id_category"]);
                for($j = 0; $j < count($catLangs); $j++){
                    //if($nombres[1] == $catLangs[$j]["name"]){
                    if($nombres[1] == $catLangs[$j]["name_2"]){
                        $id_categoria = $catLangs[$j]["id_category"];
                    }
                }
                $i++;
            }
            return $id_categoria;
        }elseif(count($nombres) == 3){
            //$idCatePadre = buscaPadre($nombres[0]);
            $idCatePadre = buscarPadre($nombres[0]);
            $subCategorias = getSubCategorias($idCatePadre);
            $i = 0;
            foreach($subCategorias as $sub){
                //$subCate = getByIdCategory($sub[$i]["id_category"]);
                $catLangs = getCategoriesLang($sub["id_category"]);
                for($i = 0; $i < count($catLangs); $i++){
                    //if($nombres[1] == $catLangs[$i]["name"]){
                    if($nombres[1] == $catLangs[$i]["name_2"]){
                        $id_categoria = $catLangs[$i]["id_category"];
                        $subCategorias2 = getSubCategorias($id_categoria);
                        for($j = 0; $j < count($subCategorias2); $j++){
                            $catLangs2 = getCategoriesLang($subCategorias2[$j]["id_category"]);
                            for($k = 0; $k < count($catLangs2); $k++){
                                //if($nombres[2] == $catLangs2[$k]["name"]){
                                if($nombres[2] == $catLangs2[$k]["name_2"]){
                                    $id_categoria2 = $catLangs2[$k]["id_category"];
                                }
                            }  
                        }
                    }
                }
                $i++;
            }
            return $id_categoria2;
        }
    }
    
	function getSubCategorias($id_category)
    {
        $query = "SELECT * 
    		FROM  `"._DB_PREFIX_."category`
    		WHERE id_parent = '".$id_category."'
    		";
        $resu = sacandosql($query);
        return $resu;
    }
    
    
    function buscarProductoRef($ref)
    {
        $query = "SELECT * 
    		FROM  `"._DB_PREFIX_."product`
    		WHERE reference = '".$ref."'
    		";
        $resu = sacandosql($query);
        
        return $resu;
    }
    
    
    function existeProductReference($reference)
    {
        $res = false;
        $product = buscarProductoRef($reference);
        
        //if($product[0]["id_product"] != "" || $product[0]["id_product"] != null)
        if(count($product) == 1)
            $res = true;
        
        return $res;
    }
    
    
    function getCategoriesLang($id_category)
    {
        $query = "SELECT * 
    		FROM  `"._DB_PREFIX_."category_lang`
    		WHERE id_category = ".$id_category."
    		";
        $resu = sacandosql($query);
        return $resu;
    }
	
    function buscarProdxNombre($nombre, $active){
        
    	$nombre = addslashes($nombre);
    	
        if($nombre != ""){
            $query = "SELECT * 
        			FROM  `"._DB_PREFIX_."product` AS c1
        			LEFT JOIN  
        			`"._DB_PREFIX_."product_lang` AS c2 
        			ON c1.id_product = c2.id_product
        			WHERE c2.name='".$nombre."' and c1.active_update = '".$active."'
        			";
        	$resu = sacandosql($query);
        	
        	$salida = $resu[0];  
        }else{
            $salida = null;
        }
    	return $salida;
    	
    }
    
    function getCategoriesLangName($nombre)
    {
        $query = "SELECT * 
    		FROM  `"._DB_PREFIX_."category_lang`
    		WHERE name = '".$nombre."'
    		";
        $resu = sacandosql($query);

        return $resu;        
    }
    
    function getCategoriesLangName2($nombre)
    {
        $query = "SELECT * 
    		FROM  `"._DB_PREFIX_."category_lang`
    		WHERE name_2 = '".$nombre."'
    		";
        $resu = sacandosql($query);

        return $resu;        
    }
    
    function getNameCategoryLang($nombre)
    {
        $query = "SELECT * 
            FROM  `"._DB_PREFIX_."category` AS c1
            LEFT JOIN  
            `"._DB_PREFIX_."category_lang` AS c2 
            ON c1.id_category = c2.id_category
            WHERE c2.name_2 = '".$nombre."'
            ";
        $resu = sacandosql($query);
        
        return $resu[0];  
    }
    
    function buscaNameCategoryLang($nombre)
    {
        $id_parent = buscacathome();
        
        $query = "SELECT * 
            FROM  `"._DB_PREFIX_."category` AS c1
            LEFT JOIN  
            `"._DB_PREFIX_."category_lang` AS c2 
            ON c1.id_category = c2.id_category
            WHERE c1.id_parent = '".$id_parent."' and c2.name_2 = '".$nombre."'
            ";
        $resu = sacandosql($query);
        
        return $resu[0];      
    }
    
    function getCategoriaLang($id_categoria, $id_lang)
    {
        $query = "SELECT * 
            FROM  `"._DB_PREFIX_."category_lang`
            WHERE id_category = '".$id_categoria."' and id_lang = '".$id_lang."'
            ";
        $resu = sacandosql($query);
        
        return $resu[0];
    }
    
    function existeLangCategory($id_categoria, $id_lang)
    {
        $res = false;
        $cateLang = getCategoriaLang($id_categoria, $id_lang);
        
        if(count($cateLang) > 0)
            $res = true;
        
        return $res;
    }
    
    function existeCategoriaLang($nombre)
    {
        $res = false;
        $categoria = buscaNameCategoryLang($nombre);
        
        if($categoria['id_category'] != ""){
            $res = true;
        }
        return $res;
    }
    
    
    function existePruductoLang($id_product, $id_lang)
    {
        $res = false;
        $product = getProductoLang($id_product, $id_lang);
        
        //if(count($product) == 1){
        if($product["id_product"] == $id_product && $product["id_lang"] == $id_lang){
            $res = true;
        }
        return $res;
    }
    
    function getProductoLang($id_product, $id_lang)
    {
        $query = "SELECT * 
            FROM  `"._DB_PREFIX_."product_lang`
            WHERE id_product = '".$id_product."' and id_lang = '".$id_lang."'
            ";
        $resu = sacandosql($query);
        
        return $resu[0];  
    }
    
    function borrarControl($name)
    {
        $name_lang = $name;
        $new_name = "";
        
        $aux_post = strpos($name_lang,"----");
        
        if($aux_post !== false){
            $aux_name = explode("----", $name_lang);
            $new_name = $aux_name[0];
        }
        return $new_name;        
    }
    
    function buscarProductoPorAtributos($nombre, $referencia, $active){
    
        $ref = addslashes($ref);
        
    	$query = "SELECT * 
    			FROM  `"._DB_PREFIX_."product` AS c1
    			LEFT JOIN  
    			`"._DB_PREFIX_."product_lang` AS c2 
    			ON c1.id_product = c2.id_product
    			WHERE c1.reference='".$ref."' and c1.active_update = '".$active."' and c2.name = '".$nombre."' 
    			";
    	$resu = sacandosql($query);
    	$salida = $resu[0];
    	
    	return $salida;
        
    }
    
	function getProductos()
	{
        $query = "SELECT * 
        	FROM  `"._DB_PREFIX_."product`
        	";
        $resu = sacandosql($query);
        $salida = $resu;
        
        return $salida;
    }
    
    function setProductosUpdateActive()
    {
        $productos = getProductos();
        
        foreach($productos as $prod):
            $idprod = $prod["id_product"];
            $datos["active_update"] = false;
            actualizarDatos($datos, _DB_PREFIX_."product", "id_product", $idprod);
        endforeach;
    }
    
    function setActiveUpdate($idProd)
    {
        $datos["active_update"] = true;
        actualizarDatos($datos,_DB_PREFIX_."product", "id_product", $idProd);
    }
    
    function guardarImportConfig($tipo, $colExcel)
    {
        $array_col = array();
        
        foreach($colExcel as $colE){
    		
    		$aux_colE = base64_encode($colE);
            /*if($colE == "1-Categoria"){
                $array_col[$aux_colE]="Nombre Categoria";    
            }elseif($colE == "2-Categoria"){
                $array_col[$aux_colE] = "Nombre SubCategoria 1";
            }elseif($colE == "3-Categoria"){
                $array_col[$aux_colE] = "Nombre SubCategoria 2";
            }else*/
            if($colE != "Control"){
                $array_col[$aux_colE] = $colE;   
            }
    	}
        
        switch($tipo)
        {
            case 'Categorias':
                guardaconfi("catsNuevas",$array_col);
            break;
            case 'Productos':
                guardaconfi("catsNuevasProductos",$array_col);
            break;
            case 'Fabricantes':
                guardaconfi("fabricantesNuevos",$array_col);
            break;
            case 'ActualizarProductos':
                guardaconfi("actualizarProductos",$array_col);
            break;
            case 'Accesorios':
                guardaconfi("accesoriosNuevos",$array_col);
            break;
        }
    }
    
    
    function getIdLang($iso)
    {
    	switch($iso)
        {
            case "es":
                $id_lang = Language::getIdByIso("es");
            break;
            case "fr":
                $id_lang = Language::getIdByIso("fr");
            break;
            case "de":
                $id_lang = Language::getIdByIso("de");
            break;
            case "pt":
                $id_lang = Language::getIdByIso("pt");
            break;
            case "en":
                $id_lang = Language::getIdByIso("en");
            break;
        }
        
        return $id_lang;
    }
    
    function getIdByIsoLang($iso)
    {
        switch($iso)
        {
            case "es":
                $id_lang = Language::getIdByIso("es");
            break;
            case "fr":
                $id_lang = Language::getIdByIso("fr");
            break;
            case "de":
                $id_lang = Language::getIdByIso("de");
            break;
            case "pt":
                $id_lang = Language::getIdByIso("pt");
            break;
            case "en":
                $id_lang = Language::getIdByIso("en");
            break;
        }
        
        return $id_lang;
    }

    
    function getByIdCategory($id_category)
    {
        $query = "SELECT * 
    		FROM  `"._DB_PREFIX_."category`
    		WHERE id_category = ".$id_category."
    		";
        $resu = sacandosql($query);
        
        return $resu[0];
    }
    
    function checkIdVacio($ids)
    {
        $ids2 = array();
        
        foreach($ids as $value):
            if($ids != "" || $ids != 0):
                $ids2[] = $value;
            endif;
        endforeach;
        
        return $ids2;
    }
    
    function idsIguales($ids, $tipo = null)
    {   
        $res = false;   
        $ids2 = checkIdVacio($ids);
        
        $id_guia = $ids2[0];
        $igual = count($ids2);
        $i = 0;
        foreach($ids2 as $id):
            if($id === $id_guia):
                $i++; 
            endif;
        endforeach;
        
        if($tipo == 1){
            if($i == $igual){
                $res = true;
            } 
        }elseif($tipo == 2){
            if($i == $igual){
                $res = $id_guia;
            }
        }
        
        return $res;
    }
    
    function quitarAcentos($cadena)
    {   
        $tofind = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ";
            $replac = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
            return(strtr($cadena,$tofind,$replac));
    }
    
    function nombresNoVacio($datas)
    {
        $aux = array();
        foreach($datas as $data):
            if($data != "" ):
                $aux[] = $data;
            endif;
        endforeach;  
        return $aux;
    } 
     
    function checkNombreNull($datas)
    {
        $aux = array();
        foreach($datas as $data):
            if($data != "" ):
                $aux[] = $data;
            endif;
        endforeach;  
        
        if(count($aux) > 0):
            return $aux;
        else:
            return null;
        endif;
    }
    
    function checkIdsNull($datas, $nomId)
    {
        $ids = array();
        foreach($datas as $data):
            if($data != null):
                $ids[] = $data[$nomId];
            endif;
        endforeach;
        
        return $ids;
    }
    
    function idsProductos($datas)
    {
        $ids = array();
        foreach($datas as $data):
            if($data != null || $data != ""):
                $ids[] = $data["id_product"];
            endif;
        endforeach;
        
        return $ids;
    }
    
    function quitarEspacios($tring)
    {
        $string = trim($string);
    	$string = str_replace('&nbsp;', ' ', $string);
    	$string = preg_replace('/\s\s+/', ' ', $string);
    	return $string;
    }
    
    function limpiarCaracteresEspeciales($string ){
        $string = htmlentities($string);
        $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
        return $string;
    }
    
    function sanear_string($string)
    {
     
        $string = trim($string);
     
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
     
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
     
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
     
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
     
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
     
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
     
        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array("\\", "¨", "º", "-", "~",
                 "#", "@", "|", "!", "\"",
                 "·", "$", "%", "&", "/",
                 "(", ")", "?", "'", "¡",
                 "¿", "[", "^", "`", "]",
                 "+", "}", "{", "¨", "´",
                 ">", "<", ";", ",", ":",
                 ".", " "),
            ' ',
            $string
        );
     
     
        return $string;
    }
    
    function quitarCaracteres($text)
    {
        $text = htmlentities($text, ENT_QUOTES, 'UTF-8');
		$text = strtolower($text);
        
        $patron = array(
            '/[\., ]+/' => ' ',
			'/&agrave;/' => 'a',
			'/&egrave;/' => 'e',
			'/&igrave;/' => 'i',
			'/&ograve;/' => 'o',
			'/&ugrave;/' => 'u',
			'/&aacute;/' => 'a',
			'/&eacute;/' => 'e',
			'/&iacute;/' => 'i',
			'/&oacute;/' => 'o',
			'/&uacute;/' => 'u',
			'/&acirc;/' => 'a',
			'/&ecirc;/' => 'e',
			'/&icirc;/' => 'i',
			'/&ocirc;/' => 'o',
			'/&ucirc;/' => 'u',
			'/&atilde;/' => 'a',
			'/&etilde;/' => 'e',
			'/&itilde;/' => 'i',
			'/&otilde;/' => 'o',
			'/&utilde;/' => 'u',
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',
			'/&auml;/' => 'a',
			'/&euml;/' => 'e',
			'/&iuml;/' => 'i',
			'/&ouml;/' => 'o',
			'/&uuml;/' => 'u',
			'/&aring;/' => 'a',
			'/&ntilde;/' => 'n',
        );
        
        $text = preg_replace(array_keys($patron),array_values($patron),$text);
		return $text;
    }
    
    function quitarComasPuntos($text)
    {
        $text = str_replace(':', '', $text); 
        $text = str_replace('.', '', $text); 
        $text = str_replace(',', '', $text); 
        $text = str_replace(';', '', $text);
        
        return  $text;
    }
    
    function urlAmigable($name,$utf=true)
    {
        $sname = trim($name); //remover espacios vacios
        $sname = strtolower(preg_replace('/\s+/','-',$sname)); // pasamos todo a minusculas y cambiamos todos los espacios por -
        
        if($utf){ // se el texto no viene en formato utf8 se le manda a codificar como tal.
            $sname = utf8_decode($sname);
        }
        
        // Lista de caracteres latinos y sus correspondientes para slug
        $table = array(
        'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'C'=>'C', 'c'=>'c', 'C'=>'C', 'c'=>'c',
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'S',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
        'ÿ'=>'y', 'R'=>'R', 'r'=>'r', ','=>''
        );
        
        $sname = strtr($sname, $table); // remplazamos los acentos, etc, por su correspondientes
        $sname = preg_replace('/[^A-Za-z0-9-]+/',"", $sname); // eliminamos cualquier caracter que no sea de la a-z o 0 al 9 o -
        
        return $sname;
    }
    
    function converNewName($order, $name)
    {
        $new_name = "";
        $aux_array = explode(".", $name);
        
        if(count($aux_array) > 1)
        {   
            $name_aux = substr($aux_array[1], 1);
            $aux_order = convertString($order);
            $new_name = $aux_order.$name_aux;
        }else{
            $name_aux = $aux_array[0];
            $aux_order = convertString($order);
            $new_name = $aux_order.$name_aux;
        }  
        return $new_name;
    }
    
    function convertString($order)
    {
        if($order < 10 && $order >= 1){
            $aux = "0".$order.". "; 
        }elseif($order == 0 || $order == ""){
            $aux = "";
        }elseif($order >= 10){
            $aux = $order.". ";
        }
        return $aux;
    }
    
    function getAllCategories()
    {
        $query = '
            SELECT *
            FROM `'._DB_PREFIX_.'category`
            ORDER BY id_category ASC
			';
        $resu = sacandosql($query);
        return $resu;
    }
    
    function ultimaCategoria()
    {
        $categories = getAllCategories();
        $id_parent = buscacathome();
        $cant = count($categories); 
        $ultimaCategoria = $categories[$cant-1];
        
        return $ultimaCategoria;
    }
    
    function getTotalCategorias(){
        $categorias = getAllCategories();
        $total = count($categorias);
        return $total;
    }
    
    function totalCategories()
    {
        $categories = getAllCategories();
        $i = 0;
        foreach($categories as $category){
            $i++;
        }
        return $i;
    }
    
    function convertirNombreOrden()
    {    
        $categories = getAllCategories();    
            
        foreach($categories as $category):
            if($category["id_category"] != 1):
                if($category["position_category"] != "" || $category["position_category"] != 0):
                    $categoriesLang = getCategoriesLang($category["id_category"]);
                    foreach($categoriesLang as $categoryLang):
                        $data["name"] = converNewName($category["position_category"], $categoryLang["name"]);
                        if($categoryLang["name"] != ""):
                            actualizarDatosLang($data,_DB_PREFIX_.'category_lang',"id_category",$category["id_category"],"id_lang",$categoryLang["id_lang"]);
                        endif;
                    endforeach;    
                endif;   
            endif;
        endforeach;
    }
    //Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'product_attachment` WHERE `id_attachment` = '.intval($id_attachment));
    function getAllAccesories()
    {
        $query = '
            SELECT *
            FROM `'._DB_PREFIX_.'accessory`
            ORDER BY id_product_1 ASC
			';
        $resu = sacandosql($query);
        return $resu;
    }
    
    function DeleteAccessories()
    {
        $accessories = getAllAccesories();
        
        foreach($accessories as $accessory):
            $delete = eliminarDatos(_DB_PREFIX_."accessory","id_product_2",$accessory["id_product_2"]);
        endforeach;
        echo "<pre>";
        //print_r($accessories);
        echo "</pre>";
    }
    
    function existeCategoryReference($categories)
    {
        $cant = count($categories);
        $cates = array();
        $res = false;
        
        echo "<pre>";
        //print_r($categories);
        echo "</pre>";
        
        if($cant > 0){
            
            foreach($categories as $category){
                $aux_category = getNameCategoryLang($category);
                if($aux_category["id_category"] != "" && $aux_category["reference_category"] != "")
                    $cates[] = $aux_category["id_category"];    
            }
            
            if(count($cates) > 0){
                $iguales = idsIguales($cates, 1);
                if($iguales){
                    /*$id = idsIguales($cates, 2);
                    $category_aux = getByIdCategory($id);
                    if($category_aux["category_reference"] != ""){
                        $res = true;
                    }*/
                    $res = true;
                }    
            }
        }
        return $res;
    }
    
    function CantidadDescripciones($datas)
    {
        $buscar = "Description";
        $i = 0;
        foreach($datas as $cadena){
            $resultado = strpos($cadena, $buscar);
            if($resultado !== FALSE){
                //echo "La subcadena '$buscar' fue encontrada dentro de la cadena '$cadena' en la posición: '$resultado'";
                $i++;
            }   
        }
        
        //$new_datas = array_count_values ($datas);
        return $i; 
    }

//}

?>
<?php

/**
 * @author Alex Aguilar
 * @copyright 2012
 */

    include_once("mime.php");
    
    function sacatamanos()
    {
    	$query = '
    	SELECT * 
    	FROM  `'._DB_PREFIX_.'image_type` 
    	WHERE `products` = \'1\'
    	';
    	
    	$result = sacandosql($query);
    	return $result;
    }
    
    
    function ponertamanos($archivo)
    {
    	$tamanos = sacatamanos();
    	
    	foreach($tamanos as $tamano){
    		$ancho = $tamano["width"];
    		$alto = $tamano["height"];
    		$nombre = $tamano["name"];
            
    		$partido = explode(".",$archivo);
    		$cuanto = sizeof($partido)-1;
    		$nuevonombre = $partido[0];
    		for($c=1;$c<$cuanto;$c++){
    			$nuevonombre .= ".".$partido[$c];
    		}
    		$nuevonombre = $nuevonombre."-".$nombre.".jpg";
    		echo "<br> >>>> ".$nuevonombre;
    		$sourceFile['tmp_name'] = $archivo;
    		//$resultado = imageCut($sourceFile,$nuevonombre,$ancho,$alto,'jpg',0,0);
    		$resultado = imageResize($archivo, $nuevonombre, $ancho, $alto,'jpg');
    		if(!$resultado){
    			echo " -> No se puede transforma la imagen";
    		}
    	}
    	
    }
    
    function copiaraDestinoIMGs($archivo,$idproduct)
    {
    	//borraimagenesant($idproduct);
        $cantImages = getImagesTotal($idproduct);
        $nombreImg = basename($archivo);
        
    	$datos["id_product"] = $idproduct;
    	$datos["position"] = count($cantImages) + 1;
        $datos["name_image"] = $nombreImg;
        if(count($cantImages) == 0){
            $datos["cover"] = 1;
        }else{
            $datos["cover"] = 0;
        }
    	$idImagen = ingresarDatos($datos,_DB_PREFIX_."image");
        
        //$lanp = sacalangproducto($idproduct,3);
        $ProductosLang = getProductosLang($idproduct);
        foreach($ProductosLang as $prod):
            $datos2["id_image"] = $idImagen;
            $datos2["id_lang"] = $prod["id_lang"];
            $datos2["legend"] = $prod["name"];
            ingresarDatos($datos2,_DB_PREFIX_."image_lang");
        endforeach;
    	
    	/*$datos2["id_image"] = $idImagen;
    	$datos2["id_lang"] = 3;
    	$datos2["legend"] = $lanp["name"];
    	ingresarDatos($datos2,_DB_PREFIX_."image_lang");*/
    	
        echo "Archivo ".$archivo."<br/>";
        
    	$extension = explode(".",$archivo);
    	$cual = sizeof($extension)-1;
    	$extension = $extension[$cual];
    	$dirdestino = $_SERVER['DOCUMENT_ROOT'].__PS_BASE_URI__."img/p";
    	
    	$nuevonombre = $dirdestino."/".$idproduct."-".$idImagen.".".$extension;
        
        copy($archivo, $nuevonombre);
        
    	//echo $nuevonombre;
    	echo system("cp -af ".$archivo." ".$nuevonombre);
    	
    	return $nuevonombre;
    }
    
    function getImagesTotal($id_product)
    {		
    	$query = '
    	SELECT * 
    	FROM  `'._DB_PREFIX_.'image` 
    	WHERE `id_product` = '.intval($id_product).'
    	';
    	
        $result = sacandosql($query);
    		
    	return $result;
    }
    
    
    function getImageProducto($idProducto, $nombre)
    {
        $query = '
    	SELECT * 
    	FROM  `'._DB_PREFIX_.'image` 
    	WHERE id_product = "'.intval($idProducto).'" and name_image = "'.$nombre.'"
        ';
        
        $result = sacandosql($query);
        
        return $result[0];
    }
    
    function verificarImage($idProducto, $nombre)
    {
        $res = false;
        $imagePoducto = getImageProducto($idProducto, $nombre);
        
        if($imagePoducto["id_image"] != "")
            $res = true;
        
        return $res;
    }

?>
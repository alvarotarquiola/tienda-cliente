<?php

/**
 * @author Alex Aguilar
 * @copyright 2012
 */
    
    function copiaraDestinoADJs($archivo,$idproduct){
	
    	$uniqid = substr(sha1(microtime()),0,15);
    	
    	$extension = explode(".",$archivo);
    	$cual = sizeof($extension)-1;
    	$extension = $extension[$cual];
    	
    	
    	//echo "<br>extension -> ".$extension;
    	
    	$datos["file"] = $uniqid.".".$extension;
    	
    	if(function_exists("mime_content_type")){
    	   echo "entra mime 1";
    		$mime = mime_content_type($archivo);
            var_dump($mime);
    	}else{
    		$mime = "application/".$extension;
            echo "entra mime 2";
    	}
    	
    	$datos["mime"] = $mime;
    	
    	
    	//print_r($datos);
    	$idADJ = ingresarDatos($datos,_DB_PREFIX_."attachment");
    	
    	$lanp = sacalangproducto($idproduct,3);
    	
    	
    	
    	$datos2["id_attachment"] = $idADJ;
    	$datos2["id_lang"] = 3;
    	//$datos2["name"] = $lanp["name"];
    	$datos2["name"] = $uniqid.".".$extension;
    	$datos2["description"]=$datos["mime"]." ".$uniqid;
    	print_r($datos2);
    	ingresarDatos($datos2,_DB_PREFIX_."attachment_lang");
    	
    	$dirdestino = $_SERVER['DOCUMENT_ROOT'].__PS_BASE_URI__."download";
    	
    	
    	$nuevonombre = $dirdestino."/".$uniqid.".".$extension;
    	
    	echo "<br> Copiando ".$archivo." a archivo Final -> ".$nuevonombre;
    	
    	echo system("cp -af ".$archivo." ".$nuevonombre);
    	
    	//eliminarDatos(_DB_PREFIX_."product_attachment","id_product",$idproduct);
    	
    	$datos3["id_product"] = $idproduct;
    	$datos3["id_attachment"] = $idADJ;
    	//print_r($datos3);
    	ingresarDatos($datos3,_DB_PREFIX_."product_attachment");
    	
    	return $nuevonombre;
    }

?>
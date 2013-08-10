<?php
include_once("mime.php");


function getDirectoryList($directory, $tipo=null) 
{
    if($tipo == "delete"){
        if(file_exists($directory."/Thumbs.db"))
            unlink($directory."/Thumbs.db");   
    }
    
    if(is_dir($directory)){
        
        if($handler = opendir($directory)){
            while (($file = readdir($handler)) !== false) {
              // if file isn't this directory or its parent, add it to the results
              if ($file != "." && $file != "..") {
                $results[] = $file;
              }
            }
            closedir($handler);     
        }
    }
    return $results;
  }
  
function buscareferencia($ref)
{
	$x = conexion();
	
	$sql = '
	SELECT `id_product`
	FROM `'._DB_PREFIX_.'product` p
	WHERE p.`reference` = \''.$ref.'\'';

	//echo $sql;
	$result = mysql_query($sql,$x) or die( mysql_error());
	
	if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$array[] = $row;
		}
		//print_r($array);
		$salida = $array[0]["id_product"];
	}else{
		$salida = false;
	}
    return $salida;
}


function borraimagenesant($idproducto){
	// borra de la base de datos
	
	eliminarDatos(_DB_PREFIX_."image","id_product",$idproducto);

}

function sacalangproducto($idproducto,$lang){
	$x = conexion();
		
		$sql = '
		SELECT *
		FROM `'._DB_PREFIX_.'product_lang` p
		WHERE p.`id_product` = \''.$idproducto.'\' AND p.`id_lang` = \''.$lang.'\'';

		//echo $sql;
		$result = mysql_query($sql,$x) or die( mysql_error());
		
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
				$array[] = $row;
			}
		}
		return $array[0];	
}

function getProductosLang($idproduct)
{
    $x = conexion();	
		$sql = '
		SELECT *
		FROM `'._DB_PREFIX_.'product_lang` p
		WHERE p.`id_product` = \''.$idproduct.'\'';

		//echo $sql;
		$result = mysql_query($sql,$x) or die( mysql_error());
        $array = array();
		
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
				$array[] = $row;
			}
		}
		return $array;
}

function moverDIR($desde,$donde){
	
	echo system("mv ".$desde." ".$donde);
	
	return $donde;


}	

?>
<?php
include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/funcBBDD.php');
include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/obtenerDatos.php');
include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');
include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/funciones.php');
//include_once(PS_ADMIN_DIR.'/../../../../classes/AdminTab.php');

function getTranslation($string)
{
    global $_LANGADM;
    
	if (!is_array($_LANGADM))
		return str_replace('"', '&quot;', $string);
	$key = md5(str_replace('\'', '\\\'', $string));
	$str = (key_exists('AdminImportv2'.$key, $_LANGADM)) ? $_LANGADM['AdminImportv2'.$key] : ((key_exists('AdminImportv2'.$key, $_LANGADM)) ? $_LANGADM['AdminImportv2'.$key] : $string);
	return str_replace('"', '&quot;', stripslashes($str));   
}

function subirArchivo($uploaddir)
{

	$file = "file";	
	$tipo = substr($_FILES[$file]['name'], strrpos($_FILES[$file]['name'], ".")+1);
	$nuevoNombre = $uploaddir.date("j-m-Y_G-i-s")."_".$_FILES[$file]['name'];
	
	if(is_file($nuevoNombre)){
		//echo "<br>Cambiando permisos";
		if(chmod($nuevoNombre,0777)){
			unlink($nuevoNombre);
		}else{
			echo "<br> No se pudieron cambiar los permisos";
		}
	}

	if (move_uploaded_file($_FILES[$file]['tmp_name'], $nuevoNombre)) {
    	
		if(chmod($nuevoNombre,0777)){
			//echo "<br> No se pudieron cambiar los permisos";
			}else{
				echo "<br> No se pudieron cambiar los permisos";
			}
	} else {
    	print "<br>Possible file upload attack!  Here's some debugging info:<br>\n";
	}
	
	$codifi = file_get_contents($nuevoNombre);
	
	file_put_contents($nuevoNombre,$codifi); 
		//echo "<br>Cambiando permisos";
		if(chmod($nuevoNombre,0777)){
			//echo "<br> No se pudieron cambiar los permisos";
			}else{
				echo "<br> No se pudieron cambiar los permisos";
			}
	return $nuevoNombre;
}

function ExcelaArray($archivo){
	
	include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/reader.php');
	
	// ExcelFile($filename, $encoding);
	$data = new Spreadsheet_Excel_Reader();
	// Set output Encoding.
	
	//$data->setUTFEncoder('mb');
	//$data->setOutputEncoding('UTF-8');
	$data->setOutputEncoding('CP1251');
	$data->read($archivo);
	
    $salida = array();
	for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
		for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
			//echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";
			$salida[$i][$j] = utf8_encode($data->sheets[0]['cells'][$i][$j]);
		}
		//echo "\n";
	}
	return $salida;
}

$autometas = "NO";

function funcArchivosShowCargaExcel($tipo, $orden = null){
    
	global $cookie;
    $iso_lang = Language::getIsoById($cookie->id_lang);
    
	if(isset($_POST["subir".$tipo]) && $_POST["subir".$tipo]!=""){
		$archivo = subirArchivo(PS_ADMIN_DIR.'/tabs/AdminImportv2/tmp/');
        
		$excel = ExcelaArray($archivo);      
        $i = 1;
        
		echo "<form method='post' enctype='multipart/form-data'>";
		$colExcel = $excel[1];
        
        guardarImportConfig($tipo, $colExcel);
        
		if($orden == 1){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Importing Categories from excel')."</h2>";
        }elseif($orden == 2){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Importing Manufacturers from excel')."</h2>";
        }elseif($orden == 3){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Importing Products from excel')."</h2>";
        }elseif($orden == 4){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Importing Accessories from Excel')."</h2>";
        }
        
		foreach($colExcel as $colE){
            
            if($tipo == "ActualizarProductos"){
                if($colE == "1-Cat" || $colE == "2-Cat" || $colE == "3-Cat"){
                }else{
                    echo "<div class='fila_import_excel'> ".$i." Columna: [".$colE."] ".getTranslation('corresponds to')." ".funcArchivosShowSelectBBDD($tipo,$colE)."</div>";
                    $i++;
                }
            }else{
                if($colE != "Control"){
                    echo "<div class='fila_import_excel'> ".$i." Columna: [".$colE."] ".getTranslation('corresponds to')." ".funcArchivosShowSelectBBDD($tipo,$colE)."</div>";
                    $i++;
                }   
            }
		}
        
		echo "<input type='hidden' name='file' value='".$archivo."'>";
	
        if($tipo == "Accesorios"){
            echo "<hr>";
            echo "<div class='box_import_select'>".getTranslation('Delete all accesories')." 
                    <select name='borraraccesorios'>
                        <option value='NO'>".getTranslation('No')."</option><option value='SI'>".getTranslation('Yes')."</option>
                    </select>
                  </div>";
        }
		
		echo "<hr>";
		
        if($tipo == "Categorias"){
            echo "<div style='margin: 0pt; overflow: hidden;'>  
                    <div style='float: left; width: 450px; margin: 0pt 10px 20px 0pt;'>
                    <p>".getTranslation('Take special care with the columns to import, since you will replace the changes made manually from the Back Office.')."</p>
                    <p>".getTranslation('Example. If you import the columns "1-Cat-order", "2-Cat-order" and "3-Cat-order", you will lose the order assigned manually from the Back Office.')."</p>
                    <p>".getTranslation('To avoid this, it is sufficient not to import the columns or assign them as blank (-----).')."</p>
                    </div>
                    <div class='box_btn_continue' style='float:left;'><input type='submit' name='insertar".$tipo."' value='".getTranslation('Continue')."'></div>
                 </div>";    
        }elseif($tipo == "Fabricantes"){
            echo "<div style='margin: 0pt; overflow: hidden;'>  
                    <div style='float: left; width: 450px; margin: 0pt 10px 20px 0pt;'>
                    <p>".getTranslation('Take special care with the columns to import, since you will replace the changes made manually from the Back Office.')."</p>
                    <p>".getTranslation('To avoid this, it is sufficient not to import the columns or assign them as blank (-----).')."</p>
                    </div>
                    <div class='box_btn_continue' style='float:left;'><input type='submit' name='insertar".$tipo."' value='".getTranslation('Continue')."'></div>
                 </div>";    
        }elseif($tipo == "Productos"){
            echo "<div style='margin:0; overflow: hidden;'>  
                    <div style='float: left; width: 450px; margin: 0pt 10px 20px 0pt;'>
                    <p>".getTranslation('Take special care with the columns to import, since you will replace the changes made manually from the Back Office.')."</p>
                    <p>".getTranslation('Example: If you import the column "Order", you will lose the order assigned manually from the Back Office.')."</p>
                    <p>".getTranslation('To avoid this, it is sufficient not to import the columns or assign them as blank (-----).')."</p>
                    </div>
                    <div class='box_btn_continue' style='float:left;'><input type='submit' name='insertar".$tipo."' value='".getTranslation('Continue')."'></div>
                 </div>";    
        }elseif($tipo == "Accesorios"){
            echo "<div style='margin:0; overflow: hidden;'>  
                    <div style='float: left; width: 450px; margin: 0pt 10px 20px 0pt;'>
                    </div>
                    <div class='box_btn_continue' style='float:left;'><input type='submit' name='insertar".$tipo."' value='".getTranslation('Continue')."'></div>
                 </div>";    
        }
        
		echo "</form>";
		
	}elseif((isset($_POST["insertar".$tipo]) && $_POST["insertar".$tipo] == "Continuar") || (isset($_POST["insertar".$tipo]) && $_POST["insertar".$tipo] == "Continue")){
		set_time_limit(600);
		if($orden == 1){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Processing importation of categories')." </h2>";    
        }elseif($orden == 2){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Processing importation of Manufacturers')." </h2>";    
        }elseif($orden == 3){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Processing importation of Products')." </h2>";    
        }elseif($orden == 4){
            echo "<h2 class='title_h2_import'>".$orden.". ".getTranslation('Processing importation of Accessories')." </h2>";    
        }
				
		flush();
		
		$archivo = $_POST["file"];
		//$excel = ExcelaArray($archivo);
		
		flush();
		funcArchivosGrabaDatos();
	}else{
        
        echo "<div class='form_import_excel'>";
        
        if($orden == 1){
            echo "\n<h1><span class='sp_import_form'>".$orden.". </span>".getTranslation('Importing Categories from excel')."</h1>";
        }elseif($orden == 2){
            echo "\n<h1><span class='sp_import_form'>".$orden.". </span>".getTranslation('Importing Manufacturers from excel')."</h1>";
        }elseif($orden == 3){
            echo "\n<h1><span class='sp_import_form'>".$orden.". </span>".getTranslation('Importing Products from excel')."</h1>";
        }elseif($orden == 4){
            echo "\n<h1><span class='sp_import_form'>".$orden.". </span>".getTranslation('Importing Accessories from Excel')."</h1>"; 
        }
        
		echo "<form method='post' enctype='multipart/form-data'>";
		echo "<label class='lb_import_form'>".getTranslation('File:')."</label> <input type='file' name='file'>";
		echo "<input type='submit' name='subir".$tipo."' value='".getTranslation('Send')."'>";
		echo "</form>";
        echo "</div>";	
	}
}


function funcArchivosGrabaDatos(){
	//print_r($_POST);
	
	set_time_limit(600);
	//ob_start();
	flush();
	
	echo '<script type="text/javascript">
			$("autoscro").autoscroll("start");
		</script>';
	echo "\n<br><br><div id='autoscro' style='height:200px;overflow:auto;'>";
	
	echo "<br>vaciarcat->".$_POST["vaciarcat"];
	echo "<br>vaciarprod->".$_POST["vaciarprod"];
	echo "<br>vaciarfab->".$_POST["vaciarfab"];
	echo "<br>autometas->".$_POST["autometas"];
	
	echo "<br>Borrar Codigos Especiales->".$_POST["borrarcodigos"];
	
	if($_POST["vaciarcat"]=="SI"){
		borratablascat();
	}
	
	if($_POST["vaciarprod"]=="SI"){
		borratablasprod();
	}
	
	if($_POST["vaciarfab"]=="SI"){
		borratablasmanu();
	}
	
	global $autometas;
	if($_POST["autometas"]=="SI"){
		$autometas = "SI";
	}

	global $borrarimg;
	if($_POST["borrarimg"]=="SI"){
		$borrarimg = "SI";
	}
	
	global $division;
	if($_POST["division"]=="SI"){
		$division = "SI";
	}

	if($_POST["borrarcodigos"]=="SI"){
		$borrarcodigos = "SI";
	}
	
	flush();

	if(($_POST["insertarCategorias"] == "Continuar") || ($_POST["insertarCategorias"] == "Continue")){
		
		echo "<h2>Insertando Categorias</h2>";
		
		$archivo = $_POST["file"];
		$excel = ExcelaArray($archivo);
		$colExcel = $excel[1];
		$cuenta = 0;
		$ultimopost = "";
        
		foreach($colExcel as $colE)
        {
			if($colE != "Control"){
                $valorpost = $_POST["categoriasNuevas"][$cuenta];
    			echo "\n<br> Columna: [".$colE."] corresponde a ".$_POST["categoriasNuevas"][$cuenta];
    			$colE = base64_encode($colE);
    			$nuevascols[$colE]=$_POST["categoriasNuevas"][$cuenta];			
    			$cuenta++;
			}
			/*$valorpost = $_POST["categoriasNuevas"][$cuenta];
			echo "\n<br> Columna: [".$colE."] corresponde a ".$_POST["categoriasNuevas"][$cuenta];
			$colE = base64_encode($colE);
			$nuevascols[$colE]=$_POST["categoriasNuevas"][$cuenta];			
			$cuenta++;*/
		}
        
		$catsN = $_POST["categoriasNuevas"];
		$ordenado = array();
		//guardaconfi("catsNuevas",$nuevascols);
		
		for($linea=2;$linea<=sizeof($excel);$linea++){

			for($columna=1;$columna<=sizeof($excel[$linea]);$columna++){
                //if($excel[$linea][$columna])
                //{
                    $ordenado[$linea][$nuevascols[base64_encode($excel[1][$columna])]] = $excel[$linea][$columna];
                //}
			}
		}

		$tama = sizeof($ordenado) +2;
        $contControl = 9;
        $controlUnico = 1;
		for($linea=2;$linea<$tama;$linea++){
			//ingresar Categoria
			echo "<hr>";
            $controlVacio = $ordenado[$linea]["Cat-Ref"];
            
            $categoria = array();
            $aux_categoria = array();
            $subcategoria = array();
            $familia = array();
            $descripcion_lang = array();
            
            isset($ordenado[$linea]["1-Cat-lang-1"]) ? $aux_categoria['lang-1'] = $ordenado[$linea]["1-Cat-lang-1"] : '';
            isset($ordenado[$linea]["1-Cat-lang-2"]) ? $aux_categoria['lang-2'] = $ordenado[$linea]["1-Cat-lang-2"] : '';
            isset($ordenado[$linea]["1-Cat-lang-3"]) ? $aux_categoria['lang-3'] = $ordenado[$linea]["1-Cat-lang-3"] : '';
            isset($ordenado[$linea]["1-Cat-lang-4"]) ? $aux_categoria['lang-4'] = $ordenado[$linea]["1-Cat-lang-4"] : '';
            isset($ordenado[$linea]["1-Cat-lang-5"]) ? $aux_categoria['lang-5'] = $ordenado[$linea]["1-Cat-lang-5"] : '';
            
            $namesNoVacio = nombresNoVacio($aux_categoria);
            
            if($controlVacio == ""){
                $categoria_aux = buscaNameCategoryLang($namesNoVacio[0]);
                $existe = existeCategoriaLang($namesNoVacio[0]);
                if($existe){
                    $controlUnico = $categoria_aux["control_category"];
                    //echo "/////////> ".$controlUnico."<br/>";
                }else{
                    $ultimaCategoria = ultimaCategoria();
                    $controlUnico = $ultimaCategoria["control_category"] + 1;
                    //echo "***** ".$controlUnico." *****<br/>";
                }
                $control = $controlUnico;
                
                $cantidadCate = getTotalCategorias();
                if($cantidadCate < 10)
                    $control_2 = "100".$cantidadCate;
                if($cantidadCate > 10)
                    $control_2 = "10".$cantidadCate;
                if($cantidadCate > 100)
                    $control_2 = "1".$cantidadCate;
                if($cantidadCate > 999)
                    $control_2 = "1".$cantidadCate;
                    
                $name_1_es = (isset($ordenado[$linea]["1-Cat-lang-1"]) && $ordenado[$linea]["1-Cat-lang-1"] != "") ? $ordenado[$linea]["1-Cat-lang-1"]."----".$control."----" : "";
                $name_1_fr = (isset($ordenado[$linea]["1-Cat-lang-2"]) && $ordenado[$linea]["1-Cat-lang-2"] != "") ? $ordenado[$linea]["1-Cat-lang-2"]."----".$control."----" : "";
                $name_1_de = (isset($ordenado[$linea]["1-Cat-lang-3"]) && $ordenado[$linea]["1-Cat-lang-3"] != "") ? $ordenado[$linea]["1-Cat-lang-3"]."----".$control."----" : "";
                $name_1_pt = (isset($ordenado[$linea]["1-Cat-lang-4"]) && $ordenado[$linea]["1-Cat-lang-4"] != "") ? $ordenado[$linea]["1-Cat-lang-4"]."----".$control."----" : "";
                $name_1_en = (isset($ordenado[$linea]["1-Cat-lang-5"]) && $ordenado[$linea]["1-Cat-lang-5"] != "") ? $ordenado[$linea]["1-Cat-lang-5"]."----".$control."----" : "";
                
                $name_2_es = (isset($ordenado[$linea]["2-Cat-lang-1"]) && $ordenado[$linea]["2-Cat-lang-1"] != "") ? $ordenado[$linea]["2-Cat-lang-1"]."----".$control."0----" : "";
                $name_2_fr = (isset($ordenado[$linea]["2-Cat-lang-2"]) && $ordenado[$linea]["2-Cat-lang-2"] != "") ? $ordenado[$linea]["2-Cat-lang-2"]."----".$control."0----" : "";
                $name_2_de = (isset($ordenado[$linea]["2-Cat-lang-3"]) && $ordenado[$linea]["2-Cat-lang-3"] != "") ? $ordenado[$linea]["2-Cat-lang-3"]."----".$control."0----" : "";
                $name_2_pt = (isset($ordenado[$linea]["2-Cat-lang-4"]) && $ordenado[$linea]["2-Cat-lang-4"] != "") ? $ordenado[$linea]["2-Cat-lang-4"]."----".$control."0----" : "";
                $name_2_en = (isset($ordenado[$linea]["2-Cat-lang-5"]) && $ordenado[$linea]["2-Cat-lang-5"] != "") ? $ordenado[$linea]["2-Cat-lang-5"]."----".$control."0----" : "";
                
                $name_3_es = (isset($ordenado[$linea]["3-Cat-lang-1"]) && $ordenado[$linea]["3-Cat-lang-1"] != "") ? $ordenado[$linea]["3-Cat-lang-1"]."----".$control_2."----" : "";
                $name_3_fr = (isset($ordenado[$linea]["3-Cat-lang-2"]) && $ordenado[$linea]["3-Cat-lang-2"] != "") ? $ordenado[$linea]["3-Cat-lang-2"]."----".$control_2."----" : "";
                $name_3_de = (isset($ordenado[$linea]["3-Cat-lang-3"]) && $ordenado[$linea]["3-Cat-lang-3"] != "") ? $ordenado[$linea]["3-Cat-lang-3"]."----".$control_2."----" : "";
                $name_3_pt = (isset($ordenado[$linea]["3-Cat-lang-4"]) && $ordenado[$linea]["3-Cat-lang-4"] != "") ? $ordenado[$linea]["3-Cat-lang-4"]."----".$control_2."----" : "";
                $name_3_en = (isset($ordenado[$linea]["3-Cat-lang-5"]) && $ordenado[$linea]["3-Cat-lang-5"] != "") ? $ordenado[$linea]["3-Cat-lang-5"]."----".$control_2."----" : "";
                
                isset($ordenado[$linea]["1-Cat-lang-1"]) ? $categoria['lang-1'] =  $name_1_es : '';
                isset($ordenado[$linea]["1-Cat-lang-2"]) ? $categoria['lang-2'] =  $name_1_fr : '';
                isset($ordenado[$linea]["1-Cat-lang-3"]) ? $categoria['lang-3'] =  $name_1_de : '';
                isset($ordenado[$linea]["1-Cat-lang-4"]) ? $categoria['lang-4'] =  $name_1_pt : '';
                isset($ordenado[$linea]["1-Cat-lang-5"]) ? $categoria['lang-5'] =  $name_1_en : '';
                
                isset($ordenado[$linea]["2-Cat-lang-1"]) ? $subcategoria['lang-1'] = $name_2_es : '';
                isset($ordenado[$linea]["2-Cat-lang-2"]) ? $subcategoria['lang-2'] = $name_2_fr : '';
                isset($ordenado[$linea]["2-Cat-lang-3"]) ? $subcategoria['lang-3'] = $name_2_de : '';
                isset($ordenado[$linea]["2-Cat-lang-4"]) ? $subcategoria['lang-4'] = $name_2_pt : '';
                isset($ordenado[$linea]["2-Cat-lang-5"]) ? $subcategoria['lang-5'] = $name_2_en : '';
                
                isset($ordenado[$linea]["3-Cat-lang-1"]) ? $familia['lang-1'] = $name_3_es : '';
                isset($ordenado[$linea]["3-Cat-lang-2"]) ? $familia['lang-2'] = $name_3_fr : '';
                isset($ordenado[$linea]["3-Cat-lang-3"]) ? $familia['lang-3'] = $name_3_de : '';
                isset($ordenado[$linea]["3-Cat-lang-4"]) ? $familia['lang-4'] = $name_3_pt : '';
                isset($ordenado[$linea]["3-Cat-lang-5"]) ? $familia['lang-5'] = $name_3_en : '';
            }elseif($controlVacio != ""){
                $control = $ordenado[$linea]["Cat-Ref"];
                isset($ordenado[$linea]["1-Cat-lang-1"]) ? $categoria['lang-1'] =  $ordenado[$linea]["1-Cat-lang-1"] : '';
                isset($ordenado[$linea]["1-Cat-lang-2"]) ? $categoria['lang-2'] =  $ordenado[$linea]["1-Cat-lang-2"] : '';
                isset($ordenado[$linea]["1-Cat-lang-3"]) ? $categoria['lang-3'] =  $ordenado[$linea]["1-Cat-lang-3"] : '';
                isset($ordenado[$linea]["1-Cat-lang-4"]) ? $categoria['lang-4'] =  $ordenado[$linea]["1-Cat-lang-4"] : '';
                isset($ordenado[$linea]["1-Cat-lang-5"]) ? $categoria['lang-5'] =  $ordenado[$linea]["1-Cat-lang-5"] : '';
                
                isset($ordenado[$linea]["2-Cat-lang-1"]) ? $subcategoria['lang-1'] = $ordenado[$linea]["2-Cat-lang-1"] : '';
                isset($ordenado[$linea]["2-Cat-lang-2"]) ? $subcategoria['lang-2'] = $ordenado[$linea]["2-Cat-lang-2"] : '';
                isset($ordenado[$linea]["2-Cat-lang-3"]) ? $subcategoria['lang-3'] = $ordenado[$linea]["2-Cat-lang-3"] : '';
                isset($ordenado[$linea]["2-Cat-lang-4"]) ? $subcategoria['lang-4'] = $ordenado[$linea]["2-Cat-lang-4"] : '';
                isset($ordenado[$linea]["2-Cat-lang-5"]) ? $subcategoria['lang-5'] = $ordenado[$linea]["2-Cat-lang-5"] : '';
                
                isset($ordenado[$linea]["3-Cat-lang-1"]) ? $familia['lang-1'] = $ordenado[$linea]["3-Cat-lang-1"] : '';
                isset($ordenado[$linea]["3-Cat-lang-2"]) ? $familia['lang-2'] = $ordenado[$linea]["3-Cat-lang-2"] : '';
                isset($ordenado[$linea]["3-Cat-lang-3"]) ? $familia['lang-3'] = $ordenado[$linea]["3-Cat-lang-3"] : '';
                isset($ordenado[$linea]["3-Cat-lang-4"]) ? $familia['lang-4'] = $ordenado[$linea]["3-Cat-lang-4"] : '';
                isset($ordenado[$linea]["3-Cat-lang-5"]) ? $familia['lang-5'] = $ordenado[$linea]["3-Cat-lang-5"] : '';
            }
            
            isset($ordenado[$linea]["Cat-description-lang-1"]) ? $descripcion_lang['lang-1'] = $ordenado[$linea]["Cat-description-lang-1"] : '';
            isset($ordenado[$linea]["Cat-description-lang-2"]) ? $descripcion_lang['lang-2'] = $ordenado[$linea]["Cat-description-lang-2"] : '';
            isset($ordenado[$linea]["Cat-description-lang-3"]) ? $descripcion_lang['lang-3'] = $ordenado[$linea]["Cat-description-lang-3"] : '';
            isset($ordenado[$linea]["Cat-description-lang-4"]) ? $descripcion_lang['lang-4'] = $ordenado[$linea]["Cat-description-lang-4"] : '';
            isset($ordenado[$linea]["Cat-description-lang-5"]) ? $descripcion_lang['lang-5'] = $ordenado[$linea]["Cat-description-lang-5"] : '';
            
            $isVacio = checkNombreNull($categoria);
            $isVacio2 = checkNombreNull($subcategoria);
            $isVacio3 = checkNombreNull($familia);
            
            if(count($isVacio) > 0){
				//echo "<br> if -- ";
				
                $cates["categoria"] = $categoria;
                //$cates["control"] = $ordenado[$linea]["Cat-control"];
                $cates["control"] = $control;
                if($isVacio2 > 0){
                    $cates["subcategoria"] = $subcategoria;
                }else{
                    $cates["subcategoria"] = "";
                }
    
                if($isVacio3 > 0){
                    $cates["familia"] = $familia;
                }else{
                    $cates["familia"]= "";
                }
                
                $cates["categoria_referencia"] = $ordenado[$linea]["Cat-Ref"];
                /*if($ordenado[$linea]["Cat-Ref"] != ""){
                    $cates["categoria_referencia"] = $control;
                }else{
                    $cates["categoria_referencia"]= "";   
                }*/
                
                $cates["desc_categoria"] = $descripcion_lang;
				
                $cates["orden_1"] = $ordenado[$linea]["1-Cat-order"];
                $cates["orden_2"] = $ordenado[$linea]["2-Cat-order"];
                $cates["orden_3"] = $ordenado[$linea]["3-Cat-order"];
                
                if($ordenado[$linea]["Cat-active"] != ""){
					$cates["activo_categoria"]=$ordenado[$linea]["Cat-active"];
					$cates["activo_subcategoria"]=$ordenado[$linea]["Cat-active"];
					$cates["activo_familia"]=$ordenado[$linea]["Cat-active"];
				}
				
				if($ordenado[$linea]["Cat-image"]!="" ){
					$cates["URL_imagen_categoria"]=$ordenado[$linea]["Cat-image"];
					$cates["URL_imagen_subcategoria"]=$ordenado[$linea]["Cat-image"];
					$cates["URL_imagen_familia"]=$ordenado[$linea]["Cat-image"];
				}
                
                /*echo "<pre>";
                print_r($cates);
                echo "</pre>";*/
                
				$idutlimacat = revisaas400($cates);
			}
		}
        if($borrarcodigos=="SI"){
    		//borracodigos();
    	}
        //convertirNombreOrden();
	} // fin if insertar categorias
    
    if($_POST["insertarFabricantes"]=="Continuar" || $_POST["insertarFabricantes"]=="Continue"){
        
        echo "<h2>Insertando Fabricantes</h2>";
		$archivo = $_POST["file"];
		$excel = ExcelaArray($archivo);	
		
		$colExcel = $excel[1];
		$cuenta = 0;
		$ultimopost = "";
		$cuentavals = 0;
 
		foreach($colExcel as $colE){
		
			$valorpost = $_POST["fabricantesNuevos"][$cuenta];
			if($valorpost == $ultimopost && $valorpost == "-----"){
				$valorfinal = $valorpost."--".$cuentavals;
				$maxdescri = $cuentavals;
				$cuentavals++;
                echo "======>".$valorfinal;
			}else{
				$valorfinal = $valorpost;
			}
			
			echo "\n<br> Columna: [".$colE."] corresponde a ".$valorfinal;
			$colE = base64_encode($colE);
			$nuevascols[$colE]=$valorfinal;
			
			$ultimopost = $valorpost;
			$cuenta++;
		}
        
		flush();
        
        $catsN = $_POST["fabricantesNuevos"];
		//guardaconfi("catsNuevasProductos",$nuevascols);
		for($linea=2;$linea<=sizeof($excel);$linea++){
			for($columna=1;$columna<=sizeof($excel[$linea]);$columna++){
				$ordenado[$linea][$nuevascols[base64_encode($excel[1][$columna])]] = $excel[$linea][$columna];
			}
		}
        
        $tama = sizeof($ordenado);
		//echo "<br>Total de lineas: ".$tama;
		for($linea=2;$linea<=$tama;$linea++){
            echo "<hr>";
            $des_small = array();
            $description = array();
            if($ordenado[$linea]["Manufacture"]!=""){
                echo "\n<br>".getTranslation('Name Manufacturer')." -> |".$ordenado[$linea]["Manufacture"]."| ";
                
                /*isset($ordenado[$linea]["Manufacture-description-small-lang-1"]) ? $des_small['es'] = $ordenado[$linea]["Manufacture-description-small-lang-1"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-2"]) ? $des_small['fr'] = $ordenado[$linea]["Manufacture-description-small-lang-2"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-3"]) ? $des_small['de'] = $ordenado[$linea]["Manufacture-description-small-lang-3"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-4"]) ? $des_small['pt'] = $ordenado[$linea]["Manufacture-description-small-lang-4"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-5"]) ? $des_small['en'] = $ordenado[$linea]["Manufacture-description-small-lang-5"] : '';
                
                isset($ordenado[$linea]["Manufacture-description-lang-1"]) ? $description['es'] = $ordenado[$linea]["Manufacture-description-lang-1"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-2"]) ? $description['fr'] = $ordenado[$linea]["Manufacture-description-lang-2"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-3"]) ? $description['de'] = $ordenado[$linea]["Manufacture-description-lang-3"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-4"]) ? $description['pt'] = $ordenado[$linea]["Manufacture-description-lang-4"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-5"]) ? $description['en'] = $ordenado[$linea]["Manufacture-description-lang-5"] : '';*/
                
                isset($ordenado[$linea]["Manufacture-description-small-lang-1"]) ? $des_small['lang-1'] = $ordenado[$linea]["Manufacture-description-small-lang-1"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-2"]) ? $des_small['lang-2'] = $ordenado[$linea]["Manufacture-description-small-lang-2"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-3"]) ? $des_small['lang-3'] = $ordenado[$linea]["Manufacture-description-small-lang-3"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-4"]) ? $des_small['lang-4'] = $ordenado[$linea]["Manufacture-description-small-lang-4"] : '';
                isset($ordenado[$linea]["Manufacture-description-small-lang-5"]) ? $des_small['lang-5'] = $ordenado[$linea]["Manufacture-description-small-lang-5"] : '';
                
                isset($ordenado[$linea]["Manufacture-description-lang-1"]) ? $description['lang-1'] = $ordenado[$linea]["Manufacture-description-lang-1"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-2"]) ? $description['lang-2'] = $ordenado[$linea]["Manufacture-description-lang-2"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-3"]) ? $description['lang-3'] = $ordenado[$linea]["Manufacture-description-lang-3"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-4"]) ? $description['lang-4'] = $ordenado[$linea]["Manufacture-description-lang-4"] : '';
                isset($ordenado[$linea]["Manufacture-description-lang-5"]) ? $description['lang-5'] = $ordenado[$linea]["Manufacture-description-lang-5"] : '';
                
                $data["Nombre"] = $ordenado[$linea]["Manufacture"];
				$data["Descripcion"] = $description;
                $data["DescripcionBreve"] = $des_small;
				$data["URL_imagen"] = $ordenado[$linea]["Manufacture-image"];
                
                $idpFab = agregaFabricante($data);
			}
		}
        echo "<br><hr>";
    }
	
	if(($_POST["insertarProductos"]=="Continuar" || $_POST["insertarProductos"]=="Continue")){
		
        $insertProd = $_POST["insertarProductos"];
        $updateProd = $_POST["insertarActualizarProductos"];
		$archivo = $_POST["file"];
        
		$excel = ExcelaArray($archivo);
		
		$colExcel = $excel[1];
		$cuenta = 0;
		
		$ultimopost = "";
		$cuentavals = 0;
        $$maxdescri = 0;
		foreach($colExcel as $colE){
		
			$valorpost = $_POST["categoriasNuevas"][$cuenta];
			if($valorpost == $ultimopost && $valorpost != "-----"){
				$valorfinal = $valorpost."--".$cuentavals;
				$maxdescri = $cuentavals;
				$cuentavals++;
                echo "======>".$valorfinal;
			}else{
				$valorfinal = $valorpost;
			}
            if($updateProd != "" && ($updateProd == "Continuar" || $updateProd == "Continue")){
                if($colE == $valorfinal){
                    echo "\n<br> Columna: [".$colE."] corresponde a ".$valorfinal;
                    $colE = base64_encode($colE);
                    $nuevascols[$colE]=$valorfinal;
        
                    $ultimopost = $valorpost;
                    $cuenta++;      
                }   
            }else{
                echo "\n<br> Columna: [".$colE."] corresponde a ".$valorfinal;
    			$colE = base64_encode($colE);
    			$nuevascols[$colE]=$valorfinal;
    			
    			$ultimopost = $valorpost;
    			$cuenta++;
            }
		}
		flush();
        
		$catsN = $_POST["categoriasNuevas"];
		//guardaconfi("catsNuevasProductos",$nuevascols);
		
        $ordenado = array();
        
		for($linea=2;$linea<=sizeof($excel);$linea++)
        {
			for($columna=1;$columna<=sizeof($excel[$linea]);$columna++)
				$ordenado[$linea][$nuevascols[base64_encode($excel[1][$columna])]] = $excel[$linea][$columna];
		}
        
        $des_lang = array();
		$tama = sizeof($ordenado)+2;
		//echo "<br>Total de lineas: ".$tama;
        
        $cant_final = CantidadDescripciones($nuevascols);
        
		for($linea=2;$linea<$tama;$linea++){
			echo "<hr>";
			
            $nombres_lang = array();
            $valor_lang = array();
            
            isset($ordenado[$linea]["Name-lang-1"]) ? $nombres_lang['lang-1'] = $ordenado[$linea]["Name-lang-1"] : '';
            isset($ordenado[$linea]["Name-lang-2"]) ? $nombres_lang['lang-2'] = $ordenado[$linea]["Name-lang-2"] : '';
            isset($ordenado[$linea]["Name-lang-3"]) ? $nombres_lang['lang-3'] = $ordenado[$linea]["Name-lang-3"] : '';
            isset($ordenado[$linea]["Name-lang-4"]) ? $nombres_lang['lang-4'] = $ordenado[$linea]["Name-lang-4"] : '';
            isset($ordenado[$linea]["Name-lang-5"]) ? $nombres_lang['lang-5'] = $ordenado[$linea]["Name-lang-5"] : '';
            
            isset($ordenado[$linea]["Name-lang-1"]) ? $valor_lang['lang-1'] = 1 : '';
            isset($ordenado[$linea]["Name-lang-2"]) ? $valor_lang['lang-2'] = 2 : '';
            isset($ordenado[$linea]["Name-lang-3"]) ? $valor_lang['lang-3'] = 3 : '';
            isset($ordenado[$linea]["Name-lang-4"]) ? $valor_lang['lang-4'] = 4 : '';
            isset($ordenado[$linea]["Name-lang-5"]) ? $valor_lang['lang-5'] = 5 : '';
            
            $cant_lang = count($nombres_lang);    
            $aux_cant = $cant_final - $cant_lang;
            $tamfinal = $aux_cant/$cant_lang;
            $des_lang = array();
            
            foreach($valor_lang as $key => $value){
                $des = "";
                for($es = 1; $es <= $tamfinal; $es++){
                    $aux_des = "Description-".$es."-lang-".$valor_lang[$key];
                    if(isset($ordenado[$linea][$aux_des]))
                        $des = $des."\n".$ordenado[$linea][$aux_des];
                }
                
                if($key == "lang-1"){
                    $des_lang["lang-1"] = $des;
                }elseif($key == "lang-2"){
                    $des_lang["lang-2"] = $des;
                }elseif($key == "lang-3"){
                    $des_lang["lang-3"] = $des;
                }elseif($key == "lang-4"){
                    $des_lang["lang-4"] = $des;
                }elseif($key == "lang-5"){
                    $des_lang["lang-5"] = $des;   
                }
            }          
			// fabricante
            if($ordenado[$linea]["Manufecture"]!=""){
				$idmanu = buscaFabricante($ordenado[$linea]["Manufecture"]);
			}else{
				$idmanu = "";
			}
            
            //proveedor supplier
            if($ordenado[$linea]["Supplier"]!=""){
				$supplier["Nombre"]=$ordenado[$linea]["Supplier"];
                $supplier["descripcion"] = "";
				$idsupplier = agregaProveedor($supplier);
			}else{
				$idsupplier = "";
			}
            
            //echo "Ref ==== ".$ordenado[$linea]["Ref"]." ";
            $existeRef = existeProductReference($ordenado[$linea]["Ref"]);
            //var_dump($existeRef);
            
            if($ordenado[$linea]["Ref"] != "" || $nombres_lang != ""){
				
				/*if($ordenado[$linea]["Categoria"]!=""){
    				$txtcat = $ordenado[$linea]["Categoria"];
    				$txtcat = explode("*",$txtcat);
    				$txtcat = $txtcat[sizeof($txtcat)-1];
    				$idcat = buscaPadre($txtcat);
                    //echo "entra aqui";
				}else{
				    $idcat = $idutlimacat;
				}*/                
                
                if($existeRef == false){
                    if($ordenado[$linea]["1-Cat"]!="" && $ordenado[$linea]["2-Cat"]=="" && $ordenado[$linea]["3-Cat"] ==""){
                        $categoria_1 = $ordenado[$linea]["1-Cat"];
                        //echo "entra 1 ".$categoria_1." <br/>";
                        //idcat = buscaPadre($categoria_1);
                        $idcat = buscarPadre($categoria_1);
                        $nombreCates = $categoria_1;
                        $mensaje = "Es no es null para importar prod caso 1.";
                        
                    }elseif($ordenado[$linea]["1-Cat"]!="" && $ordenado[$linea]["2-Cat"]!="" && $ordenado[$linea]["3-Cat"] ==""){
                        $categoria_1 = $ordenado[$linea]["1-Cat"];
                        $categoria_2 = $ordenado[$linea]["2-Cat"];
                        $nombres_cate = array($categoria_1, $categoria_2);
                        $idcat = buscarCategoriaPadre($nombres_cate);
                        $nombreCates = $categoria_1." ". $categoria_2;
                        //echo "entra 2 <br/>";
                        //$idcat = buscaPadre($categoria_2);
                        $mensaje = "Es no es null para importar prod. caso 2";
                        
                    }elseif($ordenado[$linea]["1-Cat"]!="" && $ordenado[$linea]["2-Cat"]!="" && $ordenado[$linea]["3-Cat"]!=""){
                        $categoria_1 = $ordenado[$linea]["1-Cat"];
                        $categoria_2 = $ordenado[$linea]["2-Cat"];
                        $categoria_3 = $ordenado[$linea]["3-Cat"];
                        $nombres_cate = array($categoria_1, $categoria_2,$categoria_3);
                        $idcat = buscarCategoriaPadre($nombres_cate);
                        $nombreCates = $categoria_1." ". $categoria_2. " ".$categoria_3;
                        //echo "entra 3 <br/>";
                        //$idcat = buscaPadre($categoria_3);
                        $mensaje = "Es no es null para importar prod. caso 3";
                    }elseif($ordenado[$linea]["1-Cat"] == "" && $ordenado[$linea]["2-Cat"] == "" && $ordenado[$linea]["3-Cat"] == ""){
                        $idcat = buscacathome();
                    }
                    
                    if(is_null($idcat)){
                        $idcat = buscacathome();
                        $nombreCates = "Inicio";
                        $mensaje = "Es null para importar prod.";
                    }
                }elseif($existeRef == true){
                    $idcat = "";
                    //$nombreCates = $categoria_1." ". $categoria_2. " ".$categoria_3;
                    $mensaje = "Es vacio para importar actualizacion prod.";
                }
                
				$descripcionSmall = array();
                $textAvailable = array();
                $textOff = array();
                
                isset($ordenado[$linea]["Description-small-lang-1"]) ? $descripcionSmall['lang-1'] = $ordenado[$linea]["Description-small-lang-1"] : '';
                isset($ordenado[$linea]["Description-small-lang-2"]) ? $descripcionSmall['lang-2'] = $ordenado[$linea]["Description-small-lang-2"] : '';
                isset($ordenado[$linea]["Description-small-lang-3"]) ? $descripcionSmall['lang-3'] = $ordenado[$linea]["Description-small-lang-3"] : '';
                isset($ordenado[$linea]["Description-small-lang-4"]) ? $descripcionSmall['lang-4'] = $ordenado[$linea]["Description-small-lang-4"] : '';
                isset($ordenado[$linea]["Description-small-lang-5"]) ? $descripcionSmall['lang-5'] = $ordenado[$linea]["Description-small-lang-5"] : '';
                
                isset($ordenado[$linea]["Text-available-lang-1"]) ? $textAvailable['lang-1'] = $ordenado[$linea]["Text-available-lang-1"] : '';
                isset($ordenado[$linea]["Text-available-lang-2"]) ? $textAvailable['lang-2'] = $ordenado[$linea]["Text-available-lang-2"] : '';
                isset($ordenado[$linea]["Text-available-lang-3"]) ? $textAvailable['lang-3'] = $ordenado[$linea]["Text-available-lang-3"] : '';
                isset($ordenado[$linea]["Text-available-lang-4"]) ? $textAvailable['lang-4'] = $ordenado[$linea]["Text-available-lang-4"] : '';
                isset($ordenado[$linea]["Text-available-lang-5"]) ? $textAvailable['lang-5'] = $ordenado[$linea]["Text-available-lang-5"] : '';
                
                isset($ordenado[$linea]["Text-off-stock-lang-1"]) ? $textOff['lang-1'] = $ordenado[$linea]["Text-off-stock-lang-1"] : '';
                isset($ordenado[$linea]["Text-off-stock-lang-2"]) ? $textOff['lang-2'] = $ordenado[$linea]["Text-off-stock-lang-2"] : '';
                isset($ordenado[$linea]["Text-off-stock-lang-3"]) ? $textOff['lang-3'] = $ordenado[$linea]["Text-off-stock-lang-3"] : '';
                isset($ordenado[$linea]["Text-off-stock-lang-4"]) ? $textOff['lang-4'] = $ordenado[$linea]["Text-off-stock-lang-4"] : '';
                isset($ordenado[$linea]["Text-off-stock-lang-5"]) ? $textOff['lang-5'] = $ordenado[$linea]["Text-off-stock-lang-5"] : '';
                
                $data["division"] = $division;
                $data["Nombre"] = $nombres_lang;
				$data["idsupplier"] = $idsupplier;
                $data["idmanu"] = $idmanu;
				$data["idcat"] = $idcat;
                $data["Orden"] = $ordenado[$linea]["Order"];
				$data["Referencia"] = $ordenado[$linea]["Ref"];
                $data["Activo"] = $ordenado[$linea]["Active"];               
                $data["Precio"] = $ordenado[$linea]["Price-without-TAX"];
                $data["idiva"] = sacaidIva($ordenado[$linea]["TAX"]);
                $data["Descripcion"] = $des_lang;
                $data["DescripcionBreve"] = $descripcionSmall;
                $data["Peso"] = $ordenado[$linea]["Weight"];
                $data["Ecotasa"] = $ordenado[$linea]["Ecotax"];
                $data["EnRebaja"] = $ordenado[$linea]["Sale"];
                $data["ImporteRebaja"] = $ordenado[$linea]["Sale-amount"];
                $data["RebajaPor"] = $ordenado[$linea]["Sale-%"];
                $data["RebajaDesde"] = $ordenado[$linea]["Sale-from"];
                $data["RebajaHasta"] = $ordenado[$linea]["Sale-up"];
                $data["Cantidad"] = $ordenado[$linea]["Stock"];
                $data["SupplierReferencia"] = $ordenado[$linea]["Ref-supplier"];
                $data["TextoDisponible"] = $textAvailable;
                $data["TextoEspera"] = $textOff;
                
                if($data["Referencia"] != ""){
                    /*echo "<pre>";
                    print_r($data);
                    echo "</pre>";*/
                    if($existeRef == false){
                        echo "Insert Productos"."<br/>";
                        $idproducto = agregaProducto($data);
                    }elseif($existeRef == true){
                        echo "Update Productos"."<br/>";
                        $idproducto = updateProducto($data);
                    }   
                }
			} // fin if nombre!=""
		} // fi for lineas
        
        //setProductosUpdateActive();
        $url_redirec = 'searchcron.php?full=1&token='.substr(_COOKIE_KEY_, 34, 8);
        /*echo '
    		<script type="text/javascript">
                jQuery(function(){
                    var redirigir = \''.$url_redirec.'\';
                    setTimeout(function(){
                        window.location= redirigir;
                    }, 1000);
                });  
    		</script>
		';*/
	} // fin if insertar producto	

	if($_POST["insertarAccesorios"]== "Continuar" || $_POST["insertarAccesorios"]=="Continue"){
        
        if($_POST["borraraccesorios"] == "SI"){
            DeleteAccessories();   
        }
        
		$archivo = $_POST["file"];
		$excel = ExcelaArray($archivo);
		$colExcel = $excel[1];
		$cuenta = 0;
		$cuentavals = 0;
        $maxdescri = 0;
		foreach($colExcel as $colE){
		
			$valorpost = $_POST["accesoriosNuevos"][$cuenta];
			if($valorpost == $ultimopost && $valorpost != "-----"){
				$valorfinal = $valorpost."--".$cuentavals;
				$maxdescri = $cuentavals;
				$cuentavals++;
                echo "======>".$valorfinal;
			}else{
				$valorfinal = $valorpost;
			}
            if($updateProd != "" && $updateProd == "Continuar"){
                if($colE == $valorfinal){
                    echo "\n<br> Columna: [".$colE."] corresponde a ".$valorfinal;
                    $colE = base64_encode($colE);
                    $nuevascols[$colE]=$valorfinal;
        
                    $ultimopost = $valorpost;
                    $cuenta++;      
                }   
            }else{
                echo "\n<br> Columna: [".$colE."] corresponde a ".$valorfinal;
    			$colE = base64_encode($colE);
    			$nuevascols[$colE]=$valorfinal;
    			
    			$ultimopost = $valorpost;
    			$cuenta++;
            }
		}
		
		flush();
        
		$catsN = $_POST["accesoriosNuevos"];
		//guardaconfi("catsNuevasProductos",$nuevascols);
		
        $ordenado = array();
        
		for($linea=2;$linea<=sizeof($excel);$linea++){
			for($columna=1;$columna<=sizeof($excel[$linea]);$columna++){
				$ordenado[$linea][$nuevascols[base64_encode($excel[1][$columna])]] = $excel[$linea][$columna];
				//$ordenado[$linea][$nuevascols[$excel[1][$columna]]] = $excel[$linea][$columna];
			}
		}
        
		$tama = sizeof($ordenado)+2;
		//echo "<br>Total de lineas: ".$tama;
		for($linea=2;$linea<$tama;$linea++){
            echo "<hr>";
            echo "<br/>Ref. => ".$ordenado[$linea]["Ref"];
            $Referencia = $ordenado[$linea]["Ref"];
          
			if(($ordenado[$linea]["Ref"] != "") || ($ordenado[$linea]["Name"] != "")){
                //$accesorios = explode(";",$ordenado[$linea]["Accesorios"]);   
                $accesorioReferencia = sacadatosProdxRef($Referencia);
                $accesorioNombre = buscarProdxNombre($ordenado[$linea]["Name"]);
                
                if($accesorioReferencia["id_product"] != ""){
                    $idproducto = $accesorioReferencia["id_product"];
                }elseif($accesorioNombre["id_product"] != ""){
                    $idproducto = $accesorioNombre["id_product"];
                }
                if($idproducto != ""){
                    if($ordenado[$linea]["Accessories"] != ""){
                        $accesorios = explode(";",$ordenado[$linea]["Accessories"]);
                        foreach($accesorios as $accesorio):
                            $acceReferencia = sacadatosProdxRef($accesorio);
                            $idacce = $acceReferencia["id_product"];
                            if($idacce != ""){
                                agregaAccesorio($idproducto,$idacce, $acceReferencia);
                            }
                        endforeach;
                    }else{
                        echo "<br/>".getTranslation('No accessories.');
                    } 
                }
			}
		}
	} // fin if accesorios
	
	echo "\n</div>";
	
	echo "<div class='box_final_import'><h2> ".getTranslation('End of process')." </h2> </div>";
	
	
} // fin funcGrabaDatos

function funcArchivosShowSelectBBDD($tipo,$cual){
	
	if($tipo == "Categorias"){
		
    	$catsN = sacaconfi("catsNuevas");	
    	//echo "<br> catsN -> ";
    	//print_r($catsN);
    	$seleccionada = $catsN[base64_encode($cual)];
    		
    	$txt .= "\n<select name='categoriasNuevas[]'>";
    	//$txt .= opTiendasNoEcho("");
    	//$txt .= optionsSATiendaNoEcho(0,$idCategoria,0);
    	$categorias = definecampos("Categorias");
    	foreach($categorias as $cat){
    		$txt .= "<option ";
    		if($cat==$seleccionada){
    			$txt .="selected";
    		}
    		$txt .=">".$cat."</option>";
    	}
	   $txt .= "\n</select>";	
	}
	if($tipo == "Productos"){
		$catsN = sacaconfi("catsNuevasProductos");	
		//echo "<br> catsN -> ";
		//print_r($catsN);
		$seleccionada = $catsN[base64_encode($cual)];
		$txt .= "\n<select name='categoriasNuevas[]'>";
		//$txt .= opTiendasNoEcho("");
		//$txt .= optionsSATiendaNoEcho(0,$idCategoria,0);
		$categorias = definecampos("Productos");
		foreach($categorias as $cat){
			$txt .= "<option ";
			if($cat==$seleccionada){
				$txt .="selected";
			}
			$txt .=">".$cat."</option>";	
		}
		$txt .= "\n</select>";
	}
    
    if($tipo == "ActualizarProductos"){
		$catsN = sacaconfi("actualizarProductos");	
		//echo "<br> catsN -> ";
		//print_r($catsN);
		$seleccionada = $catsN[base64_encode($cual)];
		$txt .= "\n<select name='categoriasNuevas[]'>";
		//$txt .= opTiendasNoEcho("");
		//$txt .= optionsSATiendaNoEcho(0,$idCategoria,0);
		$categorias = definecampos("ActualizarProductos");
		foreach($categorias as $cat){
			$txt .= "<option ";
			if($cat==$seleccionada){
				$txt .="selected";
			}
			$txt .=">".$cat."</option>";	
		}
		$txt .= "\n</select>";
	}
    
	if($tipo == "Fabricantes"){
		$catsN = sacaconfi("fabricantesNuevos");	
		$seleccionada = $catsN[base64_encode($cual)];
		$txt .= "\n<select name='fabricantesNuevos[]'>";
		$categorias = definecampos("Fabricantes");
        
		foreach($categorias as $cat){
			$txt .= "<option ";
			if($cat==$seleccionada){
				$txt .="selected";
			}
			$txt .=">".$cat."</option>";	
		}
		$txt .= "\n</select>";
	}
    
    if($tipo == "Accesorios"){
		$catsN = sacaconfi("accesoriosNuevos");	
		$seleccionada = $catsN[base64_encode($cual)];
		$txt .= "\n<select name='accesoriosNuevos[]'>";
		$categorias = definecampos("Accesorios");
        
		foreach($categorias as $cat){
			$txt .= "<option ";
			if($cat==$seleccionada){
				$txt .="selected";
			}
			$txt .=">".$cat."</option>";	
		}
		$txt .= "\n</select>";
	}

	return $txt;
	
}

function definecampos($tipo){
	if($tipo=="Categorias"){
		
		$catsN = sacaconfi("catsNuevas");
		
		$array_define = array();
        
        $array_define[]="-----";
		foreach($catsN as $prod):
				$array_define[] = $prod;
		endforeach;
		
		return $array_define;
    }
	
	if($tipo=="Productos"){
				
		$catsN = sacaconfi("catsNuevasProductos");
		
		$array_define = array();
        
        $array_define[]="-----";
		foreach($catsN as $prod):
				$array_define[] = $prod;
		endforeach;
		
		return $array_define;
	}
	
	if($tipo=="ActualizarProductos"){
	
		$catsN = sacaconfi("actualizarProductos");
		
		$array_define = array();
        
        $array_define[]="-----";
		foreach($catsN as $prod):
				$array_define[] = $prod;
		endforeach;
		
		return $array_define;
	}

	if($tipo=="Accesorios"){
	
		$accesorios = sacaconfi("accesoriosNuevos");
        
		$array_define = array();
        
		foreach($accesorios as $accesorio):
				$array_define[] = $accesorio;
		endforeach;
		
		return $array_define;
	}
	
	if($tipo=="Fabricantes"){
		
		$catsN = sacaconfi("fabricantesNuevos");
		
		$array_define = array();
        
        $array_define[]="-----";
		foreach($catsN as $prod):
				$array_define[] = $prod;
		endforeach;
		
		return $array_define;
		
	}
		
	return $campos;
}


function borratablascat(){
	//borra las tablas
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."category");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."category_lang");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."category_group");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."scene_category");
		//revisa la cat home
		revisacatHome();	
}
function borratablasprod(){
	//borra las tablas
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_lang");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."category_product");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_attachment");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_attribute");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_attribute_combination");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_attribute_image");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_download");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_sale");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."product_tag");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."scene_products");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."image");
		$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."image_lang");

}
function borratablasmanu(){
	$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."manufacturer");
	$resu = sacandosql("TRUNCATE TABLE "._DB_PREFIX_."manufacturer_lang");
}

function revisaas400($cates)
{
	set_time_limit(600);
	
	echo "<br>".getTranslation('Reviewing category..');
    
    if($cates["categoria"] != "" && $cates["subcategoria"] == "" && $cates["familia"] == "")
    {
        $data["control"] = $cates["control"];
        $data["reference_category"] = $cates["categoria_referencia"];
        $data["categoria"] = $cates["categoria"];
		$data["Padre"] = "";
		$data["desc_categoria"] = $cates["desc_categoria"];
		$data["active"]= $cates["activo_categoria"];
        $data["position_category"] = $cates["orden_1"];
		$data["URL_imagen"] = $cates["URL_imagen_categoria"];
        
        if($cates["categoria_referencia"] != ""){
            $idcat = updateCategory($data);
        }elseif($cates["categoria_referencia"] == "" ){
            $idcat = agregaCat($data);   
        }
		$ultima = $idcat;
        
    }elseif($cates["categoria"] != "" && $cates["subcategoria"] != "" && $cates["familia"] == ""){
        $data2["control"] = $cates["control"];
        $data2["reference_category"] = $cates["categoria_referencia"];
        $data2["categoria"] = $cates["subcategoria"];
        $data2["Padre"] = $cates["categoria"];
		$data2["desc_categoria"] = $cates["desc_categoria"];
		$data2["active"] = $cates["activo_subcategoria"];
        $data2["position_category"] = $cates["orden_2"];
		$data2["URL_imagen"] = $cates["URL_imagen_subcategoria"];
        
        if($cates["categoria_referencia"] != ""){
            $idsubcat = updateCategory($data2);
        }elseif($cates["categoria_referencia"] == "" ){
            $idsubcat = agregaCat($data2);   
        }
		$ultima = $idsubcat;
        
    }elseif($cates["categoria"] != "" && $cates["subcategoria"] != "" && $cates["familia"] != ""){
        $data3["control"] = $cates["control"];
        $data3["reference_category"] = $cates["categoria_referencia"];
        $data3["categoria"] = $cates["familia"];
        $data3["Padre"] = $cates["subcategoria"];
        $data3["desc_categoria"] =$cates["desc_categoria"];
		$data3["active"] = $cates["activo_familia"];
        $data3["position_category"] = $cates["orden_3"];
		$data3["URL_imagen"] = $cates["URL_imagen_familia"];
        
        if($cates["categoria_referencia"] != ""){
            $idfamilia = updateCategory($data3);
        }elseif($cates["categoria_referencia"] == "" ){
            $idfamilia = agregaCat($data3);   
        }
		$ultima = $idfamilia;
    }
    
	echo "<br> ".getTranslation('End');
	return $ultima;
}

function agregaCat($data)
{
	
	$data = autometas($data);
    
	if($data["categoria"]!=""){	
        // insertando
        if($data["Padre"] != ""){
            $idpadre_1 = ($data["Padre"]["lang-1"] != "")? buscaCategoriaPadre($data["Padre"]["lang-1"]) : '';
            $idpadre_2 = ($data["Padre"]["lang-2"] != "")? buscaCategoriaPadre($data["Padre"]["lang-2"]) : '';
            $idpadre_3 = ($data["Padre"]["lang-3"] != "")? buscaCategoriaPadre($data["Padre"]["lang-3"]) : '';
            $idpadre_4 = ($data["Padre"]["lang-4"] != "")? buscaCategoriaPadre($data["Padre"]["lang-4"]) : '';
            $idpadre_5 = ($data["Padre"]["lang-5"] != "")? buscaCategoriaPadre($data["Padre"]["lang-5"]) : '';
            
            $arrayIds = array();            
            ($idpadre_1 != "") ? $arrayIds[0] = $idpadre_1 : '';
            ($idpadre_2 != "") ? $arrayIds[1] = $idpadre_2 : '';
            ($idpadre_3 != "") ? $arrayIds[2] = $idpadre_3 : '';
            ($idpadre_4 != "") ? $arrayIds[3] = $idpadre_4 : '';
            ($idpadre_5 != "") ? $arrayIds[4] = $idpadre_5 : '';
            
            $iguales = idsIguales($arrayIds, 1);
            if($iguales){
                $id_cat = idsIguales($arrayIds, 2);
                $idpadre = $id_cat;
            }
        }else{
            $idpadre = buscacathome();
        }
        //echo "ID PADRE ".$idpadre."</br>";  
        $category_padre = getByIdCategory($idpadre);
            
        echo "<br/>".getTranslation('The Category')." ".getTranslation('was successfully saved.')."<br/>";
		$datos["id_parent"] = $idpadre;
		$datos["level_depth"] = $category_padre["level_depth"]+1;
		$datos["active"] = $data["active"];
        $position_category = $data["position_category"];
        $cant = totalCategories();
        $cant = $cant + 9;
        $reference_category = 'CR-'.$cant;
        $datos["reference_category"] = (string)$reference_category;
        $datos["position_category"] = $position_category;
        $datos["control_category"] = $data["control"];
		$datos["date_add"] = date("Y-m-d H:i:s");
		$datos["date_upd"] = date("Y-m-d H:i:s");
    			
		$idcatNueva = ingresarDatos($datos,_DB_PREFIX_."category");
        $arrayCategories = $data["categoria"];

        foreach($arrayCategories as $key => $value):
            //$id_lang = getIdLang($key);
            $id_lang = Language::getIdByIsoLang($key);
            $datos2["id_category"] = $idcatNueva;
            $datos2["id_lang"] = $id_lang;
            $name_normal = borrarControl($data["categoria"][$key]);
            $name = (string)$name_normal;
            
            if($position_category != "")
                $pos_aux = convertString($position_category);
            else
                $pos_aux = "";
            $name_aux = $pos_aux.$name;
            
			$datos2["name"] = $name_aux;
            $datos2["name_2"] = addslashes($name_normal);
            $datos2["name_3"] = addslashes($data["categoria"][$key]);
			$datos2["description"] = addslashes($data["desc_categoria"][$key]);
            $datos2["link_rewrite"] = addslashes(urlAmigable($name_normal));
            $datos2["meta_title"] = addslashes($name_normal);
            $datos2["meta_keywords"] = addslashes($name_normal);
            $meta_description = quitarCaracteres($data["desc_categoria"][$key]);
            $meta_description = quitarComasPuntos($meta_description);
			$datos2["meta_description"] = addslashes($meta_description);
            echo "<pre>";
            print_r($datos2);
            echo "</pre>";
			$idcatlang = ingresarDatos($datos2,_DB_PREFIX_."category_lang");
            
            //$idcatla
            
		endforeach;
        
		$datos3["id_category"] = $idcatNueva;
		$datos3["id_group"] = 1;
        ingresarDatos($datos3,_DB_PREFIX_."category_group");    
		
        
		// revisando imagen
		if($data["URL_imagen"]!=""){
			/*if(!copyImg($idcatNueva, NULL,$data["URL_imagen"], 'categories')){
				echo "<br> Error al copiar la imagen de la url -> ".$data["URL_imagen"];
			}*/
            if(!copyImg($idcatNueva, NULL,$data["URL_imagen"], 'categories')){
				echo "<br> Error al copiar la imagen de la url -> ".$data["URL_imagen"];
			}
		}else{
			borraImg($idcatNueva, NULL,$data["URL_imagen"], 'categories');
		}
					
	$salida = $idcatNueva;
	}else {
        $salida = false;
	}
	return $salida;
}


function updateCategory($data)
{
    if($data["categoria"]!=""){
        if($data["reference_category"] != ""){

            $idcatANT = buscarCategoryReference($data["reference_category"]);
            $idcatNueva = $idcatANT["id_category"];
            echo "<br>".getTranslation('The Category')." ".getTranslation('was updated successfully.');
            
            $position_category = $data["position_category"];
            if($position_category != "")
                $datos["position_category"] = $position_category;
           
            /*if($data["active"] == "" || $data["active"]!=1 || $data["active"]!=0){
				$data["active"]= 1;
                $datos["active"] = $data["active"];
			}else{
                $datos["active"] = $data["active"];
			}*/
            
			if($data["active"] != "")
                $datos["active"] = $data["active"];
			
            $datos["date_upd"] = date("Y-m-d H:i:s");
            
            actualizarDatos($datos,_DB_PREFIX_."category","id_category",$idcatNueva);
            
            $arrayCategories = $data["categoria"];
            
            foreach($arrayCategories as $key => $value):
                $id_lang = Language::getIdByIsoLang($key);
                $existeLang = existeLangCategory($idcatNueva, $id_lang);
                
                if($position_category != "")
                    $pos_aux = convertString($position_category);
                else
                    $pos_aux = "";
                $name_aux = $pos_aux.$data["categoria"][$key];
                
                if($existeLang){
                    //$id_lang = getIdLang($key);
                    //$id_lang = Language::getIdByIsoLang($key);
                    //$datos2["id_category"] = $idcatNueva;
                    //$datos2["id_lang"] = $id_lang;
    				//$datos2["name"] = addslashes($data["categoria"][$key]);
                    $datos2["name"] = addslashes($name_aux);
    				$datos2["description"] = addslashes($data["desc_categoria"][$key]);
                    
    				if($data["categoria"][$key] != ""):
    					$datos2["link_rewrite"] = addslashes(urlAmigable($data["categoria"][$key]));
    				endif;
    				if($data["categoria"][$key] != ""):
    					$datos2["meta_title"] = addslashes($data["categoria"][$key]);
    				endif;
    				if($data["categoria"][$key] != ""):
    					$datos2["meta_keywords"] = addslashes($data["categoria"][$key]);
    				endif;
                    $meta_description = quitarCaracteres($data["desc_categoria"][$key]);
                    $meta_description = quitarComasPuntos($meta_description);
    				if($data["desc_categoria"][$key] != ""):
    					$datos2["meta_description"] = addslashes($meta_description);
    				endif;
                    actualizarDatosLang($datos2,_DB_PREFIX_."category_lang","id_category",$idcatNueva,"id_lang",$id_lang);   
                }else{
                    //$id_lang = getIdLang($key);
                    $datos3["id_category"] = $idcatNueva;
                    $datos3["id_lang"] = $id_lang;
                    $name_normal = $data["categoria"][$key];
                    //$name_normal = borrarControl($data["categoria"][$key]);
    				$datos3["name"] = addslashes($name_normal);
                    $datos3["name_2"] = addslashes($name_normal);
                    $datos3["name_3"] = addslashes($data["categoria"][$key]);
    				$datos3["description"] = addslashes($data["desc_categoria"][$key]);
                    $datos3["link_rewrite"] = addslashes(urlAmigable($name_normal));
                    $datos3["meta_title"] = addslashes($name_normal);
                    $datos3["meta_keywords"] = addslashes($name_normal);
                    $meta_description = quitarCaracteres($data["desc_categoria"][$key]);
                    $meta_description = quitarComasPuntos($meta_description);
    				$datos3["meta_description"] = addslashes($meta_description);
    				$idcatlang = ingresarDatos($datos3,_DB_PREFIX_."category_lang");
                }
			endforeach;
        }
    }
}

function agregaProducto($data, $tipo = null){

	//$data = autometas($data);
    if($data["Referencia"] != "" || $data["Nombre"] != ""){
		if($data["Referencia"]!=""){
			$idprodANT = sacadatosProdxRef($data["Referencia"]);
            //setActiveUpdate($idprodANT["id_product"]);
        }elseif($data["Nombre"] != ""){
            
            $idprodANT_1 = ($data["Nombre"]["lang-1"] != "")? buscarProdxNombre($data["Nombre"]["lang-1"], false) : '';
            $idprodANT_2 = ($data["Nombre"]["lang-2"] != "")? buscarProdxNombre($data["Nombre"]["lang-2"], false) : '';
            $idprodANT_3 = ($data["Nombre"]["lang-3"] != "")? buscarProdxNombre($data["Nombre"]["lang-3"], false) : '';
            $idprodANT_4 = ($data["Nombre"]["lang-4"] != "")? buscarProdxNombre($data["Nombre"]["lang-4"], false) : '';
            $idprodANT_5 = ($data["Nombre"]["lang-5"] != "")? buscarProdxNombre($data["Nombre"]["lang-5"], false) : '';

            $idsProdLang = idsProductos(array($idprodANT_1, $idprodANT_2, $idprodANT_3, $idprodANT_4, $idprodANT_5));
            $iguales = idsIguales($idsProdLang, 1);
            
            if($iguales){
                $id_product = idsIguales($idsProdLang, 2);
                $idprodANT = sacadatosProd($id_product);
            }else{
                echo "no entra";
            }	
		}
		
		$idprodANT = $idprodANT["id_product"];
		if($idprodANT != ""){
		}else{
			// insertando
            echo "<br/>".getTranslation('Adding product');
            echo "<br/>".getTranslation('The Product')." ".getTranslation('was successfully saved.')."<br/>";
            $datos["id_supplier"] = $data["idsupplier"];
			$datos["id_manufacturer"] = $data["idmanu"];
			$datos["id_tax"] = $data["idiva"];
			$datos["id_category_default"] = $data["idcat"];
			$idcat = $data["idcat"];
			$datos["id_color_default"] = 0;
			//$datos["on_sale"] = 0;
            $datos["on_sale"] = $data["EnRebaja"];
			$datos["ean13"] = 0;
			$datos["ecotax"] = $data["Ecotasa"];
			$datos["quantity"] = $data["Cantidad"];
            //$datos["quantity"] = $data["ImporteRebaja"];
            //$datos["quantity"] = $data["EnRebaja"];
			//$datos["price"] = revisaprecio($data["Precio"]);
			$datos["price"] = cambiarComaPorPunto($data["Precio"]);
			//$datos["reduction_price"] = 0;
            $datos["reduction_price"] = $data["ImporteRebaja"];
			//$datos["reduction_percent"] = $data["RebajaPor"];
            $datos["reduction_percent"] = cambiarComaPorPunto($data["RebajaPor"]);
			$datos["reduction_from"] = !empty($data["RebajaDesde"]) ? $data["RebajaDesde"] : date("Y-m-d H:i:s");
			$datos["reduction_to"] = !empty($data["reduction_to"]) ? $data["reduction_to"] : date("Y-m-d H:i:s");
			$datos["reference"] = $data["Referencia"];
			$datos["supplier_reference"] = $data["SupplierReferencia"];
			$datos["location"] = "";
			//$datos["weight"] = $data["Peso"];
            $datos["weight"] = cambiarComaPorPunto($data["Peso"]);
			$datos["out_of_stock"] = 2;
			$datos["quantity_discount"] = 0;
			$datos["customizable"] = 0;
			$datos["uploadable_files"] = 0;
			$datos["text_fields"] = 0;
			$datos["active"] = $data["Activo"];;
			$datos["indexed"] = 1;
			$datos["date_add"] = date("Y-m-d H:i:s");
			$datos["date_upd"] = date("Y-m-d H:i:s");
			$idproducto = ingresarDatos($datos,_DB_PREFIX_."product");
						
			if($idproducto!=""){
			    // pone en categoria
                if($idcat!=""){
                	$datos3["id_category"] = $idcat;
                	$datos3["id_product"] = $idproducto;
                	$datos3["position"] = $data["Orden"];
                	ingresarDatos($datos3,_DB_PREFIX_."category_product");
                }
				//ingresar traduccion
                $array_products = $data["Nombre"];
                foreach($array_products as $key => $value):
					//$id_lang = getIdLang($key);
                    $id_lang = Language::getIdByIsoLang($key);
                    $name_meta = quitarCaracteres($data["Nombre"][$key]);
                    $name_meta = quitarComasPuntos($name_meta);
					$meta_title = $data["Referencia"].", ".ucfirst($name_meta);
					$datos2["id_product"] = $idproducto;
					$datos2["id_lang"] = $id_lang;
					$datos2["name"] = addslashes($data["Nombre"][$key]);
					$datos2["description"] = addslashes($data["Descripcion"][$key]);
					$datos2["description_short"] = addslashes($data["DescripcionBreve"][$key]);
                    $url_amigable = urlAmigable($data["Nombre"][$key]);
    				$datos2["link_rewrite"] =  addslashes($url_amigable);
					$datos2["meta_title"] = addslashes($name_meta);
					$datos2["meta_keywords"] = addslashes($meta_title);
                    $DescripcionBreve = quitarCaracteres($data["DescripcionBreve"][$key]);
                    $DescripcionBreve = quitarComasPuntos($DescripcionBreve);
					$datos2["meta_description"] = addslashes(ucfirst($DescripcionBreve));
					$datos2["available_now"] = addslashes($data["TextoDisponible"][$key]);
					$datos2["available_later"] = addslashes($data["TextoEspera"][$key]);
					$idprodlang = ingresarDatos($datos2,_DB_PREFIX_."product_lang");
				endforeach;	
			} // fin if idproducto
        }	
        $salida = $idproducto;	
    } // fin if nombre
	return $salida;		
}

function updateProducto($data)
{
    //$data = autometas($data);
    
    //if($data["Referencia"] != "" || $data["Nombre"] != ""){
    if($data["Referencia"] != "" && $data["Nombre"] != ""){    
		if($data["Referencia"] != ""){
			$idprodANT = sacadatosProdxRef($data["Referencia"]);
            
        }
        $nombreProd = $idprodANT["reference"];
		$idprodANT = $idprodANT["id_product"];

		if($idprodANT != ""){
			// actualizando
            echo "<br/>".getTranslation('Updating product');
            echo "<br/>".getTranslation('The Product')." ".getTranslation('was updated successfully.')."<br/>";
            
			$datosANT = sacadatosProd($idprodANT);
			$idproducto = $idprodANT;

            if($data["idsupplier"] != ""){
                $datos["id_supplier"] = $data["idsupplier"];
            }
            
            if($data["idiva"] != ""){
                $datos["id_tax"] = $data["idiva"];
            }	
            $datos["id_color_default"] = 0;
            if($data["EnRebaja"] != ""){
                $datos["on_sale"] = $data["EnRebaja"];    
            }
            $datos["ean13"] = 0;
            if($data["Ecotasa"] != ""){
               $datos["ecotax"] = $data["Ecotasa"]; 
            }
            if($data["Cantidad"] != ""){
               $datos["quantity"] = $data["Cantidad"]; 
            }
            //$datos["quantity"] = $data["EnRebaja"];
            if($data["Precio"] != ""){
                $datos["price"] = cambiarComaPorPunto($data["Precio"]);  
            }
            if($data["ImporteRebaja"] != ""){
                $datos["reduction_price"] = $data["ImporteRebaja"];  
            }
            if($data["RebajaPor"] != ""){
                $datos["reduction_percent"] = cambiarComaPorPunto($data["RebajaPor"]);
            }
            if($data["RebajaDesde"] != ""){
                $datos["reduction_from"] = $data["RebajaDesde"]; 
            }
            if($data["RebajaHasta"] != ""){
               $datos["reduction_to"] = $data["RebajaHasta"]; 
            }            
            if($data["Referencia"] != ""){
                $datos["reference"] = $data["Referencia"];   
            }
            if($data["SupplierReferencia"] != ""){
                $datos["supplier_reference"] = $data["SupplierReferencia"];   
            }
            $datos["location"] = "";
            if($data["Peso"] != ""){
                $datos["weight"] = cambiarComaPorPunto($data["Peso"]);  
            }
            $datos["out_of_stock"] = 2;
            $datos["quantity_discount"] = 0;
            $datos["customizable"] = 0;
            $datos["uploadable_files"] = 0;
            $datos["text_fields"] = 0;
            if($data["Activo"] != ""){
                $datos["active"] = $data["Activo"];    
            }
            
            $datos["indexed"] = 1;
            $datos["active_update"] = true;
            $datos["date_upd"] = date("Y-m-d H:i:s");
                
			actualizarDatos($datos,_DB_PREFIX_."product","id_product",$idproducto);
            //setActiveUpdate($idproducto,true);
            if($idproducto!=""){
           	    $nameLangProduct = $data["Nombre"];
                //for($i = 0; $i < sizeof($data["Nombre"]); $i++):
                foreach($nameLangProduct as $key => $value):    
                    //$id_lang = getIdLang($key);
                    $id_lang = Language::getIdByIsoLang($key);
                    $existeLangProd = existePruductoLang($idproducto, $id_lang);

                    if($existeLangProd){
                        echo "Existe Prod lang ==> ".$data["Nombre"][$key]."<br/>";
                        if($data["Referencia"] != ""){
                            $name_meta = quitarCaracteres($data["Nombre"][$key]);
                            $name_meta = quitarComasPuntos($name_meta);
        					$meta_title = $data["Referencia"].", ".ucfirst($name_meta);
                        }else{
                            $name_meta = quitarCaracteres($data["Nombre"][$key]);
                            $name_meta = quitarComasPuntos($name_meta);
                            $meta_title = $name_meta;
                        }
                		
                        if($data["Nombre"][$key]!=""){
                		  $datos2["name"] = addslashes($data["Nombre"][$key]);
                		}
                		if($data["Descripcion"][$key]!=""){	
                			$datos2["description"] = addslashes($data["Descripcion"][$key]);
                		}
                		if($data["DescripcionBreve"][$key]!=""){	
                			$datos2["description_short"] = addslashes($data["DescripcionBreve"][$key]);
                		}
                		if($data["Nombre"][$key]!=""){
                            $url_amigable = urlAmigable($data["Nombre"][$key]);
        					$datos2["link_rewrite"] =  addslashes($url_amigable);
                		}
                		$datos2["meta_title"] = addslashes($meta_title);	
               			$datos2["meta_keywords"] = addslashes($meta_title);            		
                		if($data["DescripcionBreve"][$key] != ""){
                            $DescripcionBreve = quitarCaracteres($data["DescripcionBreve"][$key]);
                            $DescripcionBreve = quitarComasPuntos($DescripcionBreve);
                			$datos2["meta_description"] = addslashes($DescripcionBreve);
                		}
                		if($data["TextoDisponible"][$key] != ""){	
                			$datos2["available_now"] = addslashes($data["TextoDisponible"][$key]);
                		}
                		if($data["TextoEspera"][$key] != ""){	
                			$datos2["available_later"] = addslashes($data["TextoEspera"][$key]);
                	    }
                        actualizarDatosLang($datos2,_DB_PREFIX_."product_lang","id_product",$idproducto,"id_lang", $id_lang);    
                    }elseif($existeLangProd == false){
                        echo "No existe Prod lang ==> ".$data["Nombre"][$key]."<br/>";
                        $name_meta = quitarCaracteres($data["Nombre"][$key]);
                        $name_meta = quitarComasPuntos($name_meta);
    					$meta_title = $data["Referencia"].", ".ucfirst($name_meta);
    					$datos2["id_product"] = $idproducto;
    					$datos2["id_lang"] = $id_lang;
    					$datos2["name"] = addslashes($data["Nombre"][$key]);
    					$datos2["description"] = addslashes($data["Descripcion"][$key]);
    					$datos2["description_short"] = addslashes($data["DescripcionBreve"][$key]);
                        $url_amigable = urlAmigable($data["Nombre"][$key]);
        				$datos2["link_rewrite"] =  addslashes($url_amigable);
    					$datos2["meta_title"] = addslashes($name_meta);
    					$datos2["meta_keywords"] = addslashes($meta_title);
                        $DescripcionBreve = quitarCaracteres($data["DescripcionBreve"][$key]);
                        $DescripcionBreve = quitarComasPuntos($DescripcionBreve);
    					$datos2["meta_description"] = addslashes(ucfirst($DescripcionBreve));
    					$datos2["available_now"] = addslashes($data["TextoDisponible"][$key]);
    					$datos2["available_later"] = addslashes($data["TextoEspera"][$key]);
    					$idprodlang = ingresarDatos($datos2,_DB_PREFIX_."product_lang");    
                    }
                endforeach;
            }// fin if idproducto
        }else{
            
        }
		$salida = $idproducto;	
    } // fin if nombre
	return $salida;	
}



function sacalangproducto2($idproducto,$lang){
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


/*
$data["Nombre"]=  +required+
$data["Descripcion_Breve"]
$data["Descripcion"]=
$data["meta_title"]=
$data["meta_keywords"]=
$data["meta_description"]=
$idnuevacat = agregaCat($data);
*/
function agregaFabricante($data){
	
	if($data["Nombre"]!=""){
				
		// ya existe?
		$idfabANT = buscaFabricante($data["Nombre"]);			
		
		if($idfabANT!=""){
			// actualizando
			echo getTranslation('was updated successfully.')." id-> ".$idfabANT."<br/>";
			$datosANT = sacadatosFab($idfabANT);
			$datos["date_upd"] = date("Y-m-d H:i:s");
			
			actualizarDatos($datos,_DB_PREFIX_."manufacturer","id_manufacturer",$idfabANT);
			$idfabNueva = $idfabANT;
            
            $descripcionLang = $data["Descripcion"];
            foreach($descripcionLang as $key => $value):
                $id_lang = Language::getIdByIsoLang($key);
                $existe = Manufacturer::existeManufacturerLang($idfabNueva, $id_lang);
                if($existe)
                {
                    $datos2["description"] = addslashes($data["Descripcion"][$key]);
        			$datos2["short_description"] = addslashes($data["DescripcionBreve"][$key]);
                    
                    $meta_title = quitarCaracteres($data["Nombre"]);
                    $meta_title = quitarComasPuntos($meta_title);
                    $meta_keywords = quitarCaracteres($data["DescripcionBreve"][$key]);
                    $meta_keywords = quitarComasPuntos($meta_keywords);
                    $datos2["meta_title"] = addslashes($meta_title);
                    $datos2["meta_keywords"] = addslashes($meta_title.", ".$meta_keywords);
           
                    if($data["Descripcion"][$key] !=""){
                        $meta_description = quitarCaracteres($data["Descripcion"][$key]);
                        $meta_description = quitarComasPuntos($meta_description);
                        $datos2["meta_description"] = addslashes($meta_description);
                    }else{
                        $datos2["meta_description"] = "";
                    }
                    actualizarDatosLang($datos2,_DB_PREFIX_."manufacturer_lang","id_manufacturer",$idfabNueva,"id_lang", $id_lang);
                    
                }else{
                    $datos3["id_manufacturer"] = $idfabNueva;
        			$datos3["id_lang"] = $id_lang; // castellano
                    $datos3["description"] = addslashes($data["Descripcion"][$key]);
                    $datos3["short_description"] = addslashes($data["DescripcionBreve"][$key]);
                    $datos3["description"] = addslashes($data["Descripcion"][$key]);
                    $datos3["short_description"] = addslashes($data["DescripcionBreve"][$key]);
                    $meta_title = quitarCaracteres($data["Nombre"]);
                    $meta_title = quitarComasPuntos($meta_title);
                    $meta_keywords = quitarCaracteres($data["DescripcionBreve"][$key]);
                    $meta_keywords = quitarComasPuntos($meta_keywords);
                    $datos3["meta_title"] = addslashes($meta_title);
                    $datos3["meta_keywords"] = addslashes($meta_title.", ".$meta_keywords);
                    $meta_description = quitarCaracteres($data["Descripcion"][$key]);
                    $meta_description = quitarComasPuntos($meta_description);
                    $datos3["meta_description"] = addslashes($meta_description);
                    $idfablang = ingresarDatos($datos3,_DB_PREFIX_."manufacturer_lang");
                }
            endforeach;           
            //endfor;
		}else{
			// insertando
            echo getTranslation('was successfully saved.')."<br/>";
			$datos["name"] = addslashes($data["Nombre"]);
			$datos["date_add"] = date("Y-m-d H:i:s");
			$datos["date_upd"] = date("Y-m-d H:i:s");
			$idfabNueva = ingresarDatos($datos,_DB_PREFIX_."manufacturer");
			
			//ingresar traduccion
            $descripcionLang = $data["Descripcion"];            
            foreach($descripcionLang as $key => $value):
                $id_lang = Language::getIdByIsoLang($key);
                $datos2["id_manufacturer"] = $idfabNueva;
    			$datos2["id_lang"] = $id_lang; // castellano
                $datos2["description"] = addslashes($data["Descripcion"][$key]);
                $datos2["short_description"] = addslashes($data["DescripcionBreve"][$key]);
                $datos2["description"] = addslashes($data["Descripcion"][$key]);
                $datos2["short_description"] = addslashes($data["DescripcionBreve"][$key]);
                $meta_title = quitarCaracteres($data["Nombre"]);
                $meta_title = quitarComasPuntos($meta_title);
                $meta_keywords = quitarCaracteres($data["DescripcionBreve"][$key]);
                $meta_keywords = quitarComasPuntos($meta_keywords);
                $datos2["meta_title"] = addslashes($meta_title);
                $datos2["meta_keywords"] = addslashes($meta_title.", ".$meta_keywords);
                $meta_description = quitarCaracteres($data["Descripcion"][$key]);
                $meta_description = quitarComasPuntos($meta_description);
                $datos2["meta_description"] = addslashes($meta_description);
                
                $idfablang = ingresarDatos($datos2,_DB_PREFIX_."manufacturer_lang");
            endforeach;           
            //endfor;
		}
		// revisando imagen
		if($data["URL_imagen"]!=""){
			if(!copyImg($idfabNueva, NULL,$data["URL_imagen"], 'manufacturers')){
				echo "<br> Error al copiar la imagen de la url -> ".$data["URL_imagen"];
			}
		}else{
			borraImg($idfabNueva, NULL,$data["URL_imagen"], 'manufacturers');
		}		
        $salida = $idfabNueva;
	}else{ // FIN if nombre
	   $salida = false;
	}
	return $salida;
}


function agregaAccesorio($idproducto,$idaccesorio,$acceReferencia){
	
	//echo "Agregando accessorio -> ".$idaccesorio." al producto -> ".$idproducto;
	$acess = sacaAcces($idproducto);
	if(!in_array($idaccesorio,$acess)){
        echo "<br/>".getTranslation("Refenrence")." => ".$acceReferencia["reference"];
        echo "<br/>".getTranslation('Adding accessory');
        echo "<br/>".getTranslation('The accessory')." ".getTranslation('was successfully saved.');
		$datos["id_product_1"]=$idproducto;
		$datos["id_product_2"]=$idaccesorio;
		ingresarDatos($datos,_DB_PREFIX_."accessory");
	}else{
	   echo "<br/>".getTranslation("Refenrence")." => ".$acceReferencia["reference"];
	   echo "<br/>".getTranslation('The accessory already exists')."<br/>";
	}
}

function agregaProveedor($data){

	if($data["Nombre"]!=""){
				
		// ya existe?
		$idpro = buscaProveedor($data["Nombre"]);
        if($idpro != ""){
			$datos["date_upd"] = date("Y-m-d H:i:s");
			actualizarDatos($datos,_DB_PREFIX_."supplier", "id_supplier", $idpro);
			$idProNuevo = $idpro;
            if($data["descripcion"] != ""){
                for($i = 0; $i < sizeof($data["descripcion"]); $i++):
                    $id_lang = getIdLang($i);
                    $meta_title = $data["Nombre"]." ".$data["descripcion"][$i];
                    
                    $datos2["description"] = $data["descripcion"][$i];
                    $datos2["meta_title"] = !empty($data["meta_title"])?$data["meta_title"]:$meta_title;
                    $datos2["meta_keywords"] = !empty($data["meta_keyworks"])?$data["meta_keyworks"]:$data["Nombre"];
                    $datos2["meta_description"] = !empty($data["meta_description"])?$data["meta_description"]:$data["descripcion"][$i];
                    actualizarDatosLang($datos2,_DB_PREFIX_."supplier_lang","id_supplier",$idProNuevo,"id_lang",$id_lang);
                endfor;
            }else{
                $id_lang = intval(Configuration::get('PS_LANG_DEFAULT'));
                $datos2["description"] = "";
                $datos2["meta_title"] = "";
                $datos2["meta_keywords"] = "";
                $datos2["meta_description"] = "";
                actualizarDatosLang($datos2,_DB_PREFIX_."supplier_lang","id_supplier",$idProNuevo,"id_lang",$id_lang);
            }
            $salida = $idpro;
        }else{
            $datos["name"] = addslashes($data["Nombre"]);
			$datos["date_add"] = date("Y-m-d H:i:s");
			$datos["date_upd"] = date("Y-m-d H:i:s");
			$idProNuevo = ingresarDatos($datos,_DB_PREFIX_."supplier");
            
            if($data["descripcion"] != ""){
                
                for($i = 0; $i < sizeof($data["descripcion"]); $i++):
                    $id_lang = getIdLang($i);
                    $meta_title = $data["Nombre"]." ".$data["descripcion"][$i];
                    $datos2["id_supplier"] = $idProNuevo;
                    $datos2["id_lang"] = $data["descripcion"][$i];
                    $datos2["description"] = $data["descripcion"][$i];
                    $datos2["meta_title"] = !empty($data["meta_title"])?$data["meta_title"]:$meta_title;
                    $datos2["meta_keywords"] = !empty($data["meta_keyworks"])?$data["meta_keyworks"]:$data["Nombre"];
                    $datos2["meta_description"] = !empty($data["meta_description"])?$data["meta_description"]:$data["descripcion"][$i];
                    //ingresarDatos($datos2,_DB_PREFIX_."supplier_lang");
					echo "entra insert 2"."<br/>";
                endfor;
            }else{
                $id_lang = intval(Configuration::get('PS_LANG_DEFAULT'));
                $datos2["id_supplier"] = $idProNuevo;
                $datos2["id_lang"] = $id_lang;
                $datos2["description"] = "";
                $datos2["meta_title"] = "";
                $datos2["meta_keywords"] = "";
                $datos2["meta_description"] = "";
				//echo "entra insert"."<br/>";
                ingresarDatos($datos2,_DB_PREFIX_."supplier_lang");
            }
            $salida = $idProNuevo;
        }
    }else{ // FIN if nombre
	   $salida = false;
	}
	return $salida;
}

function autometas($data){
	
	global $autometas;
	
	if($autometas == "SI"){
	
	$title = $data["Nombre"]." ".$data["Referencia"];
	$title = strip_tags($title);
	
	$keys = $data["Nombre"]." ".$data["Referencia"];
	$keys = strip_tags($data["Descripcion"]);
	$keys = str_replace(" ",",",$keys);
	
	$description = $data["Nombre"]." ".$data["Referencia"]." ".$data["Descripcion"];
	$description = strip_tags($description);
	
	$data["meta_keywords"]=$keys;
	$data["meta_description"]=$description;
	$data["meta_title"]=$title;

	}
	
	return $data;
}

function revisaurl($txt){
	
	
	$txt = str_replace(" ","-",$txt);
	$txt = str_replace(".","",$txt);
	$txt = str_replace("'","",$txt);
	$txt = str_replace("\"","",$txt);
	$txt = str_replace("?","n",$txt);
	$txt = str_replace("?","N",$txt);
	$txt = str_replace("?","c",$txt);
	$txt = str_replace("?","C",$txt);
	
	$txt = stripAccents($txt);
	//echo "<br> URL limpia -> ".$txt;
	return $txt;
}

$division = "NO";
function revisaprecio($txt){
	global $division;
	
	$pos = strpos(",",$txt);
	
	if($pos !== false){
		// tiene decimales
		$txt = floatval($txt);
	}else{
		// no tiene decimales
		if($division == "SI"){
			$txt = floatval($txt) / 100;
		}
	}
	return $txt;
}

function cambiarComaPorPunto($num)
{
    $res = floatval(str_replace(",", ".", $num));
    return $res;
}

function revisacatHome(){

		//revisa la cat home
		
			$datos["id_parent"] = 0;
			$datos["level_depth"] = "";
			$datos["active"] = 1;
			$datos["date_add"] = date("Y-m-d H:i:s");
			$datos["date_upd"] = date("Y-m-d H:i:s");;
			
			$idinicio = buscaPadre("Inicio");
			if($idinicio!=""){
				//actualizar
				$idcat = $idinicio;
				//actualizarDatos($datos,_DB_PREFIX_."category","id_category",$idcat);
			}else{
				//insertar
				$idcat = ingresarDatos($datos,_DB_PREFIX_."category");
			}
			
			
			$datos2["id_category"] = $idcat;
			$datos2["id_lang"] = 3; // castellano
			$datos2["name"] = "Inicio";
			$datos2["description"] = "";
			$datos2["link_rewrite"] = "";
			$datos2["meta_title"] = "";
			$datos2["meta_keywords"] = "";
			$datos2["meta_description"] = "";
			
			$datos3["id_category"] = $idcat;
			$datos3["id_group"] = 1;
			
			
			if($idinicio!="" && $idinicio!=1){
				//actualizar
				//$idcatlang = $idinicio;
			}else{
				//insertar
				$idcatlang = ingresarDatos($datos2,_DB_PREFIX_."category_lang");	
				ingresarDatos($datos3,_DB_PREFIX_."category_group");
			}
			
		
			$idcatHome = $idcat;
	
	return $idcatHome;
}

function sacaAcces($idproducto){
	
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."accessory`
			WHERE id_product_1='".$idproducto."'
			";
	$resu = sacandosql($query);
	if($resu){
		foreach($resu as $r){
			$salida[] = $r["id_product_2"];
		}
	}else{
		$salida = false;
	}
	//$salida = $resu;
	return $salida;
}

function sacadatosProdxNombre($nombre){
	$nombre = addslashes($nombre);
	
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."product` AS c1
			LEFT JOIN  
			`"._DB_PREFIX_."product_lang` AS c2 
			ON c1.id_product = c2.id_product
			WHERE c2.name='".$nombre."'
			";
	$resu = sacandosql($query);
	
	$salida = $resu[0];
	
	return $salida;
	
}

function sacadatosProdxRef($ref){
	$ref = addslashes($ref);
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."product` AS c1
			LEFT JOIN  
			`"._DB_PREFIX_."product_lang` AS c2 
			ON c1.id_product = c2.id_product
			WHERE c1.reference='".$ref."'
			";
	$resu = sacandosql($query);
	$salida = $resu[0];
	
	return $salida;
	
}

function sacadatosProd($idprod){
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."product` AS c1
			LEFT JOIN  
			`"._DB_PREFIX_."product_lang` AS c2 
			ON c1.id_product = c2.id_product
			WHERE c1.id_product='".$idprod."'
			";
	$resu = sacandosql($query);
	$salida = $resu[0];
	
	return $salida;
	
}

function sacadatosCat($idcat){
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."category` AS c1
			LEFT JOIN  
			`"._DB_PREFIX_."category_lang` AS c2 
			ON c1.id_category = c2.id_category
			WHERE c1.id_category='".$idcat."'
			";
	$resu = sacandosql($query);
	$salida = $resu[0];
	
	return $salida;
	
}

function sacadatosFab($idfab){
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."manufacturer`
			WHERE id_manufacturer='".$idfab."'
			";
	$resu = sacandosql($query);
	$salida = $resu[0];
	
	return $salida;


}

function sacaidIva($iva){
	$iva = "".$iva.".000";
	$iva = addslashes($iva);
	$query = "SELECT id_tax 
			FROM  `"._DB_PREFIX_."tax`
			WHERE rate='".$iva."'
			";		
	$resu = sacandosql($query);
	$salida = $resu[0]["id_tax"];
	return $salida;
}


function buscaPadre($txt){
	if($txt!=""){
    	$txt = addslashes(strtoupper($txt));
    	
    	//echo "<br> Buscando Categoria -> ".$txt;	
    	$query = "SELECT * 
    			FROM  `"._DB_PREFIX_."category` AS c1
    			LEFT JOIN  
    			`"._DB_PREFIX_."category_lang` AS c2 
    			ON c1.id_category = c2.id_category
    			WHERE UPPER(c2.name)='".$txt."'
    			";
    	//echo "\n <br> query -> ".$query."<br>";		
    	$resu = sacandosql($query);
    	
    	if($resu[0]["id_category"]!=""){
        //if($resu[0]["id_category"] != null || $resu[0]["id_category"] != ""){
    		//echo " encontrada en id-> ".$resu[0]["id_category"];
    	}/*else{
           $salida = buscacathome();
    	}*/
        $salida = $resu[0]["id_category"];
	}else{	
		$salida = buscacathome();
	}
	return $salida;
	
}

function buscaFabricante($txt){
	if($txt!=""){
	$txt = addslashes(strtoupper($txt));

	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."manufacturer` 
			WHERE UPPER(name)='".$txt."'
			";
	$resu = sacandosql($query);
	
	if($resu[0]["id_manufacturer"]!=""){
		//echo " encontrada en id-> ".$resu[0]["id_manufacturer"];
	}
	
	$salida = $resu[0]["id_manufacturer"];
	}else{	
		$salida = false;
	}
	return $salida;
}

function buscaProveedor($txt){
	if($txt!=""){
		$txt = addslashes(strtoupper($txt));
		//echo "<br> Buscando Proveedor -> ".$txt;	
		$query = "SELECT * 
				FROM  `"._DB_PREFIX_."supplier` 
				WHERE UPPER(name)='".$txt."'
				";		
		$resu = sacandosql($query);

		if($resu[0]["id_supplier"]!=""){
			//$salida = $resu[0]["id_supplier"];
		}
		$salida = $resu[0]["id_supplier"];
	}else{
		$salida = false;
	}
	return $salida;
}

function buscacathome(){
	
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."category` AS c1
			LEFT JOIN  
			`"._DB_PREFIX_."category_lang` AS c2 
			ON c1.id_category = c2.id_category
			WHERE c2.name='Inicio'
			";
	$resu = sacandosql($query);
	
	$salida = $resu[0]["id_category"];
	return $salida;
}

function guardaconfi($nombre,$valor){
	
	$datos["nombre"] = $nombre;
	$datos["valor"] = serialize($valor);
	
	if(sacaconfi($nombre)==""){
		$id = ingresarDatos($datos,_DB_PREFIX_."importconf");
	}else{
		actualizarDatos($datos,_DB_PREFIX_."importconf","nombre",$nombre);
	}
	
}

function sacaconfi($nombre){
	
	$query = "SELECT * FROM "._DB_PREFIX_."importconf WHERE nombre='".$nombre."'";
	$resu = sacandosql($query);
	$salida = unserialize($resu[0]["valor"]);
	
	return $salida;
}


function formaTablaConf(){
	$forma[0]["nombre"]="tablename";	$forma[0]["formato"]=_DB_PREFIX_."importconf";
	$forma[1]["nombre"]="id";			$forma[1]["formato"]="int(6) auto_increment";
	$forma[2]["nombre"]="nombre";		$forma[2]["formato"]="varchar(250)";	
	$forma[3]["nombre"]="valor";		$forma[3]["formato"]="text";
	$forma[4]["nombre"]="primarykey";	$forma[4]["formato"]="id";
	
	return $forma;
}

mysql_check_BBDD(formaTablaConf());

function FixEncoding($x){ 
  if(mb_detect_encoding($x)=='UTF-8'){ 
    return $x; 
  }else{ 
    return utf8_encode($x); 
  } 
} 

function stripAccents($String){

    $String = ereg_replace("[?????]","a",$String);

    $String = ereg_replace("[?????]","A",$String);

    $String = ereg_replace("[????]","I",$String);

    $String = ereg_replace("[????]","i",$String);

    $String = ereg_replace("[????]","e",$String);

    $String = ereg_replace("[????]","E",$String);

    $String = ereg_replace("[??????]","o",$String);

    $String = ereg_replace("[?????]","O",$String);

    $String = ereg_replace("[????]","u",$String);

    $String = ereg_replace("[????]","U",$String);

    //$String = ereg_replace("[^?`?~]","",$String);

    $String = str_replace("?","c",$String);

    $String = str_replace("?","C",$String);

    $String = str_replace("?","n",$String);

    $String = str_replace("?","N",$String);

    $String = str_replace("?","Y",$String);

    $String = str_replace("?","y",$String);

    return $String;

}

function muestraentabla($array){
	echo "\n<table>";
	
	foreach($array as $ar1){
			echo "<tr>";
			foreach($ar1 as $ar2){
			echo "<td>".$ar2."</td>";
			}
			echo "</tr>";
	}
	
	echo "</table>";
}

function copyImg($id_entity, $id_image = NULL, $url, $entity = 'products')
{
	$tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'ps_import');
    $dirImages = _PS_ROOT_DIR_."/Files";
    $url_image = $dirImages."/".$url;
    
    echo "URL ".$url_image;
	
	switch($entity)
	{
		default:
		case 'products':
			$path = _PS_PROD_IMG_DIR_.intval($id_entity).'-'.intval($id_image);
		break;
		case 'categories':
			$path = _PS_CAT_IMG_DIR_.intval($id_entity);
		break;
		case 'manufacturers':
			$path = _PS_MANU_IMG_DIR_.intval($id_entity);
		break;
	}
	echo getTranslation("Image")." => ".$path.".jpg <br/>";
	//if (@copy($url, $tmpfile))
    if (@copy($url_image, $tmpfile))
	{
		imageResize($tmpfile, $path.'.jpg');
		$imagesTypes = ImageType::getImagesTypes($entity);
		foreach ($imagesTypes AS $k => $imageType)
			imageResize($tmpfile, $path.'-'.stripslashes($imageType['name']).'.jpg', $imageType['width'], $imageType['height']);
	}else{
		echo "<br>Error al copiar la imagen desde ".$url." a ".$path;
		unlink($tmpfile);
		return false;
	}
	return true;
}	

$borrarimg = "NO";	
function borraImg($id_entity,$id_image = NULL,$url,$entity){

	global $borrarimg;
	
	if($borrarimg="SI"){
	switch($entity)
		{
			
			case 'products':
				$path = _PS_PROD_IMG_DIR_.intval($id_entity).'-'.intval($id_image);
				break;
			case 'categories':
				$path = _PS_CAT_IMG_DIR_.intval($id_entity);
				break;
			case 'manufacturers':
				$path = _PS_MANU_IMG_DIR_.intval($id_entity);
				
		}
	
	$paths[] = $path.'.jpg';
	$imagesTypes = ImageType::getImagesTypes($entity);
	foreach ($imagesTypes AS $k => $imageType){
		$paths[] = $path.'-'.stripslashes($imageType['name']).'.jpg';
	}	
	
	foreach($paths as $p){
		unlink($p);
		}
	} 

}	

function borracodigos(){
	$query = "SELECT * 
			FROM  `"._DB_PREFIX_."category` AS c1
			LEFT JOIN  
			`"._DB_PREFIX_."category_lang` AS c2 
			ON c1.id_category = c2.id_category
			
			";
	$resu = sacandosql($query);
	
	foreach($resu as $res){			
			$nombre = $res["name"];
            $nombre_2 = $res["name_2"];
            $link = $res["link_rewrite"];
            $meta_title = $res["meta_title"];
            $meta_keywords = $res["meta_keywords"];
			$pos = strpos($nombre,"----");
			if($pos!==false){
				$datos["name"]=explode("----",$nombre);
				$datos["name"]=$datos["name"][0];
                $datos["name_2"]=explode("----",$nombre_2);
				$datos["name_2"]=$datos["name_2"][0];
                $datos["link_rewrite"]=explode("----",$link);
				$datos["link_rewrite"]= strtolower($datos["link_rewrite"][0]);
                $datos["meta_title"]=explode("----",$meta_title);
				$datos["meta_title"]=$datos["meta_title"][0];
                $datos["meta_keywords"]=explode("----",$meta_keywords);
				$datos["meta_keywords"]=$datos["meta_keywords"][0];
				//actualizarDatos($datos,_DB_PREFIX_."category_lang","id_category",$res["id_category"]);
                actualizarDatosLang($datos,_DB_PREFIX_."category_lang","id_category",$res["id_category"],"id_lang",$res["id_lang"]);
			}
		
	}//fin foreach
		
}

?>
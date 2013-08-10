<?php
function ExcelaArray($archivo){
	
	include_once('modules/comercio/funcArchivos/phpExcelReader/Excel/reader.php');


	// ExcelFile($filename, $encoding);
	$data = new Spreadsheet_Excel_Reader();
	
	
	// Set output Encoding.
	$data->setOutputEncoding('CP1251');
	
	$data->read($archivo);
	
	for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
		for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
			//echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";
			$salida[$i][$j] = $data->sheets[0]['cells'][$i][$j];
		}
		//echo "\n";
	
	}
	
	return $salida;
	
}


function funcArchivosShowCargaExcel(){
	
	if($_POST["subir"]!=""){
		$archivo = subirArchivo();
		
		$excel = ExcelaArray($archivo);
		
		//print_r($excel);
		
		echo "<form method='post' enctype='multipart/form-data'>";
		$colExcel = $excel[1];
		foreach($colExcel as $colE){
			echo "\n<br> Columna: [".$colE."] corresponde a ".funcArchivosShowSelectBBDDProductos();
		}
		echo "<input type='hidden' name='file' value='".$archivo."'>";
		echo "<br><input type='submit' name='insertar' value='Continuar'>";
		echo "</form>";
		
	}elseif($_POST["insertar"]=="Continuar"){
		$archivo = $_POST["file"];
		//$excel = ExcelaArray($archivo);
		
		print_r($_POST);
		
		//ve si se envia columna con categorias
		$colu = $_POST["columna"];
		for($i=0;$i<sizeof($colu);$i++){
			if($colu[$i] == "Categoria"){
				$muestraSelectCategorias = true;
				$colCat = $i;
			}
			if($colu[$i] == "Unidad"){
				$muestraSelectUnidad = true;
				$colUni = $i;
			}
		}
		
		echo "<form method='post' enctype='multipart/form-data'>";
		
		if($muestraSelectCategorias && !isset($_POST["categoriasNuevas"])){
			funcArchivosmuestraSelectCategorias($archivo,$colCat);
		}
		if($muestraSelectUnidad && !isset($_POST["unidadNuevas"])){
			funcArchivosmuestraSelectUnidad($archivo,$colUni);
		}
		
		
		
		if($_POST["columna"]){
		$columnas = $_POST["columna"];
		foreach($columnas as $colu){
			echo "\n<input type='hidden' name='columna[]' value='".$colu."'>";
			}
		}
		
	
		echo "\n<input type='hidden' name='file' value='".$archivo."'>";
		echo "\n<br><input type='submit' name='insertar' value='Continuar Final'>";
		echo "</form>";
		
		
	}elseif($_POST["insertar"]=="Continuar Final"){
		funcArchivosGrabaDatos();
		
		
	}else{
		echo "\n<h1>Carga de Productos desde Excel</h1>";
		
		echo "<form method='post' enctype='multipart/form-data'>";
		
		echo "Archivo: <input type='file' name='file'>";
		
		echo "<input type='submit' name='subir' value='Enviar'>";
		echo "</form>";
		
	}
	
}


function funcArchivosGrabaDatos(){
	//print_r($_POST);
	
	if($_POST["insertar"]=="Continuar Final"){
		$archivo = $_POST["file"];
		$excel = ExcelaArray($archivo);
			
		$real = SacaDatosUsuarioNuke($_SESSION["PNSVuid"]);
	//echo " | email -> ".$real["pn_uname"]." | <br>";
	//echo " | email -> ".$real["pn_uname"]." | <br>";
	
		$idOwner = BuscaCliente($real["pn_email"]);
		
		if($idOwner!=""){
		
		//$idOwner = $_SESSION["idOwner"];
		//echo "\n<br>idTienda-> ".$idOwner;
		//print_r($_SESSION);
		
		$columnas = $_POST["columna"];
		for($x=0;$x<sizeof($columnas);$x++){
			switch($columnas[$x]){
				case "Nombre":
					$colNombre = $x+1;
					break;
				case "SKU":
					$colSKU = $x+1;
					break;
				case "Categoria":
					$colCategoria = $x+1;
					break;
				case "Descripcion":
					$colDescripcion = $x+1;
					break;
				case "precio":
					$colPrecio = $x+1;
					break;
				case "Unidad":
					$colUnidad = $x+1;
					break;
				case "Marca":
					$colMarca = $x+1;
					break;
				case "Stock":
					$colStock = $x+1;
					break;	
			}
		}
		
		$categoriasViejas = $_POST["categoriasViejas"];
		$categoriasNuevas = $_POST["categoriasNuevas"];
		for($j=0;$j<sizeof($categoriasViejas);$j++){
			$cats[$categoriasViejas[$j]]=$categoriasNuevas[$j];
		}
		
		$unidadesViejas = $_POST["unidadesViejas"];
		$unidadesNuevas = $_POST["unidadesNuevas"];
		for($j=0;$j<sizeof($unidadesViejas);$j++){
			$unis[$unidadesViejas[$j]]=$unidadesNuevas[$j];
		}
		
		for($i=2;$i<sizeof($excel);$i++){
			$nombre = $excel[$i][$colNombre];
			if(($nombre!="") && (strlen($nombre)>2)){
			$sku = $excel[$i][$colSKU];
			$descripcion = $excel[$i][$colDescripcion];
			$precio = $excel[$i][$colPrecio];
			$marca = $excel[$i][$colMarca];
			$stock = $excel[$i][$colStock];
			
			$idCategoria = $cats[$excel[$i][$colCategoria]];
			
			$idUnidad = $unis[$excel[$i][$colUnidad]];
			
			//inserta producto
			$datos["idOwner"] = $idOwner;
			
			$datos["idCategoria"] = $idCategoria;
			$datos["Nombre"] = str_replace("'","´",$nombre);
			$datos["Marca"] = $marca;
			$datos["SKU"] = $sku;
			$datos["stock"] = $stock;
			$datos["pedidominimo"] = "";
			$datos["precio"] = str_replace(",",".",$precio);
			$datos["idUnidad"] = $idUnidad;
			$datos["oferta"] = "";
			$datos["descuento"] = "";
			$datos["novedad"] = "";
			$datos["preferencia"] = "";
			$datos["visible"] = "1";
			$datos["tipo"] = "Tangible";
			$datos["imagen"] = "";
			$datos["imagentn"] = "";
			$datos["imagenGal"] = "";
			$datos["visitas"] = 0;
			
			//print_r($datos);echo "<br>";
			if($sku!=""){
				$nuevoID = buscarSKUdeOwner($sku,$idOwner);
				
			}
			
			echo "\n<br>";
			if($nuevoID==0){
				$nuevoID = ingresarDatos($datos,"pnuke_comercio_productos");
				$yaestaba = false;
				echo "Agregando ";
			}else{
				actualizarDatos($datos,"pnuke_comercio_productos","idProducto",$nuevoID);
				$yaestaba = true;
				echo "Actualizando ";
			}
			
			echo " -> ".$nombre." a ".$precio;
			//inserta descripcion producto
			$idiomas[0]="spa";
			$idiomas[1]="cat";
			$idiomas[2]="eng";
			
			if($nuevoID!=""){
				foreach($idiomas as $idioma){
					//$idioma = "spa";
					$datos3["idProducto"] = $nuevoID;
					$datos3["idioma"] = $idioma;
					$datos3["descripcion"] = str_replace("'","´",$descripcion);
					$datos3["nombre"] = str_replace("'","´",$nombre);
					
					$descri2 = SacaDatosDescripcion($nuevoID,$idioma);
					if($descri2["idDescripcion"]==""){
						echo "\n<br> -- Agregando Descripcion.. ".$idioma." --> ".$nombre;
						ingresarDatos($datos3,"pnuke_comercio_descripciones");
						
					}else{
						
						echo "\n<br> -- Actualizando Descripcion[".$descri2["idDescripcion"]."].. ".$idioma." --> ".$nombre;
						//$descri = SacaDatosDescripcion($nuevoID,$idioma);
						actualizarDatos($datos3,"pnuke_comercio_descripciones","idDescripcion",$descri2["idDescripcion"]);
					}
					//print_r($datos3);echo "<br>";
				}
				//print_r($datos3);echo "<br>";
			}
			}
		}
	
		}
	}
	
}

function funcArchivosShowSelectBBDDCategorias(){
	
	
	$txt .= "\n<select name='categoriasNuevas[]'>";
	//$txt .= opTiendasNoEcho("");
	$txt .= optionsSATiendaNoEcho(0,$idCategoria,0);
	$txt .= "\n</select>";
	
	return $txt;
	
}


?>
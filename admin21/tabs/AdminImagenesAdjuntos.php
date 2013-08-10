<?php

/**
  * Image resize tab for admin panel, AdminImageResize.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

class AdminImagenesAdjuntos extends AdminTab
{
	private $start_time = 0;
	private $max_execution_time = 7200;

	//$this->table = 'image_type';
	
	
	public function display(){
		
		$ruta = PS_ADMIN_DIR."/tabs/AdminImagenesAdjuntos/conf.php";
        global $cookie;	
		//echo $ruta;
        
         $adminDir = $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
        
        
        echo "url ".$adminDir;
		
        $token = Tools::getAdminToken("AdminImagenesAdjuntos".intval(Tab::getIdFromClassName("AdminImagenesAdjuntos")).intval($cookie->id_employee));
  
		include_once($ruta);
			
		
		if($_POST["configurar"]){
			
			echo "<h2>Guardando configuracion</h2>";
			
			$rutaIMGS=PS_ADMIN_DIR."/tabs/AdminImagenesAdjuntos/converterImagenes.bat";
			$rutaADJ=PS_ADMIN_DIR."/tabs/AdminImagenesAdjuntos/converterAdjuntos.bat";
			
			
			
			$direweb = "http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
			$direweb = str_replace("index.php","",$direweb);
			
			//set remotescript=http://teamweb.tuclicka.com/tuning/admin21/tabs/AdminImagenesAdjuntos/encuadre.php
			$direwebIMG = $direweb."tabs/AdminImagenesAdjuntos/encuadre.php";
			$direwebADJ = $direweb."tabs/AdminImagenesAdjuntos/encuadreadj.php";
			$direwebsin = $direweb."tabs/AdminImagenesAdjuntos/";
		
			//echo $direweb;

			
			$conf = file_get_contents($ruta);
			if($conf==false){
				echo "\n<br>No se pudo leer el archivo";
			}
			
			$confIMGS = file_get_contents($rutaIMGS);
			if($confIMGS==false){
				echo "\n<br>No se pudo leer el archivo";
			}
			$confADJ = file_get_contents($rutaADJ);
			if($confADJ==false){
				echo "\n<br>No se pudo leer el archivo";
			}
			
			/*
			set dirbase=C:\IMGtienda\

			set ftphost=teamweb.tuclicka.com
			set ftpuser=teamweb
			set ftppass=Hola123456
			 
			 */
			 
			 
			//direweb IMG
			$sepaconfIMGS = explode("remotescript=",$confIMGS);
			$sepaconfIMGS = explode("encuadre.php",$sepaconfIMGS[1]);
			$sepaconfIMGS = $sepaconfIMGS[0];
			
			//echo " sepaconfIMGS -> ".$sepaconfIMGS;
			
			$buscar = $sepaconfIMGS."encuadre.php";
			$reemplazo = $direwebIMG;
			$confIMGS = str_replace($buscar,$reemplazo,$confIMGS);
			
			//direweb ADJ
			$sepaconfADJ = explode("remotescript=",$confADJ);
			$sepaconfADJ = explode("encuadreadj.php",$sepaconfADJ[1]);
			$sepaconfADJ = $sepaconfADJ[0];
			
			//echo " sepaconfIMGS -> ".$sepaconfIMGS;
			
			$buscar = $sepaconfADJ."encuadreadj.php";
			$reemplazo = $direwebADJ;
			$confADJ = str_replace($buscar,$reemplazo,$confADJ);
			
			$buscar = "dataftp[\"host\"]=\"".$dataftp["host"];
			$reemplazo = "dataftp[\"host\"]=\"".$_POST["ftphost"];
			$conf =str_replace($buscar,$reemplazo,$conf);
			
			
			$buscar2 = "set ftphost=".$dataftp["host"];
			$reemplazo2 = "set ftphost=".$_POST["ftphost"];
			$confIMGS =str_replace($buscar2,$reemplazo2,$confIMGS);
			$confADJ =str_replace($buscar2,$reemplazo2,$confADJ);
			
			$dataftp["host"]=$_POST["ftphost"];
			
			$buscar = "dataftp[\"dir\"]=\"".$dataftp["dir"];
			$reemplazo = "dataftp[\"dir\"]=\"".$_POST["ftpdir"];
			$conf =str_replace($buscar,$reemplazo,$conf);
			$dataftp["dir"]=$_POST["ftpdir"];
			
			$buscar = "dataftp[\"user\"]=\"".$dataftp["user"];
			$reemplazo = "dataftp[\"user\"]=\"".$_POST["ftpuser"];
			$conf =str_replace($buscar,$reemplazo,$conf);
			
			$buscar2 = "set ftpuser=".$dataftp["user"];
			$reemplazo2 = "set ftpuser=".$_POST["ftpuser"];
			$confIMGS =str_replace($buscar2,$reemplazo2,$confIMGS);
			$confADJ =str_replace($buscar2,$reemplazo2,$confADJ);
			
			$dataftp["user"]=$_POST["ftpuser"];
			
			$buscar = "dataftp[\"pass\"]=\"".$dataftp["pass"];
			$reemplazo = "dataftp[\"pass\"]=\"".$_POST["ftppass"];
			$conf =str_replace($buscar,$reemplazo,$conf);
			
			$buscar2 = "set ftppass=".$dataftp["pass"];
			$reemplazo2 = "set ftppass=".$_POST["ftppass"];
			$confIMGS =str_replace($buscar2,$reemplazo2,$confIMGS);
			$confADJ =str_replace($buscar2,$reemplazo2,$confADJ);
			
			$dataftp["pass"]=$_POST["ftppass"];
			
			$buscar = "dataftp[\"dirbase\"]=\"".$dataftp["dirbase"];
			$reemplazo = "dataftp[\"dirbase\"]=\"".$_POST["dirbase"];
			$conf =str_replace($buscar,$reemplazo,$conf);
						
			$buscar2 = "set dirbase=".$dataftp["dirbase"];
			$reemplazo2 = "set dirbase=".$_POST["dirbase"];
			$confIMGS =str_replace($buscar2,$reemplazo2,$confIMGS);
			$confADJ =str_replace($buscar2,$reemplazo2,$confADJ);
			
			$dataftp["dirbase"]=$_POST["dirbase"];
			
			
			echo system("rm -f ".$ruta);
			$f = file_put_contents($ruta, $conf);
			
			echo system("rm -f ".$rutaIMGS);
			$f = file_put_contents($rutaIMGS, $confIMGS);
			
			echo system("rm -f ".$rutaADJ);
			$f = file_put_contents($rutaADJ, $confADJ);
			
			
			echo "<a target='_blank' href='tabs/AdminImagenesAdjuntos/converterImagenes.bat'>Descargar Converter Imagenes</a>";
			echo " | ";
			echo "<a target='_blank' href='tabs/AdminImagenesAdjuntos/converterAdjuntos.bat'>Descargar Converter Adjuntos</a>";
			
		}
		
		//print_r($_SERVER);
				
		echo "<h2>Configuración inicial</h2>";
		
		echo "
		
		
		 
		<p>
		1.- Añadir sus datos de conexión suministrados
		<br>
		Sitúese en la celda con el mouse y  tecla tabulación.
		<br>
		Al finalizar, botón “Guardar configuración”
		</p>
		 
		<p>
		2.- Previamente deberá crear las siguientes carpetas 
		<br>
		C:/IMGtienda
		<br>
		C:/IMGtienda/imagenes
		<br>
		C:/IMGtienda/adjuntos
		</p>
		 
		<p>
		3.- Botón “Descargar Converter Imagenes” y “Descargar Converter Adjuntos”
		<br>
		Para ambos botones se abrirá una pantalla del explorador.
		<br>
		Guarde dicha pantalla “Guardar como”, en C:/IMGtienda.
		<br>
		Guarde; converterImagenes.bat  y converterAdjuntos.bat. ( Puede ser necesario eliminar los caracteres .txt )
		</p>
		
		<h2>Hospedaje de imágenes y adjuntos</h2>

 		<p>

		Copie sus imágenes y adjuntos en sus respectivas carpetas
		<br>
		( C:/IMGtienda/imagenes y C:/IMGtienda/adjuntos )  y proceda desde su Back Office local.	
		</p>
		
		
		<hr>
		
		<h2>Si ya tiene las imagenes y adjuntos en el FTP</h2>
		<p>
		Si ya ha subido las imagenes y adjuntos, y en su servidor FTP estan las imagenes en la carpeta 'transferidas' y las 
		imagenes en la carpeta 'transferidas/imagenes' y los adjuntos en 'transefridas/adjuntos', haga click en los siguientes
		enlaces, para seguir el proceso de ajuste de las imagenes y adjuntos con la base de datos:
		
		<ul class='btns'>
		<li><a class='btn_ajuste_a-i' href='tabs/AdminImagenesAdjuntos/encuadre.php?token=".$token."' target='_blank'>Ajuste de Imágenes</a></li>
		<li><a class='btn_ajuste_a-i' href='tabs/AdminImagenesAdjuntos/encuadreadj.php?token=".$token."' target='_blank'>Ajuste de Adjuntos</a></li>
		</ul> 
		</p>
		
		<hr>
		
		";
		
		
		echo "
		<form method='POST'>
		<fieldset>
		<label> Directorio Base: <label>
		<input type='text' name='dirbase' value='".$dataftp["dirbase"]."'>
		
		<label>FTP host:</label>
		<input type='text' name='ftphost' value='".$dataftp["host"]."'>
		
		<label>FTP user:</label>
		<input type='text' name='ftpuser' value='".$dataftp["user"]."'>
		
		<label>FTP pass:</label>
		<input type='text' name='ftppass' value='".$dataftp["pass"]."'>
		
		<label>FTP dir:</label>
		<input type='text' name='ftpdir' value='".$dataftp["dir"]."'>
		
		
		</fieldset>
		<input type='submit' name='configurar' value='Configurar y Descargar'>
		</form>
		";
		
		echo "<a target='_blank' href='tabs/AdminImagenesAdjuntos/converterImagenes.bat'>Descargar Converter Imagenes</a>";
			echo " | ";
			echo "<a target='_blank' href='tabs/AdminImagenesAdjuntos/converterAdjuntos.bat'>Descargar Converter Adjuntos</a>";
			
		
	}
	
	
	
	
	//$this->displayForm();
	
	/*
	public function __construct()
	{
		$this->table = 'image_type';
		$this->className = 'ImageType';
		$this->lang = false;
		$this->edit = true;
	 	$this->delete = true;
		
		
		$this->fieldsDisplay = array(
			'id_image_type' => array('title' => $this->l('ID'), 'align' => 'center', 'width' => 25),
			'name' => array('title' => $this->l('Name'), 'width' => 140, 'size' => 16),
			'width' => array('title' => $this->l('Width'), 'align' => 'right', 'suffix' => ' px', 'width' => 50, 'size' => 5),
			'height' => array('title' => $this->l('Height'), 'align' => 'right', 'suffix' => ' px', 'width' => 50, 'size' => 5)
		);
		

		parent::__construct();
	}
	
	*/
	
	public function postProcess()
	{
		global $currentIndex, $cookie;

		if (isset($_POST['resize']))
		{
			$imagesTypes = ImageType::getImagesTypes('products');
			$sourceFile['tmp_name'] = _PS_IMG_DIR_.'/p/'.Tools::getValue('id_product').'-'.Tools::getValue('id_image').'.jpg';
			foreach ($imagesTypes AS $k => $imageType)
				if (!imageCut
				($sourceFile,
				_PS_IMG_DIR_.'p/'.Tools::getValue('id_product').'-'.Tools::getValue('id_image').'-'.stripslashes($imageType['name']).'.jpg', 
				$imageType['width'], 
				$imageType['height'], 
				'jpg',
				$_POST[$imageType['id_image_type'].'_x1'],
				$_POST[$imageType['id_image_type'].'_y1']))
					$this->_errors = Tools::displayError('an error occurred while copying image').' '.stripslashes($imageType['name']);
				// Save and stay on same form
				if (Tools::getValue('saveandstay') == 'on')
					Tools::redirectAdmin($currentIndex.'&id_product='.Tools::getValue('id_product').'&id_category='.intval(Tools::getValue('id_category')).'&addproduct&conf=4&tabs=1&token='.Tools::getAdminToken('AdminCatalog'.intval(Tab::getIdFromClassName('AdminCatalog')).intval($cookie->id_employee)));
				// Default behavior (save and back)
				Tools::redirectAdmin($currentIndex.'&id_category='.intval(Tools::getValue('id_category')).'&conf='.intval(Tools::getValue('conf')).'&token='.Tools::getAdminToken('AdminCatalog'.intval(Tab::getIdFromClassName('AdminCatalog')).intval($cookie->id_employee)));
		} else
			parent::postProcess();
	}

	public function displayForm($isMainTab = true)
	{
		global $currentIndex, $cookie;
		parent::displayForm();
		
		echo '
		<script type="text/javascript">
		function runApp(which) {
		  WshShell = new ActiveXObject("WScript.Shell");
		  WshShell.Run (which,1,false);
		}
		</script>
		
		';
		
		
		
		echo "<a href=\"runApp('file://c:/test.bat');\">Batch File</a>";

		
	}
}

?>

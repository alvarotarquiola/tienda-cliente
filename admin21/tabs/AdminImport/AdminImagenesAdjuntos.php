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
			
			
		//echo $ruta;
			
		include_once($ruta);
			
		
		if($_POST["configurar"]){
			
			echo "<h2>Guardando configuracion</h2>";
			
			$rutaIMGS=PS_ADMIN_DIR."/tabs/AdminImagenesAdjuntos/converterImagenes.bat";
			$rutaADJ=PS_ADMIN_DIR."/tabs/AdminImagenesAdjuntos/converterAdjuntos.bat";
			
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
		
		echo "<h2>Envio de Imagenes al servidor</h2>";
		
		echo "
		<p>Para poder hacer un envio masivo de imagenes desde su ordenador a su tienda online
		es necesario que descargue 2 programas y los instale en su ordenador</p>
		<p> La primera descarga es el ImageMagick, un programa que permite comprimir las imagenes
		antes de enviarlas. </p>
		<p>Puede descargarla hacienco <a href='tabs/AdminImagenesAdjuntos/ImageMagick-6.7.6-3-Q16-windows-dll.exe'>click aqui</a>. </p>
		<p></p>
		<p>Luego es necesario crear en su Unidad de Disco Local c:\ una carpeta con el nombre \"IMGtienda\" </p>
		<p>Dentro de ésta carpeta deberá crear otra carpeta que se llame \"imagenes\" en donde deberá poner las imagenes
		de sus productos, y cada imagen deberá de tener como nombre de archivo, la referencia de su producto en la tienda.
		</p>
		<p>
		Al haber hecho esto, podrá descargarse el archivo coverter.bat, que le permitirá comprimir y enviar las imagenes a su tienda.<p>
		<p>Para descargarlo puede hacer <a href='tabs/AdminImagenesAdjuntos/converter.bat'>click aqui</a></p>
		<p></p>
		<p>Debe asegurarse que su converter.bat tenga en la parte de configuracion los datos del ftp que le facilitó su proveedor.</p>
		<p>Para editar el archivo converter.bat , haga click con el boton derecho sobre él y dele a 'editar'
		<p> Los datos que debe de verificar son:
		<br> set dirbase=C:\IMGtienda\
		<br> set ftphost='nombre de su servidor ftp'
		<br> set ftpuser='nombre de usuario del ftp'
		<br> set ftppass='contraseña de acceso al ftp'
		</p>
		<p></p>
		<p>Una vez configurado, ejecute el archivo. Si le da problemas de permisos, ejecutelo en modo 'Administrador'. </p>
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

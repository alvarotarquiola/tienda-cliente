<?php
//phpinfo();


//error_reporting(E_ALL);
//echo ini_get('display_errors');
define('PS_ADMIN_DIR', getcwd());


/*

define('__PS_BASE_URI__', '/tuning/');
define('_THEME_NAME_', 'Rojo');
define('_DB_NAME_', 'admin_teamtienda');
define('_DB_SERVER_', 'localhost');
define('_DB_USER_', 'admin_teamtienda');
define('_DB_PREFIX_', 'ps_');
define('_DB_PASSWD_', 'Hola123456');
define('_DB_TYPE_', 'MySQL');
define('_COOKIE_KEY_', 'IpLgigG07EFZKJVbfP10zcwobfKcgaSBBrcTegEu9cU8YBXe0dYMU7eT');
define('_COOKIE_IV_', 'EEeoPzYv');
define('_PS_VERSION_', '1.3.1.1');
*/

$rutaconfig = PS_ADMIN_DIR.'/../../../config/settings.inc.php'; 

//echo $rutaconfig;

include($rutaconfig); 



$pnconfig['dbhost']=_DB_SERVER_;
$pnconfig['dbuname']=_DB_USER_;
$pnconfig['dbpass']=_DB_PASSWD_;
$pnconfig['dbname']=_DB_NAME_;

//metodo para imagenes
$pnconfig["metodo"] = 0;

include("funcBBDD.php");
include("funciones.php");
include("ajusteAdjuntos.php");

$rutaimagesinc = PS_ADMIN_DIR.'/../../../images.inc.php'; 
include($rutaimagesinc);


/*
 Formato nombre archivo imagen
 
	idproducto-idimagen.jpg
	idproducto-idimagen-home.jpg
	idproducto-idimagen-large.jpg
	idproducto-idimagen-medium.jpg
	idproducto-idimagen-small.jpg
	idproducto-idimagen-thickbox.jpg
 */
 
$dirroot = PS_ADMIN_DIR."/../../..";

//$dirimages = $_SERVER['DOCUMENT_ROOT']."/transferidas/adjuntos";
//$dirimages = $dirroot."/transferidas/adjuntos";
//$diradjuntos = $dirroot."/transferidas/adjuntos";

//echo "<br>dirimages -> ".$dirimages;
if($_GET["diradjuntos"]!=""){
    //$dirimages = $_SERVER['DOCUMENT_ROOT']."/transferidas/".$_GET["diradjuntos"];
    $diradjuntos = $dirroot."/transferidas/".$_GET["diradjuntos"];
    echo "Caso 1"."<br/>";
    echo $diradjuntos."<br/>";

}else{

//$dirnuevo = $_SERVER['DOCUMENT_ROOT']."/transferidas/adjuntos_".date("j-m-Y_G-i-s");
//$dirnuevo = $dirroot."/transferidas/adjuntos_".date("j-m-Y_G-i-s");
//$dirimages = moverDIR($dirimages,$dirnuevo);

} 

//echo "<div style='width:100%;height:100%;background-color:#CCCCCC;opacity:0.7;position:absolute;top:0px;left:0px'>"; 

echo "<br>Buscando archivos subidos..";

echo "<div style='height:200px;overflow:auto;'>";

if($_GET["diradjuntos"]!=""){
 
$adjuntos = getDirectoryList ($diradjuntos);

    foreach($adjuntos as $adjunto){
    	echo "<br><hr>".$adjunto;
    	$refe = explode(".",$adjunto);
    	$refe = $refe[0];
    	
    	$pos = stripos($refe,"--");
    	
    	if($pos!==false){
    		$refe2 = explode("--",$refe);
    		$refe = $refe2[0];
    	}
    	
    	echo "<br> >> Buscando Referencia (".$refe.")";
    	$idProducto = buscareferencia($refe);
    	if($idProducto){
    			echo " -> Encontrada la referencia ";
    			echo "<br> >> Copiando a carpeta de adjuntos";
    			$archivo = $diradjuntos."/".$adjunto;
                
                echo "<pre>";
                print_r($archivo);
                echo "</pre>";
                
    			$archidesti = copiaraDestinoADJs($archivo,$idProducto);
    	}else{
    		echo " -> No se encontro producto con esa referencia ";
    	}
    }//fin foreach adjuntos   
}

echo "</div>";

//echo "</div>";

//echo "<div style='position:absolte;top:0px;background-color:#FFFFFF;'>";
echo "<h1>Fin del Proceso</h1>";
//echo "</div>";

$dirt = $_SERVER['DOCUMENT_ROOT']."/transferidas/";
$dirt = $dirroot."/transferidas/";

echo "<br>Lista de subidas anteriores:";

$adjuntos = getDirectoryList ($dirt);

foreach($adjuntos as $adj){
	$pos = strpos($adj,"adjuntos");
	if($pos!==false){
		echo "<br><a href='".$_SERVER['PHP_SELF']."?diradjuntos=".$adj."'>".$adj."</a>";
	}
}//fin foreach imagenes



?>
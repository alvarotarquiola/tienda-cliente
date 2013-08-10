<?php
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
include($rutaconfig); 

$pnconfig['dbhost']=_DB_SERVER_;
$pnconfig['dbuname']=_DB_USER_;
$pnconfig['dbpass']=_DB_PASSWD_;
$pnconfig['dbname']=_DB_NAME_;

//metodo para imagenes
$pnconfig["metodo"] = 0;

include("funcBBDD.php");
include("funciones.php");
include("ajusteImages.php");

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

//$dirimages = $_SERVER['DOCUMENT_ROOT']."/transferidas/imagenes";
//$dirimages = $dirroot."/transferidas/imagenes";

if(isset($_GET["dirimages"]) && $_GET["dirimages"]!=""){
    //$dirimages = $_SERVER['DOCUMENT_ROOT'].__PS_BASE_URI__."/transferidas/".$_GET["dirimages"];
    //$dirimages = $dirroot."/transferidas/".$_GET["dirimages"];
    $dirimages = $dirroot."/transferidas/".$_GET["dirimages"];
    echo "Caso 1"."<br/>";
    echo $dirimages."<br/>";

}else{
    //$dirnuevo = $_SERVER['DOCUMENT_ROOT']."/transferidas/imagenes_".date("j-m-Y_G-i-s");
    //$dirnuevo = $dirroot."/transferidas/imagenes_".date("j-m-Y_G-i-s");
    /*$dirnuevo = $dirroot."/transferidas/imagenes_".date("j-m-Y_G-i-s");
    
    $dirimages = moverDIR($dirimages,$dirnuevo);
    echo "Caso 2"."<br/>";
    echo $dirroot."<br/>";
    echo $dirnuevo."<br/>";
    echo $dirimages."<br/>";*/
} 
 

//echo "<br>Buscando archivos subidos..";
echo "<h1>Buscando archivos subidos..</h1>";
echo "<div style='height:200px;overflow:auto;'>";

if(isset($_GET["dirimages"]) && $_GET["dirimages"]!=""){
    
    $imagenes = getDirectoryList($dirimages);

    echo "<pre>";
    //print_r($imagenes);
    echo "</pre>";
    
    foreach($imagenes as $imagen){
   	 echo "<br><hr>";
    	$refe = explode(".",$imagen);
    	$refe = $refe[0];
    	
    	$pos = stripos($refe,"--");
    	
    	if($pos!==false){
    		$refe2 = explode("--",$refe);
    		$refe = $refe2[0];
    	}
    	
    	echo ">> Buscando Referencia (".$refe.")";
    	$idProducto = buscareferencia($refe);
    	if($idProducto){
    			echo " ==> Encontrada la referencia ";
    			echo "<br> >> Copiando a carpeta de imagenes";
    			$archivo = $dirimages."/".$imagen;
                $existe = verificarImage($idProducto, $imagen);
                
                if(!$existe){
                    $archidesti = copiaraDestinoIMGs($archivo,$idProducto);
                    echo "<br> >> Produciendo tamaños para ".$archidesti;
                    ponertamanos($archidesti);
                }else{
                    echo "<br> >> No se esta Produciendo tamaños por que el archivo existe.";
                }
    			//$archidesti = copiaraDestinoIMGs($archivo,$idProducto);
    			//echo "<br> >> Produciendo tamaños para ".$archidesti;
    			//ponertamanos($archidesti);
    	}else{
    		echo " ==> No se encontro producto con esa referencia ";
    	}
    }//fin foreach imagenes
}

echo "</div>";

echo "<h1>Fin del Proceso</h1>";


$dirt = $_SERVER['DOCUMENT_ROOT']."/transferidas/";
echo "<br>Lista de subidas anteriores:";
$dirt = $dirroot."/transferidas/";

$imagenes = getDirectoryList ($dirt);

foreach($imagenes as $imagen){
	$pos = strpos($imagen,"imagenes");
    
	if($pos!==false){
        
        //echo $_SERVER['DOCUMENT_ROOT'].__PS_BASE_URI__."<br/>";
        //echo PS_ADMIN_DIR."<br/>";
        //echo PS_ADMIN_DIR."/../../../"."<br/>";
		echo "<br><a href='".$_SERVER['PHP_SELF']."?dirimages=".$imagen."'>".$imagen."</a>";
	}
}//fin foreach imagenes

?>
<?php


define('PS_ADMIN_DIR', getcwd());

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
$bandera = false;
$mensaje = "";

//$dirimages = $_SERVER['DOCUMENT_ROOT']."/transferidas/imagenes";
//$dirimages = $dirroot."/transferidas/imagenes";

//echo "<br>Buscando archivos subidos..";
echo "<h1>Buscando archivos subidos..</h1>";
echo "<div style='height:200px;overflow:auto;'>";


print_r($cookie->id_employee);

//if(isset($_GET["dirimages"]) && $_GET["dirimages"]!=""){
    
    $dirt = $_SERVER['DOCUMENT_ROOT']."/transferidas/";
    echo "<br>Lista de subidas anteriores:";
    $dir = $dirroot."/transferidas/";
    
    $token = $_GET["token"];
    //$direweb = "http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
    $adminDir = $_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"];
    $base_url = substr($adminDir, 0, -39);
    $direweb = "http://".$_SERVER["SERVER_NAME"]._PS_BASE_URL_;
    
    echo "url ".$base_url;
    
    $pagina = $base_url."index.php?tab=AdminImagenesAdjuntos&amp;token=".$token;
    
    $dirImagenes = getDirectoryList($dir);
    
    $directorios = getDirectoriosImagenes($dirImagenes);
    
    //print_r($directorios);
    
    if(count($directorios) > 0){
        $respuesta = importarImagenes($directorios);
        if($respuesta){
            $mensaje = "Se importaron las imagenes corectamente."; 
            echo '
    			<script type="text/javascript">
                    var mensaje = \''.$mensaje.'\';
    				alert(mensaje);
    			</script>
    			'; 
        }else{
            $mensaje = "Se importaron las imagenes corectamente."; 
            echo '
    			<script type="text/javascript">
                    var mensaje = \''.$mensaje.'\';
    				alert(mensaje);
    			</script>
    			'; 
        }
    }else{
        $mensaje = "No se importaron las imagenes, Verfique los directorios corespondientes.";
        $mensa_carga = "Importando Imagenes";
        echo "<div id='mensaje_carga'>";
        echo "<h2>".$mensa_carga."</h2>";
        echo "</div>";
        echo '
			<script type="text/javascript">
                var mensaje = \''.$mensaje.'\';
				alert(mensaje);
                setTimeout ("redireccionar()", 5000);
                
                function redireccionar() 
                {
                    //location.href=pagina;
                    window.close();
                }
			</script>
			';
    }
    
//}
echo "</div>";
    
    
    function getDirectoriosImagenes($dirImagenes)
    {
        $$directorios = array();
        
        foreach($dirImagenes as $dirImg){
        	$pos = strpos($dirImg,"imagenes");
        	if($pos!==false){
                $directorios[] = $dirImg;  
        	}
        }
        return $directorios;
    }
    
    function importarImagenes($directorios)
    {
        $res = false;
        $mensa_carga = "Importando Imagenes";
        echo "<div id='mensaje_carga'>";
        echo "<h2>".$mensa_carga."</h2>";
        echo "</div>";
        
        foreach($directorios as $directorio){
        
            $dirimgs = $dirroot."/transferidas/".$directorio;
            $imagenes = getDirectoryList($dirimgs, "delete");
        
            if(count($imagenes) > 0){
                
                foreach($imagenes as $imagen){
  	              echo "<br><hr>";
                	$refe = explode(".",$imagen);
                	$refe = $refe[0];
                	$pos = stripos($refe,"--");
                	
                	if($pos!==false){
                		$refe2 = explode("--",$refe);
                		$refe = $refe2[0];
                	}
                	//echo ">> Buscando Referencia (".$refe.")";
                	$idProducto = buscareferencia($refe);
                	if($idProducto){
            			//echo " ==> Encontrada la referencia ";
            			//echo "<br> >> Copiando a carpeta de imagenes";
            			$archivo = $dirimages."/".$imagen;
                        $existe = verificarImage($idProducto, $imagen);
                        
                        if(!$existe){
                            $archidesti = copiaraDestinoIMGs($archivo,$idProducto);
                            echo "<br> >> Produciendo tamaños para ".$archidesti;
                            ponertamanos($archidesti);
                        }else{
                            echo "<br> >> No se esta Produciendo tamaños por que el archivo existe.";
                        }
            			$archidesti = copiaraDestinoIMGs($archivo,$idProducto);
            			ponertamanos($archidesti);
                	}
                }//fin foreach imagenes
                $res = true;  
            }else{
                $res = false;
            }
        }
        return $res;
    }


?>

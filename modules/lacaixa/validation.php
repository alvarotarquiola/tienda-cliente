<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/lacaixa.php');

if (!empty($_POST)){

	// Variables
	$total     = $_POST["Ds_Amount"];
	$pedido    = $_POST["Ds_Order"];
	$codigo    = $_POST["Ds_MerchantCode"];
	$moneda    = $_POST["Ds_Currency"];
	$respuesta = $_POST["Ds_Response"];
	$firma_remota = $_POST["Ds_Signature"];

	// Creamos objeto
	$lacaixa = new lacaixa();

	// Contraseña secreta
	$clave = Configuration::get('LACAIXA_CLAVE');

	// Cálculo del SHA1
	$mensaje = $total . $pedido . $codigo . $moneda . $respuesta . $clave;
	$firma_local = strtoupper(sha1($mensaje));
    
	 
	
		if ($firma_local == $firma_remota){
				// Formatear variables
				$total  = number_format($total / 100,2);
				$pedido = intval($pedido);
				$respuesta = intval($respuesta);
				$moneda_tienda = 1; // Euros		
				
				
				if ($respuesta < 101){				
					// Compra válida
					$lacaixa->validateOrder($pedido, _PS_OS_PAYMENT_, $total, $lacaixa->displayName, NULL, $moneda_tienda);
					}else{				
					// Compra no válida
					$lacaixa->validateOrder($pedido, _PS_OS_ERROR_, 0, $lacaixa->displayName, 'errores:'.$respuesta);
					}
				
		}
	}
?>

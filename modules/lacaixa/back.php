<?
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/lacaixa.php');



$id = $_GET["id"];
$lacaixa = new lacaixa();

// Vaciado del carrito.
//$cart = new Cart(intval($id_cart));

$order = new Order($lacaixa->currentOrder);
Tools::redirectLink(__PS_BASE_URI__.'order-confirmation.php?id_cart='.$cart->id.'&id_module='.$lacaixa->id.'&id_order='.$lacaixa->currentOrder.'&key='.$order->secure_key);
?>
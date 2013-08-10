<?php

/* SSL Management */
$useSSL = true;

include(dirname(__FILE__).'/config/config.inc.php');
include(dirname(__FILE__).'/header.php');

$id_cart = intval(Tools::getValue('id_cart', 0));
$id_module = intval(Tools::getValue('id_module', 0));

//echo "<br>Cookie id orden antigua ->".$cookie->id_orden_antigua;

//borra orden antigua

if($cookie->id_orden_antigua !=""){
	
	//$ordenant = new Order($cookie->id_orden_antigua);
	
	/*
	$sqld = "DELETE FROM `"._DB_PREFIX_."orders` WHERE id_order='".$cookie->id_orden_antigua."'";
	
	if(!Db::getInstance()->Execute($sqld)){
				echo $sqlfinal;
				echo Db::getInstance()->getMsgError(); 
			}
	*/
	
	$id_order = $cookie->id_orden_antigua;
	
	$cookie->__unset("saltar");
	$cookie->__unset("id_orden_antigua");
	$cookie->__unset("id_cart");
	
	
}else{
	$id_order = Order::getOrderByCartId(intval($id_cart));
}

//------

//echo "<br>orden id ->".$id_order;

$secure_key = isset($_GET['key']) ? $_GET['key'] : false;
if (!$id_order OR !$id_module OR !$secure_key OR empty($secure_key)){
	//echo "<br>CERO";
	Tools::redirect('history.php'.(Tools::isSubmit('slowvalidation') ? '?slowvalidation' : ''));
	}
$order = new Order(intval($id_order));

//print_r($order);
if (!Validate::isLoadedObject($order) OR $order->id_customer != $cookie->id_customer OR $secure_key != $order->secure_key){
	//echo "<br>UNO";
	Tools::redirect('history.php');
	}
$module = Module::getInstanceById(intval($id_module));

	if ($order->payment != $module->displayName){
	//echo "<br>DOS";
	Tools::redirect('history.php');
	}
$smarty->assign(array(
	'HOOK_ORDER_CONFIRMATION' => Hook::orderConfirmation(intval($id_order)),
	'HOOK_PAYMENT_RETURN' => Hook::paymentReturn(intval($id_order), intval($id_module))));
//exit();
$smarty->display(_PS_THEME_DIR_.'order-confirmation.tpl');


include(dirname(__FILE__).'/footer.php');

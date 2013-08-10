<?php

/* SSL Management */
$useSSL = true;

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/bankwire.php');

if (!$cookie->isLogged())
    Tools::redirect('authentication.php?back=order.php');



//echo "<br>Cookie id orden antigua ->".$cookie->id_orden_antigua;
  
$cart = new Cart($cookie->id_cart);
//print_r($cart);
    
$bankwire = new BankWire();
echo $bankwire->execPayment($cart);

include_once(dirname(__FILE__).'/../../footer.php');

?>
<?php

/**
 * @author alexito
 * @copyright 2013
 */
 
header("Access-Control-Allow-Origin: *");
header("Allow-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: X-CUSTOM");
header("Access-Control-Max-Age: 1500000");
 
 
define('PS_ADMIN_DIR', getcwd());
include(PS_ADMIN_DIR.'/../config/config.inc.php');
/* Getting cookie or logout */
require_once(dirname(__FILE__).'/init.php');


$format = $_REQUEST['format'];

if($format == "json" && (isset($_GET["status_shop"])))
{
    if(isset($_REQUEST['callback'])) {
        $callback = $_REQUEST['callback'];
		$status = Configuration::get("PS_SHOP_ENABLE");
		$json["status"] = $status;
		
        echo "$callback(" . json_encode($json) . ")";
    } else {
        echo "callbackFunction(" . json_encode($json) . ")";
    }
}

if ($format == "json" && (isset($_GET["status"])))
{
	$status = $_GET['status'];
	
	if(isset($_REQUEST['callback'])) {
        $callback = $_REQUEST['callback'];
		Configuration::updateValue("PS_SHOP_ENABLE", $status);
		$json["message"] = "ok";
        echo "$callback(" . json_encode($json) . ")";
    } else {
        echo "callbackFunction(" . json_encode($json) . ")";
    }
    
    
}

?>
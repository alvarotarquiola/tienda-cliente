<?php

/**
  * Cancel Reservations tab for admin panel, AdminCancelReservations.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

class AdminCancelReservations extends AdminTab
{
	public function __construct()
	{
		global $cookie, $currentIndex;
	
		parent::__construct();
		$this->table = 'cancel';
	 	//echo "Cancelar reservas stock en: <input type='text' size='3' name='days' />";
	}


	/**
	  * @global object $cookie Employee cookie necessary to keep trace of his/her actions
	  */
	 
}

?>

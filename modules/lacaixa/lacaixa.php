<?php
/*-----------------------------------------------------------------------------
Author: Yago Ferrer
Author E-Mail: dylaks@gmail.com
Date: May 2008
Version : 0.1
Antes de publicar cualquier parte este código se me debe informar.
-----------------------------------------------------------------------------*/

class lacaixa extends PaymentModule
{
	private	$_html = '';
	private $_postErrors = array();

	public function __construct(){
		$this->name = 'lacaixa';
		$this->tab = 'Payment';
		$this->version = 0.1;
        
		// Array config con los datos de configuración
		$config = Configuration::getMultiple(array('LACAIXA_URLTPV', 'LACAIXA_CLAVE', 'LACAIXA_NOMBRE', 'LACAIXA_CODIGO', 'LACAIXA_TERMINAL','LACAIXA_MONEDA', 'LACAIXA_TRANS'));
		
		// Establecer propiedades según los datos de configuración
		if (isset($config['LACAIXA_URLTPV']))
			$this->urltpv = $config['LACAIXA_URLTPV'];		
		if (isset($config['LACAIXA_CLAVE']))
			$this->clave = $config['LACAIXA_CLAVE'];
		if (isset($config['LACAIXA_NOMBRE']))
			$this->nombre = $config['LACAIXA_NOMBRE'];			
		if (isset($config['LACAIXA_CODIGO']))
			$this->codigo = $config['LACAIXA_CODIGO'];			
		if (isset($config['LACAIXA_TERMINAL']))
			$this->terminal = $config['LACAIXA_TERMINAL'];						
		if (isset($config['LACAIXA_MONEDA']))
			$this->moneda = $config['LACAIXA_MONEDA'];								
		if (isset($config['LACAIXA_TRANS']))
			$this->trans = $config['LACAIXA_TRANS'];																										
		parent::__construct();
				
		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('La Caixa');
		$this->description = $this->l('Aceptar pagos con tarjeta v&iacute;a La Caixa');
		
		// Mostrar aviso en la página principal de módulos si faltan datos de configuración.
		if (!isset($this->urltpv) OR !isset($this->clave) OR !isset($this->nombre) OR !isset($this->codigo) OR !isset($this->terminal) OR !isset($this->moneda) OR !isset($this->trans))
		$this->warning = $this->l('Te faltan datos a configurar el m&oacute;dulo La Caixa.');
	}

	public function install()
	{
		// Valores por defecto al instalar el módulo
		if (!parent::install()  OR !Configuration::updateValue('LACAIXA_URLTPV', 'https://sis-t.sermepa.es:25443/sis/realizarPago')
			OR !Configuration::updateValue('LACAIXA_NOMBRE', 'Comercio Pruebas') OR !Configuration::updateValue('LACAIXA_TERMINAL', 1)
			OR !Configuration::updateValue('LACAIXA_MONEDA', '978') OR !Configuration::updateValue('LACAIXA_TRANS', 0) 
			OR !$this->registerHook('payment'))
			return false;
	}

	public function uninstall()
	{
	   // Valores a quitar si desinstalamos el módulo
		if (!Configuration::deleteByName('LACAIXA_URLTPV') OR !Configuration::deleteByName('LACAIXA_CLAVE')
				OR !Configuration::deleteByName('LACAIXA_CODIGO') 
				OR !Configuration::deleteByName('LACAIXA_TERMINAL') OR !Configuration::deleteByName('LACAIXA_MONEDA')
				OR !Configuration::deleteByName('LACAIXA_TRANS') OR !parent::uninstall())
			return false;
	}

	private function _postValidation(){
	
	    // Si al enviar los datos del formulario de configuración hay campos vacios, mostrar errores.
		if (isset($_POST['btnSubmit'])){			
			if (empty($_POST['urltpv']))
				$this->_postErrors[] = $this->l('Se requiere la URL de llamada del entorno.');		
			if (empty($_POST['clave']))
				$this->_postErrors[] = $this->l('Se requiere la Clave secreta de encriptaci&oacute;n.');					
			if (empty($_POST['nombre']))
				$this->_postErrors[] = $this->l('Se requiere el Nombre del comercio.');	
			if (empty($_POST['codigo']))
				$this->_postErrors[] = $this->l('Se requiere el N&uacute;mero de comercio (FUC).');					
			if (empty($_POST['terminal']))
				$this->_postErrors[] = $this->l('Se requiere el N&uacute;mero de terminal.');										
			if (empty($_POST['moneda']))
				$this->_postErrors[] = $this->l('Se requiere el Tipo de moneda.');					
		}
	}

	private function _postProcess(){
	    // Actualizar la configuración en la BBDD
		if (isset($_POST['btnSubmit'])){
		Configuration::updateValue('LACAIXA_URLTPV', $_POST['urltpv']);	
		Configuration::updateValue('LACAIXA_CLAVE', $_POST['clave']);
		Configuration::updateValue('LACAIXA_NOMBRE', $_POST['nombre']);
		Configuration::updateValue('LACAIXA_CODIGO', $_POST['codigo']);
		Configuration::updateValue('LACAIXA_TERMINAL', $_POST['terminal']);
		Configuration::updateValue('LACAIXA_MONEDA', $_POST['moneda']);
		Configuration::updateValue('LACAIXA_TRANS', $_POST['trans']);
		}
		
		$this->_html .= '<div class="conf confirm"><img src="../img/admin/ok.gif" alt="'.$this->l('ok').'" /> '.$this->l('Configuraci&oacute;n actualizada').'</div>';
	}

	private function _displaylacaixa()
	{
	    // Aparición el la lista de módulos
		$this->_html .= '<img src="../modules/lacaixa/lacaixa.png" style="float:left; margin-right:15px;"><b>'.$this->l('Este m&oacute;dulo te permite aceptar pagos con tarjeta.').'</b><br /><br />
		'.$this->l('Si el cliente elije este modo de pago, podr&aacute; pagar de forma autom&aacute;tica.').'<br /><br /><br />';
	}

	private function _displayForm(){
	  
	  // Opciones para el select de monedas.
	  $moneda = Tools::getValue('moneda', $this->moneda);
	  $iseuro =  ($moneda == '978') ? ' selected="selected" ' : '';
	  $isdollar = ($moneda == '840') ? ' selected="selected" ' : '';
	  
	    // Mostar formulario
		$this->_html .=
		'<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
			<fieldset>
			<legend><img src="../img/admin/contact.gif" />'.$this->l('Configuraci&oacute;n del TPV').'</legend>
				<table border="0" width="680" cellpadding="0" cellspacing="0" id="form">
					<tr><td colspan="2">'.$this->l('Por favor completa la informaci&oacute;n requerida que te proporcionar&aacute; La Caixa').'.<br /><br /></td></tr>
					<tr><td width="215" style="height: 35px;">'.$this->l('URL de llamada del entorno').'</td><td><input type="text" name="urltpv" value="'.Tools::getValue('urltpv', $this->urltpv).'" style="width: 330px;" /></td></tr>
					<tr><td width="215" style="height: 35px;">'.$this->l('Clave secreta de encriptaci&oacute;n').'</td><td><input type="text" name="clave" value="'.Tools::getValue('clave', $this->clave).'" style="width: 200px;" /></td></tr>
					<tr><td width="215" style="height: 35px;">'.$this->l('Nombre del comercio').'</td><td><input type="text" name="nombre" value="'.htmlentities(Tools::getValue('nombre', $this->nombre), ENT_COMPAT, 'UTF-8').'" style="width: 200px;" /></td></tr>
					<tr><td width="215" style="height: 35px;">'.$this->l('N&uacute;mero de comercio (FUC)').'</td><td><input type="text" name="codigo" value="'.Tools::getValue('codigo', $this->codigo).'" style="width: 200px;" /></td></tr>
					<tr><td width="215" style="height: 35px;">'.$this->l('N&uacute;mero de terminal').'</td><td><input type="text" name="terminal" value="'.Tools::getValue('terminal', $this->terminal).'" style="width: 80px;" /></td></tr>					
					<tr><td width="215" style="height: 35px;">'.$this->l('Tipo de moneda').'</td><td>
					<select name="moneda" style="width: 80px;"><option value=""></option><option value="978"'.$iseuro.'>EURO</option><option value="840"'.$isdollar.'>DOLLAR</option></select></td></tr>
					<tr><td width="215" style="height: 35px;">'.$this->l('Tipo de transacci&oacute;n').'</td><td><input type="text" name="trans" value="'.Tools::getValue('trans', $this->trans).'" style="width: 80px;" /></td></tr>					
					</td></tr>
					<tr><td colspan="2" align="center"><input class="button" name="btnSubmit" value="'.$this->l('Guardar configuraci&oacute;n').'" type="submit" /></td></tr>
				</table>
			</fieldset>
		</form>';
	}	

	public function getContent()
	{
	    // Recoger datos
		$this->_html = '<h2>'.$this->displayName.'</h2>';
		if (!empty($_POST))
		{
			$this->_postValidation();
			if (!sizeof($this->_postErrors))
				$this->_postProcess();
			else
				foreach ($this->_postErrors AS $err)
					$this->_html .= '<div class="alert error">'. $err .'</div>';
		}
		else
			$this->_html .= '<br />';
		$this->_displaylacaixa();
		$this->_displayForm();
		return $this->_html;
	}
	
	public function hookPayment($params){
		
        // Variables necesarias de fuera		
		global $smarty, $cookie, $cart;
					
	    // Valor de compra				
		$id_currency = intval(Configuration::get('PS_CURRENCY_DEFAULT'));			
		$currency = new Currency(intval($id_currency));			
		$cantidad = number_format(Tools::convertPrice($params['cart']->getOrderTotal(true, 3), $currency), 2, '.', '');
		$cantidad = str_replace('.','',$cantidad);              
					
		// El número de pedido es el ID del carrito.
		$pedido = $params['cart']->id;		
		// Añadir ceros a la izquierda.
		$pedido = str_pad($pedido, 12, "0", STR_PAD_LEFT);

		$codigo = Tools::getValue('codigo', $this->codigo);									
		$moneda = Tools::getValue('moneda', $this->moneda);		
		$trans = Tools::getValue('trans', $this->trans);
		$urltienda = 'http://'.$_SERVER['HTTP_HOST'].__PS_BASE_URI__.'modules/lacaixa/validation.php';
		$clave = Tools::getValue('clave', $this->clave);								
		
		// Cálculo del SHA1		
		$mensaje = $cantidad . $pedido . $codigo . $moneda . $trans . $urltienda . $clave;
		$firma = strtoupper(sha1($mensaje));		
		
		$products = $params['cart']->getProducts();
		$productos = '';
		$id_cart = intval($params['cart']->id);
	
		foreach ($products as $product) {
			$productos .= $product['quantity'].' '.$product['name']."<br>";
		}

		$smarty->assign(array(
			'urltpv' => Tools::getValue('urltpv', $this->urltpv),
			'cantidad' => $cantidad,
			'moneda' => $moneda,
			'pedido' => $pedido,
			'codigo' => $codigo,
			'terminal' => Tools::getValue('terminal', $this->terminal),
			'trans' => $trans,
			'titular' => ($cookie->logged ? $cookie->customer_firstname.' '.$cookie->customer_lastname : false),
            'nombre' => Tools::getValue('nombre', $this->nombre),			
			'urltienda' => $urltienda,            
			'productos' => $productos,
			'UrlOk' => 'http://'.$_SERVER['HTTP_HOST'].__PS_BASE_URI__.'modules/lacaixa/back.php?id='.$id_cart,
			'UrlKO' => 'http://'.$_SERVER['HTTP_HOST'].__PS_BASE_URI__.'modules/lacaixa/back.php?id='.$id_cart,
			'firma' => $firma,						
			'this_path' => $this->_path
		));
		return $this->display(__FILE__, 'lacaixa.tpl');
    }
}
?>
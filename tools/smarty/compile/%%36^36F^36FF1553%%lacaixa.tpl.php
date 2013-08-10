<?php /* Smarty version 2.6.20, created on 2013-06-04 01:14:24
         compiled from C:%5Cxampp%5Chtdocs%5Ctienda%5Cmodules%5Clacaixa/lacaixa.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'C:\\xampp\\htdocs\\tienda\\modules\\lacaixa/lacaixa.tpl', 2, false),)), $this); ?>
<p class="payment_module">
	<a href="javascript:$('#lacaixa_form').submit();" title="<?php echo smartyTranslate(array('s' => 'Conectar con el TPV','mod' => 'lacaixa'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['module_dir']; ?>
visa.png" alt="<?php echo smartyTranslate(array('s' => 'Conectar con el TPV','mod' => 'lacaixa'), $this);?>
" />
		<?php echo smartyTranslate(array('s' => 'Pago con tarjeta (conexi&oacute;n segura con LaCaixa)','mod' => 'lacaixa'), $this);?>

	</a>
</p>

<form action="<?php echo $this->_tpl_vars['urltpv']; ?>
" method="post" id="lacaixa_form" class="hidden">	
	<input type="hidden" name="Ds_Merchant_Amount" value="<?php echo $this->_tpl_vars['cantidad']; ?>
" />
    <input type="hidden" name="Ds_Merchant_Currency" value="<?php echo $this->_tpl_vars['moneda']; ?>
" />
	<input type="hidden" name="Ds_Merchant_Order" value="<?php echo $this->_tpl_vars['pedido']; ?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantCode" value="<?php echo $this->_tpl_vars['codigo']; ?>
" />
	<input type="hidden" name="Ds_Merchant_Terminal" value="<?php echo $this->_tpl_vars['terminal']; ?>
" />
	<input type="hidden" name="Ds_Merchant_TransactionType" value="<?php echo $this->_tpl_vars['trans']; ?>
" />
	<input type="hidden" name="Ds_Merchant_Titular" value="<?php echo $this->_tpl_vars['titular']; ?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantName" value="<?php echo $this->_tpl_vars['nombre']; ?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantURL" value="<?php echo $this->_tpl_vars['urltienda']; ?>
" />
	<input type="hidden" name="Ds_Merchant_ProductDescription" value="<?php echo $this->_tpl_vars['productos']; ?>
" />
	<input type="hidden" name="Ds_Merchant_UrlOK" value="<?php echo $this->_tpl_vars['UrlOk']; ?>
" />
	<input type="hidden" name="Ds_Merchant_UrlKO" value="<?php echo $this->_tpl_vars['UrlKO']; ?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantSignature" value="<?php echo $this->_tpl_vars['firma']; ?>
" />
</form>
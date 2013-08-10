<?php /* Smarty version 2.6.20, created on 2013-06-04 01:14:24
         compiled from C:%5Cxampp%5Chtdocs%5Ctienda%5Cmodules%5Cpaypal/paypal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', 'C:\\xampp\\htdocs\\tienda\\modules\\paypal/paypal.tpl', 2, false),)), $this); ?>
<p class="payment_module">
	<a href="modules/paypal/redirect.php" title="<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypal'), $this);?>
">
		<img src="<?php echo $this->_tpl_vars['module_template_dir']; ?>
paypal.gif" alt="<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypal'), $this);?>
" />
		<?php echo smartyTranslate(array('s' => 'Pay with PayPal','mod' => 'paypal'), $this);?>

	</a>
</p>
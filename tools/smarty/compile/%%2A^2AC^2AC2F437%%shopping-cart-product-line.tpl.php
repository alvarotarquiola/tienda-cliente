<?php /* Smarty version 2.6.20, created on 2013-05-31 00:44:03
         compiled from C:%5Cxampp%5Chtdocs%5Ctienda/themes/Rojo/./shopping-cart-product-line.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/./shopping-cart-product-line.tpl', 3, false),array('modifier', 'intval', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/./shopping-cart-product-line.tpl', 25, false),array('modifier', 'count', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/./shopping-cart-product-line.tpl', 26, false),array('function', 'l', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/./shopping-cart-product-line.tpl', 12, false),array('function', 'convertPrice', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/./shopping-cart-product-line.tpl', 19, false),array('function', 'displayPrice', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/./shopping-cart-product-line.tpl', 36, false),)), $this); ?>
<tr class="<?php if (($this->_foreach['productLoop']['iteration'] == $this->_foreach['productLoop']['total'])): ?>last_item<?php elseif (($this->_foreach['productLoop']['iteration'] <= 1)): ?>first_item<?php endif; ?><?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?>alternate_item<?php endif; ?> cart_item">
	<td class="cart_product">
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><img src="<?php echo $this->_tpl_vars['link']->getImageLink($this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['id_image'],'small'); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
" width="<?php echo $this->_tpl_vars['smallSize']['width']; ?>
" height="<?php echo $this->_tpl_vars['smallSize']['height']; ?>
" /></a>
	</td>
	<td class="cart_description">
		<h5><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a></h5>
		<?php if ($this->_tpl_vars['product']['attributes']): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['link']->getProductLink($this->_tpl_vars['product']['id_product'],$this->_tpl_vars['product']['link_rewrite'],$this->_tpl_vars['product']['category']))) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['attributes'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</a><?php endif; ?>
	</td>
	<td class="cart_ref"><?php if ($this->_tpl_vars['product']['reference']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['product']['reference'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php else: ?>--<?php endif; ?></td>
	<!--<td class="cart_availability">
		<?php if ($this->_tpl_vars['product']['active'] && ( $this->_tpl_vars['product']['allow_oosp'] || ( $this->_tpl_vars['product']['quantity'] <= $this->_tpl_vars['product']['stock_quantity'] ) )): ?>
			<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/available.gif" alt="<?php echo smartyTranslate(array('s' => 'Available'), $this);?>
" width="14" height="14" />
		<?php else: ?>
			<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/unavailable.gif" alt="<?php echo smartyTranslate(array('s' => 'Out of stock'), $this);?>
" width="14" height="14" />
		<?php endif; ?>
	</td>-->
	<td class="cart_unit">
		<span class="price">
			<?php if (! $this->_tpl_vars['priceDisplay']): ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price_wt']), $this);?>
<?php else: ?><?php echo Product::convertPrice(array('price' => $this->_tpl_vars['product']['price']), $this);?>
<?php endif; ?>
		</span>
	</td>
	<td class="cart_quantity"<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?> style="text-align: center;"<?php endif; ?>>
		<?php if (isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) && $this->_tpl_vars['quantityDisplayed'] == 0): ?><?php echo $this->_tpl_vars['product']['customizationQuantityTotal']; ?>
<?php endif; ?>
		<?php if (! isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] ) || $this->_tpl_vars['quantityDisplayed'] > 0): ?>
			<a class="cart_quantity_delete" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?delete&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/delete.gif" alt="<?php echo smartyTranslate(array('s' => 'Delete'), $this);?>
" class="icon" width="11" height="13" /></a>
		<p><?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php echo count($this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]); ?>
<?php else: ?><?php echo $this->_tpl_vars['product']['cart_quantity']-$this->_tpl_vars['quantityDisplayed']; ?>
<?php endif; ?></p>
			<a class="cart_quantity_up" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_up.gif" alt="<?php echo smartyTranslate(array('s' => 'Add'), $this);?>
" width="14" height="9" /></a><br />
			<a class="cart_quantity_down" href="<?php echo $this->_tpl_vars['base_dir_ssl']; ?>
cart.php?add&amp;id_product=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;ipa=<?php echo ((is_array($_tmp=$this->_tpl_vars['product']['id_product_attribute'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&amp;op=down&amp;token=<?php echo $this->_tpl_vars['token_cart']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Subtract'), $this);?>
"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
icon/quantity_down.gif" alt="<?php echo smartyTranslate(array('s' => 'Subtract'), $this);?>
" width="14" height="9"/></a>
            <input type="text" name="" id="" value="<?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?><?php echo count($this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']]); ?>
<?php else: ?><?php echo $this->_tpl_vars['product']['cart_quantity']-$this->_tpl_vars['quantityDisplayed']; ?>
<?php endif; ?>" style="width: 40px; text-align: center;"/>
            <button type="button" name="button_add_product" id="button_add_product">Agregar</button>
		<?php endif; ?>
	</td>
	<td class="cart_total">
		<span class="price">
			<?php if ($this->_tpl_vars['quantityDisplayed'] == 0 && isset ( $this->_tpl_vars['customizedDatas'][$this->_tpl_vars['productId']][$this->_tpl_vars['productAttributeId']] )): ?>
				<?php if (! $this->_tpl_vars['priceDisplay']): ?><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']['total_customization_wt']), $this);?>
<?php else: ?><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']['total_customization']), $this);?>
<?php endif; ?>
			<?php else: ?>
				<?php if (! $this->_tpl_vars['priceDisplay']): ?><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']['total_wt']), $this);?>
<?php else: ?><?php echo Tools::displayPriceSmarty(array('price' => $this->_tpl_vars['product']['total']), $this);?>
<?php endif; ?>
			<?php endif; ?>
		</span>
	</td>
</tr>
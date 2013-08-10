<?php /* Smarty version 2.6.20, created on 2013-05-30 14:03:17
         compiled from C:%5Cxampp%5Chtdocs%5Ctienda/themes/Rojo/manufacturer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/manufacturer.tpl', 5, false),array('modifier', 'escape', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/manufacturer.tpl', 7, false),array('function', 'l', 'C:\\xampp\\htdocs\\tienda/themes/Rojo/manufacturer.tpl', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./breadcrumb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- logo -->
					<div>    
                        <?php $this->assign('url_image_manu', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['img_manu_dir'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['manufacturer']->id) : smarty_modifier_cat($_tmp, $this->_tpl_vars['manufacturer']->id)))) ? $this->_run_mod_handler('cat', true, $_tmp, '-medium.jpg') : smarty_modifier_cat($_tmp, '-medium.jpg'))); ?>
                        <?php if (file_exists ( $this->_tpl_vars['url_image_manu'] )): ?>
                    	   <img src="<?php echo $this->_tpl_vars['img_manu_dir']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']->id)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
-medium.jpg" alt="" width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" height="<?php echo $this->_tpl_vars['mediumSize']['height']; ?>
" style="float:left;margin:5px;" />
                        <?php endif; ?>
                        
						<?php echo $this->_tpl_vars['manufacturer']->description; ?>

					
					</div>
                    
                    <?php $this->assign('url_image_manu', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['img_manu_dir'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['manufacturer']->id) : smarty_modifier_cat($_tmp, $this->_tpl_vars['manufacturer']->id)))) ? $this->_run_mod_handler('cat', true, $_tmp, '-medium.jpg') : smarty_modifier_cat($_tmp, '-medium.jpg'))); ?>
    <?php if (file_exists ( $this->_tpl_vars['url_image_manu'] )): ?>
	   <img src="<?php echo $this->_tpl_vars['img_manu_dir']; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']->id)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
-medium.jpg" alt="" width="<?php echo $this->_tpl_vars['mediumSize']['width']; ?>
" height="<?php echo $this->_tpl_vars['mediumSize']['height']; ?>
" style="float:left;margin:5px;" />
    <?php endif; ?>
					
<div style="width:90%;clear:both;"></div>					
					
<h2><?php echo smartyTranslate(array('s' => 'List of products by manufacturer:'), $this);?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['manufacturer']->name)) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['products']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-sort.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./product-list.tpl", 'smarty_include_vars' => array('products' => $this->_tpl_vars['products'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['tpl_dir'])."./pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<p class="warning"><?php echo smartyTranslate(array('s' => 'No products for this manufacturer.'), $this);?>
</p>
<?php endif; ?>
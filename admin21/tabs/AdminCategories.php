<?php

/**
  * Categories class for AdminCatalog tab, AdminCategories.php
  * This file is part of a group with 2 other files : AdminCatalog.php and AdminProducts.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

class AdminCategories extends AdminTab
{
	protected $maxImageSize = 300000;

	/** @var object Category() instance for navigation*/
	private $_category;

	public function __construct()
	{
		global $cookie;
		
		$this->table = 'category';
	 	$this->className = 'Category';
	 	$this->lang = true;
	 	$this->edit = true;
	 	$this->view = true;
	 	$this->delete = true;

 		$this->fieldImageSettings = array('name' => 'image', 'dir' => 'c');

		$this->fieldsDisplay = array(
		'id_category' => array('title' => $this->l('ID'), 'align' => 'center', 'width' => 30),
		'name' => array('title' => $this->l('Name'), 'width' => 100, 'callback' => 'hideCategoryPosition'),
		'description' => array('title' => $this->l('Description'), 'width' => 560, 'maxlength' => 90, 'orderby' => false),
		'active' => array('title' => $this->l('Activo'), 'active' => 'status', 'align' => 'center', 'type' => 'bool', 'orderby' => false));
		
		$this->_category = AdminCatalog::getCurrentCategory();
        
		$this->_filter = 'AND `id_parent` = '.intval($this->_category->id);

		parent::__construct();
	}

	public function displayList($token = NULL)
	{
		global $currentIndex;
		
		/* Display list header (filtering, pagination and column names) */
		$this->displayListHeader($token);
		if (!sizeof($this->_list))
			echo '<tr><td class="center" colspan="'.(sizeof($this->fieldsDisplay) + 2).'">'.$this->l('No items found').'</td></tr>';

		/* Show the content of the table */
		$this->displayListContent($token);

		/* Close list table and submit button */
		$this->displayListFooter($token);
	}

	public function display($token = NULL)
	{
		global $currentIndex, $cookie;
        
        //$this->getCopyName();
        
        $this->getList(intval($cookie->id_lang_2), !$cookie->__get($this->table.'Orderby') ? 'name' : NULL, !$cookie->__get($this->table.'Orderway') ? 'ASC' : NULL);
		//$this->getList(intval($cookie->id_lang), !$cookie->__get($this->table.'Orderby') ? 'name' : NULL, !$cookie->__get($this->table.'Orderway') ? 'ASC' : NULL);
		//echo '<h3>'.(!$this->_listTotal ? ($this->l('There are no subcategories')) : ($this->_listTotal.' '.($this->_listTotal > 1 ? $this->l('subcategories') : $this->l('subcategory')))).' '.$this->l('in category').' "'.stripslashes(Category::hideCategoryPosition($this->_category->getName())).'"</h3>';
		echo '<a href="'.__PS_BASE_URI__.substr($_SERVER['PHP_SELF'], strlen(__PS_BASE_URI__)).'?tab=AdminCatalog&add'.$this->table.'&id_parent='.Tools::getValue('id_category').'&token='.($token!=NULL ? $token : $this->token).'"><img src="../img/admin/add.gif" border="0" /> '.$this->l('Add a new subcategory').'</a>
		<div style="margin:10px;">';
        
        $this->changeCategoryUrl($token);
        
		$this->displayList($token);
		echo '</div>';
	}

	public function postProcess($token = NULL)
	{
		global $cookie, $currentIndex;

		$this->tabAccess = Profile::getProfileAccess($cookie->profile, $this->id);

		if (Tools::isSubmit('submitAdd'.$this->table))
		{
			if ($id_category = intval(Tools::getValue('id_category')))
			{
				if (!Category::checkBeforeMove($id_category, intval(Tools::getValue('id_parent'))))
				{
					$this->_errors[] = Tools::displayError('category cannot be moved here');
					return false;
				}

				// Updating customer's group
				if ($this->tabAccess['edit'] !== '1')
					$this->_errors[] = Tools::displayError('You do not have permission to edit anything here.');
				else
				{
					$object = new $this->className($id_category);
					if (Validate::isLoadedObject($object))
						$object->updateGroup(Tools::getValue('groupBox'));
					else
						$this->_errors[] = Tools::displayError('an error occurred while updating object').' <b>'.$this->table.'</b> '.Tools::displayError('(cannot load object)');
				}
			}
		}
		/* Change object statuts (active, inactive) */
		elseif (isset($_GET['status']) AND Tools::getValue($this->identifier))
		{
			if ($this->tabAccess['edit'] === '1')
			{
				if (Validate::isLoadedObject($object = $this->loadObject()))
				{
					if ($object->toggleStatus())
						Tools::redirectAdmin($currentIndex.'&conf=5'.((($id_category = intval(Tools::getValue('id_category'))) AND Tools::getValue('id_product')) ? '&id_category='.$id_category : '').'&token='.Tools::getValue('token'));
					else
						$this->_errors[] = Tools::displayError('an error occurred while updating status');
				}
				else
					$this->_errors[] = Tools::displayError('an error occurred while updating status for object').' <b>'.$this->table.'</b> '.Tools::displayError('(cannot load object)');
			}
			else
				$this->_errors[] = Tools::displayError('You do not have permission to edit anything here.');
		}
		/* Delete object */
		elseif (isset($_GET['delete'.$this->table]))
		{
			if ($this->tabAccess['delete'] === '1')
			{
				if (Validate::isLoadedObject($object = $this->loadObject()) AND isset($this->fieldImageSettings))
				{
					// check if request at least one object with noZeroObject
					if (isset($object->noZeroObject) AND sizeof($taxes = call_user_func(array($this->className, $object->noZeroObject))) <= 1)
						$this->_errors[] = Tools::displayError('you need at least one object').' <b>'.$this->table.'</b>'.Tools::displayError(', you cannot delete all of them');
					else
					{
						$this->deleteImage($object->id);
						if ($this->deleted)
						{
							$object->deleted = 1;
							if ($object->update())
								Tools::redirectAdmin($currentIndex.'&conf=1&token='.Tools::getValue('token'));
						}
						elseif ($object->delete())
							Tools::redirectAdmin($currentIndex.'&conf=1&token='.Tools::getValue('token'));
						$this->_errors[] = Tools::displayError('an error occurred during deletion');
					}
				}
				else
					$this->_errors[] = Tools::displayError('an error occurred while deleting object').' <b>'.$this->table.'</b> '.Tools::displayError('(cannot load object)');
			}
			else
				$this->_errors[] = Tools::displayError('You do not have permission to delete here.');
		}
		parent::postProcess();
	}

	protected function postImage($id)
	{
		$ret = parent::postImage($id);
		if (($id_category = intval(Tools::getValue('id_category'))) AND isset($_FILES) AND sizeof($_FILES) AND file_exists(_PS_CAT_IMG_DIR_.$id_category.'.jpg'))
		{
			$imagesTypes = ImageType::getImagesTypes('categories');
			foreach ($imagesTypes AS $k => $imageType)
				imageResize(_PS_CAT_IMG_DIR_.$id_category.'.jpg', _PS_CAT_IMG_DIR_.$id_category.'-'.stripslashes($imageType['name']).'.jpg', intval($imageType['width']), intval($imageType['height']));
		}
		return $ret;
	}

	public function displayForm($token=NULL)
	{
		global $currentIndex, $cookie;
		parent::displayForm();

		$obj = $this->loadObject(true);
		$active = $this->getFieldValue($obj, 'active');
		$customer_groups = $obj->getGroups();
        
        echo '
            <script type="text/javascript">
                jQuery(function(){
                    $(".validate_number").keypress(function(evento){
                        var keyPressed = (evento.which) ? evento.which : event.keyCode
                        return !(keyPressed > 31 && (keyPressed < 48 || keyPressed > 57));
                    });
                    
                    /*$(".copy_name_2").blur(function(){
                        var ele = $(this);
                        var id = ele.attr("id")
                        var name_2 = $("#"+id).val();
                        var aux_name_2 = id;
                        var id_lang = aux_name_2.substr(5)
                        var name_array = name_2.split(".");
                        if(name_array.length > 1)
                        {   
                            var aux_name2 = name_array[1];
                            var new_name = aux_name2.substr(1);
                        }else{
                            var aux_name2 = name_array[0];
                            var new_name = aux_name2;
                        } 
                        $("#name_2_"+id_lang).val(new_name);
                    });*/
                    
                    $(".copy_name_2").blur(function(){
                        var ele = $(this);
                        var name = ele.attr("value");
                        var url_amigable = str2url(ele.attr("value").replace(/^[0-9]+\./, ""), "UTF-8")
                        console.log(url_amigable);
                        $(".link_rewrite_translatable .lang_not_write_url").each(function(index) {
                            var ele2 = $(this);
                            var aux_url = ele2.attr("value");
                            if(aux_url == ""){
                                ele2.attr("value",url_amigable);   
                            }
                    	});
                        
                        $(".names_translatable .copy_name_2").each(function(index) {
                            var ele3 = $(this);
                            var aux_name = ele3.attr("value"); 
                            if(aux_name == ""){
                                ele3.attr("value",name);    
                            }
                    	});
                    });
                });
            </script>
        ';
        
        if(isset($_GET["id_category"])){
            $id_category = intval(Tools::getValue('id_category'));
        }elseif(isset($_GET["id_parent"])){
            $id_category = intval(Tools::getValue('id_parent'));
        }
        
        //$id_category = intval(Tools::getValue('id_parent'));
		if (!$id_category)
    			$id_category = 1;
  		$catalog_tabs = array('category', 'product');
  		// Cleaning links
  		$catBarIndex = $currentIndex;
  		foreach ($catalog_tabs AS $tab)
 			if (Tools::getValue($tab.'Orderby') && Tools::getValue($tab.'Orderway')) 
                $catBarIndex = preg_replace('/&'.$tab.'Orderby=([a-z _]*)&'.$tab.'Orderway=([a-z]*)/i', '', $currentIndex);
    		
  		echo '<div class="cat_bar"><span style="color: #3C8534;">'.$this->l('Current category').' :</span>&nbsp;&nbsp;&nbsp;'.getPath($catBarIndex, $id_category).'</div>';
  				echo '<h2>'.$this->l('Edit Categories').'</h2>';
		echo '
		<form action="'.$currentIndex.'&submitAdd'.$this->table.'=1&token='.($token!=NULL ? $token : $this->token).'" method="post" enctype="multipart/form-data">
		'.($obj->id ? '<input type="hidden" name="id_'.$this->table.'" value="'.$obj->id.'" />' : '').'
			<fieldset class="width2" style="width:520px;">
				<label>'.$this->l('Name:').' </label>
				<div class="margin-form translatable names_translatable">';
		foreach ($this->_languages as $language)
			echo '
					<div class="lang_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $this->_defaultFormLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" style="width: 260px" class="copy_name_2" name="name_'.$language['id_lang'].'" id="name_'.$language['id_lang'].'" value="'.htmlentities($this->getFieldValue($obj, 'name', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8').'" '.((!$obj->id) ? ' onkeyup="copy2friendlyURL();"' : '').' /><sup> *</sup>
						<span class="hint" name="help_box">'.$this->l('Invalid characters:').' <>;=#{}<span class="hint-pointer">&nbsp;</span></span>
					</div>';
		echo '	<p class="clear"></p>
				</div>
				<!--<label>'.$this->l('Displayed:').' </label>
				<div class="margin-form">
					<input type="radio" name="active" id="active_on" value="1" '.($active ? 'checked="checked" ' : '').'/>
					<label class="t" for="active_on"><img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="active" id="active_off" value="0" '.(!$active ? 'checked="checked" ' : '').'/>
					<label class="t" for="active_off"><img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
				</div>-->
                <div style="overflow: hidden; padding: 0px 0px 1em;">
                    <label>'.$this->l('Displayed:').' </label>
    				<div class="margin-form" style="float: left; padding: 0 0 0 10px;">
    					<input type="radio" name="active" id="active_on" value="1" '.($active ? 'checked="checked" ' : '').'/>
    					<label class="t" for="active_on"><img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
    					<input type="radio" name="active" id="active_off" value="0" '.(!$active ? 'checked="checked" ' : '').'/>
    					<label class="t" for="active_off"><img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
    				</div>
                    <label style="text-align: left; margin: 0 0 0 40px; width: 60px;">'.$this->l('Order:').' </label>
                    <div class="margin-form" style="padding: 0px; float: left;">
                        <input type="text" style="width: 80px" class="validate_number" name="position_category" id="position_category" value="'.htmlentities($this->getFieldValue($obj, 'position_category'), ENT_COMPAT, 'UTF-8').'" onkeyup="copyNewNameLang();"/>
                    </div>    
                </div>
				<label>'.$this->l('Parent category:').' </label>
				<div class="margin-form">
					<select name="id_parent">';
		//$categories = Category::getCategories(intval($cookie->id_lang), false);
        $categories = Category::getCategories(intval($cookie->id_lang_2), false);
		Category::recurseCategory($categories, $categories[0][1], 1, $this->getFieldValue($obj, 'id_parent'));
		echo '
					</select>';
		echo'	</div>
				<label>'.$this->l('Description:').' </label>
				<div class="margin-form translatable">';
		foreach ($this->_languages as $language)
			echo '
					<div class="lang_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $this->_defaultFormLanguage ? 'block' : 'none').'; float: left;">
						<!--<textarea name="description_'.$language['id_lang'].'" rows="5" cols="40">'.htmlentities($this->getFieldValue($obj, 'description', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8').'</textarea>-->
                        <textarea name="description_'.$language['id_lang'].'" rows="5" cols="40">'.(($obj->id != "") ?  htmlentities($this->getFieldValue($obj, 'description', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8') : 'Description' ).'</textarea>
					</div>';
		echo '	<p class="clear"></p>
				</div>
				<label>'.$this->l('Image:').' </label>
				<div class="margin-form">';
		echo 		$this->displayImage($obj->id, _PS_IMG_DIR_.'c/'.$obj->id.'.jpg', 350, NULL, Tools::getAdminToken('AdminCatalog'.intval(Tab::getIdFromClassName('AdminCatalog')).intval($cookie->id_employee)));
		echo '	<br /><input type="file" name="image" />
					<p>'.$this->l('Upload category logo from your computer').'</p>
				</div>
				<!-- <div class="clear"><br /></div>	
				<label>'.$this->l('Meta title:').' </label>
				<div class="margin-form translatable">';
		foreach ($this->_languages as $language)
			echo '
					<div class="lang_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $this->_defaultFormLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" name="meta_title_'.$language['id_lang'].'" id="meta_title_'.$language['id_lang'].'" value="'.htmlentities($this->getFieldValue($obj, 'meta_title', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8').'" />
						<span class="hint" name="help_box">'.$this->l('Forbidden characters:').' <>;=#{}<span class="hint-pointer">&nbsp;</span></span>
					</div>';
		echo '	<p class="clear"></p>
				</div>
				<label>'.$this->l('Meta description:').' </label>
				<div class="margin-form translatable">';
		foreach ($this->_languages as $language)
			echo '<div class="lang_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $this->_defaultFormLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" name="meta_description_'.$language['id_lang'].'" id="meta_description_'.$language['id_lang'].'" value="'.htmlentities($this->getFieldValue($obj, 'meta_description', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8').'" />
						<span class="hint" name="help_box">'.$this->l('Forbidden characters:').' <>;=#{}<span class="hint-pointer">&nbsp;</span></span>
				</div>';
		echo '	<p class="clear"></p>
				</div>
				<label>'.$this->l('Meta keywords:').' </label>
				<div class="margin-form translatable">';
		foreach ($this->_languages as $language)
			echo '
					<div class="lang_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $this->_defaultFormLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" name="meta_keywords_'.$language['id_lang'].'" id="meta_keywords_'.$language['id_lang'].'" value="'.htmlentities($this->getFieldValue($obj, 'meta_keywords', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8').'" />
						<span class="hint" name="help_box">'.$this->l('Forbidden characters:').' <>;=#{}<span class="hint-pointer">&nbsp;</span></span>
					</div>';
		echo '	<p class="clear"></p>
				</div>-->
				<label>'.$this->l('Friendly URL:').' </label>
				<div class="margin-form translatable link_rewrite_translatable">';
		foreach ($this->_languages as $language)
			echo '<div class="lang_'.$language['id_lang'].'" style="display: '.($language['id_lang'] == $this->_defaultFormLanguage ? 'block' : 'none').'; float: left;">
						<input type="text" class="'.($language['id_lang'] == $this->_defaultFormLanguage ? 'lang_write_url' : 'lang_not_write_url').'" name="link_rewrite_'.$language['id_lang'].'" id="link_rewrite_'.$language['id_lang'].'" value="'.htmlentities($this->getFieldValue($obj, 'link_rewrite', intval($language['id_lang'])), ENT_COMPAT, 'UTF-8').'" onkeyup="this.value = str2url(this.value);" /><sup> *</sup>
                        
						<span class="hint" name="help_box">'.$this->l('Only letters and the minus (-) character are allowed').'<span class="hint-pointer">&nbsp;</span></span>
                        
					</div>';
        //echo '            <p>'.$this->l("Automatic optimization for search").'</p>';
		echo '	<p class="clear"></p>
				</div>
                <p style="margin: -10px 0 15px 77px; padding: 0; width: 300px;">'.$this->l('Automatic optimization for search').'</p>
                <!--
				<label>'.$this->l('Groups access:').' </label>
				<div class="margin-form">';
					$groups = Group::getGroups(intval($cookie->id_lang));
					if (sizeof($groups))
					{
						echo '
					<table cellspacing="0" cellpadding="0" class="table" style="width: 28em;">
						<tr>
							<th><input type="checkbox" name="checkme" class="noborder" onclick="checkDelBoxes(this.form, \'groupBox[]\', this.checked)"'.(!isset($obj->id) ? 'checked="checked" ' : '').' /></th>
							<th>'.$this->l('ID').'</th>
							<th>'.$this->l('Group name').'</th>
						</tr>';
						$irow = 0;
						foreach ($groups as $group)
							echo '
							<tr class="'.($irow++ % 2 ? 'alt_row' : '').'">
								<td><input type="checkbox" name="groupBox[]" class="groupBox" id="groupBox_'.$group['id_group'].'" value="'.$group['id_group'].'" '.((in_array($group['id_group'], $customer_groups) OR (!isset($obj->id))) ? 'checked="checked" ' : '').'/></td>
								<td>'.$group['id_group'].'</td>
								<td><label for="groupBox_'.$group['id_group'].'" class="t">'.$group['name'].'</label></td>
							</tr>';
						echo '
					</table>
					<p style="padding:0px; margin:10px 0px 10px 0px;">'.$this->l('Mark all groups you want to give access to this category').'</p>
					';
					} else
						echo '<p>'.$this->l('No group created').'</p>';
				echo '
				</div>-->
				<div class="margin-form">
					<!--<input type="submit" value="'.$this->l('Save and back to parent category').'" name="submitAdd'.$this->table.'AndBackToParent" class="button" />-->
					&nbsp;<input type="submit" class="button action_submit_form " name="submitAdd'.$this->table.'" value="'.$this->l('Save').'"/>
				</div>
				<div class="small"><sup>*</sup> '.$this->l('Required field').'</div>
                <div class="small" style="margin: 5px 0 0 10px;">'.$this->l('When creating a new Category, you must click "Save", to be edited for other languages.').'</div>
			</fieldset>
		</form>
		<p class="clear"></p>';
	}
    
    public function changeCategoryUrl($token)
    {
        global $currentIndex, $cookie;
        
        $baseurl = __PS_BASE_URI__.substr($_SERVER['PHP_SELF'], strlen(__PS_BASE_URI__));
        
        echo '
        
            <script type="text/javascript">
                jQuery(function(){
                    jQuery("#id_category_default").change(function(){
                        var ele = jQuery(this);
                        var baseurl = \''.$baseurl.'\';
                        var token = \''.$token.'\';
                        var redirigir = baseurl+"?tab=AdminCatalog&id_category="+ele.val()+"&viewcategory&token="+token;
                        window.location = redirigir;
                    });
                });
            </script>
        
        ';
        
        echo '
            <div>
                <label style="float: none;">'.$this->l("Parent category:").'</label>
                <select id="id_category_default" name="id_category_default" onchange="redirectCategoryUrl(this.value, '.$token.', '.$baseurl.');">';
                    $categories = Category::getCategories(intval($cookie->id_lang_2), false);
                    Category::recurseCategory($categories, $categories[0][1], 1, ($this->getFieldValue($obj, 'id_category_default') ? $this->getFieldValue($obj, 'id_category_default') : Tools::getValue('id_category', 1)));
		echo '</select></div>';
    }
}

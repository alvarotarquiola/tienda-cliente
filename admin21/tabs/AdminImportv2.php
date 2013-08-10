<?php
//header('Content-Type: text/html; charset=iso-8859-1');
/**
  * Image resize tab for admin panel, AdminImageResize.php
  * @category admin
  *
  * @author PrestaShop <support@prestashop.com>
  * @copyright PrestaShop
  * @license http://www.opensource.org/licenses/osl-3.0.php Open-source licence 3.0
  * @version 1.3
  *
  */
//error_reporting(E_ALL);
include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

//include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/reader.php');
//include_once(PS_ADMIN_DIR.'/tabs/AdminImportv2/funciones.php');

class AdminImportv2 extends AdminTab
{
	private $start_time = 0;
	private $max_execution_time = 7200;

	//$this->table = 'image_type';

	public function display()
    {
        global $currentIndex, $cookie;
        
        set_time_limit(600);
        
		//echo ini_get('display_errors');
		require(PS_ADMIN_DIR.'/tabs/AdminImportv2/funciones.php');
        
        $token = Tools::getAdminToken("AdminImportv2".intval(Tab::getIdFromClassName('AdminImportv2')).intval($cookie->id_employee));
        
        $link = new Link();
        $language = Language::getLanguage($cookie->id_lang);
        $url = $link->getLanguageLinkAdmin($language['id_lang'], $language['name'])."&adminlang=1";
        
        
        if(Tools::getValue('import') == 'stock'){
            
            echo '
                <h2 class="box_title_import">'.$this->l('Importacion de stock').'</h2>
        		<fieldset><legend><img src="../img/admin/import.gif" />'.$this->l('Subir').'</legend>
                    <form action="'.$currentIndex.'&submitImportExcel=1&token='.$token.'" method="post" enctype="multipart/form-data">
        				<label class="clear">'.$this->l('Seleccione un archivo').' </label>
        				<div class="margin-form">
        					<input name="file" type="file" />
                            &nbsp;<input type="submit" name="submitFileUpload" value="'.$this->l('Subir').'" class="button" />
                            <input type="hidden" name="type_import" value="stock"/>
        				</div>
        			</form>
        		</fieldset>';
        }
        elseif(isset($_GET["check"]) && $_GET["check"] != ""){
            
            echo '<div class="import_excel">
    		  <h2 class="box_title_import">'.$this->l('Check fields excel').'</h2>
            </div>';
            
            $this->formCheckExcel("category");
            
            $this->formCheckExcel("manufacturer");
            
            $this->formCheckExcel("product");   
                      
        }elseif(isset($_GET["submitCheckExcel"]) && $_GET["submitCheckExcel"] == 1){
            $nameSubmit = $_POST["type"];
            $dirfile = $this->uploadFileExcel();
            
            echo '<div class="import_excel">
    		  <h2 class="box_title_import">'.$this->l('Check fields excel').'</h2>
            </div>';
            
            if($nameSubmit == "category"){
                $datas = $this->checkExcelCategory($dirfile);

                if($datas["message"] != "" && $datas["message"] == "error"){
                    echo '
                        <div class="alert error">
                            <h3 class="black_normal">'.$this->l("Error in column").' <span>'.$datas["column"].'</span> '.$this->l("please check.").'</h3>
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }elseif($datas["message"] != "" && $datas["message"] == "success"){
                    echo '
                        <div class="message_result">
                            <img src="../img/admin/ok.gif" alt="">'.$this->l("The fields were tested successfully.").'
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }elseif($datas["message"] != "" && $datas["message"] == "error_column"){
                    echo '
                        <div class="alert error">
                            <h3 class="black_normal">'.$this->l("Error in column").' <span>'.$datas["column"].'</span> '.$this->l("check if it is written correctly").'.</h3>
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }
                
                
            }
            if($nameSubmit == "product"){
                $datas = $this->checkExcelProduct($dirfile);
                if($datas["message"] != "" && $datas["message"] == "error"){
                    echo '
                        <div class="alert error">
                            <h3 class="black_normal">'.$this->l("Error in column").' <span>'.$datas["column"].'</span> '.$this->l("please check.").'</h3>
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }elseif($datas["message"] != "" && $datas["message"] == "success"){
                    echo '
                        <div class="message_result">
                            <img src="../img/admin/ok.gif" alt="">'.$this->l("The fields were tested successfully.").'
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }elseif($datas["message"] != "" && $datas["message"] == "error_column"){
                    echo '
                        <div class="alert error">
                            <h3 class="black_normal">'.$this->l("Error in column").' <span>'.$datas["column"].'</span> '.$this->l("check if it is written correctly").'.</h3>
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }
            }
            if($nameSubmit == "manufacturer"){
                $datas = $this->checkExcelManufacturer($dirfile);
                if($datas["message"] != "" && $datas["message"] == "error"){
                    echo '
                        <div class="alert error">
                            <h3 class="black_normal">'.$this->l("Error in column").' <span>'.$datas["column"].'</span> '.$this->l("please check.").'</h3>
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }elseif($datas["message"] != "" && $datas["message"] == "success"){
                    echo '
                        <div class="message_result">
                            <img src="../img/admin/ok.gif" alt="">'.$this->l("The fields were tested successfully.").'
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }elseif($datas["message"] != "" && $datas["message"] == "error_column"){
                    echo '
                        <div class="alert error">
                            <h3 class="black_normal">'.$this->l("Error in column").' <span>'.$datas["column"].'</span> '.$this->l("check if it is written correctly").'.</h3>
                        </div>
                        <div style="padding: 10px 0;">
                            <a href="'.$currentIndex.'&token='.$token.'&check=fields"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a>
                        </div>
                    ';
                }
            }            
        }elseif(isset($_GET["submitImportExcel"]) && $_GET["submitImportExcel"] == 1){
            $post = $_POST;
            $dirfile = $this->uploadFileExcel();
            $name_post = $_POST['type_import'];
            $array_excel = $this->orderExcelArray($dirfile);
            
            $array_excel[1];
            
            
            $this->getLog($array_excel[1]);
            $this->getLog($dirfile);
            
            
        }else{
            echo '<div class="import_excel">
    		  <h2 class="box_title_import">'.$this->l('Imports').'</h2>
            </div>';
            funcArchivosShowCargaExcel("Categorias", 1);
    		
    		funcArchivosShowCargaExcel("Fabricantes", 2);
            
            funcArchivosShowCargaExcel("Productos", 3);
            
            //funcArchivosShowCargaExcel("ActualizarProductos", 4);
    		
    		funcArchivosShowCargaExcel("Accesorios", 4);
    			
    			/*echo '<div class="import_excel">
    					<div class="box_link_ia">
    					<a href="searchcron.php?full=1&token='.substr(_COOKIE_KEY_, 34, 8).'" class="bold">'.$this->l('Update search index').'</a>
    					</div>
    			</div>';*/    
        }
	}
	
	public function postProcess()
	{
		global $currentIndex, $cookie;
        
        if(isset($_POST["submitCheckcategory"]) == 1)
        {
            echo "welcome.";
        }
        
        
	}

	public function displayForm($isMainTab = true)
	{
		global $currentIndex, $cookie;
		parent::displayForm();
		
	}
    
    public function changeLangForm()
    {
        $id_lang = $_POST["id_lang"];
        $lang = Language::getLanguage($id_lang);
        
        print_r($lang);
    }
    
    /**
     * 
     * 
    */
    
    public function formCheckExcel($type)
    {
        global $currentIndex, $cookie;
        
        $token = Tools::getAdminToken("AdminImportv2".intval(Tab::getIdFromClassName('AdminImportv2')).intval($cookie->id_employee));
        
        if($type == "category")
            $datas = array(1, "Check excel Categories");
        elseif($type == "manufacturer")
            $datas = array(2, "Check excel Manufacturers");
        elseif($type == "product")
            $datas = array(3, "Check excel Products");
            
        echo "
            <div style='margin: 0 0 20px 0;' class='form_comprobar_excel'>
                <h2 style='color:#000000;'><span class='sp_import_form'>".$datas[0].". </span>".$this->l($datas[1])."</h2>
                <form action='".$currentIndex."&submitCheckExcel=1&token=".$token."' method='post' enctype='multipart/form-data'>
                    <label class='lb_import_form'>".$this->l('File:')."</label> <input type='file' name='file'>
                    <input type='hidden' name='".$type."' id='".$type."' value='".$type."'/>
                    <input type='hidden' name='type' value='".$type."'/>
                    <input type='submit' name='check_".$type."' value='".$this->l('Send')."'>
                </form>
            </div>
        ";
    }
    
    public function orderExcelArray($file)
    {
        require(PS_ADMIN_DIR.'/tabs/AdminImportv2/reader.php');
        
		$excel = ExcelaArray($file);
		$colExcel = $excel[1];
		$cuenta = 0;
        
		foreach($colExcel as $colE){
    		if($colE != "Control"){
    			$aux_colE = base64_encode($colE);
    			$nuevascols[$aux_colE]=$colE;			
    			$cuenta++;
    		}
		}
        
        for($linea=2;$linea<=sizeof($excel);$linea++){
			for($columna=1;$columna<=sizeof($excel[$linea]);$columna++){
				$ordenado[$linea][$nuevascols[base64_encode($excel[1][$columna])]] = $excel[$linea][$columna];
			}
		}
        
        return array($nuevascols, $ordenado);
    }
    
    public function checkExcelCategory($file)
    {
        $ordenado_array = $this->orderExcelArray($file);
        //$array_columns = $this->removeColumnsProduct($ordenado_array[0]);
        $valid_array = Product::validColumnsProduct($ordenado_array[0], "category");
        
        if($valid_array["valid"] == true)
        {
            $res = Category::checkExcelCategory($ordenado_array[1]);
            return $res;
        }else{
            return $valid_array;
        }
        
    }
    
    public function removeColumnsProduct($datas)
    {
        $array_columns = array();
        
        foreach($datas as $value)
        {
            $aux_datas = explode("-", $value);
            
            if(is_numeric($aux_datas[1]))
            {
                //no hace nada
            }else{
                $array_columns[] = $value;
            }
        }
        return $array_columns;
    }
    
    public function checkExcelProduct($file)
    {   
        $ordenado_array = $this->orderExcelArray($file);
        $array_columns = $this->removeColumnsProduct($ordenado_array[0]);
        $valid_array = Product::validColumnsProduct($array_columns, "product");

        if($valid_array["valid"] == true)
        {
            $res = Product::checkExcelProduct($ordenado_array[1]);
            return $res;
        }else{
            return $valid_array;
        }
    }
    
    public function checkExcelManufacturer($file)
    {
        $ordenado_array = $this->orderExcelArray($file);
        $valid_array = Product::validColumnsProduct($ordenado_array[0], "manufacturer");
        
        if($valid_array["valid"] == true)
        {
            $res = Manufacturer::checkExcelManufacturer($ordenado_array[1]);
            return $res;
        }else{
            return $valid_array;
        }
    }
    
    public function uploadFileExcel()
    {
        $dirdes = PS_ADMIN_DIR.'/tabs/tmp/';
    	$file = $_FILES["file"];
        
        $ext = strtolower(end(explode('.', $file["name"])));
        $name = substr(sha1(microtime()),0,15);
        $filename = $name.".".$ext;
        
    	$nuevoNombre = $dirdes.$filename;
        
    	if(is_file($nuevoNombre)){
    		if(chmod($nuevoNombre,0777)){
    			unlink($nuevoNombre);
    		}else{
    			echo "<br> No se pudieron cambiar los permisos";
    		}
    	}
    
    	if (move_uploaded_file($file['tmp_name'], $nuevoNombre)) {
        	
    		if(chmod($nuevoNombre,0777)){
    			//echo "<br> No se pudieron cambiar los permisos";
			}else{
				echo "<br> No se pudieron cambiar los permisos";
			}
    	} else {
        	print "<br>Possible file upload attack!  Here's some debugging info:<br>\n";
    	}
    	
    	$codifi = file_get_contents($nuevoNombre);
    	
    	file_put_contents($nuevoNombre,$codifi); 

		if(chmod($nuevoNombre,0777)){
			//echo "<br> No se pudieron cambiar los permisos";
		}else{
            echo "<br> No se pudieron cambiar los permisos";
		}
        
    	return $nuevoNombre;
    }

}

?>

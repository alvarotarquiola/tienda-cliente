<?php 

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');
include_once(PS_ADMIN_DIR.'/../classes/ImageAttachments.php');

class adminExportDatas extends AdminTab{
    
    public $tablas = array();
    //var $titleName = array();
    
    function __construct()
    {
        //$this->tablas = array_flip(array($this->l('Categories'), $this->l('Manufacturers'), $this->l('Products'), $this->l('accesory')));
        //$this->$titleName = array_flip(array($this->l('Categories'), $this->l('Manufacturers'), $this->l('Products'), $this->l('accesory')));
        //$this->$titleName = array($this->l('Categories'), $this->l('Manufacturers'), $this->l('Products'), $this->l('accesory'));
        
        parent::__construct();
    }
    
    public function postProcess($token = null)
    {
        global $currentIndex, $cookie;
        $titleName = array($this->l('Export to excel Categories'), $this->l('Export Manufacturers to excel'), $this->l('Export Products to excel'), $this->l('Export Accessories to excel'));
        
        if(isset($_GET['type']) && $_GET['type'] == "categories"){
            
            $this->exportCategories();
        }
        
        if(isset($_GET['type']) && $_GET['type'] == "manufacturers"){
            
            $this->exportManufacturers();
        }
        
        if(isset($_GET['type']) && $_GET['type'] == "products"){
            
            $this->exportProducts($products);
        }
        
        if(isset($_GET['type']) && $_GET['type'] == "accessories"){
        
            $this->exportAccessories();
        }
        if(isset($_GET['type']) && $_GET['type'] == "customers"){
            
            $this->exportCustomers();
        }
        
        if(isset($_GET['type']) && $_GET['type'] == "order_category"){
            
            $this->exportCategoryOrder($_GET['type_order']);
        }
        
        if(isset($_GET['type']) && $_GET['type'] == "order_product"){
            
            $this->exportProductOrder();
        }
        
    }
    
    public function display()
	{
        global $currentIndex, $cookie;
        $token = $_GET["token"];
        
        $titleName = array($this->l('Export Categories to excel'), $this->l('Export Manufacturers to excel'), $this->l('Export Products to excel'), $this->l('Export Accessories to excel'), $this->l('Export Customers to excel'));
        $types = array('categories', 'manufacturers', 'products', 'accessories', 'customers');
        
        $types2 = array('order_category', 'order_category', 'order_category');
        
        $this->createFolders();
        
        echo '
            <div class="box_content_export">
 
                <!--<div class="import_excel">
                    <h2 class="box_title_import">'.$this->l('Exportaciones').'</h2>
                </div>-->
        
                <div class="box_export">
                    <h2>'.$this->l('Exportaciones').'</h2>
                    <ul class="list_export">';
                        $i = 0;
                        foreach($titleName as $name):
                            echo '<li class="list_fila"><div class="name_export pos-tag-left">'.$name.'</div><div class="box_btn_export pos-tag-left"><a href="'.$currentIndex.'&token='.$token.'&type='.$types[$i].'">'.$this->l('Export file').'</a></div></li>';
                            $i++;
                        endforeach;
            echo '  </ul>
                </div>';
        
        echo '
            <div class="box_export" style="border-left:none;padding-left:0;padding-right:0;">
                <div style="padding:5px 10px 20px 10px">
                    <ul class="list_export" style="width: 445px;">';
                        $j = 1;
                        foreach($types2 as $name):
                            echo '<li class="list_fila">
                                    <div class="name_export pos-tag-left" style="width: 280px;">'.$this->l('Export').' '.$j.' - '.$this->l("Categories to order").'</div>
                                    <div class="box_btn_export pos-tag-left">
                                        <a href="'.$currentIndex.'&token='.$token.'&type='.$name.'&type_order='.$j.'">'.$this->l('Export file').'</a>
                                    </div>
                                </li>';
                            $j++;
                        endforeach;
            echo '  </ul></div>
            
                <div style="border-top: 1px solid #DFD5C3;padding:23px 10px 23px 10px;">
                    <ul class="list_export" style="width: 445px;">
                        <li class="list_fila">
                            <div class="name_export pos-tag-left" style="width: 280px;">'.$this->l("Export Product to order").'</div>
                            <div class="box_btn_export pos-tag-left">
                                <a href="'.$currentIndex.'&token='.$token.'&type=order_product">'.$this->l('Export file').'</a>
                            </div>
                        </li>';
        echo '      </ul>
                </div>
            </div>';    
        
        echo '
            </div>
        ';
		
	}
    
    private function exportCategories()
    {
        global $currentIndex;
        require(PS_ADMIN_DIR.'/class.excel.writer.php');
        $dir = PS_ADMIN_DIR."/export/category";
        $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 8);
        $namefile = "export_category_".$nameRamdon.".xls";
        $file = $dir."/".$namefile;
        
        $categorias = ExportReports::getCategories();
        
        /*
        echo "<pre>";
        print_r($categorias);
        echo "</pre>";
        exit();*/
        
        error_reporting(0);
    	
    	$xls = new ExcelWriter();
    	
    	$xls_int = array('type'=>'int');
    	$xls_date = array('type'=>'date');
	    
        //$myArr = array("1-Cat-lang-1","1-Cat-lang-2","1-Cat-lang-3","1-Cat-lang-4", "1-Cat-lang-5","2-Cat-lang-1", "2-Cat-lang-2", "2-Cat-lang-3", "2-Cat-lang-4", "2-Cat-lang-5","3-Cat-lang-1", "3-Cat-lang-2", "3-Cat-lang-3", "3-Cat-lang-4", "3-Cat-lang-5", "Cat-decription-lang-1","Cat-decription-lang-2","Cat-decription-lang-3","Cat-decription-lang-4","Cat-decription-lang-5", "Cat-active");
        $myArr = array("Cat-Ref","1-Cat-order","1-Cat-lang-1","1-Cat-lang-2","1-Cat-lang-3","1-Cat-lang-4", "1-Cat-lang-5","2-Cat-order","2-Cat-lang-1", "2-Cat-lang-2", "2-Cat-lang-3", "2-Cat-lang-4", "2-Cat-lang-5", "3-Cat-order","3-Cat-lang-1", "3-Cat-lang-2", "3-Cat-lang-3", "3-Cat-lang-4", "3-Cat-lang-5", "Cat-decription-lang-1","Cat-decription-lang-2","Cat-decription-lang-3","Cat-decription-lang-4","Cat-decription-lang-5", "Cat-active");
        
    	$xls->OpenRow();
    	foreach($myArr as $cod=>$val)
        {
            if($val == "Cat-Ref"){
               $xls->NewCell($val,false,array('width'=>'80','center','align'=>'center','bold'=>true));
            }elseif($val == "1-Cat-order" || $val == "2-Cat-order" || $val == "3-Cat-order"){
               $xls->NewCell($val,false,array('width'=>'90','center','align'=>'center','bold'=>true));
            }elseif($val == "1-Cat-lang-1" || $val == "1-Cat-lang-2" || $val == "1-Cat-lang-3" || $val == "1-Cat-lang-4" || $val == "1-Cat-lang-5"){
               $xls->NewCell($val,false,array('width'=>'150','center','align'=>'center','bold'=>true));
            }elseif($val == "2-Cat-lang-1" || $val == "2-Cat-lang-2" || $val == "2-Cat-lang-3" || $val == "2-Cat-lang-4" || $val == "2-Cat-lang-5"){
               $xls->NewCell($val,false,array('width'=>'150','center','align'=>'center','bold'=>true));
            }elseif($val == "3-Cat-lang-1" || $val == "3-Cat-lang-2" || $val == "3-Cat-lang-3" || $val == "3-Cat-lang-4" || $val == "3-Cat-lang-5"){
               $xls->NewCell($val,false,array('width'=>'150','center','align'=>'center','bold'=>true));
            }elseif($val == "Cat-decription-lang-1" || $val == "Cat-decription-lang-2" || $val == "Cat-decription-lang-3" || $val == "Cat-decription-lang-4" || $val == "Cat-decription-lang-5"){
               $xls->NewCell($val,false,array('width'=>'300','center','align'=>'center','bold'=>true));
            }elseif($val == "Cat-active"){
               $xls->NewCell($val,false,array('width'=>'80','center','align'=>'center','bold'=>true));
            }
            //$xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
    	}	
    	$xls->CloseRow();
        
        foreach($categorias as $categoria):
            $xls->OpenRow();
            foreach($categoria as $cat):
                $xls->NewCell($cat, false);
            endforeach;
            $xls->CloseRow();
        endforeach;
    	
    	$xls->archivo($file);//El fichero .CSV ha sido exportado correctamente 
        
        echo '<div class="message_result"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The excel file has been successfully exported').'<br/><a href="export/category/'.$namefile.'">'.$this->l('Download file').' '.$namefile.'</a></div>';
    }
    
    private function exportManufacturers()
    {
        global $currentIndex;
        require(PS_ADMIN_DIR.'/class.excel.writer.php');
        $dir = PS_ADMIN_DIR."/export/manufacturer";
        $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 8);
        $namefile = "export_manufacturer_".$nameRamdon.".xls";
        $file = $dir."/".$namefile;
        
        $manufacturers = ExportReports::getManufacturers();

        error_reporting(0);
        
        $xls = new ExcelWriter();
    	
    	$xls_int = array('type'=>'int');
    	$xls_date = array('type'=>'date');
	    
        $myArr = array("Manufacture","Manufacture-description-small-lang-1","Manufacture-description-small-lang-2","Manufacture-description-small-lang-3", "Manufacture-description-small-lang-4", "Manufacture-description-small-lang-5", "Manufacture-description-lang-1", "Manufacture-description-lang-2", "Manufacture-description-lang-3", "Manufacture-description-lang-4", "Manufacture-description-lang-5");
        
    	$xls->OpenRow();
    	foreach($myArr as $cod=>$val)	$xls->NewCell($val,false,array('width'=>'250','center','align'=>'center','bold'=>true));
    	$xls->CloseRow();
       
        foreach($manufacturers as $manufacturer):
            $xls->OpenRow();
            foreach($manufacturer as $manu):
                $xls->NewCell($manu, false);
            endforeach;
            $xls->CloseRow();
        endforeach;
    	
    	$xls->archivo($file);//El fichero .CSV ha sido exportado correctamente 
        
        echo '<div class="message_result"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The excel file has been successfully exported').'<br/><a href="export/manufacturer/'.$namefile.'">"'.$this->l('Download file').' '.$namefile.'"</a></div>';
    }
    
    private function exportProducts()
    {
        global $currentIndex;
        require(PS_ADMIN_DIR.'/class.excel.writer.php');
        $dir = PS_ADMIN_DIR."/export/product";
        $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 8);
        $namefile = "export_product_".$nameRamdon.".xls";
        $file = $dir."/".$namefile;
        
        $products = ExportReports::getProducts();

        error_reporting(0);
        
        $xls = new ExcelWriter();
    	
    	$xls_int = array('type'=>'int');
    	$xls_date = array('type'=>'date');
	    
        $myArr = array("Order","Name-lang-1","Name-lang-2","Name-lang-3","Name-lang-4","Name-lang-5","1-Cat","2-Cat","3-Cat","Ref","Active","Price-without-TAX","TAX","Description-small-lang-1","Description-small-lang-2","Description-small-lang-3","Description-small-lang-4","Description-small-lang-5","Description-lang-1","Description-lang-2","Description-lang-3","Description-lang-4","Description-lang-5","Supplier","Ref-supplier","Manufecture","Weight","Ecotax","Sale","Sale-amount","Sale-%","Sale-from","Sale-up","Stock","Text-available-lang-1","Text-available-lang-2", "Text-available-lang-3","Text-available-lang-4","Text-available-lang-5","Text-off-stock-lang-1","Text-off-stock-lang-2","Text-off-stock-lang-3","Text-off-stock-lang-4","Text-off-stock-lang-5");
        
    	$xls->OpenRow();
    	foreach($myArr as $cod=>$val)
        {
            if($val == "Order" || $val == "Active" || $val == "Weight" || $val == "Ecotax" || $val == "Sale" || $val == "Sale-%" || $val == "Stock"){
               $xls->NewCell($val,false,array('width'=>'80','center','align'=>'center','bold'=>true));
            }elseif($val == "Name-lang-1" || $val == "Name-lang-2" || $val == "Name-lang-3" || $val == "Name-lang-4" || $val == "Name-lang-5"){
               $xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
            }elseif($val == "1-Cat" || $val == "2-Cat" || $val == "3-Cat"){
               $xls->NewCell($val,false,array('width'=>'150','center','align'=>'center','bold'=>true));
            }elseif($val == "Ref"){
               $xls->NewCell($val,false,array('width'=>'150','center','align'=>'center','bold'=>true));
            }elseif($val == "Price-without-TAX"){
               $xls->NewCell($val,false,array('width'=>'150','center','align'=>'center','bold'=>true));
            }elseif($val == "TAX"){
               $xls->NewCell($val,false,array('width'=>'100','center','align'=>'center','bold'=>true));
            }elseif($val == "Description-small-lang-1" || $val == "Description-small-lang-2" || $val == "Description-small-lang-3" || $val == "Description-small-lang-4" || $val == "Description-small-lang-5"){
               $xls->NewCell($val,false,array('width'=>'250','center','align'=>'center','bold'=>true));
            }elseif($val == "Description-lang-1" || $val == "Description-lang-2" || $val == "Description-lang-3" || $val == "Description-lang-4" || $val == "Description-lang-5"){
               $xls->NewCell($val,false,array('width'=>'350','center','align'=>'center','bold'=>true));
            }elseif($val == "Supplier"){
               $xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
            }elseif($val == "Ref-supplier"){
               $xls->NewCell($val,false,array('width'=>'120','center','align'=>'center','bold'=>true));
            }elseif($val == "Manufecture"){
               $xls->NewCell($val,false,array('width'=>'150','center','align'=>'center','bold'=>true));
            }elseif($val == "Sale-amount" || $val == "Sale-from" || $val == "Sale-up"){
               $xls->NewCell($val,false,array('width'=>'100','center','align'=>'center','bold'=>true));
            }elseif($val == "Text-available-lang-1" || $val == "Text-available-lang-2" || $val == "Text-available-lang-3" || $val == "Text-available-lang-4" || $val == "Text-available-lang-5"){
               $xls->NewCell($val,false,array('width'=>'300','center','align'=>'center','bold'=>true));
            }elseif($val == "Text-off-stock-lang-1" || $val == "Text-off-stock-lang-2" || $val == "Text-off-stock-lang-3" || $val == "Text-off-stock-lang-4" || $val == "Text-off-stock-lang-5"){
               $xls->NewCell($val,false,array('width'=>'300','center','align'=>'center','bold'=>true));
            }
            //$xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
        }	
    	$xls->CloseRow();
       
        foreach($products as $product):
            $xls->OpenRow();
            foreach($product as $prod):
                $xls->NewCell($prod, false);
            endforeach;
            $xls->CloseRow();
        endforeach;
    	
    	$xls->archivo($file);//El fichero .CSV ha sido exportado correctamente 
        
        echo '<div class="message_result"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The excel file has been successfully exported').'<br/><a href="export/product/'.$namefile.'">"'.$this->l('Download file').' '.$namefile.'"</a></div>';
        
    }
    
    private function exportAccessories()
    {
        global $currentIndex;
        require(PS_ADMIN_DIR.'/class.excel.writer.php');
        $dir = PS_ADMIN_DIR."/export/accessory";
        
        $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 8);
        $namefile = "export_accessory_".$nameRamdon.".xls";
        $file = $dir."/".$namefile;
        
        $accessories = ExportReports::getAccesories();

        error_reporting(0);
        
        $xls = new ExcelWriter();
    	
    	$xls_int = array('type'=>'int');
    	$xls_date = array('type'=>'date');
	    
        $myArr = array("Name","Ref","Accesories");
        
    	$xls->OpenRow();
    	foreach($myArr as $cod=>$val)	$xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
    	$xls->CloseRow();
       
        foreach($accessories as $accessory):
            $xls->OpenRow();
            foreach($accessory as $acce):
                $xls->NewCell($acce, false);
            endforeach;
            $xls->CloseRow();
        endforeach;
    	
    	$xls->archivo($file);//El fichero .CSV ha sido exportado correctamente. 
        
        echo '<div class="message_result"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The excel file has been successfully exported').'<br/><a href="export/accessory/'.$namefile.'">'.$this->l('Download file').' '.$namefile.'</a></div>';
    }
    
    private function exportCustomers()
    {
        global $currentIndex;
        require(PS_ADMIN_DIR.'/class.excel.writer.php');
        $dir = PS_ADMIN_DIR."/export/customer";
        
        $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 8);
        $namefile = "export_customer_".$nameRamdon.".xls";
        $file = $dir."/".$namefile;
        
        $customers = ExportReports::getCustomers();

        error_reporting(0);
        
        $xls = new ExcelWriter();
    	
    	$xls_int = array('type'=>'int');
    	$xls_date = array('type'=>'date');
        
        $myArr = array($this->l('Alias'),$this->l('Company'),$this->l('Name'),$this->l('Surnames'),$this->l('Address'),$this->l('Address-2'),$this->l('Postcode'),$this->l('City'),$this->l('Country'),$this->l('Phone'),$this->l('Mobile'),$this->l('Email'),$this->l('Tax-ID-number'),$this->l('State'),$this->l('Others'));
        
    	$xls->OpenRow();
    	foreach($myArr as $cod=>$val):
        	$xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
        endforeach;
    	$xls->CloseRow();
       
        foreach($customers as $customer):
            $xls->OpenRow();
            foreach($customer as $cus):
                $xls->NewCell($cus, false);
            endforeach;
            $xls->CloseRow();
        endforeach;
    	
    	$xls->archivo($file);//El fichero .CSV ha sido exportado correctamente. 
        
        echo '<div class="message_result"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The excel file has been successfully exported').'<br/><a href="export/customer/'.$namefile.'">'.$this->l('Download file').' '.$namefile.'</a></div>';
    }
    
    public function createFolders()
    {
        $dir = PS_ADMIN_DIR."/export";
        
        if(!file_exists($dir."/category"))
            mkdir($dir."/category", 0777);
        chmod($dir."/category", 0777);
        
        if(!file_exists($dir."/manufacturer"))
            mkdir($dir."/manufacturer", 0777);
        chmod($dir."/manufacturer", 0777);
        
        if(!file_exists($dir."/product"))
            mkdir($dir."/product", 0777);
        chmod($dir."/product", 0777);
        
        if(!file_exists($dir."/accessory"))
            mkdir($dir."/accessory", 0777);
        chmod($dir."/accessory", 0777);
        
        if(!file_exists($dir."/customer"))
            mkdir($dir."/customer", 0777);
        chmod($dir."/customer", 0777);
    }
    
    public function utf8_encode_array (&$array, $key) {
        if(is_array($array)) {
          array_walk ($array, 'utf8_encode_array');
        } else {
          $array = utf8_encode($array);
        }
    }
    
    public function exportCategoryOrder($type)
    {
        global $currentIndex;
        require(PS_ADMIN_DIR.'/class.excel.writer.php');
        $dir = PS_ADMIN_DIR."/export/category";
        $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 8);
        $namefile = "order_category_".$nameRamdon.".xls";
        $file = $dir."/".$namefile;
        
        $categorias = Category::getLanguageCategories($type);
        $array_vacio = array();
        
        if($type == 1){
            $myArr = array("Cat-Ref","1-Cat-order","1-Cat-lang-1","1-Cat-lang-2","1-Cat-lang-3","1-Cat-lang-4", "1-Cat-lang-5");
            $array_vacio = array("", "", "", "", "", "", "");   
        }elseif($type == 2){
            $myArr = array("Cat-Ref","1-Cat-order","1-Cat-lang-1","1-Cat-lang-2","1-Cat-lang-3","1-Cat-lang-4", "1-Cat-lang-5","2-Cat-order","2-Cat-lang-1", "2-Cat-lang-2", "2-Cat-lang-3", "2-Cat-lang-4", "2-Cat-lang-5");
            $array_vacio = array("", "", "", "", "", "", "", "", "", "", "", "", "");
        }elseif($type == 3){
            $myArr = array("Cat-Ref","1-Cat-order","1-Cat-lang-1","1-Cat-lang-2","1-Cat-lang-3","1-Cat-lang-4", "1-Cat-lang-5","2-Cat-order","2-Cat-lang-1", "2-Cat-lang-2", "2-Cat-lang-3", "2-Cat-lang-4", "2-Cat-lang-5", "3-Cat-order","3-Cat-lang-1", "3-Cat-lang-2", "3-Cat-lang-3", "3-Cat-lang-4", "3-Cat-lang-5");
            $array_vacio = array("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
        }
        
        error_reporting(0);
    	
    	$xls = new ExcelWriter();
    	
    	$xls_int = array('type'=>'int');
    	$xls_date = array('type'=>'date');
        
    	$xls->OpenRow();
    	foreach($myArr as $cod=>$val){
    	   if($val == "Cat-Ref"){
    	       $xls->NewCell($val,false,array('width'=>'80','center','align'=>'center','bold'=>true));
    	   }elseif($val == "1-Cat-order" || $val == "2-Cat-order" || $val == "3-Cat-order"){
    	       $xls->NewCell($val,false,array('width'=>'90','center','align'=>'center','bold'=>true));
    	   }elseif($val == "1-Cat-lang-1" || $val == "1-Cat-lang-2" || $val == "1-Cat-lang-3" || $val == "1-Cat-lang-4" || $val == "1-Cat-lang-5"){
    	       $xls->NewCell($val,false,array('width'=>'120','center','align'=>'center','bold'=>true));
    	   }elseif($val == "2-Cat-lang-1" || $val == "2-Cat-lang-2" || $val == "2-Cat-lang-3" || $val == "2-Cat-lang-4" || $val == "2-Cat-lang-5"){
    	       $xls->NewCell($val,false,array('width'=>'120','center','align'=>'center','bold'=>true));
    	   }elseif($val == "3-Cat-lang-1" || $val == "3-Cat-lang-2" || $val == "3-Cat-lang-3" || $val == "3-Cat-lang-4" || $val == "3-Cat-lang-5"){
    	       $xls->NewCell($val,false,array('width'=>'120','center','align'=>'center','bold'=>true));
    	   }
    	   //$xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true)); 
    	}	  
    	$xls->CloseRow();
        
        /*echo "<pre>";
        print_r($categorias);
        echo "</pre>";*/
        $i = 0;
        foreach($categorias as $categoria):
            
            $aux_cate = $categorias[$i][2];
            $aux_cate2 = $categorias[$i+1][2];

            $xls->OpenRow();
            foreach($categoria as $cat):
                $xls->NewCell($cat, false);
            endforeach;
            $xls->CloseRow();
            
            if($type != 1)
            {
                if($aux_cate != $aux_cate2)
                {
                    $xls->OpenRow();
                    foreach($array_vacio as $vacio):
                        $xls->NewCell($vacio, false);
                    endforeach;
                    $xls->CloseRow();     
                }
            }
            /*foreach($categoria as $cat):
                $xls->NewCell($cat, false);
            endforeach;
            $xls->CloseRow();*/
            $i++;
        endforeach;
    	
    	$xls->archivo($file);//El fichero .CSV ha sido exportado correctamente 
        
        echo '<div class="message_result"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The excel file has been successfully exported').'<br/><a href="export/category/'.$namefile.'">'.$this->l('Download file').' '.$namefile.'</a></div>';
    }
    
    public function exportProductOrder()
    {
        global $currentIndex;
        require(PS_ADMIN_DIR.'/class.excel.writer.php');
        $dir = PS_ADMIN_DIR."/export/product";
        $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 8);
        $namefile = "order_product_".$nameRamdon.".xls";
        $file = $dir."/".$namefile;
        
        $products = Product::getLanguageProducts();

        error_reporting(0);
        
        $xls = new ExcelWriter();
    	
    	$xls_int = array('type'=>'int');
    	$xls_date = array('type'=>'date');
	    
        $myArr = array("Order","Name-lang-1","Name-lang-2","Name-lang-3","Name-lang-4","Name-lang-5","1-Cat","2-Cat","3-Cat","Ref");
        $array_vacio = array("", "", "", "", "", "", "", "", "", "");
        
        /*echo "<pre>";
        print_r($products);
        echo "</pre>";
        exit();*/
        
    	$xls->OpenRow();
    	foreach($myArr as $cod=>$val)
        {	
            //$xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
            if($val == "Order"){
    	       $xls->NewCell($val,false,array('width'=>'70','center','align'=>'center','bold'=>true));
            }elseif($val == "Name-lang-1" || $val == "Name-lang-2" || $val == "Name-lang-3" || $val == "Name-lang-4" || $val == "Name-lang-5"){
                $xls->NewCell($val,false,array('width'=>'200','center','align'=>'center','bold'=>true));
            }elseif($val == "1-Cat" || $val == "2-Cat" || $val == "3-Cat"){
                $xls->NewCell($val,false,array('width'=>'120','center','align'=>'center','bold'=>true));
            }elseif($val == "Ref"){
                $xls->NewCell($val,false,array('width'=>'100','center','align'=>'center','bold'=>true));
            }
        }
    	$xls->CloseRow();
        
        $i = 0;
        foreach($products as $product):
            $aux_prod = $products[$i][6];
            $aux_prod2 = $products[$i+1][6];
            
            $xls->OpenRow();
            foreach($product as $prod):
                $xls->NewCell($prod, false);
            endforeach;
            $xls->CloseRow();
            
            if($aux_prod != $aux_prod2)
            {
                $xls->OpenRow();
                foreach($array_vacio as $vacio):
                    $xls->NewCell($vacio, false);
                endforeach;
                $xls->CloseRow();    
            }
            $i++;
        endforeach;
    	
    	$xls->archivo($file);//El fichero .CSV ha sido exportado correctamente 
        
        echo '<div class="message_result"><img alt="" src="../img/admin/ok.gif"/>'.$this->l('The excel file has been successfully exported').'<br/><a href="export/product/'.$namefile.'">"'.$this->l('Download file').' '.$namefile.'"</a></div>';
        
    }
    
    public function getLog($datas)
    {
        echo "<pre>";
        print_r($datas);
        echo "</pre>";
    }
    
}

?>
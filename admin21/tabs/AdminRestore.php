<?php

include_once(PS_ADMIN_DIR.'/../classes/AdminTab.php');

class AdminRestore extends AdminTab
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function display($token = null)
    {
        global $currentIndex, $cookie;
        
        $enable_shop = Configuration::get("PS_BACKUP_RESTORE");
        $enable_shop_2 = Configuration::get("PS_SHOP_ENABLE");
        
        if(isset($_GET['upload']) && $_GET['upload'] == "sql"){
            
            if($enable_shop == 1){
                $this->uploadFile();
            }elseif($enable_shop == 0 && $enable_shop_2 == 0){
                $this->uploadFile();
            }else{
                echo '
                    <div class="alert error">
                        <h3 class="black_normal">'.$this->l("To Backup and Restore. Your Shop must be disabled").'</h3>
                    </div>';
                    echo '<br /><br /><br /><a href="'.$currentIndex.'&token='.$this->token.'"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a><br />';  
            }
        }else{
            $this->formUpload();
        }
    }
    
    public function formUpload() 
    {
        global $currentIndex, $cookie;
        //<form action='".$currentIndex."'&token="'.Tools::getValue('token')."' method='post' enctype='multipart/form-data' name='restore' id='restore'>
        $token = Tools::getValue('token');
        
        echo '
        
            <script type="text/javascript">
                jQuery(function(){
                    jQuery("#form_file_restore").submit(function(){
                        
                        var tag_file = jQuery("#file").val();
                        if(tag_file != ""){
                            return true;
                        }else{
                            alert("Debe Seleccionar un archivo.");
                            return false;
                        }
                    });
                });
            </script>
        ';
        
        echo "
            <div class='form_shop'>
                <form id='form_file_restore' action='".$currentIndex."&token=".Tools::getValue('token')."&upload=sql' method='post' enctype='multipart/form-data' name='restore' id='restore'>
                    <label>".$this->l('File :')."</label>
                    <div class='fila'>
                        <input type='file' name='file' id='file' />
                        <input type='submit' name='send' id='send_restore' class='action_submit_form' value='".$this->l('Send')."'/>
                    </div>
                </form>
            </div>
        ";
    }
    
    
    
    public function uploadFile()
    {
        global $currentIndex;
        
        $files = $_FILES["file"];
        $dirRestore = PS_ADMIN_DIR . '/restore/';
        
        $tamano = $files['size'];
        $tipo = $files['type'];
        $file = $files['name'];
        $ext = explode(".", $files['name']);
        $nameRandon = substr(md5(uniqid(rand())),0,10);
        $filename = $nameRandon.".".$ext[1].".".$ext[2];
        $filename2 = $nameRandon.".".$ext[1];
        
        if($tipo == "application/x-gzip" || $tipo == "application/gzip" || $tipo == "application/octet-stream"){
            
            move_uploaded_file($files["tmp_name"], $dirRestore.$filename);
            
            $origen = $dirRestore.$filename;
            $destino = $dirRestore.$filename2;
            
            $this->desComprimir($origen, $destino);
            
            sleep(3);
            
            $this->restoreDatabase($destino);
              
        }else{
            echo '
                <div class="alert error">
                    <h3 class="black_normal">'.$this->l("Select the correct file.").'</h3>
                </div>';
            echo '<br /><br /><br /><a href="'.$currentIndex.'&token='.$this->token.'"><img src="../img/admin/arrow2.gif" /> '.$this->l('Go back').'</a><br />';

        }
    }
    
    public function desComprimir($origen, $destino)
    {
        $string = implode("", gzfile($origen));
        $fp = fopen($destino, "w");
        fwrite($fp, $string, strlen($string));
        fclose($fp);
    }
    
    public function restoreDatabase($filename)
    {
        //require(PS_ADMIN_DIR.'/backup_restore.class.php');
        require(PS_ADMIN_DIR.'/../classes/backup_restore.class.php');
        
        $database = _DB_NAME_;
        $user = _DB_USER_;
        $pass = _DB_PASSWD_;
        $server = _DB_SERVER_;
        
        $newRestore = new backup_restore($server, $database, $user, $pass, '*', $filename);
        $message = $newRestore->restore();
        
        echo '
            <div class="message_result">
                <img src="../img/admin/ok.gif" alt="">'.$this->l($message).'
            </div>
        ';
    }
    
    public function displayForm($isMainTab = true)
	{
		global $currentIndex, $cookie;
		parent::displayForm();
	}
    
    
}
?>
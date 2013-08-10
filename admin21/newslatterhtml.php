<?php

/**
 * @author Alex Aguilar
 * @copyright 2013
 */
 
define('PS_ADMIN_DIR', getcwd());
include(PS_ADMIN_DIR.'/../config/config.inc.php');
/* Getting cookie or logout */
require_once(dirname(__FILE__).'/init.php');


if(isset($_POST['add_products_references']) && $_POST['add_products_references'] == 1)
{   
    $reference = $_POST['name_reference'];
    $id_lang = $_POST['id_lang'];
    $on_sale_lang = $_POST['on_sale_lang'];
    $price_lowered_lang = $_POST['price_lowered_lang'];
    $available_lang = $_POST['available_lang'];
    $out_of_lang = $_POST['out_of_lang'];
    $add_to_cart_lang = $_POST['add_to_cart_lang'];
    $view_lang = $_POST['view_lang'];
    
    $id_eso = Language::getIsoById($cookie->id_lang);
    $dir_img_default = _PS_BASE_URL_._PS_IMG_.'p/'.$id_eso.'-default-home.jpg';
    $dir_aux = _PS_BASE_URL_._PS_IMG_.'p/';
    $dir_aux2 = _PS_PROD_IMG_DIR_;
    $dir_image_delete = _PS_BASE_URL_._PS_IMG_."delete.gif";
    $static_token = '893a6383e7fb7b57a8fc75e2250f76fa';
    $base_dir = _PS_BASE_URL_.__PS_BASE_URI__.'cart.php?';

    if($reference != "")
    {        
        $Product = Product::getProductReference($reference, $id_lang);

        if($Product['id_product'] != "" || $Product['id_product'] != null)
        {
            $message = 'success';
            $imagen = Product::getImagePruduct($Product["id_product"]);
            $aux_dir_image = $dir_aux2.$Product["id_product"].'-'.$imagen["id_image"].'-home.jpg';
            $dirimage = $dir_aux.$Product["id_product"].'-'.$imagen["id_image"].'-large.jpg';
            $dirimage2 = (file_exists($aux_dir_image)) ? $dirimage : $dir_img_default;
        
            $link = new Link();
    		$row['category'] = Category::getLinkRewrite($Product['id_category_default'], intval($id_lang));
    		$link_product = $link->getProductLink($Product['id_product'], $Product['link_rewrite'], $row['category'], $Product['ean13']);
            $coverPrice = Product::convertPrice($Product['price']);
            $link_cart = $base_dir.'add&id_product='.$Product['id_product'].'&token='.$static_token;
                   
            if($Product['on_sale'] == 1){
                $span_sale = '<span class="on_sale">'.$on_sale_lang.'</span>';
                //echo "entras ".$span_sale;
            }elseif(($Product['reduction_price'] != 0 || $Product['reduction_percent'] != 0)  && ($Product['reduction_from'] == $Product['reduction_to'] || (date('%Y-%m-%d %H:%M:%S') <= $Product['reduction_to'] && date('%Y-%m-%d %H:%M:%S') >= $Product['reduction_from']))){
                $span_sale = '<span class="discount">'.$price_lowered_lang.'</span>';
            }
            
            $allow_oosp = Product::isAvailableWhenOutOfStock($Product['out_of_stock']);
            
            if($allow_oosp || $Product['quantity'] > 0){
                $text_dis = $available_lang;
            }else{
                $text_dis = $out_of_lang;    
            }
            
            /*echo "<pre>";
            print_r($Product);
            echo "</pre>";*/
    
            $li ='
                <li class="clearfix">
                <a class="delete_product_newslatter" href="#"><img src="'.$dir_image_delete.'"/><a/>
                <div class="center_block">
                <a class="product_img_link">
                <img src="'.$dirimage2.'"/>
                </a>
                <h3>'.$Product['name'].'</h3> 
                <p class="product_desc">'.$Product['description_short'].'</p>                         
                </div>
                <div class="right_block">
                '.$span_sale.'
                <span class="price" style="display: inline;">'.$coverPrice.'</span>
                <br>
                <span class="availability">'.$text_dis.'</span>
                <br>
                <a class="exclusive" title="'.$add_to_cart_lang.'" href="'.$link_cart.'" target="_blank">
                '.$add_to_cart_lang.'
                </a>
                <a class="ver" title="'.$view_lang.'" href="'.$link_product.'" target="_blank">
                '.$view_lang.'
                </a>
                </div>
                </li>        
            ';
            $datas["add_li"] = $li;
            $datas["message"] = "success";
            $json = json_encode($datas);
            echo $json;    
        }else{
            $datas["message"] = "error";
            $json = json_encode($datas);
            echo $json;    
        }
        
    }
}

if(isset($_POST['newnewslatter']) && $_POST['newnewslatter'] == 1)
{
    $textHTML = $_POST['texthtml'];
    $nameRamdon = substr(sha1(uniqid(rand(), true)), 0, 5);
    $name_file = 'newsletter_'.$nameRamdon.'.html';
    
    /*$control = fopen($name_file,"w+");
    if($control == false)
    {
        die("No se ha podido crear el archivo.");
    }*/
    
    $styles = Category::getStylesNewslatter();
    
    $text = $styles.$textHTML;
    
    $fichero = _PS_FILES_DIR_.'newslatter/'.$name_file;
    
    if($textHTML != '')
    {
        $texto = $_POST["texto"];
		
		if($fp = fopen($fichero,"w+")){ 
			fwrite($fp,stripslashes($text));  
		} 
        fclose($fp);      
    }
 
}


?>
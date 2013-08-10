<?php

            if($ordenado[$linea]["Control_Categoria"]!="" ){
				echo "<br> if -- ";
				$cates["categoria_es"]=$ordenado[$linea]["Nombre_1_Categoria_es"];
                $cates["categoria_fr"]=$ordenado[$linea]["Nombre_1_Categoria_fr"];
                $cates["categoria_de"]=$ordenado[$linea]["Nombre_1_Categoria_de"];
                $cates["categoria_en"]=$ordenado[$linea]["Nombre_1_Categoria_en"];
				/*$cates["desc_categoria"]=$ordenado[$linea]["Descripcion_1_Categoria"];
				$cates["activo_categoria"]=$ordenado[$linea]["Activo_1_Categoria"];
				$cates["meta_title_categoria"] = $ordenado[$linea]["meta_title_1_Categoria"]; 
				$cates["meta_keywords_categoria"] = $ordenado[$linea]["meta_keywords_1_Categoria"];
				$cates["meta_description_categoria"] = $ordenado[$linea]["meta_description_1_Categoria"];
				$cates["link_rewrite_categoria"] = $ordenado[$linea]["link_rewrite_1_Categoria"];
				$cates["URL_imagen_categoria"] = $ordenado[$linea]["URL_imagen_1_Categoria"];*/
				
				//$cates["subcategoria"]=$ordenado[$linea]["Nombre_2_Subcategoria"];
                $cates["subcategoria_es"]=$ordenado[$linea]["Nombre_2_Categoria_es"];
                $cates["subcategoria_fr"]=$ordenado[$linea]["Nombre_2_Categoria_fr"];
                $cates["subcategoria_de"]=$ordenado[$linea]["Nombre_2_Categoria_de"];
                $cates["subcategoria_en"]=$ordenado[$linea]["Nombre_2_Categoria_en"];
				/*$cates["desc_subcategoria"]=$ordenado[$linea]["Descripcion_2_Subcategoria"];
				$cates["activo_subcategoria"]=$ordenado[$linea]["Activo_2_Subcategoria"];
				$cates["meta_title_subcategoria"] = $ordenado[$linea]["meta_title_2_Subcategoria"]; 
				$cates["meta_keywords_subcategoria"] = $ordenado[$linea]["meta_keywords_2_Subcategoria"];
				$cates["meta_description_subcategoria"] = $ordenado[$linea]["meta_description_2_Subcategoria"];
				$cates["link_rewrite_subcategoria"] = $ordenado[$linea]["link_rewrite_2_Subcategoria"];
				$cates["URL_imagen_subcategoria"] = $ordenado[$linea]["URL_imagen_2_Subcategoria"];*/
				
				//$cates["familia"]=$ordenado[$linea]["Nombre_3_Subcategoria"];
                $cates["familia_es"]=$ordenado[$linea]["Nombre_3_Categoria_es"];
                $cates["familia_fr"]=$ordenado[$linea]["Nombre_3_Categoria_fr"];
                $cates["familia_de"]=$ordenado[$linea]["Nombre_3_Categoria_de"];
                $cates["familia_en"]=$ordenado[$linea]["Nombre_3_Categoria_en"];
				/*$cates["desc_familia"]=$ordenado[$linea]["Descripcion_3_Subcategoria"];
				$cates["activo_familia"]=$ordenado[$linea]["Activo_3_Subcategoria"];
				$cates["meta_title_familia"] = $ordenado[$linea]["meta_title_3_Subcategoria"]; 
				$cates["meta_keywords_familia"] = $ordenado[$linea]["meta_keywords_3_Subcategoria"];
				$cates["meta_description_familia"] = $ordenado[$linea]["meta_description_3_Subcategoria"];
				$cates["link_rewrite_familia"] = $ordenado[$linea]["link_rewrite_3_Subcategoria"];
				$cates["URL_imagen_familia"] = $ordenado[$linea]["URL_imagen_3_Subcategoria"];*/
				
				
				if($ordenado[$linea]["Descripcion_Categoria_Unica"]!=""){
					/*$cates["desc_categoria"] = $ordenado[$linea]["Descripcion_Categoria_Unica"];
					$cates["desc_subcategoria"] = $ordenado[$linea]["Descripcion_Categoria_Unica"];
					$cates["desc_familia"] = $ordenado[$linea]["Descripcion_Categoria_Unica"];*/
                    $cates["desc_categoria_es"] = $ordenado[$linea]["Descripcion_Categoria_es"];
				    $cates["desc_categoria_fr"] = $ordenado[$linea]["Descripcion_Categoria_fr"];
                    $cates["desc_categoria_de"] = $ordenado[$linea]["Descripcion_Categoria_de"];
                    $cates["desc_categoria_en"] = $ordenado[$linea]["Descripcion_Categoria_en"];
				}
				
				if($ordenado[$linea]["Activo_Categoria_Unica"]!=""){
					$cates["activo_categoria"]=$ordenado[$linea]["Activo_Categoria_Unica"];
					$cates["activo_subcategoria"]=$ordenado[$linea]["Activo_Categoria_Unica"];
					$cates["activo_familia"]=$ordenado[$linea]["Activo_Categoria_Unica"];
				}
				
				if($ordenado[$linea]["meta_title_Categoria_Unica"]!=""){
					$cates["meta_title_categoria"]=$ordenado[$linea]["meta_title_Categoria_Unica"];
					$cates["meta_title_subcategoria"]=$ordenado[$linea]["meta_title_Categoria_Unica"];
					$cates["meta_title_familia"]=$ordenado[$linea]["meta_title_Categoria_Unica"];

				}
				
				if($ordenado[$linea]["meta_keywords_Categoria_Unica"]!=""){
					$cates["meta_keywords_categoria"]=$ordenado[$linea]["meta_keywords_Categoria_Unica"];
					$cates["meta_keywords_subcategoria"]=$ordenado[$linea]["meta_keywords_Categoria_Unica"];
					$cates["meta_keywords_familia"]=$ordenado[$linea]["meta_keywords_Categoria_Unica"];


				}
				
				if($ordenado[$linea]["meta_description_Categoria_Unica"]!=""){
					$cates["meta_description_categoria"]=$ordenado[$linea]["meta_description_Categoria_Unica"];
					$cates["meta_description_subcategoria"]=$ordenado[$linea]["meta_description_Categoria_Unica"];
					$cates["meta_description_familia"]=$ordenado[$linea]["meta_description_Categoria_Unica"];


				}
				
				if($ordenado[$linea]["link_rewrite_Categoria_Unica"]!=""){
					$cates["link_rewrite_categoria"]=$ordenado[$linea]["link_rewrite_Categoria_Unica"];
					$cates["link_rewrite_subcategoria"]=$ordenado[$linea]["link_rewrite_Categoria_Unica"];
					$cates["link_rewrite_familia"]=$ordenado[$linea]["link_rewrite_Categoria_Unica"];


				}
				
				if($ordenado[$linea]["URL_imagen_Categoria_Unica"]!=""){
					$cates["URL_imagen_categoria"]=$ordenado[$linea]["URL_imagen_Categoria_Unica"];
					$cates["URL_imagen_subcategoria"]=$ordenado[$linea]["URL_imagen_Categoria_Unica"];
					$cates["URL_imagen_familia"]=$ordenado[$linea]["URL_imagen_Categoria_Unica"];


				}
				
				
				//$idutlimacat = revisaas400($cates);
        
				
				//$ordenado[$linea]["Categoria"]=$idultimacat;
			}



?>
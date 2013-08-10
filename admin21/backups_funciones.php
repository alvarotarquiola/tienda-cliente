<?php

            if($ordenado[$linea]["Nombre_1_Categoria"]!="" || $ordenado[$linea]["Nombre_2_Subcategoria"]!="" || $ordenado[$linea]["Nombre_3_Subcategoria"]!=""){
				echo "<br> if -- ";
				$cates["categoria"]=$ordenado[$linea]["Nombre_1_Categoria"];
				$cates["desc_categoria"]=$ordenado[$linea]["Descripcion_1_Categoria"];
				$cates["activo_categoria"]=$ordenado[$linea]["Activo_1_Categoria"];
				$cates["meta_title_categoria"] = $ordenado[$linea]["meta_title_1_Categoria"]; 
				$cates["meta_keywords_categoria"] = $ordenado[$linea]["meta_keywords_1_Categoria"];
				$cates["meta_description_categoria"] = $ordenado[$linea]["meta_description_1_Categoria"];
				$cates["link_rewrite_categoria"] = $ordenado[$linea]["link_rewrite_1_Categoria"];
				$cates["URL_imagen_categoria"] = $ordenado[$linea]["URL_imagen_1_Categoria"];
				
				$cates["subcategoria"]=$ordenado[$linea]["Nombre_2_Subcategoria"];
				$cates["desc_subcategoria"]=$ordenado[$linea]["Descripcion_2_Subcategoria"];
				$cates["activo_subcategoria"]=$ordenado[$linea]["Activo_2_Subcategoria"];
				$cates["meta_title_subcategoria"] = $ordenado[$linea]["meta_title_2_Subcategoria"]; 
				$cates["meta_keywords_subcategoria"] = $ordenado[$linea]["meta_keywords_2_Subcategoria"];
				$cates["meta_description_subcategoria"] = $ordenado[$linea]["meta_description_2_Subcategoria"];
				$cates["link_rewrite_subcategoria"] = $ordenado[$linea]["link_rewrite_2_Subcategoria"];
				$cates["URL_imagen_subcategoria"] = $ordenado[$linea]["URL_imagen_2_Subcategoria"];
				
				$cates["familia"]=$ordenado[$linea]["Nombre_3_Subcategoria"];
				$cates["desc_familia"]=$ordenado[$linea]["Descripcion_3_Subcategoria"];
				$cates["activo_familia"]=$ordenado[$linea]["Activo_3_Subcategoria"];
				$cates["meta_title_familia"] = $ordenado[$linea]["meta_title_3_Subcategoria"]; 
				$cates["meta_keywords_familia"] = $ordenado[$linea]["meta_keywords_3_Subcategoria"];
				$cates["meta_description_familia"] = $ordenado[$linea]["meta_description_3_Subcategoria"];
				$cates["link_rewrite_familia"] = $ordenado[$linea]["link_rewrite_3_Subcategoria"];
				$cates["URL_imagen_familia"] = $ordenado[$linea]["URL_imagen_3_Subcategoria"];
				
				
				if($ordenado[$linea]["Descripcion_Categoria_Unica"]!=""){
					$cates["desc_categoria"] = $ordenado[$linea]["Descripcion_Categoria_Unica"];
					$cates["desc_subcategoria"] = $ordenado[$linea]["Descripcion_Categoria_Unica"];
					$cates["desc_familia"] = $ordenado[$linea]["Descripcion_Categoria_Unica"];	
				
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
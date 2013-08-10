<?php

function conexion(){
	//include("config.php");
	
	
	
	
	global $pnconfig;
	
$pnconfig['dbhost']=_DB_SERVER_;
$pnconfig['dbuname']=_DB_USER_;
$pnconfig['dbpass']=_DB_PASSWD_;
$pnconfig['dbname']=_DB_NAME_;
	
	$conexion=mysql_connect($pnconfig['dbhost'], $pnconfig['dbuname'], $pnconfig['dbpass']) or print mysql_error();
	$dbn = $pnconfig['dbname'];
	$seleccion=mysql_query("use $dbn", $conexion) or print mysql_error();
	return $conexion;
}

function sacandosql($query){
	$x = conexion();
    //$query = sprintf("SELECT MAX(%s) AS next_id FROM %s",$clave,$tabla);
	//echo $query;
    $result = mysql_query($query, $x) or print mysql_error();
    
    //print_r($result);
    if(is_resource($result)){
    
		if(mysql_num_rows($result) > 0){
		while($row = mysql_fetch_array($result)){
			$rows[] = $row;
			}
		}	
	}else{
		$rows = false;
	}
	
	return $rows;
}

function drop_tables($prefix = ""){
	global $pnconfig;
	$x = conexion();
	
	$array = array();
	$sql = "SELECT table_name
	FROM information_schema.TABLES
	WHERE TABLE_SCHEMA = '".$pnconfig['dbname']."' ";
	if(empty($prefix)){
		$sql .= "AND TABLE_NAME LIKE '%%'";
	}else{
		$sql .= "AND TABLE_NAME LIKE '".$prefix."%'";
	}
	$result = mysql_query($sql,$x) or die( mysql_error());
	
	if (mysql_num_rows($result) > 0) {
		while($row = mysql_fetch_assoc($result)){
			$array[] = $row['table_name'];
			}
			
		$sql = "DROP table ".implode(',' , $array);
		$result = mysql_query($sql,$x) or die( mysql_error());
	}
	
}

function ingresarDatos($datos,$tabla){
    //include("../../config.php");  
    $x = conexion();
    //$databasename = $pnconfig['dbname'];
	//$databasename = "cat_artesania";
    //$fields = mysql_list_fields($databasename,$tabla,$x);
    //$columns = mysql_num_fields($fields);
	//echo "<br>";
	//echo "databasename -> ".$databasename;
	//echo "<br>";
	//print_r($fields);
	//echo "<br>";
	//print_r($columns);
	
    $cuantos = sizeof($datos);
	$columns = $cuantos + 1;
	//echo "<br> cuantos -> ".$cuantos."<br>";
	//echo "<br> columns -> ".$columns."<br>";
	//print_r($datos);
    if ($cuantos == $columns - 1){
        
		$nomDatos = array_keys($datos);
		$valueDatos = array_values($datos);
	
		$campos = $nomDatos[0];
		$valores = "'".$valueDatos[0]."'";
		for ($i = 1; $i < sizeof($valueDatos);$i++){
			$campos = $campos . ",". $nomDatos[$i];
			$valores = $valores.",'".$valueDatos[$i]."'";	
		}
		
		/*
		
		$campos = mysql_field_name($fields, 1);
		$nomDatos = array_keys($datos);
		$campos = $nomDatos;
        $valores = "'" . $datos[0] . "'";
        for ($i = 2; $i < $columns; $i++) {
              $campos = $campos . "," . mysql_field_name($fields, $i);
              $valores = $valores . ",'" . $datos[$i-1] . "'";
              }
		*/
		$query ="
		INSERT INTO ".$tabla." 
		(".$campos.") 
		VALUES 
		(".$valores.")
		";
        //$query = sprintf("INSERT INTO %s (%s) VALUES (%s)",$tabla,$campos,$valores);
        //echo "\n<br>query -> <br>\n".$query."\n<br>";
		
		$result = mysql_query($query, $x) or print mysql_error();
			
			
		return mysql_insert_id($x);
	
		
        } else {
          echo "<br>La cantidad de Columnas es distinto al numero de datos enviados.<br>";
          }

}

function eliminarDatos($tabla,$nomid,$id){
	$x = conexion();
	$query = sprintf("DELETE FROM %s WHERE %s='%s'",$tabla,$nomid,$id);
	
	//echo "<br> query -> ",$query ,"<br>";
	
	$result = mysql_query($query, $x) or print mysql_error();

	//echo "<br> result -> ".$result."<br>";
	//print_r($result);
}

function actualizarDatos($datos,$tabla,$nomid,$id){
    //include_once("config.php");
    $x = conexion();
    //$databasename = $pnconfig['dbname'];
	//$databasename = "cat_artesania";
    //$fields = mysql_list_fields($databasename,$tabla,$x);
    
    /*
    echo "nomid -> ",$nomid," <br>";
    echo "id -> ",$id," <br>";
    
    print_r(array_values($datos));
    echo "<br>";
    print_r(array_keys($datos));
	echo "<br>";
    */
	$nomDatos = array_keys($datos);
	$valueDatos = array_values($datos);
	
	$comp = $nomDatos[0] . " = '". $valueDatos[0] . "'";
	for ($i = 1; $i < sizeof($valueDatos);$i++){
		$comp = $comp . " , ". $nomDatos[$i] ." = '". $valueDatos[$i] . "'";	
		
	}
    
	$query = sprintf("UPDATE %s SET %s WHERE %s = '%s'",$tabla,$comp,$nomid,$id);
	
	//echo "<br> query -> ",$query ,"<br>";
	
	$result = mysql_query($query, $x) or print mysql_error();
}


function actualizarDatosLang($datos,$tabla,$nomid,$id,$nomidlang,$idlang){
    
    $x = conexion();

	$nomDatos = array_keys($datos);
	$valueDatos = array_values($datos);
    
	$comp = $nomDatos[0] . " = '". $valueDatos[0] . "'";
	for ($i = 1; $i < sizeof($valueDatos);$i++){
		$comp = $comp . " , ". $nomDatos[$i] ." = '". $valueDatos[$i] . "'";	
		
	}
    
	$query = sprintf("UPDATE %s SET %s WHERE %s = '%s' and %s = '%s'",$tabla,$comp,$nomid,$id,$nomidlang,$idlang);
	
	$result = mysql_query($query, $x) or print mysql_error();
}

function nextAuto($tabla,$clave){
 	$x = conexion();
    $query = sprintf("SELECT MAX(%s) AS next_id FROM %s",$clave,$tabla);
	//echo $query;
    $result = mysql_query($query, $x) or print mysql_error();
    
	if(mysql_num_rows($result) != 0){
		$row = mysql_fetch_array($result);
	    $back = $row["next_id"];
		//echo "<br>row ->".$row["next_id"];
		//echo "<br>back ->".$back;
		$back = $back+1;
		//echo "<br>back ->".$back;
		}else{
		$back = 0;
		}
    return $back;

}


function mysql_table_exist($tableName){
	$x = conexion();
	
	$query = "SHOW TABLES LIKE '%".$tableName."%'";
	//echo "<br>query -> ".$query."<br>";
    $result = mysql_query($query, $x) or print mysql_error();
	if($result){
		//print_r($result);
	    $num_rows = mysql_num_rows($result);
		//print_r($num_rows);
		if($num_rows){
			return TRUE;
		}else{
			return FALSE;
		}
	}else{
		return FALSE;
	}

}

function mysql_create_table($forma){
	
	$valores = "";
	foreach($forma as $f){
		if($f["nombre"]=="primarykey"){
			$primary = "primary key (".$f["formato"].")"; 
		}elseif($f["nombre"]=="tablename"){
			$name = $f["formato"]; 
		}else{
			$valores .= $f["nombre"]." ".$f["formato"].", ";
		}
	}
	echo "<br>Falta la tabla ".$name." que ahora se creara<br>";	
	$sql = "create table ".$name." (".$valores.$primary.");";

	$x = conexion();
	$result = mysql_query($sql, $x) or print mysql_error();
	
}

function mysql_check_Field($tableName,$columnName){
	
	$x = conexion();
	$salida = FALSE;
	//$tableFields = mysql_list_fields($x, $tableName) or print mysql_error();
	$sql ="SHOW COLUMNS FROM ".$tableName;
	$result = mysql_query($sql,$x);
	
 	if (mysql_num_rows($result) > 0) {
     while ($row = mysql_fetch_assoc($result)) {
         //print_r($row);
         $nombre = $row["Field"];
         //$nombre = array_keys($row);
         if($nombre==$columnName){
         	$salida = TRUE;
         }
     }
 	}
	return $salida;
} 


function mysql_create_column($col,$table){
	$x = conexion();
	$sql = "ALTER TABLE ".$table." ADD ".$col["nombre"]." ".$col["formato"].";";
	echo "<br>Falta el campo ".$col["nombre"]." en la tabla ".$table."<br>";
	//echo "<br> sql -> ".$sql."<br>";
	$result = mysql_query($sql, $x) or print mysql_error();
	
	
}

function mysql_check_table($forma){
	
	foreach($forma as $f){
		if($f["nombre"]=="primarykey"){
			//$primary = "primary key (".$f["formato"].")"; 
		}elseif($f["nombre"]=="tablename"){
			$name = $f["formato"]; 
		}else{
			$valores[]= $f;
					
		}
	}
	
	foreach($valores as $vals){
		if(!mysql_check_Field($name,$vals["nombre"])){
			mysql_create_column($vals,$name);
		}
	}
	
	
}

function mysql_check_BBDD($forma){

	foreach($forma as $f){
		if($f["nombre"]=="primarykey"){
			//$primary = "primary key (".$f["formato"].")"; 
		}elseif($f["nombre"]=="tablename"){
			$name = $f["formato"]; 
		}else{
			//$valores[]= $f;
					
		}
	}
	//$forma = BBDDAgendaContactosforma();
	
	if(mysql_table_exist($name)){
		// chequea si la tabla tiene los campos correctos
		//echo "<br> La tabla existe -> se pasa a revisar <br>";
		mysql_check_table($forma);
	}else{
		//echo "<br> La tabla no existe -> se pasa a crear <br>";
		// se crea la tabla
		 mysql_create_table($forma);
	}
	
	
}

function mysql_checkRelleno_BBDD($datos,$tabla){
	$x = conexion();
    
	foreach($datos as $dat){
		if(!$claves){
			$claves = array_keys($dat);
		}
		$query = "SELECT * FROM ".$tabla." WHERE ".$claves[0]."='".$dat[$claves[0]]."'";
		$result = mysql_query($query, $x) or print mysql_error();
		if(mysql_num_rows($result) != 0){
			// se actualiza
			
			actualizarDatos($dat,$tabla,$claves[0],$dat[$claves[0]]);
		}else{
			// se ingresa uno nuevo
			ingresarDatos($dat,$tabla);
		}
	}
  
}

function checkeaUsuariosBasicos(){
	$i=0;
	$usuario[$i]["user"]="jcarrion"; $usuario[$i]["email"]="jcarrion@cataloniadirect.net"; $usuario[$i]["pass"]="Hola123456";$i++;
	
	$x = conexion();
	
	
	foreach($usuario as $usu){
		$query = "SELECT * FROM pnuke_users WHERE pn_uname='".$usu["user"]."'";
		$result = mysql_query($query, $x) or print mysql_error();
		if(mysql_num_rows($result) == 0){
			
			$dat["pn_uname"]=$usu["user"];
			$dat["pn_email"]=$usu["email"];
			$dat["pn_pass"]=md5($usu["pass"]);
			$idUser = ingresarDatos($dat,"pnuke_users");
			
			$query = "SELECT * FROM pnuke_groups WHERE pn_name='Admins'";
			$result = mysql_query($query, $x) or print mysql_error();
			if(mysql_num_rows($result) != 0){
				$grupo = mysql_fetch_array($result);
					//pnuke_group_membership
					$query = "SELECT * FROM pnuke_group_membership WHERE pn_gid='".$grupo["pn_gid"]."' AND pn_uid='".$idUser."'";
					$result = mysql_query($query, $x) or print mysql_error();
					if(mysql_num_rows($result) == 0){
						
						$dat2["pn_gid"]=$grupo["pn_gid"];
						$dat2["pn_uid"]=$idUser;
						ingresarDatos($dat2,"pnuke_group_membership");
					}
				
				}
			}
	}
}


//*************************************++



function remove_comments(&$output)
{
   $lines = explode("\n", $output);
   $output = "";

   // try to keep mem. use down
   $linecount = count($lines);

   $in_comment = false;
   for($i = 0; $i < $linecount; $i++)
   {
      if( preg_match("/^\/\*/", preg_quote($lines[$i])) )
      {
         $in_comment = true;
      }

      if( !$in_comment )
      {
         $output .= $lines[$i] . "\n";
      }

      if( preg_match("/\*\/$/", preg_quote($lines[$i])) )
      {
         $in_comment = false;
      }
   }

   unset($lines);
   return $output;
}

//
// remove_remarks will strip the sql comment lines out of an uploaded sql file
//
function remove_remarks($sql)
{
   $lines = explode("\n", $sql);

   // try to keep mem. use down
   $sql = "";

   $linecount = count($lines);
   $output = "";

   for ($i = 0; $i < $linecount; $i++)
   {
      if (($i != ($linecount - 1)) || (strlen($lines[$i]) > 0))
      {
         if (isset($lines[$i][0]) && $lines[$i][0] != "#")
         {
            $output .= $lines[$i] . "\n";
         }
         else
         {
            $output .= "\n";
         }
         // Trading a bit of speed for lower mem. use here.
         $lines[$i] = "";
      }
   }

   return $output;

}

//
// split_sql_file will split an uploaded sql file into single sql statements.
// Note: expects trim() to have already been run on $sql.
//
function split_sql_file($sql, $delimiter)
{
   // Split up our string into "possible" SQL statements.
   $tokens = explode($delimiter, $sql);

   // try to save mem.
   $sql = "";
   $output = array();

   // we don't actually care about the matches preg gives us.
   $matches = array();

   // this is faster than calling count($oktens) every time thru the loop.
   $token_count = count($tokens);
   for ($i = 0; $i < $token_count; $i++)
   {
      // Don't wanna add an empty string as the last thing in the array.
      if (($i != ($token_count - 1)) || (strlen($tokens[$i] > 0)))
      {
         // This is the total number of single quotes in the token.
         $total_quotes = preg_match_all("/'/", $tokens[$i], $matches);
         // Counts single quotes that are preceded by an odd number of backslashes,
         // which means they're escaped quotes.
         $escaped_quotes = preg_match_all("/(?<!\\\\)(\\\\\\\\)*\\\\'/", $tokens[$i], $matches);

         $unescaped_quotes = $total_quotes - $escaped_quotes;

         // If the number of unescaped quotes is even, then the delimiter did NOT occur inside a string literal.
         if (($unescaped_quotes % 2) == 0)
         {
            // It's a complete sql statement.
            $output[] = $tokens[$i];
            // save memory.
            $tokens[$i] = "";
         }
         else
         {
            // incomplete sql statement. keep adding tokens until we have a complete one.
            // $temp will hold what we have so far.
            $temp = $tokens[$i] . $delimiter;
            // save memory..
            $tokens[$i] = "";

            // Do we have a complete statement yet?
            $complete_stmt = false;

            for ($j = $i + 1; (!$complete_stmt && ($j < $token_count)); $j++)
            {
               // This is the total number of single quotes in the token.
               $total_quotes = preg_match_all("/'/", $tokens[$j], $matches);
               // Counts single quotes that are preceded by an odd number of backslashes,
               // which means they're escaped quotes.
               $escaped_quotes = preg_match_all("/(?<!\\\\)(\\\\\\\\)*\\\\'/", $tokens[$j], $matches);

               $unescaped_quotes = $total_quotes - $escaped_quotes;

               if (($unescaped_quotes % 2) == 1)
               {
                  // odd number of unescaped quotes. In combination with the previous incomplete
                  // statement(s), we now have a complete statement. (2 odds always make an even)
                  $output[] = $temp . $tokens[$j];

                  // save memory.
                  $tokens[$j] = "";
                  $temp = "";

                  // exit the loop.
                  $complete_stmt = true;
                  // make sure the outer loop continues at the right point.
                  $i = $j;
               }
               else
               {
                  // even number of unescaped quotes. We still don't have a complete statement.
                  // (1 odd and 1 even always make an odd)
                  $temp .= $tokens[$j] . $delimiter;
                  // save memory.
                  $tokens[$j] = "";
               }

            } // for..
         } // else
      }
   }

   return $output;
}


function importinto($sql_query){
	//$dbms_schema = $file;

	//$sql_query = @fread(@fopen($dbms_schema, 'r'), @filesize($dbms_schema)) or die('problem ');
	
	$sql_query = remove_remarks($sql_query);
	$sql_query = split_sql_file($sql_query, ';');
	
	/*
	$host = 'localhost';
	$user = 'user';
	$pass = 'pass';
	$db = 'database_name';

	mysql_connect($host,$user,$pass) or die('error connection');
	mysql_select_db($db) or die('error database selection');
	*/
	
	$x = conexion();
	
	$i=1;
	foreach($sql_query as $sql){
		
		echo ".";
		
		$i++;
		$result = mysql_query($sql,$x) or print mysql_error();
		ob_flush();
        flush();
	}


	
	
	
}

?>
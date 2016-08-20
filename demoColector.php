<?php

require_once("colector.php");
class demoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("demo");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO($varNombre, $path)
 {
 try
		{
			$sql = "insert into demo (id, nombre, foto) values (default, '$varNombre', '$path')";
		    	$result= $this->modelo->operacion($sql);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateDEMO($varNombre, $varId)
 {
 try
		{
			$sql = "update demo set nombre = '" .$varNombre. "' where id =".$varId ;
			$result= $this->modelo->operacion($sql);
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO($varID)
 {
 try
		{
			$sql = "delete from demo where id = $varID";
		     $result= $this->modelo->operacion($sql);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>

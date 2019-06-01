<?php
	$enlace= new mysqli("localhost","admin","prueba123","rocatours");
    if($enlace->connect_error){
	die("Conexion fallida: ".$enlace->connect_error);
}
//echo "conexion establecida";
return $enlace;
?>
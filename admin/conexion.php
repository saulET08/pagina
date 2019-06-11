<?php
	$enlace= new mysqli("localhost","admin","prueba123","u102940273_roca");
    if($enlace->connect_error){
	die("Conexion fallida: ".$enlace->connect_error);
}
//echo "conexion establecida";
return $enlace;
?>
<?php
	include('conexion.php');


	$img= $_FILES['img']['name'];
	$lugar= ($_POST['lugar']);
	$descripcion= ($_POST['descripcion']);
	$result3 = $enlace->query("INSERT INTO destinos (ruta,lugar,descripcion) values ('img/".$img."','$lugar','$descripcion')");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:destinos.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
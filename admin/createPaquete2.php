<?php
	include('conexion.php');

	$img= $_FILES['img']['name'];
	$descripcion= ($_POST['descripcion']);
	$result3 = $enlace->query("INSERT INTO paquetes(ruta2,descripcion2) values ('img/".$img."','$descripcion')");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:paquetes.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
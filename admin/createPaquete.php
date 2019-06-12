<?php
	include('conexion.php');

	$img= $_FILES['img']['name'];
	$lugar= ($_POST['lugar']);
	$fecha= ($_POST['fecha']);
	$descripcion= ($_POST['descripcion']);
	$dias= ($_POST['dias']);
	$result3 = $enlace->query("INSERT INTO paquetes(ruta,lugar,fecha,descripcion,dias) values ('img/".$img."','$lugar','$fecha','$descripcion','$dias')");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:paquetes.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
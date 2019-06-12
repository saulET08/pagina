<?php
	include('conexion.php');

	$id=$_GET['id'];
	$lugar= ($_POST['lugar']);
	$fecha= ($_POST['fecha']);
	$descripcion= ($_POST['descripcion']);
	$dias= ($_POST['dias']);
	$img= $_FILES['img']['name'];
	$result3 = $enlace->query("UPDATE destinos SET lugar='$lugar', descripcion='$descripcion', ruta='img/".$img."' WHERE iddestino=$id");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:destinos.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
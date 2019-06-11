<?php
	include('conexion.php');

	$id=$_GET['id'];
	$lugar= ($_POST['lugar']);
	$fecha= ($_POST['fecha']);
	$descripcion= ($_POST['descripcion']);
	$dias= ($_POST['dias']);
	$img= $_FILES['img']['name'];
	$result3 = $enlace->query("UPDATE paquetes SET lugar='$lugar', fecha='$fecha', descripcion='$descripcion', dias='$dias', ruta='img/".$img."' WHERE idpaquete=$id");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:paquetes.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
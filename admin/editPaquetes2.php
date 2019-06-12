<?php
	include('conexion.php');

	$id=$_GET['id'];
	$descripcion= ($_POST['descripcion']);
	$img= $_FILES['img']['name'];
	$result3 = $enlace->query("UPDATE paquetes SET descripcion2='$descripcion',ruta2='img/".$img."' WHERE idpaquete=$id");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:paquetes.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
<?php
	include('conexion.php');

	$id=$_GET['id'];
	$img= $_FILES['img']['name'];
	$result3 = $enlace->query("UPDATE slider SET ruta='img/".$img."' WHERE idSlider=$id");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:index.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
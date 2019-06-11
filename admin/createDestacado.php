<?php
	include('conexion.php');

	$img= $_FILES['img']['name'];
	$lugar= ($_POST['lugar']);
	$result3 = $enlace->query("INSERT INTO destacados (ruta,lugar) values ('img/".$img."','$lugar')");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:index.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
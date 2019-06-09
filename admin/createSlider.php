<?php
	include('conexion.php');


	$img= $_FILES['img']['name'];
	$result3 = $enlace->query("INSERT INTO slider (ruta) values ('img/".$img."')");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:index.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
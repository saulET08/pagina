<?php
	include('conexion.php');

	$id=$_GET['id'];
	$lugar= ($_POST['lugar']);
	$img= $_FILES['img']['name'];
	$result3 = $enlace->query("UPDATE destacados SET lugar='$lugar', ruta='img/".$img."' WHERE idDestacado=$id");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:index.php?modificado=si");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
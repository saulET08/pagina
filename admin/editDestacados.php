<?php
	include('conexion.php');

	$id=$_GET['id'];
	$numero= ($_POST['numero']);
	$img= $_FILES['img']['name'];
	$result3 = $enlace->query("UPDATE destacados SET numero='$numero', ruta='img/".$img."' WHERE idDestacador=$id");
	
	if ($result3) {
	   include 'uploader.php';
	   header("Location:index.php?modificado=si");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
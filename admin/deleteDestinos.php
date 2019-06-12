<?php
	include('conexion.php');

	$id=$_GET['id'];
	$ruta = $enlace->query("SELECT *FROM destinos WHERE iddestino=$id");
	while($imagen=$ruta->fetch_assoc()){
		$espera=unlink("../".$imagen['ruta']);
	}
	$result3 = $enlace->query("DELETE FROM destinos WHERE iddestino=$id");
	if ($result3) {
	   header("Location:destinos.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
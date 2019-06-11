<?php
	include('conexion.php');

	$id=$_GET['id'];
	$ruta = $enlace->query("SELECT *FROM paquetes WHERE idpaquete=$id");
	while($imagen=$ruta->fetch_assoc()){
		$espera=unlink("../".$imagen['ruta']);
	}
	$result3 = $enlace->query("DELETE FROM paquetes WHERE idpaquete=$id");
	if ($result3) {
	   header("Location:paquetes.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
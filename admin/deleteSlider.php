<?php
	include('conexion.php');

	$id=$_GET['id'];
	$ruta = $enlace->query("SELECT *FROM slider WHERE idSlider=$id");
	while($imagen=$ruta->fetch_assoc()){
		$espera=unlink("../".$imagen['ruta']);
	}
	$result3 = $enlace->query("DELETE FROM slider WHERE idSlider=$id");
	if ($result3) {
	   header("Location:index.php");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
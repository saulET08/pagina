<?php
	include('conexion.php');

	$id=$_GET['id'];
	$result3 = $enlace->query("DELETE FROM slider WHERE idSlider=$id");
	$enlace->query("ALTER TABLE slider AUTO_INCREMENT='1'");
	if ($result3) {
	   include 'delete.php';
	   
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
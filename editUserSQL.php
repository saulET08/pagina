<?php
	include('conexion.php');

	$id=$_GET['id'];
	$user= utf8_encode($_POST['user']);
	$pss= utf8_encode($_POST['pss']);

	$result3 = $enlace->query("UPDATE usuarios SET usuario='$user', contrasena='$pss' WHERE id=$id");
	
	if ($result3) {
	   header("Location:Users.php?modificado=si");
	}else{
		echo "no actualizó nada";
	}
	$enlace->close();
?>
<?php
	$target_path = "../img/";
	$target_path = $target_path.basename($_FILES['img']['name']);
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target_path))
	{
		echo "El archivo ".basename($_FILES['img']['name'])." ha sido subido";
	}else {
		echo "Ha ocurrido un error, trate de nuevo!";
	}
?>
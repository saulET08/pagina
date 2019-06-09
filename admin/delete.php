<?php
	$ruta = $enlace->query("SELECT *FROM slider WHERE idSlider=$id");
	$directorio = "../img/";
	unlink($directorio.$ruta['ruta']);
?>
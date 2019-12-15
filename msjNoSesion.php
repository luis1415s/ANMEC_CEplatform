<?php
	session_start();
	$msjnosesion="Debes iniciar sesión para poder ingresar";
	$msjnosesion=utf8_decode($msjnosesion);
	$msjnosesionlink="Regresar e iniciar Sesión";
	$msjnosesionlink=utf8_decode($msjnosesionlink);
	$varsesion = $_SESSION['usuario'];
	if($varsesion ==  null || $varsesion= ''){
		echo "$msjnosesion<br><br><a href='inicio.php'>$msjnosesionlink</a>";
		die();
	}
?>
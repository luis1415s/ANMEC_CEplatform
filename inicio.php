<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
	if($varsesion !=  null || $varsesion!=''){
		header("Location:bienvenido.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicia sesión</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<style>
	body{
	background-color: #5373A9 !important;
}
</style>
<body>
	<br><br><br>
	<div id="divmain">
		<div id="divForm">
			<form id="formulario" method="POST" action="validar.php">
				<br>
				<h2>Bienvenido</h2>
				<br>
				<img src="imagenes/anmec_logo.png" id="imU" style="width: 128px; height: 128px;">
				<br><br><br>
				<label for="usuario">Correo Administrador</label>
				<br>
				<span class="glyphicon glyphicon-user"></span><input type="email" id="usuario" name="usuario" placeholder="Escribe correo" required="true">
				<br><br>
				<label for="password">Password Administrador</label>
				<br>
				<span class="glyphicon glyphicon-lock"></span><input type="password" id="password" name="clave" placeholder="Escribe password" required="true"><br><br><br>
				<input type="submit" name="aceptar" value="Ingresar" class="aceptar">
				<br><br>
				<input type="button" id="regBt" onclick=" location.href='registro.php'" value="Registrar">
				<br><br><br>
			</form>
		</div>
	</div>
	<br><br>
</body>
<script>
	// src="opEnableMenu.js"
	var di=document.getElementById('di');
	var ho=document.getElementById('ho');
	var cs=document.getElementById('cs');
	var iniciaSe=document.getElementById('iniciaSe');
	ho.classList.remove('active');
	iniciaSe.classList.add('active');
</script>
</html>
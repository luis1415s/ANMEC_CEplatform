<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	 <link href="css/popup.css" rel="stylesheet" type="text/css"/>
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
			<form id="formulario" method="POST" action="regDB.php">
				<br>
				<h2>Registro de Administrador</h2>
				<br>
				<img src="imagenes/anmec_logo.png" id="imU" style="width: 128px; height: 128px;">
				<br><br><br>
				<label for="nomusuario">Nombre completo</label>
				<br>
				<span class="glyphicon glyphicon-user"></span>   <input type="text" id="usuario" name="nomadmin" placeholder="Nombre completo" required="true">
				<br><br>
				<label for="usuario">Correo</label>
				<br>
				<span class="glyphicon glyphicon-envelope"></span>  <input type="email" id="usuario" name="usuario" placeholder="Correo electrónico" required="true">
				<br><br>
				<label for="telefono">Telefono</label>
				<br>
				<span class="glyphicon glyphicon-earphone"></span>  <input type="number" id="usuario" name="telusuario" placeholder="Número telefónico" required="true">
				<br><br>
				<label for="password">Password</label>
				<br>
				<span class="glyphicon glyphicon-lock"></span>  <input type="password" id="password" name="clave" placeholder="Escribe password" required="true"><br><br><br>
				<input type="submit" name="regUsuario" value="Registrar" class="aceptar">
				<!--<input type="submit" name="regUsuario" value="Registrar" class="aceptar" onclick="location.href='#popup'">-->
				<!--
				<div id="popup" class="overlay">
            		<div id="popupBody">
	                	<h2>Ingresa credenciales de Administrador</h2>
	                	<a id="cerrar" href="#">&times;</a>
	                	<div class="popupContent">
	                    	<label for="usuario">Correo</label>
							<br>
							<span class="glyphicon glyphicon-envelope"></span><input type="email" id="usuario" name="usuario" placeholder="Correo electrónico" required="true">
							<br><br>
							<label for="password">Password asignada</label>
							<br>
							<span class="glyphicon glyphicon-lock"></span><input type="password" id="password" name="clave" placeholder="Escribe password" required="true"><br><br><br>
							<input type="submit" name="regUsuario" value="Registrar" class="aceptar" onclick="location.href='#popup'">
	                	</div>
           			</div>
        		</div>
        	-->
				<br><br>
				<a href="inicio.php">Iniciar sesión</a>
				<!--<input type="button" id="regBt" onclick=" location.href='registro.php'" value="Registrar Nuevo Usuario">-->
				<br><br>
			</form>
		</div>
	</div>
	<br><br><br>
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
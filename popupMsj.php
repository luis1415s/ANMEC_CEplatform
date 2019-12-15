<?php
	include("inicio.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Error de inicio de sesión</title>
	<link rel="stylesheet" href="css/popup.css">
</head>
<body>
	<div id="popup" class="overlay">
   		<div id="popupBody">
       		<h2>Error de autenticación</h2>
       		<a id="cerrar" href="inicio.php">&times;</a>
       		<div class="popupContent">
          		<p>Por favor valida los datos de inicio de sesión e inténtalo de nuevo.</p>
       		</div>
   		</div>
	</div>
</body>
<script>
	div1=document.getElementById('popup');
	div1.style.visibility='visible';
	div1.style.opacity='1';
</script>
</html>
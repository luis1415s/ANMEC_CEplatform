<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Error de inicio de sesión</title>
	<link rel="stylesheet" href="../css/popup.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="../js/scripts.js"></script>
</head>
<body>
	<div id="popup" class="overlay">
   		<div id="popupBody">
       		<h2>Proceso realizado correctamente</h2>
       		<a id="cerrar" href="../bienvenido.php">&times;</a>
       		<div class="popupContent">
          		<p>Se añadieron los datos al sistema.</p>
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
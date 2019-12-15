<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panel Administrador</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<style>
	*{
		border: 0;
		margin:0;
		padding:0;
	}

	#var1{
		position: fixed;
		width: 100%;
		z-index: 100;
		background-color: #C5D4F2;
	}
	#gm:target{
		
	}
</style>
<body>
	<ul class="nav nav-tabs" id="var1"> 
		<li id="gp" role="presentation" class="active"><a href="bienvenido.php">Gestionar preguntas</a></li>
		<li id="gu" role="presentation"><a href="gestusuarios.php">Gestionar usuarios</a></li>
		<li id="gm" role="presentation"><a href="modulos.php">Gestionar módulos</a></li>
	</ul>
	<br><br>
</body>
</html>
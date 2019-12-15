<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenido</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<style>
	#wm{
		margin-right:30px;
	}
</style>
<body>
	<div>
		<br>
		<div id="wm">
			<h3><?php echo $_SESSION['usuario']; ?></h3>
			<a href="cerrar_sesion.php"><h4>Cerrar Sesión</h4></a>
		</div>
	</div>
</body>
</html>
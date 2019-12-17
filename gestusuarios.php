<?php
error_reporting(0);
session_start();
//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
include "conexion.php";
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gestión de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
</head>
<style>
	table{
		width: 100%;
		border: 0px solid black;
	}

	#divap,#divep,#divmp{
		display: none;
	}
	select{
		width: 20%;
	}
	form{
		text-align: center;
	}
	input{
		width: 30% !important;
		text-align: center;
	}
</style>
<?php include("panel_admin.php"); ?>
<body>
	<table>
		<tr align="right" id="wm">
			<td><?php include("welcome_msj.php"); ?></td>
		</tr>
		<tr>
			<td>
			<div id="cabecera">
  				<img src="img/swirl.png" width="1188" id="img1">
  			</div>
			</td>
		</tr>
		<tr>
			<td>
			<?php include("alumno.php");?>
			</td>
		</tr>
</body>
<script>
	var gp=document.getElementById('gp');
	var gu=document.getElementById('gu');
	var gm=document.getElementById('gm');
	//Se identifican los DIV's, mismos que se mostraran segun la accion elegida
	var divap=document.getElementById('divap');
	var divep=document.getElementById('divep');
	var divmp=document.getElementById('divmp');
	//Opcion activa del menu de administrador
	gp.classList.remove('active');
	gm.classList.remove('active');
	gu.classList.add('active');

	//Funcion que meustra DIV correspondiente
	function elegir() {
		//Se identifica la lista y se obtiene el elemento seleccionado
		var opgptitle=document.getElementById('opgptitle');
		var opgpbtn=document.getElementById('opgpbtn');
		var sel = document.getElementById('opgp');
		var op=sel.options[sel.selectedIndex].value;
		if (op=='agregar') {
			divap.style.display='inline';
			divep.style.display='none';
			divmp.style.display='none';
		}
		if (op=='eliminar') {
			divap.style.display='none';
			divep.style.display='inline';
			divmp.style.display='none';
		}
		if (op=='modificar') {
			divap.style.display='none';
			divep.style.display='none';
			divmp.style.display='inline';	
		}
		opgptitle.style.display='none';
		sel.style.display='none';
		opgpbtn.style.display='none';
	}
</script>
</html>
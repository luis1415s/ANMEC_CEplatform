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
	<?php //include("welcome_msj.php"); ?>
	<table>
		<tr align="right" id="wm">
			<td><?php include("welcome_msj.php"); ?></td>
		</tr>
		<tr id="tr1">
			<td>
				<h4 id="opgptitle">¿Qué desea hacer?</h4>
				<select name="opgp" id="opgp">
					<option value="agregar">Agregar</option>
					<option value="eliminar">Eliminar</option>
					<option value="modificar">Modificar</option>
				</select>
				<button onclick="elegir()" id="opgpbtn">Continuar</button>
			</td>
		</tr>
		<tr id="tr1">
			<td>
				<div id="divap">
					<h4>Creación de módulo</h4>
					<form action="db/addm.php" method="POST" accept-charset="utf-8">
						<br>
						<label>Clave del módulo (max. 10 carácteres)</label><br><input id="txtcvemod" type="text" name="txtcvemod" placeholder="Asigna una clave única al módulo" maxlength="10" required="true">
						<br><br><br>
						<label>Nombre de módulo (max. 50 carácteres)</label><br><input id="txtnommod" type="text" name="txtnommod" placeholder="Ingresa nombre del módulo" maxlength="50" required="true">
						<br><br>
						<button type="submit">Agregar Módulo</button>
					</form>
					<br>
					<a href="modulos.php"><button>Cancelar</button></a>
					<br><br>
					<!--
					</form>
					<p>HOLA, YO AGREGO PREGUNTAS</p>-->
				</div>
				<div id="divep">
					<form action="db/delm.php" method="POST" id="selmodForm" accept-charset="utf-8">
						<h4>Seleccione módulo a eliminar:</h4>
						<?php
							mysql_select_db("anmecexamen");
							$consulta="SELECT nom_mod,cve_mod from modulo";
						 	$resultado=mysqli_query($conexion, $consulta);	 	
						 ?>
						<select name="selmod">
						<?php
							while ($fila=mysqli_fetch_array($resultado, MYSQL_NUM)) {
								$fila[0]=utf8_encode($fila[0]);
								$fila[1]=utf8_encode($fila[1]);
								echo "<option value='$fila[1]'>".$fila[0]."</option>";
							}
						?>
						</select>
						<h5>Al eliminar este módulo se eliminarán todas sus preguntas</h5>
						<button type="submit">Eliminar</button>
					</form>
					<br>
					<a href="modulos.php"><button>Cancelar</button></a>
					<br><br>
					<!--<p>HOLA, YO ELIMINO PREGUNTAS</p>-->
				</div>
				<div id="divmp">
					<form action="valMod_Modif_modulos.php" method="POST" id="selmodForm" accept-charset="utf-8">
						<h4>Seleccione módulo de pregunta a modificar:</h4>
						<?php
							//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmeceval');
							mysql_select_db("anmecexamen");
							$consulta="SELECT nom_mod,cve_mod from modulo";
						 	$resultado=mysqli_query($conexion, $consulta);	 	
						 ?>
						<select name="selmod">
						<?php
							while ($fila=mysqli_fetch_array($resultado, MYSQL_NUM)) {
								$fila[0]=utf8_encode($fila[0]);
								$fila[1]=utf8_encode($fila[1]);
								echo "<option value='$fila[1]'>".$fila[0]."</option>";
							}
						?>
						</select>
						<button type="submit">Continuar</button>
					</form>
					<br>
					<a href="modulos.php"><button>Cancelar</button></a>
					<br><br>
					<!--<p>HOLA, YO MODIFICO PREGUNTAS</p>-->
				</div>
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
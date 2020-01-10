<?php
	error_reporting(0);
	include("msjNoSesion.php");
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	$opModuloSel=$_POST['selmod'];
	if ($opModuloSel=="") {
		header("Location:db/msjFail.php");
	}
	else{

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gestion de Preguntas</title>
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
	#opgp, #mod_preg_elim{
		width: 30%;
	}
	
	#mod_preg_elim{
		text-align: center;
	}
	
	select{
		width: 10%;
	}
	form{
		text-align: center;
	}
</style>
<?php include("panel_admin.php"); ?>
<body>
	<table>
		<tr align="right" id="wm">
			<td><?php include("welcome_msj.php");?></td>
		</tr>
		<tr id="tr1">
			<td>
				<div id="divep">
				<form action="db/delq.php?opModuloSel=<?php echo $opModuloSel ?>" method="POST" accept-charset="utf-8">
					<br><br>
					<h4>Modulo seleccionado:</h4>
					<br>
					<?php  echo "<input id='mod_preg_elim' type='text' name='mod_preg_elim' value='$opModuloSel' disabled align='center'>"?>
					<br><br>
					<h4>Seleccione pregunta a eliminar:</h4>
					<br>
					<h6>Al eliminar una pregunta, se eliminarán todas las respuestas que contiene.</h6>
					<br><br>
					<?php
						mysql_select_db("anmeceval");
						$consulta="SELECT id_pregunta,cve_mod,desc_pregunta from pregunta where cve_mod='$opModuloSel'";
					 	$resultado=mysqli_query($conexion, $consulta);
					 	$filas = mysqli_num_rows($resultado);
						if ($filas==0) {
							include("popupMsjnoquestion.php");
						}
					 ?>
					 <select name="selpreg" id="opgp">
					 <?php
						while ($fila=mysqli_fetch_array($resultado, MYSQL_NUM)) {
							/*$fila[2]=utf8_encode($fila[2]);
							$fila[0]=utf8_encode($fila[0]);*/
							echo "<option value='$fila[0]'>".$fila[2]."</option>";
						}
					?>
					</select>
					<button type="submit">Eliminar pregunta</button>
				</form>
			</td>
		</tr>
		<tr id="tr1">
			<td><br><br><a href="bienvenido.php"><button id="cbtn">Cancelar</button></a></td>
		</tr>
	</table>
</body>
</html>

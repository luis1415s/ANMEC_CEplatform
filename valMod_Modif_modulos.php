<?php
	error_reporting(0);
	include("msjNoSesion.php");
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	$opModuloSel=$_POST['selmod'];
	if ($opModuloSel=="") {
		header("Location:db/msjFail.php");
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
	input{
		width: 30% !important;
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
				<form action="db/modm.php?opModuloSel=<?php echo $opModuloSel ?>" method="POST" accept-charset="utf-8">
					<br><br><br>
					<h4>Modulo seleccionado:</h4>
					<br>
					<?php  echo "<input id='mod_preg_elim' type='text' name='mod_preg_elim' value='$opModuloSel' disabled align='center'>";
					?>
					<br><br>
					<?php
						mysql_select_db("anmeceval");
						$consulta="SELECT cve_mod, nom_mod from modulo where cve_mod='$opModuloSel'";
						$resultado=mysqli_query($conexion, $consulta);
						while ($fila=mysqli_fetch_array($resultado, MYSQL_NUM)) {
							$fila[0]=utf8_encode($fila[0]);
							$fila[1]=utf8_encode($fila[1]);
					?>
					<label>Clave del módulo (max. 10 carácteres)</label><br><input id="txtcvemod" type="text" name="txtcvemod" value="<?php echo $fila[0]; ?>" maxlength="10" required="true">
					<br><br><br>
					<label>Nombre de módulo (max. 60 carácteres)</label><br><input id="txtnommod" type="text" name="txtnommod" value="<?php echo $fila[1]; ?>" maxlength="50" required="true">
					<?php } ?>
					<br><br>
					<button type="submit">Actualizar módulo</button>
				</form>
			</td>
		</tr>
		<tr id="tr1">
			<td><br><br><a href="modulos.php"><button id="cbtn">Cancelar</button></a></td>
		</tr>
	</table>
</body>
<script>
	var gp=document.getElementById('gp');
	var gr=document.getElementById('gr');
	var gm=document.getElementById('gm');
	gp.classList.remove('active');
	gm.classList.add('active');
</script>
</html>
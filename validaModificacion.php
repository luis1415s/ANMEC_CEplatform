<?php
	error_reporting(0);
	include("msjNoSesion.php");
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	$opModuloSel=$_GET['opModuloSel'];
	$selpregm=$_POST['selpregm'];
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
				<form action="db/modq.php?opModuloSel=<?php echo $opModuloSel?>&selpregm=<?php echo $selpregm ?>" method="POST" accept-charset="utf-8">
					<br><br><br>
					<h4>Modulo seleccionado:</h4>
					<br>
					<?php  echo "<input id='mod_preg_elim' type='text' name='mod_preg_elim' value='$opModuloSel' disabled align='center'>";
					?>
					<br><br>
					<?php
					$consulta="SELECT desc_pregunta, resp1, resp2, resp3, resp_correcta from pregunta where id_pregunta=$selpregm";
						$resultado=mysqli_query($conexion, $consulta);
						while ($fila=mysqli_fetch_array($resultado, MYSQL_NUM)) {
							/*$fila[0]=utf8_encode($fila[0]);
							$fila[1]=utf8_encode($fila[1]);
							$fila[2]=utf8_encode($fila[2]);
							$fila[3]=utf8_encode($fila[3]);
							$fila[4]=utf8_encode($fila[4]);
							*/
						 /*foreach ($conexion->query('SELECT desc_pregunta,resp1,resp2,resp3,resp_correcta from pregunta where id_pregunta=1 and cve_mod="mod_prueba"') as $row) {
						 	echo $row['desc_pregunta']."<br>";
						 	echo $row['resp1']."<br>";
						 	echo $row['resp2']."<br>";
						 	echo $row['resp3']."<br>";
						 	echo $row['resp_correcta']."<br>";
						 }*/
					?>
					<label>Pregunta:</label><input id="txtpregunta" type="text" name="txtpregunta" value="<?php echo $fila[0]; ?>" maxlength="300" required="true">
					<br>
					<label>Respuesta 1:</label><input id="txtresp1" type="text" name="txtresp1" value="<?php echo $fila[1]; ?>" maxlength="100" required="true">
					<br>
					<label>Respuesta 2:</label><input id="txtresp2" type="text" name="txtresp2" value="<?php echo $fila[2]; ?>" maxlength="100" required="true">
					<br>
					<label>Respuesta 3:</label><input id="txtresp3" type="text" name="txtresp3" value="<?php echo $fila[3]; ?>" maxlength="100" required="true">
					<br>
					<label>Respuesta correcta:</label><input id="txtcorrecta" type="number" name="txtcorrecta" value="<?php echo $fila[4]; ?>" required="true">
					<?php } ?>
					
					<br><br>
					<button type="submit">Modificar pregunta</button>
				</form>
			</td>
		</tr>
		<tr id="tr1">
			<td><br><br><a href="bienvenido.php"><button id="cbtn">Cancelar</button></a></td>
		</tr>
	</table>
</body>
</html>
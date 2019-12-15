<?php
	$pregunta=$_POST['selpreg'];
	$modulo=$_GET['opModuloSel'];
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	mysql_select_db("anmeceval");
	//echo $pregunta." modulo:".$modulo;
	$consulta="DELETE FROM pregunta where id_pregunta=$pregunta and cve_mod='$modulo'";
 	if (mysqli_query($conexion, $consulta))
 	{
 		include ('msjRight.php');
 		//echo "<script>alert('Se agrego exitosamente esta pregunta.');</script>";
 	}
 	else
 	{
 		include ('msjFail.php');
 		echo "<script>window.history.back();<script>";
 	}
?>
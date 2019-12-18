<?php
	error_reporting(0);
	$cveMod=utf8_decode($_POST['txtcvemod']);
	$nomMod=utf8_decode($_POST['txtnommod']);
	$moduloOrigen=$_GET['opModuloSel'];
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	//mysql_select_db("anmeceval");
	$consulta="UPDATE modulo SET nom_mod='$nomMod', cve_mod='$cveMod' where cve_mod='$moduloOrigen'";
	$consulta2="UPDATE pregunta SET cve_mod='$cveMod' where cve_mod='$moduloOrigen'";
 	if (mysqli_query($conexion, $consulta2))
 	{
 		if (mysqli_query($conexion, $consulta)) {
 			include ('msjRight.php');	
 		}
 		//echo "<script>alert('Se agrego exitosamente esta pregunta.');</script>";
 	}
 	else
 	{
 		include ('msjFail.php');
 		echo "<script>window.history.back();<script>";
 	}
?>
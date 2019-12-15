<?php
	error_reporting(0);
	$cveMod=utf8_decode($_POST['txtcvemod']);
	$nomMod=utf8_decode($_POST['txtnommod']);
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	mysql_select_db("anmecexamen");
	$consulta="INSERT INTO modulo (cve_mod, nom_mod) VALUES ('$cveMod','$nomMod')";
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
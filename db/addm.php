<?php
	error_reporting(0);
	
	$cveMod=$_POST['txtcvemod'];
	$nomMod=$_POST['txtnommod'];
	include "conexion.php";
	//echo "<br> cve:".$nomMod;
	mysql_select_db("anmeceval");
	$consulta="INSERT INTO modulo (cve_mod,nom_mod) VALUES ('$cveMod','$nomMod')";
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
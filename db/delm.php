<?php
	error_reporting(0);
	$modulo=$_POST['selmod'];
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	mysql_select_db("anmecexamen");
	if ($modulo=="") {
		include ('msjFail.php');
	}
	else
	{
		$consulta="DELETE FROM pregunta where cve_mod='$modulo'";
		$consulta2="DELETE FROM modulo where cve_mod='$modulo'";
	 	if (mysqli_query($conexion, $consulta))
	 	{
	 		if (mysqli_query($conexion, $consulta2))
	 		{
	 			include ('msjRight.php');
	 		}
	 	}
	 	else
	 	{
	 		if (mysqli_query($conexion, $consulta2))
	 		{
	 			include ('msjRight.php');
	 		}
	 		else
	 		{
	 			include ('msjFail.php');
	 			echo "<script>window.history.back();<script>";
	 		}
	 	}
	 }
?>
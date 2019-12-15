<?php
	error_reporting(0);
	$modulo=$_POST['selmod'];
	$pregunta=utf8_decode($_POST['txtpregunta']);
	$resp1=utf8_decode($_POST['txtresp1']);
	$resp2=utf8_decode($_POST['txtresp2']);
	$resp3=utf8_decode($_POST['txtresp3']);
	$respCorrecta=$_POST['txtcorrecta'];
	//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
	include "conexion.php";
	mysql_select_db("anmecexamen");
	$consulta="INSERT INTO pregunta (id_pregunta,desc_pregunta,resp1,resp2,resp3,resp_correcta,cve_mod) VALUES (null,'$pregunta','$resp1','$resp2','$resp3','$respCorrecta','$modulo')";
	if ($modulo=="") {
		include ('msjFail.php');
	}
	else
	{
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
	}
?>
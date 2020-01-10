<?php
	$pregunta=$_POST['txtpregunta'];
	$resp1=$_POST['txtresp1'];
	$resp2=$_POST['txtresp2'];
	$resp3=$_POST['txtresp3'];
	/*
	$pregunta=utf8_decode($_POST['txtpregunta']);
	$resp1=utf8_decode($_POST['txtresp1']);
	$resp2=utf8_decode($_POST['txtresp2']);
	$resp3=utf8_decode($_POST['txtresp3']);
	*/
	$respCorrecta=$_POST['txtcorrecta'];
	$id_preg=$_GET['selpregm'];
	$modulo=$_GET['opModuloSel'];
	include "conexion.php";
	//mysql_select_db("anmeceval");
	//$conexion->select_db("anmeceval");
	echo "<br>".$id_preg." modulo:".$modulo;
	$consulta="UPDATE pregunta SET desc_pregunta='$pregunta', resp1='$resp1', resp2='$resp2', resp3='$resp3', resp_correcta=$respCorrecta where id_pregunta=$id_preg and cve_mod='$modulo'";
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
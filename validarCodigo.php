<?php
	$Varcodigo=$_POST['campoCodigo'];
	//conectar a la base de datos
	//$conexion=mysqli_connect("localhost", "root", "usbw","anmecexamen");
	include "conexion.php";
	$consulta="SELECT * FROM codigo WHERE  codigo='$Varcodigo'";
	$resultado=mysqli_query($conexion, $consulta);
	$filas = mysqli_num_rows($resultado);
	if ($filas>0){
		header('Location: login.php');
	}
	if ($filas==0) {
		$consulta="SELECT * FROM admincodesecure WHERE  codigo='$Varcodigo'";
		$resultado=mysqli_query($conexion, $consulta);
		$filas = mysqli_num_rows($resultado);
		if ($filas>0){
			header('Location: inicio.php');
		}
		else{
			//include ("popupMsj.php");
	 		header('Location: iindex.php');
		}
	}

mysqli_free_result($resultado);
mysqli_close($conexion);

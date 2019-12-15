<?php
error_reporting(0);
$nomadmin=$_POST['nomadmin'];
$usuario=$_POST['usuario'];
$telusuario=$_POST['telusuario'];
$clave=$_POST['clave'];

$nomadmin=utf8_decode($nomadmin);
$usuario=utf8_decode($usuario);
$clave=utf8_decode($clave);
//conectar a la base de datos
include("conexion.php");
$consulta="INSERT INTO usuarios (nombre_adm,correo_adm,telefono_adm,pass_adm) VALUES('$nomadmin','$usuario','$telusuario','$clave')";
if (mysqli_query($conexion, $consulta)) 
{
	mysqli_close();
	header('Location: inicio.php');
	echo "<script>alert('Administrador registrado. Ya puedes iniciar sesión :)');</script>";
}
else{
	echo "<script>alert('Error en el registro');</script>";
	mysqli_close();
	echo "<a href='registro.php'>Volver a registrar</a>";
	//header("Location:".$_SERVER['HTTP_REFERER']);
}

?>
<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conectar a la base de datos
//$conexion=mysqli_connect('localhost', 'root', 'usbw', 'anmecexamen');
include "conexion.php";
$consulta="SELECT * FROM adms WHERE  correo_adm='$usuario' and pass_adm='$clave'";
$resultado=mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if ($filas>0){
	session_start();
	$_SESSION['usuario']=$usuario;
	header('Location: bienvenido.php');
}

else{
	//echo "Error en la autentificacion";
	include("popupMsj.php");
	//include("inicio.php");
}
mysqli_close($conexion);
?>
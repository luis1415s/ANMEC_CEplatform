<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
//conectar a la base de datos
include "conexion.php";
$consulta="SELECT correo_user, pass_user FROM usuario WHERE  correo_user='$usuario' and pass_user='$clave'";
$resultado=mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if ($filas>0){
	session_start();
	$_SESSION['usuario']= $usuario;
	header('Location: userhome.php');
}

else{
	echo "Usuario Incorrecto";
}

mysqli_free_result($resultado);
mysqli_close($conexion);


<?php

$usuario2=$_POST['usuario2'];
$clave2=$_POST['clave'];
//conectar a la base de datos
include "conexion.php";
$consulta="SELECT correo_user, pass_user FROM usuario WHERE  correo_user='$usuario2' and pass_user='$clave2'";
$resultado=mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if ($filas>0){
	session_start();
	$_SESSION['usuarioex']= $usuario2;
	header('Location: userhome.php');
}

else{
	echo "Usuario Incorrecto";
}

mysqli_free_result($resultado);
mysqli_close($conexion);


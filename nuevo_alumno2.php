<?php
	
	NuevoAlumno($_POST['nombre_user'], $_POST['apellido_user'], $_POST['correo_user'], $_POST['pass_user']);

	function NuevoAlumno($nombre_usuario, $apellido_usuario, $correo_usuario, $pass_usuario)
	{
		include 'conexion.php';
		echo $sentencia="INSERT INTO usuario (nombre_user, apellido_user, correo_user, pass_user) VALUES ('".$nombre_usuario."', '".$apellido_usuario."', '".$correo_usuario."', '".$pass_usuario."')";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Alumno registrado exitosamente");
	window.location.href='alumno.php';
</script>
<?php
	
	ModificarAlumno($_POST['id_user'],$_POST['nombre_user'], $_POST['apellido_user'], $_POST['correo_user'], $_POST['pass_user']);

	function ModificarAlumno($id_usuario,$nombre_usuario, $apellido_usuario, $correo_usuario, $pass_usuario)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE usuario SET nombre_user='".$nombre_usuario."', apellido_user='".$apellido_usuario."', correo_user='".$correo_usuario."', pass_user='".$pass_usuario."' WHERE id_user='".$id_usuario."'";
		$conexion->query($sentencia) or die ("Error al actualizar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Alumno Actualizado exitosamente");
	window.location.href='gestusuarios.php';
</script>
<?php
	

	EliminarAlumno($_GET['no']);

	function EliminarAlumno($id_usuario)
	{
		include "conexion.php";
		$sentencia="DELETE FROM usuario WHERE id_user='".$id_usuario."' ";
		$conexion-> query($sentencia) or die ("Error al eliminar alumno".mysql_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Alumno Eliminado exitosamente");
	window.location.href='index.php';
</script>
<?php
  
  $consulta=ConsultarAlumno($_GET['no']);

  function ConsultarAlumno($id_usuario)
  {
    include 'conexion.php';
    $sentencia="SELECT * FROM usuario WHERE id_user='".$id_usuario."' ";
    $resultado=$conexion-> query($sentencia) or die ("Error al consultar alumno".mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();

    return [
      $fila['id_user'],
      $fila['nombre_user'],
      $fila['apellido_user'],
      $fila['correo_user'],
      $fila['pass_user']
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss_alu.css");
</style>
<link href="css/bootstrap_alu.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="img/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Alumno</h1> </span>
  		<br>
	  <form action="modif_alumno2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no" value="<?php echo $_GET['no']?> ">

  		<label>Id: </label>
  		<input type="text" id="id_user" name="id_user" readonly="readonly"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Nombre: </label>
  		<input type="text" id="nombre_user" name="nombre_user" value="<?php echo $consulta[1] ?>"><br>
      
      <label>Apellido: </label>
      <input type="text" id="apellido_user" name="apellido_user" value="<?php echo $consulta[2] ?>"><br>
      
      <label>Correo: </label>
      <input type="text" id="correo_user" name="correo_user" value="<?php echo $consulta[3] ?>"><br>
      
      <label>Contraseña: </label>
      <input type="text" id="pass_user" name="pass_user" value="<?php echo $consulta[4] ?>"><br>
  		
  		<br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div> 

</body>
</html>
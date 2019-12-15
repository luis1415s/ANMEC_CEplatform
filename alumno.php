<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Alumno</title>
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
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 15px 5px;">
  		<thead>
  			<th>ID</th>
  			<th>Nombre</th>
  			<th>Apellido</th>
        <th>Correo</th>
  			<th>Contraseña</th>
  			<th> <a href="nuevo_alumno1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  	<?php
      //include "conexion.php";
      $sentencia="SELECT * from usuario";
      $resultado=$conexion->query($sentencia) or die (mysqlierror($conexion));
      while($filas=$resultado->fetch_assoc())
      {
      	echo "<tr>";   
			echo "<td>"; echo $filas['id_user']; echo "</td>";
			echo "<td>"; echo $filas['nombre_user']; echo "</td>";
			echo "<td>"; echo $filas['apellido_user']; echo "</td>";
			echo "<td>"; echo $filas['correo_user']; echo "</td>";
			echo "<td>"; echo $filas['pass_user']; echo "</td>";

			echo "<td>  <a href='modif_alumno1.php?no=".$filas['id_user']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";

            echo "<td> <a href='eliminar_alumno.php?no=".$filas['id_user']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
  		echo "</tr>";
      }

      ?>
  	</table>
  </div>
</div>
</body>
</html>
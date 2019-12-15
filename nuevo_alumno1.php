<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
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
  		<span> <h1>Alta de Alumno</h1> </span>
  		<br>
	  <form action="nuevo_alumno2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      
      <label>Id:   </label>
      <input type="text" id="id_user" name="id_user"readonly="readonly" placeholder="Campo automatico"><br>

  		<label>Nombre:   </label>
  		<input type="text" id="nombre_user" name="nombre_user"><br>
  		
  		<label>Apellido: </label>
  		<input type="text" id="apellido_user" name="apellido_user" ><br>

      <label>Correo:  </label>
      <input type="text" id="correo_user" name="correo_user"><br>
      
      <label>Contraseña: </label>
      <input type="text" id="pass_user" name="pass_user" ><br>
  		
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="img/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>
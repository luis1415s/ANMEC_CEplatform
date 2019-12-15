<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

	if($varsesion ==  null || $varsesion= ''){
		echo 'Debes de iniciar sesion para poder ingresar';
		die();
	}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ANMEC -- EXAMEN</title>
  <!-- Icono de la pagina -->
  <link rel="icon" type="image/png" href="img/icons/icono.png"/>
  
  <!-- Diseño  Bootstrap -->
  <link href="css/creative.examen.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/popup.css">
</head>

<body id="page-top">
  
    <div class="container h-70">
      <h5 align="right"> Usuario: <?php echo $_SESSION['usuario'] ?> </h5>
      <h4 align="center" class="text-uppercase text-black">Responde correctamente las siguientes preguntas</h4>   
      <img src="img/SAP_Logo2.png"/> 
      <div class="row h-100 align-items-center justify-content-center text-center">
      <div>
         <?php
           include ("mostrar.php");
         ?>        
          <br>
        </div>
      </div>

      <p align="center">
       <button type='button' class='btn btn-success'>Terminar examen</button> </a>
       <button type='button' class='btn btn-danger'>Abandonar examen</button></a>
    </div>
</body>
</html>

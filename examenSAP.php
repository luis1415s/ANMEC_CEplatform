<?php
session_start();
error_reporting(0);
$varsesion2 = $_SESSION['usuarioex'];

	if($varsesion2 ==  null || $varsesion2= ''){
    echo 'Debes de iniciar sesion para poder ingresar';
    header('Location: login.php');
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
<style>
  #im1{
    display: inline-block;
  }
</style>
<body id="page-top">
<br>
    <div class="container h-70">
      <div style="width:100%; height:70%;">
        <img src="img/SAP_Logo2.png" id="im1" align="left"/>
        <img src="imagenes/anmec_logo.png" width="8%" id="im2" align="right"/>
      </div>
      <h3 align="center" class="text-uppercase text-black">Examen de Certificación.</h3>
      <h6 align="center" class="text text-black">Responde correctamente a las siguientes preguntas.</h6>
      <br><br>
      <h5 align="right"> Usuario: <?php echo $_SESSION['usuarioex'] ?> </h5>
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

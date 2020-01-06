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
      <h3 align="center" class="text-uppercase text-black"><b>Examen de Certificación.</b></h3>
      <br>
      <h4 align="center"><b>Alumno: </b><?php echo $_SESSION['usuarioex'] ?> </h4>
      <br><br>
      <h5 align="center" class="text-black" style="padding-bottom: 20px; padding-top: 20px;  border-bottom: 5px solid #2351A9; border-top: 5px solid #2351A9;">Responde de forma correcta la siguiente evaluación. Al terminar, presiona el botón; "Finalizar examen" para guardar y enviar tus respuestas a nuestro sistema.</h5>
    </div>
    <div class="align-items-center justify-content-center text-center" style="border-top: 0px solid #2351A9;">
      <?php
        include ("mostrar.php");
      ?>        
      <br>
    </div>
</body>
</html>

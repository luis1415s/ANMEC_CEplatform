<?php
	session_start();
    error_reporting(0);
    $varsesion2 = $_SESSION['usuarioex'];
	if($varsesion2 ==  null || $varsesion2= ''){
		echo "Usted no tiene autorizacion";
		//echo "<script>alert('Estás siendo redirigido al inicio.');</script>";
		die();
		//header("Location:index.php");
	}
	unset($_SESSION["usuarioex"]); 
    header("Location:index.php");
    //echo $varsesion2;
	?>
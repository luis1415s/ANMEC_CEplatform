<?php
	$conexion=mysqli_connect("localhost", "root", "", "anmeceval");
	if (mysqli_connect_errno()) {
		print("Fallo la conexion");
	}
	else{

		print(".");
	}
?>

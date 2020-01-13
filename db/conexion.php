<?php
	$conexion=mysqli_connect("localhost", "", "", "anmeceval");
	if (mysqli_connect_errno()) {
		print("Fallo la conexion");
	}
	else{
		print("Estas conectado");
	}
?>
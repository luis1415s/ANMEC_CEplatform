<?php
	$conexion=mysqli_connect("localhost","admin5","5ZLvW*k&WZ[M","anmeceval");
	if (mysqli_connect_errno()) {
		print("Fallo la conexion");
	}
	else{
		print("Estas conectado");
	}
?>
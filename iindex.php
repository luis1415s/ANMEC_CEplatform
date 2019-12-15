<?php
	include("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Error de inicio de sesión</title>
	<link rel="stylesheet" href="css/popup.css">
</head>
<body>
	<div id="popup" class="overlay">
		<br><br>
   		<div id="popupBody">
       		<a id="cerrar" href="index.php">&times;</a>
       		<br><br>
       		<div class="popupContent">
          		<?php 
          		include ("codigo.php");
          		 ?>
       		</div>
   		</div>
	</div>
</body>
<script>
	div1=document.getElementById('popup');
	div1.style.visibility='visible';
	div1.style.opacity='1';
</script>
</html>
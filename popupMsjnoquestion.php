<!--<?php
	//include("inicio.php");
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sin preguntas al cargar</title>
	<link rel="stylesheet" href="css/popup.css">
</head>
<body>
	<div id="popup" class="overlay">
   		<div id="popupBody">
       		<h1>Existe un error!</h1>
       		<a id="cerrar" href="javascript:history.go(-1)">&times;</a>
       		<div class="popupContent">
          		<p>El módulo seleccionado no contiene preguntas ahora.</p>
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
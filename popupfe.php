<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Examen finalizado.</title>
	<link rel="stylesheet" href="css/popup.css">
</head>
<body>
	<div id="popup" class="overlay">
   		<div id="popupBody">
       		<h2>HAZ CONCLUIDO TU EXAMEN.</h2>
       		<a id="cerrar" href="index.php">&times;</a>
       		<div class="popupContent">
          		<p>Tus respuestas han sido registradas, de parte del equipo de ANMEC; te deseamos éxito.</p>
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
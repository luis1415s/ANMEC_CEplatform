<?php
	include "conex.php";
	$consulta="SELECT id_pregunta, desc_pregunta, resp1, resp2, resp3, resp_correcta FROM pregunta ORDER BY id_pregunta";
	$resultado= mysqli_query($conexion,$consulta);
	$c=0;
?>
<form action="evalExsap.php" method="post">
	<?php
	if ($resultado) {
		
		while ($row = $resultado-> fetch_array())
		{
			$c=$c+1;
			$idp=$row['id_pregunta'];
			$pregunta =$row['desc_pregunta'];
			$r1 =$row['resp1'];
			$r2 =$row['resp2'];
			$r3 =$row['resp3'];
	?>
	<div id="<?php echo $c;?>">
		<h4><font color="#101D45"><?php echo $c.". ".$pregunta;?></font></h4>
		<div>
			<input type="radio" name="<?php echo $idp?>" value="resp1" required /><?php echo $r1?>
			<br>
			<input type="radio" name="<?php echo $idp?>" value="resp2"/><?php echo $r2?>
			<br>
			<input type="radio" name="<?php echo $idp?>" value="resp3"/><?php echo $r3?>
			<!--<span><//?php echo $r2  ?></span><p>-->
		</div>
		<br>
	</div>
	<?php
		}
	}
	?>
	<br>
	<br>
	<button type='submit' class='btn btn-success'>Finalizar examen</button> </a>
    <a href="cerrar_sesion_ex.php"><button type='button' class='btn btn-danger'>Abandonar examen</button></a>
	<input type="text" name="cont" id="contid" style="display: none;" value="<?php echo $c?>">
</form>
	<br>
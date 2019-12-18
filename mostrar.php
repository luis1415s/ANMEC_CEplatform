<?php

	 include "conex.php";

	$consulta="SELECT desc_pregunta, resp1, resp2, resp3, resp_correcta FROM pregunta";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		$c=0;
		while ($row = $resultado-> fetch_array()) {
			$c=$c+1;
			$pregunta =$row['desc_pregunta'];
			$r1 =$row['resp1'];
			$r2 =$row['resp2'];
			$r3 =$row['resp3'];
			?>

	<div id="<?php echo $c;?>">
		<h3> <?php echo $c.".-".$pregunta;?> </h3>
		<div>
			<p>
				<label>
			    	<input type="radio" name="<?php echo "options".$c ?>"  required />
			    	<span class="radio"></span>
			    	<span><?php echo $r1  ?></span><p>
		  		</label>

				<label>
				    <input type="radio" name="<?php echo "options".$c ?>" />
				    <span class="radio"></span>
				    <span><?php echo $r2  ?></span><p>
		  		</label>

				<label>
				    <input type="radio" name="<?php echo "options".$c ?>" />
				    <span class="radio"></span>
				    <span><?php echo $r3  ?></span><p>
		  		</label>
			</p>

		</div>
	</div>
			<?php
		}
	}
?>
	<br>
	<br>

	
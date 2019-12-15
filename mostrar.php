<?php

	 include "conex.php";

	$consulta="SELECT desc_pregunta, resp1, resp2, resp3, resp_correcta FROM pregunta";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		
		while ($row = $resultado-> fetch_array()) {
			$pregunta =$row['desc_pregunta'];
			$r1 =$row['resp1'];
			$r2 =$row['resp2'];
			$r3 =$row['resp3'];
			?>

	<div>
		<h3> <?php echo $pregunta;?> </h3>
		<div>
			<p>
				<label>
			    	<input type="radio" name="options"  required />
			    	<span class="radio"></span>
			    	<span><?php echo $r1  ?></span><p>
		  		</label>

				<label>
				    <input type="radio" name="options" />
				    <span class="radio"></span>
				    <span><?php echo $r2  ?></span><p>
		  		</label>

				<label>
				    <input type="radio" name="options" />
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

	
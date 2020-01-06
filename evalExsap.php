<?php
    include "conex.php";
	$consulta="SELECT id_pregunta, desc_pregunta, resp1, resp2, resp3, resp_correcta FROM pregunta";
    $resultado= mysqli_query($conexion,$consulta);
    if ($resultado) {
		$c=0;
		while ($row = $resultado-> fetch_array())
		{
			$c=$c+1;
			$idp=$row['id_pregunta'];
			$pregunta =$row['desc_pregunta'];
			$r1 =$row['resp1'];
			$r2 =$row['resp2'];
            $r3 =$row['resp3'];
        }}
    //$r1=$_POST['']
?>
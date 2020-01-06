<?php
    include "conex.php";
    $cont=$_POST['cont'];
	$consulta="SELECT id_pregunta, desc_pregunta, resp1, resp2, resp3, resp_correcta FROM pregunta";
    $resultado= mysqli_query($conexion,$consulta);
    $puntaje=0;
    $c=0;
    if ($resultado) {
		while ($row = $resultado-> fetch_array())
		{
            $c=$c+1;
			$idp=$row['id_pregunta'];
			//$pregunta =$row['desc_pregunta'];
			//$r1 =$row['resp1'];
			//$r2 =$row['resp2'];
            //$r3 =$row['resp3'];
            $rc =$row['resp_correcta'];
            $resp_preg=$_POST[$c];
            if($resp_preg=="resp1")
            {
                $resp_preg=1;
                if($resp_preg==$rc)
                {
                    $puntaje=$puntaje+1;
                }
            }
            else if($resp_preg=="resp2")
            {
                $resp_preg=2;
                if($resp_preg==$rc)
                {
                    $puntaje=$puntaje+1;
                }
            }
            else if($resp_preg=="resp3")
            {
                $resp_preg=3;
                if($resp_preg==$rc)
                {
                    $puntaje=$puntaje+1;
                }
            }
        }
    }
    //$cons_promIn="INSERT INTO 
?>
<h2>Total de aciertos: <?php echo $puntaje?> de <?php echo $c?></h2>
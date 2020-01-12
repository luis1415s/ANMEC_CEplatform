<?php
    include "conex.php";
    session_start();
    $varsesion2 = $_SESSION['usuarioex'];
    $cont=$_POST['cont'];
	$consulta="SELECT id_pregunta, desc_pregunta, resp1, resp2, resp3, resp_correcta FROM pregunta ORDER BY id_pregunta";
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
            $resp_preg=$_POST[$idp];
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
    $promedio=($puntaje*10)/$c;
    $promedio=number_format($promedio, 2, '.', '');
    //$consulta="SELECT id_user from usuario where correo_user=$";
    //$idusex=mysqli_query($conexion,$consulta);
    $conspromIn="UPDATE usuario SET aciertos=$puntaje, promedio='$promedio', flag=1 where correo_user='$varsesion2'";
    //<?php /*echo $puntaje de <?php echo $c. Promedio: <?php echo $promedio
    //echo "Valor de varsesion2:".$varsesion2;
    if (mysqli_query($conexion,$conspromIn))
    {
        include ("finalex.php");
    }
?>
<!--<h2>Total de aciertos:</h2>-->
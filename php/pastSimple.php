<?php
    require('conexion.php');

    $randomNumber = mt_rand(1, 51);
    
    //RANDOM
    if($randomNumber%2 == 0){
        $consulta = 'SELECT INFINITIVE FROM verbos WHERE ID ='.$randomNumber;
    } else {
        $consulta = 'SELECT PASTPARTICIPLE FROM verbos WHERE ID ='.$randomNumber;
    }
    $resultados = mysqli_query($conexion, $consulta);
    $verbo = mysqli_fetch_row($resultados);
    $verbo = strtoupper($verbo[0]);

    //CORRECTO
    $consulta = 'SELECT PASTSIMPLE FROM verbos WHERE ID ='.$randomNumber;
    $resultados = mysqli_query($conexion, $consulta);
    $correcto = mysqli_fetch_row($resultados);
    $correcto = strtoupper($correcto[0]);

    //OPCION1
    $consulta = 'SELECT OP1 FROM trampa WHERE ID ='.$randomNumber;
    $resultados = mysqli_query($conexion, $consulta);
    $opcion1 = mysqli_fetch_row($resultados);
    $opcion1 = strtoupper($opcion1[0]);

    //OPCION 2
    $consulta = 'SELECT OP2 FROM trampa WHERE ID ='.$randomNumber;
    $resultados = mysqli_query($conexion, $consulta);
    $opcion2 = mysqli_fetch_row($resultados);
    $opcion2 = strtoupper($opcion2[0]);

    echo $verbo.'/:/'.$correcto.'/:/'.$opcion1.'/:/'.$opcion2;
?>
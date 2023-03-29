<?php
    session_start();
    include ("databaseconnection.php");
    $connection=conectar();

    $opc=strtolower($_REQUEST['opc']);
    
    if($opc="insert"){

     $consulta=mysqli_query($connection,"SELECT nombre FROM producto Where idProdcuto = '$opc'; ");
     $cantidad_resultados=mysqli_num_rows(consulta);
     return $cantidad_resultados;
        
    }

    if($opc="drop"){

    }


?>
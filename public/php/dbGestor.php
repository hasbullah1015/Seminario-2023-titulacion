<?php
    session_start();
    include ("databaseconnection.php");
    $connection=conectar();

    $opc=strtolower($_REQUEST['opc']);
    
    if($opc="insert"){

     $sqlquery=mysqli_query($connection,"SELECT * FROM producto WHERE nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' LIMIT $desde,$por_pagina");
     $consulta=mysqli_query($connection,"SELECT nombre FROM producto Where idProdcuto = '$opc'; ");
     $cantidad_resultados=mysqli_num_rows(consulta);
    return result;
        
    }

    if($opc="drop"){

    }


?>
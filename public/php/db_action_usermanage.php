<?php

$opc=strtolower($_REQUEST['opc']);
$id=strtoupper($_REQUEST['id']);


    if($opc =="insert"){
        $sqlquery_consulta=mysqli_query($connection,"SELECT idUser FROM administracion WHERE idUser = '$id'");
        if(mysqli_num_rows($sqlquery_consulta)>0)
        {
            echo 'Ya existe un usuario con ese ID, favor de ingresar uno nuevo';
        }


    }



?>
<?php

$opc=strtolower($_REQUEST['opc']);
$id=strtoupper($_REQUEST['id']);


if($opc){

    if($opc =="insert"){
        $sqlquery_consulta=mysqli_query($connection,"SELECT id FROM usuarios WHERE id = '$id'");
        if(mysqli_num_rows(sqlquery_consulta)>0)
        {
            echo 'Ya existe un usuario con ese ID, favor de ingresar uno nuevo';
        }


    }


}


?>
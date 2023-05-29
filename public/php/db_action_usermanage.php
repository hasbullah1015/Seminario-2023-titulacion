<?php

$opc=strtolower($_REQUEST['opc']);
$id=strtoupper($_REQUEST['id']);


    if($opc =="insert"){
        $user=strtoupper($_REQUEST['user']);
        $sqlquery_consulta=mysqli_query($connection,"SELECT idUser FROM administracion WHERE idUser = '$id'");
        if(mysqli_num_rows($sqlquery_consulta)>0)
        {
            echo 'Ya existe un usuario con ese ID, favor de ingresar uno nuevo';
        }
        else {
            $sqlquery_consulta=mysqli_query($connection,"INSERT INTO administracion (idUser, usr, pass, rol) values ('$id', '$user', '$pswd', '$rol')");


        }


    }



?>
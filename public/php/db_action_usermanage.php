<?php

$opc=strtolower($_REQUEST['opc']);
$id=strtoupper($_REQUEST['id']);
$user=strtoupper($_REQUEST['user']);
$_rol=strtoupper($_REQUEST['rol']);
$pswd = $_REQUEST['pswd'];


if($opc && $id && $user && $_rol  && $pswd){
        $sqlquery_consulta=mysqli_query($connection,"SELECT idUser FROM administracion WHERE idUser = '$id'");
        if(mysqli_num_rows($sqlquery_consulta)>0)
        {
            echo 'Ya existe un usuario con ese ID, favor de ingresar uno nuevo';
        }
        else {
            $sqlquery_consulta=mysqli_query($connection,"INSERT INTO administracion (idUser, usr, pass, rol) values ('$id', '$user', '$pswd', '$_rol')");

            echo 'Usuario agregado correctamente';
        }
}

if($opc && $id){

}

else
    echo 'Ingresa los datos solicitados para la gestión de usuarios';


?>
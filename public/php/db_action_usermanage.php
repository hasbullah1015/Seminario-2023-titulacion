<?php

$opc=strtolower($_REQUEST['opc']);
$id=strtoupper($_REQUEST['id']);
$user=strtoupper($_REQUEST['user']);
$_rol=strtoupper($_REQUEST['rol']);
$pswd = $_REQUEST['pswd'];

if($opc=='insert' && $id && $user && $_rol  && $pswd){
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

if($opc=="drop" && $id){
    $sqlquery_consulta=mysqli_query($connection,"SELECT idUser FROM administracion WHERE idUser = '$id'");
    if(mysqli_num_rows($sqlquery_consulta)>0)
    {
        $sqlquery_consulta=mysqli_query($connection,"DELETE FROM administracion WHERE  idUser ='$id'");
        echo 'Usuario Eliminado correctamente';
    }
    else {
        echo 'No existe un usuario con ese ID, ingrese nuevamente';
    }
}

if($opc=="pswd" && $id && $pswd){
    $sqlquery_consulta=mysqli_query($connection,"SELECT idUser FROM administracion WHERE idUser = '$id'");
    if(mysqli_num_rows($sqlquery_consulta)>0)
    {
        $sqlquery_consulta=mysqli_query($connection,"UPDATE administracion SET pass='$pswd'  WHERE  idUser ='$id'");
        echo 'Contraseña actualizada correctamente ';
    }
    else {
        echo 'No existe un usuario con ese ID, ingrese nuevamente';
    }
}



?>
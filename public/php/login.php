<?php
    include("databaseconnection.php");
    $connection=conectar();
    $user = $_POST['user'];
    $pswd = $_POST['password'];
    
    $sqlquery =mysqli_query($connection,"SELECT * FROM  administracion WHERE usr = '$user' AND pass ='$pswd'"); //realizar la validación en la db mediante la conexioón
   

    if($sqlquery->num_rows > 0){ //se realizá la validación (si hay al menos un usuario)
        session_start(); //crear inicio de sesion
        $_SESSION['username']=$user; //se guarda el usuario en la variable de tipo sesion 
        while($datos = $sqlquery -> fetch_array()){ // obtenermos las variables id y rol del usuario logeado
            $_SESSION['id']=$datos['idUser'];
            $_SESSION['rol']=$datos['rol'];
        }
        header('Location: https://seminario2023.website/public/php/index_panel.php');

    }
    else{
        header('https://seminario2023.website');

    }
    mysqli_close($connection);
?>
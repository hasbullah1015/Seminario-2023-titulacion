<?php
    session_start(); //crear inicio de sesion
    include("databaseconnection.php");
    $connection=conectar();
    $user = $_POST['user'];
    $pswd = $_POST['password'];
    
    $sqlquery =mysqli_query($connection,"SELECT * FROM  administracion WHERE usr = '$user' AND pass ='$pswd'"); //realizar la validación en la db mediante la conexioón
    if($sqlquery->num_rows > 0){ //se realizá la validación (si hay al menos un usuario)
        $_SESSION['username']=$user; //se guarda el usuario en la variable de tipo sesion 
        while($datos = $sqlquery -> fetch_array()){
            $_SESSION['id']=$datos['idUser'];
            $_SESSION['rol']=$datos['rol'];
        }
        header('Location: https://seminario2023.website/public/php/index_panel.php');

    }
    else{
        header('https://seminario2023.website/index.php');
?>
        <h1>Error en la sesión</h1>
<?php
    }

   // mysqli_close($connection);

?>
<?php
    include("databaseconnection.php");
    $connection=conectar();
    
    $user = $_POST['user'];
    $pswd = $_POST['password'];
    $sqlquery =mysqli_query($connection,"SELECT * FROM  administracion WHERE usr = '$user' AND pass ='$pswd'");
    if($sqlquery->num_rows > 0){
        header('Location: https://seminario2023.website/public/html/index_panel.html');

    }
    else{
        header('https://seminario2023.website/index.php');
    }

    mysqli_close($connection);

?>
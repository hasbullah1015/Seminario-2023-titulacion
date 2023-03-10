<?php

    $dbhost = "127.0.0.1";
    $dbuser = "u614989997_admindb";
    $dbpswd = "6TUH72toIDh5RpVGBi";
    $dbname = "u614989997_db_inventario";

    $connection= mysqli_connect($dbhost,$dbuser,$dbpswd,$dbname);
    if(!$connection){

        die("no se logro hacer la conexión con la db admin: ".mysqli_error());
    }


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
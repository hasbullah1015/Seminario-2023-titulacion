<?php
    include("databaseconnection.php");
    $connection=conectar();
    

    $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto");
    $valores = array();
    
    while ($data = mysqli_fetch_assoc($sqlquery_registros_gral)){
        $valores[]=$data;
    }
    echo json_encode($valores);


?>
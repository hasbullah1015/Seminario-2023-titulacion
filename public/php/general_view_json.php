<?php
    include("databaseconnection.php");
    $connection=conectar();

    if(strtolower($_REQUEST['enviar'])=='general'){
        $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto");
        $valores = array();
        
        while ($data = mysqli_fetch_assoc($sqlquery_registros_gral)){
            $valores[]=$data;
        }
        json_encode($valores);

    }




?>
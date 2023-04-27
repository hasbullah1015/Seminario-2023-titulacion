<?php
        include("databaseconnection.php");
        $connection=conectar();



        if(strtolower($_REQUEST['enviar'])=='general'){
            $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto ");
            $datos = mysqli_fetch_all($sqlquery_registros_gral,MYSQL_ASSOC);
            echo json_encode($datos);
        }

        if(strtolower($_REQUEST['enviar'])=='critical'){
            $sqlquery_registros_crtcl =mysqli_query($connection,"SELECT * FROM producto  WHERE cantidad BETWEEN 0 AND 10 ORDER BY cantidad ASC");
            $datos = mysqli_fetch_all($sqlquery_registros_crtcl,MYSQL_ASSOC);
            echo json_encode($datos);
        }
    



?>
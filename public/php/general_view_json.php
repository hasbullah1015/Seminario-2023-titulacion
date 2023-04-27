<?php
        include("databaseconnection.php");
        $connection=conectar();



        if(strtolower($_REQUEST['enviar'])=='general'){
            $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto ");
            $cantidad_registros=mysqli_num_rows($sqlquery_registros_gral);
            if($cantidad_registros>0)
            {
                while($datos = $sqlquery_registros_gral ->fetch_array(MYSQLI_ASSOC)){
                    json_encode($datos);
                }

            }
        }

        if(strtolower($_REQUEST['enviar'])=='critical'){
            $sqlquery_registros_crtcl =mysqli_query($connection,"SELECT * FROM producto  WHERE cantidad BETWEEN 0 AND 10 ORDER BY cantidad ASC");
            $cantidad_registros=mysqli_num_rows($sqlquery_registros_crtcl);
            if($cantidad_registros>0)
            {
                while($datos = $sqlquery_registros_crtcl ->fetch_array(MYSQLI_ASSOC)){
                    json_encode($datos);
                }

            }
        }
    



?>
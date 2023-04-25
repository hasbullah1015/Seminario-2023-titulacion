<?php
        include("databaseconnection.php");
        $connection=conectar();



        if(strtolower($_REQUEST['enviar'])=='general'){
            echo 'hola locoooo';
            $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto ");
            $cantidad_registros=mysqli_num_rows($sqlquery_registros_gral);
            if($cantidad_registros>0)
            {
                $datos = $sqlquery_registros_gral ->fetch_array(MYSQLI_ASSOC);
            }

        }

        if(strtolower($_REQUEST['enviar'])=='critical'){
            echo 'adio locoooo';
        }
        while ($datos){
        echo json_encode($datos);
        }

       // else echo 'adios loco xd';        


?>
<?php
        include("databaseconnection.php");
        $connection=conectar();

        if(empty($busqueda)){
            header('https://seminario2023.website/public/php/inventario.php');
        }

        if(strtolower($_REQUEST['enviar'])){
            echo 'hola locoooo';
        }

        else echo 'adios loco xd';        


?>
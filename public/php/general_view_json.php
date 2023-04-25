<?php
        include("databaseconnection.php");
        $connection=conectar();

        if(empty($busqueda)){
            header('https://seminario2023.website/public/php/inventario.php');
        }

        if(strtolower($_REQUEST['enviar'])=='general'){
            echo 'hola locoooo';
        }

        if(strtolower($_REQUEST['enviar'])=='critical'){
            echo 'adio locoooo';
        }

       // else echo 'adios loco xd';        


?>
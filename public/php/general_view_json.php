<?php
    include("databaseconnection.php");
    $connection=conectar();
    $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto");

        



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventario</title>
</head>

<body>
    <?php
        echo 'gg';
        include("databaseconnection.php");
        $connection=conectar();
        $sqlquery =mysqli_query($connection,"SELECT * FROM producto WHERE categoria='lacteo'");
        if($connection){
            while($datos = $sqlquery ->fetch_array(MYSQLI_ASSOC)) {
                echo $datos['nombre'];
                echo $datos['cantidad'];
            }
        }
    ?>

    <?php 
            mysqli_close($connection);
    ?>
</body>
</html>
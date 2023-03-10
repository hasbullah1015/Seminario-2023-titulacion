<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventario</title>
</head>
<body>
    hola
    <?php
        $connection= mysqli_connect("127.0.0.1","u614989997_admindb","6TUH72toIDh5RpVGBi","u614989997_db_inventario");
        $sqlquery =mysqli_query($connection,"SELECT * FROM producto WHERE categoria='lacteo'");
        if($connection){
            while($datos = $sqlquery ->fetch_array(MYSQLI_ASSOC)) {
                echo $datos['nombre'];
                echo $datos['cantidad'];
            }

        }

    ?>

</body>
</html>
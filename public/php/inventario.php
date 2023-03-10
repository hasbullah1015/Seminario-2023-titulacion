<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/public/css/inventario.css" type="text/css"> 
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="box col-12">
                hola
            </div>
        </div>
    </div>


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
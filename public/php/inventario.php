<?php
        include("databaseconnection.php");
        $connection=conectar();
?>
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
            <h1>Inventario: </h1> <hr id="div-line">
            <div class="row">
                <form method="post">
                    <input type="text" placeholder="busqueda" name="busqueda"> <!-- id, producto, marca--> 
                    <input type="submit" name="enviar" value="buscar">
                </form>
            </div>
            
            <?php 
                $busqueda="";
                if(isset($_POST['enviar'])){
                    $busqueda = $POST['busqueda'];
                    echo 'hola';
                    $sqlquery =mysqli_query($connection,"SELECT * FROM producto WHERE categoria LIKE '%".$busqueda."%' OR idProducto LIKE '%".$busqueda."%' OR nombre LIKE '%".$busqueda."%'");

                }

            ?>

            <div class="table-responsive">
                <table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">categoria</th>
                    <th scope="col">cantidad</th>
                </tr>

                <?php
                    if($connection){
                        while($datos = $sqlquery ->fetch_array(MYSQLI_ASSOC)) {
                ?>
                        <tr>
                            <td><?php echo $datos['idProducto'];  ?></td>
                            <td><?php echo $datos['nombre'];  ?></td>
                            <td><?php echo $datos['categoria'];  ?></td>
                            <td><?php echo $datos['cantidad'];  ?></td>
                        </tr>
                <?php
                        }
                    }  
                    mysqli_close($connection);
                ?>


                </table>
            </div>
        </div>
    </div>
    <br>

</body>
</html>
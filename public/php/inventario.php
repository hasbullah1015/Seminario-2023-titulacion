<!--Paginacion php -->
<?php
        include("databaseconnection.php");
        $connection=conectar();

        $por_pagina=1;

        if(isset($_GET['pagina'])){
            $pagina=$_GET['pagina'];
        }
        else{
            $pagina=1;
        }
        $inicio=($pagina-1)*$por_pagina;
        $sqlquery_cantidad_registros =mysqli_query($connection,"SELECT * FROM producto");
        $cantidad_registros=mysqli_num_rows($sqlquery_cantidad_registros);
        $total_paginas = ceil($cantidad_registros/$por_pagina);
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
                <form action="inventario.php" method="get">
                    <input type="text" placeholder="busqueda" name="busqueda"> <!-- id, producto, marca--> 
                    <input type="submit" name="enviar">
                </form>
            </div>
            
            <?php 
                
                if(isset($_GET['busqueda'])){
                    $sqlquery =mysqli_query($connection,"SELECT * FROM producto WHERE nombre LIKE '%".$_GET['busqueda']."%' OR categoria LIKE '%".$_GET['busqueda']."%' LIMIT $inicio,$por_pagina");
                }
                else {
                    $sqlquery =mysqli_query($connection,"SELECT * FROM producto");
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
                    if($connection && $_GET['busqueda']){
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
                    //mysqli_close($connection);
                ?>


                </table>
            </div>
            <div class="col">
                <ul>
                    <li><a href="#"><<</a></li>
                    <?php for($i=1; $i<$total_paginas; $i++){
                        echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                    } ?>

                    <li><a href=">>"><<</a></li>

                </ul>
            </div>
        </div>
    </div>
    <br>

</body>
</html>


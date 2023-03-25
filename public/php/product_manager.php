<?php
        include("databaseconnection.php");
        $connection=conectar();

        if(empty($busqueda)){
            header('https://seminario2023.website/public/php/inventario.php');
        }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/product_manager.css" type="text/css">
    <title>Gestor de producto</title>
    <link rel="stylesheet" href="/public/css/header_style.css" type="text/css">
    <link rel="stylesheet" href="/public/css/footer_style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    

</head>

<body>
    <div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video> </div>
    <header id="encabezado"></header>
    <div class="container">
        <div class="row">
            <h1>Gestor de productos:</h1>
        </div>
        <div class="row">
            <div class="slide col-sm-12 col-md-4">
                <form action="product_manager.php" method="get">
                    <input type="text" id="search_bar" name="busqueda" placeholder="busqueda">
                    <input type="submit" id="sent" name="enviar">
                </form>
                <?php 
                    $busqueda=strtolower($_REQUEST['busqueda']);
                    $sqlquery_busqueda=mysqli_query($connection,"SELECT * FROM producto WHERE idProducto = '%$busqueda%'");
                    $resultado=mysqli_num_rows($sqlquery_busqueda);
                    if($resultado>0){
                        echo 'hola';
                        $dato=$sqlquery_busqueda->fetch_array(MYSQLI_ASSOC);
                    }
                ?>  
            </div>
            <div class="slide col-sm-12 col-md-8" id="data_product">
                    <div class="label">ID</div>
                    <div class="label" id="product_id"><?php echo $datos['idProducto'];?></div>
                    <div class="label">Nombre</div>
                    <div id="product_name" class="label"><?php echo $datos['nombre'];?></div>
            </div>
        </div>

    </div>
    <footer id="pie_pagina" class="mt-auto">
    </footer>
    <script src="/public/js/index.js"></script>
</body>
</html>
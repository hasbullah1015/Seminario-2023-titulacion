<?php 
    session_start();

    if (empty($_SESSION["username"])) {
        header('Location: https://seminario2023.website/index.php');

    }
    else{
        include("databaseconnection.php");
        $connection=conectar();
    }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/public/css/inventario.css" type="text/css">
    <link rel="stylesheet" href="/public/css/header_style.css" type="text/css">
    <link rel="stylesheet" href="/public/css/footer_style.css" type="text/css">

</head>

<body>
<div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video> </div>
    <header id="encabezado">
    </header>
    <div class="container">
        <div class="row">
            <h1>Inventario: </h1> <hr id="div-line" style="margin 0px 5px">
            <div class="row" id="buscador">
                <form action="inventario.php" method="get">
                    <input id="search_bar" type="text" placeholder="busqueda" name="busqueda" value="<?php echo $busqueda; ?>" > <!-- id, producto, marca--> 
                    <input id="sent" type="submit" name="enviar">
                </form>
            </div>
            
            <?php 
                $busqueda=strtolower($_REQUEST['busqueda']);
                $por_pagina=5;
                $sqlquery_registros =mysqli_query($connection,"SELECT * FROM producto WHERE nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' OR marca LIKE '%$busqueda%' ");
                $cantidad_registros=mysqli_num_rows($sqlquery_registros);
                if(empty($_GET['pagina'])){
                    $pagina= 1;

                }
                else {
                        $pagina=$_GET['pagina'];
                }

                $desde =($pagina-1)*$por_pagina;
                $total_paginas=ceil($cantidad_registros/$por_pagina);
                $sqlquery=mysqli_query($connection,"SELECT * FROM producto WHERE nombre LIKE '%$busqueda%' OR categoria LIKE '%$busqueda%' OR marca LIKE '%$busqueda%' LIMIT $desde,$por_pagina");
                $cantidad_resultados=mysqli_num_rows($sqlquery);
                
            ?>
            <br>
            <div  class="slide table-responsive">
                <table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">cantidad</th>
                </tr>
                <?php
                    if($cantidad_resultados>0){
                        while($datos = $sqlquery ->fetch_array(MYSQLI_ASSOC)) {
                ?>
                        <tr class="row_data">
                            <td class="data_id"><?php echo $datos['idProducto'];  ?></td>
                            <td class="data_name"><?php echo $datos['nombre'];  ?></td>
                            <td class="data_category"><?php echo $datos['categoria'];  ?></td>
                            <td class="data_brand"><?php echo $datos['marca'];  ?></td>
                            <td class="data_amount"><?php echo $datos['cantidad'];  ?></td>

                        </tr>
                <?php
                        }
                    }    
                ?>
                </table>
            </div>
            <div class="col">
                <ul class="pagination">    
                    <?php                         
                        for($i=0; $i<$total_paginas; $i++){
                            echo '<li><a href="?pagina='.($i+1).'&busqueda='.$busqueda.'">'.($i+1).'</a></li>';
                        } 
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <footer id="pie_pagina" class="mt-auto"></footer>
    
<script src="/public/js/inventario.js"></script>
<script src="/public/js/index.js"></script>
</body>
</html>

 
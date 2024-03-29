<?php 
    session_start();

    if (empty($_SESSION["username"])) {
        header('Location: https://seminario2023.website/index.php');

    }
    else{
        include("databaseconnection.php");
        $connection=conectar();
        $user=$_SESSION['username'];
        $id=$_SESSION['id'];
        $rol=$_SESSION['rol'];
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
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/public/css/product_manager.css" type="text/css">

</head>

<body style="">
    <div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video>
    <header id="encabezado"></header>
    <div class="container">
        <div class="row">
            <h1>Gestor de productos:</h1><hr id="div-line"  style="margin: 0px 0px 10px;">
        </div>
        <div class="row">
            <div class="slide col-sm-12 col-md-4" id="search_panel">
                <form action="product_manager.php" method="get">
                    <input type="text" id="search_bar" name="busqueda" placeholder="busqueda">  
                    <input type="submit" id="_sent" name="enviar" value = "Generar">
                </form>
                <?php 
                    $busqueda=strtolower($_REQUEST['busqueda']);
                    $sqlquery_busqueda=mysqli_query($connection,"SELECT idProducto, nombre, categoria, marca FROM producto WHERE idProducto = '$busqueda'");
                    $resultado=mysqli_num_rows($sqlquery_busqueda);     
                ?>  
            </div>
            <div class="slide col-sm-12 col-md-8" id="data_product">
                <?php 
                    if($resultado>0){
                        $datos=$sqlquery_busqueda->fetch_array(MYSQLI_ASSOC);
                    }
                ?>
                <div class="label">ID:</div>
                <div class="label" id="product_id"><?php if($resultado>0){ echo $datos['idProducto'];} else{ echo 'n/d';}?></div> 
                <div class="label">Nombre:</div>
                <div id="product_name" class="label"><?php if($resultado>0){ echo $datos['nombre']; } else{ echo 'n/d';}?></div>
                <div class="label">Categoria:</div>
                <div id="category_name" class="label"><?php if($resultado>0){ echo $datos['categoria']; } else{ echo 'n/d';}?></div>
                <div class="label">Marca:</div>
                <div id="brand_name" class="label"><?php if($resultado>0){ echo $datos['marca']; } else{ echo 'n/d';}?></div>

            </div>
        </div>

        <div class="row" id="qr_form_mod">
            <div class="col-sm-12 col-md-6 "id="qr_mod"></div>
            <div class="col-sm-12 col-md-6" id="form_mod"> <?php include ("db_action.php");?> </div>    
        </div>
        <?php 
            //echo dbGestor(); 
        ?>
    </div>
    <footer id="pie_pagina" class="mt-auto">
    </div>
    </footer>
    <script src="/public/js/index.js"></script>
    <script defer src="/public/js/product_manager.js"></script>
</body>
</html>
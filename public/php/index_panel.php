<?php 
    session_start();

    if (empty($_SESSION["username"])) {
        header('Location: https://seminario2023.website/index.php');

    }
    else{
        $user=$_SESSION['username'];
        $id=$_SESSION['id'];
        $rol=$_SESSION['rol'];
    }
?>

<!DOCTYPE html>
<html lang=”en”> 
<head>
    <meta charset="utf-8">
    <title>FACE ID WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/public/css/index.css" type="text/css">
    <link rel="stylesheet" href="/public/css/header_style.css" type="text/css">
    <link rel="stylesheet" href="/public/css/footer_style.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>

</head>

<body>
    <div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video>
    <header id="encabezado"></header>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>Datos Personales</h2>
                <div class="container slide">
                    <div class="row" id="userPortrait"></div>
                    <div class="row" id="userLabel"><?php echo $user;?></div>
                    <div class="row" id="idLabel"><?php echo $id; ?></div>
                    <div class="row" id="rolLabel"><?php echo $rol; ?></div>
                </div>
                
            </div>


        </div> 

        <div class="row">
                <div class="slide col-sm-12 col-md-6"id="general_view" >
                    ENTRADAS
                </div>
                <div class="slide col-sm-12 col-md-6" id="critical_view">
                    SALIDAS         
                </div>
        </div>


        <div class="row">
            <div class="slide" >
            <div id="intro_message">
                <h1 style="text-align:center;">GESTOR DE PRODUCTO</h1>
                <br>
                <p>Sistema CRUD ELABORADO MEDIANTE JAVASCRIPT, PHP Y PYTHON CON INTERFAZ GRAFICA HTML Y CSS PARA EL MANEJO DE INVENTARIO MEDIANTE CODIGO QR </p> 
                <br>
                <p style="text-align:center;">PRESENTAN:</p>
                <p>Otero Gomez David</p>
                <p>Garcia Cordova Santiago U.</p>
                <p>Rivera Ruiz Alejandro</p>
                <p>V. 1.0</p>
            </div>
            <canvas id="myChart" class="chartOff"></canvas>
            </div> 
        </div>
    </div>


    <footer id="pie_pagina" class="mt-auto">
    </footer>
    <script defer src="/public/js/index.js"></script>
    <script defer type="module" src="/public/js/panels_view.js"></script>

</div>
</body>
</html>
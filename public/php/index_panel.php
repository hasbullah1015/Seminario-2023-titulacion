<?php 
    session_start();
    $user=$_SESSION['username'];
    $id=$_SESSION['id'];
    $rol=$_SESSION['rol'];

?>

<!DOCTYPE html>
<html lang=”en”> 
<head>
    <meta charset="utf-8">
    <title>FACE ID WEBSITE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/public/css/index.css" type="text/css">
    <link rel="stylesheet" href="/public/css/header_style.css" type="text/css">
    <link rel="stylesheet" href="/public/css/footer_style.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3"></script>


</head>

<body>
    <div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video> </div>
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
                <div class="slide col-sm-12 col-md-6">
                    <button id="general_view">GENERAL</button>
                </div>
                <div class="slide col-sm-12 col-md-6">
                    <button id="critical_view">Producto por terminar</button>           
                </div>
        </div>

        <div id="back-data">
            <?php
                    include("general_view_json.php");
            ?>
        </div>


        <div class="row">
            <div class="slide">
                <canvas id="myChart" style="position: relative; height: 40vh; width: 100vw;">
            
                  <p>Test de mensaje de prueba</p>
                </canvas>
            </div>
           
        </div>
    </div>


    <footer id="pie_pagina" class="mt-auto">
    </footer>
    <script src="/public/js/index.js"></script>
    <script type="module" src="/public/js/panels_view.js"></script>


</body>
</html>
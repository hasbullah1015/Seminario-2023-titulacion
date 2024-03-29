<?php 
    session_start();

    if (empty($_SESSION["username"])) {
        header('Location: https://seminario2023.website/index.php');

    }
    else{
        include("databaseconnection.php");
        $connection=conectar();
        $user=strtoupper($_SESSION['username']);
        $rol=strtoupper($_SESSION['rol']);
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/public/css/header_style.css" type="text/css">
    <link rel="stylesheet" href="/public/css/footer_style.css" type="text/css">
    <script defer src="/public/js/index.js"></script>


</head>

<body>
<div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video>
    <header id="encabezado">
    </header>
    <div class="container">
    <h1>Control de usuarios: </h1> <hr id="div-line"  style="margin: 0px 0px 10px;">
        <div class="row slide">
                <h2> Bienvenido, <?php echo $user ?> <span id="typeUser">(<?php echo $rol ?>)</span> </h2><br><br>
                <div id="form-section" class="col-md-6 col-sm-12"> Ingresa los datos solicitados para la gestión de usuarios</div>
                <div id="data-section" class="col-md-6 col-sm-12"><?php include ("db_action_usermanage.php"); ?></div>

        </div>
    </div>
    <br>
    <footer id="pie_pagina" class="mt-auto"></footer>
    
<script defer src="/public/js/usercontrol.js"></script>
<link rel="stylesheet" href="/public/css/usercontrol.css" type="text/css">
</div>
</body>
</html>

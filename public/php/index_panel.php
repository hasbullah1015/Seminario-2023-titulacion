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
</head>

<body>
    <div id="video-background" ><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video> </div>
    <header id="encabezado"></header>
    <div class="container">
        <div class="row" id="main_panel" >
            <div class="col-sm-12 col-lg-4 col-md-4" >
                <div class="container">
                    <div class="row" id="title"><h2>Datos Personales</h2></div>
                    <div class=" slide col" id="main_data">
                            <div class="row" id="welcomeLabel"> Bienvenido</div> 
                            <div class="row" id="userPortrait"></div>
                            <div class="row" id="userLabel"><?php echo $user;?></div>  
                            <div class="row" id="idLabel"> <?php echo $id; ?></div>   
                            <div class="row" id="rolLabel"><?php echo $rol; ?></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-8 col-md-8">
                <div class="container">
                    <div class="row" id="title"><h2>Registro</h2> </div>
                    <div class=" slide col overflow-auto">
                    <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="option_panel">
            <div class="col-sm-12 col-md-6 slide" id="btn_monthly_data">
                <h4>MES</h4>
            </div>
            <div class="col-sm-12 col-md-6 slide" id="btn_history_data">
                <H4>HISTORICO</H4>
            </div>

        </div>
    </div>


    <footer id="pie_pagina" class="mt-auto">
    </footer>
    <script src="/public/js/index.js"></script>

</body>
</html>
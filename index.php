
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="/public/css/index.css" type="text/css"> 


     
</head>
<body > 
<div id="video-background"><video src="/public/assets_img/renderizado-26011.mp4" autoplay="true" muted="true" loop="true" ></video> </div>
    <div class="container">
    <br>
        <div class="row text-center">
        <b><h1 class="display-1">Bienvenido,</h1></b><br>
        <h2 class="display-2">Por favor, ingrese su usuario y contraseña:</h2><br>
</div>   

        <div class="row">
            <div class="col-sm-3 col-md-3 mx-auto slide">
                <br>
                <form method="post" action="public/php/login.php">
                    <label for="user">USER: </label>
                        <input type="text" name="user" id="user" placeholder="user" ><br><br>  
                    <label for="password">PASS: </label>
                        <input type="password" name="password" id="password" placeholder="password"><br><br> 
                    <button type="submit">Send</button>
                </form>
                <br>
            </div>
        </div>
    </div>

    <footer id="pie_pagina" class="mt-auto">
    </footer>

    <script src="/public/js/index.js"></script>

</body>
</html>
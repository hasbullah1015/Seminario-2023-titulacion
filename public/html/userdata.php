<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="/face_id_app_web_app/codigo/css/index.css"  rel="stylesheet"  type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    


    <title>user data</title>
</head>
<body>

    <?php
        $enlace = mysqli_connect("127.0.0.1","root","","usuarios");
        if(!$enlace){
            die("No se logró hacer conexión a la DB".mysqli_error()); 
        }
        //echo "conexion exitosa";

        if($enlace){    
            $consulta = "SELECT * FROM trabajadores WHERE nombre='alejandro'" ;
            $resultado = mysqli_query($enlace,$consulta);
            if($resultado){
                while($row = $resultado -> fetch_array()){
                    $id =$row['id'];
                    $nombre =$row['nombre'];
                    $apellido=$row['apellido'];
                    $puesto =$row['puesto'];
                    $sexo =$row['sexo'];
                    $horario =$row['horario'];
                }

            }
        }
    ?>
    <div class="container">
        <img src="/face_id_app_web_app/media/alex.jpg" alt="alex-foto" ><br><br>
        <div class="row"><p>ID:<?php echo $id ?></p></div>
        <div class="row"><p>Nombre:<?php echo $nombre ?></p></div>
        <div class="row"><p>Apellido:<?php echo $apellido ?></p></div>
        <div class="row"><p>Puesto:<?php echo $puesto ?></p></div>
        <div class="row"><p>Sexo:<?php echo $sexo ?></p></div>
        <div class="row"><p>Horario:<?php echo $horario ?></p></div>



        
    </div>



</body>

</html>


<?php
$id=strtoupper($_REQUEST['id']);
$name=strtoupper($_REQUEST['name']);
$type=strtoupper($_REQUEST['type']);
$brand=strtoupper($_REQUEST['brand']);
$opc=strtolower($_REQUEST['opc']);
$user=$_SESSION['username'];
$aux=strtoupper($_REQUEST['aux']);
$rol=$_SESSION['rol'];

$sqlquery_consulta=mysqli_query($connection,"SELECT idProducto FROM producto WHERE idProducto = '$id'");
$resultado=mysqli_num_rows($sqlquery_consulta);

echo '<span id="action_label"> <p id="userName"> Bienvenido, '.$user.'</p>'.'<p id="typeUser" >'.'('.$rol.')'.'</p>'. '<p id="userMessage"> </p> </span>' ;

if($rol!="A"){ echo 'Genera tu código QR'; }

if($opc=="insert" && $id && $name && $type && $opc && $brand){
    if($resultado>0){
        echo 'Ya existe un producto con el id:\n';  
    }
    else echo 'Se añadió el producto \n';
        mysqli_query($connection,"INSERT INTO producto ( idProducto, nombre, categoria, marca, cantidad ) values ('$id', '$name', '$type','$brand' ,'0')");
}


if($opc=="drop" && $id){
    if( $resultado>0){
        mysqli_query($connection,"DELETE FROM producto WHERE idProducto = '$id'");
        echo 'Se eliminó el producto \n';
    }
    else echo 'No se eliminó el producto, datos erroneos \n';
}


if($opc=="name" && $id && $aux){
    if( $resultado>0){
        echo 'Se actualizó el nombre';
    }
    else echo 'No se actualizó el nombre, datos erroneos \n';
}

if($opc=="id" && $id && $aux){
    if( $resultado>0){
        echo 'Se actualizó el ID \n';
    }
    else echo 'No se actualizó el ID, datos erroneos \n';
}

if($rol=="A"){ echo 'Ingrese los datos correctamente ';}




?>

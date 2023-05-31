<?php
$id=strtolower($_REQUEST['id']);
$nombre=strtolower($_REQUEST['nombre']);
$categoria=strtolower($_REQUEST['categoria']);
$brand=strtolower($_REQUEST['marca']);
$opc=strtolower($_REQUEST['opc']);
$user=$_SESSION['username'];
$id=strtoupper($_REQUEST['id']);
$rol=$_SESSION['rol'];

$sqlquery_consulta=mysqli_query($connection,"SELECT idProducto FROM producto WHERE idProducto = '$id'");
$resultado=mysqli_num_rows($sqlquery_consulta);

echo '<span id="action_label"> <p id="userName">'.$user.'</p>'.'<p id="typeUser" >'.'('.$rol.')'.'</p>'. '<p id="userMessage"> </p> </span>' ;

if($rol=="A"){', Ingresa los datos correctos'; }

else 'Genera tu código QR';

if($opc=="insert" && $id && $nombre && $categoria && $opc && $brand){
    if($resultado>0){
        echo 'Ya existe un producto con el id:';  
    }
    else echo 'Se añadió el producto';
        mysqli_query($connection,"INSERT INTO producto ( idProducto, nombre, categoria, marca, cantidad ) values ('$id', '$nombre', '$categoria','$brand' ,'0')");
}


if($opc=="drop" && $id){
    if( $resultado>0){
        mysqli_query($connection,"DELETE FROM producto WHERE idProducto = '$id'");
        echo 'Se eliminó el producto';
    }
    else echo 'No se eliminó el producto, datos erroneos';
}

?>

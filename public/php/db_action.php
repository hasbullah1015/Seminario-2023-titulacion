<?php
$id=strtoupper($_REQUEST['id']);
$name=strtoupper($_REQUEST['name']);
$type=strtoupper($_REQUEST['type']);
$brand=strtoupper($_REQUEST['brand']);
$opc=strtolower($_REQUEST['opc']);
$user=$_SESSION['username'];
$id=strtoupper($_REQUEST['id']);
$rol=$_SESSION['rol'];

$sqlquery_consulta=mysqli_query($connection,"SELECT idProducto FROM producto WHERE idProducto = '$id'");
$resultado=mysqli_num_rows($sqlquery_consulta);

echo '<span id="action_label"> <p id="userName"> Bienvenido, '.$user.'</p>'.'<p id="typeUser" >'.'('.$rol.')'.'</p>'. '<p id="userMessage"> </p> </span>' ;

if($rol!="A"){ echo 'Genera tu código Q'; }

if($opc=="insert" && $id && $name && $type && $opc && $brand){
    if($resultado>0){
        echo 'Ya existe un producto con el id:';  
    }
    else echo 'Se añadió el producto';
        mysqli_query($connection,"INSERT INTO producto ( idProducto, nombre, categoria, marca, cantidad ) values ('$id', '$name', '$type','$brand' ,'0')");
}


if($opc=="drop" && $id){
    if( $resultado>0){
        mysqli_query($connection,"DELETE FROM producto WHERE idProducto = '$id'");
        echo 'Se eliminó el producto';
    }
    else echo 'No se eliminó el producto, datos erroneos';
}

?>

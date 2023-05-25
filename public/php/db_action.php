<?php
$id=strtolower($_REQUEST['id']);
$nombre=strtolower($_REQUEST['nombre']);
$categoria=strtolower($_REQUEST['categoria']);
$brand=strtolower($_REQUEST['marca']);
$opc=strtolower($_REQUEST['opc']);
$user=$_SESSION['username'];
$id=$_SESSION['id'];
$rol=$_SESSION['rol'];

if($id && $nombre && $categoria && $opc && $brand){
    $sqlquery_consulta=mysqli_query($connection,"SELECT idProducto FROM producto WHERE idProducto = '$id'");
    $resultado=mysqli_num_rows($sqlquery_consulta);

    if($opc=="insert"){    
        if($resultado>0){
            echo 'Ya existe un producto con el id:';  
        }
        else echo 'Se añadió el producto';
        mysqli_query($connection,"INSERT INTO producto ( idProducto, nombre, categoria, marca, cantidad ) values ('$id', '$nombre', '$categoria','$brand' ,'0')");
        
    }
    
    if($opc=="drop"){
        if($resultado>0){
            $sqlquery_consulta=mysqli_query($connection,"SELECT idProducto FROM producto WHERE idProducto = '$id' AND nombre = '$nombre' AND categoria = '$categoria' AND marca = '$brand'");
            $drop_result=mysqli_num_rows( $sqlquery_consulta);

            if( $drop_result>0){
                mysqli_query($connection,"DELETE FROM producto WHERE idProducto = '$id' AND nombre = '$nombre' AND categoria = '$categoria' AND marca = '$brand'");
                echo 'Se eliminó el producto';
            }
            else echo 'No se eliminó el producto, datos erroneos';
        }
        else echo 'No existe un producto con ese ID';

    }
}

else{
    echo '<span> gholaaa </span>';
    echo $user.' Ingresa los datos completos: ';
}
?>

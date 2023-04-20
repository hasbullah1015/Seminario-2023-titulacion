<?php
$id=strtolower($_REQUEST['id']);
$nombre=strtolower($_REQUEST['nombre']);
$categoria=strtolower($_REQUEST['categoria']);
$opc=strtolower($_REQUEST['opc']);

if($id && $nombre && $categoria && $opc){
    $sqlquery_consulta=mysqli_query($connection,"SELECT idProducto FROM producto WHERE idProducto = '$id'");
    $resultado=mysqli_num_rows($sqlquery_consulta);

    if($opc=="insert"){    
        if($resultado>0){
            echo 'Ya existe un producto con el id:';  
        }
        else echo 'insert';
        
    }
    
    if($opc=="drop"){
        if($resultado>0){
            $sqlquery_consulta=mysqli_query($connection,"SELECT idProducto FROM producto WHERE idProducto = '$id' AND nombre = '$nombre' AND categoria = '$categoria'");
            $drop_result=mysqli_num_rows( $sqlquery_consulta);

            if( $drop_result>0){
                mysqli_query($connection,"DELETE FROM producto WHERE idProducto = '$id' AND nombre = '$nombre' AND categoria = '$categoria'");
                echo 'Se eliminó el producto';
            }
            else echo 'No se eliminó el producto, datos erroneos';
        }
        else echo 'No existe un producto con ese ID';

    }
}




else{
    echo 'Ingresa los datos completos: ';
}
?>

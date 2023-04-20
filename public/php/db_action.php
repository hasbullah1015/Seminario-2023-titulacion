<?php
$id=strtolower($_REQUEST['id']);
$nombre=strtolower($_REQUEST['nombre']);
$categoria=strtolower($_REQUEST['categoria']);
$opc=strtolower($_REQUEST['opc']);

if($id && $nombre && $categoria && $opc){
    if($opc=="insert"){
        echo 'insert';
    }
    if($opc=="drop"){
        echo 'drop';
    }
}
else{
    echo 'Ingresa los datos completos: ';
}
?>

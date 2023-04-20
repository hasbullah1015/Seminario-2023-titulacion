<?php
$opc=strtolower($_REQUEST['opc']);

if($opc=="insert"){
        include ("databaseconnection.php");

    echo 'insert';
}
if($opc=="drop"){
    echo 'drop';
}
?>
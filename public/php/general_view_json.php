<?php
     
            $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto");
            $datos = mysqli_fetch_all($sqlquery_registros_gral,MYSQL_ASSOC);
            echo json_encode($datos);
        



    


?>
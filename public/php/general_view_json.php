<?php

            $sqlquery_registros_gral =mysqli_query($connection,"SELECT * FROM producto");
            return $sqlquery_registros_gral -> fetch_all(MYSQL_ASSOC);

        



?>
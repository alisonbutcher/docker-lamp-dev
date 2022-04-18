<?php 
        $servername = "tcp:myserver.database.windows.net,1433";
        $connectionOptions = array("Database"=>"Adventureworks",
            "Uid"=>"sa", "PWD"=>"ygedr2d2;1234");
        $conn = sqlsrv_connect($servername, $connectionOptions);
        if($conn == false) {
            die(FormatErrors(sqlsrv_errors()));
        } else {
            echo "success";
        }


echo "hello2" 


// function OpenConnection() {
//     $servername = "tcp:myserver.database.windows.net,1433";
//     $connectionOptions = array("Database"=>"Adventureworks",
//         "Uid"=>"sa", "PWD"=>"ygedr2d2;1234");
//     $conn = sqlsrv_connect($servername, $connectionOptions);
//     if($conn == false) {
//         die(FormatErrors(sqlsrv_errors()));
//     }

//     return $conn;
// }

?>
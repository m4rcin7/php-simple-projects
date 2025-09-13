<?php 

    function OpenCon() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "login-system";
        
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    function CloseConn($conn){
        $conn->close();
    }

?>
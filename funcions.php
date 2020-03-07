<?php
    function connect_db($db_name) {
        $host = 'localhost';
        $user = 'root';
        $password = 'root';
     
        $conn = mysqli_connect($host, $user, $password, $db_name);
        
        if ($conn) {
            return true;
        } else {
            return false;
        }
    }
?>
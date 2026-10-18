<?php

$conn = new mysqli("localhost", "root", "", "LoginDBs");
    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }


?>
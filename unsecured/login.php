<?php

include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from users where username ='$username' and password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    header("location: landing.html");
    exit();
}else{
    echo"Login failed";
}

?>
<?php

include "connection.php";

$Username = $_POST['username'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Role = $_POST['role'];
$Gender = $_POST['gender'];
$Birthdate = $_POST['birthdate'];
$Password = $_POST['password'];
$ConfirmPassword = $_POST['confirm-password'];

if ($Password != $ConfirmPassword) {
    die("Passwords do not match!");
}

$sql = "INSERT INTO users
(Username, Email, Address, Role, Gender, Birthdate, Password)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sssssss",
    $Username,
    $Email,
    $Address,
    $Role,
    $Gender,
    $Birthdate,
    $Password
);

$result = mysqli_stmt_execute($stmt);

if ($result) {
    header("Location: login.html");
    exit();
} else {
    echo "Registration failed: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>
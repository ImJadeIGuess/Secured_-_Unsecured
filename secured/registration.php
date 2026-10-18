<?php

include "connection.php";

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$role = $_POST['role'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];

if ($password != $confirmPassword) {
    die("Passwords do not match!");
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare(
    "INSERT INTO Users 
    (username, email, address, role, gender, birthdate, password_hash)
    VALUES (?, ?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "sssssss",
    $username,
    $email,
    $address,
    $role,
    $gender,
    $birthdate,
    $passwordHash
);

if ($stmt->execute()) {
    header("location: login.html");
    echo "User created.";
} else {
    echo "Registration failed: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>
<?php
include_once 'config.php';

function getUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function addUser($name, $email, $phone) {
    global $conn;
    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    return mysqli_query($conn, $sql);
}

function updateUser($id, $name, $email, $phone) {
    global $conn;
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id='$id'";
    return mysqli_query($conn, $sql);
}
?>

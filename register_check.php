<?php

require_once "db_connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password)
        VALUES (:name, :email, :password)";

$stmt = $dbh->prepare($sql);

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $hashed_password);

$stmt->execute();

header("Location: login.php");
exit;

?>
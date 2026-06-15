<?php

session_start();
require_once "db_connect.php";

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit;
}

if(!isset($_GET['id'])){
    header("Location: orders.php");
    exit;
}

$id = $_GET['id'];

$sql = "DELETE FROM Orders
        WHERE id = :id";

$stmt = $dbh->prepare($sql);

$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$stmt->execute();

header("Location: orders.php");
exit;

?>
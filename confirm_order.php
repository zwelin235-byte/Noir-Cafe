<?php

session_start();
require_once "db_connect.php";

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit;
}

$user_name = $_SESSION['user_name'];

$coffee_name = $_GET['coffee'];
$quantity = $_GET['quantity'];
$price = $_GET['price'];

$sql = "INSERT INTO Orders
(user_name, coffee_name, price, quantity)
VALUES
(:user_name, :coffee_name, :price, :quantity)";

$stmt = $dbh->prepare($sql);

$stmt->bindValue(':user_name', $user_name);
$stmt->bindValue(':coffee_name', $coffee_name);
$stmt->bindValue(':price', $price);
$stmt->bindValue(':quantity', $quantity);

$stmt->execute();

header("Location: orders.php");
exit;

?>
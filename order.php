<?php

$coffee_name = $_GET['coffee'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];

$total_price = $price * $quantity;

$url = "checkout.php?coffee=" . urlencode($coffee_name)
     . "&quantity=" . urlencode($quantity)
     . "&price=" . urlencode($total_price);

header("Location: " . $url);
exit;

?>
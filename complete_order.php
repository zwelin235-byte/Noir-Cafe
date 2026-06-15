<?php

require_once "db_connect.php";

$id = $_GET['id'];

/* UPDATE STATUS */

$sql = "UPDATE Orders
        SET status = 'Completed'
        WHERE id = :id";

$stmt = $dbh->prepare($sql);

$stmt->bindValue(':id', $id);

$stmt->execute();

/* BACK TO ORDERS */

header("Location: orders.php");
exit;

?>
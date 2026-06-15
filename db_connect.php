<?php

$dsn = "mysql:host=localhost;dbname=Noir_Cafe;charset=utf8";

$user = "root";

$password = "";

try {

    $dbh = new PDO($dsn, $user, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Database Error";

    exit;
}

?>
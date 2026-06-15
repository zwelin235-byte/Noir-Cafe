<?php

session_start();

require_once "db_connect.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE email = :email";

$stmt = $dbh->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user && password_verify($password, $user['password'])){

    $_SESSION['user_name'] = $user['name'];
    $_SESSION['role'] = $user['role'];

    if($user['role'] == 'admin'){

        header("Location: admin.php");

    }else{

        header("Location: home.php");

    }

    exit;

}else{

    echo "Login Failed";

}

?>
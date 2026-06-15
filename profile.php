<?php

session_start();
require_once "db_connect.php";

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit;
}

$user_name = $_SESSION['user_name'];

/* USER INFO */
$sql = "SELECT * FROM users
        WHERE name = :name";

$stmt = $dbh->prepare($sql);
$stmt->bindValue(':name', $user_name);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

/* ORDER INFO */
$sql2 = "SELECT COUNT(*) AS total_orders,
         SUM(price) AS total_spent
         FROM Orders
         WHERE user_name = :user_name";

$stmt2 = $dbh->prepare($sql2);
$stmt2->bindValue(':user_name', $user_name);
$stmt2->execute();

$order_info = $stmt2->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Profile</title>

<style>
body{
    background:#f5efe8;
    font-family:Arial,sans-serif;
}

.box{
    width:500px;
    background:white;
    margin:80px auto;
    padding:50px;
    border-radius:25px;
    box-shadow:0 10px 28px rgba(0,0,0,0.15);
    text-align:center;
}

h1{
    color:#4b260f;
    margin-bottom:30px;
}

.info{
    font-size:22px;
    color:#555;
    margin-bottom:18px;
}

.back{
    display:inline-block;
    margin-top:30px;
    background:#4b260f;
    color:white;
    text-decoration:none;
    padding:14px 30px;
    border-radius:25px;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="box">

    <h1>My Profile 👤</h1>

    <div class="info">
        Name:
        <?php echo htmlspecialchars($user['name']); ?>
    </div>

    <div class="info">
        Email:
        <?php echo htmlspecialchars($user['email']); ?>
    </div>

    <div class="info">
        Role:
        <?php echo htmlspecialchars($user['role']); ?>
    </div>

    <div class="info">
        Total Orders:
        <?php echo $order_info['total_orders']; ?>
    </div>

    <div class="info">
        Total Spent:
        ¥<?php echo $order_info['total_spent'] ?? 0; ?>
    </div>

    <a href="home.php" class="back">
        Back Home
    </a>

</div>

</body>
</html>
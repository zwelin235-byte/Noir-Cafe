<?php

session_start();
require_once "db_connect.php";

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit;
}

/* GET ALL ORDERS */

$sql = "SELECT * FROM Orders
        ORDER BY order_date DESC";

$stmt = $dbh->prepare($sql);
$stmt->execute();

$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* TOTAL SALES */

$total = 0;

foreach($orders as $order){

    $total += $order['price'];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f5efe8;
}

.header{
    background:#2c1a0d;
    color:white;
    padding:22px 60px;

    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:34px;
    font-weight:bold;
}

.logout{
    background:#c0392b;
    color:white;
    text-decoration:none;
    padding:12px 22px;
    border-radius:12px;
    font-weight:bold;
}

.title{
    text-align:center;
    margin-top:50px;
    margin-bottom:40px;
}

.title h1{
    font-size:55px;
    color:#4b260f;
}

.container{
    width:90%;
    max-width:1200px;
    margin:auto;
}

.card{
    background:white;
    border-radius:22px;
    padding:30px;
    margin-bottom:25px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

.left h2{
    color:#4b260f;
    margin-bottom:10px;
}

.left p{
    color:#777;
    margin-bottom:6px;
}

.price{
    font-size:30px;
    color:#9b5a2e;
    font-weight:bold;
    margin-bottom:20px;
}

.btn{
    display:inline-block;
    text-decoration:none;
    color:white;
    padding:12px 18px;
    border-radius:12px;
    font-weight:bold;
    margin-top:10px;
}

.complete{
    background:#27ae60;
}

.delete{
    background:#c0392b;
}

.total-box{
    background:#4b260f;
    color:white;
    padding:40px;
    border-radius:24px;
    text-align:center;
    margin-top:50px;
    margin-bottom:70px;
}

.total-box h2{
    font-size:38px;
    margin-bottom:15px;
}

.total-price{
    font-size:52px;
    color:#ffcf9c;
    font-weight:bold;
}

</style>
</head>

<body>

<div class="header">

    <div class="logo">
        Admin Dashboard ☕
    </div>

    <a href="logout.php"
       class="logout">

        Logout

    </a>

</div>

<div class="title">

    <h1>
        All Customer Orders
    </h1>

</div>

<div class="container">

<?php foreach($orders as $order){ ?>

<div class="card">

    <div class="left">

        <h2>
            <?php echo htmlspecialchars($order['coffee_name']); ?>
        </h2>

        <p>
            Customer:
            <?php echo htmlspecialchars($order['user_name']); ?>
        </p>

        <p>
            Quantity:
            <?php echo $order['quantity']; ?>
        </p>

        <p>
            Status:
            <?php echo htmlspecialchars($order['status']); ?>
        </p>

        <p>
            Date:
            <?php echo $order['order_date']; ?>
        </p>

    </div>

    <div class="right">

        <div class="price">
            ¥<?php echo $order['price']; ?>
        </div>

        <a href="complete_order.php?id=<?php echo $order['id']; ?>"
           class="btn complete">

            Complete

        </a>

        <br>

        <a href="delete_order.php?id=<?php echo $order['id']; ?>"
           class="btn delete">

            Delete

        </a>

    </div>

</div>

<?php } ?>

<div class="total-box">

    <h2>
        Total Sales
    </h2>

    <div class="total-price">

        ¥<?php echo $total; ?>

    </div>

</div>

</body>
</html>
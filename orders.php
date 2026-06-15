<?php

session_start();
require_once "db_connect.php";

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit;
}

$user_name = $_SESSION['user_name'];

$sql = "SELECT * FROM Orders
        WHERE user_name = :user_name
        ORDER BY order_date DESC";

$stmt = $dbh->prepare($sql);
$stmt->bindValue(':user_name', $user_name);
$stmt->execute();

$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

$total = 0;

foreach($orders as $order){
    $total += $order['price'];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>My Orders</title>

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
    background:#4b260f;
    padding:22px 60px;
    color:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-size:34px;
    font-weight:bold;
}

.nav{
    display:flex;
    gap:20px;
}

.nav a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

.title{
    text-align:center;
    margin-top:50px;
    margin-bottom:45px;
}

.title h1{
    font-size:52px;
    color:#4b260f;
}

.container{
    width:90%;
    max-width:1100px;
    margin:auto;
}

.order-card{
    background:white;
    border-radius:22px;
    padding:30px;
    margin-bottom:25px;
    box-shadow:0 10px 28px rgba(0,0,0,0.12);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.left h2{
    color:#4b260f;
    font-size:30px;
    margin-bottom:12px;
}

.left p{
    color:#777;
    margin-bottom:6px;
    font-size:16px;
}

.right{
    text-align:right;
}

.price{
    font-size:32px;
    color:#9b5a2e;
    font-weight:bold;
    margin-bottom:20px;
}

.delete-btn{
    background:#c0392b;
    color:white;
    text-decoration:none;
    padding:12px 20px;
    border-radius:12px;
    font-weight:bold;
    display:inline-block;
}

.complete-btn{
    background:#27ae60;
    color:white;
    text-decoration:none;
    padding:12px 20px;
    border-radius:12px;
    font-weight:bold;
    display:inline-block;
    margin-top:12px;
}

.total-box{
    background:#4b260f;
    color:white;
    padding:35px;
    border-radius:25px;
    text-align:center;
    margin-top:50px;
    margin-bottom:70px;
}

.total-box h2{
    font-size:38px;
    margin-bottom:15px;
}

.total-price{
    font-size:50px;
    color:#ffcf9c;
    font-weight:bold;
}

.empty{
    text-align:center;
    margin-top:100px;
    color:#777;
    font-size:28px;
}
</style>
</head>

<body>

<div class="header">
    <div class="logo">
        Noir Café ☕
    </div>

    <div class="nav">
        <a href="home.php">Home</a>
        <a href="orders.php">My Orders</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="title">
    <h1>My Orders</h1>
</div>

<div class="container">

<?php if(count($orders) > 0){ ?>

    <?php foreach($orders as $order){ ?>

        <div class="order-card">

            <div class="left">

                <h2>
                    <?php echo htmlspecialchars($order['coffee_name']); ?>
                </h2>

                <p>
                    Ordered by:
                    <?php echo htmlspecialchars($order['user_name']); ?>
                </p>

                <p>
                    Quantity:
                    <?php echo $order['quantity']; ?> Cups
                </p>

                <p>
                    Date:
                    <?php echo $order['order_date']; ?>
                </p>

                <p>
                    Status:
                    <?php echo htmlspecialchars($order['status']); ?>
                </p>

            </div>

            <div class="right">

                <div class="price">
                    ¥<?php echo $order['price']; ?>
                </div>

                <a href="delete_order.php?id=<?php echo $order['id']; ?>"
                   class="delete-btn">
                    Delete
                </a>

                

                

            </div>

        </div>

    <?php } ?>

    <div class="total-box">
        <a href="payment.php?total=<?php echo $total; ?>"
   style="text-decoration:none;color:white;">

    <h2>Total Amount</h2>

    <div class="total-price">
        ¥<?php echo $total; ?>
    </div>

</a>

    </div>

<?php } else { ?>

    <div class="empty">
        No orders yet ☕
    </div>

<?php } ?>

</div>

</body>
</html>
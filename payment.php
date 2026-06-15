<?php

session_start();

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit;
}

$total = $_GET['total'] ?? 0;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Payment - Noir Café</title>

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

.header a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

.container{
    width:90%;
    max-width:1000px;
    margin:70px auto;
    display:flex;
    gap:35px;
}

.summary{
    flex:1;
    background:#4b260f;
    color:white;
    border-radius:28px;
    padding:45px;
    box-shadow:0 12px 30px rgba(0,0,0,0.18);
}

.summary h1{
    font-size:42px;
    margin-bottom:25px;
}

.summary p{
    color:#f0d7c0;
    font-size:18px;
    line-height:30px;
}

.total{
    margin-top:45px;
    font-size:58px;
    color:#ffcf9c;
    font-weight:bold;
}

.payment-box{
    flex:1.2;
    background:white;
    border-radius:28px;
    padding:45px;
    box-shadow:0 12px 30px rgba(0,0,0,0.13);
}

.payment-box h2{
    color:#4b260f;
    font-size:36px;
    margin-bottom:12px;
}

.sub{
    color:#777;
    margin-bottom:35px;
}

.method{
    border:2px solid #eee;
    border-radius:20px;
    padding:22px;
    margin-bottom:18px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    transition:0.3s;
}

.method:hover{
    border-color:#c8945b;
    transform:translateY(-4px);
    box-shadow:0 8px 20px rgba(0,0,0,0.10);
}

.method-left{
    text-align:left;
}

.method-left h3{
    color:#4b260f;
    font-size:23px;
    margin-bottom:6px;
}

.method-left p{
    color:#777;
    font-size:15px;
}

.icon{
    font-size:34px;
}

.pay-btn{
    display:block;
    margin-top:30px;
    background:#4b260f;
    color:white;
    text-decoration:none;
    text-align:center;
    padding:18px;
    border-radius:18px;
    font-size:20px;
    font-weight:bold;
}

.back{
    display:block;
    margin-top:18px;
    text-align:center;
    color:#4b260f;
    text-decoration:none;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="header">
    <div class="logo">Noir Café ☕</div>
    <a href="orders.php">Back to Orders</a>
</div>

<div class="container">

    <div class="summary">
        <h1>Order Payment</h1>
        <p>
            Please choose your preferred payment method.
            Your order will be processed after payment confirmation.
        </p>

        <div class="total">
            ¥<?php echo htmlspecialchars($total); ?>
        </div>
    </div>

    <div class="payment-box">

        <h2>Payment Method</h2>
        <div class="sub">
            Select one payment option below.
        </div>

        <div class="method">
            <div class="method-left">
                <h3>Cash Payment</h3>
                <p>Pay directly at the café counter.</p>
            </div>
            <div class="icon">💵</div>
        </div>

        <div class="method">
            <div class="method-left">
                <h3>Credit Card</h3>
                <p>Visa, Mastercard, JCB are supported.</p>
            </div>
            <div class="icon">💳</div>
        </div>

        <div class="method">
            <div class="method-left">
                <h3>PayPay</h3>
                <p>Fast and easy mobile payment.</p>
            </div>
            <div class="icon">📱</div>
        </div>

        <a href="payment_success.php" class="pay-btn">
            Confirm Payment
        </a>

        <a href="orders.php" class="back">
            Cancel
        </a>

    </div>

</div>

</body>
</html>
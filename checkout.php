<?php

$coffee = $_GET['coffee'];
$quantity = $_GET['quantity'];
$price = $_GET['price'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Checkout</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f5efe8;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    width:500px;
    background:white;
    padding:50px;
    border-radius:30px;
    text-align:center;
    box-shadow:
    0 10px 30px rgba(0,0,0,0.15);
}

h1{
    color:#4b260f;
    font-size:48px;
    margin-bottom:25px;
}

.info{
    font-size:22px;
    color:#666;
    margin-bottom:18px;
}

.total{
    font-size:50px;
    color:#9b5a2e;
    font-weight:bold;
    margin-top:25px;
    margin-bottom:40px;
}

.buttons{
    display:flex;
    justify-content:center;
    gap:20px;
}

.btn{
    text-decoration:none;
    padding:16px 34px;
    border-radius:30px;
    font-weight:bold;
}

.confirm{
    background:#4b260f;
    color:white;
}

.back{
    background:#d7a060;
    color:white;
}

</style>
</head>

<body>

<div class="box">

    <h1>
        Checkout ☕
    </h1>

    <div class="info">

        Coffee:
        <?php echo htmlspecialchars($coffee); ?>

    </div>

    <div class="info">

        Quantity:
        <?php echo htmlspecialchars($quantity); ?> Cups

    </div>

    <div class="total">

        ¥<?php echo htmlspecialchars($price); ?>

    </div>

    <div class="buttons">

        <a href="confirm_order.php?
coffee=<?php echo urlencode($coffee); ?>
&quantity=<?php echo urlencode($quantity); ?>
&price=<?php echo urlencode($price); ?>"
           class="btn confirm">

            Confirm

        </a>

        <a href="home.php"
           class="btn back">

            Back Menu

        </a>

    </div>

</div>

</body>
</html>
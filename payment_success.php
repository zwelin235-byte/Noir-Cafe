<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Payment Successful</title>

<style>

body{
    background:#f5efe8;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Arial,sans-serif;
}

.card{
    background:white;
    padding:60px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
}

.check{
    font-size:80px;
}

h1{
    color:#27ae60;
    margin:20px 0;
}

a{
    display:inline-block;
    margin-top:20px;
    background:#4b260f;
    color:white;
    padding:15px 30px;
    border-radius:12px;
    text-decoration:none;
}

</style>

</head>

<body>

<div class="card">

    <div class="check">✅</div>

    <h1>Payment Successful</h1>

    <p>Your order has been confirmed.</p>

    <a href="home.php">
        Back Home
    </a>

</div>

</body>
</html>
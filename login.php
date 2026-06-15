<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Login - Noir Café</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background-image:url("coffee-bg.jpg");
    background-size:cover;
    background-position:center;
}

.overlay{
    width:100%;
    height:100vh;
    background:rgba(0,0,0,0.45);
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{
    width:400px;
    background:#fffaf4;
    padding:45px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.4);
}

h1{
    color:#5c3317;
    font-size:42px;
}

input{
    width:100%;
    padding:16px;
    margin-bottom:20px;
    border-radius:12px;
    border:2px solid #ddd;
    box-sizing:border-box;
    font-size:16px;
}

button{
    width:100%;
    padding:16px;
    border:none;
    border-radius:12px;
    background:#8b5e3c;
    color:white;
    font-size:18px;
    font-weight:bold;
}

a{
    color:#8b5e3c;
    font-weight:bold;
    text-decoration:none;
}
</style>
</head>

<body>

<div class="overlay">
<div class="login-box">

<h1>Noir Café ☕</h1>
<p>Login to your account</p>

<form action="login_check.php" method="post">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit">LOGIN</button>

</form>

<p>
Don't have an account?
<a href="register.php">Register</a>
</p>

</div>
</div>

</body>
</html>
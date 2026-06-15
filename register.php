<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Register - Noir Café</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{

    height:100vh;

    background-image:url("coffee-bg.jpg");

    background-size:cover;

    background-position:center;

    display:flex;

    justify-content:center;

    align-items:center;
}

/* Overlay */

.overlay{

    width:100%;
    height:100vh;

    background:rgba(0,0,0,0.45);

    display:flex;

    justify-content:center;

    align-items:center;
}

/* Register Box */

.register-box{

    width:430px;

    background:#fffaf4;

    padding:50px;

    border-radius:25px;

    box-shadow:
    0 10px 30px rgba(0,0,0,0.4);

    text-align:center;
}

/* Logo */

.logo{

    font-size:55px;

    margin-bottom:10px;
}

.title{

    font-size:42px;

    font-weight:bold;

    color:#5c3317;

    margin-bottom:10px;
}

.subtitle{

    color:#777;

    margin-bottom:35px;

    font-size:16px;
}

/* Input */

.input-group{

    margin-bottom:20px;
}

.input-box{

    width:100%;

    padding:18px;

    border:2px solid #ddd;

    border-radius:14px;

    font-size:16px;

    outline:none;
}

.input-box:focus{

    border-color:#8b5e3c;
}

/* Button */

.register-btn{

    width:100%;

    padding:18px;

    border:none;

    border-radius:14px;

    background:#8b5e3c;

    color:white;

    font-size:18px;

    font-weight:bold;

    cursor:pointer;
}

.register-btn:hover{

    background:#6f4e37;
}

/* Bottom */

.bottom{

    margin-top:25px;

    color:#666;
}

.bottom a{

    color:#8b5e3c;

    text-decoration:none;

    font-weight:bold;
}

</style>
</head>

<body>

<div class="overlay">

    <div class="register-box">

        <div class="logo">
            ☕
        </div>

        <div class="title">
            Create Account
        </div>

        <div class="subtitle">
            Join Noir Café Today
        </div>

        <form action="register_check.php"
              method="post">

            <div class="input-group">

                <input type="text"
                       name="name"
                       placeholder="Enter your name"
                       class="input-box"
                       required>

            </div>

            <div class="input-group">

                <input type="email"
                       name="email"
                       placeholder="Enter your email"
                       class="input-box"
                       required>

            </div>

            <div class="input-group">

                <input type="password"
                       name="password"
                       placeholder="Enter your password"
                       class="input-box"
                       required>

            </div>

            <button type="submit"
                    class="register-btn">

                REGISTER

            </button>

        </form>

        <div class="bottom">

            Already have an account?

            <a href="login.php">

                Login

            </a>

        </div>

    </div>

</div>

</body>
</html>
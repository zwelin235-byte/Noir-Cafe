<?php

$coffee = $_GET['coffee'];
$price = $_GET['price'];
$image = $_GET['image'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Coffee Details</title>

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

/* CONTAINER */

.container{

    width:90%;

    max-width:1200px;

    margin:80px auto;

    background:white;

    border-radius:30px;

    overflow:hidden;

    display:flex;

    box-shadow:
    0 10px 30px rgba(0,0,0,0.15);
}

/* LEFT */

.left{

    width:50%;
}

.left img{

    width:100%;

    height:100%;

    object-fit:cover;
}

/* RIGHT */

.right{

    width:50%;

    padding:60px;
}

/* BADGE */

.badge{

    display:inline-block;

    background:#d7a060;

    color:white;

    padding:10px 18px;

    border-radius:20px;

    font-size:14px;

    font-weight:bold;

    margin-bottom:25px;
}

/* TITLE */

.right h1{

    font-size:55px;

    color:#4b260f;

    margin-bottom:20px;
}

/* DESCRIPTION */

.desc{

    color:#777;

    font-size:20px;

    line-height:34px;

    margin-bottom:35px;
}

/* PRICE */

.price{

    font-size:42px;

    color:#9b5a2e;

    font-weight:bold;

    margin-bottom:35px;
}

/* SELECT */

select{

    width:100%;

    padding:14px;

    border-radius:12px;

    margin-bottom:25px;

    border:1px solid #ccc;

    font-size:16px;
}

/* BUTTONS */

.buttons{

    display:flex;

    gap:20px;

    margin-top:10px;
}

.order-btn{

    background:#4b260f;

    color:white;

    border:none;

    padding:16px 34px;

    border-radius:30px;

    font-weight:bold;

    font-size:16px;

    cursor:pointer;
}

.order-btn:hover{

    background:#2d1608;
}

.back-btn{

    background:#d7a060;

    color:white;

    text-decoration:none;

    padding:16px 34px;

    border-radius:30px;

    font-weight:bold;
}

.back-btn:hover{

    background:#b98543;
}

</style>
</head>

<body>

<div class="container">

    <!-- LEFT -->

    <div class="left">

        <img src="<?php echo htmlspecialchars($image); ?>">

    </div>

    <!-- RIGHT -->

    <div class="right">

        <div class="badge">

            Premium Coffee

        </div>

        <h1>

            <?php echo htmlspecialchars($coffee); ?>

        </h1>

        <div class="desc">

            Enjoy our luxury coffee made
            with high quality espresso beans
            and rich flavor for coffee lovers.

        </div>

        <div class="price">

            ¥<?php echo htmlspecialchars($price); ?>

        </div>

        <!-- ORDER FORM -->

        <form action="order.php" method="GET">

            <input type="hidden"
                   name="coffee"
                   value="<?php echo htmlspecialchars($coffee); ?>">

            <input type="hidden"
                   name="price"
                   value="<?php echo htmlspecialchars($price); ?>">

            <select name="quantity">

                <option value="1">
                    1 Cup
                </option>

                <option value="2">
                    2 Cups
                </option>

                <option value="3">
                    3 Cups
                </option>

                <option value="4">
                    4 Cups
                </option>

            </select>

            <div class="buttons">

                <button type="submit"
                        class="order-btn">

                    Order Now

                </button>

                <a href="home.php"
                   class="back-btn">

                    Back Menu

                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>
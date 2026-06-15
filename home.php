<?php

session_start();

if(!isset($_SESSION['user_name'])){
    header("Location: login.php");
    exit;
}

$user_name = $_SESSION['user_name'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Noir Café</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

html{
    scroll-behavior:smooth;
}

body{
    background:#f5efe8;
}

/* HEADER */

.header{
    background:#4b260f;
    padding:22px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:sticky;
    top:0;
    z-index:1000;
}

.logo{
    color:white;
    font-size:36px;
    font-weight:bold;
}

/* NAV */

.nav{
    display:flex;
    align-items:center;
    gap:22px;
}

.nav a{
    color:white;
    text-decoration:none;
    font-size:18px;
    font-weight:bold;
}

/* DROPDOWN */

.dropdown{
    position:relative;
}

summary{
    list-style:none;
    cursor:pointer;
    color:white;
    font-size:18px;
    font-weight:bold;
}

summary::-webkit-details-marker{
    display:none;
}

.dropdown-content{
    position:absolute;
    top:35px;
    left:0;
    background:#4b260f;
    min-width:220px;
    border-radius:14px;
    overflow:hidden;
    box-shadow:0 8px 20px rgba(0,0,0,0.3);
}

.dropdown-content a{
    display:block;
    padding:15px 18px;
    color:white;
    text-decoration:none;
}

.dropdown-content a:hover{
    background:#9b6a43;
}

/* LOGOUT */

.logout{
    background:#9b6a43;
    padding:12px 24px;
    border-radius:14px;
}

/* HERO */

.hero{
    height:430px;

    background-image:
    linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45)),
    url("coffee-bg.jpg");

    background-size:cover;
    background-position:center;

    display:flex;
    align-items:center;

    padding-left:80px;

    color:white;
}

.hero-text h1{
    font-size:68px;
    margin-bottom:20px;
}

.hero-text p{
    font-size:24px;
    margin-bottom:35px;
}

.view-btn{
    background:white;
    color:#4b260f;
    text-decoration:none;
    padding:16px 34px;
    border-radius:35px;
    font-weight:bold;
    font-size:18px;
}

/* SECTION */

.section{
    padding:80px;
}

.section-title{
    text-align:center;
    font-size:55px;
    color:#4b260f;
    margin-bottom:55px;
}

/* MENU */

.menu{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:35px;
    margin-bottom:90px;
}

/* CARD */

.card{
    width:300px;
    background:white;
    border-radius:24px;
    overflow:hidden;
    box-shadow:0 10px 28px rgba(0,0,0,0.14);
    transition:0.3s;
    position:relative;
}

.card:hover{
    transform:translateY(-8px);
}

.badge{
    position:absolute;
    top:15px;
    left:15px;
    background:#c8945b;
    color:white;
    padding:8px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:bold;
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card-body{
    padding:28px;
    text-align:center;
}

.card-body h3{
    color:#4b260f;
    font-size:30px;
    margin-bottom:15px;
}

.card-body p{
    color:#777;
    font-size:16px;
    margin-bottom:20px;
}

.price{
    font-size:38px;
    color:#9b5a2e;
    font-weight:bold;
    margin-bottom:22px;
}

/* SELECT */

select{
    width:100%;
    padding:12px;
    border-radius:12px;
    border:1px solid #ccc;
    margin-bottom:18px;
    font-size:15px;
}

/* BUTTON */

.order-btn{
    width:100%;
    background:#4b260f;
    color:white;
    border:none;
    padding:14px;
    border-radius:14px;
    font-weight:bold;
    font-size:16px;
    cursor:pointer;
    margin-bottom:12px;
}

.order-btn:hover{
    background:#2f1608;
}

/* DETAIL BUTTON */

.detail-btn{
    display:block;
    background:#d3a15f;
    color:white;
    text-decoration:none;
    padding:13px;
    border-radius:14px;
    font-weight:bold;
}

.detail-btn:hover{
    background:#b88442;
}

/* FOOTER */

.footer{
    background:#4b260f;
    color:white;
    text-align:center;
    padding:28px;
    margin-top:70px;
}

</style>
</head>

<body>

<!-- HEADER -->

<div class="header">

    <div class="logo">
        Noir Café ☕
    </div>

    <div class="nav">

        <a href="home.php">
            Home
        </a>

        <!-- MENU DROPDOWN -->

        <details class="dropdown">

            <summary>
                Menu ▾
            </summary>

            <div class="dropdown-content">

                <a href="#hot">
                    ☕ Hot Coffee
                </a>

                <a href="#ice">
                    🥤 Ice Coffee
                </a>

                <a href="#dessert">
                    🍰 Desserts
                </a>

            </div>

        </details>

        <a href="orders.php">
            My Orders
        </a>

        <a href="logout.php"
           class="logout">
            Logout
        </a>

    </div>

</div>

<!-- HERO -->

<div class="hero">

    <div class="hero-text">

        <h1>

            Welcome,
            <?php echo htmlspecialchars($user_name); ?>

        </h1>

        <p>

            Enjoy premium coffee with a simple ordering system.

        </p>

        <a href="orders.php"
           class="view-btn">

            View Orders

        </a>

    </div>

</div>

<!-- HOT COFFEE -->

<div class="section">

<h2 class="section-title"
id="hot">

☕ Hot Coffee

</h2>

<div class="menu">

<!-- AMERICANO -->

<div class="card">

<div class="badge">
Best Seller
</div>

<img src="Americano.jpg">

<div class="card-body">

<h3>Americano</h3>

<p>
Rich and smooth black coffee.
</p>

<div class="price">
¥450
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Americano">

<input type="hidden"
name="price"
value="450">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Americano&price=450&image=Americano.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- LATTE -->

<div class="card">

<div class="badge">
Popular
</div>

<img src="Latte.jpg">

<div class="card-body">

<h3>Latte</h3>

<p>
Creamy espresso milk coffee.
</p>

<div class="price">
¥550
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Latte">

<input type="hidden"
name="price"
value="550">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Latte&price=550&image=Latte.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- CAPPUCCINO -->

<div class="card">

<div class="badge">
New
</div>

<img src="Cappuccino.jpg">

<div class="card-body">

<h3>Cappuccino</h3>

<p>
Foamy and rich espresso coffee.
</p>

<div class="price">
¥580
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Cappuccino">

<input type="hidden"
name="price"
value="580">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Cappuccino&price=580&image=Cappuccino.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- MOCHA -->

<div class="card">

<div class="badge">
Hot
</div>

<img src="Mocha.jpg">

<div class="card-body">

<h3>Mocha</h3>

<p>
Chocolate flavored espresso coffee.
</p>

<div class="price">
¥620
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Mocha">

<input type="hidden"
name="price"
value="620">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Mocha&price=620&image=Mocha.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- ESPRESSO -->

<div class="card">

<div class="badge">
Strong
</div>

<img src="Espresso.jpg">

<div class="card-body">

<h3>Espresso</h3>

<p>
Strong and rich espresso shot.
</p>

<div class="price">
¥500
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Espresso">

<input type="hidden"
name="price"
value="500">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Espresso&price=500&image=Espresso.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- CARAMEL MACCHIATO -->

<div class="card">

<div class="badge">
Sweet
</div>

<img src="Caramel Macchiato.jpg">

<div class="card-body">

<h3>Caramel Macchiato</h3>

<p>
Sweet caramel flavored coffee.
</p>

<div class="price">
¥680
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Caramel Macchiato">

<input type="hidden"
name="price"
value="680">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Caramel Macchiato&price=680&image=CaramelMacchiato.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

</div>

<!-- ICE COFFEE -->

<h2 class="section-title"
id="ice">

🥤 Ice Coffee

</h2>

<div class="menu">

<!-- ICE AMERICANO -->

<div class="card">

<div class="badge">
Cool
</div>

<img src="IceAmericano.jpg">

<div class="card-body">

<h3>Ice Americano</h3>

<p>
Refreshing iced black coffee.
</p>

<div class="price">
¥500
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Ice Americano">

<input type="hidden"
name="price"
value="500">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Ice Americano&price=500&image=IceAmericano.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- ICE LATTE -->

<div class="card">

<div class="badge">
Popular
</div>

<img src="IceLatte.jpg">

<div class="card-body">

<h3>Ice Latte</h3>

<p>
Cold espresso with creamy milk.
</p>

<div class="price">
¥600
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Ice Latte">

<input type="hidden"
name="price"
value="600">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Ice Latte&price=600&image=IceLatte.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- ICE MOCHA -->
 <!-- CARAMEL ICE LATTE -->

<div class="card">

<div class="badge">
Popular
</div>

<img src="Caramel IceLatte.jpg">

<div class="card-body">

<h3>Caramel Ice Latte</h3>

<p>
Sweet caramel flavored iced latte.
</p>

<div class="price">
¥720
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Caramel Ice Latte">

<input type="hidden"
name="price"
value="720">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Caramel Ice Latte&price=720&image=CaramelIceLatte.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<div class="card">

<div class="badge">
Sweet
</div>

<img src="IceMocha.jpg">

<div class="card-body">

<h3>Ice Mocha</h3>

<p>
Cold chocolate espresso coffee.
</p>

<div class="price">
¥650
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Ice Mocha">

<input type="hidden"
name="price"
value="650">

<select name="quantity">

<option value="1">1 Cup</option>
<option value="2">2 Cups</option>
<option value="3">3 Cups</option>
<option value="4">4 Cups</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Ice Mocha&price=650&image=IceMocha.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

</div>

<!-- DESSERTS -->

<h2 class="section-title"
id="dessert">

🍰 Desserts

</h2>

<div class="menu">

<!-- CHEESECAKE -->

<div class="card">

<div class="badge">
Sweet
</div>

<img src="Cheesecake.jpg">

<div class="card-body">

<h3>Cheesecake</h3>

<p>
Soft and creamy cheesecake.
</p>

<div class="price">
¥480
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Cheesecake">

<input type="hidden"
name="price"
value="480">

<select name="quantity">

<option value="1">1 Piece</option>
<option value="2">2 Pieces</option>
<option value="3">3 Pieces</option>
<option value="4">4 Pieces</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Cheesecake&price=480&image=Cheesecake.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- CROISSANT -->
 <!-- CHOCOLATE CAKE -->

<div class="card">

<div class="badge">
Sweet
</div>

<img src="ChocolateCake.jpg">

<div class="card-body">

<h3>Chocolate Cake</h3>

<p>
Rich chocolate cake with creamy flavor.
</p>

<div class="price">
¥550
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Chocolate Cake">

<input type="hidden"
name="price"
value="550">

<select name="quantity">

<option value="1">1 Piece</option>
<option value="2">2 Pieces</option>
<option value="3">3 Pieces</option>
<option value="4">4 Pieces</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Chocolate Cake&price=550&image=ChocolateCake.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- EGG TART -->

<div class="card">

<div class="badge">
Fresh
</div>

<img src="EggTart.jpg">

<div class="card-body">

<h3>Egg Tart</h3>

<p>
Soft creamy egg tart with crispy crust.
</p>

<div class="price">
¥380
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Egg Tart">

<input type="hidden"
name="price"
value="380">

<select name="quantity">

<option value="1">1 Piece</option>
<option value="2">2 Pieces</option>
<option value="3">3 Pieces</option>
<option value="4">4 Pieces</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Egg Tart&price=380&image=EggTart.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- STRAWBERRY CAKE -->

<div class="card">

<div class="badge">
Popular
</div>

<img src="StrawberryCake.jpg">

<div class="card-body">

<h3>Strawberry Cake</h3>

<p>
Sweet strawberry cake with fresh cream.
</p>

<div class="price">
¥620
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Strawberry Cake">

<input type="hidden"
name="price"
value="620">

<select name="quantity">

<option value="1">1 Piece</option>
<option value="2">2 Pieces</option>
<option value="3">3 Pieces</option>
<option value="4">4 Pieces</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Strawberry Cake&price=620&image=StrawberryCake.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<!-- COOKIES -->

<div class="card">

<div class="badge">
Snack
</div>

<img src="Cookies.jpg">

<div class="card-body">

<h3>Cookies</h3>

<p>
Crunchy cookies with chocolate chips.
</p>

<div class="price">
¥300
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Cookies">

<input type="hidden"
name="price"
value="300">

<select name="quantity">

<option value="1">1 Pack</option>
<option value="2">2 Packs</option>
<option value="3">3 Packs</option>
<option value="4">4 Packs</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Cookies&price=300&image=Cookies.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

<div class="card">

<div class="badge">
Popular
</div>

<img src="Croissant.jpg">

<div class="card-body">

<h3>Croissant</h3>

<p>
Fresh buttery French pastry.
</p>

<div class="price">
¥350
</div>

<form action="order.php" method="GET">

<input type="hidden"
name="coffee"
value="Croissant">

<input type="hidden"
name="price"
value="350">

<select name="quantity">

<option value="1">1 Piece</option>
<option value="2">2 Pieces</option>
<option value="3">3 Pieces</option>
<option value="4">4 Pieces</option>

</select>

<button type="submit"
class="order-btn">

Order Now

</button>

</form>

<a href="coffee_detail.php?coffee=Croissant&price=350&image=Croissant.jpg"
class="detail-btn">

Details

</a>

</div>

</div>

</div>

</div>

<!-- FOOTER -->

<div class="footer">

© 2026 Noir Café.
Premium Coffee Ordering System.

</div>

</body>
</html>
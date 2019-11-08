<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>GameShop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <div class="header"><h1>GAMESHOP</h1></div>

    <div class="topNavigation">
        <div class="search">
            <input type="text"  name="search" placeholder="Search an item..." size="50"/>
            <input type="button" onClick="searchItem()" value=<img src='search.png'>>        
        </div>
        <div>
            <ul>
                    <li><a href="cart.php" class="topBar"><img src="cart.png" title="CART" alt="cart"></a></li>
                    <li><a href="account.php" class="topBar"><img src="account.png" title="ACCOUNT" alt="account"></a></li>
            </ul>
        </div>
    </div>

    <ul class="navigation">
        <li><a href="home.php" class="platform">HOME</a></li>
        <li><a href="ps4.php" class="platform">PS4</a></li>
        <li><a href="psvita.php" class="platform">PS VITA</a></li>
        <li><a href="3ds.php" class="platform">3DS</a></li>
        <li><a href="switch.php" class="platform">Switch</a></li>
        <li><a href="xbox.php" class="platform">Xbox</a></li>
        <li><a href="pc.php" class="platform">PC</a></li>
        <!--mestinya ganti antara acc, login, signup, kalo acc ada drop down-->
    </ul>

    <div class="featured">
        <p>featured game</p>
    </div>

    <?php
        for($x = 0; $x < 3; $x++)
        {
            echo "<div class="homeItems">
            </div>";
        }
    ?>

    <div class="footer">
        ©testestes 2019
    </div>
</body>
</html>

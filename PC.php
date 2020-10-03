<!doctype html>
<html lang="en">
<?php require_once('fragment/functions.inc.php'); ?>

<head>
    <?php require_once('fragment/head.inc.php'); ?>
</head>

<body>
    <style>
    .MainPage {
        display: grid;
        grid-template-columns: auto auto auto auto auto auto;
        grid-template-areas:
            "game1 game1 game1 game2 game2 game2"
            "game3 game3 game3 game4 game4 game4"
            "game5 game5 game5 game6 game6 game6"
            "game7 game7 game7 game8 game8 game8"
            "game9 game9 game9 game10 game10 game10"
            "game11 game11 game11 game12 game12 game12"
            position: absolute;
        width: 100%;
        height: 100%;
        margin: auto;
        background-color: hsla(200,0%,0%,.7);

    }

    .nav {
        font-weight: bold;
        font-size: large;
        font-size: 20px;
    }

    .navLink {
        margin-left: 400px;
    }

    .navLink:hover {
        color: red;
    }

    a:link {
        text-decoration: none;
    }

    .notice {
        color: red;
        font-weight: bold;
        font-size: large;
    }

    .tempory {
        grid-area: tempory;
    }

    body {
        margin: 0px;
    }

    .box {
        padding: 25px;
        font-size: 100%;
        color: white;
    }


    .ganme1 {
        grid-area: game1;
        text-align: center;
    }

    .ganme2 {
        grid-area: game2;
        text-align: center;
    }

    .ganme3 {
        grid-area: game3;
        text-align: center;
    }

    .ganme4 {
        grid-area: game4;
        text-align: center;
    }

    .ganme5 {
        grid-area: game5;
        text-align: center;
    }

    .ganme6 {
        grid-area: game6;
        text-align: center;
    }

    .ganme7 {
        grid-area: game7;
        text-align: center;
    }

    .ganme8 {
        grid-area: game8;
        text-align: center;
    }

    .ganme9 {
        grid-area: game9;
        text-align: center;
    }

    .ganme10 {
        grid-area: game10;
        text-align: center;
    }

    .ganme11 {
        grid-area: game11;
        text-align: center;
    }

    .ganme12 {
        grid-area: game12;
        text-align: center;
    }

    .gameFont {
        color: wheat;
        font-weight: bold;
        font-size: large;
    }


    .gameFont {
        color: wheat;
        font-weight: bold;
        font-size: large;
    }

    .colorWhite {
        color: white;
    }

    .couponCode {
        grid-area: coupon;
        background-color: green;
        color: white;
        font-weight: bold;
    }

    .checkout {
        background-color: #ADEFD1FF;
        border-radius: 12px;
        color: black;
        font-weight: bold;
    }
    </style>
    <?php require_once('fragment/nav.inc.php'); ?><br>
    <nav class="nav">
        <a class="navLink" href="store.php" target="_parent">PlayStation 4</a>
        <a class="navLink" href="PC.php" target="_parent">PC</a>
        <a class="navLink" href="Xbox.php" target="_parent">Xbox</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="notice">You are now on the PC Page</span>
    </nav>
    <br>
    <div class="MainPage">

        <div class="game1 box">
            <img class=" box" src="StorePackage/PCgame1.jpg" alt="PCGameImage1" width="200px" height="200px"> <br>
            <span class="gameFont">Cyberpunk 2077 Day One Edition<br><span class="colorWhite">$99.95 </span>
                <span class="couponCode">Coupon Code applied</span><br><br><br>
                <div><a class="box checkout" href="PC1.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game2 box">
            <img class="box" src="StorePackage/PCgame2.jpg" alt="PCGameImage2" width="200px" height="200px"> <br>
            <span class="gameFont">Total War: Three Kingdoms - Royal Edition<br><span
                    class="colorWhite">$69.95</span></span><br><br><br>
            <div><a class="box checkout" href="PC2.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game3 box">
            <img class="box" src="StorePackage/PCgame3.jpg" alt="PCGameImage3" width="200px" height="200px"> <br>
            <span class="gameFont">The Elder Scrolls Online: Greymoor Upgrade Collector's Edition<br><span class="colorWhite">$249.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br>
            <div><a class="box checkout" href="PC3.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game4 box">
            <img class="box" src="StorePackage/PCgame4.jpg" alt="PCGameImage4" width="200px" height="200px"> <br>
            <span class="gameFont">Rage 2<br><span class="colorWhite">$14.95</span></span>
            <br><br><br><br>
            <div><a class="box checkout" href="PC4.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game5 box">
            <img class="box" src="StorePackage/PCgame5.jpg" alt="PCGameImage5" width="200px" height="200px"> <br>
            <span class="gameFont">Men of War Assault Squad 2: Cold War<br><span
                    class="colorWhite">$14.95</span></span><br><br><br>
            <div><a class="box checkout" href="PC5.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game6 box">
            <img class="box" src="StorePackage/PCgame6.jpg" alt="PCGameImage6" width="200px" height="200px"> <br>
            <span class="gameFont">Sniper Ghost Warrior Contracts 2<br><span class="colorWhite">$59.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br>
            <div><a class="box checkout" href="PC6.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game7 box">
            <img class=" box" src="StorePackage/PCgame7.jpg" alt="PCGameImage7" width="200px" height="200px"> <br>
            <span class="gameFont">Paranormal Pursuit: The Gifted One<br><span class="colorWhite">$14.95 </span>
                <br><br>
                <div><a class="box checkout" href="PC7.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game8 box">
            <img class="box" src="StorePackage/PCgame8.jpg" alt="PCGameImage8" width="200px" height="200px"> <br>
            <span class="gameFont">Crash Bandicoot: N-Sane Trilogy<br><span class="colorWhite">$69.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br>
            <div><a class="box checkout" href="PC8.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game9 box">
            <img class="box" src="StorePackage/PCgame9.jpg" alt="PCGameImage9" width="200px" height="200px"> <br>
            <span class="gameFont">Monkey King: Hero is Back<br><span
                    class="colorWhite">$9.95</span></span><br><br><br>
            <div><a class="box checkout" href="PC9.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game10 box">
            <img class="box" src="StorePackage/PCgame10.jpg" alt="PCGameImage10" width="200px" height="200px"> <br>
            <span class="gameFont">Mystery Tales: The Reel Horror<br><span class="colorWhite">$14.95</span></span><br><br><br>
            <div><a class="box checkout" href="PC10.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game11 box">
            <img class="box" src="StorePackage/PCgame11.jpg" alt="PCGameImage11" width="200px" height="200px"> <br>
            <span class="gameFont">Football Manager 2020<br><span class="colorWhite">$49.95</span></span>
           <br><br><br>
            <div><a class="box checkout" href="PC11.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game12 box">
            <img class="box" src="StorePackage/PCgame12.jpg" alt="PCGameImage12" width="200px" height="200px"> <br>
            <span class="gameFont">Anthem<br><span class="colorWhite">$1.00</span></span><br><br><br>
            <div><a class="box checkout" href="PC12.php" target="_parent">Check Out</a></div>
        </div>

    </div>
    <?php require_once('fragment/footer.inc.php'); ?>
</body>

</html>

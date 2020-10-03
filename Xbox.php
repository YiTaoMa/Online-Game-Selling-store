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
        <span class="notice">You are now on the Xbox Page</span>
    </nav>
    <br>
    <div class="MainPage">

        <div class="game1 box">
            <img class=" box" src="StorePackage/Xgame1.jpg" alt="XGameImage1" width="200px" height="200px"> <br>
            <span class="gameFont">LEGO Star Wars: The Skywalker Saga (Placeholder Price)<br><span class="colorWhite">$89.95 </span>
                <span class="couponCode">Coupon Code applied</span><br><br><br>
                <div><a class="box checkout" href="X1.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game2 box">
            <img class="box" src="StorePackage/Xgame2.jpg" alt="XGameImage2" width="200px" height="200px"> <br>
            <span class="gameFont">Car Mechanic Simulator<br><span
                    class="colorWhite">$49.95</span></span><br><br><br><br>
            <div><a class="box checkout" href="X2.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game3 box">
            <img class="box" src="StorePackage/Xgame3.jpg" alt="XGameImage3" width="200px" height="200px"> <br>
            <span class="gameFont">Skater XL<br><span class="colorWhite">$69</span></span>
            <br><br><br><br>
            <div><a class="box checkout" href="X3.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game4 box">
            <img class="box" src="StorePackage/Xgame4.jpg" alt="XGameImage4" width="200px" height="200px"> <br>
            <span class="gameFont">Dragon Ball Z: Kakarot<br><span class="colorWhite">$79.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br><br>
            <div><a class="box checkout" href="X4.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game5 box">
            <img class="box" src="StorePackage/Xgame5.jpg" alt="XGameImage5" width="200px" height="200px"> <br>
            <span class="gameFont">Little Nightmares 2 Day One Edition<br><span
                    class="colorWhite">$59.95</span></span><br><br><br>
            <div><a class="box checkout" href="X5.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game6 box">
            <img class="box" src="StorePackage/Xgame6.jpg" alt="XGameImage6" width="200px" height="200px"> <br>
            <span class="gameFont">Tom Clancy's Ghost Recon: Wildlands Year 2 Gold Edition<br><span class="colorWhite">$24.95</span></span>
           <br><br><br>
            <div><a class="box checkout" href="X6.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game7 box">
            <img class=" box" src="StorePackage/Xgame7.jpg" alt="XGameImage7" width="200px" height="200px"> <br>
            <span class="gameFont">AFL Evolution 2<br><span class="colorWhite">$99.95 </span>
                <span class="couponCode">Coupon Code applied</span><br><br><br>
                <div><a class="box checkout" href="X7.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game8 box">
            <img class="box" src="StorePackage/Xgame8.jpg" alt="XGameImage8" width="200px" height="200px"> <br>
            <span class="gameFont">Spongebob Squarepants: Battle for Bikini Bottom – Rehydrated<br><span class="colorWhite">$49.95</span></span>
            <br><br>
            <div><a class="box checkout" href="X8.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game9 box">
            <img class="box" src="StorePackage/Xgame9.jpg" alt="XGameImage9" width="200px" height="200px"> <br>
            <span class="gameFont">No Man's Sky<br><span
                    class="colorWhite">$59.95</span></span><br><br><br>
            <div><a class="box checkout" href="X9.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game10 box">
            <img class="box" src="StorePackage/Xgame10.jpg" alt="XGameImage10" width="200px" height="200px"> <br>
            <span class="gameFont">Anthem (preowned)<br><span class="colorWhite">$4.00</span></span><br><br><br>
            <div><a class="box checkout" href="X10.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game11 box">
            <img class="box" src="StorePackage/Xgame11.jpg" alt="XGameImage11" width="200px" height="200px"> <br>
            <span class="gameFont">A.O.T 2: Final Battle<br><span class="colorWhite">$39.95</span></span>
           <br><br><br>
            <div><a class="box checkout" href="X11.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game12 box">
            <img class="box" src="StorePackage/Xgame12.jpg" alt="XGameImage12" width="200px" height="200px"> <br>
            <span class="gameFont">Borderlands 3 (preowned)<br><span class="colorWhite">$25.00</span></span><br><br><br>
            <div><a class="box checkout" href="X12.php" target="_parent">Check Out</a></div>
        </div>

    </div>
    <?php require_once('fragment/footer.inc.php'); ?>
</body>

</html>

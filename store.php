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
            position: absolute;
        width: 100%;
        height: 100%;
        margin: auto;
        background-color: rgb(68 60 54 / 1);
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
        background-color: red;
        color: white;
        font-weight: bold;
    }
    </style>
    <?php require_once('fragment/nav.inc.php'); ?>
    <div class="MainPage">


        <div class="game1 box">
            <img class=" box" src="StorePackage/game1.jpg" alt="GameImage1" width="200px" height="200px"> <br>
            <span class="gameFont">Tony Hawk’s Pro Skater 1 + 2<br><span class="colorWhite">$69.95 </span>
                <span class="couponCode">Coupon Code applied</span><br><br><br>
                <div><a class="box checkout" href="purchase.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game2 box">
            <img class="box" src="StorePackage/game2.jpg" alt="GameImage2" width="200px" height="200px"> <br>
            <span class="gameFont">NBA 2K21 Mamba Forever Edition<br><span
                    class="colorWhite">$149.95</span></span><br><br><br>
            <div><a class="box checkout" href="purchase.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game3 box">
            <img class="box" src="StorePackage/game3.jpg" alt="GameImage3" width="200px" height="200px"> <br>
            <span class="gameFont">Marvel's Avengers<br><span class="colorWhite">$99.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br>
            <div><a class="box checkout" href="purchase.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game4 box">
            <img class="box" src="StorePackage/game4.jpg" alt="GameImage4" width="200px" height="200px"> <br>
            <span class="gameFont">NBA 2K21<br><span class="colorWhite">$99.95</span></span><br><br><br>
            <div><a class="box checkout" href="purchase.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game5 box">
            <img class="box" src="StorePackage/game5.jpg" alt="GameImage4" width="200px" height="200px"> <br>
            <span class="gameFont">Crash Bandicoot 4: It's About Time<br><span
                    class="colorWhite">$99.95</span></span><br><br><br>
            <div><a class="box checkout" href="purchase.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game6 box">
            <img class="box" src="StorePackage/game6.jpg" alt="GameImage4" width="200px" height="200px"> <br>
            <span class="gameFont">Call of Duty®: Black Ops Cold War<br><span class="colorWhite">$109.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br>
            <div><a class="box checkout" href="purchase.php" target="_parent">Check Out</a></div>


        </div>

    </div>
    <?php require_once('fragment/footer.inc.php'); ?>
</body>

</html>
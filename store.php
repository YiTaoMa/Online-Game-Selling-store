
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
        <span class="notice">You are now on the PlayStation 4 Page</span>
    </nav>
    <br>
    <div class="MainPage">

        <div class="game1 box">
            <img class=" box" src="StorePackage/game1.jpg" alt="GameImage1" width="200px" height="200px"> <br>
            <span class="gameFont">Tony Hawk’s Pro Skater 1 + 2<br><span class="colorWhite">$69.95 </span>
                <span class="couponCode">Coupon Code applied</span><br><br><br>
                <div><a class="box checkout" href="G1.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game2 box">
            <img class="box" src="StorePackage/game2.jpg" alt="GameImage2" width="200px" height="200px"> <br>
            <span class="gameFont">NBA 2K21 Mamba Forever Edition<br><span
                    class="colorWhite">$149.95</span></span><br><br><br>
            <div><a class="box checkout" href="G2.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game3 box">
            <img class="box" src="StorePackage/game3.jpg" alt="GameImage3" width="200px" height="200px"> <br>
            <span class="gameFont">Marvel's Avengers<br><span class="colorWhite">$99.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br>
            <div><a class="box checkout" href="G3.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game4 box">
            <img class="box" src="StorePackage/game4.jpg" alt="GameImage4" width="200px" height="200px"> <br>
            <span class="gameFont">NBA 2K21<br><span class="colorWhite">$99.95</span></span><br><br><br>
            <div><a class="box checkout" href="G4.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game5 box">
            <img class="box" src="StorePackage/game5.jpg" alt="GameImage5" width="200px" height="200px"> <br>
            <span class="gameFont">Crash Bandicoot 4: It's About Time<br><span
                    class="colorWhite">$99.95</span></span><br><br><br>
            <div><a class="box checkout" href="G5.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game6 box">
            <img class="box" src="StorePackage/game6.jpg" alt="GameImage6" width="200px" height="200px"> <br>
            <span class="gameFont">Call of Duty®: Black Ops Cold War<br><span class="colorWhite">$109.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br>
            <div><a class="box checkout" href="G6.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game7 box">
            <img class=" box" src="StorePackage/game7.jpg" alt="GameImage7" width="200px" height="200px"> <br>
            <span class="gameFont">Assassin's Creed: Valhalla Drakkar Edition<br><span class="colorWhite">$99.95 </span>
                <span class="couponCode">Coupon Code applied</span><br><br>
                <div><a class="box checkout" href="G7.php" target="_parent">Check Out</a></div>
        </div>

        <div class="game8 box">
            <img class="box" src="StorePackage/game8.jpg" alt="GameImage8" width="200px" height="200px"> <br>
            <span class="gameFont">EA Sports UFC 4<br><span class="colorWhite">$99.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br>
            <div><a class="box checkout" href="G8.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game9 box">
            <img class="box" src="StorePackage/game9.jpg" alt="GameImage9" width="200px" height="200px"> <br>
            <span class="gameFont">Mafia: Definitive Edition<br><span
                    class="colorWhite">$69.95</span></span><br><br><br>
            <div><a class="box checkout" href="G9.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game10 box">
            <img class="box" src="StorePackage/game10.jpg" alt="GameImage10" width="200px" height="200px"> <br>
            <span class="gameFont">Minecraft Dungeons<br><span class="colorWhite">$49.95</span></span><br><br><br>
            <div><a class="box checkout" href="G10.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game11 box">
            <img class="box" src="StorePackage/game11.jpg" alt="GameImage11" width="200px" height="200px"> <br>
            <span class="gameFont">Hogwarts Legacy<br><span class="colorWhite">$99.95</span></span>
            <span class="couponCode">Coupon Code applied</span><br><br><br>
            <div><a class="box checkout" href="G11.php" target="_parent">Check Out</a></div>

        </div>

        <div class="game12 box">
            <img class="box" src="StorePackage/game12.jpg" alt="GameImage12" width="200px" height="200px"> <br>
            <span class="gameFont">Days Gone (preowned)<br><span class="colorWhite">$22.00</span></span><br><br><br>
            <div><a class="box checkout" href="G12.php" target="_parent">Check Out</a></div>
        </div>

    </div>
    <?php require_once('fragment/footer.inc.php'); ?>
</body>

</html>

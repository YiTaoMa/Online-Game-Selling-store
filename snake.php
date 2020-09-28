<?php require_once('fragment/functions.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('fragment/functions.inc.php'); ?>

<head>
    <?php require_once('fragment/head.inc.php'); ?>
    <meta charset="utf-8">
    <title>Snake</title>
    <link rel="stylesheet" href="snake/snake.css" media="screen">
    <script type="text/javascript" src="snake/snake.js"></script>
    <script type="text/javascript" src="snake/jquery.min.js"></script>
</head>

<body>
<?php require_once('fragment/nav.inc.php'); ?>


<div class="wrap">
    <ul class="snake_wrap">
        <li class="light"></li>
        <li class="light"></li>
        <li class="light"></li>
    </ul>
    <span class="food"></span>
    <div class="Data">
        <div class="score">0</div>
        <ul class="ranking_list"></ul>
        <button class="couponBtn" onclick="document.getElementById('u-coupon').style.display='block'">Generate Coupon Code </button>
    </div>


    <div class="start zhez">
        <input type="text" name="your_name" placeholder="Enter Your Name">
        <span class="game_start">Start</span>
    </div>
    <div class="over zhez">
        <p><i>GAME OVER</i></p>
        <span class="game_over">Restart</span>
    </div>
    <div class="explain">
        <h3>Operation Guide</h3>
        <p>Enter the game nickname (do not enter the default "guest").</p>
        <p>Click the "Start" button to start the game.</p>
        <p>Use the keyboard arrow keys (A W S D) to control the direction, and the space bar to pause.</p>
        <p>After the game starts, every time you successfully eat food, the score increases by 1, and the body will lengthen by one piece. As the body of the snake lengthens, the speed will also increase.</p>
        <p>When the snake head jumps out of the boundary or hits itself, the game ends.</p>
    </div>

    <div class="w-border" id="u-coupon">
        <div class="w-head">
            <span class="w-title">Generate Coupon Code</span>
            <span title="closeAncSave" id="opt-bt-yes" class="w-close-x" onclick="document.getElementById('u-coupon').style.display='none'">×</span>
        </div>
        <div class="w-body">

        </div>
    </div>
</div>


<?php require_once('fragment/footer.inc.php'); ?>
</body>

</html>

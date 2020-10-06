
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

<div class="container">
    <audio controls="controls" autoplay="autoplay" controls="controls" loop="loop" id="musicAudio">
        <source src="music/hahaha.mp3" type="audio/mp3">
        <source src="music/hahaha.mp3" type="audio/ogg">
        <embed height="50px" width="100px" src="file/tears.mp3">
    </audio>
    <h2 style="font-family: Courier New; text-align: center;">Welcome HD Games! Before you go shopping, try playing games to relax and you may get coupons.</h2>
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
            <button class="couponBtn" style="display: block" onclick="document.getElementById('u-settings').style.display='block'">Settings</button>
        </div>


        <div class="start zhez">
            <input type="text" name="your_name" placeholder="Enter Your Name">
            <span class="game_start" onclick="document.getElementById('u-coupon').style.display='none'">Start</span>
        </div>
        <div class="over zhez">
            <p><i>GAME OVER</i></p>
            <span class="game_over" onclick="document.getElementById('u-coupon').style.display='none'">Restart</span>
        </div>
        <div class="explain">
            <h3>Guidance</h3>
            <p>Enter the game nickname (do not enter the default "guest").</p>
            <p>Click the "Start" button to start the game.</p>
            <p>Use the keyboard arrow keys <b>(A W S D)</b> to control the direction, and the space bar to pause.</p>
            <p>After the game starts, every time you successfully eat food, the score increases by 1, and the body will lengthen by one piece. As the body of the snake lengthens, the speed will also increase.</p>
            <p>When the snake head jumps out of the boundary or hits itself, the game ends.</p>
        </div>



        <div class="w-border" id="u-coupon1">
            <div class="w-head">
                <span class="w-title">Generate Coupon Code</span>
                <span title="closeAncSave" id="opt-bt-yes" class="w-close-x" onclick="document.getElementById('u-coupon1').style.display='none'">×</span>
            </div>
            <div class="w-body">
                <div class="cont-opt">
                    <div>This is Your Coupon Code</div>

                    <div class="opt-item">
                        <div>
                            NO1-<?php require('snake/couponCode.php'); ?>
                        </div>
                    </div>
                    <div>
                        <a href="store.php">GO SHOPPING</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-border" id="u-coupon2">
            <div class="w-head">
                <span class="w-title">Generate Coupon Code</span>
                <span title="closeAncSave" id="opt-bt-yes" class="w-close-x" onclick="document.getElementById('u-coupon2').style.display='none'">×</span>
            </div>
            <div class="w-body">
                <div class="cont-opt">
                    <div>This is Your Coupon Code</div>

                    <div class="opt-item">
                        <div>
                           NO2-<?php require('snake/couponCode.php'); ?>
                        </div>
                    </div>

                    <div>
                        <a href="store.php">GO SHOPPING</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-border" id="u-coupon3">
            <div class="w-head">
                <span class="w-title">Generate Coupon Code</span>
                <span title="closeAncSave" id="opt-bt-yes" class="w-close-x" onclick="document.getElementById('u-coupon3').style.display='none'">×</span>
            </div>
            <div class="w-body">
                <div class="cont-opt">
                    <div>This is Your Coupon Code</div>

                    <div class="opt-item">
                        <div>
                            NO3-<?php require('snake/couponCode.php'); ?>
                        </div>
                    </div>

                    <div>
                        <a href="store.php">GO SHOPPING</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-border" id="u-coupon4-10">
            <div class="w-head">
                <span class="w-title">Generate Coupon Code</span>
                <span title="closeAncSave" id="opt-bt-yes" class="w-close-x" onclick="document.getElementById('u-coupon4-10').style.display='none'">×</span>
            </div>
            <div class="w-body">
                <div class="cont-opt">
                    <div>This is Your Coupon Code</div>

                    <div class="opt-item">
                        <div>
                            TOP10-<?php require('snake/couponCode.php'); ?>
                        </div>
                    </div>

                    <div>
                        <a href="store.php">GO SHOPPING</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-border" id="u-settings">
            <div class="w-head">
                <span class="w-title">Settings</span>
                <span title="closeAncSave" id="opt-bt-yes" class="w-close-x" onclick="document.getElementById('u-settings').style.display='none'">×</span>
            </div>
            <div class="w-body">
                <div class="cont-opt">
                    <div>Music</div>

                    <div class="opt-item mb-sound">
                        <div>
                            <span>Pause</span><input id="off-sound" type="checkbox">
                        </div>
                    </div>

                    <div>About</div>
                    <div class="opt-item about-me">
                        <span><b>AR-TH-930-HD</b></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reward-explain">
        <h4><b>RULES</b></h4>
        <p>1. Players who enter the top 10 can receive corresponding rewards on the page the next day</p>
        <p>2. The leaderboard is reset at 0 o'clock every day, after 0 o'clock, the top 10 players from the previous day will be generated.</p>
    </div>
    <div class="reward">
        <ul class="reward_list">
            <li>
                <h5>NO.1</h5>
                <p class="reward_no1" id="no1_name">Name</p>
                <img src="img/80.jpg" alt="80% off" width="200" height="100"><br>
                <p class="reward_no3" id="no1_score">Score</p><br>
                <button onclick="document.getElementById('u-coupon1').style.display='block';
                document.getElementById('u-coupon2').style.display='none';
                document.getElementById('u-coupon3').style.display='none';
                document.getElementById('u-coupon4-10').style.display='none';
                document.getElementById('u-settings').style.display='none'">Generate Coupon Code</button>
            </li>
            <li>
                <h5>NO.2</h5>
                <p class="reward_no2" id="no2_name">Name</p>
                <img src="img/50.jpg" alt="50% off" width="200" height="100"><br>
                <p class="reward_no3" id="no2_score">Score</p><br>
                <button onclick="document.getElementById('u-coupon2').style.display='block';
                document.getElementById('u-coupon3').style.display='none';
                document.getElementById('u-coupon1').style.display='none';
                document.getElementById('u-coupon4-10').style.display='none';
                document.getElementById('u-settings').style.display='none'">Generate Coupon Code</button>
            </li>
            <li>
                <h5>NO.3</h5>
                <p class="reward_no3" id="no3_name">Name</p>
                <img src="img/30.jpg" alt="30% off" width="200" height="100"><br>
                <p class="reward_no3" id="no3_score">Score</p><br>
                <button onclick="document.getElementById('u-coupon3').style.display='block';
                document.getElementById('u-coupon1').style.display='none';
                document.getElementById('u-coupon2').style.display='none';
                document.getElementById('u-coupon4-10').style.display='none';
                document.getElementById('u-settings').style.display='none'">Generate Coupon Code</button>
            </li>
            <li>
                <h5>NO.4-10</h5>
                <p class="reward_no4-10"></p>
                <img src="img/10.jpg" alt="10% off" width="200" height="100"><br>
                <p class="reward_no4-10"></p><br>
                <button onclick="document.getElementById('u-coupon4-10').style.display='block';
                document.getElementById('u-coupon3').style.display='none';
                document.getElementById('u-coupon1').style.display='none';
                document.getElementById('u-coupon2').style.display='none';
                document.getElementById('u-settings').style.display='none'">Generate Coupon Code</button>
            </li>
        </ul>
    </div>

    <?php require_once('fragment/footer.inc.php'); ?>
</div>

</body>

</html>

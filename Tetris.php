<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Tetris</title>
  <link rel="stylesheet" href="tetris/tetris.css" media="screen" type="text/css" />
</head>

<body>


<div class="game-window">
  <!-- left -->
  <div class="left-bar">

    <div class="holdbox">
      <span>HOLD</span>
      <canvas id="hold" width="202" height="138"></canvas>
    </div>

    <div class="left-bar-content">

      <div class="leftbox">
        <span class="label">SCORE</span>
        <div>
          <span id="panel-score">0</span>
        </div>
      </div>

      <div class="leftbox">
        <span class="label">LEVELS</span>
        <div>
          <span id="panel-line">0</span>
        </div>
      </div>

      <div class="leftbox">
        <span class="label">You Got</span>
        <div>
          <span id="panel-level">0%</span>
        </div>
        <span class="label">Discount</span>
      </div>

      <div class="leftbox">
        <button onclick="generateCode()">Generate Coupon Code</button>
      </div>

    </div>


    <div class="option-bar">
      <a href="javascript:void(0)" id="top10" onclick="document.getElementById('u-info').style.display='block'; document.getElementById('u-option').style.display='none'">Ranking List</a>
      <a href="javascript:void(0)" id="setting" onclick="document.getElementById('u-option').style.display='block'; document.getElementById('u-info').style.display='none'">Settings</a>
    </div>

  </div>

  <!-- center -->
  <div id="canvas-box" style="width: 320px; height: 640px;">
    <canvas width="320" height="640" id="game"></canvas>

  </div>

  <!-- right -->
  <div class="right-bar">
    <div class="right-bar-top">
      <div class="right-label-top">

      </div>
      <canvas id="s-canvas" width="184" height="550"></canvas>
    </div>
    <div class="bar-bottom-right">
      <div id="control">
        <span id="startPause" class="w-button" style="background-color: rgb(253, 253, 34);" onclick="startLoop()">START</span>
        <span id="reset" class="w-button" onclick="reset()">RESET</span>
      </div>
    </div>
  </div>
</div>

<div class="w-border" id="u-info">
  <div class="w-head">
    <span class="w-title">Ranking List - Top 10</span>
    <span class="t-close w-close-x" onclick="document.getElementById('u-info').style.display='none'">×</span>
  </div>
  <div id="cont-table">
    <table cellspacing="3" id="table-list">
      <tbody><tr>
        <th>Place</th>
        <th>Name</th>
        <th>Score</th>
        <th>Level</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      </tbody></table>
  </div>
</div>

<div class="w-border" id="u-option">
  <div class="w-head">
    <span class="w-title">Settings</span>
    <span title="closeAncSave" id="opt-bt-yes" class="w-close-x" onclick="document.getElementById('u-option').style.display='none'">×</span>
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



<script src="tetris/tetris1.js"></script>
</body>

</html>

<?php require_once('fragment/functions.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('fragment/head.inc.php'); ?>
<style>
  body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
  background-image: url(img/pink.jpg);
}
.navigation{
    height: 80px;
    border: 3px solid #E3E3E3;
    margin-top: 10px;
    font-size: 20px;
    background-image: url(img/pink.jpg);
}
.leftcolumn {
  float: left;
  width: 75%;
}
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
  background-image: url(img/pink.jpg);
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  background-image: url(img/pink.jpg);
}
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
</style>
</head>

<body>
<?php require_once('fragment/nav.inc.php'); ?>
<div class="container">
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Do you like our website?</h2>
                <h5>Title description, Sep 19, 2020</h5>
                <a href="Blogpage1.php"><div><img src="img/imag1.jpg" alt="imag1" style="width:600px;height:400px;"></div>
                    The blog introduces the introduction and explanation of the game,
                    welcome to have comment to share your interesting ideas with us.</a>
            </div>
            <div class="card">
                <h2>What game do you usually play?</h2>
                <h5>Title description, Sep 20, 2020</h5>
                <a href="Blogpage2.php"><div><img src="img/imag2.jpg" alt="imag2" width="600px" height="400px"></div>
                    What kind of game product do you like? What kind of game do you usually play?
                    Welcome to discuss with us.</a>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>About Me</h2>
                <div class="fakeimg" style="height:100px;">Image</div>
                <p>Some text about me...</p>
            </div>
            <div class="card">
                <h3>Popular Post</h3>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div><br>
                <div class="fakeimg">Image</div>
            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
            </div>
        </div>
    </div>
    <?php require_once('fragment/footer.inc.php'); ?>
</div>





</body>
</html>

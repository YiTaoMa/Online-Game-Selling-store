<!DOCTYPE html>
<html>
<title>Design and Architecture</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Blog.css">
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

<div class="header">
    <h2>HD games</h2>
  </div>
  <body>
      <nav class="navigation">
          <ul>
              <a href="#">Homepage page</a>|
              <a href="#">Game store</a>|
              <a href="#">Contact us page</a>|
              <a href="Blog.php">Blog</a>|
              <a href="#">Purchase</a>|
              <a href="#">Register</a>|
              <a href="#">Login</a>
            </ul>
      </nav>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
        <h2>What game do you usually play?</h2>
        <h5>Title description, Sep 20, 2020</h5>
        <p><div><img src="img/imag2.jpg" alt="imag2" width="600px" height="400px"></div>
        What kind of game product do you like? What kind of game do you usually play? 
            Welcome to discuss with us.</p>

            <form action="Blogpage1.php" method="GET">
                <div>
                <textarea name="comments" id="comments" style="width:96%;height:100px;padding:2%;font-size:1.2em;border:1px solid #6DB72C;"">
                Hey... say something!
                </textarea>
                </div>
                <input type="submit" value="Submit">
                </form>

            <a href="Blog.php">Back to blog page</a>|<a href="Blogpage1.php">Go to next blog</a>
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

<div class="footer">
  <h2>Copyright</h2>
</div>
</body>
</html>

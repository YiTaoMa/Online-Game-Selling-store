<?php require_once('fragment/authorise.inc.php'); ?>
<?php require_once('fragment/functions.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('fragment/head.inc.php'); ?>
    <title>Blog1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <?php
                require_once 'config1.php';
                require_once 'class.php';
                $connection = new dbController(HOST,USER,PASS,DB);
                
                $blogname = $connection->cleanUp($_POST['blogname']);
                $blogdate = $connection->cleanUp($_POST['blogdate']);
                $image = 'image/'.$_FILES['image']['name'];
                $temp = $_FILES['image']['tmp_name'];
                $description = $connection->cleanUp($_POST['description']);

                $sql = "insert into blogpage
                (blogname,blogdate,image,description) values
                ('$blogname','$blogdate','$image','$description')";

if($connection->insertRecord($sql)){
   echo '<p>New record successfully inserted into the database.</p>';

   $connection->uploadImage($temp,$image);
}
else {
   echo '</p>Record not inserted into the database.</p>';
}

                
                ?>


                
            </div>


        </div>
        <div class="rightcolumn">
            <div class="card">
            <h2>Create blogs!</h2>
        <div><img src="img/create.jpg" alt="create" style="width:200px;height:100px;"></div>
        <p>Let's creat your own blog!</p>
        <div><a href="insert_blog.php">Create a New Blog</a></div>
    </div>
    <div class="card">
        <h3>Popular Post</h3>
        <div><img src="img/post1.jpg" alt="post1" style="width:200px;height:70px;"></div><br>
        <div><img src="img/post2.jpg" alt="post2" style="width:200px;height:70px;"></div><br>
        <div><img src="img/post3.jpg" alt="post3" style="width:200px;height:70px;"></div>
    </div>
    <div class="card">
        <h3>Follow Me</h3>
        <p>Instagram: HDgames
           Fackbook: HDgames</p>
            </div>
        </div>
    </div>


    <?php require_once('fragment/footer.inc.php'); ?>
</div>


</body>
</html>

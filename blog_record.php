<?php
    require_once 'config1.php';
    require_once 'class.php';
    $connection = new dbController(HOST,USER,PASS,DB);
    $sql = "select * from blogpage where blogname = 'Do you like our website?'";
    $records = $connection->getOneRecord($sql);
    //print_r($records);

    echo"<h2>{$records['blogname']}</h2>";
    echo"<p>{$records['blogdate']}</p>";
    echo "<img src='{$records['image']}' alt='{$records['blogname']}'>";
    echo"<p>{$records['description]']}</p>";
?>

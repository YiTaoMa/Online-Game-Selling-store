<?php
    require_once('functions.inc.php');

    if(!isUserLoggedIn()) {
        header('Location: login.php');
        exit();
    }

<?php
    require_once('fragment/functions.inc.php');

    logoutUser();
    header('Location: login.php');
    exit();

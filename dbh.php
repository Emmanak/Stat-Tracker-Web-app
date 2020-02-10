<?php

define('DB_NAME', 'id12387703_stats');
define('DB_USER', 'id12387703_emmanak');
define('DB_PASSWORD', 'emmanuel');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
    die('Could not connect: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, DB_NAME);

if (!$db_selected){
    die('Can\'t use ' . DB_NAME . ':' . mysqli_error());
}

//echo 'Connected successfully';

//$value = $_POST['bibles'];

//mysqli_close($link);
?>
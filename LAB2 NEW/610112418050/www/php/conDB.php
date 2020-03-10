<?php
$host = "db";
$user = "root";
$pass = "test";
$db = "db_050";

$link = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($link));

//echo $link?"Connected !!":"Error...";
?>
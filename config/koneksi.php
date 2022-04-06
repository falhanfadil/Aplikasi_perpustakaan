<?php

//mysql -u root -p
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpus_fadil";

$db = mysqli_connect($host,$user,$pass,$db);

if (!$db) {
    die("database tidak terhubung");
}
 
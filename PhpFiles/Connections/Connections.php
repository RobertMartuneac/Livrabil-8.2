<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpas = "";
$dbname = "login_db";


if(!$con = mysqli_connect($dbhost, $dbuser, $dbpas, $dbname))
{
    die("failed to connect!");
}
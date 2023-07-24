<?php


$dbhost = "localhost";
$dbuser = "root";
$dbname = "junkonnect";
$dbpass = "";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

    die("Failed to Connect!");
}
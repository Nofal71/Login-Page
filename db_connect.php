<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authentication_system";

$conn = mysqli_connect($servername , $username ,$password, $dbname);

if(!$conn){
    die("could not connect " . mysqli_error($conn));
}



?>
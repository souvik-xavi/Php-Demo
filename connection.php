<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="user";

$connection = mysqli_connect($servername,$username,$password,$database);

if(!$connection){

    echo "Some error occured";
}


?>
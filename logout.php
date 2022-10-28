<?php 
session_start();
echo $_SESSION["email"];
unset($_SESSION["email"]);
unset($_SESSION["name"]);
session_destroy();

header('Refresh: 2; URL = login.php');

?>
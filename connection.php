<?php

$server = "localhost";
$username = "root";
$password = "";
$database="interact";

$con = mysqli_connect($server, $username, $password, $database);

mysqli_select_db($con, 'interact');

?>
<?php

include("connection.php");
session_start();

$name = $_GET['search'];

$result = mysqli_query($con, "SELECT * FROM profile WHERE userskill1 LIKE '%{$name}%' OR userskill2 LIKE '%{$name}%' OR userskill3 LIKE '%{$name}%' OR userskill4 LIKE '%{$name}%' ");

// $result = mysqli_query($con, $query) or die(mysqli_error($con));

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    echo $row['userid'] . " " . $row['username'] . " " . $row['useremail'] . " " . $row['useryear'] . " " . $row['userbranch'];
    echo "<br>";
}
?>

<!-- AB ISKA USE NHI HAI
---PR ABHI ISKO DELETE MT KRNA---
KHI GDBD HUI TO IDHR SE CODE FIRSE CHECK KR SKTE HAIN -->


<?php

include("connection.php");
session_start();

$name = $_GET['search'];

$result = mysqli_query($con, "SELECT * FROM profile WHERE userskill1 LIKE '%{$name}%' OR userskill2 LIKE '%{$name}%' OR userskill3 LIKE '%{$name}%' OR userskill4 LIKE '%{$name}%' ");

// $result = mysqli_query($con, $query) or die(mysqli_error($con));

// $count = mysqli_num_rows($result);  
          
// if($count == 1){  
//     // echo "Name".$_SESSION['userid']; 
//     header("location: search_result.php");
//     // echo "Signin Successful";

//     // $_SESSION['user_name'] = $userid;

    
// } 
header("Location: search_result.php");

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    echo $row['userid'] . " " . $row['username'] . " " . $row['useremail'] . " " . $row['useryear'] . " " . $row['userbranch'];
    echo "<br>";
}
?>
<?php

$server = "localhost";
$username = "root";
$password = "";
$database="interact";

$con = mysqli_connect($server, $username, $password, $database);

// $con = mysqli_connect('localhost','root','','techint');

if($con){
    echo "Connection Successful";}
// else{
//     echo "No Connection";
// }
// echo "success";

mysqli_select_db($con, 'interact');

$userfname = $_POST['userfname'];
$userlname = $_POST['userlname'];
$userdob = $_POST['userdob'];
$usergender = $_POST['usergender'];
$useryear = $_POST['useryear'];
$userbranch = $_POST['userbranch'];
$userlinkd = $_POST['userlinkd'];
$usergithub = $_POST['usergithub'];
$usermobile = $_POST['usermobile'];
$userinsta = $_POST['userinsta'];
$userinfo = $_POST['userinfo'];
// echo "You have entered " . $username . " " . $useremail . " " . $userpass . " " . $usercnfpass;
$query = "INSERT INTO profile (userfname, userlname, userdob, usergender, useryear, userbranch, userlinkd, usergithub, usermobile, userinsta, userinfo) VALUES ('$userfname','$userlname','$userdob','$usergender','$useryear', '$userbranch', '$userlinkd','$usergithub','$usermobile','$userinsta','$userinfo')";




mysqli_query($con, $query);

if(isset($_POST['submit']))
{
    header("Location: profile.php");
}

?>
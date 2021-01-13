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

$userid = $_POST['userid'];
$username = $_POST['username'];
$userdob = $_POST['userdob'];
$usergender = $_POST['usergender'];
$useryear = $_POST['useryear'];
$userbranch = $_POST['userbranch'];
$userlinkd = $_POST['userlinkd'];
$usergithub = $_POST['usergithub'];
$usermobile = $_POST['usermobile'];
$useremail = $_POST['useremail'];
$userinfo = $_POST['userinfo'];
$userskill1 = $_POST['userskill1'];
$userskill2 = $_POST['userskill2'];
$userskill3 = $_POST['userskill3'];
$userskill4 = $_POST['userskill4'];

// echo "You have entered " . $username . " " . $useremail . " " . $userpass . " " . $usercnfpass;
$query = "INSERT INTO profile (userid, username, userdob, usergender, useryear, userbranch, userlinkd, usergithub, usermobile, useremail, userinfo, userskill1, userskill2, userskill3, userskill4) VALUES ('$userid','$username','$userdob','$usergender','$useryear', '$userbranch', '$userlinkd','$usergithub','$usermobile','$useremail','$userinfo', '$userskill1', '$userskill2', '$userskill3', '$userskill4' )";




mysqli_query($con, $query);

if(isset($_POST['submit']))
{
    header("Location: profile.php");
}

?>
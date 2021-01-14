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
$userskill1 = $_POST['userskill1'];
$userskill2 = $_POST['userskill2'];
$userskill3 = $_POST['userskill3'];
$userskill4 = $_POST['userskill4'];


// $msg = '';
// if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['userimage'];
    // $img = file_get_contents($image);
    // $con = mysqli_connect('localhost','root','','admin') or die('Unable To connect');
    // $sql = "insert into images (image) values(?)";

    // $stmt = mysqli_prepare($con,$sql);

    // mysqli_stmt_bind_param($stmt, "s",$img);
    // mysqli_stmt_execute($stmt);

    // $check = mysqli_stmt_affected_rows($stmt);
    // if($check==1){
    //     $msg = 'Image Successfullly UPloaded';
    // }else{
    //     $msg = 'Error uploading image';
    // }
    // mysqli_close($con);
// }




// echo "You have entered " . $username . " " . $useremail . " " . $userpass . " " . $usercnfpass;
$query = "INSERT INTO profile (userid, username, userdob, usergender, useryear, userbranch, userlinkd, usergithub, usermobile, useremail, userskill1, userskill2, userskill3, userskill4, userimage) VALUES ('$userid','$username','$userdob','$usergender','$useryear', '$userbranch', '$userlinkd','$usergithub','$usermobile','$useremail', '$userskill1', '$userskill2', '$userskill3', '$userskill4', '$image' )";


mysqli_query($con, $query);

if(isset($_POST['submit']))
{
    header("Location: home_after.html");
}

?>
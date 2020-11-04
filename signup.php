<?php


include("connection.php");


$userid = $_POST['userid'];
$useremail = $_POST['useremail'];
$userpass = $_POST['userpass'];
$usercnfpass = $_POST['usercnfpass'];



$query = "INSERT INTO signup ( userid, useremail, userpass, usercnfpass) VALUES ('$userid','$useremail','$userpass','$usercnfpass')";

if($userpass==$usercnfpass)
{
mysqli_query($con, $query);
}
else{
    echo "Incorrect Password";
}

if(isset($_POST['submitted']))
{
    header("Location: interact.html");
}

?>






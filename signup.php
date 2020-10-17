<?php

// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database="interact";

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);

// Check for connection success
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
echo "Success connecting to the db";
if(isset($_POST['submitted']))
{ 
 // Collect post variables
 $name = $_POST['username'];
 $email = $_POST['useremail'];
 $pass = $_POST['userpass'];
 $cnfpass = $_POST['usercnfpass'];
 
 $sql = "INSERT INTO `signup` (`username`, `useremail`, `userpass`, `usercnfpass`) VALUES ('$name', '$email', '$pass', '$cnfpass')";


 // Execute the query
 
  if($con->query($sql) == true){
     echo "Successfully inserted";
       // Flag for successful insertion
    }
    else{
        echo "ERROR:".$sql."<br>".$con->error;         
    }
}   
 // Close the database connection
 $con->close();
      
?>




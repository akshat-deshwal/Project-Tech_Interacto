<?php      
    session_start();  
    include('connection.php');
    $userid = $_POST['userid'];  
    $userpass = $_POST['userpass'];  
      
        //to prevent from mysqli injection  
        $userid = stripcslashes($userid);  
        $userpass = stripcslashes($userpass);  
        $userid = mysqli_real_escape_string($con, $userid);  
        $userpass = mysqli_real_escape_string($con, $userpass);  
      
        $sql = "select *from signup where userid = '$userid' and userpass = '$userpass'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "Name".$_SESSION['userid']; 
            header("location: profile.php");
            // echo "Signin Successful";

            $_SESSION['user_name'] = $userid;
        }  
        else{  
            echo "Signin failed. Invalid username or password.";  
        }     
?>  




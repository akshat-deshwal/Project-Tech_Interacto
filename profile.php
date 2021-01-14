<?php
session_start();
// echo "Sahi chlra h bhai " . $_SESSION['user_name'];
?>


<!DOCTYPE html>

<html>
<head>
  <title>tech interacto</title>

  <title> TECH INTERACTO</title>
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="css/profile.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


</head>
<body>

 <!-- ......... NAVIGATION BAR START ..................-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

 <a class="navbar-brand " href="home.html">
    <img src="image/img10.jpg" width="80" height="50" class="d-inline-block align-top" alt="" loading="lazy"> 
    <span class="navbar-text">TECH INTERACTO</span>
 </a>
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <form action="search_result.php" method="GET" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 " type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>

    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active ">
        <a class="nav-link " href="home_after.html">HOME <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about_after.html">ABOUT</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="event_after.html">EVENTS</a>
      </li>

       <li class="nav-item mr-2">
        <a class="nav-link" href="blog1_after.html">BLOG</a>
      </li>

    </ul>
       
       <div class="dropdown">
  <button class="btn btn-outline-light dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    My Profile
  </button>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="profile.php">My Profile</a>
    <a class="dropdown-item" href="logout.php">Log Out</a>
    
  </div>
</div>
     
  </div>

</nav>

<!-- ................ NAVIGATION BAR END ..................-->




<section class="tabs">
  
  <section class="tab-header">
    
     <div class="profile-pic-div">
  <img src="image/image.jpg" id="photo">
  <input type="file" id="file">
  <label for="file" id="uploadBtn">Choose Photo</label>
</div>

    <section >
      <i class="fa fa-user-o" aria-hidden="true"></i> Dashboard
    </section>
    
    <section class="active">
      <i class="fa fa-pencil" aria-hidden="true"></i>Edit Profile
    </section>
    
    <!-- <section>
      <i class="fa fa-code" aria-hidden="true"></i> Skills
    </section> -->
    
   </section>
  
  
  <section class="tab-indicator"></section>
  
  
  <section class="tab-content">
    
    <section>
     <i class="fa fa-user-o" aria-hidden="true"></i>
      <h2 class="my-4">DASHBOARD</h2>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
    </section>
    
    
    <section class="active">
      <i class="fa fa-pencil" aria-hidden="true"></i>
      <h2 class="my-4">Edit Profile</h2>
      <p></p>

      <form  action="profilephp.php" method="POST" class="form-group">
      <div class="container">
          <div class="row">
          
            
            <div class="col-md-6">
              <label>Univ. Roll No. </label>
              <input type="number" name="userid" class="form-control" placeholder="University Roll No." required>
            </div>

            <div class="col-md-6">
              <label>Name</label>
              <input type="text" name="username" class="form-control" placeholder="Name" required>
            </div>

            <div class="col-md-6 my-2">
              <label>Date Of Birth</label>
              <input type="date" name="userdob" class="form-control" placeholder="Date Of Birth" required>
            </div>

            <div class="col-md-6 my-2">
              <label>Gender</label>
              <select class="form-control" name="usergender" required>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>

            <div class="col-md-6 my-2">
              <label>Year</label>
              <input type="number" name="useryear" class="form-control" placeholder="Year" requirec>
            </div>

            <div class="col-md-6 my-2">
              <label>Branch</label>
              <input type="text" name="userbranch" class="form-control" placeholder="Branch" required>
            </div>

           
            <div class="col-md-6 my-2">
              <label>Linkedin</label>
              <input type="text" name="userlinkd" class="form-control" placeholder="https://example.com/users/">
            </div>

            <div class="col-md-6 my-2">
              <label>Github</label>
              <input type="text" name="usergithub" class="form-control" placeholder="https://example.com/users/">
            </div>

             <div class="col-md-6 my-2">
              <label>Mobile No</label>
              <input type="number" name="usermobile" class="form-control" placeholder="Mobile No">
            </div>

            <div class="col-md-6 my-2">
              <label>Email ID</label>
              <input type="email" name="useremail" class="form-control" placeholder="https://example.com/users/">
            </div>

            <div class="col-md-6 my-2">
              <label>Skill 1</label>
              <input type="text" name="userskill1" class="form-control" required >
            </div>

            <div class="col-md-6 my-2">
              <label>Skill 2</label>
              <input type="text" name="userskill2" class="form-control" >
            </div>

            <div class="col-md-6 my-2">
              <label>Skill 3</label>
              <input type="text" name="userskill3" class="form-control" >
            </div>

            <div class="col-md-6 my-2">
              <label>Skill 4</label>
              <input type="text" name="userskill4" class="form-control" >
            </div>

           
            <div class="col-md-12 my-4">
              <button type="submit" class="btn btn-primary" name="submit"> Submit </button>
              
            </div>

          </div>
      </div>       
      </form>
    </section>
    
    
    <!-- <section>
      <i class="fa fa-code" aria-hidden="true"></i>
      <h2 class="my-4">Skills</h2>
     <p class="my-2">WE ARE VERY EXCITED TO KNOW ABOUT WHAT YOU ARE GOOD AT . KNOWLEDGE GET MORE EFFECTIVE WHEN IT IS SHARED AMONG OTHERS. 
     </p>    
         
        <div class="form-group">  
          <form name="add_name" id="add_name">  
            <div class="table-responsive">  
              <table class="table table-bordered" id="dynamic_field">  
                  <tr>  
                    <td><input type="text" name="name[]" placeholder="Enter Skills" class="form-control name_list" /></td> <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                  </tr>  
              </table>  
                  <input type="button" name="submit" id="submit" class="btn btn-outline-warning" value="Submit"/>  
            </div>  
          </form>  
        </div>  
    </section> -->
    
    
    
  </section>
</section>


<!-- ................ FOOTER START......................-->

<footer class="  page-footer bg-dark position-sticky">
  <div class="bg-dark">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        
        <div class="col-md-12 text-center">
          <a href="#"><i class="fa-3x fa fa-facebook-official mr-4"></i></a>

          <a href="#"><i class=" fa-3x fa fa-twitter-square mr-4"></i></a>

          <a href="#"><i class="fa-3x fa fa-linkedin-square mr-4"></i></a>

          <a href="#"><i class="fa-3x fa fa-instagram mr-4"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class=" omega container text-center text-md-left mt-5">
    <div class="row">
      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold"> Tech Interacto </h6>
        <hr class=" gamma bg-danger mb-4 mt-0 d-inline-block mx-auto">
        <p class="mt-2">Our TECH INTERACTO is a portal which will help you to find what exactly you are seeking for , it will help you to make connection with the right person who is an expert in that particular domain .</p>
      </div>

      <div class="col-md-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold"> Quick Links </h6>
        <hr class=" delta bg-danger mb-4 mt-0 d-inline-block mx-auto">
        <ul class="list-unstyled">
          <li class="my-2"><a href="home.html">HOME</a></li>
          <li class="my-2"><a href="#alpha">ABOUT</a></li>
          <li class="my-2"><a href="#">STUDENT</a></li>
          <li class="my-2"><a href="#">TEACHER</a></li>
          <li class="my-2"><a href="blog1.html">BLOG</a></li>
          
        </ul>
      </div>


      <div class="col-md-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">CONTACT </h6>
        <hr class=" zeta bg-danger mb-4 mt-0 d-inline-block mx-auto">
        <ul class="list-unstyled">
          <li class="my-2"><a href="https://abesit.in/"><i class=" fa-2x fa fa-home"></i></a> 
          ABESIT Campus NH24 GHAZIABAD UP (201009)</li>
          <li class="my-2"><a href="#"><i class=" fa-2x fa fa-envelope"></i></a> helpdesk@abesit.in</li>
          <li class="my-2"><a href="https://abesit.in/contact/"><i class=" fa-3x fa fa-mobile"></i></a> &nbsp 08448583370</li>
          
          
        </ul>
      </div>
    
    </div>
  </div>
  
</footer>

<!-- ................ FOOTER END......................-->
         

<script type="text/javascript">
function _class(name){
  return document.getElementsByClassName(name);
}

let tabPanes = _class("tab-header")[0].getElementsByTagName("section");


for(let i=0;i<tabPanes.length;i++){
  tabPanes[i].addEventListener("click",function(){
    _class("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabPanes[i].classList.add("active");
    
    _class("tab-indicator")[0].style.top = `calc(80px + ${i*50}px)`;
    
    _class("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    _class("tab-content")[0].getElementsByTagName("section")[i].classList.add("active");
    
  });
}

</script>



<!---------- js of upload the pic start ------->

<script src="js/app.js"></script>

<!---------- js of upload the pic end ------->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>


<!------------------------------ js of skills --------------------------------->

<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Skills" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

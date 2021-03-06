<?php

include('connection.php');
session_start();

?>

<html>
<head>
  
  <title> TECH INTERACTO</title>
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" href="css/search_result.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active ">
        <a class="nav-link " href="home.html">HOME <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about_after.html">ABOUT</a>
      </li>

    <!--  <li class="nav-item">
        <a class="nav-link" href="#">STUDENT</a>
      </li> -->

       <li class="nav-item">
        <a class="nav-link" href="event_after.html">EVENTS</a>
      </li>

       <li class="nav-item mr-2">
        <a class="nav-link" href="blog1_after.html">BLOG</a>
      </li>

    </ul>
       
       <a class="btn btn-outline-light" href="interact.html" role="button">
       <b>INTERACT</b>
       </a>
     
  </div>

</nav>

<!-- ................ NAVIGATION BAR END ..................-->


  

        <!-- <div class="about-section">
        <div class="inner-container">
            ™
        </div>
    </div> -->
    <p></p>
    

    <h2>List of people who can help you with your query...</h2>
<div class="filter">
</div>
<table >

<tr>
<th>Univ. Roll No.</th>
<th>Name</th>
<th>Year</th>                                  
<th>Branch</th>
<th>Email</th>
<th>LinkedIn ID</th>

</tr>

<?php

$name = $_GET['search'];

$result = mysqli_query($con, "SELECT * FROM profile WHERE userskill1 LIKE '%{$name}%' OR userskill2 LIKE '%{$name}%' OR userskill3 LIKE '%{$name}%' OR userskill4 LIKE '%{$name}%' ");

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    ?> 
   
  
  <tr> 
    <td><?php echo $row['userid']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['useryear']; ?></td>
    <td><?php echo $row['userbranch']; ?></td>
    <td><?php echo $row['useremail']; ?></td>
    <td><?php echo $row['userlinkd']; ?></td>
    
    </tr>
    
    <?php
}
?> 
</table>



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
          <li class="my-2"><a href="about.html">ABOUT</a></li>
          
          <li class="my-2"><a href="event.html">EVENTS</a></li>
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


    <!-- ................. DEFAULT JS  START....................--> 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

<!-- .................DEFAULT JS END........................--> 

</body>
</html>
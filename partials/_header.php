<?php
session_start();
echo '
<header id="header" class="fixed-top">
    

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center " >
<div class="container-fluid" >
  <a class="navbar-brand" href="#"><img src="https://i.pinimg.com/280x280_RS/e6/de/44/e6de445c2fbc7cef61573bb914d51adb.jpg" alt="" width="40" height="40" class="d-inline-block align-text-center" >
  <b>MentorMate</b>  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent " >
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="home.php">Ask a Question</a>
    </li>
      <li class="nav-item">

        <a class="nav-link active " aria-current="page" aria-current="page" href="about.html">About Us</a>
      </li>
      <li class="nav-item">
   
      </li>
      
     

      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Quizes<span class="badge bg-success">New</span></a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item " href="physics.html">Physics</a></li>
          <li><a class="dropdown-item" href="chemistry.html">Chemistry</a></li>
          <li><a class="dropdown-item" href="math.html">Math</a></li>
          <li><a class="dropdown-item" href="biology.html">Biology</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="contactUs.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="feedback1.php">Feedback</a>
      </li>
    </ul>

    <div class="row">';

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){
    echo '
   

   <p class="text-light my-0 mx-2 text-centre">Welcome '.$_SESSION['useremail'].'</p>
   <a href="partials/_logout.php" class="btn btn-success mx-2 " >Logout</a>
    ';

  }
else{
  echo '
  


  <button class="btn btn-success ml-2 " style="width:100px; "  data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
  <button class="btn btn-success mx-2 " style="width:100px; " data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
   </div>
';

}


  echo '</div>
       </div>
       </nav>
       </header>';
include 'partials/_loginModal.php'; 
include 'partials/_signupModal.php';


if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '
        <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You can now login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
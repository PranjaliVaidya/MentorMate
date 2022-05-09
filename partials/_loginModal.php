<!--log in Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="logineModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Log In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/_handleLogin.php" method="post">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Username</label>
                        <input type="text" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div> 
                    <div class="mb-3">
                        <label for="loginPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- <div class="text-center px-0">
  <form class="d-flex text-center " style="width:300px; height:35px;">
  <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success me-2 " type="submit">Search</button>
  </form> 

  <div class="text-center px-0" method="get" action="search.php">
 <div class="text-center px-0" method="get" action="search.php">
  <form class="d-flex text-center " style="width:500px; height:35px;">
  <input class="form-control me-2 " name="search" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success me-2 " type="submit">Search</button>
  

   <p class="text-light my-0 mx-2 text-center">Welcome '.$_SESSION['useremail'].'</p>
   <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
   </form> </div>';-->
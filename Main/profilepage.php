<?php

// run routine to check database if user has filled profile form
//if yes, return this page
//if no, load updateprofile.php


// set var
// sql select * from tbl where fullname != '' or phonenumber !=''
// if sql header(loc:update) die()


include "header.php";
include_once "../Includes/dbh.inc.php";
$stmt = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $stmt );
?>


<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="main-body">
      <?php 
        // mysqli_num_rows($result) ;
        
        $row = mysqli_fetch_array($result);

        // var_dump( $row);

        if (!empty($row)):
          
      ?>
<<<<<<< HEAD
          <div class="row">
=======
          <!-- <div class="row">
>>>>>>> 7e6098ba4255aee706079c3e4fcd207e1a2d568a
            <div class="col-lg-4">
            
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                      <div class="mt-3">
                        <h4><?php echo $row["first_name"] . $row["last_name"];?></h4>
                        <p class="text-primary mb-1"><?php echo $row["description"]; ?></p>
                        <p class="text-muted font-size-sm"><?php echo $row["user_address"]; ?></p>
                        <p class="text-muted font-size-sm"><?php echo $row["Useremails"]; ?></p>
                      </div>
                  </div>
                  
                  <hr class="my-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                      <span class="text-secondary"><?php echo $row["git_account"]; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                      <span class="text-secondary"><?php echo $row["twitter_account"]; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                      <span class="text-secondary"><?php echo $row["facebook_account"]; ?></span>
                    </li>
                  </ul>
                </div>
				      </div>

			      </div>
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row["first_name"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row["Useremails"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row["phone_num"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row["user_address"]; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn bg-primary text-center " href="updateprofile.php">EDIT</a>
                    </div>
                  </div>
                  
                </div>
              </div>

            </div>
<<<<<<< HEAD
          </div>
=======
          </div> -->
>>>>>>> 7e6098ba4255aee706079c3e4fcd207e1a2d568a
      <?php
       else:
      ?>

        <div>
          <?php 
          header("Location: updateprofile.php ");
          exit();
          ?>
        </div>

      <?php
        endif
      ?>

    </div>
  </div>
</section>



<?php
  include "footer.php";
?>
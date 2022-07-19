<?php

//onload, you need previous profile data
// set var as an empty array
// check if previous data, sql = select * from biodata where userid = sessionuserdid
// set var to sql data if true 

// to update image
// set form enctype to multipart
// acccess file using $_FILE['']
// check if file is empty, if empty($_FILE['']) and if file is not in folder, echo no file in folder
// but if empty file, and file in folder, ignore
// but if file is not empty, and file in folder, update with new file
// rename file as profile id (id autoincrement can be used)
// read up how to save uploaded files

// create a new biodata tbl
// using session var id, sql = select userid from biodatatbl where userid = sessionuserid
//if yes, run sql update, sql = update biodata set fullname = postdata where userid = sessionuserid
// if no, run sql insert, sql = insert all data including userid as sessionuserid

include "header.php";
?>

<form action="" method="post" enctype="multipart/form-data">

	<section id="hero" class="hero d-flex align-items-center">
		<div class="container">
			<div class="main-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column align-items-center text-center">
									<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
									<div class="mt-3">
										<h4>John Doe</h4>
										<p class="text-primary mb-1">Full Stack Developer</p>
										<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
										<p class="text-muted font-size-sm">Email</p>					
									</div>
								</div>
								<hr class="my-4">
								<ul class="list-group list-group-flush">
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
										<span class="text-secondary">bootdey</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
										<span class="text-secondary">@bootdey</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
										<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
										<span class="text-secondary">bootdey</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<form action="../Includes/updates.inc.php" method="POST" enctype="multipart/form-data">
						<div class="col-lg-8">
						<div class="card">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">First Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="First">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Last Name</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="Last Name">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Email</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="john@example.com">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Phone</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="(239) 816-9029">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Address</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="Bay Area, San Francisco, CA">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Github</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="github.com">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Twitter</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="twitter.com">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0"></h6>Facebook
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" value="facebook.com">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0"></h6>profile image
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="file" name="file" class="form-control" >
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 text-secondary">
										<a type="submit" name="submit" class="btn btn-primary px-4" href = "#"> UPDATE </a>
									</div>
								</div>
							</div>
						</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>
</form>



<?php
include "footer.php";
?>
<?php 
include 'linker_files/head_admin.php';
?>
<!-- body starts here -->

<!-- admin breadcumb and title -->

<div class="container-fluid bg-light mt-0 position-fixed">
	<div class="row ">
		<div class="col-12 admin_margin ">
			<p class="h2 text-dark ">Admin Dashboard</p>
			<nav aria-label="breadcrumb ">
				<ol class="breadcrumb bg-light mt-0 pt-0 pl-0">
					<li class="breadcrumb-item "><a class="text-danger" href="admin_home.php">Home</a></li>
					<li class="breadcrumb-item "><a class="text-danger" href="admin_home.php">Dashboard</a></li>

					<li class="breadcrumb-item "><a class="text-danger" href="admin_profile.php">Profile</a></li>

					<li class="breadcrumb-item "><a class="text-muted" href="admin_profile_update.php">Update Profile</a></li>

					

				</ol>
			</nav>
			
			<div class="w-100"></div>

			
			<div class="offset-3 col-4 admin_background px-0 py-1" style="box-shadow: 0 0 10px lightgrey;">

				
				<div class="row bg-white mx-1">

					<div class="col-5 mr-0 pr-0 my-2">
						<img class="rounded img-thumbnail img-fluid" src="img/face.jpg" alt="">
						<div class="w-100"></div>
						
						
						


					</div>
					<div class="col-7 align-self-center ml-0">
						<p class="h3 ">Riyad Ahsan</p>
						<p class="h4 ">System Adminstrator at <span class="font-weight-bold">Umart</span></p>
					</div>

					


				</div>

				<div class="row bg-white mt-4 justify-content-center mx-1">
					<div class="w-100 bg-info">
						<p class="h3 text-white pl-4 pt-2"> <i class="fas fa-info-circle mr-0"></i> About</p>
					</div>

					<div class="col-10 mt-3 border border-right-0 border-top-0 border-left-0 pl-0 pr-0"> 
					<small class="text-danger ">Enter new Name or Keep it same <span onclick="removeDisabledName(event)" id="changeNameSpan" class="small_button">Change</span></small>

					<input id="changeName" class="d-block border-0 w-100 pb-1 mr-0 pl-2" placeholder="Enter your name there" disabled="" type="text" value="Riyad Ahsan" >

					</div>

					<div class="col-10 mt-3 border border-right-0 border-top-0 border-left-0 pl-0 pr-0"> 
					<small  class="text-danger ">Enter new email or Keep it same <span onclick="removeDisabledEmail(event)" id="changeEmailSpan" class="small_button">Change</span></small>

					<input id="changeEmail" class="d-block border-0 w-100 pb-1 mr-0 pl-2" placeholder="Type Your Email Here" disabled="" type="text" value="riyad298@gmail.com" >

					</div>

					<div class="col-10 mt-3 border border-right-0 border-top-0 border-left-0 pl-0 pr-0"> 
					<small class="text-danger ppp">Enter new Number or Keep it same <span id="changeMobileSpan" class="small_button" onclick="removeDisabledMobile(event);">Change</span></small>

					<input id="changeMobile" class="d-block border-0 w-100 pb-1 mr-0 pl-2" placeholder="Type Your Email Here" disabled="true" type="text" value="01919448787" >

					</div>


					<div class="col-10 mt-3 border border-right-0 border-top-0 border-left-0 pl-0 pr-0 mb-3"> 
					<small class="text-danger ">Enter new DOB or Keep it same <span onclick="removeDisabledDOB(event)" id="changeDOBSpan" class="small_button">Change</span></small>

					<input id="changeDOB" class="d-block border-0 w-100 pb-1 pl-2 mr-0" placeholder="20-12-1996" disabled="" type="date" value="1996-12-20" >

					</div>


					<div class="col-10 mx-0 px-0 ">
						<button class="btn btn-danger btn-block mb-3 mx-0 rounded-0">
							Update Info
						</button>
					</div>


				</div>






			</div>

			



			


		</div>
	</div>
</div>




<!-- admin progress table -->


<!-- body ends here -->
<?php 
include 'linker_files/tail_admin.php';
?>









<?php 
session_start();
if (!isset($_SESSION['UserInfo'])) {
	header('Location: alert.php');
}
$sArray =  $_SESSION['UserInfo'];
$link_status = "admin_profile";

?>

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
					<li class="breadcrumb-item "><a class="text-muted" href="admin_profile.php">Profile</a></li>
				</ol>
			</nav>
			
			<div class="w-100"></div>

			
			<div class="offset-3 col-4 admin_background px-0 py-1" style="box-shadow: 0 0 10px lightgrey; position: absolute; top:70px;">

				
				<div class="row bg-white mx-1">

					<div class="col-5 mr-0 pr-0 my-2">
						<img class="rounded img-thumbnail img-fluid" src="img/face.jpg" alt="">
						<div class="w-100"></div>
						
						
						


					</div>
					<div class="col-7 align-self-center ml-0">
						<p class="h3 ">
							<?php 
							echo $sArray['firstName'].' '.$sArray['lastName'];
							?>


						</p>
						<p class="h4 ">System Adminstrator at <span class="font-weight-bold">Umart</span></p>
					</div>

					


				</div>

				<div class="row bg-white mt-4 justify-content-center mx-1">
					<div class="w-100 bg-info">
						<p class="h3 text-white pl-4 pt-2"> <i class="fas fa-info-circle mr-0"></i> About</p>
					</div>

					<div class="col-10 mt-3 border border-right-0 border-top-0 border-left-0 pl-0"> 
						<small>Email</small>
						<p class="pb-1 pl-1 mb-0">
							<?php 
							echo $sArray['email'];
							?>
						</p>

					</div>

					<div class="col-10 mt-3 border border-right-0 border-top-0 border-left-0 pl-0"> 
						<small>Mobile</small>
						<p class="pb-1 pl-1 mb-0">
							<?php 
							echo $sArray['mobile'];
							?>
						</p>

					</div>


					<div class="col-10 mt-3 border border-right-0 border-top-0 border-left-0 pl-0 mb-3"> 
						<small>Birthday</small>
						<p class="pb-1 pl-1 mb-0">
							
							<?php 
							echo $sArray['dob'];
							?>

						</p>

					</div>


					<div class="col-10 mx-0 px-0 ">
						<a href="admin_profile_update.php"><button class="btn btn-danger btn-block mb-3 mx-0 rounded-0">
							Update Info
						</button></a>
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









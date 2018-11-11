<?php 
include 'linker_files/head_admin.php';
?>
<!-- body starts here -->

<div class="container-fluid fixed-top position-absolute">
	<div class="row">
		<!-- fixed horizontal -->
		<div class="offset-2 col-10  admin_navbar_horizontal bg-secondary d-flex justify-content-center align-items-center">
			<p class="text-light h3 ">Welcome admin</p>
		</div>
	</div>
</div>

<div class="container-fluid position-absolute">
	<div class="row">

		<!-- fixed vertical -->
		<div class=" admin_navbar_veritcal bg-dark col-2 px-0">
			<div class="w-100 bg-light d-flex justify-content-center">
				<img class=" py-1" src="img/logo_dashboard.png" alt="">

			</div>

			<a class="text-white" href="#">
				<div class="w-100 bg-info py-2 text-center my-4">

				<i class="fas fa-tachometer-alt"></i> Dashboard

			</div></a>

			<a class="text-white" href="#">
				<div class="w-100 bg-secondary py-2 text-center my-4">

				<i class="fas fa-chart-line"></i> Statistics

			</div></a>


			<a class="text-light" href="#">
				<div class="w-100 bg-secondary  py-2 text-center my-4">

				<i class="fas fa-user"></i> Profile

			</div></a>

			
			<a class="text-white" href="#">
				<div class="w-100  bg-secondary py-2 text-center my-4">

				<i class="fas fa-envelope"></i> Message Request

			</div></a>


			<a class="text-white" href="#">
				<div class="w-100  bg-secondary py-2 text-center my-4">

				<i class="fab fa-product-hunt"></i> New Product Request

			</div></a>



		</div>

		

			

		</div>

	</div>
</div>


<div class="container-fluid">
	<div class="row">
		<div class="offset-2 col-10">
			<p class="h2 text-dark">Dashboard</p>
		</div>
	</div>
</div>







<!-- body ends here -->
<?php 
include 'linker_files/tail_admin.php';
?>









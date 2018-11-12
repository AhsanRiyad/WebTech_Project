<?php 
include 'linker_files/head_admin.php';
?>
<!-- body starts here -->


<!-- fixed horizontal -->
<div class="admin_navbar_horizontal bg-secondary justify-content-center d-flex align-items-center">
	<p class="text-white h3">Welcome admin</p>
</div>



<!-- fixed vertical -->
	<div class=" admin_navbar_veritcal bg-dark ">
	<div class=" bg-light d-flex justify-content-center">
		<img class=" py-1" src="img/logo_dashboard.png" alt="">

	</div>

	<a class="text-white" href="#">
		<div class=" bg-info py-2 text-center my-4">

			<i class="fas w_f fa-tachometer-alt"></i> Dashboard

		</div></a>

		<a class="text-white" href="#">
			<div class=" bg-secondary py-2 text-center my-4">

				<i class="fas w_f fa-chart-line"></i> Statistics

			</div></a>


			<a class="text-light" href="#">
				<div class=" bg-secondary  py-2 text-center my-4">

					<i class="fas w_f fa-user"></i> Profile

				</div></a>


				<a class="text-white" href="#">
					<div class="  bg-secondary py-2 text-center my-4">

						<i class="fas w_f fa-envelope"></i> Message Request

					</div></a>


					<a class="text-white" href="#">
						<div class="  bg-secondary py-2 text-center my-4">

							<i class="fab fa-product-hunt"></i> New Product Request

						</div></a>



				</div>










					<!-- admin breadcumb and title -->

					<div class="container-fluid bg-light mt-0">
						<div class="row ">
							<div class="col-12 admin_margin">
								<p class="h2 text-dark ">Admin Dashboard</p>
								<nav aria-label="breadcrumb ">
									<ol class="breadcrumb bg-light mt-0 pt-0 pl-0">
										<li class="breadcrumb-item "><a class="text-danger" href="#">Home</a></li>
										<li class="breadcrumb-item "><a class="text-muted" href="#">Dashboard</a></li>
									</ol>
								</nav>



								<!-- admin box started -->
								<div class="row">
									<div class="col-2 text-white"> 

										<div class="bg-danger ">
											<div class=" float-left box1  border border-light border-top-0 border-bottom-0 border-left-0 border-right d-flex align-items-center justify-content-center">
											
												<i class="fas fa-sync h1"></i>
											
											</div>
											
											<div class="d-inline float-left">
												<div class=" d-block box2  border border-light border-top-0 border-left-0 border-right-0 border-bottom d-flex  justify-content-center">
											
											
													<p class="d-flex align-items-center h5 my-0">22,000</p>
											
												</div>
											
												<div class=" d-block box2  d-flex align-items-center justify-content-center">
											
											
													REVENUE
											
												</div>
											
											</div>
										</div>




									</div>


									<div class="col-2 text-white "> 

										<div class=" float-left box1  border border-light border-top-0 border-bottom-0 border-left-0 border-right d-flex align-items-center justify-content-center">

											<i class="fas fa-cart-plus h1"></i>

										</div>

										<div class="d-inline float-left">
											<div class=" d-block box2  border border-light border-top-0 border-left-0 border-right-0 border-bottom d-flex  justify-content-center">


												<p class="d-flex align-items-center h5 my-0">22,000</p>

											</div>

											<div class=" d-block box2  d-flex align-items-center justify-content-center">


												SALES

											</div>

										</div>




									</div>



									<div class="col-2 text-white "> 

										<div class=" float-left box1  border border-light border-top-0 border-bottom-0 border-left-0 border-right d-flex align-items-center justify-content-center">

											<i class="fas fa-chart-bar h1"></i>

										</div>

										<div class="d-inline float-left">
											<div class=" d-block box2  border border-light border-top-0 border-left-0 border-right-0 border-bottom d-flex  justify-content-center">


												<p class="d-flex align-items-center h5 my-0">22,000</p>

											</div>

											<div class=" d-block box2  d-flex align-items-center justify-content-center">


												PRODUCTS

											</div>

										</div>




									</div>



									<div class="col-2 text-white "> 

										<div class=" float-left box1  border border-light border-top-0 border-bottom-0 border-left-0 border-right d-flex align-items-center justify-content-center">

											<i class="fas fa-users h1"></i>

										</div>

										<div class="d-inline float-left">
											<div class=" d-block box2  border border-light border-top-0 border-left-0 border-right-0 border-bottom d-flex  justify-content-center">


												<p class="d-flex align-items-center h5 my-0">22,000</p>

											</div>

											<div class=" d-block box2  d-flex align-items-center justify-content-center">


												VISITS

											</div>

										</div>




									</div>



								</div>
							</div>










						</div>

					</div>




					<!-- body ends here -->
					<?php 
					include 'linker_files/tail_admin.php';
					?>









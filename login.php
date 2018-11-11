<?php 
include 'linker_files/head.php';
?>
<!-- body starts-->

<!-- login form starts -->
<form action="reg_success.php">
	<div class="container-fluid">
		<div class="row justify-content-xl-center admin_background">
			<div class="col-12 col-xl-6 ">
				<div class="container">
					<div class="row py-4">
						<p class="text-dark h4">Welcome to Umart! Please login</p>
					</div>

					<div class="row justify-content-xl-center bg-white py-5 mb-5">
				
						<div class="col-12 col-xl-6 ">
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Email address*</small></label>
								<input  type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1"><small>Password*</small></label>
								<input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
								<p class="text-right text-danger">
									<small><a href="">Forgot password?</a></small>
								</p>
							</div>
				
						</div>
						<div class="col-12 col-xl-5 align-self-xl-center">
							<button type="submit" name="submit" value="submit" class="btn btn-success rounded-0 w-100 py-2">Log In</button>
				
							<p class="text-danger h5 mt-2"><i>Not a member yet?</i></p>
 
							<a href="reg.php"><button type="button" class="btn btn-primary rounded-0 w-100 py-2">Register Here</button></a>
				
						</div>
						
				
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


<!-- body ends-->
<?php 
include 'linker_files/tail.php';
?>







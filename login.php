<?php 
include 'linker_files/head.html';
?>
<!-- body starts-->



<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-12 col-md-6">
			<form action="reg_success.php">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
				</div>
				

				<button type="submit" class="btn btn-success">Log In</button>

				<p class="p_style">Not a member yet?</p>
				<a class="btn btn-primary" href="reg.php">Register Here</a>

			</form>
		</div>
	</div>
</div>







<!-- body ends-->
<?php 
include 'linker_files/tail.html';
?>

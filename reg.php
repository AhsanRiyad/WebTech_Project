<?php 
include 'linker_files/head.html';
?>
<!-- body starts here -->


<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-12 col-md-6">
			<form>
				<div class="form-group">
					<label for="input_first_name">First Name</label>
					<input type="text" class="form-control" id="input_first_name" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="input_last_name">Last Name</label>
					<input type="text" class="form-control" id="input_last_name" placeholder="Last Name">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="input_re_pass">Re-Enter Password</label>
					<input type="password" class="form-control" id="input_re_pass" placeholder="Re-Enter Password">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">I agree with all the terms and conditions</label>
				</div>
				

				<button type="submit" class="btn btn-success">Register</button>

				<p class="p_style">Already registered?</p>
				<button type="submit" class="btn btn-primary">Login Here</button>

			</form>
		</div>
	</div>
</div>











<!-- body ends here -->
<?php 
include 'linker_files/tail.html';
?>









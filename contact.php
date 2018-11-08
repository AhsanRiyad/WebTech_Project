<?php 
include 'linker_files/head.html';
?>
<!-- body starts here -->

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-12 col-md-6">
			<form action="send_msg_user.php">
				

				<div class="form-group">
					<label for="exampleInputEmail1">Your Name:</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">

				</div>				


				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>				
				

				<div class="form-group">
					<label for="exampleFormControlTextarea1">Write Your msg:</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>

				<button type="submit" class="btn btn-success">Send</button>
			</form>






			

			<p class="p_style">Visit our FAQ</p>
			<button type="submit" class="btn btn-primary">FAQ</button>

		</form>
	</div>
</div>
</div>





<!-- body ends here -->
<?php 
include 'linker_files/tail.html';
?>









<?php 
include 'linker_files/head.html';
?>
<!-- body starts here -->
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<form action="msg_send_success.php">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<button type="submit" class="btn btn-success">Send</button>
				<br>
				<hr>
				<a href="admin_home.php" class="btn btn-info">Goto Home</a>
				<a href="msg_req.php" class="btn btn-secondary">Goto Msg Reqest</a>
			</form>
		</div>
	</div>
</div>


<!-- body ends here -->
<?php 
include 'linker_files/tail.html';
?>









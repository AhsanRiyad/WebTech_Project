<?php 
include 'linker_files/head.php';
?>
<!-- body starts here -->
<h1 align="center">Message Details</h1>

<div class="container">
	<div class="row">
		<div class="col"><h4>From: riyad298@gmail.com</h4></div>
	</div>
	<hr>
	<div class="row">
		<div class="col"><h4>Sub: Order Problem; did not get delivery</h4></div>
	</div>
	<hr>
	<div class="row">
		<div class="col"><h5>Message:  I did not the delivery on time <br> my order number is #45534345. Please check and let me know what is the problem. </h5></div>
	</div>
	<hr>
	<hr>
	
	<div class="row">
		<div class="col">
			<div class="form-group">
					<label for="exampleFormControlTextarea1">Reply to this msg:</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>


		</div>
	</div>
	<a href="msg_send_success.php" class="btn btn-success">Send</a>

	<a href="msg_forward.php" type="submit" class="btn btn-primary">Forward</a>

	<a href="msg_req.php" class="btn btn-info">Show msg history</a>

	
	<hr>
</div>




<!-- body ends here -->
<?php 
include 'linker_files/tail.php';
?>









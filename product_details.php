<?php
include 'linker_files/db.php'; 
include 'linker_files/head.php';
?>

<?php 

$sql = "SELECT `id`, `isbn`, `name`, `price`, `category`, `total`, `sold`, `description`, `image`, `date`, `rating` FROM `product` WHERE id=1";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
//print_r($row);

$name = $row['name'];
$rating = $row['rating'];
$price = $row['price'];
$description = $row['description'];

?>


<!-- body starts here -->
<div class="container" >
	<div class="row">
		<div class="col-auto">
			<img src="img/product_demo.png" class="img-fluid" alt="">
		</div>	


		<div class="col-3">
			<h3 class=""><?php echo $name; ?></h3>
			<p class="font-weight-bold d-inline">Rating : <?php echo $rating; ?></p>
			<span class="fa fa-star text-warning"></span>
			<span class="fa fa-star text-warning"></span>
			<span class="fa fa-star "></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<h4 class="mt-2 mb-4">Price: <?php echo $price; ?></h4>
			<i class="fas fa-minus c1"></i> <span class="c2"> 10 </span><i class="fas fa-plus"></i>
			<br>
			<br>
			<a href="#" class="btn btn-success">Add to Cart</a>
			<a href="#" class="btn btn-info">Buy Now</a>
		</div>	
		<div class="w-100"></div>

		<div class="col-4">
			<p class="h3">Product Description:</p>
			<p class="h5"><?php echo $description; ?></p>
		</div>

		
	</div>
</div>

<script>
	var i = document.getElementsByClassName('');
	

</script>



<!-- body ends here -->
<?php 
include 'linker_files/tail.php';
?>









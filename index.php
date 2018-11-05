
<!-- body should start after this statement -->
<?php 

include 'linker_files/head.html';


?>


  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->


<!-- checking php post super globals -->


<?php 

$_POST['hellow'] = 'riyad';


echo $_POST['hellow'];
	//its working


function f1()
{
	return 2;
}


if (2==2) {
	$k = f1();
	echo $k;
}












?>

<form method="post" action="other.php">

	<input type="text" name="riyad" value="nothing">

	<input type="submit" name="submit" value="submit" >

	<input type="button" name="" value="submit">


</form>

<!-- summery : tried different way but I could not submit a form without using a form;
	javascript can come up with a support for this issue -->








	<!-- body should end after this statement -->
	<?php 

	include 'linker_files/tail.html';


	?>









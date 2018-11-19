<?php 
include 'linker_files/head.php';
?>
<!-- body starts here -->
<style>
	.hello {
		height: 100px;
		width: 100px;
	}
</style>

<div class="hello bg-danger m-auto cqq text-white" onclick="cha();">
	
</div>


<script>
	function cha(){
		var iz = document.getElementsByClassName('cqq');
		iz.style.backgroundColor  = 'yellow';
	}


</script>

<!-- body ends here -->
<?php 
include 'linker_files/tail.php';
?>

 







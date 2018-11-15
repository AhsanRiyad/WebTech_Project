<?php 
if (session_start()) {
	session_unset();
	session_destroy();
	session_start();
}
else{
	session_start();
}


include 'linker_files/head.php';
include 'linker_files/db.php';
?>

<?php 

$countPass = 0;
$countEmail = 0;

//    email validation
function email_validation() {
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		if ($email == "") {
			return 'can not be empty';
			echo '<br>';
		} else {
			$email_array = str_split($email, 1);
			$email_explode = explode('@', $email);
			if (strlen($email) < 10) {
				return 'is too short';
				echo '<br>';
			} elseif (!in_array('@', $email_array)) {
				return '@ symbol missing';
			} elseif (strlen($email_explode[0]) < 5) {
				return 'you must write smth before @ symbol';
				echo '<br>';
			} elseif (substr($email, -3, 1) == '.' || substr($email, -4, 1) == '.') {


				if (is_numeric(substr($email, 0, 1)) || substr($email, 0, 1) == '.' || substr($email, 0, 1) == '-') {
					return 'Last character can not be numeric or character';
					echo '<br>';
				} else {
					foreach ($email_array as $value) {

						if ($value == 'a' || $value == 'b' || $value == 'c' || $value == 'd' || $value == 'e' || $value == 'f' || $value == 'g' || $value == 'h' || $value == 'i' || $value == 'j' || $value == 'k' || $value == 'l' || $value == 'm' || $value == 'n' || $value == 'o' || $value == 'p' || $value == 'q' || $value == 'r' || $value == 's' || $value == 't' || $value == 'u' || $value == 'v' || $value == 'w' || $value == 'x' || $value == 'y' || $value == 'z' || $value == 'A' || $value == 'B' || $value == 'C' || $value == 'D' || $value == 'E' || $value == 'F' || $value == 'G' || $value == 'H' || $value == 'I' || $value == 'J' || $value == 'K' || $value == 'L' || $value == 'M' || $value == 'N' || $value == 'O' || $value == 'P' || $value == 'Q' || $value == 'R' || $value == 'S' || $value == 'T' || $value == 'U' || $value == 'V' || $value == 'W' || $value == 'X' || $value == 'Y' || $value == 'Z' || $value == '.' || $value == '-' || $value == '0' || $value == '1' || $value == '2' || $value == '3' || $value == '4' || $value == '5' || $value == '6' || $value == '7' || $value == '8' || $value == '9' || $value == '@' || $value == '_') {

						} else {
							return 'Invalid character';
							echo '<br>';
						}
					}
				}
			} else {
				return 'must be under a domain, for example .com or .net etc ';
				echo '<br>';
			}
		}
	}
}


//password validation
function password_validation() {
	if (isset($_POST['submit'])) {
		if ($_POST['password'] == "") {
			return 'You must enter and confirm password';
			echo '<br>';

		} else {
			return "";
		}
	}
}


function checkDB()
{
	if(isset($_POST['submit']))
	{	
		if ($GLOBALS['countEmail'] == 2 && $GLOBALS['countPass']) {
			$email = $_POST['email'];
			$password = trim($_POST['password']);
			
			$sql = "SELECT `id`, `firstName`, `lastName`, `email`, `mobile`, `dob`, `gender`, `password`, `type` FROM `user` WHERE email = '$email' and  password = '$password'";

			$result = mysqli_query($GLOBALS['conn'], $sql);
			$row = mysqli_fetch_assoc($result);
			mysqli_close($GLOBALS['conn']);
			if($row['email'] == $email && $row['password'] == $password)
			{
				$_SESSION['UserInfo'] = $row;
				return 'successful';
			}
			else{
				return 'login failed';
			}			
		}else{
			return 'failed';
		}

	}
}


?>


<!-- body starts-->

<!-- login form starts -->
<form action="#" method="post">
	<div class="container-fluid">
		<div class="row justify-content-xl-center admin_background">
			<div class="col-12 col-xl-6 ">
				<div class="container">
					<div class="row py-4">
						<p class="text-dark h4" id="login_id">Welcome to Umart! Please login</p>
					</div>

					<div class="row justify-content-xl-center bg-white py-5 mb-5">

						<div class="col-12 col-xl-6 ">
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Email address*</small>
									<br>
									<?php
									$st2 = email_validation();
									if ($st2 != "") {
										echo "<span style='color: red'>" .'email '. $st2 . "</span>" . '<br>';
									}
									else{
										$countEmail = 2 ;
										$msg = checkDB();										
									}
									?>


								</label>
								<input name='email'  type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
								value="<?php
								if (isset($_POST['email'])) {
									echo $_POST['email'];
								}
								?>"
								>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1"><small>Password*</small>
									<br>
									<?php
									$st = password_validation();
									if ($st != "") {
										echo "<span style='color: red;'>" . $st . "</span>" . '<br>';
									}
									else{
										$countPass = 2 ;
										$msg = checkDB();

									}
									?>



								</label>
								<input name="password" type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password"
								value="<?php
								if (isset($_POST['password'])) {
									echo $_POST['password'];
								}
								?>"

								>
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
if ($msg == 'successful') {


	?>
	<script type="text/javascript"> window.location.replace("admin_home.php");
</script>

<?php 

}
else if($msg == 'login failed')
{
	?>

	<script type="text/javascript">
		var i = document.getElementById('login_id');
		i.innerHTML = 'Email/Password does not match';
		i.classList.remove('text-dark');
		i.classList.add('text-white' , 'bg-danger');

	</script>


	<?php 	
}

?>	


<?php 
include 'linker_files/tail.php';
?>







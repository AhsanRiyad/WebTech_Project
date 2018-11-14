<?php 
include 'linker_files/head.php';
?>


<?php
$GLOBALS['gender'] = "";
$GLOBALS['first_name'] = "";
$GLOBALS['last_name'] = "";
$GLOBALS['email'] = "";

//    first name validation
function first_name_validation() {
	if (isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];
		if ($first_name == "") {
			return 'can not be empty';
			echo '<br>';
		} else {




			if (strlen($first_name) < 2) {
				return 'is too short';
				echo '<br>';
			} else {
				if (is_numeric(substr($first_name, 0, 1)) || substr($first_name, 0, 1) == '.' || substr($first_name, 0, 1) == '-') {
					return 'First character can not be numeric or character';
					echo '<br>';
				} else {



					$first_name_array = str_split($first_name, 1);

					foreach ($first_name_array as $value) {

						if ($value == 'a' || $value == 'b' || $value == 'c' || $value == 'd' || $value == 'e' || $value == 'f' || $value == 'g' || $value == 'h' || $value == 'i' || $value == 'j' || $value == 'k' || $value == 'l' || $value == 'm' || $value == 'n' || $value == 'o' || $value == 'p' || $value == 'q' || $value == 'r' || $value == 's' || $value == 't' || $value == 'u' || $value == 'v' || $value == 'w' || $value == 'x' || $value == 'y' || $value == 'z' || $value == 'A' || $value == 'B' || $value == 'C' || $value == 'D' || $value == 'E' || $value == 'F' || $value == 'G' || $value == 'H' || $value == 'I' || $value == 'J' || $value == 'K' || $value == 'L' || $value == 'M' || $value == 'N' || $value == 'O' || $value == 'P' || $value == 'Q' || $value == 'R' || $value == 'S' || $value == 'T' || $value == 'U' || $value == 'V' || $value == 'W' || $value == 'X' || $value == 'Y' || $value == 'Z' || $value == '.' || $value == '-') {

						} else {
							return 'Invalid character';
							echo '<br>';
							break;
						}
					}
				}
			}
		}
	} else {
		return "";
	}
}

//    last name validation
function last_name_validation() {
	if (isset($_POST['submit'])) {
		$last_name = $_POST['last_name'];
		if ($last_name == "") {
			return 'can not be empty';
			echo '<br>';
		} else {

			if (strlen($last_name) < 2) {
				return 'is too short';
				echo '<br>';
			} else {
				if (is_numeric(substr($last_name, 0, 1)) || substr($last_name, 0, 1) == '.' || substr($last_name, 0, 1) == '-') {
					return 'Last character can not be numeric or character';
					echo '<br>';
				} else {

					$last_name_array = str_split($last_name, 1);

					foreach ($last_name_array as $value) {

						if ($value == 'a' || $value == 'b' || $value == 'c' || $value == 'd' || $value == 'e' || $value == 'f' || $value == 'g' || $value == 'h' || $value == 'i' || $value == 'j' || $value == 'k' || $value == 'l' || $value == 'm' || $value == 'n' || $value == 'o' || $value == 'p' || $value == 'q' || $value == 'r' || $value == 's' || $value == 't' || $value == 'u' || $value == 'v' || $value == 'w' || $value == 'x' || $value == 'y' || $value == 'z' || $value == 'A' || $value == 'B' || $value == 'C' || $value == 'D' || $value == 'E' || $value == 'F' || $value == 'G' || $value == 'H' || $value == 'I' || $value == 'J' || $value == 'K' || $value == 'L' || $value == 'M' || $value == 'N' || $value == 'O' || $value == 'P' || $value == 'Q' || $value == 'R' || $value == 'S' || $value == 'T' || $value == 'U' || $value == 'V' || $value == 'W' || $value == 'X' || $value == 'Y' || $value == 'Z' || $value == '.' || $value == '-') {

						} else {
							return 'Invalid character';
							echo '<br>';
							break;
						}
					}
				}
			}
		}
	} else {
		return "";
	}
}

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

//gender validation
function gender_validation() {
	if (isset($_POST['submit'])) {

		if (!isset($_POST['gender'])) {
			return 'One option must be selected';
			echo '<br>';
		} else {
			$GLOBALS['gender'] = $_POST['gender'];
		}
	} else {

		return "";
	}
}

//password validation
function password_validation() {
	if (isset($_POST['submit'])) {
		if ($_POST['password'] == "" || $_POST['confirm_password'] == "") {
			return 'You must enter and confirm password';
			echo '<br>';
		} else {
			if ($_POST['password'] != $_POST['confirm_password']) {
				return 'password does not match';
				echo '<br>';
			}
		}
	} else {
		return "";
	}
}

//phone number validation
function phone_validation() {
	if (isset($_POST['submit'])) {
		if ($_POST['phone'] == "") {
			return 'can not be empty';
			echo '<br>';
		} else {
			$phone_array = str_split($_POST['phone'], 1);
			foreach ($phone_array as $value) {
				if ($value == '+' || $value == '0' || $value == '1' || $value == '2' || $value == '3' || $value == '4' || $value == '5' || $value == '6' || $value == '7' || $value == '8' || $value == '9') {
					if (strlen($_POST['phone']) < 12) {
						return 'too short';
						echo '<br>';
						break;
					}
				} else {
					return 'invalid character used';
					echo '<br>';
					break;
				}
			}
		}
	}
}

//date validation
function date_validation() {
	if (isset($_POST['submit'])) {
		if ($_POST['day'] == 'Day') {
			return 'you must select a day';
			echo '<br>';
		} elseif ($_POST['month'] == 'Month') {
			return 'you must select a month';
			echo '<br>';
		} elseif ($_POST['year'] == 'Year') {
			return 'you must select a year';
			echo '<br>';
		}
	} else {
		return "";
	}
}
?>



<!-- body starts here -->


<!-- registration page starts now -->
<form action="#" method="post">
	<div class="container-fluid">
		<div class="row justify-content-xl-center admin_background">
			<div class="col-12 col-xl-6 ">
				<div class="container">
					<div class="row pt-4 pb-1">
						<p class="text-dark h4">Create Your Umart Account</p>
						<span class="ml-auto mt-auto pt-3"><small >Alredy member? <a href="login.php">Login</a> here</small></span>
					</div>

					<div class="row justify-content-xl-center bg-white py-5 mb-5">
						
						<!-- email input -->
						<div class="col-12 col-xl-6 ">
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Email address*</small>
								<br>
								<?php
								$st2 = email_validation();
								if ($st2 != "") {
									echo "<span style='color: red'>" . $st2 . "</span>" . '<br>';
								}
								?>
									
								</label>
								

								<input name="email" type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php
								if (isset($_POST['email'])) {
									echo $_POST['email'];
								}
								?>">
							</div>
							<!-- password input -->
							<div class="form-group">
								<label for="exampleInputPassword1"><small>Password*</small>
									<br>
									<?php
									$st = password_validation();
									if ($st != "") {
										echo "<span style='color: red;'>" . $st . "</span>" . '<br>';
									}
									?>

								</label>
								<input name="password" type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password" value="<?php
								if (isset($_POST['password'])) {
									echo $_POST['password'];
								}
								?>">
							</div>
							
							<!-- re-enter password input -->
							<div class="form-group mb-4">
								<label for="exampleInputPassword1"><small>Re-enter password*</small></label>
								<input name="confirm_password" type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password" value="<?php
								if (isset($_POST['confirm_password'])) {
									echo $_POST['confirm_password'];
								}
								?>" >
							</div>
							
							<!-- month input -->
							<div class="row">
								<div class="col-3 pr-0">
									<small>Birthday*</small>
									<div class="input-group">
										<select class="custom-select rounded-0" id="inputGroupSelect01">
											<option selected>Month</option>
											<option value="1">Jan</option>
											<option value="2">Feb</option>
											<option value="3">Mar</option>
											<option value="4">Apr</option>
											<option value="5">May</option>
											<option value="6">Jun</option>
											<option value="7">Jul</option>
											<option value="8">Aug</option>
											<option value="9">Sep</option>
											<option value="10">Oct</option>
											<option value="11">Nov</option>
											<option value="12">Dec</option>
										</select>
									</div>
								</div>

								<!-- day input -->
								<div class="col-3 px-0">
									<small>&nbsp</small>
									<div class="input-group">
										<select class="custom-select rounded-0 " id="inputGroupSelect01">
											<option selected>Day</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="12">12</option>

											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>

											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>

										</select>
									</div>
								</div>

								<!-- yeas input -->
								<div class="col-3 pl-0 pr-2">
									<small>&nbsp</small>
									<div class="input-group">
										<select class="custom-select rounded-0" id="inputGroupSelect01">
											<option selected>Year</option>
											<option value="1">2000</option>
											<option value="2">1999</option>
											<option value="3">1998</option>
											<option value="4">1997</option>
											<option value="5">1996</option>
											<option value="6">1995</option>
											<option value="7">1994</option>
											<option value="8">1993</option>
											<option value="9">1992</option>
											<option value="10">1991</option>
											<option value="11">1990</option>
											<option value="12">1989</option>
										</select>
									</div>
								</div>

								<!-- gender input -->
								<div class="col-3 pl-1">
									<small>Gender*</small>
									<div class="input-group">
										<select class="custom-select rounded-0 pl-1 pl-lg-2 " id="inputGroupSelect01">
											<option selected>Gender</option>
											<option value="1">Male</option>
											<option value="2">Female</option>
											<option value="3">Other</option>
										</select>
									</div>
								</div>


							</div>

						</div>

						<!-- first name input -->
						<div class="col-12 col-xl-5 ">

							<div class="form-group">
								<label for="exampleInputEmail1"><small>First Name*</small>
									<br>
									<?php
									$st1 = first_name_validation();
									if ($st1 != "") {
										echo "<span style='color: red;'>" . $st1 . "</span>" . '<br>';
									}
									?>
									
								</label>
								<input name="first_name"  type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name" value="<?php
								if (isset($_POST['first_name'])) {
									echo $_POST['first_name'];
								}
								?>">
							</div>

							<!-- last name input -->
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Last Name*</small>
									<br>
									<?php
									$st1 = last_name_validation();
									if ($st1 != "") {
										echo "<span style='color: red;'>" . $st1 . "</span>" . '<br>';
									}
									?>

								</label>
								<input name="last_name"  type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last name" value="<?php
								if (isset($_POST['last_name'])) {
									echo $_POST['last_name'];
								}
								?>">
							</div>
							
							<!-- mobile number input -->
							<div class="form-group mb-xl-3">
								<label for="exampleInputEmail1"><small>Mobile Number*</small>
									<br>
									<?php
									$st2 = phone_validation();
									if ($st2 != "") {
										echo "<span style='color: red'>" . $st2 . "</span>" . '<br>';
									}
									?>

								</label>
								
								<input name="phone" type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mobile number"
								value="<?php
								if (isset($_POST['phone'])) {
									echo $_POST['phone'];
								}
								?>">
							</div>

							<!-- toc terms and condition input -->
							<div class="custom-control custom-checkbox my-1 mr-sm-2 my-0 py-0">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline"> <small>I agree with all the Terms and Conditions</small></label>
							</div>
							
							<!-- submit button -->
							<button type="submit" name="submit" value="submit" class="btn btn-success rounded-0 w-100 py-2 mt-3 mt-xl-1">Register</button>


							
							<!-- <p class="text-danger h5 mt-4"><i>Already have an account?</i></p>

								<a href="reg.php"><button type="button" class="btn btn-primary rounded-0 w-100 py-2">Register Here</button></a> -->

							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</form>










	<!-- body ends here -->
	<?php 
	include 'linker_files/tail.php';
	?>









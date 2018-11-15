<?php 
include 'linker_files/head.php';
?>


<?php
$GLOBALS['gender'] = "";
$GLOBALS['first_name'] = "";
$GLOBALS['last_name'] = "";
$GLOBALS['email'] = "";
$countFirstName = 0;
$countLastName = 0;
$countEmail = 0;
$countMobile = 0;
$countPass = 0;
$countGender = 0;
$countDob = 0;
$countToc = 0;


//    first name validation
function first_name_validation() {
	if (isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];
		if ($first_name == "") {
			
			return 'name can not be empty';
			echo '<br>';
		} else {
			if (strlen($first_name) < 2) {
				
				return 'is too short';
				echo '<br>';
			} else {
				if (is_numeric(substr($first_name, 0, 1)) || substr($first_name, 0, 1) == '.' || substr($first_name, 0, 1) == '-') {
					$GLOBALS['countFirstName'] = 2;
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
			return 'name can not be empty';
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

		if (!isset($_POST['gender']) || $_POST['gender'] == 'Gender' ) {
			return 'Select one*';
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
			return 'no. can not be empty';
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
			return 'select day*';
			echo '<br>';
		} elseif ($_POST['month'] == 'Month') {
			return 'select month*';
			echo '<br>';
		} elseif ($_POST['year'] == 'Year') {
			return 'select year*';
			echo '<br>';
		}
	} else {
		return "";
	}
}


// toc validation
function toc_validation(){
	if (isset($_POST['submit'])) {
		if(!isset($_POST['toc']))
		{
			return "you must agree";
		}
		else {
			return "";
		}



	}
}

// check database function
function checkDB(){
	if ($GLOBALS['countFirstName']== 2 && $GLOBALS['countLastName'] == 2 && $GLOBALS['countMobile'] == 2 && $GLOBALS['countEmail'] == 2 && $GLOBALS['countDob'] == 2 && $GLOBALS['countGender'] == 2 && $GLOBALS['countToc'] == 2) {

		
		
	} else {
		

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
									else{
										$countEmail = 2 ;
										checkDB();
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
									else{
										$countPass = 2 ;
										checkDB();
									}
									?>

								</label>
								<input name="password" type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password" value="<?php
								if (isset($_POST['password'])) {
									echo $_POST['password'];
								}
								else{
									$countPass = 2;
									checkDB();
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
									<small>
										
										<?php
										$st = date_validation();
										if ($st != "") {
											echo "<span style='color: red;'>" . $st . "</span>";
										}
										else{
											$countDob = 2;
											echo "Birthday*";
											checkDB();
										}
										?>

									</small>

									<div class="input-group">
										<select name="month" class="custom-select rounded-0" id="inputGroupSelect01">

											<option>Month</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Jan') {
													echo 'selected';
												}
											}
											?>>Jan</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Feb') {
													echo 'selected';
												}
											}
											?> >Feb</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Mar') {
													echo 'selected';
												}
											}
											?> >Mar</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Apr') {
													echo 'selected';
												}
											}
											?> >Apr</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'May') {
													echo 'selected';
												}
											}
											?> >May</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Jun') {
													echo 'selected';
												}
											}
											?> >Jun</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Jul') {
													echo 'selected';
												}
											}
											?> >Jul</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Aug') {
													echo 'selected';
												}
											}
											?> >Aug</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Sep') {
													echo 'selected';
												}
											}
											?> >Sep</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Oct') {
													echo 'selected';
												}
											}
											?> >Oct</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Nov') {
													echo 'selected';
												}
											}
											?> >Nov</option>
											<option <?php
											if (isset($_POST['month'])) {
												if ($_POST['month'] == 'Dec') {
													echo 'selected';
												}
											}
											?> >Dec</option>
										</select>
									</div>
								</div>

								<!-- day input -->
								<div class="col-3 px-0">
									<small>&nbsp</small>
									<br>

									<div class="input-group">
										<select name="day" class="custom-select rounded-0 " id="inputGroupSelect01">
											<option>Day</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '1') {
													echo 'selected';
												}
											}
											?>>1</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '2') {
													echo 'selected';
												}
											}
											?> >2</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '3') {
													echo 'selected';
												}
											}
											?> >3</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '4') {
													echo 'selected';
												}
											}
											?> >4</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '5') {
													echo 'selected';
												}
											}
											?> >5</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '6') {
													echo 'selected';
												}
											}
											?> >6</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '7') {
													echo 'selected';
												}
											}
											?> >7</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '8') {
													echo 'selected';
												}
											}
											?> >8</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '9') {
													echo 'selected';
												}
											}
											?>>9</option>
											<option <?php
											if (isset($_POST['day'])) {
												if ($_POST['day'] == '10') {
													echo 'selected';
												}
											}
											?>>10</option>
										</select>



									</select>
								</div>
							</div>

							<!-- yeas input -->
							<div class="col-3 pl-0 pr-2">
								<small>&nbsp</small>
								<div class="input-group">
									<select name="year" class="custom-select rounded-0" id="inputGroupSelect01">
										<option>Year</option>
										<option <?php
										if (isset($_POST['year'])) {
											if ($_POST['year'] == '2008') {
												echo 'selected';
											}
										}
										?> >2008</option>
										<option <?php
										if (isset($_POST['year'])) {
											if ($_POST['year'] == '2007') {
												echo 'selected';
											}
										}
										?> >2007</option>
										<option <?php
										if (isset($_POST['year'])) {
											if ($_POST['year'] == '2006') {
												echo 'selected';
											}
										}
										?> >2006</option>
										<option <?php
										if (isset($_POST['year'])) {
											if ($_POST['year'] == '2005') {
												echo 'selected';
											}
										}
										?> >2005</option>
										<option <?php
										if (isset($_POST['year'])) {
											if ($_POST['year'] == '2004') {
												echo 'selected';
											}
										}
										?> >2004</option>
										<option <?php
										if (isset($_POST['year'])) {
											if ($_POST['year'] == '2003') {
												echo 'selected';
											}
										}
										?> >2003</option>
										<option <?php
										if (isset($_POST['year'])) {
											if ($_POST['year'] == '2002') {
												echo 'selected';
											}
										}
										?> >2002</option>
									</select>
								</div>
							</div>

							<!-- gender input -->
							<div class="col-3 pl-1">
								<small><?php
								$st2 = gender_validation();
								if ($st2 != "") {
									echo "<span style='color: red'>" . $st2 . "</span>" . '<br>';
								}
								else{
									$countGender = 2 ;
									echo 'Gender*';
									checkDB();
								}
								?></small>
								
								

								<div class="input-group">
									<select name="gender" class="custom-select rounded-0 pl-1 pl-lg-2 " id="inputGroupSelect01">
										<option <?php
										if ($gender == 'Gender') {
											echo 'selected';
										}
										?> value="Gender">Gender</option>
										<option <?php
										if ($gender == 'Male') {
											echo 'selected';
										}
										?> value="Male">Male</option>
										<option 
										
										<?php
										if ($gender == 'Female') {
											echo 'selected';
										}
										?>
										
										value="Female">Female</option>
										<option 
										
										<?php
										if ($gender == 'Other') {
											echo 'selected';
										}
										?>
										
										value="Other">Other</option>
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
								else{

									$countFirstName = 2;
									checkDB();
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
								else{
									$countLastName = 2 ;
									checkDB();
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
								else{
									$countMobile = 2;
									checkDB();
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

							<?php 

							$st2 = toc_validation();
							if ($st2 != "") {
								echo "<span style='color: red; margin-left: -23px; '>" . $st2 . "</span>" . '<br>';
							}
							else{
								$countToc = 2 ;
								checkDB();
							}

							?>

							<input name="toc[]" value="yes" type="checkbox" class="custom-control-input" id="customControlInline" 
							
							<?php

							if (isset($_POST['submit'])) {
								if(isset($_POST['toc']))
								{
									echo 'checked';
								}

							}

							?>
							
							>
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









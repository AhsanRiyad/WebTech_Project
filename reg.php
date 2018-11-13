<?php 
include 'linker_files/head.php';
?>
<!-- body starts here -->


<!-- registration page starts now -->
<form action="reg_success.php">
	<div class="container-fluid">
		<div class="row justify-content-xl-center admin_background">
			<div class="col-12 col-xl-6 ">
				<div class="container">
					<div class="row py-4">
						<p class="text-dark h4">Create Your Umart Account</p>
					</div>

					<div class="row justify-content-xl-center bg-white py-5 mb-5">

						<div class="col-12 col-xl-6 ">
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Email address*</small></label>
								<input  type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1"><small>Password*</small></label>
								<input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1"><small>Re-enter password*</small></label>
								<input type="password" class="form-control rounded-0" id="exampleInputPassword1" placeholder="Password">
							</div>
							
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

						<div class="col-12 col-xl-5 ">

							<div class="form-group">
								<label for="exampleInputEmail1"><small>Full name*</small></label>
								<input  type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name">
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Mobile Number*</small></label>
								<input  type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mobile number">
							</div>


							<button type="submit" name="submit" value="submit" class="btn btn-success rounded-0 w-100 py-2 mt-3 mt-xl-2">Register</button>

							<p class="text-danger h5 mt-4"><i>Already have an account?</i></p>

							<a href="login.php"><button type="button" class="btn btn-primary rounded-0 w-100 py-2">Login Here</button></a>

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









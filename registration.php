<?php

include "include/db.php"

?>


	<!--================Header Menu Area =================-->
<?php

include "include/header.php"

?>
	<!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h2>Login/Register</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="registration.html">Register</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<form  action="include/register.php" method="post" id="contactForm" >
		<div class="container">
			<div class="row">

				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
					<h3>Address Information</h3>
					<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="area" placeholder="Area">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="house" placeholder="House#">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="zip" placeholder="Zip Code">
							</div>
							
				</div>
			</div>
				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
						<h3>Account Information</h3>
						
								<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="dob" placeholder="Date Of Birth">
							</div>
							
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="seller" value="1">
									<label for="f-option2">Seller</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								
				<button type="submit" name="register" class="btn submit_btn">Register</button>
				
	
							</div>
						
					</div>
				</div>
				
			</div>

		
		</div>
		</form>
	</section>
	<!--================End Login Box Area =================-->

	<!--================ start footer Area  =================-->
	<?php include "include/footer.php" ?>
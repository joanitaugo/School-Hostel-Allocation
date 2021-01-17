<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hostel Allocation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href=""><img src="images/unilogo.jpg" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" style="float:right">
					<ul id="responsive">

						<li><a href="index-2.html" class="current">Home</a></li>
						<li><a href="hostels.html">Hostels</a></li>
						<li><a href="pages-contact.html">Contacts</a></li>
						<li><a href="pages-register.html">Register</a></li>
						<li><a href="pages-login.html">Login</a></li>

					</ul>
				</nav>
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			</div>
			</div>

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="pages-login.html">Log In!</a></span>
				</div>

				<!-- Account Type -->
				<div class="account-type">
					<div>
						<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> </label>
					</div>

					<div>
						<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> </label>
					</div>
				</div>
					
				<!-- Form -->
				<form method="post" id="register-account-form">
					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="fullname-register" id="fullname-register" placeholder="Full Name" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-email"></i>
						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					
					<div class="input-with-icon-left" data-tippy-placement="bottom">
						<i class="icon-line-awesome-phone-square"></i>
						<input type="tel" class="input-text with-border" name="phonenumber-register" id="phonenumber-register" placeholder="Phone Number" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-home"></i>
						<input type="text" class="input-text with-border" name="homeaddress-register" id="homeaddress-register" placeholder="Home Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
				</div>
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/unilogo.jpg" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="https://www.facebook.com//" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="https://www.twitter.com//" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="https://www.instagram.com/discovertutors/" title="Instagram" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-instagram"></i>
											</a>
										</li>
										<li>
											<a href="https://www.linkedin.com/in//" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<!-- <option>Français</option>
										<option>Español</option>
										<option>Deutsch</option> -->
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">
					<!-- Links -->
					<div class="col-xl-2 col-lg-2 col-md-3">
						<div class="footer-links">
							<h3></h3>
							<ul>
								<li><a href="pages-register.html">Search for Hostel<span></span></a></li>
								<li><a href="pages-register.html"><span>Book a Hostel</span></a></li>
							</ul>
						</div>
					</div>
	
					<!-- Links -->
					<div class="col-xl-2 col-lg-2 col-md-3">
						<div class="footer-links">
							<h3></h3>
							<ul>
								<li><a href="services.html"><span>Hostels</span></a></li>
								<li><a href=".html"><span>Portal</span></a></li>
							</ul>
						</div>
					</div>
	
					<!-- Links -->
					<div class="col-xl-2 col-lg-2 col-md-3">
						<div class="footer-links">
							<h3>Help</h3>
							<ul>
								<li><a href="pages-contact.html"><span>Contact us</span></a></li>
								<li><a href="#"><span>Terms & conditions</span></a></li>
								<li><a href="#"><span>Feedbacks</span></a></li>
							</ul>
						</div>
					</div>

				
				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="pages-login.html"><span>Log In</span></a></li>
							<li><a href="pages-register.html"><span>Register</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Get notifications.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2018 <strong>Discover Tutors</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

</body>
</html>
<?php
include 'err.php';

$ru_firstname = $_GET["ru_firstname"];
$ru_lastname = $_GET["ru_lastname"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
session_start();

?>


<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01//EN” “http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
	<title>FaceCognition</title>
	<link rel="stylesheet" type="text/css" href="css/login-reg-styles.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="icon" href="images/logo.png">
	<script src="js/jquery.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<!-- <link rel="css/bootstrap.min.css"> -->
</head>

<body class="body">

	<div class="container right-panel-active" id="container">
		<div class="form-container sign-up-container">

			<form>
				<h1>FaceCognition Registration</h1>

				<?php if (isset($_GET['error'])) { ?>
					<p class="regerror-msg"><?php echo $_GET['error']; ?></p>
				<?php } ?>

				<span>Please upload your picture to proceed the registration!</span>

				<input type="name" name="ru_firstname" value="<?php
																if (empty($_GET['ru_firstname'])) {
																	echo "";
																} else {
																	echo $_GET['ru_firstname'];
																} ?>" placeholder="First Name" Disabled>

				<input type="name" name="ru_lastname" value="<?php
																if (empty($_GET['ru_lastname'])) {
																	echo "";
																} else {
																	echo $_GET['ru_lastname'];
																} ?>" placeholder="Last Name" Disabled>

				<input type="studentid" name="ru_studentid" value="<?php
																	if (empty($_GET['ru_studentid'])) {
																		echo "";
																	} else {
																		echo $_GET['ru_studentid'];
																	} ?>" placeholder="Student ID number" Disabled>

				<input type="email" name="ru_email" value="<?php
															if (empty($_GET['ru_email'])) {
																echo "";
															} else {
																echo $_GET['ru_email'];
															} ?>" placeholder="Email" Disabled>

				<select name="ru_course" value="<?php
												if (empty($_GET['ru_course'])) {
													echo "";
												} else {
													echo $_GET['ru_course'];
												} ?>" placeholder="Course" Disabled>
					<option value="<?php
									if (empty($_GET['ru_course'])) {
										echo "";
									} else {
										echo $_GET['ru_course'];
									} ?>" disabled selected value>"<?php
										if (empty($_GET['ru_course'])) {
											echo "";
										} else {
											echo $_GET['ru_course'];
										} ?>"</option>
					<option value="ASCT">ASCT</option>
					<option value="BSCPE">BSCPE</option>
					<option value="BSIT">BSIT</option>
					<option value="BSCS">BSCS</option>
					<option value="BSBA">BSBA</option>
					<option value="BSA">BSA</option>
					<option value="BSTM">BSTM</option>
					<option value="BMMA">BMMA</option>
					<option value="BSHM">BSHM</option>
					<option value="TOP">TOP</option>
					<option value="GAS">GAS</option>
					<option value="STEM">STEM</option>
					<option value="Faculty Staff">Faculty Staff</option>
				</select>

				<!-- Button for Popup Upload -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Upload">Upload Images</button>
			</form>

			<!-- Popup Upload -->
			<div class="modal" id="Upload">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Upload 5 Face Images</h4>
							<a class="close" data-dismiss="modal"></a>
						</div>

						<!-- Modal body -->
						<div class="modal-body">
							<!-- Form for file uploading -->
							<form class="form-upload" action="append_user.php<?php echo strval("?&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email); ?>" method="POST" enctype="multipart/form-data">
								Choose File from PC: <input type="file" name="upload[]" multiple>
								<!-- Direct to fileupload.php to put the file selected to a PHP variable -->
								<button>Submit</button>
							</form>
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">

						</div>

					</div>
				</div>
			</div>

		</div>

		<div class="form-container sign-in-container">
			<form action="signin.php">
				<img src="images/logo.png" style="width:100px;height:100px;">
				<h1>FaceCognition Admin Login</h1>

				<?php
				if (!empty($_GET['error'])) {
					if (in_array($_GET['error'], $all_err)) {
				?>
						<p class="loginerror-msg">
							<?php echo
							$_GET['error'];
							?>
						</p>
				<?php
					}
				}
				?>

				<span>Only authorized user can login here.</span>

				<input type="username" name="username" value="<?php
																if (empty($_GET['username'])) {
																	echo "";
																} else {
																	echo $_GET['username'];
																} ?>" placeholder="Username">

				<input type="password" name="password" value="<?php
																if (empty($_GET['password'])) {
																	echo "";
																} else {
																	echo $_GET['password'];
																} ?>" placeholder="Password">

				<a href="#">Forgot Your Password?</a>
				<button>Login</button>
			</form>
		</div>

		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Have administrative access?</h1>
					<p>Please login in here if you have administrative access to the system!</p>
					<button class="ghost" id="login">Login</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Want to register?</h1>
					<p>If you are a student or faculty member, please register here to record your information to the system!</p>
					<button class="ghost" id="register">Register</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		const signUpButton = document.getElementById('register');
		const signInButton = document.getElementById('login');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
			clearErrors();
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
			clearErrors();
		});

		function clearErrors() {
			Array.prototype.forEach.call(
				document.getElementsByClassName("loginerror-msg"),
				function(el) {
					el.style.display = "none";
				}
			);
		}
	</script>


</body>

</html>
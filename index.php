<!DOCTYPE HTML PUBLIC �-//W3C//DTD HTML 4.01//EN� �http://www.w3.org/TR/html4/strict.dtd">
<html>

<!-- Screen adjustment for devices to fit -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>

	<title>QRCubao</title>

	<!--CSS LINK-->
	<link rel="stylesheet" type="text/css" href="webapp.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--JQUERY LINK-->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

	<!--JS LINK -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!--BOOSTRAP BUNDLE -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="body">

	<!-- Register HTML -->

	<h2 style=" text-align: center; font-size: 25px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"> Welcome to STI College Cubao </h2>

	<center>
		<div class="table">
			<table>
				<tr>
					<div class="container" id="container">
						<form action="signup.php" id="form-id">

							<center>
								<h1 style="font-size: 25px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"> Registration for Visitor</h1>

								<!--VALIDATIOON FOR ERROR-->

								<?php if (isset($_GET['error'])) { ?>
									<p class="regerror-msg"><?php echo $_GET['error']; ?></p>
								<?php } ?>

								<span>Make sure all the information is correct.</span>

								<input type="name" name="ru_name" value="<?php
																			if (empty($_GET['ru_name'])) {
																				echo "";
																			} else {
																				echo $_GET['ru_name'];
																			} ?>" placeholder="Name">

								<input type="studentid" name="ru_studentid" value="<?php
																					if (empty($_GET['ru_studentid'])) {
																						echo "";
																					} else {
																						echo $_GET['ru_studentid'];
																					} ?>" placeholder="Student ID number">

								<input type="email" name="ru_email" value="<?php
																			if (empty($_GET['ru_email'])) {
																				echo "";
																			} else {
																				echo $_GET['ru_email'];
																			} ?>" placeholder="Email">



								</br>
								<button>Register</button>
						</form>
					</div>
	</center>
	</div>


	</tr>



	<!-- LOG IN HTML -->

	<tr>
		<div class="form-container" id="form-container">
			<form action="signin.php">


				<center>
					<h1 style="font-size: 25px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">FaceCognition Admin Login</h1>

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

					<span>Only registered users can log in.</span>

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

					<br>


					</br>
					<button>Login</button>
			</form>
		</div>
		</center>
	</tr>


	</div>
	</div>
	</div>
	</center>

</body>

</html>
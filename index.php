<?php
include 'err.php';
include 'config.php';


?>


<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01//EN” “http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
	<title>FaceCognition</title>
	<link rel="stylesheet" type="text/css" href="css/login-reg-styles.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="icon" href="images/logo.png">
	<script src="js/jquery.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">

	<!-- Register HTML -->

	<div class="container" id="container">


		<form autocomplete="off" action="signin.php">
			<img src="images/logo.png" style="width:100px;height:100px;">
			<h1>FaceCognition
				<br>Admin Login
			</h1>

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


</body>

</html>
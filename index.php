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
<style>
	/* Popup container - can be anything you want */
	.popup {
		position: relative;
		display: inline-block;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	/* The actual popup */
	.popup .popuptext {
		visibility: hidden;
		width: 160px;
		background-color: #555;
		color: #fff;
		text-align: center;
		border-radius: 6px;
		padding: 8px 0;
		position: absolute;
		z-index: 1;
		bottom: 125%;
		left: 50%;
		margin-left: -80px;
	}

	/* Popup arrow */
	.popup .popuptext::after {
		content: "";
		position: absolute;
		top: 100%;
		left: 50%;
		margin-left: -5px;
		border-width: 5px;
		border-style: solid;
		border-color: #555 transparent transparent transparent;
	}

	/* Toggle this class - hide and show the popup */
	.popup .show {
		visibility: visible;
		-webkit-animation: fadeIn 1s;
		animation: fadeIn 1s;
	}

	/* Add animation (fade in the popup) */
	@-webkit-keyframes fadeIn {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}

	@keyframes fadeIn {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}
</style>

<body class="body">

	<!-- Register HTML -->

	<div class="container" id="container">


		<form autocomplete="off" action="signin.php">
			<img src="images/logo.png" style="width:100px;height:100px;">
			<h1>FaceCognition
				<br>Login
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
			<br>
			<button>Login</button>
			<br>
			<div class="popup" onclick="myFunction()">Forget password?
				<span class="popuptext" id="myPopup">Please contact the developers.</span>
				<br>



		</form>




		<script>
			// When the user clicks on div, open the popup
			function myFunction() {
				var popup = document.getElementById("myPopup");
				popup.classList.toggle("show");
			}
		</script>

	</div>


</body>

</html>
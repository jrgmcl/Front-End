<!DOCTYPE html>
<html>
<head>
	<title>FaceCognition</title>
	<link rel="stylesheet" type="text/css" href="login-reg-styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="signup.php">
	<h1>FaceCognition Registration</h1>
	
	<?php if (isset($_GET['error'])) { ?>
     	<p class="regerror-msg"><?php echo $_GET['error']; ?></p>
    <?php } ?>
	
	<input type="name" name="ru_name" value="<?php
	if (empty($_GET['ru_name'])) {
		echo "";
	}
	else{
		echo $_GET['ru_name'];
	}?>" placeholder="Name">

	<input type="studentid" name="ru_studentid" value="<?php
	if (empty($_GET['ru_studentid'])) {
		echo "";
	}
	else{
		echo $_GET['ru_studentid'];
	}?>" placeholder="Student ID number">

	<input type="email" name="ru_email" value="<?php
	if (empty($_GET['ru_email'])) {
		echo "";
	}
	else{
		echo $_GET['ru_email'];
	}?>" placeholder="Email">

	<input type="course" name="ru_course" value="<?php
	if (empty($_GET['ru_course'])) {
		echo "";
	}
	else{
		echo $_GET['ru_course'];
	}?>" placeholder="Course">

	<button>Register</button>
</form>
</div>

<div class="form-container sign-in-container">
	<form action="signin.php">
	<h1>FaceCognition Admin Login</h1>

	<?php if (isset($_GET['error'])) { ?>
     	<p class="loginerror-msg"><?php echo $_GET['error']; ?></p>
    <?php } ?>

	<span>Only authorized user can login here.</span>

	<input type="username" name="username" value="<?php
	if (empty($_GET['username'])) {
		echo "";
	}
	else{
		echo $_GET['username'];
	}?>" placeholder="Username">

	<input type="password" name="password" value="<?php
	if (empty($_GET['password'])) {
		echo "";
	}
	else{
		echo $_GET['password'];
	}?>" placeholder="Password">

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
			document.getElementsByClassName("regerror-msg"),
			function(el) { el.style.display = "none"; }
		);
	}
</script>


</body>
</html>

<?php
$emptyusername_err = 'Please enter your Username!';
$emptypassword_err = 'Please enter your Password!';
$emptyuserpass_err = 'Please enter your Username and Password!';
$invalidcredentials_err = 'Username/Password is incorrect!';
$all_err = array($emptyusername_err, $emptypassword_err, $emptyuserpass_err, $invalidcredentials_err);
?>


<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01//EN”
“http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>FaceCognition</title>
	<link rel="stylesheet" type="text/css" href="login-reg-styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="body">

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="register_button.php">
	<h1>FaceCognition Registration</h1>
	
	<?php if (isset($_GET['error'])) { ?>
     	<p class="regerror-msg"><?php echo $_GET['error']; ?></p>
    <?php } ?>

	<span>Make sure all the information is correct.</span>
	
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

	<!-- Button for Popup Upload -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Upload">Upload</button>
	<br>

	<button>Register</button>
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
				<form class="form-upload" action= "fileupload.php" method="POST" enctype="multipart/form-data">
					Choose File from PC: <input type="file" name="file">
					<!-- Direct to fileupload.php to put the file selected to a PHP variable -->
					<button class"button" type="submit" name="submit">Submit</button>
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
	<h1>FaceCognition Admin Login</h1>
	
	<?php
	if (!empty($_GET['error'])) {
		if (in_array($_GET['error'], $all_err)){
	?>
     	<p class="loginerror-msg">
		<?php echo
		$_GET['error'];
		?>
		</p>
    <?php
	}}
	?>

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

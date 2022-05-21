<?php
include 'err.php';
?>


<!DOCTYPE HTML PUBLIC “-//W3C//DTD HTML 4.01//EN”
“http://www.w3.org/TR/html4/strict.dtd">
<html>
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

<div class="container right-panel-active" id="container">
<div class="form-container sign-up-container">

<form action="signup.php" id="form-id">
	<h1>FaceCognition Registration</h1>
	
	<?php if (isset($_GET['error'])) { ?>
     	<p class="regerror-msg"><?php echo $_GET['error']; ?></p>
    <?php } ?>

	<span>Make sure all the information is correct.</span>
	
	<input type="name" name="ru_firstname" value="<?php
	if (empty($_GET['ru_firstname'])) {
		echo "";
	} else {
		echo $_GET['ru_firstname'];
	} ?>" placeholder="First Name">
	
	<input type="name" name="ru_lastname" value="<?php
	if (empty($_GET['ru_lastname'])) {
		echo "";
	} else {
		echo $_GET['ru_lastname'];
	} ?>" placeholder="Last Name">

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

	<select name="ru_course" value="<?php
	if (empty($_GET['ru_course'])) {
		echo "";
	}
	else{
		echo $_GET['ru_course'];
	}?>" placeholder="Course">
        <option disabled selected value>Select a Course</option>
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


	<button>Register</button>
</form>
</div>


<div class="form-container sign-in-container">
	<form action="signin.php">
	<img src="images/logo.png" style="width:100px;height:100px;">
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
			document.getElementsByClassName("loginerror-msg"),
			function(el) { el.style.display = "none"; }
		);
	}
</script>

</body>
</html>

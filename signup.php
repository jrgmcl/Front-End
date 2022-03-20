<?php  

include 'config.php';

#Grab input values
$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$id = 0;

#Errors
$email_err = 'Enter a valid E-mail address';
$emptyname_err = 'Please enter your name!';
$emptystudentid_err = 'Please enter your Student ID!';
$emptycourse_err = 'Please enter your Course!';
$emptyemail_err = 'Please enter your E-mail!';
$userexist_err ='Sorry, your e-mail and student ID already exists on the system!';
$emailvalid_err = 'Sorry, your e-mail is not valid!';

if (empty($ru_name)) {
	header("Location: main_register.php?error=".$emptyname_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}
else if(empty($ru_studentid)){
    header("Location: main_register.php?error=".$emptystudentid_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}
else if(empty($ru_course)){
    header("Location: main_register.php?error=".$emptycourse_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}
else if(empty($ru_email)){
	header("Location: main_register.php?error=".$emptyemail_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}

#Compare Input email and student ID from the database
$select = mysqli_query($conn, "SELECT * FROM rgsted_users WHERE ru_email = '$ru_email' ru_studentid = '$ru_studentid'");

#If email add and student ID exists on the database
if (!$select || mysqli_num_rows($select) == 0) {
	header("Location: main_register.php?error=".$userexist_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}

#If input email is not a valid email address
elseif (!filter_var($ru_email, FILTER_VALIDATE_EMAIL)) {
	header("Location: main_register.php?error=".$emailvalid_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
}

#Else register the information from the input values
else {
	$register = "INSERT INTO `rgsted_users` (id, ru_name, ru_studentid, ru_course, ru_email) 
	VALUES ('$id', '$ru_name', '$ru_studentid', '$ru_course', '$ru_email')";
	$rs = mysqli_query($conn, $register);

	if($rs)
	{
		echo "Records Inserted";
	}

	else {
		?>
		<script>
			alert('Oops! Something went wrong.');
		</script>
		<?php
	}
}
?>

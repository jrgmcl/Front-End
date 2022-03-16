<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "fr";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

#Grab input values
$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$id = 0;

#Errors
$registered_err = 'Information already exists on the system';
$email_err = 'Enter a valid E-mail address';
$emptyname_err = 'Please enter your name!';
$emptystudentid_err = 'Please enter your Student ID!';
$emptycourse_err = 'Please enter your Course!';
$emptyemail_err = 'Please enter your E-mail!';

if (empty($ru_name)) {
	header("Location: login.php?error=".$emptyname_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email);
	exit();
	}
else if(empty($ru_studentid)){
    header("Location: login.php?error=".$emptystudentid_err);
	exit();
}

#Compare Input email and student ID from the database
$select = mysqli_query($conn, "SELECT * FROM rgsted_users WHERE ru_email = '$ru_email' ru_studentid = '$ru_studentid'");

#If email add and student ID exists on the database
if (!$select || mysqli_num_rows($select) == 0) {

}

#If input email is not a valid email address
elseif (!filter_var($ru_email, FILTER_VALIDATE_EMAIL)) {

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

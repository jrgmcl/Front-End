<?php
#errors
include 'err.php';

$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];

$files = $_FILES ['file'];
$fileName = $files ['name'];



if (empty($ru_name)) {
	header("Location: main_register.php?error=".$emptyname_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email.'&filename='.$filename);
	exit();
}
else if(empty($ru_studentid)){
    header("Location: main_register.php?error=".$emptystudentid_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email.'&filename='.$filename);
	exit();
}
else if(empty($ru_course)){
    header("Location: main_register.php?error=".$emptycourse_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email.'&filename='.$filename);
	exit();
}
else if(empty($ru_email)){
	header("Location: main_register.php?error=".$emptyemail_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email.'&filename='.$filename);
	exit();
}
else if (empty($fileName)){
	header("Location: main_register.php?error=".$emptyfile_err."&ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email.'&filename='.$filename);
}
else{
	header("Location: signup.php?ru_name=".$ru_name."&ru_studentid=".$ru_studentid."&ru_course=".$ru_course."&ru_email=".$ru_email.'&filename='.$filename);
}
?>

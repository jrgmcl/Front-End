<?php

include 'config.php';
include 'err.php';


#Grab input values
$ru_firstname = $_GET["ru_firstname"];
$ru_lastname = $_GET["ru_lastname"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$id = 0;

if (empty($ru_firstname)) {
    header("Location: Register_premain.php?error=" . $emptyname_err . "&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email . '&filename=' . $filename);
    exit();
} else if (empty($ru_studentid)) {
    header("Location: Register_premain.php?error=" . $emptystudentid_err . "&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email . '&filename=' . $filename);
    exit();
} else if (empty($ru_course)) {
    header("Location: Register_premain.php?error=" . $emptycourse_err . "&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email . '&filename=' . $filename);
    exit();
} else if (empty($ru_email)) {
    header("Location: Register_premain.php?error=" . $emptyemail_err . "&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email . '&filename=' . $filename);
    exit();
}

#Compare Input email and student ID from the database
$select = mysqli_query($conn, "SELECT * FROM `fr_registered-users` WHERE ru_email = '$ru_email' OR ru_studentid = '$ru_studentid'");

#If email add and student ID exists on the database
if (!$select || mysqli_num_rows($select) > 0) {
    header("Location: Register_premain.php?error=" . $userexist_err . "&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email);
    exit();
}

#If input email is not a valid email address
elseif (!filter_var($ru_email, FILTER_VALIDATE_EMAIL)) {
    header("Location: Register_premain.php?error=" . $emailvalid_err . "&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email);
    exit();
}

#Else register the information from the input values
else {
    header("Location: Register_main.php?&ru_firstname=" . $ru_firstname . "&ru_lastname=" . $ru_lastname . "&ru_studentid=" . $ru_studentid . "&ru_course=" . $ru_course . "&ru_email=" . $ru_email);
    exit();
}

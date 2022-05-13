<?php
include 'config.php';

$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];

$destination_path = getcwd() . DIRECTORY_SEPARATOR;
$file_name = $_FILES['upload']['name'];
$temp_path = $_FILES['upload']['tmp_name'];
$location = "\Dashboard\\";
$total = count($file_name);

#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM rgstrd_users");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;

#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `rgstrd_users` (id, ru_name, ru_studentid, ru_course, ru_email) 
VALUES ('$id', '$ru_name', '$ru_studentid', '$ru_course', '$ru_email')";
$rs = mysqli_query($conn, $register);

#Alert if success or not
if ($rs) {
    for ($i = 0; $i < $total; $i++) {
        $tmp_singlepath = $temp_path[$i];
        $name_array = explode('.', $file_name[$i]);
        $target_path = $destination_path . $location . $ru_name . '_' . $i . '.' . $name_array[1];

        if (!empty($file_name[$i])) {
            if (move_uploaded_file($tmp_singlepath, $target_path)) {
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Succesfully Registered! Recorded " . $total . " images.');
                    window.location.href='login.php';
                    </script>");
            }
        }
    }
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Something went wrong. Please Try again later...');
    window.location.href='login.php';
    </script>");
}

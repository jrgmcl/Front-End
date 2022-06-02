<?php
include 'config.php'; // connection to database via config.php


#Grab input values
$ru_firstname = $_POST["ru_firstname"];
$ru_lastname = $_POST["ru_lastname"];
$ru_studentid = $_POST["ru_studentid"];
$ru_course = $_POST["ru_course"];
$ru_email = $_POST["ru_email"];
$id = 0;
$newfilename = $ru_firstname . "." . $ru_lastname;


$dataset = "/var/www/html/datasets/";
$file_name = $_FILES['fileupload']['name'];
$temp_path = $_FILES['fileupload']['tmp_name'];
$destination_path = $temp_path . $file_name;
$total = count($file_name);
$imageFileType = strtolower(pathinfo($destination_path, PATHINFO_EXTENSION));


#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM rgstrd_users");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;

#Check if the file is an Image
for ($i = 0; $i < $total; $i++) {
    if (
        $imageFileType[$i] != "jpg" && $imageFileType[$i] != "png" && $imageFileType[$i] != "jpeg"
        && $imageFileType[$i] != "gif"
    ) {
        #Error for wrong file type
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Error on reading the selected file! Please check your file if it's an image file.');
        </script>");
    }
}


#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `rgstrd_users` (id, ru_firstname,ru_lastname, ru_studentid, ru_course, ru_email) 
        VALUES (NULL, '$ru_firstname','$ru_firstname', '$ru_studentid', '$ru_course', '$ru_email')";
$initiate = mysqli_query($conn, $register);


#Alert if success or not
if ($initiate) {
    $dbid = sprintf("%03d.", $id);
    mkdir($dataset . $dbid . $newfilename, 0777, true);

    for ($i = '0'; $i < $total; $i++) {
        $tmp_singlepath = $temp_path[$i];
        $target_path = $dataset . $newfilename . '/' . $dbid . '.' . $newfilename . '_' . $i . '.' . $imageFileType;

        if (!empty($file_name[$i])) {
            if (move_uploaded_file($tmp_singlepath, $target_path)) {

                #Sessuib ti throw validation
                $_SESSION['status'] = "Successfully Registered!";
                header('location: Records.php');
            }
        }
    }
} else {
    echo "Error has occured.";
}

<?php
include 'config.php';

$ru_firstname = $_GET["ru_firstname"];
$ru_lastname = $_GET["ru_lastname"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$newfilename = $ru_firstname.".".$ru_lastname;

$dataset = "/var/www/html/datasets/";
$file_name = $_FILES['upload']['name'];
$temp_path = $_FILES['upload']['tmp_name'];
$destination_path = $temp_path.$file_name;
$total = count($file_name);
$imageFileType = strtolower(pathinfo($destination_path,PATHINFO_EXTENSION));

#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM rgstrd_users");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];
$id = ++$id;

#Check if the file is an Image
for ($i = 0; $i < $total; $i++) {
    if($imageFileType[$i] != "jpg" && $imageFileType[$i] != "png" && $imageFileType[$i] != "jpeg"
    && $imageFileType[$i] != "gif" ) {
        #Error for wrong file type
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Error on reading the selected file! Please check your file if it's an image file.');
        </script>");
    }
}

#Replace to insert a data to dropped indexes
$register = "REPLACE INTO `rgstrd_users` (id, ru_firstname, ru_lastname, ru_studentid, ru_course, ru_email) 
VALUES ('$id', '$ru_firstname', '$ru_lastname', '$ru_studentid', '$ru_course', '$ru_email')";
$initiate = mysqli_query($conn, $register);


#Alert if success or not
if ($initiate) {
    mkdir($dataset.$dbid.'.'.$newfilename, 0777, true);
    for ($i = '0'; $i < $total; $i++) {
        $tmp_singlepath = $temp_path[$i];
        $target_path = $dataset.$newfilename.'/'.$id.'.'.$newfilename.'_'.$i.'.'.$imageFileType;

        if (!empty($file_name[$i])) {
            if (move_uploaded_file($tmp_singlepath, $target_path)) {
                session_abort();
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Succesfully Registered! Recorded ' . $total . ' images.');
                    window.location.href='index.php';
                    </script>");
                    
            }
        }
    }
}

else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Something went wrong on the server! Please Try again later...');
    window.location.href='index.php';
    </script>");
}

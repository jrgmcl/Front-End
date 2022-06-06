<?php
include "config.php";

$ru_firstname = $_GET["ru_firstname"];
$ru_lastname = $_GET["ru_lastname"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$newfilename = $ru_firstname.".".$ru_lastname;
#$dataset = "/home/pi/Desktop/facerecognitionsystem-backend/pending/";
$dataset = "/var/www/html/pending/";
$file_name = $_FILES['upload']['name'];
$temp_path = $_FILES['upload']['tmp_name'];
echo $file_name;
$destination_path = $temp_path.$file_name;
$total = count($file_name);
$imageFileType = '.'.strtolower(pathinfo($destination_path,PATHINFO_EXTENSION));

#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_pending-users`");
$count_array = mysqli_fetch_array($count_id);
$id = $count_array[0];

#Check if the file is an Image
for ($i = 0; $i < $total; $i++) {
    if($imageFileType[$i] != "jpg" && $imageFileType[$i] != "png" && $imageFileType[$i] != "jpeg"
    && $imageFileType[$i] != "gif" ) {
        #Error for wrong file type
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Error on reading the selected file! Please check your file if it is an image file.');
        </script>");
    }
}

#Replace to insert a data to dropped indexes
$register = mysqli_query($conn,"REPLACE INTO `fr_pending-users` (id, ru_firstname, ru_lastname, ru_studentid, ru_course) 
                                        VALUES ('$id', '$ru_firstname', '$ru_lastname', '$ru_studentid', '$ru_course')");

#Alert if success or not
if ($register) {
    $newDIR = ($dataset.$id.'.'.$newfilename.'/'.'RAW');
    mkdir($newDIR, 0777);

    for ($i = '0'; $i < $total; $i++) {
        $tmp_singlepath = $temp_path[$i];
        $newIMG_name = $id.".".$newfilename."_".$i.$imageFileType;
        $target_path = $newDIR.$newIMG_name;

        if (!empty($file_name[$i])) {

            if (move_uploaded_file($tmp_singlepath, $target_path)) {
                echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Succesfully Registered! Recorded " . $total . " images.');
                    window.location.href='index.php';
                    </script>");
            }
        }

        else {
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Failed on uploading. Please try again.');
                window.location.href='index.php';
                </script>");
        }
    }
}

else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Something went wrong on the server. Please Try again later...');
    window.location.href='index.php';
    </script>");
}

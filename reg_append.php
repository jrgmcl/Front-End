<?php
include 'config.php'; // connection to database via config.php


#Grab input values
$ru_firstname = $_GET["ru_firstname"];
$ru_lastname = $_GET["ru_lastname"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];


$pickle = "/home/pi/Desktop/facerecognitionsystem-backend/pickle/datasets.pickle";
$dataset = "/var/www/html/datasets/";
$file_name = $_FILES['fileupload']['name'];
$temp_path = $_FILES['fileupload']['tmp_name'];
$destination_path = $temp_path . $file_name;
$total = count($file_name);



#Count the rows in the rgstrd_users and increment it by one
$count_id = mysqli_query($conn, "SELECT COUNT(*) FROM `fr_registered-users`");
$count_array = mysqli_fetch_array($count_id);
$no = $count_array[0];

if ($no == 0) {
    $id = intval(0);
}

for ($o = 0; $o < $no; $o++) {
    $read = mysqli_query($conn, "SELECT * FROM `fr_registered-users` where id = $o");
    $checker = mysqli_fetch_array($read);

    if ($checker['ru_firstname'] == NULL) {
        $id = $o;
        break;
    } elseif (($o + 1) == $no) {
        $id = $o + 1;
    }
}

#Check if the file is an Image
for ($i = 0; $i < $total; $i++) {
    $imageFileType = strtolower(pathinfo($file_name[$i], PATHINFO_EXTENSION));
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        #Error for wrong file type
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Error on reading the selected file! Please check your file if it's an image file.');
        </script>");
    }
}

$newfilename = $id.".".$ru_firstname.".".$ru_lastname;

#Replace to insert a data to dropped indexes
$register = mysqli_query($conn, "REPLACE INTO `fr_registered-users` (id, ru_firstname,ru_lastname, ru_studentid, ru_course) 
                                         VALUES ('$id', '$ru_firstname','$ru_lastname', '$ru_studentid', '$ru_course')");


#Alert if success or not
if ($register) {
    mkdir($dataset.$newfilename, 0777);
    mkdir($dataset.$newfilename."/RAW", 0777);

    for ($p = 0; $p < $total; $p++) {
        $imageFileType = strtolower(pathinfo($file_name[$p], PATHINFO_EXTENSION));
        $tmp_singlepath = $temp_path[$p];
        $target_path = $dataset.$newfilename.'/RAW/'.$newfilename.'_'.$p.'.'.$imageFileType;
        chmod($target_path, 0777);
        chmod($dataset.$newfilename, 0777);
        chmod($dataset.$newfilename."/RAW", 0777);
        if (!empty($file_name[$p])) {
            if (move_uploaded_file($tmp_singlepath, $target_path)) {
                #Sessuib ti throw validation
                
                $deletepickle = unlink($pickle);
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully registered the user!');
                window.location.href='Register.php';
                </script>");
            }
        }
    }
} else {
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Registration failed. Please try again.');
            window.location.href='Register.php';
           </script>");
}


?>
<?php

include 'config.php';
include 'Records.php';

$ru_name = $_GET["ru_name"];
$ru_studentid = $_GET["ru_studentid"];
$ru_course = $_GET["ru_course"];
$ru_email = $_GET["ru_email"];
$id = $_GET['id'];

#Count the rows in the rgstrd_users and increment it by one
$count_user = mysqli_query($conn, "SELECT COUNT(*) FROM rgstrd_users");
$count_row = $query->fetch_assoc($count_user);
$id = $count_row[0];
$id = ++$id;

#Replace to insert a data to dropped indexes
if(isset($_GET['delete']){ 
$replace = "INSERT  `rgstrd_users` id = '$id' INTO `deact_users` WHERE id =$id'";
$query = mysqli_query($conn, $register);

  }
#Check if the file is empty
for ($i = 0; $i < $total; $i++) {
    if (!empty($row['id'])) {
        echo "ROW IS EMPTY";
    } else {

        echo "ROW IS NOT EMPTY";
    }
}



#Alert if success or not
if ($query) {
    $dbid = sprintf("%03d.", $id);

    for ($i = '0'; $i < $total; $i++) {

        if (!empty($result[$i])) {
            if ((h)) {
                echo ("");
            }
        }
    }
} else {
    echo ("");
}
#Fetch the data from database
$sel = "SELECT * FROM rgstrd_users";
$query = $conn->query($sel);

<?php
include 'config.php';


#Fetch the data from database
$sel = "SELECT * FROM `fr_registered-users` ";
$query = $conn->query($sel);


$num = mysqli_num_rows($query);
if ($num > 0) {
    while ($result = $query->fetch_assoc()) {
        if ($result['ru_firstname'])
            echo "

" . $result['id'] . "
" . $result['ru_studentid'] . " 
" . $result['ru_firstname'] . " 
" . $result['ru_lastname'] . " 
" . $result['ru_course'] . " 






";
    }
}

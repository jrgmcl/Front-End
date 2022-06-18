<?php
include 'config.php';


$sel = mysqli_fetch(mysqli_query($conn, "SELECT * FROM `admin` "));
print_r($sel);

     



?>
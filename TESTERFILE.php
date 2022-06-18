<?php
include 'config.php';


$sel = "SELECT * FROM `fr_registered-users` ";
$query = $conn->query($sel);


$num = mysqli_num_rows($query);
if ($num > 0) {
    while ($result = $query->fetch_assoc()) {
        if ($result['ru_firstname']){
        echo "<tr><td>" . $result['ru_studentid'] . " </td>
        <td>" . $result['ru_firstname'] . " </td>
        <td>" . $result['ru_lastname'] . " </td>
        <td>" . $result['ru_course'] . " </td>
        <td>
        <a href='TESTERFILE2.php?id=" . $result['id'] . "' class='w3button w3-gray w3-text-white w3-hover-cyan' > Drop </a> 
        </td></tr>";
        }
    }
}             



?>
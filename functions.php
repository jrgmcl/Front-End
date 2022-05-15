<?php

include 'config.php';


define('DBINFO', 'mysql host=localhost,dbname=fr');
define('DBUSER', 'root');
define('DBPASS', '');

function performQuery($query)
{
    $conn = new PDO(DBINFO, DBUSER, DBPASS);
    $stmt = $conn->prepare($query);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function fetchAll($query)
{
    $conn = new PDO(DBINFO, DBUSER, DBPASS);
    $stmt = $conn->query($query);
    return $stmt->fetchALL();
}

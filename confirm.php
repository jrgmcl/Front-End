<?php

session_start(); /* START THE SESSION */

include("config.php");

if ($stmt = $mysqli->prepare("SELECT count(*) as total from admin WHERE username = '" . $username . "' and 
	password = '" . $password_encrypted . "'")) {

  $stmt->bind_param("ss", $_POST["username"], $_POST["password"]); /* BIND VARIABLES TO YOUR QUERY */
  $stmt->execute(); /* EXECUTE THE QUERY */
  $stmt->store_result();
  $result = $stmt->num_rows; /* STORE NUMBER OF ROWS */
  $stmt->bind_result($firstname, $lastname); /* STORE THE RESULT */
  $stmt->fetch(); /* FETCH THE RESULT */
  $stmt->close(); /* CLOSE THE STATEMENT */

  if ($result == 1) { /* IF FOUND ONE */
    $_SESSION["username"] = $firstname; /* STORE THE USERNAME INTO A SESSION VARIABLE */
    header("LOCATION:Records.php"); /* REDIRECT USER TO INDEX PAGE */
  } else { /* IF NO RESULT FOUND */
    header("LOCATION:index.php"); /* REDIRECT USER TO LOGIN PAGE */
  }
} /* END OF PREPARED STATEMENT */

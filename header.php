<?php
  session_start();
  if(empty($_SESSION["username"])){ /* IF NO USERNAME REGISTERED TO THE SESSION VARIABLE */
    header("LOCATION:index.php"); /* REDIRECT USER TO LOGIN PAGE */
  }

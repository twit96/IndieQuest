<?php

# Display all errors.
error_reporting(E_ALL);
ini_set("display_errors", "on");

# Start session
session_start();

# session time
#$_SESSION["time"] = time();

$_SESSION["clicked"] = false;

# If session variable time is not created, create session time variable
if(isset($_POST["button01"])) {
  $_SESSION["expireTime"] = 120;
  #echo("session CREATED ");
}

// Check for session time out
if(isset($_SESSION["time"])) {
  $timePast = time() - $_SESSION["time"];

  if($timePast >= $_SESSION["expireTime"]){
    session_unset();
    session_destroy();
    #echo($timePast."SESSION DONE");
    header("Location: ../index.php");
  }
}

# Session time
$_SESSION["time"] = time();

?>

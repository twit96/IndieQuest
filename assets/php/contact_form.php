<?php


/**
* Display all errors.
*/
error_reporting(E_ALL);
ini_set("display_errors", "on");


/**
* Function to check if a username
* is in the iq_passwords database.
* Returns 1 if username exists and 0 otherwise.
*/
function verifyUser($mysqli, $username) {
  $command = 'SELECT COUNT(1) FROM iq_passwords WHERE username = "' . $username . '";';
  $result = $mysqli->query($command);
  if (!$result) { die("Query failed: ($mysqli->error <br>"); }
  // $user_in_db will be 1 if in database and 0 if not in database
  $user_in_db = $result->fetch_row()[0];
  return $user_in_db;
}


/**
* Function to format user inputs into an email, and send that email.
* No return value.
*/
function sendEmail($username, $email, $title, $feedback) {
  $to = "tylerwittig1996@gmail.com";
  $subject = "IndieQuest: ".$title;
  $txt = "Username: " . $username . "\n\n";
  $txt .= $feedback;
  $txt = wordwrap($txt, 100);
  $headers = "From: $email";
  // send email
  mail($to,$subject,$txt,$headers);
}


/**
* Function to build return string based off of user inputs.
* Ensures username is in database and email is valid, calls sendEmail() if
* inputs are valid, and returns $return_string.
*/
function buildReturnString($mysqli, $username, $email, $title, $feedback) {
  $return_string = '';

  if (verifyUser($mysqli, $username) == 0) {
    // user not in database
    //$return_string .= "You must use a valid username to submit feedback. ";
    $return_string .= '"'.$username . '" is not an existing IndieQuest username.<br />';
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // email is invalid
    //$return_string .= "You must use a valid email to submit feedback. ";
    $return_string .= '"'.$email.'" is not a valid email address.<br />';

  }

  if (($title == '') || ($feedback == '')) {
    // title or feedback is empty
    $return_string .= "The title and feedback fields cannot be empty.<br />";
  }

  if ($return_string == '') {
    // inputs passed the above checks - return_string still empty
    $return_string .= "Thank you for submitting feedback! ";
    $return_string .= "An email has begun its quest to our inbox!";
    // send feedback email
    sendEmail($username, $email, $title, $feedback);
  }

  return $return_string;
}


/**
* Function to configure required inputs for the above functions.
* Checks database connection, handles user inputs, then calls buildReturnString().
*/
function doEngine() {
  $server = "fall-2020.cs.utexas.edu";
  $user   = "cs329e_bulko_wittig";
  $pwd    = "format6arch4swamp";
  $dbName = "cs329e_bulko_wittig";

  // For debugging only
  //echo "Server: ".$server."<br>";
  //echo "User: ".$user."<br>";
  //echo "Database name: ".$dbName."<br>";

  // Connect to MySQL Server
  $mysqli = new mysqli ($server, $user, $pwd, $dbName);

  if ($mysqli->connect_errno) {
    die('Connect Error: ' . $mysqli->connect_errno . ": " . $mysqli->connect_error);
  }

  // Select Database
  $mysqli->select_db($dbName) or die($mysqli->error);

  // Retrieve data from Query String
  $username = $_GET['username'];
  $email = $_GET['email'];
  $title = $_GET['title'];
  $feedback = $_GET['feedback'];

  // Escape User Input to help prevent SQL Injection
  $username = $mysqli->real_escape_string($username);

  // Build Return String
  $return_string = buildReturnString($mysqli, $username, $email, $title, $feedback);

  // Display Return String
  echo $return_string;
}


/**
* Initial call to start script.
*/
doEngine();


?>

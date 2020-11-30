<?php


/**
* Display all errors.
*/
error_reporting(E_ALL);
ini_set("display_errors", "on");


/**
* Function to unset username and password POST variables.
* No return value.
*/
function doUnsetPost() {
  unset($_POST['username']);
  unset($_POST['password']);
}


/**
* Function to check if a username
* is in the iq_passwords database.
* Returns 1 if username exists and 0 otherwise.
*/
function checkUser($mysqli, $username) {
  $command = 'SELECT COUNT(1) FROM iq_passwords WHERE username = "' . $username . '";';
  $result = $mysqli->query($command);
  if (!$result) { die("Query failed: ($mysqli->error <br>"); }
  // $user_in_db will be 1 if in database and 0 if not in database
  $user_in_db = $result->fetch_row()[0];
  return $user_in_db;
}


/**
* Function to check if a username/password entry
* is in the iq_passwords database.
* Returns 1 if username/password entry exists and 0 otherwise.
*/
function checkPass($mysqli, $username, $password) {
  $command = 'SELECT COUNT(1) FROM iq_passwords WHERE username = "' . $username . '" AND password = "' . $password . '";';
  $result = $mysqli->query($command);
  if (!$result) { die("Query failed: ($mysqli->error <br>"); }
  // $pass_in_db will be 1 if in database and 0 if not in database
  $pass_in_db = $result->fetch_row()[0];
  return $pass_in_db;
}


/**
* Function to insert a new username/password entry
* into the iq_passwords database.
* No return value.
*/
function doInsert($mysqli, $username, $password) {
  $command = 'INSERT INTO iq_passwords VALUES ("' . $username . '", "' . $password . '");';
  $result = $mysqli->query($command);
  if (!$result) { die("Query failed: ($mysqli->error <br>"); }
}


/**
* Function to build a return string to be displayed
* based off of the given username and password.
* String indicates successful login, incorrect password, or account created.
* Returns this string.
*/
function buildResultString($mysqli, $username, $password) {
  // Build String
  $display_string = '';

  if (!$username == '' && !$password == '') {
    // username and password have values
    $user_in_db = checkUser($mysqli, $username);

    if ($user_in_db == 1) {
      // username in database
      $pass_in_db = checkPass($mysqli, $username, $password);

      if ($pass_in_db == 1) {
        // login successful
        $display_string .= '<script>alert("Login Successful.");</script>';
        setcookie('username', $username, time()+604800, '/');

      } else {
        // password incorrect
        $display_string .= '<script>alert("Incorrect Password.");</script>';
      }

    } else {
      // username not in database
      doInsert($mysqli, $username, $password);
      $display_string .= '<script>alert("Account Created.");</script>';
      setcookie('username', $username, time()+604800, '/');
    }
  }

  return $display_string;
}


/**
* Engine function to configure required inputs for the above functions.
* Checks database connection, pulls and handles username and password inputs,
* and echoes return string
*/
function checkLogin() {

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

  // Retrieve data from POST
  $username = $_POST['username'];
  $password = $_POST['password'];
  doUnsetPost();

  // Escape User Input to help prevent SQL Injection
  $username = $mysqli->real_escape_string($username);
  $password = $mysqli->real_escape_string($password);

  // Build Return String
  $display_string = buildResultString($mysqli, $username, $password);
  echo $display_string;

  // Refresh Page and Die
  header('Location: ./');
  die;
}


/**
* Initial function call to execute script.
*/
checkLogin();


?>

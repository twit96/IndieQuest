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
* Function to insert a new username/password entry into the iq_passwords database,
* and a new username/journey entry into the iq_journeys database.
* No return value.
*/
function doInsert($mysqli, $username, $password) {
  $command1 = 'INSERT INTO iq_passwords VALUES ("' . $username . '", "' . $password . '");';
  $result1 = $mysqli->query($command1);
  if (!$result1) { die("Query failed: ($mysqli->error <br>"); }

  $command2 = 'INSERT INTO iq_journeys VALUES ("' . $username . '",0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);';
  $result2 = $mysqli->query($command2);
  if (!$result2) { die("Query failed: ($mysqli->error <br>"); }
}


/**
* Function to set initial cookies for all articles
* based on username's journey database values.
* No return value.
*/
function setInitialCookies($mysqli, $username) {
  // get user's journey information
  $command = 'SELECT * FROM iq_journeys WHERE username="'.$username.'";';
  $result = $mysqli->query($command);
  if (!$result) { die("Query failed: ($mysqli->error <br>"); }

  // set each article cookie from query results
  $row = $result->fetch_row();
  $articles = array(
	  "",
	  "amnesia",
	  "amongus",
	  "bindingofisaac",
	  "cuphead",
	  "evoland",
	  "fallguys",
	  "flappybird",
	  "fnaf",
	  "genshinimpact",
	  "gettingoverit",
	  "goatsimulator",
	  "minecraft",
	  "limbo",
	  "rocketleague",
	  "undertale"
  );

  $i = 0;
  foreach ($row as &$value) {
    if ($i != 0) {
      $this_article = $articles[$i];
      setcookie($this_article, $value, time()+604800, '/');
      //echo "Cookie for ".$this_article." is ".$value."\n";
    }
    $i++;
  }
}


/**
* Function to handle the login functionality
* based off of the given username and password.
* No return value.
*/
function checkLogin($mysqli, $username, $password) {

  if (!$username == '' && !$password == '') {
    // username and password have values
    $user_in_db = checkUser($mysqli, $username);

    if ($user_in_db == 1) {
      // username in database
      $pass_in_db = checkPass($mysqli, $username, $password);

      if ($pass_in_db == 1) {
        // login successful
	setcookie('username', $username, time()+604800, '/');
        setInitialCookies($mysqli, $username);

      } else {
        // password incorrect
      }

    } else {
      // username not in database
      doInsert($mysqli, $username, $password);
      setcookie('username', $username, time()+604800, '/');
      setInitialCookies($mysqli, $username);
    }
  }
}


/**
* Engine function to configure required inputs for the above functions.
* Checks database connection and pulls and handles username and password inputs.
*/
function doEngine() {

  // UT CS Setup
  //$server = "fall-2020.cs.utexas.edu";
  //$user   = "cs329e_bulko_wittig";
  //$pwd    = "format6arch4swamp";
  //$dbName = "cs329e_bulko_wittig";
  
  // Wittig Portfolio Setup
  $server = "localhost";
  $user   = "iq_user";
  $pwd    = "iq_user_pass";
  $dbName = "IndieQuest";

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

  // Check Login
  checkLogin($mysqli, $username, $password);

  // Refresh Page and Die
  header('Location: ./');
  die;
}


/**
* Initial function call to execute script.
*/
doEngine();


?>

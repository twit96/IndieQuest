<?php


/**
* Display all errors.
*/
error_reporting(E_ALL);
ini_set("display_errors", "on");


/**
* Function to provide timeout functionality to the session.
* Checks existing session timer against current time and destroys the session
* if time elapsed is too long. Creates session timer if it doesn't exist.
* No return value.
*/
function checkTimer() {
  // Check Existing Timer
  if (isset($_SESSION["time"])) {
    $timePast = time() - $_SESSION["time"];

    if ($timePast >= $_SESSION["expireTime"]) {
      // session timed out - end session and send to homepage
      // echo("SESSION DONE");
      session_unset();
      session_destroy();
      header("Location: ../");
    } else {
      // session still active - reset timer
      $_SESSION["time"] = time();
    }

  // Set Initial Timer
  } else {
    $_SESSION["time"] = time();
  }
}


/**
* Function to return article name of the current page based on its URL string.
* Returns current article name in all lowercase.
*/
function getArticleName() {
  $url_path = $_SERVER['REQUEST_URI'];
  $pieces = explode('/', $url_path);

  $name_piece = $pieces[5];
  if (($name_piece == '') || ($name_piece == 'index.php')) { $name_piece = 'minecraft'; }

  $trimmed = trim($name_piece, ".php");
  $curr_article = strtolower($trimmed);

  return $curr_article;
}


/**
* Function to update a username's article value in the iq_journeys database,
* update the corresponding article cookie value,
* and update the last_article session variable,
* all for the given article name curr_article.
* No return value.
*/
function doUpdate($mysqli, $username, $curr_article) {

  // update iq_journeys database
  $command = 'UPDATE iq_journeys SET '.$curr_article.' = 1 WHERE username = "'.$username.'";';
  $result = $mysqli->query($command);
  if (!$result) { die("Query failed: ($mysqli->error <br>"); }

  // update cookie
  setcookie($curr_article, 1, time()+604800, '/');

  // echo($curr_article);
  $_SESSION["last_article"] = $curr_article;
}


/**
* Function to handle the journey functionality based off of the given username.
* No return value.
*/
function checkJourney($mysqli, $username, $curr_article) {

  // Start session if not already started
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $_SESSION["expireTime"] = 120;
    // echo("session CREATED ");
  }

  // Check for Session Timeout
  checkTimer();

  // Check if game piece button was clicked
  if (isset($_POST[$curr_article])) {
    // echo("Button Clicked");
    unset($_POST[$curr_article]);
    doUpdate($mysqli, $username, $curr_article);
    header("Location: ./");
  }

}


/**
* Engine function to configure required inputs for the above functions.
* Checks database connection, then calls checkJourney() function.
* No return value.
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

  // Get Username
  if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
  } else {
    header("Location: ../");
    die('username cookie missing');
  }

  // Get Current Article
  $curr_article = getArticleName();

  // Check Journey
  checkJourney($mysqli, $username, $curr_article);
}


/**
* Initial function call to execute script.
*/
doEngine();


?>

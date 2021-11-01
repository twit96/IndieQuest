<?php


/**
* Function to display the completed parts of the quest in profile popup.
*/
function checkCookies($articles, $true_names) {
  echo '<p class="stats">';

  $i = 0;
  foreach ($articles as &$value) {

    // grab cookie
    if (isset($_COOKIE[$value])) {
      $this_cookie = $_COOKIE[$value];

      // display article completion
      $this_article = $true_names[$i];

      if ($this_cookie == 1) {
        echo '<span class="completed">'.$this_article.': Complete!</span>';
      } else {
        echo '<span class="incomplete">- '.$this_article.'</span>';
      }

      echo "<br />";
    }

    // update index
    $i++;
  }

  echo "</p>";
}


/**
* Function to build and display the html contents of the profile popup
* based on whether or not the user is logged in.
* No return value.
*/
function buildPopup($articles, $true_names) {

  // opening html
  echo <<<TOP
  <div class="popup-bg">
    <article id="profile">
      <input class="btn x r-float" type="button" onclick="toggleForm()" value="X">
TOP;
  // user logged in popup html contents
  if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo "<h1>$username</h1>";

    checkCookies($articles, $true_names);

    echo <<<USER
      <form method="POST">
        <p class="buttons">
          <input class="btn" name="logout" type="submit" value="Logout">
        </p>
      </form>
USER;
  // user not logged in popup html contents
  } else {
    echo <<<GUEST
      <h1>Sign Up / Login</h1>
      <p>
        Create an account to begin the quest or login to continue your journey!
      </p>
      <section>
        <form id="login" method="POST">
            <p>
              Username:
              <input name="username" type="text" size="20" placeholder="Enter Username Here" required />
            </p>
            <p>
              Password:
              <input name="password" type="password" size="20" placeholder="Enter Password Here" required />
            </p>

          <p class="buttons">
            <input class="btn" id="submit" type="submit" value="Submit">
            <input class="btn" type="reset" value="Clear">
          </p>
        </form>
      </section>
GUEST;
  }
  // closing html
  echo <<<BOTTOM
    </article>
  </div>
BOTTOM;
}


/**
* Function to unset a cookie of a given name. Used by logOut() function below.
*/
function unsetCookie($c_name) {
  setcookie($c_name, '', time()-1000, '/');
  unset($_COOKIE[$c_name]);
}


/**
* Function to log user out of website by unsetting cookie.
* No return value.
*/
function logOut($articles) {
  // clear cookies
  $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
  foreach($cookies as $cookie) {
    $parts = explode('=', $cookie);
    $name = trim($parts[0]);
    if ((in_array($name, $articles)) || ($name == 'username')) {
      unsetCookie($name);
    }
  }

  // end session if it exists
  if (!(session_status() == PHP_SESSION_NONE)) {
    session_unset();
    session_destroy();
  }

  // Refresh Page and Die
  header('Location: ./');
  die;
}


/**
* Function to check and handle if username and password post values are set.
* Calls check_login.php if so.
*/
function checkPostVariables() {

  if (isset($_POST['username']) && isset($_POST['password'])) {
    // post variables are set

    if (($_POST['username'] != '') && ($_POST['password'] != '')) {
      // post variables are nonempty

      // check login - handle cases of homepage path vs not homepage path
      $url_path = $_SERVER['REQUEST_URI'];
      $pieces = explode('/', $url_path);
      $piece = $pieces[2];

      if ($piece == '') {
        // homepage
        include './assets/php/check_login.php';
      } else {
        // journey or contact page ($piece == journey || contact)
        include '../assets/php/check_login.php';
      }

    } else {
      // post variables are empty. something went wrong. unset them.
      unset($_POST['username']);
      unset($_POST['password']);
    }
  }

  //if ((isset($_COOKIE['username'])) && ('POST' === $_SERVER['REQUEST_METHOD'])) {
  if ((isset($_COOKIE['username'])) && (isset($_POST['logout']))) {
    // user is logged in and clicked logout button
    unset($_POST['logout']);
    logOut($articles);
  }
}


/**
* Engine function for the profile popup.
*/
function doEngine() {
  $articles = array(
    "minecraft",
    "limbo",
    "amnesia",
    "bindingofisaac",
    "evoland",
    "flappybird",
    "goatsimulator",
    "fnaf",
    "undertale",
    "rocketleague",
    "cuphead",
    "gettingoverit",
    "amongus",
    "fallguys",
    "genshinimpact",
  );

  $true_names = array(
    "Minecraft",
    "Limbo",
    "Amnesia: The Dark Descent",
    "The Binding of Isaac",
    "Evoland",
    "Flappy Bird",
    "Goat Simulator",
    "Five Nights At Freddy's",
    "Undertale",
    "Rocket League",
    "Cuphead",
    "Getting Over It",
    "Among Us",
    "Fall Guys: Ultimate Knockout",
    "Genshin Impact"
  );

  buildPopup($articles, $true_names);
  checkPostVariables();
}


/**
* Initial Call to Build Popup
*/
doEngine();

?>

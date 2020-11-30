<?php


/**
* Function to build and display the html contents of the profile popup
* based on whether or not the user is logged in.
* No return value.
*/
function buildPopup() {

  // opening html
  echo <<<TOP
  <div class="popup-bg">
    <article id="profile">
      <input class="btn x r-float" type="button" onclick="toggleForm()" value="X">
TOP;
  // user logged in popup html contents
  if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
    echo <<<USER
      <h1>Good to see you, $username!</h1>
      <form method="POST">
        <p class="buttons">
          <input class="btn" type="submit" value="Logout">
        </p>
      </form>
USER;
  // user not logged in popup html contents
  } else {
    echo <<<GUEST
      <h1>Sign Up / Login</h1>
      <p>
        Create an account to start your quest!
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
            <input class="btn" id="submit" type="submit" value="Login">
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
* Function to log user out of website by unsetting cookie.
* No return value.
*/
function logOut() {
  setcookie('username', '', time()-3600, '/');
  unset($_COOKIE['username']);
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
      $piece = $pieces[4];

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

  if ((isset($_COOKIE['username'])) && ('POST' === $_SERVER['REQUEST_METHOD'])) {
    // user is logged in and clicked logout button
    logOut();
  }
}



/**
* Initial Call to Build Popup
*/
buildPopup();
checkPostVariables();

?>

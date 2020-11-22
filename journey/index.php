<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Contact Us</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/header_state.js" defer></script>
    <script src="../assets/js/profile_popup.js" defer></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Artifika" />
  </head>

  <body>

    <!-- div to display a fixed backgound behind content -->
    <div id="fixed-background"></div>

    <!-- div to display the banner at the top of the page -->
    <div id="banner"></div>

    <header id="head">
      <div class="wrapper">
        <a id="home-link" href="../">
          <img src="../assets/img/logo.png" alt="logo image" />
          <h1>IndieQuest</h1>
        </a>
        <ul id="top-nav">
          <li><a id="journey-link" href="../journey/">The Journey</a></li>
          <li><a id="contact-link" href="../contact/">Contact</a></li>
          <li id="profile-icon"><img id="profile-link" src="../assets/img/profile.svg" onclick="openForm()" /></li>
        </ul>
      </div>
    </header>

    <div id="page-wrapper" class="journey">

      <!-- Profile Popup -->
      <div class="popup-bg">
        <article id="profile">
          <?php
            echo '<input class="btn x r-float" type="button" onclick="closeForm()" value="X">';
            // if logged in
            if (isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['password']) && $_POST['password'] != "") {
              echo "<h1>Good to see you, " . $_POST['username'] . "!</h1>";
              $user_text = <<<USER
              <form method="POST">
                <p class="buttons">
                  <input class="btn" type="submit" value="Logout">
                </p>
              </form>
      USER;
              echo $user_text;

            // if logged out
            } else {
              $guest_text = <<<GUEST
              <h1>Sign Up / Login</h1>
              <p>
                Create an account to start your quest!
              </p>

              <section>
                <form id="login" method="POST">
                    <p>
                      Username:
                      <input name="username" type="text" size="10" placeholder="Enter Text Here" />
                    </p>
                    <p>
                      Password:
                      <input name="password" type="text" size="10" placeholder="Enter Text Here" />
                    </p>

                  <p class="buttons">
                    <input class="btn" id="submit" type="submit" value="Login">
                    <input class="btn" type="reset" value="Clear">
                  </p>
                </form>
              </section>
      GUEST;
              echo $guest_text;
            }
          ?>
        </article>
      </div>

      <div id="left">
        <article>
          <h1>The Journey</h1>

          <section>
            <h2>2001</h2>
            <nav>
              <a class="active" href="">Indie Game 1</a>
              <a href="../blank.html">Indie Game 2</a>
              <a href="../blank.html">Indie Game 3</a>
            </nav>
          </section>

          <section>
            <h2>2005</h2>
            <nav>
              <a href="../blank.html">Indie Game 4</a>
              <a href="../blank.html">Indie Game 5</a>
              <a href="../blank.html">Indie Game 6</a>
            </nav>
          </section>

          <section>
            <h2>2010</h2>
            <nav>
              <a href="../blank.html">Indie Game 7</a>
              <a href="../blank.html">Indie Game 8</a>
              <a href="../blank.html">Indie Game 9</a>
            </nav>
          </section>

          <a class="btn" href="../blank.html">Random Destination</a>

        </article>
      </div>

      <div id="center">
        <article>
          <h1>2001: Indie Game 1</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Aliquam vel bibendum arcu. Vivamus lacinia, ipsum quis tincidunt
            luctus, urna lorem blandit sapien, vel rutrum nibh ipsum a nisi.
            Etiam vitae accumsan risus. Aenean sodales felis at enim accumsan
            viverra.
          </p>
          <p>
            Vestibulum ante ipsum primis in faucibus orci luctus et
            ultrices posuere cubilia curae; Nunc vel elit quis tellus iaculis
            maximus et in tortor. Maecenas at mi porttitor, viverra dui sit
            amet, sodales sapien. Nullam vulputate fermentum nibh, nec
            convallis mauris vulputate eu. Nulla eros purus, congue at eleifend
            eu, posuere vitae risus.
          </p>
          <p>
            Aliquam et quam vel dolor mollis porta.
            Donec lobortis ornare lacus eu condimentum. Vestibulum ante nulla,
            elementum sit amet pulvinar ac, sodales ac eros. Nam tellus massa,
            vestibulum id dapibus id, consequat et metus. Aliquam suscipit
            placerat nulla non tempus.
          </p>
        </article>
      </div>

      <div id="right">
        <article>
          <h1>Links</h1>
          <nav>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
          </nav>
        </article>
      </div>

    </div>

    <footer>
      <div class="wrapper">
        <span>2020/11/11</span>
        <span>Alexia Carmona, Cooper Fryar, Tyler Wittig</span>
      </div>
    </footer>

  </body>
</html>

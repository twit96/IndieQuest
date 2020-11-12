<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Contact Us</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Artifika" />
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header_state.js" defer></script>
    <script src="../assets/js/profile_popup.js" defer></script>
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

    <!-- Profile Popup -->
    <div id="profile">
      <article>
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

    <div id="page-wrapper" class="contact">

      <div>
        <article>
          <h1>Contact Us</h1>

          <section>
            <img class="avatar r-float" src="../assets/img/avatar-alexia.jpg" alt="Alexia Avatar" />
            <h2>Alexia Carmona</h2>
            <p>
              Alexia is a senior Arts and Entertainment technologies student
              who studies at the University of Texas at Austin.
            </p>
            <p>
              Her main focus is becoming a video game artist as well as having
              a background in computer science languages.
            </p>
            <nav>
              <a class="btn" href="https://github.com/UsagiUchiha">GitHub</a>
              <a class="btn" href="mailto:carmona.m.alexia@gmail.com">Email</a>
              <!-- <a href="">LinkedIn</a> -->
            </nav>
          </section>

          <section>
            <img class="avatar r-float" src="../assets/img/avatar-cooper.jpg" alt="Cooper Avatar" />
            <h2>Cooper Fryar</h2>
            <p>
              Majoring in Arts and Entertainment Technologies at The University
              of Texas at Austin for the purpose of Game Development. This
              Major allows the student to explore all aspects of game
              development from coding to business to art and audio.
              Has experience teaching Data Analytics including Excel, Python,
              Tableau, and PostgreSQL.
            </p>
            <nav>
              <a class="btn" href="https://github.com/CooperFryar">GitHub</a>
              <a class="btn" href="mailto:cooperfryar@gmail.com">Email</a>
              <!-- <a href="">LinkedIn</a> -->
            </nav>
          </section>

          <section>
            <img class="avatar r-float" src="../assets/img/avatar-tyler.png" alt="Tyler Avatar" />
            <h2>Tyler Wittig</h2>
            <p>
              Software Developer and student at The University of Texas at
              Austin, with experience in Web Programming, Game Development,
              Data Analytics, Audio and Image Design, and an extensive
              background in Mathematics.
            </p>
            <nav>
              <a class="btn" href="https://twit96.github.io/">Portfolio</a>
              <a class="btn" href="https://github.com/twit96">GitHub</a>
              <a class="btn" href="mailto:tylerwittig@utexas.edu">Email</a>
            </nav>
          </section>

        </article>
      </div>

    </div>

    <footer>
      <span>2020/11/11</span>
      <span>Alexia Carmona, Cooper Fryar, Tyler Wittig</span>
    </footer>

  </body>
</html>
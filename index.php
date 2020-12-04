<!DOCTYPE html>
<html lang="en">

  <head>
    <title>IndieQuest</title>
    <link rel="icon" href="assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/header_state.js" defer></script>
    <script src="assets/js/page_config.js" defer></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Artifika" />
  </head>

  <body>

    <!-- div to display a fixed backgound behind content -->
    <div id="fixed-background"></div>

    <!-- div to display the banner at the top of the page -->
    <div id="banner"></div>

    <header id="head">
      <div class="wrapper">
        <a id="home-link" href="">
          <img src="assets/img/logo.png" alt="logo image" />
          <h1>IndieQuest</h1>
        </a>
        <ul id="top-nav">
          <li><a id="journey-link" href="journey/">The Journey</a></li>
          <li><a id="contact-link" href="contact/">Contact</a></li>
          <li id="profile-icon"><img id="profile-link" src="assets/img/profile.svg" onclick="toggleForm()" alt="profile" /></li>
        </ul>
      </div>
    </header>

    <!-- wrapper to center content within body -->
    <div id="page-wrapper">

      <!-- Profile Popup -->
      <?php include ('./assets/php/profile_popup.php'); ?>

      <div id="center">
        <article>
          <h1 style="font-size: 1.75em;">Welcome to IndieQuest!</h1>
          <p>
            During your journey at Indie Quest, you will explore the
            progression of indie games. Level up your knowledge stats and
            collect pieces of gaming history laid out across the dungeon.
          </p>
        </article>

        <article>
          <h1>Events</h1>
          <p>
            Take a side quest and explore current topics and game releases in
            the indie gaming community.
          </p>

          <section>
            <a class="btn r-float" href="https://www.minecraft.net/en-us/article/minecraft-live-the-recap">Learn More</a>
            <h3>Minecraft Caves and Cliffs Update</h3>
            <p>
              Learn about the new features, introduced this October, that are
              set to be added to minecraft next summer.
            </p>
          </section>

          <section>
            <a class="btn r-float" href="https://goose.game/">Learn More</a>
            <h3>Untitled Goose Game</h3>
            <p>
              "It's a lovely morning in the village, and you are a horrible
              goose." by House House
            </p>
          </section>

          <section>
            <a class="btn r-float" href="http://www.cupheadgame.com/">Learn More</a>
            <h3>Cuphead</h3>
            <p>
              Where to play the classic action game with crazy boss battles
              that has exploded in popularity since its release.
            </p>
          </section>
        </article>
      </div>

      <div id="right">

        <!-- Generate Login/Logout Area -->
        <article>
          <?php
            // if logged in
            if (isset($_COOKIE['username'])) {
              echo "<h1>Good to see you, " . $_COOKIE['username'] . "!</h1>";
              $user_text = <<<USER
              <form method="POST">
                <p class="buttons">
                  <input class="btn" name="logout" type="submit" value="Logout">
                </p>
              </form>
USER;
              echo $user_text;

            // if logged out
            } else {
              echo "<h1>Hello Stranger!</h1>";
              $guest_text = <<<GUEST
              <p>
                Create an account to begin the quest or login to continue your journey!
              </p>
              <form method="POST">
                <p class="buttons">
                  <input class="btn" type="button" onclick="toggleForm()" value="Login | Signup">
                </p>
              </form>
GUEST;
              echo $guest_text;
            }
          ?>
        </article>

        <article>
          <h1>About Us</h1>
          <p>
            We are students at The University of Texas at Austin. With a shared
            interest in game development, our goal is to continue bridging the
            gap between technology and art through interactive web design.
          </p>
        </article>

      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

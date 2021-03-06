<?php

// Session and Collect Gaming History Piece Button
include ('../assets/php/check_journey.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title>The Journey</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/header_state.js" defer></script>
    <script src="../assets/js/page_config.js" defer></script>
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
          <li id="profile-icon"><img id="profile-link" src="../assets/img/profile.svg" onclick="toggleForm()" alt="profile" /></li>
        </ul>
      </div>
    </header>

    <div id="page-wrapper" class="journey">

      <!-- Profile Popup -->
      <?php include ('../assets/php/profile_popup.php'); ?>

      <div id="left">
        <article>
          <h1>The Journey</h1>

          <section>
            <h2>2009-2011</h2>
            <nav>
              <a href="index.php">Minecraft</a>
              <a href="Limbo.php">Limbo</a>
              <a class="active" href="Amnesia.php">Amnesia: The Dark Descent</a>
	      <a href="BindingOfIsaac.php">The Binding of Isaac</a>
            </nav>
          </section>

          <section>
            <h2>2013-2014</h2>
            <nav>
              <a href="Evoland.php">Evoland</a>
              <a href="FlappyBird.php">Flappy Bird</a>
              <a href="GoatSimulator.php">Goat Simulator</a>
	      <a href="FNAF.php">Five Night's At Freddy's</a>
            </nav>
          </section>

          <section>
            <h2>2015-2017</h2>
            <nav>
              <a href="Undertale.php">Undertale</a>
              <a href="RocketLeague.php">Rocket League</a>
	      <a href="Cuphead.php">Cuphead</a>
	      <a href="GettingOverIt.php">Getting Over It</a>
            </nav>
          </section>

	  <section>
            <h2>2018-2020</h2>
            <nav>
              <a href="AmongUs.php">Among Us</a>
              <a href="FallGuys.php">Fall Guys: Ultimate Knockout</a>
	      <a href="GenshinImpact.php">Genshin Impact</a>
            </nav>
          </section>

          <?php include ('../assets/php/random_destination.php'); ?>

        </article>
      </div>

      <div id="center">
        <article>
          <h1>2010: Amnesia: The Dark Descent</h1>
	        <iframe width="530" height="350" src="https://www.youtube.com/embed/u1nY_5-UrY4" allowfullscreen></iframe>
          <p>
            Anmesia: The Dark Descent is a survival horror adventure game that was created by the developers Frictional Games
	    that was released on the PC on September 8, 2010. The player takes on the role of a character named Daniel, who
	    has no recollection of his past, that is investigating a castle. While Daniel must avoid monsters and other creepy obstacles,
	    the player must also face his troubled memories. The player can interact with the environment but cannot attack.
	    The games main mechanic is to hide and collect tinderboxes to sparingly use to see in the dark. The game also heavily depends
	    on sounds to tell if there is a monster nearby and sight.
	  </p>
          <p>
            Amnesia was highly regarded for its frightening theme and use of supsense when hiding from monsters and was considered to be one
	    of the most scariest games at the time. The game was also important for the time as, two years later, some of the now well known Youtubers,
	    like Pewdiepie and Markiplier, gained attention at the time they played this game and it also was one of the factors that helped make
	    Youtube gaming become popular.
	  </p>
<?php

  $curr_article = getArticleName();
  // Check if game piece button was clicked
  if ($_COOKIE[$curr_article] == 0) {

    // FOR DEBUGGING
    /*
    print <<<DEBUGGING
    <p>Curr Article: $curr_article</p>
    <p>Cookie: $_COOKIE[$curr_article]</p>
DEBUGGING;
     */

    print <<<BUTTON
    <br />
    <form method="post">
      <input type="submit" name = "$curr_article" class ="btn" value="Collect Gaming History Piece"/>
    </form>
BUTTON;
  }

  // FOR DEBUGGING
  /*
  else {
    print <<<BUTTON
    <p>Curr Article: $curr_article</p>
    <p>Cookie: $_COOKIE[$curr_article]</p>
BUTTON;
  }
   */

?>
        </article>
      </div>

      <div id="right">
        <article>
          <h1>Links</h1>
          <nav>
            <a target="_blank" href="http://amnesiagame.com/#main">Amnesia Website</a>
            <a target="_blank" href="https://en.wikipedia.org/wiki/Amnesia:_The_Dark_Descent">Amnesia Wiki</a>
            <a target="_blank" href="https://amnesiarebirth.com/">Amnesia 2 Website</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

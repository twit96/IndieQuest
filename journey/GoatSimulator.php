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
              <a href="Amnesia.php">Amnesia: The Dark Descent</a>
	      <a href="BindingOfIsaac.php">The Binding of Isaac</a>
            </nav>
          </section>

          <section>
            <h2>2013-2014</h2>
            <nav>
              <a href="Evoland.php">Evoland</a>
              <a href="FlappyBird.php">Flappy Bird</a>
              <a class="active" href="GoatSimulator.php">Goat Simulator</a>
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


          <a class="btn" href="../blank.html">Random Destination</a>

        </article>
      </div>

      <div id="center">
        <article>
          <h1>2014: Goat Simulator</h1>
          <p>
            Goat Simulator, developed by Swedish game developer Coffee Stain Studios and released
	    on April 1, 2014, is an action sandbox game in which you play as a goat trying to do as
	    much damage as possible to an open world map. The game was initially created as a joke,
	    but developed to a stable version after early versions were met with enthusiasm online.
	    Thus, its simple and often intentionally glitchy mechanics make for a gaming experience in
	    which players may find themselves destroying items, dragging people across streets with
	    their goat tongue, and numerous other crazy scenarios. One of the
	    great aspects of the indie community is the closeness between the developers and the
	    players - and "Goat Simulator" demonstrates this relationship well.
	    The game's strong suit is its ridiculousness, and the short-lived development of an excited
	    community is what ultimately led to its completion from just a joke game into a final
	    released product.
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
            <a target="_blank" href="https://www.goat-simulator.com/">Goat Simulator Website</a>
            <a target="_blank" href="https://www.coffeestainstudios.com/games/goat-simulator/">Coffee Stain Studios Goat Simulator Page</a>
            <a target="_blank" href="https://goatsimulator.gamepedia.com/Official_Goat_Simulator_Wiki">Goat Simulator Wiki</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

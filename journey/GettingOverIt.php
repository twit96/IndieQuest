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
	      <a class="active" href="GettingOverIt.php">Getting Over It</a>
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
          <h1>2017: Getting Over It</h1>
      	  <iframe width="530" height="350"src="https://www.youtube.com/embed/wzjuQ3K72u4" allowfullscreen></iframe>
          <p>
            Getting Over It revolves around a man by the name of Diogenes - who, somewhat true to his namesake,
	    resides in a large metal cauldron - and wields a Yosemite hammer, which he can use to grip objects and move himself.
	    Using the mouse or trackpad (controllers are supported but make the game harder because of the lack of precision in the joysticks),
	    the player tries to move the man's upper body and sledge hammer in order to climb a steep mountain. The game is accompanied by voice-over
	    commentary by Bennett Foddy discussing various philosophical topics. The commentary also provides quotations relating to disappointment
	    and perseverance when significant progress is lost by the player. The game increases in difficulty as the player progress up the mountain.
	    There are no checkpoints; the player is at a constant risk of losing some or all of their progress. The game concludes when a player reaches
	    the highest point of the map and then enters space. Upon reaching the conclusion, a message asks players if they are recording the gameplay.
	    When a player indicates they are not, the game provides access to a chatroom populated by other players who have completed the game.
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
            <a target="_blank" href="http://www.foddy.net/2017/09/getting-over-it/">Getting Over It Website</a>
            <a target="_blank" href="https://getting-over-it.fandom.com/wiki/Getting_Over_It">Getting Over It Wiki</a>
            <a target="_blank" href="https://crappygames.miraheze.org/wiki/Getting_Over_It_with_Bennett_Foddy">Crappy Games Wiki</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

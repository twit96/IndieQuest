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
	      <a class="active" href="BindingOfIsaac.php">The Binding of Isaac</a>
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


          <a class="btn" href="../blank.html">Random Destination</a>

        </article>
      </div>

      <div id="center">
        <article>
          <h1>2011: The Binding of Isaac</h1>
	  <br>
	  <iframe width="530" height="350"src="https://www.youtube.com/embed/27Le3kOOFQk" allowfullscreen></iframe>
          <p>
            The Binding of Isaac is a roguelike game created by the developers Edmund McMillen and Florian Himsl that was initially released on Windows on September 28, 2011.
	    It was created in a week for a game jam that uses randomly generated environments. The game features a top down dungeon crawler aspect where the player takes on the role of Isaac.
	    The Binding of Isaac has an allusion to the biblical story of the binding of Isaac as it uses the theme of Isaac's mother proving her devotion to god by obeying his commands to
	    the extent of killing her son. Issac jumps down a trap door to the weird underground world. The player must attack, upgrade attacks, and defeat oddly shaped creatures as well as demons.
	  </p>
          <p>
            The game was highly regarded for its Legend of Zelda type dungeon scroll, its randomized environments, and its replayability. The Binding of Isaac proved that a great game can be created
	    in a short amount of time and helped to make dungeon crawlers popular again.
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
            <a target="_blank" href="https://bindingofisaac.com/ ">The Binding of Isaac Game Blog</a>
            <a target="_blank" href="https://en.wikipedia.org/wiki/The_Binding_of_Isaac_(video_game)">The Binding of Isaac Wiki</a>
            <a target="_blank" href="https://bindingofisaacrebirth.gamepedia.com/Binding_of_Isaac:_Rebirth_Wiki">The Binding of Isaac: Rebirth Wiki</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

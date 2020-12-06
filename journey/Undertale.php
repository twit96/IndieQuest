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
              <a class="active" href="Undertale.php">Undertale</a>
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
          <h1>2015: Undertale</h1>
      	  <iframe width="530" height="350"src="https://www.youtube.com/embed/1Hojv0m3TqA" allowfullscreen></iframe>
          <p>
            Undertale is a role playing, puzzle game that was created by Toby Fox and released on the PC on September 15, 2015.
	    The game starts off with the backstory of a battle between human and monsters that ends in the monsters being banished to the underground.
	    The player takes on the role of a human child, named Frisk, who accidentally falls down a hole at the top of a mountain called Mount Ebott.
	    The player then wakes up in the underground world. The main goal of the game is to solve puzzles and choose how to act with the different
	    monsters that they meet along the way. The outcome is determined on how the player plays the game. There is the "pacifist" run where the player befriends
	    the monsters of the underworld and the "genocide" run where the player plays the game like any other rpg and fights all the monsters.
	  </p>
          <p>
            The unique part of the game is that based on the route the player chooses to take, there are different endings or outcomes along the way.
	    The game has a very retro and bright colored aesthetic that pays tribute to older retro games such as Earthbound and Super Mario Bros..
	    The music also plays into the retro feel as it is mostly 8bit synth sounding with a mixture of orchestra music. Undertale was important,
	    for the time, as it brought back appreciation and love for older looking, pixel art games. With its unique fighting system, being able to befriend the monsters
	    instead of fighting, it made the game stand out amoung others in the rpg genre. It proved that a game with simple graphics and a well thought story, it can be successful
	    and make an impact on the gaming community.
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
            <a target="_blank" href="https://undertale.com/">Undertale Website</a>
            <a target="_blank" href="https://undertale.fandom.com/wiki/Main_Page">Undertale Wiki</a>
            <a target="_blank" href="https://twitter.com/Tobyfox">Toby Fox's Twitter</a>
            <a target="_blank" href="https://www.deltarune.com/">Deltarune (Undertale Sequel)</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

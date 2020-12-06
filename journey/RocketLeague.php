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
              <a class="active" href="RocketLeague.php">Rocket League</a>
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
          <h1>2015: Rocket League/Supersonic Acrobatic Rocket-Powered Battle-Cars</h1>
      	  <iframe width="530" height="350"src="https://www.youtube.com/embed/SgSX3gOrj60" allowfullscreen></iframe>
          <p>
             Rocket League is a vehicular soccer video game developed and
             published by Psyonix. The game was first released for Microsoft
             Windows and PlayStation 4 in July 2015, with ports for Xbox One
             and Nintendo Switch being released later on. Psyonix had
             previously developed Supersonic Acrobatic Rocket-Powered
             Battle-Cars in 2008 for the PlayStation 3. That title itself bore
             out from previous modifications that Psyonix' founder, Dave
             Hagewood, had done for Unreal Tournament 2003 by expanding out
             vehicle-based gameplay that Epic Games had already set in place
             in the engine into a new game mode called Onslaught.
             For this, Hagewood was hired as a contractor by Epic for Unreal
             Tournament 2004 specifically for incorporating the Onslaught mode
             as an official part of the game.
           </p>
           <p>
             Hagewood used his experience at Epic to found Psyonix. Among other
             contract projects, Psyonix worked to try to find a way to make
             racing the Unreal vehicles in a physics-based engine enjoyable.
             They had toyed with several options such as race modes or mazes,
             but found that when they added a ball to the arena to be pushed by
             the vehicles, they had hit upon the right formula, which would
             become Battle-Cars. Further to the success was the addition of the
             rocket-powered cars; this originally was to be a simple speed
             boost, but with the physics engine, they were able to have the
             vehicles fly off and around the arena, furthering the
             possibilities for gameplay.
           </p>
           <p>
             Full development of Rocket League started around 2013 and took
             around two years and under $2 million to develop, with a third of
             the development team being contractors, Hagewood said in an
             interview with the Wall Street Journal. Psyonix had tested various
             prototypes of a Battle-Cars sequel in the years prior, including
             an unsuccessful attempt at pitching the game's idea to Electronic
             Arts in 2011. The company used some of the feedback from
             Battle-Cars, an early prototype, to fine-tune the gameplay in
             Rocket League.
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
            <a target="_blank" href="https://www.rocketleague.com/">Rocket League Website</a>
            <a target="_blank" href="https://rocketleague.fandom.com/wiki/Rocket_League_Wiki">Rocket League Wiki</a>
            <a target="_blank" href="https://esports.rocketleague.com/">Rocket League Esports Website</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

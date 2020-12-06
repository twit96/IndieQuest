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
              <a class="active" href="index.php">Minecraft</a>
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
          <h1>2009: Minecraft</h1>
	          <iframe width="530" height="350" src="https://www.youtube.com/embed/MmB9b5njVbA" allowfullscreen></iframe>
            <p>
                    Minecraft, created by by Markus Persson and released on November 18, 2011,
        	    is a sandbox/survival game that achieved widespread and sustained popularity
        	    since its 2009 beta release. The 3D survival/sandbox game is based around the simple
        	    game mechanic of breaking blocks (known as "mining") and placing blocks to create things.
        	    The infinitely generated worlds and lack of a strong story line have allowed players
        	    to create their own stories and play the game in a number of ways.
        	  </p>
            <p>
                    From large-scale intricate builds and replicas of entire cities, to engineering
        	    computers and other complex circuitry with the game's "redstone" wiring mechanics,
        	    to multiplayer servers and lets play series on YouTube and Twitch, the game has spurred
        	    numerous diverse community followings online. That, and with numerous expansions since its
        	    release, players have been met with tons of new content to explore and interact with over
        	    the years. In 2014, this indie game was purchased by Microsoft for $2.5 billion dollars,
        	    another testament to how successful the game was in its first six years from beta playtesting onwards.
        	    Since this purchase, the game has continued development as a non-indie game,
        	    and its fanbase continues to hold a large online following. Despite being roughly a decade old,
        	    Minecraft's ability to deliver a brand new experience each time a player picks up the game makes it
        	    arguably timeless.
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
            <a target="_blank" href="https://www.minecraft.net/en-us">Minecraft Website</a>
            <a target="_blank" href="https://minecraft.gamepedia.com/Minecraft_Wiki">Minecraft Wiki</a>
            <a target="_blank" href="https://www.minecraft.net/en-us/updates/nether">Recent Nether Update</a>
            <a target="_blank" href="https://www.minecraft.net/en-us/article/minecraft-live-the-recap">Upcoming Caves and Cliffs Update</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

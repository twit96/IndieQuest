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
	      <a href="GettingOverIt.php">Getting Over It</a>
            </nav>
          </section>

	  <section>
            <h2>2018-2020</h2>
            <nav>
              <a class="active" href="AmongUs.php">Among Us</a>
              <a href="FallGuys.php">Fall Guys: Ultimate Knockout</a>
	      <a href="GenshinImpact.php">Genshin Impact</a>
            </nav>
          </section>


          <a class="btn" href="../blank.html">Random Destination</a>

        </article>
      </div>

      <div id="center">
        <article>
          <h1>2018: Among Us</h1>
      	  <iframe width="530" height="350" src="https://www.youtube.com/embed/ZHhk0dDJwBM" allowfullscreen></iframe>
          <p>
            Among Us was inspired by the live party game Mafia, and was initially intended to be a mobile-only
	    local multiplayer game with a single map. Originally, the game had no audio to avoid revealing hidden
	    information in a local setting. Designer Marcus Bromander paused development on InnerSloth's other game,
	    The Henry Stickmin Collection, in order to build Among Us' first map, The Skeld. The game was released in
	    June 2018 to Android and iOS under the AppID of "spacemafia". Shortly after release, Among Us had an average
	    player count of 30 to 50 concurrent players. Bromander blamed the game's poor release on InnerSloth being
	    "really bad at marketing". The team nearly abandoned the project multiple times, but continued work on it due
	     to a "small but vocal player base", adding in online multiplayer, new tasks, and customization options.
	     The game was released on Steam on November 16, 2018. Cross-platform play was supported upon release of the
	     Steam version. On August 8, 2019, InnerSloth announced a second map, Mira HQ. A third map, Polus, was added
	     later that year on November 12. Both maps were initially paid DLC costing US$4, however their prices were
	     reduced to $2 on January 6, 2020, then made free on June 11, 2020. While the map packs are still available
	     for purchase on all platforms, they now only provide the player the skins that were bundled with the maps.
	     According to programmer Forest Willard, the team "stuck with [the game] a lot longer than we probably should
	     have from a pure business standpoint", putting out regular updates to the game as often as once per week.
	     This led to a steady increase in players, snowballing the game's player base.
	  </p>
          <p>
            Bromander attributed this to the studio having enough savings to keep working on the game even while it was
	    not selling particularly well. While Among Us released in 2018, it was not until mid-2020 that it saw a surge
	    of popularity, initially driven by content creators online in South Korea and Brazil. Bromander stated that the
	    game is more popular in Mexico, Brazil, and South Korea than the United States. According to Willard, Twitch streamer
	    Sodapoppin first popularized the game on Twitch in July 2020. Many other Twitch streamers and YouTubers followed suit,
	    including prominent content creators xQc, OfflineTV, Shroud, Ninja, and PewDiePie.
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
            <a target="_blank" href="http://www.innersloth.com/gameAmongUs.php">Among Us Website</a>
            <a target="_blank" href="https://www.ign.com/wikis/among-us/#Getting_Started">Among Us Wiki</a>
            <a target="_blank" href="https://innersloth.itch.io/among-us/devlog/181107/the-future-of-among-us">The Future of Among Us</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

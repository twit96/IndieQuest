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
              <a href="AmongUs.php">Among Us</a>
              <a href="FallGuys.php">Fall Guys: Ultimate Knockout</a>
	      <a class="active" href="GenshinImpact.php">Genshin Impact</a>
            </nav>
          </section>

          <?php include ('../assets/php/random_destination.php'); ?>

        </article>
      </div>

      <div id="center">
        <article>
          <h1>2020: Genshin Impact</h1>
      	  <iframe width="530" height="350"src="https://www.youtube.com/embed/HLUY1nICQRY" allowfullscreen></iframe>
          <p>
            Genshin Impact is an open world action role-playing game that allows the player to control one of four interchangeable characters in a party.
	    Switching between characters can be done quickly and during combat to the player to use several different combinations of skills and attacks.
	    Characters may have their strengths enhanced in various ways, such as increasing a character's level and improving artifacts and the weapons that the character equips.
	    In addition to exploration, the player can attempt various challenges for rewards. Scattered across Teyvat are highly powerful challenges that reward highly valuable resources,
	    but claiming them uses up a currency called resin, which slowly regenerates over time. Completing these challenges grants the player progress towards increasing their Adventure Rank,
	    which in turn unlocks new quests, challenges, and raises the World Level. The World Level is a measure of how strong the enemies within the world are and the rarity of rewards that
	    defeating them gives. By completing quests to advance the story, the player can unlock three additional playable characters, and other characters can be obtained via a gacha mechanic.
	    Several premium in-game currencies, obtainable through in-app purchases and playing the game, can be used to obtain characters and weapons through the gacha system.
	  </p>
          <p>
            Genshin Impact received "generally favorable reviews" according to review aggregator Metacritic. The open world of Teyvat drew praise; IGN's Travis Northup described Teyvat as "a world
	    that is absolutely bursting at the seams with possibilities." Game Informer describes the game as an incredible experience, noting that "the gameplay loop of collection, upgrading, and
	    customization is captivating and compelling", Destructoid's Chris Carter called the combat system "one of the most interesting things about Genshin Impact". The game's similarities to
	    The Legend of Zelda: Breath of the Wild sparked controversy at 2019's ChinaJoy convention among some fans of Breath of the Wild.[60] In contrast, The Washington Post wrote that the game
	    wore its inspiration from Breath of the Wild "proudly". Most of the criticisms about Genshin Impact come from the endgame aspects of the game, particularly the resin system. Paul Tassi
	    of Forbes noted that to progress past a certain point one must "spend an absurd amount of money to get around the last few timegates of the game." While the resin system might be new to
	    PC gamers, this game was originally designed as a Mobile Game. In most mobile games the average time spent in a Gacha Game is around 2 hours a day. On the contrary, PC Players love to dedicate
	    between 6-8 hours in a story based game. The Daily Quests and Material Respawns in Genshin allow for players to "Grind" every day for around a minimum of an hour of gameplay which fits perfectly
	    into the model of Mobile Games.
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
            <a target="_blank" href="https://genshin.mihoyo.com/en/home">Genshin Impact Website</a>
            <a target="_blank" href="https://genshin-impact.fandom.com/wiki/Genshin_Impact_Wiki">Genshin Impact Wiki</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

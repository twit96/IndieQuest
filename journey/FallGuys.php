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
          <li id="profile-icon"><img id="profile-link" src="../assets/img/profile.svg" onclick="toggleForm()" /></li>
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
              <a class="active" href="FallGuys.php">Fall Guys: Ultimate Knockout</a>
	      <a href="GenshinImpact.php">Genshin Impact</a>
            </nav>
          </section>


          <a class="btn" href="../blank.html">Random Destination</a>

        </article>
      </div>

      <div id="center">
        <?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");
	#Start session
	session_start();

	if(isset($_POST["button01"])){
	    $_SESSION["clicked14"] = false;
	    echo("<script>alert('Game piece obtained')</script>");
          }

	//Check for session time out
	if(isset($_SESSION["time"])){
		$timePast = time() - $_SESSION["time"];

		if($timePast >= $_SESSION["expireTime"]){
			session_unset();
			session_destroy();
			echo($timePast."SESSION DONE");
			header("Location: ../");
		}
	}
	$_SESSION["time"] = time();
	//echo "time past ".$timePast;
	//echo " expire time ".$_SESSION["expireTime"];
         ?>

        <article>
          <h1>2020: Fall Guys: Ultimate Knockout</h1>
          <p>
            Up to 60 players compete in matches with battle royale-style gameplay. Players, represented as jellybean-like figures,
	    move around a three-dimensional playing field, with additional moves such as jumping, grabbing/climbing, or diving to assist
	    gameplay. The aim is to qualify for subsequent rounds by successfully completing each of the randomly selected mini-games.
	    Certain mini-games involve running towards a finish line at the end of the map, while others add elements of teamwork.
	    On every mini-game, obstacles appear around the map for added complexity. Players who are too slow or who fail certain
	    requirements for a mini-game are eliminated. On the final round, the remaining few players compete in a final match with a
	    randomised mini-game designed for a smaller player size. The winner of the match is the last player standing.
	  </p>
          <p>
            The conception of Fall Guys: Ultimate Knockout began when Mediatonic was discussing another project in January 2018. One member,
	    lead designer Joe Walsh, made a throwaway comment that it reminded him of game shows such as Takeshi's Castle and Total Wipeout.
	    He drew from that inspiration to create a pitch document for what would become Fall Guys: Ultimate Knockout. Fall Guys: Ultimate Knockout
	    began its initial prototyping process with a small team, growing to 30 people during development. Initial progress on individual minigames
	    was slow which caused the team to worry that there wouldn't be enough content for launch. A turning point came when the team came up with a
	    group of pillars that "Took the opinions of people out of the occasion" and allowed the developers to "kill ideas faster". Such pillars include
	    making sure a minigame was "50-50 chaos and skill" and that a level had to be "different every time". In an attempt to remain faithful to the game
	    shows they were inspired by, as well as differentiate from first-person shooter battle royale games, Mediatonic's focus was on gameplay variety. By
	    presenting the player with several, randomized rounds of game modes, Mediatonic hoped to recreate the experience of being on a game show. To help keep
	    the "spirit of playground games and game shows", Mediatonic created an internal rule that game modes needed to be explained in three words. Over time,
	    the game underwent numerous other changes. The player count was decreased from 100 to 60, as the games "stopped being readable or fun" when there were
	    too many players competing. To the latter point Mediatonic noted that when testing the game players would overestimate the number of players in a given
	    level stating "we didn't need as many players as we thought to create the crowds we wanted the gameplay to include." It's a Knockout, a game show that
	    forced its contestants to dress up in oversized costumes, inspired the idea that the characters should "have that element of being completely uniquely,
	    badly designed for the task that we were gonna put them through". The ragdoll physics were implemented on purpose, because Mediatonic did not want them
	    to be like "hyper athletic Ninja Warrior characters" and because "falling over is funny". According to Walsh, striking the right balance between funny
	    ragdoll collisions and game performance was critical, because "as soon as you lose the ragdoll-ness of the character, you lose the comedy".
	   </p>
	  <?php
	   if(!isset($_SESSION["clicked14"])){
             print <<<BUTTON
		<form method="post">
               	   <input type="submit" name = "button01" class ="btn" value="Collect Gaming History Piece"/>
                </form>
BUTTON;
	   }
	?>
        </article>
      </div>

      <div id="right">
        <article>
          <h1>Links</h1>
          <nav>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
            <a href="../blank.html">External Link</a>
          </nav>
        </article>
      </div>

    </div>

    <!-- Footer loaded from components folder in page_config.js -->
    <footer></footer>

  </body>
</html>

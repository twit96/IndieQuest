<!DOCTYPE html>
<html lang="en">

  <head>
    <title>The Journey</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/header_state.js" defer></script>
    <script src="../assets/js/profile_popup.js" defer></script>
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
          <li id="profile-icon"><img id="profile-link" src="../assets/img/profile.svg" onclick="openForm()" /></li>
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
	      <a class="active" href="Cuphead.php">Cuphead</a>
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
        <?php
	error_reporting(E_ALL);
	ini_set("display_errors", "on");
	#Start session
	session_start();

	if(isset($_POST["button01"])){
	    $_SESSION["clicked11"] = false;
	    echo("<script>alert('Game piece obtained')</script>");
          }

	//Check for session time out
	if(isset($_SESSION["time"])){
		$timePast = time() - $_SESSION["time"];

		if($timePast >= $_SESSION["expireTime"]){
			session_unset();
			session_destroy();
			echo($timePast."SESSION DONE");
			header("Location: ../index.php");
		}
	}
	$_SESSION["time"] = time();
	//echo "time past ".$timePast;
	//echo " expire time ".$_SESSION["expireTime"];
         ?>

        <article>
          <h1>2017: Cuphead</h1>
          <p>
            Cuphead, developed and published by the independent game developer StudioMDHR and released
	    on September 29, 2017, is a run and gun action game in which players repay their debt to
            the devil by fighting through numerous levels that end in boss fights.
	    The first important feature of the game is its art style, which is inspired by the rubber
	    hose animation style of 1930's cartoons, such as those of Walt Disney studios. This gives
	    the game an iconic retro feel, which stands out in contrast to other recent games.
	    The second important feature of Cuphead is its difficulty.
	  </p>
          <p>
            The game goes against the standard of wanting everyone to be able to finish in a single try (or two, or
	    three), as its levels and especially its boss battles are particularly challenging when
	    compared to the average game. This difficulty was met with approval by critics though, as
	    the levels and bosses are ultimately achievable, but don't lend themselves to an easy win.
	    Cuphead is particularly important to the history of indie games in that it brought a unique
	    art style to the table and went against the standard of other similar games of the time.
	    Its success as an indie game is well earned, and does not indicate the work of only the
	    two brothers of StudioMDHR. Furthermore, it has led to the development of an upcoming
	    Netflix series titled "The Cuphead Show!", scheduled for release in 2021.
	   </p>
	  <?php
	   if(!isset($_SESSION["clicked11"])){
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

    <footer>
      <div class="wrapper">
        <span>2020/11/11</span>
        <span>Alexia Carmona, Cooper Fryar, Tyler Wittig</span>
      </div>
    </footer>

  </body>
</html>

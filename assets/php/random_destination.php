<?php


$articles = array(
  "Amnesia.php",
  "AmongUs.php",
  "BindingOfIsaac.php",
  "Cuphead.php",
  "Evoland.php",
  "FallGuys.php",
  "FlappyBird.php",
  "FNAF.php",
  "GenshinImpact.php",
  "GettingOverIt.php",
  "GoatSimulator.php",
  "./",
  "Limbo.php",
  "RocketLeague.php",
  "Undertale.php"
);

$rand_key = array_rand($articles);
$rand_article = $articles[$rand_key];

echo '<a class="btn" href="'.$rand_article.'">Random Destination</a>';


?>

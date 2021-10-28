<?php


// Change behavior of header journey link based on whether user is logged in
if (isset($_COOKIE['username'])) {
  // Logged In

  // handle cases of homepage path vs not homepage path
  $url_path = $_SERVER['REQUEST_URI'];
  $pieces = explode('/', $url_path);
  $piece = $pieces[2];
  echo '<script>console.log("Length: '.sizeof($pieces).'  0.'.$pieces[0].', 1.'.$pieces[1].', 2.'.$pieces[2].', 3.'.$pieces[3].', 4.'.$pieces[4].' Last Elem: '.array_pop($array).'")</script>';
  // homepage
  if ($piece == '') { $journey_href = 'journey/'; }
  // contact page ($piece == journey || contact)
  else { $journey_href = '../journey/'; }
  $journey_onclick = '';

} else {
  // Logged Out
  $journey_href = 'javascript:;';
  $journey_onclick = 'toggleForm()';
}

echo '<li><a id="journey-link" onclick="'.$journey_onclick.'" href="'.$journey_href.'">The Journey</a></li>';


?>

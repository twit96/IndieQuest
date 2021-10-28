<?php


/**
* Change behavior of header journey link based on
* whether or not user is logged in
*/
if (isset($_COOKIE['username'])) {
  // Logged In
  $journey_onclick = '';
  // handle cases of homepage path vs not homepage path
  $url_path = $_SERVER['REQUEST_URI'];
  $pieces = explode('/', $url_path);
  $piece = $pieces[2];
  // homepage
  if ($piece == '') { $journey_href = ' href="journey/"'; }
  // journey or contact page ($piece == journey || contact)
  else { $journey_href = ' href="../journey/"'; }

} else {
  // Logged Out
  $journey_onclick = ' onclick="toggleForm()"';
  $journey_href = ' href="javascript:;"';
}

echo '<li><a id="journey-link"'.$journey_onclick.$journey_href.'>The Journey</a></li>';


?>

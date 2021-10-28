<?php


// Change behavior of header journey link based on whether user is logged in
if (isset($_COOKIE['username'])) {
  // Logged In
  $journey_href = PATHPREFIX.'journey/';
  $journey_onclick = '';

} else {
  // Logged Out
  $journey_href = 'javascript:;';
  $journey_onclick = 'toggleForm()';
}

echo '<li><a id="journey-link" onclick="'.$journey_onclick.'" href="'.$journey_href.'">The Journey</a></li>';


?>

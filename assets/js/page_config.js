/**
* Function to allow user to close popup.
* Called by buttons using html onclick property.
* No return value.
*/
function toggleForm() {
  $('#profile').toggle();
  $('.popup-bg').toggle();
}


/**
* Function to load footer content from components folder.
* No return value.
*/
function loadFooter() {
  // get page directory location
  var url = $(location).attr('href').split( '/' );
  var path = url[url.length-2];

  // load footer from relative path
  if (path == "journey" || path == "contact") {
    // journey or contact page
    $('footer').load('../assets/components/footer.html');
  }
  else {
    // homepage
    $('footer').load('./assets/components/footer.html');
  }
}


/**
* Initial Call to loadFooter().
*/
loadFooter();

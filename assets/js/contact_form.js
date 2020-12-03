/* contact_form.js */


/**
* Function to provide user feedback on form value by changing the style of the
* form input fields. No return value.
*/
function doFormFeedback(username, email, title, feedback) {
  // Form Styles Feedback (quick and dirty code)
  if (username == '') {
    document.getElementById('user').style.border = "1px solid red";
  } else { document.getElementById('user').style.border = "1px solid #4f4f4f"; }

  if (email == '') {
    document.getElementById('email').style.border = "1px solid red";
  } else { document.getElementById('email').style.border = "1px solid #4f4f4f"; }

  if (title == '') {
    document.getElementById('title').style.border = "1px solid red";
  } else { document.getElementById('title').style.border = "1px solid #4f4f4f"; }

  if (feedback == '') {
    document.getElementById('feedback').style.border = "1px solid red";
  } else { document.getElementById('feedback').style.border = "1px solid #4f4f4f"; }

  // Reset Form if Successful Submit
  if (!((username == '') || (email == '') || (title == '') || (feedback == ''))) {
    document.getElementById("contact-form").reset();
  }
}


/**
* Function to reset any form styles previously set by doFormFeedback().
* Called on form reset button click. No return value.
*/
function resetForm() {
  // resest ajax text
  document.getElementById('ajax_container').innerHTML = "If you have feedback or questions about the dungeon, send us a direct message here!"; 
  // reset form styles
  document.getElementById('user').style.border = "1px solid #4f4f4f";
  document.getElementById('email').style.border = "1px solid #4f4f4f";
  document.getElementById('title').style.border = "1px solid #4f4f4f";
  document.getElementById('feedback').style.border = "1px solid #4f4f4f";
}


/**
* Function to work as engine for this script. Called on form submit button
* click. Configures browser support for ajax functionality, pulls form values,
* calls doFormFeedback() for JavaScript validation, and passes form values into
* contact_form.php for PHP processing. No return value.
*/
function ajaxFunction() {

  // Ajax Config
  var ajaxRequest;
  ajaxRequest = new XMLHttpRequest();
  ajaxRequest.onreadystatechange = function() {
    if (ajaxRequest.readyState == 4) {
      var ajaxDisplay = document.getElementById('ajax_container');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
    }
  }

  // Pull Form Values
  var username = document.getElementById('user').value;
  var email = document.getElementById('email').value;
  var title = document.getElementById('title').value;
  var feedback = document.getElementById('feedback').value;

  // Provide UI Feedback on Form Values
  doFormFeedback(username, email, title, feedback);

  // Build and Send Ajax String
  var queryString = "?username=" + username ;
  queryString +=  "&email=" + email;
  queryString +=  "&title=" + title;
  queryString +=  "&feedback=" + feedback;
  ajaxRequest.open("GET", "../assets/php/contact_form.php" + queryString, true);
  ajaxRequest.send(null);

}

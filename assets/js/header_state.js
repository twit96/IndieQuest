/* Manage Active Header Links */
function set_active_link() {
  /*
    function to set the active header link,
    based on the page's directory location.
  */

  // get page directory location
  var loc = window.location.pathname;
  var dir = loc.substring(loc.indexOf('/')+1, loc.lastIndexOf('/'));
  if (dir == "/") { dir = "home"; }

  // add active class to corresponding page link element in header
  $("#" + dir + "-link").addClass('active');
}

set_active_link()


/* Fix Header to Top of Screen after Page Scroll */
var header = document.getElementById('head');
var header_offset = header.offsetTop;

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;

    if (this.scrollY > header_offset) {
      header.classList.add("fixed-header");
    } else {
      header.classList.remove("fixed-header");
    }
});

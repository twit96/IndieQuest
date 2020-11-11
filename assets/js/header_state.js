/* Manage Active Header Links */
function set_active_link() {
  /*
    function to set the active header link,
    based on the page's directory location.
  */
  var linkname;  // store active link name

  // get page directory location
  var url = $(location).attr('href').split( '/' );
  var path = url[url.length-2];

  // set linkname variable
  if (path == "journey" || path == "contact") { linkname = path; }
  else { linkname = "home"; }

  // add active class to corresponding page link element in header
  $("#" + linkname + "-link").addClass('active');

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

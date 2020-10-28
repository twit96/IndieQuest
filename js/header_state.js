// script to fix header after page scroll 

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

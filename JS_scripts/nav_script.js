var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav_anim").style.top = "0px";
    document.getElementById("nav_anim").style.opacity = "0.8";
  } else {
    document.getElementById("nav_anim").style.top = "-50px";
    document.getElementById("nav_anim").style.opacity = "0";
  }
  prevScrollpos = currentScrollPos;
}
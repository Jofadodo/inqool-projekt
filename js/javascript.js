document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});



var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementsByClassName("navigation")[0].style.top = "0px";
  } else {
    document.getElementsByClassName("navigation")[0].style.top = "-140px";
  }
  prevScrollpos = currentScrollPos;
}



var state = 0;

function changeNav() {
    if (state == 0) {
        document.getElementById("mySidebar").style.width = "70%";
        document.getElementById("myButton").className = "closebtn";
        state = 1;
    }
    else {
        document.getElementById("mySidebar").style.width = null;
        document.getElementById("myButton").className = "openbtn";
        state = 0;
    }
}
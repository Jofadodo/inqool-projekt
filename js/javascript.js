// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();
//         document.querySelector(this.getAttribute('href')).scrollIntoView({
//             behavior: 'smooth'
//         });
//     });
// });

function scrollToTargetAdjusted($target) {
  var element = document.getElementById($target);
  // hodnota offsetu, keby sa neskryl navbar, prekryl by zobrazený element (100)
  var headerOffset = 0;
  var elementPosition = element.getBoundingClientRect().top;
  var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
  
  window.scrollTo({
      top: offsetPosition,
      behavior: "smooth"
  });   
}







// var state = 0;
// function changeNav() {
//     if (state == 0) {
//         document.getElementById("mySidebar").style.width = "70%";
//         document.getElementById("myButton").className = "closebtn";
//         state = 1;
//     }
//     else {
//         document.getElementById("mySidebar").style.width = null;
//         document.getElementById("myButton").className = "openbtn";
//         state = 0;
//     }
// }


function searchBar() {
  var input = document.getElementById("search");
  if (input.style.width > "0px") input.style.width = null;
  else input.style.width = "100%";
}



window.onscroll = function() {scrollFunction(), navbarHide()};
var mybutton = document.getElementById("topButton");
var prevScrollpos = window.pageYOffset;
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "flex";
    } else {
      mybutton.style.display = "none";
    }
}
function navbarHide() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementsByClassName("navigation")[0].style.top = null;
  } else {
    document.getElementsByClassName("navigation")[0].style.top = "-140px";
    document.getElementById("search").style.width = null;
  }
  prevScrollpos = currentScrollPos;
}

function topFunction() {
  document.documentElement.scrollTo({
      top: 0,
      behavior: 'smooth'
  });
}
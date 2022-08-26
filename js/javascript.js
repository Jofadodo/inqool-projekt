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
  var headerOffset = 100;
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
  if (input.style.width > "0px") document.getElementById("search").style.width = null;
  else input.style.width = "100%";
}



var mybutton = document.getElementById("topButton");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
function topFunction() {
    document.documentElement.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}


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
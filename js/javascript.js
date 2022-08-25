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
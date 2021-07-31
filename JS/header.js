window.addEventListener ("scroll", ()=>{
    var navbartop = document.getElementById('headerscroll');
    if (window.pageYOffset > 0 ){
        navbartop.classList.add('animscroll');
    }
    else {
        navbartop.classList.remove('animscroll');
    }
});


// --------------active class header-----------------

// Get the container element

// Get all buttons with class="btn" inside the container

// Loop through the buttons and add the active class to the current/clicked button
// setTimeout(runbtnsactive, 100);
// function runbtnsactive() {
var header = document.getElementById("hotlist");
var btns = header.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
   })}
// };
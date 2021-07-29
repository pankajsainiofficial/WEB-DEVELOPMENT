// var datanavbarstick = document.getElementsByClassName('datanavbar');
// var navbarscroll = datanavbarstick.pageYOffset;
// console.log(navbarscroll);
// var datanavbarstick = document.getElementById('datacenterscroll');
function stopscroll(){
    let navbar = document.getElementById("scrolltopbutton");
    let checkpoint = document.getElementById("stopscrollform");
    console.log(checkpoint.scrollTop);
    if (checkpoint.scrollTop > 0){
        navbar.classList.add("sticky");
    }
    else{
        navbar.classList.remove("sticky");
    }
};
var i = 0;
var j = 0;
var timing = 5000;
var container = document.getElementsByClassName("slider");
var arrow = document.getElementsByClassName("arrow");
setTimeout(slider,500);
setTimeout(arrowslider,500);
function slider(){
    if(j>=container.length){
        container[j-1].classList.remove("active");
        j = 0;
    }
    while(j<container.length)
    {
        if (j!==0){
            container[j-1].classList.remove("active");
        }
        container[j].classList.add("active");
        break;
    }
    j+=1;
};
function arrowslider() {
    if(i>=arrow.length){
        arrow[i-1].classList.remove("arrow-active");
        i = 0;
    }
    while(i<arrow.length)
    {
        if (i!==0){
            arrow[i-1].classList.remove("arrow-active");
        }
        arrow[i].classList.add("arrow-active");
        break;
    }
    i+=1;
};

setInterval(slider, timing);
setInterval(arrowslider, timing);





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




// scrollring bar index

let mobile_product = document.getElementsByClassName('mobile-scroll');
let lap_product = document.getElementsByClassName('laptop-scroll');
let elec_product = document.getElementsByClassName('electronic-scroll');
let access_product = document.getElementsByClassName('access-scroll');

let l = 0;
let m= 0;
let n= 0;
let o= 0;
var movePer;
var maxMove;

let win_view = window.matchMedia("(min-width: 888px)");
if (win_view.matches)
{
    movePer = 17;
    maxMove = 17;
}

// mobile_view

let mob_view = window.matchMedia("(max-width: 888px)");
if (mob_view.matches)
{
    movePer = 42;
    maxMove = 290;
}
function moveright(){
    l = l + movePer;
    if (mobile_product == 1){
        l = 0; 
    }
    for(const i of mobile_product)
    {
        if (l > maxMove){l = l - movePer;}
        i.style.left = '-' + l + '%';
    }
};
function lapright(){
    m = m + movePer;
    if (lap_product == 1){
        m = 0; 
    }
    for(const i of lap_product)
    {
        if (m > maxMove){m = m - movePer;}
        i.style.left = '-' + m + '%';
    }
};
function elecright(){
    n = n + movePer;
    if (elec_product == 1){
        n = 0; 
    }
    for(const i of elec_product)
    {
        if (n > maxMove){n = n - movePer;}
        i.style.left = '-' + n + '%';
    }
};
function accessright(){
    o = o + movePer;
    if (access_product == 1){
        o = 0; 
    }
    for(const i of access_product)
    {
        if (o > maxMove){o = o - movePer;}
        i.style.left = '-' + o + '%';
    }
};



function moveleft(){
    let product_page = Math.ceil(mobile_product.length/3);
    l = l - movePer;
    if (l<=0){l = 0;}
    for(const i of mobile_product){
        if (product_page>1){
            i.style.left = '-' + l + '%';
        }
    }
};
function lapleft(){
    let product_page = Math.ceil(lap_product.length/3);
    m = m - movePer;
    if (m<=0){m = 0;}
    for(const i of lap_product){
        if (product_page>1){
            i.style.left = '-' + m + '%';
        }
    }
};
function elecleft(){
    let product_page = Math.ceil(elec_product.length/3);
    n = n - movePer;
    if (n<=0){n = 0;}
    for(const i of elec_product){
        if (product_page>1){
            i.style.left = '-' + n + '%';
        }
    }
};
function accessleft(){
    let product_page = Math.ceil(access_product.length/3);
    o = o - movePer;
    if (o<=0){o = 0;}
    for(const i of access_product){
        if (product_page>1){
            i.style.left = '-' + o + '%';
        }
    }
};

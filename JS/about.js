let product = document.getElementsByClassName('items');
let l = 0;
var movePer;
var maxMove;
let win_view = window.matchMedia("(min-width: 888px)");
if (win_view.matches)
{
    movePer = 20;
    maxMove = 60;
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
    if (product == 1){
        l = 0; 
    }
    for(const i of product)
    {
        if (l > maxMove){l = l - movePer;}
        i.style.left = '-' + l + '%';
    }
};
function moveleft(){
    let product_page = Math.ceil(product.length/3);
    l = l - movePer;
    if (l<=0){l = 0;}
    for(const i of product){
        if (product_page>1){
            i.style.left = '-' + l + '%';
        }
    }
};

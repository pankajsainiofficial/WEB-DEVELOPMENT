var productimg = document.getElementById("productimg");
var smallimg = document.getElementsByClassName("smallimg");
Array.from(smallimg).forEach((e)=>{
    e.addEventListener("click", function(){
        productimg.src= e.src;
    })
});




// productimg.addEventListener("mouseover",()=>{
//     productimg.style.cssText= "height: 500px; width: 500px; cursor: pointer";
// });
// productimg.addEventListener("mouseleave",()=>{
//     productimg.style.cssText= "height: 350px; width: 165px";
// });




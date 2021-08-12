var productimg = document.getElementById("productimg");
var smallimg = document.getElementsByClassName("smallimg");
Array.from(smallimg).forEach((e)=>{
    e.addEventListener("click", function(){
        productimg.src= e.src;
    })
});


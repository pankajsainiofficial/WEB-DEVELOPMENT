$(document).ready(function(){
    hideitem();
    $("#signupclick").on('click', ((e)=>{
        showitem();
        e.preventDefault();
    }));
    $(".fa-times").on('click', ((e)=>{
        hideitem();
        e.preventDefault();
    }));
});

function showitem() {
    $("#signupcontent").fadeIn(500);
    $("#signupcontent").show();
};

function hideitem() {
    $("#signupcontent").hide();
    $("#signupcontent").fadeOut(500);
};



// hlo varun voice chat join kr   
  //ho  nii   rahi  
      //   kithe o
      

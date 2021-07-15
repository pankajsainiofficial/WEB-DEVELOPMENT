$(document).ready(function(){
    // hideitem();
    // $("#signupclick").on('click', ((e)=>{
    //     showitem();
    //     e.preventDefault();
    // }));
    $(".close").on('click', ((e)=>{
        hideitem();
        e.preventDefault();
    }));
});
function hideitem() {
    $(".alert").hide();
    $(".alert").fadeOut(500);
};
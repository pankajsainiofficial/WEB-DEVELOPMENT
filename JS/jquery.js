$(document).ready(function () {
    // console.log('this jquery is working');
    startcircle();
    startCounter();
    startprogressbar();
    buttonsoption()
    target();
    $(".close").on('click', ((e) => {
        hideitem();
        e.preventDefault();
    }));


    $('.formtext-menu').hide();

    $('.formmenu').on('click', (e) => {
        adminhide();
        e.preventDefault();
    });
});

$(window).scroll(startprogressbar);
$(window).scroll(target);
// ----------------diving with event and funtions------------------
function adminhide() {
    $('.formtext-menu').toggle(500);
}



function hideitem() {
    $(".alert").hide();
    $(".alert").fadeOut(500);
};

//counter

function startCounter() {
    $('.progressbar-circle').each(function () {
        var $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 1600,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter) + " %");
                }
            }
        );
    });
}

//----------------This Section is Circle animation-----------------
function startcircle() {
    {
        var a = $('#circlecount1').text();
        var b = $('#circlecount2').text();
        var c = $('#circlecount3').text();
        var d = $('#circlecount4').text();
        a = a*3.6;
        b = b*3.6;
        c = c*3.6;
        d = d*3.6;
        if(a<=180){
            $('.progresscircle1:nth-child(1)').css({
                "transform": 'rotate(' + Math.ceil(a) + 'deg)',
                "transition": "transform 1s linear"
            });
            $('.progress1').css({
                "opacity": "1",
                "transition": "opacity 0s 1s"
            })
        }
        else {
            $('.progress1').css({
                "opacity": "0",
                "transition": "opacity 0s 1.7s"
            })
            $('.progresscircle1:nth-child(2)').css({
                "transform": 'rotate(' + Math.ceil(a) + 'deg)',
                "transition": "transform 2s linear"
            });
            $('.progresscircle1:nth-child(1)').css({"transform":"rotate(180deg)", "transition": "transform 1s linear"});
        }
        if(b<=180){
            $('.progresscircle2:nth-child(1)').css({
                "transform": 'rotate(' + Math.ceil(b) + 'deg)',
                "transition": "transform 1s linear"
            });
            $('.progress2').css({
                "opacity": "1",
                "transition": "opacity 0s 1s"
            })
        }
        else {
            $('.progress2').css({
                "opacity": "0",
                "transition": "opacity 0s 1.7s"
            })
            $('.progresscircle2:nth-child(1)').css({"transform":"rotate(180deg)", "transition": "transform 1s linear"});
            $('.progresscircle2:nth-child(2)').css({
                "transform": 'rotate(' + Math.ceil(b) + 'deg)',
                "transition": "transform 2s linear"
            });
        }
        if(c<=180){
            $('.progresscircle3:nth-child(1)').css({
                "transform": 'rotate(' + Math.ceil(c) + 'deg)',
                "transition": "transform 1s linear"
            });
            $('.progress3').css({
                "opacity": "1",
                "transition": "opacity 0s 1s"
            })
        }
        else {
            $('.progress3').css({
                "opacity": "0",
                "transition": "opacity 0s 1.7s"
            })
            $('.progresscircle3:nth-child(1)').css({"transform":"rotate(180deg)", "transition": "transform 1s linear"});
            $('.progresscircle3:nth-child(2)').css({
                "transform": 'rotate(' + Math.ceil(c) + 'deg)',
                "transition": "transform 2s linear"
            });
        }
        if(d<=180){
            $('.progresscircle4:nth-child(1)').css({
                "transform": 'rotate(' + Math.ceil(d) + 'deg)',
                "transition": "transform 1s linear"
            });
            $('.progress4').css({
                "opacity": "1",
                "transition": "opacity 0s 1s"
            })
        }
        else {
            $('.progress4').css({
                "opacity": "0",
                "transition": "opacity 0s 1.7s"
            })
            $('.progresscircle4:nth-child(1)').css({"transform":"rotate(180deg)", "transition": "transform 1s linear"});
            $('.progresscircle4:nth-child(2)').css({
                "transform": 'rotate(' + Math.ceil(d) + 'deg)',
                "transition": "transform 2s linear"
            });
        }
    }
}



//-------  Progress-Bar------------

function startprogressbar(){
    if($(window).scrollTop() > 190) {
        $(window).off("scroll",startprogressbar);
        $('.bars li .bar').each(function(key, bar){
            var percentage = $(this).data('percentage');
            $(this).animate({
                'height' : percentage + '%'
            }, 1000);
        });
    }};

// ---------------------buttonsoption------------

// function buttonsoption(){
//     $('.buttonsoption').on("click",()=>{
//         console.log($(this).href.css({pankaj live audio nii  ho rea   dss de 
//             "display" : "block"
//         }));
//     })
// }

function buttonsoption(a){
    $(a).css({
        "display":"block"
    });
};



// ------------------target----------------
function target(){
    if($(window).scrollTop() > 190) {
        $(window).off("scroll",target);
        $(".target-progressbar").each(function(){
            var $bar = $(this).find(".target-bar");
            var $val = $(this).find("span");
            var perc = parseInt( $val.text(), 10);
        
            $({p:0}).animate({p:perc}, {
            duration: 3000,
            easing: "swing",
            step: function(p) {
                $bar.css({
                transform: 'rotate(' + (45+(p*1.8)) +'deg)',
                });
                $val.text((p|0 )+ " %");
            }
            });
        });
    }};

    



$("document").ready(function () {

var slide = document.getElementsByClassName('slide');
var dot = document.getElementsByClassName('dot');
var next= document.querySelector('.next');
var prev= document.querySelector('.prev');
var n = 0;
var i;

function disnoo()
{
    for (i=0; i<slide.length; i++  )
    {
        slide[i].style.display = 'none';
    }
}
function no_active()
{
    for (i=0;i<dot.length;i++){
        dot[i].classList.remove('active');
    }
}


next .addEventListener('click',function (e){
    e.preventDefault();
    n++;
   if (n>slide.length-1){
       n=0;
   }
   disnoo();
    no_active();
   slide[n].style.display='block';
   dot[n].classList.add('active');
})
prev .addEventListener('click',function (e){
    e.preventDefault();
    n--;
    if (n<0){
        n = slide.length-1;
    }
    disnoo();
    no_active();
    slide[n].style.display='block';
    dot[n].classList.add('active');
})

setInterval(function (){
    n++;
    if (n>slide.length-1){
        n=0;
    }
    disnoo();
    no_active();
    slide[n].style.display='block';
    dot[n].classList.add('active');
},3000)

// ---------------------------------end slider one-----------------

    // --------------------------sliders_2----------------------

  $('.s1').click(function (){
      $('.sliders_2').animate({right: "0px"})
  })

    $('.s2').click(function (){
        $('.sliders_2').animate({right: "-252.22px"})
    })
    $('.s3').click(function (){
        $('.sliders_2').animate({right: "-504.44px"})
    })
    $('.s4').click(function (){
        $('.sliders_2').animate({right: "-756.44px"})
    })
    $('.s5').click(function (){
        $('.sliders_2').animate({right: "-1008.88px"})
    })
    $('.s6').click(function (){
        $('.sliders_2').animate({right: "-1261.1px"})
    })
    $('.s7').click(function (){
        $('.sliders_2').animate({right: "-1513.32px"})
    })
    $('.s8').click(function (){
        $('.sliders_2').animate({right: "-1765.54px"})
    })
    $('.s9').click(function (){
        $('.sliders_2').animate({right: "-2017.76px"})
    })
    $('.s10').click(function (){
        $('.sliders_2').animate({right: "-2269.98px"})
    })
    $('.min_dot span').hover(function (){
        $('.min_dot span').animate({background: "red"})
    })
// ------------------------end sliders_2-----------------------------


// -------------------------------tv_box--------------------------

    // ---heart---

    $('.tv_box').hover(function (){
        $('.heart').css({display: "block" })
        $('.heart').animate({right: "35px" })
    },function (){
        $('.heart').animate({right: "20px" })
        $('.heart').hide(0);
    })

    $('.heart').hover(function (){
        $('.heart_b').toggle();
        $('.heart_t').toggle();
    },function (){
        $('.heart_b').toggle();
        $('.heart_t').toggle();
    })

    // ---compare---

    $('.tv_box').hover(function (){
        $('.compare').css({display: "block" })
        $('.compare').animate({left: "35px" })
    },function (){
        $('.compare').animate({left: "10px" })
        $('.compare').hide(100);
    })

    $('.compare').hover(function (){
        $('.compare_t').toggle();
        $('.compare_b').toggle();
    },function (){
        $('.compare_t').toggle();
        $('.compare_b').toggle();
    })
    // ---buy---

    $('.buy').hover(function (){
        $('.buy').css({background:"red"})
        $('.buy a').css({color:"width"})
        $('.buy span').toggle();
        $('.triangledown').toggle();
    },function (){
        $('.buy').css({background:"transparent"})
        $('.buy span').toggle();
        $('.triangledown').toggle();
    })

    // -------------------------------tv_box1--------------------------

    // ---heart---

    $('.tv_box1').hover(function (){
        $('.heart1').css({display: "block" })
        $('.heart1').animate({right: "35px" })
    },function (){
        $('.heart1').animate({right: "20px" })
        $('.heart1').hide(0);
    })

    $('.heart1').hover(function (){
        $('.heart_b1').toggle();
        $('.heart_t1').toggle();
    },function (){
        $('.heart_b1').toggle();
        $('.heart_t1').toggle();
    })

    // ---compare---

    $('.tv_box1').hover(function (){
        $('.compare1').css({display: "block" })
        $('.compare1').animate({left: "35px" })
    },function (){
        $('.compare1').animate({left: "10px" })
        $('.compare1').hide(100);
    })

    $('.compare1').hover(function (){
        $('.compare_t1').toggle();
        $('.compare_b1').toggle();
    },function (){
        $('.compare_t1').toggle();
        $('.compare_b1').toggle();
    })
    // ---buy---

    $('.buy1').hover(function (){
        $('.buy1').css({background:"red"})
        $('.buy1 a').css({color:"width"})
        $('.buy1 span').toggle();
        $('.triangledown1').toggle();
    },function (){
        $('.buy1').css({background:"transparent"})
        $('.buy1 span').toggle();
        $('.triangledown1').toggle();
    })






// -------------------------------tv_box 2--------------------------

    // ---heart---

    $('.tv_box2').hover(function (){
        $('.heart2').css({display: "block" })
        $('.heart2').animate({right: "35px" })
    },function (){
        $('.heart2').animate({right: "20px" })
        $('.heart2').hide(100);
    })

    $('.heart2').hover(function (){
        $('.heart_b2').toggle();
        $('.heart_t2').toggle();
    },function (){
        $('.heart_b2').toggle();
        $('.heart_t2').toggle();
    })

    // ---compare---

    $('.tv_box2').hover(function (){
        $('.compare2').css({display: "block" })
        $('.compare2').animate({left: "35px" })
    },function (){
        $('.compare2').animate({left: "10px" })
        $('.compare2').hide(100);
    })

    $('.compare2').hover(function (){
        $('.compare_t2').toggle();
        $('.compare_b2').toggle();
    },function (){
        $('.compare_t2').toggle();
        $('.compare_b2').toggle();
    })
    // ---buy---

    $('.buy2').hover(function (){
        $('.buy2').css({background:"red"})
        $('.buy2 a').css({color:"width"})
        $('.buy2 span').toggle();
        $('.triangledown2').toggle();
    },function (){
        $('.buy2').css({background:"transparent"})
        $('.buy2 span').toggle();
        $('.triangledown2').toggle();
    })


    // -------------------------------tv_box 3--------------------------

    // ---heart---

    $('.tv_box3').hover(function (){
        $('.heart3').css({display: "block" })
        $('.heart3').animate({right: "35px" })
    },function (){
        $('.heart3').animate({right: "20px" })
        $('.heart3').hide(100);
    })

    $('.heart3').hover(function (){
        $('.heart_b3').toggle();
        $('.heart_t3').toggle();
    },function (){
        $('.heart_b3').toggle();
        $('.heart_t3').toggle();
    })

    // ---compare---

    $('.tv_box3').hover(function (){
        $('.compare3').css({display: "block" })
        $('.compare3').animate({left: "35px" })
    },function (){
        $('.compare3').animate({left: "10px" })
        $('.compare3').hide(100);
    })

    $('.compare3').hover(function (){
        $('.compare_t3').toggle();
        $('.compare_b3').toggle();
    },function (){
        $('.compare_t3').toggle();
        $('.compare_b3').toggle();
    })
    // ---buy---

    $('.buy3').hover(function (){
        $('.buy3').css({background:"red"})
        $('.buy3 a').css({color:"width"})
        $('.buy3 span').toggle();
        $('.triangledown3').toggle();
    },function (){
        $('.buy3').css({background:"transparent"})
        $('.buy3 span').toggle();
        $('.triangledown3').toggle();
    })


    // -------------------------------tv_box 4--------------------------

    // ---heart---

    $('.tv_box4').hover(function (){
        $('.heart4').css({display: "block" })
        $('.heart4').animate({right: "35px" })
    },function (){
        $('.heart4').animate({right: "20px" })
        $('.heart4').hide(100);
    })

    $('.heart4').hover(function (){
        $('.heart_b4').toggle();
        $('.heart_t4').toggle();
    },function (){
        $('.heart_b4').toggle();
        $('.heart_t4').toggle();
    })

    // ---compare---

    $('.tv_box4').hover(function (){
        $('.compare4').css({display: "block" })
        $('.compare4').animate({left: "35px" })
    },function (){
        $('.compare4').animate({left: "10px" })
        $('.compare4').hide(100);
    })

    $('.compare4').hover(function (){
        $('.compare_t4').toggle();
        $('.compare_b4').toggle();
    },function (){
        $('.compare_t4').toggle();
        $('.compare_b4').toggle();
    })
    // ---buy---

    $('.buy4').hover(function (){
        $('.buy4').css({background:"red"})
        $('.buy4 a').css({color:"width"})
        $('.buy4 span').toggle();
        $('.triangledown').toggle();
    },function (){
        $('.buy4').css({background:"transparent"})
        $('.buy4 span').toggle();
        $('.triangledown4').toggle();
    })












})









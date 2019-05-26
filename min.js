var lern_mode = false;
$(document).ready(function() {
    $('#chat').hide();

    $('#mode1').click(function(){
        lern_mode = false;
        $('#mode1').css('background', '#00bbdd');
        $('#mode1').css('color', 'white');
        $('#mode1').css('box-shadow', '10px 10px 30px #000000b2');

        $('#mode2').css('background', 'none');
        $('#mode2').css('color', '#ffffff20');
        $('#mode2').css('box-shadow', 'none');

        if (lern_mode === false) {
        
            $('#block1_2').fadeIn(10);
            $('#block1_3').fadeIn(10);
            $('#block1_3_2').fadeIn(10);
            $('#block1_3_3').fadeIn(10);
            }

            $('.mode-window').delay(200);
        $('.mode-window').fadeOut(100);
        $('#all').css('filter', 'blur(0)');
    });

    $('#mode2').click(function(){
        lern_mode = true;
        $('#mode2').css('background', '#00bbdd');
        $('#mode2').css('color', 'white');
        $('#mode2').css('box-shadow', '10px 10px 30px #000000b2');

        $('#mode1').css('background', 'none');
        $('#mode1').css('color', '#ffffff20');
        $('#mode1').css('box-shadow', 'none');

        if (lern_mode === true) {
            $('#confused').fadeIn();
            $('#ne_tomi').hide();
            $('#block1_2').hide();
            $('#repeat_plz').hide();
            $('#block1_3').hide();
            $('#confused1').hide();
            $('#block1_3_2').hide();
            $('#good').hide();
            $('#block1_3_3').hide();
            $('.homework').hide();
            $('#block2_1').hide();
            $('#block2_2').hide();
            $('#block2_2_1').hide();
            $('#block2_2_2').hide();
            $('#block3_1').hide();
            $('#block3_2').hide();
            $('#block3_3').hide();
            $('#chat').fadeIn();

            $('#next1').click(function(){
                $('#block1_2').fadeIn(300);
                $('#confused').delay(1000);   
                $('#confused').fadeOut(300);
                $('#repeat_plz').delay(4000);
                $('#repeat_plz').fadeIn(300);
            });
            $('#yes').click(function(){
                $('#block1_3').fadeIn(300);
                $('#repeat_plz').delay(400);
                $('#repeat_plz').fadeOut(300);
                $('#confused1').delay(3000);
                $('#confused1').fadeIn(300);
                $('#block1_3_2').delay(6000);
                $('#block1_3_3').delay(6000);
                $('#block1_3_2').fadeIn(300);
                $('#block1_3_3').fadeIn(300);
                $('#good').delay(14000);
                $('#hw1').delay(17000);
                $('#good').fadeIn(300);
                $('#hw1').fadeIn(300);
                $('#block2_1').delay(19000);
                $('#block2_1').fadeIn(300);
                $('#block2_1_1').hide(); 
                $('#lets').delay(21000);
                $('#lets').fadeIn(300);
                
            });
        
            $('#lets').click(function(){
                $('#block2_1_1').fadeIn(300);
                $('#understood').delay(8000);
                $('#understood').fadeIn(300);
                
                $('#lets').delay(400);
                $('#lets').fadeOut(200); 
                  
            });
            $('#understood').click(function(){
                $('#block2_2').fadeIn(300);
                $('#ne_tomi').delay(5000);
                $('#ne_tomi').fadeIn(300); 
            });
            
            $('#good').click(function(){
                $('#good').delay(400);
                $('#good').fadeOut(200);
            });
            $('#confused1').click(function(){
                $('#confused1').delay(400);
                $('#confused1').fadeOut(200);
            });
            $('#understood').click(function(){
                $('#understood').delay(400);
                $('#understood').fadeOut(200);
            });
            
            $('#ne_tomi').click(function(){
                $('#block2_2_1').fadeIn(300);
                
                $('#ne_tomi').delay(500);
                $('#ne_tomi').fadeOut(200);
                
                $('#hard').delay(7000);
                $('#hard').fadeIn(300);
                $('#block2_2_2').delay(14000);
                $('#block2_2_2').fadeIn(300);
                $('#block3_1').delay(19000);
                $('#block3_1').fadeIn(300);
                $('#bl3_mem').delay(22000);
                $('#bl3_mem').fadeIn(300);
                $('#block3_2').delay(25000);
                $('#block3_2').fadeIn(300);
                $('#getit').delay(29000);
                $('#getit').fadeIn(300);
            });
            
            $('#hard').click(function(){
                $('#hard').delay(500);
                $('#hard').fadeOut(200);  
            });
            $('#bl3_mem').click(function(){
                $('#bl3_mem').delay(400);
                $('#bl3_mem').fadeOut(200);
            });
            
            $('#getit').click(function(){
                $('#block3_3').fadeIn(300);
                
                $('#getit').delay(400);
                $('#getit').fadeOut(200); 
                
            });
            $('.lesson-block p').css('width', '78%');
            $('.lesson-block h3').css('width', '78%');
            $('.lesson-block h2').css('width', '78%');
            $('.lesson-block h1').css('width', '78%');
            }

            $('.mode-window').delay(300);
            $('.mode-window').fadeOut(100);
        $('#all').css('filter', 'blur(0)');
    });



    $('.htmlboy').hide();
    $('.hidden-list1').hide();
    $('.hidden-list2').hide();
    $('#inf1').hide();
    $('#inf2').hide();
    $('#inf3').hide();
    $('#inf4').hide();
    $('#inf5').hide();
    $('#inf6').hide();
    $('#inf7').hide();
    $('#inf8').hide();
    $('#inf9').hide();
    $('#inf10').hide();
    $('#inf11').hide();
    $('#inf11_5').hide();
    $('#inf12').hide();
    $('#inf13').hide();
    $('#inf14').hide();
    $('#inf15').hide();
    $('#inf16').hide();
    $('#inf17').hide();
      

$('#li1').click(function(){
    $('#inf1').show(400);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li2').click(function(){
    $('#inf2').show(300);
    $('#inf11_5, #inf1, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li3').click(function(){
    $('#inf3').show(300);
    $('#inf11_5, #inf1, #inf2, #inf2.2, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li4').click(function(){
    $('#inf4').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf1, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li5').click(function(){
    $('#inf5').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf1, #inf4, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li6').click(function(){
    $('#inf6').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf1, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li7').click(function(){
    $('#inf7').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf1, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li8').click(function(){
    $('#inf8').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf1, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li9').click(function(){
    $('#inf9').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf1, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li10').click(function(){
    $('#inf10').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf1, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li11').click(function(){
    $('#inf11').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf1, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li11_5').click(function(){
    $('#inf11_5').show(300);
    $('#inf11, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf1, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li12').click(function(){
    $('#inf12').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf1, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li13').click(function(){
    $('#inf13').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf1, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li14').click(function(){
    $('#inf14').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf1, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li15').click(function(){
    $('#inf15').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf1, #inf16, #inf17').fadeOut(300);
});
$('#li16').click(function(){
    $('#inf16').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf1, #inf17').fadeOut(300);
});
$('#li17').click(function(){
    $('#inf17').show(300);
    $('#inf11_5, #inf2, #inf2.2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf1').fadeOut(300);
});

/*
var x=0;
    $('.title-li1 img').css('transform' , 'rotateX('+ (x) +'deg)');


*/






    $('.title-li1').click(function(){
        $('.hidden-list1').fadeIn(400);
        $('#inf').hide();
    });
    $('.title-li1').mouseover(function(){
        $('.hidden-list1').fadeOut(400);
        $('#inf1, #inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9').fadeOut(300);
        $('.title-li1 img').css('transform' , 'rotate(0deg)');
        bool = true;

    });
    $('.title-li2').click(function(){
        $('.hidden-list2').fadeIn(400);
    });
    $('.title-li2').mouseover(function(){
        $('.hidden-list2').fadeOut(400);
        $('#inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
        $('.title-li2 img').css('transform' , 'rotate(0deg)');
        bool2 = true;
    })











    var bool = true;

    $('.title-li1').click(retransform);
    function retransform() {

        if(bool){
            $('.title-li1 img').css('transform' , 'rotateX(180deg)');
            bool=false;
        }else {
            $('.title-li1 img').css('transform' , 'rotateX(0deg)');
            bool = true;
        }



    }

    var bool2 = true;

    $('.title-li2').click(retransform2);

    function retransform2() {

        if(bool2){
            $('.title-li2 img').css('transform' , 'rotate(180deg)');
            bool2=false;
        }else {
            $('.title-li2 img').css('transform' , 'rotate(0deg)');
            bool2 = true;
        }



    }

    
});


$(document).ready(function() {

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
    $('#inf12').hide();
    $('#inf13').hide();
    $('#inf14').hide();
    $('#inf15').hide();
    $('#inf16').hide();
    $('#inf17').hide();

    $('.title-li1').click(function(){
        $('.hidden-list1').fadeIn(400);
        $('#inf').hide();
    });
    $('.title-li1').mouseover(function(){
        $('.hidden-list1').fadeOut(400);
        $('#inf1, #inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9').fadeOut(300);
        
    });
    $('.title-li2').click(function(){
        $('.hidden-list2').fadeIn(400);
    });
   $('.title-li2').mouseover(function(){
       $('.hidden-list2').fadeOut(400);
       $('#inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
   })
$('#li1').click(function(){
    $('#inf1').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li2').click(function(){
    $('#inf2').fadeIn(300);
    $('#inf1, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li3').click(function(){
    $('#inf3').fadeIn(300);
    $('#inf1, #inf2, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li4').click(function(){
    $('#inf4').fadeIn(300);
    $('#inf2, #inf3, #inf1, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li5').click(function(){
    $('#inf5').fadeIn(300);
    $('#inf2, #inf3, #inf1, #inf4, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});

$('#li6').click(function(){
    $('#inf6').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf1, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li7').click(function(){
    $('#inf7').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf1, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li8').click(function(){
    $('#inf8').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf1, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li9').click(function(){
    $('#inf9').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf1, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li10').click(function(){
    $('#inf10').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf1, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li11').click(function(){
    $('#inf11').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf1, #inf12, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li12').click(function(){
    $('#inf12').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf1, #inf13, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li13').click(function(){
    $('#inf13').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf1, #inf14, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li14').click(function(){
    $('#inf14').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf1, #inf15, #inf16, #inf17').fadeOut(300);
});
$('#li15').click(function(){
    $('#inf15').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf1, #inf16, #inf17').fadeOut(300);
});
$('#li16').click(function(){
    $('#inf16').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf1, #inf17').fadeOut(300);
});
$('#li17').click(function(){
    $('#inf17').fadeIn(300);
    $('#inf2, #inf3, #inf4, #inf5, #inf6, #inf7, #inf8, #inf9, #inf10, #inf11, #inf12, #inf13, #inf14, #inf15, #inf16, #inf1').fadeOut(300);
});

})
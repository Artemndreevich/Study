$(document).ready(function(){
  $('.helpToTlf').hide();
    $('.tlfMenuContainer').css('background-color','transparent');


$('.tlf-img').click(function () {
    $('.helpToTlf').fadeIn(300);
    $('.tlfMenuContainer').css('background-color','white');


});
    $('#any-div').click(function () {
        $('.helpToTlf').fadeOut(200);
        $('.tlfMenuContainer').css('background-color','transparent');

    });


});

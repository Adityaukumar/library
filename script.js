$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop()>530){
         $('#top').fadeIn();   
        }
        else{
            $('#top').fadeOut();
        }
        });
$("#top").click(function(){
$('html,body').animate({scrollTop: 0},800);
});
});
$(document).ready(function (){
    $("#reviewLink").click(function(){
        var target = $(this).attr('href');
        $('html, body').animate({
          scrollTop: target
        }, 1000);
    });

});
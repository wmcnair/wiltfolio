// Script Code
$(document).ready(function() {

    var topTxt = $('#home .intro');
    var topWrap = $('#home .jumbotron-fluid');
    var contactBtn = $("#contact button");

    $(window).resize(function(){
        if ($(window).width() <= 768){
            contactBtn.html("&rtrif;");
            topWrap.append(topTxt);
        } else {
            contactBtn.html("SEND");
            topWrap.prepend(topTxt);
        }
    });

    /*$(window).resize(function(){
        if ($(window).width() <= 768){
            contactBtn.html("&rtrif;");
            //topNav.removeClass('navbar-dark bg-trans').addClass('navbar-light bg-light');
        } else {
            contactBtn.html("SEND");
            //topNav.removeClass('navbar-light bg-light').addClass('navbar-dark bg-trans');
        }
    });
    
    $(document).on('scroll', function(){
        if ($(document).scrollTop() > 300){
            topNav.addClass('fixed-top').removeClass('navbar-dark bg-trans').addClass('navbar-light bg-light');
        } else {
            topNav.removeClass('fixed-top').removeClass('navbar-light bg-light').addClass('navbar-dark bg-trans');
        }
    });
    
    //$(".navbar-dark").sticky({topSpacing:0}); .addClass('fixed-top') .removeClass('fixed-top')*/

    
}); //end document


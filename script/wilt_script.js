// Script Code
$(document).ready(function() {
    // ------- WOW ANIMATED ------ //
    var wow = new WOW(
        {
          boxClass:     'wow',      // animated element css class (default is wow)
          animateClass: 'animated', // animation css class (default is animated)
          offset:       0,          // distance to the element when triggering the animation (default is 0)
          mobile:       false,       // trigger animations on mobile devices (default is true)
          live:         true,       // act on asynchronously loaded content (default is true)
          callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
          },
          scrollContainer: null,    // optional scroll container selector, otherwise use window,
          resetAnimation: true,     // reset animation on end (default is true)
        }
    );
    wow.init();

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

    /* $('.fade-in-left').bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass('animated fadeInLeft');
        }  
    });

    $('.fade-in-right').bind('inview', function (event, visible) {
        if (visible) {
            $(this).addClass('animated fadeInRight');
        }  
    }); */

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


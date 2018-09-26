// Script Code
$(document).ready(function() {
    var topNav = $('header .navbar');

    $(document).on('scroll', function(){
        /*if ($(document).scrollTop() > 300) {
            topNav.css('display','block').removeClass('navbar-dark bg-trans').addClass('navbar-light bg-light');
        } else {
            topNav.css('display','none');
        }*/
    });
    
    $(window).resize(function(){
        if ($(window).width() <= 640){
            $("#contact button").html("&rtrif;");
        }else{
            $("#contact button").html("SEND");
        }

        /*if ($(window).width() <= 960){
            topNav.css('display','block').removeClass('navbar-dark bg-trans').addClass('navbar-light bg-light');
        }else{
            topNav.css('display','none');
        }*/
    });
    
    /*$(window).resize(function(){
        var element = $('#contact button');
        var data = element.text();
        var length = data.length;
        var i = 0;
        
        if ($(window).width() <= 640){	
            element.html("");
            while (i < length) {
              element.append(data.charAt(i) + "<br />")
              i++;
            }
        }
    });*/
    
    
}); //end document
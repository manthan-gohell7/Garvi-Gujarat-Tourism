(function () {
    "use strict";

    // custom scrollbar
     /*
        Navigation (toggle "navbar-no-bg" class)
    */
        $('.l-form-1').waypoint(function () {
            $('nav').toggleClass('navbar-no-bg');
        });
    
        /*
            Background slideshow
        */
        $('.l-form-1-container').backstretch("images/1.png");
    
        /*
            Wow
        */
        new WOW().init();
    
        /*
            Form validation
        */
        $('.l-form-1-box input[type="text"], .l-form-1-box input[type="password"], .l-form-1-box textarea').on('focus', function () {
            $(this).removeClass('input-error');
        });
    
        $('.l-form-1-box form').on('submit', function (e) {
    
            $(this).find('input[type="text"], input[type="password"], textarea').each(function () {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                }
                else {
                    $(this).removeClass('input-error');
                }
            });
    
        });
    

    $("html").niceScroll({ styler: "fb", cursorcolor: "#1b93e1", cursorwidth: '6', cursorborderradius: '10px', background: '#FFFFFF', spacebarenabled: false, cursorborder: '0', zindex: '1000' });

    $(".scrollbar1").niceScroll({ styler: "fb", cursorcolor: "#1b93e1", cursorwidth: '6', cursorborderradius: '0', autohidemode: 'false', background: '#FFFFFF', spacebarenabled: false, cursorborder: '0' });



    $(".scrollbar1").getNiceScroll();
    if ($('body').hasClass('scrollbar1-collapsed')) {
        $(".scrollbar1").getNiceScroll().hide();
    }
})(jQuery);


// jQuery(document).ready(function () {

   
// });

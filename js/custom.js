jQuery(document).ready(function($) {

    // Preloader
    $(window).on('load', function() {
        $('#preloader').delay(100).fadeOut('slow', function() { $(this).remove(); });
    });

    // Hero rotating texts
    $("#hero .rotating").Morphext({
        animation: "flipInX",
        separator: ",",
        speed: 3000
    });


    // Smoth scroll on page hash links
    /* $('a[href*="#"]:not([href="#"])').on('click', function() {
         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
             var target = $(this.hash);
             if (target.length) {

                 var top_space = 0;

                 if ($('#header').length) {
                     top_space = $('#header').outerHeight();
                 }

                 $('html, body').animate({
                     scrollTop: target.offset().top - top_space
                 }, 1500, 'easeInOutExpo');

                 if ($(this).parents('.nav-menu').length) {
                     $('.nav-menu .menu-active').removeClass('menu-active');
                     $(this).closest('li').addClass('menu-active');
                 }

                 if ($('body').hasClass('mobile-nav-active')) {
                     $('body').removeClass('mobile-nav-active');
                     $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                     $('#mobile-body-overly').fadeOut();
                 }

                 return false;
             }
         }
     });*/

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function() {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back-to-top').tooltip('show');

    });

});
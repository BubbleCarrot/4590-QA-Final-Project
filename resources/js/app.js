// Hamburger
jQuery(function($) {

    // to reset burger
    var windowWidth = $('body').width();

    //Navigation
    const targetElement = document.querySelector('.gn');

    // Button
    $('.gn-trigger').on('click', function(e) {
        e.preventDefault();
        if($(this).hasClass('is-active')) {
            $(this).removeClass('is-active');
            $('.gn').slideUp();
        } else {
            $(this).addClass('is-active');
            $('.gn').slideDown();
        }
    });

    // Header slides up and removes class from hamburger
    $('.nav-link').on('click', function(e) {
        e.preventDefault();
        $('.gn-trigger').removeClass('is-active');
        $('.gn').slideUp();
    });


    // to reset burger
    $(window).resize(function() {
        windowWidth = $('body').width();
        console.log(windowWidth);
        if(windowWidth > 767 && $('.gn-trigger').hasClass('is-active')) {
            setTimeout(function() {
                $('.gn-trigger').removeClass('is-active');
                $('.gn').slideUp(0);
            }, 200); //slightly delay action
        }
    });

});


  
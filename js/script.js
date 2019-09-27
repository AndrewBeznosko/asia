// some scripts

// jquery ready start
$(document).ready(function() {
    // jQuery code

    /* ///////////////////////////////////////

    THESE FOLLOWING SCRIPTS ONLY FOR BASIC USAGE,
    For sliders, interactions and other

    */ ///////////////////////////////////////



    //////////////////////// Fancybox. /plugins/fancybox/
    if ($("[data-fancybox]").length > 0) { // check if element exists
        $("[data-fancybox]").fancybox();
    } // end if

    //////////////////////// Bootstrap tooltip
    if ($('[data-toggle="tooltip"]').length > 0) { // check if element exists
        $('[data-toggle="tooltip"]').tooltip()
    } // end if

    /////////////////////// Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a.page-scroll').click(function() {
        $('.navbar-toggler:visible').click();
    });

    //////////////////////// Menu scroll to section for landing
    $('a.page-scroll').click(function(event) {
        event.preventDefault();
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 500);

    });
});
// jquery end

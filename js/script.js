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

    //////////////////////// Menu scroll to section for landing
    $('#formModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text(recipient);
        modal.find('.btn.btn-success').text(recipient);
    })
});
// jquery end

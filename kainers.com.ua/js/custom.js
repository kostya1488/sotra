/* Theme Name: Mehr - Startup Landing page
   Author: Bighero
   Version : 1.0
*/

jQuery(document).ready(function($) {

    "use strict";

    new WOW().init();

    // PRELOADER      
    $(window).load(function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
    });

    //  Magnific Popup
    $('.popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Animated typing text

    $(".animated-text").typed({
        strings: [
            "Вы только начинаете свой бизнес?",
            "Вы молодая компания и стремитесь завоевать рынок?",
            "Вы уверенно и прочно стоите на ногах, и задумались о перспективах?",
            "Расскажите нам о своем бизнесе и мы акцентируем внимание клиентов на ваших товарах и услугах"
        ],
        typeSpeed: 40,
        backSpeed: -20,
        backDelay: 1000,
        loop: true,
    });

    // STICKY NAGIGATION
    $("#sticky-nav").sticky({ topSpacing: 0 });

    // Smooth scroll 
    var $root = $('html, body');
    $('a.nav-link').on('click', function() {
        $root.animate({
        /*$($.attr(this, 'href'))*/
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1200, 'easeInOutCubic');
        return false;
    });

    // TESTIMONIALS SLIDER

    $("#testimonials .slider").owlCarousel({
        navigation: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true
    });

    // CLIENTS SLIDER

    $("#clients .slider").owlCarousel({
        navigation: false,
        pagination: false,
        autoPlay: 5000, //Set AutoPlay to 3 seconds 
        items: 5,
    });
    // SCROLL INDICATOR
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > $("#about").offset().top) {
            $('.scroll-indicator').css('opacity', '1');
        } else {
            $('.scroll-indicator').css('opacity', '0');

        }
    });

    // FORM VALIDATION

    $(".subscribe-form input").jqBootstrapValidation({
        preventSubmit: true,
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            $.ajax({
                success: function() {
                    $('#subscribe-success').html("<div class='alert alert-success'>");
                    $('#subscribe-success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#subscribe-success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#subscribe-success > .alert-success')
                        .append('</div>');
                }
            })

        }
    });
    // CONTACT FORM

    $("#contactForm input, #contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "../mail/sendmail.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    // GOOGLE MAP
    $('#map').addClass('scrolloff');

    $('#overlay').on("mouseup", function() {
        $('#map').addClass('scrolloff');
    });
    $('#overlay').on("mousedown", function() {
        $('#map').removeClass('scrolloff');
    });

    $("#map").mouseleave(function() {
        $('#map').addClass('scrolloff');
    });


});

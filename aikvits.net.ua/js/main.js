(function () {
    "use strict";
    // navigator.geolocation.getCurrentPosition(initialize);
    jQuery(document).ready(function ($) {
        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        $('[data-toggle="tooltip"]').tooltip();
        $('.gallery-btn a').click(function () {
            $(".gallery-btn a").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".gellery-item").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
        // jQeury smooth scroll
        $("li.smooth-scroll a").bind("click", function (event) {
            var $anchor = $(this);
            var headerH = "50";
            $("html, body")
                .stop()
                .animate({
                    scrollTop: $($anchor.attr("href"))
                        .offset()
                        .top - headerH + "px"
                }, 1200, "easeOutCirc");
            event.preventDefault();
        });
        //jquery scroll spy
        $("body").scrollspy({
            target: ".navbar-collapse",
            offset: 95
        });
        new WOW().init();
        //Pretty Photo
        $("a[data-gallery^='prettyPhoto']").prettyPhoto({
            social_tools: false
        });
    });
    jQuery(window).load(function () {
    });
}(jQuery));
(function($) {
    $(document).ready(function() {
        $('.view-clients > .view-content').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 2,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
        $('.view-about-us .views-row-last .down-arrow-box').removeClass('about-us-arrow');
        $('.down-arrow-box').click(function() {
            if ($(this).hasClass('about-us-arrow')) {
                $('body,html').animate({ scrollTop: $(this).parents('.views-row').next().offset().top }, 800);
            } else {
                $('body,html').animate({ scrollTop: $(this).parents('.main-g-section').next().offset().top }, 800);
            }
        });
    });
}(jQuery));
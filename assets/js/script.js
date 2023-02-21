$(document).ready(function () {

    // Navigation Start 
    (function ($) {
        $(function () {
            //  open and close nav 
            $('#navbar-toggle').click(function () {
                $('nav ul').slideToggle();
            });

            // Hamburger toggle
            document.querySelector('#navbar-toggle').addEventListener('click', function () {
                this.classList.toggle('active');
            });

        });
    })(jQuery);
    // Navigation End 

    $('.slider').slick({
        autoplay: true,
        autoplayspeed: 300,
        pauseonhover: false,
        arrows: true,
        prevArrow: '.prev-btn',
        nextArrow: '.next-btn',
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

});
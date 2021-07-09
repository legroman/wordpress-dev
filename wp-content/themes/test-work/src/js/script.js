$(document).ready(function () {
    const width = document.querySelector('.header__left-side').offsetWidth;

    $('.team__banner').css('width', width)

    $("a.bottom-link").on('click', function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 500,
            easing: "swing"
        });
        return false;
    });


    $('.team__specialists img').on('click', function () {
        $(this).parent().children('.team__list').slideToggle( "slow", function() {
            // Animation complete.
        });

        $(this).parent().children('h4').text(function (i, text) {

            return text === "СХОВАТИ СПИСОК" ? "ПЕРЕГЛЯНУТИ СПЕЦІАЛІСТІВ" : "СХОВАТИ СПИСОК";
        })

        $(this).toggleClass('rotate');
        $(this).toggleClass('rotate-reset');
    })
})
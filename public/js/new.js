$(document).ready(function () {
    $(".header__burger").click(function (event) {
        $(".header__burger, .menu").toggleClass("active");
        $("body").toggleClass("lock");
        $(".menu").toggleClass("open");
    });
    $(".menu__link").click(function (event) {
        $(".header__burger, .menu").removeClass("active");
        $("body").removeClass("lock");
    });

    $(document).ready(function () {
        $(".home__slider").slick({
            arrows: false,
            dots: true,
            slidesToShow: 1,
        });
    });

    $(document).ready(function () {
        $(".our-menu__slider").slick({
            arrows: false,
            dots: true,
            slidesToShow: 1,
            initialSlide: 1,
            infinite: false,
        });
    });
});
let start = 0;
otomatis();

function otomatis() {
    const home__slider = document.querySelectorAll(".slider");

    for (let i = 0; i < home__slider.length; i++) {
        home__slider[i].style.display = "none";
    }

    if (start >= home__slider.length) {
        start = 0;
    }

	home__slider[start].style.display = "block";
    console.log("gambar ke" + start);
    start++;

    setTimeout(otomatis, 2000);
}

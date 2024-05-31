$(function () {
    var swiper = new Swiper(".visual_swiper", {
        loop: true,
        speed : 1000,
        navigation: {
            nextEl: ".visual_next",
            prevEl: ".visual_prev",
        },
        pagination: {
            el: ".visual-pagination",
            type : 'fraction',
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    var swiper = new Swiper(".about_swiper", {
        loop: true,
        speed : 1000,
        centeredSlides: true,
        navigation: {
            nextEl: ".about_next",
            prevEl: ".about_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2.2,
                spaceBetween: 55,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 25,
            },
        },
    });

    var swiper = new Swiper(".roompre_swiper", {
        loop: true,
        speed : 1000,
        navigation: {
            nextEl: ".roompre_next",
            prevEl: ".roompre_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        pagination: {
            el: ".roompre-pagination",
        },
        breakpoints: {
            768: {
                slidesPerView: 1.4,
                spaceBetween: 64,
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 25,
            },
        },
    });

    var swiper = new Swiper(".special_swiper", {
        loop: true,
        speed : 1000,
        navigation: {
            nextEl: ".special_next",
            prevEl: ".special_prev",
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        pagination: {
            el: ".special-pagination",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 64,
            },
            0: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
        },
    });
})
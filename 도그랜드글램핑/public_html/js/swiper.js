$(function () {

    // 메인 & 룸 - 룸리스트
    var roomlist = new Swiper(".room_list", {
        slidesPerView: 1,
        spaceBetween: 10,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        // pagination: {
        // el: ".swiper-pagination",
        // clickable: true,
        // },
        navigation: {
        nextEl: ".rl_next",
        prevEl: ".rl_prev",
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            500: {
                slidesPerView: 1,
            }
        },
    });

    // about 페이지 - visual
    var swiper = new Swiper(".about_swiper01", {
        loop: true,
        pagination: {
            el: ".about_swiper01-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".about_swiper01-next",
            prevEl: ".about_swiper01-prev",
        },
    });

    // about 페이지 - visual02
    var swiper = new Swiper(".about_swiper02", {
        loop: true,
        pagination: {
            el: ".about_swiper02-pagination",
            type: "fraction",
        },
    });

    // about 페이지 - visual03
    var swiper = new Swiper(".about_swiper03", {
        loop: true,
        pagination: {
            el: ".about_swiper03-pagination",
            type: "fraction",
        },
    });

    // about 페이지 - visual04
    var swiper = new Swiper(".about_swiper04", {
        loop: true,
        pagination: {
            el: ".about_swiper04-pagination",
            type: "fraction",
        },
    });


    // room 페이지 - visual
    var swiper = new Swiper(".room_swiper01", {
        loop: true,
        pagination: {
            el: ".room_swiper01-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".room_swiper01-next",
            prevEl: ".room_swiper01-prev",
        },
    });


    // room 페이지 - sub_swiper
    var swiper = new Swiper(".room_sub_swiper", {
        loop: true,
        pagination: {
            el: ".room_sub_swiper-pagination",
            type: "bullets",
        },
    });



     // special 페이지 - visual
    var swiper = new Swiper(".special_swiper", {
        loop: true,
        pagination: {
            el: ".special_swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".special_swiper-next",
            prevEl: ".special_swiper-prev",
        },
    });
})

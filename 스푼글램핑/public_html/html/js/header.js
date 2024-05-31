$(function () {
    var header = $(".header");
    var btn = header.find(".content .btn");
    var menu = btn.find(".menu");
    var close = btn.find(".close");

    var sidemenu = $(".sidemenu");

    menu.on("click", function() {
        sidemenu_show()
    })
    close.on("click", function() {
        sidemenu_show()
    })

    function sidemenu_show() {
        if (header.is(".on") == true ) {
            header.removeClass("on");
            sidemenu.fadeOut(500, function() {
                sidemenu.removeClass("show");
            })
        } else {
            header.addClass("on");
            sidemenu.fadeIn(500, function() {
                sidemenu.addClass("show");
            })
        }
    }

    // 모바일 상태 변수
    var device_width = $(window).width();

    if (device_width < 768) {
        sidemenu.find(".content .menu_cont .gnb_list .title").on("click", function() {
            if ($(this).next(".gnb_cont").is(":visible") == true) {
                // console.log("보이는상태");
                $(this).next(".gnb_cont").slideUp(300);  
            } else {
                // console.log("안보이는상태");
                console.log( $(this).parent());
                $(this).parent().siblings().find(".gnb_cont").slideUp(300);
                $(this).next(".gnb_cont").slideDown(300);  

                // $(this).parent(".gnb_list").find(".gnb_cont").slideUp(300);
                // $(this).next(".gnb_cont").slideDown(300);
            }
        })


    }



    
})
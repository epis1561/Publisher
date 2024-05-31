$(function () {
    var room_info = $(".room_info");
    var room_detail_info = room_info.find(".content .main_img .room_detail_info");
    var detail_btn = room_info.find(".content .main_img .detail_btn");

    detail_btn.on("click", function() {
        if (room_detail_info.is(":visible") == false) {
            room_detail_info.fadeIn(500);
            detail_btn.addClass("on");
        } else {
            room_detail_info.fadeOut(500);
            detail_btn.removeClass("on");
        }
    })
})
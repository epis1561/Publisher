$(function () {
    // visual scroll gauge
    var visual = $(".visual");
    var ani = visual.find(".content .ani");
    var bar = ani.find(".bar");

    var open = true;

    setInterval(() => {
        open = !open;

        // console.log(open);
        if (open == true) {
            bar.find(".gauge_01").addClass("on");
            bar.find(".gauge_01").removeClass("off");
            
            bar.find(".gauge_02").addClass("off");
            bar.find(".gauge_02").removeClass("on");
        } else {
            bar.find(".gauge_01").addClass("off");
            bar.find(".gauge_01").removeClass("on");
            
            bar.find(".gauge_02").addClass("on");
            bar.find(".gauge_02").removeClass("off");
        }
    }, 2000);
})
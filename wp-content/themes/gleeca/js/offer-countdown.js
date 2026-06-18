var back_top_btn = $("#back-to-top");
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        back_top_btn.addClass("show");
    } else {
        back_top_btn.removeClass("show");
    }
});
back_top_btn.on("click", function (e) {
    $("html, body").animate({ scrollTop: 0 }, "300");
});
AOS.init();
function bodyFixed2() {
    var windowWidth = $(window).width();

    if ($("#sticky_doc2").length) {
        if (windowWidth > 576) {
            var tops = $("#sticky_doc2");
            var topOffset = tops.offset().top;
            var blogForm = $('.blog_comment_box');
            var blogFormTop = blogForm.offset().top -670;

            $(window).on("scroll", function () {
                var scrolls = $(window).scrollTop();
                if (scrolls >= topOffset && scrolls <= blogFormTop ) {
                    tops.addClass("stick");
                } else {
                    tops.removeClass("stick");
                }
            });
            $('.scroll').click(function() {  
                $(window).on("scroll", function () {
                    var hackersOffset = $(".scroll").offset().top;
                    var scrolls = $(window).scrollTop();
                    if (scrolls < hackersOffset) {
                        $(".scroll").css("padding-top", "0px");
                    }
                })
            });
        }
    }
}
bodyFixed2();

var start = new Date();
start.setDate(start.getDate());
start.setHours(0,0,0,0) 
var endTime = new Date("September 1, 2022 17:00:00 PDT");
var now   = new Date();
var diff = endTime.getTime() / 1000 - now.getTime() / 1000;
var clock = $('#clock1').FlipClock(diff, {
    clockFace: 'DailyCounter',
    countdown: true,
    showSeconds: true
});
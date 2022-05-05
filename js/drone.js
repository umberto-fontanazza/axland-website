(function ($) {
    'use strict';
    
    // ====== Move Drone =========
    var position = $(window).scrollTop(); 

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if(scroll > position) {
            $("#frame").addClass("down-150");
            $("#esc").addClass("down-100");
            $("#bot-spacer").addClass("down-100");
            $("#motor").addClass("down-50");
            $("#fc").addClass("down-50");

            $("#nut").addClass("up-200");
            $("#prop").addClass("up-100");
            $("#top-spacer").addClass("up-75");
            $("#xt60").addClass("up-50");
            $("#wire").addClass("up-50");
            $("#fpv").addClass("up-100");
            $("#gopro").addClass("up-150");
            $("#vtx").addClass("up-100");
        } else {
            $("#frame").removeClass("down-150");
            $("#esc").removeClass("down-100");
            $("#bot-spacer").removeClass("down-100");
            $("#motor").removeClass("down-50");
            $("#fc").removeClass("down-50");

            $("#nut").removeClass("up-200");
            $("#prop").removeClass("up-100");
            $("#top-spacer").removeClass("up-75");
            $("#xt60").removeClass("up-50");
            $("#wire").removeClass("up-50");
            $("#fpv").removeClass("up-100");
            $("#gopro").removeClass("up-150");
            $("#vtx").removeClass("up-100");
        }
        position = scroll;
    });
})(jQuery)
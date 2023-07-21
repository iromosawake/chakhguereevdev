jQuery(document).ready(function ($) {
    $(".clickable-row").click(function () {
        window.location = $(this).data("href");
    });

    $("#rest").on('click', function () {
        // alert("my message to you");
        $("#rest").addClass("d-none");
        $('.timer').startTimer({
            onComplete: function (element) {
                // $("#next").removeClass("d-none");
                $('html, body').addClass('bodyTimeoutBackground');
            }
        }).on('click', function () {
            $(".jst-hours").remove();
            $(".jst-minutes").remove();
            $(".jst-seconds").remove();
            $("#next").addClass("d-none");
            $("#rest").removeClass("d-none");
        });
    });


});



$(function() {
    var interval = 30;
    var duration= 1000;
    var shake= 3;
    var vibrateIndex = 0;
    var selector = $('#frame');
    $('#activate').click(
        function(){
            // navigator.vibrate(200);
            vibrateIndex = setInterval(vibrate, interval);
            setTimeout(stopVibration, duration);
        });

    var vibrate = function(){
        $(selector).stop(true,false)
            .css({position: 'relative',
                left: Math.round(Math.random() * shake) - ((shake + 1) / 2) +'px',
                top: Math.round(Math.random() * shake) - ((shake + 1) / 2) +'px'});
    }

    var stopVibration = function() {
        clearInterval(vibrateIndex);
        $(selector).stop(true,false)
            .css({position: 'static', left: '0px', top: '0px'});
    };

});
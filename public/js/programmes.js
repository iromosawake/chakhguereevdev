jQuery(document).ready(function ($) {
    $(".clickable-row").click(function () {
        window.location = $(this).data("href");
    });

    $("#rest").on("click tap touchstart", function () {
        $("#rest").addClass("d-none");
        $('.timer').startTimer({
            onComplete: function (element) {
                // $("#next").removeClass("d-none");
                $('html, body').addClass('bodyTimeoutBackground');
            }
        }).on("click tap touchstart",function () {
            $( ".jst-hours" ).remove();
            $( ".jst-minutes" ).remove();
            $( ".jst-seconds" ).remove();
            $("#next").addClass("d-none");
            $("#rest").removeClass("d-none");
        });
    });


});

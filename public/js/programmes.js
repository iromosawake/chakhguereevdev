jQuery(document).ready(function ($) {
    $(".clickable-row").click(function () {
        window.location = $(this).data("href");
    });

    $("#rest").click(function () {
        $("#rest").addClass("d-none");
        $('.timer').startTimer({
            onComplete: function (element) {
                // $("#next").removeClass("d-none");
                $('html, body').addClass('bodyTimeoutBackground');
            }
        }).click(function () {
            $( ".jst-hours" ).remove();
            $( ".jst-minutes" ).remove();
            $( ".jst-seconds" ).remove();
            $("#next").addClass("d-none");
            $("#rest").removeClass("d-none");
        });
    });


});

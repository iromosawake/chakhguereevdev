jQuery(document).ready(function ($) {
    $(".clickable-row").click(function () {
        window.location = $(this).data("href");
    });

    //chronomètre de récupération
    let chrono = false;
    const rest = document.querySelector('#rest');
    rest.addEventListener("click", (e) => {
        if (!chrono) {
            let reinit = rest.textContent;
            let time = parseInt(rest.innerText.split(' ', 2)[1]);
            chrono = true;
            const timerId = setInterval(() => {
                rest.innerHTML = time--;
                    if (time <= -1) {
                        chrono = false;
                        rest.innerHTML = reinit;
                        clearInterval(timerId);
                    }
                },
                1000);
        }
    });



//vibration
    $(function () {
        var interval = 30;
        var duration = 1000;
        var shake = 3;
        var vibrateIndex = 0;
        var selector = $('#frame');
        $('#activate').click(
            function () {
                // navigator.vibrate(200);
                vibrateIndex = setInterval(vibrate, interval);
                setTimeout(stopVibration, duration);
            });

        var vibrate = function () {
            $(selector).stop(true, false)
                .css({
                    position: 'relative',
                    left: Math.round(Math.random() * shake) - ((shake + 1) / 2) + 'px',
                    top: Math.round(Math.random() * shake) - ((shake + 1) / 2) + 'px'
                });
        }

        var stopVibration = function () {
            clearInterval(vibrateIndex);
            $(selector).stop(true, false)
                .css({position: 'static', left: '0px', top: '0px'});
        };

    });
});
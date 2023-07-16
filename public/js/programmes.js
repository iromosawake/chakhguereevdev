jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });

    const timerElement = document.querySelector('#darkula_mode')
     temps = timerElement.innerText;
    console.log(temps);
    // = "99"
    function diminuerTemps() {
        timerElement.innerText = temps;
        temps--;
    }


    setInterval(diminuerTemps, 1000)
});
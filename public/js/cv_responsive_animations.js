$(document).ready(function () {
    function initial_view() {
        $("#about").hide();
        $("#skills").hide();
        $("#experience").hide();
        $("#education").hide();
        $("#portfolio").hide();
        $("#about").fadeIn();
        $("#about_butt").addClass('active');

    };

    if (window.matchMedia("(min-width: 1281px)").matches) {
        initial_view();
        $("#about_butt").click(function () {
            $("#about_butt").addClass('active');
            $("#skills_butt").removeClass('active');
            $("#experience_butt").removeClass('active');
            $("#education_butt").removeClass('active');
            $("#portfolio_butt").removeClass('active');
            $("#about").fadeIn();

            $("#skills").hide();
            $("#experience").hide();
            $("#education").hide();
            $("#portfolio").hide();
        });

        $("#skills_butt").click(function () {
            $("#skills_butt").addClass('active');
            $("#about_butt").removeClass('active');
            $("#experience_butt").removeClass('active');
            $("#education_butt").removeClass('active');
            $("#portfolio_butt").removeClass('active');
            $("#skills").fadeIn();

            $("#about").hide();
            $("#experience").hide();
            $("#education").hide();
            $("#portfolio").hide();
        });

        $("#experience_butt").click(function () {
            $("#experience_butt").addClass('active');
            $("#about_butt").removeClass('active');
            $("#skills_butt").removeClass('active');
            $("#education_butt").removeClass('active');
            $("#portfolio_butt").removeClass('active');
            $("#experience").fadeIn();

            $("#about").hide();
            $("#skills").hide();
            $("#education").hide();
            $("#portfolio").hide();
        });

        $("#education_butt").click(function () {
            $("#education_butt").addClass('active');
            $("#about_butt").removeClass('active');
            $("#skills_butt").removeClass('active');
            $("#experience_butt").removeClass('active');
            $("#portfolio_butt").removeClass('active');
            $("#education").fadeIn();

            $("#about").hide();
            $("#skills").hide();
            $("#experience").hide();
            $("#portfolio").hide();
        });

        $("#portfolio_butt").click(function () {
            $("#portfolio_butt").addClass('active');
            $("#about_butt").removeClass('active');
            $("#skills_butt").removeClass('active');
            $("#experience_butt").removeClass('active');
            $("#education_butt").removeClass('active');
            $("#portfolio").fadeIn();

            $("#about").hide();
            $("#skills").hide();
            $("#experience").hide();
            $("#education").hide();
        });
    }

    if (localStorage.getItem('darkula')) {
        document.querySelector('body').classList.toggle('dark');
    } else {

    }


});

function darkulaMode() {
    const darkula = document.querySelector('#darkula_mode');
    if (darkula.getAttribute("class") === 'bi bi-brightness-low-fill') {
        darkula.setAttribute("class", 'bi bi-brightness-low');
        document.querySelector('body').classList.toggle('dark');
        localStorage.setItem("darkula", "actif");
    } else {
        localStorage.removeItem("darkula");
        darkula.setAttribute("class", 'bi bi-brightness-low-fill');
        document.querySelector('body').classList.remove('dark');
    }
}

